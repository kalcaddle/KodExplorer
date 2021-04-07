<?php

/**
 * 隐藏插件，默认开启
 */
class toolsCommonPlugin extends PluginBase{
	function __construct(){
		parent::__construct();
	}
	public function regiest(){
		$this->hookRegiest(array(
			'user.commonJs.insert'	=> 'toolsCommonPlugin.echoJs'
		));
	}
	public function echoJs($st,$act){
		$this->systemBackup();
		$this->echoFile('static/main.js');
	}
	public function systemBackup(){
		$system = DATA_PATH.'system/';
		$bakcupLast = $system.'backup/last/';
		$backupLastDay = $system.'backup/day/'.date('Ymd',time()).'/';
		
		//每N天备份一次;首次备份当天
		$backupRepeat = 5;
		$day = intval(date('d',time()));
		if( !@file_exists($bakcupLast) ||
			(!@file_exists($backupLastDay) && $day % $backupRepeat == 0)
			){
			mk_dir($backupLastDay);
			$this->backupTo($backupLastDay);
		}

		//每天覆盖备份一次
		if(!@file_exists($bakcupLast)){
			mk_dir($bakcupLast);
			$this->backupTo($bakcupLast);
		}
		$lastTime = @filemtime($bakcupLast.'/system_member.php');
		if(time() - $lastTime > 60*60*24){
			$this->backupTo($bakcupLast);
		}
	}
	private function backupTo($folder){
		$system = DATA_PATH.'system/';
		$backFile = array(
			'apps.php',
			'system_group.php',
			'system_member.php',
			'system_role.php',
			'system_role_group.php',
			'system_setting.php',
			'desktop_app.php'
		);
		foreach ($backFile as $file) {
			if(file_exists($folder.$file)){
				@unlink($folder.$file);
			}
			@copy($system.$file,$folder.$file);
		}
	}

	/**
	 * ie8 css hack;
	 * @return [type] [description]
	 */
	public function pie(){
		header('Content-type: text/x-component');
		include($this->pluginPath.'/static/pie/pie.htc');
	}
}