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
		include(LIB_DIR.'api/sso.class.php');
		SSO::sessionSet('AdminerAccess');
		header('Location: '.$this->pluginHost.'adminer/');
	}
}