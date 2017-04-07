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
		$this->sql=new fileCache(USER_SYSTEM.'apps.php');
	}

	/**
	 * 用户首页展示
	 */
	public function index() {
		$this->display(TEMPLATE.'app/index.php');
	}

	public function init_app($user_info){
		$list = $this->sql->get();
		$new_user_app = $this->config['setting_system']['new_user_app'];
		$default = explode(',',$new_user_app);
		$info = array();
		foreach ($default as $key) {
			$info[$key] = $list[$key];
		}

		$desktop = iconv_system(HOME.DESKTOP_FOLDER.'/');
		if($GLOBALS['is_root'] == 1){
			$desktop = iconv_system(MYHOME.DESKTOP_FOLDER.'/');
		}
		mk_dir($desktop);
		if(!path_writeable($desktop)){
			return;
		}
		foreach ($info as $key => $data) {
			if (!is_array($data)) {
				continue;
			}
			$path = $desktop.iconv_system($key).'.oexe';
			unset($data['name']);
			unset($data['desc']);
			unset($data['group']);
			file_put_contents($path, json_encode($data));
		}
	}

	/**
	 * 用户app 添加、编辑
	 */
	public function user_app() {
		$path = _DIR($this->in['path']);
		if (isset($this->in['action']) && 
			$this->in['action'] == 'add'){
			$path .= '.oexe';
		}
		
		if (!checkExt($path)) {
			show_json($this->L['error']);exit;
		}

		$data = $this->_init();
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
			$list = $this->sql->get(array('group',$this->in['group']));
		}
		$list = array_reverse($list);
		show_json($list);
	}

	/**
	 * 添加
	 */
	public function add() {  
		$res=$this->sql->set(rawurldecode($this->in['name']),$this->_init());
		if($res) show_json($this->L['success']);
		show_json($this->L['error_repeat'],false);
	}

	/**
	 * 编辑
	 */
	public function edit() {
		//查找到一条记录，修改为该数组
		$this->sql->remove(rawurldecode($this->in['old_name']));
		if($this->sql->set(rawurldecode($this->in['name']),$this->_init())){
			show_json($this->L['success']);
		}
		show_json($this->L['error_repeat'],false);
	}
	/**
	 * 删除
	 */
	public function del() {
		if($this->sql->remove(rawurldecode($this->in['name']))){
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
		$data = rawurldecode($this->in['data']);
		$arr  = json_decode($data,true);
		if(!is_array($arr)){
			show_json($this->L['error'],false);
		}
		return $arr;
	}
}
