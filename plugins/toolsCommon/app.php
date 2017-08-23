<?php

/**
 * 隐藏插件，默认开启
 */
class toolsCommonPlugin extends PluginBase{
	function __construct(){
		parent::__construct();
	}
	public function regiest(){
		$this->hookRegiest(array(
			'user.commonJs.insert'		=> 'toolsCommonPlugin.echoJs'
		));
	}
	public function echoJs($st,$act){
		$this->echoFile('static/main.js');
	}

	/**
	 * ie8 css hack;
	 * @return [type] [description]
	 */
	public function pie(){
		header('Content-type: text/x-component');
		include($this->pluginPath.'/static/pie/pie.htc');
	}
}