<?php

class officeLivePlugin extends PluginBase{
	function __construct(){
		parent::__construct();
	}
	public function regiest(){
		$this->hookRegiest(array(
			'user.commonJs.insert'	=> 'officeLivePlugin.echoJs'
		));
	}
	public function echoJs($st,$act){
		if($this->isFileExtence($st,$act)){
			$this->echoFile('static/main.js');
		}
	}
	public function index(){
		if(substr($this->in['path'],0,4) == 'http'){
			$path = $fileUrl = $this->in['path'];
		}else{
			$path = _DIR($this->in['path']);
			$fileUrl  = _make_file_proxy($path);
			if (!file_exists($path)) {
				show_tips(LNG('not_exists'));
			}
		}
		$config = $this->getConfig();
		header('Location:'.$config['apiServer'].rawurlencode($fileUrl));
	}
}