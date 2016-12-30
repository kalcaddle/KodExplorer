<?php
/*
* @link http://www.kalcaddle.com/
* @author warlee | e-mail:kalcaddle@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kalcaddle.com/tools/licenses/license.txt
*/

class setting extends Controller{
	private $sql;
	function __construct(){
		parent::__construct();
	}

	/**
	 * 用户首页展示
	 */
	public function index() {
		$this->tpl = TEMPLATE.'setting/';
		$this->display('index.php');
	}

	/**
	 * 用户首页展示
	 */
	public function slider() {
		switch ($this->in['slider']) {
			case 'about':show_json(file_get_contents(LANGUAGE_PATH.LANGUAGE_TYPE.'/about.html'));break;
			case 'help':show_json(file_get_contents(LANGUAGE_PATH.LANGUAGE_TYPE.'/help.html'));break;
			case 'member':break;
			case 'fav':break;
			case 'user':
			case 'theme':
			case 'wall':
				show_json(array(
					'setting_all'	=> $this->config['setting_all'],
					'user'			=> $this->config['user']
				));
				break;
			case 'system':
				if($GLOBALS['is_root']){
					show_json($this->config['setting_system'],true,php_env_check());
				}else{
					show_json('error',false);
				}
				break;
			default:break;
		}
	}

	public function php_info(){
		phpinfo();
	}
	public function get_setting(){
		$setting = $GLOBALS['config']['setting_system']['menu'];
		if (!$setting) {
			$setting = $this->config['setting_menu_default'];
		}
		show_json($setting);
	}


	//管理员  系统设置全局数据
	public function system_setting(){
		$setting_file = USER_SYSTEM.'system_setting.php';
		$data = json_decode($this->in['data'],true);
		if (!$data) {
			show_json($this->L['error'],false);
		}
		$setting = $GLOBALS['config']['setting_system'];
		foreach ($data as $key => $value){
			if ($key=='menu') {
				$setting[$key] = $value;
			}else{
				$setting[$key] = rawurldecode($value);
			}
		}
		//为了保存更多的数据；不直接覆盖文件 $data->setting_file;
		fileCache::save($setting_file,$setting);
		show_json($this->L['success']);
	}

	/**
	 * 参数设置
	 * 可以同时修改多个：key=a,b,c&value=1,2,3
	 * 防xss 做过滤
	 */
	public function set(){
		$file = USER.'data/config.php';
		if (!path_writeable(iconv_system($file))) {//配置不可写
			show_json($this->L['no_permission_write_file'],false);
		}
		$key   = $this->in['k'];
		$value = $this->in['v'];
		if ($key !='' && $value != '') {
			$conf = $this->config['user'];
			if(!strpos($key,',')){//多个参数，value不能包含','
				$conf[$key] = clear_html($value);
			}else{
				$arr_k = explode(',', $key);
				$arr_v = explode(',',$value);
				$num = count($arr_k);
				for ($i=0; $i < $num; $i++) {
					$conf[$arr_k[$i]] = clear_html($arr_v[$i]);
				}
			}
			fileCache::save($file,$conf);
			show_json($this->L["setting_success"]);
		}else{
			show_json($this->L['error'],false);
		}
	}
}
