<?php


require_once(dirname(dirname(__FILE__)).'/function/web.function.php');
class SSO{
	static private function init(){
		$sessionName = 'KOD_SESSION_SSO';
		$sessionID   = $_COOKIE[$sessionName]?$_COOKIE[$sessionName]:md5(uniqid());
		$basicPath   = dirname(dirname(dirname(__FILE__))).'/';
		$sessionPath = $basicPath.'data/session/';
		if(file_exists($basicPath.'define.php')){
			include($basicPath.'define.php');
			$sessionPath = DATA_PATH.'session/';
		}
		if(!file_exists($sessionPath)){
			mkdir($sessionPath);
		}
		$sessionSavePath = @session_save_path();
		@session_write_close();
		@session_name($sessionName);
		if( class_exists('SaeStorage') ||
			defined('SAE_APPNAME') ||
			defined('SESSION_PATH_DEFAULT') ||
			@ini_get('session.save_handler') != 'files' ||
			isset($_SERVER['HTTP_APPNAME']) ){
			//sae 关闭自定义session路径
		}else{
			@session_save_path($sessionPath);//session path
		}
		@session_id($sessionID);

		@session_start();
		$_SESSION['kodSSO'] = true;
		@session_write_close();
		unset($_SESSION);
		@session_start();
		if(!$_SESSION['kodSSO']){
			@session_save_path($sessionSavePath);//session path
			@session_start();
			$_SESSION['kodSSO'] = true;
			@session_write_close();
		}
		//echo '<pre>';var_dump($_SESSION);echo '</pre>';exit;
		return $_SESSION;
	}

	/**
	 * 设置session 认证
	 * @param  [type] $key [认证key]
	 */
	static public function sessionSet($key,$value='success'){
		self::init();
		@session_start();
		$_SESSION[$key] = $value;
		@session_write_close();
	}


	static public function sessionCheck($key,$value='success'){
		$session = self::init();
		if( isset($session[$key]) && $session[$key] == $value){
			return true;
		}
		return false;
	}

	/**
	 * 直接调用kod的登陆检测(适用于同服务器同域名;)
	 * @param  [type] $kodHost kod的地址;例如 http://test.com/ ;默认为插件目录
	 * @param  [type] $appKey  应用标记 例如 loginCheck
	 * @param  [type] $appUrl  验证后跳转到的url;默认为当前url
	 * @param  [type] $auth    验证方式：例如:'check=userName&value=smartx'
	 *          check (userID|userName|roleID|roleName|groupID|groupName) 校验方式,为空则所有登陆用户
	 */
	static public function sessionAuth($appKey,$auth,$kodHost='',$appUrl=''){
		if($kodHost==''){
			$appUrl = this_url();
			if(strstr($appUrl,'/plugins/')){
				$kodHost = substr($appUrl,0,strpos($appUrl,'/plugins/'));
			}else{
				$kodHost = $_SERVER['HTTP_REFERER'];
				if(strstr($kodHost,'/index.php?')){
					$kodHost = substr($kodHost,0,strpos($kodHost,'/index.php?'));
				}else if(strstr($kodHost,'/?')){
					$kodHost = substr($kodHost,0,strpos($kodHost,'/?'));
				}
			}
		}
		$authUrl = rtrim($kodHost,'/').'/index.php?user/sso&app='.$appKey.'&'.$auth;
		if($appUrl == ''){
			$appUrl = this_url();
		}
		if(!self::sessionCheck($appKey)){
			session_destroy();
			header('Location: '.$authUrl.'&link='.rawurlencode($appUrl));
			exit;
		}
	}
}


