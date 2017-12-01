kodReady.push(function(){
	kodApp.add({
		name:"VLCPlayer",
		title:LNG['Plugin.default.VLCPlayer'],
		ext:"{{config.fileExt}}",
		sort:"{{config.fileSort}}",
		icon:'{{pluginHost}}/static/images/icon.png',
		callback:function(path,ext){
			if(isWap()){//ios不支持文件下载
				window.open(core.path2url(path));
				return;
			}
			var dialog = $.dialog({
				ico:core.icon(ext),
				title:urlDecode(core.pathThis(path)),
				animate:false,
				width:750,
				height:450,
				content:makePlayer(core.path2url(path)),
				resize:true,
				padding:0,
				fixed:true
			});
			$('.VLCPlayer-dialog embed').css('background','#000');

			setTimeout(function() {
				var vlc = getVLC("vlc");
				if(!vlc.playlist){
					dialog.DOM.wrap.find('.error-tips').removeClass('hidden');
				}
				dialog._clickMax();
				dialog._clickMax();
			},500);
		}
	});


	function getVLC(name){   
		if (window.document[name]){   
			return window.document[name];   
		}   
		if ($.isIE()) {   
			if (document.embeds && document.embeds[name]){
				return document.embeds[name];  
			} 
		}else{   
			return document.getElementById(name);   
		}   
	} 
	var makePlayer = function(src){
		if(navigator.platform.toLowerCase().indexOf('win') == -1 ){
			var msg = '<div class="row can-select" style="position:absolute;top:40%;width:100%;">\
			 <div class="col-md-8 col-md-offset-2">\
			 <div class="alert alert-warning" role="alert">\
			 <h5>抱歉，该插件仅支持windows系统</h5> </div>  </div></div>';
			return msg;
		}

		var player = "";
		var width = '100%',height = '100%';
		var download = "http://download.videolan.org/pub/videolan/vlc/2.2.6/win32/vlc-2.2.6-win32.exe";

		player = '<object width="'+width+'" height="'+height+'" data="'+src+'" id="VLCPlayer" ';
		player += 'classid="clsid:67DABFBF-D0AB-41fa-9C46-CC0F21721616">'; 
		player += '<param name="codebase" value="http://go.divx.com/plugin/DivXBrowserPlugin.cab">';
		player += '<param value="true" name="autoPlay">';
		player += '<param value="'+src+'" name="src">';
		player += '<embed width="'+width+'" height="'+height+'" version="VideoLAN.VLCPlugin.2" pluginspage="'+download+'" type="application/x-vlc-plugin" name="vlc" src="' + src + '">';
		player += '</object>';

		player += '<div class="row can-select error-tips hidden" style="position:absolute;top:40%;width:100%;">\
		 <div class="col-md-8 col-md-offset-2"><div class="alert alert-warning">\
			<h4> VLC播放器尚未安装<br/><br/></h4>\
			<p>请先安装 <a href="'+download+'">VLC播放器</a> 安装后需重新启动浏览。<br/>\
			或将文件<a href="'+src+'">下载</a>到本地用电脑播放器播放。<br/><br/>\
			注: 该插件需要activex支持，只支持windows,不支持firefox和chrome50+(屏蔽了activex功能),建议使用360极速、QQ浏览器、UC浏览器、猎豹等\
			</p>\
		</div>\
		</div></div>';
		return player;
	}
});


