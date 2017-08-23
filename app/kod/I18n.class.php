<?php

function LNG($key){
	if (func_num_args() == 1) {
        return I18n::get($key);
	} else {
		$args = func_get_args();
		array_shift($args);
        return vsprintf(I18n::get($key), $args);
	}
}

class I18n{
	private static $loaded = false;
	private static $lang   = NULL;
	public  static $langType = NULL;

	public static function defaultLang(){
		if(isset($GLOBALS['config']['settings']['language'])){
			return $GLOBALS['config']['settings']['language'];
		}
		$lang  = "en";
		$arr   = $GLOBALS['config']['settingAll']['language'];
		$langs = array();
		foreach ($arr as $key => $value) {
			$langs[$key] = $key;
		}
		$langs['zh'] = 'zh-CN';	//增加大小写对应关系
		$langs['zh-tw'] = 'zh-TW';

		$acceptLanguage = array();
		if(!isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])){
			$httpLang = 'en';
		}else{
			$httpLang = str_replace("_","-",strtolower($_SERVER['HTTP_ACCEPT_LANGUAGE']));
		}
		preg_match_all('~([-a-z]+)(;q=([0-9.]+))?~',$httpLang,$matches,PREG_SET_ORDER);
		foreach ($matches as $match) {
			$acceptLanguage[$match[1]] = (isset($match[3]) ? $match[3] : 1);
		}
		arsort($acceptLanguage);
		foreach ($acceptLanguage as $key => $q) {
			if (isset($langs[$key])) {
				$lang = $langs[$key];break;
			}
			$key = preg_replace('~-.*~','', $key);
			if (!isset($acceptLanguage[$key]) && isset($langs[$key])) {
				$lang = $langs[$key];break;
			}
		}
		return $lang;
	}

	public static function getAll(){
		self::init();
		return self::$lang;
	}
	public static function getType(){
		self::init();
		return self::$langType;
	}

	public static function init(){
    	if(self::$loaded !== false){
			return;
		}
	    $cookieLang = 'kodUserLanguage';
		if (isset($_COOKIE[$cookieLang])) {
			$lang = $_COOKIE[$cookieLang];
		}else{
			$lang = self::defaultLang();
			setcookie_header($cookieLang,$lang, time()+3600*24*100);
		}

		$lang = str_replace(array('/','\\','..','.'),'',$lang);
		//兼容旧版本
		if($lang == 'zh_CN') $lang = 'zh-CN';
		if($lang == 'zh_TW') $lang = 'zh-TW';

		if(isset($GLOBALS['config']['settings']['language'])){
			$lang = $GLOBALS['config']['settings']['language'];
		}
		$langFile = LANGUAGE_PATH.$lang.'/main.php';
		if(!file_exists($langFile)){//allow remove some I18n folder
			$lang = 'en';
			$langFile = LANGUAGE_PATH.$lang.'/main.php';
		}

		self::$langType = $lang;
		self::$lang = include($langFile);
		self::$loaded = true;
		$GLOBALS['L'] = self::$lang;
	}

	public static function get($key){
		self::init();
		if(!isset(self::$lang[$key])){
			return $key;
		}
		if (func_num_args() == 1) {
	        return self::$lang[$key];
		} else {
			$args = func_get_args();
			array_shift($args);
	        return vsprintf(self::$lang[$key], $args);
		}
	}

	/**
	 * 添加多语言;
	 * @param [type] $args [description]
	 */
	public static function set($array){
		self::init();
		if(!is_array($array)) return;
		foreach ($array as $key => $value) {
			self::$lang[$key] = $value;
		}
	}
}
