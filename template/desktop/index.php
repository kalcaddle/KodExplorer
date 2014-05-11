<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $L['title'];?></title>
	<link rel="Shortcut Icon" href="<?php echo STATIC_PATH;?>images/favicon.ico">
	<link href="<?php echo STATIC_PATH;?>style/bootstrap.css" rel="stylesheet"/>	
	<link href="<?php echo STATIC_PATH;?>style/font-awesome/style.css" rel="stylesheet"/>
	<link href="<?php echo STATIC_PATH;?>js/lib/webuploader/webuploader.css" rel="stylesheet"/>    
	<link href="<?php echo STATIC_PATH;?>js/lib/picasa/style/style.css" rel="stylesheet"/>
	<?php if(STATIC_LESS == 'css'){ ?>
	<link href="<?php echo STATIC_PATH;?>style/skin/<?php echo $config['user']['theme'];?>app_desktop.css" rel="stylesheet" id='link_css_list'/>
	<?php }else{//less_compare_online ?>
	<link rel="stylesheet/less" type="text/css" href="<?php echo STATIC_PATH;?>style/skin/<?php echo $config['user']['theme'];?>app_desktop.less"/>
	<script src="<?php echo STATIC_PATH;?>js/lib/less-1.4.2.min.js"></script>   
	<?php } ?>
	<style type="text/css" media="screen">
	.desktop{
		background:#222 url('<?php echo $wall;?>');
		-moz-background-size: 100% 100%;
		-o-background-size: 100% 100%;
		-webkit-background-size: 100% 100%;
		background-size: 100% 100%;
	}
	</style>
</head>

<body style="overflow: hidden;" oncontextmenu="return core.contextmenu();">
	<?php include(TEMPLATE.'common/navbar.html');?>
	<img class="wallbackground" src="" style='overflow:hidden'/>
	<div class='bodymain html5_drag_upload_box desktop'>
		<div class="fileContiner fileList_icon">
			<div class="file systemBox menuDefault" data-app='{"name":"","resize":1,"type":"app","width":"800","height":"500","content":"core.explorer();"}'>
				<div class="ico" filetype="oexe" style="background-image:url(<?php echo STATIC_PATH;?>images/app/computer.png)"></div>
				<div class="titleBox"><span><?php echo $L['my_cumputer'];?></span></div>
			</div>
			<div class="file systemBox menuDefault" title="<?php echo $L['setting'];?>"
			data-app='{"type":"app","width":"","height":"","content":"core.setting();"}'>
				<div class="ico" filetype="oexe" style="background-image:url(<?php echo STATIC_PATH;?>images/app/setting.png)"></div>
				<div class="titleBox" ><span><?php echo $L['setting'];?></span></div>
			</div>
			<div class="file systemBox menuDefault" title="<?php echo $L['app_store'];?>"
			data-app='{"type":"app","width":"","height":"","content":"core.appStore();"}'>
				<div class="ico" filetype="oexe" style="background-image:url(<?php echo STATIC_PATH;?>images/app/market.png)"></div>
				<div class="titleBox"><span><?php echo $L['app_store'];?></span></div>
			</div>
		</div>
	</div><!-- html5拖拽上传list -->
	
	<a href="#" class="start"></a>
	<div id="taskbar" style="display:block;"><div id="desktop"></div></div>
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
			<li><a href="#" onclick="core.explorer('<?php echo MYHOME;?>/document','<?php echo $L['my_document'];?>');"><span><?php echo $L['my_document'];?></span></a></li>
			<li><a href="#" onclick="core.explorer('<?php echo MYHOME;?>/picture','<?php echo $L['my_picture'];?>');"><span><?php echo $L['my_picture'];?></span></a></li>
			<li><a href="#" onclick="core.explorer('<?php echo MYHOME;?>/music','<?php echo $L['my_music'];?>');"><span><?php echo $L['my_music'];?></span></a></li>
			<li><a href="#" onclick="core.explorer('<?php echo MYHOME;?>/download','<?php echo $L['download'];?>');"><span><?php echo $L['download'];?></span></a></li>
			<li><div id="rightspliter"></div></li>
			<li><a href="#" onclick="core.setting('wall');"><span><?php echo $L['setting_wall'];?></span></a></li>
			<li><a href="#" onclick="core.setting('fav');"><span><?php echo $L['setting_fav'];?></span></a></li>
			<li><a href="#" onclick="core.setting('theme');"><span><?php echo $L['setting_theme'];?></span></a></li>
			<li><a href="?user/logout" style="margin-top:70px;"><span><?php echo $L['ui_logout'];?>></span></a></li>            
		</ul>
	</div>

<script src="<?php echo STATIC_PATH;?>js/lib/seajs/sea.js"></script>
<script type="text/javascript">
	var LNG = <?php echo json_encode($L);?>;
	var AUTH = <?php echo json_encode($GLOBALS['auth']);?>;
	var G = {
		is_root 	: <?php echo $GLOBALS['is_root'];?>,
		web_root 	: "<?php echo $GLOBALS['web_root'];?>",
		web_host 	: "<?php echo HOST;?>",
		static_path : "<?php echo STATIC_PATH;?>",
		basic_path  : "<?php echo BASIC_PATH;?>",
		public_path  : "<?php echo PUBLIC_PATH;?>",
		upload_max  : "<?php echo $upload_max;?>",
		version 	: "<?php echo KOD_VERSION;?>",
		app_host 	: "<?php echo APPHOST;?>",
		this_path   : "<?php echo MYHOME.'desktop/';?>",//当前绝对路径
		web_path    : "<?php echo str_replace(WEB_ROOT,'', USER.'home/desktop/');?>",// 当前url目录
		
		json_data   : "",//用于存储每次获取列表后的json数据值。
		sort_field  : "<?php echo $config['user']['list_sort_field'];?>", //列表排序依照的字段  
		sort_order  : "<?php echo $config['user']['list_sort_order'];?>",   //列表排序升序or降序
		musictheme  : "<?php echo $config['user']['musictheme'];?>",
		movietheme  : "<?php echo $config['user']['movietheme'];?>" 
	};
	seajs.config({
		base: "<?php echo STATIC_PATH;?>js/",
		preload: ["lib/jquery-1.8.0.min"]
	});
	seajs.use("<?php echo STATIC_JS;?>/src/desktop/main");
</script>
</body>
</html>