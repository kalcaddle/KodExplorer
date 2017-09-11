<?php
/*
* @link http://kodcloud.com/
* @author warlee | e-mail:kodcloud@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kodcloud.com/tools/license/license.txt
*/

class desktop extends Controller{
	function __construct() {
		parent::__construct();
		$this->tpl = TEMPLATE.'desktop/';
	}
	public function index() {
		$wap = is_wap() && (!isset($_COOKIE['forceWap']) || $_COOKIE['forceWap'] == '1');
		$desktopApps = include(DATA_PATH.'system/desktop_app.php');
		$wall = $this->config['user']['wall'];
		if(strlen($wall)<3){
			$wall = STATIC_PATH.'images/wall_page/'.$wall.'.jpg';
		}

		$desktop = iconv_system(HOME.DESKTOP_FOLDER.'/');
		if($GLOBALS['isRoot'] == 1){
			$desktop = iconv_system(MYHOME.DESKTOP_FOLDER.'/');
		}
		mk_dir($desktop);

		$this->assign('wall',$wall);
		$this->assign('desktopApps',$desktopApps);
		$this->display('index.html');
	}
}
