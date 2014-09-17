<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $L['ui_editor'].' '.$L['title'];?></title>
	<link rel="Shortcut Icon" href="<?php echo STATIC_PATH;?>images/favicon.ico">
	<link href="<?php echo STATIC_PATH;?>style/bootstrap.css?ver=<?php echo KOD_VERSION;?>" rel="stylesheet"/>		
	<link href="./static/style/font-awesome/style.css?ver=<?php echo KOD_VERSION;?>" rel="stylesheet"/>
	<?php if(STATIC_LESS == 'css'){ ?>
	<link href="<?php echo STATIC_PATH;?>style/skin/<?php echo $config['user']['theme'];?>app_editor.css?ver=<?php echo KOD_VERSION;?>" rel="stylesheet" id='link_css_list'/>
	<?php }else{//less_compare_online ?>
	<link rel="stylesheet/less" type="text/css" href="<?php echo STATIC_PATH;?>style/skin/<?php echo $config['user']['theme'];?>app_editor.less"/>
	<script src="<?php echo STATIC_PATH;?>js/lib/less-1.4.2.min.js"></script>	
	<?php } ?>
</head>
<body style="overflow:hidden;" oncontextmenu="return core.contextmenu();">
	<?php include(TEMPLATE.'common/navbar.html');?>
	<div class="frame-main">
		<div class='frame-left'>
			<div class="tools-left">
				<a class="home" href="#"  title='<?php echo $L['root_path'];?>'><i class="icon-home"></i></a>
				<a class="view" href="#"  title='<?php echo $L['manage_folder'];?>'><i class="icon-laptop"></i></a>
				<a class="folder" href="#" title='<?php echo $L['newfolder'];?>'><i class="icon-folder-close-alt"></i></a>
				<a class="file" href="#" title='<?php echo $L['newfile'];?>'><i class="icon-file-alt"></i></a>		
				<a class="refresh" href="#" title='<?php echo $L['refresh'];?>'><i class="icon-refresh"></i></a>		 
			</div>
			<ul id="folderList" class="ztree"></ul>
		</div><!-- / frame-left end-->
		<div class='frame-resize'></div>
		<div class='frame-right'>
			<div class="frame-right-main"  style="height:100%;padding:0;margin:0;">
				<div class="resizeMask"></div>
				<div class="messageBox"><div class="content"></div></div>
				<div class="menuTreeRoot"></div>
				<div class="menuTreeFolder"></div>
				<div class="menuTreeFile"></div>				
				<div class ='frame'>
					 <iframe name="OpenopenEditor" src="./index.php?editor/edit" style="width:100%;height:100%;border:0;" frameborder=0></iframe>
				</div>	
			</div>
		</div><!-- / frame-right end-->
	</div><!-- / frame-main end-->


<script src="<?php echo STATIC_PATH;?>js/lib/seajs/sea.js?ver=<?php echo KOD_VERSION;?>"></script>
<script type="text/javascript">
    var LNG = <?php echo json_encode($L);?>;
    var AUTH = <?php echo json_encode($GLOBALS['auth']);?>;
	var G = {
		is_root 	: <?php echo  $GLOBALS['is_root'];?>,
		web_root 	: "<?php echo $GLOBALS['web_root'];?>",
		web_host 	: "<?php echo HOST;?>",
		static_path : "<?php echo STATIC_PATH;?>",
		public_path  : "<?php echo PUBLIC_PATH;?>",
		basic_path  : "<?php echo BASIC_PATH;?>",
		version 	: "<?php echo KOD_VERSION;?>",
		app_host 	: "<?php echo APPHOST;?>",
		office_server: "<?php echo OFFICE_SERVER;?>",
		
		musictheme	: "<?php echo $config['user']['musictheme'];?>",
		movietheme	: "<?php echo $config['user']['movietheme'];?>",		
		home 		: "<?php echo HOME;?>"
	};
	seajs.config({
		base: "<?php echo STATIC_PATH;?>js/",
		preload: ["lib/jquery-1.8.0.min"],
		map:[
			[ /^(.*\.(?:css|js))(.*)$/i,'$1?ver='+G.version]
		]
	});
	seajs.use("<?php echo STATIC_JS;?>/src/editor/main");
</script>
</body>
</html>