<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" scroll="no">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
	<title><?php echo $L['ui_explorer'].' - '.$L['kod_name'].$L['kod_power_by'];?></title>
	<link rel="Shortcut Icon" href="<?php echo STATIC_PATH;?>images/favicon.ico">
	<link href="<?php echo STATIC_PATH;?>style/bootstrap.css?ver=<?php echo KOD_VERSION;?>" rel="stylesheet"/>
	<link rel="stylesheet" href="./static/style/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="<?php echo STATIC_PATH;?>style/wap/app_explorer.css"/>
</head>
<body>
	<div class="panel-menu">
		<div class="panel-hd">
			<span class="my-avator"> <img src="./static/images/pic.jpg"> </span>
			<div><h3 class="name"><?php echo $_SESSION['kod_user']['name'];?></h3></div>
		</div>
		<ul>			
			<li data-action='my_doc'><i class="font-icon icon-home"></i><?php echo $L['root_path'];?></li>
			<li data-action="my_desktop"><i class="font-icon icon-desktop"></i><?php echo $L['desktop'];?></li>
			<li data-action="public"><i class="font-icon icon-group"></i><?php echo $L['public_path'];?></li>
			<li data-action="exit"><i class="font-icon icon-signout"></i><?php echo $L['ui_logout'];?></li>
		</ul>
	</div>
	<div class="frame-main">
		<div class="frame-header">
			<div class="tool left_tool"><i class="font-icon icon-list"></i></div>
			<div class="title"><?php echo $L['kod_name'];?></div>

			<div class="menu_group">
				<div class="tool right_tool"><i class="font-icon icon-ellipsis-vertical"></i></div>
				<ul class="dropdown-menu menu-right_tool fadein pull-right" role="menu">				
					<li data-action="upload"><a href="javascript:void();">
						<i class="font-icon icon-cloud-upload"></i><?php echo $L['upload'];?></a></li>
					<li data-action="newfolder"><a href="javascript:void();">
						<i class="font-icon icon-folder-close-alt"></i><?php echo $L['newfolder'];?></a></li>
					<li data-action="past"><a href="javascript:void();">
						<i class="font-icon icon-paste"></i><?php echo $L['past'];?></a></li>
				</ul>
			</div>
		</div>

		<div class="address"><ul></ul><div style="clear: both"></div></div>
		<div class='bodymain'>			
			<div class="fileContiner fileList_list"></div>
		</div>
		<div class="common_footer">
			<div class="file_action_menu hidden">
				<div class="action_menu" data-action="action_copy"><i class="ffont-icon icon-copy"></i><?php echo $L['copy'];?></div>
				<div class='action_menu' data-action="action_rname"><i class="font-icon icon-pencil"></i><?php echo $L['rename'];?></div>
				<div class='action_menu' data-action="action_info"><i class="font-icon icon-info"></i><?php echo $L['info'];?></div>
				<div class="action_menu" data-action="action_remove"><i class="font-icon icon-trash"></i><?php echo $L['remove'];?></div>
				<div class="menu_close"><i class="font-icon icon-ellipsis-horizontal"></i></div>
				<div style="clear:both"></div>
			</div>
			<?php echo $L['copyright_pre'].' v'.KOD_VERSION.' | '.$L['copyright_info'];?> 
			<a href="javascript:core.copyright();" class="icon-info-sign copyright_bottom"></a>
		</div>
	</div><!-- / frame-main end-->


<script src="<?php echo STATIC_PATH;?>js/lib/seajs/sea.js?ver=<?php echo KOD_VERSION;?>"></script>
<script src="./index.php?user/common_js&type=explorer&id=<?php echo rand_string(8);?>"></script>
<script type="text/javascript">
	G.this_path = "<?php echo $dir;?>";
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