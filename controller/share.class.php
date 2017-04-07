<?php 
/*
* @link http://www.kalcaddle.com/
* @author warlee | e-mail:kalcaddle@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kalcaddle.com/tools/licenses/license.txt
*/

class share extends Controller{
	private $sql;
	private $share_info;
	private $share_path;
	private $path;
	function __construct(){
		parent::__construct();
		$this->tpl = TEMPLATE.'share/';
		$auth = system_role::get_info(1);//经过role检测
		//不需要检查的action
		$arr_not_check = array('common_js');
		if (!in_array(ACT,$arr_not_check)){
			$this->_check_share();
			$this->_init_info();
			$this->assign('can_download',$this->share_info['not_download']=='1'?0:1);
		}
		//需要检查下载权限的Action
		$arr_check_download = array('fileDownload','zipDownload');//'fileProxy','fileGet'
		if (in_array(ACT,$arr_check_download)){
			if ($this->share_info['not_download']=='1') {
				show_json($this->L['share_not_download_tips'],false);
			}
		}
	}
	//======//
	private function _check_share(){
		if (!isset($this->in['user']) || !isset($this->in['sid'])) {
			$this->error($this->L['share_error_param']);
		}
		//储存该共享基础信息
		$member = system_member::load_data();
		$user = $member->get($this->in['user']);
		$share_data = USER_PATH.$user['path'].'/data/share.php';
		if (!file_exists(iconv_system($share_data))) {
			$this->error($this->L['share_error_user']);
		}
		$this->sql=new fileCache($share_data);
		$list = $this->sql->get();
		if (!isset($this->in['sid']) ||! $list[$this->in['sid']]){
			$this->error($this->L['share_error_sid']);
		}

		$this->share_info = $list[$this->in['sid']];
		$share_info = $this->share_info;
		//检查是否过期
		if (isset($share_info['time_to'])&&
			$share_info['time_to'].length!=0) {
			$date = strtotime($share_info['time_to']);
			if (time() > $date) {
				$this->error($this->L['share_error_time']);
			}
		}
		
		//密码检测
		if ($share_info['share_password']=='') return;
		//if ($_SESSION['kod_user']['name']==$this->in['user']) return;
		//提交密码
		if (!isset($this->in['password'])){
			//输入密码
			if ($_SESSION['password_'.$this->in['sid']]==$share_info['share_password']) return;
			$this->error('password');
		}else{
			if ($this->in['password'] == $share_info['share_password']) {
				session_start();
				$_SESSION['password_'.$this->in['sid']]=$share_info['share_password'];
				show_json('success');
			}else{
				show_json($this->L['share_error_password'],false);
			}
		}
	}
	private function _init_info(){
		//获取用户组，根据是否为root 定义前缀
		$member = system_member::load_data();
		$user = $member->get($this->in['user']);
		if (!is_array($user) || !isset($user['password'])){
			$this->error($this->L['share_error_user']);
		}
		define('USER',USER_PATH.$user['path'].'/');
		define('USER_TEMP',USER.'data/share_temp/');
		$share_path = _DIR_CLEAR($this->share_info['path']);
		$user_home = user_home_path($user);
		define('HOME',$user_home);

		if ($user['role'] != '1') {
			$share_path = HOME.$share_path;
		}else{
			$share_path = _DIR_CLEAR($this->share_info['path']);
		}
		if ($this->share_info['type'] != 'file'){
			$share_path=rtrim($share_path,'/').'/';
		}
		$share_path = iconv_system($share_path);
		if (!file_exists($share_path)) {
			$this->error($this->L['share_error_path']);
		}
		$this->share_path = $share_path;
		if($this->share_info['type'] == 'file'){
			$this->path = $share_path;
		}else if(isset($this->in['path'])){
			$this->path = $share_path.$this->_clear($this->in['path']);
		}else{
			$this->path = $share_path;
		}
		$this->path = _DIR_CLEAR($this->path);
		$GLOBALS['path_pre'] = iconv_app(_DIR_CLEAR($share_path));
	}
	private function _clear($path){
		return  iconv_system(_DIR_CLEAR($path));
	}
	private function error($msg){
		$this->assign('config_theme','mac');
		$this->assign('msg',$msg);
		$this->display('tips.php');
		exit;
	}

	//==========================
	/*
	 * 文件浏览
	 */
	public function file() {
		$this->share_view_add();
		if ($this->share_info['type']!='file') {
			$this->share_info['name'] = get_path_this($this->path);
		}
		$size = filesize($this->path);
		$this->share_info['size'] = size_format($size);
		$this->_assign_info();
		$this->display('file.php');
	}
	/*
	 * 文件夹浏览
	 */
	public function folder() {
		$this->share_view_add();
		if(isset($this->in['path']) && $this->in['path'] !=''){
			$dir = '/'._DIR_CLEAR($this->in['path']);
		}else{
			$dir = '/';//首次进入系统,不带参数
		}
		$dir = '/'.trim($dir,'/').'/';
		$this->_assign_info();
		$this->assign('dir',$dir);

		if ($this->config['forceWap']) {
			$this->display('explorer_wap.php');
		}else{
			$this->display('explorer.php');
		}
	}
	/*
	 * 代码阅读
	 */
	public function code_read() {
		$this->share_view_add();
		$this->_assign_info();
		$this->display('editor.php');
	}

	//==========================
	//页面统一注入变量
	private function _assign_info(){
		$config = fileCache::load(USER.'data/config.php');
		if (count($config)<1) {
			$config = $GLOBALS['config']['setting_default'];
		}
		$this->assign('config_theme',$config['theme']);
		$this->share_info['share_password'] = '';
		$this->share_info['path'] = get_path_this(iconv_app($this->path));
		$this->assign('share_info',$this->share_info);
	}
	//下载次数统计
	private function share_download_add(){
		$this->share_info['num_download'] = abs(intval($this->share_info['num_download'])) +1;        
		$this->sql->set($this->in['sid'],$this->share_info);
	}
	//浏览次数统计
	private function share_view_add(){
		$this->share_info['num_download'] = isset($this->share_info['num_download'])?$this->share_info['num_download']:0;
		$this->share_info['num_view'] = isset($this->share_info['num_view'])?$this->share_info['num_view']:0;

		$this->share_info['num_view'] = abs(intval($this->share_info['num_view'])) +1;        
		$this->sql->set($this->in['sid'],$this->share_info);
	}
	public function common_js(){
		$out = ob_get_clean();
		$the_config = array(
			'lang'          => LANGUAGE_TYPE,
			'system_os'		=> $this->config['system_os'],
			'is_root'       => 0,
			'web_root'      => '',
			'web_host'      => HOST,
			'app_host'      => APPHOST,
			'static_path'   => STATIC_PATH,
			'version'       => KOD_VERSION,
			'version_desc'  => isset($this->config['settings']['version_desc'])?$this->config['settings']['version_desc']:"",

			'upload_max'	=> file_upload_size(),
			'param_rewrite' => $this->config['settings']['param_rewrite'],
			'json_data'     => "",
			'share_page'    => 'share'
		);

		$user_config = $GLOBALS['config']['setting_default'];
		if(isset($this->in['user'])){
			$member = system_member::load_data();
			$user = $member->get($this->in['user']);
			$user_config = fileCache::load(USER_PATH.$user['path'].'/'.'data/config.php');
		}

		if(isset($this->config['setting_system']['version_hash'])){
			$the_config['version_hash'] = $this->config['setting_system']['version_hash'];
		}
		if(defined('OFFICE_KOD_SERVER')){
			$the_config['kodOffice'] = OFFICE_KOD_OPEN;
		}
		
		$the_config['user_config'] = $user_config;
		$js  = 'LNG='.json_encode($GLOBALS['L']).';';
		$js .= 'AUTH=[];';
		$js .= 'G='.json_encode($the_config).';';
		header("Content-Type: application/javascript");
		echo $js;
	}



	//========ajax function============
	public function pathInfo(){
		$info_list = json_decode($this->in['data_arr'],true);
		foreach ($info_list as &$val) {          
			$val['path'] = $this->share_path.$this->_clear($val['path']);
		}
		$data = path_info_muti($info_list,$this->L['time_type_info']);
		$data['path'] = _DIR_OUT($data['path']);

		//属性查看，单个文件则生成临时下载地址。没有权限则不显示
		if (count($info_list)==1 && $info_list[0]['type']!='folder') {//单个文件
			$file = $info_list[0]['path'];
			if($this->share_info['not_download']!='1'){
				$data['download_path'] = _make_file_proxy($file);
			}
			if($data['size'] < 100*1024|| isset($this->in['get_md5'])){
				$data['file_md5'] = @md5_file($file);
			}else{
				$data['file_md5'] = "...";
			}

			//获取图片尺寸
			$ext = get_path_ext($file);
			if(in_array($ext,array('jpg','gif','png','jpeg','bmp')) ){
				load_class('imageThumb');
				$size = imageThumb::imageSize($file);
				if($size){
					$data['image_size'] = $size;
				}
			}
		}
		show_json($data);
	}
	public function fileSave(){
		show_json($this->L['no_permission'],false);
	}

	// 单文件编辑
	public function edit(){
		$member = system_member::load_data();
		$user = $member->get($this->in['user']);
		$code_config = fileCache::load(USER_PATH.$user['path'].'/data/editor_config.php');
		if(!is_array($code_config)){
			$code_config = $GLOBALS['config']['editor_default'];
		}

		$black_theme = array("ambiance","idle_fingers","monokai","pastel_on_dark","twilight",
					"solarized_dark","tomorrow_night_blue","tomorrow_night_eighties");
		$set_class = "";
		if(in_array($code_config['theme'],$black_theme)){
			$set_class = 'class="code_theme_black"';
		}
		$this->_assign_info();
		$this->assign('editor_config',json_encode($code_config));//获取编辑器配置信息
		$this->assign('code_theme_black',$set_class);//获取编辑器配置信息
		$this->display('edit.php');
	}

	// public function unzipList(){
	// 	load_class('kodArchive');
	// 	if(isset($this->in['index'])){
	// 		$download = isset($this->in['download'])?true:false;
	// 		kodArchive::filePreview($this->path,$this->in['index'],$download);
	// 	}else{
	// 		$result = kodArchive::listContent($this->path);
	// 		show_json($result['data'],$result['code']);
	// 	}
	// }
	
	public function pathList(){
		$list=$this->path($this->path);
		show_json($list);
	}
	public function treeList(){
		$path=$this->path;
		if (isset($this->in['project'])) {
			$path = $this->share_path.$this->_clear($this->in['project']);
		}
		if (isset($this->in['name'])){
			$path=$path.'/'.$this->_clear($this->in['name']);
		}
		$list_file = ($this->in['app'] == 'editor'?true:false);//编辑器内列出文件
		$list=$this->path($path,$list_file,true);
		function sort_by_key($a, $b){
			if ($a['name'] == $b['name']) return 0;
			return ($a['name'] > $b['name']) ? 1 : -1;
		}
		usort($list['folderlist'], "sort_by_key");
		usort($list['filelist'], "sort_by_key");

		$result = array_merge($list['folderlist'],$list['filelist']);
		if ($this->in['app'] != 'editor') {
			$result =$list['folderlist'];
		}
		if (isset($this->in['type']) && $this->in['type']=='init') {
			$result = array(
				array(
					'name'      => iconv_app(get_path_this($path)),
					'children'  => $result,
					//'menuType'  => "menuTreeRoot",
					'open'      => true,
					'type'      => 'folder',
					'path' 		=> '/',
					'isParent'  => count($result)>0?true:false
				)
			);
		}
		show_json($result);
	}
	public function search(){
		if (!isset($this->in['search'])) show_json($this->L['please_inpute_search_words'],false);
		$is_content = intval($this->in['is_content']);
		$is_case = intval($this->in['is_case']);
		$ext= trim($this->in['ext']);
		$list = path_search(
			$this->path,
			iconv_system(rawurldecode($this->in['search'])),
			$is_content,$ext,$is_case);
		
		show_json(_DIR_OUT($list));
	}

	//生成临时文件key
	public function officeView(){
		if(substr($this->in['path'],0,4) == 'http'){//url
			$file_name = get_path_this($this->in['path']);
			$file_url = $this->in['path'].'&access_token='.access_token_get().'&name=/'.$file_name;
			$file_is_url = ture;
		}else{
			if (!file_exists($this->path)) {
				show_tips($this->L['not_exists']);
			}
			$file_url = _make_file_proxy($this->path);
			$file_is_url = false;
		}

        //kodoffice 预览
		if(defined("OFFICE_KOD_SERVER")){
			$app_r = rand_string(10);
			$office_url = OFFICE_KOD_SERVER.rawurlencode($file_url)
						.'&lang='.LANGUAGE_TYPE.'&appType=desktp&appMode=view'
						.'&file_time='.@filemtime($this->path).'&key='.md5($this->path)
						.'&app_id='.OFFICE_KOD_APP_ID.'&app_s='.$app_r.'&app_v='.md5($app_r.OFFICE_KOD_APP_KEY);
			header("location:".$office_url);
			exit;
		}

		//插件支持：flash转换 or 在线编辑
		if (file_exists(PLUGIN_DIR.'officeView')) {
			if(isset($_GET['is_edit']) || !isset($this->config['settings']['office_server_doc2pdf'])){
				include(PLUGIN_DIR.'officeView/index.php');
			}else{
				include(PLUGIN_DIR.'officeView/flexpapper.php');
			}
			exit;
		}

		//office live 浏览
		$host = $_SERVER['HTTP_HOST'];
		if (strpos(OFFICE_SERVER,'view.officeapps.live.com') === -1 ||
			strstr($host,'10.10.') ||
			strstr($host,'192.168.')||
			strstr($host,'127.0.') ||
			!strstr($host,'.')) {
			$local_tips = $this->L['unknow_file_office'];
			show_tips($local_tips);
		}else{
			$office_url = OFFICE_SERVER.rawurlencode($file_url);
			header("location:".$office_url);
		}
	}


	/**
	 * 上传,html5拖拽  flash 多文件
	 */
	public function fileUpload(){
		$file_name = isset($_FILES['file']['name'])?$_FILES['file']['name']:'';
		$GLOBALS['is_root']=0;
		$GLOBALS['auth']['ext_not_allow'] = "php|asp|jsp";

		if(!checkExt($file_name)){
			show_json($this->L['no_permission_ext'],false);
		}
		$save_path = $this->share_path.$this->_clear($this->in['upload_to']);
		if (!path_writeable($save_path)) show_json($this->L['no_permission_write'],false);

		if ($save_path == '') show_json($this->L['upload_error_big'],false);
		if (strlen($this->in['fullPath']) > 1) {//folder drag upload
			$full_path = _DIR_CLEAR(rawurldecode($this->in['fullPath']));
			$full_path = get_path_father($full_path);
			$full_path = iconv_system($full_path);
			if (mk_dir($save_path.$full_path)) {
				$save_path = $save_path.$full_path;
			}
		}

		//分片上传
		$temp_dir = iconv_system(USER_TEMP);
		mk_dir($temp_dir);
		if (!path_writeable($temp_dir)) show_json($this->L['no_permission_write'],false);
		upload_chunk('file',$save_path,$temp_dir,'rename');
	}
	

	//代理输出
	public function fileProxy(){
		$mime = get_file_mime(get_path_ext($this->path));
		if($mime == 'text/plain'){//文本则转编码
			$filecontents = file_get_contents($this->path);
			$charset=get_charset($filecontents);
			if ($charset!='' || $charset!='utf-8') {
				$filecontents=mb_convert_encoding($filecontents,'utf-8',$charset);
			}
			echo $filecontents;
			return;
		}
		
		$download = isset($this->in['download']);
		file_put_out($this->path,$download);
	}
	public function fileDownload(){
		$this->share_download_add();
		file_put_out($this->path,true);
	}
	//文件下载后删除,用于文件夹下载
	public function fileDownloadRemove(){
		if ($this->share_info['not_download']=='1') {
			show_json($this->L['share_not_download_tips'],false);
		}
		$path = _DIR_CLEAR($this->in['path']);
		$path = iconv_system(USER_TEMP.$path);
		file_put_out($path,true);
		del_file($path);
	}
	public function zipDownload(){
		$this->share_download_add();
		$user_temp = iconv_system(USER_TEMP);
		if(!file_exists($user_temp)){
			mkdir($user_temp);
		}else{//清除未删除的临时文件，一天前
			$list = path_list($user_temp,true,false);
			$max_time = 3600*24;
			if ($list['filelist']>=1) {
				for ($i=0; $i < count($list['filelist']); $i++) { 
					$create_time = $list['filelist'][$i]['mtime'];//最后修改时间
					if(time() - $create_time >$max_time){
						del_file($list['filelist'][$i]['path'].$list['filelist'][$i]['name']);
					}
				}
			}
		}
		$zip_file = $this->zip($user_temp);
		show_json($this->L['zip_success'],true,get_path_this($zip_file));
	}
	private function zip($zip_path){
		if (!isset($zip_path)) {
			show_json($this->L['share_not_download_tips'],false);
		}
		ignore_timeout();

		$zip_list = json_decode($this->in['data_arr'],true);
		$list_num = count($zip_list);
		$files = array();
		for ($i=0; $i < $list_num; $i++) {
			$item = _DIR_CLEAR($this->path.$this->_clear($zip_list[$i]['path']));
			if(file_exists($item)){
				$files[] = $item;
			}
		}
		if(count($files)==0){
			show_json($this->L['not_exists'],false);
		}

		
		//指定目录
		if (count($files) == 1) {
			$path_this_name=get_path_this($files[0]);
		}else{
			$path_this_name=get_path_this(get_path_father($files[0]));
		}
		$zipname = $zip_path.$path_this_name.'.zip';
		$zipname = get_filename_auto($zipname,date('_H-i-s'));

		load_class('kodArchive');
		kodArchive::create($zipname,$files);
		return iconv_app($zipname);
	}


	// 获取文件数据
	public function fileGet(){
		if(isset($this->in['file_url'])){
			$display_name = $this->in['name'];
			$filepath = $this->in['file_url'];
		}else{
			$display_name = _DIR_CLEAR(rawurldecode($this->in['filename']));
			$filepath= $this->share_path.iconv_system($display_name);
			if (!file_exists($filepath)){
				show_json($this->L['not_exists'],false);
			}
			if (!path_readable($filepath)){
				show_json($this->L['no_permission_read'],false);
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
		show_json($data);
	}
	
	public function image(){
		if (filesize($this->path) <= 1024*50 ||
			!function_exists('imagecolorallocate') ) {//小于50k或者不支持gd库 不再生成缩略图
			file_put_out($this->path);
			return;
		}
		load_class('imageThumb');
		$image = $this->path;
		$image_md5  = @md5_file($image);//文件md5
		if (strlen($image_md5)<5) {
			$image_md5 = md5($image);
		}
		$image_thum = DATA_THUMB.$image_md5.'.png';
		if (!is_dir(DATA_THUMB)){
			mk_dir(DATA_THUMB);
		}
		if (!file_exists($image_thum)){//如果拼装成的url不存在则没有生成过
			if (get_path_father($image)==DATA_THUMB){//当前目录则不生成缩略图
				$image_thum=$this->path;
			}else {
				$cm=new imageThumb($image,'file');
				$cm->prorate($image_thum,224,200);//生成等比例缩略图
			}
		}
		if (!file_exists($image_thum) || filesize($image_thum)<100){//缩略图生成失败则用默认图标
			$image_thum=$this->path;
		}
		file_put_out($image_thum);//输出
	}

	//获取文件列表&哦exe文件json解析
	private function path($dir,$list_file=true,$check_children=false){
		$list = path_list($dir,$list_file,true);
		$list_new = array('filelist'=>array(),'folderlist'=>array());
		$path_hidden = $this->config['setting_system']['path_hidden'];
		$ex_name = explode(',',$path_hidden);
		foreach ($list['filelist'] as $key => $val) {
			if (in_array($val['name'],$ex_name)) continue;
			if ($val['ext'] == 'oexe'){
				$path = iconv_system($val['path']);
				$json = json_decode(@file_get_contents($path),true);
				if(is_array($json)) $val = array_merge($val,$json);
			}
			$list_new['filelist'][] = $val;
		}
		foreach ($list['folderlist'] as $key => $val) {
			if (in_array($val['name'],$ex_name)) continue;
			$list_new['folderlist'][] = $val;
		}
		$s = _DIR_OUT($list_new);
		return _DIR_OUT($list_new);
	}
}
