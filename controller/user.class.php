<?php
/*
* @link http://www.kalcaddle.com/
* @author warlee | e-mail:kalcaddle@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kalcaddle.com/tools/licenses/license.txt
*/

class user extends Controller
{
    private $user;  //用户相关信息
    private $auth;  //用户所属组权限
    private $notCheck;
    function __construct(){
        parent::__construct();
        $this->tpl  = TEMPLATE  . 'user/';
        $this->user = &$_SESSION['kod_user'];
        $this->notCheck = array('loginFirst','loginSubmit','checkCode');//不需要判断的action
    }
    
    /**
     * 登陆状态检测;并初始化数据状态
     */
    public function loginCheck(){
        if(isset($_SESSION['kod_login']) && $_SESSION['kod_login'] === true){
            define('USER',USER_PATH.$this->user['name'].'/');
            if (!file_exists(USER)) {
                $this->logout();
                return;
            }
            if ($this->user['role'] == 'root') {
                define('MYHOME',USER.'home/');
                define('HOME','');
                $GLOBALS['web_root'] = WEB_ROOT;//服务器目录
                $GLOBALS['is_root'] = 1;
            }else{
                define('MYHOME','/');
                define('HOME',USER.'home/');
                $GLOBALS['web_root'] = str_replace(WEB_ROOT,'',HOME);//从服务器开始到用户目录
                $GLOBALS['is_root'] = 0;
            }
            $this->config['user_fav_file']     = USER.'data/fav.php';    // 收藏夹文件存放地址.
            $this->config['user_seting_file']  = USER.'data/config.php'; //用户配置文件
            $this->config['user']  = fileCache::load($this->config['user_seting_file']);
            return;
        }else if(in_array(ACT,$this->notCheck)){//不需要判断的action
            return;
        }else if(isset($_COOKIE['kod_name']) && isset($_COOKIE['kod_token'])){
            $member = new fileCache($this->config['system_file']['member']);
            $user = $member->get($_COOKIE['kod_name']);
            if (!is_array($user) || !isset($user['password'])) {
                $this->login();
            }
            if(md5($user['password'].get_client_ip()) == $_COOKIE['kod_token']){
                session_start();//re start
                $_SESSION['kod_login'] = true;
                $_SESSION['kod_user']= $user;
                setcookie('kod_name', $_COOKIE['kod_name'], time()+3600*24*365); 
                setcookie('kod_token',$_COOKIE['kod_token'],time()+3600*24*365); //密码的MD5值再次md5
                header('location:'.get_url());
                exit;
            }
        }
        $this->login();
    }


    /**
     * 登陆view
     */
    public function login($msg = ''){   
        if (!file_exists(USER_SYSTEM.'install.lock')) {
            $this->display('install.html');exit;
        }               
        $this->assign('msg',$msg);
        $this->display('login.html');
        exit;
    }

    /**
     * 首次登陆
     */
    public function loginFirst(){
        touch(USER_SYSTEM.'install.lock');
        header('location:./index.php');
    }


    /**
     * 退出处理
     */
    public function logout(){
        session_start();
        setcookie('kod_name', null, time()-3600); 
        setcookie('kod_token', null, time()-3600); 
        session_destroy();
        header('location:./index.php?user/login');
    }
    
    /**
     * 登陆数据提交处理
     */
    public function loginSubmit(){
        if(!isset($this->in['name']) || !isset($this->in['password'])) {
            $msg = $this->L['login_not_null'];
        }else{
            //错误三次输入验证码
            session_start();//re start
            $name = $this->in['name'];
            if(isset($_SESSION['code_error_time'])  && 
               intval($_SESSION['code_error_time']) >=3 && 
               $_SESSION['check_code'] !== strtolower($this->in['check_code'])){
                $this->login($this->L['code_error']);
            }
            $member = new fileCache($this->config['system_file']['member']);
            $user = $member->get($name);
            if ($user ===false){
                $msg = $this->L['user_not_exists'];
                $_SESSION['code_error_time'] = intval($_SESSION['code_error_time']) + 1;
            }else if(md5($this->in['password'])==$user['password']){
                if($user['status'] == 0){//初始化app
                    $this->init_app($user);
                }
                $group  = new fileCache($this->config['system_file']['group']);
                $_SESSION['kod_login'] = true;
                $_SESSION['kod_user']= $user;
                if ($this->in['rember_password'] == 'on') {
                    setcookie('kod_name', $user['name'], time()+3600*24*365);
                    setcookie('kod_token',md5($user['password'].get_client_ip()), time()+3600*24*365);
                }
                header('location:./index.php');
                return;
            }else{
                $_SESSION['code_error_time'] = intval($_SESSION['code_error_time']) + 1;
                $msg = $this->L['password_error'];
            }
        }
        $this->login($msg);
    }

    /**
     * 修改密码
     */
    public function changePassword(){
        $password_now=$this->in['password_now'];
        $password_new=$this->in['password_new'];
        if (!$password_now && !$password_new)show_json($this->L['password_not_null'],false);
        if ($this->user['password']==md5($password_now)){
            $sql=new fileCache($this->config['system_file']['member']);
            $this->user['password'] = md5($password_new);
            $sql->update($this->user['name'],$this->user);
            setcookie('kod_token',md5(md5($password_new)),time()+3600*24*365);
            show_json('success');
        }else {
            show_json($this->L['old_password_error'],false);
        }
    }

    /**
     * 权限验证；统一入口检验
     */
    public function authCheck(){
        if (isset($GLOBALS['is_root']) && $GLOBALS['is_root'] == 1) return;
        if (in_array(ACT,$this->notCheck)) return;
        if (!array_key_exists(ST,$this->config['role_setting']) ) return;
        if (!in_array(ACT,$this->config['role_setting'][ST])) return;

        //有权限限制的函数
        $key = ST.':'.ACT;
        $group  = new fileCache($this->config['system_file']['group']);
        $GLOBALS['auth'] = $auth   = $group->get($this->user['role']);

        //默认扩张功能等价权限
        $auth['explorer:pathChmod'] = $auth['explorer:pathRname'];
        $auth['explorer:pathCopyDrag']  = $auth['explorer:pathCuteDrag'];
        if ($auth[$key] !== 1) show_json($this->L['no_permission'],false);

        //扩展名限制：新建文件&上传文件&重命名文件&保存文件&zip解压文件
        $check_arr = array(
            'mkfile'    =>  isset($this->in['path'])?$this->in['path']:'',
            'pathRname' =>  isset($this->in['rname_to'])?$this->in['rname_to']:'',
            'fileUpload'=>  isset($_FILES['file']['name'])?$_FILES['file']['name']:'',
            'fileSave'  =>  isset($this->in['path'])?$this->in['path']:''
        );
        if (array_key_exists(ACT,$check_arr) && !checkExt($check_arr[ACT])){
            show_json($this->L['no_permission_ext'],false);
        }
    }


    public function checkCode() {
        session_start();//re start
        header("Content-type: image/png");
        $fontsize = 18;$len = 4;
        $width = 70;$height=27;
        $im = @imagecreatetruecolor($width, $height) or die("create image error!");
        $background_color = imagecolorallocate($im, 255, 255, 255);
        imagefill($im, 0, 0, $background_color);  
        for ($i = 0; $i < 2000; $i++) {//获取随机淡色            
            $line_color = imagecolorallocate($im, mt_rand(180,255),mt_rand(160, 255),mt_rand(100, 255));
            imageline($im,mt_rand(0,$width),mt_rand(0,$height), //画直线
                mt_rand(0,$width), mt_rand(0,$height),$line_color);
            imagearc($im,mt_rand(0,$width),mt_rand(0,$height), //画弧线
                mt_rand(0,$width), mt_rand(0,$height), $height, $width,$line_color);
        }
        $border_color = imagecolorallocate($im, 160, 160, 160);   
        imagerectangle($im, 0, 0, $width-1, $height-1, $border_color);//画矩形，边框颜色200,200,200
        
        $str = "ABCDEFGHJKMNPQRSTUVWXYZabcdefghjkmnpqrstuvwxyz23456789";
        $code = '';
        for ($i = 0; $i < $len; $i++) {//写入随机字串
            $current = $str[mt_rand(0, strlen($str)-1)];
            $text_color = imagecolorallocate($im,mt_rand(30, 140),mt_rand(30,140),mt_rand(30,140));
            imagechar($im,10,$i*$fontsize+6,rand(1,$height/3),$current,$text_color);
            $code.= $current;
        }
        imagepng($im);//显示图
        imagedestroy($im);//销毁图片
        $_SESSION['check_code'] = strtolower($code);
    }

    /**
     * 用户app初始化
     */
    public function init_app($user) {
        $sql=new fileCache($this->config['system_file']['apps']);
        $list = $sql->get();

        $default = array('365日历','pptv直播','ps','qq音乐','搜狐影视',
            '时钟','水果忍者','计算器','豆瓣电台','音悦台');
        $info = array();
        foreach ($default as $key) {
            $info[$key] = $list[$key];
        }
        $desktop = USER_PATH.$user['name'].'/home/desktop/';
        foreach ($info as $key => $data) {
            //touch($path);
            $path = iconv_system($desktop.$key.'.oexe');
            unset($data['name']);
            unset($data['desc']);
            unset($data['group']);
            file_put_contents($path, json_encode($data));
        }
        $user['status'] = 1;
        $member = new fileCache($this->config['system_file']['member']);
        $member->update($user['name'],$user);
    }
}