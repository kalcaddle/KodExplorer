<?php
/*
* @link http://www.kalcaddle.com/
* @author warlee | e-mail:kalcaddle@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kalcaddle.com/tools/licenses/license.txt
*/

//处理成标准目录
function _DIR_CLEAR($path){
    $path = str_replace('\\','/',trim($path));
    if (strstr($path,'../')) {//preg耗性能
        $path = preg_replace('/\.+\/+/', '/', $path);
        $path = preg_replace('/\/+/', '/', $path);
    }
    return str_replace('//','/',$path);
}

//处理成用户目录，并且不允许相对目录的请求操作
function _DIR($path){
    $path = _DIR_CLEAR(rawurldecode($path));
    $path = iconv_system($path);
    if (substr($path,0,strlen(PUBLIC_PATH)) == PUBLIC_PATH) {
        return $path;
    }
    $path = HOME.$path;
    if (is_dir($path)) $path.='/';
    return $path;
}
//处理成用户目录输出
function _DIR_OUT(&$arr){
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
    if (substr($path,0,strlen(PUBLIC_PATH)) == PUBLIC_PATH) {
        return $path;
    }
    return str_replace(HOME, '', $path);
}

//扩展名权限判断
function checkExtUnzip($s,$info){
    return checkExt($info['stored_filename']);
}
//扩展名权限判断 有权限则返回1 不是true
function checkExt($file,$changExt=false){
    if ($GLOBALS['is_root'] == 1) return 1;
    if ($file=='') return false;
    $not_allow = $GLOBALS['auth']['ext_not_allow'];
    $file = rawurldecode($file);
    $ext_arr = explode('|',$not_allow);
    foreach ($ext_arr as $current) {
        if (stristr($file,'.'.$current)){//含有扩展名
            return false;
        }
    }
    return 1;
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
    
    $GLOBALS['language'] = $lang;    
    define('LANGUAGE_TYPE', $lang);
    include(LANGUAGE_PATH.$lang.'/main.php');
    $GLOBALS['L'] = $L;
    $GLOBALS['lang'] = $L;
}