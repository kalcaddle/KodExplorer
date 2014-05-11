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
function _DIR($path,$pre_path=HOME){
    $path = _DIR_CLEAR(rawurldecode($path));
    $path = iconv_system($path);
    if (is_dir($path)) $path.='/';

    //公共目录处理
    $share_len = strlen(PUBLIC_PATH);
    if (substr($path,0,$share_len) == PUBLIC_PATH) {
        $pre_path = '';//如果为共享目录 则不追加普通用户的目录前缀
    }
    return $pre_path.$path;
}

//处理成用户目录，并且不允许相对目录的请求操作
function _DIR_OUT(&$arr,$pre_path=HOME){
    if ($GLOBALS['is_root']) return;
    
    //公共目录处理
    if (substr($path,0,$share_len) == PUBLIC_PATH) {
        $pre_path = '';//如果为共享目录 则不追加普通用户的目录前缀
    }
    if (is_array($arr)) {
        foreach ($arr['filelist'] as $key => $value) {
            //$arr['filelist'][$key]['path'] = '/'.str_replace($pre_path, '', $value['path']);
            $arr['filelist'][$key]['path'] = str_replace($pre_path, '', $value['path']);
        }
        foreach ($arr['folderlist'] as $key => $value) {
            $arr['folderlist'][$key]['path'] = str_replace($pre_path, '', $value['path']);
        }        
    }else{
        $arr = str_replace($pre_path, '',$arr);
    }
}

//语言包加载：优先级：cookie获取>自动识别
//首次没有cookie则自动识别——存入cookie,过期时间无限
function init_lang(){
    $lang = $_COOKIE['kod_user_language'];
    if (strlen($lang)<=0) {//没有cookie
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