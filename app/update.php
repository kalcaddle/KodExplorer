<?php

//helper.function.php init_common 
define('UPDATE_VERSION',KOD_VERSION);
define('UPDATE_DEV',false);

if(UPDATE_DEV){
	$old  = WEB_ROOT.'self/kod/2.4';
	$test = $old.'_test';
	del_dir($test);
	copy_dir($old.'/',$test);

	define('THE_BASIC_PATH',$test.'/');
	define('THE_DATA_PATH', $test.'/data/');
	define('THE_USER_PATH', $test.'/data/User/');
	define('THE_GROUP_PATH',$test.'/Group/');
}else{
	define('THE_BASIC_PATH',BASIC_PATH);
	define('THE_DATA_PATH', DATA_PATH);
	define('THE_USER_PATH', USER_PATH);
	define('THE_GROUP_PATH',GROUP_PATH);
}

function updateCheck(){
	if(!file_exists(THE_DATA_PATH.'system/install.lock')){
		if(UPDATE_DEV){
			echo 'not install!';exit;
		}else{
			return;
		}
	}
	unzipRepeat();//再次解压，避免windows部分主机解压失败问题
	$systemFile = THE_DATA_PATH.'system/system_setting.php';
	//from <=3.23 to 3.30
	if( file_exists(THE_DATA_PATH.'system/member.php') && 
		!file_exists(THE_DATA_PATH.'system/system_member.php')){
		new UpdateToV330();
	}

	//from [3.30~3.36] //还原用户目录
	$systemData = FileCache::load($systemFile);
	if( $systemData &&
		isset($systemData['system_password']) &&
		!isset($systemData['current_version'])
		){
		update330To336();
	}

	//from [3.36~4.01] //各种数据命名规则调整
	if( $systemData && isset($systemData['system_password'] ) ){
		new Update3To400();
	}

	//测试发布
	updateClear();
	if(UPDATE_DEV){
		echo 'success!';exit;
	}
}

function unzipRepeat(){
	$zipFile = THE_DATA_PATH.'2.0-'.UPDATE_VERSION.'.zip';
	if(!file_exists($zip_file)){
		return;
	}
	$zip = new PclZip($zipFile);
	$result = $zip->extract(PCLZIP_OPT_PATH,THE_BASIC_PATH,PCLZIP_OPT_REPLACE_NEWER);
}

function updateClear(){
	del_file(THE_DATA_PATH.'system/group.php');
	del_file(THE_DATA_PATH.'system/member.php');
	del_file(THE_DATA_PATH.'2.0-4.06.zip');
	del_file(THE_DATA_PATH.'2.0-'.UPDATE_VERSION.'.zip');
	del_file(THE_BASIC_PATH.'readme.txt');

	del_dir(THE_DATA_PATH.'i18n');
	del_dir(THE_DATA_PATH.'thumb');
	del_dir(THE_BASIC_PATH.'__MACOSX');
	del_dir(THE_DATA_PATH.'session');
	mk_dir(THE_DATA_PATH.'session');
	mk_dir(THE_DATA_PATH.'temp/thumb');
	
	updateApps();
	updateSystemSetting();
}

//APP更新覆盖
function updateApps(){
	$fileDist = THE_DATA_PATH.'system/apps.php';
	$dataDist = FileCache::load($fileDist);
	$dataNew  = getApps();
	foreach ($dataNew as $key => $value) {
		if(!is_array($value)){//删除标记
			unset($dataDist[$key]);
			continue;
		}
		$dataDist[$key] = $value;
	}
	FileCache::save($fileDist,$dataDist);
	move_path(THE_BASIC_PATH.'/app/desktop_app.php',THE_DATA_PATH.'system/desktop_app.php');
}
function updateSystemSetting(){
	$systemFile = THE_DATA_PATH.'system/system_setting.php';
	$data = FileCache::load($systemFile);
	$default = $GLOBALS['config']['settingSystemDefault'];
	if(!is_array($data) || count($data)<4){// <2.63
		$data = $default;
	}
	foreach ($default as $key => $value) {
		if(!isset($data[$key])){
			$data[$key] = $value;
		}
	}
	$data['currentVersion'] = KOD_VERSION;
	FileCache::save($systemFile,$data);
	return $data;
}


// 3.0版本到4.0版本 各种数据命名规则调整
// theme_diy => themeDIY;user_id=>userID;group_id=>groupID;parent_id=>parentID
// file:system_setting.php member.php;group.php,apps.php
class Update3To400{
	function __construct() {
		$this->initGroup();
		$this->initRole();
		$this->initMember();
		$this->dataMove();
		$this->initSystem();
	}
	private function dataMove(){
		//4.0以后授权数据迁移兼容
		$list = path_list(THE_BASIC_PATH.'lib/core/');
		$files = $list['fileList'];
		foreach ($files as $value) {
			if( $value['ext'] == 'log' &&
				substr($value['name'],0,1) == '.' ){
				@copy($value['path'],THE_BASIC_PATH.'app/core/'.$value['name']);
				break;
			}
		}

		//4.0以后;目录迁移
		$temp_path = THE_DATA_PATH.'old_app/';
		mk_dir($temp_path);
		move_path(THE_BASIC_PATH.'template',$temp_path.'/template');
		move_path(THE_BASIC_PATH.'controller',$temp_path.'/controller');
		move_path(THE_BASIC_PATH.'lib',$temp_path.'/lib');
	}


	private function keyGet($str){
		$str = str_replace(
			array('_id','theme_diy','device_uuid'),
			array('ID','themeDIY','deviceUUID'),$str);
		$str = explode('_',$str);
		for ($i=0; $i < count($str); $i++) {
			if ($i == 0) continue;
			$str[$i] = ucfirst($str[$i]);
		}
		return implode('',$str);
	}
	private function keyReplace($data,$child = array()){
		$result = array();
		foreach ($data as $key => $value) {
			$newKey  = $this->keyGet($key);
			$current = $data[$key];
			if(in_array($key,$child)){
				$current = array();
				foreach ($data[$key] as $key2 => $value2) {
					$newKey2  = $this->keyGet($key2);
					$current[$newKey2] = $value2;
				}
			}
			$result[$newKey] = $current;
		}
		return $result;
	}
	private function parseFile($file,$idKey = false,$child=array()){
		if(!file_exists(iconv_system($file)) ) return false;
		$data = FileCache::load($file);//此处文件会转编码为系统编码
		if(!$idKey){
			$result = $this->keyReplace($data,$child);
		}else{//第一层是id
			$result = array();
			foreach ($data as $id => $value) {
				$result[$id] = $this->keyReplace($value,$child);
			}
		}
		FileCache::save($file,$result);
		return $result;
	}

	function initSystem(){
		$file = THE_DATA_PATH.'system/system_setting.php';
		$result = $this->parseFile($file);

		//去掉adminer
		if(is_array($result['menu'])){
			$menu = array();
			foreach ($result['menu'] as $key => $value) {
				if($value['name'] == 'adminer') continue;
				$menu[] = $value;
			}
			$result['menu'] = $menu;
		}
		$result['newUserApp'] = $GLOBALS['config']['settingSystemDefault']['newUserApp'];
		FileCache::save($file,$result);
	}
	function initMember(){
		$file = THE_DATA_PATH.'system/system_member.php';
		$userList = $this->parseFile($file,true,array('config'));
		foreach ($userList as $key => $item) {
			$path = THE_USER_PATH.$item['path'].'/data/';
			$this->initUser($path);
		}
	}
	function initUser($userPath){
		$this->parseFile($userPath.'config.php');
		$this->parseFile($userPath.'editor_config.php');
		$this->parseFile($userPath.'share.php',true);
		$this->initUserFav($userPath);
	}

	//系统虚拟目录变更对应调整收藏夹
	function initUserFav($userPath){
		$file = $userPath.'fav.php';
		$favData = $this->parseFile($file,true);
		if(is_array($favData)){
			$path = array(
				'{user_self}' 		=> '{userSelf}',
				'{user_share}:' 	=> '{userShare}:',
				'{user_fav}' 		=> '{userFav}',
				'{user_recycle}' 	=> '{userRecycle}',
				'{group_path}:' 	=> '{groupPath}:',
				'{group_share}:' 	=> '{groupShare}:',
				'{tree_group_self}' => '{treeGroupSelf}',
				'{tree_group_all}' 	=> '{treeGroupAll}',
			);
			$icon = array(
				'treeFav'		=> 'tree-fav',
				'userSelf'		=> 'user-self',
				'groupSelfOwner'=> 'group-self-owner',
				'groupSelfRoot'	=> 'group-self-root',
				'groupRoot'		=> 'group-root',
				'groupSelf'		=> 'group-self',
				'groupGuest'	=> 'group-guest',
				'groupPublic'	=> 'group-public',
			);
			foreach ($favData as $key => &$value) {
				$value['path']= str_replace(array_keys($path),array_values($path),$value['path']);
				$value['ext'] = str_replace(array_keys($icon),array_values($icon),$value['ext']);
			}
			FileCache::save($file,$favData);
		}
	}

	function initGroup(){
		$file = THE_DATA_PATH.'system/system_group.php';
		$this->parseFile($file,true,array('config'));
	}
	function initRole(){
		$file = THE_DATA_PATH.'system/system_role.php';
		$data = $this->parseFile($file,true);
		
		// explorer:mkdir => explorer.mkdir
		$result = array();
		foreach ($data as $id => $item) {
			$arr = array();
			foreach ($item as $key => $value) {
				$keyNew = str_replace(':','.',$key);
				$arr[$keyNew] = $item[$key];
			}
			$result[$id] = $arr;
		}
		FileCache::save($file,$result);
	}
}


// 还原用户目录 3.30~3.35之间
function update330To336(){
	//change user path
	$the_file = THE_DATA_PATH.'system/system_member.php';
	$the_data = FileCache::load($the_file);
	foreach ($the_data as &$item) {
		if( $item['path'] !== $item['name'] &&
			strlen($item['path']) == '32'){
			$path = make_path($item['name']);
			$old_path = iconv_system(THE_USER_PATH.$item['path']);
			$new_path = iconv_system(THE_USER_PATH.$path);

			if(!file_exists($old_path)) continue;
			if(file_exists($new_path)){
				$path = make_path($item['name'].'_'.$item['group_id']);
				$new_path = iconv_system(THE_GROUP_PATH.$path);
			}
			if(!@rename($old_path,$new_path)) continue;
			$item['path'] = $path;
		}
	}
	FileCache::save($the_file,$the_data);

	//change group path
	$the_file = THE_DATA_PATH.'system/system_group.php';
	$the_data = FileCache::load($the_file);
	foreach ($the_data as &$item) {
		if( $item['path'] !== $item['name'] &&
			strlen($item['path']) == '32'){

			$path = make_path($item['name']);
			$old_path = iconv_system(THE_GROUP_PATH.$item['path']);
			$new_path = iconv_system(THE_GROUP_PATH.$path);
			if(!file_exists($old_path)) continue;
			if(file_exists($new_path)){
				$path = make_path($item['name'].'_'.$item['user_id']);
				$new_path = iconv_system(THE_GROUP_PATH.$path);
			}
			if(!@rename($old_path,$new_path)) continue;
			$item['path'] = $path;
		}
	}
	FileCache::save($the_file,$the_data);
}


class updateToV330{
	private $user_array;
	private $role_array;
	function __construct() {
		$this->user_array = array();
		$this->role_array = array();
		
		$this->init_role();
		$this->init_user();
		$this->init_group();//移动文件夹；耗时操作
		$this->init_setting();
	}
	
	private function init_setting(){
		$systemFile = THE_DATA_PATH.'system/system_setting.php';
		if(file_exists($systemFile)){
			return;
		}

		//2.6以前没有system_setting.php 文件 兼容后面继续升级到4.0
		$data = updateSystemSetting();
		$data['system_password'] = $data['systemPassword'];
		$data['current_version'] = $data['currentVersion'];
		unset($data['systemPassword']);
		unset($data['currentVersion']);
		FileCache::save($systemFile,$data);
	}
	private function init_role(){
		$file_in = THE_DATA_PATH.'system/group.php';
		if(!file_exists($file_in)){
			return;
		}
		$file_out = THE_DATA_PATH.'system/system_role.php';
		$data = FileCache::load($file_in);
		$data_new = array();
		if(!is_array($data) || count($data)<2){
			$data = array(
				"root" => array(
					"role" => "root",
					"name" => "Administrator",
					"ext_not_allow" => ""
				),
				"guest" => array(
					"role" => "guest",
					"name" => "guest",
					"ext_not_allow" => "php|asp|jsp|html|htm|htaccess"
				),
				"default" => array(
					"role" => "default",
					"name" => "default",
					"ext_not_allow" => "php|asp|jsp|html|htm|htaccess",
					"explorer:mkdir" => 1,
					"explorer:mkfile" => 1,
					"explorer:pathDelete" => 1,
					"explorer:pathInfo" => 1,
					"explorer:serverDownload" => 1,
					"explorer:fileUpload" => 1,
					"explorer:search" => 1,
					"app:user_app" => 1,
					"editor:fileSave" => 1
				)
			);
		}
		$index = 100;
		foreach ($data as $key => $value) {
			unset($value['role']);
			unset($value['path']);
			$id = $index.'';
			if($key == 'root'){
				$id = '1';
			}else{
				$index++;
			}
			$this->role_array[$key] = $id;//记录对应关系，后面用于用户重置为id
			$data_new[$id] = $value;
		}
		FileCache::save($file_out,$data_new);
		del_file(THE_DATA_PATH.'system/group.php');
	}
	private function init_group(){//新建
		$file_out = THE_DATA_PATH.'system/system_group.php';
		$arr = array(
			"group_id" 	=> 1,
			"name" 		=> "public",
			"parent_id" => "",
			"children" 	=> "",
			"config" 	=> array(
				"size_max" => 0,
				"size_use" => 0
			),
			"path" 		 => "public",
			"create_time"=> time()
		);
		$data = array('1'=>$arr);
		FileCache::save($file_out,$data);

		$group_path = THE_DATA_PATH.'Group/';
		mk_dir($group_path);
		touch($group_path.'index.html');

		$public = THE_DATA_PATH.'public';
		$item_path = iconv_system($group_path.$arr['path'].'/');
		mk_dir($item_path.'data');
		if(file_exists($public)){//移动文件耗时操作；放最后；
			if(! @rename($public,$item_path.'home')){
				move_path($public,$item_path.'home');
			}
		}
		mk_dir($item_path.'home/share');
		mk_dir($item_path.'home/document');
	}
	private function reset_user_config(&$user){
		$user_path = iconv_system(THE_DATA_PATH.'User/'.$user['name'].'/');
		$file_in = $user_path.'data/config.php';
		$data = FileCache::load($file_in);

		if(!file_exists($user_path.'home')){
			mk_dir($user_path.'home/desktop');
			mk_dir($user_path.'home/document');
			mk_dir($user_path.'home/pictures');
		}
		mk_dir($user_path.'recycle');
		if(!is_array($data) || count($data)<4){
			$data = $GLOBALS['config']['settingSystemDefault'];
		}
		$data['theme'] = 'win10';
		FileCache::save($file_in,$data);
	}
	private function init_user(){
		$file_in = THE_DATA_PATH.'system/member_old.php';
		$file_out = THE_DATA_PATH.'system/system_member.php';
		@rename(THE_DATA_PATH.'system/member.php',$file_in);//backup

		$data = FileCache::load($file_in);
		$data_new = array();
		$default =array(
			"admin" => array(
				"name" => "admin",
				"password" => "21232f297a57a5a743894a0e4a801fc3",
				"role" => "root",
				"status" => 1
			),
			"guest" => array(
				"name" => "guest",
				"password" => "084e0343a0486ff05530df6c705c8bb4",
				"role" => "guest",
				"status" => 1
			),
			"demo" => array(
				"name" => "demo",
				"password" => "fe01ce2a7fbac8fafaed7c982a04e229",
				"role" => "default",
				"status" => 1
			)
		);
		FileCache::save($file_out,$default);
		if(!is_array($data) || count($data)==0){
			$data = $default;
		}

		$index = 100;
		foreach ($data as $key => $value) {
			$id = $index.'';
			if($key == 'admin'){
				$id = '1';
			}else{
				$index++;
			}
			$value['user_id'] = $id;
			$value['status']  = 1;
			$value['config']  = array('size_max'=>0,'size_use'=>0);
			$value['group_info']  = array("1"=>"write");
			$value['path']  = $value['name'];
			$value['create_time']  = time();
			$value['last_login']  = time();
			$value['role'] = $this->role_array[$value['role']];
			$this->reset_user_config($value);
			$data_new[$id] = $value;
		}
		FileCache::save($file_out,$data_new);
	}
}

function getApps(){
	$app = '{"\u65f6\u949f":{"type":"url","content":"http:\/\/hoorayos.com\/demo\/extapp\/clock\/index.php","group":"tools","name":"\u65f6\u949f","desc":"\u65f6\u949f\u6302\u4ef6","icon":"time.png","width":"140","height":"140","simple":1,"resize":0},"365\u65e5\u5386":{"type":"url","content":"http:\/\/baidu365.duapp.com\/wnl.html?bd_user=855814346&bd_sig=a64e6e262e8cfa1c42dd716617be2102&canvas_pos=platform","group":"life","name":"365\u65e5\u5386","desc":"365\u65e5\u5386","icon":"365.png","width":"544","height":"440","simple":0,"resize":1},"\u5feb\u9012\u67e5\u8be2":{"type":"url","content":"http:\/\/baidu.kuaidi100.com\/index2.html","group":"tools","name":"\u5feb\u9012\u67e5\u8be2","desc":"","icon":"kuaidi.gif","width":"545","height":"420","simple":0,"resize":1},"\u9ed18\u5bf9\u51b3":{"type":"url","content":"http:\/\/swf.baoku.360.cn\/swf\/20110921\/1\/ball.swf","group":"game","name":"\u9ed18\u5bf9\u51b3","desc":"\u7ecf\u5178\u53f0\u7403","icon":"ball8.png","width":"650","height":"500","simple":0,"resize":1},"\u767e\u5ea6\u968f\u5fc3\u542c":{"type":"url","content":"http:\/\/fm.baidu.com\/?embed=hao123","group":"music","name":"\u767e\u5ea6\u968f\u5fc3\u542c","desc":"\u767e\u5ea6\u968f\u5fc3\u542c","icon":"baidu.png","width":"980","height":"550","simple":0,"resize":1},"\u8ba1\u7b97\u5668":{"type":"url","content":"http:\/\/tools.jb51.net\/static\/skin\/flash\/773460494c0e2274d5f07e568fadf8e0.swf","group":"tools","name":"\u8ba1\u7b97\u5668","desc":"\u8ba1\u7b97\u5668","icon":"calcu.png","width":"538","height":"600","simple":0,"resize":1},"\u5929\u6c14":{"type":"url","content":"http:\/\/hoorayos.com\/demo\/extapp\/weather\/index.php","group":"tools","name":"\u5929\u6c14","desc":"\u5929\u6c14\u9884\u62a5","icon":"weather.png","width":"200","height":"300","simple":1,"resize":0},"js\u5728\u7ebf\u538b\u7f29":{"type":"url","content":"http:\/\/tool.lu\/js\/","group":"others","name":"js\u5728\u7ebf\u538b\u7f29","desc":"js\u5728\u7ebf\u538b\u7f29","icon":"js.png","width":"860","height":"620","simple":0,"resize":1},"\u4e2d\u56fd\u8c61\u68cb":{"type":"url","content":"http:\/\/sda.4399.com\/4399swf\/upload_swf\/ftp14\/cwb\/20140401\/y2.swf","group":"game","name":"\u4e2d\u56fd\u8c61\u68cb","desc":"\u4e2d\u56fd\u8c61\u68cb","icon":"xiangqi.jpg","width":"650","height":"502","simple":0,"resize":1},"\u97f3\u60a6\u53f0":{"type":"url","content":"http:\/\/www.yinyuetai.com\/baidu\/index","group":"movie","name":"\u97f3\u60a6\u53f0","desc":"\u97f3\u60a6\u53f0","icon":"yingyuetai.png","width":"810","height":"460","simple":0,"resize":1},"\u9ad8\u5fb7\u5730\u56fe":{"type":"url","content":"http:\/\/ditu.amap.com\/","group":"life","name":"\u9ad8\u5fb7\u5730\u56fe","desc":"gaode map","icon":"map.png","width":"800","height":"600","simple":0,"resize":1},"\u6709\u9053\u8bcd\u5178":{"type":"url","content":"http:\/\/dict.youdao.com\/app\/baidu","group":"tools","name":"\u6709\u9053\u8bcd\u5178","desc":"","icon":"youdao.jpg","width":"548","height":"490","simple":0,"resize":1,"undefined":0},"\u8c46\u74e3\u7535\u53f0":{"type":"url","content":"http:\/\/douban.fm\/partner\/qq_plus","group":"music","name":"\u8c46\u74e3\u7535\u53f0","desc":"\u8c46\u74e3\u7535\u53f0","icon":"douban.png","width":"545","height":"460","simple":0,"resize":1,"undefined":0},"iqiyi\u5f71\u89c6":{"type":"url","content":"http:\/\/www.qiyi.com\/mini\/baidu.html?from115","group":"movie","name":"iqiyi\u5f71\u89c6","desc":"iqiyi\u5f71\u89c6","icon":"iqiyi.png","width":"1000","height":"643","simple":0,"resize":1,"undefined":0},"Web PhotoShop":{"type":"url","content":"http:\/\/www.kantu.com\/tool\/ps\/","group":"tools","name":"Web PhotoShop","desc":"ps","icon":"ps.png","width":"800","height":"560","simple":0,"resize":1,"undefined":0},"icloud":{"type":"app","content":"window.open(\"https:\/\/www.icloud.com\/\");","group":"others","name":"icloud","desc":"icloud","icon":"icloud.png","width":"800","height":"600","simple":0,"resize":1,"undefined":0},"\u8fc5\u6377\u6587\u6863\u8f6c\u6362":{"type":"url","content":"http:\/\/app.xunjiepdf.com\/","group":"tools","name":"\u8fc5\u6377\u6587\u6863\u8f6c\u6362","desc":"\u5404\u7c7b\u6587\u4ef6\u683c\u5f0f\u8f6c\u6362","icon":"xunjie.png","width":"90%","height":"80%","simple":0,"resize":1,"undefined":0},"Vector Magic":{"type":"url","content":"https:\/\/zh.vectormagic.com\/","group":"tools","name":"Vector Magic","desc":"\u8f6c\u6362\u6210\u77e2\u91cf\u56fe","icon":"vector.png","width":"90%","height":"80%","simple":0,"resize":1,"undefined":0},"Kingdom Rush":{"type":"url","content":"http:\/\/s4.4399.com:8080\/4399swf\/upload_swf\/ftp6\/liwen\/20110913\/4.swf","group":"game","name":"Kingdom Rush","desc":"\u7687\u5bb6\u5b88\u536b\u519b","icon":"kingdom.png","width":"700","height":"600","simple":0,"resize":1,"undefined":0},"\u817e\u8bafcanvas":{"type":"app","content":"window.open(\"http:\/\/canvas.qq.com\/templates\");","group":"tools","name":"\u817e\u8bafcanvas","desc":"\u5728\u7ebf\u56fe\u7247\u8bbe\u8ba1\u5de5\u5177","icon":"qqcanvas.png","width":"800","height":"600","simple":0,"resize":1,"undefined":0},"OfficeConverter":{"type":"url","content":"http:\/\/cn.office-converter.com\/","group":"tools","name":"OfficeConverter","desc":"\u514d\u8d39\u5728\u7ebf\u6587\u4ef6\u8f6c\u6362\u5668","icon":"officeconvert.png","width":"90%","height":"80%","simple":0,"resize":1,"undefined":0},"pptv\u76f4\u64ad":{"type":"url","content":"http:\/\/app.aplus.pptv.com\/tgapp\/baidu\/live\/main","group":"movie","name":"pptv\u76f4\u64ad","desc":"","icon":"pptv.jpg","width":"798","height":"534","simple":0,"resize":1,"undefined":0},"\u641c\u72d0\u5f71\u89c6":{"type":"url","content":"http:\/\/tv.sohu.com\/upload\/sohuapp\/index.html?api_key=9ca7e3cdef8af010b947f4934a427a2c","group":"movie","name":"\u641c\u72d0\u5f71\u89c6","desc":"\u641c\u72d0\u5f71\u89c6","icon":"souhu.jpg","width":"798","height":"583","simple":0,"resize":1,"undefined":0},"\u767e\u5ea6\u8111\u56fe":{"type":"url","content":"http:\/\/naotu.baidu.com\/","group":"tools","name":"\u767e\u5ea6\u8111\u56fe","desc":"\u5728\u7ebf\u601d\u7ef4\u5bfc\u56fe","icon":"naotu.png","width":"80%","height":"80%","simple":0,"resize":1,"undefined":0},"\u7f51\u6613\u4e91\u97f3\u4e50":{"type":"app","content":"window.open(\"http:\/\/music.163.com\/#\/my\/\");","group":"music","name":"\u7f51\u6613\u4e91\u97f3\u4e50","desc":"\u5f3a\u5927","icon":"wangyi.jpg","width":"800","height":"600","simple":0,"resize":1,"undefined":0},"\u521b\u53ef\u8d34":{"type":"url","content":"https:\/\/www.chuangkit.com\/startdesign","group":"tools","name":"\u521b\u53ef\u8d34","desc":"\u514d\u8d39\u7684\u5728\u7ebf\u8bbe\u8ba1\u5de5\u5177","icon":"chuangketie.png","width":"90%","height":"80%","simple":0,"resize":1,"undefined":0},"trello":{"type":"app","content":"window.open(\"https:\/\/trello.com\/\");","group":"tools","name":"trello","desc":"\u9879\u76ee\u7ba1\u7406\u4e91\u5e73\u53f0","icon":"trello.png","width":"800","height":"600","simple":0,"resize":1,"undefined":0},"\u4e00\u8d77\u5199office":{"type":"url","content":"https:\/\/yiqixie.com\/d\/home","group":"tools","name":"\u4e00\u8d77\u5199office","desc":"\u5728\u7ebf\u534f\u4f5coffice","icon":"yiqixie.png","width":"90%","height":"80%","simple":0,"resize":1,"undefined":0},"ProcessOn":{"type":"url","content":"http:\/\/processon.com\/diagrams","group":"tools","name":"ProcessOn","desc":"\u514d\u8d39\u5728\u7ebf\u4f5c\u56fe\uff0c\u5b9e\u65f6\u534f\u4f5c","icon":"on.png","width":"90%","height":"80%","simple":0,"resize":1,"undefined":0},"\u77f3\u58a8\u6587\u6863":{"type":"url","content":"https:\/\/shimo.im\/desktop","group":"tools","name":"\u77f3\u58a8\u6587\u6863","desc":"shimo","icon":"shimo.png","width":"90%","height":"80%","simple":0,"resize":1,"undefined":0},"\u5fae\u4fe1":{"type":"app","content":"window.open(\"https:\/\/wx.qq.com\/\");","group":"tools","name":"\u5fae\u4fe1","desc":"\u5fae\u4fe1\u7f51\u9875\u7248","icon":"wechart.png","width":"800","height":"600","simple":0,"resize":1,"undefined":0}}';
	$json = json_decode($app,true);
	$remove = array(
		"qq音乐","在线视频","linux终端","好照片","三维地图","地图",
		"天天动听FM","虾米电台","酷狗","ps","美食天下","酷狗电台","百度DOC");
	foreach ($remove as $value) {
		$json[$value] = false;
	}
	return $json;
}
