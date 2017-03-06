<?php

define('UPDATE_VERSION','');
define('UPDATE_DEV',false);

if(UPDATE_DEV){
	define('THE_DATA_PATH',WEB_ROOT.'self/kod/3.23/data/');
	del_dir(THE_DATA_PATH);
	copy_dir(WEB_ROOT.'self/kod/3.23/data_old/',rtrim(THE_DATA_PATH,'/'));
}else{
	define('THE_DATA_PATH',DATA_PATH);
}

function update_check(){
	unzip_repeat();//再次解压，避免windows部分主机解压失败问题

	//from <=3.23 to last
	if( file_exists(THE_DATA_PATH.'system/member.php') && 
		!file_exists(THE_DATA_PATH.'system/system_member.php')){
		new updateToV330();
		update_clear();
	}

	//from [3.30~3.35]
	$system_file = THE_DATA_PATH.'system/system_setting.php';
	$system_data = fileCache::load($system_file);
	if( file_exists($system_file) && 
		(is_array($system_data) && !isset($system_data['current_version']) )
		){
		update330To336();
		update_clear();
	}

	//from 3.36 to last
	update_clear();
}

function unzip_repeat(){
	$zip_file = THE_DATA_PATH.'2.0-'.UPDATE_VERSION.'.zip';
	if(!file_exists($zip_file)){
		return;
	}
	$unzip_to = BASIC_PATH;
	load_class('pclzip');
	$zip = new PclZip($zip_file);
	$result = $zip->extract(PCLZIP_OPT_PATH,$unzip_to,
							PCLZIP_OPT_REPLACE_NEWER);
}


function update_clear(){
	//更新版本号
	$file  = THE_DATA_PATH.'system/system_setting.php';
	if(file_exists($file)){
		updateToV330::init_system();
	}
	del_file(THE_DATA_PATH.'system/group.php');
	del_file(THE_DATA_PATH.'system/member.php');
	del_file(THE_DATA_PATH.'2.0-3.23.zip');
	del_file(THE_DATA_PATH.'2.0-3.34.zip');
	del_file(THE_DATA_PATH.'2.0-3.35.zip');
	del_file(THE_DATA_PATH.'2.0-3.37.zip');
	del_file(THE_DATA_PATH.'2.0-3.38.zip');
	del_file(THE_DATA_PATH.'2.0-3.39.zip');
	del_file(THE_DATA_PATH.'2.0-'.UPDATE_VERSION.'.zip');

	del_file(BASIC_PATH.'readme.txt');
	del_file(BASIC_PATH.'controller/group.class.php');
	del_file(BASIC_PATH.'controller/member.class.php');
	
	del_dir(THE_DATA_PATH.'i18n');
	del_dir(THE_DATA_PATH.'thumb');
	del_dir(BASIC_PATH.'__MACOSX');
	del_dir(THE_DATA_PATH.'session');
	mk_dir(THE_DATA_PATH.'session');
	mk_dir(THE_DATA_PATH.'temp/thumb');
	
	del_file(__FILE__);
	header('location:./index.php?user/logout');
	exit;
}

// 还原用户目录 3.30~3.35之间
function update330To336(){
	//change user path
	$the_file = THE_DATA_PATH.'system/system_member.php';
	$the_data = fileCache::load($the_file);
	foreach ($the_data as &$item) {
		if( $item['path'] !== $item['name'] &&
			strlen($item['path']) == '32'){

			$path = make_path($item['name']);
			$old_path = iconv_system(USER_PATH.$item['path']);
			$new_path = iconv_system(USER_PATH.$path);

			if(!file_exists($old_path)) continue;
			if(file_exists($new_path)){
				$path = make_path($item['name'].'_'.$item['group_id']);
				$new_path = iconv_system(GROUP_PATH.$path);
			}
			if(!@rename($old_path,$new_path)) continue;
			$item['path'] = $path;
		}
	}
	fileCache::save($the_file,$the_data);

	//change group path
	$the_file = THE_DATA_PATH.'system/system_group.php';
	$the_data = fileCache::load($the_file);
	foreach ($the_data as &$item) {
		if( $item['path'] !== $item['name'] &&
			strlen($item['path']) == '32'){

			$path = make_path($item['name']);
			$old_path = iconv_system(GROUP_PATH.$item['path']);
			$new_path = iconv_system(GROUP_PATH.$path);
			if(!file_exists($old_path)) continue;
			if(file_exists($new_path)){
				$path = make_path($item['name'].'_'.$item['user_id']);
				$new_path = iconv_system(GROUP_PATH.$path);
			}
			if(!@rename($old_path,$new_path)) continue;
			$item['path'] = $path;
		}
	}
	fileCache::save($the_file,$the_data);
	updateToV330::init_system();
}


class updateToV330{
	private $user_array;
	private $role_array;
	function __construct() {
		$this->user_array = array();
		$this->role_array = array();
		$this->init_role();
		$this->init_user();
		$this->init_system();
		$this->init_group();//移动文件夹；耗时操作
	}
	private function init_role(){
		$file_in = THE_DATA_PATH.'system/group.php';
		if(!file_exists($file_in)){
			return;
		}
		$file_out = THE_DATA_PATH.'system/system_role.php';
		$data = fileCache::load($file_in);
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
					"ext_not_allow" => "php|asp|jsp"
				),
				"default" => array(
					"role" => "default",
					"name" => "default",
					"ext_not_allow" => "php|asp|jsp",
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
		fileCache::save($file_out,$data_new);
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
		fileCache::save($file_out,$data);

		$group_path = THE_DATA_PATH.'Group/';
		mk_dir($group_path);
		touch($group_path.'index.html');

		$public = THE_DATA_PATH.'public';
		$item_path = iconv_system($group_path.$arr['path'].'/');
		mk_dir($item_path.'data');
		mk_dir($item_path.'recycle');
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
		$data = fileCache::load($file_in);

		if(!file_exists($user_path.'home')){
			mk_dir($user_path.'home/desktop');
			mk_dir($user_path.'home/document');
			mk_dir($user_path.'home/pictures');
		}
		mk_dir($user_path.'recycle');
		if(!is_array($data) || count($data)<4){
			$data = $GLOBALS['config']['setting_system_default'];
		}
		$data['theme'] = 'win10';
		fileCache::save($file_in,$data);
	}
	private function init_user(){
		$file_in = THE_DATA_PATH.'system/member_old.php';
		$file_out = THE_DATA_PATH.'system/system_member.php';
		@rename(THE_DATA_PATH.'system/member.php',$file_in);//backup

		$data = fileCache::load($file_in);
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
		fileCache::save($file_out,$default);
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
		fileCache::save($file_out,$data_new);
	}
	static function init_system(){
		$file_in  = THE_DATA_PATH.'system/system_setting.php';
		$file_out = $file_in;
		$data = fileCache::load($file_in);
		if(!is_array($data) || count($data)<4){// <2.63
			$data = $GLOBALS['config']['setting_system_default'];
		}
		foreach ($GLOBALS['config']['setting_system_default'] as $key => $value) {
			if(!isset($data[$key])){
				$data[$key] = $value;
			}
		}
		$data['current_version'] = KOD_VERSION;
		fileCache::save($file_out,$data);
	}
}
