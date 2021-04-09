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
		$config = $this->getConfig();
		$subMenu = $config['menuSubMenu'];
		navbar_menu_add(array(
			'name'		=> 'Adminer',
			'icon'		=> $this->appIcon(),
			'url'		=> $this->pluginApi,
			'target'	=> '_blank',
			'subMenu'	=> $subMenu,
			'use'		=> '1'
		));
	}
	public function index(){
		header('Location: '.$this->pluginHost.'adminer/');
	}
}