<?php

//扩展名权限判断 有权限则返回1 不是true
function checkExt($file){
	if (strstr($file,'<') || strstr($file,'>') || $file=='') {
		return 0;
	}
	$notAllow = $GLOBALS['auth']['extNotAllow'];
	if(strstr($notAllow,'php')){
		$notAllow .= '|htm|html|php|phtml|pwml|asp|aspx|ascx|jsp|pl|htaccess|shtml|shtm|phtm';
	}
	$extArr = explode('|',$notAllow);
	foreach ($extArr as $current) {
		if ($current !== '' && stristr($file,'.'.$current)){//含有扩展名
			return 0;
		}
	}
	return 1;
}

//-----解压缩跨平台编码转换；自动识别编码-----
//压缩前，文件名处理；
//ACT=zip——压缩到当前
//ACT=zipDownload---打包下载[判断浏览器&UA——得到地区自动转换为目标编码]；
function zip_pre_name($fileName,$toCharset=false){
	if(get_path_this($fileName) == '.DS_Store') return '';//过滤文件
	if (!function_exists('iconv')){
		return $fileName;
	}
	$charset = $GLOBALS['config']['systemCharset'];
	if($toCharset == false){//默认从客户端和浏览器自动识别
		$toCharset = 'utf-8';
		$clientLanugage = I18n::defaultLang();
		$langType = I18n::getType();
		if(client_is_windows() && (
			$clientLanugage =='zh-CN' || 
			$clientLanugage =='zh-TW' || 
			$langType =='zh-CN' ||
			$langType =='zh-TW')
			){
			$toCharset = "gbk";//压缩或者打包下载压缩时文件名采用的编码
		}
	}

	//write_log("zip:".$charset.';'.$toCharset.';'.$fileName,'zip');
	$result = iconv_to($fileName,$charset,$toCharset);
	if(!$result){
		$result = $fileName;
	}
	return $result;
}

//解压缩文件名检测
function unzip_filter_ext($name){
	$add = '.txt';
	if(checkExt($name)){//允许
		return $name;
	}
	return $name.$add;
}
//解压到kod，文件名处理;识别编码并转换到当前系统编码
function unzip_pre_name($fileName){
	if (!function_exists('iconv')){
		return unzip_filter_ext($fileName);
	}
	if(isset($GLOBALS['unzipFileCharsetGet'])){
		$charset = $GLOBALS['unzipFileCharsetGet'];
	}else{
		$charset = get_charset($fileName);
	}
	$toCharset = $GLOBALS['config']['systemCharset'];
	$result = iconv_to($fileName,$charset,$toCharset);
	if(!$result){
		$result = $fileName;
	}
	$result = unzip_filter_ext($result);
	//echo $charset.'==>'.$toCharset.':'.$result.'==='.$fileName.'<br/>';
	return $result;
}

// 获取压缩文件内编码
// $GLOBALS['unzipFileCharsetGet']
function unzip_charset_get($list){
	if(count($list) == 0) return 'utf-8';
	$charsetArr = array();
	for ($i=0; $i < count($list); $i++) { 
		$charset = get_charset($list[$i]['filename']);
		if(!isset($charsetArr[$charset])){
			$charsetArr[$charset] = 1;
		}else{
			$charsetArr[$charset] += 1;
		}
	}
	arsort($charsetArr);
	$keys = array_keys($charsetArr);

	if(in_array('gbk',$keys)){//含有gbk,则认为是gbk
		$keys[0] = 'gbk';
	}
	$GLOBALS['unzipFileCharsetGet'] = $keys[0];
	return $keys[0];
}

function charset_check(&$str,$check,$tempCharset='utf-8'){
	if ($str === '' || !function_exists("mb_convert_encoding")){
		return false;
	}
	$testStr1 = @mb_convert_encoding($str,$tempCharset,$check);
	$testStr2 = @mb_convert_encoding($testStr1,$check,$tempCharset);
	if($str == $testStr2){
		return true;
	}
	return false;
}

//https://segmentfault.com/a/1190000003020776
//http://blog.sina.com.cn/s/blog_b97feef301019571.html
function get_charset(&$str) {
	if($GLOBALS['config']['checkCharsetDefault']){//直接指定编码
		return $GLOBALS['config']['checkCharsetDefault'];
	}
	if ($str === '' || !function_exists("mb_detect_encoding")){
		return 'utf-8';
	}
	$bom_arr = array(
		'utf-8'		=> chr(0xEF) . chr(0xBB) .chr(0xBF),
		'utf-16le' 	=> chr(0xFF) . chr(0xFE),
		'utf-16be' 	=> chr(0xFE) . chr(0xFF),
		'utf-32le' 	=> chr(0xFF) . chr(0xFE) . chr(0x00) . chr(0x00),
		'utf-32be' 	=> chr(0x00) . chr(0x00) . chr(0xFE) . chr(0xFF),
	);
	foreach ($bom_arr as $key => $value) {
		if (substr($str,0,strlen($value)) === $value ){
			return $key;
		}
	}

	//前面检测成功则，自动忽略后面
	$charset=strtolower(@mb_detect_encoding($str,$GLOBALS['config']['checkCharset']));
	$charsetGet = $charset;
	if ($charset == 'cp936'){
		// 有交叉，部分文件无法识别
		if(charset_check($str,'gbk') && charset_check($str,'gbk','big5')){
			$charset = 'gbk';
		}else if(charset_check($str,'big5') && charset_check($str,'big5','gbk')){
			$charset = 'big5';
		}else if(charset_check($str,'ISO-8859-4')){
			$charset = 'ISO-8859-4';
		}
	}else if ($charset == 'euc-cn'){
		$charset = 'gbk';
	}else if ($charset == 'ascii'){
		$charset = 'utf-8';
	}
	if ($charset == 'iso-8859-1'){
		//检测详细编码;value为用什么编码检测；为空则用utf-8
		$check = array(
			'utf-8'       => $charset,
			'utf-16'      => 'gbk',
			'cp1252'      => 'utf-8',
			'cp1251'      => 'utf-8',
		);
		foreach($check as $key => $val){
			if(charset_check($str,$key,$val)){
				if($val == ''){
					$val = 'utf-8';
				}
				$charset = $key;
				break;
			}
		}
	}
	//show_json($charset,false,$charsetGet);
	return $charset;
}


function file_upload_size(){
	global $config;
	$size = get_post_max();
	if(isset($config['settings']['updloadChunkSize'])){
		$chunk = $config['settings']['updloadChunkSize'];
		if($size >= $chunk){
			$size = $chunk;
		}
	}
	return $size;
}

function check_list_dir(){
	$url = APP_HOST.'lib/core/';
	$find = "Application.class.php";
	
	@ini_set('default_socket_timeout',1);
	$context = stream_context_create(array('http'=>array('method'=>"GET",'timeout'=>1)));
	$str = @file_get_contents($url,false,$context);
	if(stripos($str,$find) === false){//not find;ok success
		return true;
	}else{
		return false;
	}
}
function php_env_check(){
	$error = '';
	if(!function_exists('iconv')) $error.= '<li>'.LNG('php_env_error').' iconv</li>';
	if(!function_exists('curl_init')) $error.= '<li>'.LNG('php_env_error').' curl</li>';
	if(!function_exists('mb_convert_encoding')) $error.= '<li>'.LNG('php_env_error').' mb_string</li>';
	if(!function_exists('file_get_contents')) $error.='<li>'.LNG('php_env_error').' file_get_contents</li>';
	if(!version_compare(PHP_VERSION,'5.0','>=')) $error.= '<li>'.LNG('php_env_error_version').'</li>';
	if(!check_list_dir()) $error.='<li>'.LNG('php_env_error_list_dir').'</li>';

	$parent = get_path_father(BASIC_PATH);
	$arr_check = array(
		BASIC_PATH,
		DATA_PATH,
		DATA_PATH.'system',
		DATA_PATH.'User',
		DATA_PATH.'Group',
		DATA_PATH.'session'
	);
	foreach ($arr_check as $value) {
		if(!path_writeable($value)){
			$error.= '<li>'.str_replace($parent,'',$value).'/	'.LNG('php_env_error_path').'</li>';
		}
	}
	if( !function_exists('imagecreatefromjpeg')||
		!function_exists('imagecreatefromgif')||
		!function_exists('imagecreatefrompng')||
		!function_exists('imagecolorallocate')){
		$error.= '<li>'.LNG('php_env_error_gd').'</li>';
	}
	return $error;
}


function init_common(){
	$GLOBALS['in'] = parse_incoming();
	if(!file_exists(DATA_PATH)){
		show_tips("data 目录不存在!\n\n(检查 DATA_PATH);");
	}

	//检查是否更新失效
	$content = file_get_contents(BASIC_PATH.'config/version.php');
	$result  = match($content,"'KOD_VERSION','(.*)'");
	if($result != KOD_VERSION){
		show_tips("您服务器开启了php缓存,文件更新尚未生效;
			请关闭缓存，或稍后1分钟刷新页面再试！
			<a href='http://www.tuicool.com/articles/QVjeu2i' target='_blank'>了解详情</a>");
	}

	// session path create and check
	$errorTips = "[Error Code:1002] 目录权限错误！请设置程序目录及所有子目录为读写状态，
				linux 运行如下指令：
				<pre>su -c 'setenforce 0'\nchmod -R 777 ".BASIC_PATH.'</pre>';
	//检查session是否存在
	if( !file_exists(KOD_SESSION) ||
		!file_exists(KOD_SESSION.'index.html')){
		mk_dir(KOD_SESSION);
		touch(KOD_SESSION.'index.html');
		if(!file_exists(KOD_SESSION.'index.html') ){
			show_tips($errorTips);
		}
	}

	//检查目录权限
	if( !is_writable(KOD_SESSION) || 
		!is_writable(KOD_SESSION.'index.html') || 
		!is_writable(DATA_PATH.'system/apps.php') ||
		!is_writable(DATA_PATH)){
		show_tips($errorTips);
	}
	
	//version check update 
	$file = LIB_DIR.'update.php';
	if(file_exists($file)){
		//覆盖安装文件删除不了重定向问题优化
		if(!is_writable($file) ){
			show_tips($errorTips);
		}

		//update;
		include($file);
		updateCheck($file);

		//clear 
		del_file($file);
		if(file_exists($file)){
			show_tips($errorTips);
		}
		user_logout();
	}
}

//登陆是否需要验证码
function need_check_code(){
	$setting = $GLOBALS['config']['settingSystem'];
	if( !$setting['needCheckCode'] ||
		!function_exists('imagecreatefromjpeg')||
		!function_exists('imagecreatefromgif')||
		!function_exists('imagecreatefrompng')||
		!function_exists('imagecolorallocate')
		){
		return false;
	}else{
		return true;
	}
}

function make_path($str){
	//return md5(rand_string(30).$str.time());
	$replace = array('/','\\',':','*','?','"','<','>','|');
	return str_replace($replace, "_", $str);
}

function init_setting(){
	$settingFile = USER_SYSTEM.'system_setting.php';
	$settingSystemDefault = $GLOBALS['config']['settingSystemDefault'];
	if (!file_exists($settingFile)){
		$setting = $settingSystemDefault;
		FileCache::save($settingFile,$setting);
	}else{
		$setting = FileCache::load($settingFile);
	}
	//合并配置
	foreach ($settingSystemDefault as $key => $value) {
		if(!isset($setting[$key])){
			$setting[$key] = $value;
		}
	}
	$GLOBALS['app']->setDefaultController($setting['firstIn']);
	$GLOBALS['app']->setDefaultAction('index');
	$GLOBALS['config']['settingSystem'] = $setting;

	//group_role
	$roleGroupFile = USER_SYSTEM.'system_role_group.php';
	$roleGroup = $GLOBALS['config']['pathRoleGroupDefault'];
	if (!file_exists($roleGroupFile)){
		FileCache::save($roleGroupFile,$roleGroup);
	}else{
		$roleGroup = FileCache::load($roleGroupFile);
	}
	$GLOBALS['config']['pathRoleGroup'] = $roleGroup;
	
	//load user config
	$settingUser = BASIC_PATH.'config/setting_user.php';
	if (file_exists($settingUser)) {
		include($settingUser);
	}

	if(is_array($GLOBALS['L'])){
		I18n::set($GLOBALS['L']);
	}
	I18n::set(array(
		'kod_name' 	=> $GLOBALS['config']['settingSystem']['systemName'],
		'kod_name_desc' => $GLOBALS['config']['settingSystem']['systemDesc'],
	));
	if(isset($GLOBALS['config']['setting_system']['system_name'])){
		I18n::set(array(
			'kod_name' 	=> $GLOBALS['config']['setting_system']['system_name'],
			'kod_name_desc' => $GLOBALS['config']['setting_system']['system_desc'],
		));
	}
	define('STATIC_PATH',$GLOBALS['config']['settings']['staticPath']);
}

function user_logout(){
	@session_destroy();
	@session_name('KOD_SESSION_SSO');
	@session_start();
	@session_destroy();

	setcookie(SESSION_ID, '', time()-3600,'/');
	setcookie('kod_name', '', time()-3600);
	setcookie('kodToken', '', time()-3600);
	setcookie('X-CSRF-TOKEN','',time()-3600);

	$url = './index.php?user/login';
	if(ACT != 'logout'){ //不是主动退出则登陆后跳转到之前页面
		$url .= '&link='.rawurlencode(this_url());
	}
	header('Location:'.$url);
	exit;
}

function hash_encode($str) {
	return str_replace(
		base64_encode($str),
		array('+','/','='),
		array('_a','_b','_c')
	);
}
function hash_decode($str) {
	return base64_decode(
		str_replace($str,array('_a','_b','_c'),array('+','/','='))
	);
}

// 目录hash;
function hash_path($path,$addExt=false){
	$password = 'kodcloud';
	if(isset($GLOBALS['config']['settingSystem']['systemPassword'])){
		$password = $GLOBALS['config']['settingSystem']['systemPassword'];
	}

	$pre = substr(md5($path.$password),0,8);
	$result = $pre.md5($path);
	if(file_exists($path)){
		$result = $pre.md5($path.filemtime($path));
		if(filesize($path) < 50*1024*1024){
			$fileMd5 = @md5_file($path);
			if($fileMd5){
				$result = $fileMd5;
			}
		}
	}
	if($addExt){
		$result = $result.'.'.get_path_ext($path);
	}
	return $result;
}


function navbar_menu_add($array){
	$menu  = &$GLOBALS['config']['settingSystem']['menu'];
	$exist = false;
	foreach ($menu as $value) {
		if($value['name'] == $array['name']){
			return false;
		}
	}
	$menu[] = $array;
}

/**
 * 检测用户是否在用户选择数据中
 * @param  [type] $info 组合数据   "all:0;role:1;2;user:2;group:101,102;"
 * @return [type]       [description]
 */
function check_user_select($info){
	if(!is_string($info) || !$info) return true;
	$valueArr = array(
		"all"	=> "0",
		"user"	=> array(),
		"group"	=> array(),
		"role"	=> array()
	);
	$userTypeArr = explode(';',$info);
	for($i = 0;$i< count($userTypeArr);$i++){
		$splitArr = explode(':',$userTypeArr[$i]);
		if(count($splitArr) == 2){
			$valueArr[$splitArr[0]] = $splitArr[1];
			if($splitArr[0] != 'all'){
				$valueArr[$splitArr[0]] = explode(',',$splitArr[1]);
			}
		}
	}
	if(!$valueArr['user'] && !$valueArr['group'] && !$valueArr['role']){
		$valueArr['all'] = '1';
	}
	if($valueArr['all'] == '1'){
		return true;
	}

	$userInfo = $_SESSION['kodUser'];
	if(!$userInfo){
		return false;
	}
	if( $valueArr['all'] == '1' ||
		in_array($userInfo['userID'],$valueArr['user']) ||
		in_array($userInfo['role'],$valueArr['role'])   ){
		return true;
	}
	$groupArr = array_keys($userInfo['groupInfo']);
	foreach ($groupArr as $id) {
		if( in_array($id,$valueArr['group']) ){
			return true;
		}
	}
	return false;	
}
