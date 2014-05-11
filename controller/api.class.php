<?php 
/*
* @link http://www.kalcaddle.com/
* @author warlee | e-mail:kalcaddle@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kalcaddle.com/tools/licenses/license.txt
*/

//集群 远程接口方式访问。多台服务器管理

class api extends Controller{
    /**
     * 构造函数
     */
    function __construct()    {
        parent::__construct();
    }

    //自动创建key 远程key  可以随意设置。二次md5值即可
	public function make_key(){
		$auth_key = make_password();
		$remote_key = md5(md5($auth_key));
		echo 'auth_key:'.$auth_key.'<br/>remote_key:'.$remote_key;
	}

    //接口代理 所有参数合并为新的参数请求远程服务器，返回结果
    public function get(){
        $url = 'http://kalcaddle.duapp.com/';
        $key = '&auth_key=f5e26983908f6ee6d54fbe3ada4b52db';
    }
}
