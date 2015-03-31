<?php 
/*
* @link http://www.kalcaddle.com/
* @author warlee | e-mail:kalcaddle@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kalcaddle.com/tools/licenses/license.txt
*/

class setting extends Controller{
    private $sql;
    function __construct(){
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
    
    public function php_info(){
        phpinfo();
    }
    public function get_setting(){
        $setting = $GLOBALS['config']['setting_system']['menu'];
        if (!$setting) {
            $setting = $this->config['setting_menu_default'];
        }
        show_json($setting);
    }


    //管理员  系统设置全局数据
    public function system_setting(){
        $setting_file = USER_SYSTEM.'system_setting.php';
        $data = json_decode($this->in['data'],true);
        if (!$data) {
            show_json($this->L['error'],false);
        }
        $setting = $GLOBALS['config']['setting_system'];
        foreach ($data as $key => $value){
            if ($key=='menu') {
                $setting[$key] = $value;
            }else{
                $setting[$key] = rawurldecode($value);
            }
        }
        //$setting['menu'] = $GLOBALS['config']['setting_menu_default'];
        //为了保存更多的数据；不直接覆盖文件 $data->setting_file;
        fileCache::save($setting_file,$setting);
        show_json($this->L['success']);
        //show_json($setting);
    }

    /**
     * 参数设置
     * 可以同时修改多个：key=a,b,c&value=1,2,3
     */
    public function set(){
        $file = $this->config['user_seting_file'];
        if (!is_writeable($file)) {//配置不可写
            show_json($this->L['no_permission_write_file'],false);
        }
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
            fileCache::save($file,$conf);
            show_json($this->L["setting_success"]);
        }else{
            show_json($this->L['error'],false);
        }
    }
}
