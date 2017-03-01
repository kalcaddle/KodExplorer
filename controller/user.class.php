<?php
/*
* @link http://www.kalcaddle.com/
* @author warlee | e-mail:kalcaddle@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kalcaddle.com/tools/licenses/license.txt
*/

class user extends Controller{
	private $user;  //用户相关信息
	private $auth;  //用户所属组权限
	private $notCheck;
	function __construct(){
		parent::__construct();
		$this->tpl  = TEMPLATE  . 'user/';
		if(!isset($_SESSION)){//避免session不可写导致循环跳转
			$this->login(DATA_PATH."<br/>".$GLOBALS['L']['path_can_not_write_data']);
		}else{
			$this->user = &$_SESSION['kod_user'];
			if(!isset($this->user['path']) && isset($this->user['name'])){//旧版本数据
				$this->user['path'] = $this->user['name'];
			}
		}
		//不需要判断的action
		$this->notCheck = array(
			'loginFirst','login','logout','loginSubmit',
			'checkCode','public_link','qrcode','sso');
		$this->notCheckApp = array('share','debug');
		$this->config['forceWap'] = is_wap() && (!isset($_COOKIE['forceWap']) || $_COOKIE['forceWap'] == '1');
	}

	/**
	 * 登录状态检测;并初始化数据状态
	 */
	public function loginCheck(){
		if(in_array(ST,$this->notCheckApp)) return;//不需要判断的控制器
		if(in_array(ACT,$this->notCheck))   return;//不需要判断的action
		if(isset($_SESSION['kod_login']) && $_SESSION['kod_login']===true){
			$user = system_member::get_info($this->user['user_id']);
			$this->login_success($user);
			return;
		}else if($_COOKIE['kod_user_id']!='' && $_COOKIE['kod_token']!=''){
			$user = system_member::get_info($_COOKIE['kod_user_id']);
			if (!is_array($user) || !isset($user['password'])) {
				$this->logout();
			}
			if($this->make_login_token($user) == $_COOKIE['kod_token']){
				@session_start();//re start
				$_SESSION['kod_login'] = true;
				$_SESSION['kod_user']= $user;
				$_SESSION['CSRF-TOKEN'] = rand_string(20);
				setcookie('CSRF-TOKEN',$_SESSION['CSRF-TOKEN'], time()+3600*24*100);
				setcookie('kod_user_id', $_COOKIE['kod_user_id'], time()+3600*24*100);
				setcookie('kod_token',$_COOKIE['kod_token'],time()+3600*24*100);
				//$this->login_success($user);

				//check if session work
				@session_write_close();
				unset($_SESSION);
				@session_start();
				if( !isset($_SESSION['kod_user']) || 
					!is_array($_SESSION['kod_user'])){
					$this->login(DATA_PATH."<br/>".$GLOBALS['L']['path_can_not_write_data']);
				}else{
					$this->login_success($user);
				}
				return;
			}
			$this->logout();//session user数据不存在
		}else{
			if ($this->config['setting_system']['auto_login'] != '1') {
				$this->logout();//不自动登录
			}else{
				if (!file_exists(USER_SYSTEM.'install.lock')) {
					$this->display('install.html');
					exit;
				}
				header('location:./index.php?user/loginSubmit&name=guest&password=guest');
				exit;
			}
		}
	}
	private function login_success($user){
		$this->user = $user;
		if(!$user['path']){//服务器管理后立即生效
			$this->login("Your 'path' is empty,please install again！");
		}else if($user['status'] == 0){
			$this->login($this->L['login_error_user_not_use']);
		}else if($user['role']==''){
			$this->login($this->L['login_error_role']);
		}
		define('USER',USER_PATH.$this->user['path'].'/');//utf-8
		define('USER_TEMP',USER.'data/temp/');
		define('USER_RECYCLE',USER.'recycle/');
		if (!file_exists(iconv_system(USER))) {
			$this->login( "User/".get_path_this(USER)." ".$this->L['not_exists']);
		}

		$user_home = user_home_path($this->user);//utf-8
		if ($this->user['role'] == '1') {
			define('MYHOME',$user_home);
			define('HOME','');
			$GLOBALS['web_root'] = WEB_ROOT;//服务器目录
			$GLOBALS['is_root'] = 1;
		}else{
			define('HOME',$user_home);
			define('MYHOME','/');
			$GLOBALS['web_root'] = '';//从服务器开始到用户目录
			$GLOBALS['is_root'] = 0;
		}
		$this->config['user']  = fileCache::load(USER.'data/config.php');
		if( !isset($this->config['user']['file_repeat']) ||
			!isset($this->config['user']['resize_config'])){
			$this->config['user']['file_repeat'] = $this->config['setting_default']['file_repeat'];
			$this->config['user']['recycle_open'] = $this->config['setting_default']['recycle_open'];
			$this->config['user']['resize_config'] = $this->config['setting_default']['resize_config'];
		}
		if($this->config['user']['theme']==''){
			$this->config['user'] = $this->config['setting_default'];
		}
	}

	/**
	 * 共享kod登陆并跳转
	 * check: 校验方式:user_id|user_name|role_id|role_name|group_id|group_name,为空则所有登陆用户
	 * value: 对应的值
	 * link : 登陆后的跳转链接
	 */
	public function sso(){
		$result = false;
		$error  = "not login";
		if(isset($_SESSION) && $_SESSION['kod_login'] == 1){//避免session不可写导致循环跳转
			$user = $_SESSION['kod_user'];
			//admin 或者不填则允许所有kod用户登陆
			if( $user['role'] == '1' || 
				!isset($this->in['check']) ||
				!isset($this->in['value']) ){
				$result = true;
			}

			$check_value = false;
			switch ($this->in['check']) {
				case 'user_id':$check_value = $user['user_id'];break;
				case 'user_name':$check_value = $user['name'];break;
				case 'role_id':$check_value = $user['role'];break;
				case 'role_name':
					$role = system_role::get_info($user['role']);
					$check_value = $role['name'];
					break;
				case 'group_id':
					$check_value = array_keys($user['group_info']);
					break;
				case 'group_name':
					$check_value = array();
					foreach ($user['group_info'] as $group_id=>$val){
						$item = system_group::get_info($group_id);
						$check_value[] = $item['name'];
					}
					break;
				default:break;
			}
			if(!$result && $check_value != false){
				if( (is_string($check_value) && $check_value == $this->in['value']) || 
					(is_array($check_value)  && in_array($this->in['value'],$check_value))
					){
					$result = true;
				}else{
					$error = $this->in['check'].' not accessed, It\'s must be "'.$this->in['value'].'"';
				}
			}
		}
		if($result){
			@session_name('KOD_SESSION_SSO');
			@session_id($_COOKIE['KOD_SESSION_SSO']);
			@session_start();
			$_SESSION[$this->in['app']] = 'success';
			@session_write_close();
			header('location:'.$this->in['link']);
			exit;
		}
		$this->login($error);
	}

	//临时文件访问
	public function public_link(){
		$pass = $this->config['setting_system']['system_password'];
		$fid = $this->in['fid'];//$this->in['fid']  第三项
		$path = Mcrypt::decode($fid,$pass);
		if (strlen($path) == 0) {
			show_json($this->L['error'],false);
		}
		$is_download = isset($_GET['download']);
		file_put_out($path,$is_download);
	}
	public function common_js(){
		$out = ob_get_clean();
		$basic_path = BASIC_PATH;
		$user_path  = USER_PATH;
		$group_path = GROUP_PATH;
		if (!$GLOBALS['is_root']) {//对非root用户隐藏地址
			$basic_path = '/';
			$user_path  = '/';
			$group_path = '/';
		}
		$the_config = array(
			'lang'          => LANGUAGE_TYPE,
			'system_os'		=> $this->config['system_os'],
			'is_root'       => $GLOBALS['is_root'],
			'user_id'       => $this->user['user_id'],
			'web_root'      => $GLOBALS['web_root'],
			'web_host'      => HOST,
			'app_host'      => APPHOST,
			'static_path'   => STATIC_PATH,
			'basic_path'    => $basic_path,
			'user_path'     => $user_path,
			'group_path'    => $group_path,
			
			'myhome'        => MYHOME,
			'upload_max'	=> file_upload_size(),
			'param_rewrite' => $this->config['settings']['param_rewrite'],
			'version'       => KOD_VERSION,
			'json_data'     => "",
			'self_share'	=> system_member::user_share_list($this->user['user_id']),
			'user_config' 	=> $this->config['user'],

			//虚拟目录
			'KOD_GROUP_PATH'		=>	KOD_GROUP_PATH,
			'KOD_GROUP_SHARE'		=>	KOD_GROUP_SHARE,
			'KOD_USER_SHARE'		=>	KOD_USER_SHARE,
			'KOD_USER_RECYCLE'		=>	KOD_USER_RECYCLE,
			'KOD_USER_FAV'			=>	KOD_USER_FAV,
			'KOD_GROUP_ROOT_SELF'	=>	KOD_GROUP_ROOT_SELF,
			'KOD_GROUP_ROOT_ALL'	=>	KOD_GROUP_ROOT_ALL,
		);
		if(isset($this->config['setting_system']['version_hash'])){
			$the_config['version_hash'] = $this->config['setting_system']['version_hash'];
		}
		if(defined('OFFICE_KOD_SERVER')){
			$the_config['kodOffice'] = OFFICE_KOD_OPEN;
		}
		if (!isset($GLOBALS['auth'])) {
			$GLOBALS['auth'] = array();
		}
		$js  = 'LNG='.json_encode($GLOBALS['L']).';';
		$js .= 'AUTH='.json_encode($GLOBALS['auth']).';';
		$js .= 'G='.json_encode($the_config).';';
		header("Content-Type: application/javascript");
		echo $js;
	}

	/**
	 * 登录view
	 */
	public function login($msg = ''){
		if (!file_exists(USER_SYSTEM.'install.lock')) {
			chmod_path(BASIC_PATH,DEFAULT_PERRMISSIONS);
			$this->display('install.html');
			exit;
		}
		$this->assign('msg',$msg);
		if (is_wap()) {
			$this->display('login_wap.html');
		}else{
			$this->display('login.html');
		}
		exit;
	}

	/**
	 * 首次登录
	 */
	public function loginFirst(){
		if (!file_exists(USER_SYSTEM.'install.lock')) {
			touch(USER_SYSTEM.'install.lock');
			if(!isset($this->in['password'])){
				$this->in['password'] = 'admin';
			}
			$root = '1';
			$sql=system_member::load_data();
			$user = $sql->get($root);
			$user['password'] = md5($this->in['password']);
			$sql->set($root,$user);
			if($user['create_time'] == ''){
				$member = new system_member();
				$member->init_install();
			}
		}
		header('location:./index.php?user/login');
		exit;
	}
	/**
	 * 退出处理
	 */
	public function logout(){
		session_start();
		user_logout();
	}

	/**
	 * 登录数据提交处理；登陆跳转：
	 * 
	 * 自动登陆：index.php?user/loginSubmit&name=guest&password=guest&link=http://baidu.com
	 * 登陆自动跳转：index.php?user/login&link=http://baidu.com
	 * api登陆:index.php?user/loginSubmit&login_token=ZGVtbw==|da9926fdab0c7c32ab2c329255046793
	 */
	public function loginSubmit(){
		$api_login_check = false;
		if(isset($this->in['login_token'])){
			$api_token = $this->config['settings']['api_login_tonken'];
			$param = explode('|',$this->in['login_token']);
			if( strlen($api_token) < 5 ||
				count($param) != 2 || 
				md5(base64_decode($param[0]).$api_token) != $param[1]
				){
				$this->login_display("Api param error!",false);
			}
			$this->in['name'] = urlencode(base64_decode($param[0]));
			$api_login_check = true;
		}else{
			if(!isset($this->in['name']) || !isset($this->in['password'])) {
				$this->login_display($this->L['login_not_null'],false);
			}
			if( need_check_code()
				&& $this->in['name'] != 'guest'
				&& $_SESSION['check_code'] !== strtolower($this->in['check_code']) ){
				$this->login_display($this->L['code_error'],false);
			}
		}
		
		session_start();//re start 有新的修改后调用
		$name = rawurldecode($this->in['name']);
		$password = rawurldecode($this->in['password']);
		$member = system_member::load_data();
		$user = $member->get('name',$name);
		if($api_login_check && $user){//api自动登陆
		}else if ($user === false || md5($password)!=$user['password']){
			$this->login_display($this->L['password_error'],false);//$member->get()
		}else if($user['status'] == 0){
			$this->login_display($this->L['login_error_user_not_use'],false);
		}else if($user['role']==''){
			$this->login_display($this->L['login_error_role'],false);
		}
		//首次登陆，初始化app 没有最后登录时间
		if($user['last_login'] == ''){
			$app = init_controller('app');
			$app->init_app($user);
		}
		$user['last_login'] = time();//记录最后登录时间
		$member->set($user['user_id'],$user);
		$_SESSION['kod_login'] = true;
		$_SESSION['kod_user']= $user;
		$_SESSION['CSRF-TOKEN'] = rand_string(20);
		setcookie('CSRF-TOKEN',$_SESSION['CSRF-TOKEN'], time()+3600*24*100);
		setcookie('kod_user_id', $user['user_id'], time()+3600*24*100);
		if ($this->in['rember_password'] == '1') {
			setcookie('kod_token',$this->make_login_token($user),time()+3600*24*100);
		}
		$this->login_display('ok',true);
	}
	private function login_display($msg,$success){
		if(isset($this->in['is_ajax'])){
			show_json($msg,$success);
		}else{
			if($success){
				$href = './';
				if(isset($this->in['link'])){
					$href = rawurldecode($this->in['link']);
				}
				header('location:'.$href);
			}else{
				$this->login($msg);
			}
		}
		exit;
	}

	//登陆token
	private function make_login_token($user_info){
		//$ua = $_SERVER['HTTP_USER_AGENT'];
		$system_pass = $this->config['setting_system']['system_password'];
		return md5($user_info['password'].$system_pass.$user_info['user_id']);
	}
	public function version_install(){
	}

	/**
	 * 修改密码
	 */
	public function changePassword(){
		$password_now=rawurldecode($this->in['password_now']);
		$password_new=rawurldecode($this->in['password_new']);
		if (!$password_now && !$password_new)show_json($this->L['password_not_null'],false);
		if ($this->user['password']==md5($password_now)){
			$sql=system_member::load_data();
			$this->user['password'] = md5($password_new);
			$sql->set($this->user['user_id'],$this->user);
			show_json('success');
		}else {
			show_json($this->L['old_password_error'],false);
		}
	}

	//CSRF 防护；cookie设置：CSRF-TOKEN；header:提交X-CSRF-TOKEN
	//explorer/fileProxy
	private function checkCSRF(){
		return;
		//if(GLOBAL_DEBUG) return;//调试不开启
		if( !isset($_SERVER['HTTP_X_CSRF_TOKEN'])||
			$_SERVER['HTTP_X_CSRF_TOKEN'] != $_SESSION['CSRF-TOKEN']){
			show_json('xtoken_error',false);
		}
	}

	/**
	 * 权限验证；统一入口检验
	 */
	public function authCheck(){
		if (in_array(ST,$this->notCheckApp)) return;//不需要判断的控制器
		if (in_array(ACT,$this->notCheck)) return;
		$auth= system_role::get_info($this->user['role']);
		if (!array_key_exists(ST,$this->config['role_setting']) ) return;
		if (!in_array(ACT,$this->config['role_setting'][ST])) return;//输出处理过的权限
		$this->checkCSRF();
		if (isset($GLOBALS['is_root']) && $GLOBALS['is_root'] == 1) return;

		$key = ST.':'.ACT;
		//向下版本兼容处理
		//未定义；新版本首次使用默认开放的功能
		if(!isset($auth['userShare:set'])){
			$auth['userShare:set'] = 1;
		}
		if(!isset($auth['explorer:fileDownload'])){
			$auth['explorer:fileDownload'] = 1;
		}
		//默认扩展功能 等价权限
		$auth['user:common_js'] = 1;//权限数据配置后输出到前端
		$auth['explorer:pathDeleteRecycle'] = $auth['explorer:pathDelete'];
		$auth['explorer:pathCopyDrag']      = $auth['explorer:pathCuteDrag'];

		$auth['explorer:officeSave']        = $auth['editor:fileSave'];
		$auth['explorer:imageRotate']       = $auth['editor:fileSave'];
		$auth['explorer:fileDownloadRemove']= $auth['explorer:fileDownload'];
		$auth['explorer:zipDownload']       = $auth['explorer:fileDownload'];

		//彻底禁止下载；文件获取
		//$auth['explorer:fileProxy']         = $auth['explorer:fileDownload'];
		//$auth['editor:fileGet']             = $auth['explorer:fileDownload'];
		//$auth['explorer:officeView']        = $auth['explorer:fileDownload'];
		$auth['explorer:fileProxy']         = true;
		$auth['editor:fileGet']             = true;
		$auth['explorer:officeView']        = true;
		if(!$auth['explorer:fileDownload']){
			$auth['explorer:zip'] = false;
		}

		$auth['userShare:del']              = $auth['userShare:set'];
		if ($auth[$key] != 1) show_json($this->L['no_permission'],false);

		$GLOBALS['auth'] = $auth;//全局
		//扩展名限制：新建文件&上传文件&重命名文件&保存文件&zip解压文件
		$check_arr = array(
			'mkfile'    =>  $this->check_key('path'),
			'pathRname' =>  $this->check_key('rname_to'),
			'fileUpload'=>  isset($_FILES['file']['name'])?$_FILES['file']['name']:'',
			'fileSave'  =>  $this->check_key('path')
		);
		if (array_key_exists(ACT,$check_arr) && !checkExt($check_arr[ACT])){
			show_json($this->L['no_permission_ext'],false);
		}
	}
	private function check_key($key){
		if(!isset($this->in[$key])){
			return '';
		}
		return is_string($this->in[$key])? rawurldecode($this->in[$key]):'';
	}

	public function checkCode() {
		session_start();//re start
		load_class('myCaptcha');
		$captcha = new myCaptcha(mt_rand(3,4));
		$_SESSION['check_code'] = $captcha->get_string();
	}

	public function qrcode(){
		if(!function_exists('imagecolorallocate')){
			header('location:http://qr.liantu.com/api.php?text='.$this->in['url']);
			exit;
		}
		ob_get_clean();
		include CLASS_DIR.'phpqrcode.php';
		QRcode::png(rawurldecode($this->in['url']));
	}
}

