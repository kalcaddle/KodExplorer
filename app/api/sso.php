<?php

define('SSO_BASIC_DIR',dirname(dirname(dirname(__FILE__))));
function get_session_data(){
	$basicPath = str_replace('\\','/',SSO_BASIC_DIR.'/');
	$sessionID = 'KOD_SESSION_ID_'.substr(md5($basicPath),0,5);
	$sessionPath = $basicPath.'/data/session/';

	@session_name($sessionID);
	if( class_exists('SaeStorage') || defined('SAE_APPNAME') ||
		isset($_SERVER['HTTP_APPNAME']) ){
	}else{
		@session_save_path($sessionPath);
	}
	@session_start();
	@session_write_close();
	return $_SESSION;
}

function check_session_data($key,$value = true){
	$arr = get_session_data();
	if(isset($arr[$key]) && $arr[$key] == $value){
		return true;
	}
	return false;
}

/**
 * 调用kod的登陆检测(适用于同服务器同域名)
 * @param  [type] $kodHost kod的地址;例如 http://test.com/
 * @param  [type] $appKey  应用标记 例如 tools_admin
 * @param  [type] $appUrl  验证后跳转到的url
 * @param  [type] $auth    验证方式：例如:'check=user_name&value=smartx'
 *          check (user_id|user_name|role_id|role_name|group_id|group_name) 校验方式,为空则所有登陆用户
 */
function sso_login_check($kodHost,$appKey,$appUrl,$auth){
	$appUrl = trim($appUrl,'/').'/index.php?user/sso';

	session_write_close();
	$sessionPath = SSO_BASIC_DIR.'/data/session/';
	$sessionID = $_COOKIE['KOD_SESSION_SSO']?$_COOKIE['KOD_SESSION_SSO']:md5(uniqid());
	session_name('KOD_SESSION_SSO');
	session_save_path($sessionPath);
	session_id($sessionID);
	session_start();
	if(!isset($_SESSION[$appKey]) || $_SESSION[$appKey] != 'success'){
		header('location:'.$kodHost.'&app='.$appKey.'&'.$auth.'&link='.$appUrl);exit;
	}
}

