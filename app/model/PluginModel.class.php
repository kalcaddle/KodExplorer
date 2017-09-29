<?php
class pluginModel{
	var $in;
	var $config;
	function __construct(){
		global $config, $in;
		//parent::__construct();
		$this -> in = &$in;
		$this -> config = &$config;
	}
	public function loadData(){
		if(!isset($this->config['settingSystem']['pluginList'])){
			$this->config['settingSystem']['pluginList'] = array();
			$this->initDefaultPlugin();//首次,加载并开启默认插件
		}
		return $this->config['settingSystem']['pluginList'];
	}
	public function saveData(){
		$settingFile = USER_SYSTEM.'system_setting.php';
		FileCache::save($settingFile,$this->config['settingSystem']);
	}
	private function initDefaultPlugin(){
		$this->pluginScan();
		$list = $this->loadData();
		foreach ($list as $app => $val) {
			$this->changeStatus($app,1);
		}
	}

	/**
	 * 加载所有插件hook;
	 */
	public function init(){
		$pluginList = $this->loadData();
		foreach ($pluginList as $key=>$item) {
			if(!is_array($item) && isset($item['id'])){
				continue;
			}
			$file = PLUGIN_DIR.$item['id'].'/app.php';
			if( !$item['status'] || !is_file($file)) {
				continue;
			}
			if(!$this->checkAuth($item['id'])){
				continue;
			}
			foreach ($item['regiest'] as $tag => $action) {
				Hook::bind($tag,$action);
			}
		}
		//执行全局插件绑定
		Hook::trigger("globalRequest");
		Hook::trigger(ST.'.'.ACT);
	}

	public function checkAuth($app){
		$pluginList = $this->loadData();
		if( !isset($pluginList[$app]) || !$pluginList[$app]['status']){
			show_tips("Not exist or disabled!");
		}
		$auth = $pluginList[$app]['config']['pluginAuth'];
		if(plugin_check_auth($app,$auth)){
			return true;
		}else{
			return false;
		}
	}

	public function add($app){
		if( !file_exists(PLUGIN_DIR.$app.'/package.json') ||
			!file_exists(PLUGIN_DIR.$app.'/app.php')){
			return;
		}
		Hook::apply($app.'Plugin.regiest');
		$this->saveData();
	}
	public function remove($app){
		$pluginList = &$this->config['settingSystem']['pluginList'];
		unset($pluginList[$app]);

		if( file_exists(PLUGIN_DIR.$app)){
			Hook::apply($app.'Plugin.unInstall');
		}
		$this->saveData();
		return true;
	}

	/**
	 * 切换插件启用关闭状态
	 * @param  [type] $app  插件名
	 * @param  [type] $open 开关状态 0-禁用；1-启用
	 * @return
	 */
	public function changeStatus($app,$open){
		$pluginList = &$this->config['settingSystem']['pluginList'];
		if(is_array($pluginList[$app])){
			if($open){
				Hook::apply($app.'Plugin.regiest');
				$config = $this->getConfig($app,true);
				$this->setConfig($app,$config);
			}
			$pluginList[$app]['status'] = $open;
		}
		$this->saveData();
	}


	public function getConfigDefault($app){
		$result = array();
		$json = $this->getPackageJson($app);
		if(!$json && is_array($json['configItem'])){
			return $result;
		}
		foreach($json['configItem'] as $key=>$item) {
			if(!isset($item['value']) || 
				isset($result[$key])  ){
				continue;
			}
			$result[$key] = $item['value'];
		}
		return $result;
	}


	public function getPackageJson($app){
		return Hook::apply($app.'Plugin.appPackage');
	}
	public function getConfig($app,$force = false){
		$result = array();
		$pluginList = &$this->config['settingSystem']['pluginList'];
		if( isset($pluginList[$app]) && 
			is_array($pluginList[$app]['config']) ){
			$result = $pluginList[$app]['config'];
		}
		if(!$result  || $force){
			$result = $this->getConfigDefault($app);
		}
		return $result;
	}

	public function setConfig($app,$value){
		$pluginList = &$this->config['settingSystem']['pluginList'];
		if(isset($pluginList[$app])){
			foreach ($value as $key => $val) {
				$pluginList[$app]['config'][$key] = $val;
			}
		}
		$this->saveData();
	}
	
	/**
	 * 遍历查检目录；自动加载插件;
	 * @return [type] [description]
	 */
	public function pluginScan(){
		$pluginList = &$this->config['settingSystem']['pluginList'];
		recursion_dir(PLUGIN_DIR,$dirs,$files,0);
		foreach ($dirs as $path) {
			$app = get_path_this($path);
			if(isset($pluginList[$app])){
				continue;
			}
			if( !file_exists($path.'/package.json') ||
				!file_exists($path.'/app.php')){
				continue;
			}
			Hook::apply($app.'Plugin.regiest');
		}
		$this->saveData();
	}
	public function viewList(){
		$this->pluginScan();
		$list = $this->loadData();
		$result = array();
		foreach ($list as $key => $item) {
			unset($item['regiest']);
			$package = Hook::apply($item['id'].'Plugin.appPackage');
			if(is_array($package)){
				$result[$key] = array_merge($item,$package);
			}
		}
		return $result;
	}
}
