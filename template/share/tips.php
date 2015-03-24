<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>tips - <?php echo $L['share_title'].' - '.$L['kod_name'].$L['kod_power_by'];?></title>
	<link rel="Shortcut Icon" href="<?php echo STATIC_PATH;?>images/favicon.ico">
	<link href="<?php echo STATIC_PATH;?>style/bootstrap.css?ver=<?php echo KOD_VERSION;?>" rel="stylesheet"/><link rel="stylesheet" href="./static/style/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="./static/style/font-awesome/css/font-awesome.css">
	<!--[if IE 7]>
	<link rel="stylesheet" href="./static/style/font-awesome/css/font-awesome-ie7.css">
	<![endif]-->

	
	<link href="<?php echo STATIC_PATH;?>style/skin/simple/app_code_edit.css?ver=<?php echo KOD_VERSION;?>" rel="stylesheet" id='link_css_list'/>
	
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
</style>
<body style="overflow:hidden;">
	<?php include(TEMPLATE.'common/navbar_share.html');?>
	<div class="frame-main">
		<?php if($msg=='password'){?>
		<div class="share_page_passowrd">
			<b><?php echo $L['share_password'];?>:</b>
			<input type="text" class="form-control"/>
			<a href="javascript:void(0);" class="btn btn-primary share_login"><?php echo $L['button_ok'];?></a>
		</div>
		<?php }else{?>
		<div class="share_page_error"><b>tips:</b><?php echo $msg;?></div>
		<?php }?>		
	</div><!-- / frame-main end-->
<?php include(TEMPLATE.'common/footer.html');?>
<script src="<?php echo STATIC_PATH;?>js/lib/seajs/sea.js?ver=<?php echo KOD_VERSION;?>"></script>
<script src="./index.php?share/common_js&user=<?php echo $_GET['user'];?>&sid=<?php echo $_GET['sid'];?>&#=<?php echo rand_string(8);?>"></script>
<script type="text/javascript">
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