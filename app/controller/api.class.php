<?php 
/*
* @link http://kodcloud.com/
* @author warlee | e-mail:kodcloud@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kodcloud.com/tools/license/license.txt
*/

class api extends Controller{
	function __construct(){
		parent::__construct();
		$this->tpl = TEMPLATE.'api/';
	}

	/**
	 * 通用文件预览方案
	 * image,media,cad,office,webodf,pdf,epub,swf,text
	 * 跨域:epub,pdf,odf,[text];  
	 * @return [type] [description]
	 */
	public function view(){
		if(!isset($this->in['path'])){
			show_tips('参数错误!');
		}
		$this->checkAccessToken();
		$this->setIdentify();
		$this->display('view.html');
	}

	private function setIdentify(){
		if(! $_SESSION['accessPlugin'] ){
			session_start();
			$_SESSION['accessPlugin'] = 'ok';
			session_write_close();
		}
	}

	private function checkAccessToken(){
		$model  = $this->loadModel('Plugin');
		$config = $model->getConfig('fileView');
		if(!$config['apiKey']){
			return;
		}
		$timeTo = isset($this->in['timeTo'])?intval($this->in['timeTo']):'';
		$token = md5($config['apiKey'].$this->in['path'].$timeTo);
		
		//show_tips(array($config['apiKey'],$token,$this->in));
		if($token != $this->in['token']){
			show_tips('token 错误!');
		}
		if($timeTo != '' && $timeTo <= time()){
			show_tips('token已失效!');
		}
	}
}

