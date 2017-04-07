<?php

/*
* @link http://www.kalcaddle.com/
* @author warlee | e-mail:kalcaddle@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kalcaddle.com/tools/licenses/license.txt
*/

class downloader {
	static function start($url,$save_file,$timeout = 10) {
		$data_file = $save_file . '.download.cfg';
		$save_temp = $save_file . '.downloading';
		
		//header:{'url','length','name','support_range'}
		if(is_array($url)){
			$file_header = $url;
		}else{
			$file_header = url_header($url);
		}

		$url = $file_header['url'];		
		//默认下载方式if not support range
		if(!$file_header['support_range'] || 
			$file_header['length'] == 0 ){
			@unlink($save_temp);
			@unlink($save_file);
			
			$result = self::file_download_fopen($url,$save_file,$file_header['length']);
			if($result['code']) {
				return $result;
			}else{
				@unlink($save_temp);
				@unlink($save_file);
				return self::file_download_curl($url,$save_file);
			}
		}

		$exists_length  = is_file($save_temp) ? filesize($save_temp) : 0;
		$content_length = intval($file_header['length']);
		if( file_exists($save_temp) &&
			time() - filemtime($save_temp) < 3) {//has Changed in 3s,is downloading 
			return array('code'=>false,'data'=>'downloading');
		}
		
		$exists_data = array();
		if(is_file($data_file)){
			$temp_data = file_get_contents($data_file);
			$exists_data = json_decode($temp_data, 1);
		}
		// exist and is the same file;
		if( file_exists($save_file) && $content_length == filesize($save_file)){
			@unlink($save_temp);
			@unlink($data_file);
			return array('code'=>true,'data'=>'exist');
		}

		// check file is expire
		if ($exists_data['length'] != $content_length) {
			$exists_data = array('length' => $content_length);
		}
		if($exists_length > $content_length){
			@unlink($save_temp);
		}
		// write exists data
		file_put_contents($data_file, json_encode($exists_data));
		$result = self::file_download_curl($url,$save_file,true,$exists_length);
		if($result['code']){
			@unlink($data_file);
		}
		return $result;
	}

	// fopen then download
	static function file_download_fopen($url, $file_name,$header_size=0){
		$file_temp = $file_name.'.downloading';
		@set_time_limit(0);
		@unlink($file_temp);
		if ($fp = @fopen ($url, "rb")){
			if(!$download_fp = @fopen($file_temp, "wb")){
				return array('code'=>false,'data'=>'open_downloading_error');
			}
			while(!feof($fp)){
				if(!file_exists($file_temp)){//删除目标文件；则终止下载
					fclose($download_fp);
					return array('code'=>false,'data'=>'stoped');
				}
				//对于部分fp不结束的通过文件大小判断
				clearstatcache();
				if( $header_size>0 &&
					$header_size==get_filesize(iconv_system($file_temp))
					){
					break;
				}
				fwrite($download_fp, fread($fp, 1024 * 8 ), 1024 * 8);
			}
			//下载完成，重命名临时文件到目标文件
			fclose($download_fp);
			fclose($fp);
			if(!@rename($file_temp,$file_name)){
				@unlink($file_name);
				$res = @rename($file_temp,$file_name);
				if(!$res){
					return array('code'=>false,'data'=>'file rename error!');
				}
			}
			return array('code'=>true,'data'=>'success');
		}else{
			return array('code'=>false,'data'=>'url_open_error');
		}
	}

	// curl 方式下载
	// 断点续传 http://www.linuxidc.com/Linux/2014-10/107508.htm
	static function file_download_curl($url, $file_name,$support_range=false,$exists_length=0){
		$file_temp = $file_name.'.downloading';
		@set_time_limit(0);
		if ($fp = @fopen ($file_temp, "a")){
			$ch = curl_init($url);
			
			//断点续传
			if($support_range){
				curl_setopt($ch, CURLOPT_RANGE, $exists_length."-");
			}
			curl_setopt($ch, CURLOPT_FILE, $fp);
			curl_setopt($ch, CURLOPT_REFERER,get_url_link($url));
			$res = curl_exec($ch);
			curl_close($ch);
			if($res && filesize($file_temp) != 0){
				if(!@rename($file_temp,$file_name)){
					@unlink($file_name);
					$res = @rename($file_temp,$file_name);
					if(!$res){
						return array('code'=>false,'data'=>'file rename error!');
					}
				}
				return array('code'=>true,'data'=>'success');
			}
			return array('code'=>false,'data'=>'curl exec error!');
		}else{
			return array('code'=>false,'data'=>'file create error');
		}
	}
}
