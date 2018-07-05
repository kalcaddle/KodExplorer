<?php

class webodfPlugin extends PluginBase{
	function __construct(){
		parent::__construct();
	}
	public function regiest(){
		$this->hookRegiest(array(
			'user.commonJs.insert' => 'webodfPlugin.echoJs',
		));
	}
	public function echoJs($st=false,$act=false){
		if($this->isFileExtence($st,$act)){
			$this->echoFile('static/main.js');
		}
	}
	public function index(){
		$path = $this->filePath($this->in['path']);
		$fileUrl  = _make_file_proxy($path);
		$fileName = get_path_this(rawurldecode($this->in['path']));
		$fileName.= ' - '.LNG('kod_name').LNG('kod_power_by');
		include($this->pluginPath.'/php/template.php');
	}
}