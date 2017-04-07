<?php
/*
* @link http://www.kalcaddle.com/
* @author warlee | e-mail:kalcaddle@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kalcaddle.com/tools/licenses/license.txt
*/

class editor extends Controller{
	function __construct()    {
		parent::__construct();
		$this->tpl = TEMPLATE . 'editor/';
	}

	// 多文件编辑器
	public function index(){
		$this->code_theme_set();
		$this->display('editor.php');
	}
	// 单文件编辑
	public function edit(){
		$this->code_theme_set();
		$this->display('edit.php');
	}

	private function code_theme_set(){
		$set_class = '';
		//获取编辑器配置数据
		$editor_config = $this->config['editor_default'];
		$config_file = USER.'data/editor_config.php';
		if (!file_exists(iconv_system($config_file))) {//不存在则创建
			$sql=fileCache::save($config_file,$editor_config);
		}else{
			$editor_config=fileCache::load($config_file);
		}

		$black_theme = array("ambiance","idle_fingers","monokai","pastel_on_dark","twilight",
					"solarized_dark","tomorrow_night_blue","tomorrow_night_eighties");
		if(in_array($editor_config['theme'],$black_theme)){
			$set_class = 'class="code_theme_black"';
		}
		$this->assign('editor_config',json_encode($editor_config));//获取编辑器配置信息
		$this->assign('code_theme_black',$set_class);//获取编辑器配置信息
	}

	// 获取文件数据
	public function fileGet(){
		if(isset($this->in['file_url'])){
			$display_name = $this->in['name'];
			$filepath = $this->in['file_url'].'&access_token='.access_token_get();
		}else{
			$display_name = rawurldecode($this->in['filename']);
			$filepath =_DIR($this->in['filename']);
			if (!file_exists($filepath)){
				show_json($this->L['not_exists'],false);
			}
			if (!path_readable($filepath)){
				show_json($this->L['no_permission_read_all'],false);
			}
			if (filesize($filepath) >= 1024*1024*20){
				show_json($this->L['edit_too_big'],false);
			}
		}
		
		$filecontents=file_get_contents($filepath);//文件内容
		$charset=get_charset($filecontents);
		if ($charset!='' &&
			$charset!='utf-8' &&
			function_exists("mb_convert_encoding")
			){
			$filecontents=@mb_convert_encoding($filecontents,'utf-8',$charset);
		}
		$data = array(
			'ext'		=> get_path_ext($display_name),
			'name'      => iconv_app(get_path_this($display_name)),
			'filename'	=> $display_name,
			'charset'	=> $charset,
			'base64'	=> false,
			'content'	=> $filecontents
		);
		if(!json_encode(array("data"=>$filecontents))){
			$data['content'] = base64_encode($filecontents);
			$data['base64']  = true;
		}
		//unset($data['content']);
		show_json($data);
	}
	public function fileSave(){
		$filestr = rawurldecode($this->in['filestr']);
		$charset = $this->in['charset'];
		$path =_DIR($this->in['path']);
		if(isset($this->in['create_file']) && !file_exists($path)){//不存在则创建
			if(!@touch($path)){
				show_json($this->L['create_error'],false);
			}
		}
		if (!path_writeable($path)) show_json($this->L['no_permission_write_file'],false);

		//支持二进制文件读写操作（base64方式）
		if(isset($this->in['base64'])){
			$filestr = base64_decode($filestr);
		}else if ($charset !='' && $charset != 'utf-8' && $charset != 'ascii' &&
			function_exists("mb_convert_encoding")
			) {
			$filestr=@mb_convert_encoding($filestr,$this->in['charset'],'utf-8');
		}
		$fp=fopen($path,'wb');
		fwrite($fp,$filestr);
		fclose($fp);
		show_json($this->L['save_success']);
	}

	/*
	* 获取编辑器配置信息
	*/
	public function setConfig(){
		$file = USER.'data/editor_config.php';
		if (!path_writeable(iconv_system($file))) {//配置不可写
			show_json($this->L['no_permission_write_file'],false);
		}
		$key= $this->in['k'];
		$value = $this->in['v'];
		if ($key !='' && $value != '') {
			$sql=new fileCache($file);
			$sql->set($key,$value);//没有则添加一条
			show_json($this->L["setting_success"]);
		}else{
			show_json($this->L['error'],false);
		}
	}
}
