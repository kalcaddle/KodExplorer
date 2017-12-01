<?php

/*
* @link http://kodcloud.com/
* @author warlee | e-mail:kodcloud@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kodcloud.com/tools/license/license.txt
*/

class Downloader {
	static function start($url,$saveFile,$timeout = 10) {
		$dataFile = $saveFile . '.download.cfg';
		$saveTemp = $saveFile . '.downloading';
		
		//header:{'url','length','name','supportRange'}
		if(is_array($url)){
			$fileHeader = $url;
		}else{
			$fileHeader = url_header($url);
		}
		$url = $fileHeader['url'];
		if(!$url){
			return array('code'=>false,'data'=>'url error!');
		}

		//默认下载方式if not support range
		if(!$fileHeader['supportRange'] || 
			$fileHeader['length'] == 0 ){
			@unlink($saveTemp);
			@unlink($saveFile);
			$result = self::fileDownloadFopen($url,$saveFile,$fileHeader['length']);
			if($result['code']) {
				return $result;
			}else{
				@unlink($saveTemp);
				@unlink($saveFile);
				return self::fileDownloadCurl($url,$saveFile,false,0,$fileHeader['length']);
			}
		}

		$existsLength  = is_file($saveTemp) ? filesize($saveTemp) : 0;
		$contentLength = intval($fileHeader['length']);
		if( file_exists($saveTemp) &&
			time() - filemtime($saveTemp) < 3) {//has Changed in 3s,is downloading 
			return array('code'=>false,'data'=>'downloading');
		}
		
		$existsData = array();
		if(is_file($dataFile)){
			$tempData = file_get_contents($dataFile);
			$existsData = json_decode($tempData, 1);
		}
		// exist and is the same file;
		if( file_exists($saveFile) && $contentLength == filesize($saveFile)){
			@unlink($saveTemp);
			@unlink($dataFile);
			return array('code'=>true,'data'=>'exist');
		}

		// check file is expire
		if ($existsData['length'] != $contentLength) {
			$existsData = array('length' => $contentLength);
		}
		if($existsLength > $contentLength){
			@unlink($saveTemp);
		}
		// write exists data
		file_put_contents($dataFile, json_encode($existsData));
		$result = self::fileDownloadCurl($url,$saveFile,true,$existsLength,$contentLength);
		if($result['code']){
			@unlink($dataFile);
		}
		return $result;
	}

	// fopen then download
	static function fileDownloadFopen($url, $fileName,$headerSize=0){
		@ini_set('user_agent','Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.94 Safari/537.36');

		$fileTemp = $fileName.'.downloading';
		@set_time_limit(0);
		@unlink($fileTemp);
		if ($fp = @fopen ($url, "rb")){
			if(!$downloadFp = @fopen($fileTemp, "wb")){
				return array('code'=>false,'data'=>'open_downloading_error');
			}
			while(!feof($fp)){
				if(!file_exists($fileTemp)){//删除目标文件；则终止下载
					fclose($downloadFp);
					return array('code'=>false,'data'=>'stoped');
				}
				//对于部分fp不结束的通过文件大小判断
				clearstatcache();
				if( $headerSize>0 &&
					$headerSize==get_filesize(iconv_system($fileTemp))
					){
					break;
				}
				fwrite($downloadFp, fread($fp, 1024 * 8 ), 1024 * 8);
			}
			//下载完成，重命名临时文件到目标文件
			fclose($downloadFp);
			fclose($fp);
			
			$filesize = get_filesize(iconv_system($fileTemp));
			if($headerSize != 0 && $filesize != $headerSize){
			    return array('code'=>false,'data'=>'file size error');
			}
			
			if(!@rename($fileTemp,$fileName)){
				usleep(round(rand(0,1000)*50));//0.01~10ms
				@unlink($fileName);
				$res = @rename($fileTemp,$fileName);
				if(!$res){
					return array('code'=>false,'data'=>'rename error![open]');
				}
			}
			return array('code'=>true,'data'=>'success');
		}else{
			return array('code'=>false,'data'=>'url_open_error');
		}
	}

	// curl 方式下载
	// 断点续传 http://www.linuxidc.com/Linux/2014-10/107508.htm
	static function fileDownloadCurl($url, $fileName,$supportRange=false,$existsLength=0,$length=0){
		$fileTemp = $fileName.'.downloading';
		@set_time_limit(0);
		if ($fp = @fopen ($fileTemp, "a")){
			$ch = curl_init($url);
			//断点续传
			if($supportRange){
				curl_setopt($ch, CURLOPT_RANGE, $existsLength."-");
			}
			curl_setopt($ch, CURLOPT_FILE, $fp);
			curl_setopt($ch, CURLOPT_REFERER,get_url_link($url));
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.94 Safari/537.36');

			$res = curl_exec($ch);
			curl_close($ch);
			fclose($fp);

            $filesize = get_filesize(iconv_system($fileTemp));
			if($filesize < $length && $length!=0){
			    return array('code'=>false,'data'=>'downloading');
			}
			if($filesize > $length && $length!=0){
			    //远程下载大小不匹配；则返回正在下载中，客户端重新触发下载
			    return array('code'=>false,'data'=>'file size error');
			}
			
			if($res && filesize($fileTemp) != 0){
				if(!@rename($fileTemp,$fileName)){
					@unlink($fileName);
					$res = @rename($fileTemp,$fileName);
					if(!$res){
						return array('code'=>false,'data'=>'rename error![curl]');
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
