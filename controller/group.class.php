<?php
/*
* @link http://www.kalcaddle.com/
* @author warlee | e-mail:kalcaddle@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kalcaddle.com/tools/licenses/license.txt
*/

class group extends Controller{
    private $sql;
    function __construct()    {
        parent::__construct();
        $this->sql=new fileCache($this->config['system_file']['group']);
    }
    
    public function get() {
        show_json($this->sql->get());
    }
    /**
     * 用户添加
     */
    public function add(){
        $group = $this->_init_data();
        if($this->sql->add($this->in['role'],$group)){
            show_json($this->L['success']);
        }
        show_json($this->L['error_repeat'],false);
    }

    /**
     * 编辑
     */
    public function edit(){
        $group = $this->_init_data();
        $role_old = $this->in['role_old'];
        if (!$role_old) show_json($this->L["groupname_can_not_null"],false);
        if ($role_old == 'root') show_json($this->L['default_group_can_not_do'],false);

        if ($this->sql->replace_update($role_old,$this->in['role'],$group)){
            $member = new fileCache($this->config['system_file']['member']);
            if ($member -> update('role',$this->in['role'],$role_old)) {
                show_json($this->L['success']);
            }
            show_json($this->L['group_move_user_error'],false);
        }
        show_json($this->L['error_repeat'],false);
    }

    /**
     * 删除
     */
    public function del() {
        $role = $this->in['role'];
        if (!$role) show_json($this->L["groupname_can_not_null"],false);
        if ($role == 'root') show_json($this->L['default_group_can_not_do'],false);
        if($this->sql->delete($role)){
            $member = new fileCache($this->config['system_file']['member']);
            $member -> update('role','',$role);//改组用户设置为空
            show_json($this->L['success']);
        }
        show_json($this->L['error'],false);
    }


    //===========内部调用============
    /**
     * 初始化数据 get   
     * 只传键即可  &ext_not_allow=''&explorer-mkfile&explorer-pathRname
     */
    private function _init_data(){
        if (strlen($this->in['role'])<1) show_json($this->L["groupname_can_not_null"],false);
        if (strlen($this->in['name'])<1) show_json($this->L["groupdesc_can_not_null"],false);
        
        $role_arr = array('role'=>$this->in['role'],'name'=>$this->in['name']);
        $role_arr['ext_not_allow'] = $this->in['ext_not_allow'];
        foreach ($this->config['role_setting'] as $key => $actions) {
            foreach ($actions as $action) {
                $k = $key.':'.$action;
                if (isset($this->in[$k])) {
                    $role_arr[$k] = 1;
                }else{
                    //$role_arr[$k] = 0;
                }
            }
        }
        return $role_arr;
    }
}