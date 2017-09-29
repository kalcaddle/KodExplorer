<?php
/*
* @link http://kodcloud.com/
* @author warlee | e-mail:kodcloud@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kodcloud.com/tools/license/license.txt
*/

class editor extends Controller{
	function __construct()    {
		parent::__construct();
	}

	// 多文件编辑器
	public function index(){
		$this->themeSet();
		$this->display('editor.html');
	}
	// 单文件编辑
	public function edit(){
		$this->themeSet();
		$this->display('edit.html');
	}

	private function themeSet(){
		$setClass = '';
		//获取编辑器配置数据
		$editorConfig = $this->config['editorDefault'];
		$configFile = USER.'data/editor_config.php';
		if (!file_exists(iconv_system($configFile))) {//不存在则创建
			$sql=FileCache::save($configFile,$editorConfig);
		}else{
			$editorConfig=FileCache::load($configFile);
		}

		$blackTheme = array("ambiance","idle_fingers","monokai","pastel_on_dark","twilight",
					"solarized_dark","tomorrow_night_blue","tomorrow_night_eighties");
		if(in_array($editorConfig['theme'],$blackTheme)){
			$setClass = 'class="code-theme-black"';
		}
		$this->assign('editorConfig',json_encode($editorConfig));//获取编辑器配置信息
		$this->assign('codeThemeBlack',$setClass);//获取编辑器配置信息
	}

	// 获取文件数据
	public function fileGet(){
		if(isset($this->in['fileUrl'])){
			$pass = $this->config['settingSystem']['systemPassword'];
			$fileUrl = _DIR_CLEAR($this->in['fileUrl']);
			$fileUrl = str_replace(':/','://',$fileUrl);
			$urlInfo = parse_url_query($fileUrl);
			if( isset($urlInfo['fid']) &&
				strlen(Mcrypt::decode($urlInfo['fid'],$pass)) != 0
				){
				$filepath = Mcrypt::decode($urlInfo['fid'],$pass);
				$displayName = get_path_this($filepath);
				if(isset($urlInfo['downFilename'])){
					$displayName = rawurldecode($urlInfo['downFilename']);
				}
			}else{
				$displayName = rawurldecode($urlInfo['name']);
				$filepath = $fileUrl.'&accessToken='.access_token_get();
			}
		}else{
			$displayName = rawurldecode($this->in['filename']);
			$filepath =_DIR($this->in['filename']);
			if (!file_exists($filepath)){
				show_json(LNG('not_exists'),false);
			}
			if (!path_readable($filepath)){
				show_json(LNG('no_permission_read_all'),false);
			}
			if (filesize($filepath) >= 1024*1024*40){
				show_json(LNG('edit_too_big'),false);
			}
		}
		
		$fileContents=file_get_contents($filepath);//文件内容
		//echo $fileContents;exit;
		if(isset($this->in['charset'])){
			$charset = strtolower($this->in['charset']);
		}else{
			$charset = get_charset($fileContents);
		}
		if ($charset !='' &&
			$charset !='utf-8' &&
			function_exists("mb_convert_encoding")
			){
			$fileContents = @mb_convert_encoding($fileContents,'utf-8',$charset);
		}
		$data = array(
			'ext'		=> get_path_ext($displayName),
			'name'		=> iconv_app(get_path_this($displayName)),
			'filename'	=> $displayName,
			'charset'	=> $charset,
			'base64'	=> false,
			'content'	=> $fileContents
		);
		// 部分防火墙编辑文件误判问题处理
		//if(!json_encode(array("data"=>$fileContents))){
			$data['content'] = base64_encode($fileContents);
			$data['base64']  = true;
		//}
		
		// $data['size_before'] = filesize($filepath);
		// $data['size_after'] = strlen($fileContents);
		// $data['hex_before'] = bin2hex(file_get_contents($filepath));
		// $data['hex_after'] = bin2hex($fileContents);
		// $data['content_before'] = $fileContents;
		show_json($data);
	}
	public function fileSave(){
		$fileStr = rawurldecode($this->in['filestr']);
		$path =_DIR($this->in['path']);
		if(isset($this->in['create_file']) && !file_exists($path)){//不存在则创建
			if(!@touch($path)){
				show_json(LNG('create_error'),false);
			}
		}
		if (!path_writeable($path)) show_json(LNG('no_permission_write_file'),false);
		//支持二进制文件读写操作（base64方式）
		if(isset($this->in['base64'])){
			$fileStr = base64_decode($fileStr);
		}

		$charset = strtolower($this->in['charset']);
		if(isset($this->in['charsetSave'])){
			$charset = strtolower($this->in['charsetSave']);
		}
		if ( $charset !='' && 
			 $charset != 'utf-8' && 
			 $charset != 'ascii' &&
			 function_exists("mb_convert_encoding")
			) {
			$fileStr = @mb_convert_encoding($fileStr,$charset,'utf-8');
		}
		$fp=fopen($path,'wb');
		fwrite($fp,$fileStr);
		fclose($fp);
		show_json(LNG('save_success'));
	}

	/*
	* 获取编辑器配置信息
	*/
	public function setConfig(){
		$file = USER.'data/editor_config.php';
		if (!path_writeable(iconv_system($file))) {//配置不可写
			show_json(LNG('no_permission_write_file'),false);
		}
		$key= $this->in['k'];
		$value = $this->in['v'];
		if ($key !='' && $value != '') {
			$sql=new FileCache($file);
			$sql->set($key,$value);//没有则添加一条
			show_json(LNG('setting_success'));
		}else{
			show_json(LNG('error'),false);
		}
	}
}
