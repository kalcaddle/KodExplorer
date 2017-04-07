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
		$this->sql=new fileCache(USER.'data/share.php');
	}
	/**
	 * 获取
	 */
	public function get() {
		$list = $this->sql->get();
		foreach($list as $key=>&$val){
			//unset($val['share_password']);
		}
		return $list;
	}

	//检测该目录是否已被共享
	public function checkByPath(){
		$this->in['path'] = _DIR_CLEAR($this->in['path']);
		$share_info = $this->sql->get('path',$this->in['path']);
		if (!$share_info) {
			show_json('',false);//没有找到
		}else{
			show_json($share_info,true,$this->get());
		}
	}

	/**
	 * 编辑
	 */
	public function set(){
		if (!$this->in['name'] || !$this->in['path'] || !$this->in['type']){
		   show_json($this->L["data_not_full"],false);
		}
		$share_info = array(
			'mtime'			=> time(),//更新则记录最后时间
			'sid'			=> isset($this->in['sid'])?$this->in['sid']:'',
			'type'			=> $this->in['type'],
			'path'			=> _DIR_CLEAR($this->in['path']),
			'name'			=> $this->in['name'],
			'show_name'		=> isset($this->in['show_name'])?$this->in['show_name']:$this->in['name'],
			'time_to'		=> isset($this->in['time_to'])?$this->in['time_to']:'',
			'share_password'=> isset($this->in['share_password'])?$this->in['share_password']:'',
			'code_read'		=> isset($this->in['code_read'])?$this->in['code_read']:'',
			'can_upload'	=> isset($this->in['can_upload'])?$this->in['can_upload']:'',
			'not_download'	=> isset($this->in['not_download'])?$this->in['not_download']:''
		);
		if(substr($share_info['path'],0,1) == '{'){//用户只能分享自己的目录；
			show_json($this->L["path_can_not_action"],false);
		}

		$name = $share_info['name'];
		$search = $this->sql->get('name',$name);
		$i = 0;
		while($i>200 || $search && $search['sid']!=$share_info['sid']){
			$name   = $share_info['name'].'('.$i.')';
			$search = $this->sql->get('name',$name);
			$i++;
		}
		if($i !=0){
			$share_info['name'] = $name;
		}

		//含有sid则为更新，否则为插入
		if (isset($this->in['sid']) && strlen($this->in['sid']) == 8) {
			$info_new = $this->sql->get($this->in['sid']);			
			foreach ($share_info as $key=>$val) {//只更新指定key
				$info_new[$key] = $val;
			}
			if($this->sql->set($this->in['sid'],$info_new)){
				show_json($info_new,true,$this->get());
			}
			show_json($this->L['error'],false);
		}else{//插入
			$share_list = $this->sql->get();
			$new_id = rand_string(8);
			while (isset($share_list[$new_id])) {
				$new_id = rand_string(8);
			}
			$share_info['sid'] = $new_id;
			if($this->sql->set($new_id,$share_info)){
				show_json($share_info,true,$this->get());
			}
			show_json($this->L['error'],false);
		}
		show_json($this->L['error'],false);
	}

	/**
	 * 删除
	 */
	public function del() {
		$list = json_decode($this->in['data_arr'],true);
		foreach ($list as $val) {
			$this->sql->remove($val['path']);
		}
		show_json($this->L['success'],true,$this->get());
	}
}
