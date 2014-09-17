<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $L['title'];?></title>
	<link rel="Shortcut Icon" href="<?php echo STATIC_PATH;?>/images/favicon.ico">
	<link href="<?php echo STATIC_PATH;?>js/lib/picasa/style/style.css?ver=<?php echo KOD_VERSION;?>" rel="stylesheet"/>
	<link href="<?php echo STATIC_PATH;?>js/lib/webuploader/webuploader.css?ver=<?php echo KOD_VERSION;?>" rel="stylesheet"/>
	<link href="<?php echo STATIC_PATH;?>style/bootstrap.css?ver=<?php echo KOD_VERSION;?>" rel="stylesheet"/>	    
	<link href="./static/style/font-awesome/style.css?ver=<?php echo KOD_VERSION;?>" rel="stylesheet"/>
	<?php if(STATIC_LESS == 'css'){ ?>
	<link href="<?php echo STATIC_PATH;?>style/skin/<?php echo $config['user']['theme'];?>app_explorer.css?ver=<?php echo KOD_VERSION;?>" rel="stylesheet" id='link_css_list'/>
	<?php }else{//less_compare_online ?>
	<link rel="stylesheet/less" type="text/css" href="<?php echo STATIC_PATH;?>style/skin/<?php echo $config['user']['theme'];?>app_explorer.less"/>
	<script src="<?php echo STATIC_PATH;?>js/lib/less-1.4.2.min.js"></script>	
	<?php } ?>
</head>

<?php if($is_frame){?>
<style>.topbar{display: none;}.frame-header{top:0;}.frame-main{top:50px;}</style>
<?php } ?>

<body style="overflow:hidden;" oncontextmenu="return core.contextmenu();">
	<?php include(TEMPLATE.'common/navbar.html');?>
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

				<button class="btn btn-default" id='fav' title='<?php echo $L['add_to_fav'];?>' type="button">
					<i class="font-icon icon-star"></i>
				</button>

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
						<div class="btn-group btn-group-sm">
					        <button id='newfolder' class="btn btn-default" type="button">
					        	<i class="font-icon icon-folder-close-alt"></i><?php echo $L['newfolder'];?>
					        </button>
					        <button id='newfile' class="btn btn-default" type="button">
					        	<i class="font-icon icon-file-alt"></i><?php echo $L['newfile'];?>
					        </button>
					        <button id='upload' class="btn btn-default" type="button">
					        	<i class="font-icon icon-cloud-upload"></i><?php echo $L['upload'];?>
					        </button>

					        <div class="btn-group btn-group-sm">
						    <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
						      <i class="font-icon icon-tasks"></i>more&nbsp;<span class="caret"></span>	      
						    </button>
						    <ul class="dropdown-menu pull-right drop-menu-action fadein">
						    	<li id="open"><a href='javascript:;'>
						    	<i class="font-icon icon-folder-open-alt"></i><?php echo $L['open'];?></a></li>

							    <li id="copy"><a href='javascript:;'>
							    <i class="font-icon icon-copy"></i><?php echo $L['copy'];?></a></li>

							    <li id="rname"><a href='javascript:;'>
							    <i class="font-icon icon-pencil"></i><?php echo $L['rename'];?></a></li>

							    <li id="cute"><a href='javascript:;'>
							    <i class="font-icon icon-cut"></i><?php echo $L['cute'];?></a></li>
							    <li id="past"><a href='javascript:;'>
							    <i class="font-icon icon-paste"></i><?php echo $L['past'];?></a></li>
							    <li id="clone"><a href='javascript:;'>
							    <i class="font-icon icon-external-link"></i><?php echo $L['clone'];?></a></li>
							    <li id="remove"><a href='javascript:;'>
							    <i class="font-icon icon-trash"></i><?php echo $L['remove'];?></a></li>

							    <li class="divider"></li>
							    <li id="zip"><a href='javascript:;'>
							    <i class="font-icon icon-folder-close"></i><?php echo $L['zip'];?></a></li>
							    <li id="download"><a href='javascript:;'>
							    <i class="font-icon icon-download"></i><?php echo $L['download'];?></a></li>
							    <li class="divider"></li>
							    <li id="info"><a href='javascript:;'>			    
							    <i class="font-icon icon-info"></i><?php echo $L['info'];?></a></li>
						    </ul>
						  </div>
						</div>
						<span class='msg'><?php echo $L['path_loading'];?></span>
					</div>
					<div class="tools-right">
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
				<div class='bodymain html5_drag_upload_box'>
					<div class="fileContiner"></div>
				</div><!-- html5拖拽上传list -->
			</div>
		</div><!-- / frame-right end-->
	</div><!-- / frame-main end-->
<script src="<?php echo STATIC_PATH;?>js/lib/seajs/sea.js?ver=<?php echo KOD_VERSION;?>"></script>
<script type="text/javascript">
    var LNG = <?php echo json_encode($L);?>;
    <?php if(isset($GLOBALS['auth'])) echo "var AUTH = "+json_encode($GLOBALS['auth']);?>;
	var G = {
		is_root 	: <?php echo  $GLOBALS['is_root'];?>,
		web_root 	: "<?php echo $GLOBALS['web_root'];?>",
		web_host 	: "<?php echo HOST;?>",
		static_path : "<?php echo STATIC_PATH;?>",
		basic_path  : "<?php echo BASIC_PATH;?>",
		public_path  : "<?php echo PUBLIC_PATH;?>",
		upload_max  : "<?php echo $upload_max;?>",
		version 	: "<?php echo KOD_VERSION;?>",
		app_host 	: "<?php echo APPHOST;?>",
		office_server: "<?php echo OFFICE_SERVER;?>",

		this_path	: "<?php echo $dir;?>",//当前绝对路径
		myhome   	: "<?php echo MYHOME;?>",//当前绝对路径	

		json_data	: "",//用于存储每次获取列表后的json数据值。
		list_type	: "<?php echo $config['user']['list_type'];?>",		//文件列表显示方式 list/icon
		sort_field 	: "<?php echo $config['user']['list_sort_field'];?>", //列表排序依照的字段  
		sort_order 	: "<?php echo $config['user']['list_sort_order'];?>",	//列表排序升序or降序
		musictheme	: "<?php echo $config['user']['musictheme'];?>",
		movietheme	: "<?php echo $config['user']['movietheme'];?>"	
	};
	seajs.config({
		base: "<?php echo STATIC_PATH;?>js/",
		preload: ["lib/jquery-1.8.0.min"],
		map:[
			[ /^(.*\.(?:css|js))(.*)$/i,'$1?ver='+G.version]
		]
	});
	seajs.use("<?php echo STATIC_JS;?>/src/explorer/main");
</script>
</body>
</html>