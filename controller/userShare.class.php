<?php 
/*
* @link http://www.kalcaddle.com/
* @author warlee | e-mail:kalcaddle@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kalcaddle.com/tools/licenses/license.txt
*/
class userShare extends Controller{
    private $sql;
    function __construct(){
        parent::__construct();
        $this->sql=new fileCache($this->config['user_share_file']);
    }

    /**
     * 获取
     */
    public function get() {
        return $this->sql->get();
    }
    public function checkByPath(){
        $share_list = $this->sql->get('path','',$this->in['path']);
        //show_json($this->sql->get(),true,$this->in['path']);

        if (count($share_list)==0) {
            show_json('',false);//没有找到
        }else{
            $val = array_values($share_list);
            show_json($val[0],true);
        }
    }

    /**
     * 编辑
     */
    public function set(){
        $share_info = $this->_getData();

        //含有sid则为更新，否则为插入
        if (isset($this->in['sid']) && strlen($this->in['sid']) == 8) {
            $info_new = $this->sql->get($this->in['sid']);
            //只更新指定key
            foreach ($share_info as $key=>$val) {
                $info_new[$key] = $val;
            }
            if($this->sql->update($this->in['sid'],$info_new)){
                show_json($info_new,true);
            }
            show_json($this->L['error'],false);
        }else{//插入
            $share_list = $this->sql->get();
            $new_id = rand_string(8);
            while (isset($share_list[$new_id])) {
                $new_id = rand_string(8);
            }
            $share_info['sid'] = $new_id;
            if($this->sql->add($new_id,$share_info)){
                show_json($share_info,true);
            }
            show_json($this->L['error'],false);
        }
        show_json($this->L['error'],false);
    }

    /**
     * 删除
     */
    public function del() {
        $list = json_decode($this->in['list'],true);
        foreach ($list as $val) {
            $this->sql->delete($val['path']);
        }
        show_json($this->L['success'],true);
    }

    public function _getData(){
        if (!$this->in['name'] || !$this->in['path'] || !$this->in['type']){
           show_json($this->L["data_not_full"],false);
        }
        $in = array(
            'mtime'=>time(),//更新则记录最后时间
            'sid'=>$this->in['sid'],
            'type'=>$this->in['type'],
            'path'=>$this->in['path'],
            'name'=>$this->in['name'],
            'time_to'=>$this->in['time_to']?$this->in['time_to']:'',
            'share_password'=>$this->in['share_password']?$this->in['share_password']:'',
            'code_read'=>$this->in['code_read']?$this->in['code_read']:'',
            'not_download'=>$this->in['not_download']?$this->in['not_download']:''
        );
        return $in;
    }
}
