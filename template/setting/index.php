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
	
	<title><?php echo strip_tags($L['kod_name']).$L['kod_power_by'];?></title>
	<link href="<?php echo STATIC_PATH;?>images/common/favicon.ico" rel="Shortcut Icon">
	<link href="<?php echo STATIC_PATH;?>style/common.css?ver=<?php echo KOD_VERSION;?>" rel="stylesheet"/>	  
	<link href="./static/style/font-awesome/css/font-awesome.css" rel="stylesheet">
	<!--[if IE 7]>
	<link rel="stylesheet" href="./static/style/font-awesome/css/font-awesome-ie7.css">
	<![endif]-->

	
	<link rel="stylesheet" href="<?php echo STATIC_PATH;?>style/skin/base/app_setting.css?ver=<?php echo KOD_VERSION;?>"/>
	<link rel="stylesheet" href="<?php echo STATIC_PATH;?>style/skin/<?php echo $config['user']['theme'];?>.css?ver=<?php echo KOD_VERSION;?>" id='link_css_list'/>
	
</head>
<body class="setting_page"  oncontextmenu="return core.contextmenu();">
	<div id="body">
		<div class="menu_left">	
			<h1><?php echo $L['setting_title'];?></h1>
			<ul class='setting'>
				<a href="javascript:void(0);" id="system"><i class="font-icon icon-cog"></i><?php echo $L['system_setting'];?></a>
				<a href="javascript:void(0);" id="member"><i class="font-icon icon-group"></i><?php echo $L['system_group'];?></a>
				<a href="javascript:void(0);" id="user"><i class="font-icon icon-user"></i><?php echo $L['setting_user'];?></li>
				<a href="javascript:void(0);" id="theme"><i class="font-icon icon-dashboard"></i><?php echo $L['setting_theme'];?></a>
				<a href="javascript:void(0);" id="wall"><i class="font-icon icon-picture"></i><?php echo $L['setting_wall'];?></a>
				<a href="javascript:void(0);" id="fav"><i class="font-icon icon-star"></i><?php echo $L['setting_fav'];?></a>
				<a href="javascript:void(0);" id="help"><i class="font-icon icon-question"></i><?php echo $L['setting_help'];?></a>
				<a href="javascript:void(0);" id="about"><i class="font-icon icon-info-sign"></i><?php echo $L['setting_about'];?></a>
			</ul>
		</div>
		<div class='main'></div>
	</div>
<script type="text/javascript" src="<?php echo STATIC_PATH;?>js/lib/seajs/sea.js?ver=<?php echo KOD_VERSION;?>"></script>
<script type="text/javascript" src="./index.php?user/common_js#id=<?php echo rand_string(8);?>"></script>
<script type="text/javascript">
	seajs.config({
		base: "<?php echo STATIC_PATH;?>js/",
		preload: ["lib/jquery-1.8.0.min"],
		map:[
			[ /^(.*\.(?:css|js))(.*)$/i,'$1$2?ver='+G.version]
		]
	});
	seajs.use('app/src/setting/main');
</script>
</body>
</html>
