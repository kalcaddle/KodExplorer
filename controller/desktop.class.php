<?php

/*
* @link http://www.kalcaddle.com/
* @author warlee | e-mail:kalcaddle@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kalcaddle.com/tools/licenses/license.txt
*/

class desktop extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->tpl = TEMPLATE.'desktop/';
    }

    public function index()
    {
        $wap = is_wap() && (!isset($_COOKIE['forceWap']) || $_COOKIE['forceWap'] == '1');

        if ($wap) {
            header("location:./index.php?explorer");
            exit;
        }

        $wall = $this->config['user']['wall'];
        strlen($wall) > 3
            ? $this->assign('wall', $wall)
            : $this->assign('wall', STATIC_PATH.'images/wall_page/'.$wall.'.jpg');

        $desktop = 1 == $GLOBALS['is_root']
            ? iconv_system(MYHOME.DESKTOP_FOLDER.'/')
            : iconv_system(HOME.DESKTOP_FOLDER.'/');

        mk_dir($desktop);

        $this->display('index.php');
    }
}
