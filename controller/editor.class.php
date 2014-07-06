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
		$this->display('editor.php');
	}
	// 单文件编辑
	public function edit(){	
		$this->display('edit.php');
	}

	// 获取文件数据
	public function fileGet(){
		$filename=_DIR($this->in['filename']);
		if (!is_readable($filename)) show_json($this->L['no_permission'],false);
		if (filesize($filename) >= 1024*1024*20) show_json($this->L['edit_too_big'],false);

		$filecontents=file_get_contents($filename);//文件内容
		$charset=$this->_get_charset($filecontents);
		if ($charset!='' || $charset!='utf-8') {
			$filecontents=mb_convert_encoding($filecontents,'utf-8',$charset);
		}
		$data = array(
			'ext'		=> get_path_ext($filename),
			'name'      => iconv_app(get_path_this($filename)),
			'filename'	=> rawurldecode($this->in['filename']),
			'charset'	=> $charset,
			'content'	=> $filecontents			
		);
		show_json($data);
	}
	public function fileSave(){
		$filestr = rawurldecode($this->in['filestr']);
		$charset = $this->in['charset'];
		$path =_DIR($this->in['path']);
		if (!is_writable($path)) show_json($this->L['no_permission_write'],false);
		
		if ($charset !='' || $charset != 'utf-8') {
			$filestr=mb_convert_encoding($filestr,$this->in['charset'],'utf-8');
		}
		$fp=fopen($path,'wb');
		fwrite($fp,$filestr);
		fclose($fp);
		show_json($this->L['save_success']);
	}
	//-----------------------------------------------
	/*
	* 获取字符串编码
	* @param:$ext 传入字符串
	*/
	private function _get_charset(&$str) {
		if ($str == '') return 'utf-8';
		//前面检测成功则，自动忽略后面
		$charset=strtolower(mb_detect_encoding($str,$this->config['check_charset']));
		if (substr($str,0,3)==chr(0xEF).chr(0xBB).chr(0xBF)){
			$charset='utf-8';
		}else if($charset=='cp936'){
			$charset='gbk';
		}
		if ($charset == 'ascii') $charset = 'utf-8';
		return strtolower($charset);
	}
}