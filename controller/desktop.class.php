<?php
/*
* @link http://www.kalcaddle.com/
* @author warlee | e-mail:kalcaddle@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kalcaddle.com/tools/licenses/license.txt
*/

class desktop extends Controller{
	function __construct() {
		parent::__construct();
		$this->tpl = TEMPLATE.'desktop/';
	}
	public function index() {
		$wap = is_wap() && (!isset($_COOKIE['forceWap']) || $_COOKIE['forceWap'] == '1');
		if($wap){
			header("location:./index.php?explorer");
			exit;
		}

		$wall = $this->config['user']['wall'];
		if(strlen($wall)>3){
			$this->assign('wall',$wall);
		}else{
			$this->assign('wall',STATIC_PATH.'images/wall_page/'.$wall.'.jpg');
		}

		$desktop = iconv_system(HOME.'desktop/');
		if ($GLOBALS['is_root']) {
			$desktop = iconv_system(MYHOME.'desktop/');
		}
		if (!file_exists($desktop)) {
			@mkdir($desktop);
		}
		$this->display('index.php');
	}
}
