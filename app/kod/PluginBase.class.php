<?php
/*
* @link http://kodcloud.com/
* @author warlee | e-mail:kodcloud@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kodcloud.com/tools/license/license.txt
*/

class PluginBase{
	public $in;
	public $pluginName;
	public $pluginPath;
	public $pluginHost;
	public $pluginHostDefault;
	public $pluginApi;
	public $packageData;

	private $pluginLangArr;
	private $pluginConfig;
	function __construct(){
		global $in,$config;
		$this->config = &$config;
		$this->in = &$in;

		$this->pluginName = str_replace('Plugin','',get_class($this));
		$this->pluginPath = PLUGIN_DIR.$this->pluginName.'/';
		$this->pluginApi  = APP_HOST.'?pluginApp/to/'.$this->pluginName.'/';
		$this->pluginHost = $this->config['settings']['pluginHost'].$this->pluginName.'/';
		$this->pluginHostDefault = PLUGIN_HOST.$this->pluginName.'/';
		$this->pluginLangArr = $this->initLang();
		return $this;
	}
	public function regiest(){
		$this->hookRegiest(array());
		$this->setConfig(array());
	}
	public function install(){}
	public function unInstall(){}


	/**
	 * 注册hook到当前插件配置
	 * @param  [type] $array [description]
	 * @return [type]        [description]
	 */
	final function hookRegiest($array){
		$id = $this->pluginName;
		$systemConfig = &$this->config['settingSystem'];
		if(!is_array($systemConfig['pluginList'])){
			$systemConfig['pluginList'] = array();
		}
		if(is_array($systemConfig['pluginList'][$name])){
			$systemConfig['pluginList'][$id]['regiest'] = $array;
		}else{
			$systemConfig['pluginList'][$id] = array(
				'id'		=> $id,
				'regiest'	=> $array,
				'status'	=> 0,
				'config'	=> $this->getConfig()				
			);
		}
	}
	final function appIcon(){
		$package = $this->appPackage();
		$icon = '';
		if(isset($package['source'])){
			if($package['source']['icon']){
				$icon = '<img class="icon" src="'.$package['source']['icon'].'"/>';
			}else if($package['source']['className']){
				$icon = "<i class='icon font-icon ".$package['source']['className']."'></i>";
			}
		}
		return $icon;
	}


	final function filePath($path){
		if(substr($path,0,4) == 'http'){
			$cacheName = md5($path.'kodcloud').'.'.get_path_ext($path);
			$cacheFile = TEMP_PATH.$this->pluginName.'/files/'.$cacheName;
			mk_dir(get_path_father($cacheFile));
			if(!file_exists($cacheFile)){
				$result = url_request($path,'DOWNLOAD',$cacheFile);
			}
			$path = $cacheFile;
		}else{
			$path = _DIR($path);
		}
		if (!file_exists($path)) {
			header("HTTP/1.1 404 Not Found");  
			header("Status: 404 Not Found");  
			show_tips(LNG('file').' '.LNG('not_exists'));
		}
		return $path;
	}

	/**
	 * 插件配置数据加载
	 * @return [type] [description]
	 */
	final function appPackage(){
		if($this->packageData){
			return $this->packageData;
		}
		$content = $this->parseFile($this->pluginPath.'package.json');
		$this->parseLang($content);
		$result = json_decode_force($content);
		if(!$result){
			return $content;
		}
		$this->packageData = $result;
		return $result;
	}

	private function parseFile($file){
		$content = file_get_contents($file);
		$replaceFrom = array(
			'{{pluginHost}}',
			'{{pluginHostDefault}}',
			'{{pluginApi}}',
			'{{pluginName}}',
			'{{pluginPath}}',
			'{{appHost}}',
			'{{staticPath}}',
			//"\r","\n"
		);
		$replaceTo = array(
			$this->pluginHost,
			$this->pluginHostDefault,
			$this->pluginApi,
			$this->pluginName,
			$this->pluginPath,
			APP_HOST,
			$this->config['settings']['staticPath'],
			//" "," "
		);
		$content = str_replace($replaceFrom,$replaceTo,$content);
		return $content;
	}

	private function parseLang(&$content){
		$pre = '{{LNG.';
		if(!strstr($content,$pre)){
			return;
		}
		preg_match_all('/{{LNG\..*}}/isU',$content,$match);
		if( !is_array($match) || count($match) == 0 ||
			!is_array($match[0]) || count($match[0]) == 0 ){
			return;
		}
		$replaceFrom = array();
		$replaceTo   = array();
		foreach ($match[0] as $key) {
			$langKey = substr($key,strlen($pre),-2); //{{LNG.file}}
			$langVal = LNG($langKey);

			$replaceFrom[] = $key;
			$replaceTo[]   = str_replace(
				array("\n","\r","\t",'"'),
				array(' ',' ','','\\"'),
				$langVal
			);
		}
		$content = str_replace($replaceFrom,$replaceTo,$content);
	}
	private function parseConfig(&$content){
		$config = $this->getConfig();
		$pre = '{{config.';
		if(!strstr($content,$pre)){
			return;
		}
		preg_match_all('/{{config\..*}}/isU',$content,$match);
		if( !is_array($match) || count($match) == 0 ||
			!is_array($match[0]) || count($match[0]) == 0 ){
			return;
		}
		$replaceFrom = array();
		$replaceTo   = array();
		foreach ($match[0] as $key) {
			$langKey = substr($key,strlen($pre),-2); //{{config.file}}
			$replaceFrom[] = $key;
			$replaceTo[]   = $config[$langKey];
		}
		$content = str_replace($replaceFrom,$replaceTo,$content);
	}

	/**
	 * 输出文件
	 * @param  [type] $file [description]
	 * @return [type]       [description]
	 */
	final function echoFile($file,$replace=false){
		$filePath = $this->pluginPath.$file;
		$ext = get_path_this($file);
		if($ext == 'js'){
			echo "\n/* [".$this->pluginName.'/'.$file."] */";
			if(!file_exists($filePath)){
				echo "   /* ==>[not exist]*/";
				return;
			}
		}
						
		$content = $this->parseFile($filePath);
		$this->parseLang($content);
		$this->parseConfig($content);
		if(is_array($replace) && count($replace) == 2){
			$content = str_replace($replace[0],$replace[1],$content);
		}
		echo "\n".$content;
	}

	/**
	 * 初始化多语言
	 * @return [type] [description]
	 */
	final function initLang(){
		$default = 'en';
		$path = $this->pluginPath.'i18n/';
		$lang = I18n::getType();
		$array = array();
		if(file_exists($path.$lang.'.php')){
			$array = include_once($path.$lang.'.php');
		}else if(file_exists($path.$default.'.php')){
			$array = include_once($path.$default.'.php');
		}
		if(count($array) > 0){
			I18n::set($array);
		}
		return $array;
	}

	final function isFileExtence($st,$act){
		if(in_array($st,array('desktop','editor','explorer','share','api'))){
			return true;
		}
		return false;
	}

	/**
	 * 获取插件配置
	 * @return [type] [description]
	 */
	final function getConfig(){
		if(!$this->pluginConfig){
			$model = new PluginModel();
			$this->pluginConfig = $model->getConfig($this->pluginName);
		}
		return $this->pluginConfig;		
	}

	/**
	 * 修改插件配置
	 * @return [type] [description]
	 */
	final function setConfig($value){
		$model = new PluginModel();
		return $model->setConfig($this->pluginName,$value);
	}
}

