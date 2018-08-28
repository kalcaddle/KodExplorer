<?php
/*
* @link http://kodcloud.com/
* @author warlee | e-mail:kodcloud@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kodcloud.com/tools/license/license.txt
*/

/**
 * 系统函数：				filesize(),file_exists(),pathinfo(),rname(),unlink(),filemtime(),is_readable(),is_wrieteable();
 * 获取文件详细信息		file_info($fileName)
 * 获取文件夹详细信息		path_info($dir)
 * 递归获取文件夹信息		path_info_more($dir,&$fileCount=0,&$pathCount=0,&$size=0)
 * 获取文件夹下文件列表	path_list($dir)
 * 路径当前文件[夹]名		get_path_this($path)
 * 获取路径父目录			get_path_father($path)
 * 删除文件				del_file($file)
 * 递归删除文件夹			del_dir($dir)
 * 递归复制文件夹			copy_dir($source, $dest)
 * 创建目录				mk_dir($dir, $mode = 0777)
 * 文件大小格式化			size_format($bytes, $precision = 2)
 * 判断是否绝对路径		path_is_absolute( $path )
 * 扩展名的文件类型		ext_type($ext)
 * 文件下载				file_download($file)
 * 文件下载到服务器		file_download_this($from, $fileName)
 * 获取文件(夹)权限		get_mode($file)  //rwx_rwx_rwx [文件名需要系统编码]
 * 上传文件(单个，多个)	upload($fileInput, $path = './');//
 * 获取配置文件项			get_config($file, $ini, $type="string")
 * 修改配置文件项			update_config($file, $ini, $value,$type="string")
 * 写日志到LOG_PATH下		write_log('dd','default|.自建目录.','log|error|warning|debug|info|db')
 */

// 传入参数为程序编码时，有传出，则用程序编码，
// 传入参数没有和输出无关时，则传入时处理成系统编码。
function iconv_app($str){
	global $config;
	$result = iconv_to($str,$config['systemCharset'], $config['appCharset']);
	return $result;
}
function iconv_system($str){
	//去除中文空格UTF8; windows下展示异常;过滤文件上传、新建文件等时的文件名
	//文件名已存在含有该字符时，没有办法操作.
	$char_empty = "\xc2\xa0";
	if(strpos($str,$char_empty) !== false){
		$str = str_replace($char_empty," ",$str);
	}

	global $config;
	$result = iconv_to($str,$config['appCharset'], $config['systemCharset']);
	$result = path_filter($result);
	return $result;
}
function iconv_to($str,$from,$to){
	if (!function_exists('iconv')){
		return $str;
	}
	//尝试用mb转换；android环境部分问题解决
	if(function_exists('mb_convert_encoding')){
		$result = @mb_convert_encoding($str,$to,$from);
	}else{
		$result = @iconv($from, $to, $str);
	}
	if(strlen($result)==0){ 
		return $str;
	}
	return $result;
}
function path_filter($path){
	if(strtoupper(substr(PHP_OS, 0,3)) != 'WIN'){
		return $path;
	}
	$notAllow = array('*','?','"','<','>','|');//去除 : D:/
	return str_replace($notAllow,' ', $path);
}


//filesize 解决大于2G 大小问题
//http://stackoverflow.com/questions/5501451/php-x86-how-to-get-filesize-of-2-gb-file-without-external-program
function get_filesize($path){
	$result = false;
	$fp = fopen($path,"r");
	if(! $fp = fopen($path,"r")) return $result;
	if(PHP_INT_SIZE >= 8 ){ //64bit
		$result = (float)(abs(sprintf("%u",@filesize($path))));
	}else{
		if (fseek($fp, 0, SEEK_END) === 0) {
			$result = 0.0;
			$step = 0x7FFFFFFF;
			while ($step > 0) {
				if (fseek($fp, - $step, SEEK_CUR) === 0) {
					$result += floatval($step);
				} else {
					$step >>= 1;
				}
			}
		}else{
			static $iswin;
			if (!isset($iswin)) {
				$iswin = (strtoupper(substr(PHP_OS, 0, 3)) == 'WIN');
			}
			static $exec_works;
			if (!isset($exec_works)) {
				$exec_works = (function_exists('exec') && !ini_get('safe_mode') && @exec('echo EXEC') == 'EXEC');
			}
			if ($iswin && class_exists("COM")) {
				try {
					$fsobj = new COM('Scripting.FileSystemObject');
					$f = $fsobj->GetFile( realpath($path) );
					$size = $f->Size;
				} catch (Exception $e) {
					$size = null;
				}
				if (is_numeric($size)) {
					$result = $size;
				}
			}else if ($exec_works){
				$cmd = ($iswin) ? "for %F in (\"$path\") do @echo %~zF" : "stat -c%s \"$path\"";
				@exec($cmd, $output);
				if (is_array($output) && is_numeric($size = trim(implode("\n", $output)))) {
					$result = $size;
				}
			}else{
				$result = filesize($path);
			}
		}
	}
	fclose($fp);
	return $result;
}

//文件是否存在，区分文件大小写
function file_exists_case( $fileName ){
	if(file_exists($fileName) === false){
		return false;
	}
	$status         = false;
	$directoryName  = dirname( $fileName );
	$fileArray      = glob( $directoryName . '/*', GLOB_NOSORT);
	if ( preg_match( "/\\\|\//", $fileName) ){
		$array    = preg_split("/\\\|\//", $fileName);
		$fileName = $array[ count( $array ) -1 ];
	}
	foreach($fileArray as $file ){
		if(preg_match("/{$fileName}/i", $file)){
			$output = "{$directoryName}/{$fileName}";
			$status = true;
			break;
		}
	}
	return $status;
}


function path_readable($path){
	$result = intval(is_readable($path));
	if($result){
		return $result;
	}
	$mode = get_mode($path);
	if( $mode && 
		strlen($mode) == 18 &&
		substr($mode,-9,1) == 'r'){// -rwx rwx rwx(0777)
		return true;
	}
	return false;
}
function path_writeable($path){
	$result = intval(is_writeable($path));
	if($result){
		return $result;
	}
	$mode = get_mode($path);
	if( $mode && 
		strlen($mode) == 18 &&
		substr($mode,-8,1) == 'w'){// -rwx rwx rwx (0777)
		return true;
	}
	return false;
}

/**
 * 获取文件详细信息
 * 文件名从程序编码转换成系统编码,传入utf8，系统函数需要为gbk
 */
function file_info($path){
	$info = array(
		'name'			=> iconv_app(get_path_this($path)),
		'path'			=> iconv_app($path),
		'ext'			=> get_path_ext($path),
		'type' 			=> 'file',
		'mode'			=> get_mode($path),
		'atime'			=> @fileatime($path), //最后访问时间
		'ctime'			=> @filectime($path), //创建时间
		'mtime'			=> @filemtime($path), //最后修改时间
		'isReadable'	=> path_readable($path),
		'isWriteable'	=> path_writeable($path),
		'size'			=> get_filesize($path)
	);
	return $info;
}
/**
 * 获取文件夹细信息
 */
function folder_info($path){
	$info = array(
		'name'			=> iconv_app(get_path_this($path)),
		'path'			=> iconv_app(rtrim($path,'/').'/'),
		'type' 			=> 'folder',
		'mode'			=> get_mode($path),
		'atime'			=> @fileatime($path), //访问时间
		'ctime'			=> @filectime($path), //创建时间
		'mtime'			=> @filemtime($path), //最后修改时间
		'isReadable'	=> path_readable($path),
		'isWriteable'	=> path_writeable($path)
	);
	return $info;
}


/**
 * 获取一个路径(文件夹&文件) 当前文件[夹]名
 * test/11/ ==>11 test/1.c  ==>1.c
 */
function get_path_this($path){
	$path = str_replace('\\','/', rtrim($path,'/'));
	$pos = strrpos($path,'/');
	if($pos === false){
		return $path;
	}
	return substr($path,$pos+1);
}
/**
 * 获取一个路径(文件夹&文件) 父目录
 * /test/11/==>/test/   /test/1.c ==>/www/test/
 */
function get_path_father($path){
	$path = str_replace('\\','/', rtrim($path,'/'));
	$pos = strrpos($path,'/');
	if($pos === false){
		return $path;
	}
	return substr($path, 0,$pos+1);
}
/**
 * 获取扩展名
 */
function get_path_ext($path){
	$name = get_path_this($path);
	$ext = '';
	if(strstr($name,'.')){
		$ext = substr($name,strrpos($name,'.')+1);
		$ext = strtolower($ext);
	}
	if (strlen($ext)>3 && preg_match("/([\x81-\xfe][\x40-\xfe])/", $ext, $match)) {
		$ext = '';
	}
	return htmlspecialchars($ext);
}



//自动获取不重复文件(夹)名
//如果传入$file_add 则检测存在则自定重命名  a.txt 为a{$file_add}.txt
//$same_file_type  rename,replace,skip,folder_rename
function get_filename_auto($path,$file_add = "",$same_file_type='replace'){
	if (is_dir($path) && $same_file_type!='folder_rename') {//文件夹则忽略
		return $path;
	}
	//重名处理
	if (file_exists($path)) {
		if ($same_file_type=='replace') {
			return $path;
		}else if($same_file_type=='skip'){
			return false;
		}
	}

	$i=1;
	$father = get_path_father($path);
	$name =  get_path_this($path);
	$ext = get_path_ext($name);
	if(is_dir($path)){
		$ext = '';
	}
	if (strlen($ext)>0) {
		$ext='.'.$ext;
		$name = substr($name,0,strlen($name)-strlen($ext));
	}
	while(file_exists($path)){
		if ($file_add != '') {
			$path = $father.$name.$file_add.$ext;
			$file_add.='-';
		}else{
			$path = $father.$name.'('.$i.')'.$ext;
			$i++;
		}
	}
	return $path;
}

/**
 * 获取文件夹详细信息,文件夹属性时调用，包含子文件夹数量，文件数量，总大小
 */
function path_info($path){
	if (!file_exists($path)) return false;
	$pathinfo = _path_info_more($path);//子目录文件大小统计信息
	$folderinfo = folder_info($path);
	return array_merge($pathinfo,$folderinfo);
}

/**
 * 检查名称是否合法
 */
function path_check($path){
	$check = array('/','\\',':','*','?','"','<','>','|');
	$path = rtrim($path,'/');
	$path = get_path_this($path);
	foreach ($check as $v) {
		if (strstr($path,$v)) {
			return false;
		}
	}
	return true;
}

/**
 * 递归获取文件夹信息： 子文件夹数量，文件数量，总大小
 */
function _path_info_more($dir, &$fileCount = 0, &$pathCount = 0, &$size = 0){
	if (!$dh = @opendir($dir)) return array('fileCount'=>0,'folderCount'=>0,'size'=>0);
	while (($file = readdir($dh)) !== false) {
		if ($file =='.' || $file =='..') continue;
		$fullpath = $dir . "/" . $file;
		if (!is_dir($fullpath)) {
			$fileCount ++;
			$size += get_filesize($fullpath);
		} else {
			_path_info_more($fullpath, $fileCount, $pathCount, $size);
			$pathCount ++;
		}
	}
	closedir($dh);
	$pathinfo['fileCount'] = $fileCount;
	$pathinfo['folderCount'] = $pathCount;
	$pathinfo['size'] = $size;
	return $pathinfo;
}


/**
 * 获取多选文件信息,包含子文件夹数量，文件数量，总大小，父目录权限
 */
function path_info_muti($list,$timeType){
	if (count($list) == 1) {
		if ($list[0]['type']=="folder"){
			return path_info($list[0]['path'],$timeType);
		}else{
			return file_info($list[0]['path'],$timeType);
		}
	}
	$pathinfo = array(
		'fileCount'		=> 0,
		'folderCount'	=> 0,
		'size'			=> 0,
		'father_name'	=> '',
		'mod'			=> ''
	);
	foreach ($list as $val){
		if ($val['type'] == 'folder') {
			$pathinfo['folderCount'] ++;
			$temp = path_info($val['path']);
			$pathinfo['folderCount']	+= $temp['folderCount'];
			$pathinfo['fileCount']	+= $temp['fileCount'];
			$pathinfo['size'] 		+= $temp['size'];
		}else{
			$pathinfo['fileCount']++;
			$pathinfo['size'] += get_filesize($val['path']);
		}
	}
	$father_name = get_path_father($list[0]['path']);
	$pathinfo['mode'] = get_mode($father_name);
	return $pathinfo;
}

/**
 * 获取文件夹下列表信息
 * dir 包含结尾/   d:/wwwroot/test/
 * 传入需要读取的文件夹路径,为程序编码
 */
function path_list($dir,$listFile=true,$checkChildren=false){
	$dir = rtrim($dir,'/').'/';
	if (!is_dir($dir) || !($dh = @opendir($dir))){
		return array('folderList'=>array(),'fileList'=>array());
	}
	$folderList = array();$fileList = array();//文件夹与文件
	while (($file = readdir($dh)) !== false) {
		if ($file =='.' || $file =='..' || $file == ".svn") continue;
		$fullpath = $dir . $file;
		if (is_dir($fullpath)) {
			$info = folder_info($fullpath);
			if($checkChildren){
				$info['isParent'] = path_haschildren($fullpath,$listFile);
			}
			$folderList[] = $info;
		} else if($listFile) {//是否列出文件
			$info = file_info($fullpath);
			if($checkChildren) $info['isParent'] = false;
			$fileList[] = $info;
		}
	}
	closedir($dh);
	return array('folderList' => $folderList,'fileList' => $fileList);
}

// 判断文件夹是否含有子内容【区分为文件或者只筛选文件夹才算】
function path_haschildren($dir,$checkFile=false){
	$dir = rtrim($dir,'/').'/';
	if (!$dh = @opendir($dir)) return false;
	while (($file = readdir($dh)) !== false){
		if ($file =='.' || $file =='..') continue;
		$fullpath = $dir.$file;
		if ($checkFile) {//有子目录或者文件都说明有子内容
			if(@is_file($fullpath) || is_dir($fullpath.'/')){
				return true;
			}
		}else{//只检查有没有文件
			if(@is_dir($fullpath.'/')){//解决部分主机报错问题
				return true;
			}
		}
	}
	closedir($dh);
	return false;
}

/**
 * 删除文件 传入参数编码为操作系统编码. win--gbk
 */
function del_file($fullpath){
	if (!@unlink($fullpath)) { // 删除不了，尝试修改文件权限
		@chmod($fullpath, 0777);
		if (!@unlink($fullpath)) {
			return false;
		}
	} else {
		return true;
	}
}

/**
 * 删除文件夹 传入参数编码为操作系统编码. win--gbk
 */
function del_dir($dir){
	if(!file_exists($dir) || !is_dir($dir)) return true;
	if (!$dh = opendir($dir)) return false;
	@set_time_limit(0);
	while (($file = readdir($dh)) !== false) {
		if ($file =='.' || $file =='..') continue;
		$fullpath = $dir . '/' . $file;
		if (!is_dir($fullpath)) {
			if (!unlink($fullpath)) { // 删除不了，尝试修改文件权限
				chmod($fullpath, 0777);
				if (!unlink($fullpath)) {
					return false;
				}
			}
		} else {
			if (!del_dir($fullpath)) {
				chmod($fullpath, 0777);
				if (!del_dir($fullpath)) return false;
			}
		}
	}
	closedir($dh);
	if (rmdir($dir)) {
		return true;
	} else {
		return false;
	}
}


/**
 * 复制文件夹
 * eg:将D:/wwwroot/下面wordpress复制到
 *	D:/wwwroot/www/explorer/0000/del/1/
 * 末尾都不需要加斜杠，复制到地址如果不加源文件夹名，
 * 就会将wordpress下面文件复制到D:/wwwroot/www/explorer/0000/del/1/下面
 * $from = 'D:/wwwroot/wordpress';
 * $to = 'D:/wwwroot/www/explorer/0000/del/1/wordpress';
 */

function copy_dir($source, $dest){
	if (!$dest) return false;
	if (is_dir($source) && $source == substr($dest,0,strlen($source))) return false;//防止父文件夹拷贝到子文件夹，无限递归

	@set_time_limit(0);
	$result = true;
	if (is_file($source)) {
		if ($dest[strlen($dest)-1] == '/') {
			$__dest = $dest . "/" . basename($source);
		} else {
			$__dest = $dest;
		}
		$result = @copy($source,$__dest);
		@chmod($__dest, 0777);
	}else if(is_dir($source)) {
		if ($dest[strlen($dest)-1] == '/') {
			$dest = $dest . basename($source);
		}
		if (!is_dir($dest)) {
			@mkdir($dest,0777);
		}
		if (!$dh = opendir($source)) return false;
		while (($file = readdir($dh)) !== false) {
			if ($file =='.' || $file =='..') continue;
			$result = copy_dir($source . "/" . $file, $dest . "/" . $file);
		}
		closedir($dh);
	}
	return $result;
}

/**
 * 移动文件&文件夹；（同名文件夹则特殊处理）
 * 问题：win下，挂载磁盘移动到系统盘时rmdir导致遍历不完全；
 */
function move_path2($source,$dest,$repeat_add='',$repeat_type='replace'){
	if (!$dest) return false;
	if (is_dir($source) && $source == substr($dest,0,strlen($source))) return false;//防止父文件夹拷贝到子文件夹，无限递归
	@set_time_limit(0);
	if (is_file($source)) {
		return move_file($source,$dest,$repeat_add,$repeat_type);
	}else if(is_dir($source)) {
		if ($dest[strlen($dest)-1] == '/') {
			$dest = $dest . basename($source);
		}
		if (!file_exists($dest)) {
			@mkdir($dest,0777);
		}
		if (!$dh = opendir($source)) return false;
		while (($file = readdir($dh)) !== false) {
			if ($file =='.' || $file =='..') continue;
			move_path($source."/".$file, $dest."/".$file,$repeat_add,$repeat_type);
		}
		closedir($dh);
		return @rmdir($source);
	}
}

function move_file($source,$dest,$repeat_add,$repeat_type){
	if ($dest[strlen($dest)-1] == '/') {
		$dest = $dest . "/" . basename($source);
	}
	if(file_exists($dest)){
		$dest = get_filename_auto($dest,$repeat_add,$repeat_type);//同名文件处理规则
	}
	$result = intval(@rename($source,$dest));
	if (! $result) { // windows部分ing情况处理
		$result = intval(@copy($source,$dest));
		if ($result) {
			@unlink($source);
		}
	}
	return $result;
}
function move_path($source,$dest,$repeat_add='',$repeat_type='replace'){
	if (!$dest || !file_exists($source)) return false;
	if ( is_dir($source) ){
		//防止父文件夹拷贝到子文件夹，无限递归
		if($source == substr($dest,0,strlen($source))){
			return false;
		}
		//地址相同
		if(rtrim($source,'/') == rtrim($dest,'/')){
			return false;
		}
	}

	@set_time_limit(0);
	if(is_file($source)){
		return move_file($source,$dest,$repeat_add,$repeat_type);
	}
	recursion_dir($source,$dirs,$files,-1,0);

	@mkdir($dest);
	foreach($dirs as $f){
		$path = $dest.'/'.substr($f,strlen($source));
		if(!file_exists($path)){
			mk_dir($path);
		}
	}
	$file_success = 0;
	foreach($files as $f){
		$path = $dest.'/'.substr($f,strlen($source));
		$file_success += move_file($f,$path,$repeat_add,$repeat_type);
	}
	foreach($dirs as $f){
		rmdir($f);
	}
	@rmdir($source);
	if($file_success == count($files)){
		del_dir($source);
		return true;
	}
	return false;
}

/**
 * 创建目录
 *
 * @param string $dir
 * @param int $mode
 * @return bool
 */
function mk_dir($dir, $mode = 0777){
	if (!$dir) return false;
	if (is_dir($dir) || @mkdir($dir, $mode)){
		return true;
	}
	if (!mk_dir(dirname($dir), $mode)){
		return false;
	}
	return @mkdir($dir, $mode);
}

/*
* 获取文件&文件夹列表(支持文件夹层级)
* path : 文件夹 $dir ——返回的文件夹array files ——返回的文件array
* $deepest 是否完整递归；$deep 递归层级
*/
function recursion_dir($path,&$dir,&$file,$deepest=-1,$deep=0){
	$path = rtrim($path,'/').'/';
	if (!is_array($file)) $file=array();
	if (!is_array($dir)) $dir=array();
	if (!$dh = opendir($path)) return false;
	while(($val=readdir($dh)) !== false){
		if ($val=='.' || $val=='..') continue;
		$value = strval($path.$val);
		if (is_file($value)){
			$file[] = $value;
		}else if(is_dir($value)){
			$dir[]=$value;
			if ($deepest==-1 || $deep<$deepest){
				recursion_dir($value."/",$dir,$file,$deepest,$deep+1);
			}
		}
	}
	closedir($dh);
	return true;
}

/**
 * 借用临时文件方式对读写文件进行锁定标记
 * 
 * fopen mode: http://www.w3school.com.cn/php/func_filesystem_fopen.asp
 * flock mode: http://www.w3school.com.cn/php/func_filesystem_flock.asp
 */
function file_lock($file,$open=true,$type='read',$timeout=5){
	clearstatcache();
	$lockFile  = $file.'.'.$type.'.lock';
	$lockRead  = $file.'.read.lock';
	$lockWrite = $file.'.write.lock';
	if(!$open){
		@unlink($lockFile);
		clearstatcache();
		return;
	}

	$startTime = microtime(true);
	do{
		clearstatcache();
		$canLock = true;
		if( $type=='read' ){
			if( file_exists($lockWrite) ){
				$canLock = false;
			}
		}else if( $type=='write' ){
			if( file_exists($lockWrite) || file_exists($lockRead) ){
				$canLock = false;
			}
		}
		if(!$canLock){
			usleep(mt_rand(10, 50) * 1000);//10~50ms;
		}
	} while((!$canLock) && ((microtime(true) - $startTime) < $timeout ));
	$result = false;
	if($canLock){
		$result = file_put_contents($lockFile,time(),LOCK_EX);
		clearstatcache();
		$result = $result && file_exists($lockFile);
		//if(!$result){write_log($_GET['action'].';file not exists','test2');}
	}
	return $result;
}

// 安全读取文件，避免并发下读取数据为空
function file_read_safe1($file,$timeout = 5){
	if(file_lock($file,true,'read',$timeout)){
		$fp = @fopen($file, 'r');
		if(!$fp || !flock($fp, LOCK_EX)) return false;
		$result = fread($fp, filesize($file));
		flock($fp,LOCK_UN);fclose($fp);

		file_lock($file,false,'read');
		return $result;
	}
	return false;
}
// 安全读取文件，避免并发下读取数据为空
function file_wirte_safe1($file,$buffer,$timeout=5){
	if(file_lock($file,true,'write',$timeout)){
		$result = @file_put_contents($file,$buffer,LOCK_EX);
		file_lock($file,false,'write');
		return $result;
	}
	return false;
}


// 安全读取文件，避免并发下读取数据为空
function file_read_safe($file,$timeout = 5){
	//return file_read_safe1($file,$timeout);
	if(!$file || !file_exists($file)) return false;
	$fp = @fopen($file, 'r');
	if(!$fp) return false;
	$startTime = microtime(true);
	do{
		$locked = flock($fp, LOCK_EX|LOCK_NB);//LOCK_EX|LOCK_NB 
		if(!$locked){
			usleep(mt_rand(1, 50) * 1000);//1~50ms;
		}
	} while((!$locked) && ((microtime(true) - $startTime) < $timeout ));//设置超时时间
	if($locked && filesize($file) >=0 ){
		$result = @fread($fp, filesize($file));
		flock($fp,LOCK_UN);
		fclose($fp);
		return $result;
	}else{
		flock($fp,LOCK_UN);fclose($fp);
		return false;
	}
}

// 安全读取文件，避免并发下读取数据为空
function file_wirte_safe($file,$buffer,$timeout=5){
	//return file_wirte_safe1($file,$buffer,$timeout);
	clearstatcache();
	if(strlen($file) == 0 || !$file || !file_exists($file)) return false;
	$fp = fopen($file,'r+');
	$startTime = microtime(true);
	do{
		$locked = flock($fp, LOCK_EX);//LOCK_EX 
		if(!$locked){
			usleep(mt_rand(1, 50) * 1000);//1~50ms;
		}
	} while((!$locked) && ((microtime(true) - $startTime) < $timeout ) );//设置超时时间
	if($locked){
		$tempFile = $file.'.temp';
		$result = file_put_contents($tempFile,$buffer,LOCK_EX);//验证是否还能写入；避免磁盘空间满的情况
		if(!$result || !file_exists($tempFile) ){
			flock($fp,LOCK_UN);fclose($fp);
			return false;
		}
		@unlink($tempFile);
		
		ftruncate($fp,0);
		rewind($fp);
		$result = fwrite($fp,$buffer);
		flock($fp,LOCK_UN);fclose($fp);
		clearstatcache();
		return $result;
	}else{
		flock($fp,LOCK_UN);fclose($fp);
		return false;
	}
}


/*
 * $search 为包含的字符串
 * is_content 表示是否搜索文件内容;默认不搜索
 * is_case  表示区分大小写,默认不区分
 */
function path_search($path,$search,$is_content=false,$file_ext='',$is_case=false){
	$result = array();
	$result['fileList'] = array();
	$result['folderList'] = array();
	if(!$path) return $result;

	$ext_arr = explode("|",$file_ext);
	recursion_dir($path,$dirs,$files,-1,0);
	$strpos = 'stripos';//是否区分大小写
	if ($is_case) $strpos = 'strpos';
	$result_num = 0;
	$result_num_max = 2000;//搜索文件内容，限制最多匹配条数
	foreach($files as $f){
		if($result_num >= $result_num_max){
			$result['error_info'] = $result_num_max;
			break;
		}
		
		//若指定了扩展名则只在匹配扩展名文件中搜索
		$ext = get_path_ext($f);
		if($file_ext != '' && !in_array($ext,$ext_arr)){
			continue;
		}

		//搜索内容则不搜索文件名
		if ($is_content) {
			if(!is_text_file($ext)) continue; //在限定中或者不在bin中
			$search_info = file_search($f,$search,$is_case);
			if($search_info !== false){
				$result_num += count($search_info['searchInfo']);
				$result['fileList'][] = $search_info;
			}
		}else{
			$path_this = get_path_this($f);
			if ($strpos($path_this,$search) !== false){//搜索文件名;
				$result['fileList'][] = file_info($f);
				$result_num ++;
			}
		}	
	}
	if (!$is_content && $file_ext == '' ) {//没有指定搜索文件内容，且没有限定扩展名，才搜索文件夹
		foreach($dirs as $f){
			$path_this = get_path_this($f);
			if ($strpos($path_this,$search) !== false){
				$result['folderList'][]= array(
					'name'  => iconv_app(get_path_this($f)),
					'path'  => iconv_app($f)
				);
			}
		}
	}
	return $result;
}

// 文件搜索；返回行及关键词附近行
// 优化搜索算法 提高100被性能
function file_search($path,$search,$is_case){
	$strpos = 'stripos';//是否区分大小写
	if ($is_case) $strpos = 'strpos';

	//文本文件 超过40M不再搜索
	if(@filesize($path) >= 1024*1024*40){
		return false;
	}
	$content = file_get_contents($path);
	if( $strpos($content,"\0") > 0 ){// 不是文本文档
		unset($content);
		return false;
	}

	$charset = get_charset($content);

	//搜索关键字为纯英文则直接搜索；含有中文则转为utf8再搜索，为兼容其他文件编码格式
	$notAscii = preg_match("/[\x7f-\xff]/", $search);
	if($notAscii && !in_array($charset,array('utf-8','ascii'))){
		$content = iconv_to($content,$charset,'utf-8');
	}

	//文件没有搜索到目标直接返回
	if ($strpos($content,$search) === false){
		unset($content);
		return false;
	}

	$pose = 0; 
	$file_size = strlen($content);
	$arr_search = array(); // 匹配结果所在位置
	while ( $pose !== false) {
		$pose = $strpos($content,$search, $pose);
		if($pose !== false){
			$arr_search[] = $pose;
			$pose ++;
		}else{
			break;
		}
	}

	
	$arr_line = array();
	$pose = 0;
	while ( $pose !== false) {
		$pose = strpos($content, "\n", $pose);
		if($pose !== false){
			$arr_line[] = $pose;
			$pose ++;
		}else{
			break;
		}
	}
	$arr_line[] = $file_size;//文件只有一行而且没有换行，则构造虚拟换行

	$result = array();//  [2,10,22,45,60]  [20,30,40,50,55]
	$len_search = count($arr_search);
	$len_line 	= count($arr_line);
	for ($i=0,$line=0; $i < $len_search && $line < $len_line; $line++) {
		while ( $arr_search[$i] <= $arr_line[$line]) {
			//行截取字符串
			$cur_pose = $arr_search[$i];
			$from = $line == 0 ? 0:$arr_line[$line-1];
			$to = $arr_line[$line];
			$len_max = 300;
			if( $to - $from >= $len_max){ //长度过长处理
				$from = $cur_pose - 20;
				$from = $from <= 0 ? 0 : $from;
				$to   = $from + $len_max;
				//中文避免截断；（向前 向后找到分隔符后终止）
				$token = array("\r","\n"," ","\t",",","/","#","_","[","]","(",")","+","-","*","/","=","&");
				while (!in_array($content[$from],$token) && $from >= 0) {
					$from -- ;
				}
				while (!in_array($content[$to],$token) && $to <= $file_size) {
					$to ++ ;
				}
			}
			$line_str = substr($content,$from,$to - $from);
			if($strpos($line_str,$search) === false){ //截取乱码避免
				$line_str = $search;
			}

			$result[] = array('line'=>$line+1,'str'=>$line_str);
			if(++$i >= $len_search ){
				break;
			}
		}
	}

	$info = file_info($path);
	$info['searchInfo'] = $result;
	unset($content);
	return $info;
}

/**
 * 修改文件、文件夹权限
 * @param  $path 文件(夹)目录
 * @return :string
 */
function chmod_path($path,$mod){
	if (!isset($mod)) $mod = 0777;
	if (!file_exists($path)) return false;
	if (is_file($path)) return @chmod($path,$mod);
	if (!$dh = @opendir($path)) return false;
	while (($file = readdir($dh)) !== false){
		if ($file =='.' || $file =='..') continue;
		$fullpath = $path . '/' . $file;
		chmod_path($fullpath,$mod);
		@chmod($fullpath,$mod);
	}
	closedir($dh);
	return @chmod($path,$mod);
}

/**
 * 文件大小格式化
 *
 * @param  $ :$bytes, int 文件大小
 * @param  $ :$precision int  保留小数点
 * @return :string
 */
function size_format($bytes, $precision = 2){
	if ($bytes == 0) return "0 B";
	$unit = array(
		'TB' => 1099511627776,  // pow( 1024, 4)
		'GB' => 1073741824,		// pow( 1024, 3)
		'MB' => 1048576,		// pow( 1024, 2)
		'kB' => 1024,			// pow( 1024, 1)
		'B ' => 1,				// pow( 1024, 0)
	);
	foreach ($unit as $un => $mag) {
		if (doubleval($bytes) >= $mag)
			return round($bytes / $mag, $precision).' '.$un;
	}
}

/**
 * 判断路径是不是绝对路径
 * 返回true('/foo/bar','c:\windows').
 *
 * @return 返回true则为绝对路径，否则为相对路径
 */
function path_is_absolute($path){
	if (realpath($path) == $path)// *nux 的绝对路径 /home/my
		return true;
	if (strlen($path) == 0 || $path[0] == '.')
		return false;
	if (preg_match('#^[a-zA-Z]:\\\\#', $path))// windows 的绝对路径 c:\aaa\
		return true;
	return (bool)preg_match('#^[/\\\\]#', $path); //绝对路径 运行 / 和 \绝对路径，其他的则为相对路径
}


function is_text_file($ext){
	$ext_arr = array(
		"txt","textile",'oexe','inc','csv','log','asc','tsv','lnk','url','webloc','meta',"localized",
		"xib","xsd","storyboard","plist","csproj","pch","pbxproj","local","xcscheme","manifest","vbproj",
		"strings",'jshintrc','sublime-project','readme','changes',"changelog",'version','license','changelog',

		"abap","abc","as","asp",'aspx',"ada","adb","htaccess","htgroups","htgroups",
		"htpasswd","asciidoc","adoc","asm","a","ahk","bat","cmd","cpp","c","cc","cxx","h","hh","hpp",
		"ino","c9search_results","cirru","cr","clj","cljs","cbl","cob","coffee","cf","cson","cakefile",
		"cfm","cs","css","curly","d","di","dart","diff","patch","dockerfile","dot","dummy","dummy","e",
		"ge","ejs","ex","exs","elm","erl","hrl","frt","fs","ldr","ftl","gcode","feature",".gitignore",
		"glsl","frag","vert","gbs","go","groovy","haml","hbs","handlebars","tpl","mustache","hs","hx",
		"html","hta","htm","xhtml","eex","html.eex","erb","rhtml","html.erb","ini",'inf',"conf","cfg","prefs","io",
		"jack","jade","java","ji","jl","jq","js","jsm","json","jsp","jsx","latex","ltx","bib",
		"lean","hlean","less","liquid","lisp","ls","logic","lql","lsl","lua","lp","lucene","Makefile","makemakefile",
		"gnumakefile","makefile","ocamlmakefile","make","md","markdown","mask","matlab","mz","mel",
		"mc","mush","mysql","nix","nsi","nsh","m","mm","ml","mli","pas","p","pl","pm","pgsql","php",
		"phtml","shtml","php3","php4","php5","phps","phpt","aw","ctp","module","ps1","praat",
		"praatscript","psc","proc","plg","prolog","properties","proto","py","r","cshtml","rd",
		"rhtml","rst","rb","ru","gemspec","rake","guardfile","rakefile","gemfile","rs","sass",
		"scad","scala","scm","sm","rkt","oak","scheme","scss","sh","bash","bashrc","sjs","smarty",
		"tpl","snippets","soy","space","sql","sqlserver","styl","stylus","svg","swift","tcl","tex",
		"toml","twig","swig","ts","typescript","str","vala","vbs","vb","vm","v","vh",
		"sv","svh","vhd","vhdl","wlk","wpgm","wtest","xml","rdf","rss","wsdl","xslt","atom","mathml",
		"mml","xul","xbl","xaml","xq","yaml","yml",

		"cer","reg","config"
	);
	if(in_array($ext,$ext_arr)){
		return true;
	}else{
		return false;
	}
}

/**
 * 输出、文件下载，断点续传支持
 * 默认以附件方式下载；$download为false时则为输出文件
 * 视频播放拖拽：流媒体服务器
 * 文件缓存：http://blog.csdn.net/eroswang/article/details/8302191
 */
function file_put_out($file,$download=-1,$downFilename=false){
	$error = false;
	if (!file_exists($file)){
		$error = 'file not exists';
	}else if (!path_readable($file)){
		$error = 'file not readable';
	}else if (!$fp = @fopen($file, "rb")){
		$error = 'file open error!';
	} 
	if($error !== false){
		if($downFilename === false){
			return;
		}else{
			show_json($error,false);
		}
	}

	$start= 0;
	$file_size = get_filesize($file);
	$end  = $file_size - 1;
	@ob_end_clean();
	@set_time_limit(0);

	$time = gmdate('D, d M Y H:i:s',filemtime($file));
	$filename = get_path_this($file);
	if($downFilename !== false){
		$filename = $downFilename;
	}

	$mime = get_file_mime(get_path_ext($filename));
	$filenameOutput = rawurlencode(iconv_app($filename));
	if ($download === -1 && !mime_support($mime)){
		$download = true;
	}
	$headerName = $filenameOutput;
	if(ua_has("Chrome") && !ua_has('Edge')){ //chrome下载
		$filenameOutput = '"'.$filenameOutput.'"';
	}
	if(!is_wap()){
		$headerName.=";filename*=utf-8''".$filenameOutput;
	}
	if( ua_has("Safari") && !ua_has('Edge')){//safari 中文下载问题
		$headerName = rawurldecode($filenameOutput);
	}
	//var_dump($headerName,$filenameOutput,$_SERVER['HTTP_USER_AGENT']);exit;
	if ($download) {
		header('Content-Type: application/octet-stream');
		header('Content-Transfer-Encoding: binary');
		header('Content-Disposition: attachment;filename='.$headerName);
	}else{
		header('Content-Type: '.$mime);
		header('Content-Disposition: inline;filename='.$headerName);
		if(strstr($mime,'text/')){
			//$charset = get_charset(file_get_contents($file));
			header('Content-Type: '.$mime.'; charset=');//避免自动追加utf8导致gbk网页乱码
		}
	}
	
	//缓存文件
	header('Expires: '.gmdate('D, d M Y H:i:s',time()+3600*24*20).' GMT');
	header('Cache-Pragma: public');
	header('Pragma: public'); 
	header('Cache-Control: cache, must-revalidate');
	if (isset($_SERVER['If-Modified-Since']) && 
		(strtotime($_SERVER['If-Modified-Since']) == filemtime($file))) {
		header('304 Not Modified', true, 304);
		exit;
	}
	$etag = '"'.md5($time.$file_size).'"';
	if (isset($_SERVER['HTTP_IF_NONE_MATCH']) && $_SERVER['HTTP_IF_NONE_MATCH'] == $etag){
		header("Etag: ".$etag, true, 304);
		exit;
	}
	header('Etag: '.$etag);
	header('Last-Modified: '.$time.' GMT');
	header("X-OutFileName: ".$filenameOutput);
	header("X-Powered-By: kodExplorer.");
	header("X-FileSize: ".$file_size);

	//调用webserver下载
	$server = strtolower($_SERVER['SERVER_SOFTWARE']);
	if($server && $GLOBALS['config']['settings']['httpSendFile']){
		if(strstr($server,'nginx')){//nginx
			header("X-Sendfile: ".$file);
		}else if(strstr($server,'apache')){ //apache
			header('X-Accel-Redirect: '.$file);
		}else if(strstr($server,'http')){//light http
			header( "X-LIGHTTPD-send-file: " . $file);
		}
		return;
	}
	
	//远程路径不支持断点续传；打开zip内部文件
	if(!file_exists($file)){
		header('HTTP/1.1 200 OK');
		header('Content-Length: '.($end+1));
		return;
	}
	header("Accept-Ranges: bytes");
	if (isset($_SERVER['HTTP_RANGE'])){
		if (preg_match('/bytes=\h*(\d+)-(\d*)[\D.*]?/i', $_SERVER['HTTP_RANGE'], $matches)){
			$start	= intval($matches[1]);
			if (!empty($matches[2])){
				$end = intval($matches[2]);
			}
		}
		header('HTTP/1.1 206 Partial Content');
	}else{
		header('HTTP/1.1 200 OK');
	}
	if(isset($_GET['start'])){//flash video
		$start = intval($_GET['start']);
	}
	header('Content-Length:' . (($end - $start) + 1));
	if (isset($_SERVER['HTTP_RANGE']) || isset($_GET['start'])){
		header("Content-Range: bytes $start-$end/".$file_size);
	}

	//输出文件
	$cur = $start;
	fseek($fp, $start,0);
	while(!feof($fp) && $cur <= $end){ // && (connection_status() == 0)
		print fread($fp, min(1024 * 200, ($end - $cur) + 1));
		$cur += 1024 *200;
		flush();
	}
	fclose($fp);
}

/**
 * 远程文件下载到服务器
 * 支持fopen的打开都可以；支持本地、url
 */
function file_download_this($from, $fileName,$headerSize=0){
	@set_time_limit(0);
	$fileTemp = $fileName.'.downloading';
	if ($fp = @fopen ($from, "rb")){
		if(!$downloadFp = @fopen($fileTemp, "wb")){
			return false;
		}
		while(!feof($fp)){
			if(!file_exists($fileTemp)){//删除目标文件；则终止下载
				fclose($downloadFp);
				return false;
			}
			//对于部分fp不结束的通过文件大小判断
			clearstatcache();
			if( $headerSize>0 &&
				$headerSize==get_filesize(iconv_system($fileTemp))
				){
				break;
			}
			fwrite($downloadFp, fread($fp, 1024 * 200 ), 1024 * 200);
		}
		//下载完成，重命名临时文件到目标文件
		fclose($downloadFp);
		fclose($fp);
		if(!@rename($fileTemp,$fileName)){
			unlink($fileName);
			return rename($fileTemp,$fileName);
		}
		return true;
	}else{
		return false;
	}
}

/**
 * 获取文件(夹)权限 rwx_rwx_rwx
 */
function get_mode($file){
	$Mode = @fileperms($file);
	$theMode = ' '.decoct($Mode);
	$theMode = substr($theMode,-4);
	$Owner = array();$Group=array();$World=array();
	if ($Mode &0x1000) $Type = 'p'; // FIFO pipe
	elseif ($Mode &0x2000) $Type = 'c'; // Character special
	elseif ($Mode &0x4000) $Type = 'd'; // Directory
	elseif ($Mode &0x6000) $Type = 'b'; // Block special
	elseif ($Mode &0x8000) $Type = '-'; // Regular
	elseif ($Mode &0xA000) $Type = 'l'; // Symbolic Link
	elseif ($Mode &0xC000) $Type = 's'; // Socket
	else $Type = 'u'; // UNKNOWN
	// Determine les permissions par Groupe
	$Owner['r'] = ($Mode &00400) ? 'r' : '-';
	$Owner['w'] = ($Mode &00200) ? 'w' : '-';
	$Owner['x'] = ($Mode &00100) ? 'x' : '-';
	$Group['r'] = ($Mode &00040) ? 'r' : '-';
	$Group['w'] = ($Mode &00020) ? 'w' : '-';
	$Group['e'] = ($Mode &00010) ? 'x' : '-';
	$World['r'] = ($Mode &00004) ? 'r' : '-';
	$World['w'] = ($Mode &00002) ? 'w' : '-';
	$World['e'] = ($Mode &00001) ? 'x' : '-';
	// Adjuste pour SUID, SGID et sticky bit
	if ($Mode &0x800) $Owner['e'] = ($Owner['e'] == 'x') ? 's' : 'S';
	if ($Mode &0x400) $Group['e'] = ($Group['e'] == 'x') ? 's' : 'S';
	if ($Mode &0x200) $World['e'] = ($World['e'] == 'x') ? 't' : 'T';
	$Mode = $Type.$Owner['r'].$Owner['w'].$Owner['x'].' '.
			$Group['r'].$Group['w'].$Group['e'].' '.
			$World['r'].$World['w'].$World['e'];
	return $Mode.'('.$theMode.')';
}

/**
 * 获取可以上传的最大值
 * return * byte
 */
function get_post_max(){
	$upload = ini_get('upload_max_filesize');
	$upload = $upload==''?ini_get('upload_max_size'):$upload;
	$post = ini_get('post_max_size');
	$upload = intval($upload)*1024*1024*0.8;
	$post = intval($post)*1024*1024*0.8;
	$the_max = $upload<$post?$upload:$post;
	return $the_max==0?1024*1024*0.5:$the_max;//获取不到则500k
}



function path_clear($path){
	$path = str_replace('\\','/',trim($path));
	$path = preg_replace('/\/+/', '/', $path);
	if (strstr($path,'../')) {
		$path = preg_replace('/\/\.+\//', '/', $path);
	}
	return $path;
}
function path_clear_name($path){
	$path = str_replace('\\','/',trim($path));
	$path = str_replace('/','.',trim($path));
	return $path;
}

// 兼容move_uploaded_file 和 流的方式上传
function kod_move_uploaded_file($fromPath,$savePath){
	$tempPath = $savePath.'.parttmp';
	if($fromPath == "base64"){
		@file_put_contents($tempPath,base64_decode($_POST['file']));
	}else if($fromPath == "php://input"){
		$in  = @fopen($fromPath, "rb");
		$out = @fopen($tempPath, "wb");
		if(!$in || !$out) return false;
		while (!feof($in)) {
			fwrite($out, fread($in, 1024*200));
		}
		fclose($in);
		fclose($out);
	}else{
		if(!move_uploaded_file($fromPath,$tempPath)){
			show_json('move uploaded file error!',false);
		}
	}

	$result = rename($tempPath,$savePath);
	chmod_path($savePath,DEFAULT_PERRMISSIONS);
	return $result;
}
function check_upload($error){
	$status = array(
		'UPLOAD_ERR_OK',        //0 没有错误发生，文件上传成功。
		'UPLOAD_ERR_INI_SIZE',  //1 上传的文件超过了php.ini 中 upload_max_filesize 选项限制的值。
		'UPLOAD_ERR_FORM_SIZE', //2 上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值。
		'UPLOAD_ERR_PARTIAL',   //3 文件只有部分被上传。
		'UPLOAD_ERR_NO_FILE',   //4 没有文件被上传。
		'UPLOAD_UNKNOW',		//5 未定义
		'UPLOAD_ERR_NO_TMP_DIR',//6 找不到临时文件夹。php 4.3.10 和 php 5.0.3 引进。
		'UPLOAD_ERR_CANT_WRITE',//7 文件写入失败。php 5.1.0 引进。
	);
	return $error.':'.$status[$error];
}

//拍照上传
function updload_ios_check($fileName,$in){
	if(!is_wap()) return $fileName;
	if($fileName == "image.jpg" || $fileName == "image.jpeg"){
		return date('YmdHis',time()).'-'.rand_string(4,1).'.jpg';
	}
	return $fileName;
}

/**
 * 文件上传处理。大文件支持分片上传
 * upload('file','D:/www/');
 *
 * post上传：base64Upload=1;file=base64str;name=filename
 */
function upload($path,$tempPath,$repeatAction='replace'){
	global $in;
	$fileInput = 'file';
	$fileName = "";
	if (!empty($_FILES)) {
		$fileName = iconv_system(path_clear_name($_FILES[$fileInput]["name"]));
		$uploadFile = $_FILES[$fileInput]["tmp_name"];
		if(!$uploadFile && $_FILES[$fileInput]['error']>0){
			show_json(check_upload($_FILES[$fileInput]['error']),false);
		}
		$fileName = updload_ios_check($fileName,$in);//拍照上传
	}else if (isset($in["name"])) {
		$fileName = iconv_system(path_clear_name($in["name"]));
		$uploadFile = "php://input";
		if(isset($in['base64Upload'])){
			$uploadFile = "base64"; 
		}
		$fileName = updload_ios_check($fileName,$in);//拍照上传
	}else if( isset($in["check_md5"]) ) {//断点续传检测
		$fileName = iconv_system(path_clear_name($in["name"]));
		$savePath = get_filename_auto($path.$fileName,""); //自动重命名
		return upload_chunk("--check_md5--",$tempPath,$savePath);
	}else{
		show_json('param error',false);
	}

	//正常上传
	$savePath = get_filename_auto($path.$fileName,"",$repeatAction); //自动重命名
	Hook::trigger('uploadFileBefore',$savePath);
	if($savePath === false){
		show_json('upload_exist_skip',false);
	}

	$chunks = isset($in["chunks"]) ? intval($in["chunks"]) : 1;
	if ($chunks > 1) {//并发上传，不一定有前后顺序
		return upload_chunk($uploadFile,$tempPath,$savePath);
	}
	if(kod_move_uploaded_file($uploadFile,$savePath)){
		if( isset($in['size']) && filesize($savePath) != $in['size'] ){
			unlink($savePath);
			show_json('move_error',false);
		}
		Hook::trigger('uploadFileAfter',$savePath);
		show_json('upload_success',true,iconv_app(_DIR_OUT($savePath)));
	}else {
		show_json('move_error',false);
	}
}

function upload_chunk($uploadFile,$tempPath,$savePath){
	global $in;
	$chunk = isset($in["chunk"]) ? intval($in["chunk"]) : 0;
	$chunks = isset($in["chunks"]) ? intval($in["chunks"]) : 1;
	$check_md5 = isset($in["check_md5"]) ? $in["check_md5"] : false;

	//if(mt_rand(0, 100) < 50) die("server error".$chunk); //分片失败重传
	//文件分块检测是否已上传，已上传则忽略；断点续传
	if($check_md5 !== false){
		$chunk_file_pre = $tempPath.md5($savePath).'.part';
		$chunk_file = $chunk_file_pre.$chunk;
		if( file_exists($chunk_file) && md5_file($chunk_file) == $check_md5){
			$arr = array();
			for($index = 0; $index<$chunks; $index++ ){
				if(file_exists($chunk_file_pre.$index)){
					$arr['part_'.$index] = md5_file($chunk_file_pre.$index);
				}
			}
			show_json('success',true,$arr);
		}else{
			show_json('not_exists',false);
		}
	}

	$tempFilePre = $tempPath.md5($savePath).'.part';
	if(kod_move_uploaded_file($uploadFile, $tempFilePre.$chunk)){
		$done = true;
	
		//优化分片存在判断；当分片太多时,每个分片都全量判断,会占用服务器资源及影响上传速度;
		$fromIndex    = 0;
		$existMaxFile = $tempFilePre.'.max';//记录连续存在文件的最大序号
		if(file_exists($existMaxFile)){
			$fromIndex = intval(file_get_contents($fromIndex));
		}else{
			file_put_contents($existMaxFile,$fromIndex);
		}
		for($index = $fromIndex; $index<$chunks; $index++ ){
			if (!file_exists($tempFilePre.$index)) {
				if($index-1 > $fromIndex){
					file_put_contents($existMaxFile,$index-1);
				}
				$done = false;
				break;
			}
		}
		
		if (!$done){
			show_json('upload_success',true);
		}else{
			$savePathTemp = $tempFilePre.mtime();
			if(!$out = fopen($savePathTemp, "wb")){
				show_json('no_permission_write',false);
			}
			if (!flock($out, LOCK_EX)) {
				show_json('lock dist move error',false);
			}else{
				for( $index = 0; $index < $chunks; $index++ ) {
					$chunk_file = $tempFilePre.$index;
					if (!$fp_in = @fopen($chunk_file,"rb")){//并发情况下另一个访问时文件已删除
						flock($out, LOCK_UN);
						fclose($out);
						unlink($savePathTemp);
						show_json('open chunk error! cur='.$chunk.';index='.$index,false);
					}
					while (!feof($fp_in)) {
						fwrite($out, fread($fp_in,1024*200));
					}
					fclose($fp_in);
					unlink($chunk_file);
				}
				flock($out, LOCK_UN);
				fclose($out);
			}
		}
		unlink($existMaxFile);
		$res = rename($savePathTemp,$savePath);
		if( isset($in['size']) && filesize($savePath) != $in['size'] ){
			unlink($savePath);
			show_json('move_error',false);
		}
		if(!$res){
			unlink($savePath);
			$res = rename($savePathTemp,$savePath);
			if(!$res){
				show_json('move(rename) dist file error!',false);
			}
		}
		Hook::trigger('uploadFileAfter',$savePath);
		show_json('upload_success',true,iconv_app(_DIR_OUT($savePath)));
	}else {
		show_json('move_error',false);
	}
}


/**
 * 写日志
 * @param string $log   日志信息
 * @param string $type  日志类型 [system|app|...]
 * @param string $level 日志级别
 * @return boolean
 */
function write_log($log, $type = 'default', $level = 'log'){
	if(!defined('LOG_PATH')){
		return;
	}
	list($usec, $sec) = explode(' ', microtime());
	$now_time = date('[H:i:s.').substr($usec,2,3).'] ';
	$target   = LOG_PATH . strtolower($type) . '/';
	mk_dir($target);
	if (!path_writeable($target)){
		exit('path can not write!');
	}
	$ext = '.php';//.php .log;
	$target .= date('Y_m_d').'__'.$level.$ext;
	//检测日志文件大小, 超过配置大小则重命名
	if (file_exists($target) && get_filesize($target) >= 1024*1024*10) {
		$fileName = substr(basename($target),0,strrpos(basename($target),$ext)).date('H:i:s').$ext;
		rename($target, dirname($target) .'/'. $fileName);
	}
	if(!file_exists($target)){
		error_log("<?php exit;?>\n", 3,$target);
	}

	if(is_object($log) || is_array($log)){
		$log = json_encode_force($log);
	}
	clearstatcache();
	return error_log("$now_time $log\n", 3, $target);
}