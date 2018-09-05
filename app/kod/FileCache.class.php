<?php
/*
* @link http://kodcloud.com/
* @author warlee | e-mail:kodcloud@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kodcloud.com/tools/license/license.txt
*/

/**
* 数据的缓存存储类；key=>value 模式；value可以是任意类型数据。
* 完整流程测试；读取最低5000次/s  含有写的1000次/s
* get($find=null)
*     1.get();                      //返回所有
*     2.get(key);                   //直接通过key获取
*     3.get(data_key,value);        //搜索key为value的数据 直接返回数据不含key     
*     4.get(array('key','value'));  //搜索数据，符合key为指定value的所有数据;key value形式
* 
* set($find=null,$change=null)
*     1.set(string,val)             //添加或更新;  
*     2.set(array('key','value_find'),array('key','change_to'))  //查找方式更新 多条数据
*
* remove($find,$value)
*     1.remove();          //清空
*     2.remove(string);    //删除  eg:set('37'),删除key为37的数据 存在且删除成功则返回true 
*     3.remove(array('key','value_find')); //查找方式删除;多条数据   
* reset($arr);//初始化数据
*/


define('CONFIG_EXIT', '<?php exit;?>');
class FileCache{
	private $data;
	private $file;
	private $fileHash;//最后一次修改；保存时判断，如果有新修改则先读取再保存

	function __construct($file) {
		$this->file = $file;
		$this->data= self::load($file);
		$this->fileChangeCheck();
	}
	
	public function get($find=null,$value=null){
		if (is_null($find)){
			return $this->data;
		}else if(is_array($find)){//查找内容数据方式获取；返回多条            
			$result = array();
			foreach ($this->data as $key => $val) {
				if ($val[$find[0]] == $find[1]) {
					$result[$key] = $this->data[$key];
				}
			}
			if(count($result)!=0){
				return $result;
			}            
		}else{//单条数据获取
			$find .= '';//字符串
			if(!is_null($value)){//通过某个key寻找单条数据
				foreach ($this->data as $key => $val) {
					if ($val[$find] == $value) {
						return $val;
					}
				}                
			}
			if(isset($this->data[$find])){
				return $this->data[$find];
			}
		}
		return false;
	}

	//添加或更新
	public function set($find,$value){
		$this->fileChangeCheck();
		//最后有修改则先更新本地。
		if(is_string($find)){//单条数据更新
			$this->data[$find] = $value;
		}else if(is_array($find)){//查找方式更新；更新多条                
			foreach ($this->data as $key => $val) {
				if ($val[$find[0]] == $find[1]) {
					$this->data[$key][$value[0]] = $value[1];
				}
			}
		}else{
			return false;
		}
		self::save($this->file,$this->data);
		return true;
	}

	//删除，查找删除
	public function remove($find){
		$this->fileChangeCheck();
		if(is_string($find)){//单条数据删除
			unset($this->data[$find]);            
		}else if(is_array($find)){//查找删除
			foreach ($this->data as $key => $val) {
				if ($val[$find[0]] == $find[1]){
					unset($this->data[$key]);
				}
			}
		}else{
			return false;
		}
		self::save($this->file,$this->data);
		return true;
	}

	private function fileChangeCheck(){
		if(is_null($this->fileHash)){
			$this->fileHash = @md5_file($this->file);
			return;
		}        
		//是否发生改变
		$lastHash = @md5_file($this->file);
		if($lastHash != $this->fileHash){
			$this->fileHash = $lastHash;
			$this->data= self::load($this->file);
		}
	}

	public function reset($data,$save = true){
		$this->data = $data;
		if($save){
			self::save($this->file,$this->data);
		}		
	}

	//=====================================================
	public static function arrSort(&$arr,$key, $type = 'asc'){
		$keysValue = $newArray = array();
		foreach ($arr as $k => $v) {
			$keysValue[$k] = $v[$key];
		} 
		if ($type == 'asc') {
			asort($keysValue);
		} else {
			arsort($keysValue);
		} 
		reset($keysValue);
		foreach ($keysValue as $k => $v) {
			$newArray[$k] = $arr[$k];
		} 
		return $newArray;
	}

	public function getMaxId(){
		$minId = 100;
		if(count($this->data)==0){
			return $minId;//一切从100开始
		}
		$idArr = array_keys($this->data);
		rsort($idArr,SORT_NUMERIC);//id从高到底
		$the_id = intval($idArr[0])+1;
		if($the_id<=$minId){
			return $minId;
		}
		return $the_id;
	}

	/**
	* 加载数据；并解析成程序数据
	*/
	public static function load($file){//10000次需要4s 数据量差异不大。
		if (!$file) return false;
		$file = iconv_system($file);
		if ( !file_exists($file) ){
			@file_put_contents($file,CONFIG_EXIT.'[]');
			chmod_path($file,0777);
			return array();
		}

		$str = file_read_safe($file,10.5);
		if( $str === false || $str === 0 || $str === -1){
			show_tips('[Error Code:1011] FileCache data error!'.$file);
		}

		if (strlen($str) == 0 || 
			strlen($str) == strlen(CONFIG_EXIT) ){
			@file_put_contents($file,CONFIG_EXIT.'[]');
			chmod_path($file,0777);
			return array();
		}
		
		if($str === false || strlen($str) < strlen(CONFIG_EXIT) ){
			show_tips('[Error Code:1011] FileCache data error!'.$file);
		}
		$data= json_decode(substr($str, strlen(CONFIG_EXIT)),true);
		if (is_null($data)) $data = array();
		return $data;
	}
	/**
	* 保存数据；
	*/
	public static function save($file,$data){//10000次需要6s
		if (!$file) return false;
		$file = iconv_system($file);
		if ( !file_exists($file) ){
			@file_put_contents($file,CONFIG_EXIT.'[]');
			chmod_path($file,0777);
		}

		if (!path_writeable($file)) {
			show_tips(BASIC_PATH."<br/>".LNG('path_can_not_write_data'));
		}
		if(defined('JSON_PRETTY_PRINT')){
			$jsonStr = json_encode($data,JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
		}else{
			$jsonStr = json_encode($data);
		}
		if(is_null($jsonStr) || strlen($jsonStr) == 0){//含有二进制或非utf8字符串对应检测
			show_tips('json_encode error!');
		}
		
		$result = file_wirte_safe($file,CONFIG_EXIT.$jsonStr,10.5);
		if($result === false){
			show_tips('[Error Code:1012] FileCache save error!'.$file);
		}
		return $result;
	}
}
