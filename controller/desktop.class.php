<?php 
/*
* @link http://www.kalcaddle.com/
* @author warlee | e-mail:kalcaddle@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kalcaddle.com/tools/licenses/license.txt
*/

class desktop extends Controller{
    /**
     * 构造函数
     */
    function __construct() {
        parent::__construct();
        $this->tpl = TEMPLATE.'desktop/';	
    }

    /**
     * 首页
     */
    public function index() {
        $wall = $this->config['user']['wall'];
        if(strlen($wall)>3){
            $this->assign('wall',$wall);
        }else{
            $this->assign('wall',STATIC_PATH.'images/wall_page/'.$wall.'.jpg');
        }

        $upload_max = get_post_max();   
        $this->assign('upload_max',$upload_max);  
        $this->display('index.php');
    }
}
