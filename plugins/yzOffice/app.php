<?php

class yzOfficePlugin extends PluginBase{
	function __construct(){
		parent::__construct();

		//IE8自动切换为普通模式
		if( strpos($_SERVER["HTTP_USER_AGENT"],"MSIE 8.0") ){
			$this->getConfig();
			$this->pluginConfig['preview'] = '0';
		}
	}
	public function regiest(){
		$this->hookRegiest(array(
			'user.commonJs.insert'	=> 'yzOfficePlugin.echoJs'
		));
	}
	public function echoJs($st,$act){
		if($this->isFileExtence($st,$act)){
			$this->echoFile('static/main.js');
		}
	}
	public function index(){
		$app = $this->getObj();
		$fileName = get_path_this(rawurldecode($this->in['path']));
		$fileName.= ' - '.LNG('kod_name').LNG('kod_power_by');
		if(!$app->task['success'] ){
			include($this->pluginPath.'php/template.php');
			return;
		}

		//获取页面
		$result = $app->task['steps'][count($app->task['steps']) - 1]['result'];
		$html = $result['data'][0];
		$pageFile = $app->cachePath.md5($html).'.'.get_path_ext($html);
		if(!file_exists($pageFile)){
			$result = url_request($html,'GET');
			if($result['code'] == 200){
				$title = '<title>永中文档转换服务</title>';
				$content = str_replace($title,'<title>'.$fileName.'</title>',$result['data']);
				file_put_contents($pageFile,$content);
			}else{
				$app->clearChche();
				show_tips($result);
			}
		}else{
			$content = file_get_contents($pageFile);
		}

		//替换内容
		$config = $this->getConfig();
		$pagePath = get_path_father($html);
		$pageID = rtrim(get_path_this($html),'.html').'.files/';
		$urlTo = $pagePath.$pageID;
		if($config['cacheFile']){ //始终使用缓存
			$urlTo = $this->pluginApi.'getFile&path='.rawurlencode($this->in['path']).'&file='.rawurlencode($urlTo);
		}
		$content = str_replace($pageID,$urlTo,$content);
		$content = str_replace('./http','http',$content);
		$content = str_replace(array('<!DOCTYPE html>','<html>','<head>','</html>'),'',$content);
		include('php/assign/header.php');
		echo $content;
		include('php/assign/footer.php');
	}


	public function task(){
		$app = $this->getObj();
		$app->runTask();
	}
	public function getFile(){
		$app = $this->getObj();
		$app->getFile($this->in['file']);
	}
	private function getObj(){
		$path = $this->filePath($this->in['path']);
		
// 		require_once($this->pluginPath.'php/yzOffice.class.php');//文档分享预览
// 		return  new yzOffice($this,$path);
		require_once($this->pluginPath.'php/yzOffice2.class.php');//官网用户demo
		return new yzOffice2($this,$path);
	}
}

