<?php
/*
* @link http://www.kalcaddle.com/
* @author warlee | e-mail:kalcaddle@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kalcaddle.com/tools/licenses/license.txt
*/


/**
 * client ip address
 * 
 * @param boolean $s_type ip类型[ip|long]
 * @return string $ip
 */
function get_client_ip($b_ip = true){
	$arr_ip_header = array( 
		"HTTP_CLIENT_IP",
		"HTTP_X_FORWARDED_FOR",
		"REMOTE_ADDR",
		"HTTP_CDN_SRC_IP",
		"HTTP_PROXY_CLIENT_IP",
		"HTTP_WL_PROXY_CLIENT_IP"
	);
	$client_ip = 'unknown';
	foreach ($arr_ip_header as $key) {
		if (!empty($_SERVER[$key]) && strtolower($_SERVER[$key]) != "unknown") {
			$client_ip = $_SERVER[$key];
			break;
		}
	}
	if ($pos = strpos($client_ip,',')){
		$client_ip = substr($client_ip,$pos+1);
	}
	return $client_ip;
}

function get_url_link($url){
	if(!$url) return "";
	$res = parse_url($url);
	$port = (empty($res["port"]) || $res["port"] == '80')?'':':'.$res["port"];
	return $res['scheme']."://".$res["host"].$port.$res['path'];
}
function get_url_domain($url){
	if(!$url) return "";
	$res = parse_url($url);
	return $res["host"];
}

function get_host() {
	$protocol = (!empty($_SERVER['HTTPS'])
				 && $_SERVER['HTTPS'] !== 'off'
				 || $_SERVER['SERVER_PORT'] === 443) ? 'https://' : 'http://';

	if( isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
		strlen($_SERVER['HTTP_X_FORWARDED_PROTO']) > 0 ){
		$protocol = $_SERVER['HTTP_X_FORWARDED_PROTO'].'://';
	}
	$url_host = $_SERVER['SERVER_NAME'].($_SERVER['SERVER_PORT']=='80' ? '' : ':'.$_SERVER['SERVER_PORT']);
	$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : $url_host;
	$host = isset($_SERVER['HTTP_X_FORWARDED_HOST']) ? $_SERVER['HTTP_X_FORWARDED_HOST'] : $host;//proxy
	return $protocol.$host;
}
// current request url
function this_url(){
	$url = get_host().$_SERVER['REQUEST_URI'];
	return $url;
}
function reset_path($str){
	return str_replace('\\','/',$str);
}
function get_webroot($app_path){
	$web_root = str_replace(reset_path($_SERVER['SCRIPT_NAME']),'',$app_path.'index.php').'/';
	if (substr($web_root,-10) == 'index.php/') {//解决部分主机不兼容问题
		$web_root = reset_path($_SERVER['DOCUMENT_ROOT']).'/';
	}
	return $web_root;
}

function is_wap(){   
	if(!isset($_SERVER['HTTP_USER_AGENT'])){
		return false;
	} 
	if(preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|iphone|ipad|ipod|android|xoom)/i', 
		strtolower($_SERVER['HTTP_USER_AGENT']))){
		return true;
	}
	if((isset($_SERVER['HTTP_ACCEPT'])) && 
		(strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml') !== false)){
		return true;
	}
	return false;
}

function get_headers_curl($url,$timeout=30,$depth=0,&$headers=array()){
	if(!function_exists('curl_init')){
		return false;
	}
	if ($depth >= 10) return false;
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_URL,$url);
	curl_setopt($ch, CURLOPT_REFERER,get_url_link($url));
	curl_setopt($ch, CURLOPT_HEADER,true); 
	curl_setopt($ch, CURLOPT_NOBODY,true); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
	curl_setopt($ch, CURLOPT_TIMEOUT,$timeout); 
	$res = curl_exec($ch);
	$res = explode("\r\n", $res);

	$location = false;
	foreach ($res as $line) {
		list($key, $val) = explode(": ", $line, 2);
		$the_key = trim($key);
		if($the_key == 'Location' || $the_key == 'location'){
			$the_key = 'Location';
			$location = trim($val);
		}
		if( strlen($the_key) == 0 &&
			strlen(trim($val)) == 0  ){
			continue;
		}
		if( substr($the_key,0,4) == 'HTTP' &&
			strlen(trim($val)) == 0  ){
			$headers[] = $the_key;
			continue;
		}

		if(!isset($headers[$the_key])){
			$headers[$the_key] = trim($val);
		}else{
			if(is_string($headers[$the_key])){
				$temp = $headers[$the_key];
				$headers[$the_key] = array($temp);
			}
			$headers[$the_key][] = trim($val);
		}
	}
	if($location !== false){
		$depth++;
		get_headers_curl($location,$timeout,$depth,$headers);
	}
	return count($headers)==0?false:$headers;
} 

// url header data
function url_header($url){
	$name = '';$length=0;
	$header = get_headers_curl($url);//curl优先
	if(is_array($header)){
		$header['ACTION_BY'] = 'get_headers_curl';
	}else{
		$header = @get_headers($url,true);
	}

	if (!$header) return false; 
	if(isset($header['Content-Length'])){
		if(is_array($header['Content-Length'])){
			$length = array_pop($header['Content-Length']);
		}else{
			$length = $header['Content-Length'];
		}
	}

	//301跳转
	$file_url = $url;
	$location = 'Location';
	if(!isset($header['Location']) && 
		isset($header['location'])){
		$location = 'location';
	}
	if(isset($header[$location])){
		if(is_string($header[$location])){
			$file_url = $header[$location];
		}else if(is_array($header[$location])  && count($header[$location])>0 ){
			$file_url = $header[$location][count($header[$location])-1];
		}
	}

	if(isset($header['Content-Disposition'])){
		if(is_array($header['Content-Disposition'])){
			$dis = array_pop($header['Content-Disposition']);
		}else{
			$dis = $header['Content-Disposition'];
		}
		$i = strpos($dis,"filename=");
		if($i!== false){
			$name = substr($dis,$i+9);
			$j = strpos($name,"; ");//多个参数，
			if($j!== false){
				$name = substr($name,0,$j);
			}
			$name = trim($name,'"');
		}
	}	
	if(isset($header['X-OutFileName'])){
		$name = $header['X-OutFileName'];
	}
	if(!$name){
		$name = get_path_this($file_url);
		if (stripos($name,'?')) $name = substr($name,0,stripos($name,'?'));
		if (!$name) $name = 'index.html';

		$first_name = get_path_this($url);
		if( get_path_ext($first_name) == get_path_ext($name) ){
			$name = $first_name;
		}
	}
	$name = rawurldecode($name);
	$name = str_replace(array('/','\\'),'-',$name);//safe;
	$support_range = isset($header["Accept-Ranges"])?true:false;
	$result = array(
		'url' 		=> $file_url,
		'length' 	=> $length,
		'name' 		=> $name,
		'support_range' =>$support_range && ($length!=0)
	);
	if(!function_exists('curl_init')){
		$result['support_range'] = false;
	}
	//debug_out($url,$header,$result);
	return $result;
}


// check url if can use
function check_url($url){
	$array = get_headers($url,true);
	$error = array('/404/','/403/','/500/');
	foreach ($error as $value) {
		if (preg_match($value, $array[0])) {
			return false;
		}
	}
	return true;
} 

/**
 * 获取网络url文件内容，加入ua，以解决防采集的站
 */
function curl_get_contents($url,$timeout=4){
	$ch = curl_init();
	$user_agent = "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0; WOW64; Trident/4.0; SLCC1)";
	curl_setopt ($ch, CURLOPT_URL, $url);
	curl_setopt ($ch, CURLOPT_HEADER, 0);
	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt ($ch, CURLOPT_USERAGENT, $user_agent);
	curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	$file_contents = curl_exec($ch);
	curl_close($ch);
	return $file_contents;
}

// refer URL
function refer_url(){
	return isset($_SERVER["HTTP_REFERER"]) ? $_SERVER["HTTP_REFERER"] : '';
} 

function select_var($array){
	if (!is_array($array)) return -1;
	ksort($array);
	$chosen = -1;
	foreach ($array as $k => $v) {
		if (isset($v)) {
			$chosen = $v;
			break;
		} 
	} 
	return $chosen;
}

/**
 * 解析url获得url参数
 * @param $query
 * @return array array
 */
function parse_url_query($url){
	$arr = parse_url($url);
	$queryParts = explode('&',$arr['query']);
	$params = array();
	foreach ($queryParts as $param) {
		$item = explode('=', $param);
		$params[$item[0]] = $item[1];
	}
	return $params;
}

function stripslashes_deep($value){ 
	$value = is_array($value) ? array_map('stripslashes_deep', $value) : (isset($value) ? stripslashes($value) : null); 
	return $value; 
}

function parse_url_route(){
	$param = str_replace($_SERVER['SCRIPT_NAME'],"",$_SERVER['PHP_SELF']);
	if($param && substr($param,0,1) == '/'){
		$arr = explode('&',$param);
		$arr[0] = ltrim($arr[0],'/');
		foreach ($arr as  $cell) {
			$cell = explode('=',$cell);
			if(is_array($cell)){
				if(!isset($cell[1])){
					$cell[1] = '';
				}
				$_GET[$cell[0]] = $cell[1];
				$_REQUEST[$cell[0]] = $cell[1];
			}
		}
	}
}


/**
 * GET/POST数据统一入口
 * 将GET和POST的数据进行过滤，去掉非法字符以及hacker code，返回一个数组
 * 注意如果GET和POST有相同的Key，POST优先
 * 
 * @return array $_GET和$_POST数据过滤处理后的值
 */
function parse_incoming(){
	parse_url_route();
	global $_GET, $_POST,$_COOKIE;

	$_COOKIE = stripslashes_deep($_COOKIE);
	$_GET	 = stripslashes_deep($_GET);
	$_POST	 = stripslashes_deep($_POST);
	$return = array();
	$return = array_merge($_GET,$_POST);
	$remote = array_get_index($return,0);
	$remote = explode('/',trim($remote[0],'/'));
	$return['URLremote'] = $remote;
	return $return;
} 

function url2absolute($index_url, $preg_url){
	if (preg_match('/[a-zA-Z]*\:\/\//', $preg_url)) return $preg_url;
	preg_match('/([a-zA-Z]*\:\/\/.*)\//', $index_url, $match);
	$index_url_temp = $match[1];

	foreach(explode('/', $preg_url) as $key => $var) {
		if ($key == 0 && $var == '') {
			preg_match('/([a-zA-Z]*\:\/\/[^\/]*)\//', $index_url, $match);
			$index_url_temp = $match[1] . $preg_url;
			break;
		} 
		if ($var == '..') {
			preg_match('/([a-zA-Z]*\:\/\/.*)\//', $index_url_temp, $match);
			$index_url_temp = $match[1];
		} elseif ($var != '.') $index_url_temp .= '/' . $var;
	} 
	return $index_url_temp;
}

// 输出js
function exec_js($js){
	echo "<script language='JavaScript'>\n" . $js . "</script>\n";
} 
// 禁止缓存
function no_cache(){
	header("Pragma:no-cache\r\n");
	header("Cache-Control:no-cache\r\n");
	header("Expires:0\r\n");
} 
// 生成javascript转向
function go_url($url, $msg = ''){
	header("Content-type: text/html; charset=utf-8\r\n");
	echo "<script type='text/javascript'>\n";
	echo "window.location.href='$url';";
	echo "</script>\n";
	exit;
} 

function send_http_status($i_status, $s_message = ''){
	$a_status = array(
		// Informational 1xx
		100 => 'Continue',
		101 => 'Switching Protocols', 
		// Success 2xx
		200 => 'OK',
		201 => 'Created',
		202 => 'Accepted',
		203 => 'Non-Authoritative Information',
		204 => 'No Content',
		205 => 'Reset Content',
		206 => 'Partial Content', 
		// Redirection 3xx
		300 => 'Multiple Choices',
		301 => 'Moved Permanently',
		302 => 'Found', // 1.1
		303 => 'See Other',
		304 => 'Not Modified',
		305 => 'Use Proxy', // 306 is deprecated but reserved
		307 => 'Temporary Redirect', 
		// Client Error 4xx
		400 => 'Bad Request',
		401 => 'Unauthorized',
		402 => 'Payment Required',
		403 => 'Forbidden',
		404 => 'Not Found',
		405 => 'Method Not Allowed',
		406 => 'Not Acceptable',
		407 => 'Proxy Authentication Required',
		408 => 'Request Timeout',
		409 => 'Conflict',
		410 => 'Gone',
		411 => 'Length Required',
		412 => 'Precondition Failed',
		413 => 'Request Entity Too Large',
		414 => 'Request-URI Too Long',
		415 => 'Unsupported Media Type',
		416 => 'Requested Range Not Satisfiable',
		417 => 'Expectation Failed', 
		// Server Error 5xx
		500 => 'Internal Server Error',
		501 => 'Not Implemented',
		502 => 'Bad Gateway',
		503 => 'Service Unavailable',
		504 => 'Gateway Timeout',
		505 => 'HTTP Version Not Supported',
		509 => 'Bandwidth Limit Exceeded'
		);

	if (array_key_exists($i_status, $a_status)) {
		header('HTTP/1.1 ' . $i_status . ' ' . $a_status[$i_status]);
	} 
	if ($s_message) {
		echo $s_message;
		exit();
	} 
} 

//是否是windows
function client_is_windows(){
	static $is_windows;
	if(!is_array($is_windows)){
		$is_windows = array(0);
		$os = get_os();
		if(strstr($os,'Windows')){
			$is_windows = array(1);
		}	
	}	
	return $is_windows[0];
}

// 获取操作系统信息 TODO
function get_os (){
	$agent = $_SERVER['HTTP_USER_AGENT'];
	$preg_find = array(
		"Windows 95"	=>array('win','95'),
		"Windows ME"	=>array('win 9x','4.90'),
		"Windows 98"	=>array('win','98'),
		"Windows 2000"	=>array('win','nt 5.0',),
		"Windows XP"	=>array('win','nt 5.1'),
		"Windows Vista"	=>array('win','nt 6.0'),
		"Windows 7"		=>array('win','nt 6.1'),
		"Windows 32"	=>array('win','32'),
		"Windows NT"	=>array('win','nt'),
		"Mac OS"		=>array('Mac OS'),
		"Linux"			=>array('linux'),
		"Unix"			=>array('unix'),
		"SunOS"			=>array('sun','os'),
		"IBM OS/2"		=>array('ibm','os'),
		"Macintosh"		=>array('Mac','PC'),
		"PowerPC"		=>array('PowerPC'),
		"AIX"			=>array('AIX'),
		"HPUX"			=>array('HPUX'),
		"NetBSD"		=>array('NetBSD'),
		"BSD"			=>array('BSD'),
		"OSF1"			=>array('OSF1'),
		"IRIX"			=>array('IRIX'),
		"FreeBSD"		=>array('FreeBSD'),
	);

	$os='';
	foreach ($preg_find as $key => $value) {
		if(count($value)==1 && stripos($agent,$value[0])){
			$os=$key;break;
		}else if(count($value)==2 
				 && stripos($agent,$value[0])
				 && stripos($agent,$value[1])
				 ){
			$os=$key;break;
		}
	}
	if ($os=='') {$os = "Unknown"; }
	return $os;
}

//根据扩展名获取mime
function get_file_mime($ext){
	$mimetypes = array(
		"323" => "text/h323",
		"acx" => "application/internet-property-stream",
		"ai" => "application/postscript",
		"aif" => "audio/x-aiff",
		"aifc" => "audio/x-aiff",
		"aiff" => "audio/x-aiff",
		"asf" => "video/x-ms-asf",
		"asr" => "video/x-ms-asf",
		"asx" => "video/x-ms-asf",
		"au" => "audio/basic",
		"avi" => "video/x-msvideo",
		"axs" => "application/olescript",
		"bas" => "text/plain",
		"bcpio" => "application/x-bcpio",
		"bin" => "application/octet-stream",
		"bmp" => "image/bmp",
		"c" => "text/plain",
		"cat" => "application/vnd.ms-pkiseccat",
		"cdf" => "application/x-cdf",
		"cer" => "application/x-x509-ca-cert",
		"class" => "application/octet-stream",
		"clp" => "application/x-msclip",
		"cmx" => "image/x-cmx",
		"cod" => "image/cis-cod",
		"cpio" => "application/x-cpio",
		"crd" => "application/x-mscardfile",
		"crl" => "application/pkix-crl",
		"crt" => "application/x-x509-ca-cert",
		"csh" => "application/x-csh",
		"css" => "text/css",
		"dcr" => "application/x-director",
		"der" => "application/x-x509-ca-cert",
		"dir" => "application/x-director",
		"dll" => "application/x-msdownload",
		"dms" => "application/octet-stream",
		"doc" => "application/msword",
		"docx" => "application/msword",
		"dot" => "application/msword",
		"dvi" => "application/x-dvi",
		"dxr" => "application/x-director",
		"eps" => "application/postscript",
		"etx" => "text/x-setext",
		"evy" => "application/envoy",
		"exe" => "application/octet-stream",
		"fif" => "application/fractals",
		"flr" => "x-world/x-vrml",
		"flv" => "video/x-flv",
		"f4v" => "application/octet-stream",
		"gif" => "image/gif",
		"gtar" => "application/x-gtar",
		"gz" => "application/x-gzip",
		"h" => "text/plain",
		"hdf" => "application/x-hdf",
		"hlp" => "application/winhlp",
		"hqx" => "application/mac-binhex40",
		"hta" => "application/hta",
		"htc" => "text/x-component",
		"htm" => "text/html",
		"html" => "text/html",
		"htt" => "text/webviewhtml",
		"ico" => "image/x-icon",
		"ief" => "image/ief",
		"iii" => "application/x-iphone",
		"ins" => "application/x-internet-signup",
		"isp" => "application/x-internet-signup",
		"jfif" => "image/pipeg",
		"jpe" => "image/jpeg",
		"jpeg" => "image/jpeg",
		"jpg" => "image/jpeg",
		"js" => "application/javascript",
		"json" => "application/json",
		"latex" => "application/x-latex",
		"lha" => "application/octet-stream",
		"lsf" => "video/x-la-asf",
		"lsx" => "video/x-la-asf",
		"lzh" => "application/octet-stream",
		"m13" => "application/x-msmediaview",
		"m14" => "application/x-msmediaview",
		"m3u" => "audio/x-mpegurl",
		'm4a' => "audio/mp4",
		'm4v' => "audio/mp4",
		"man" => "application/x-troff-man",
		"mdb" => "application/x-msaccess",
		"me" => "application/x-troff-me",
		"mht" => "message/rfc822",
		"mhtml" => "message/rfc822",
		"mid" => "audio/mid",
		"mny" => "application/x-msmoney",
		"mov" => "video/quicktime",
		"movie" => "video/x-sgi-movie",
		"mp2" => "video/mpeg",
		"mp3" => "audio/mpeg",
		"mp4" => "video/mp4",
		"mp4v" => "video/mp4",
		"mpa" => "video/mpeg",
		"mpe" => "video/mpeg",
		"mpeg" => "video/mpeg",
		"mpg" => "video/mpeg",
		"mpp" => "application/vnd.ms-project",
		"mpv2" => "video/mpeg",
		"ms" => "application/x-troff-ms",
		"mvb" => "application/x-msmediaview",
		"nws" => "message/rfc822",
		"oda" => "application/oda",
		"ogg" => "audio/ogg",
		"oga" => "audio/ogg",
		"ogv" => "audio/ogg",
		"p10" => "application/pkcs10",
		"p12" => "application/x-pkcs12",
		"p7b" => "application/x-pkcs7-certificates",
		"p7c" => "application/x-pkcs7-mime",
		"p7m" => "application/x-pkcs7-mime",
		"p7r" => "application/x-pkcs7-certreqresp",
		"p7s" => "application/x-pkcs7-signature",
		"pbm" => "image/x-portable-bitmap",
		"pdf" => "application/pdf",
		"pfx" => "application/x-pkcs12",
		"pgm" => "image/x-portable-graymap",
		"pko" => "application/ynd.ms-pkipko",
		"pma" => "application/x-perfmon",
		"pmc" => "application/x-perfmon",
		"pml" => "application/x-perfmon",
		"pmr" => "application/x-perfmon",
		"pmw" => "application/x-perfmon",
		"png" => "image/png",
		"pnm" => "image/x-portable-anymap",
		"pot," => "application/vnd.ms-powerpoint",
		"ppm" => "image/x-portable-pixmap",
		"pps" => "application/vnd.ms-powerpoint",
		"ppt" => "application/vnd.ms-powerpoint",
		"pptx" => "application/vnd.ms-powerpoint",
		"prf" => "application/pics-rules",
		"ps" => "application/postscript",
		"pub" => "application/x-mspublisher",
		"qt" => "video/quicktime",
		"ra" => "audio/x-pn-realaudio",
		"ram" => "audio/x-pn-realaudio",
		"ras" => "image/x-cmu-raster",
		"rgb" => "image/x-rgb",
		"rmi audio/mid" => "http://www.dreamdu.com",
		"roff" => "application/x-troff",
		"rtf" => "application/rtf",
		"rtx" => "text/richtext",
		"scd" => "application/x-msschedule",
		"sct" => "text/scriptlet",
		"setpay" => "application/set-payment-initiation",
		"setreg" => "application/set-registration-initiation",
		"sh" => "application/x-sh",
		"shar" => "application/x-shar",
		"sit" => "application/x-stuffit",
		"snd" => "audio/basic",
		"spc" => "application/x-pkcs7-certificates",
		"spl" => "application/futuresplash",
		"src" => "application/x-wais-source",
		"sst" => "application/vnd.ms-pkicertstore",
		"stl" => "application/vnd.ms-pkistl",
		"stm" => "text/html",
		"svg" => "image/svg+xml",
		"sv4cpio" => "application/x-sv4cpio",
		"sv4crc" => "application/x-sv4crc",
		"swf" => "application/x-shockwave-flash",
		"t" => "application/x-troff",
		"tar" => "application/x-tar",
		"tcl" => "application/x-tcl",
		"tex" => "application/x-tex",
		"texi" => "application/x-texinfo",
		"texinfo" => "application/x-texinfo",
		"tgz" => "application/x-compressed",
		"tif" => "image/tiff",
		"tiff" => "image/tiff",
		"tr" => "application/x-troff",
		"trm" => "application/x-msterminal",
		"tsv" => "text/tab-separated-values",
		"txt" => "text/plain",
		"uls" => "text/iuls",
		"ustar" => "application/x-ustar",
		"vcf" => "text/x-vcard",
		"vrml" => "x-world/x-vrml",
		"wav" => "audio/wav",
		"wcm" => "application/vnd.ms-works",
		"wdb" => "application/vnd.ms-works",
		"webm" => "video/webm",
		"webmv" => "video/webm",
		"wks" => "application/vnd.ms-works",
		"wmf" => "application/x-msmetafile",
		"wps" => "application/vnd.ms-works",
		"wri" => "application/x-mswrite",
		"wrl" => "x-world/x-vrml",
		"wrz" => "x-world/x-vrml",
		"xaf" => "x-world/x-vrml",
		"xbm" => "image/x-xbitmap",
		"xla" => "application/vnd.ms-excel",
		"xlc" => "application/vnd.ms-excel",
		"xlm" => "application/vnd.ms-excel",
		"xls" => "application/vnd.ms-excel",
		"xlsx" => "application/vnd.ms-excel",
		"xlt" => "application/vnd.ms-excel",
		"xlw" => "application/vnd.ms-excel",
		"xof" => "x-world/x-vrml",
		"xpm" => "image/x-xpixmap",
		"xwd" => "image/x-xwindowdump",
		"z" => "application/x-compress",
		"zip" => "application/zip"
	);
	
	//代码 或文本浏览器输出
	$text = array('oexe','inc','inf','csv','log','asc','tsv');
	$code = array("abap","abc","as","ada","adb","htgroups","htpasswd","conf","htaccess","htgroups",
				"htpasswd","asciidoc","asm","ahk","bat","cmd","c9search_results","cpp","c","cc","cxx","h","hh","hpp",
				"cirru","cr","clj","cljs","CBL","COB","coffee","cf","cson","Cakefile","cfm","cs","css","curly","d",
				"di","dart","diff","patch","Dockerfile","dot","dummy","dummy","e","ejs","ex","exs","elm","erl",
				"hrl","frt","fs","ldr","ftl","gcode","feature",".gitignore","glsl","frag","vert","go","groovy",
				"haml","hbs","handlebars","tpl","mustache","hs","hx","html","htm","xhtml","erb","rhtml","ini",
				"cfg","prefs","io","jack","jade","java","js","jsm","json","jq","jsp","jsx","jl","tex","latex",
				"ltx","bib","lean","hlean","less","liquid","lisp","ls","logic","lql","lsl","lua","lp","lucene",
				"Makefile","GNUmakefile","makefile","OCamlMakefile","make","md","markdown","mask","matlab",
				"mel","mc","mush","mysql","nix","m","mm","ml","mli","pas","p","pl","pm","pgsql","php","phtml",
				"ps1","praat","praatscript","psc","proc","plg","prolog","properties","proto","py","r","Rd",
				"Rhtml","rb","ru","gemspec","rake","Guardfile","Rakefile","Gemfile","rs","sass","scad","scala",
				"scm","rkt","scss","sh","bash",".bashrc","sjs","smarty","tpl","snippets","soy","space","sql",
				"styl","stylus","svg","tcl","tex","txt","textile","toml","twig","ts","typescript","str","vala",
				"vbs","vb","vm","v","vh","sv","svh","vhd","vhdl","xml","rdf","rss","log",
				"wsdl","xslt","atom","mathml","mml","xul","xbl","xaml","xq","yaml","yml","htm",
				"xib","storyboard","plist","csproj");
	if (array_key_exists($ext,$mimetypes)){
		return $mimetypes[$ext];
	}else{
		if(in_array($ext,$text) || in_array($ext,$code)){
			return "text/plain";
		}
		return 'application/octet-stream';
	}
}
