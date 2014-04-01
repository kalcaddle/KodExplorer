<?php
/*
* @link http://www.kalcaddle.com/
* @author warlee | e-mail:kalcaddle@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kalcaddle.com/tools/licenses/license.txt
*/

/**
 * 程序路由处理类
 * 这里类判断外界参数调用内部方法
 */
class Application {
	public $default_controller = null;	//默认的类名
	public $default_do = null;			//默认的方法名
	public $sub_dir ='';				//控制器子目录
	public $model = '';				//控制器对应模型  对象。
	
	/**
	 * 设置默认的类名
	 * @param string $default_controller 
	 */
	public function setDefaultController($default_controller){
		$this -> default_controller = $default_controller;
	} 

	/**
	 * 设置默认的方法名
	 * @param string $default_action 
	 */
	public function setDefaultAction($default_action){
		$this -> default_action = $default_action;
	} 

	/**
	 * 设置控制器子目录
	 * @param string $dir 
	 */
	public function setSubDir($dir){
		$this -> sub_dir = $dir;
	} 

	/**
	 * 运行controller 的方法
	 * @param $class , controller类名。
	 * @param $function , 方法名
	 */
	public function appRun($class,$function){
		$sub_dir = $this -> sub_dir ? $this -> sub_dir . '/' : '';
		$class_file = CONTROLLER_DIR . $sub_dir.$class.'.class.php';
		if (!is_file($class_file)) {
			pr($class.' controller not exists!',1);
		}
		require_once $class_file;
		if (!class_exists($class)) {
			pr($class.' class not exists',1);
		}
		$instance = new $class();
		if (!method_exists($instance, $function)) {
			pr($function.' method not exists',1);
		}
		$instance -> $function();
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
		if (!isset($URI[0]) || $URI[0] == '') $URI[0] = $this->default_controller;
		if (!isset($URI[1]) || $URI[1] == '') $URI[1] = $this->default_action;
		define('ST',$URI[0]);
		define('ACT',$URI[1]);
		//自动加载运行类。
		$this->autorun();
		$this->appRun(ST,ACT);
	}
} 
