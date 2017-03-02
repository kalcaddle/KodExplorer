<?php
/*
* @link http://www.kalcaddle.com/
* @author warlee | e-mail:kalcaddle@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kalcaddle.com/tools/licenses/license.txt
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
	@error_reporting(E_ERROR|E_PARSE|E_WARNING);//E_ALL
}else{
	define('STATIC_JS','app');  //app
	define('STATIC_LESS','css');//css
	@ini_set("display_errors","on");//on off
	@error_reporting(E_ERROR|E_PARSE);// 0
}

header("Content-type: text/html; charset=utf-8");
//header('HTTP/1.1 200 Ok');//兼容部分lightHttp服务器环境; php5.1以下会输出异常；暂屏蔽
define('BASIC_PATH',str_replace('\\','/',dirname(dirname(__FILE__))).'/');
define('TEMPLATE',      BASIC_PATH .'template/');   //模版文件路径
define('CONTROLLER_DIR',BASIC_PATH .'controller/'); //控制器目录
define('MODEL_DIR',     BASIC_PATH .'model/');      //模型目录
define('LIB_DIR',       BASIC_PATH .'lib/');        //库目录
define('PLUGIN_DIR',    LIB_DIR .'plugins/');       //插件目录
define('FUNCTION_DIR',	LIB_DIR .'function/');		//函数库目录
define('CLASS_DIR',		LIB_DIR .'class/');			//内目录
define('CORER_DIR',		LIB_DIR .'core/');			//核心目录
define('DEFAULT_PERRMISSIONS',0755);	//新建文件、解压文件默认权限，777 部分虚拟主机限制了777

/*
 * 可以数据目录;移到web目录之外，可以使程序更安全, 就不用限制用户的扩展名权限了;
 * 1. 需要先将data文件夹移到别的地方 例如将data文件夹拷贝到D:/
 * 2. 修改配置 define('DATA_PATH','D:/data/');
 */
define('DATA_PATH',     BASIC_PATH .'data/');       //用户数据目录
define('USER_PATH',     DATA_PATH .'User/');        //用户目录
define('GROUP_PATH',    DATA_PATH .'Group/');       //群组目录
define('USER_SYSTEM',   DATA_PATH .'system/');      //用户数据存储目录
define('TEMP_PATH',     DATA_PATH .'temp/');        //临时目录
define('LOG_PATH',      TEMP_PATH .'log/');         //日志
define('DATA_THUMB',    TEMP_PATH .'thumb/');       //缩略图生成存放
define('LANGUAGE_PATH', BASIC_PATH .'config/i18n/');//多语言目录
define('SESSION_ID','KOD_SESSION_ID_'.substr(md5(BASIC_PATH),0,5));
define('KOD_SESSION',   DATA_PATH .'session/');     //session目录

define('OFFICE_SERVER',"https://owa-box.vips100.com/op/view.aspx?src=");
// https://owa-box.vips100.com/op/view.aspx?src=
// http://preview.tita.com/op/view.aspx?src=
// https://docview.mingdao.com/op/view.aspx?src=
// https://view.officeapps.live.com/op/view.aspx?src=


include(FUNCTION_DIR.'common.function.php');
$config['app_startTime'] = mtime();
include(FUNCTION_DIR.'web.function.php');
include(FUNCTION_DIR.'file.function.php');
include(CORER_DIR.'Application.class.php');
include(CORER_DIR.'Controller.class.php');
include(CORER_DIR.'Model.class.php');
include(CLASS_DIR.'fileCache.class.php');
include(CLASS_DIR.'mcrypt.class.php');
include(CONTROLLER_DIR.'system_member.class.php');
include(CONTROLLER_DIR.'system_group.class.php');
include(CONTROLLER_DIR.'system_role.class.php');
include(CONTROLLER_DIR.'util.php');
include(BASIC_PATH.'config/setting.php');
include(BASIC_PATH.'config/version.php');

define('WEB_ROOT',get_webroot(BASIC_PATH));
define('HOST',get_host().'/');
define('APPHOST',HOST.str_replace(WEB_ROOT,'',BASIC_PATH));//程序根目录

$config['app_charset']	 = 'utf-8';			            //该程序整体统一编码
$config['settings']['static_path'] = "./static/";     //静态文件目录
$config['check_charset'] = 'ASCII,UTF-8,GBK,GB2312,UTF-16,UCS-2,EUC-KR,EUC-JP,SHIFT-JIS,EUCJP-WIN,SJIS-WIN,JIS,LATIN1';//文件打开自动检测编码

//when edit a file ;check charset and auto converto utf-8;
if (strtoupper(substr(PHP_OS, 0,3)) === 'WIN') {
	$config['system_os']='windows';
	$config['system_charset']='gbk';// EUC-JP/Shift-JIS/BIG5  //user set your server system charset
	if(version_compare(phpversion(), '7.1.0', '>=')){//7.1 has auto apply the charset
	    $config['system_charset']='utf-8';
	}
} else {
	$config['system_os']='linux';
	$config['system_charset']='utf-8';
}  

init_common();
if(isset($in[SESSION_ID])){//office edit post
	session_id($in[SESSION_ID]);
}
if(isset($in['access_token'])){//office edit post
	session_id($in['access_token']);
}
@session_name(SESSION_ID);
@session_save_path(KOD_SESSION);//session path
@session_start();
@session_write_close();//避免session锁定问题;之后要修改$_SESSION 需要先调用session_start()

//write_log(json_encode($_REQUEST),'default');
$config['autorun'] = array(
	array('controller'=>'user','function'=>'loginCheck'),
	array('controller'=>'user','function'=>'authCheck')
);

