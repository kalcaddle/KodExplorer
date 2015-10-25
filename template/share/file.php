<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $share_info['name'].' - '.$L['share_title'].' - '.$L['kod_name'].$L['kod_power_by'];?></title>
	<link rel="Shortcut Icon" href="<?php echo STATIC_PATH;?>images/favicon.ico">
	<link href="<?php echo STATIC_PATH;?>style/bootstrap.css?ver=<?php echo KOD_VERSION;?>" rel="stylesheet"/><link rel="stylesheet" href="./static/style/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="./static/style/font-awesome/css/font-awesome.css">
	<!--[if IE 7]>
	<link rel="stylesheet" href="./static/style/font-awesome/css/font-awesome-ie7.css">
	<![endif]-->

	
	<link href="<?php echo STATIC_PATH;?>style/skin/<?php echo $config_theme;?>app_code_edit.css?ver=<?php echo KOD_VERSION;?>" rel="stylesheet" id='link_css_list'/>
	
</head>
<style type="text/css">
	body{
		-khtml-user-select: all;
	  -webkit-user-select: all;
	  -moz-user-select: all;
	  -ms-user-select: all;
	  -o-user-select: all;
	  user-select: all;
	}
	.frame-main{bottom: 32px;}
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
				  <!-- <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
				    <span class="caret"></span>
				    <span class="sr-only">Toggle Dropdown</span>
				  </button>
				  <ul class="dropdown-menu" role="menu">
				    <li><a href="#" class="page_share button_my_share" id="button_share"><?php echo $L['share'];?></a></li>
				  </ul> -->
				</div>
				<div class="error_tips"><?php echo $L['share_error_show_tips'];?></div>
			</div>
		</div>
		<div class="content_box"></div>
	</div><!-- / frame-main end-->
<?php include(TEMPLATE.'common/footer.html');?>
<script src="<?php echo STATIC_PATH;?>js/lib/seajs/sea.js?ver=<?php echo KOD_VERSION;?>"></script>
<script src="./index.php?share/common_js&user=<?php echo $_GET['user'];?>&sid=<?php echo $_GET['sid'];?>&#=<?php echo rand_string(8);?>"></script>
<script src="<?php echo STATIC_PATH;?>js/lib/ace/src-min-noconflict/ace.js?ver=<?php echo KOD_VERSION;?>"></script>
<script src="<?php echo STATIC_PATH;?>js/lib/ace/src-min-noconflict/ext-static_highlight.js?ver=<?php echo KOD_VERSION;?>"></script>
<script type="text/javascript">
	AUTH  = {'explorer:fileDownload':<?php echo $can_download;?>};
	G.user = "<?php echo $_GET['user'];?>";
	G.path = "<?php echo (isset($_GET['path'])?urlencode($_GET['path']):'') ;?>";
	G.sid = "<?php echo $_GET['sid'];?>";
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