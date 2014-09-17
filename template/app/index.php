<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  menu="menubody">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="<?php echo STATIC_PATH;?>style/font-awesome/style.css?ver=<?php echo KOD_VERSION;?>" rel="stylesheet"/>
	<?php if(STATIC_LESS == 'css'){ ?>
	<link href="./static/style/skin/<?php echo $config['user']['theme'];?>app_setting.css?ver=<?php echo KOD_VERSION;?>" rel="stylesheet" id='link_css_list'/>
	<?php }else{//less_compare_online ?>
	<link rel="stylesheet/less" type="text/css" href="<?php echo STATIC_PATH;?>style/skin/<?php echo $config['user']['theme'];?>app_setting.less"/>
	<script src="<?php echo STATIC_PATH;?>js/lib/less-1.4.2.min.js"></script>   
	<?php } ?>
</head>
<body>
	<div id="body">
		<div class="app_menu_left menu_left">	
			<h1><?php echo $L['app'];?></h1>
			<ul class='setting'>
				<li id="all"><i class="font-icon icon-user"></i><?php echo $L['app_group_all'];?></li>
				<li id="game"><i class="font-icon icon-dashboard"></i><?php echo $L['app_group_game'];?></li>	
				<li id="tools"><i class="font-icon icon-picture"></i><?php echo $L['app_group_tools'];?></li>
				<li id="reader"><i class="font-icon icon-star"></i><?php echo $L['app_group_reader'];?></li>
				<li id="movie"><i class="font-icon icon-music"></i><?php echo $L['app_group_movie'];?></li>
				<li id="music"><i class="font-icon icon-info-sign"></i><?php echo $L['app_group_music'];?></li>
				<li id="life"><i class="font-icon icon-question"></i><?php echo $L['app_group_life'];?></li>
				<li id="others"><i class="font-icon icon-question"></i><?php echo $L['app_group_others'];?></li>
			</ul>
		</div>		
		<div class='app_list main'>
			<a class="create_app button"><?php echo $L['app_create'];?></a>
			<div class='h1'><i class="font-icon icon-user"></i><?php echo $L['app_group_all'];?></div>
			<ul class="app-list"></ul>
		</div>
	</div>
<script src="<?php echo STATIC_PATH;?>js/lib/seajs/sea.js?ver=<?php echo KOD_VERSION;?>"></script>
<script type="text/javascript">
    var LNG = <?php echo json_encode($L);?>;
	var G = {
		is_root 	: <?php echo  $GLOBALS['is_root'];?>,
		web_root 	: "<?php echo $GLOBALS['web_root'];?>",
		web_host 	: "<?php echo HOST;?>",
		static_path : "<?php echo STATIC_PATH;?>",
        basic_path  : "<?php echo BASIC_PATH;?>",
		version 	: "<?php echo KOD_VERSION;?>"
    };
	seajs.config({
		base: "<?php echo STATIC_PATH;?>js/",
		preload: ["lib/jquery-1.8.0.min"],
		map:[
			[ /^(.*\.(?:css|js))(.*)$/i,'$1?ver='+G.version]
		]
	});
	seajs.use('<?php echo STATIC_JS;?>/src/app/main');
</script>
</body>
</html>
