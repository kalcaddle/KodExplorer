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
	<link href="<?php echo STATIC_PATH;?>style/common.css?ver=<?php echo KOD_VERSION;?>" rel="stylesheet"/>
	<link href="./static/style/font-awesome/css/font-awesome.css?ver=<?php echo KOD_VERSION;?>" rel="stylesheet">
	<link href="<?php echo STATIC_PATH;?>style/wap/app_explorer.css?ver=<?php echo KOD_VERSION;?>" rel="stylesheet"/>
</head>
<body>
	<div class="init_loading"><div><img src="<?php echo STATIC_PATH;?>images/common/loading_simple.gif"/></div></div>
	<div class="panel-menu">
		<div class="panel-hd">
			<span class="my-avator"> <img src="<?php echo STATIC_PATH;?>images/common/pic.jpg"> </span>
			<div><h3 class="name"><?php echo $_SESSION['kod_user']['name'];?></h3></div>
		</div>
		<ul class="left_menu_path"></ul>
	</div>
	<div class="frame-main">
		<div class="panel-mask"></div>
		<div class="frame-header">
			<div class="tool left_tool"><i class="font-icon icon-list"></i></div>
			<div class="title"><?php echo $L['kod_name'];?></div>
			<div class="menu_group">
				<div class="tool right_tool"><i class="font-icon icon-ellipsis-vertical"></i></div>
				<ul class="dropdown-menu menu-right_tool pull-right animated menuShow" role="menu" >				
					<li data-action="upload"><a href="javascript:void();">
						<i class="font-icon icon-cloud-upload"></i><?php echo $L['upload'];?></a></li>
					<li data-action="newfolder"><a href="javascript:void();">
						<i class="font-icon icon-folder-close-alt"></i><?php echo $L['newfolder'];?></a></li>
					<li data-action="newfile"><a href="javascript:void();">
						<i class="font-icon icon-file-text"></i><?php echo $L['newfile'];?></a></li>
					<li data-action="past"><a href="javascript:void();">
					<li data-action="past"><a href="javascript:void();">
						<i class="font-icon icon-paste"></i><?php echo $L['past'];?></a></li>
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
				<div class="action_menu" data-action="action_copy"><i class="ffont-icon icon-copy"></i><?php echo $L['copy'];?></div>
				<div class='action_menu' data-action="action_rname"><i class="font-icon icon-pencil"></i><?php echo $L['rename'];?></div>
				<div class='action_menu' data-action="action_download"><i class="font-icon icon-info"></i><?php echo $L['download'];?></div>
				<div class="action_menu" data-action="action_remove"><i class="font-icon icon-trash"></i><?php echo $L['remove'];?></div>
				<div class="menu_close"><i class="font-icon icon-ellipsis-horizontal"></i></div>
				<div style="clear:both"></div>
			</div>
		</div>
		<?php include(TEMPLATE.'common/footer.html');?>
	</div><!-- / frame-main end-->
<script type="text/javascript" src="<?php echo STATIC_PATH;?>js/lib/seajs/sea.js?ver=<?php echo KOD_VERSION;?>"></script>
<script type="text/javascript" src="./index.php?user/common_js&type=explorer&id=<?php echo rand_string(8);?>"></script>
<script type="text/javascript" >
	G.this_path = "<?php echo clear_html($dir);?>";
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
