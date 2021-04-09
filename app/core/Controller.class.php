<?php
/*
* @link http://kodcloud.com/
* @author warlee | e-mail:kodcloud@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kodcloud.com/tools/license/license.txt
*/

/**
 * 控制器抽象类
 */
abstract class Controller {
	public $in;
	public $config;	// 全局配置
	public $tpl;	// 模板目录
	public $values;	// 模板变量

	/**
	 * 构造函数
	 */
	function __construct(){
		global $in,$config;
		$this ->config = &$config;
		$this ->in = &$in;	
		$this ->values['config'] = &$config;
		$this ->values['in'] = &$in;
		$this ->tpl = TEMPLATE.get_class($this).'/';
	} 

	/**
	 * 加载模型
	 * @param string $class 
	 */
	public function loadModel($class){
		$args = func_get_args();
		$this -> $class = call_user_func_array('init_model', $args);
		return $this -> $class;
	} 

	/**
	 * 加载类库文件
	 * @param string $class 
	 */
	public function loadClass($class){
		if (1 === func_num_args()) {
			$this -> $class = new $class;
		} else {
			$reflectionObj = new ReflectionClass($class);
			$args = func_get_args();
			array_shift($args);
			$this -> $class = $reflectionObj -> newInstanceArgs($args);
		}
		return $this -> $class;
	}

	/**
	 * 显示模板
	 * 
	 * TODO smarty
	 * @param
	 */
	protected function assign($key,$value){
		$this->values[$key] = $value;
	} 
	/**
	 * 显示模板
	 * @param
	 */
	protected function display($tplFile){
		ob_end_clean();
		extract($this->values);
		require($this->tpl.$tplFile);
	} 
} 
