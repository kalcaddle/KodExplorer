<?php
/*
* @link http://www.kalcaddle.com/
* @author warlee | e-mail:kalcaddle@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kalcaddle.com/tools/licenses/license.txt
*/


define('ARCHIVE_LIB',dirname(__FILE__).'/archiveLib/');
define('PCLZIP_TEMPORARY_DIR',TEMP_PATH);
define('PCLTAR_TEMPORARY_DIR',TEMP_PATH);
mk_dir(TEMP_PATH);

require ARCHIVE_LIB.'pclerror.lib.php';
require ARCHIVE_LIB.'pcltrace.lib.php';
require ARCHIVE_LIB.'pcltar.lib.php';
require ARCHIVE_LIB.'pclzip.class.php';
require ARCHIVE_LIB.'kodRarArchive.class.php';


class kodArchive {
	/**
	 * [checkIfType get the app by ext]
	 * @param  [type] $guess [check]
	 * @param  [type] $ext   [file ext]
	 * @return [type]        [description]
	 */
	static function checkIfType($ext,$app_type){
		$ext_array = array(
			'zip' => array('zip','ipa','apk'),
			'tar' => array('tar','tar.gz','gz','tgz'),
			'rar' => array('rar','7z','xz','bz2','arj','cab','iso')
		);
		
		$result = in_array($ext,$ext_array[$app_type]);
		if( $result  &&
			($app_type == 'zip' || $app_type == 'tar') &&
			(!function_exists('gzopen') || !function_exists('gzinflate'))
		){
			show_tips("[Error] Can't Open; Missing zlib extensions");
		}
		
		if( $result  && $app_type == 'rar' &&
			(!function_exists('shell_exec') || !strstr(shell_exec('echo "kalcaddle"'),'kalcaddle'))
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
		if( self::checkIfType($ext,'zip') ){
			$zip = new PclZip($file);
			$result = $zip->listContent();
		}else if( self::checkIfType($ext,'tar') ){
			$result_old = PclTarList($file);
			$result = array();
			for ($i=0; $i < count($result_old); $i++) {
				$item = $result_old[$i];
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
			$app_result = kodRarArchive::listContent($file);
			if(!$app_result['code']){
				return $app_result;
			}else{
				$result = $app_result['data'];
			}
		}
		
		if($result){
			//编码转换
			$charset = unzip_charset_get($result);
			$output  = $output && $charset != 'utf-8' && function_exists('iconv');
			for ($i=0; $i < count($result); $i++) {
				//不允许相对路径
				$result[$i]['filename'] = str_replace(array('../','..\\'),"_",$result[$i]['filename']);
				if($output){
					$result[$i]['filename'] = @iconv($charset,'utf-8', $result[$i]['filename']);
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
	static function extract($file, $dest, $part = '-1',&$part_name=false) {
		$ext = get_path_ext($file);
		$list_content = self::listContent($file,false);//不转码
		if(!$list_content['code']){
			return $list_content;
		}
		if($part != '-1'){//解压部分.则构造 $path_remove $index_path
			$index_info = self::fileIndex($list_content['data'],$part);
			$part_name  = str_replace(array('../','..\\'),'_',$index_info['filename']);
			$index_path = $part_name;
			if($GLOBALS['config']['system_charset'] != 'utf-8'){
				$index_path = unzip_pre_name($part_name);//系统编码
			}
			$path_remove = get_path_father($index_path);
			if($index_info['folder']){
				$index_path = rtrim($index_path,'/').'/';//tar 解压文件夹需要/结尾
				$part_name = array($part_name);
			}
			
			$temp_check = str_replace('\\','/',$index_path);
			if(substr($temp_check,-1) == '/'){
				//跟目录；需要追加一层文件夹;window a\b\c\  linux a/b/c/
				if( !strstr(trim($temp_check,'/'),'/') ){
					$dest = $dest.unzip_pre_name(get_path_this($temp_check)).'/';
				}
			}else{
				if($path_remove == $index_path){//根目录文件;
					$path_remove = '';
				}
			}
			//debug_out($index_info,$index_path,$part_name,$path_remove,$temp_check);
		}
		
		if( self::checkIfType($ext,'zip') ){
			$zip = new PclZip($file);
			//解压内部的一部分，按文件名或文件夹来
			if($part != '-1'){
				$result = $zip->extract(PCLZIP_OPT_PATH,$dest,
										PCLZIP_OPT_SET_CHMOD,DEFAULT_PERRMISSIONS,
										PCLZIP_CB_PRE_FILE_NAME,'unzip_pre_name',

										PCLZIP_OPT_BY_NAME,$index_info['filename'],
										PCLZIP_OPT_REMOVE_PATH,$path_remove,
										PCLZIP_OPT_REPLACE_NEWER);
			}else{
				$result = $zip->extract(PCLZIP_OPT_PATH,$dest,
										PCLZIP_OPT_SET_CHMOD,DEFAULT_PERRMISSIONS,
										PCLZIP_CB_PRE_FILE_NAME,'unzip_pre_name',
										PCLZIP_OPT_REPLACE_NEWER);//解压到某个地方,覆盖方式
			}
			return array('code'=>$result,'data'=>$zip->errorName(true));
		}else if( self::checkIfType($ext,'tar') ){
			//TrOn(10);
			if($part != '-1'){
				$result = PclTarExtractList($file,array($index_path),$dest,$path_remove);
			}else{
				$result = PclTarExtract($file,$dest);
			}
			//TrDisplay();exit;
			return array('code'=>$result,'data'=>PclErrorString(true));
		}else if( self::checkIfType($ext,'rar') ){
			return kodRarArchive::extract($file,$dest,$ext,$part_name);
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
			show_tips('kodArchive:fileIndex; index error;file not exists!');
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


	/**
	 * [filePreview file preview or download a file;]
	 * @param  [type] $file  [archive file name]
	 * @param  [type] $index [file index]
	 * @return [type]        [echo to client;]
	 */
	static function filePreview($file,$index,$download=false){
		$temp = TEMP_PATH.'others/'.md5(rand_string(40).time()).'/';
		mk_dir($temp);
		touch(TEMP_PATH.'others/index.html');

		$part_name = '';
		$result = self::extract($file, $temp,$index,$part_name);
		if(is_array($part_name)){//不能是数组——文件夹
			del_dir($temp);
			show_json('unzip preview folder error!');
		}

		//$part_name 压缩文件原名；初始编码；转为当前文件系统编码
		$part_name = unzip_pre_name($part_name);
		$file = unzip_filter_ext($temp.get_path_this($part_name));
		$filename_output = get_path_this($part_name);
		if(!$result['code']){
			del_dir($temp);
			show_json($result['data'],false);
		}
		//debug_out($part_name,$file,bin2hex($file));
		if(!file_exists($file)){
			del_dir($temp);
			show_json('unzip error!');
		}
		$new_file = $temp.md5(rand_string(40).time());
		@rename($file,$new_file);
		if(!file_exists($new_file)){
			del_dir($temp);
			show_json('unzip:rename error!');
		}
		file_put_out($new_file,$download,$filename_output);
		del_dir($temp);
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
				$remove_path_pre = _DIR_CLEAR(get_path_father($val));
				if($key == 0){
					$result = $archive->create($val,
						PCLZIP_OPT_REMOVE_PATH,$remove_path_pre,
						PCLZIP_CB_PRE_FILE_NAME,'zip_pre_name'
					);
					continue;
				}
				$result = $archive->add($val,
					PCLZIP_OPT_REMOVE_PATH,$remove_path_pre,
					PCLZIP_CB_PRE_FILE_NAME,'zip_pre_name'
				);
			}
		}else if( self::checkIfType($ext,'tar') ){
			//TrOn(10);
			$test = array($files);
			foreach ($files as $key =>$val) {
				$remove_path_pre = _DIR_CLEAR(get_path_father($val));
				$test[] = array($val,$remove_path_pre);

				if($key == 0){
					$result = PclTarCreate($file,array($val), $ext,null, $remove_path_pre);
					continue;
				}
				$result = PclTarAddList($file,array($val),'',$remove_path_pre,$ext);
			}
			//TrDisplay();exit;
		}
		return $result;
	}
}