var dialog_tpl_css = "<style>\
div.check_version_dialog .aui_header{background:transparent;opacity:1;filter: alpha(opacity=100);}\
div.check_version_dialog .aui_title{color:#fff;text-shadow:none;}\
div.check_version_dialog .aui_min,div.check_version_dialog .aui_max{display:none;}\
div.check_version_dialog .aui_close{border-radius: 12px;}\
div.dialog-simple .dialog_mouse_in{.aui_header{.opacity(100);}}\
div.check_version_dialog .aui_content{overflow: visible;}\
div.check_version_dialog .aui_title{background-color:transparent;border: none;}\
.update_box .hidden{display: none;}\
.update_box{background:#fff;font-size: 14px;box-shadow: 0 5px 30px rgba(0,0,0,0.5);margin-top:-35px;}\
.update_box .title{width:100%;background:#6699cc;color:#fff;height:130px;}\
.update_box .button_radius{text-align:center;margin: 0 auto;padding-top:50px;}\
.update_box .button_radius a{color:#fff;text-decoration:none;border-bottom: 2px solid #f6f6f6;border:2px solid rgba(255,255,255,0.6);\
    border-radius:20px;padding:5px 10px;display: inline-block;font-size: 16px;}\
.update_box .button_radius a i{padding-left: 8px;}\
.update_box .button_radius a:hover,.button_radius a:focus,.button_radius a.this{background:rgba(255,255,255,0.3);}\
.update_box .button_radius a.this:hover{cursor: default;}\
.update_box .ver_tips{float:right; ;text-align: right;text-decoration: none;color:#9CF;display:block;margin-top: -26px;padding-right:10px;}\
.update_box .ver_tips:hover{color:#fff;}\
.update_box .version{color:#fff;font-size: 13px;text-align: center;line-height:50px;height:50px;}\
.update_box .version_info{padding:20px;}\
.update_box .version_info i{font-size:15px;display: block;border-left:3px solid #9cf;padding-left:10px;}\
.update_box .version_info .version_info_content{color: #69c;background:#eee;margin-top: 10px;padding:10px;}\
.update_box .version_info p{height:140px;overflow:auto;}\
.update_box .version_info a{float: right;color:#69c;text-decoration: none;}\
.update_box .progress{box-shadow:0 0 3px #fff;border-radius:20px;margin: 0 auto;margin-bottom:10px;width:170px;height:16px;margin-top: 10px;overflow:hidden !important;}\
.update_box .progress img{width:170px;}\
</style>";
var dialog_tpl_html = "<div class='update_box'>\
    <div class='title'>\
        <div class='button_radius'>\
            <div class='progress hidden'><img src='{{loading_img}}'/></div>\
            {{if has_new}}\
            <a href='javascript:;' class='update_click'><span>{{LNG.update_auto_update}}</span><i class='icon-arrow-right'></i></a>\
            {{else}}\
            <a href='javascript:;' class='this'>{{LNG.update_is_new}}<i class='icon-smile'></i></a>\
            {{/if}}\
        </div>\
        {{if has_new}}<a class='ver_tips ignore' href='javascript:;'>{{LNG.update_ignore}}</a>{{/if}}\
        <div class='version'>{{LNG.update_version_local}}：ver{{ver_local}} | {{LNG.update_version_newest}}：ver {{ver_new}}\
        {{if has_new}}<span class='badge' style='background:#f60;'>new</span>{{/if}}</div>\
        <div style='clear:both'></div>\
    </div>\
    <div class='version_info'>\
        <i>ver {{ver_new}} {{LNG.update_whats_new}}：</i>\
        <div class='version_info_content'>\
            <p>{{echo LNG.update_info}}</p>\
            <a class='more' href='{{readmore_href}}' target='_blank'>{{LNG.update_readmore}}</a>\
            <div style='clear:both'></div>\
        </div>\
    </div>\
</div>";
define(function(require, exports) {
	var server_version = '3.01';//最新版本
	var local_version  = G.version;
	var readmore_href  = 'http://kalcaddle.com/download.html';
	var current_version_file = 'http://static.kalcaddle.com/download/update/2.0-'+server_version+'.zip';
	var status_href = 'http://kalcaddle.com/tools/state/index.php';
	
	var kod_user_online = 'kod_user_online_version';
	var time = function(){var date = new Date();return parseInt(date.getTime()/1000);}
	var _download = function(from,to,callback){
		$.ajax({
			url:'?explorer/serverDownload&save_path='+to
				 +'&url='+urlEncode2(from),
			dataType:'json',
			success:function(data){
				if (typeof (callback) == 'function') callback(data);
			}
		});
	};
	var _unzip = function(file,unzip_to,callback){
		$.ajax({
			url:'index.php?explorer/unzip&path_to='+urlEncode(unzip_to)
				+'&path='+urlEncode(file),
			success:function(data){
				if (typeof (callback) == 'function') callback(data);
			}
		});
	};
	var _remove = function(param,callback){
		$.ajax({
			url: 'index.php?explorer/pathDelete',
			type:'POST',
			dataType:'json',
			data:param,
			success:function(data){
				if (typeof (callback) == 'function') callback(data);
			}
		});
	};
	//自动更新
	var update = function(){
		if (G.is_root !=1) return;
		var id = 'check_version_dialog',
			$button = $('.'+id).find('.update_click'),
			$press  = $('.'+id).find('.progress'),
			$tips 	= $('.'+id).find('.ver_tips');
		var new_file = current_version_file,
			save_to  = G.basic_path+'data/',
			unzip_to = G.basic_path;
		$tips.removeClass('ignore').html(LNG.update_downloading);
		$button.addClass('hidden');
		$press.removeClass('hidden').fadeIn(300);

		_download(new_file,save_to,function(data){
			if (data.code) {
				var zipfile = data.info;
				if (zipfile.length<20) {//新的远程下载返回文件名 之前为全名。
					zipfile = save_to+zipfile;
				}
 				var remove = 'list=[{"type":"file","path":"'+urlEncode(zipfile)+'"}]';
				_unzip(zipfile,G.basic_path,function(data){
					if (data.code) {//更新成功
						_remove(remove,function(){//删除下载的安装包
							Cookie.del(kod_user_online);
							$press.addClass('hidden');
							$tips.html(LNG.update_success);
							$button.removeClass('hidden')
								.unbind('click')
								.removeClass('update_click')
								.addClass('this')
								.html(LNG.update_success);
							setTimeout(function(){//更新完自动刷新
								FrameCall.goRefresh();
							},2000);
						});
						return;
					}
					//解压失败
					$press.addClass('hidden');
					$tips.html(LNG.update_unzip_fail);
					$button.removeClass('hidden').html(LNG.update_auto_update);
				});
				return;
			}
			//解压失败
			$press.addClass('hidden');
			$tips.html(LNG.update_download_fail);
			$button.removeClass('hidden').html(LNG.update_auto_update);			
		});
	};

	var init_language = function(){
		var type = 'en';
		if (typeof(G["lang"]) != 'undefined') type = G["lang"];
		if (typeof(LNG["config"]) != 'undefined' && 
			typeof(LNG["config"]['type']) != 'undefined'){
			type = LNG["config"]['type'];
		}
		if (!inArray(['en','zh_CN'],type)) type = 'en';
		var L = {
			'en':{
				'update_downloading':'Downloading...',
				'update_download_fail':'Download failed',
				'update_unzip_fail':'Unzip update failed',
				'update_doing':'Updating',
				'update_title':"Update",
				'update_success':"Update successful",
				'update_fail':"Update failed",
				'update_auto_update':"Update Now",
				'update_is_new':"Aredy is the newest",
				'update_version_newest':"Newest Version",
				'update_version_local':"Current Version",
				'update_ignore':"Ignore",		
				'update_readmore':"Read more",
				'update_whats_new':"What's New",
				'update_info':"1.zip bug<br/>2.drag ——cute<br/>3.search <br/>4.editor...<br/>"
			},
			'zh_CN':{
				'update_downloading':'下载中...',
				'update_download_fail':'下载失败',
				'update_unzip_fail':'解压覆盖失败',
				'update_doing':'更新中...',
				'update_title':"更新提示",
				'update_success':"更新成功！",
				'update_fail':"更新失败！",
				'update_auto_update':"自动更新",
				'update_is_new':"已经是最新版",
				'update_version_newest':"最新版本",
				'update_version_local':"当前版本",
				'update_ignore':"暂时忽略",
				'update_readmore':"查看更多",
				'update_whats_new':"更新说明",
				'update_info':"3.01:3.0的一些bug修复，分享优化<br/>1.文件分享<br/>2.大文件上传<br/>3.回收站<br/>4.自定义菜单....,more..."
			}
		};
		for (var key in L[type]){
			LNG[key] = L[type][key];
		}
	};

	//自动检查版本，自动更新
	var check_version = function(display){
		var ver_new = parseFloat(server_version),
			ver_local = parseFloat(local_version),
			key_timeout = 'kod_update_ignore_timeout',
			has_new = false;
		if (ver_new > ver_local) has_new=true;
        if (local_version.indexOf('commercial') >1) return;
		//if (ver_new != ver_local) has_new=true;

		//对话框显示
		var show_dialog = function(){
			var id = 'check_version_dialog';
			if ($('.'+id).length==0) {
				init_language();
				var render = template.compile(dialog_tpl_html);
				var html = dialog_tpl_css+render({
						loading_img:G.static_path+'images/loading_simple.gif',
						LNG:LNG,has_new:has_new,
						readmore_href:readmore_href,
						ver_new:server_version,ver_local:local_version});				
				art.dialog.through({
					id:id,
					simple:true,
					top:'50%',
					resize:false,
					width:330,
					title:LNG.update_title,
					padding:'0',
					fixed:true,
					content:html
				});
				$('.'+id)
					.hide()
					.fadeIn(600)
					.find('.update_click').unbind('click').bind('click',function(){
						update();
						Cookie.del(key_timeout);
				});
				$('.'+id).find('.ignore').die('click').live('click',function(){
					//设置cookie一年有效,2天后检查;
					Cookie.set(key_timeout,time()+3600*24*2,24*365);
					art.dialog.list[id].close();
				});
			}			
		};

		if (display) show_dialog();
		if (has_new && //第一次
			(Cookie.get(key_timeout) == undefined ||
			 Cookie.get(key_timeout) <= time())) {
			show_dialog();
		}
	};
	var user_state = function(){
		//当前版本
		//if (Cookie.get(kod_user_online) != undefined) return;
		var url = status_href+'?is_root='+G.is_root
				  +'&host='+urlEncode(G.app_host)+'&version='+local_version;
		require.async(url,function(){
			Cookie.set(kod_user_online,'check-at-'+time(),24);
		});
	};
	//入口函数,没有参数则默认检查版本
	var todo = function(action) {
		switch(action){
			case undefined:
				//自动检查版本,有更新才跳出对话框
				if (G.is_root == 1) {
					check_version(false);
				}
				user_state();
				break;
			case 'check':check_version(true);break;//检查版本,显示版本信息
			default:break;
		}
	};
	return {
		todo:todo
	};
});