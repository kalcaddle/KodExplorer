<?php
/*
* @link http://www.kalcaddle.com/
* @author warlee | e-mail:kalcaddle@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kalcaddle.com/tools/licenses/license.txt
*/

//用户管理【管理员配置用户，or用户空间大小变更】
class system_member extends Controller{
	public static $static_sql = null;
	private $sql;
	function __construct()    {
		parent::__construct();
		$this->tpl = TEMPLATE.'member/';
		$this->sql= self::load_data();
	}

	//保证只加载一次文件
	public static function load_data(){
		if(is_null(self::$static_sql)){
			self::$static_sql = system_member_data();
		}
		return self::$static_sql;
	}
	public static function get_info($the_id){
		$sql = self::load_data();
		return $sql->get($the_id);
	}

	/**
	 * 空间使用变更
	 * @param  [type] $the_id   [user_id or group_id]
	 * @param  [type] $use_size_add [变更的大小  size_max G为单位   size_use Byte为单位]
	 */
	public static function space_change($the_id,$use_size_add=false){
		$sql = self::load_data();
		$info = $sql->get($the_id);
		if(!is_array($info)){
			show_json($this->L["data_not_full"],false);
		}
		if($use_size_add===false){//重置用户空间；避免覆盖、解压等导致的问题
			$pathinfo = _path_info_more(iconv_system(USER_PATH.$info['path'].'/'));
			$current_use  = $pathinfo['size'];
			if(isset($info['home_path']) && file_exists(iconv_system($info['home_path']))){
				$pathinfo = _path_info_more(iconv_system($info['home_path']));
				$current_use  += $pathinfo['size'];
			}
		}else{
			$current_use = floatval($info['config']['size_use'])+floatval($use_size_add);
		}		
		$info['config']['size_use'] = $current_use<0?0:$current_use;
		$sql->set($the_id,$info);
	}
	/**
	 * 空间剩余检测
	 * 1073741824 —— 1G
	 */
	public static function space_check($the_id){
		$sql = self::load_data();
		$info = $sql->get($the_id);
		if(!is_array($info)){
			show_json($this->L["data_not_full"],false);
		}
		$size_use = floatval($info['config']['size_use']);
		$size_max = floatval($info['config']['size_max']);
		if($size_max!=0 && $size_max*1073741824<$size_use){
			show_json($GLOBALS['L']['space_is_full'],false);
		}
	}

	// 组删除后，所属该组的用户都删除；全局调用
	public static function group_remove_user_update($group_id){
		$sql = self::load_data();
		$user_all = $sql->get();
		foreach ($user_all as $key => $val) {
			if(in_array($group_id,array_keys($val['group_info']))){
				unset($val['group_info'][$group_id]);
				$sql->set($val['user_id'],$val);
			}
		}
	}
	// 权限组删除，所属该组的用户删除权限id
	public static function role_remove_user_update($role_id){
		$sql = self::load_data();
		$user_all = $sql->get();
		foreach ($user_all as $key => $val) {
			if($val['role'] == $role_id){
				$val['role'] = '';
				$sql->set($val['user_id'],$val);
			}
		}
	}

	//获取当前用户在某个群组的权限id; false|[id]
	//兼容旧版本 'read'|'write'|false
	public static function user_auth_group($group_id){
		$result = self::_user_auth_group_role($group_id);
		if($result === false) return false;

		$result = $result == 'read'  ? "1" : $result;
		$result = $result == 'write' ? "2" : $result;
		if(!is_array($GLOBALS['config']['path_role_group'][$result])){
			$result = "1";
		}
		return $result;
	}
	//判断自己对某个组的权限 return false/'read'/'write'    
	public static function _user_auth_group_role($group_id){
		$sql = self::load_data();
		$user_info = $sql->get($_SESSION['kod_user']['user_id']);
		$group_info = $user_info['group_info'];//自己所在的组

		if(!is_array($group_info)){
			return false;
		}
		if(isset($group_info[$group_id])){
			return $group_info[$group_id];
		}
		foreach ($group_info as $key => $value) {//
			$group = system_group::get_info($key);//测试组，是否在用户所在组的子组
			$arr = explode(',',$group['children']);
			if (in_array($group_id,$arr)) {
				return $group_info[$key];
			}
		}
		return false;
	}


	//删除 path id
	public static function _filter_list($list,$filter_key = 'path'){
		if($GLOBALS['is_root']) return $list;
		foreach ($list as $key => &$val) {
			unset($val[$filter_key]);
			unset($val['password']);
		}
		return $list;
	}

	//获取在某个组的用户
	public static function get_user_at_group($group_id){
		$sql = self::load_data();
		$all_user = self::_filter_list($sql->get());
		if($group_id=='0'){
			return $all_user;
		}
		$select_user = array();
		foreach ($all_user as $val) {
			if(isset($val['group_info'][$group_id])){
				$select_user[] = $val;
			}
		}
		return $select_user;
	}

	//缓存用户共享对象=======================================
	public static function user_share_sql($user_id){
		static $user_share_arr;
		if(!is_array($user_share_arr)){
			$user_share_arr = array();
		}
		if(!isset($user_share_arr[$user_id])){
			$user_info = system_member::get_info($user_id);
			if(!isset($user_info['path'])){
				return;
			}
			$sql = new fileCache(USER_PATH.$user_info['path'].'/data/share.php');
			$user_share_arr[$user_id] = $sql;
		}
		return $user_share_arr[$user_id];
	}
	//获取某个用户共享列表
	public static function user_share_list($user_id){
		$sql = self::user_share_sql($user_id);
		$list = $sql->get();
		if($user_id == $_SESSION['kod_user']['user_id']){//自己的列表则展示密码；否则清空密码
			return $list;
		}

		foreach($list as $key=>&$val){
			unset($val['share_password']);
		}
		return $list;
	}
	//获取某个用户某个共享
	public static function user_share_get($user_id,$name){
		$sql = self::user_share_sql($user_id);
		return $sql->get('name',$name);
	}



	//后台管理=====================
	//管理员调用===================
	/**
	 * 获取用户列表数据,根据用户组筛选；默认输出所有用户
	 */
	public function get($group_id='0') {
		$result = self::get_user_at_group($group_id);
		foreach($result as $key=>&$val){
			unset($val['password']);
		}
		show_json($result);
	}

	/**
	 * 用户添加
	 * system_member/add&name=warlee&password=123&size_max=0&group_info={"0":"read","10":"write"}&role=default
	 */
	public function add(){
		if (!isset($this->in['name']) || //必填项
			!isset($this->in['password']) ||
			!isset($this->in['role']) ||
			!isset($this->in['group_info']) || //{"0":"read","100":"read"}
			!isset($this->in['size_max'])
			) show_json($this->L["data_not_full"],false);

		$name = trim(rawurldecode($this->in['name']));
		$password = rawurldecode($this->in['password']);
		$group_info = json_decode(rawurldecode($this->in['group_info']),true);		
		if(!is_array($group_info)){
			show_json($this->L["system_member_group_error"],false);
		}
		if($this->sql->get(array('name',$name))){
			show_json($this->L['error_repeat'],false);
		}

		//非系统管理员，不能添加系统管理员
		if(!$GLOBALS['is_root'] && $this->in['role']=='1'){
			show_json($this->L['group_role_error'],false);
		}

		$user_array = array();
		if(isset($this->in['isImport'])){
			$arr = explode("\n",$name);
			foreach($arr as $v){
				if(trim($v)!=''){
					$user_array[] = trim($v);
				}
			}
		}else{
			$user_array[] = $name;
		}


		//批量添加
		$error_arr = array();
		foreach ($user_array as $val) {
			if($this->sql->get('name',$val)){//已存在
				$error_arr[] = $val;
				continue;
			}
			$user_id = $this->sql->get_max_id().'';
			$user_info = array(
				'user_id'   =>  $user_id,
				'name'      =>  $val,
				'password'  =>  md5($password),
				'role'      =>  $this->in['role'],
				'config'    =>  array('size_max' => floatval($this->in['size_max']),//M
									  'size_use' => 1024*1024),//总大小，目前使用大小
				'group_info'=>  $group_info,
				'path'      =>  make_path($val),
				'status'    =>  1,  //0禁用；1启用
				'last_login'=>  '', //最后登录时间 首次登陆则激活
				'create_time'=> time(),
			);

			if(file_exists(iconv_system(USER_PATH.$user_info['path'])) ){
				$user_info['path'] = $user_info['path'].'_'.$user_info['user_id'];
			}
			//用户组目录
    		if( isset($this->in['home_path'])){
    			$user_info['home_path'] = _DIR(rawurldecode($this->in['home_path']));
    			if(!file_exists($user_info['home_path'])){
    				show_json($this->L['not_exists'],false);
    			}
    			$user_info['home_path'] = iconv_app($user_info['home_path']);
    		}else{
    			unset($user_info['home_path']);
    		}
			if ($this->sql->set($user_id,$user_info)) {
				$this->_initDir($user_info['path']);
			}else{
				$error_arr[] = $val;
			}
		}

		$success = count($user_array)-count($error_arr);
		$show = " success:$success";
		if($success==count($user_array)){
			show_json($this->L['success'].$show,true,$success);
		}else if($success!=0){//部分失败
			$error_info = " error:".count($error_arr);
			show_json($this->L['success'].$show.$error_info,false,implode("\n",$error_arr));
		}else{
			show_json($this->L['error_repeat'],false);
		}
	}

	/**
	 * 编辑 system_member/edit&user_id=101&name=warlee&password=123&size_max=0
	 * &group_info={%220%22:%22read%22,%22100%22:%22read%22}&role=default
	 */
	public function edit() {
		if (!$this->in['user_id']) show_json($this->L["data_not_full"],false);

		$user_id = $this->in['user_id'];
		$user_info = $this->sql->get($user_id);
		if(!$user_info){//用户不存在,或者默认用户不能修改
			show_json($this->L['error'],false);
		}
		//非系统管理员，不能将别人设置为系统管理员
		if(!$GLOBALS['is_root'] && $this->in['role']=='1'){
			show_json($this->L['group_role_error'],false);
		}
		//非系统管理员，不能修改系统管理员
		if(!$GLOBALS['is_root'] && $user_info['role']=='1'){
			show_json($this->L['group_role_error_admin'],false);
		}

		//管理员自己不能添加自己到非管理员组
		if($GLOBALS['is_root'] 
			&& $_SESSION['kod_user']['user_id']==$user_id 
			&& $this->in['role']!='1'){
			show_json($this->L['error'],false);
		}

		//修改为一个已存在的名字则提示
		$the_name = trim(rawurldecode($this->in['name']));
		if($user_info['name']!=$the_name){
			if($this->sql->get(array('name',$the_name))){
				show_json($this->L['error_repeat'],false);
			}
		}

		$this->in['name'] = rawurlencode($the_name);//还原
		$edit_arr = array('name','role','password','group_info','home_path','status','size_max');
		foreach ($edit_arr as $key) {
			if(!isset($this->in[$key])) continue;            
			$user_info[$key] = rawurldecode($this->in[$key]);
			if($key == 'password'){
				$user_info['password'] = md5($user_info[$key]);
			}else if($key == 'size_max'){
				$user_info['config']['size_max'] = floatval($user_info[$key]);
			}else if($key == 'group_info'){//分组信息
				$user_info['group_info'] = json_decode(rawurldecode($this->in['group_info']),true);
			}
		}

		//用户组目录
		if( isset($this->in['home_path'])){
			$user_info['home_path'] = _DIR(rawurldecode($this->in['home_path']));
			if(!file_exists($user_info['home_path'])){
				show_json($this->L['not_exists'],false);
			}
			$user_info['home_path'] = iconv_app($user_info['home_path']);
		}else{
			unset($user_info['home_path']);
		}
		if($this->sql->set($user_id,$user_info)){
			self::space_change($user_id);//重置用户使用空间
			show_json($this->L['success'],true,$user_info);
		}
		show_json($this->L['error_repeat'],false);
	}

	/**
	 * 用户批量操作 system_member/do_action&action=&user_id=[101,222,131]&param=
	 * action : 
	 * -------------
	 * del                  删除用户
	 * status_set           启用&禁用 param=0/1
	 * role_set             权限组 param=role_id
	 * group_reset          重置分组 param=group_json
	 * group_remove_from    从某个组删除 param=group_id
	 * group_add            添加到某个分组 param=group_json
	 */ 
	public function do_action() {
		if (!isset($this->in['user_id'])){
			show_json($this->L["username_can_not_null"],false);
		}
		$action = $this->in['action'];
		$user_arr = json_decode($this->in['user_id'],true);
		if(!is_array($user_arr)){
			show_json($this->L['error'],false);
		}
		if (in_array('1', $user_arr)){//批量处理，不处理系统管理员admin
			show_json($this->L['default_user_can_not_do'],false);
		}
		foreach ($user_arr as $user_id) {
			switch ($action) {
				case 'del'://删除
					$user_info = $this->sql->get($user_id);    
					if($this->sql->remove($user_id) && $user_info['name']!=''){
						del_dir(iconv_system(USER_PATH.$user_info['path'].'/'));
					}
					break;
				case 'status_set'://禁用&启用
					$status = intval($this->in['param']);
					$this->sql->set(array('user_id',$user_id),array('status',$status)); 
					break;
				case 'role_set'://设置权限组
					$role = $this->in['param'];
					//非系统管理员，不能将别人设置为系统管理员
					if(!$GLOBALS['is_root'] && $role=='1'){
						show_json($this->L['group_role_error'],false);
					}
					$this->sql->set(array('user_id',$user_id),array('role',$role)); 
					break;
				case 'group_reset'://设置分组
					$group_arr = json_decode($this->in['param'],true);
					if(!is_array($group_arr)){
						show_json($this->L['error'],false);
					}
					$this->sql->set(array('user_id',$user_id),array('group_info',$group_arr));  
					break;
				case 'group_remove_from'://从某个组移除
					$group_id = $this->in['param'];
					$user_info = $this->sql->get($user_id);
					unset($user_info['group_info'][$group_id]);
					$this->sql->set($user_id,$user_info);   
					break;
				case 'group_add'://添加到某个组
					$group_arr = json_decode($this->in['param'],true);
					if(!is_array($group_arr)){
						show_json($this->L['error'],false);
					}
					$user_info = $this->sql->get($user_id);
					foreach ($group_arr as $key => $value) {
						$user_info['group_info'][$key] = $value;
					}                   
					$this->sql->set($user_id,$user_info);   
				default:break;
			}
		}
		show_json($this->L['success']);
	}

	public function init_install(){
		$sql  = system_member::load_data();
		$list = $sql->get();
		foreach ($list as $id => &$info) {//创建用户目录及初始化
			$path = make_path($info['name']);
			$this->_initDir($path);
			$info['path'] = $path;
			$info['create_time'] = time();
		}
		$sql->reset($list);

		//初始化群组目录
		$home_folders = explode(',',$this->config['setting_system']['new_group_folder']);
		$sql = system_group::load_data();
		$list = $sql->get();
		foreach ($list as $id => &$info) {//创建用户目录及初始化
			$path = make_path($info['name']);
			$root_path = GROUP_PATH.$path.'/';
			foreach ($home_folders as $dir) {
				mk_dir(iconv_system($root_path.'home/'.$dir));
			}
			$info['path'] = $path;
			$info['create_time'] = time();
		}
		$sql->reset($list);
	}

	//============内部处理函数=============
	/**
	 *初始化用户数据和配置。
	 */    
	private function _initDir($path){
		$user_folder = array('home','recycle_kod','data');
		$home_folders = explode(',',$this->config['setting_system']['new_user_folder']);
		$root_path = USER_PATH.$path.'/';
		foreach ($user_folder as $dir) {
			mk_dir(iconv_system($root_path.$dir));
		}
		foreach ($home_folders as $dir) {
			mk_dir(iconv_system($root_path.'home/'.$dir));
		}
		fileCache::save($root_path.'data/config.php',$this->config['setting_default']);
	}
}
