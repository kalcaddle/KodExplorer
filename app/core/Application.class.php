<?php
/*
* @link http://kodcloud.com/
* @author warlee | e-mail:kodcloud@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kodcloud.com/tools/license/license.txt
*/

/**
 * 程序路由处理类
 * 这里类判断外界参数调用内部方法
 */
class Application {
	private $defaultController = null;	//默认的类名
	private $defaultAction = null;		//默认的方法名
	public $subDir ='';					//控制器子目录
	public $model = '';					//控制器对应模型  对象。
	
	/**
	 * 设置默认的类名
	 * @param string $defaultController 
	 */
	public function setDefaultController($defaultController){
		$this -> defaultController = $defaultController;
	} 

	/**
	 * 设置默认的方法名
	 * @param string $defaultAction 
	 */
	public function setDefaultAction($defaultAction){
		$this -> defaultAction = $defaultAction;
	} 

	/**
	 * 设置控制器子目录
	 * @param string $dir 
	 */
	public function setSubDir($dir){
		$this -> subDir = $dir;
	} 

	/**
	 * 运行controller 的方法
	 * @param $class , controller类名。
	 * @param $function , 方法名
	 */
	public function appRun($class,$function){
		$subDir = $this -> subDir ? $this -> subDir . '/' : '';
		$classFile = CONTROLLER_DIR . $subDir.$class.'.class.php';
		$className = $class;//.'Controller'
		if (!file_exists_case($classFile)) {
			show_tips($class.' controller not exists!');
		}
		if (!class_exists($className)) {
		    include_once($classFile);
		}
		if (!class_exists($className)) {
			show_tips($className.' class not exists');
		}
		$instance = new $className();
		if (!method_exists($instance, $function)) {
			show_tips($function.' method not exists');
		}
		return $instance -> $function();
	}


	/**
	 * 运行自动加载的控制器
	 */
	private function autorun(){
		global $config; 
		if (count($config['autorun']) > 0) {
			foreach ($config['autorun'] as $key => $var) {
				$this->appRun($var['controller'],$var['function']);
			}
		} 
	}

	/**
	 * 调用实际类和方式
	 */
	public function run(){
		$URI = $GLOBALS['in']['URLremote'];
		if (!isset($URI[0]) || $URI[0] == '') $URI[0] = $this->defaultController;
		if (!isset($URI[1]) || $URI[1] == '') $URI[1] = $this->defaultAction;

		//需要校验权限的方法,统一大小写敏感;处理需要权限的方法
		$roleSetting = $GLOBALS['config']['roleSetting'];
		$st  = $URI[0];
		$act = $URI[1];
		if (array_key_exists($st,$roleSetting) ){
			if( !in_array($act,$roleSetting[$st]) && 
				in_array_not_case($act,$roleSetting[$st])
				){
				show_tips($act.' action not exists!');
			}
		}

		define('ST',$st);
		define('ACT',$act);
		//自动加载运行类。
		$this->autorun();
		$this->appRun(ST,ACT);
	}
} 
