<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  menu="menubody">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="./static/style/font-awesome/style.css?ver=<?php echo KOD_VERSION;?>" rel="stylesheet"/>
	<link href="<?php echo STATIC_PATH;?>style/bootstrap.css?ver=<?php echo KOD_VERSION;?>" rel="stylesheet"/>	  
	<?php if(STATIC_LESS == 'css'){ ?>
	<link href="<?php echo STATIC_PATH;?>style/skin/<?php echo $config['user']['theme'];?>app_setting.css?ver=<?php echo KOD_VERSION;?>" rel="stylesheet" id='link_css_list'/>
	<?php }else{//less_compare_online ?>
	<link rel="stylesheet/less" type="text/css" href="<?php echo STATIC_PATH;?>style/skin/<?php echo $config['user']['theme'];?>app_setting.less"/>
	<script src="<?php echo STATIC_PATH;?>js/lib/less-1.4.2.min.js"></script>	
	<?php } ?>
</head>
<style>
	#body table tr.title td{line-height: 2.5em;height: 2.5em;}
	#body table tr td{line-height: 1em;height: 1em;border-right: 1px solid #ddd;}
</style>
<body>
	<div id="body">
		<div class="menu_left">	
			<h1><?php echo $L['setting_title'];?></h1>
			<ul class='setting'>
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
<script type="text/javascript">
    var LNG = <?php echo json_encode($L);?>;
    <?php if(isset($GLOBALS['auth'])) echo "var AUTH = "+json_encode($GLOBALS['auth']);?>;
	var G = {
		is_root 	: <?php echo  $GLOBALS['is_root'];?>,
		web_root 	: "<?php echo $GLOBALS['web_root'];?>",
		web_host 	: "<?php echo HOST;?>",
		static_path : "<?php echo STATIC_PATH;?>",
		version 	: "<?php echo KOD_VERSION;?>"
	};
	seajs.config({
		base: "<?php echo STATIC_PATH;?>js/",
		preload: ["lib/jquery-1.8.0.min"],
		map:[
			[ /^(.*\.(?:css|js))(.*)$/i,'$1?ver='+G.version]
		]
	});
	seajs.use('<?php echo STATIC_JS;?>/src/setting/main');
</script>
</body>
</html>