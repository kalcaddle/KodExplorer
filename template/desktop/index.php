<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="renderer" content="webkit">
	<title><?php echo $L['ui_desktop'].' - '.$L['kod_name'].$L['kod_power_by'];?></title>
	<link rel="Shortcut Icon" href="<?php echo STATIC_PATH;?>images/favicon.ico">
	<link href="<?php echo STATIC_PATH;?>style/bootstrap.css?ver=<?php echo KOD_VERSION;?>" rel="stylesheet"/>
	<link rel="stylesheet" href="./static/style/font-awesome/css/font-awesome.css">
	<!--[if IE 7]>
	<link rel="stylesheet" href="./static/style/font-awesome/css/font-awesome-ie7.css">
	<![endif]-->
	<link href="<?php echo STATIC_PATH;?>js/lib/picasa/style/style.css?ver=<?php echo KOD_VERSION;?>" rel="stylesheet"/>
	
	<link href="<?php echo STATIC_PATH;?>style/skin/<?php echo $config['user']['theme'];?>app_desktop.css?ver=<?php echo KOD_VERSION;?>" rel="stylesheet" id='link_css_list'/>
	
</head>
<body style="overflow: hidden;" oncontextmenu="return core.contextmenu();">
	<?php include(TEMPLATE.'common/navbar.html');?>
	<div class='bodymain html5_drag_upload_box desktop' style="background-image: url('<?php echo $wall;?>');">
		<img class="wallbackground" src="<?php echo $wall;?>"/>
		<div class="fileContiner fileList_icon hidden">
			<div class="file systemBox menuDefault" 
			data-app={"type":"app","width":"","height":"","content":"core.explorer('',LNG.my_computer);"}>
				<div class="ico" filetype="oexe" style="background-image:url(<?php echo STATIC_PATH;?>images/app/computer.png)"></div>
				<div class="titleBox"><span><?php echo $L['my_computer'];?></span></div>
			</div>
			<div class="file systemBox menuRecycleButton" title="<?php echo $L['setting'];?>"
			data-app={"type":"app","width":"","height":"","content":"core.explorer('*recycle*/',LNG.recycle);"}>
				<div class="ico" filetype="oexe" style="background-image:url(<?php echo STATIC_PATH;?>images/app/recycle.png)"></div>
				<div class="titleBox" ><span><?php echo $L['recycle'];?></span></div>
			</div>
			<div class="file systemBox menuDefault" title="<?php echo $L['setting'];?>"
			data-app={"type":"app","width":"","height":"","content":"core.setting();"}>
				<div class="ico" filetype="oexe" style="background-image:url(<?php echo STATIC_PATH;?>images/app/setting.png)"></div>
				<div class="titleBox" ><span><?php echo $L['setting'];?></span></div>
			</div>
			<div class="file systemBox menuDefault" title="<?php echo $L['app_store'];?>"
			data-app={"type":"app","width":"","height":"","content":"core.appStore();"}>
				<div class="ico" filetype="oexe" style="background-image:url(<?php echo STATIC_PATH;?>images/app/market.png)"></div>
				<div class="titleBox"><span><?php echo $L['app_store'];?></span></div>
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
			<li><a href="#" onclick="core.explorer('*share*/','<?php echo $L['my_share'];?>');"><span><?php echo $L['my_share'];?></span></a></li>
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
<script src="<?php echo STATIC_PATH;?>js/lib/seajs/sea.js?ver=<?php echo KOD_VERSION;?>"></script>
<script src="./index.php?user/common_js&type=desktop&id=<?php echo rand_string(8);?>"></script>
<script type="text/javascript">
	G.this_path = "<?php echo MYHOME.'desktop/';?>";
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

