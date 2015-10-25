<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" scroll="no">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="renderer" content="webkit">
	<title><?php echo $share_info['name'].' - '.$L['share_title'].' - '.$L['kod_name'].$L['kod_power_by'];?></title>
	<link rel="Shortcut Icon" href="<?php echo STATIC_PATH;?>images/favicon.ico">
	<link href="<?php echo STATIC_PATH;?>js/lib/picasa/style/style.css?ver=<?php echo KOD_VERSION;?>" rel="stylesheet"/>
	<link href="<?php echo STATIC_PATH;?>style/bootstrap.css?ver=<?php echo KOD_VERSION;?>" rel="stylesheet"/>
	<link rel="stylesheet" href="./static/style/font-awesome/css/font-awesome.css">
	<!--[if IE 7]>
	<link rel="stylesheet" href="./static/style/font-awesome/css/font-awesome-ie7.css">
	<![endif]-->

	
	<link href="<?php echo STATIC_PATH;?>style/skin/<?php echo $config_theme;?>app_explorer.css?ver=<?php echo KOD_VERSION;?>" rel="stylesheet" id='link_css_list'/>
	
</head>
<style>
.frame-main .frame-left {bottom: 0px;}
<?php if(isset($_GET['type'])){
	echo '.topbar{display: none;}.frame-header{top:0;}.frame-main{top:50px;}';
} ?>
</style>


<body style="overflow:hidden;" oncontextmenu="return core.contextmenu();">
	<?php include(TEMPLATE.'common/navbar_share.html');?>
	<div class="frame-header">
		<div class="header-content">
			<div class="header-left">
				<div class="btn-group btn-group-sm">
					<button class="btn btn-default" id='history_back' title='<?php echo $L['history_back'];?>' type="button">
						<i class="font-icon icon-arrow-left"></i>
					</button>
					<button class="btn btn-default" id='history_next' title='<?php echo $L['history_next'];?>' type="button">
						<i class="font-icon icon-arrow-right"></i>
					</button>
					<button class="btn btn-default" id='refresh' title='<?php echo $L['refresh_all'];?>' type="button">
						<i class="font-icon icon-refresh"></i>
					</button>
				</div>
			</div><!-- /header left -->
			
			<div class='header-middle'>
				<button class="btn btn-default" id='home' title='<?php echo $L['root_path'];?>'>
					<i class="font-icon icon-home"></i>
				</button>

				<div id='yarnball' title="<?php echo $L['address_in_edit'];?>"></div>
				<div id='yarnball_input'><input type="text" name="path" value="" class="path" id="path"/></div>
				<button class="btn btn-default" id='up' title='<?php echo $L['go_up'];?>' type="button">
					<i class="font-icon icon-circle-arrow-up"></i>
				</button>
			</div><!-- /header-middle end-->

			<div class='header-right'>
				<input type="text" name="seach"/>
				<button class="btn btn-default" id='search' title='<?php echo $L['search'];?>' type="button">
					<i class="font-icon icon-search"></i>
				</button>
			</div>
		</div>
	</div><!-- / header end -->

	<div class="frame-main">
		<div class='frame-left'>
			<ul id="folderList" class="ztree"></ul>
		</div><!-- / frame-left end-->
		<div class='frame-resize'></div>
		<div class='frame-right'>
			<div class="frame-right-main">
				<div class="tools">
					<div class="tools-left">
						<!-- 文件功能 -->
						<div class="btn-group btn-group-sm kod_path_tool">
					        <button id='selectAll' class="btn btn-default" type="button">
					        	<i class="font-icon icon-refresh"></i><?php echo $L['selectAll'];?>
					        </button> 
							<button id='down' class="btn btn-default" type="button">
					        	<i class="font-icon icon-download"></i><?php echo $L['download'];?>
					        </button>					        				        
						</div>
						<span class='msg'><?php echo $L['path_loading'];?></span>
					</div>
					<div class="tools-right tools_list">
						<div class="btn-group btn-group-sm">
						  <button id='set_icon' title="<?php echo $L['list_icon'];?>" type="button" class="btn btn-default">
						  	<i class="font-icon icon-th"></i>
						  </button>
						  <button id='set_list' title="<?php echo $L['list_list'];?>" type="button" class="btn btn-default">
						  	<i class="font-icon icon-list"></i>
						  </button>
						  <div class="btn-group btn-group-sm">
						    <button id="set_theme" title="<?php echo $L['setting_theme'];?>" type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
						      <i class="font-icon icon-dashboard"></i>&nbsp;&nbsp;<span class="caret"></span>
						    </button>
						    <ul class="dropdown-menu pull-right dropdown-menu-theme fadein">
							    <?php 
									$tpl="<li class='list {this}' theme='{0}'><a href='javascript:void(0);'>{1}</a></li>\n";
									echo getTplList(',',':',$config['setting_all']['themeall'],$tpl,$config['user']['theme'],'this');
								?>
						    </ul>
						  </div>
						</div>
					</div>
					<div style="clear:both"></div>
				</div><!-- end tools -->
				<div id='list_type_list'></div><!-- list type 列表排序方式 -->
				<div class='bodymain menuBodyMain'>
					<div class="fileContiner"></div>
				</div><!-- html5拖拽上传list -->
			</div>
		</div><!-- / frame-right end-->
	</div><!-- / frame-main end-->
<?php include(TEMPLATE.'common/footer.html');?>
<script src="<?php echo STATIC_PATH;?>js/lib/seajs/sea.js?ver=<?php echo KOD_VERSION;?>"></script>
<script src="./index.php?share/common_js&user=<?php echo $_GET['user'];?>&sid=<?php echo $_GET['sid'];?>&#=<?php echo rand_string(8);?>"></script>
<script type="text/javascript">
	AUTH  = {'explorer:fileDownload':<?php echo $can_download;?>};
	G.this_path = "<?php echo $dir;?>";
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
	seajs.use("app/src/share_explorer/main");
</script>
</body>
</html>