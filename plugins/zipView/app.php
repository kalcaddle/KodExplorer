<?php

class zipViewPlugin extends PluginBase{
	function __construct(){
		parent::__construct();
	}
	public function regiest(){
		$this->hookRegiest(array(
			'user.commonJs.insert' => 'zipViewPlugin.echoJs',
			'globalRequest'=>'zipViewPlugin.changeData',
		));
	}
	public function changeData(){
		$GLOBALS['config']['pathRoleDefine']['read']['preview'] = array('explorer.image','explorer.unzipList','explorer.fileProxy','explorer.fileView','editor.fileGet');
		//临时
		if(isset($_REQUEST['HTTP_X_PLATFORM'])){
		    $GLOBALS['config']['settingSystem']['needCheckCode'] = false;
		}
	}
	
	public function unzipList(){
	    $maxLength = 50000;
		$path = $this->filePath($this->in['path']);
		if(isset($this->in['index'])){
			$download = isset($this->in['download'])?true:false;
			KodArchive::filePreview($path,$this->in['index'],$download,$this->in['name']);
		}else{
			$cacheFile = TEMP_PATH.'zipView/'.hash_path($path).'.log';
			if(file_exists($cacheFile)){
			    $content = file_get_contents($cacheFile);
				$data = json_decode($content,true);
				if( count($data) >= $maxLength ){
    			    show_json("包含内容太多(".count($data)."项)，请在本地打开查看;",false);
    			}
				show_json($data); 
			}
			mk_dir(get_path_father($cacheFile));
			
			$result = KodArchive::listContent($path);
			$data = json_encode($result['data']);
			if( count($result['data']) >= $maxLength ){
			    show_json("包含内容太多(".count($result['data'])."项)，请在本地打开查看;",false);
			}
			if($result['code'] && $data){
				file_put_contents($cacheFile,$data);
				show_json($result['data'],$result['code']);
			}else{
				show_json($result['data'],false);
			}
		}
	}
	public function echoJs($st,$act){
		if($this->isFileExtence($st,$act)){
			$this->echoFile('static/main.js');
		}
	}
}