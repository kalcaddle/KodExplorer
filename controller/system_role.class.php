<?php
/*
* @link http://www.kalcaddle.com/
* @author warlee | e-mail:kalcaddle@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kalcaddle.com/tools/licenses/license.txt
*/

class system_role extends Controller{
	public static $static_sql = null;
	private $sql;
	function __construct(){
		parent::__construct();
		$this->sql= self::load_data();
	}

	//保证只加载一次文件
	public static function load_data(){
		if(is_null(self::$static_sql)){
			self::$static_sql = system_rol_data();
		}
		return self::$static_sql;
	}
	public static function get_info($the_id){
		$sql = self::load_data();
		return $sql->get($the_id);
	}
	

	//获取所有权限组
	public function get() {
		show_json($this->sql->get());
	}
	/**
	 * 权限添加
	 */
	public function add(){
		$role = $this->_init_data();
		$role['role_id'] = $this->sql->get_max_id().'';
		if ($this->sql->set($role['role_id'],$role)) {
			show_json($this->L['success'],true,$role['role_id']);
		}
		show_json($this->L['error'],false);
	}

	/**
	 * 编辑
	 */
	public function edit(){
		$role = $this->_init_data();
		$role_id = $this->in['role_id'];
		if ($this->sql->set($role_id,$role)){
			show_json($this->L['success'],true,$role_id);
		}
		show_json($this->L['error'],false);
	}

	/**
	 * 删除
	 */
	public function del() {
		if (!isset($this->in['role_id'])) show_json($this->L["data_not_full"],false);
		if (strlen($this->in['role_id']) <= 1) show_json($this->L['default_user_can_not_do'],false);
		system_member::role_remove_user_update($this->in['role_id']);//用户所在权限组变更
		if($this->sql->remove($this->in['role_id'])){
			show_json($this->L['success']);
		}
		show_json($this->L['error'],false);
	}

	//
	
	/**
	 * 用户组权限列表配置
	 * 增删改查
	 */
	public function role_group_action(){
		$sql = new fileCache(USER_SYSTEM.'system_role_group.php');
		switch ($this->in['action']) {
			case 'get':
				$role_group = $sql->get();
				if($role_group['1']['name'] == 'read'){
					$role_group['1']['name'] = $this->L['system_role_read'];
				}
				if($role_group['2']['name'] == 'write'){
					$role_group['2']['name'] = $this->L['system_role_write'];
				}
				show_json($role_group,true,$this->config['path_role_define']);
				break;
			case 'add':
				$role_id = $sql->get_max_id().'';
				$role_arr = json_decode($this->in['role_arr'],true);
				if(!is_array($role_arr)) show_json($this->L['error'],false);
				if ($sql->set($role_id,$role_arr)) {
					show_json(array($role_id),true,$sql->get());
				}
				show_json($this->L['error'],false);
				break;
			case 'set':
				$role_id = $this->in['role_id'];
				$role_arr = json_decode($this->in['role_arr'],true);
				if(!is_array($role_arr)) show_json($this->L['error'],false);
				if ($sql->set($role_id,$role_arr)){
					show_json($this->L['success'],true,$sql->get());
				}
				show_json($this->L['error'],false);
				break;
			case 'del':
				$role_id = $this->in['role_id'];
				if(in_array($role_id,array("1","2"))){
					show_json($this->L['default_user_can_not_do'],false);
				}
				if($sql->remove($this->in['role_id'])){
					show_json($this->L['success'],true,$sql->get());
				}
				show_json($this->L['error'],false);
				break;
			default:break;
		}
	}


	//===========内部调用============
	/**
	 * 初始化数据 get   
	 * 只传键即可  &ext_not_allow='php,jsp'&explorer:mkfile=1&explorer:pathRname=1
	 */
	private function _init_data(){
		if (strlen($this->in['name'])<1) show_json($this->L["groupname_can_not_null"],false);
		
		$role_arr = array('name'=>rawurldecode($this->in['name']));
		$role_arr['ext_not_allow'] = $this->in['ext_not_allow'];
		foreach ($this->config['role_setting'] as $key => $actions) {
			foreach ($actions as $action) {
				$k = $key.':'.$action;
				if (isset($this->in[$k])){
					$role_arr[$k] = 1;
				}else{
					$role_arr[$k] = 0;
				}
			}
		}
		return $role_arr;
	}
}
