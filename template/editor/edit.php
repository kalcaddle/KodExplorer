<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="webpage"> 
<meta name="keywords" content="kalcaddle">
<meta name="author" content="kalcaddle.">
  <head>
  	<link href="<?php echo STATIC_PATH;?>style/bootstrap.css?ver=<?php echo KOD_VERSION;?>" rel="stylesheet"/>
	<link href="./static/style/font-awesome/style.css?ver=<?php echo KOD_VERSION;?>" rel="stylesheet"/>
	<?php if(STATIC_LESS == 'css'){ ?>
	<link href="<?php echo STATIC_PATH;?>style/skin/<?php echo $config['user']['theme'];?>app_code_edit.css?ver=<?php echo KOD_VERSION;?>" rel="stylesheet" id='link_css_list'/>
	<?php }else{//less_compare_online ?>
	<link rel="stylesheet/less" type="text/css" href="<?php echo STATIC_PATH;?>style/skin/<?php echo $config['user']['theme'];?>app_code_edit.less"/>
	<script src="<?php echo STATIC_PATH;?>js/lib/less-1.4.2.min.js"></script>	
	<?php } ?>
  </head>
  <body>
	<div class="edit_main" style="height: 100%;" oncontextmenu="return core.contextmenu();">
		<div class="tools">
			<div class="left">
				<a action="save" href="javascript:;" title='<?php echo $L['button_save'];?>(Ctrl-S)'><i class="font-icon icon-save"></i></a>
				<a action="saveall" href="javascript:;" title='<?php echo $L['button_save_all'];?>'><i class="font-icon icon-paste"></i></a>
				<span class="line"></span>
				<a action="pre" href="javascript:;" title="<?php echo $L['undo'];?>(Ctrl-Z)"><i class="font-icon icon-undo"></i></a>
				<a action="next" href="javascript:;" title="<?php echo $L['redo'];?>(Ctrl-Y)"><i class="font-icon icon-repeat"></i></a>
				<span class="line"></span>
				<a action="find" href="javascript:;" title="<?php echo $L['search'];?>(Ctrl-F)"><i class="font-icon icon-search"></i></a>
				<a action="gotoline" href="javascript:;" title="<?php echo $L['gotoline'];?>(Ctrl-L)"><i class="font-icon icon-pushpin"></i></a>
				<span class="line"></span>
				<a action="font" class="font" data-toggle="dropdown" href="javascript:;" title="<?php echo $L['font_size'];?>" id='drop_fontsize'>
					<i class="font-icon icon-font"></i><i class="font-icon icon-caret-down"></i>
				</a>
				<a action="codetheme" class="codetheme" data-toggle="dropdown" href="javascript:;" title="<?php echo $L['code_theme'];?>" id='drop_codetheme'>
					<i class="font-icon icon-magic"></i><i class="font-icon icon-caret-down"></i>
				</a>
				<span class="line"></span>
				<a action="wordbreak" href="javascript:;" title="<?php echo $L['wordwrap'];?>"><i class="font-icon icon-level-down"></i></a>
				<a action="display" href="javascript:;" title="<?php echo $L['char_all_display'];?>"><i class="font-icon icon-eye-open"></i></a>
				<a action="auto_complete" href="javascript:;" title="<?php echo $L['auto_complete'];?>"><i class="font-icon icon-code"></i></a>
				<span class="line"></span>
				<a action="setting" href="javascript:;" title="<?php echo $L['setting'];?>"><i class="font-icon icon-cog"></i></a>
				<a action="preview" href="javascript:;" title="<?php echo $L['preview'];?>(Ctrl-Shift-S)"><i class="font-icon icon-globe"></i></a>
			</div>
			<div class="right">
				<a action="max" href="javascript:;" title="<?php echo $L['full_screen'];?>"><i class="font-icon icon-fullscreen"></i></a>
				<a action="close" href="javascript:;" title="<?php echo $L['close'];?>"><i class="font-icon icon-remove"></i></a>
			</div>
			<div style="clear:both"></div>
		</div><!-- end tools -->

		<ul id="fontsize" class="dropdown-menu dropbox" role="menu" aria-labelledby="drop_fontsize">
			<li>12px</li><li>13px</li><li class="this">14px</li><li>16px</li>
			<li>18px</li><li>24px</li><li>28px</li><li>32px</li>
		</ul>
		<ul id="codetheme"  class="dropdown-menu dropbox" role="menu" aria-labelledby="drop_codetheme">
		<?php 
			$tpl="<li class='{this} list' theme='{0}'>{0}</li>\n";
			echo getTplList(',',':',$config['setting_all']['codethemeall'],$tpl,'0');
		?>
		</ul>

		<!-- 主体部分 -->
		<div class="frame_left">
			<div class="edit_tab">
				<div class="tabs">
					<a  href="javascript:Editor.add()" class="add icon-plus"></a>
					<div style="clear:both"></div>
				</div>
			</div>
			<div class="edit_body">
				<div class="introduction">
					<?php include(LANGUAGE_PATH.LANGUAGE_TYPE.'/edit.html');?>
					<div style="clear:both"></div>
				</div>
				<div class="tabs"></div>
			</div>			
		</div>
		<!-- 预览 -->
		<div class="frame_right">
			<div class="resize"></div>
			<div class="preview_tool">
				<input type="text" value="" />
				<div class="box">
					<a action="refresh" href="javascript:preview.refresh();" title="<?php echo $L['refresh'];?>"><i class="font-icon icon-refresh"></i></a>
					<a action="open_ie" href="" target="_blank" title="<?php echo $L['open_ie'];?>"><i class="font-icon icon-globe"></i></a>
					<a action="close_preview" href="javascript:preview.close();" title="<?php echo $L['close'];?>"><i class="font-icon icon-remove"></i></a>
				</div>
			</div>
			<div class="preview_frame">
				<iframe src="" style="width:100%;height:100%;border:0;"></iframe>
			</div>
		</div>
	</div>


<script src="<?php echo STATIC_PATH;?>js/lib/seajs/sea.js?ver=<?php echo KOD_VERSION;?>"></script>
<script src="<?php echo STATIC_PATH;?>js/lib/ace/src-min-noconflict/ace.js?ver=<?php echo KOD_VERSION;?>"></script>
<script src="<?php echo STATIC_PATH;?>js/lib/ace/src-min-noconflict/ext-language_tools.js?ver=<?php echo KOD_VERSION;?>"></script>
<script type="text/javascript">
    var LNG = <?php echo json_encode($L);?>;
	var G = {
		is_root 	: <?php echo  $GLOBALS['is_root'];?>,
		web_root 	: "<?php echo $GLOBALS['web_root'];?>",
		web_host 	: "<?php echo HOST;?>",
		static_path : "<?php echo STATIC_PATH;?>",
		public_path  : "<?php echo PUBLIC_PATH;?>",
		basic_path  : "<?php echo BASIC_PATH;?>",
		version 	: "<?php echo KOD_VERSION;?>",
		app_host 	: "<?php echo APPHOST;?>",
		office_server: "<?php echo OFFICE_SERVER;?>",

		myhome   	: "<?php echo MYHOME;?>",//当前绝对路径
		frist_file	: "<?php echo $_GET['filename'];?>",
		code_config : <?php echo $editor_config;?>
	};
	seajs.config({
		base: "<?php echo STATIC_PATH;?>js/",
		preload: ["lib/jquery-1.8.0.min"],
		map:[
			[ /^(.*\.(?:css|js))(.*)$/i,'$1?ver='+G.version]
		]
	});
	seajs.use("<?php echo STATIC_JS;?>/src/edit/main");
</script>
</body>
</html>