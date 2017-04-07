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
	
	<title><?php echo $share_info['name'].' - '.$L['share_title'].' - '.strip_tags($L['kod_name']).$L['kod_power_by'];?></title>
	<link href="<?php echo STATIC_PATH;?>images/common/favicon.ico" rel="Shortcut Icon">
	<link href="<?php echo STATIC_PATH;?>style/common.css?ver=<?php echo KOD_VERSION;?>" rel="stylesheet"/>
	<link href="./static/style/font-awesome/css/font-awesome.css?ver=<?php echo KOD_VERSION;?>" rel="stylesheet">
	<!--[if IE 7]>
	<link rel="stylesheet" href="./static/style/font-awesome/css/font-awesome-ie7.css">
	<![endif]-->

	
	<link rel="stylesheet" href="<?php echo STATIC_PATH;?>style/skin/base/app_editor.css?ver=<?php echo KOD_VERSION;?>"/>
	<link rel="stylesheet" href="<?php echo STATIC_PATH;?>style/skin/<?php echo $config_theme;?>.css?ver=<?php echo KOD_VERSION;?>" id='link_css_list'/>
	
</head>


<?php if(isset($_GET['project'])){?>
<style>
.topbar{display: none;}
.frame-header,.frame-main,.frame-main .frame-left{top:0;}
.edit_content.markdown_full_page .edit_right_frame .markdown_preview {padding-top: 50px;}
.edit_body {bottom: 30px;}
</style>
<?php } ?>

<?php if(isset($_GET['user'])){?>
<style>
.frame-main .frame-left{top:0;}
.frame-main{bottom: 32px;}
</style>
<?php } ?>

<body style="overflow:hidden;" oncontextmenu="return core.contextmenu();" id="page_editor">
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
					  src="./index.php?share/edit&user=<?php echo clear_html($_GET['user']);?>&sid=<?php echo clear_html($_GET['sid']);?>" 
					  style="width:100%;height:100%;border:0;" frameborder=0></iframe>
				</div>	
			</div>
		</div><!-- / frame-right end-->
	</div><!-- / frame-main end-->
<?php include(TEMPLATE.'common/footer_common.html');?>
<script type="text/javascript" src="<?php echo STATIC_PATH;?>js/lib/seajs/sea.js?ver=<?php echo KOD_VERSION;?>"></script>
<script type="text/javascript" src="./index.php?share/common_js&user=<?php echo clear_html($_GET['user']);?>&sid=<?php echo clear_html($_GET['sid']);?>&#=<?php echo rand_string(8);?>"></script>
<script type="text/javascript">
	AUTH  = {'explorer:fileDownload':<?php echo $can_download;?>};
	G.project = "<?php echo (isset($_GET['project'])?clear_html($_GET['project']):'') ;?>";
	G.user = "<?php echo clear_html($_GET['user']);?>";
	G.sid = "<?php echo clear_html($_GET['sid']);?>";
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
