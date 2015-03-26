<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  menu="menubody">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php echo $L['kod_name'].$L['kod_power_by'];?></title>
	<link rel="stylesheet" href="./static/style/font-awesome/css/font-awesome.css">
	<!--[if IE 7]>
	<link rel="stylesheet" href="./static/style/font-awesome/css/font-awesome-ie7.css">
	<![endif]-->
	<link href="<?php echo STATIC_PATH;?>style/bootstrap.css?ver=<?php echo KOD_VERSION;?>" rel="stylesheet"/>	  
	
	<link href="<?php echo STATIC_PATH;?>style/skin/<?php echo $config['user']['theme'];?>app_setting.css?ver=<?php echo KOD_VERSION;?>" rel="stylesheet" id='link_css_list'/>
	
</head>
<body>
	<div id="body">
		<div class="menu_left">	
			<h1><?php echo $L['setting_title'];?></h1>
			<ul class='setting'>
				<li id="system"><i class="font-icon icon-cog"></i><?php echo $L['system_setting'];?></li>
				<li id="user"><i class="font-icon icon-user"></i><?php echo $L['setting_user'];?></li>
				<li id="member"><i class="font-icon icon-group"></i><?php echo $L['setting_member'];?></li>
				<li id="theme"><i class="font-icon icon-dashboard"></i><?php echo $L['setting_theme'];?></li>
				<li id="wall"><i class="font-icon icon-picture"></i><?php echo $L['setting_wall'];?></li>
				<li id="fav"><i class="font-icon icon-star"></i><?php echo $L['setting_fav'];?></li>
				<li id="player"><i class="font-icon icon-music"></i><?php echo $L['setting_player'];?></li>	
				<li id="help"><i class="font-icon icon-question"></i><?php echo $L['setting_help'];?></li>
				<li id="about"><i class="font-icon icon-info-sign"></i><?php echo $L['setting_about'];?></li>
			</ul>
		</div>		
		<div class='main'></div>
	</div>
<script src="<?php echo STATIC_PATH;?>js/lib/seajs/sea.js?ver=<?php echo KOD_VERSION;?>"></script>
<script src="./index.php?user/common_js#id=<?php echo rand_string(8);?>"></script>
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