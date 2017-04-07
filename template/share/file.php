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
	<link href="<?php echo STATIC_PATH;?>style/common.css?ver=<?php echo KOD_VERSION;?>" rel="stylesheet"/>
	<link href="./static/style/font-awesome/css/font-awesome.css?ver=<?php echo KOD_VERSION;?>" rel="stylesheet">
	<!--[if IE 7]>
	<link rel="stylesheet" href="./static/style/font-awesome/css/font-awesome-ie7.css">
	<![endif]-->


	
	<link rel="stylesheet" href="<?php echo STATIC_PATH;?>style/skin/base/app_code_edit.css?ver=<?php echo KOD_VERSION;?>"/>
	<link rel="stylesheet" href="<?php echo STATIC_PATH;?>style/skin/<?php echo $config_theme;?>.css?ver=<?php echo KOD_VERSION;?>" id='link_css_list'/>
	
</head>
<style type="text/css">
	.frame-main{bottom: 32px;}
	body div.dialog-simple.myJPlayer .aui_outer .aui_min,	
	body div.dialog-simple.myJPlayer .aui_outer .aui_close,
	body div.dialog-simple.myJPlayer .aui_outer .aui_max{display:none;}
</style>

<body>
	<?php include(TEMPLATE.'common/navbar_share.html');?>
	<div class="frame-main">
		<!-- bindary_box -->
		<div class="bindary_box hidden">
			<div class="title"><div class="ico"></div></div>
			<div class="content_info">
				<div class="name"></div>
				<div class="size"><span></span><i class="share_time"></i></div>
				<div class="btn-group">
					<a type="button" class="btn btn-primary btn_download" href=""><?php echo $L['download'];?></a>
				</div>
				<div class="error_tips"><?php echo $L['share_error_show_tips'];?></div>
			</div>
		</div>
		<div class="content_box"></div>
	</div><!-- / frame-main end-->
<?php include(TEMPLATE.'common/footer.html');?>
<script src="<?php echo STATIC_PATH;?>js/lib/seajs/sea.js?ver=<?php echo KOD_VERSION;?>"></script>
<script src="./index.php?share/common_js&user=<?php echo clear_html($_GET['user']);?>&sid=<?php echo clear_html($_GET['sid']);?>&#=<?php echo rand_string(8);?>"></script>
<script type="text/javascript" src="<?php echo STATIC_PATH;?>js/lib/ace/src-min-noconflict/ace.js?ver=<?php echo KOD_VERSION;?>"></script>
<script type="text/javascript" src="<?php echo STATIC_PATH;?>js/lib/ace/src-min-noconflict/ext-language_tools.js?ver=<?php echo KOD_VERSION;?>"></script>
<script type="text/javascript" src="<?php echo STATIC_PATH;?>js/lib/ace/src-min-noconflict/ext-modelist.js?ver=<?php echo KOD_VERSION;?>"></script>
<script type="text/javascript">
	AUTH  = {'explorer:fileDownload':<?php echo $can_download;?>};
	G.user = "<?php echo clear_html($_GET['user']);?>";
	G.path = "<?php echo (isset($_GET['path'])?clear_html($_GET['path']):'') ;?>";
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
	seajs.use("app/src/share_index/main");
</script>
</body>
</html>
