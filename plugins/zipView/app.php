<?php

class zipViewPlugin extends PluginBase{
	function __construct(){
		parent::__construct();
	}
	public function regiest(){
		$this->hookRegiest(array(
			'user.commonJs.insert' => 'zipViewPlugin.echoJs',
		));
	}

	public function unzipList(){
		$path = $this->filePath($this->in['path']);
		if(isset($this->in['index'])){
			$download = isset($this->in['download'])?true:false;
			KodArchive::filePreview($path,$this->in['index'],$download,$this->in['name']);
		}else{
			$result = KodArchive::listContent($path);
			show_json($result['data'],$result['code']);
		}
	}
	public function echoJs($st,$act){
		if($this->isFileExtence($st,$act)){
			$this->echoFile('static/main.js');
		}
	}
}