<?php 
/*
* @link http://www.kalcaddle.com/
* @author warlee | e-mail:kalcaddle@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kalcaddle.com/tools/licenses/license.txt
*/

class setting extends Controller{
    private $sql;
    function __construct() {
        parent::__construct();
    }

    /**
     * 用户首页展示
     */
    public function index() {
		$this->tpl = TEMPLATE.'setting/';
    	$this->display('index.php');
    }

    /**
     * 用户首页展示
     */
    public function slider() {
		$this->tpl = TEMPLATE . 'setting/slider/';
    	$this->display($this->in['slider'].'.php');
    }

    /**
     * 参数设置
     * 可以同时修改多个：key=a,b,c&value=1,2,3
     */
    public function set(){
        $key   = $this->in['k'];
        $value = $this->in['v'];
        if ($key !='' && $value != '') {
            $conf = $this->config['user'];
            $arr_k = explode(',', $key);
            $arr_v = explode(',',$value);
            $num = count($arr_k);

            for ($i=0; $i < $num; $i++) { 
                $conf[$arr_k[$i]] = $arr_v[$i];
            }
            fileCache::save($this->config['user_seting_file'],$conf);
            show_json($this->L["setting_success"]);
        }else{
            show_json($this->L['error'],false);
        }
    }
}
