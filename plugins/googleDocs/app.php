<?php

class googleDocsPlugin extends PluginBase{
	function __construct(){
		parent::__construct();
	}
	public function regiest(){
		$this->hookRegiest(array(
			'user.commonJs.insert'	=> 'googleDocsPlugin.echoJs'
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
		$api = "https://docs.google.com/viewer?url=";
		header('Location: '.$api.urlencode($fileUrl));
	}
}