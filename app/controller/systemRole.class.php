<?php
/*
* @link http://kodcloud.com/
* @author warlee | e-mail:kodcloud@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kodcloud.com/tools/license/license.txt
*/

class systemRole extends Controller{
	public static $staticSql = null;
	private $sql;
	function __construct(){
		parent::__construct();
		$this->sql= self::loadData();
	}

	//保证只加载一次文件
	public static function loadData(){
		if(is_null(self::$staticSql)){
			self::$staticSql = systemRoleData();
		}
		return self::$staticSql;
	}
	public static function getInfo($theId){
		$sql = self::loadData();
		return $sql->get($theId);
	}
	

	//获取所有权限组
	//用户组权限
	public function get() {
		if(isset($this->in['group_role'])){
			$this->in['action'] == 'get';
			$this->roleGroupAction();
		}
		show_json($this->sql->get());
	}
	/**
	 * 权限添加
	 */
	public function add(){
		$role = $this->_initData();
		$role['roleID'] = $this->sql->getMaxId().'';
		if ($this->sql->set($role['roleID'],$role)) {
			show_json(LNG('success'),true,$role['roleID']);
		}
		show_json(LNG('error'),false);
	}

	/**
	 * 编辑
	 */
	public function edit(){
		$role = $this->_initData();
		$roleId = $this->in['roleID'];
		if ($this->sql->set($roleId,$role)){
			show_json(LNG('success'),true,$roleId);
		}
		show_json(LNG('error'),false);
	}

	/**
	 * 删除
	 */
	public function del() {
		if (!isset($this->in['roleID'])) show_json(LNG('data_not_full'),false);
		if (strlen($this->in['roleID']) <= 1) show_json(LNG('default_user_can_not_do'),false);
		systemMember::roleRemoveUserUpdate($this->in['roleID']);//用户所在权限组变更
		if($this->sql->remove($this->in['roleID'])){
			show_json(LNG('success'));
		}
		show_json(LNG('error'),false);
	}
	
	/**
	 * 用户组权限列表配置
	 * 增删改查
	 */
	public function roleGroupAction(){
		$sql = new FileCache(USER_SYSTEM.'system_role_group.php');
		switch ($this->in['action']) {
			case 'get':
				$roleGroup = $sql->get();
				if($roleGroup['1']['name'] == 'read'){
					$roleGroup['1']['name'] = LNG('system_role_read');
				}
				if($roleGroup['2']['name'] == 'write'){
					$roleGroup['2']['name'] = LNG('system_role_write');
				}
				show_json($roleGroup,true,$this->config['pathRoleDefine']);
				break;
			case 'add':
				$roleId = $sql->getMaxId().'';
				$roleArr = json_decode($this->in['role_arr'],true);
				if(!is_array($roleArr)) show_json(LNG('error'),false);
				if ($sql->set($roleId,$roleArr)) {
					show_json(array($roleId),true,$sql->get());
				}
				show_json(LNG('error'),false);
				break;
			case 'set':
				$roleId = $this->in['roleID'];
				$roleArr = json_decode($this->in['role_arr'],true);
				if(!is_array($roleArr)) show_json(LNG('error'),false);
				if ($sql->set($roleId,$roleArr)){
					show_json(LNG('success'),true,$sql->get());
				}
				show_json(LNG('error'),false);
				break;
			case 'del':
				$roleId = $this->in['roleID'];
				if(in_array($roleId,array("1","2"))){
					show_json(LNG('default_user_can_not_do'),false);
				}
				if($sql->remove($this->in['roleID'])){
					show_json(LNG('success'),true,$sql->get());
				}
				show_json(LNG('error'),false);
				break;
			default:break;
		}
	}


	//===========内部调用============
	/**
	 * 初始化数据 get   
	 * 只传键即可  &extNotAllow='php,jsp'&explorer.mkfile=1&explorer.pathRname=1
	 */
	private function _initData(){
		if (strlen($this->in['name'])<1) show_json(LNG('groupname_can_not_null'),false);
		$roleArr = array(
			'name'			=> rawurldecode($this->in['name']),
			'extNotAllow'	=> $this->in['extNotAllow']
		);
		foreach ($this->config['roleSetting'] as $key => $actions) {
			foreach ($actions as $action) {
				$keyUrl  = $key.'_'.$action;//url explorer.mkdir => explorer_mkdir;
				$keyAuth = $key.'.'.$action;
				if (isset($this->in[$keyUrl])){
					$roleArr[$keyAuth] = 1;
				}else{
					$roleArr[$keyAuth] = 0;
				}
			}
		}
		return $roleArr;
	}
}
