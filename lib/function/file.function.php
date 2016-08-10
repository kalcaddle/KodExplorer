<?php
/*
* @link http://www.kalcaddle.com/
* @author warlee | e-mail:kalcaddle@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kalcaddle.com/tools/licenses/license.txt
*/

/**
 * 系统函数：				filesize(),file_exists(),pathinfo(),rname(),unlink(),filemtime(),is_readable(),is_wrieteable();
 * 获取文件详细信息		file_info($file_name)
 * 获取文件夹详细信息		path_info($dir)
 * 递归获取文件夹信息		path_info_more($dir,&$file_num=0,&$path_num=0,&$size=0)
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
 * 文件下载到服务器		file_download_this($from, $file_name)
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
	$result = iconv($config['system_charset'], $config['app_charset'], $str);
	if (strlen($result)==0) {
		$result = $str;
	}
	return $result;
}
function iconv_system($str){
	global $config;
	$result = iconv($config['app_charset'], $config['system_charset'], $str);
	if (strlen($result)==0) {
		$result = $str;
	}
	return $result;
}

function get_filesize($path){
	@$ret = abs(sprintf("%u",filesize($path))); 
	return (int)$ret;
}
/**
 * 获取文件详细信息
 * 文件名从程序编码转换成系统编码,传入utf8，系统函数需要为gbk
 */
function file_info($path){
	$name = get_path_this($path);
	$size = get_filesize($path);
	$info = array(
		'name'			=> iconv_app($name),
		'path'			=> iconv_app(get_path_father($path)),
		'ext'			=> get_path_ext($path),
		'type' 			=> 'file',
		'mode'			=> get_mode($path),
		'atime'			=> fileatime($path), //最后访问时间
		'ctime'			=> filectime($path), //创建时间
		'mtime'			=> filemtime($path), //最后修改时间
		'is_readable'	=> intval(is_readable($path)),
		'is_writeable'	=> intval(is_writeable($path)),
		'size'			=> $size,
		'size_friendly'	=> size_format($size, 2)
	);
	return $info;
}
/**
 * 获取文件夹细信息
 */
function folder_info($path){
	$info = array(
		'name'			=> iconv_app(get_path_this($path)),
		'path'			=> iconv_app(get_path_father($path)),
		'type' 			=> 'folder',
		'mode'			=> get_mode($path),
		'atime'			=> fileatime($path), //访问时间
		'ctime'			=> filectime($path), //创建时间
		'mtime'			=> filemtime($path), //最后修改时间		
		'is_readable'	=> intval(is_readable($path)),
		'is_writeable'	=> intval(is_writeable($path))
	);
	return $info;
}


/**
 * 获取一个路径(文件夹&文件) 当前文件[夹]名
 * test/11/ ==>11 test/1.c  ==>1.c
 */
function get_path_this($path){
    $path = str_replace('\\','/', rtrim(trim($path),'/'));
    return substr($path,strrpos($path,'/')+1);
} 
/**
 * 获取一个路径(文件夹&文件) 父目录
 * /test/11/==>/test/   /test/1.c ==>/www/test/
 */
function get_path_father($path){
    $path = str_replace('\\','/', rtrim(trim($path),'/'));
    return substr($path, 0, strrpos($path,'/')+1);
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
    return $ext;
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
 * 文件或目录是否可写 is_writeable();
 * 兼容性处理：挂载目录755 bug
 */
function path_writable($path){
    if (is_dir($path)) {
        $file = $path.'/writeable_test_'.time().'.txt';
		@touch($file);
		if(file_exists($file)){
		    @unlink($file);
		    return true;
		}
		return false;
    }else if(file_exists($path)){
        $fp = @fopen($path,'a+');
        if($fp){
            fclose($fp);
            return true;
        }
        fclose($fp);
        return false;
    }
    return false;//不存在
}

/**
 * 获取文件夹详细信息,文件夹属性时调用，包含子文件夹数量，文件数量，总大小
 */
function path_info($path){
	//if (!is_dir($path)) return false;
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
function _path_info_more($dir, &$file_num = 0, &$path_num = 0, &$size = 0){
	if (!$dh = opendir($dir)) return false;
	while (($file = readdir($dh)) !== false) {
		if ($file != "." && $file != "..") {
			$fullpath = $dir . "/" . $file;
			if (!is_dir($fullpath)) {
				$file_num ++;
				$size += get_filesize($fullpath);
			} else {
				_path_info_more($fullpath, $file_num, $path_num, $size);
				$path_num ++;
			} 
		} 
	} 
	closedir($dh);
	$pathinfo['file_num'] = $file_num;
	$pathinfo['folder_num'] = $path_num;
	$pathinfo['size'] = $size;
	$pathinfo['size_friendly'] = size_format($size);
	return $pathinfo;
} 


/**
 * 获取多选文件信息,包含子文件夹数量，文件数量，总大小，父目录权限
 */
function path_info_muti($list,$time_type){
	if (count($list) == 1) {
		if ($list[0]['type']=="folder"){
	        return path_info($list[0]['path'],$time_type);
	    }else{
	        return file_info($list[0]['path'],$time_type);
	    }
	}
	$pathinfo = array(
		'file_num'		=> 0,
		'folder_num'	=> 0,
		'size'			=> 0,
		'size_friendly'	=> '',
		'father_name'	=> '',
		'mod'			=> ''
	);
	foreach ($list as $val){
		if ($val['type'] == 'folder') {
			$pathinfo['folder_num'] ++;
			$temp = path_info($val['path']);
			$pathinfo['folder_num']	+= $temp['folder_num'];
			$pathinfo['file_num']	+= $temp['file_num'];
			$pathinfo['size'] 		+= $temp['size'];
		}else{
			$pathinfo['file_num']++;
			$pathinfo['size'] += get_filesize($val['path']);
		}
	}
	$pathinfo['size_friendly'] = size_format($pathinfo['size']);
	$father_name = get_path_father($list[0]['path']);
	$pathinfo['mode'] = get_mode($father_name);
	return $pathinfo;
}

/** 
 * 获取文件夹下列表信息
 * dir 包含结尾/   d:/wwwroot/test/
 * 传入需要读取的文件夹路径,为程序编码
 */
function path_list($dir,$list_file=true,$check_children=false){
	$dir = rtrim($dir,'/').'/';
	if (!is_dir($dir) || !($dh = opendir($dir))){
		return array('folderlist'=>array(),'filelist'=>array());
	}
	$folderlist = array();$filelist = array();//文件夹与文件
	while (($file = readdir($dh)) !== false) {
		if ($file != "." && $file != ".." && $file != ".svn" ) {
			$fullpath = $dir . $file;
			if (is_dir($fullpath)) {
				$info = folder_info($fullpath);
				if($check_children){
					$info['isParent'] = path_haschildren($fullpath,$list_file);
				}
				$folderlist[] = $info;
			} else if($list_file) {//是否列出文件
				$info = file_info($fullpath);
				if($check_children) $info['isParent'] = false;
				$filelist[] = $info;
			}
		}
	}
	closedir($dh);
	return array('folderlist' => $folderlist,'filelist' => $filelist);
}

// 判断文件夹是否含有子内容【区分为文件或者只筛选文件夹才算】
function path_haschildren($dir,$check_file=false){
	$dir = rtrim($dir,'/').'/';
	if (!$dh = @opendir($dir)) return false;
	while (($file = readdir($dh)) !== false){
		if ($file != "." && $file != "..") {
			$fullpath = $dir.$file;
			if ($check_file) {//有子目录或者文件都说明有子内容
				if(is_file($fullpath) || is_dir($fullpath.'/')){
					return true;
				}
			}else{//只检查有没有文件
				@$ret =(is_dir($fullpath.'/'));
				return (bool)$ret;
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
	if (!$dh = opendir($dir)) return false;
	while (($file = readdir($dh)) !== false) {
		if ($file != "." && $file != "..") {
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

	if ($source == substr($dest,0,strlen($source))) return;//防止父文件夹拷贝到子文件夹，无限递归
	$result = false;
	if (is_file($source)) {
		if ($dest[strlen($dest)-1] == '/') {
			$__dest = $dest . "/" . basename($source);
		} else {
			$__dest = $dest;
		} 
		$result = copy($source, $__dest); 
		chmod($__dest, 0777);
	}elseif (is_dir($source)) {
		if ($dest[strlen($dest)-1] == '/') {
			$dest = $dest . basename($source);		
		}
		if (!is_dir($dest)) {
			mkdir($dest,0777);
		}
		if (!$dh = opendir($source)) return false;
		while (($file = readdir($dh)) !== false) {
			if ($file != "." && $file != "..") {
				if (!is_dir($source . "/" . $file)) {
					$__dest = $dest . "/" . $file;
				} else {
					$__dest = $dest . "/" . $file;
				} 
				$result = copy_dir($source . "/" . $file, $__dest);
			} 
		} 
		closedir($dh);
	}
	return $result;
}

/**
 * 创建目录
 * 
 * @param string $dir 
 * @param int $mode 
 * @return bool 
 */
function mk_dir($dir, $mode = 0777){
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
/*
 * $search 为包含的字符串 
 * is_content 表示是否搜索文件内容;默认不搜索
 * is_case  表示区分大小写,默认不区分
 */
function path_search($path,$search,$is_content=false,$file_ext='',$is_case=false){
	$ext_arr=explode("|",$file_ext);
	recursion_dir($path,$dirs,$files,-1,0);
	$strpos = 'stripos';//是否区分大小写
	if ($is_case) $strpos = 'strpos';
	
	$filelist = array();
	$folderlist = array();
	foreach($files as $f){
		$ext = get_path_ext($f);
		$path_this = get_path_this($f);
		if ($file_ext !='' && !in_array($ext,$ext_arr)) continue;//文件类型不在用户限定内
		if ($strpos($path_this,$search) !== false){//搜索文件名;搜到就返回；搜不到继续
			$filelist[] = file_info($f);
			continue;
		}
		if ($is_content && is_file($f)){
			$fp = fopen($f, "r");
			$content = @fread($fp,get_filesize($f));
			fclose($fp);
			if ($strpos($content,iconv_app($search)) !== false){
				$filelist[] = file_info($f);
			}
		}
	}
	if ($file_ext == '') {//没限定扩展名则才搜索文件夹
		foreach($dirs as $f){
			$path_this = get_path_this($f);
			if ($strpos($path_this,$search) !== false){
				$folderlist[]= array(
					'name'  => iconv_app(get_path_this($f)),
					'path'  => iconv_app(get_path_father($f))			
				);
			}
		}
	}
	return array('folderlist' => $folderlist,'filelist' => $filelist);
}

/**
 * 修改文件、文件夹权限
 * @param  $path 文件(夹)目录
 * @return :string
 */
function chmod_path($path,$mod){
	//$mod = 0777;//
	if (!isset($mod)) $mod = 0777;
	if (!is_dir($path)) return @chmod($path,$mod);
	if (!$dh = opendir($path)) return false;
	while (($file = readdir($dh)) !== false){
		if ($file != "." && $file != "..") {
			$fullpath = $path . '/' . $file;
			chmod($fullpath,$mod);
			return chmod_path($fullpath,$mod);
		} 
	}
	closedir($dh);
	return chmod($path,$mod);
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

/**
 * 获取扩展名的文件类型
 * 
 * @param  $ :$ext string 扩展名
 * @return :string;
 */
function ext_type($ext){
	$ext2type = array(
		'text' => array('txt','ini','log','asc','csv','tsv','vbs','bat','cmd','inc','conf','inf'),
		'code'		=> array('css','htm','html','php','js','c','cpp','h','java','cs','sql','xml'),
		'picture'	=> array('jpg','jpeg','png','gif','ico','bmp','tif','tiff','dib','rle'),
		'audio'		=> array('mp3','ogg','oga','mid','midi','ram','wav','wma','aac','ac3','aif','aiff','m3a','m4a','m4b','mka','mp1','mx3','mp2'),
		'flash'		=> array('swf'),
		'video'		=> array('rm','rmvb','flv','mkv','wmv','asf','avi','aiff','mp4','divx','dv','m4v','mov','mpeg','vob','mpg','mpv','ogm','ogv','qt'),
		'document'	=> array('doc','docx','docm','dotm','odt','pages','pdf','rtf','xls','xlsx','xlsb','xlsm','ppt','pptx','pptm','odp'),
		'rar_achieve'	=> array('rar','arj','tar','ace','gz','lzh','uue','bz2'),
		'zip_achieve'	=> array('zip','gzip','cab','tbz','tbz2'),
		'other_achieve' => array('dmg','sea','sit','sqx')
	);
	foreach ($ext2type as $type => $exts) {
		if (in_array($ext, $exts)) {
			return $type;
		} 
	} 
} 

/**
 * 输出、文件下载
 * 默认以附件方式下载；$download为false时则为输出文件
 */
function file_put_out($file,$download=false){
if (!is_file($file)) show_json('not a file!');
	if (!file_exists($file)) show_json('file not exists',false);
	if (!is_readable($file)) show_json('file not readable',false);
	
	set_time_limit(0);
	ob_clean();//清除之前所有输出缓冲 TODO
	$mime = get_file_mime(get_path_ext($file));
	if ($download || 
		(strstr($mime,'application/') && $mime!='application/x-shockwave-flash')  ) {//下载或者application则设置下载头
		$filename = get_path_this($file);//解决在IE中下载时中文乱码问题
		if( preg_match('/MSIE/',$_SERVER['HTTP_USER_AGENT']) || 
			preg_match('/Trident/',$_SERVER['HTTP_USER_AGENT'])){
			if($GLOBALS['config']['system_os']!='windows'){//win主机 ie浏览器；中文文件下载urlencode问题
				$filename = str_replace('+','%20',urlencode($filename));
			}
		}
		header("Content-Type: application/octet-stream");
		header("Content-Disposition: attachment;filename=".$filename);
	}else{
		//缓存文件
		header('Expires: '.date('D, d M Y H:i:s',time()+3600*24*20).' GMT');
		header("Cache-Pragma: public");
		header("Cache-Control: cache, must-revalidate");
		if (isset($_SERVER['If-Modified-Since']) && (strtotime($_SERVER['If-Modified-Since']) == filemtime($file))) {
	        header('HTTP/1.1 304 Not Modified');
	        header('Last-Modified: '.date('D, d M Y H:i:s', filemtime($file)).' GMT');//304
	        exit;
	    } else {
	        header('Last-Modified: '.date('D, d M Y H:i:s', filemtime($file)).' GMT', true, 200);
	    }
		$etag = '"'.md5(date('D, d M Y H:i:s',filemtime($file))).'"';
	    if (isset($_SERVER['HTTP_IF_NONE_MATCH']) && $_SERVER['HTTP_IF_NONE_MATCH'] == $etag){
			header('HTTP/1.1 304 Not Modified');
			header('Etag: '.$etag);
			exit;
		}else{
			header('Etag: '.$etag);
		}
	}
	header("X-Powered-By: kodExplorer.");
	header("Content-Type: ".$mime);
	header("Accept-Ranges: bytes");
	$size 	= get_filesize($file);
	$length = $size;           // Content length
    $start  = 0;               // Start byte
    $end    = $size - 1;       // End byte
	if (isset($_SERVER['HTTP_RANGE']) || isset($_GET['start'])) {//分段请求；视频拖拽
        $c_start = $start;
        $c_end   = $end;
        if(isset($_GET['start'])){
        	$c_start = intval($_GET['start']);
        }else{//range 
	        list(, $range) = explode('=', $_SERVER['HTTP_RANGE'], 2);
	        if (strpos($range, ',') !== false) {
	            header('HTTP/1.1 416 Requested Range Not Satisfiable');
	            header("Content-Range: bytes $start-$end/$size");
	            exit;
	        }
	        if ($range == '-') {
	            $c_start = $size - substr($range, 1);
	        }else{
	            $range  = explode('-', $range);
	            $c_start = $range[0];
	            $c_end   = (isset($range[1]) && is_numeric($range[1])) ? $range[1] : $size;
	        }
	        $c_end = ($c_end > $end) ? $end : $c_end;
	        if ($c_start > $c_end || $c_start > $size - 1 || $c_end >= $size) {
	            header('HTTP/1.1 416 Requested Range Not Satisfiable');
	            header("Content-Range: bytes $start-$end/$size");
	            exit;
	        }
	    }
        $start  = $c_start;
        $end    = $c_end;
        $length = $end - $start + 1;
        header('HTTP/1.1 206 Partial Content');
    }
    header("Content-Range: bytes $start-$end/$size");
    header("Content-Length: ".$length);

	//header("X-Sendfile: $file");exit;
	if(!$fp = @fopen($file, "rb")){
		exit;
	}
	fseek($fp, $start);
	while (!feof($fp)) {
		set_time_limit(0);
		print(fread($fp,1024*4)); //输出文件  
		flush(); 
		ob_flush();
	}
	fclose($fp);
}

/**
 * 远程文件下载到服务器
 * 支持fopen的打开都可以；支持本地、url 
 * 
 */
function file_download_this($from, $file_name){
	set_time_limit(0);
	if ($fp = @fopen ($from, "rb")){
		if(!$download_fp = @fopen($file_name, "wb")){
			return false;
		}
		while(!feof($fp)){
			if(!file_exists($file_name)){//删除目标文件；则终止下载
				fclose($download_fp);
				return false;
			}
			fwrite($download_fp, fread($fp, 1024 * 8 ), 1024 * 8);
		}
		//下载完成，重命名临时文件到目标文件
		fclose($download_fp);
		fclose($fp);
		return true;
	}else{
		return false;
	}	
}

/**
 * 获取文件(夹)权限 rwx_rwx_rwx
 */
function get_mode($file){
	$Mode = fileperms($file);
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
	return $Mode.' ('.$theMode.') ';
} 

/**
 * 获取可以上传的最大值
 * return * byte
 */
function get_post_max(){
	$upload = ini_get('upload_max_filesize');
	$upload = $upload==''?ini_get('upload_max_size'):$upload;
    $post = ini_get('post_max_size');
	$upload = intval($upload)*1024*1024;
	$post = intval($post)*1024*1024;
	return $upload<$post?$upload:$post;
}

/**
 * 文件上传处理。单个文件上传,多个分多次请求
 * 调用demo
 * upload('file','D:/www/');
 */
function upload($fileInput, $path = './'){
	global $config,$L;
	$file = $_FILES[$fileInput];
	if (!isset($file)) show_json($L['upload_error_null'],false);
	
	$file_name = iconv_system($file['name']);
	$save_path = get_filename_auto($path.$file_name);
	if(move_uploaded_file($file['tmp_name'],$save_path)){
		show_json($L['upload_success'],true,iconv_app($save_pathe));
	}else {
		show_json($L['move_error'],false);
	}
}

//分片上传处理
function upload_chunk($fileInput, $path = './',$temp_path){
	global $config,$L;
	$file = $_FILES[$fileInput];
	$chunk = isset($_REQUEST["chunk"]) ? intval($_REQUEST["chunk"]) : 0;
	$chunks = isset($_REQUEST["chunks"]) ? intval($_REQUEST["chunks"]) : 1;
	if (!isset($file)) show_json($L['upload_error_null'],false);
	$file_name = iconv_system($file['name']);

	if ($chunks>1) {//并发上传，不一定有前后顺序
		$temp_file_pre = $temp_path.md5($temp_path.$file_name).'.part';
		if (get_filesize($file['tmp_name']) ==0) {
			show_json($L['upload_success'],false,'chunk_'.$chunk.' error!');
		}
		if(move_uploaded_file($file['tmp_name'],$temp_file_pre.$chunk)){
			$done = true;
			for($index = 0; $index<$chunks; $index++ ){
			    if (!file_exists($temp_file_pre.$index)) {
			        $done = false;
			        break;
			    }
			}
			if (!$done){				
				show_json($L['upload_success'],true,'chunk_'.$chunk.' success!');
			}

			$save_path = $path.$file_name;
			$out = fopen($save_path, "wb");
			if ($done && flock($out, LOCK_EX)) {
		        for( $index = 0; $index < $chunks; $index++ ) {
		            if (!$in = fopen($temp_file_pre.$index,"rb")) break;
		            while ($buff = fread($in, 4096)) {
		                fwrite($out, $buff);
		            }
		            fclose($in);
		            unlink($temp_file_pre.$index);
		        }
		        flock($out, LOCK_UN);
			    fclose($out);
			}
			show_json($L['upload_success'],true,iconv_app($save_path));
		}else {
			show_json($L['move_error'],false);
		}
	}

	//正常上传
	$save_path = get_filename_auto($path.$file_name); //自动重命名
	if(move_uploaded_file($file['tmp_name'],$save_path)){
		show_json($L['upload_success'],true,iconv_app($save_path));
	}else {
		show_json($L['move_error'],false);
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
	$now_time = date('[y-m-d H:i:s]');
	$now_day  = date('Y_m_d');
	// 根据类型设置日志目标位置
	$target   = LOG_PATH . strtolower($type) . '/';
	mk_dir($target, 0777);
	if (! is_writable($target)) exit('path can not write!');
	switch($level){// 分级写日志
		case 'error':	$target .= 'Error_' . $now_day . '.log';break;
		case 'warning':	$target .= 'Warning_' . $now_day . '.log';break;
		case 'debug':	$target .= 'Debug_' . $now_day . '.log';break;
		case 'info':	$target .= 'Info_' . $now_day . '.log';break;
		case 'db':		$target .= 'Db_' . $now_day . '.log';break;
		default:		$target .= 'Log_' . $now_day . '.log';break;
	}
	//检测日志文件大小, 超过配置大小则重命名
	if (file_exists($target) && get_filesize($target) <= 100000) {
		$file_name = substr(basename($target),0,strrpos(basename($target),'.log')).'.log';
		rename($target, dirname($target) .'/'. $file_name);
	}
	clearstatcache();
	return error_log("$now_time $log\n", 3, $target);
}