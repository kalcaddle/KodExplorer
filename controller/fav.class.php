<?php 
/*
* @link http://www.kalcaddle.com/
* @author warlee | e-mail:kalcaddle@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kalcaddle.com/tools/licenses/license.txt
*/

class fav extends Controller{
    private $sql;
    function __construct(){
        parent::__construct();
        $this->sql=new fileCache($this->config['user_fav_file']);
    }

    /**
     * 获取收藏夹json
     */
    public function get() {
        show_json($this->sql->get());
    }

    /**
     * 添加
     */
    public function add() {
        $res=$this->sql->add($this->in['name'],
            array(
                'name'=>$this->in['name'],
                'path'=>$this->in['path']
            )
        );
        if($res)show_json($this->L['success']);
        show_json($this->L['error_repeat'],false);
    }

    /**
     * 编辑
     */
    public function edit() {
        //查找到一条记录，修改为该数组
        $to_array=array(
            'name'=>$this->in['name_to'],
            'path'=>$this->in['path_to']
        );
        if($this->sql->replace_update(
            $this->in['name'],$this->in['name_to'],$to_array)){
            show_json($this->L['success']);
        }
        show_json($this->L['error_repeat'],false);
    }

    /**
     * 删除
     */
    public function del() {
        if($this->sql->delete($this->in['name'])){
            show_json($this->L['success']);
        }
        show_json($this->L['error'],false);
    }
}
