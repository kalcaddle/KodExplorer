<?php
/*
* @link http://kodcloud.com/
* @author warlee | e-mail:kodcloud@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kodcloud.com/tools/license/license.txt
*/

//用户管理【管理员配置用户，or用户空间大小变更】
class systemMember extends Controller{
	public static $staticSql = null;
	private $sql;
	function __construct()    {
		parent::__construct();
		$this->tpl = TEMPLATE.'member/';
		$this->sql= self::loadData();
	}

	//保证只加载一次文件
	public static function loadData(){
		if(is_null(self::$staticSql)){
			self::$staticSql = systemMemberData();
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
			$pathinfo = _path_info_more(iconv_system(USER_PATH.$info['path'].'/'));
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

	// 组删除后，所属该组的用户都删除；全局调用
	public static function groupRemoveUserUpdate($groupID){
		$sql = self::loadData();
		$userAll = $sql->get();
		foreach ($userAll as $key => $val) {
			if(in_array($groupID,array_keys($val['groupInfo']))){
				unset($val['groupInfo'][$groupID]);
				$sql->set($val['userID'],$val);
			}
		}
	}
	// 权限组删除，所属该组的用户删除权限id
	public static function roleRemoveUserUpdate($roleId){
		$sql = self::loadData();
		$userAll = $sql->get();
		foreach ($userAll as $key => $val) {
			if($val['role'] == $roleId){
				$val['role'] = '';
				$sql->set($val['userID'],$val);
			}
		}
	}

	//获取当前用户在某个群组的权限id; false|[id]
	//兼容旧版本 'read'|'write'|false
	public static function userAuthGroup($groupID){
		$result = self::_userAuthGroupRole($groupID);
		if($result === false) return false;

		$result = $result == 'read'  ? "1" : $result;
		$result = $result == 'write' ? "2" : $result;
		if(!is_array($GLOBALS['config']['pathRoleGroup'][$result])){
			$result = "1";
		}
		return $result;
	}
	

	//获取在某个组的用户
	public static function userAtGroup($groupID){
		$sql = self::loadData();
		$allUser = self::_filterList($sql->get());
		if($groupID=='0'){
			return $allUser;
		}
		$selectUser = array();
		foreach ($allUser as $val) {
			if(isset($val['groupInfo'][$groupID])){
				$selectUser[] = $val;
			}
		}
		return $selectUser;
	}


	//缓存用户共享对象=======================================
	public static function userShareSql($userID){
		static $userShareArr;
		if(!is_array($userShareArr)){
			$userShareArr = array();
		}
		if(!isset($userShareArr[$userID])){
			$userInfo = systemMember::getInfo($userID);
			if(!isset($userInfo['path'])){
				return;
			}
			$sql = new FileCache(USER_PATH.$userInfo['path'].'/data/share.php');
			$userShareArr[$userID] = $sql;
		}
		return $userShareArr[$userID];
	}
	//获取某个用户共享列表
	public static function userShareList($userID){
		$sql = self::userShareSql($userID);
		$list = $sql->get();
		if($userID == $_SESSION['kodUser']['userID']){//自己的列表则展示密码；否则清空密码
			return $list;
		}

		//含有密码则不罗列
		foreach($list as $key=>&$val){
			if($val['sharePassword']){
				unset($list[$key]);
			}
		}
		return $list;
	}
	//获取某个用户某个共享
	public static function userShareGet($userID,$name){
		$sql = self::userShareSql($userID);
		return $sql->get('name',$name);
	}

	//判断自己对某个组的权限 return false/'read'/'write'    
	public static function _userAuthGroupRole($groupID){
		$sql = self::loadData();
		$userInfo  = $sql->get($_SESSION['kodUser']['userID']);
		$groupInfo = $userInfo['groupInfo'];//自己所在的组
		if(!is_array($groupInfo)){
			return false;
		}
		if(isset($groupInfo[$groupID])){
			return $groupInfo[$groupID];
		}

		$role = false;
		$plist = array();
		foreach ($groupInfo as $key => $value) {//
			$group = systemGroup::getInfo($key);//测试组，是否在用户所在组的子组
			$arr = explode(',',$group['children']);
			if (in_array($groupID,$arr)) {
				//return $groupInfo[$key];	// 找到最近的父级部门,而非第一个
				if(empty($plist)){
					$plist = $arr;
					$role = $groupInfo[$key];
				}else if(in_array($group['groupID'], $plist)){
					$plist = $arr;
					$role = $groupInfo[$key];
				}
			}
		}
		return $role;
	}

	//删除 path id
	public static function _filterList($list,$filter_key = 'path'){
		if($GLOBALS['isRoot']) return $list;
		foreach ($list as $key => &$val) {
			unset($val[$filter_key]);
			unset($val['password']);
		}
		return $list;
	}



	//后台管理=====================
	//管理员调用===================
	/**
	 * 获取用户列表数据,根据用户组筛选；默认输出所有用户
	 */
	public function get($groupID='0') {
		$result = self::userAtGroup($groupID);
		foreach($result as $key=>&$val){
			unset($val['password']);
		}
		show_json($result);
	}

	/**
	 * 获取用户列表数据,根据用户组筛选；默认输出所有用户
	 */
	public function getByName($name = '') {
		if(!$name){
			$name = $this->in['name'];
		}
		$result = $this->sql->get(array('name',$name));
		if(is_array($result) && count($result)>0){
			$arr = array_values($result);
			unset($arr[0]['password']);
			show_json($arr[0]);
		}
		show_json(LNG("not_exists"),false);
	}

	/**
	 * 用户添加
	 * systemMember/add&name=warlee&password=123&sizeMax=0&groupInfo={"0":"read","10":"write"}&role=default
	 */
	public function add($user = false){
		if (!isset($this->in['name']) || //必填项
			!isset($this->in['password']) ||
			!isset($this->in['role']) ||
			!isset($this->in['groupInfo']) || //{"0":"read","100":"read"}
			!isset($this->in['sizeMax'])
			){
			show_json(LNG('data_not_full'),false);
		}

		$name = trim(rawurldecode($this->in['name']));
		$password = rawurldecode($this->in['password']);
		$groupInfo = json_decode(rawurldecode($this->in['groupInfo']),true);		
		if(!is_array($groupInfo)){
			show_json(LNG('systemMember_group_error'),false);
		}
		if($this->sql->get(array('name',$name))){
			show_json(LNG('error_repeat'),false,$name);
		}

		//非系统管理员，不能添加系统管理员
		if(!$GLOBALS['isRoot'] && $this->in['role']=='1'){
			show_json(LNG('group_role_error'),false);
		}

		$userArray = array();
		if(isset($this->in['isImport'])){
			$arr = explode("\n",$name);
			foreach($arr as $v){
				if(trim($v)!=''){
					$userArray[] = trim($v);
				}
			}
		}else{
			$userArray[] = $name;
		}
		$nickName = 0;
		if(isset($this->in['nickName'])){
			$nickName = trim(rawurldecode($this->in['nickName']));
		}


		//批量添加
		$errorArr = array();
		foreach ($userArray as $val) {
			if($this->sql->get('name',$val)){//已存在
				$errorArr[] = $val;
				continue;
			}
			$userID = $this->sql->getMaxId().'';
			$userInfo = array(
				'userID'	=>  $userID,
				'name'      =>  $val,
				'nickName'	=>  $nickName ? $nickName : $val,
				'password'  =>  md5($password),
				'role'      =>  $this->in['role'],
				'config'    =>  array('sizeMax' => floatval($this->in['sizeMax']),//M
									  'sizeUse' => 1024*1024),//总大小，目前使用大小
				'groupInfo' =>  $groupInfo,
				'path'      =>  make_path($val),
				'status'    =>  1,  //0禁用；1启用
				'lastLogin'	=>  '', //最后登录时间 首次登陆则激活
				'createTime'=> time(),
			);

			if(file_exists(iconv_system(USER_PATH.$userInfo['path'])) ){
				$userInfo['path'] = $userInfo['path'].'_'.$userInfo['userID'];
			}
			//用户组目录
    		if( isset($this->in['homePath'])){
    			$homePath = _DIR(rawurldecode($this->in['homePath']));
    			if(file_exists($homePath)){
    				$userInfo['homePath'] = iconv_app($homePath);
    			}
    		}else{
    			unset($userInfo['homePath']);
    		}
			if ($this->sql->set($userID,$userInfo)) {
				$this->initDir($userInfo['path']);
			}else{
				$errorArr[] = $val;
			}
		}

		$success = count($userArray)-count($errorArr);
		$msg = LNG('success');
		if(count($errorArr) > 0 ){
			$msg = LNG('word_success').' : '.$success.',  ';//部分失败
			if($success == 0 ){
				$msg = LNG('error_repeat');
			}
			$msg .= LNG('word_error').' : '.count($errorArr);
		}
		if($success==count($userArray)){
			show_json($msg,true,$success);
		}else{
			show_json($msg,false,implode("\n",$errorArr));
		}
	}

	/**
	 * 编辑 systemMember/edit&userID=101&name=warlee&password=123&sizeMax=0
	 * &groupInfo={%220%22:%22read%22,%22100%22:%22read%22}&role=default
	 */
	public function edit() {
		if (!$this->in['userID']) show_json(LNG('data_not_full'),false);

		$userID = $this->in['userID'];
		$userInfo = $this->sql->get($userID);
		if(!$userInfo){//用户不存在,或者默认用户不能修改
			show_json(LNG('error'),false);
		}
		//非系统管理员，不能将别人设置为系统管理员
		if(!$GLOBALS['isRoot'] && $this->in['role']=='1'){
			show_json(LNG('group_role_error'),false);
		}
		//非系统管理员，不能修改系统管理员
		if(!$GLOBALS['isRoot'] && $userInfo['role']=='1'){
			show_json(LNG('group_role_error_admin'),false);
		}

		//管理员自己不能添加自己到非管理员组
		if($GLOBALS['isRoot'] 
			&& $_SESSION['kodUser']['userID']==$userID 
			&& $this->in['role']!='1'){
			show_json(LNG('error'),false);
		}

		//修改为一个已存在的名字则提示
		$theName = trim(rawurldecode($this->in['name']));
		if($userInfo['name']!=$theName){
			if($this->sql->get(array('name',$theName))){
				show_json(LNG('error_repeat'),false);
			}
		}

		$this->in['name'] = rawurlencode($theName);//还原
		$editArr = array('name','nickName','role','password','groupInfo','homePath','status','sizeMax');
		foreach ($editArr as $key) {
			if(!isset($this->in[$key])) continue;            
			$userInfo[$key] = rawurldecode($this->in[$key]);
			if($key == 'password'){
				$userInfo['password'] = md5($userInfo[$key]);
			}else if($key == 'sizeMax'){
				$userInfo['config']['sizeMax'] = floatval($userInfo[$key]);
			}else if($key == 'groupInfo'){//分组信息
				$userInfo['groupInfo'] = json_decode(rawurldecode($this->in['groupInfo']),true);
			}
		}

		//用户组目录
		if( isset($this->in['homePath'])){
			$userInfo['homePath'] = _DIR(rawurldecode($this->in['homePath']));
			if(!file_exists($userInfo['homePath'])){
				show_json(LNG('not_exists'),false);
			}
			$userInfo['homePath'] = iconv_app($userInfo['homePath']);
		}else{
			unset($userInfo['homePath']);
		}
		if($this->sql->set($userID,$userInfo)){
			//self::spaceChange($userID);//重置用户使用空间
			show_json(LNG('success'),true,$userInfo);
		}
		show_json(LNG('error_repeat'),false);
	}

	/**
	 * 用户批量操作 systemMember/doAction&action=&userID=[101,222,131]&param=
	 * action : 
	 * -------------
	 * del                  删除用户
	 * statusSet            启用&禁用 param=0/1
	 * roleSet              权限组 param=roleID
	 * groupReset           重置分组 param=group_json
	 * groupRemoveFrom    从某个组删除 param=groupID
	 * groupAdd            添加到某个分组 param=group_json
	 */ 
	public function doAction() {
		if (!isset($this->in['userID'])){
			show_json(LNG('username_can_not_null'),false);
		}
		$action = $this->in['action'];
		$userArr = json_decode($this->in['userID'],true);
		if(!is_array($userArr)){
			show_json(LNG('error'),false);
		}
		if (in_array('1', $userArr)){//批量处理，不处理系统管理员admin
			show_json(LNG('default_user_can_not_do'),false);
		}
		foreach ($userArr as $userID) {
			switch ($action) {
				case 'del'://删除
					$userInfo = $this->sql->get($userID);    
					if($this->sql->remove($userID) && $userInfo['name']!=''){
						del_dir(iconv_system(USER_PATH.$userInfo['path'].'/'));
					}
					break;
				case 'statusSet'://禁用&启用
					$status = intval($this->in['param']);
					$this->sql->set(array('userID',$userID),array('status',$status)); 
					break;
				case 'spaceSet'://批量设置用户空间大小
					$value = intval($this->in['param']);
					$userInfo = $this->sql->get($userID);
					$userInfo['config']['sizeMax'] = $value;
					$this->sql->set($userID,$userInfo);
					break;
				case 'roleSet'://设置权限组
					$role = $this->in['param'];
					//非系统管理员，不能将别人设置为系统管理员
					if(!$GLOBALS['isRoot'] && $role=='1'){
						show_json(LNG('group_role_error'),false);
					}
					$this->sql->set(array('userID',$userID),array('role',$role)); 
					break;
				case 'groupReset'://设置分组
					$groupArr = json_decode($this->in['param'],true);
					if(!is_array($groupArr)){
						show_json(LNG('error'),false);
					}
					$this->sql->set(array('userID',$userID),array('groupInfo',$groupArr));  
					break;
				case 'groupRemoveFrom'://从某个组移除
					$groupID = $this->in['param'];
					$userInfo = $this->sql->get($userID);
					unset($userInfo['groupInfo'][$groupID]);
					$this->sql->set($userID,$userInfo);   
					break;
				case 'groupAdd'://添加到某个组
					$groupArr = json_decode($this->in['param'],true);
					if(!is_array($groupArr)){
						show_json(LNG('error'),false);
					}
					$userInfo = $this->sql->get($userID);
					foreach ($groupArr as $key => $value) {
						$userInfo['groupInfo'][$key] = $value;
					}
					$this->sql->set($userID,$userInfo);
				default:break;
			}
		}
		show_json(LNG('success'));
	}

	public function initInstall(){
		$sql  = systemMember::loadData();
		$list = $sql->get();
		foreach ($list as $id => &$info) {//创建用户目录及初始化
			$path = make_path($info['name']);
			$this->initDir($path);
			$info['path'] = $path;
			$info['createTime'] = time();
		}
		$sql->reset($list);

		//初始化群组目录
		$homeFolders = explode(',',$this->config['settingSystem']['newGroupFolder']);
		$sql = systemGroup::loadData();
		$list = $sql->get();
		foreach ($list as $id => &$info) {//创建用户目录及初始化
			$path = make_path($info['name']);
			$rootPath = GROUP_PATH.$path.'/';
			foreach ($homeFolders as $dir) {
				mk_dir(iconv_system($rootPath.'home/'.$dir));
			}
			$info['path'] = $path;
			$info['createTime'] = time();
		}
		$sql->reset($list);
	}

	//============内部处理函数=============
	/**
	 *初始化用户数据和配置。
	 */    
	public function initDir($path){
		$userFolder = array('home','recycle_kod','data');
		$homeFolders = explode(',',$this->config['settingSystem']['newUserFolder']);
		$rootPath = USER_PATH.$path.'/';
		foreach ($userFolder as $dir) {
			mk_dir(iconv_system($rootPath.$dir));
		}
		foreach ($homeFolders as $dir) {
			mk_dir(iconv_system($rootPath.'home/'.$dir));
		}
		FileCache::save($rootPath.'data/config.php',$this->config['settingDefault']);
	}
}
