<?php
/*
* @link http://kodcloud.com/
* @author warlee | e-mail:kodcloud@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kodcloud.com/tools/license/license.txt
*/

/**
 * hook::add('function','function')
 * hook::add('class:function','class.function')
 *
 * hook::run('class.function',param)
 * hook::run('function',param)
 * 
 */

class Hook{
	static private $events = array();
	static public function get($event=false){
		if(!$event){
			return self::$events;
		}else{
			return self::$events[$event];
		}
	}
	static public function apply($action,$args=array()) {
		if(!is_string($action)){
			return;
		}
		if(strstr($action,'.')){
			$arr = explode('.',$action);
			if(count($arr) !== 2){
				return;
			}
			$className    = $arr[0];
			$functionName = $arr[1];
			if(class_exists($className)){
				$class = new $className();
				if( method_exists($class,$functionName) ){
					//return $class -> $functionName($args);
					return @call_user_func_array(array($class,$functionName), $args);
				}
			}
		}else{
			if(function_exists($action)){
				return @call_user_func_array($action, $args);
			}
		}
	}

	static public function bind($event,$action,$once=false) {
		if(!isset(self::$events[$event])){
			self::$events[$event] = array();
		}
		if(!is_array($action)){
			$action = array($action);
		}
		for ($i=0; $i < count($action); $i++) { 
			self::$events[$event][] = array(
				'action' => $action[$i],
				'once' 	 => $once,
				'times'	 => 0
			);
		}
	}
	static public function once($event,$action) {
		self::bind($event,$action,true);
	}
	static public function unbind($event) {
		self::$events[$event] = false;
	}
	
	//数据处理;只支持传入一个参数
	static public function filter($event,&$param) {
		$result = self::trigger($event,$param);
		if($result){
		    $param = $result;
		}
	}
	static public function trigger($event) {
		$events = self::$events;
		if( !isset($events[$event]) ){
			return;
		}
		$actions = $events[$event];
		$result  = false;
		if(is_array($actions) && count($actions) >= 1) {
			$args = func_get_args();
			array_shift($args);
			for ($i=0; $i < count($actions); $i++) {
				$action = $actions[$i];
				if( $action['once'] && $action['times'] > 1){
					continue;
				}

				if(defined("GLOBAL_DEBUG_HOOK") && GLOBAL_DEBUG_HOOK){
					write_log($event.'==>start: '.$action['action'],'hook-trigger');
				}

				self::$events[$event][$i]['times'] = $action['times'] + 1;
				$res = self::apply($action['action'],$args);

				if(defined("GLOBAL_DEBUG_HOOK") && GLOBAL_DEBUG_HOOK){
					write_log($event.'==>end['.$action['times'].']: '.$action['action'],'hook-trigger');
				}
				//避免循环调用
				if( $action['times'] >= 5000){
					show_json("ERROR,Too many trigger on:".$event.'==>'.$action['action'],fasle);
				}
				if(!is_null($res)){
					$result = $res;
				}
			}
		}
		return $result;
	}
}
