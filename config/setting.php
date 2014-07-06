<?php 
/*
* @link http://www.kalcaddle.com/
* @author warlee | e-mail:kalcaddle@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kalcaddle.com/tools/licenses/license.txt
*/

// 配置项可选值
$config['setting_all'] = array(
	'themeall'		=> "default/:<b>areo blue</b>:default,simple/:<b>simple</b>:simple,metro/:<b>metro</b>:metro,metro/blue_:metro-blue:color,	metro/leaf_:metro-green:color,metro/green_:metro-green+:color,metro/grey_:metro-grey:color,metro/purple_:metro-purple:color,metro/pink_:metro-pink:color,metro/orange_:metro-orange:color",
	'codethemeall'	=> "chrome,clouds,crimson_editor,eclipse,github,solarized_light,tomorrow,xcode,ambiance,idle_fingers,monokai,pastel_on_dark,solarized_dark,tomorrow_night_blue,tomorrow_night_eighties",
	'wallall'		=> "1,2,3,4,5,6,7,8,9,10,11,12,13,14,15",
	'musicthemeall'	=> "ting,beveled,kuwo,manila,mp3player,qqmusic,somusic,xdj",
	'moviethemeall'	=> "webplayer,qqplayer,vplayer,tvlive,youtube"
);
$config['setting_all']['language'] = "en:English,zh_CN:简体中文,zh_TW:簡體中文";

// 默认配置
$config['setting_default'] = array(
	'list_type'			=> "icon",		// list||icon
	'list_sort_field'	=> "name",		// name||size||ext||mtime
	'list_sort_order'	=> "up",		// asc||desc
	'theme'				=> "metro/",	// app theme
	'codetheme'			=> "github",	// code editor theme
	'wall'				=> "1",			// wall picture
	'musictheme'		=> "mp3player",	// music player theme
	'movietheme'		=> "webplayer"	// movie player theme
);

// 默认配置
$config['system_file'] = array(
	'member'=> USER_SYSTEM.'member.php',
	'group'	=> USER_SYSTEM.'group.php',
	'apps'	=> USER_SYSTEM.'apps.php'
);

//权限路由配置；精确到需要做权限控制的控制器和方法
$config['role_setting'] = array(
	'explorer'	=> array(
		'mkdir','mkfile','pathRname','pathDelete','zip','unzip','pathCopy','pathChmod',
		'pathCute','pathCuteDrag','pathCopyDrag','clipboard','pathPast','pathInfo',
		'serverDownload','fileUpload','search'),
	'app'		=> array('user_app','add','edit','del'),//
	'user'		=> array('changePassword'),//可以设立公用账户
	'editor'	=> array('fileSave'),
	'setting'	=> array('set'),
	'fav'		=> array('add','del','edit'),
	'member'	=> array('get','add','del','edit'),
	'group'		=> array('get','add','del','edit'),
);
