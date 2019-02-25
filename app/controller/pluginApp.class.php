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
	}

	//?pluginApp/to/epubReader/index&a=1
	//?pluginApp/to/epubReader/&a=1 ==>ignore index;
	public function to() {
		$route = $this->in['URLremote'];
		if(count($route) >= 3){
			$app = $route[2];
			$action = $route[3];

			if(count($route) == 3){
				$action = 'index';
			}
			$model = $this->loadModel('Plugin');
			if(!$model->checkAuth($app)){
				if(!$_SESSION['kodLogin']){
					show_tips("出错了！您尚未登录",APP_HOST,3);
				}
				show_tips("出错了！插件未开启，或您没有{$app}插件的权限!");
			}

			$appConfig = $model->getConfig($app);
			if(!$appConfig['pluginAuthOpen'] && !$this->checkAccessPlugin()){
				if(!$_SESSION['kodLogin']){
					show_tips("出错了！您尚未登录",APP_HOST,3);
				}
				show_tips("出错了！插件未开启，或您没有{$app}插件的权限");
			}
			Hook::trigger("pluginRun.before",$app.'Plugin.'.$action);
			Hook::trigger($app.'Plugin.'.$action.'.before');
			Hook::apply($app.'Plugin.'.$action);
			Hook::trigger($app.'Plugin.'.$action.'.after');
			Hook::trigger("pluginRun.after",$app.'Plugin.'.$action);
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
		if(substr(urldecode($this->in['path']),0,strlen($share)) == $share){
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
			show_json(LNG('data_not_full'),false);
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
		$model->changeStatus($app,$status);
		$list  = $model->viewList();
		show_json($list);
	}

	public function setConfig(){
		if( !$this->in['app'] || 
			!$this->in['value']){ 
			show_json(LNG('data_not_full'),false);
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

	// download=>fileSize=>unzip=>remove
	public function install(){
		$app = _DIR_CLEAR($this->in['app']);
		$appPath = PLUGIN_DIR.$app.'.zip';
		$appPathTemp = $appPath.'.downloading';
		switch($this->in['step']){
			case 'check':
				$info = $this->pluginInfo($app);
				if(!is_array($info)){
					show_json(false,false);
				}
				echo json_encode($info);
				break;
			case 'download':
				if(!is_writable(PLUGIN_DIR)){
					show_json(LNG("no_permission_write").': '.PLUGIN_DIR,false);
				}
				$info = $this->pluginInfo($app);
				if(!$info || !$info['code']){
					show_json(LNG('error'),false);
				}
				$result = Downloader::start($info['data'],$appPath);
				show_json($result['data'],!!$result['code'],$app);
				break;
			case 'fileSize':
				if(file_exists($appPath)){
					show_json(filesize($appPath));
				}
				if(file_exists($appPathTemp)){
					show_json(filesize($appPathTemp));
				}
				show_json(0,false);
				break;
			case 'unzip':
				//hook log
				$GLOBALS['isRoot'] = 1;
				if(!file_exists($appPath)){
					show_json(LNG("error"),false);
				}
				$result = KodArchive::extract($appPath,PLUGIN_DIR.$app.'/');
				del_file($appPathTemp);
				del_file($appPath);
				show_json($result['data'],!!$result['code']);
				break;
			case 'remove':
				del_file($appPathTemp);
				del_file($appPath);
				show_json(LNG('success'));
				break;
			case 'update':
				show_json(Hook::apply($app.'Plugin.update'));
				break;
			default:break;
		}
	}
	private function pluginInfo($app){
		$api = $this->config['settings']['pluginServer'].'plugin/install';
		$param = array(
			"app"			=> $app,
			"version"		=> KOD_VERSION,
			"versionHash"	=> $this->config['settingSystem']['versionHash'],
			"systemOS"		=> $this->config['systemOS'],
			"phpVersion"	=> PHP_VERSION,
			"channel"		=> INSTALL_CHANNEL,	
			"lang"			=> I18n::getType()
		);
		$info = url_request($api,'POST',$param);
		$result = false;
		if($info && $info['data']){
			$result = json_decode($info['data'],true);
		}
		return $result;
	}

	public function unInstall(){
		if( !$this->in['app']){
			show_json(LNG('data_not_full'),false);
		}
		$model = $this->loadModel('Plugin');
		$model->remove($this->in['app']);
		del_dir(PLUGIN_DIR.$this->in['app']);
		$list  = $model->viewList();
		show_json($list);
	}
}
