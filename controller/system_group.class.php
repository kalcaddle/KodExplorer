<?php
/*
* @link http://www.kalcaddle.com/
* @author warlee | e-mail:kalcaddle@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kalcaddle.com/tools/licenses/license.txt
*/

//群组管理【管理员调用，or组空间大小变更】
//根目录id为1==》共享空间
class system_group extends Controller{
	public static $static_sql = null;
	private $sql;
	function __construct()    {
		parent::__construct();
		$this->sql= self::load_data();
		$this->_init();
	}

	//保证只加载一次文件
	public static function load_data(){
		if(is_null(self::$static_sql)){
			self::$static_sql = system_group_data();
		}
		return self::$static_sql;
	}
	public static function get_info($the_id){
		$sql = self::load_data();
		return $sql->get($the_id);
	}

	/**
	 * 空间使用变更
	 * @param  [type] $the_id   [user_id or group_id]
	 * @param  [type] $use_size_add [变更的大小  size_max G为单位   size_use Byte为单位]
	 */
	public static function space_change($the_id,$use_size_add=false){
		$sql = self::load_data();
		$info = $sql->get($the_id);
		if(!is_array($info)){
			show_json($this->L["data_not_full"],false);
		}
		if($use_size_add===false){//重置用户空间；避免覆盖、解压等导致的问题
			$pathinfo = _path_info_more(GROUP_PATH.$info['path'].'/');
			$current_use  = $pathinfo['size'];
			if(isset($info['home_path']) && file_exists(iconv_system($info['home_path']))){
				$pathinfo = _path_info_more(iconv_system($info['home_path']));
				$current_use  += $pathinfo['size'];
			}
		}else{
			$current_use = floatval($info['config']['size_use'])+floatval($use_size_add);
		}
		$info['config']['size_use'] = $current_use<0?0:$current_use;
		$sql->set($the_id,$info);
	}

	/**
	 * 空间剩余检测
	 * 1073741824 —— 1G
	 */
	public static function space_check($the_id){
		$sql = self::load_data();
		$info = $sql->get($the_id);
		if(!is_array($info)){
			show_json($this->L["data_not_full"],false);
		}
		$size_use = floatval($info['config']['size_use']);
		$size_max = floatval($info['config']['size_max']);
		if($size_max!=0 && $size_max*1073741824<$size_use){
			show_json($GLOBALS['L']['space_is_full'],false);
		}
	}

	//管理员调用
	//===================
	private function _init(){
		if(count($this->sql->get()) > 0) return;
		$default = array(
			'1' =>array(
				'group_id'  =>  '1',
				'name'      =>  'root',
				'parent_id' =>  '',
				'children'  =>  '',
				'config'    =>  array('size_max' => floatval(1.5),
									  'size_use' => floatval(1024*1024)),//总大小，目前使用大小
				'path'      =>  'root',
				'create_time'=> time(),
			)
		);
		$this->sql->reset($default);
		$this->_initDir($default[0]['path']);
	}
	//删除 path id
	public static function _filter_list($list,$filter_key = 'path'){
		if($GLOBALS['is_root']) return $list;
		foreach ($list as $key => &$val) {
			unset($val[$filter_key]);
		}
		return $list;
	}

	public function get() {
		$items = self::_filter_list($this->sql->get());
		show_json($items,true);
	}

	/**
	 * 群组添加
	 * system_group/add&name=t1&parent_id=101&size_max=0
	 */
	public function add(){
		if (!isset($this->in['name']) || //必填项
			!isset($this->in['parent_id']) ||
			!isset($this->in['size_max'])
			) show_json($this->L["data_not_full"],false);

		//名称可以重复
		$group_id = $this->sql->get_max_id().'';
		$group_name = rawurldecode($this->in['name']);
		$group_info = array(
			'group_id'  =>  $group_id,
			'name'      =>  $group_name,
			'parent_id' =>  $this->in['parent_id'],
			'children'  =>  '',
			'config'    =>  array('size_max' => floatval($this->in['size_max']),//G
								  'size_use' => floatval(1024*1024)),//总大小，目前使用大小
			'path'      =>  make_path($group_name),
			'create_time'=> time(),
		);
		if(file_exists(iconv_system(GROUP_PATH.$group_info['path'])) ){
			$group_info['path'] = make_path($group_info['path'].'_'.$group_info['group_id']);
		}

		//用户组目录
		if( isset($this->in['home_path'])){
			$group_info['home_path'] = _DIR(rawurldecode($this->in['home_path']));
			if(!file_exists($group_info['home_path'])){
				show_json($this->L['not_exists'],false);
			}
			$group_info['home_path'] = iconv_app($group_info['home_path']);
		}else{
			unset($group_info['home_path']);
		}
		$this->_parent_child_change($group_info,true);//更新父节点
		if ($this->sql->set($group_id,$group_info)) {
			$this->_initDir($group_info['path']);
			show_json($this->L['success']);
		}
		show_json($this->L['error'],false);
	}

	/**
	 * 编辑 system_group/edit&group_id=101&name=warlee&size_max=0&parent_id
	 */
	public function edit() {
		if (!$this->in['group_id']) show_json($this->L["data_not_full"],false);
		$group_info = $this->sql->get($this->in['group_id']);
		if(!is_array($group_info)){//用户不存在
			show_json($this->L['not_exists'],false);
		}

		//name size_max parent_id
		if(isset($this->in['name'])){
			$group_info['name'] = rawurldecode($this->in['name']);
		}
		if(isset($this->in['size_max'])){
			$group_info['config']['size_max'] = floatval($this->in['size_max']);
		}
		if( isset($this->in['parent_id']) &&
			$group_info['parent_id']!= '' && //根目录不能修改父节点
			$this->in['parent_id']!=$group_info['parent_id']){//父节点变更

			$child_change = explode(',',$group_info['children']);
			if(in_array($this->in['parent_id'],$child_change)){//不能移动到子节点；死循环
				show_json($this->L['current_has_parent'],false);
			}
			self::space_change($this->in['group_id']);//重置用户使用空间
			$this->_parent_child_change($group_info,false);//向所有父节点，删除包含此节点的children
			$group_info['parent_id'] = $this->in['parent_id'];
			$this->_parent_child_change($group_info,true);//向所有新的父节点，添加包含此节点的children
		}

		//用户组目录
		if( isset($this->in['home_path'])){
			$group_info['home_path'] = _DIR(rawurldecode($this->in['home_path']));
			if(!file_exists($group_info['home_path'])){
				show_json($this->L['not_exists'],false);
			}
			$group_info['home_path'] = iconv_app($group_info['home_path']);
		}else{
			unset($group_info['home_path']);
		}
		if($group_info != $this->sql->get($this->in['group_id'])){
			$this->sql->set($this->in['group_id'],$group_info);
		}
		show_json($this->L['success']);
	}

	/**
	 * 删除 ?system_member/del&user_id=102
	 */
	public function del() {
		if (!isset($this->in['group_id'])) show_json($this->L["data_not_full"],false);
		if (strlen($this->in['group_id']) <= 1) show_json($this->L['default_user_can_not_do'],false);
		$group_info = $this->sql->get($this->in['group_id']);
		$this->_parent_child_change($group_info,false);//向所有父节点，删除包含此节点的children
		$this->sql->set(//将该节点的子节点的父节点设置为根目录
				array('parent_id',$group_info["group_id"]),
				array('parent_id','1')
				);
		system_member::group_remove_user_update($group_info["group_id"]);//用户所在组变更
		$this->sql->remove($this->in['group_id']);

		if( strlen($group_info['path'])!=0){
			del_dir(iconv_system(GROUP_PATH.$group_info['path'].'/'));
			show_json($this->L['success']);
		}
		show_json($this->L['error'],false);
	}


	//============内部处理函数=============
	//回溯更改节点的children
	private function _parent_child_change($group_info,$is_add){
		if(!is_array($group_info)){
			show_json($this->L['not_exists'],false);
		}
		if($group_info['parent_id'] == 1){
			return;
		}
		$first_id = $group_info['group_id'];
		$child_change = explode(',',$group_info['children']);
		if($child_change[0]==''){
			unset($child_change[0]);
		}
		$child_change[] = $group_info['group_id'];//包含当前
		while(strlen($group_info['group_id'])>2){//节点id从100开始
			$group_info = $this->sql->get($group_info['parent_id']);
			if(!is_array($group_info)){
				show_json($this->L['not_exists'],false);
			}
			$children_new = explode(',',$group_info['children']);
			if($children_new[0]==''){
				unset($children_new[0]);
			}
			if($is_add){//添加
				foreach ($child_change as $key=>$val) {
					$children_new[] = $val;
				}
			}else{//删除
				foreach ($children_new as $key=>$val) {
					if(in_array($val,$child_change))
					unset($children_new[$key]);
				}
			}
			$child_str = implode(',',$children_new);
			if($child_str != $group_info['children']){//有变更
				$group_info['children'] = $child_str;
				$this->sql->set($group_info['group_id'],$group_info);
			}
		}
	}

	//
	/**
	 *初始化用户数据和配置。
	 */
	private function _initDir($path){
		$root = array('home','data');
		$new_group_folder = $this->config['setting_system']['new_group_folder'];
		if(!is_array($new_group_folder)){
			$new_group_folder = $this->config['setting_system_default']['new_group_folder'];
		}
		$home = explode(',',$new_group_folder);
		$path = GROUP_PATH.$path.'/';
		foreach ($root as $dir) {
			mk_dir(iconv_system($path.$dir));
		}
		foreach ($home as $dir) {
			mk_dir(iconv_system($path.'home/'.$dir));
		}
	}
}
