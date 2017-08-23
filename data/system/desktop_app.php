<?php 
$desktopApps = array(
	'my_computer' => array(
		"type"		=> "app",
		"content"	=> "core.explorer('','".LNG('my_computer')."');",
		"icon"		=> STATIC_PATH."images/file_icon/icon_others/computer.png",
		"name"		=> LNG('my_computer'),
		"menuType"	=> "systemBox menu-default",
		"ext"		=> 'oexe',
		"path"		=> "",
		"resize"	=> 1
	),
	'recycle' => array(
		"type"		=> "app",
		"content"	=> "core.explorer('".KOD_USER_RECYCLE."','".LNG('recycle')."');",
		"icon"		=> STATIC_PATH."images/file_icon/icon_others/recycle.png",
		"name"		=> LNG('recycle'),
		"menuType"	=> "systemBox menu-recycle-button",
		"ext"		=> 'oexe',
		"path"		=> "",
		"resize"	=> 1
	),
	'PluginCenter' => array(
		"type"		=> "app",
		"content"	=> "core.openWindowBig('./index.php?pluginApp/index','".LNG('PluginCenter')."');",
		"icon"		=> STATIC_PATH."images/file_icon/icon_others/plugins.png",
		"name"		=> LNG('PluginCenter'),
		"menuType"	=> "systemBox menu-default",
		"ext"		=> 'oexe',
		"path"		=> "",
		"resize"	=> 1
	),
	'setting' => array(
		"type"		=> "app",
		"content"	=> "core.setting();",
		"icon"		=> STATIC_PATH."images/file_icon/icon_others/setting.png",
		"name"		=> LNG('setting'),
		"menuType"	=> "systemBox menu-default",
		"ext"		=> 'oexe',
		"path"		=> "/",
		"resize"	=> 1
	),
	'appStore' => array(
		"type"		=> "app",
		"content"	=> "core.appStore();",
		"icon"		=> STATIC_PATH."images/file_icon/icon_others/appStore.png",
		"name"		=> LNG('app_store'),
		"menuType"	=> "systemBox menu-default",
		"ext"		=> 'oexe',
		"path"		=> "",
		"resize"	=> 1
	)
);

//管理员插件中心
if(!$GLOBALS['isRoot']){
	unset($desktopApps['PluginCenter']);
}
return $desktopApps;
