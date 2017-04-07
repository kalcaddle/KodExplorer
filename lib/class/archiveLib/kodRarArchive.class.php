<?php
/*
* @link http://www.kalcaddle.com/
* @author warlee | e-mail:kalcaddle@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kalcaddle.com/tools/licenses/license.txt
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
 */


class kodRarArchive {
	static function bin($type){
		$file = dirname(__FILE__).'/bin/'.$type;
		$file = str_replace('\\','/',$file);
		if(PHP_OS == "Darwin"){
			$file .= '_mac';
		}
		if(PATH_SEPARATOR == ':') {
			@chmod($file,0777);
		}
		return '"'.$file.'"';
	}
	static function run($cmd){
		if (strtoupper(substr(PHP_OS, 0,3)) != 'WIN') {//linux
			$cmd = "export LANG='en_US.UTF-8' && ".$cmd;
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
	static function extract($file,$dest,$ext,$part_name=false,$passwd=false) {
		$dest_before = $dest;
		$dest = TEMP_PATH.'others/'.md5(rand_string(40).time()).'/';
		mk_dir($dest);touch(TEMP_PATH.'others/index.html');

		$passwd  = $passwd ?" -p".escape_shell($passwd).' ':'';
		if($ext == 'rar'){
			$param = ' -y '.$passwd.escape_shell($file).' '.escape_shell($dest).' ';
			if($part_name === false){
				$command = self::bin('rar').' x'.$param;
			}else if(is_array($part_name)){
				$command = self::bin('rar').' x'.$param.escape_shell($part_name[0]);
			}else{
				$command = self::bin('rar').' e'.$param.escape_shell($part_name);
			}
		}else{
			if($ext == 'bz2'){
				$ext = 'bzip2';
			}
			$param = ' -y -t'.escape_shell($ext).$passwd.' -o'.escape_shell($dest).' '.escape_shell($file).' ';
			if($part_name === false){
				$command = self::bin('7z').' x'.$param;
			}else if(is_array($part_name)){
				$command = self::bin('7z').' x'.$param.escape_shell($part_name[0]);
			}else{
				$command = self::bin('7z').' e'.$param.escape_shell($part_name);
			}
		}
		$result = self::run($command);
		//pr($result);exit;
		if(!$result['code']){
			return $result;
		}

		//子目录解压移除多余层级目录
		if( is_array($part_name) ){
			$the_path = trim(str_replace("\\",'/',$part_name[0]),'/');
			$path_group = explode('/',$the_path);
			
			//一级目录解压不用移动
			if(count($path_group) > 1){
				move_path($dest.$part_name[0],$dest.get_path_this($the_path));
				del_dir($dest.$path_group[0]);
			}else{
				$dest_before = get_path_father($dest_before);
			}
		}
		
		//扩展名处理;文件名重命名处理
		recursion_dir($dest,$dirs,$files,-1,0);
		foreach($dirs as $f){
			$item_path = str_replace(array($dest,"\\"),array('','/'),$f);
			$item_path = unzip_pre_name($item_path);
			$from = $dest.get_path_father($item_path).get_path_this($f);
			if(strstr($item_path,'/') == false){
				$from = $dest.get_path_this($f);
			}
			//echo $from.'==><br/>'.$dest.$item_path.'<hr/>';
			if($dest.$item_path != $from){
				@rename($from,$dest.$item_path);
			}
		}
		
		foreach($files as $f){
			$item_path = str_replace(array($dest,"\\"),array('','/'),$f);
			$item_path = unzip_pre_name($item_path);
			$from = $dest.get_path_father($item_path).get_path_this($f);
			if(strstr($item_path,'/') == false){
				$from = $dest.get_path_this($f);
			}
			if($dest.$item_path != $from){
				@rename($from,$dest.$item_path);
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
		$command = self::bin('rar').' v '.escape_shell($file);
		$result = self::run($command);
		if(!$result['code']){
			return $result;
		}

		preg_match('/-----------\n([\d\D]*)\n--------------/i', $result['data'], $match);
		if(!is_array($match) || strlen($match[1]) < 10){
			return array('code'=>false,'data'=>'Match Nothing Content!');
		}

		//windows:movie\FLV Video.flv
		//        567385   513467  90% 18-10-16 03:46  .D.....
		//linux:test\32486963.png
		// 93691  82643  88% 09-12-16 02:20 drw-r--r-- 396CC62C m3g 2.9
		$reg = '/(.*)\n\s+(\d+)\s+(\d+)\s+\d+% (\d{2}-\d{2}-\d{2} \d{2}:\d{2})\s+(.*)\s+/i';
		preg_match_all($reg,$match[1]."\n",$match_item);
		if( !is_array($match_item) || 
			count($match_item) != 6 ||
			count($match_item[0]) == 0
			){
			return array('code'=>false,'data'=>'Match Nothing Item!');
		}
		
		$item_arr = array();
		for ($i = 0; $i < count($match_item[0]); $i++) {
			$mode = strtoupper($match_item[5][$i]);
			$is_folder = substr($mode,0,1) == 'D' || substr($mode,1,1) == 'D';
			$item_arr[] = array(
				'mtime'		=> strtotime($match_item[4][$i]),
				'size'		=> $match_item[3][$i],
				'z_size'	=> $match_item[2][$i],
				'filename'	=> trim($match_item[1][$i]),
				'index'		=> $i,
				'folder'	=> $is_folder
			);
		}
		//debug_out($result,$match,$match_item,$item_arr);
		return array('code'=>true,'data'=>$item_arr);;
	}
	static function listContent7z($file) {
		$command = self::bin('7z').' l '.escape_shell($file);
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
		preg_match_all($reg,$match[1],$match_item);
		if( !is_array($match_item) || 
			count($match_item) != 6 ||
			count($match_item[0]) == 0
			){
			return array('code'=>false,'data'=>'Match Nothing Item!');
		}
		
		$item_arr = array();
		for ($i = 0; $i < count($match_item[0]); $i++) {
			 $item_arr[] = array(
				'mtime'		=> strtotime($match_item[1][$i]),
				'size'		=> $match_item[3][$i],
				'z_size'	=> $match_item[4][$i],
				'filename'	=> trim($match_item[5][$i]),
				'index'		=> $i,
				'folder'	=> substr($match_item[2][$i],0,1) == 'D'
			 );
		}
		//debug_out($result,$match,$match_item,$item_arr);
		return array('code'=>true,'data'=>$item_arr);;
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
function escape_shell($param){
	//$param = escapeshellarg($param);
	if (strtoupper(substr(PHP_OS, 0,3)) != 'WIN') {//linux
		$param = str_replace('!','\!',$param);
	}
	$param = rtrim($param,"\\");
	return '"'.str_replace(array('"',"\0"),'_',$param).'"';
}
