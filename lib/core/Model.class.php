<?php
/*
* @link http://www.kalcaddle.com/
* @author warlee | e-mail:kalcaddle@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kalcaddle.com/tools/licenses/license.txt
*/

/**
 * 模型抽象类
 * 一个关于各种模型的基本行为类，每个模型都必须继承这个类的方法
 */

abstract class Model {
	var $db = null;
	var $in;
	var $config;

	/**
	 * 构造函数
	 * @return Null 
	 */
	function __construct(){
		global $g_config, $in;
		$this -> in = $in;
		$this -> config = $config;
	}
	
	/**
	 * TODO db 
	 */
	function db(){
		if ($this ->db != NULL) {
			return $this ->db;
		}else{
			
		}
	}
}