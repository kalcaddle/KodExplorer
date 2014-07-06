<?php
/*
* @link http://www.kalcaddle.com/
* @author warlee | e-mail:kalcaddle@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kalcaddle.com/tools/licenses/license.txt
*/


/**
 * 获取客户端IP地址
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


// url头部数据
function url_header($url){
	$name = '';$length=0;
	$header = @get_headers($url,true);
	if (!$header) return false;

	if(isset($header['Content-Length'])){
		if(is_array($header['Content-Length'])){
			$length = array_pop($header['Content-Length']);
		}else{
			$length = $header['Content-Length'];
		}
	}
	if(isset($header['Content-Disposition'])){
		if(is_array($header['Content-Disposition'])){
			$dis = array_pop($header['Content-Disposition']);
		}else{
			$dis = $header['Content-Disposition'];
		}
		$i = strpos($dis,"filename=");
		if($i!= false){
			$name = substr($dis,$i+9);
			$name = trim($name,'"');
		}
	}
	if(!$name){
	    $name = get_path_this($url);
	    if (stripos($name,'?')) $name = substr($name,0,stripos($name,'?'));
	    if (!$name) $name = 'index.html';
	}
	// $header['name'] = $name;
	// return $header;
	return array('length'=>$length,'name'=>$name);
} 


// url检查
function check_url($url){
	$array = get_headers($url,true);
	if (preg_match('/404/', $array[0])) {
		return false;
	} elseif (preg_match('/403/', $array[0])) {
		return false;
	} else {
		return true;
	} 
} 

/**
 * 获取网络url文件内容，加入ua，以解决防采集的站
 */
function curl_get_contents($url){
	$ch = curl_init();
	$timeout = 4;
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

// 返回refer URL 地址
function refer_url(){
	return isset($_SERVER["HTTP_REFERER"]) ? $_SERVER["HTTP_REFERER"] : '';
} 
// 返回当前页面的 URL 地址
function this_url(){
	$s_url = isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] ? 'https' : 'http';
	$s_url .= '://';
	return $s_url . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
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


function stripslashes_deep($value){ 
	$value = is_array($value) ? array_map('stripslashes_deep', $value) : (isset($value) ? stripslashes($value) : null); 
	return $value; 
}

/**
 * GET/POST数据统一入口
 * 将GET和POST的数据进行过滤，去掉非法字符以及hacker code，返回一个数组
 * 注意如果GET和POST有相同的Key，POST优先
 * 
 * @return array $_GET和$_POST数据过滤处理后的值
 */
function parse_incoming(){
	global $_GET, $_POST,$_COOKIE;

	$_COOKIE = stripslashes_deep($_COOKIE);
	$_GET	 = stripslashes_deep($_GET);
	$_POST	 = stripslashes_deep($_POST);
	$return = array();
	$return = array_merge($_GET,$_POST);
	$remote = array_get($return,0);
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

// 将字符串转换成URL的编码，gbk的和utf8的 $to="gbk" 或"utf8"
function urlcode($str, $to){
	if ($to == "gbk") {
		$result = RawUrlEncode($str); //gbk字符(主要是中文)转换为url %BA%EC形式
	} else {
		$key = mb_convert_encoding($str, "utf-8", "gbk"); //对于百度utf8中文url
		$result = urlencode($key);
	} 
	return $result;
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
	echo "window.location.href='$direction';";
	echo "</script>\n";
	exit;
} 

/**
 * 消息框。eg
 * msg("falied","/",10);
 * msg("ok");
 */
function show_msg($message, $url = '#', $time = 3, $isgo = 1)
{
	$goto = "content='$time;url=$url'";
	if ($isgo != "1") {
		$goto = "";
	} //是否自动跳转
	echo<<<END
<html>
	<meta http-equiv='refresh' $goto charset="utf-8">
	<style>
	#msgbox{width:400px;border: 1px solid #ddd;font-family:微软雅黑;color:888;font-size:13px;margin:0 auto;margin-top:150px;}
	#msgbox #title{background:#3F9AC6;color:#fff;line-height:30px;height:30px;padding-left:20px;font-weight:800;}
	#msgbox #message{text-align:center;padding:20px;}
	#msgbox #info{text-align:center;padding:5px;border-top:1px solid #ddd;background:#f2f2f2;color:#888;}
	</style>
	<body>
	<div id="msgbox">
	<div id="title">提示信息</div>
	<div id="message">$message</div>
	<div id="info">$time 秒后自动跳转，如不想等待可 <a href='$url'>点击这里</a></div></center>
	</body>
</html>
END;
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

// 获取操作系统信息
function get_os (){
	$agent = $_SERVER['HTTP_USER_AGENT'];
	$os = false;
	if (eregi('win', $agent) && strpos($agent, '95')) {
		$os = 'Windows 95';
	} else if (eregi('win 9x', $agent) && strpos($agent, '4.90')) {
		$os = 'Windows ME';
	} else if (eregi('win', $agent) && ereg('98', $agent)) {
		$os = 'Windows 98';
	} else if (eregi('win', $agent) && eregi('nt 5.1', $agent)) {
		$os = 'Windows XP';
	} else if (eregi('win', $agent) && eregi('nt 5', $agent)) {
		$os = 'Windows 2000';
	} else if (eregi('win', $agent) && eregi('nt', $agent)) {
		$os = 'Windows NT';
	} else if (eregi('win', $agent) && ereg('32', $agent)) {
		$os = 'Windows 32';
	} else if (eregi('linux', $agent)) {
		$os = 'Linux';
	} else if (eregi('unix', $agent)) {
		$os = 'Unix';
	} else if (eregi('sun', $agent) && eregi('os', $agent)) {
		$os = 'SunOS';
	} else if (eregi('ibm', $agent) && eregi('os', $agent)) {
		$os = 'IBM OS/2';
	} else if (eregi('Mac', $agent) && eregi('PC', $agent)) {
		$os = 'Macintosh';
	} else if (eregi('PowerPC', $agent)) {
		$os = 'PowerPC';
	} else if (eregi('AIX', $agent)) {
		$os = 'AIX';
	} else if (eregi('HPUX', $agent)) {
		$os = 'HPUX';
	} else if (eregi('NetBSD', $agent)) {
		$os = 'NetBSD';
	} else if (eregi('BSD', $agent)) {
		$os = 'BSD';
	} else if (ereg('OSF1', $agent)) {
		$os = 'OSF1';
	} else if (ereg('IRIX', $agent)) {
		$os = 'IRIX';
	} else if (eregi('FreeBSD', $agent)) {
		$os = 'FreeBSD';
	} else if (eregi('teleport', $agent)) {
		$os = 'teleport';
	} else if (eregi('flashget', $agent)) {
		$os = 'flashget';
	} else if (eregi('webzip', $agent)) {
		$os = 'webzip';
	} else if (eregi('offline', $agent)) {
		$os = 'offline';
	} else {
		$os = 'Unknown';
	} 
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
		"dot" => "application/msword",
		"dvi" => "application/x-dvi",
		"dxr" => "application/x-director",
		"eps" => "application/postscript",
		"etx" => "text/x-setext",
		"evy" => "application/envoy",
		"exe" => "application/octet-stream",
		"fif" => "application/fractals",
		"flr" => "x-world/x-vrml",
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
		"js" => "application/x-javascript",
		"latex" => "application/x-latex",
		"lha" => "application/octet-stream",
		"lsf" => "video/x-la-asf",
		"lsx" => "video/x-la-asf",
		"lzh" => "application/octet-stream",
		"m13" => "application/x-msmediaview",
		"m14" => "application/x-msmediaview",
		"m3u" => "audio/x-mpegurl",
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
		"mp4" => "video/mpeg",
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
		"wav" => "audio/x-wav",
		"wcm" => "application/vnd.ms-works",
		"wdb" => "application/vnd.ms-works",
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
		"xlt" => "application/vnd.ms-excel",
		"xlw" => "application/vnd.ms-excel",
		"xof" => "x-world/x-vrml",
		"xpm" => "image/x-xpixmap",
		"xwd" => "image/x-xwindowdump",
		"z" => "application/x-compress",
		"zip" => "application/zip"
	);
	if (array_key_exists($ext,$mimetypes)){
		return $mimetypes[$ext];
	}else{
		return 'application/octet-stream';
	}
}
