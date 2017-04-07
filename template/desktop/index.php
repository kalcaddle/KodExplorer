<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="keywords" content="<?php echo $L['kod_meta_keywords'];?>" />
	<meta name="generator" content="<?php echo $L['kod_meta_name'].' '.KOD_VERSION;?>"/>
	<meta name="author" content="<?php echo $L['kod_meta_name'];?>" />
	<meta name="copyright" content="<?php echo $L['kod_meta_copyright'];?>" />
	
	<title><?php echo $L['ui_desktop'].' - '.strip_tags($L['kod_name']).$L['kod_power_by'];?></title>
	<link href="<?php echo STATIC_PATH;?>images/common/favicon.ico" rel="Shortcut Icon">
	<link href="<?php echo STATIC_PATH;?>js/lib/picasa/style/style.css?ver=<?php echo KOD_VERSION;?>" rel="stylesheet"/>
	<link href="<?php echo STATIC_PATH;?>style/common.css?ver=<?php echo KOD_VERSION;?>" rel="stylesheet"/>
	<link href="./static/style/font-awesome/css/font-awesome.css?ver=<?php echo KOD_VERSION;?>" rel="stylesheet">

	<!--[if IE 7]>
	<link rel="stylesheet" href="./static/style/font-awesome/css/font-awesome-ie7.css">
	<![endif]-->

	
	<link rel="stylesheet" href="<?php echo STATIC_PATH;?>style/skin/base/app_desktop.css?ver=<?php echo KOD_VERSION;?>"/>
	<link rel="stylesheet" href="<?php echo STATIC_PATH;?>style/skin/<?php echo $config['user']['theme'];?>.css?ver=<?php echo KOD_VERSION;?>" id='link_css_list'/>
	
</head>
<body style="overflow: hidden;" oncontextmenu="return core.contextmenu();" id="page_desktop">
	<?php include(TEMPLATE.'common/navbar.html');?>
	<div class='bodymain html5_drag_upload_box desktop' style="background-image:url('<?php echo $wall;?>');">
		<img class="background"/>
		<div class="fileContiner fileList_icon hidden">
			<div class="file systemBox menuDefault" data-path=""
			data-app="<?php echo base64_encode('{"type":"app","width":"","height":"","content":"core.explorer(\'\',LNG.my_computer);"}');?>">
				<div class="ico" filetype="oexe"><img src="<?php echo STATIC_PATH;?>images/file_icon/icon_others/computer.png"/></div>
				<div class="filename"><span class="title"><?php echo $L['my_computer'];?></span></div>
			</div>
			<div class="file systemBox menuRecycleButton"
			title="<?php echo $L['setting'];?>"
			data-app="<?php echo base64_encode('{"type":"app","width":"","height":"","content":"core.explorer(\''.KOD_USER_RECYCLE.'\',LNG.recycle)"}');?>" data-path="">
				<div class="ico" filetype="oexe"><img src="<?php echo STATIC_PATH;?>images/file_icon/icon_others/recycle.png"/></div>
				<div class="filename" ><span class="title"><?php echo $L['recycle'];?></span></div>
			</div>
			<div class="file systemBox menuDefault" data-path=""
			title="<?php echo $L['setting'];?>"
			data-app="<?php echo base64_encode('{"type":"app","width":"","height":"","content":"core.setting();"}');?>">
				<div class="ico" filetype="oexe"><img src="<?php echo STATIC_PATH;?>images/file_icon/icon_others/setting.png"/></div>
				<div class="filename" ><span class="title"><?php echo $L['setting'];?></span></div>
			</div>
			<div class="file systemBox menuDefault" data-path=""
			title="<?php echo $L['app_store'];?>"
			data-app="<?php echo base64_encode('{"type":"app","width":"","height":"","content":"core.appStore();"}');?>">
				<div class="ico" filetype="oexe"><img src="<?php echo STATIC_PATH;?>images/file_icon/icon_others/appStore.png"/></div>
				<div class="filename"><span class="title"><?php echo $L['app_store'];?></span></div>
			</div>
		</div>
	</div><!-- html5拖拽上传list -->

	<a href="#" class="start"></a>
	<div id="taskbar" style="display:block;"><div id="desktop"></div></div>
	<div class="taskbar_right">
 		<div class="copyright dropdown-toggle"><i class="icon-info-sign"></i></div>
		<div class="tab_hide_all"></div>
	</div>
	<div id="menuwin">
		<div id="startmenu"></div>
		<ul id="programs">
			<li><a href="#" onclick="ui.pathOpen.openIE('http://www.kalcaddle.com','<?php echo $L['my_document'];?>');">kodexplorer-home</a></li>
			<li><div id="leftspliter"></div></li>
			<li><a href="#" onclick="core.setting('help');">kodexplorer-<?php echo $L['setting_help'];?></a></li>
			<li><a href="#" onclick="core.setting('about');">kodexplorer-<?php echo $L['setting_about'];?></a></li>
			<li><a href="#" onclick="core.setting('user');">kodexplorer-<?php echo $L['setting'];?></a></li>
			<li class="search"></li>
		</ul>
		<ul id="links">
			<li class="icon"></li>
			<li><a href="#" onclick="core.explorer('<?php echo KOD_USER_SHARE.':'.$_SESSION['kod_user']['user_id'].'/';?>','<?php echo $L['my_share'];?>');"><span><?php echo $L['my_share'];?></span></a></li>
			<li><a href="#" onclick="core.explorer('<?php echo MYHOME;?>/picture','<?php echo $L['my_picture'];?>');"><span><?php echo $L['my_picture'];?></span></a></li>
			<li><a href="#" onclick="core.explorer('<?php echo MYHOME;?>/music','<?php echo $L['my_music'];?>');"><span><?php echo $L['my_music'];?></span></a></li>
			<li><a href="#" onclick="core.explorer('<?php echo MYHOME;?>/download','<?php echo $L['download'];?>');"><span><?php echo $L['download'];?></span></a></li>
			<li><div id="rightspliter"></div></li>
			<li><a href="#" onclick="core.setting('wall');"><span><?php echo $L['setting_wall'];?></span></a></li>
			<li><a href="#" onclick="core.setting('fav');"><span><?php echo $L['setting_fav'];?></span></a></li>
			<li><a href="#" onclick="core.setting('theme');"><span><?php echo $L['setting_theme'];?></span></a></li>
			<li><a href="./index.php?user/logout" style="margin-top:70px;"><span><?php echo $L['ui_logout'];?>></span></a></li>
		</ul>
	</div>
<?php include(TEMPLATE.'common/footer_common.html');?>
<script type="text/javascript" src="<?php echo STATIC_PATH;?>js/lib/seajs/sea.js?ver=<?php echo KOD_VERSION;?>"></script>
<script type="text/javascript" src="./index.php?user/common_js&type=desktop&id=<?php echo rand_string(8);?>"></script>
<script type="text/javascript">
	G.this_path = G.my_desktop;
	seajs.config({
		base: "<?php echo STATIC_PATH;?>js/",
		preload: ["lib/jquery-1.8.0.min"],
		map:[
			[ /^(.*\.(?:css|js))(.*)$/i,'$1$2?ver='+G.version]
		]
	});
	seajs.use("app/src/desktop/main");
</script>
</body>
</html>

