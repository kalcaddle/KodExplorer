<?php 
/*
* @link http://kodcloud.com/
* @author warlee | e-mail:kodcloud@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kodcloud.com/tools/license/license.txt
*/

class share extends Controller{
	private $sql;
	private $shareInfo;
	private $sharePath;
	private $path;
	function __construct(){
		parent::__construct();
		$this->tpl = TEMPLATE.'share/';
		$auth = systemRole::getInfo(1);//经过role检测

		$arrNotCheck = array('commonJs');
		if(substr($this->in['fileUrl'],0,4) == 'http'){
			$arrNotCheck[] = 'fileGet';
		}
		if (!in_array(ACT,$arrNotCheck)){
			$this->initShare();
			$this->checkShare();
			$this->assign('canDownload',$this->shareInfo['notDownload']=='1'?0:1);
		}
		//需要检查下载权限的Action
		$arrCheckDownload = array('fileDownload','zipDownload');//'fileProxy','fileGet'
		if (in_array(ACT,$arrCheckDownload)){
			if ($this->shareInfo['notDownload']=='1') {
				show_json(LNG('share_not_download_tips'),false);
			}
		}
	}

	private function initShare(){
		if(isset($this->in['user'])){
			$this->initShareOld();
			return;
		}
		$this->path = _DIR($this->in['path']);
		$this->shareInfo = $GLOBALS['kodShareInfo'];
		$user = systemMember::getInfo($GLOBALS['kodPathId']);

		$userHome = user_home_path($user);
		define('USER',USER_PATH.$user['path'].'/');
		define('USER_TEMP',USER.'data/share_temp/');
		define('HOME',$userHome);
	}

	private function checkShare(){
		$shareInfo = $this->shareInfo;
		if(!$this->shareInfo){
			$this->_error(LNG('share_error_user'));
		}
		if (isset($shareInfo['timeTo'])&&
			strlen($shareInfo['timeTo'])!=0) {
			$date = strtotime($shareInfo['timeTo']);
			if (time() > $date) {
				$this->_error(LNG('share_error_time'));
			}
		}
		//密码检测
		if ($shareInfo['sharePassword']=='') return;
		if (!isset($this->in['password'])){
			if ($_SESSION['password_'.$this->in['sid']]==$shareInfo['sharePassword']) return;
			$this->_error('password');
		}else{
			if ($this->in['password'] == $shareInfo['sharePassword']) {
				session_start();
				$_SESSION['password_'.$this->in['sid']]=$shareInfo['sharePassword'];
				show_json('success');
			}else{
				show_json(LNG('share_error_password'),false);
			}
		}
	}
	private function initShareOld(){
		if (!isset($this->in['user']) || !isset($this->in['sid'])) {
			$this->_error(LNG('share_error_param'));
		}
		$member = systemMember::loadData();
		$user = $member->get($this->in['user']);
		if (!is_array($user) || !isset($user['password'])){
			$this->_error(LNG('share_error_user'));
		}
		
		$userHome = user_home_path($user);
		define('USER',USER_PATH.$user['path'].'/');
		define('USER_TEMP',USER.'data/share_temp/');
		define('HOME',$userHome);
		$shareData = USER_PATH.$user['path'].'/data/share.php';
		if (!file_exists(iconv_system($shareData))) {
			$this->_error(LNG('share_error_user'));
		}
		$this->sql=new FileCache($shareData);
		$list = $this->sql->get();
		if (!isset($this->in['sid']) ||! $list[$this->in['sid']]){
			$this->_error(LNG('share_error_sid'));
		}
		$this->shareInfo = $list[$this->in['sid']];
		$sharePath = _DIR_CLEAR($this->shareInfo['path']);
		if ($user['role'] != '1') {
			$sharePath = HOME.ltrim($sharePath,'/');
		}else{
			$sharePath = _DIR_CLEAR($this->shareInfo['path']);
		}
		if ($this->shareInfo['type'] != 'file'){
			$sharePath=rtrim($sharePath,'/').'/';
		}
		$sharePath = iconv_system($sharePath);
		if (!file_exists($sharePath)) {
			$this->_error(LNG('share_error_path'));
		}
		$this->sharePath = $sharePath;
		if($this->shareInfo['type'] == 'file'){
			$this->path = $sharePath;
		}else if(isset($this->in['path'])){
			$this->path = $sharePath.$this->_clear($this->in['path']);
		}else{
			$this->path = $sharePath;
		}
		$this->path = _DIR_CLEAR($this->path);
		$GLOBALS['kodPathPre'] = iconv_app(_DIR_CLEAR($sharePath));
		//debug_out($GLOBALS['kodPathPre'],$GLOBALS['kodPathId'],$this->shareInfo,$this->path,$sharePath);
	}
	private function _clear($path){
		return  iconv_system(_DIR_CLEAR($path));
	}



	private function _error($msg){
		$this->assign('configTheme','mac');
		$this->assign('msg',$msg);
		$this->display('tips.html');
		exit;
	}
	//==========================
	//页面统一注入变量
	private function _assignInfo(){
		$config = FileCache::load(USER.'data/config.php');
		if (count($config)<1) {
			$config = $GLOBALS['config']['settingDefault'];
		}
		$this->assign('configTheme',$config['theme']);
		$this->shareInfo['sharePassword'] = '';
		$this->shareInfo['path'] = get_path_this(iconv_app($this->path));
		$this->assign('shareInfo',$this->shareInfo);
	}

	//下载次数统计
	private function _shareDownloadAdd(){
		$this->shareInfo['numDownload'] = abs(intval($this->shareInfo['numDownload'])) +1;        
		$this->sql->set($this->in['sid'],$this->shareInfo);
	}

	//==========================
	/*
	 * 文件浏览
	 */
	public function file() {
		$this->shareViewAdd();
		if ($this->shareInfo['type']!='file') {
			//$this->shareInfo['name'] = get_path_this($this->path);
		}
		$size = filesize($this->path);
		$this->shareInfo['size'] = size_format($size);
		$this->_assignInfo();
		$this->display('file.html');
	}
	/*
	 * 文件夹浏览
	 */
	public function folder() {
		$this->shareViewAdd();
		if(isset($this->in['path']) && $this->in['path'] !=''){
			$dir = '/'._DIR_CLEAR($this->in['path']);
		}else{
			$dir = '/';//首次进入系统,不带参数
		}
		$dir = '/'.trim($dir,'/').'/';
		$this->_assignInfo();
		$this->assign('dir',$dir);

		if ($this->config['forceWap']) {
			$this->display('explorerWap.html');
		}else{
			$this->display('explorer.html');
		}
	}
	/*
	 * 代码阅读
	 */
	public function codeRead() {
		$this->shareViewAdd();
		$this->_assignInfo();
		$this->display('editor.html');
	}
	//浏览次数统计
	private function shareViewAdd(){
		$this->shareInfo['numDownload'] = isset($this->shareInfo['numDownload'])?$this->shareInfo['numDownload']:0;
		$this->shareInfo['numView'] = isset($this->shareInfo['numView'])?$this->shareInfo['numView']:0;

		$this->shareInfo['numView'] = abs(intval($this->shareInfo['numView'])) +1;        
		$this->sql->set($this->in['sid'],$this->shareInfo);
	}
	public function commonJs(){
		$out  = ob_get_clean();
		$versionDesc = isset($this->config['settings']['versionDesc'])?$this->config['settings']['versionDesc']:"";
		$theConfig = array(
			'environment'	=> STATIC_JS,
			'lang'          => I18n::getType(),
			'systemOS'		=> $this->config['systemOS'],
			'isRoot'        => 0,
			'webRoot'       => '',
			'webHost'       => HOST,
			'appHost'       => APP_HOST,
			'staticPath'    => STATIC_PATH,
			'version'       => KOD_VERSION,
			'versionDesc'   => $versionDesc,
			'kodID'			=> md5(BASIC_PATH.$this->config['settingSystem']['systemPassword']),

			'uploadMax'		=> file_upload_size(),
			'jsonData'     	=> "",
			'sharePage'     => 'share',
			'settings'		=> array(
				'paramRewrite'	=> $this->config['settings']['paramRewrite'],
				'pluginServer'	=> $this->config['settings']['pluginServer'],
				//'appType'		=> $this->config['settings']['appType']
			),

			//虚拟目录
			'KOD_GROUP_PATH'		=>	KOD_GROUP_PATH,
			'KOD_GROUP_SHARE'		=>	KOD_GROUP_SHARE,
			'KOD_USER_SELF'			=>  KOD_USER_SELF,
			'KOD_USER_SHARE'		=>	KOD_USER_SHARE,
			'KOD_USER_RECYCLE'		=>	KOD_USER_RECYCLE,
			'KOD_USER_FAV'			=>	KOD_USER_FAV,
			'KOD_GROUP_ROOT_SELF'	=>	KOD_GROUP_ROOT_SELF,
			'KOD_GROUP_ROOT_ALL'	=>	KOD_GROUP_ROOT_ALL,
		);

		$userConfig = $GLOBALS['config']['settingDefault'];
		if(isset($this->in['user'])){
			$member = systemMember::loadData();
			$user = $member->get($this->in['user']);
			$userConfig = FileCache::load(USER_PATH.$user['path'].'/'.'data/config.php');
		}

		if(isset($this->config['settingSystem']['versionHash'])){
			$theConfig['versionHash'] = $this->config['settingSystem']['versionHash'];
		}
		$theConfig['userConfig'] = $userConfig;
		$useTime = mtime() - $GLOBALS['config']['appStartTime'];

		header("Content-Type: application/javascript");
		echo 'if(typeof(kodReady)=="undefined"){kodReady=[];}';
		Hook::trigger('user.commonJs.insert',$this->in['st'],$this->in['act']);
		echo 'AUTH=[];';
		echo 'G='.json_encode($theConfig).';';
		echo 'LNG='.json_encode(I18n::getAll()).';G.useTime='.$useTime.';';
	}



	//========ajax function============
	public function pathInfo(){
		$infoList = json_decode($this->in['dataArr'],true);
		foreach ($infoList as &$val) {          
			$val['path'] = $this->sharePath.$this->_clear($val['path']);
		}
		$data = path_info_muti($infoList,LNG('time_type_info'));
		$data['path'] = _DIR_OUT($data['path']);

		//属性查看，单个文件则生成临时下载地址。没有权限则不显示
		if (count($infoList)==1 && $infoList[0]['type']!='folder') {//单个文件
			$file = $infoList[0]['path'];
			if($this->shareInfo['notDownload']!='1'){
				$data['downloadPath'] = _make_file_proxy($file);
			}
			if($data['size'] < 100*1024|| isset($this->in['getMd5'])){
				$data['fileMd5'] = @md5_file($file);
			}else{
				$data['fileMd5'] = "...";
			}

			//获取图片尺寸
			$ext = get_path_ext($file);
			if(in_array($ext,array('jpg','gif','png','jpeg','bmp')) ){
				$size = ImageThumb::imageSize($file);
				if($size){
					$data['imageSize'] = $size;
				}
			}
		}
		show_json($data);
	}
	public function fileSave(){
		show_json(LNG('no_permission'),false);
	}

	// 单文件编辑
	public function edit(){
		$member = systemMember::loadData();
		$user = $member->get($this->in['user']);
		$codeConfig = FileCache::load(USER_PATH.$user['path'].'/data/editor_config.php');
		if(!is_array($codeConfig)){
			$codeConfig = $GLOBALS['config']['editorDefault'];
		}

		$black_theme = array("ambiance","idle_fingers","monokai","pastel_on_dark","twilight",
					"solarized_dark","tomorrow_night_blue","tomorrow_night_eighties");
		$setClass = "";
		if(in_array($codeConfig['theme'],$black_theme)){
			$setClass = 'class="code-theme-black"';
		}
		$this->_assignInfo();
		$this->assign('editorConfig',json_encode($codeConfig));//获取编辑器配置信息
		$this->assign('codeThemeBlack',$setClass);//获取编辑器配置信息
		$this->display('edit.html');
	}
	
	public function pathList(){
		$list=$this->_path($this->path);
		show_json($list);
	}
	public function treeList(){
		$path=$this->path;
		if (isset($this->in['project'])) {
			$path = $this->sharePath.$this->_clear($this->in['project']);
		}
		if (isset($this->in['name'])){
			$path=$path.'/'.$this->_clear($this->in['name']);
		}
		$listFile = ($this->in['app'] == 'editor'?true:false);//编辑器内列出文件
		$list=$this->_path($path,$listFile,true);
		function sort_by_key($a, $b){
			if ($a['name'] == $b['name']) return 0;
			return ($a['name'] > $b['name']) ? 1 : -1;
		}
		usort($list['folderList'], "sort_by_key");
		usort($list['fileList'], "sort_by_key");

		$result = array_merge($list['folderList'],$list['fileList']);
		if ($this->in['app'] != 'editor') {
			$result =$list['folderList'];
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
		if (!isset($this->in['search'])) show_json(LNG('please_inpute_search_words'),false);
		$isContent = intval($this->in['is_content']);
		$isCase = intval($this->in['is_case']);
		$ext= trim($this->in['ext']);
		$list = path_search(
			$this->path,
			iconv_system(rawurldecode($this->in['search'])),
			$isContent,$ext,$isCase);
		
		show_json(_DIR_OUT($list));
	}
	/**
	 * 上传,html5拖拽  flash 多文件
	 */
	public function fileUpload(){
		$fileName = $_FILES['file']['name']? $_FILES['file']['name']:$GLOBALS['in']['name'];
		$GLOBALS['isRoot']=0;
		$GLOBALS['auth']['extNotAllow'] = "php|asp|jsp|html|htm";
		if(!checkExt($fileName)){
			show_json(LNG('no_permission_ext'),false);
		}
		$savePath = $this->sharePath.$this->_clear($this->in['upload_to']);
		if (!path_writeable($savePath)) show_json(LNG('no_permission_write'),false);

		if ($savePath == '') show_json(LNG('upload_error_big'),false);
		if (strlen($this->in['fullPath']) > 1) {//folder drag upload
			$fullPath = _DIR_CLEAR(rawurldecode($this->in['fullPath']));
			$fullPath = get_path_father($fullPath);
			$fullPath = iconv_system($fullPath);
			if (mk_dir($savePath.$fullPath)) {
				$savePath = $savePath.$fullPath;
			}
		}

		//分片上传
		$tempDir = iconv_system(USER_TEMP);
		mk_dir($tempDir);
		if (!path_writeable($tempDir)) show_json(LNG('no_permission_write'),false);
		upload($savePath,$tempDir,'rename');
	}
	

	//代理输出
	public function fileProxy(){
		$mime = get_file_mime(get_path_ext($this->path));
		if($mime == 'text/plain'){//文本则转编码
			$fileContents = file_get_contents($this->path);
			$charset=get_charset($fileContents);
			if ($charset!='' || $charset!='utf-8') {
				$fileContents=mb_convert_encoding($fileContents,'utf-8',$charset);
			}
			echo $fileContents;
			return;
		}
		$download = isset($_GET['download']);
		$filename = isset($_GET['downFilename'])?$_GET['downFilename']:false;
		file_put_out($this->path,$download,$filename);
	}
	public function fileDownload(){
		$this->_shareDownloadAdd();
		file_put_out($this->path,true);
	}
	//文件下载后删除,用于文件夹下载
	public function fileDownloadRemove(){
		if ($this->shareInfo['notDownload']=='1') {
			show_json(LNG('share_not_download_tips'),false);
		}
		$path = _DIR_CLEAR($this->in['path']);
		$path = iconv_system(USER_TEMP.$path);
		file_put_out($path,true);
		del_file($path);
	}
	public function zipDownload(){
		$this->_shareDownloadAdd();
		$userTemp = iconv_system(USER_TEMP);
		if(!file_exists($userTemp)){
			mkdir($userTemp);
		}else{//清除未删除的临时文件，一天前
			$list = path_list($userTemp,true,false);
			$maxTime = 3600*24;
			if ($list['fileList']>=1) {
				for ($i=0; $i < count($list['fileList']); $i++) { 
					$createTime = $list['fileList'][$i]['mtime'];//最后修改时间
					if(time() - $createTime >$maxTime){
						del_file($list['fileList'][$i]['path'].$list['fileList'][$i]['name']);
					}
				}
			}
		}
		$zipFile = $this->zip($userTemp);
		show_json(LNG('zip_success'),true,get_path_this($zipFile));
	}
	private function zip($zipPath){
		if (!isset($zipPath)) {
			show_json(LNG('share_not_download_tips'),false);
		}
		ignore_timeout();

		$zipList = json_decode($this->in['dataArr'],true);
		$listNum = count($zipList);
		$files = array();
		for ($i=0; $i < $listNum; $i++) {
			$item = _DIR_CLEAR($this->path.$this->_clear($zipList[$i]['path']));
			if(file_exists($item)){
				$files[] = $item;
			}
		}
		if(count($files)==0){
			show_json(LNG('not_exists'),false);
		}

		
		//指定目录
		if (count($files) == 1) {
			$pathThisName=get_path_this($files[0]);
		}else{
			$pathThisName=get_path_this(get_path_father($files[0]));
		}
		$zipname = $zipPath.$pathThisName.'.zip';
		$zipname = get_filename_auto($zipname,date('_H-i-s'));
		KodArchive::create($zipname,$files);
		return iconv_app($zipname);
	}


	// 获取文件数据
	public function fileGet(){
		if(isset($this->in['fileUrl'])){
			$displayName = $this->in['name'];
			$filepath = $this->in['fileUrl'];
		}else{
			$displayName = _DIR_CLEAR(rawurldecode($this->in['filename']));
			$filepath= $this->sharePath.iconv_system($displayName);
			if (!file_exists($filepath)){
				show_json(LNG('not_exists'),false);
			}
			if (!path_readable($filepath)){
				show_json(LNG('no_permission_read'),false);
			}
			if (filesize($filepath) >= 1024*1024*20){
				show_json(LNG('edit_too_big'),false);
			}
		}
		$fileContents=file_get_contents($filepath);//文件内容
		$charset=get_charset($fileContents);
		if ($charset!='' && 
			$charset!='utf-8' &&
			function_exists("mb_convert_encoding")
			){
			$fileContents=@mb_convert_encoding($fileContents,'utf-8',$charset);
		}
		$data = array(
			'ext'		=> get_path_ext($displayName),
			'name'      => iconv_app(get_path_this($displayName)),
			'filename'	=> $displayName,
			'charset'	=> $charset,
			'base64'	=> false,
			'content'	=> $fileContents
		);
		if(!json_encode(array("data"=>$fileContents))){
			$data['content'] = base64_encode($fileContents);
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
		$image = $this->path;
		$image_md5  = @md5_file($image);//文件md5
		if (strlen($image_md5)<5) {
			$image_md5 = md5($image);
		}
		$imageThumb = DATA_THUMB.$image_md5.'.png';
		if (!is_dir(DATA_THUMB)){
			mk_dir(DATA_THUMB);
		}
		if (!file_exists($imageThumb)){//如果拼装成的url不存在则没有生成过
			if (get_path_father($image)==DATA_THUMB){//当前目录则不生成缩略图
				$imageThumb = $this->path;
			}else {
				$cm=new ImageThumb($image,'file');
				$cm->prorate($imageThumb,224,200);//生成等比例缩略图
			}
		}
		if (!file_exists($imageThumb) || filesize($imageThumb)<100){//缩略图生成失败则用默认图标
			$imageThumb = $this->path;
		}
		file_put_out($imageThumb);//输出
	}

	//获取文件列表&哦exe文件json解析
	private function _path($dir,$listFile=true,$check_children=false){
		$list = path_list($dir,$listFile,true);
		$listNew = array('fileList'=>array(),'folderList'=>array());
		$pathHidden = $this->config['settingSystem']['pathHidden'];
		$exName = explode(',',$pathHidden);
		foreach ($list['fileList'] as $key => $val) {
			if (in_array($val['name'],$exName)) continue;
			if ($val['ext'] == 'oexe'){
				$path = iconv_system($val['path']);
				$json = json_decode(@file_get_contents($path),true);
				if(is_array($json)) $val = array_merge($val,$json);
			}
			$listNew['fileList'][] = $val;
		}
		foreach ($list['folderList'] as $key => $val) {
			if (in_array($val['name'],$exName)) continue;
			$listNew['folderList'][] = $val;
		}
		$s = _DIR_OUT($listNew);
		return _DIR_OUT($listNew);
	}
}
