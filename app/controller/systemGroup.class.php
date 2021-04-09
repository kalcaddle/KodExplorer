<?php
/*
* @link http://kodcloud.com/
* @author warlee | e-mail:kodcloud@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kodcloud.com/tools/license/license.txt
*/

//群组管理【管理员调用，or组空间大小变更】
//根目录id为1==》共享空间
class systemGroup extends Controller{
	public static $staticSql = null;
	private $sql;
	function __construct()    {
		parent::__construct();
		$this->sql= self::loadData();
		$this->_init();
	}

	//保证只加载一次文件
	public static function loadData(){
		if(is_null(self::$staticSql)){
			self::$staticSql = systemGroupData();
		}
		return self::$staticSql;
	}
	public static function getInfo($theId){
		$sql = self::loadData();
		return $sql->get($theId);
	}

	/**
	 * 空间使用变更
	 * @param  [type] $theId   [userID or groupID]
	 * @param  [type] $sizeAdd [变更的大小  sizeMax G为单位   sizeUse Byte为单位]
	 */
	public static function spaceChange($theId,$sizeAdd=false){
		$sql = self::loadData();
		$info = $sql->get($theId);
		if(!is_array($info)){
			show_json(LNG('data_not_full'),false);
		}
		if($sizeAdd===false){//重置用户空间；避免覆盖、解压等导致的问题
			$pathinfo = _path_info_more(GROUP_PATH.$info['path'].'/');
			$currentUse  = $pathinfo['size'];
			if(isset($info['homePath']) && file_exists(iconv_system($info['homePath']))){
				$pathinfo = _path_info_more(iconv_system($info['homePath']));
				$currentUse  += $pathinfo['size'];
			}
		}else{
			$currentUse = floatval($info['config']['sizeUse'])+floatval($sizeAdd);
		}
		$info['config']['sizeUse'] = $currentUse<0?0:$currentUse;
		$sql->set($theId,$info);
	}

	/**
	 * 空间剩余检测
	 * 1073741824 —— 1G
	 */
	public static function spaceCheck($theId){
		$sql = self::loadData();
		$info = $sql->get($theId);
		if(!is_array($info)){
			show_json(LNG('data_not_full'),false);
		}
		$sizeUse = floatval($info['config']['sizeUse']);
		$sizeMax = floatval($info['config']['sizeMax']);
		if($sizeMax!=0 && $sizeMax*1073741824<$sizeUse){
			show_json(LNG('space_is_full'),false);
		}
	}

	//管理员调用
	//===================
	private function _init(){
		if(count($this->sql->get()) > 0) return;
		$default = array(
			'1' =>array(
				'groupID'   =>  '1',
				'name'      =>  'root',
				'parentID'  =>  '',
				'children'  =>  '',
				'config'    =>  array('sizeMax' => floatval(1.5),
									  'sizeUse' => floatval(1024*1024)),//总大小，目前使用大小
				'path'      =>  'root',
				'createTime'=> time(),
			)
		);
		$this->sql->reset($default);
		$this->initDir($default[0]['path']);
	}
	//删除 path id
	public static function _filterList($list,$filter_key = 'path'){
		if($GLOBALS['isRoot']) return $list;
		foreach ($list as $key => &$val) {
			unset($val[$filter_key]);
		}
		return $list;
	}

	public function get() {
		$items = self::_filterList($this->sql->get());
		show_json($items,true);
	}

	/**
	 * 群组添加
	 * systemGroup/add&name=t1&parentID=101&sizeMax=0
	 */
	public function add(){
		if (!isset($this->in['name']) || //必填项
			!isset($this->in['parentID']) ||
			!isset($this->in['sizeMax'])
			) show_json(LNG('data_not_full'),false);

		//名称可以重复
		$groupID = $this->sql->getMaxId().'';
		$groupName = rawurldecode($this->in['name']);
		$groupInfo = array(
			'groupID'   =>  $groupID,
			'name'      =>  $groupName,
			'parentID'  =>  $this->in['parentID'],
			'children'  =>  '',
			'config'    =>  array('sizeMax' => floatval($this->in['sizeMax']),//G
								  'sizeUse' => floatval(1024*1024)),//总大小，目前使用大小
			'path'      =>  make_path($groupName),
			'createTime'=> time(),
		);
		if(file_exists(iconv_system(GROUP_PATH.$groupInfo['path'])) ){
			$groupInfo['path'] = make_path($groupInfo['path'].'_'.$groupInfo['groupID']);
		}

		//用户组目录
		if( isset($this->in['homePath'])){
				$homePath = _DIR(rawurldecode($this->in['homePath']));
			if(file_exists($homePath)){
				$groupInfo['homePath'] = iconv_app($homePath);
			}
		}else{
			unset($groupInfo['homePath']);
		}
		$this->_parentChildChange($groupInfo,true);//更新父节点
		if ($this->sql->set($groupID,$groupInfo)) {
			$this->initDir($groupInfo['path']);
			show_json(LNG('success'));
		}
		show_json(LNG('error'),false);
	}

	/**
	 * 编辑 systemGroup/edit&groupID=101&name=warlee&sizeMax=0
	 */
	public function edit() {
		if (!$this->in['groupID']) show_json(LNG('data_not_full'),false);
		$groupInfo = $this->sql->get($this->in['groupID']);
		if(!is_array($groupInfo)){//用户不存在
			show_json(LNG('not_exists'),false);
		}

		//name sizeMax parentID
		if(isset($this->in['name'])){
			$groupInfo['name'] = rawurldecode($this->in['name']);
		}
		if(isset($this->in['sizeMax'])){
			$groupInfo['config']['sizeMax'] = floatval($this->in['sizeMax']);
		}
		if( isset($this->in['parentID']) &&
			$groupInfo['parentID']!= '' && //根目录不能修改父节点
			$this->in['parentID']!=$groupInfo['parentID']){//父节点变更

			$childChange = explode(',',$groupInfo['children']);
			if( in_array($this->in['parentID'],$childChange) 
				|| $this->in['parentID'] == $this->in['groupID']){//不能移动到子节点；死循环
				show_json(LNG('current_has_parent'),false);
			}
			self::spaceChange($this->in['groupID']);//重置用户使用空间
			$this->_parentChildChange($groupInfo,false);//向所有父节点，删除包含此节点的children
			$groupInfo['parentID'] = $this->in['parentID'];
			$this->_parentChildChange($groupInfo,true);//向所有新的父节点，添加包含此节点的children
		}

		//用户组目录
		if( isset($this->in['homePath'])){
			$groupInfo['homePath'] = _DIR(rawurldecode($this->in['homePath']));
			if(!file_exists($groupInfo['homePath'])){
				show_json(LNG('not_exists'),false);
			}
			$groupInfo['homePath'] = iconv_app($groupInfo['homePath']);
		}else{
			unset($groupInfo['homePath']);
		}
		if($groupInfo != $this->sql->get($this->in['groupID'])){
			$this->sql->set($this->in['groupID'],$groupInfo);
		}
		show_json(LNG('success'));
	}

	/**
	 * 删除 ?systemMember/del&userID=102
	 */
	public function del() {
		if (!isset($this->in['groupID'])) show_json(LNG('data_not_full'),false);
		if (strlen($this->in['groupID']) <= 1) show_json(LNG('default_user_can_not_do'),false);
		$groupInfo = $this->sql->get($this->in['groupID']);
		$this->_parentChildChange($groupInfo,false);//向所有父节点，删除包含此节点的children
		$this->sql->set(//将该节点的子节点的父节点设置为根目录
			array('parentID',$groupInfo["groupID"]),
			array('parentID','1')
		);
		systemMember::groupRemoveUserUpdate($groupInfo["groupID"]);//用户所在组变更
		$this->sql->remove($this->in['groupID']);

		if( strlen($groupInfo['path'])!=0){
			del_dir(iconv_system(GROUP_PATH.$groupInfo['path'].'/'));
			show_json(LNG('success'));
		}
		show_json(LNG('error'),false);
	}


	//============内部处理函数=============
	//回溯更改节点的children
	private function _parentChildChange($groupInfo,$isAdd){
		if(!is_array($groupInfo)){
			show_json(LNG('not_exists'),false);
		}
		if($groupInfo['parentID'] == 1){
			return;
		}
		$childChange = explode(',',$groupInfo['children']);
		if($childChange[0]==''){
			unset($childChange[0]);
		}
		$childChange[] = $groupInfo['groupID'];//包含当前
		while(strlen($groupInfo['groupID'])>2){//节点id从100开始
			$groupInfo = $this->sql->get($groupInfo['parentID']);
			if(!is_array($groupInfo)){
				show_json(LNG('not_exists'),false);
			}
			$childrenNew = explode(',',$groupInfo['children']);
			if($childrenNew[0]==''){
				unset($childrenNew[0]);
			}
			if($isAdd){//添加
				foreach ($childChange as $key=>$val) {
					$childrenNew[] = $val;
				}
			}else{//删除
				foreach ($childrenNew as $key=>$val) {
					if(in_array($val,$childChange))
					unset($childrenNew[$key]);
				}
			}
			$childStr = implode(',',$childrenNew);
			if($childStr != $groupInfo['children']){//有变更
				$groupInfo['children'] = $childStr;
				$this->sql->set($groupInfo['groupID'],$groupInfo);
			}
		}
	}

	//
	/**
	 *初始化用户数据和配置。
	 */
	public function initDir($path){
		$root = array('home','data');
		$newGroupFolder = $this->config['settingSystem']['newGroupFolder'];
		$home = explode(',',$newGroupFolder);
		$path = GROUP_PATH.$path.'/';
		foreach ($root as $dir) {
			mk_dir(iconv_system($path.$dir));
		}
		foreach ($home as $dir) {
			mk_dir(iconv_system($path.'home/'.$dir));
		}
	}
}
