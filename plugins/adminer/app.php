<?php
class adminerPlugin extends PluginBase{
	function __construct(){
		parent::__construct();
	}
	public function regiest(){
		$this->hookRegiest(array(
			'templateCommonHeader' => 'adminerPlugin.addMenu'
		));
	}
	public function addMenu(){
		navbar_menu_add(array(
			'name'		=> 'adminer',
			'display'	=> $this->appIcon().'Adminer',
			'url'		=> $this->pluginApi,
			'target'	=> '_blank',
			'use'		=> '1'
		));
	}
	public function index(){
		@session_start();
		$_SESSION['AdminerAccess'] = 1;
		@session_write_close();
		header('Location: '.$this->pluginHost.'adminer/');
	}
}