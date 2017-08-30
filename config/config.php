<?php
/*
* @link http://kodcloud.com/
* @author warlee | e-mail:kodcloud@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kodcloud.com/tools/license/license.txt
*/

define('GLOBAL_DEBUG',0);//0 or 1
@date_default_timezone_set(@date_default_timezone_get());
@set_time_limit(1200);//20min pathInfoMuti,search,upload,download...
@ini_set("max_execution_time",1200);
@ini_set('session.cache_expire',1800);

if(GLOBAL_DEBUG){
	define('STATIC_JS','_dev');  //_dev||app
	define('STATIC_LESS','less');//less||css
	@ini_set("display_errors","on");
	@error_reporting(E_ALL^E_NOTICE);//
}else{
	define('STATIC_JS','app');  //app
	define('STATIC_LESS','css');//css
	@ini_set("display_errors","on");//on off
	@error_reporting(E_ALL^E_NOTICE^E_WARNING);// 0
}

//header('HTTP/1.1 200 Ok');//兼容部分lightHttp服务器环境; php5.1以下会输出异常；暂屏蔽
header("Content-type: text/html; charset=utf-8");
define('BASIC_PATH',str_replace('\\','/',dirname(dirname(__FILE__))).'/');
define('LIB_DIR',       BASIC_PATH .'app/');     	//系统库目录
define('PLUGIN_DIR',    BASIC_PATH .'plugins/');	//插件目录
define('CONTROLLER_DIR',LIB_DIR .'controller/'); 	//控制器目录
define('MODEL_DIR',     LIB_DIR .'model/');  		//模型目录
define('TEMPLATE',      LIB_DIR .'template/');   	//模版文件路径
define('FUNCTION_DIR',	LIB_DIR .'function/');		//函数库目录
define('CLASS_DIR',		LIB_DIR .'kod/');			//工具类目录
define('CORER_DIR',		LIB_DIR .'core/');			//核心目录
define('SDK_DIR',		LIB_DIR .'sdks/');			//
define('DEFAULT_PERRMISSIONS',0755);	//新建文件、解压文件默认权限，777 部分虚拟主机限制了777

/*
 * 可以数据目录;移到web目录之外，可以使程序更安全, 就不用限制用户的扩展名权限了;
 * 1. 需要先将data文件夹移到别的地方 例如将data文件夹拷贝到D:/
 * 2. 在config文件夹下新建define.php 新增一行 <?php define('DATA_PATH','D:/data/');
 */

if(file_exists(BASIC_PATH.'config/define.php')){
	include(BASIC_PATH.'config/define.php');
}
if(!defined('DATA_PATH')){
	define('DATA_PATH',BASIC_PATH .'data/');       //用户数据目录
}
define('USER_PATH',     DATA_PATH .'User/');        //用户目录
define('GROUP_PATH',    DATA_PATH .'Group/');       //群组目录
define('USER_SYSTEM',   DATA_PATH .'system/');      //用户数据存储目录
define('TEMP_PATH',     DATA_PATH .'temp/');        //临时目录
define('LOG_PATH',      TEMP_PATH .'log/');         //日志
define('DATA_THUMB',    TEMP_PATH .'thumb/');       //缩略图生成存放
define('LANGUAGE_PATH', BASIC_PATH .'config/i18n/');//多语言目录
define('SESSION_ID','KOD_SESSION_ID_'.substr(md5(BASIC_PATH),0,5));
define('KOD_SESSION',   DATA_PATH .'session/');     //session目录
include(FUNCTION_DIR.'common.function.php');
include(FUNCTION_DIR.'web.function.php');
include(FUNCTION_DIR.'file.function.php');
include(FUNCTION_DIR.'helper.function.php');

$config['appStartTime'] = mtime();
$config['appCharset']	= 'utf-8';//该程序整体统一编码
$config['checkCharset'] = 'ASCII,UTF-8,GB2312,GBK,BIG5,UTF-16,UCS-2,'.
		'Unicode,EUC-KR,EUC-JP,SHIFT-JIS,EUCJP-WIN,SJIS-WIN,JIS,LATIN1';//文件打开自动检测编码

define('WEB_ROOT',get_webroot(BASIC_PATH));
define('HOST',get_host().'/');
define('APP_HOST',HOST.str_replace(WEB_ROOT,'',BASIC_PATH));			//程序根目录
define('PLUGIN_HOST',APP_HOST.str_replace(BASIC_PATH,'',PLUGIN_DIR));	//插件目录

include(CONTROLLER_DIR.'util.php');
include(BASIC_PATH.'config/setting.php');
include(BASIC_PATH.'config/version.php');

//when edit a file ;check charset and auto converto utf-8;
if (strtoupper(substr(PHP_OS, 0,3)) === 'WIN') {
	$config['systemOS']='windows';
	$config['systemCharset']='gbk';// EUC-JP/Shift-JIS/BIG5  //user set your server system charset
	if(version_compare(phpversion(), '7.1.0', '>=')){//7.1 has auto apply the charset
		$config['systemCharset']='utf-8';
	}
} else {
	$config['systemOS']='linux';
	$config['systemCharset']='utf-8';
}

init_common();
$config['autorun'] = array(
	array('controller'=>'user','function'=>'loginCheck'),
	array('controller'=>'user','function'=>'authCheck'),
	array('controller'=>'user','function'=>'bindHook'),
);

