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

	
	<link href="<?php echo STATIC_PATH;?>style/skin/<?php echo $config_theme;?>app_editor.css?ver=<?php echo KOD_VERSION;?>" rel="stylesheet" id='link_css_list'/>
	
</head>


<?php if(isset($_GET['project'])){?>
<style>.topbar{display: none;}.frame-header{top:0;}.frame-main{top:0px;}</style>
<?php } ?>

<body style="overflow:hidden;" oncontextmenu="return core.contextmenu();">
	<?php include(TEMPLATE.'common/navbar_share.html');?>
	<div class="frame-main">
		<div class='frame-left'>
			<ul id="folderList" style="margin-top:10px;" class="ztree"></ul>
		</div><!-- / frame-left end-->
		<div class='frame-resize'></div>
		<div class='frame-right'>
			<div class="frame-right-main"  style="height:100%;padding:0;margin:0;">
				<div class="resizeMask"></div>
				<div class="messageBox"><div class="content"></div></div>
				<div class="menuTreeRoot"></div>
				<div class="menuTreeFolder"></div>
				<div class="menuTreeFile"></div>				
				<div class ='frame'>
					 <iframe name="OpenopenEditor"
					  src="./index.php?share/edit&user=<?php echo $_GET['user'];?>&sid=<?php echo $_GET['sid'];?>" 
					  style="width:100%;height:100%;border:0;" frameborder=0></iframe>
				</div>	
			</div>
		</div><!-- / frame-right end-->
	</div><!-- / frame-main end-->
<?php include(TEMPLATE.'common/footer.html');?>
<script src="<?php echo STATIC_PATH;?>js/lib/seajs/sea.js?ver=<?php echo KOD_VERSION;?>"></script>
<script src="./index.php?share/common_js&user=<?php echo $_GET['user'];?>&sid=<?php echo $_GET['sid'];?>&#=<?php echo rand_string(8);?>"></script>
<script type="text/javascript">
	AUTH  = {'explorer:fileDownload':<?php echo $can_download;?>};
	G.project = "<?php echo (isset($_GET['project'])?$_GET['project']:'') ;?>";
	G.user = "<?php echo $_GET['user'];?>";
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
	seajs.use("app/src/share_editor/main");
</script>
</body>
</html>