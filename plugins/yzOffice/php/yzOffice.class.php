<?php
/*
* @link http://kodcloud.com/
* @author warlee | e-mail:kodcloud@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kodcloud.com/tools/license/license.txt
*/
// 文档分享预览
// http://yozodoc.com/
class yzOffice{
	public $cachePath = 'yzOffice/';
	public $plugin;
	public $filePath;
	public $task;
	public $taskFile;
	public function __construct($plugin,$filePath){
		$this->plugin = $plugin;
		$this->filePath = $filePath;
		if($filePath === -1) return;
		if(!$filePath || !file_exists($filePath)){
			show_json('path '.LNG('error'),false);
		}

		$config = $plugin->getConfig();
		$mode = $config['preview'];
		$this->cachePath = TEMP_PATH.$this->cachePath.hash_path($this->filePath).$mode.'/';
		$this->taskFile  = $this->cachePath.'info.json';
		mk_dir($this->cachePath);
		if(file_exists($this->taskFile)){
			$task_has = json_decode(file_get_contents($this->taskFile),true);
			$this->task = is_array($task_has)?$task_has:false;
		}
		//show_json($this->upload(),false);
	}
	public function runTask(){
		$task = array(
			'currentStep'	=> 0,
			'success'     	=> 0,
			'taskUuid'		=> md5($this->filePath.rand_string(20)),
			'hideData'		=> array(),
			'steps'	=> array(
				array('name'=>'upload','process'=>'uploadProcess','status'=>0,'result'=>''),
				// array('name'=>'convert','process'=>'convert','status'=>0,'result'=>''),
			)
		);
		if(is_array($this->task)){
			$task = &$this->task;
		}else{
			$this->task = &$task;
		}

		$item  = &$task['steps'][$task['currentStep']];
		if($item['status'] == 0){
			$item['status'] = 1;
			if(!$item['process'] || 
				$item['name'] == $item['process']){ //单步没有定时检测；相等则自我查询进度；0=>2之间跳转
				$item['status'] = 0;
			}
			$this->saveData();
			$function = $item['name'];
			$result = $this->$function();
			if(is_array($result['data'])){
				$item['result'] = $result['data'];
				$item['status'] = 2;
				$task['currentStep'] += 1;

				if( $item['name'] == $item['process'] && !$result['data']['success']){//转换完成
					$item['status'] = 0;//自我检测步骤没完成
				}
				//最后一步完成
				if( $item['status'] == 2 &&  $task['currentStep'] > count($task['steps'])-1 ){
					$task['success'] = 1;
				}
				if($task['currentStep'] >= count($task['steps'])-1 ){
					$task['currentStep'] = count($task['steps'])-1;
				}
				$this->saveData();
			}else{
				$error = LNG('error');
				if(is_array($result) && $result['code'] == 100){
					$error = LNG('uploadError');
				}else if(is_array($result) && is_string($result['data']) ){
					$error = $result['data'];
				}
				show_json($error,false,$result);
			}
		}else if($item['status'] == 1){
			$function = $item['process'];
			if($function){
				$item['result'] = $this->$function();
				if($item['name'] == 'upload' && !$item['result']){
					//del_file($taskFile);//下载终止
					show_json($item['result'],false);
				}
				$this->saveData();
			}
		}
		unset($task['hideData']);
		show_json($task);
	}
	public function saveData(){
		$data = json_encode_force($this->task);
		file_put_contents($this->taskFile,$data);
	}

	private function convertMode(){
		$config = $this->plugin->getConfig();
		$ext  = get_path_ext($this->filePath);
		$mode = $config['preview'];
		if(in_array($ext,array("xls","xlsb","xlsx","xlt","xlsm","csv"))){
			$mode = '1';//excle不支持高清模式，自动切换
		}
		return $mode;
	}
	//非高清预览【返回上传后直接转换过的文件】
	public function upload(){
		$api = "http://yozodoc.com/upload";
		$post = array(
			"file"			=> "@".$this->filePath,
			"convertType"	=> $this->convertMode(),
			"isShowTitle"	=> "0"
		);
		curl_progress_bind($this->filePath,$this->task['taskUuid']);//上传进度监听id
		$result = url_request($api,'POST',$post,false,false,true,3600);
		if(is_array($result) && is_array($result['data'])){
			return $result;
		}
		return false;
	}
	public function convert(){
		del_dir($this->cachePath);
	}
	public function clearChche(){
		del_dir($this->cachePath);
	}

	public function uploadProcess(){
		return curl_progress_get($this->filePath,$this->task['taskUuid']);
	}
	public function getFile($file){
		ignore_timeout();
		$ext = unzip_filter_ext(get_path_ext($file));
		$cacheFile = $this->cachePath.md5($file.'file').'.'.$ext;
		if(file_exists($cacheFile)){
			file_put_out($cacheFile,false);
			return;
		}
		$result = url_request($file,'GET');
		if($result['code'] == 200){
			if($ext == 'svg'){
				$result['data'] = str_replace('永中DCS','',$result['data']);
				$from = '/clip-path="url\(#clipPath\d+\)" width="18\d+" xlink:href="/';
				$result['data'] = preg_replace($from,'sr="',$result['data']);
			}
			file_put_contents($cacheFile, $result['data']);
			file_put_out($cacheFile,false);
		}
	}
}

