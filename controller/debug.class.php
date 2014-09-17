<?php 
/*
* @link http://www.kalcaddle.com/
* @author warlee | e-mail:kalcaddle@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kalcaddle.com/tools/licenses/license.txt
*/

class debug extends Controller{
	public $path_app;
	public $path_to;
    function __construct() {
    	load_class('pclzip');
		$this->path_app	= BASIC_PATH;
		$this->parent = dirname(BASIC_PATH);
		$this->path_to	= $this->parent.'/release';
		$this->zip_to	= $this->parent.'/tag/kodexplorer'.KOD_VERSION.'.zip';

		//自动更新覆盖包
		$this->update_to= $this->parent.'/release_update';
		$this->update_zip_to= $this->parent.'/update/2.0-'.KOD_VERSION.'.zip';		
        parent::__construct();
    }
    /**
     * 首页
     */
    public function index() {
		echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
		debug_out(HOST,WEB_ROOT,BASIC_PATH,APPHOST,$config,$_COOKIE,$_SESSION,$_SERVER);
    }
	function less(){	
		header("Content-type: text/html; charset=utf-8");
		ob_end_clean();
		echo str_pad('',1024);
		echo '<h3>开始编译less</h3><hr/>';flush();
		$this->_less();
		echo '成功！<br/>';flush();
	}

	function export(){
		header("Content-type: text/html; charset=utf-8");
		ob_end_clean();			//在循环输出前，要关闭输出缓冲区   
		echo str_pad('',1024);  //浏览器在接受输出一定长度内容之前不会显示缓冲输出
		
		echo '<h1>开始导出！</h1><hr/><h3>删除初始文件</h3><hr/>';flush();
		del_dir($this->path_to);
		echo '删除完成！<br/><h3>删除成功,开始编译less</h3><hr/>';flush();
		//$this->_less();
		echo '编译成功！<br/><h3>开始复制文件</h3><hr/>';flush();
		$this->_fileInit();
		echo '复制成功！<br/><h3>删除开发相关文件</h3><hr/>';flush();
		$this->_remove();
		echo '删除成功！<br/><h3>开始替换模板种less相关内容</h3><hr/>';flush();
		$this->_fileReplace();
		echo '替换成功！<br/><h3>初始化默认用户数据...</h3><hr/>';flush();		
		$this->_initUser();
		echo '初始化默认用户成功!<br/><h3>打包程序</h3><hr/>';flush();

		
		ini_set('memory_limit', '2028M');//2G;
		$archive = new PclZip($this->zip_to);
        $v_list = $archive->create($this->path_to,PCLZIP_OPT_REMOVE_PATH,$this->path_to);
		echo '打包成功！<br/><h3>初始化配置文件</h3><hr/>';flush();

		$this->make_update();
		echo '更新成功！<br/><h1>导出处理完成！^_^</h1>';flush();
	}

	function make_update(){
		del_dir($this->update_to);
		mk_dir($this->update_to);
		copy_dir($this->path_to.'/', $this->update_to);
		$file_list = array(
			$this->update_to.'/static/js/lib/jquery-1.8.0.min.js'
		);
		$path_list = array(
			$this->update_to.'/data/User',
			$this->update_to.'/data/thumb',
			$this->update_to.'/data/system',
			$this->update_to.'/data/public',

			$this->update_to.'/static/style/font-awesome',
			$this->update_to.'/static/images/wall_page',
			$this->update_to.'/static/images/thumb',
			$this->update_to.'/static/images/wall_page',

			$this->update_to.'/static/js/lib/cmp4',
			$this->update_to.'/static/js/lib/ztree',
			$this->update_to.'/static/js/lib/seajs'
		);
		foreach($file_list as $val){
			del_file($val);
		}
		echo '<br/>1.更新包；文件删除完成：';flush();
		foreach($path_list as $val){
			del_dir($val);
		}
		echo '<br/>2.更新包；文件夹删除完成：';flush();
		$archive = new PclZip($this->update_zip_to);
        $v_list = $archive->create($this->update_to,PCLZIP_OPT_REMOVE_PATH,$this->update_to);
		echo '更新包打包成功！<br/><hr/>';flush();
	}

	//----------------------------	
	function _less(){
		load_class('lessc.inc');
		$path		= BASIC_PATH.'static/style/skin/';
		$app_theme	= array('default','metro','simple');
		$app_less	= array(
			'app_code_edit',
			'app_desktop',
			'app_editor',
			'app_explorer',
			'app_setting'
		);		
		$num = count($app_theme)*count($app_less);$i=1;
		foreach($app_theme  as $theme){
			foreach($app_less as $app){
				$less		= new lessc();
				$path_in	= $path.$theme.'/'.$app.'.less';
				$path_out	= $path.$theme.'/'.$app.'.css';
				try {
					$cache	= $less->cachedCompile($path_in);
					$out	= str_replace(array("{\n",";\n",",\n",'  '),
										  array('{',';',',',' '),$cache["compiled"]);
					file_put_contents($path_out,$out);
					echo $path_out,'	...成功!('.$i++.'/'.$num.')','<br/>';
					unset($less);unset($out);
				}catch (exception $e) {
					echo "<p style='color:#f66'>fatal error: " . $e->getMessage(),'</p>';
				}
				flush();
			}
		}
		//编译metro多主题
		$color_arr = array(
			'blue'		=> '#5db2ff',
			'leaf'		=> '#03B3B2',
			'green'		=> '#008a17',
			'grey'		=> '#444',
			'purple'	=> '#8D3CC4',
			'pink'		=> '#DC4FAD',
			'orange'	=> '#FF8F32'
		);

		$config = $path.'metro/config.less';
		$file = file_get_contents($config);
		preg_match('/\/\*replace_start\*\/(.*)\/\*replace_end/isU',$file,$res);
		$default = $res[1];
		preg_match('/\/\*replace_start_color\*\/(.*)\/\*replace_end_color/isU',$file,$res2);
		$new = $res2[1];
		foreach ($color_arr as $name => $color) {
			$theme = preg_replace('/@main_color:(.*);/isU',"@main_color:".$color.";",$new);
			$file_str = preg_replace('/\/\*replace_start\*\/(.*)\/\*replace_end/isU',
				"/*replace_start*/".$theme."/*replace_end",$file);
			file_put_contents($config,$file_str);
			foreach($app_less as $app){
				$less		= new lessc();
				$path_in	= $path.'metro/'.$app.'.less';
				$path_out	= $path.'metro/'.$name.'_'.$app.'.css';
				try {
					$cache	= $less->cachedCompile($path_in);
					$out	= str_replace(array("{\n",";\n",",\n",'  '),
										  array('{',';',',',' '),$cache["compiled"]);
					file_put_contents($path_out,$out);
					echo $path_out,'	...成功!('.$i++.'/'.$num.')','<br/>';
				}catch (exception $e) {
					echo "<p style='color:#f66'>fatal error: " . $e->getMessage(),'</p>';
				}
				flush();
			}
		}
		$file_str = preg_replace('/\/\*replace_start\*\/(.*)\/\*replace_end/isU',
				"/*replace_start*/".$default."/*replace_end",$file);
		file_put_contents($config,$file_str);
	}

	function _fileInit(){		
		mk_dir($this->path_to);
		echo '<br/>新建文件夹成功，开始复制文件';flush();
		copy_dir($this->path_app, $this->path_to);
		echo '<br/>复制文件成功，开始清除调试相关信息<hr/>';flush();
		echo $this->path_app,'<br/>',$this->path_to;
	}
	// 删除
	function _remove(){		
		$file_list = array(
			$this->path_to.'/data/system/install.lock',
			$this->path_to.'/lib/class/lessc.inc.class.php',
			$this->path_to.'/static/style/base.less',
			$this->path_to.'/static/js/lib/less-1.4.2.min.js',
			$this->path_to.'/static/js/lib/webuploader/webuploader.js',
			$this->path_to.'/static/style/skin/common.less',
			$this->path_to.'/todo.txt',
			$this->path_to.'/controller/debug.class.php',
		);
		$path_list = array(
			$this->path_to.'/data/log',
			$this->path_to.'/data/User',
			$this->path_to.'/data/public/',
			$this->path_to.'/data/thumb',
			$this->path_to.'/static/js/_dev',
			$this->path_to.'/static/js/app/update'
		);
		foreach($file_list as $val){
			del_file($val);
		}
		echo '<br/>1.文件删除完成：';flush();
		mkdir($this->path_to.'/data/User');
		foreach($path_list as $val){
			del_dir($val);
		}

		mk_dir($this->path_to.'/data/thumb');
		echo '<br/>2.文件夹删除完成：';flush();
		$path		= $this->path_to.'/static/style/skin/';
		$app_theme	= array('default','metro','simple');
		$app_less	= array(
			'app_code_edit','app_desktop','app_editor','app_explorer','app_setting',
			'button','config','dialog','filelist','right_menu','tree'
		);
		foreach($app_theme  as $theme){
			foreach($app_less as $app){
				$temp	= $path.$theme.'/'.$app.'.less';
				del_file($temp);
			}
		}
		echo '<br/>3.less文件删除完成<hr/>';flush();
	}

	// 删除less相关信息
	function _fileReplace(){
		$file_list = array(
			$this->path_to.'/template/app/index.php',
			$this->path_to.'/template/desktop/index.php',
			$this->path_to.'/template/editor/edit.php',
			$this->path_to.'/template/editor/editor.php',
			$this->path_to.'/template/explorer/index.php',
			$this->path_to.'/template/setting/index.php'
		);
		foreach($file_list as $val){
			$content = file_get_contents($val);
			$content = str_replace("<?php if(STATIC_LESS == 'css'){ ?>",'',$content);
			$content = str_replace("<?php echo STATIC_JS;?>",'app',$content);
			$content = preg_replace('/<\?php }else{\/\/less_compare_online \?>.*<\?php } \?>/isU','',$content);
			file_put_contents($val,$content);
			echo '<br/>处理template文件：'.$val,'成功';flush();
		}
		
		$config = $this->path_to.'/config/config.php';
		$content = file_get_contents($config);
		$content = str_replace("('STATIC_JS','_dev')","('STATIC_JS','app')",$content);
		$content = str_replace("('STATIC_LESS','less')","('STATIC_LESS','css')",$content);
		file_put_contents($config,$content);
	}

	// 默认用户初始化 admin/admin
	function _initUser(){
		echo '<br/>开始创建用户';flush();  	
        $root = array('home','recycle','data');
        $home = array('desktop','doc','download','image','movie','music');
        $user = array(
        	'admin'=>array('admin','root'),
        	'demo'=>array('demo','default'),
        	'guest'=>array('guest','guest')
        );

		mk_dir($this->path_to.'/data/public/test/');//创建公共目录
        foreach ($user as $name => $v) {//创建用户目录及初始化
	        $user_path = $this->path_to.'/data/User/'.$name.'/';
	        mk_dir($user_path);
	        foreach ($root as $dir) {
	            mk_dir($user_path.$dir);
	        }
	        foreach ($home as $dir) {
	            mk_dir($user_path.'home/'.$dir);
	        }
	        fileCache::save($user_path.'data/config.php',$this->config['setting_default']);
        }
        $this->_initUserData();
	}
	function _initUserData(){
		echo '<br/>初始化用户数据';flush();  	
		$role = '<?php exit;?>{"root":{"role":"root","name":"Administrator","path":"","ext_not_allow":""},"default":{"role":"default","name":"default","ext_not_allow":"php|asp|jsp","explorer:mkdir":1,"explorer:mkfile":1,"explorer:pathRname":1,"explorer:pathDelete":1,"explorer:zip":1,"explorer:unzip":1,"explorer:pathCopy":1,"explorer:pathCute":1,"explorer:pathCuteDrag":1,"explorer:clipboard":1,"explorer:pathPast":1,"explorer:pathInfo":1,"explorer:pathInfoMuti":1,"explorer:serverDownload":1,"explorer:fileUpload":1,"explorer:search":1,"app:user_app":1,"editor:fileSave":1},"guest":{"role":"guest","name":"guest","ext_not_allow":"php|asp|jsp"}}';
		$user = '<?php exit;?>{"admin":{"name":"admin","password":"21232f297a57a5a743894a0e4a801fc3","role":"root","status":0},"guest":{"name":"guest","password":"084e0343a0486ff05530df6c705c8bb4","role":"guest","status":0},"demo":{"name":"demo","password":"fe01ce2a7fbac8fafaed7c982a04e229","role":"default","status":0}}';
		file_put_contents($this->path_to.'/data/system/group.php',$role);
		file_put_contents($this->path_to.'/data/system/member.php',$user);
	}
}