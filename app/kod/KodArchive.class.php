<?php
/*
* @link http://kodcloud.com/
* @author warlee | e-mail:kodcloud@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kodcloud.com/tools/license/license.txt
*/


define('ARCHIVE_LIB',dirname(__FILE__).'/archiveLib/');
define('PCLZIP_TEMPORARY_DIR',TEMP_PATH);
define('PCLTAR_TEMPORARY_DIR',TEMP_PATH);
define('PCLZIP_SEPARATOR',';@@@,');//压缩多个文件，组成字符串分割
mk_dir(TEMP_PATH);

require_once ARCHIVE_LIB.'pclerror.lib.php';
require_once ARCHIVE_LIB.'pcltrace.lib.php';
require_once ARCHIVE_LIB.'pcltar.lib.php';
require_once ARCHIVE_LIB.'pclzip.class.php';
require_once ARCHIVE_LIB.'kodRarArchive.class.php';


class KodArchive {
	/**
	 * [checkIfType get the app by ext]
	 * @param  [type] $guess [check]
	 * @param  [type] $ext   [file ext]
	 * @return [type]        [description]
	 */
	static function checkIfType($ext,$appType){
		$extArray = array(
			'zip' => array('zip','ipa','apk','epub'),
			'tar' => array('tar','tar.gz','tgz','gz'),
			'rar' => array('rar','7z','xz','bz2','arj','cab','iso')
		);
		$result = in_array($ext,$extArray[$appType]);
		if( $result  &&
			($appType == 'zip' || $appType == 'tar') &&
			(!function_exists('gzopen') || !function_exists('gzinflate'))
		){
			show_tips("[Error] Can't Open; Missing zlib extensions");
		}
		
		if( $result  && $appType == 'rar' &&
			(!function_exists('shell_exec') || !strstr(shell_exec('echo "kodcloud"'),'kodcloud'))
		){
			show_tips("[Error] Can't Open; shell_exec Can't use");
		}
		return $result;
	}

	/**
	 * [listContent description]
	 * @param  [type] $file [archive file]
	 * @return [type]       [array or false]
	 */
	static function listContent($file,$output=true) {
		$ext = get_path_ext($file);
		$result = false;
		if( self::checkIfType($ext,'tar') ){
			//TrOn(10);
			$resultOld = PclTarList($file);
			//TrDisplay();exit;
			$result = array();
			for ($i=0; $i < count($resultOld); $i++) {
				$item = $resultOld[$i];
				//http://rpm5.org/docs/api/tar_8c-source.html
				if( $item['typeflag'] == 'x' || $item['typeflag'] == 'g'){
					continue;
				}
				if($output){
					$item['filename'] = ltrim($item['filename'],'./');
				}
				if($item['typeflag'] == '5'){
					$item['folder'] = true;
				}else{
					$item['folder'] = false;
				}
				$item['index'] = $i;
				$result[] = $item;
			}
		}else if( self::checkIfType($ext,'rar') ){
			$appResult = kodRarArchive::listContent($file);
			if(!$appResult['code']){
				return $appResult;
			}else{
				$result = $appResult['data'];
			}
		}else{//默认zip
			$zip = new PclZip($file);
			$result = $zip->listContent();
		}
		
		if($result){
			//编码转换
			$charset = unzip_charset_get($result);
			$output  = $output && function_exists('iconv');
			for ($i=0; $i < count($result); $i++) {
				//不允许相对路径
				$result[$i]['filename'] = str_replace(array('../','..\\'),"_",$result[$i]['filename']);
				$charset = get_charset($result[$i]['filename']);
				if($output){
					$result[$i]['filename'] = iconv_to($result[$i]['filename'],$charset,'utf-8');
					unset($result[$i]['stored_filename']);
				}
			}
			return array('code'=>true,'data'=>$result);
		}else{
			return array('code'=>false,'data'=>$result);
		}
	}

	/**
	 * [extract description]
	 * @param  [type] $file [archive file]
	 * @param  [type] $dest [extract to folder]
	 * @param  string $part [archive file content]
	 * @return [type]       [array]
	 */
	static function extract($file, $dest, $part = '-1',&$partName=false) {
		$ext = get_path_ext($file);
		$listContent = self::listContent($file,false);//不转码
		if(!$listContent['code']){
			return $listContent;
		}
		if($part != '-1'){//解压部分.则构造 $pathRemove $indexPath
			$indexInfo = self::fileIndex($listContent['data'],$part);
			$partName  = str_replace(array('../','..\\'),'_',$indexInfo['filename']);
			$indexPath = $partName;
			if($GLOBALS['config']['systemCharset'] != 'utf-8'){
				$indexPath = unzip_pre_name($partName);//系统编码
			}

			//$pathRemove = get_path_father($indexPath);
			$pathRemove = get_path_father($partName);//中文情况文件情况兼容

			if($indexInfo['folder']){
				$indexPath = rtrim($indexPath,'/').'/';//tar 解压文件夹需要/结尾
				$partName = array($partName);
			}
			
			$tempCheck = str_replace('\\','/',$indexPath);
			if(substr($tempCheck,-1) == '/'){
				//跟目录；需要追加一层文件夹;window a\b\c\  linux a/b/c/
				if( !strstr(trim($tempCheck,'/'),'/') ){
					$dest = $dest.unzip_pre_name(get_path_this($tempCheck)).'/';
				}
			}else{
				if($pathRemove == $indexPath){//根目录文件;
					$pathRemove = '';
				}
			}
			//debug_out($indexInfo,$indexPath,$partName,$pathRemove,$tempCheck);
		}
		
		if( self::checkIfType($ext,'tar') ){
			//TrOn(10);
			if($part != '-1'){
				//tar 默认都进行转码;
				$indexPath  = unzip_pre_name($indexPath);
				$pathRemove = unzip_pre_name($pathRemove);
				$result = PclTarExtractList($file,array($indexPath),$dest,$pathRemove);
			}else{
				$result = PclTarExtract($file,$dest);
			}
			//TrDisplay();exit;
			return array('code'=>$result,'data'=>PclErrorString(true));
		}else if( self::checkIfType($ext,'rar')){ // || $ext == 'zip' 
			return kodRarArchive::extract($file,$dest,$ext,$partName);
		}else{
			$zip = new PclZip($file);
			//解压内部的一部分，按文件名或文件夹来
			if($part != '-1'){
				$result = $zip->extract(PCLZIP_OPT_PATH,$dest,
										PCLZIP_OPT_SET_CHMOD,DEFAULT_PERRMISSIONS,
										PCLZIP_CB_PRE_FILE_NAME,'unzip_pre_name',

										PCLZIP_OPT_BY_NAME,$indexInfo['filename'],
										PCLZIP_OPT_REMOVE_PATH,$pathRemove,
										PCLZIP_OPT_REPLACE_NEWER);
			}else{
				$result = $zip->extract(PCLZIP_OPT_PATH,$dest,
										PCLZIP_OPT_SET_CHMOD,DEFAULT_PERRMISSIONS,
										PCLZIP_CB_PRE_FILE_NAME,'unzip_pre_name',
										PCLZIP_OPT_REPLACE_NEWER);//解压到某个地方,覆盖方式
			}
			return array('code'=>$result,'data'=>$zip->errorName(true));
		}
		return array('code'=>false,'data'=>'File Type Not Support');
	}

	static function fileIndex($list,$index,$key=false){
		if(!is_array($list)) return false;
		$len = count($list);
		for ($i=0; $i < $len; $i++) {
			if($index == $list[$i]['index']){
				$item = $list[$i];
				break;
			}
		}
		if(!$item){
			show_tips('KodArchive:fileIndex; index error;file not exists!');
		}
		$result = $item;
		if($key){
			$result = $item[$key];
			if($item['folder']){
				$result = rtrim($result,'/').'/';//tar 解压文件夹需要结尾/
			}
		}
		return $result;
	}

	static function extractZipFile($file,$byName,$cacheName = false){
		$temp = TEMP_PATH.'archivePreview/'.hash_path($file).'/';
		mk_dir($temp);
		touch(TEMP_PATH.'archivePreview/index.html');
		$newFile = $temp.md5($file.$byName);
		if($cacheName){
			$newFile = $temp.$cacheName;
		}

		if(file_exists($newFile)){
			return $newFile;
		}
		$zip  = new PclZip($file);
		$outFile = unzip_filter_ext($temp.get_path_this($byName));
		$parent = get_path_father($byName);
		if($parent == $byName){
			$parent = '';
		}
		$result = $zip->extract(
			PCLZIP_OPT_PATH,$temp,
			PCLZIP_CB_PRE_FILE_NAME,'unzip_pre_name',
			PCLZIP_OPT_REMOVE_PATH,$parent,
			PCLZIP_OPT_BY_NAME,$byName);
		if(!file_exists($outFile)){
			return false;
		}
		@rename($outFile,$newFile);
		return $newFile;
	}

	/**
	 * [filePreview file preview or download a file;]
	 * 解压后自动缓存;
	 * @param  [type] $file  [archive file name]
	 * @param  [type] $index [file index]
	 * @return [type]        [echo to client;]
	 */
	static function filePreview($file,$index,$download=false,$byName = false){
		$temp = TEMP_PATH.'archivePreview/'.hash_path($file).'/';
		mk_dir($temp);
		touch(TEMP_PATH.'archivePreview/index.html');
		$newFile = $temp.md5($file.$index.$byName);
		if($index == 'byname' && $byName){
			if(file_exists($newFile)){
				file_put_out($newFile,$download,get_path_this($byName));
				return;
			}
			$zip  = new PclZip($file);
			$filenameOutput = get_path_this($byName);
			$outFile = unzip_filter_ext($temp.$filenameOutput);
			$result = $zip->extract(
				PCLZIP_OPT_PATH,$temp,
				PCLZIP_CB_PRE_FILE_NAME,'unzip_pre_name',
				PCLZIP_OPT_REMOVE_PATH,get_path_father($byName),
				PCLZIP_OPT_BY_NAME,$byName);
		}else{
			$partName = '';
			$result = self::extract($file, $temp,$index,$partName);
			if(is_array($partName)){//不能是数组——文件夹
				show_json('unzip preview folder error!');
			}
			if(file_exists($newFile)){
				file_put_out($newFile,$download,get_path_this($partName));
				return;
			}
			//$partName 压缩文件原名；初始编码；转为当前文件系统编码
			$partName = unzip_pre_name($partName);
			$filenameOutput = get_path_this($partName);
			$outFile = unzip_filter_ext($temp.$filenameOutput);
			if(!$result['code']){
				show_json($result['data'],false);
			}
		}
		//debug_out($partName,$file,$outFile,$byName);
		if(!file_exists($outFile)){
			show_json('unzip error!');
		}
		@rename($outFile,$newFile);
		if(!file_exists($newFile)){
			del_dir($temp);
			show_json('unzip:rename error!');
		}
		file_put_out($newFile,$download,$filenameOutput);
	}
	/**
	 * [create description]
	 * @param  [type] $file  [archive file name]
	 * @param  [type] $files [files add;file or folders]
	 * @return [type]        [bool]
	 */
	static function create($file,$files) {
		$ext = get_path_ext($file);
		$result = false;
		if( self::checkIfType($ext,'zip') ){
			$archive = new PclZip($file);
			foreach ($files as $key =>$val) {
				$val = str_replace('//','/',$val);
				$removePathPre = _DIR_CLEAR(get_path_father($val));
				if($key == 0){
					$result = $archive->create($val,
						PCLZIP_OPT_REMOVE_PATH,$removePathPre,
						PCLZIP_CB_PRE_FILE_NAME,'zip_pre_name'
					);
					continue;
				}
				$result = $archive->add($val,
					PCLZIP_OPT_REMOVE_PATH,$removePathPre,
					PCLZIP_CB_PRE_FILE_NAME,'zip_pre_name'
				);
			}
		}else if( self::checkIfType($ext,'tar') ){
			//TrOn(10);
			$test = array($files);
			foreach ($files as $key =>$val) {
				$val = str_replace('//','/',$val);
				$removePathPre = _DIR_CLEAR(get_path_father($val));
				$test[] = array($val,$removePathPre);
				if($key == 0){
					$result = PclTarCreate($file,array($val), $ext,null, $removePathPre);
					continue;
				}
				$result = PclTarAddList($file,array($val),'',$removePathPre,$ext);
			}
			//TrDisplay();exit;
		}
		return $result;
	}
}
