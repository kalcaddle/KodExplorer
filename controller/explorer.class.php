<?php
/*
* @link http://www.kalcaddle.com/
* @author warlee | e-mail:kalcaddle@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kalcaddle.com/tools/licenses/license.txt
*/

class explorer extends Controller{
	public $path;
	public $user;
	public function __construct(){
		parent::__construct();
		$this->tpl = TEMPLATE.'explorer/';
		$this->user = $_SESSION['kod_user'];
		if (isset($this->in['path'])) {
			$this->path = _DIR($this->in['path']);
			$this->check_system_path();
		}
	}
	public function index(){
		$dir = '';
		if(isset($this->in['path']) && $this->in['path'] !=''){
			$dir = _DIR_CLEAR($_GET['path']);
			$dir = rtrim($dir,'/').'/';
		}
		$this->assign('dir',$dir);
		if ($this->config['forceWap']) {
			$this->display('index_wap.php');
		}else{
			$this->display('index.php');
		}
	}

	//system virtual folder;
	private function check_system_path(){
		if(!in_array(ACT,array('mkfile','mkdir','search','pathCuteDrag','pathCopyDrag','pathPast','fileDownload'))){
			return;
		}
		if( $GLOBALS['path_type'] == KOD_USER_SHARE && 
			!strstr(trim($this->in['path'],'/'),'/')){//分享根目录
			show_json($this->L['error'],false);
		}
		if(in_array($GLOBALS['path_type'],array(
				KOD_USER_FAV,
				KOD_GROUP_ROOT_ALL,
				KOD_GROUP_ROOT_SELF
				)
			)){
			show_json($this->L['system_path_not_change'],false);
		}
	}

	public function pathInfo(){
		$info_list = json_decode($this->in['list'],true);
		if(!$info_list){
			show_json($this->L['error'],false);
		}
		foreach ($info_list as &$val) {
			$val['path'] = _DIR($val['path']);
		}
		$data = path_info_muti($info_list,$this->L['time_type_info']);
		if(!$data){
			show_json($this->L['not_exists'],false);
		}

		//属性查看，单个文件则生成临时下载地址。没有权限则不显示
		if (count($info_list)==1 && $info_list[0]['type']!='folder') {//单个文件
			$file = $info_list[0]['path'];
			if( $GLOBALS['is_root'] || 
				$GLOBALS['auth']['explorer:fileDownload']==1 ||
				isset($this->in['viewPage'])){
				$data['download_path'] = _make_file_proxy($file);
			}
			if($data['size'] < 100*1024|| isset($this->in['get_md5'])){//100kb
				$data['file_md5'] = @md5_file($file);
			}else{
				$data['file_md5'] = "...";
			}

			//获取图片尺寸
			$ext = get_path_ext($file);
			if(in_array($ext,array('jpg','gif','png','jpeg','bmp')) ){
				load_class('imageThumb');
				$size = imageThumb::imageSize($file);
				if($size){
					$data['image_size'] = $size;
				}
			}
		}
		$data['path'] = _DIR_OUT($data['path']);
		show_json($data);
	}

	public function pathChmod(){
		$info_list = json_decode($this->in['list'],true);
		if(!$info_list){
			show_json($this->L['error'],false);
		}
		$mod = octdec('0'.$this->in['mod']);
		$success=0;$error=0;
		foreach ($info_list as $val) {
			$path = _DIR($val['path']);
			if(chmod_path($path,$mod)){
				$success++;
			}else{
				$error++;
			}
		}
		$state = $error==0?true:false;
		$info = $success.' success,'.$error.' error';
		if (count($info_list) == 1 && $error==0) {
			$info = $this->L['success'];
		}
		show_json($info,$state);
	}

	public function mkfile(){
		$tpl_path = BASIC_PATH.'static/others/newfile-tpl/';
		space_size_use_check();
		$repeat_type = 'skip';
		if(isset($this->in['repeat_type'])){
			$repeat_type = $this->in['repeat_type'];
		}
		$new= rtrim($this->path,'/');
		$new = get_filename_auto($new,'',$repeat_type);//已存在处理 创建副本
		if(@touch($new)){
			chmod_path($new,DEFAULT_PERRMISSIONS);
			if (isset($this->in['content'])) {
				file_put_contents($new,$this->in['content']);
			}else{
				$ext = get_path_ext($new);
				$tpl_file = $tpl_path.'newfile.'.$ext;
				if(file_exists($tpl_file)){
					$content = file_get_contents($tpl_file);
					file_put_contents($new,$content);
				}
			}
			space_size_use_change($new);
			show_json($this->L['create_success'],true,_DIR_OUT(iconv_app($new)) );
		}else{
			show_json($this->L['create_error'],false);
		}
	}
	public function mkdir(){
		space_size_use_check();
		$repeat_type = 'skip';
		if(isset($this->in['repeat_type'])){
			$repeat_type = $this->in['repeat_type'];
		}
		$new = rtrim($this->path,'/');
		$new = get_filename_auto($new,'',$repeat_type);//已存在处理 创建副本
		if(mk_dir($new,DEFAULT_PERRMISSIONS)){
			chmod_path($new,DEFAULT_PERRMISSIONS);
			show_json($this->L['create_success'],true,_DIR_OUT(iconv_app($new)) );
		}else{
			show_json($this->L['create_error'],false);
		}
	}

	public function pathRname(){
		$rname_to=_DIR($this->in['rname_to']);
		if (file_exist_case($rname_to)) {
			show_json($this->L['name_isexists'],false);
		}
		if(@rename($this->path,$rname_to)){
			show_json($this->L['rname_success'],true,_DIR_OUT(iconv_app($rname_to)) );
		}else{
			show_json($this->L['no_permission_write_all'],false);
		}
	}

	public function search(){
		if (!isset($this->in['search'])) show_json($this->L['please_inpute_search_words'],false);

		$is_content = intval($this->in['is_content']);
		$is_case = intval($this->in['is_case']);
		$ext= trim($this->in['ext']);
		//共享根目录不支持搜索
		if( $GLOBALS['path_type'] == KOD_USER_SHARE &&
			strstr($this->path,KOD_USER_SHARE)){
			show_json($this->L['path_cannot_search'],false);
		}
		$list = path_search(
			$this->path,
			iconv_system(rawurldecode($this->in['search'])),
			$is_content,$ext,$is_case);
		show_json(_DIR_OUT($list));
	}

	public function pathList(){
		$user_path = $this->in['path'];
		if ($user_path=="")  $user_path='/';
		$list=$this->path($this->path);

		//自己的根目录
		if($this->path== MYHOME || $this->path==HOME){
			$this->_self_root_load($list['folderlist']);
		}

		//群组根目录
		if( $list['info']['path_type'] == KOD_GROUP_PATH &&
			!strstr(trim(_DIR_CLEAR($this->in['path']),'/'),'/')
		   ){//自己的根目录
			$this->_self_group_load($list['folderlist']);
		}
		$list['user_space'] = $this->user['config'];
		show_json($list);
	}

	public function treeList(){//树结构
		$app = $this->in['app'];//是否获取文件 传folder|file
		if (isset($this->in['type']) && $this->in['type']=='init'){
			$this->_tree_init($app);
		}
		//根树目录请求
		switch(trim(rawurldecode($this->in['path']))){
			case KOD_USER_FAV:
				show_json($this->_tree_fav(),true);
				break;
			case KOD_GROUP_ROOT_SELF:
				show_json($this->_group_self(),true);
				break;
			case KOD_GROUP_ROOT_ALL:
				show_json($this->_group_tree('1'),true);
				break;
			default:break;
		}

		//树目录组处理
		if ( (isset($this->in['tree_icon']) && $this->in['tree_icon']!='groupPublic') &&  //公共目录刷新排除
			!strstr(trim(rawurldecode($this->in['path']),'/'),'/') &&
			($GLOBALS['path_type'] == KOD_GROUP_PATH||
			$GLOBALS['path_type'] == KOD_GROUP_SHARE)) {
			$list = $this->_group_tree($GLOBALS['path_id']);
			show_json($list,true);
			return;
		}

		//正常目录
		$path=_DIR($this->in['path']);
		if (!path_readable($path)) show_json($this->L['no_permission_read'],false);
		$list_file = ($app == 'editor'?true:false);//编辑器内列出文件
		$list=$this->path($path,$list_file,true);
		function sort_by_key($a, $b){
			if ($a['name'] == $b['name']) return 0;
			return ($a['name'] > $b['name']) ? 1 : -1;
		}
		usort($list['folderlist'], "sort_by_key");
		usort($list['filelist'], "sort_by_key");
		if($path == MYHOME || $path==HOME){//自己的根目录
			// $this->_self_root_load($list['folderlist']);
		}
		if ($app == 'editor') {
			$res = array_merge($list['folderlist'],$list['filelist']);
			show_json($res,true);
		}else{
			show_json($list['folderlist'],true);
		}
	}

	//用户根目录
	private function _self_group_load(&$root){
		foreach ($root as $key => $value) {
			if($value['name'] == 'share'){
				$root[$key] = array(
					'name'		=> $this->L['group_share'],
					'menuType'  => "menufolder folderBox",
					'ext' 		=> "folder_share",
					'isParent'	=> true,
					'is_readable'	=> true,
					'is_writeable'	=> true,

					'path' 		=> KOD_GROUP_PATH.':'.$GLOBALS['path_id'].'/share/',
					'type'      => 'folder',
					'open'      => false,
					'isParent'  => false
				);
				break;
			}
		}
		$root = array_values($root);
	}

	//用户根目录
	private function _self_root_load(&$root){
		foreach ($root as $key => $value) {
			if($value['name'] == 'share'){
				$root[$key] = array(
					'name'		=> $this->L['my_share'],
					'menuType'  => "menuTreeUser",
					'ext' 		=> "folder_share",
					'isParent'	=> true,
					'is_readable'	=> true,
					'is_writeable'	=> true,

					'path' 		=> KOD_USER_SHARE.':'.$this->user["user_id"].'/',
					'type'      => 'folder',
					'open'      => false,
					'isParent'  => false
				);
				break;
			}
		}
		$root = array_values($root);
		//不开启回收站则不显示回收站
		if($this->config['user']['recycle_open']=="1"){
			// $root[] = array(
			// 	'name'=>$this->L['recycle'],
			// 	'menuType'  =>"menuRecycleButton",
			// 	'ext' 		=>"recycle",
			// 	'isParent'	=> true,
			// 	'is_readable'	=> true,
			// 	'is_writeable'	=> true,

			// 	'path' 		=> KOD_USER_RECYCLE,
			// 	'type'      => 'folder',
			// 	'open'      => true,
			// 	'isParent'  => false
			// );
		}
	}


	private function _tree_fav(){
		$check_file = ($this->in['app'] == 'editor'?true:false);
		$favData=new fileCache(USER.'data/fav.php');
		$fav_list = $favData->get();
		$fav = array();
		$GLOBALS['path_from_auth_check'] = true;//组权限发生变更。导致访问group_path 无权限退出问题
		foreach($fav_list as $key => $val){
			$has_children = path_haschildren(_DIR($val['path']),$check_file);
			if( !isset($val['type'])){
				$val['type'] = 'folder';
			}
			if( in_array($val['type'],array('group'))){
				$has_children = true;
			}
			$the_fav = array(
				'name'      => $val['name'],
				'ext' 		=> isset($val['ext'])?$val['ext']:"",
				'menuType'  => "menuTreeFav",

				'path' 		=> $val['path'],
				'type'      => $val['type'],
				'open'      => false,
				'isParent'  => $has_children
			);
			if(isset($val['type']) && $val['type']!='folder'){//icon优化
				$the_fav['ext'] = $val['type'];
			}
			$fav[] = $the_fav;
		}
		$GLOBALS['path_from_auth_check'] = false;
		return $fav;
	}

	private function _tree_init($app){
		if ($app == 'editor' && isset($this->in['project'])) {
			$list_project = $this->path(_DIR($this->in['project']),true,true);
			$project = array_merge($list_project['folderlist'],$list_project['filelist']);
			$tree_data = array(
				array('name'=> get_path_this($this->in['project']),
					'children'	=>$project,
					'menuType'  => "menuTreeRoot",
					'ext' 		=> "folder",

					'path' 		=> $this->in['project'],
					'type'      => 'folder',
					'open'      => true,
					'isParent'  => count($project)>0?true:false)
			);
			show_json($tree_data);
			return;
		}
		$check_file = ($app == 'editor'?true:false);
		$fav = $this->_tree_fav($app);

		$public_path = KOD_GROUP_PATH.':1/';

		$group_root  = system_group::get_info(1);
		$group_root_name = $this->L['public_path'];
		if($group_root && $group_root['name'] != 'public'){
			$group_root_name = $group_root['name'];
		}

		if(system_member::user_auth_group(1) == false){
			$public_path = KOD_GROUP_SHARE.':1/';//不在公共组则只能读取公共组共享目录
		}
		$list_public = $this->path(_DIR($public_path),$check_file,true);
		$list_root  = $this->path(_DIR(MYHOME),$check_file,true);
		if ($check_file) {//编辑器
			$root = array_merge($list_root['folderlist'],$list_root['filelist']);
			$public = array_merge($list_public['folderlist'],$list_public['filelist']);
		}else{//文件管理器
			$root  = $list_root['folderlist'];
			$public = $list_public['folderlist'];
			//$this->_self_root_load($root);//自己的根目录 含有我的共享和回收站
		}

		$root_isparent = count($root)>0?true:false;
		$public_isparent = count($public)>0?true:false;
		$tree_data = array(
			'fav'=>array(
				'name'      => $this->L['fav'],
				'ext' 		=> "treeFav",
				'menuType'  => "menuTreeFavRoot",
				'children'  => $fav,

				'path' 		=> KOD_USER_FAV,
				'type'      => 'folder',
				'open'      => true,
				'isParent'  => count($fav)>0?true:false
			),
			'my_home'=>array(
				'name'		=> $this->L['root_path'],
				'menuType'  => "menuTreeRoot",
				'ext' 		=> "treeSelf",
				'children'  => $root,

				'path' 		=> MYHOME,
				'type'      => 'folder',
				'open'      => true,
				'isParent'  => $root_isparent
			),

			'public'=>array(
				'name'		=> $group_root_name,
				'menuType'  => "menuTreeGroupRoot",
				'ext' 		=> "groupPublic",
				'children'  => $public,

				'path' 		=> $public_path,
				'type'      => 'folder',
				'open'      => true,
				'isParent'  => $public_isparent
			),
			'my_group'=>array(
				'name'		=> $this->L['my_kod_group'],//TODO
				'menuType'  => "menuTreeGroupRoot",
				'ext' 		=> "groupSelfRoot",
				'children'  => $this->_group_self(),

				'path' 		=> KOD_GROUP_ROOT_SELF,
				'type'      => 'folder',
				'open'      => true,
				'isParent'  => true
			),
			'group'=>array(
				'name'		=> $this->L['kod_group'],
				'menuType'  => "menuTreeGroupRoot",
				'ext' 		=> "groupRoot",
				'children'  => $this->_group_tree('1'),

				'path' 		=> KOD_GROUP_ROOT_ALL,
				'type'      => 'folder',
				'open'      => true,
				'isParent'  => true
			),
		);

		//编辑器简化树目录
		if($app == 'editor'){
			unset($tree_data['my_group']);
			unset($tree_data['group']);
			unset($tree_data['public']);
			//管理员，优化编辑器树目录
			if($GLOBALS['is_root']==1){
				$list_web  = $this->path(_DIR(WEB_ROOT),$check_file,true);
				$web = array_merge($list_web['folderlist'],$list_web['filelist']);
				$tree_data['webroot'] = array(
					'name'      => "webroot",
					'menuType'  => "menuTreeRoot",
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
		foreach ($tree_data as $key => $value) { //为空则不展示
			if( count($value['children'])<1 && 
				in_array($key,array('my_group','group')) ){//'fav'
				continue;
				//$value['isParent'] = false;
			}
			$result[] = $value;
		}
		show_json($result);
	}

	//session记录用户可以管理的组织；继承关系
	private function _group_tree($node_id){//获取组织架构的用户和子组织；为空则获取根目录
		$group_sql = system_group::load_data();
		$groups = $group_sql->get(array('parent_id',$node_id));
		$group_list = $this->_make_node_list($groups);

		//user
		$user_list = array();
		if($node_id !='1'){//根组不显示用户
			$user = system_member::get_user_at_group($node_id);
			foreach($user as $key => $val){
				$tree_icon = 'user';
				if ($val['user_id'] == $this->user['user_id']) {
					$tree_icon = 'userSelf';
				}
				$user_list[] = array(
					'name'      => $val['name'],
					'menuType'  => "menuTreeUser",
					'ext' 		=> $tree_icon,

					'path' 		=> KOD_USER_SHARE.':'.$val['user_id'].'/',
					'type'      => 'folder',
					'open'      => false,
					'isParent'  => false
				);
			}
		}
		$arr = array_merge($group_list,$user_list);
		return $arr;
	}
	//session记录用户可以管理的组织；继承关系
	private function _group_self(){//获取组织架构的用户和子组织；为空则获取根目录
		$groups = array();
		foreach ($this->user['group_info'] as $group_id=>$val){
			if($group_id=='1') continue;
			$item = system_group::get_info($group_id);
			if($item){
				$groups[] = $item;
			}
		}
		return $this->_make_node_list($groups);
	}
	private function _make_node_list($list){
		$group_list = array();
		if(!is_array($list)){
			return $group_list;
		}
		foreach($list as $key => $val){
			$group_path = KOD_GROUP_PATH;
			$auth = system_member::user_auth_group($val['group_id']);
			if($auth==false){//是否为该组内部成员
				$group_path = KOD_GROUP_SHARE;
				$tree_icon = 'groupGuest';
			}else if($auth=='read'){
				$tree_icon = 'groupSelf';
			}else{
				$tree_icon = 'groupSelfOwner';
			}
			$has_children = true;
			$user_list = system_member::get_user_at_group($val['group_id']);

			if(count($user_list)==0 && $val['children']==''){
				$has_children = false;
			}
			$group_list[] = array(
				'name'      => $val['name'],
				'type'      => 'folder',
				'path' 		=> $group_path.':'.$val['group_id'].'/',
				'ext' 		=> $tree_icon,
				'tree_icon'	=> $tree_icon,//request

				'menuType'  => "menuTreeGroup",
				'isParent'  => $has_children
			);
		}
		return $group_list;
	}
	public function pathDelete(){
		$list = json_decode($this->in['list'],true);
		$user_recycle = iconv_system(USER_RECYCLE);
		if (!is_dir($user_recycle)){
			mk_dir($user_recycle);
		}

		$remove_to_recycle = $this->config['user']['recycle_open'];
		if(!path_writeable($user_recycle)){//回收站不可写则直接删除；挂载
			//show_json($this->L['no_permission_write'],false);
			$remove_to_recycle = '0';
		}
		$success=0;$error=0;
		foreach ($list as $val) {
			if(!$val['path'] || $val['path'] == '/'){
				$error++;
				continue;
			}
			$path_this = _DIR($val['path']);
			//不是自己目录的分享列表，不支持删除
			if( $GLOBALS['path_type'] == KOD_USER_SHARE &&
				$GLOBALS['path_id']   != $_SESSION['kod_user']['user_id'] &&
				substr_count(trim($val['path'],'/'),'/') <= 1){ //分享根项目
				show_json($this->L['no_permission_write'],false);
			}

			// 群组文件删除，移动到个人回收站。
			// $GLOBALS['path_type'] == KOD_GROUP_SHARE ||
			// $GLOBALS['path_type'] == KOD_GROUP_PATH  ||
			if( $remove_to_recycle !="1"  ||
				$GLOBALS['path_type'] == KOD_USER_RECYCLE ){//回收站删除 or 共享删除等直接删除
				if ($val['type'] == 'folder') {
					if(del_dir($path_this)) $success ++;
					else $error++;
				}else{
					if(del_file($path_this)) $success++;
					else $error++;
				}
				space_size_use_reset();//使用空间重置

			}else{
				$filename = $user_recycle.get_path_this($path_this);
				$filename = get_filename_auto($filename,date('_H-i-s'),'folder_rename');//已存在则追加时间
				if (move_path($path_this,$filename,'',$this->config['user']['file_repeat'])) {
					$success++;
				}else{
					$error++;
				}
			}
		}
		$state = $error==0?true:false;
		$info = $success.' success,'.$error.' error';
		if ($error==0) {
			$info = $this->L['remove_success'];
		}
		show_json($info,$state);
	}

	private function clearTemp(){
		$path = iconv_system(USER_TEMP);
		$time = @filemtime($path);
		if(time() - $time > 600){//10min without updload
			del_dir($path);
			mk_dir($path);
		}
	}

	public function pathDeleteRecycle(){
		$user_recycle = iconv_system(USER_RECYCLE);
		if(!isset($this->in['list'])){
			if (!del_dir($user_recycle)) {
				show_json($this->L['remove_fali'],false);
			}else{
				mkdir($user_recycle);
				$this->clearTemp();
				space_size_use_reset();//使用空间重置
				show_json($this->L['recycle_clear_success'],true);
			}
		}
		$list = json_decode($this->in['list'],true);
		$success = 0;$error   = 0;
		foreach ($list as $val) {
			$path_full = _DIR($val['path']);
			if ($val['type'] == 'folder') {
				if(del_dir($path_full)) $success ++;
				else $error++;
			}else{
				if(del_file($path_full)) $success++;
				else $error++;
			}
		}
		space_size_use_reset();//使用空间重置
		if (count($list) == 1) {
			if ($success) show_json($this->L['remove_success']);
			else show_json($this->L['remove_fali'],false);
		}else{
			$code = $error==0?true:false;
			show_json($this->L['remove_success'].$success.'success,'.$error.'error',$code);
		}
	}

	public function pathCopy(){
		session_start();//re start
		$the_list = json_decode($this->in['list'],true);
		$_SESSION['path_copy']= json_encode($the_list);
		$_SESSION['path_copy_type']='copy';
		show_json($this->L['copy_success'],ture,$_SESSION);
	}
	public function pathCute(){
		session_start();//re start
		$the_list = json_decode($this->in['list'],true);
		foreach ($the_list as $key => &$value) {
			$value['path'] = rawurldecode($value['path']);
			_DIR($value['path']);
		}
		$_SESSION['path_copy']= json_encode($the_list);
		$_SESSION['path_copy_type']='cute';
		show_json($this->L['cute_success']);
	}
	public function pathCuteDrag(){
		$clipboard = json_decode($this->in['list'],true);
		$path_past=$this->path;
		$before_path_type = $GLOBALS['path_type'];
		$before_path_id = $GLOBALS['path_id'];

		if (!path_writeable($this->path)) show_json($this->L['no_permission_write'],false);
		$success=0;$error=0;$data = array();
		foreach ($clipboard as $val) {
			$path_copy = _DIR($val['path']);
			$filename  = get_path_this($path_copy);
			$auto_path = get_filename_auto($path_past.$filename,'',$this->config['user']['file_repeat']);//已存在处理 创建副本

			//跨空间检测
			if($before_path_id != $GLOBALS['path_id']){
				space_size_use_check();
			}
			if (move_path($path_copy,$auto_path,'',$this->config['user']['file_repeat'])) {
				$success++;
				//跨空间操作  用户——组——其他组 任意两者见处理；移动到此处；之前的空间使用量减少，目前的增加
				if($before_path_id != $GLOBALS['path_id']){
					space_size_use_change($auto_path);
					space_size_use_change($auto_path,false,$before_path_type,$before_path_id);
				}
				$data[] = _DIR_OUT(iconv_app($auto_path));
			}else{
				$error++;
			}
		}
		$state = $error==0?true:false;
		$msg = $success.' success,'.$error.' error';
		if($error == 0){
			$msg = $this->L['success'];
		}
		show_json($msg,$state,$data);
	}

	public function pathCopyDrag(){
		$clipboard = json_decode($this->in['list'],true);
		$path_past=$this->path;
		$before_path_type = $GLOBALS['path_type'];
		$before_path_id = $GLOBALS['path_id'];
		space_size_use_check();
		
		if (!path_writeable($this->path)) show_json($this->L['no_permission_write'],false);
		$success=0;$error=0;$data = array();
		foreach ($clipboard as $val) {
			$path_copy = _DIR($val['path']);
			$filename = get_path_this($path_copy);
			$auto_path = get_filename_auto($path_past.$filename,'',$this->config['user']['file_repeat']);

			if ($this->in['filename_auto']==1 &&
				trim($auto_path,'/') == trim($path_copy,'/')) {
				$auto_path = get_filename_auto($path_past.$filename,'','folder_rename');				
			}
			if(copy_dir($path_copy,$auto_path)){
				$success++;
				space_size_use_change($filename);//空间使用增加
				$data[] = _DIR_OUT(iconv_app($auto_path));
			}else{
				$error++;
			}
		}
		$state = $error==0?true:false;
		$msg = $success.' success,'.$error.' error';
		if($error == 0){
			$msg = $this->L['success'];
		}
		show_json($msg,$state,$data);
	}

	public function clipboard(){
		$clipboard = json_decode($_SESSION['path_copy'],true);
		if(!$clipboard){
			$clipboard = array();
		}
		show_json($clipboard,true,$_SESSION['path_copy_type']);
	}
	public function pathPast(){
		if (!isset($_SESSION['path_copy'])){
			show_json($this->L['clipboard_null'],false,array());
		}

		$path_past=$this->path;//之前就自动处理权限判断；
		session_start();//re start
		$error = '';
		$data = array();
		$clipboard = json_decode($_SESSION['path_copy'],true);
		$copy_type = $_SESSION['path_copy_type'];
		$before_path_type = $GLOBALS['path_type'];
		$before_path_id = $GLOBALS['path_id'];
		if (!path_writeable($path_past)) show_json($this->L['no_permission_write'],false,$data);

		if ($copy_type == 'copy') {
		}else{
			$_SESSION['path_copy'] = json_encode(array());
			$_SESSION['path_copy_type'] = '';
		}
		session_write_close();

		$GLOBALS['path_from_auth_check'] = true;//粘贴来源检测权限；和粘贴到目标位置冲突
		$list_num = count($clipboard);
		if ($list_num == 0) {
			show_json($this->L['clipboard_null'],false,$data);
		}
		for ($i=0; $i < $list_num; $i++) {
			$path_copy = _DIR($clipboard[$i]['path']);
			_DIR($this->in['path']);//重置path_type等数据
			$filename  = get_path_this($path_copy);
			$filename_out  = iconv_app($filename);
			if (!file_exists($path_copy)){
				$error .= "<li>{$filename_out}".$this->L['copy_not_exists']."</li>";
				continue;
			}
			if ($clipboard[$i]['type'] == 'folder'){
				if ($path_copy == substr($path_past,0,strlen($path_copy))){
					$error .="<em style='color:#fff;'>{$filename_out}".$this->L['current_has_parent']."</em>";
					continue;
				}
			}
			$auto_path = get_filename_auto($path_past.$filename,'',$this->config['user']['file_repeat']);
			$filename = get_path_this($auto_path);
			if ($copy_type == 'copy') {
				space_size_use_check();
				copy_dir($path_copy,$auto_path);
				space_size_use_change($filename);
			}else{
				if($before_path_id != $GLOBALS['path_id']){
					space_size_use_check();
				}
				move_path($path_copy,$auto_path,'',$this->config['user']['file_repeat']);
				//跨空间操作  用户——组——其他组 任意两者见处理；移动到此处；之前的空间使用量减少，目前的增加
				if($before_path_id != $GLOBALS['path_id']){
					space_size_use_change($filename);
					space_size_use_change($filename,false,$before_path_type,$before_path_id);
				}
			}
			$data[] = _DIR_OUT(iconv_app($auto_path));
		}
		if ($copy_type == 'copy') {
			$msg=$this->L['past_success'].$error;
		}else{
			$msg=$this->L['cute_past_success'].$error;
		}
		$state = ($error ==''?true:false);
		show_json($msg,$state,$data);
	}
	public function fileDownload(){
		file_put_out($this->path,true);
	}
	//文件下载后删除,用于文件夹下载
	public function fileDownloadRemove(){
		$path = rawurldecode(_DIR_CLEAR($this->in['path']));
		$path = iconv_system(USER_TEMP.$path);
		space_size_use_change($path,false);//使用空间回收
		file_put_out($path,true);
		del_file($path);
	}
	public function zipDownload(){
		$user_temp = iconv_system(USER_TEMP);
		if(!file_exists($user_temp)){
			mkdir($user_temp);
		}else{//清除未删除的临时文件，一天前
			$list = path_list($user_temp,true,false);
			$max_time = 3600*24;//自动清空一天前的缓存
			if ($list['filelist']>=1) {
				for ($i=0; $i < count($list['filelist']); $i++) {
					$create_time = $list['filelist'][$i]['mtime'];//最后修改时间
					if(time() - $create_time >$max_time){
						del_file($list['filelist'][$i]['path'].$list['filelist'][$i]['name']);
					}
				}
			}
		}
		$zip_file = $this->zip($user_temp);
		show_json($this->L['zip_success'],true,get_path_this($zip_file));
	}
	public function zip($zip_path=''){
		load_class('pclzip');
		ignore_timeout();

		$zip_list = json_decode($this->in['list'],true);
		$list_num = count($zip_list);
		$files = array();
		for ($i=0; $i < $list_num; $i++) {
			$item = rtrim(_DIR($zip_list[$i]['path']),'/');//处理成系统 文件编码
			if(file_exists($item)){
				$files[] = $item;
			}
		}
		if(count($files)==0){
			show_json($this->L['not_exists'],false);
		}

		//指定目录
		$basic_path = $zip_path;
		if ($zip_path==''){
			$basic_path =get_path_father($files[0]);
		}
		if (!path_writeable($basic_path)) {
			show_json($this->L['no_permission_write'],false);
		}

		if (count($files) == 1){
			$path_this_name=get_path_this($files[0]);
		}else{
			$path_this_name=get_path_this(get_path_father($files[0]));
		}
		$zipname = $basic_path.$path_this_name.'.zip';
		$zipname = get_filename_auto($zipname,'',$this->config['user']['file_repeat']);
		space_size_use_check();
		

		$archive = new PclZip($zipname);
		foreach ($files as $key =>$val) {
			$remove_path_pre = _DIR_CLEAR(get_path_father($val));
			if($key ==0){
				$v_list = $archive->create($val,
					PCLZIP_OPT_REMOVE_PATH,$remove_path_pre,
					PCLZIP_CB_PRE_FILE_NAME,'zip_pre_name'
				);
				continue;
			}
			$v_list = $archive->add($val,
				PCLZIP_OPT_REMOVE_PATH,$remove_path_pre,
				PCLZIP_CB_PRE_FILE_NAME,'zip_pre_name'
			);
		}
		space_size_use_change($zipname);//使用的空间增加
		if ($v_list == 0) {
			show_json("Create error!",false);
		}
		$info = $this->L['zip_success'].$this->L['size'].":".size_format(filesize($zipname));
		if ($zip_path=='') {
			show_json($info,true,_DIR_OUT(iconv_app($zipname)) );
		}else{
			return iconv_app($zipname);
		}
	}
	public function unzip(){
		load_class('pclzip');
		ignore_timeout();

		$path=$this->path;
		$name = get_path_this($path);
		$name = substr($name,0,strrpos($name,'.'));
		$ext  = get_path_ext($path);
		$unzip_to=get_path_father($path).$name;//解压在该文件夹内：
		if(isset($this->in['to_this'])){//直接解压
			$unzip_to=get_path_father($path);
		}

		//$unzip_to=get_path_father($path);//解压到当前
		if (isset($this->in['path_to'])) {//解压到指定位置
			$unzip_to = _DIR($this->in['path_to']);
		}
		//所在目录不可写
		if (!path_writeable(get_path_father($path))){
			show_json($this->L['no_permission_write'],false);
		}
		space_size_use_check();
		$zip = new PclZip($path);
		unzip_charset_get($zip->listContent());
		$result = $zip->extract(PCLZIP_OPT_PATH,$unzip_to,
								PCLZIP_OPT_SET_CHMOD,DEFAULT_PERRMISSIONS,
								PCLZIP_CB_PRE_FILE_NAME,'unzip_pre_name',
								PCLZIP_CB_PRE_EXTRACT,"check_ext_unzip",
								PCLZIP_OPT_REPLACE_NEWER);//解压到某个地方,覆盖方式
		if ($result == 0) {
			show_json("Error : ".$zip->errorInfo(true),fasle);
		}else{
			space_size_use_change($path);//使用的空间增加 近似使用压缩文件大小；
			show_json($this->L['unzip_success']);
		}
	}

	public function imageRotate(){
		load_class('imageThumb');
		$cm=new imageThumb($this->path,'file');
		$result = $cm->imgRotate($this->path,intval($this->in['rotate']));
		if($result){
			show_json($this->L['success']);
		}else{
			show_json($this->L['error'],false);
		}
	}

	//缩略图
	public function image(){
		if (filesize($this->path) <= 1024*20 ||
			!function_exists('imagecolorallocate') ) {//小于20k或者不支持gd库 不再生成缩略图
			file_put_out($this->path);
			return;
		}
		if (!is_dir(DATA_THUMB)){
			mk_dir(DATA_THUMB);
		}
		
		load_class('imageThumb');
		$image = $this->path;
		$image_md5  = @md5_file($image);//文件md5

		if (strlen($image_md5)<5) {
			$image_md5 = md5($image);
		}
		$image_thum = DATA_THUMB.$image_md5.'.png';
		if (!file_exists($image_thum)){//如果拼装成的url不存在则没有生成过
			if (get_path_father($image)==DATA_THUMB){//当前目录则不生成缩略图
				$image_thum=$this->path;
			}else {
				$cm=new imageThumb($image,'file');
				$cm->prorate($image_thum,250,250);//生成等比例缩略图
			}
		}
		if (!file_exists($image_thum) || 
			filesize($image_thum)<100){//缩略图生成失败则使用原图
			$image_thum=$this->path;
		}
		file_put_out($image_thum);
	}

	// 远程下载
	public function serverDownload() {
		$uuid = 'download_'.$this->in['uuid'];
		if ($this->in['type'] == 'percent') {//获取下载进度
			if (isset($_SESSION[$uuid])){
				$info = $_SESSION[$uuid];
				$result = array(
					'support_range' => $info['support_range'],
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
			$the_file = str_replace('.downloading','',$_SESSION[$uuid]['path']);
			del_file($the_file.'.downloading');
			del_file($the_file.'.download.cfg');
			unset($_SESSION[$uuid]);
			show_json('remove_success',false);
		}
		//下载
		$save_path = _DIR($this->in['save_path']);
		if (!path_writeable($save_path)){
		   show_json($this->L['no_permission_write'],false);
		}
		$url = rawurldecode($this->in['url']);
		$header = url_header($url);
		if (!$header){
			show_json($this->L['download_error_exists'],false);
		}
		$save_path = $save_path.$header['name'];
		if (!checkExt($save_path)){//不允许的扩展名
			$save_path = _DIR($this->in['save_path']).date('-h:i:s').'.dat';
		}
		space_size_use_check();
		$save_path = get_filename_auto(iconv_system($save_path),'',$this->config['user']['file_repeat']);
		$save_path_temp = $save_path.'.downloading';
		session_start();
		$_SESSION[$uuid] = array(
			'support_range' => $header['support_range'],
			'length'=> $header['length'],
			'path'	=> $save_path_temp,
			'name'	=> get_path_this($save_path)
		);
		session_write_close();

		load_class("downloader");
		$result = downloader::start($url,$save_path);
		session_start();unset($_SESSION[$uuid]);session_write_close();
		if($result['code']){
			$name = get_path_this(iconv_app($save_path));
			space_size_use_change($save_path);//使用的空间增加
			show_json($this->L['download_success'],true,_DIR_OUT(iconv_app($save_path)) );
		}else{
			show_json($result['data'],false);
		}
	}

	//生成临时文件key
	public function officeView(){
		if (!file_exists($this->path)) {
			show_tips($this->L['not_exists']);
		}
		$file_ext = get_path_ext($this->path);
		$file_url = _make_file_proxy($this->path);

		//kodoffice  预览
		if(defined("OFFICE_KOD_SERVER")){
			$file_link = APPHOST.'index.php?explorer/fileProxy&path='.rawurlencode($this->in['path']);
			$view_type = '&appMode=edit&access_token='.session_id();
			if(OFFICE_KOD_ACTION == 'read'){//只读
				$view_type = '&appMode=view';
				$file_link = _make_file_proxy($this->path);
			}
			$user_info = $_SESSION['kod_user'];
			$app_r = rand_string(10);
			$office_url = OFFICE_KOD_SERVER.rawurlencode($file_link)
						.'&lang='.LANGUAGE_TYPE.'&appType=desktop'.$view_type
						.'&file_time='.@filemtime($this->path).'&key='.md5($this->path)
						.'&user_id='.$user_info['user_id'].'&user_name='.$user_info['name']
						.'&app_id='.OFFICE_KOD_APP_ID.'&app_s='.$app_r.'&app_v='.md5($app_r.OFFICE_KOD_APP_KEY);
			header("location:".$office_url);
			exit;
		}

		//插件支持：flash转换 or 在线编辑
		if (file_exists(PLUGIN_DIR.'officeView')) {
			if(isset($_GET['is_edit']) || !isset($this->config['settings']['office_server_doc2pdf'])){
				include(PLUGIN_DIR.'officeView/index.php');
			}else{
				include(PLUGIN_DIR.'officeView/flexpapper.php');
			}
			exit;
		}

		//office live 浏览
		$host = $_SERVER['HTTP_HOST'];
		if (strpos(OFFICE_SERVER,'view.officeapps.live.com') === -1 ||
			strstr($host,'10.10.') ||
			strstr($host,'192.168.')||
			strstr($host,'127.0.') ||
			!strstr($host,'.')) {
			$local_tips = $this->L['unknow_file_office'];
			show_tips($local_tips);
		}else{
			$office_url = OFFICE_SERVER.rawurlencode($file_url);
			header("location:".$office_url);
		}
	}
	public function officeSave(){
		$save_path = _DIR($this->in['path']);
		//from activex
		if(isset($this->in['from_activex'])){
			if ($_FILES["file"]["error"] > 0){
				echo "Return Code: ".$_FILES["file"]["error"];
			}else{
				move_uploaded_file($_FILES["file"]["tmp_name"],$this->path);
				echo 'succeed';
			}
			exit;
		}

		if (!path_writeable($save_path)){
		   $this->json_putout(array('error'=>'no_permission_write'));
		}
		if (($body_stream = file_get_contents('php://input'))===FALSE){
			$this->json_putout(array('error'=>'Bad Request'));
		}
		$data = json_decode($body_stream,true);
		if ($data === NULL){
			$this->json_putout(array('error'=>'Bad Response'));
		}
		$_trackerStatus = array(
			0 => 'NotFound',
			1 => 'Editing',
			2 => 'MustSave',
			3 => 'Corrupted',
			4 => 'Closed'
		);
		$result = array('error'=>0,'action'=>$_trackerStatus[$data["status"]]);
		switch ($_trackerStatus[$data["status"]]){
			case "MustSave":
			case "Corrupted":
				$result["c"] = "saved";
				$result['status'] = '0';
				if (file_download_this($data["url"],$save_path)){
					$result['status'] = 'success';
				}
				break;
			default:break;
		}
		$this->json_putout($result);
	}
	private function json_putout($info){
		@header( 'Content-Type: application/json; charset==utf-8');
		@header( 'X-Robots-Tag: noindex' );
		@header( 'X-Content-Type-Options: nosniff' );
		write_log(json_encode(array($this->in,$info)),'office_save');
		
		echo json_encode($info);
		exit;
	}

	//代理输出
	public function fileProxy(){
		$download = isset($this->in['download']);
		file_put_out($this->path,$download);
	}
	
	/**
	 * 上传,html5拖拽  flash 多文件
	 */
	public function fileUpload(){
		$save_path = _DIR($this->in['upload_to']);
		if (!path_writeable($save_path)) show_json($this->L['no_permission_write'],false);
		if ($save_path == '') show_json($this->L['upload_error_big'],false);

		if (strlen($this->in['fullPath']) > 1) {//folder drag upload
			$full_path = _DIR_CLEAR(rawurldecode($this->in['fullPath']));
			$full_path = get_path_father($full_path);
			$full_path = iconv_system($full_path);
			if (mk_dir($save_path.$full_path)) {
				$save_path = $save_path.$full_path;
			}
		}
		$repeat_action = $this->config['user']['file_repeat'];
		//分片上传
		$temp_dir = iconv_system(USER_TEMP);
		mk_dir($temp_dir);
		if (!path_writeable($temp_dir)) show_json($this->L['no_permission_write'],false);
		upload_chunk('file',$save_path,$temp_dir,$repeat_action);
	}

	//分享根目录
	private function path_share(&$list){
		$arr = explode(',',$GLOBALS['path_id']);
		$share_list = system_member::user_share_list($arr[0]);
		$before_share_id = $GLOBALS['path_id_user_share'];
		foreach ($share_list as $key => $value) {
			$the_path = _DIR(KOD_USER_SHARE.':'.$arr[0].'/'.$value['name']);
			$value['path'] = $value['name'];
			$value['atime']='';$value['ctime']='';
			$value['mode']='';$value['is_readable'] = 1;$value['is_writable'] = 1;
			$value['exists'] = intval(file_exists($the_path));
			$value['meta_info'] = 'path_self_share';
			$value['menuType']  = "menuSharePath";

			//分享列表oexe
			if(get_path_ext($value['name']) == 'oexe'){
				$json = json_decode(@file_get_contents($the_path),true);
				if(is_array($json)) $value = array_merge($value,$json);
			}
			if ($value['type']=='folder') {
				$value['ext'] = 'folder';
				$list['folderlist'][] = $value;
			}else{
				$list['filelist'][] = $value;
			}
		}
		$list['path_read_write'] = 'readable';
		$GLOBALS['path_id_user_share'] = $before_share_id;
		if($arr[0] == $this->user['user_id']){//自己分享列表
			$list['share_list'] = $share_list;
		}
		return $list;
	}

	//我的收藏根目录
	private function path_fav(&$list){
		$favData=new fileCache(USER.'data/fav.php');
		$fav_list = $favData->get();
		$GLOBALS['path_from_auth_check'] = true;//组权限发生变更。导致访问group_path 无权限退出问题
		foreach($fav_list as $key => $val){
			$the_path = _DIR($val['path']);
			$has_children = path_haschildren($the_path,$check_file);
			if( !isset($val['type'])){
				$val['type'] = 'folder';
			}
			if( $val['type'] == 'folder' && $val['ext'] != 'treeFav'){
				$has_children = true;
			}
			$cell = array(
				'name'      => $val['name'],
				'ext' 		=> $val['ext'],
				'menuType'  => "menuFavPath",
				'atime'		=> '',
				'ctime'		=> '',
				'mode'		=> '',
				'is_readable'	=> 1,
				'is_writeable'	=> 1,
				'exists'	=> intval(file_exists($the_path)),
				'meta_info' => 'treeFav',

				'path' 		=> $val['path'],
				'type'		=> $val['type'],
				'open'      => false,
				'isParent'  => false//$has_children
			);
			if( strstr($val['path'],KOD_USER_SHARE)||
				strstr($val['path'],KOD_USER_FAV) ||
				strstr($val['path'],KOD_GROUP_ROOT_SELF) ||
				strstr($val['path'],KOD_GROUP_ROOT_ALL)
				){
				$cell['exists'] = 1;
			}

			//分享列表oexe
			if(get_path_ext($val['name']) == 'oexe'){
				$json = json_decode(@file_get_contents($the_path),true);
				if(is_array($json)) $val = array_merge($val,$json);
			}
			if ($val['type']=='folder') {
				$list['folderlist'][] = $cell;
			}else{
				$list['filelist'][] = $cell;
			}
		}
		$GLOBALS['path_from_auth_check'] = false;
		$GLOBALS['path_type'] = KOD_USER_FAV;
		$list['path_read_write'] = 'readable';
		return $list;
	}

	//用户组列表
	private function path_group(&$list,$group_root_type){
		if($group_root_type == KOD_GROUP_ROOT_SELF){
			$data_list = $this->_group_self();
		}else{
			$data_list = $this->_group_tree('1');
		}
		$GLOBALS['path_from_auth_check'] = true;//组权限发生变更。导致访问group_path 无权限退出问题
		foreach($data_list as $key => $val){
			$cell = array(
				'name'      => $val['name'],
				'menuType'  => "menuGroupRoot",
				'atime'		=> '',
				'ctime'		=> '',
				'mode'		=> '',
				'is_readable'	=> 1,
				'is_writeable'	=> 1,
				'exists'	=> 1,

				'path' 		=> $val['path'],
				'ext'		=> $val['ext'],
				'type'		=> 'folder',
				'open'      => false,
				'isParent'  => false//$val['isParent']
			);
			if ($val['type']=='folder') {
				$list['folderlist'][] = $cell;
			}else{
				$list['filelist'][] = $cell;
			}
		}
		$GLOBALS['path_from_auth_check'] = false;
		$GLOBALS['path_type'] = $group_root_type;
		$list['path_read_write'] = 'readable';
		return $list;
	}

	//获取文件列表&哦exe文件json解析
	private function path($dir,$list_file=true,$check_children=false){
		$ex_name = explode(',',$this->config['setting_system']['path_hidden']);
		//当前目录
		$this_path = _DIR_OUT(iconv_app($dir));
		if($GLOBALS['path_type'] == KOD_USER_SHARE && strpos(trim($dir,'/'),'/')===false ) {
			$this_path = $dir;
		}
		$list = array(
			'folderlist'		=> array(),
			'filelist'			=> array(),
			'info'				=> array(),
			'path_read_write'	=>'not_exists',
			'this_path' 		=> $this_path
		);
		//真实目录读写权限判断
		if (!file_exists($dir)) {
			$list['path_read_write'] = "not_exists";
		}else if (path_writeable($dir)) {
			$list['path_read_write'] = 'writeable';
		}else if (path_writeable($dir)) {
			$list['path_read_write'] = 'readable';
		}else{
			$list['path_read_write'] = 'not_readable';
		}

		//处理
		if ($dir===false){
			return $list;
		}else if ($GLOBALS['path_type'] == KOD_USER_SHARE &&
			!strstr(trim($this->in['path'],'/'),'/')) {//分享根目录 {user_share}:1/ {user_share}:1/test/
			$list = $this->path_share($list);
		}else if ($GLOBALS['path_type'] == KOD_USER_FAV) {//收藏根目录 {user_fav}
			$list = $this->path_fav($list);
		}else if ($GLOBALS['path_type'] == KOD_GROUP_ROOT_SELF) {//自己用户组目录；KOD_GROUP_ROOT_SELF
			$list = $this->path_group($list,$GLOBALS['path_type']);
		}else if ($GLOBALS['path_type'] == KOD_GROUP_ROOT_ALL) {//全部用户组目录；KOD_GROUP_ROOT_ALL
			$list = $this->path_group($list,$GLOBALS['path_type']);
		}else{
			$list_file = path_list($dir,$list_file,true);//$check_children
			$list['folderlist'] = $list_file['folderlist'];
			$list['filelist'] = $list_file['filelist'];
		}
		$filelist_new = array();
		$folderlist_new = array();
		foreach ($list['filelist'] as $key => $val) {
			if (in_array($val['name'],$ex_name)) continue;
			$val['ext'] = get_path_ext($val['name']);
			if ($val['ext'] == 'oexe' && !isset($val['content'])){
				$path = iconv_system($val['path']);
				$json = json_decode(@file_get_contents($path),true);
				if(is_array($json)) $val = array_merge($val,$json);
			}
			$filelist_new[] = $val;
		}
		foreach ($list['folderlist'] as $key => $val) {
			if (in_array($val['name'],$ex_name)) continue;
			$folderlist_new[] = $val;
		}
		$list['filelist'] = $filelist_new;
		$list['folderlist'] = $folderlist_new;
		//show_json($list);

		$list = _DIR_OUT($list);
		$this->_role_check_info($list);
		return $list;
	}
	private function _role_check_info(&$list){
		if(!$GLOBALS['path_type']){
			$list['info'] = array("path_type"=>'',"role"=>'',"id"=>'','name'=>'');
			return;
		}
		$list['info']= array(
			"path_type" => $GLOBALS['path_type'],
			"role"      => $GLOBALS['is_root']?'owner':'guest',
			"id"        => $GLOBALS['path_id'],
			'name'      => '',
		);

		if ($GLOBALS['path_type'] == KOD_USER_SHARE) {
			$GLOBALS['path_id'] = explode(':',$GLOBALS['path_id']);
			$GLOBALS['path_id'] = $GLOBALS['path_id'][0];//id 为前面
			$list['info']['id'] = $GLOBALS['path_id'];
			$user = system_member::get_info($GLOBALS['path_id']);
			$list['info']['name'] = $user['name'];

			//自己的分享子目录
			if($GLOBALS['path_id'] == $this->user["user_id"]){
				$list['info']['role'] = "owner";
			}
			if($GLOBALS['is_root']){
				$list['info']['admin_real_path'] = USER_PATH.$user['path'].'/home/';
			}
		}
		//自己管理的目录
		if ($GLOBALS['path_type']==KOD_GROUP_PATH ||
			$GLOBALS['path_type']==KOD_GROUP_SHARE) {
			$group = system_group::get_info($GLOBALS['path_id']);
			$list['info']['name'] = $group['name'];
			$auth = system_member::user_auth_group($GLOBALS['path_id']);
			if ($auth=='write' || $GLOBALS['is_root']) {
				$list['info']['role'] = 'owner';
				$list['group_space_use'] = $group['config'];//自己
			}
			if($GLOBALS['is_root']){
				$list['info']['admin_real_path'] = GROUP_PATH.$group['path'].'/home/';
			}
		}
	}
}