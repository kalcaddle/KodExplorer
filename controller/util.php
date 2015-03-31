<?php
/*
* @link http://www.kalcaddle.com/
* @author warlee | e-mail:kalcaddle@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kalcaddle.com/tools/licenses/license.txt
*/

//处理成标准目录
function _DIR_CLEAR($path){
    $path = htmlspecial_decode($path);
    $path = str_replace('\\','/',trim($path));
    if (strstr($path,'../')) {//preg耗性能
        $path = preg_replace('/\.+\/+/', '/', $path);
    }
    $path = preg_replace('/\/+/', '/', $path);
    return $path;
}

//处理成用户目录，并且不允许相对目录的请求操作
function _DIR($path){
    $path = _DIR_CLEAR(rawurldecode($path));
    $path = iconv_system($path);
    if (substr($path,0,strlen('*recycle*/')) == '*recycle*/') {
        return USER_RECYCLE.str_replace('*recycle*/','',$path);
    }
    if (substr($path,0,strlen('*public*/')) == '*public*/') {
        return PUBLIC_PATH.str_replace('*public*/','',$path);
    }
    if (substr($path,0,strlen('*share*/')) == '*share*/') {
        return "*share*/";
    }
    $path = HOME.$path;
    if (is_dir($path)) $path = rtrim($path,'/').'/';
    return $path;
}

//处理成用户目录输出
function _DIR_OUT(&$arr){
    xxsClear($arr);
    if ($GLOBALS['is_root']) return;
    if (is_array($arr)) {
        foreach ($arr['filelist'] as $key => $value) {
            $arr['filelist'][$key]['path'] = pre_clear($value['path']);
        }
        foreach ($arr['folderlist'] as $key => $value) {
            $arr['folderlist'][$key]['path'] = pre_clear($value['path']);
        }
    }else{
        $arr = pre_clear($arr);
    }
}
//前缀处理 非root用户目录/从HOME开始
function pre_clear($path){
    if (ST=='share') {
        return str_replace(HOME,'',$path);
    }
    if (substr($path,0,strlen(PUBLIC_PATH)) == PUBLIC_PATH) {
        return '*public*/'.str_replace(PUBLIC_PATH,'',$path);
    }
    return str_replace(HOME,'',$path);
}
function xxsClear(&$list){
    if (is_array($list)) {
        foreach ($list['filelist'] as $key => $value) {
            $list['filelist'][$key]['ext'] = htmlspecial($value['ext']);
            $list['filelist'][$key]['path'] = htmlspecial($value['path']);
            $list['filelist'][$key]['name'] = htmlspecial($value['name']);
        }
        foreach ($list['folderlist'] as $key => $value) {
            $list['folderlist'][$key]['path'] = htmlspecial($value['path']);
            $list['folderlist'][$key]['name'] = htmlspecial($value['name']);
        }
    }else{
        $list = htmlspecial($list);
    }
}
function htmlspecial($str){
    return str_replace(
        array('<','>','"',"'"),
        array('&lt;','&gt;','&quot;','&#039;','&amp;'),
        $str
    );
}
function htmlspecial_decode($str){
    return str_replace(        
        array('&lt;','&gt;','&quot;','&#039;'),
        array('<','>','"',"'"),
        $str
    );
}

//扩展名权限判断
function checkExtUnzip($s,$info){
    return checkExt($info['stored_filename']);
}
//扩展名权限判断 有权限则返回1 不是true
function checkExt($file,$changExt=false){
    if (strstr($file,'<') || strstr($file,'>') || $file=='') {
        return 0;
    }
    if ($GLOBALS['is_root'] == 1) return 1;
    $not_allow = $GLOBALS['auth']['ext_not_allow'];
    $ext_arr = explode('|',$not_allow);
    foreach ($ext_arr as $current) {
        if (stristr($file,'.'.$current)){//含有扩展名
            return 0;
        }
    }
    return 1;
}

function php_env_check(){
    $L = $GLOBALS['L'];
    $error = '';
    $base_path = get_path_this(BASIC_PATH).'/'; 
    if(!function_exists('iconv')) $error.= '<li>'.$L['php_env_error_iconv'].'</li>';
    if(!function_exists('mb_convert_encoding')) $error.= '<li>'.$L['php_env_error_mb_string'].'</li>';
    if(!version_compare(PHP_VERSION,'5.0','>=')) $error.= '<li>'.$L['php_env_error_version'].'</li>';
    if(!function_exists('file_get_contents')) $error.='<li>'.$L['php_env_error_file'].'</li>';
    if(!path_writable(BASIC_PATH)) $error.= '<li>'.$base_path.'	'.$L['php_env_error_path'].'</li>';
    if(!path_writable(BASIC_PATH.'data')) $error.= '<li>'.$base_path.'data	'.$L['php_env_error_path'].'</li>';
    if(!path_writable(BASIC_PATH.'data/system')) $error.= '<li>'.$base_path.'data/system	'.$L['php_env_error_path'].'</li>';
    if(!path_writable(BASIC_PATH.'data/User')) $error.= '<li>'.$base_path.'data/User	'.$L['php_env_error_path'].'</li>';
    if(!path_writable(BASIC_PATH.'data/thumb')) $error.= '<li>'.$base_path.'data/thumb	'.$L['php_env_error_path'].'</li>';
    if( !function_exists('imagecreatefromjpeg')||
        !function_exists('imagecreatefromgif')||
        !function_exists('imagecreatefrompng')||	
        !function_exists('imagecolorallocate')){
        $error.= '<li>'.$L['php_env_error_gd'].'</li>';
    }
    return $error;
}

//语言包加载：优先级：cookie获取>自动识别
//首次没有cookie则自动识别——存入cookie,过期时间无限
function init_lang(){
    if (isset($_COOKIE['kod_user_language'])) {
        $lang = $_COOKIE['kod_user_language'];
    }else{//没有cookie
        preg_match('/^([a-z\-]+)/i', $_SERVER['HTTP_ACCEPT_LANGUAGE'], $matches);
        $lang = $matches[1];
        switch (substr($lang,0,2)) {
            case 'zh':
                if ($lang != 'zn-TW'){
                    $lang = 'zh-CN';
                }
                break;
            case 'en':$lang = 'en';break;
            default:$lang = 'en';break;
        }
        $lang = str_replace('-', '_',$lang);
        setcookie('kod_user_language',$lang, time()+3600*24*365);
    }
    if ($lang == '') $lang = 'en';
    
    $lang = str_replace(array('/','\\','..','.'),'',$lang);
    define('LANGUAGE_TYPE', $lang);
    include(LANGUAGE_PATH.$lang.'/main.php');
    $GLOBALS['L'] = $L;
}

function init_setting(){
    $setting_file = USER_SYSTEM.'system_setting.php';
    if (!file_exists($setting_file)){//不存在则建立
        $setting = $GLOBALS['config']['setting_system_default'];
        $setting['menu'] = $GLOBALS['config']['setting_menu_default'];
        fileCache::save($setting_file,$setting);
    }else{
        $setting = fileCache::load($setting_file);   
    }
    if (!is_array($setting)) {
        $setting = $GLOBALS['config']['setting_system_default'];
    }
    if (!is_array($setting['menu'])) {
        $setting['menu'] = $GLOBALS['config']['setting_menu_default'];
    }

    $GLOBALS['app']->setDefaultController($setting['first_in']);//设置默认控制器
    $GLOBALS['app']->setDefaultAction('index');    //设置默认控制器函数

    $GLOBALS['config']['setting_system'] = $setting;//全局
    $GLOBALS['L']['kod_name'] = $setting['system_name'];
    $GLOBALS['L']['kod_name_desc'] = $setting['system_desc'];
    if (isset($setting['powerby'])) {
        $GLOBALS['L']['kod_power_by'] = $setting['powerby'];
    }
}
