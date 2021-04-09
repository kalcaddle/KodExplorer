<?php
/*
* @link http://kodcloud.com/
* @author warlee | e-mail:kodcloud@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kodcloud.com/tools/license/license.txt
*/
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
		$step     = count($app->task['steps']) - 1;
		$infoData = $app->task['steps'][$step]['result'];
		if( !is_array($infoData['data']) ){
			$app->clearChche();
			show_tips($infoData['message']);
		}
		$link = $infoData['data'][0];
		$pageFile = $app->cachePath.md5($link).'.html.temp';
		if(!file_exists($pageFile)){
			$result = url_request($link,'GET');
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
		if(strstr($content,'location.href = ')){
			$app->clearChche();
			show_tips("请求转换异常，请重试！");
		}

		//替换内容
		$config = $this->getConfig();
		if(!$config['cacheFile']){ 
			header("Location: ".$html);
			exit;
		}
		$name  = str_replace(".html",'',get_path_this($link));
		$urlReplaceFrom   = './'.$name.".files";
		$urlReplaceTo     = $this->pluginApi.'getFile&path='.rawurlencode($this->in['path']).
		$urlReplaceTo 	 .= '&file='.rawurlencode($urlReplaceFrom);
		// show_json(array($result,$urlReplaceFrom,$urlReplaceTo),false);
		
		$content = str_replace($urlReplaceFrom,$urlReplaceTo,$content);
		$content = str_replace('"'.$name.'.files','"'.$urlReplaceTo,$content);
		$content = str_replace(array('<!DOCTYPE html>','<html>','<head>','</html>'),'',$content);
		include('php/assign/header.php');
		echo $content;
		include('php/assign/footer.php');
	}
	private function str_rtrim($str,$remove){
		if(!$str || !$remove) return false;
		while(substr($str,-strlen($remove)) == $remove){
			$str = substr($str,0,-strlen($remove));
		}
		return $str;
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
		if(filesize($path) > 1024*1024*2){
			//show_tips("由于永中官方接口限制,<br/>暂不支持大于2M的文件在线预览！");
		}
		//文档分享预览; http://yozodoc.com/
		// require_once($this->pluginPath.'php/yzOffice.class.php');
		// return  new yzOffice($this,$path);
		
		//官网用户demo;
		//http://www.yozodcs.com/examples.html     2M上传限制;
		//http://dcs.yozosoft.com/examples.html
		require_once($this->pluginPath.'php/yzOffice.class.php');
		return new yzOffice2($this,$path);
	}
}

