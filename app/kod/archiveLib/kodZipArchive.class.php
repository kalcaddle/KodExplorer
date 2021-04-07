<?php
/*
* @link http://kodcloud.com/
* @author warlee | e-mail:kodcloud@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kodcloud.com/tools/license/license.txt
*/

// ZipArchive 解压缩
class kodZipArchive{
	static $listCache = array();
    static function support($type=''){
        $result = false; 
        if($type == 'extract' && defined("ZIP_ARCHIVE_LOCAL")){// 只允许创建压缩文件用系统调用
            $result = true;
        }
		if(!class_exists('ZipArchive')){
			$result = false;
		}
		return $result;
    }
    static function listContent($file){
		$file_hash = hash_path($file);
		if(isset(self::$listCache[$file_hash])){
			return self::$listCache[$file_hash];
		}
		$zip = new ZipArchive(); 
        $zip->open($file);
        $count = $zip->numFiles;
        for ($i = 0; $i < $count; $i++) {
			$entry    = $zip->statIndex($i);
            $filename = str_replace('\\', '/', $entry['name']);
            $result[] = array(
                'filename'          => $entry['name'], 
                'stored_filename'   => $entry['name'], 
                'size'              => $entry['size'],
                'compressed_size'   => $entry['comp_size'], 
                'mtime'             => $entry['mtime'], 
				'index'             => $i,
				'folder'			=> (substr($entry['name'], -1, 1) == '/'),
                'crc'               => $entry['crc']
            );
		}
		self::$listCache[$file_hash] = $result;
        return $result;
    }
    /**
	 * [extract description]
	 * @param  [type] $file [archive file]
	 * @param  [type] $dest [extract to folder]
	 * @param  string $part [archive file content]
	 * @return [type]       [array]
	 */
	static function extract($file,$dest,$partName=false) {
	    $dest_before = $dest;
		$dest = TEMP_PATH.'archivePreview/'.md5(rand_string(40).time()).'/';
		mk_dir($dest);touch(TEMP_PATH.'archivePreview/index.html');
		
	    $zip = new ZipArchive();
        if(!$zip->open($file)){
            return array('code'=>false,'data'=>'Can not open zip file!');
        }
        
        if($partName === false){
			$result = $zip->extractTo($dest);
		}else{
			if(!is_array($partName)){
				$partName = array($partName);
			}
			$matchFiles = $partName;
			//解压文件夹
			if(substr($partName[0], -1, 1) == '/'){
				$matchFiles = array();
				$list = self::listContent($file);
				foreach ($list as $item) {
					if ( strpos($item['filename'],$partName[0]) === 0 ) {
						$matchFiles[] = $item['filename'];
					}
				}
			}
			$result = $zip->extractTo($dest,$matchFiles);
		}
		$zip->close();
        
        //子目录解压移除多余层级目录
		if( is_array(c) ){
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
        return array('code'=>$result,'data'=>$result);
    }
    
    /**
	 * [create description]
	 * @param  [type]  $file   [creat file to]
	 * @param  [type]  $files  [array from]
	 * @return [type]          [description]
	 */
    static function create($file,$files) {
        $zip = new ZipArchive();
        if(!$zip->open($file, ZipArchive::CREATE)){
            return false;//Can not open(create) zip file!'
		}
		foreach ($files as $key =>$val) {
			$val = str_replace(array('//','\\'),'/',$val);
			$removePathPre = _DIR_CLEAR(get_path_father($val));
			$list = array($val);
			if(is_dir($val)){
				$list = dir_list($val);
				$list[] = $val;
			}
			foreach ($list as $item) {
				$addName = zip_pre_name(str_replace($removePathPre,'',$item));
				if(is_dir($item)){
					$result = $zip->addEmptyDir($addName);
				}else{
					$result = $zip->addFile($item,$addName);
				}
			}
		}
		$zip->close();
		return $result;
	}
}