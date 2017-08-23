var jPlayerConfigInit = function($player,config){
	var playerConfig = {
		supplied: "flv,webma,webmv,oga,ogv,m4v,mp3,wav,rtmpa,rtmpv",
		solution: "html,flash",
		wmode:"transparent",
		volume:0.8,
		autoBlur: true,
		autohide:{
			restored:true,// false true autohide
			full:true,
			fadeIn:400,
			fadeOut:1000,
			hold:2500
		},
		smoothPlayBar: false,
		keyEnabled: true,
		remainingDuration: false,
		toggleDuration: false,
		errorAlerts: false,
		warningAlerts: false,
		size: {
			width: "100%",
			height: "auto"
		},
		cssSelectorAncestor: "#"+$($player).attr('id'),
		cssSelector: {
			videoPlay: ".video-play",
			play: ".play",
			pause: ".pause",
			seekBar: ".seekBar",
			playBar: ".playBar",
			mute: ".right-volume .mute",
			unmute: ".right-volume .unmute",
			volumeBar: ".volume-control",
			volumeBarValue: ".volume-control .volume-value",
			currentTime: ".timer.current",
			duration: ".timer.duration",
			fullScreen: ".fullscreen",
			restoreScreen: ".smallscreen",
			gui: ".controls",
			noSolution: ".noSolution"
		},
		ready: function(current) {
			$($player).find(".controls .progress-block").css({margin: "0 10px 0 45px"});
			var media = $(this).data('jPlayer').option.media;
			if(media){
				$(this).jPlayer('setMedia',media);
			}
		},
		loadedmetadata:function(){//载入后重置窗口大小
			try{
				$player.data('player_resize','0');
				setTimeout(function(){
					jPlayerResizeVedio($player);
				},200);
			}catch(e){};
		},
		error: function(current) {
			if(current.jPlayer.error.type != $.jPlayer.error.FLASH){
				//Tips.tips(LNG.unknow_file_tips+'('+current.jPlayer.error.type+')',false);
			}
			var $that = $(this);
			var $jPlayer = $($player).find(".jPlayer-container");
			if($that.data('errorNum') == undefined){
				$that.data('errorNum',1);
			}
			//flash未加载完成
			if( current.jPlayer.error.type == $.jPlayer.error.FLASH &&
				$jPlayer.data('jPlayer') && 
				$that.data('errorNum') < 100 &&
				$jPlayer.data('jPlayer').status){
				setTimeout(function(){
					$that.data('errorNum',$that.data('errorNum')+1);
					var data = $jPlayer.data('jPlayer');
					if(data && data.status){
						$jPlayer.jPlayer('setMedia',data.status.media).jPlayer('play');
					}
				},200);
			}
			if(current.jPlayer.error.type === $.jPlayer.error.URL_NOT_SET){
			}
		},
		waiting:function(){
			$($player).find('.video-play-loading').show();
		},
		playing:function(){
			$($player).find('.video-play-loading').hide();
			if($player.data('player_resize') != '1'){
				$player.data('player_resize','1');
				jPlayerResizeVedio($($player));
			}
		},
		play: function() {
			$($player).find('.video-play').stop(true, true).fadeOut(150);
		},
		pause: function() {
			$($player).find('.video-play').stop(true, true).fadeIn(150);
		},
		ended: function() {
			var $next = $($player).find('.play-forward');
			if($next.length ==1){
				$next.click();
			}
		}
	};

	$.extend(playerConfig,config);
	return playerConfig;
}

var jPlayerResizeVedio = function($player){
	var name = $player.parents('.dialog-simple').find('.aui-title-bar').attr('id');
	var dialog = $.artDialog.list[name];
	var $vedio = $player.find('video');
	if(name != 'movie-player-dialog' || $vedio.length == 0){
		return;
	}
	var vWidth    = $vedio.width(),
		vHeight   = $vedio.height(),
		winWidth  = $(window).width(),
		winHeight = $(window).height(),
		r = vWidth/vHeight;

	if(vHeight >= winHeight*0.8){
		vHeight = winHeight*0.8;
		vWidth  = vHeight*r;
	}
	if(vWidth >= winWidth*0.8){
		vWidth = winWidth*0.8;
		vHeight = vWidth/r;
	}
	dialog.size(vWidth,vHeight);
}

var jPlayerBindControl = function($player){
	var $jPlayer = $player.find(".jPlayer-container");
	$player.find('.playerScreen').unbind('dblclick').dblclick(function(event) {
		if(!$player.hasClass('jp-state-full-screen')){
			$player.find('.fullscreen').click();
		}else{//退出全屏
			$player.find('.smallscreen').click();
		}
	}).unbind('click').click(function(event) {
		var $buttonPlay = $player.find('.video-play');
		if($buttonPlay.css('display') == "none"){
			$jPlayer.jPlayer("pause");
			$buttonPlay.stop(true, true).fadeIn(150);
		}else{
			$jPlayer.jPlayer("play");
			$buttonPlay.stop(true, true).fadeOut(350);
		}
		stopPP(event);
		return false;
	}).unbind('mousemove').mousemove(function(event) {
		var $gui = $player.find('.controls');
		$gui.fadeIn(100, function() {
			clearTimeout($gui.data('auto_timer'));
			var timer = setTimeout( function() {
				$gui.fadeOut(300);
			},2000);
			$gui.data('auto_timer',timer);
		});
	});
	
	$player.find(".volumeblock").unbind('mousedown').mousedown(function() {
		var $that = $(this);
		var isDrag = true;
		$that.mousemove(function(e) {
			if(!isDrag) return;
			var percent = (e.pageX - $that.offset().left-5) / $that.find(".volume-control").width();
			percent = percent <= 0 ? 0 : percent;
			percent = percent >= 1 ? 1 : percent;

			$that.find(".volume-value").css('width',(percent*100)+'%');
			$player.find(".jPlayer-container").jPlayer("option", "muted", false);
			$player.find(".jPlayer-container").jPlayer("option", "volume",percent);
			return false;
		}).mouseup(function(e){
			isDrag = false;
		});
		return false;
	});
	$player.find(".progress").unbind('mousedown').mousedown(function() {
		var $that = $(this);
		var isDrag = true;
		var resetHead = function(e){
			var width = $that.find(".seekBar").width();
			var percent = (e.pageX - $that.offset().left) / width * 100;
			$that.find(".playBar").css({
				width: percent + "%"
			});
			$player.find(".jPlayer-container").jPlayer("playHead",percent);
			$player.find(".jPlayer-container").jPlayer('play');
		};
		$(this).mousemove(function(e) {
			if(!isDrag) return;
			resetHead(e);
			return false;
		}).mouseup(function(e){
			resetHead(e);
			isDrag = false;
		});
		return false;
	}).unbind('mouseenter').bind('mouseenter',function(){
		$player.find('.current-time-tips').fadeIn();
	}).unbind('mouseleave').bind('mouseleave',function(){
		$player.find('.current-time-tips').fadeOut();
	}).unbind('mousemove').bind('mousemove',function(e){
		var playerData = $player.find(".jPlayer-container").data('jPlayer');
		if(!playerData) return;
		var $that = $(this);
		var percent = (e.pageX - $that.offset().left) / $that.width();
		var display = $.jPlayer.convertTime(playerData.status.duration * percent);
		var left = e.pageX - $($player).offset().left;
		$player.find('.current-time-tips').css('left',left).text(display);
	});
}
