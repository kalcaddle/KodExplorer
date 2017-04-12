<?php
/*
* @link http://www.kalcaddle.com/
* @author warlee | e-mail:kalcaddle@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kalcaddle.com/tools/licenses/license.txt
*/

/**
 * 加载类，从class目录；controller；model目录中寻找class
 */
function _autoload($className){
	if (file_exists(CLASS_DIR . strtolower($className) . '.class.php')) {
		include(CLASS_DIR . strtolower($className) . '.class.php');
	} else if (file_exists(CONTROLLER_DIR . strtolower($className) . '.class.php')) {
		include(CONTROLLER_DIR . strtolower($className) . '.class.php');
	} else if (file_exists(MODEl_DIR . strtolower($className) . '.class.php')) {
		include(MODEl_DIR . strtolower($className) . '.class.php');
	} else {
		show_tips($className.' is not exist');
	} 
}

/**
 * 生产model对象
 */
function init_model($model_name){
	if (!class_exists($model_name.'Model')) {
		$model_file = MODEL_DIR.$model_name.'Model.class.php';
		if(!is_file($model_file)){
			return false;
		}
		include($model_file);
	}
	$reflectionObj = new ReflectionClass($model_name.'Model');
	$args = func_get_args();
	array_shift($args);
	return $reflectionObj -> newInstanceArgs($args);
}
/**
 * 生产controller对象
 */
function init_controller($controller_name){
	if (!class_exists($controller_name)) {
		$model_file = CONTROLLER_DIR.$controller_name.'.class.php';
		if(!is_file($model_file)){
			return false;
		}
		include($model_file);
	}
	$reflectionObj = new ReflectionClass($controller_name);
	$args = func_get_args();
	array_shift($args);
	return $reflectionObj -> newInstanceArgs($args);
}

/**
 * 加载类
 */
function load_class($class){
	$filename = CLASS_DIR.$class.'.class.php';
	if (file_exists($filename)) {
		include($filename);
	}else{
		show_tips($filename.' is not exist');
	}
}
/**
 * 加载函数库
 */
function load_function($function){
	$filename = FUNCTION_DIR.$function.'.function.php';
	if (file_exists($filename)) {
		include($filename);
	}else{
		show_tips($filename.' is not exist');
	}
}
/**
 * 文本字符串转换
 */
function mystr($str){
	$from = array("\r\n", " ");
	$to = array("<br/>", "&nbsp");
	return str_replace($from, $to, $str);
} 

// 清除多余空格和回车字符
function strip($str){
	return preg_replace('!\s+!', '', $str);
} 

/**
 * 获取精确时间
 */
function mtime(){
	$t= explode(' ',microtime());
	$time = $t[0]+$t[1];
	return $time;
}
/**
 * 过滤HTML
 */
function clear_html($HTML, $br = true){
	$HTML = htmlspecialchars(trim($HTML));
	$HTML = str_replace("\t", ' ', $HTML);
	if ($br) {
		return nl2br($HTML);
	} else {
		return str_replace("\n", '', $HTML);
	} 
}

/**
 * 过滤js、css等 
 */
function filter_html($html){
	$find = array(
		"/<(\/?)(script|i?frame|style|html|body|title|link|meta|\?|\%)([^>]*?)>/isU",
		"/(<[^>]*)on[a-zA-Z]+\s*=([^>]*>)/isU",
		"/javascript\s*:/isU",
	);
	$replace = array("＜\\1\\2\\3＞","\\1\\2","");
	return preg_replace($find,$replace,$html);
}

/**
 * 将obj深度转化成array
 * 
 * @param  $obj 要转换的数据 可能是数组 也可能是个对象 还可能是一般数据类型
 * @return array || 一般数据类型
 */
function obj2array($obj){
	if (is_array($obj)) {
		foreach($obj as &$value) {
			$value = obj2array($value);
		} 
		return $obj;
	} elseif (is_object($obj)) {
		$obj = get_object_vars($obj);
		return obj2array($obj);
	} else {
		return $obj;
	} 
}

function ignore_timeout(){
	@ignore_user_abort(true);
	@set_time_limit(24 * 60 * 60);//set_time_limit(0)  1day
	@ini_set('memory_limit', '2028M');//2G;
}

/**
 * 计算时间差
 * 
 * @param char $pretime 
 * @return char 
 */
function spend_time(&$pretime){
	$now = microtime(1);
	$spend = round($now - $pretime, 5);
	$pretime = $now;
	return $spend;
} 

function check_code($code){
	ob_clean();
	header("Content-type: image/png");
	$width = 70;$height=27;
	$fontsize = 18;$len = strlen($code);
	$im = @imagecreatetruecolor($width, $height) or die("create image error!");
	$background_color = imagecolorallocate($im,255, 255, 255);
	imagefill($im, 0, 0, $background_color);  
	for ($i = 0; $i < 2000; $i++) {//获取随机淡色            
		$line_color = imagecolorallocate($im, mt_rand(180,255),mt_rand(160, 255),mt_rand(100, 255));
		imageline($im,mt_rand(0,$width),mt_rand(0,$height), //画直线
			mt_rand(0,$width), mt_rand(0,$height),$line_color);
		imagearc($im,mt_rand(0,$width),mt_rand(0,$height), //画弧线
			mt_rand(0,$width), mt_rand(0,$height), $height, $width,$line_color);
	}
	$border_color = imagecolorallocate($im, 160, 160, 160);   
	imagerectangle($im, 0, 0, $width-1, $height-1, $border_color);//画矩形，边框颜色200,200,200
	for ($i = 0; $i < $len; $i++) {//写入随机字串
		$text_color = imagecolorallocate($im,mt_rand(30, 140),mt_rand(30,140),mt_rand(30,140));
		imagechar($im,10,$i*$fontsize+6,rand(1,$height/3),$code[$i],$text_color);
	}
	imagejpeg($im);//显示图
	imagedestroy($im);//销毁图片
}

/**
 * 返回当前浮点式的时间,单位秒;主要用在调试程序程序时间时用
 * 
 * @return float 
 */
function microtime_float(){
	list($usec, $sec) = explode(' ', microtime());
	return ((float)$usec + (float)$sec);
}
/**
 * 计算N次方根
 * @param  $num 
 * @param  $root 
 */
function croot($num, $root = 3){
	$root = intval($root);
	if (!$root) {
		return $num;
	} 
	return exp(log($num) / $root);
} 

function add_magic_quotes($array){
	foreach ((array) $array as $k => $v) {
		if (is_array($v)) {
			$array[$k] = add_magic_quotes($v);
		} else {
			$array[$k] = addslashes($v);
		} 
	} 
	return $array;
} 
// 字符串加转义
function add_slashes($string){
	if (!$GLOBALS['magic_quotes_gpc']) {
		if (is_array($string)) {
			foreach($string as $key => $val) {
				$string[$key] = add_slashes($val);
			} 
		} else {
			$string = addslashes($string);
		} 
	} 
	return $string;
} 


function setcookie_header($name,$value='',$maxage=0,$path='',$domain='',$secure=false,$HTTPOnly=false){ 
	if ( !empty($domain) ){ 
		if ( strtolower( substr($domain, 0, 4) ) == 'www.' ) $domain = substr($domain, 4); 
		if ( substr($domain, 0, 1) != '.' ) $domain = '.'.$domain; 
		if ( strpos($domain, ':') ) $domain = substr($domain, 0, strpos($domain, ':')); 
	}
	header('Set-Cookie: '.rawurlencode($name).'='.rawurlencode($value) 
						 .(empty($domain) ? '' : '; Domain='.$domain) 
						 .(empty($maxage) ? '' : '; Max-Age='.$maxage) 
						 .(empty($path) ? '' : '; Path='.$path) 
						 .(!$secure ? '' : '; Secure') 
						 .(!$HTTPOnly ? '' : '; HttpOnly').'; ', false); 
	return true; 
}

/**
 * hex to binary
 */
if (!function_exists('hex2bin')) {
	function hex2bin($hexdata)	{
		return pack('H*', $hexdata);
	}
}

if (!function_exists('gzdecode')) {
	function gzdecode($data){
		return gzinflate(substr($data,10,-8));
	}
}

/**
 * 二维数组按照指定的键值进行排序，
 * 
 * @param  $keys 根据键值
 * @param  $type 升序降序
 * @return array $array = array(
 * array('name'=>'手机','brand'=>'诺基亚','price'=>1050),
 * array('name'=>'手表','brand'=>'卡西欧','price'=>960)
 * );$out = array_sort($array,'price');
 */
function array_sort($arr, $keys, $type = 'asc'){
	$keysvalue = $new_array = array();
	foreach ($arr as $k => $v) {
		$keysvalue[$k] = $v[$keys];
	} 
	if ($type == 'asc') {
		asort($keysvalue);
	} else {
		arsort($keysvalue);
	} 
	reset($keysvalue);
	foreach ($keysvalue as $k => $v) {
		$new_array[$k] = $arr[$k];
	} 
	return $new_array;
} 
/**
 * 遍历数组，对每个元素调用 $callback，假如返回值不为假值，则直接返回该返回值；
 * 假如每次 $callback 都返回假值，最终返回 false
 * 
 * @param  $array 
 * @param  $callback 
 * @return mixed 
 */
function array_try($array, $callback){
	if (!$array || !$callback) {
		return false;
	} 
	$args = func_get_args();
	array_shift($args);
	array_shift($args);
	if (!$args) {
		$args = array();
	} 
	foreach($array as $v) {
		$params = $args;
		array_unshift($params, $v);
		$x = call_user_func_array($callback, $params);
		if ($x) {
			return $x;
		} 
	} 
	return false;
} 
// 求多个数组的并集
function array_union(){
	$argsCount = func_num_args();
	if ($argsCount < 2) {
		return false;
	} else if (2 === $argsCount) {
		list($arr1, $arr2) = func_get_args();

		while ((list($k, $v) = each($arr2))) {
			if (!in_array($v, $arr1)) $arr1[] = $v;
		} 
		return $arr1;
	} else { // 三个以上的数组合并
		$arg_list = func_get_args();
		$all = call_user_func_array('array_union', $arg_list);
		return array_union($arg_list[0], $all);
	} 
}
// 取出数组中第n项
function array_get_index($arr,$index){
   foreach($arr as $k=>$v){
	   $index--;
	   if($index<0) return array($k,$v);
   }
}

//set_error_handler('errorHandler',E_ERROR|E_PARSE|E_CORE_ERROR|E_COMPILE_ERROR|E_USER_ERROR);
register_shutdown_function('fatalErrorHandler');
function errorHandler($err_type,$errstr,$errfile,$errline){
	if (($err_type & E_WARNING) === 0 && ($err_type & E_NOTICE) === 0) {
		return false;
	}
	$arr = array(
		$err_type,
		$errstr,
		//" in [".$errfile.']',
		" in [".get_path_this(get_path_father($errfile)).'/'.get_path_this($errfile).']',
		'line:'.$errline,
	);
	$str = implode("  ",$arr)."<br/>";
	show_tips($str);
}

//捕获fatalError
function fatalErrorHandler(){
	$e = error_get_last();
	switch($e['type']){
		case E_ERROR:
		case E_PARSE:
		case E_CORE_ERROR:
		case E_COMPILE_ERROR:
		case E_USER_ERROR:
			errorHandler($e['type'],$e['message'],$e['file'],$e['line']);
			break;
		case E_NOTICE:break;
		default:break;
	}
}

function show_tips($message,$url= '', $time = 3){
	ob_get_clean();
	header('Content-Type: text/html; charset=utf-8');
	$goto = "content='$time;url=$url'";
	$info = "Auto jump after {$time}s, <a href='$url'>Click Here</a>";
	if ($url == "") {
		$goto = "";
		$info = "";
	} //是否自动跳转
	$message = filter_html(nl2br($message));
	echo<<<END
<html>
	<meta http-equiv='refresh' $goto charset="utf-8">
	<style>
	#msgbox{border: 1px solid #ddd;border: 1px solid #eee;padding: 20px 40px 40px 40px;border-radius: 5px;background: #f6f6f6;
	font-family: 'Helvetica Neue', "Microsoft Yahei", "微软雅黑", "STXihei", "WenQuanYi Micro Hei", sans-serif;
	color:888;margin:0 auto;margin-top:10%;width:400px;font-size:14px;color:#666;word-wrap: break-word;word-break: break-all;}
	#msgbox #info{margin-top: 10px;color:#aaa;font-size: 12px;}
	#msgbox #title{color: #888;border-bottom: 1px solid #ddd;padding: 10px 0;margin: 0 0 15px;font-size:18px;}
	#msgbox #info a{color: #64b8fb;text-decoration: none;padding: 2px 0px;border-bottom: 1px solid;}
	#msgbox a{text-decoration:none;color:#2196F3;}#msgbox a:hover{color:#f60;border-bottom:1px solid}
	#msgbox pre{word-break: break-all;word-wrap: break-word;white-space: pre-wrap;
		background: #002b36;padding:1em;color: #839496;border-left: 6px solid #8e8e8e;border-radius: 3px;}
	</style>
	<body>
	<div id="msgbox">
		<div id="title">警告 (Warning!)</div>
		<div id="message">$message</div>
		<div id="info">$info</div>
	</div>
	</body>
</html>
END;
	exit;
}
function get_caller_info() {
	$trace = debug_backtrace();
	foreach($trace as $i=>$call){
		if (isset($call['object']) && is_object($call['object'])) { 
			$call['object'] = "  ".get_class($call['object']); 
		}
		if (is_array($call['args'])) {
			foreach ($call['args'] AS &$arg) {
				if (is_object($arg)) {
					$arg = "  ".get_class($arg);
				}
			}
		}
		$trace_text[$i] = "#".$i." ".basename($call['file']).'【'.$call['line'].'】 ';
		$trace_text[$i].= (!empty($call['object'])?$call['object'].$call['type']:'');
		if($call['function']=='show_json'){
			$trace_text[$i].= $call['function'].'(args)';
		}else{
			$trace_text[$i].= $call['function'].'('.json_encode($call['args'],true).')';
		}		
	}
	unset($trace_text[0]);
	$trace_text = array_reverse($trace_text);
	return $trace_text;
}

/**
 * 打包返回AJAX请求的数据
 * @params {int} 返回状态码， 通常0表示正常
 * @params {array} 返回的数据集合
 */
function show_json($data,$code = true,$info=''){
	$use_time = mtime() - $GLOBALS['config']['app_startTime'];
	$result = array('code'=>$code,'use_time'=>$use_time,'data'=>$data);
	if(defined("GLOBAL_DEBUG") && GLOBAL_DEBUG==1){
		$result['call'] = get_caller_info();
	}
	if ($info != '') {
		$result['info'] = $info;
	}
	ob_end_clean();
	header("X-Powered-By: kodExplorer.");
	header('Content-Type: application/json; charset=utf-8');
	$json = json_encode($result);
	if($json === false){
		$json = __json_encode($result);
	}
	echo $json;
	exit;
}


function str2hex($string){
	$hex='';
	for ($i=0; $i < strlen($string); $i++){
		$hex .= dechex(ord($string[$i]));
	}
	return $hex;
}

function hex2str($hex){
	$string='';
	for ($i=0; $i < strlen($hex)-1; $i+=2){
		$string .= chr(hexdec($hex[$i].$hex[$i+1]));
	}
	return $string;
}

function __json_encode( $data ) {
	if( is_array($data) || is_object($data) ) { 
		$islist = is_array($data) && ( empty($data) || array_keys($data) === range(0,count($data)-1) ); 
		if( $islist ) { 
			$json = '[' . implode(',', array_map('__json_encode', $data) ) . ']'; 
		} else { 
			$items = Array(); 
			foreach( $data as $key => $value ) { 
				$items[] = __json_encode("$key") . ':' . __json_encode($value); 
			}
			$json = '{' . implode(',', $items) . '}'; 
		} 
	} else if( is_string($data) ) { 
		$string = addcslashes($data, "\\\"\n\r\t/" . chr(8) . chr(12));
		$json    = ''; 
		$len    = strlen($string); 
		# Convert UTF-8 to Hexadecimal Codepoints. 
		for( $i = 0; $i < $len; $i++ ) { 
			$char = $string[$i]; 
			$c1 = ord($char); 
			
			# Single byte; 
			if( $c1 <128 ) { 
				$json .= ($c1 > 31) ? $char : sprintf("\\u%04x", $c1); 
				continue; 
			}
			
			# Double byte 
			$c2 = ord($string[++$i]); 
			if ( ($c1 & 32) === 0 ) { 
				$json .= sprintf("\\u%04x", ($c1 - 192) * 64 + $c2 - 128); 
				continue; 
			}
			
			# Triple 
			$c3 = ord($string[++$i]); 
			if( ($c1 & 16) === 0 ) { 
				$json .= sprintf("\\u%04x", (($c1 - 224) <<12) + (($c2 - 128) << 6) + ($c3 - 128)); 
				continue; 
			}
				
			# Quadruple 
			$c4 = ord($string[++$i]); 
			if( ($c1 & 8 ) === 0 ) { 
				$u = (($c1 & 15) << 2) + (($c2>>4) & 3) - 1;
				$w1 = (54<<10) + ($u<<6) + (($c2 & 15) << 2) + (($c3>>4) & 3); 
				$w2 = (55<<10) + (($c3 & 15)<<6) + ($c4-128); 
				$json .= sprintf("\\u%04x\\u%04x", $w1, $w2); 
			}
		} 
		$json = '"'.addcslashes($data, "\"").'"';
	} else { 
		$json = strtolower(var_export( $data, true )); 
	} 
	return $json; 
}

/**
 * 简单模版转换，用于根据配置获取列表：
 * 参数：cute1:第一次切割的字符串，cute2第二次切割的字符串,
 * arraylist为待处理的字符串，$current 为标记当前项，$current_str为当项标记的替换。
 * $tpl为处理后填充到静态模版({0}代表切割后左值,{1}代表切割后右值,{this}代表当前项填充值)
 * 例子：
 * $arr="default=淡蓝(默认)=5|mac=mac海洋=6|mac1=mac1海洋=7";
 * $tpl="<li class='list {this}' theme='{0}'>{1}_{2}</li>\n";
 * echo getTplList('|','=',$arr,$tpl,'mac'),'<br/>';
 */
function getTplList($cute1, $cute2, $arraylist, $tpl,$current,$current_str=''){
	$list = explode($cute1, $arraylist);
	if ($current_str == '') $current_str ="this";
	$html = '';
	foreach ($list as $value) {
		$info = explode($cute2, $value);
		$arr_replace = array();	
		foreach ($info as $key => $value) {
			$arr_replace[$key]='{'.$key .'}';
		}
		if ($info[0] == $current) {
			$temp = str_replace($arr_replace, $info, $tpl);
			$temp = str_replace('{this}', $current_str, $temp);
		} else {
			$temp = str_replace($arr_replace, $info, $tpl);
			$temp = str_replace('{this}', '', $temp);
		}
		$html .= $temp;
	} 
	return $html;
}

/**
 * 去掉HTML代码中的HTML标签，返回纯文本
 * @param string $document 待处理的字符串
 * @return string 
 */
function html2txt($document){
	$search = array ("'<script[^>]*?>.*?</script>'si", // 去掉 javascript
		"'<[\/\!]*?[^<>]*?>'si", // 去掉 HTML 标记
		"'([\r\n])[\s]+'", // 去掉空白字符
		"'&(quot|#34);'i", // 替换 HTML 实体
		"'&(amp|#38);'i",
		"'&(lt|#60);'i",
		"'&(gt|#62);'i",
		"'&(nbsp|#160);'i",
		"'&(iexcl|#161);'i",
		"'&(cent|#162);'i",
		"'&(pound|#163);'i",
		"'&(copy|#169);'i",
		"'&#(\d+);'e"); // 作为 PHP 代码运行
	$replace = array ("",
		"",
		"",
		"\"",
		"&",
		"<",
		">",
		" ",
		chr(161),
		chr(162),
		chr(163),
		chr(169),
		"chr(\\1)");
	$text = preg_replace ($search, $replace, $document);
	return $text;
} 

// 获取内容第一条
function match($content, $preg){
	$preg = "/" . $preg . "/isU";
	preg_match($preg, $content, $result);
	return $result[1];
} 
// 获取内容,获取一个页面若干信息.结果在 1,2,3……中
function match_all($content, $preg){
	$preg = "/" . $preg . "/isU";
	preg_match_all($preg, $content, $result);
	return $result;
} 

/**
 * 获取指定长度的 utf8 字符串
 * 
 * @param string $string 
 * @param int $length 
 * @param string $dot 
 * @return string 
 */
function get_utf8_str($string, $length, $dot = '...'){
	if (strlen($string) <= $length) return $string;

	$strcut = '';
	$n = $tn = $noc = 0;

	while ($n < strlen($string)) {
		$t = ord($string[$n]);
		if ($t == 9 || $t == 10 || (32 <= $t && $t <= 126)) {
			$tn = 1;
			$n++;
			$noc++;
		} elseif (194 <= $t && $t <= 223) {
			$tn = 2;
			$n += 2;
			$noc += 2;
		} elseif (224 <= $t && $t <= 239) {
			$tn = 3;
			$n += 3;
			$noc += 2;
		} elseif (240 <= $t && $t <= 247) {
			$tn = 4;
			$n += 4;
			$noc += 2;
		} elseif (248 <= $t && $t <= 251) {
			$tn = 5;
			$n += 5;
			$noc += 2;
		} elseif ($t == 252 || $t == 253) {
			$tn = 6;
			$n += 6;
			$noc += 2;
		} else {
			$n++;
		} 
		if ($noc >= $length) break;
	} 
	if ($noc > $length) {
		$n -= $tn;
	} 
	if ($n < strlen($string)) {
		$strcut = substr($string, 0, $n);
		return $strcut . $dot;
	} else {
		return $string ;
	} 
} 

/**
 * 字符串截取，支持中文和其他编码
 * 
 * @param string $str 需要转换的字符串
 * @param string $start 开始位置
 * @param string $length 截取长度
 * @param string $charset 编码格式
 * @param string $suffix 截断显示字符
 * @return string 
 */
function msubstr($str, $start = 0, $length, $charset = "utf-8", $suffix = true){
	if (function_exists("mb_substr")) {
		$i_str_len = mb_strlen($str);
		$s_sub_str = mb_substr($str, $start, $length, $charset);
		if ($length >= $i_str_len) {
			return $s_sub_str;
		} 
		return $s_sub_str . '...';
	} elseif (function_exists('iconv_substr')) {
		return iconv_substr($str, $start, $length, $charset);
	} 
	$re['utf-8'] = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|[\xe0-\xef][\x80-\xbf]{2}|[\xf0-\xff][\x80-\xbf]{3}/";
	$re['gb2312'] = "/[\x01-\x7f]|[\xb0-\xf7][\xa0-\xfe]/";
	$re['gbk'] = "/[\x01-\x7f]|[\x81-\xfe][\x40-\xfe]/";
	$re['big5'] = "/[\x01-\x7f]|[\x81-\xfe]([\x40-\x7e]|\xa1-\xfe])/";
	preg_match_all($re[$charset], $str, $match);
	$slice = join("", array_slice($match[0], $start, $length));
	if ($suffix) return $slice . "…";
	return $slice;
} 

function web2wap(&$content){
	$search = array ("/<img[^>]+src=\"([^\">]+)\"[^>]+>/siU",
		"/<a[^>]+href=\"([^\">]+)\"[^>]*>(.*)<\/a>/siU",
		"'<br[^>]*>'si",
		"'<p>'si",
		"'</p>'si",
		"'<script[^>]*?>.*?</script>'si", // 去掉 javascript
		"'<[\/\!]*?[^<>]*?>'si", // 去掉 HTML 标记
		"'([\r\n])[\s]+'", // 去掉空白字符
		); // 作为 PHP 代码运行
	$replace = array ("#img#\\1#/img#",
		"#link#\\1#\\2#/link#",
		"[br]",
		"",
		"[br]",
		"",
		"",
		"",
		);
	$text = preg_replace ($search, $replace, $content);
	$text = str_replace("[br]", "<br/>", $text);
	$img_start = "<img src=\"" . $publish_url . "automini.php?src=";
	$img_end = "&amp;pixel=100*80&amp;cache=1&amp;cacheTime=1000&amp;miniType=png\" />";
	$text = preg_replace ("/#img#(.*)#\/img#/isUe", "'$img_start'.urlencode('\\1').'$img_end'", $text);
	$text = preg_replace ("/#link#(.*)#(.*)#\/link#/isU", "<a href=\"\\1\">\\2</a>", $text);
	while (preg_match("/<br\/><br\/>/siU", $text)) {
		$text = str_replace('<br/><br/>', '<br/>', $text);
	} 
	return $text;
} 

/**
 * 获取变量的名字
 * eg hello="123" 获取ss字符串
 */
function get_var_name(&$aVar){
	foreach($GLOBALS as $key => $var) {
		if ($aVar == $GLOBALS[$key] && $key != "argc") {
			return $key;
		} 
	} 
} 
// -----------------变量调试-------------------
/**
 * 格式化输出变量，或者对象
 * 
 * @param mixed $var 
 * @param boolean $exit 
 */
function pr($var, $exit = false){
	ob_start();
	$style = '<style>
	pre#debug{margin:10px;font-size:14px;color:#222;font-family:Consolas ;line-height:1.2em;background:#f6f6f6;border-left:5px solid #444;padding:5px;width:95%;word-break:break-all;}
	pre#debug b{font-weight:400;}
	#debug #debug_str{color:#E75B22;}
	#debug #debug_keywords{font-weight:800;color:00f;}
	#debug #debug_tag1{color:#22f;}
	#debug #debug_tag2{color:#f33;font-weight:800;}
	#debug #debug_var{color:#33f;}
	#debug #debug_var_str{color:#f00;}
	#debug #debug_set{color:#0C9CAE;}</style>';
	if (is_array($var)) {
		print_r($var);
	} else if (is_object($var)) {
		echo get_class($var) . " Object";
	} else if (is_resource($var)) {
		echo (string)$var;
	} else {
		echo var_dump($var);
	} 
	$out = ob_get_clean(); //缓冲输出给$out 变量	
	$out = preg_replace('/"(.*)"/', '<b id="debug_var_str">"' . '\\1' . '"</b>', $out); //高亮字符串变量
	$out = preg_replace('/=\>(.*)/', '=>' . '<b id="debug_str">' . '\\1' . '</b>', $out); //高亮=>后面的值
	$out = preg_replace('/\[(.*)\]/', '<b id="debug_tag1">[</b><b id="debug_var">' . '\\1' . '</b><b id="debug_tag1">]</b>', $out); //高亮变量
	$from = array('    ', '(', ')', '=>');
	$to = array('  ', '<b id="debug_tag2">(</i>', '<b id="debug_tag2">)</b>', '<b id="debug_set">=></b>');
	$out = str_replace($from, $to, $out);

	$keywords = array('Array', 'int', 'string', 'class', 'object', 'null'); //关键字高亮
	$keywords_to = $keywords;
	foreach($keywords as $key => $val) {
		$keywords_to[$key] = '<b id="debug_keywords">' . $val . '</b>';
	} 
	$out = str_replace($keywords, $keywords_to, $out);
	$out = str_replace("\n\n", "\n", $out);
	echo $style . '<pre id="debug"><b id="debug_keywords">' . get_var_name($var) . '</b> = ' . $out . '</pre>';
	if ($exit) exit; //为真则退出
} 

/**
 * 调试输出变量，对象的值。
 * 参数任意个(任意类型的变量)
 * 
 * @return echo 
 */
function debug_out(){
	$avg_num = func_num_args();
	$avg_list = func_get_args();
	ob_start();
	for($i = 0; $i < $avg_num; $i++) {
		pr($avg_list[$i]);
	} 
	$out = ob_get_clean();
	echo $out;
	exit;
}

/**
 * 取$from~$to范围内的随机数
 * 
 * @param  $from 下限
 * @param  $to 上限
 * @return unknown_type 
 */
function rand_from_to($from, $to){
	$size = $to - $from; //数值区间
	$max = 30000; //最大
	if ($size < $max) {
		return $from + mt_rand(0, $size);
	} else {
		if ($size % $max) {
			return $from + random_from_to(0, $size / $max) * $max + mt_rand(0, $size % $max);
		} else {
			return $from + random_from_to(0, $size / $max) * $max + mt_rand(0, $max);
		} 
	} 
} 

/**
 * 产生随机字串，可用来自动生成密码 默认长度6位 字母和数字混合
 * 
 * @param string $len 长度
 * @param string $type 字串类型：0 字母 1 数字 2 大写字母 3 小写字母  4 中文  
 * 其他为数字字母混合(去掉了 容易混淆的字符oOLl和数字01，)
 * @param string $addChars 额外字符
 * @return string 
 */
function rand_string($len = 4, $type='check_code'){
	$str = '';
	switch ($type) {
		case 1://数字
			$chars = str_repeat('0123456789', 3);
			break;
		case 2://大写字母
			$chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
			break;
		case 3://小写字母
			$chars = 'abcdefghijklmnopqrstuvwxyz';
			break;
		case 4://大小写中英文
			$chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
			break;
		default: 
			// 默认去掉了容易混淆的字符oOLl和数字01，要添加请使用addChars参数
			$chars = 'ABCDEFGHIJKMNPQRSTUVWXYZabcdefghijkmnpqrstuvwxyz23456789';
			break;
	}
	if ($len > 10) { // 位数过长重复字符串一定次数
		$chars = $type == 1 ? str_repeat($chars, $len) : str_repeat($chars, 5);
	} 
	if ($type != 4) {
		$chars = str_shuffle($chars);
		$str = substr($chars, 0, $len);
	} else {
		// 中文随机字
		for($i = 0; $i < $len; $i ++) {
			$str .= msubstr($chars, floor(mt_rand(0, mb_strlen($chars, 'utf-8') - 1)), 1);
		} 
	} 
	return $str;
} 

/**
 * 生成自动密码
 */
function make_password(){
	$temp = '0123456789abcdefghijklmnopqrstuvwxyz'.
			'ABCDEFGHIJKMNPQRSTUVWXYZ~!@#$^*)_+}{}[]|":;,.'.time();
	for($i=0;$i<10;$i++){
		$temp = str_shuffle($temp.substr($temp,-5));
	}
	return md5($temp);
}


/**
 * php DES解密函数
 * 
 * @param string $key 密钥
 * @param string $encrypted 加密字符串
 * @return string 
 */
function des_decode($key, $encrypted){
	$encrypted = base64_decode($encrypted);
	$td = mcrypt_module_open(MCRYPT_DES, '', MCRYPT_MODE_CBC, ''); //使用MCRYPT_DES算法,cbc模式
	$iv = mcrypt_create_iv(mcrypt_enc_get_iv_size($td), MCRYPT_RAND);
	$ks = mcrypt_enc_get_key_size($td);

	mcrypt_generic_init($td, $key, $key); //初始处理
	$decrypted = mdecrypt_generic($td, $encrypted); //解密
	
	mcrypt_generic_deinit($td); //结束
	mcrypt_module_close($td);
	return pkcs5_unpad($decrypted);
} 
/**
 * php DES加密函数
 * 
 * @param string $key 密钥
 * @param string $text 字符串
 * @return string 
 */
function des_encode($key, $text){
	$y = pkcs5_pad($text);
	$td = mcrypt_module_open(MCRYPT_DES, '', MCRYPT_MODE_CBC, ''); //使用MCRYPT_DES算法,cbc模式
	$ks = mcrypt_enc_get_key_size($td);

	mcrypt_generic_init($td, $key, $key); //初始处理
	$encrypted = mcrypt_generic($td, $y); //解密
	mcrypt_generic_deinit($td); //结束
	mcrypt_module_close($td);
	return base64_encode($encrypted);
} 
function pkcs5_unpad($text){
	$pad = ord($text{strlen($text)-1});
	if ($pad > strlen($text)) return $text;
	if (strspn($text, chr($pad), strlen($text) - $pad) != $pad) return $text;
	return substr($text, 0, -1 * $pad);
} 
function pkcs5_pad($text, $block = 8){
	$pad = $block - (strlen($text) % $block);
	return $text . str_repeat(chr($pad), $pad);
} 
