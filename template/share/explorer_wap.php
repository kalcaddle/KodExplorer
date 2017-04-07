<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
	<meta name="keywords" content="<?php echo $L['kod_meta_keywords'];?>" />
	<meta name="generator" content="<?php echo $L['kod_meta_name'].' '.KOD_VERSION;?>"/>
	<meta name="author" content="<?php echo $L['kod_meta_name'];?>" />
	<meta name="copyright" content="<?php echo $L['kod_meta_copyright'];?>" />
	
	<title><?php echo $L['ui_explorer'].' - '.strip_tags($L['kod_name']).$L['kod_power_by'];?></title>
	<link href="<?php echo STATIC_PATH;?>images/common/favicon.ico" rel="Shortcut Icon">
	<link href="./static/style/font-awesome/css/font-awesome.css?ver=<?php echo KOD_VERSION;?>" rel="stylesheet">
	<link href="<?php echo STATIC_PATH;?>style/common.css?ver=<?php echo KOD_VERSION;?>" rel="stylesheet"/>
	<link href="<?php echo STATIC_PATH;?>style/wap/app_explorer.css?ver=<?php echo KOD_VERSION;?>" rel="stylesheet"/>
</head>
<body>
	<div class="frame-main">
		<div class="frame-header">
			<div class="title"><?php echo $share_info['name'];?></div>
			<div class="menu_group">
				<div class="tool right_tool"><i class="font-icon icon-ellipsis-vertical"></i></div>
				<ul class="dropdown-menu menu-right_tool pull-right animated menuShow" role="menu">
					<li data-action="upload" class="hidden"><a href="javascript:void();">
						<i class="font-icon icon-cloud-upload"></i><?php echo $L['upload'];?></a></li>			
					<li data-action="search"><a href="javascript:void();">
						<i class="font-icon icon-search"></i><?php echo $L['search'];?></a></li>
				</ul>
			</div>
		</div>

		<div class="address"><ul></ul><div style="clear: both"></div></div>
		<div class='bodymain'>			
			<div class="fileContiner fileList_list"></div>
		</div>

		<div class="file_menu">
			<div class="file_action_menu hidden">
				<div class='action_menu' data-action="action_download"><i class="font-icon icon-info"></i><?php echo $L['download'];?></div>
				<div class="menu_close"><i class="font-icon icon-ellipsis-horizontal"></i></div>
				<div style="clear:both"></div>
			</div>
		</div>
		<?php include(TEMPLATE.'common/footer.html');?>
	</div><!-- / frame-main end-->
<script type="text/javascript" src="<?php echo STATIC_PATH;?>js/lib/seajs/sea.js?ver=<?php echo KOD_VERSION;?>"></script>
<script type="text/javascript" src="./index.php?share/common_js&user=<?php echo clear_html($_GET['user']);?>&sid=<?php echo clear_html($_GET['sid']);?>&#=<?php echo rand_string(8);?>"></script>
<script type="text/javascript">
	G.this_path = "<?php echo clear_html($dir);?>";
	G.user = "<?php echo clear_html($_GET['user']);?>";
	G.sid = "<?php echo clear_html($_GET['sid']);?>";
	G.share_info = <?php echo json_encode($share_info);?>;
	seajs.config({
		base: "<?php echo STATIC_PATH;?>js/",
		preload: ["lib/jquery-1.8.0.min"],
		map:[
			[ /^(.*\.(?:css|js))(.*)$/i,'$1$2?ver='+G.version]
		]
	});
	seajs.use("<?php echo STATIC_JS;?>/src/explorer_wap/main");
</script>
</body>
</html>
