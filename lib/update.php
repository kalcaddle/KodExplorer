<?php

// define('THE_DATA_PATH',DATA_PATH);
define('UPDATE_DEV',false);
if(UPDATE_DEV){
	define('THE_DATA_PATH',WEB_ROOT.'self/kod/3.23/data/');
	del_dir(THE_DATA_PATH);
	copy_dir(WEB_ROOT.'self/kod/3.23/data_old/',rtrim(THE_DATA_PATH,'/'));
}else{
	define('THE_DATA_PATH',DATA_PATH);
}

function update_check($self_file){
	//version <3.3 to 3.3
	if( file_exists(THE_DATA_PATH.'system/member.php') &&
		!file_exists(THE_DATA_PATH.'system/system_member.php')){
		new updateToV330($self_file);
		header('location:./index.php?user/logout');
		exit;
	}
}

class updateToV330{
	private $user_array;
	private $role_array;
	function __construct($self_file) {
		$this->user_array = array();
		$this->role_array = array();
		$this->init_role();
		$this->init_group();
		$result = $this->init_user();
		$this->init_system();
		if($result){
			$this->clear_path();
			del_file($self_file);
		}
	}
	private function init_role(){
		$file_in = THE_DATA_PATH.'system/group.php';
		$file_out = THE_DATA_PATH.'system/system_role.php';
		$sql = new fileCache($file_in);
		$data = $sql->get();
		$data_new = array();
		if(!is_array($data)){
			$data = array(
				"root" => array(
					"role" => "root",
					"name" => "Administrator",
					"path" => "",
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
			$this->role_array[$key] = $id;
			$data_new[$id] = $value;
		}
		$sql->save($file_out,$data_new);
	}
	private function init_group(){
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
			"path" 		 => md5(rand_string(30)),
			"create_time"=> time()
		);
		$data = array('1'=>$arr);
		fileCache::save($file_out,$data);

		$group_path = THE_DATA_PATH.'Group/';
		mk_dir($group_path);
		touch($group_path.'index.html');

		$public = THE_DATA_PATH.'public/';
		$item_path = $group_path.$arr['path'].'/';
		mk_dir($item_path.'home/share');
		mk_dir($item_path.'home/document');
		mk_dir($item_path.'data');
		mk_dir($item_path.'recycle');
		if(file_exists($public)){
			move_path($public,$item_path.'home');
		}
	}
	private function reset_user_config(&$user){
		$user_path = THE_DATA_PATH.'User/'.$user['name'].'/';
		$file_in = $user_path.'data/config.php';
		if(!file_exists($user_path.'home')){
			mk_dir($user_path.'home/desktop');
			mk_dir($user_path.'home/document');
			mk_dir($user_path.'home/pictures');
		}
		mk_dir($user_path.'recycle');
		$sql = new fileCache($file_in);
		$data = $sql->get();
		if(!is_array($data) || count($data)<4){
			$data = $GLOBALS['config']['setting_system_default'];
		}
		$data['theme'] = 'win10';
		$sql->save($file_in,$data);
	}
	private function init_user(){
		$file_in = THE_DATA_PATH.'system/member.php';
		$file_out = THE_DATA_PATH.'system/system_member.php';
		$sql = new fileCache($file_in);
		$data = $sql->get();
		$data_new = array();

		if(!is_array($data)){
			$data =array(
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
		return $sql->save($file_out,$data_new);
	}
	private function init_system(){
		$file_in = THE_DATA_PATH.'system/system_setting.php';
		$file_out = THE_DATA_PATH.'system/system_setting.php';
		$sql = new fileCache($file_in);
		$data = $sql->get();
		if(!is_array($data) || count($data)<4){// <2.63
			$data = $GLOBALS['config']['setting_system_default'];
		}
		$data['need_check_code'] = '0';
		$sql->save($file_out,$data);
	}
	private function clear_path(){
		del_file(THE_DATA_PATH.'system/group.php');
		del_file(THE_DATA_PATH.'system/member.php');
		del_file(BASIC_PATH.'readme.txt');
		del_file(BASIC_PATH.'README.md');
		
		del_dir(THE_DATA_PATH.'2.0-'.KOD_VERSION.'.zip');
		del_dir(THE_DATA_PATH.'i18n');
		del_dir(THE_DATA_PATH.'thumb');
		del_dir(BASIC_PATH.'__MACOSX');
		del_dir(THE_DATA_PATH.'session');
		mk_dir(THE_DATA_PATH.'session');
		mk_dir(THE_DATA_PATH.'temp/thumb');
	}
}
