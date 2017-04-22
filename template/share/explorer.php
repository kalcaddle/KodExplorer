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
	
	<title><?php echo $share_info['name'].' - '.$L['share_title'].' - '.strip_tags($L['kod_name']).$L['kod_power_by'];?></title>
	<link href="<?php echo STATIC_PATH;?>images/common/favicon.ico" rel="Shortcut Icon">
	<link href="<?php echo STATIC_PATH;?>js/lib/picasa/style/style.css?ver=<?php echo KOD_VERSION;?>" rel="stylesheet"/>
	<link href="<?php echo STATIC_PATH;?>style/common.css?ver=<?php echo KOD_VERSION;?>" rel="stylesheet"/>
	<link href="./static/style/font-awesome/css/font-awesome.css?ver=<?php echo KOD_VERSION;?>" rel="stylesheet">
	<!--[if IE 7]>
	<link rel="stylesheet" href="./static/style/font-awesome/css/font-awesome-ie7.css">
	<![endif]-->

	
	<link rel="stylesheet" href="<?php echo STATIC_PATH;?>style/skin/base/app_explorer.css?ver=<?php echo KOD_VERSION;?>"/>
	<link rel="stylesheet" href="<?php echo STATIC_PATH;?>style/skin/<?php echo $config_theme;?>.css?ver=<?php echo KOD_VERSION;?>" id='link_css_list'/>
	
</head>

<style>
.frame-main .frame-left {bottom: 0px;}
.frame-main .bottom_box{display:none !important;}
.tools-right #set_theme{display:none !important;}
#PV_rotate_Left,#PV_rotate_Right,#PV_Btn_Remove{display:none !important;}
<?php if(isset($_GET['type'])){?>
	.topbar,.common_footer,.bottom_box{display:none;}
	.frame-header{top:0;}
	.frame-main{top:0px;bottom:0px;}
	.frame-main .frame-left #folderList{bottom:5px;}	
	<?php if($_GET['type']=="explorer"){?>
		.frame-header .header-content .header-left{display:none;}
		.frame-header .header-content .header-middle{left:12px;}
		.frame-main .frame-left,.frame-main .frame-resize{display:none;}
		.frame-main .frame-right{left:0px;}
		.task_tab{display:none;}
	<?php } ?>

	<?php if($_GET['type']=="file_list"){?>
		.frame-header{display:none;}
		.frame-main .frame-left,.frame-main .frame-resize{display:none;}
		.frame-main .frame-right{left:0px;}
		.frame-main{top:0px;}
		.task_tab,#set_theme,#fav,#home{display:none !important;}
		.header-middle{top:3px;left:5px;right:140px;}
		#list_type_list{top:35px;}
	<?php } ?>
<?php } ?>
</style>




<body style="overflow:hidden;" oncontextmenu="return core.contextmenu();" id="page_explorer">
	<?php include(TEMPLATE.'common/navbar_share.html');?>
	<?php include(TEMPLATE.'explorer/content.php');?>
	<?php include(TEMPLATE.'common/footer.html');?>
<script type="text/javascript" src="<?php echo STATIC_PATH;?>js/lib/seajs/sea.js?ver=<?php echo KOD_VERSION;?>"></script>
<script type="text/javascript" src="./index.php?share/common_js&user=<?php echo clear_html($_GET['user']);?>&sid=<?php echo clear_html($_GET['sid']);?>&#=<?php echo rand_string(8);?>"></script>
<script type="text/javascript" >
	AUTH  = {'explorer:fileDownload':<?php echo clear_html($can_download);?>};
	G.this_path = "<?php echo $dir;?>";
	G.user = "<?php echo clear_html($_GET['user']);?>";
	G.sid = "<?php echo clear_html($_GET['sid']);?>";
	G.share_info = <?php echo json_encode($share_info);?>;
	G.theme = "<?php echo $config_theme;?>";
	seajs.config({
		base: "<?php echo STATIC_PATH;?>js/",
		preload: ["lib/jquery-1.8.0.min"],
		map:[
			[ /^(.*\.(?:css|js))(.*)$/i,'$1$2?ver='+G.version]
		]
	});
	seajs.use("app/src/share_explorer/main");
</script>
</body>
</html>

