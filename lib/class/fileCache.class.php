<?php
/*
* @link http://www.kalcaddle.com/
* @author warlee | e-mail:kalcaddle@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kalcaddle.com/tools/licenses/license.txt
*/


/**
* 数据的缓存存储类；key=>value 模式；value可以是任意类型数据。
* 完整流程测试；读取最低5000次/s  含有写的1000次/s
* add   添加单条数据；已存在则返回false
* reset 重置所有数据；不传参数代表清空数据
* get:  获取数据；获取全部；获取指定key数据；获取指定多个key的数据;查找方式获取多条数据
*     1. get();
*     2. get("demo")
*     3. get(array('demo','admin'))
*     4. get('group','','root')
* update: 更新数据；更新指定key数据；获取指定多个key的数据; 查找方式更新多条数据
*     1. update("demo",array('name'=>'ddd',...))
*     2. update(array('demo','admin'),array(array('name'...),array('name'...)))
*     3. update('group','system','root')
*
* replace_update($key_old,$key_new,$value_new)替换方式更新；满足key更新的需求
*
* delete:  获取数据；获取全部；获取指定key数据；获取指定多个key的数据;查找方式获取多条数据
*     1. delete("demo")
*     2. delete(array('demo','admin'))
*     3. delete('group','','root')
*     例如:====================================
*     ['sss':['name':'sss','group':'root'],'bbb':['name':'bbb','group':'root']
*     ,'ccc':['name':'ccc','group':'system'],'ddd':['name':'ddd','group':'root']
*     查找方式删除  delete('group','','root');
*     查找方式更新  update('group','system','root');
*     查找方式获取  get('group','','root');
*/
define('CONFIG_EXIT', '<?php exit;?>');
class fileCache
{
    private $data;
    private $file;
    function __construct($file) {
        $this->file = $file;
        $this->data= self::load($file);
    }
    
    /**
    * 重置所有数据；不传参数代表清空数据
    */
    public function reset($list=array()){
        $this->data = $list;
        self::save($this->file,$this->data);
    }

    /**
    * 添加一条数据，不能重复；如果已存在则返回false;1k次/s
    */
    public function add($k,$v){
        if (!isset($this->data[$k])) {
            $this->data[$k] = $v;
            self::save($this->file,$this->data);
            return true;
        }
        return false;
    }

    /**
    * 获取数据;不存在则返回false;100w次/s
    * $k null   不传则返回全部;
    * $k string 为字符串；则根据key获取数据，只有一条数据
    * $search_value 设置时；表示以查找的方式筛选数据筛选条件为 $key=$k 值为$search_value的数据；多条
    */
    public function get($k = '',$v='',$search_value=false){
        if ($k === '') return $this->data;
        
        $search = array();
        if ($search_value === false) {
            if (is_array($k)) {
                //多条数据获取
                $num = count($k);
                for ($i=0; $i < $num; $i++) {
                    $search[$k[$i]] = $this->data[$k[$i]];
                }
                return $search;
            }else if(isset($this->data[$k])){
                //单条数据获取
                return $this->data[$k];
            }
        }else{
            //查找内容数据方式获取；返回多条
            foreach ($this->data as $key => $val) {
                if ($val[$k] == $search_value) {
                    $search[$key] = $this->data[$key];
                }
            }
            return $search;
        }
        return false;
    }

    /**
    * 更新数据;不存在;或者任意一条不存在则返回false;不进行保存
    * $k $v string 为字符串；则根据key只更新一条数据
    * $k $v array  array($key1,$key2,...),array($value1,$value2,...) 
    *              则表示更新多条数据
    * $search_value 设置时；表示以查找的方式更新数据中的数据
    */
    public function update($k,$v,$search_value=false){
        if ($search_value === false) {
            if (is_array($k)) {
                //多条数据更新
                $num = count($k);
                for ($i=0; $i < $num; $i++) { 
                    $this->data[$k[$i]] = $v[$i];
                }
                self::save($this->file,$this->data);
                return true;
            }else if(isset($this->data[$k])){
                //单条数据更新
                $this->data[$k] = $v;
                self::save($this->file,$this->data);
                return true;
            }
        }else{
            //查找方式更新；更新多条
            foreach ($this->data as $key => $val) {
                if ($val[$k] == $search_value) {
                    $this->data[$key][$k] = $v;
                }
            }
            self::save($this->file,$this->data);
            return true;
        }
        return false;
    }

    /*
    * 替换方式更新；满足key更新的需求
    */
    public function replace_update($key_old,$key_new,$value_new){
        if(isset($this->data[$key_old])){
            $value = $this->data[$key_old];
            unset($this->data[$key_old]);
            $this->data[$key_new] = $value_new;
            self::save($this->file,$this->data);
            return true;
        }
        return false;
    }
    
    /**
    * 删除;不存在返回false
    */
    public function delete($k,$v='',$search_value=false){
        if ($search_value === false) {
            if (is_array($k)) {
                //多条数据更新
                $num = count($k);
                for ($i=0; $i < $num; $i++) { 
                    unset($this->data[$k[$i]]);
                }
                self::save($this->file,$this->data);
                return true;
            }else if(isset($this->data[$k])){
                //单条数据删除
                unset($this->data[$k]);
                self::save($this->file,$this->data);
                return true;
            }
        }else{
            //查找内容数据方式删除；删除多条
            foreach ($this->data as $key => $val) {
                if ($val[$k] == $search_value){
                    unset($this->data[$key]);
                }
            }
            self::save($this->file,$this->data);
            return true;
        }
        return false;
    }

    

    //=====================================================
    /**
    * 排序
    */
    public static function arr_sort(&$arr,$key, $type = 'asc'){
        $keysvalue = $new_array = array();
        foreach ($arr as $k => $v) {
            $keysvalue[$k] = $v[$key];
        } 
        if ($type == 'asc') {
            asort($keysvalue);
        } else {
            arsort($keysvalue);
        } 
        reset($keysvalue);
        foreach ($keysvalue as $k => $v) {
            $new_array[$k] = $arr[$k];
        } 
        return $new_array;
    }

    /**
    * 加载数据；并解析成程序数据
    */
    public static function load($file){//10000次需要4s 数据量差异不大。
        if (!file_exists($file)) touch($file);
        $str = file_get_contents($file);
        $str = substr($str, strlen(CONFIG_EXIT));
        $data= json_decode($str,true);
        if (is_null($data)) $data = array();
        return $data;
    }
    /**
    * 保存数据；
    */
    public static function save($file,$data){//10000次需要6s 
        if (!$file) return;
        if($fp = fopen($file, "w")){
            if (flock($fp, LOCK_EX)) {  // 进行排它型锁定
                $str = CONFIG_EXIT.json_encode($data);
                fwrite($fp, $str);
                fflush($fp);            // flush output before releasing the lock
                flock($fp, LOCK_UN);    // 释放锁定
            }
            fclose($fp);            
        }
    }
}