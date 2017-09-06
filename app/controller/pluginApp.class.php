<?php
/*
* @link http://kodcloud.com/
* @author warlee | e-mail:kodcloud@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kodcloud.com/tools/license/license.txt
*
*
* 插件管理：页面；列表；
*/

class pluginApp extends Controller{
	function __construct() {
		parent::__construct();
		$this->tpl = TEMPLATE.'pluginApp/';
	}

	//?pluginApp/to/epubReader/index&a=1
	//?pluginApp/to/epubReader/&a=1 ==>ignore index;
	public function to() {
		$route = $this->in['URLremote'];
		if(count($route) >= 3){
			if(count($route) == 3){
				$route[3] = 'index';
			}
			$model = $this->loadModel('Plugin');
			if(!$model->checkAuth($route[2])){
				show_tips("Plugin not open,or you have't permission[".$route[2]."]");
			}
			if(!$this->checkAccessPlugin()){
				show_tips("Sorry! You have't permission[".$route[2]."]");
			}
			Hook::apply($route[2].'Plugin.'.$route[3]);
		}
	}

	//权限认证
	private function checkAccessPlugin(){
		if( $_SESSION['kodLogin'] == true ||
			$_SESSION['accessPlugin'] == 'ok' ||
			$this->checkAccessShare()
			){
			return true;
		}
		return false;
	}
	private function checkAccessShare(){
		if(!isset($this->in['path'])){
			return false;
		}
		$share = KOD_USER_SHARE;
		if(substr($this->in['path'],0,strlen($share)) == $share){
			return true;
		}
		return false;
	}

	//plugin manager
	public function index() {
		$this->display('index.html');
	}

	public function appList(){
		$model = $this->loadModel('Plugin');
		$list  = $model->viewList();
		show_json($list);
	}

	public function changeStatus(){
		if( !isset($this->in['app']) || 
			!isset($this->in['status'])){
			show_json(LNG('error'),false);
		}
		$app 	= $this->in['app'];
		$status = $this->in['status']?1:0;
		$model 	= $this->loadModel('Plugin');

		//启用插件则检测配置文件，必填字段是否为空；为空则调用配置
		if($status){
			$config	 = $model->getConfig($app);
			$package = $model->getPackageJson($app);
			$needConfig = false;
			foreach($package['configItem'] as $key=>$item) {
				if( (isset($item['require']) && $item['require']) &&
					(!isset($item['value']) || $item['value'] === '' || $item['value'] === null) &&
					(!isset($config[$key])  || $config[$key] == "")
					){
					$needConfig = true;
					break;
				}
			}
			if($needConfig){
				show_json('needConfig',false);
			}
		}
		$model->changeStatus($app,$this->in['status']);
		$list  = $model->viewList();
		show_json($list);
	}

	public function setConfig(){
		if( !$this->in['app'] || 
			!$this->in['value']){ 
			show_json(LNG('error'),false);
		}
		$json = $this->in['value'];
		$app = $this->in['app'];
		$model = $this->loadModel('Plugin');

		//重置为默认配置
		if($json == 'reset'){
			$json = $model->getConfigDefault($app);
		}else{
			if(!is_array($json)){
				show_json($json,false);
			}
		}
		$model->changeStatus($app,1);
		$model->setConfig($app,$json);
		show_json(LNG('success'));
	}

	//install [download=>unzip=>regiest,install=>changeStatus]
	public function install(){
	}

	public function unInstall(){
		if( !$this->in['app']){
			show_json(LNG('error'),false);
		}
		$model = $this->loadModel('Plugin');
		$model->remove($this->in['app']);
		del_dir(PLUGIN_DIR.$this->in['app']);
		$list  = $model->viewList();
		show_json($list);
	}
}
