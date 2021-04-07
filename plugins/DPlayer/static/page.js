define(function(require, exports) {
	var playStart = function(vedioInfo){
		var $target = createDialog(vedioInfo.name);
		var typeArr = {
			'f4v' : 'flv',
			'f4a' : 'flv',
			'm4a' : 'mp3',
			'aac' : 'mp3',
			'ogg' : 'oga',
		};
		var type = typeArr[vedioInfo.ext] || vedioInfo.ext;
		var playerOption = {
			container:$target.get(0),
			preload: 'none',
			theme:'#f60',
			loop: false,
			autoplay:true,
			lang: 'zh-cn',
			//flv仅支持 H.264+AAC编码 https://github.com/Bilibili/flv.js/issues/47
			video: {
				url:vedioInfo.url,
				type:type
			},			
			// danmaku: {
			// 	id:md5(vedioInfo.url),
			// 	api:'https://api.prprpr.me/dplayer/'
			// },
			contextmenu: [
				{
					text: 'kodcloud官网',
					link: 'https://kodcloud.com/'
				}
			]
		};
		if(window.DplayerSubtitle){
			// 默认加载同名文件字幕;暂时只支持vtt格式  http://dplayer.js.org/#/home?id=options
			playerOption.subtitle = {
				url:core.path2url(vedioInfo.path+'.vtt')
			}
		}
		var player = new DPlayer(playerOption);
		resetSize(player,$target);
	}
	var resetSize = function(player,$player){
		var reset = function(){
			// $player.css({position:'absolute'});
			var vWidth  = $player.width();
			var vHeight = $player.height();
			var wWidth  = $(window).width()  * 0.9;
			var wHeight = $(window).height() * 0.9;			
			if(vHeight >= wHeight){
				vWidth  = (wHeight * vWidth) / vHeight;
				vHeight = wHeight;
			}
			if( vWidth >= wWidth ){
				vHeight = (wWidth * vHeight) / vWidth;
				vWidth  = wWidth;
			}
			
			var dialog = $player.parents('.dplayer-dialog').data('artDialog');
			var left = ($(window).width()  - vWidth) / 2;
			var top  = ($(window).height() - vHeight) / 2;
			// console.log(22,[vWidth,vHeight],[left,top]);
			if(!dialog) return;
			dialog.size(vWidth,vHeight).position(left,top);
		}
		// $player.css({position:'absolute'});
		player.on('loadeddata',reset);
	};
	var createDialog = function(title,ext){
		var size  = {width:'70%',height:'60%'};
		if(ext == 'mp3'){
			size  = {width:'320px',height:'420px'};
		}
		var dialog = $.dialog({
			//id:'movie-dialog',
			simple:true,
			ico:core.icon('mp4'),
			title:title,
			width:size.width,
			height:size.height,
			content:'<div class="Dplayer"></div>',
			resize:true,
			padding:0,
			fixed:true,
			close:function(){
			}
		});
		dialog.DOM.wrap.addClass('dplayer-dialog');
		return dialog.DOM.wrap.find(".Dplayer");
	}
	
	
	var playReady = function(appStatic,vedioInfo){
		require.async([
			appStatic+'DPlayer/lib/flv.min.js',
			appStatic+'DPlayer/lib/hls.min.js',
			appStatic+'DPlayer/lib/dash.all.min.js',
			appStatic+'DPlayer/DPlayer.min.css',
			appStatic+'DPlayer/DPlayer.min.js',
			],function(a){
			playStart(vedioInfo);
		});
	}
	return {
		play:playReady
	};
});
