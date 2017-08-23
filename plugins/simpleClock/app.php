<?php

/**
 * 隐藏插件，默认开启
 */
class simpleClockPlugin extends PluginBase{
	function __construct(){
		parent::__construct();
	}
	public function regiest(){
		$this->hookRegiest(array(
			'user.commonJs.insert' => 'simpleClockPlugin.echoJs'
		));
	}
	public function echoJs($st,$act){
		$this->echoFile('static/main.js');
	}
	public function index(){
		include($this->pluginPath.'static/page.html');
	}
}