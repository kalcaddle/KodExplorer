<?php 
/*
* @link http://www.kalcaddle.com/
* @author warlee | e-mail:kalcaddle@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kalcaddle.com/tools/licenses/license.txt
*/

class app extends Controller{
    function __construct()    {
        parent::__construct();
        $this->sql=new fileCache($this->config['system_file']['apps']);
    }

    /**
     * 用户首页展示
     */
    public function index() {
        $this->display(TEMPLATE.'app/index.php');
    }
    
    /**
     * 用户app 添加、编辑
     */
    public function user_app() {
        $path = _DIR($this->in['path']);
        if (isset($this->in['action']) && $this->in['action'] == 'add'){
            $path .= '.oexe';
            
        }
        $data = json_decode(rawurldecode($this->in['data']),true);
        unset($data['name']);unset($data['desc']);unset($data['group']);

        $res  = file_put_contents($path, json_encode($data));
        show_json($this->L['success']);
    }

    /**
     * 获取列表
     */
    public function get() {
        $list = array();
        if (!isset($this->in['group']) || $this->in['group']=='all') {
            $list = $this->sql->get();
        }else{
            $list = $this->sql->get('group','',$this->in['group']);
        }
        $list = array_reverse($list);
        show_json($list);
    }

    /**
     * 添加
     */
    public function add() {  
        if (!$GLOBALS['is_root']) show_json($this->L['no_permission'],false);
        $res=$this->sql->add(rawurldecode($this->in['name']),$this->_init());
        if($res) show_json($this->L['success']);
        show_json($this->L['error_repeat'],false);
    }

    /**
     * 编辑
     */
    public function edit() {
        if (!$GLOBALS['is_root']) show_json($this->L['no_permission'],false);
        //查找到一条记录，修改为该数组
        if($this->sql->replace_update(
            rawurldecode($this->in['old_name']),
            rawurldecode($this->in['name']),$this->_init())){
            show_json($this->L['success']);
        }
        show_json($this->L['error_repeat'],false);
    }
    /**
     * 删除
     */
    public function del() {
        if (!$GLOBALS['is_root']) show_json($this->L['no_permission'],false);
        if($this->sql->delete(rawurldecode($this->in['name']))){
            show_json($this->L['success']);
        }
        show_json($this->L['error'],false);
    }

    public function get_url_title(){
        $html = curl_get_contents($this->in['url']);
        $result = match($html,"<title>(.*)<\/title>");
        if (strlen($result)>50) {
            $result = mb_substr($result,0,50,'utf-8');
        }
        if (!$result || strlen($result) == 0) {
            $result = $this->in['url'];
            $result = str_replace(array('http://','&','/'),array('','@','-'), $result);
        }
        show_json($result);
    }

    private function _init(){
        return  json_decode(rawurldecode($this->in['data']));
    }

    /**
     * 用户app初始化
     */
    public function init_app($user) {
        $sql=new fileCache($this->config['system_file']['apps']);
        $list = $sql->get();
        $desktop = USER_PATH.$user.'/home/desktop/';
        foreach ($list as $key => $data) {
            //touch($path);
            $path = iconv_system($desktop.$key.'.oexe');
            unset($data['name']);
            unset($data['desc']);
            unset($data['group']);
            file_put_contents($path, json_encode($data));
        }
    }
}
