<?php
/*
* @link http://kodcloud.com/
* @author warlee | e-mail:kodcloud@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kodcloud.com/tools/license/license.txt
*/

class explorer extends Controller{
	public $path;
	public $user;
	public function __construct(){
		parent::__construct();
		$this->user = $_SESSION['kodUser'];
		if (isset($this->in['path'])) {
			//游客访问别人zip，解压到**目录；入口不检测权限
			if( ST.'.'.ACT == "explorer.unzip" ){
				if($this->in['pathTo']){
					_DIR($this->in['pathTo']);
				}else{
					_DIR($this->in['path']);
				}
				$GLOBALS['kodPathAuthCheck'] = true;
			}
			if( ST.'.'.ACT == "explorer.unzipList" ){
				$GLOBALS['kodPathAuthCheck'] = true;
			}
			$this->path = _DIR($this->in['path']);
			$this->_checkSystemPath();
		}
	}
	public function index(){
		$dir = '';
		if(isset($this->in['path']) && $this->in['path'] !=''){
			$dir = _DIR_CLEAR($this->in['path']);
			$dir = rtrim($dir,'/').'/';
		}
		$this->assign('dir',$dir);
		if ($this->config['forceWap']) {
			$this->display('explorerWap.html');
		}else{
			$this->display('index.html');
		}
	}

	//system virtual folder;
	private function _checkSystemPath(){
		if(!in_array(ACT,array('mkfile','mkdir','search',
			'pathCuteDrag','pathCopyDrag','pathPast','fileDownload'))){
			return;
		}
		if( $GLOBALS['kodPathType'] == KOD_USER_SHARE && 
			!strstr(trim($this->in['path'],'/'),'/')){//分享根目录
			show_json(LNG('error'),false);
		}
		if(in_array($GLOBALS['kodPathType'],array(
				KOD_USER_FAV,
				KOD_GROUP_ROOT_ALL,
				KOD_GROUP_ROOT_SELF
				)
			)){
			show_json(LNG('system_path_not_change'),false);
		}
	}

	public function pathInfo(){
		$infoList = json_decode($this->in['dataArr'],true);
		if(!$infoList){
			show_json(LNG('error'),false);
		}
		foreach ($infoList as &$val) {
			$val['path'] = _DIR($val['path']);
		}
		$data = path_info_muti($infoList,LNG('time_type_info'));
		if(!$data){
			show_json(LNG('not_exists'),false);
		}

		//属性查看，单个文件则生成临时下载地址。没有权限则不显示
		if (count($infoList)==1 && $infoList[0]['type']!='folder') {//单个文件
			$file = $infoList[0]['path'];
			if( $GLOBALS['isRoot'] || 
				$GLOBALS['auth']["explorer.fileDownload"]==1 ||
				isset($this->in['viewPage'])){
				$data['downloadPath'] = _make_file_proxy($file);
			}
			//所在部门，下载权限检测
			if($GLOBALS['kodPathRoleGroupAuth'] && !$GLOBALS['kodPathRoleGroupAuth']['explorer.fileDownload']){
				unset($data['downloadPath']);
			}
			if($data['size'] < 100*1024|| isset($this->in['getMd5'])){//100kb
				$data['fileMd5'] = @md5_file($file);
			}else{
				$data['fileMd5'] = "...";
			}

			//获取图片尺寸
			$ext = get_path_ext($file);
			if(in_array($ext,array('jpg','gif','png','jpeg','bmp')) ){
				$size = ImageThumb::imageSize($file);
				if($size){
					$data['imageSize'] = $size;
				}
			}
		}
		$data['path'] = _DIR_OUT($data['path']);
		show_json($data);
	}

	public function pathChmod(){
		$infoList = json_decode($this->in['dataArr'],true);
		if(!$infoList){
			show_json(LNG('error'),false);
		}
		$mod = octdec('0'.$this->in['mod']);
		$success=0;$error=0;
		foreach ($infoList as $val) {
			$path = _DIR($val['path']);
			if(chmod_path($path,$mod)){
				$success++;
			}else{
				$error++;
			}
		}
		$state = $error==0?true:false;
		$info = $success.' success,'.$error.' error';
		if (count($infoList) == 1 && $error==0) {
			$info = LNG('success');
		}
		show_json($info,$state);
	}

	public function mkfile(){
		$tplPath = BASIC_PATH.'static/others/newfile-tpl/';
		$repeatType = 'skip';
		if(isset($this->in['repeat_type'])){
			$repeatType = $this->in['repeat_type'];
		}
		$new= rtrim($this->path,'/');
		$parent = get_path_father($this->path);
		if(!file_exists($parent)){
			mk_dir($parent);
		}
		$new = get_filename_auto($new,'',$repeatType);//已存在处理 创建副本
		Hook::trigger("explorer.mkfileBefore",$new);
		if(@touch($new)){
			chmod_path($new,DEFAULT_PERRMISSIONS);
			if (isset($this->in['content'])) {
				file_put_contents($new,$this->in['content']);
			}else{
				$ext = get_path_ext($new);
				$tplFile = $tplPath.'newfile.'.$ext;
				if(file_exists($tplFile)){
					copy_dir($tplFile,$new);
				}
			}
			Hook::trigger("explorer.mkfileAfter",$new);
			show_json(LNG('create_success'),true,_DIR_OUT(iconv_app($new)) );
		}else{
			show_json(LNG('create_error'),false);
		}
	}

	public function mkdir(){
		$repeatType = 'skip';
		if(isset($this->in['repeat_type'])){
			$repeatType = $this->in['repeat_type'];
		}
		$new = rtrim($this->path,'/');
		$new = get_filename_auto($new,'',$repeatType);//已存在处理 创建副本
		if($this->_mkdir($new)){
			show_json(LNG('create_success'),true,_DIR_OUT(iconv_app($new)) );
		}else{
			show_json(LNG('create_error'),false);
		}
	}

	private function _mkdir($path){
		if(!$GLOBALS['isRoot']){
			//IIS6 解析漏洞  /a.php/2.jpg 得到解析
			$temp = str_replace('\\','/',$path);
			if(substr(rtrim($temp,'/'),-4) == '.php'){
				show_json(LNG('no_permission_ext'),false);
			}
		}
		Hook::trigger("explorer.mkdirBefore",$path);
		if(mk_dir($path,DEFAULT_PERRMISSIONS)){
			chmod_path($path,DEFAULT_PERRMISSIONS);
			Hook::trigger("explorer.mkdirAfter",$path);
			return true;
		}
		return false;
	}

	public function pathRname(){
		$rnameTo=_DIR($this->in['rnameTo']);
		if (file_exists($rnameTo) && 
			strtolower($rnameTo) !== strtolower($this->path) ) {
			show_json(LNG('name_isexists'),false);
		}
		Hook::trigger("explorer.pathRnameBefore",$this->path,$rnameTo);
		if(@rename($this->path,$rnameTo)){
			Hook::trigger("explorer.pathRnameAfter",$this->path,$rnameTo);
			show_json(LNG('rname_success'),true,_DIR_OUT(iconv_app($rnameTo)) );
		}else{
			show_json(LNG('no_permission_write_all'),false);
		}
	}

	public function search(){
		if (!isset($this->in['search'])){
			show_json(LNG('please_inpute_search_words'),false);
		}

		$isContent = intval($this->in['is_content']);
		$isCase = intval($this->in['is_case']);
		$ext= trim($this->in['ext']);
		//共享根目录不支持搜索
		if( $GLOBALS['kodPathType'] == KOD_USER_SHARE &&
			strstr($this->path,KOD_USER_SHARE)){
			show_json(LNG('path_cannot_search'),false);
		}

		Hook::trigger("explorer.searchBefore",$this->path);
		$list = path_search(
			$this->path,
			rawurldecode($this->in['search']),
			$isContent,$ext,$isCase);
		show_json(_DIR_OUT($list));
	}

	public function pathList(){
		$userPath = $this->in['path'];
		if ($userPath=="")  $userPath='/';
		$list=$this->_path($this->path);

		//自己的根目录
		if($this->path== MYHOME || $this->path==HOME){
			$this->_selfRootLoad($list['folderList']);
		}

		//群组根目录
		if( $list['info']['pathType'] == KOD_GROUP_PATH &&
			!strstr(trim(_DIR_CLEAR($this->in['path']),'/'),'/')
		   ){//自己的根目录
			$this->_selfGroupLoad($list['folderList']);
		}
		$list['userSpace'] = $this->user['config'];
		show_json($list);
	}

	public function treeList(){//树结构
		$app = $this->in['app'];//是否获取文件 传folder|file
		if (isset($this->in['type']) && $this->in['type']=='init'){
			$this->_treeInit($app);
		}
		//根树目录请求
		switch(trim(rawurldecode($this->in['path']))){
			case KOD_USER_FAV:
				show_json($this->_treeFav(),true);
				break;
			case KOD_GROUP_ROOT_SELF:
				show_json($this->_groupSelf(),true);
				break;
			case KOD_GROUP_ROOT_ALL:
				show_json($this->_groupTree('1'),true);
				break;
			default:break;
		}

		//树目录组处理
		if ( (isset($this->in['tree_icon']) && $this->in['tree_icon']!='group-public') &&  //公共目录刷新排除
			!strstr(trim(rawurldecode($this->in['path']),'/'),'/') &&
			($GLOBALS['kodPathType'] == KOD_GROUP_PATH||
			$GLOBALS['kodPathType'] == KOD_GROUP_SHARE)) {
			$list = $this->_groupTree($GLOBALS['kodPathId']);
			show_json($list,true);
			return;
		}

		//正常目录
		$path=_DIR($this->in['path']);
		if (!path_readable($path)) show_json(LNG('no_permission_read'),false);
		$listFile = ($app == 'editor'?true:false);//编辑器内列出文件
		$list=$this->_path($path,$listFile,true);
		function sortByKey($a, $b){
			if ($a['name'] == $b['name']) return 0;
			return ($a['name'] > $b['name']) ? 1 : -1;
		}
		usort($list['folderList'], "sortByKey");
		usort($list['fileList'], "sortByKey");
		if($path == MYHOME || $path==HOME){//自己的根目录
			// $this->_selfRootLoad($list['folderList']);
		}
		if ($app == 'editor') {
			$res = array_merge($list['folderList'],$list['fileList']);
			show_json($res,true);
		}else{
			show_json($list['folderList'],true);
		}
	}

	//部门根目录
	private function _selfGroupLoad(&$root){
		foreach ($root as $key => $value) {
			if($value['name'] == $GLOBALS['config']['settingSystem']['groupShareFolder']){
				$root[$key] = array(
					'name'			=> LNG('group_share'),
					'menuType'  	=> "menu-folder folder-box",
					'ext' 			=> "folder-share",
					'isReadable'	=> true,
					'isWriteable'	=> true,

					'path' 			=> $value['path'],
					'type'      	=> 'folder',
					'open'      	=> false,
					'isParent'  	=> $value['isParent']
				);
				break;
			}
		}
		$root = array_values($root);
	}

	//用户根目录
	private function _selfRootLoad(&$root){
		foreach ($root as $key => $value) {
			if($value['name'] == 'share'){
				$root[$key] = array(
					'name'		=> LNG('my_share'),
					'menuType'  => "menu-tree-user",
					'ext' 		=> "folder-share",
					'isParent'	=> true,
					'isReadable'	=> true,
					'isWriteable'	=> true,

					'path' 		=> KOD_USER_SHARE.':'.$this->user["userID"].'/',
					'type'      => 'folder',
					'open'      => false,
					'isParent'  => false
				);
				break;
			}
		}
		$root = array_values($root);
		//不开启回收站则不显示回收站
		if($this->config['user']['recycleOpen']=="1"){
			// $root[] = array(
			// 	'name'=>LNG('recycle'),
			// 	'menuType'  =>"menu-recycle-button",
			// 	'ext' 		=>"recycle",
			// 	'isParent'	=> true,
			// 	'isReadable'	=> true,
			// 	'isWriteable'	=> true,

			// 	'path' 		=> KOD_USER_RECYCLE,
			// 	'type'      => 'folder',
			// 	'open'      => true,
			// 	'isParent'  => false
			// );
		}
	}


	private function _treeFav(){
		$checkFile = ($this->in['app'] == 'editor'?true:false);
		$favData=new FileCache(USER.'data/fav.php');
		$favList = $favData->get();
		$fav = array();
		$GLOBALS['kodPathAuthCheck'] = true;//组权限发生变更。导致访问groupPath 无权限退出问题
		foreach($favList as $key => $val){
			$thePath = _DIR($val['path']);
			$hasChildren = path_haschildren($thePath,$checkFile);
			if( !isset($val['type'])){
				$val['type'] = 'folder';
			}
			if( in_array($val['type'],array('group'))){
				$hasChildren = true;
			}
			$cell = array(
				'name'      => $val['name'],
				'ext' 		=> isset($val['ext'])?$val['ext']:"",
				'menuType'  => "menu-tree-fav",

				'path' 		=> $val['path'],
				'type'      => $val['type'],
				'open'      => false,
				'isParent'  => $hasChildren
			);

			if( $cell['type'] == 'folder' && $cell['ext'] == "" ){
				$cell['menuType'] = 'menu-tree-folder-fav';
				$cell['exists']   = intval(file_exists($thePath));
			}

			if(isset($val['type']) && $val['type']!='folder'){//icon优化
				$cell['ext'] = $val['type'];
			}
			$fav[] = $cell;
		}
		$GLOBALS['kodPathAuthCheck'] = false;
		return $fav;
	}

	private function _treeInit($app){
		if ($app == 'editor' && isset($this->in['project'])) {
			$listProject = $this->_path(_DIR($this->in['project']),true,true);
			$project = array_merge($listProject['folderList'],$listProject['fileList']);
			$treeData = array(
				array('name'=> get_path_this($this->in['project']),
					'children'	=>$project,
					'menuType'  => "menu-tree-root",
					'ext' 		=> "folder",

					'path' 		=> $this->in['project'],
					'type'      => 'folder',
					'open'      => true,
					'isParent'  => count($project)>0?true:false)
			);
			show_json($treeData);
		}
		$checkFile = ($app == 'editor'?true:false);
		$fav = $this->_treeFav($app);

		$publicPath = KOD_GROUP_PATH.':1/';
		$groupRoot  = systemGroup::getInfo(1);
		$groupRootName = LNG('public_path');
		if($groupRoot && $groupRoot['name'] != 'public'){
			$groupRootName = $groupRoot['name'];
		}

		if(systemMember::userAuthGroup(1) == false){
			$publicPath = KOD_GROUP_SHARE.':1/';//不在公共组则只能读取公共组共享目录
		}
		$GLOBALS['kodPathAuthCheck'] = true;
		$listPublic = $this->_path(_DIR($publicPath),$checkFile,true);
		if($publicPath == KOD_GROUP_PATH.':1/'){
			if(!path_group_can_read('1')){
				$listPublic=array("folderList"=>array(),'fileList'=>array());
			}
		}
		$listRoot  = $this->_path(_DIR(MYHOME),$checkFile,true);
		if ($checkFile) {//编辑器
			$root = array_merge($listRoot['folderList'],$listRoot['fileList']);
			$public = array_merge($listPublic['folderList'],$listPublic['fileList']);
		}else{//文件管理器
			$root  = $listRoot['folderList'];
			$public = $listPublic['folderList'];
			//$this->_selfRootLoad($root);//自己的根目录 含有我的共享和回收站
		}

		$rootIsparent = count($root)>0?true:false;
		$publicIsparent = count($public)>0?true:false;
		$treeData = array(
			'fav'=>array(
				'name'      => LNG('fav'),
				'ext' 		=> "tree-fav",
				'menuType'  => "menu-tree-fav-root",
				'children'  => $fav,

				'path' 		=> KOD_USER_FAV,
				'type'      => 'folder',
				'open'      => true,
				'isParent'  => count($fav)>0?true:false
			),
			'myHome'=>array(
				'name'		=> LNG('root_path'),
				'menuType'  => "menu-tree-root",
				'ext' 		=> "tree-self",
				'children'  => $root,

				'path' 		=> MYHOME,
				'type'      => 'folder',
				'open'      => true,
				'isParent'  => $rootIsparent
			),

			'public'=>array(
				'name'		=> $groupRootName,
				'menuType'  => "menu-tree-group-root menu-tree-group-public",
				'ext' 		=> "group-public",
				'children'  => $public,

				'path' 		=> $publicPath,
				'type'      => 'folder',
				'open'      => true,
				'isParent'  => $publicIsparent
			),
			'myGroup'=>array(
				'name'		=> LNG('my_kod_group'),//TODO
				'menuType'  => "menu-tree-group-root",
				'ext' 		=> "group-self-root",
				'children'  => $this->_groupSelf(),

				'path' 		=> KOD_GROUP_ROOT_SELF,
				'type'      => 'folder',
				'open'      => true,
				'isParent'  => true
			),
			'group'=>array(
				'name'		=> LNG('kod_group'),
				'menuType'  => "menu-tree-group-root",
				'ext' 		=> "group-root",
				'children'  => $this->_groupTree('1'),

				'path' 		=> KOD_GROUP_ROOT_ALL,
				'type'      => 'folder',
				'open'      => true,
				'isParent'  => true
			),
		);

		//编辑器简化树目录
		if($app == 'editor' || defined("KODFILE")){
			unset($treeData['myGroup']);
			unset($treeData['group']);
			unset($treeData['public']);
			//管理员，优化编辑器树目录
			if($GLOBALS['isRoot']==1){
				$listWeb  = $this->_path(_DIR(WEB_ROOT),$checkFile,true);
				$web = array_merge($listWeb['folderList'],$listWeb['fileList']);
				$treeData['webroot'] = array(
					'name'      => get_path_this(WEB_ROOT),
					'menuType'  => "menu-tree-root",
					'ext' 		=> "folder",
					'children'  => $web,

					'path' 		=> WEB_ROOT,
					'type'      => 'folder',
					'open'      => true,
					'isParent'  => true
				);
			}
		}

		$result = array();
		foreach ($treeData as $key => $value) { //为空则不展示
			if( count($value['children'])<1 && 
				in_array($key,array('myGroup','group')) ){//'fav'
				continue;
				//$value['isParent'] = false;
			}
			$result[] = $value;
		}
		show_json($result);
	}

	private function _rootListGroup(){
		return $this->config['settingSystem']['rootListGroup'] == 1;
	}
	private function _rootListUser(){
		return $this->config['settingSystem']['rootListUser'] == 1;
	}

	//session记录用户可以管理的组织；继承关系
	private function _groupTree($nodeId){//获取组织架构的用户和子组织；为空则获取根目录
		$groupSql = systemGroup::loadData();
		$groups = $groupSql->get(array('parentID',$nodeId));
		$groupList = $this->_makeNodeList($groups);

		//根群组不显示子群组
		if( $nodeId == '1' && !$this->_rootListGroup() ){
			$groupList = array();
		}
		//根群组不显示用户
		if( $nodeId == '1' || !$this->_rootListUser() ){
			return $groupList;
		}

		//user
		$userList = array();
		$user = systemMember::userAtGroup($nodeId);
		foreach($user as $key => $val){
			$treeIcon = 'user';
			if ($val['userID'] == $this->user['userID']) {
				$treeIcon = 'user-self';
			}
			$userList[] = array(
				'name'      => $val['name'].' '.LNG('users_share'),
				'menuType'  => "menu-tree-user",
				'ext' 		=> $treeIcon,

				'path' 		=> KOD_USER_SHARE.':'.$val['userID'].'/',
				'type'      => 'folder',
				'open'      => false,
				'isParent'  => false
			);
		}
		return array_merge($groupList,$userList);
	}
	//session记录用户可以管理的组织；继承关系
	private function _groupSelf(){//获取组织架构的用户和子组织；为空则获取根目录
		$groups = array();
		foreach ($this->user['groupInfo'] as $groupID=>$val){
			if($groupID=='1') continue;
			$item = systemGroup::getInfo($groupID);
			if($item){
				$groups[] = $item;
			}
		}
		return $this->_makeNodeList($groups);
	}
	private function _makeNodeList($list){
		$groupList = array();
		if(!is_array($list)){
			return $groupList;
		}
		foreach($list as $key => $val){
			$groupPath = KOD_GROUP_PATH;
			$auth = systemMember::userAuthGroup($val['groupID']);
			$menuGroup = 'menu-tree-group';
			if($auth==false){//是否为该组内部成员
				$groupPath = KOD_GROUP_SHARE;
				$treeIcon = 'group-guest';
			}else{
				$treeIcon = 'group-self';
				$menuGroup .= " menu-tree-group-self";
			}
			$hasChildren = true;
			$userList = array();
			if( $this->_rootListUser() ){
				$userList = systemMember::userAtGroup($val['groupID']);
			}
			if(count($userList)==0 && $val['children']==''){
				$hasChildren = false;
			}
			$groupList[] = array(
				'name'      => $val['name'],
				'type'      => 'folder',
				'path' 		=> $groupPath.':'.$val['groupID'].'/',
				'ext' 		=> $treeIcon,
				'tree_icon'	=> $treeIcon,//request

				'menuType'  => $menuGroup,
				'isParent'  => $hasChildren
			);
		}
		return $groupList;
	}
	public function pathDelete(){
		$list = json_decode($this->in['dataArr'],true);
		$userRecycle = iconv_system(USER_RECYCLE);
		if (!is_dir($userRecycle)){
			mk_dir($userRecycle);
		}

		$removeToRecycle = $this->config['user']['recycleOpen'];
		if(!path_writeable($userRecycle) ||
			isset($this->in['shiftDelete'])
			){//回收站不可写则直接删除；传入直接删除参数
			$removeToRecycle = '0';
		}
		$success=0;$error=0;
		foreach ($list as $val) {
			if(!$val['path'] || $val['path'] == '/'){
				$error++;
				continue;
			}
			$pathThis = _DIR($val['path']);
			$GLOBALS['beforePathType'] = $GLOBALS['kodPathType'];
			$GLOBALS['kodBeforePathId']= $GLOBALS['kodPathId'];
			//不是自己目录的分享列表，不支持删除
			if( $GLOBALS['kodPathType'] == KOD_USER_SHARE &&
				$GLOBALS['kodPathId']   != $_SESSION['kodUser']['userID'] &&
				substr_count(trim($val['path'],'/'),'/') <= 1){ //分享根项目
				show_json(LNG('no_permission_write'),false);
			}
			if(!path_writeable($pathThis)){
				$error++;
				continue;
			}

			// 群组文件删除，移动到个人回收站。
			if( $removeToRecycle !="1"  ||
				$GLOBALS['kodPathType'] == KOD_USER_RECYCLE ){//回收站删除 or 共享删除等直接删除
				Hook::trigger("explorer.pathRemoveBefore",$pathThis);
				if ($val['type'] == 'folder') {
					if(del_dir($pathThis)) $success ++;
					else $error++;
				}else{
					if(del_file($pathThis)) $success++;
					else $error++;
				}
				Hook::trigger("explorer.pathRemoveAfter",$pathThis);
			}else{
				//重置pathType等数据
				$GLOBALS['beforePathType'] = KOD_USER_SHARE;
				$GLOBALS['kodBeforePathId']= $_SESSION['kodUser']['userID'];

				$autoPath = $userRecycle.get_path_this($pathThis);
				$autoPath = get_filename_auto($autoPath,date('_H-i-s'),'folder_rename');//已存在则追加时间
				if (move_path($pathThis,$autoPath,'',$this->config['user']['fileRepeat'])) {
					$success++;
					Hook::trigger("explorer.pathMoveAfter",$pathThis,$autoPath);
				}else{
					$error++;
				}
			}
		}
		$state = $error==0?true:false;
		$info = $success.' '.LNG('success').', '.$error.' '.LNG('error');
		if ($error==0) {
			$info = LNG('remove_success');
		}
		show_json($info,$state);
	}

	private function _clearTemp(){
		$path = iconv_system(USER_TEMP);
		$time = @filemtime($path);
		if(time() - $time > 600){//10min without updload
			del_dir($path);
			mk_dir($path);
		}
	}

	public function pathDeleteRecycle(){
		$userRecycle = iconv_system(USER_RECYCLE);
		if(!isset($this->in['dataArr'])){
			Hook::trigger("explorer.pathRemoveBefore",$userRecycle);
			if (!del_dir($userRecycle)) {
				Hook::trigger("explorer.pathRemoveAfter",$userRecycle);
				show_json(LNG('remove_fali'),false);
			}else{
				mkdir($userRecycle);
				$this->_clearTemp();
				show_json(LNG('recycle_clear_success'),true);
			}
		}
		$list = json_decode($this->in['dataArr'],true);
		$success = 0;$error   = 0;
		foreach ($list as $val) {
			$pathFull = _DIR($val['path']);
			Hook::trigger("explorer.pathRemoveBefore",$pathFull);
			if ($val['type'] == 'folder') {
				if(del_dir($pathFull)) $success ++;
				else $error++;
			}else{
				if(del_file($pathFull)) $success++;
				else $error++;
			}
			Hook::trigger("explorer.pathRemoveAfter",$pathFull);
		}
		if (count($list) == 1) {
			if ($success) show_json(LNG('remove_success'));
			else show_json(LNG('remove_fali'),false);
		}else{
			$code = $error==0?true:false;
			show_json(LNG('remove_success').$success.'success,'.$error.'error',$code);
		}
	}

	public function pathCopy(){
		session_start();//re start
		$theList = json_decode($this->in['dataArr'],true);
		foreach ($theList as $key => $value) {
			_DIR(rawurldecode($value['path']));//检测来源权限
		}
		$_SESSION['pathCopy']= json_encode($theList);
		$_SESSION['pathCopyType']='copy';
		show_json(LNG('copy_success'));
	}
	public function pathCute(){
		session_start();//re start
		$theList = json_decode($this->in['dataArr'],true);
		foreach ($theList as $key => &$value) {
			$value['path'] = rawurldecode($value['path']);
			_DIR($value['path']);
		}
		$_SESSION['pathCopy']= json_encode($theList);
		$_SESSION['pathCopyType']='cute';
		show_json(LNG('cute_success'));
	}
	public function pathCuteDrag(){
		$clipboard = json_decode($this->in['dataArr'],true);
		$pathPast=$this->path;
		$GLOBALS['beforePathType'] = $GLOBALS['kodPathType'];
		$GLOBALS['kodBeforePathId']   = $GLOBALS['kodPathId'];

		if (!path_writeable($this->path)) show_json(LNG('no_permission_write'),false);
		$success=0;$error=0;$data = array();
		foreach ($clipboard as $val) {
			path_can_copy_move($val['path'],$this->in['path']);
			$pathCopy = _DIR($val['path']);
			$filename = get_path_this($pathCopy);
			$autoPath = get_filename_auto($pathPast.$filename,'',$this->config['user']['fileRepeat']);

			Hook::trigger("explorer.pathMoveBefore",$pathCopy,$autoPath);
			if (move_path($pathCopy,$autoPath,'',$this->config['user']['fileRepeat'])) {
				$success++;
				Hook::trigger("explorer.pathMoveAfter",$pathCopy,$autoPath);
				$data[] = _DIR_OUT(iconv_app($autoPath));
			}else{
				$error++;
			}
		}
		$state = $error==0?true:false;
		$msg = $success.' success,'.$error.' error';
		if($error == 0){
			$msg = LNG('success');
		}
		show_json($msg,$state,$data);
	}

	public function pathCopyDrag(){
		$clipboard = json_decode($this->in['dataArr'],true);
		$pathPast=$this->path;
		$GLOBALS['beforePathType'] = $GLOBALS['kodPathType'];
		$GLOBALS['kodBeforePathId']   = $GLOBALS['kodPathId'];

		if (!path_writeable($this->path)) show_json(LNG('no_permission_write'),false);
		$success=0;$error=0;$data = array();
		foreach ($clipboard as $val) {
			path_can_copy_move($val['path'],$this->in['path']);
			$pathCopy = _DIR($val['path']);
			_DIR($this->in['path']);//重置pathType等数据
			$filename = get_path_this($pathCopy);
			$autoPath = get_filename_auto($pathPast.$filename,'',$this->config['user']['fileRepeat']);
			if ($this->in['filename_auto']==1 &&
				trim($autoPath,'/') == trim($pathCopy,'/')) {
				$autoPath = get_filename_auto($pathPast.$filename,'','folder_rename');				
			}

			Hook::trigger("explorer.pathCopyBefore",$pathCopy,$autoPath);
			if(copy_dir($pathCopy,$autoPath)){
				$success++;
				Hook::trigger("explorer.pathCopyAfter",$autoPath);
				$data[] = _DIR_OUT(iconv_app($autoPath));
			}else{
				$error++;
			}
		}
		$state = $error==0?true:false;
		$msg = $success.' success,'.$error.' error';
		if($error == 0){
			$msg = LNG('success');
		}
		show_json($msg,$state,$data);
	}

	public function clipboard(){
		if(isset($this->in['clear'])){
			session_start();
			$_SESSION['pathCopy'] = json_encode(array());
			$_SESSION['pathCopyType'] = '';
			return;
		}
		$clipboard = json_decode($_SESSION['pathCopy'],true);
		if(!$clipboard){
			$clipboard = array();
		}
		show_json($clipboard,true,$_SESSION['pathCopyType']);
	}
	public function pathPast(){
		if (!isset($_SESSION['pathCopy'])){
			show_json(LNG('clipboard_null'),false,array());
		}

		$pathPast=$this->path;//之前就自动处理权限判断；
		session_start();//re start
		$error = '';
		$data = array();
		$clipboard = json_decode($_SESSION['pathCopy'],true);
		$copyType = $_SESSION['pathCopyType'];
		$GLOBALS['beforePathType'] = $GLOBALS['kodPathType'];
		$GLOBALS['kodBeforePathId'] = $GLOBALS['kodPathId'];
		if (!path_writeable($pathPast)) show_json(LNG('no_permission_write'),false,$data);

		if ($copyType == 'copy') {
		}else{
			$_SESSION['pathCopy'] = json_encode(array());
			$_SESSION['pathCopyType'] = '';
		}
		session_write_close();

		$GLOBALS['kodPathAuthCheck'] = true;//粘贴来源检测权限；和粘贴到目标位置冲突
		$listNum = count($clipboard);
		if ($listNum == 0) {
			show_json(LNG('clipboard_null'),false,$data);
		}
		for ($i=0; $i < $listNum; $i++) {
			$pathCopy = _DIR($clipboard[$i]['path']);			
			//重置pathType等数据;从回收站剪切出来不处理
			if($copyType == 'cute' && $GLOBALS['kodPathType'] == KOD_USER_RECYCLE){
			}else{
				_DIR($this->in['path']);//重置pathType等数据
			}
			$filename  = get_path_this($pathCopy);
			$filenameOut  = iconv_app($filename);
			if (!file_exists($pathCopy)){
				$error .= "<li>{$filenameOut}".LNG('copy_not_exists')."</li>";
				continue;
			}
			if ($clipboard[$i]['type'] == 'folder'){
				if ($pathCopy == substr($pathPast,0,strlen($pathCopy))){
					$error .="<em style='color:#fff;'>{$filenameOut}".LNG('current_has_parent')."</em>";
					continue;
				}
			}
			$autoPath = get_filename_auto($pathPast.$filename,'',$this->config['user']['fileRepeat']);
			if($pathCopy == $autoPath){
				continue;//复制粘贴到原始位置
			}
			$filename = get_path_this($autoPath);
			if ($copyType == 'copy') {
				Hook::trigger("explorer.pathCopyBefore",$pathCopy,$autoPath);
				copy_dir($pathCopy,$autoPath);
				Hook::trigger("explorer.pathCopyAfter",$autoPath);
			}else{
				Hook::trigger("explorer.pathMoveBefore",$pathCopy,$autoPath);
				move_path($pathCopy,$autoPath,'',$this->config['user']['fileRepeat']);
				Hook::trigger("explorer.pathMoveAfter",$pathCopy,$autoPath);
			}
			$data[] = _DIR_OUT(iconv_app($autoPath));
		}
		if ($copyType == 'copy') {
			$msg=LNG('past_success').$error;
		}else{
			$msg=LNG('cute_past_success').$error;
		}
		$state = ($error ==''?true:false);
		show_json($msg,$state,$data);
	}
	public function fileDownload(){
		file_put_out($this->path,true);
	}
	//文件下载后删除,用于文件夹下载
	public function fileDownloadRemove(){ 
		$path = get_path_this(_DIR_CLEAR($this->in['path']));
		$path = iconv_system(USER_TEMP.$path);
		$fileName = substr(get_path_this($path),10);//前10个字符为随机前缀
		file_put_out($path,true,$fileName);
	}
	public function zipDownload(){
		$userTemp = iconv_system(USER_TEMP);
		if(!file_exists($userTemp)){
			mkdir($userTemp);
		}else{//清除未删除的临时文件，一天前
			$list = path_list($userTemp,true,false);
			$maxTime = 3600*6;//自动清空一天前的缓存
			if ($list['fileList']>=1) {
				for ($i=0; $i < count($list['fileList']); $i++) {
					$item = $list['fileList'][$i];
					$createTime = $item['mtime'];//最后修改时间
					if(time() - $createTime >$maxTime){
						del_file($item['path'].$item['name']);
					}
				}
			}
		}
		$zipFile = $this->zip($userTemp,rand_string(9).'-',fasle);//下载文件夹删除；不检测和记录空间变更
		show_json(LNG('zip_success'),true,get_path_this($zipFile));
	}
	public function zip($zipPath='',$namePre = "",$checkSpaceChange = true){
		ignore_timeout();
		$zipList = json_decode($this->in['dataArr'],true);
		$listNum = count($zipList);
		$files = array();
		for ($i=0; $i < $listNum; $i++) {
			$item = rtrim(_DIR($zipList[$i]['path']),'/');//处理成系统 文件编码
			if(file_exists($item)){
				$files[] = $item;
			}
		}
		if(count($files)==0){
			show_json(LNG('not_exists'),false);
		}

		//to type
		$fileType = 'zip';
		if(isset($this->in['fileType'])){
			$fileType = $this->in['fileType'];
		}

		//指定目录
		$basicPath = $zipPath;
		if ($zipPath==''){
			$basicPath =get_path_father($files[0]);
		}
		if (!path_writeable($basicPath)) {
			show_json(LNG('no_permission_write'),false);
		}

		if (count($files) == 1){
			$pathThisName=get_path_this($files[0]);
		}else{
			$pathThisName=get_path_this(get_path_father($files[0]));
		}
		$zipname = $basicPath.$namePre.$pathThisName.'.'.$fileType;
		$zipname = get_filename_auto($zipname,'','rename');//已存在重命名

		if($checkSpaceChange){Hook::trigger("explorer.zipBefore",$zipname);}
		$result = KodArchive::create($zipname,$files);
		if($checkSpaceChange){Hook::trigger("explorer.zipAfter",$zipname);}

		if ($zipPath=='') {
			if(file_exists($zipname)){
				$info = LNG('zip_success').LNG('size').":".size_format(filesize($zipname));
				show_json($info,true,_DIR_OUT(iconv_app($zipname)) );
			}else{
				show_json(LNG.error,false);
			}
		}else{
			return iconv_app($zipname);
		}
	}
	public function unzip(){
		ignore_timeout();
		$path = $this->path;
		if(!file_exists($path)){
			show_json(LNG("not_exists"),false);
		}
		$name = get_path_this($path);
		$name = substr($name,0,strrpos($name,'.'));
		$ext  = get_path_ext($path);
		
		$unzipToAdd = '';
		$unzipTo = get_path_father($path);
		if(isset($this->in['toThis'])){//直接解压
		}else if (isset($this->in['pathTo'])) {//解压到指定位置
			$unzipTo = _DIR($this->in['pathTo']);
		}else{
			$unzipToAdd = $name;
		}

		$this->_mkdir($unzipTo);
		if (!path_writeable($unzipTo)){//所在目录不可写
			show_json(LNG('no_permission_write'),false);
		}
		$unzipTo = $unzipTo.$unzipToAdd;
		Hook::trigger("explorer.unzipBefore",$path,$unzipTo);

		//解压缩
		$unzipPart = '-1';
		if(isset($this->in['unzipPart'])){
			$unzipPart = $this->in['unzipPart'];
		}
		$result = KodArchive::extract($path,$unzipTo,$unzipPart);
		if (!$result['code']) {
			show_json("Error : ".$result['data'],false);
		}else{
			Hook::trigger("explorer.unzipAfter",$path);
			show_json(LNG('unzip_success'));
		}
	}

	public function unzipList(){
		if(isset($this->in['index'])){
			$download = isset($this->in['download'])?true:false;
			KodArchive::filePreview($this->path,$this->in['index'],$download,$this->in['name']);
		}else{
			$result = KodArchive::listContent($this->path);
			show_json($result['data'],$result['code']);
		}
	}

	public function imageRotate(){
		$cm = new ImageThumb($this->path,'file');
		$result = $cm->imgRotate($this->path,intval($this->in['rotate']));
		if($result){
			show_json(LNG('success'));
		}else{
			show_json(LNG('error'),false);
		}
	}
	//缩略图
	public function image(){
		$thumbWidth = 250;
		if(isset($this->in['thumbWidth'])){
			$thumbWidth = intval($this->in['thumbWidth']);//自定义预览大图
		}
		if(substr($this->path,0,4) == 'http'){
			header('Location: '.$this->in['path']);
			exit;
		}
		if (@filesize($this->path) <= 1024*50 ||
			!function_exists('imagecolorallocate') ||
			get_path_ext($this->path) == 'gif') {//小于50k、不支持gd库、gif图 不再生成缩略图
			file_put_out($this->path,false);
			return;
		}
		if (!is_dir(DATA_THUMB)){
			mk_dir(DATA_THUMB);
		}
		$image = $this->path;
		$imageMd5  = @md5_file($image).'_'.$thumbWidth;//文件md5
		if (strlen($imageMd5)<5) {
			$imageMd5 = md5($image).'_'.$thumbWidth;
		}
		$imageThumb = DATA_THUMB.$imageMd5.'.png';
		if (!file_exists($imageThumb)){//如果拼装成的url不存在则没有生成过
			if (get_path_father($image)==DATA_THUMB){//当前目录则不生成缩略图
				$imageThumb=$this->path;
			}else {
				$cm = new ImageThumb($image,'file');
				$cm->prorate($imageThumb,$thumbWidth,$thumbWidth);//生成等比例缩略图
			}
		}
		if (!file_exists($imageThumb) || 
			filesize($imageThumb)<100){//缩略图生成失败则使用原图
			$imageThumb=$this->path;
		}
		file_put_out($imageThumb,false);
	}

	// 远程下载
	public function serverDownload() {
		$uuid = 'download_'.$this->in['uuid'];
		if ($this->in['type'] == 'percent') {//获取下载进度
			if (isset($_SESSION[$uuid])){
				$info = $_SESSION[$uuid];
				$result = array(
					'supportRange' => $info['supportRange'],
					'uuid'      => $this->in['uuid'],
					'length'    => (int)$info['length'],
					'name'		=> $info['name'],
					'size'      => (int)@filesize(iconv_system($info['path'])),
					'time'      => mtime()
				);
				show_json($result);
			}else{
				show_json('uuid_not_set',false);
			}
		}else if($this->in['type'] == 'remove'){//取消下载;文件被删掉则自动停止
			$theFile = str_replace('.downloading','',$_SESSION[$uuid]['path']);
			del_file($theFile.'.downloading');
			del_file($theFile.'.download.cfg');
			unset($_SESSION[$uuid]);
			show_json('remove_success',false);
		}
		//下载
		$savePath = _DIR(rawurldecode($this->in['savePath']));
		$this->_mkdir($savePath);
		if (!$savePath || !path_writeable($savePath)){
			show_json(LNG('no_permission_write'),false);
		}
		$url = rawurldecode($this->in['url']);
		if(isset($this->in['name'])){
			$filename = rawurldecode($this->in['name']);
		}else{
			$header = url_header($url);
			if (!$header){
				show_json(LNG('download_error_exists'),false);
			}
			$filename = $header['name'];
		}

		$saveFile = $savePath._DIR_CLEAR($filename);
		if (!checkExt($saveFile)){//不允许的扩展名
			$saveFile = $savePath.date('h:i:s').'.dat';
		}
		$saveFile = get_filename_auto(iconv_system($saveFile),'',$this->config['user']['fileRepeat']);
		$saveFileTemp = $saveFile.'.downloading';
		Hook::trigger("explorer.serverDownloadBefore",$saveFile);
		session_start();
		$_SESSION[$uuid] = array(
			'supportRange' => $header['supportRange'],
			'length'=> $header['length'],
			'path'	=> $saveFileTemp,
			'name'	=> get_path_this($saveFile)
		);
		session_write_close();
		$result = Downloader::start($url,$saveFile);
		session_start();unset($_SESSION[$uuid]);session_write_close();
		if($result['code']){
			$name = get_path_this(iconv_app($saveFile));
			Hook::trigger("explorer.serverDownloadAfter",$saveFile);
			show_json(LNG('download_success'),true,_DIR_OUT(iconv_app($saveFile)) );
		}else{
			show_json($result['data'],false);
		}
	}

	//通用缩略图
	public function fileThumb(){
		Hook::trigger("explorer.fileThumbStart",$this->path);
	}
	//通用预览
	public function fileView(){
		Hook::trigger("explorer.fileViewStart",$this->path);
		if(!isset($this->in['path'])){
			show_tips('参数错误!');
		}
		$this->tpl = TEMPLATE.'api/';
		$this->display('view.html');
	}
	//通用保存
	public function fileSave(){
		Hook::trigger("explorer.fileSaveStart",$this->path);
	}
	//代理输出
	public function fileProxy(){
		$download = isset($_GET['download']);
		$filename = isset($_GET['downFilename'])?$_GET['downFilename']:false;
		file_put_out($this->path,$download,$filename);
	}


	/**
	 * 上传,html5拖拽  flash 多文件
	 */
	public function fileUpload(){
		$savePath = _DIR($this->in['upload_to']);
		if (!path_writeable($savePath)) show_json(LNG('no_permission_write'),false);
		if ($savePath == '') show_json(LNG('upload_error_big'),false);

		if (strlen($this->in['fullPath']) > 1) {//folder drag upload
			$fullPath = _DIR_CLEAR(rawurldecode($this->in['fullPath']));
			$fullPath = get_path_father($fullPath);
			$fullPath = iconv_system($fullPath);
			$savePath = $savePath.$fullPath;
			mk_dir($savePath);
			// if ($this->_mkdir($savePath.$fullPath)) {
			// 	$savePath = $savePath.$fullPath;
			// }
		}
		//分片上传
		$repeatAction = $this->config['user']['fileRepeat'];
		$tempDir = iconv_system(USER_TEMP);
		mk_dir($tempDir);
		if (!path_writeable($tempDir)) show_json(LNG('no_permission_write'),false);
		upload($savePath,$tempDir,$repeatAction);
	}

	//分享根目录
	private function _pathShare(&$list){
		$arr = explode(',',$GLOBALS['kodPathId']);
		
		//不展示用户时;屏蔽获取其他人分享列表
		if( $arr[0] != $_SESSION['kodUser']['userID'] && !$this->_rootListUser()){
			return;
		}
		$shareList = systemMember::userShareList($arr[0]);	
		$beforeShareId = $GLOBALS['kodPathIdShare'];
		foreach ($shareList as $key => $value) {
			$thePath = _DIR(KOD_USER_SHARE.':'.$arr[0].'/'.$value['name']);
			$value['path'] = $value['name'];
			$value['atime']='';$value['ctime']='';
			$value['mode']='';$value['isReadable'] = 1;
			$value['isWriteable'] = 1;
			$value['exists'] = intval(file_exists($thePath));
			$value['metaInfo'] = 'path-self-share';
			$value['menuType']  = "menu-share-path";
			if(is_file($thePath)){
				$value['size']  = get_filesize($thePath);;
			}

			//分享列表oexe
			if(get_path_ext($value['name']) == 'oexe' && is_file($thePath) ){
				$json = json_decode(@file_get_contents($thePath),true);
				if(is_array($json)) $value = array_merge($value,$json);
			}
			if ($value['type']=='folder') {
				$value['ext'] = 'folder';
				$list['folderList'][] = $value;
			}else{
				$list['fileList'][] = $value;
			}
		}
		$list['pathReadWrite'] = 'readable';
		$GLOBALS['kodPathIdShare'] = $beforeShareId;
		if($arr[0] == $this->user['userID']){//自己分享列表
			$list['shareList'] = $shareList;
		}
		return $list;
	}

	//我的收藏根目录
	private function _pathFav(&$list){
		$favData=new FileCache(USER.'data/fav.php');
		$favList = $favData->get();
		$GLOBALS['kodPathAuthCheck'] = true;//组权限发生变更。导致访问groupPath 无权限退出问题
		foreach($favList as $key => $val){
			$thePath = _DIR($val['path']);
			$hasChildren = path_haschildren($thePath,$checkFile);
			if( !isset($val['type'])){
				$val['type'] = 'folder';
			}
			if( $val['type'] == 'folder' && $val['ext'] != 'tree-fav'){
				$hasChildren = true;
			}
			$cell = array(
				'name'      => $val['name'],
				'ext' 		=> $val['ext'],
				'menuType'  => "menu-fav-path",
				'atime'		=> '',
				'ctime'		=> '',
				'mode'		=> '',
				'isReadable'	=> 1,
				'isWriteable'	=> 1,
				'exists'	=> intval(file_exists($thePath)),
				'metaInfo'	=> 'tree-fav',

				'path' 		=> $val['path'],
				'type'		=> $val['type'],
				'open'      => false,
				'isParent'  => false//$hasChildren
			);

			if( strstr($val['path'],KOD_USER_SHARE)||
				strstr($val['path'],KOD_USER_FAV) ||
				strstr($val['path'],KOD_GROUP_ROOT_SELF) ||
				strstr($val['path'],KOD_GROUP_ROOT_ALL)
				){
				$cell['exists'] = 1;
			}

			//分享列表oexe
			if(get_path_ext($val['name']) == 'oexe' && is_file($thePath)){
				$json = json_decode(@file_get_contents($thePath),true);
				if(is_array($json)) $val = array_merge($val,$json);
			}
			if ($val['type']=='folder') {
				$list['folderList'][] = $cell;
			}else{
				$list['fileList'][] = $cell;
			}
		}
		$GLOBALS['kodPathAuthCheck'] = false;
		$GLOBALS['kodPathType'] = KOD_USER_FAV;
		$list['pathReadWrite'] = 'readable';
		return $list;
	}

	//用户组列表
	private function _pathGroup(&$list,$groupRootType){
		if($groupRootType == KOD_GROUP_ROOT_SELF){
			$dataList = $this->_groupSelf();
		}else{
			$dataList = $this->_groupTree('1');
		}
		$GLOBALS['kodPathAuthCheck'] = true;//组权限发生变更。导致访问groupPath 无权限退出问题
		foreach($dataList as $key => $val){
			$cell = array(
				'name'      => $val['name'],
				'menuType'  => "menu-group-root",
				'atime'		=> '',
				'ctime'		=> '',
				'mode'		=> '',
				'isReadable'	=> 1,
				'isWriteable'	=> 1,
				'exists'	=> 1,

				'path' 		=> $val['path'],
				'ext'		=> $val['ext'],
				'type'		=> 'folder',
				'open'      => false,
				'isParent'  => false//$val['isParent']
			);
			if ($val['type']=='folder') {
				$list['folderList'][] = $cell;
			}else{
				$list['fileList'][] = $cell;
			}
		}
		$GLOBALS['kodPathAuthCheck'] = false;
		$GLOBALS['kodPathType'] = $groupRootType;
		$list['pathReadWrite'] = 'readable';
		return $list;
	}

	//获取文件列表&哦exe文件json解析
	private function _path($dir,$listFile=true,$checkChildren=false){
		$exName = explode(',',$this->config['settingSystem']['pathHidden']);
		//当前目录
		$thisPath = _DIR_OUT(iconv_app($dir));
		if($GLOBALS['kodPathType'] == KOD_USER_SHARE && strpos(trim($dir,'/'),'/')===false ) {
			$thisPath = $dir;
		}
		$list = array(
			'folderList'		=> array(),
			'fileList'			=> array(),
			'info'				=> array(),
			'pathReadWrite'		=>'notExists',
			'thisPath' 			=> $thisPath
		);
		//真实目录读写权限判断
		if (!file_exists($dir)) {
			$list['pathReadWrite'] = "notExists";
		}else if (path_writeable($dir)) {
			$list['pathReadWrite'] = 'writeable';
		}else if (path_readable($dir)) {
			$list['pathReadWrite'] = 'readable';
		}else{
			$list['pathReadWrite'] = 'notReadable';
		}

		//处理
		if ($dir===false){
			return $list;
		}else if ($GLOBALS['kodPathType'] == KOD_USER_SHARE &&
			!strstr(trim($this->in['path'],'/'),'/')) {//分享根目录 {userShare}:1/ {userShare}:1/test/
			$list = $this->_pathShare($list);
		}else if ($GLOBALS['kodPathType'] == KOD_USER_FAV) {//收藏根目录 {userFav}
			$list = $this->_pathFav($list);
		}else if ($GLOBALS['kodPathType'] == KOD_GROUP_ROOT_SELF) {//自己用户组目录；KOD_GROUP_ROOT_SELF
			$list = $this->_pathGroup($list,$GLOBALS['kodPathType']);
		}else if ($GLOBALS['kodPathType'] == KOD_GROUP_ROOT_ALL) {//全部用户组目录；KOD_GROUP_ROOT_ALL
			$list = $this->_pathGroup($list,$GLOBALS['kodPathType']);
		}else{
			$listFile = path_list($dir,$listFile,true);//$checkChildren
			$list['folderList'] = $listFile['folderList'];
			$list['fileList'] = $listFile['fileList'];
		}
		$fileListNew = array();
		$folderListNew = array();
		foreach ($list['fileList'] as $key => $val) {
			if (in_array($val['name'],$exName)) continue;
			$val['ext'] = get_path_ext($val['name']);
			if ($val['ext'] == 'oexe' && !isset($val['content'])){
				$path = iconv_system($val['path']);
				$json = json_decode(@file_get_contents($path),true);
				if(is_array($json)) $val = array_merge($val,$json);
			}
			$fileListNew[] = $val;
		}
		foreach ($list['folderList'] as $key => $val) {
			if (in_array($val['name'],$exName)) continue;
			$folderListNew[] = $val;
		}
		$list['fileList'] = $fileListNew;
		$list['folderList'] = $folderListNew;
		
		$list = _DIR_OUT($list);
		$this->_roleCheckInfo($list);

		
		return $list;
	}
	private function _roleCheckInfo(&$list){
		if(!$GLOBALS['kodPathType']){
			$list['info'] = array("pathType"=>'',"role"=>'',"id"=>'','name'=>'');
			return;
		}
		$list['info']= array(
			"pathType"	=> $GLOBALS['kodPathType'],
			"role"      => $GLOBALS['isRoot']?'owner':'guest',
			"id"        => $GLOBALS['kodPathId'],
			'name'      => '',
		);

		if ($GLOBALS['kodPathType'] == KOD_USER_SHARE) {
			$GLOBALS['kodPathId'] = explode(':',$GLOBALS['kodPathId']);
			$GLOBALS['kodPathId'] = $GLOBALS['kodPathId'][0];//id 为前面
			$list['info']['id'] = $GLOBALS['kodPathId'];
			$user = systemMember::getInfo($GLOBALS['kodPathId']);
			$list['info']['name'] = $user['name'];

			//自己的分享子目录
			if($GLOBALS['kodPathId'] == $this->user["userID"]){
				$list['info']['role'] = "owner";
			}
			if($GLOBALS['isRoot']){
				$list['info']['adminRealPath'] = get_path_father($GLOBALS['kodPathPre']);
			}
		}
		//自己管理的目录
		if ($GLOBALS['kodPathType']==KOD_GROUP_PATH ||
			$GLOBALS['kodPathType']==KOD_GROUP_SHARE) {
			$group = systemGroup::getInfo($GLOBALS['kodPathId']);
			$list['info']['name'] = $group['name'];
			$auth = systemMember::userAuthGroup($GLOBALS['kodPathId']);
			if ($auth) {
				$list['info']['role'] = 'owner';
				$list['groupSpaceUse'] = $group['config'];//自己

				//群组权限展示
				$role = $this->config['pathRoleGroup'][$auth];
				$roleArr = role_permission_arr($role['actions']);
				$list['info']['groupRole'] = array(
					'name'  	=> $role['name'],
					'style' 	=> $role['style'],
					'authArr'	=> $roleArr
				);
			}
			if($GLOBALS['isRoot']){
				$list['groupSpaceUse'] = $group['config'];//自己
				$list['info']['role'] = 'owner';
				$list['info']['adminRealPath'] = $GLOBALS['kodPathPre'];
			}
		}
	}
}
