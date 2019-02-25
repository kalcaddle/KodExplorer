<?php
/*
* @link http://kodcloud.com/
* @author warlee | e-mail:kodcloud@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kodcloud.com/tools/license/license.txt
*/


/**
 * 7zip 解压缩: 7z,xz,bz2(bzip2),gz(gzip),tar,zip
 * 7zip 仅解压: 7z,xz,,bz2(bzip2),gz(gzip),tar,zip,arj,cab,chm,cpio,deb,dmg,
 * 				fat,hfs,iso,lzh,lzma,mbr,msi,nsis,ntfs,,rpm,udf,vhd,wim,xar,z
 * 
 * rar 仅支持rar文件解压缩 
 * 目前使用解压功能：7z,bz2,zx,z,ios,arj;压缩功能暂停
 * ------------
 * 7zip命令行:http://blog.csdn.net/earbao/article/details/51382534
 * rar命令行 :http://www.cnblogs.com/fetty/p/4769279.html
 * 7za命令行 :https://www.mankier.com/1/7za //当rar解压失败时尝试调用系统内置7za解压; 支持大于60G文件
 */


class kodRarArchive {
	static function bin($type){
		$file = dirname(__FILE__).'/bin/'.$type;
		$file = str_replace('\\','/',$file);
		if(PHP_OS == "Darwin"){//mac 
			$file = PLUGIN_DIR.'/zipView/lib/bin/'.$type.'_mac';
		}
		if(!file_exists($file)){
			show_json('bin file not exists!',false);
		}
		if(PATH_SEPARATOR == ':') {
			@chmod($file,0777);
		}
		return $file;
	}
	static function run($cmd){
		if (strtoupper(substr(PHP_OS, 0,3)) != 'WIN') {//linux
			$cmd = "export LANG='en_US.UTF-8' && ".$cmd;
			@setlocale(LC_ALL,'en_US.UTF-8');
			@putenv('LC_ALL=en_US.UTF-8');
		}
		$result = shell_exec($cmd);
		//debug_out($cmd,$result);
		if(!strstr($result,'Copyright')){
			return array('code'=>false,'data'=>'[shell_exec error!] No Result!');
		}
		return array('code'=>true,'data'=>$result);
	}

	/**
	 * 防止通过构造文件名，进行shell注入 
	 */
	static function extract($file,$dest,$ext,$partName=false,$passwd=false) {
		$dest_before = $dest;
		$dest = TEMP_PATH.'archivePreview/'.md5(rand_string(40).time()).'/';
		mk_dir($dest);touch(TEMP_PATH.'archivePreview/index.html');

		$passwd  = $passwd ?" -p".escapeShell($passwd).' ':'';
		if($ext == 'rar'){
			$param = ' -y '.$passwd.escapeShell($file).' '.escapeShell($dest).' ';
			if($partName === false){
				$command = self::bin('rar').' x'.$param;
			}else if(is_array($partName)){
				$command = self::bin('rar').' x'.$param.escapeShell($partName[0]);
			}else{
				$command = self::bin('rar').' e'.$param.escapeShell($partName);
			}
		}else{
			if($ext == 'bz2'){
				$ext = 'bzip2';
			}
			$param = ' -y -t'.escapeShell($ext).$passwd.' -o'.escapeShell($dest).' '.escapeShell($file).' ';
			if($partName === false){
				$command = self::bin('7z').' x'.$param;
			}else if(is_array($partName)){
				$command = self::bin('7z').' x'.$param.escapeShell($partName[0]);
			}else{
				$command = self::bin('7z').' e'.$param.escapeShell($partName);
			}
		}
		$result = self::run($command);

        //7za 兼容 rar解压大文件
		if(strstr($result['data'],'is not RAR archive') && shell_exec('7za')){
		    $param = ' -y -o'.escapeShell($dest).' '.escapeShell($file).' ';
			if($partName === false){
				$command = '7za  x'.$param;
			}else if(is_array($partName)){
				$command = '7za  x'.$param.escapeShell($partName[0]);
			}else{
				$command = '7za  e'.$param.escapeShell($partName);
			}
			$result = self::run($command);
		}
		
		//echo "<pre>";var_dump($result,$command);exit;
		if(!$result['code']){
			return $result;
		}

		//子目录解压移除多余层级目录
		if( is_array($partName) ){
			$thePath = trim(str_replace("\\",'/',$partName[0]),'/');
			$pathGroup = explode('/',$thePath);
			//一级目录解压不用移动
			if(count($pathGroup) > 1){
				move_path($dest.$partName[0],$dest.get_path_this($thePath));
				del_dir($dest.$pathGroup[0]);
			}else{
				$dest_before = get_path_father($dest_before);
			}
		}
		
		//扩展名处理;文件名重命名处理
		$arr = dir_list($dest);
		foreach($arr as $f){
			$itemPath = str_replace(array($dest,"\\"),array('','/'),$f);
			$itemPath = unzip_pre_name($itemPath);
			$from = $dest.get_path_father($itemPath).get_path_this($f);
			if(strstr($itemPath,'/') == false){
				$from = $dest.get_path_this($f);
			}
			if($dest.$itemPath != $from){
				@rename($from,$dest.$itemPath);
			}
		}
		move_path($dest,$dest_before);
		del_dir(rtrim($dest,'/'));
		return $result;
	}
	
	static function listContent($file) {
		if(get_path_ext($file) == 'rar'){
			return self::listContentRar($file);
		}else{
			return self::listContent7z($file);
		}
	}

	static function listContentRar($file) {
		$command = self::bin('rar').' v '.escapeShell($file);
		$result = self::run($command);	
		//7za 兼容 rar解压大文件
		if(strstr($result['data'],'is not RAR archive') && shell_exec('7za')){
			return self::listContent7z($file,'7za l ');
		}
		if(!$result['code']){
			return $result;
		}

		preg_match('/--------  ----\n([\d\D]*)\n-----------/i', $result['data'], $match);
		if(!is_array($match) || strlen($match[1]) < 10){
			return array('code'=>false,'data'=>'Match Nothing Content!');
		}

		//windows  :...D...   93691   82633  88%  2016-12-09 02:20  396CC62C  000/a/32486963.png
		//linux:   :-rwxr-xr-x   93691   82643  88%  2016-12-09 02:20  396CC62C  000/a/32486963.png
		$reg = '/\s*([-\.\w]+)\s+(\d+)\s+(\d+)\s+\d+%\s+(\d{2,4}-\d{2}-\d{2} \d{2}:\d{2})\s+\w+\s+(.*)\n/i';
		preg_match_all($reg,$match[1]."\n",$matchItem);
		if( !is_array($matchItem) || 
			count($matchItem) != 6 ||
			count($matchItem[0]) == 0
			){
			return array('code'=>false,'data'=>'Match Nothing Item!');
		}
		
		$itemArr = array();
		for ($i = 0; $i < count($matchItem[0]); $i++) {
			$mode = strtoupper($matchItem[1][$i]);
			$isFolder = substr($mode,0,1) == 'D' || substr($mode,3,1) == 'D';
			$itemArr[] = array(
				'mtime'		=> strtotime($matchItem[4][$i]),
				'size'		=> $matchItem[2][$i],
				'z_size'	=> $matchItem[3][$i],
				'filename'	=> trim($matchItem[5][$i]),
				'index'		=> $i,
				'folder'	=> intval($isFolder)
			);
		}
		//debug_out($result,$match,$matchItem,$itemArr);
		return array('code'=>true,'data'=>$itemArr);
	}
	static function listContent7z($file,$bin=false) {
		$command = self::bin('7z').' l '.escapeShell($file);
		if($bin){
			$command = $bin.escapeShell($file);
		}
		$result = self::run($command);
		if(!$result['code']){
			return $result;
		}
		
		preg_match('/-----------\n([\d\D]*)\n--------------/i', $result['data'], $match);
		if(!is_array($match) || strlen($match[1]) < 10){
			return array('code'=>false,'data'=>'Match Nothing Content!');
		}

		//2017-03-08 11:22:16 .....    10727     9385  000\test11.docx
		//2017-03-09 13:43:10 ....A     6254         000\111.md
		$reg = '/(\d{4}-\d{2}-\d{2} \d{2}:\d{2}:\d{2}) (D?\.+A?)\s+(\d+)\s+(\d*)\s+(.*)/i';
		preg_match_all($reg,$match[1],$matchItem);
		if( !is_array($matchItem) || 
			count($matchItem) != 6 ||
			count($matchItem[0]) == 0
			){
			return array('code'=>false,'data'=>'Match Nothing Item!');
		}
		
		$itemArr = array();
		for ($i = 0; $i < count($matchItem[0]); $i++) {
			 $itemArr[] = array(
				'mtime'		=> strtotime($matchItem[1][$i]),
				'size'		=> $matchItem[3][$i],
				'z_size'	=> $matchItem[4][$i],
				'filename'	=> trim($matchItem[5][$i]),
				'index'		=> $i,
				'folder'	=> substr($matchItem[2][$i],0,1) == 'D'
			 );
		}
		//debug_out($result,$match,$matchItem,$itemArr);
		return array('code'=>true,'data'=>$itemArr);;
	}
	
	/**
	 * [create description]
	 * @param  [type]  $file   [creat file to]
	 * @param  [type]  $ext    [ext:7z,xz,bz2,gzip,tar,zip]
	 * @param  [type]  $files  [array from]
	 * @param  boolean $passwd [password]
	 * @return [type]          [description]
	 */
	// static function create($file,$files,$ext,$passwd=false) {
	// 	$passwd  = $passwd? " -p".$passwd.' ':"";
	// 	$spearat = (PATH_SEPARATOR != ':')?("&& ".substr($files,0,2)." "):"";//win=>; linux=>:
	// 	$command = 'cd "'.$files.'" '.$spearat.' &&';//cd到所在文件夹；
	// 	$command = $command.self::bin().' a -r -y -t'.$ext.' '.$passwd.' "'.$file.'" *';
	// 	return self::run($command);
	// }
}

// 不允许双引号
function escapeShell($param){
	return escapeshellarg($param);
	//$param = escapeshellarg($param);
	$os = strtoupper(substr(PHP_OS, 0,3));
	if ( $os != 'WIN' && $os != 'DAR') {//linux
		$param = str_replace('!','\!',$param);
	}
	$param = rtrim($param,"\\");
	return '"'.str_replace(array('"',"\0",'`'),'_',$param).'"';
}
