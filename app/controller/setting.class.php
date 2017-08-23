<?php
/*
* @link http://kodcloud.com/
* @author warlee | e-mail:kodcloud@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kodcloud.com/tools/license/license.txt
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
		$this->display('index.html');
	}

	/**
	 * 用户首页展示
	 */
	public function slider() {
		switch ($this->in['slider']) {
			case 'about':show_json(file_get_contents(LANGUAGE_PATH.I18n::getType().'/about.html'));break;
			case 'help':show_json(file_get_contents(LANGUAGE_PATH.I18n::getType().'/help.html'));break;
			case 'member':break;
			case 'fav':break;
			case 'user':
			case 'theme':
			case 'wall':
				show_json(array(
					'settingAll'	=> $this->config['settingAll'],
					'user'			=> $this->config['user']
				));
				break;
			case 'system':
				if($GLOBALS['isRoot']){
					if(isset($this->in['env_check'])){
						show_json(php_env_check());
					}

					$result = $this->config['settingSystem'];
					unset($result['systemPassword']);
					show_json($result,true);
				}else{
					show_json('error',false);
				}
				break;
			default:break;
		}
	}

	public function phpInfo(){
		phpinfo();
	}


	//管理员  系统设置全局数据
	public function systemSetting(){
		$settingFile = USER_SYSTEM.'system_setting.php';
		$data = json_decode($this->in['data'],true);
		if (!$data) {
			show_json(LNG('error'),false);
		}
		$setting = $GLOBALS['config']['settingSystem'];
		foreach ($data as $key => $value){
			if ($key=='menu') {
				$setting[$key] = $value;
			}else{
				$setting[$key] = rawurldecode($value);
			}
		}
		//为了保存更多的数据；不直接覆盖文件 $data->setting_file;
		FileCache::save($settingFile,$setting);
		show_json(LNG('success'));
	}

	public function systemTools(){
		$action = $this->in['action'];
		switch($action){
			case 'clearCache':$this->_clearCache();break;
			case 'clearSession':$this->_clearSession();break;
			case 'clearUserRecycle':$this->_clearUserRecycle();break;
			default:break;
		}
		show_json(LNG('success'),true);
	}
	private function clearSession(){
		del_dir(KOD_SESSION);
	}
	private function _clearCache(){
		del_dir(TEMP_PATH);
		mk_dir(TEMP_PATH.'log');
		mk_dir(TEMP_PATH.'thumb');
	}
	private function _clearUserRecycle(){
		$sql = systemMember::loadData();
		$user_arr = $sql->get();
		foreach ($user_arr as $key => $user) {
			$userPath = USER_PATH.$user['path']."/";
			$pathArr = array(
				$userPath.'data/temp',
				$userPath.'data/share_temp',
				$userPath.'recycle_kod'
			);
			foreach ($pathArr as $value) {
				del_dir($value);
				mk_dir($value);
			}
		}
	}

	/**
	 * 参数设置
	 * 可以同时修改多个：key=a,b,c&value=1,2,3
	 * 防xss 做过滤
	 */
	public function set(){
		$file = USER.'data/config.php';
		if (!path_writeable(iconv_system($file))) {//配置不可写
			show_json(LNG('no_permission_write_file'),false);
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
			FileCache::save($file,$conf);
			show_json(LNG('setting_success'));
		}else{
			show_json(LNG('error'),false);
		}
	}
}
