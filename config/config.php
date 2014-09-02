<?php
/*
* @link http://www.kalcaddle.com/
* @author warlee | e-mail:kalcaddle@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kalcaddle.com/tools/licenses/license.txt
*/

date_default_timezone_set('PRC');
@ini_set('session.cache_expire',600);
@set_time_limit(600);//30min pathInfoMuti,search,upload,download... 
@error_reporting(E_ERROR|E_WARING|E_PARSE);

function P($path){return str_replace('\\','/',$path);}
define('WEB_ROOT',str_replace(P($_SERVER['SCRIPT_NAME']),'',P(dirname(dirname(__FILE__))).'/index.php').'/');
define('HOST',          'http://'.$_SERVER['HTTP_HOST'].'/');
define('BASIC_PATH',    P(dirname(dirname(__FILE__))).'/');
define('APPHOST',       HOST.str_replace(WEB_ROOT,'',BASIC_PATH));//程序根目录
define('TEMPLATE',		BASIC_PATH .'template/');	//模版文件路径
define('CONTROLLER_DIR',BASIC_PATH .'controller/'); //控制器目录
define('MODEL_DIR',		BASIC_PATH .'model/');		//模型目录
define('LIB_DIR',		BASIC_PATH .'lib/');		//库目录
define('FUNCTION_DIR',	LIB_DIR .'function/');		//函数库目录
define('CLASS_DIR',		LIB_DIR .'class/');			//内目录
define('CORER_DIR',		LIB_DIR .'core/');			//核心目录
define('DATA_PATH',     BASIC_PATH .'data/');       //用户数据目录
define('LOG_PATH',      DATA_PATH .'log/');         //日志目录
define('USER_PATH',     DATA_PATH .'User/');        //用户目录
define('USER_SYSTEM',   DATA_PATH .'system/');      //用户数据存储目录
define('LANGUAGE_PATH', DATA_PATH .'i18n/');        //多语言目录
define('PUBLIC_PATH',   DATA_PATH .'public/');      //公共共享目录 读写权限跟随用户目录的读写权限

define('OFFICE_SERVER', "");
//默认为空则调用微软解析api,需要外网才可以；
//如果内网或局域网使用，引号内填写配置好的地址前缀 形如:"http://***/view.aspx?src="

define('STATIC_JS','app');//_dev app  js编译||开发状态
define('STATIC_LESS','css');
define('STATIC_PATH',"./static/");//静态文件目录
//define('STATIC_PATH','http://static.kalcaddle.com/static/');

include(FUNCTION_DIR.'web.function.php');
include(FUNCTION_DIR.'file.function.php');
include(CLASS_DIR.'fileCache.class.php');
include(CONTROLLER_DIR.'util.php');

include(CORER_DIR.'Application.class.php');
include(CORER_DIR.'Controller.class.php');
include(CORER_DIR.'Model.class.php');
include(FUNCTION_DIR.'common.function.php');
include(BASIC_PATH.'config/setting.php');
include(BASIC_PATH.'config/version.php');

//数据地址定义。
$config['pic_thumb']	= BASIC_PATH.'data/thumb/';		// 缩略图生成存放地址
$config['cache_dir']	= BASIC_PATH.'data/cache/';		// 缓存文件地址
$config['system_os']	= 'windows';		//windows,linux,mac
$config['system_charset']='gbk';			//系统编码
$config['app_charset']	 ='utf-8';			//该程序整体统一编码
$config['app_startTime'] = mtime();         //起始时间
$config['check_charset'] = 'ASCII,UTF-8,GBK';//文件打开自动检测编码
//when edit a file ;check charset and auto converto utf-8;

//系统编码配置
if (strtoupper(substr(PHP_OS, 0,3)) === 'WIN') {
	$config['system_os']='windows';
	$config['system_charset']='gbk';
} else {
	$config['system_os']='linux';
	$config['system_charset']='utf-8';
}

init_lang();
$in = parse_incoming();//所有过滤处理。
session_start();
session_write_close();//之后要修改$_SESSION 需要先调用session_start()
$config['autorun'] = array(
	array('controller'=>'user','function'=>'loginCheck'),
    array('controller'=>'user','function'=>'authCheck')
);