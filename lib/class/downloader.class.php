<?php

/*
* @link http://www.kalcaddle.com/
* @author warlee | e-mail:kalcaddle@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kalcaddle.com/tools/licenses/license.txt
*/

class downloader {
	static function start($url, $save_file,$headers = array(),$timeout = 10) {
		$data_file = $save_file . '.download.cfg';
		$save_temp = $save_file . '.downloading';
		
		//if not support range
		$file_header = url_header($url);
		$url = $file_header['url'];
		
		//show_json(get_headers("http://sabre.io/",true));
		if(!$file_header['support_range'] || 
			$file_header['length']<=0){
			unlink($save_temp);
			unlink($save_file);
			return self::file_download_this($url,$save_file,$file_header['length']);
		}

		// default header
		$url_info = self::parse_url($url);
		if (!$url_info) {
			return array('code'=>false,'data'=>'url_error');
		}
		$def_headers = array(
			'Accept'          => '*/*',
			'User-Agent'      => 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0)',
			'Host'            => $url_info['host'],
			'Connection'      => 'Close',
			'Accept-Language' => 'zh-cn',
		);
		$headers = array_merge($def_headers, $headers);

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
		// check file is valid
		if ($exists_length == $content_length) {
			$exists_data && @unlink($data_file);
			self::move_file($save_temp,$save_file,$data_file);
			return array('code'=>true,'data'=>'temp_exist');
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
		$download_status = self::download_content(
			$url_info['host'], 
			$url_info['port'], 
			$url_info['request'], 
			$save_temp, 
			$content_length, 
			$exists_length, 
			$headers, 
			$timeout
		);
		if ($download_status['code']) {
			self::move_file($save_temp,$save_file,$data_file);
		}
		return $download_status;
	}

	// fopen then download
	static function file_download_this($from, $file_name,$header_size=0){
		@set_time_limit(0);
		$file_temp = $file_name.'.downloading';
		if ($fp = @fopen ($from, "rb")){
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
			if(!rename($file_temp,$file_name)){
				unlink($file_name);
				return rename($file_temp,$file_name);
			}
			return array('code'=>true,'data'=>'success');
		}else{
			return array('code'=>false,'data'=>'url_open_error');
		}
	}

	static function move_file($from,$to,$data_file){
		$res = @rename($from,$to);
		if(!$res){
			@unlink($to);
			@rename($from,$to);
		}
		@unlink($data_file);
	}

	/**
	 * parse url
	 *
	 * @param $url
	 * @return bool|mixed
	 */
	static function parse_url($url) {
		$url_info = parse_url($url);
		if (!$url_info['host']) {
			return false;
		}
		$url_info['port']    = $url_info['port'] ? $url_info['host'] : 80;
		$url_info['request'] = $url_info['path'] . ($url_info['query'] ? '?' . $url_info['query'] : '');
		return $url_info;
	}

	static function download_content($host, $port, $url_path, $save_file, $content_length, $range_start,&$headers, $timeout) {
		$request = self::build_header('GET', $url_path, $headers, $range_start);
		$fsocket = @fsockopen($host, $port, $errno, $errstr, $timeout);
		stream_set_blocking($fsocket, TRUE);
		stream_set_timeout($fsocket, $timeout);
		fwrite($fsocket, $request);
		$status = stream_get_meta_data($fsocket);
		if ($status['timed_out']) {
			return array('code'=>false,'data'=>'socket_connect_timeout');
		}
		$is_header_end = 0;
		$total_size    = $range_start;
		$file_fp       = fopen($save_file, 'a+');

		if (!$file_fp || !flock($file_fp, LOCK_EX)) {
			fclose($file_fp);
			return array('code'=>false,'data'=>'downloading');
		}
		while (!feof($fsocket)) {
			if(!file_exists($save_file)){
				flock($file_fp, LOCK_UN);
				fclose($fsocket);
				fclose($file_fp);
				return array('code'=>false,'data'=>'stoped');
			}
			if (!$is_header_end) {
				$line = @fgets($fsocket);
				if (in_array($line, array("\n", "\r\n"))) {
					$is_header_end = 1;
				}
				continue;
			}
			
			$resp = fread($fsocket, 10240);
			$read_length = strlen($resp);
			if ($resp === false || $content_length < $total_size + $read_length) {
				flock($file_fp, LOCK_UN);
				fclose($fsocket);
				fclose($file_fp);
				return array('code'=>false,'data'=>'socket_error');
			}
			$total_size += $read_length;
			fputs($file_fp, $resp);
			
			if ($content_length == $total_size) {
				break;
			}
		}
		flock($file_fp, LOCK_UN);
		fclose($fsocket);
		fclose($file_fp);
		return array('code'=>true,'data'=>'success');
	}

	/**
	 * build header for socket
	 *
	 * @param     $action
	 * @param     $url_path
	 * @param     $headers
	 * @param int $range_start
	 * @return string
	 */
	static function build_header($action, $url_path, &$headers, $range_start = -1) {
		$out = $action . " {$url_path} HTTP/1.0\r\n";
		foreach ($headers as $hkey => $hval) {
			$out .= $hkey . ': ' . $hval . "\r\n";
		}
		if ($range_start > -1) {
			$out .= "Accept-Ranges: bytes\r\n";
			$out .= "Range: bytes={$range_start}-\r\n";
		}
		$out .= "\r\n";
		return $out;
	}
}
