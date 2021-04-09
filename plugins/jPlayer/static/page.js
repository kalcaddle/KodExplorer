define(function(require, exports) {
	var movieTemplate = '';
	var musicTemplate = '';
	var MUSIC = 'music-player';
	var MOVIE = 'movie-player';
	var appStatic,appStaticDefault;

	var create = function(playerType){
		var ico = playerType == MUSIC?'mp3':'mp4';
		var selector = '.'+playerType+'-dialog';
		var template = movieTemplate;
		var size  = {width:'70%',height:'60%'};
		if(playerType == MUSIC){
			template = musicTemplate;
			size  = {width:'320px',height:'420px'};
		}
		var dialog = $.dialog({
			id:playerType+'-dialog',
			simple:true,
			ico:core.icon(ico),
			title:'player',
			// top:'25%',
			disableTab:true,
			width:size.width,
			height:size.height,
			content:template,
			resize:true,
			padding:0,
			fixed:true,
			close:function(){
				var player = getPlayer(playerType);
				player.jPlayer("destroy");//.jPlayer("pause");
			}
		});
		dialog.DOM.wrap.addClass('my-jPlayer');
		return $(selector).find(".jPlayer-container");
	};

	var getPlayerType = function(ext){
		if (ext =='music' ) return MUSIC;
		if (ext == undefined) ext = 'mp3';
		if (inArray(['mp3','wav','aac',	'm4a','oga','ogg','webma','m3u8a','m3ua','flac'],ext)) {
			return MUSIC;
		}else {
			return MOVIE;
		}
	};
	var getPlayer = function(playerType){
		var selector = '.'+playerType+'-dialog';
		var dialog = $(selector);
		if(dialog.length == 0){
			return false;
		}
		return dialog.find(".jPlayer-container");
	}

	/*
	html5:mp3,webma,oga,ogg,wav  | webmv,ogv,m4v,mp4,mov
	flash:mp3,m4a,m4v,mov,mp4,flv

	Safari:mp3,m4a | mp4,m4v,mov
	Chrome,Firefox:    mp3,m4a,webma,oga,wav | webmv,ogv,m4v,mp4,mov

	IE9:mp3,m4a | m4v,mp4
	*/

	var getMedia = function(item){
		var typeArr = {
			'mp4' : 'm4v',
			'm4v' : 'm4v',
			'mov' : 'm4v',
			'ogv' : 'ogv',
			'webm': 'webmv',
			'webmv':'webmv',
			'flv' : 'flv',
			'fla' : 'flv',
			'f4v' : 'flv',

			'f4a' : 'flv',
			'mp3' : 'mp3',
			'wav' : 'wav',
			'm4a' : 'mp3',
			'aac' : 'mp3',
			'ogg' : 'oga',
			'oga' : 'oga',
			'webma':'webma'
		};
		var ext = item['ext'];
		var key = typeArr[ext];
		var media = {
			'extType':key,
			'title':item['name'],
			'url':item['url'],
			'solution' : (ext=='flv' || ext == 'f4v') ? "flash" : "html,flash"
		}
		media[key] = item['url'];
		return media;
	}

	var playStart = function(player,media){
		if(!media) return;
		var $playerBox = player.parents('.jPlayer');
		var config = {
			solution:media.solution,
			//solution:'flash',
			swfPath: appStatic+"jPlayer/jquery.jplayer.swf"
		}
		
		$playerBox.attr('id',UUID());
		player.jPlayer("destroy");
		player.find(".jPlayer-container").children().remove();
		player.jPlayer(jPlayerConfigInit($playerBox,config));
		if(player.find('object').length > 0){
			$playerBox.addClass('flashPlayer');
		}else{
			$playerBox.removeClass('flashPlayer');
		}

		//delay start play;
		player.jPlayer("setMedia",media).jPlayer("play");;
		jPlayerBindControl($playerBox);
		setTimeout(function(){
			var name = $playerBox.parents('.dialog-simple').find('.aui-title-bar').attr('id');
			var dialog = $.dialog.list[name];
			if(dialog){
				dialog.title(media.title);
			}
		},100);
	}

	var play = function(list){
		var ext = list[0]['ext'];
		var playerType = getPlayerType(ext);
		var player = getPlayer(playerType);
		var media = getMedia(list[0]);
		if(!player){
			player = create(playerType);
			if(playerType == MUSIC){
				musicPlayer.init();
			}
		}
		if(playerType == MUSIC){
			media = musicPlayer.insert(player,list,ext);
		}
		playStart(player,media);
		try{
			$.dialog.list[playerType+'-dialog'].display(true);
		}catch(e){};
	}

	var musicPlayer = (function(){
		var playList  = [];
		var playCurrent = 0;
		var player = null;
		var loopType  = 'circle';//circle,rand

		var insert = function(thePlayer,list){
			player = thePlayer;
			var oldLength = playList.length;
			for (var i = 0; i < list.length; i++) {//插入后默认播放列表的最后一个
				var exists = false;
				var find  = 0;
				for (find = 0; find < playList.length; find++) {
					if(playList[find]['url'] == list[i]['url']){
						exists = true;
						break;
					}
				}
				
				// 已存在则不插入
				// 插入后默认播放列表的最后一个；最后一个已存在则不做处理
				if(exists){
					if(i == list.length - 1){
						if(playCurrent != find){
							playIndex(find);
						}
					}
					continue;
				}
				playList.push( getMedia(list[i]));
			}
			if(playList.length == oldLength){
				return false;//有重复对应处理
			}
			playCurrent = playList.length-1;
			updateView(true);
			return playList[playCurrent];
		}
		var playIndex = function(index){
			index = index <= 0 ? 0 : index;
			index = index >= playList.length-1 ? playList.length-1 : index;
			playCurrent = index;
			var media = playList[index];
			playStart(player,media);
			updateView(false);
		}
		var playAt = function(type){
			switch(loopType){
				case 'circle':
					if(type == 'next'){
						if(playCurrent < playList.length-1){
							playIndex(playCurrent+1);
						}else{
							playIndex(0);
						}
					}else{//prev
						if(playCurrent-1 < 0){
							playIndex(playList.length-1);
						}else{
							playIndex(playCurrent-1);
						}
					}
					break;
				case 'rand':playIndex(roundFromTo(0,playList.length)-1);break;
				case 'one':playIndex(playCurrent);break;
				default:break;
			}
		}
		var remove = function(index){
			playList.splice(index,1);
			playIndex(index);
			updateView(true);
		}
		var download = function(index){
			var media = playList[index];
			var url = media.url+'&download=1';
			kodApp.download(url);
		}
		var init = function(player){
			playCurrent = 0;
			playList = [];
			loopType = 'circle';
			var $playBox = $('.jPlayer-music');
			var arr = [
				{icon:"icon-retweet",loop:'circle'},
				{icon:"icon-random",loop:'rand'},
				{icon:"icon-refresh loop-one",loop:'one'},
			];
			$playBox.find('.change-loop').unbind('click').bind('click',function(){
				var index = parseInt($(this).attr('data-loop')) + 1;
				index = index < 0 ? 0 : index;
				index = index >= arr.length ? 0 : index;
				var cell = arr[index];
				$(this).attr('data-loop',index).find('i').attr('class',cell.icon);
				loopType = cell.loop;
			});
			$playBox.find('.play-backward').unbind('click').bind('click',function(){
				playAt('prev');
			});
			$playBox.find('.play-forward').unbind('click').bind('click',function(){
				playAt('next');
			});
			$playBox.find('.show-list').unbind('click').bind('click',function(e){
				$playBox.parents('.music-player-dialog').toggleClass('hide-play-list');
				stopPP(e);
			});
			$playBox.find('.play-list .item').die('click').live('click',function(e){
				var index = $(this).index();
				playIndex(index);
				stopPP(e);
			});

			$playBox.find('.play-list .remove').die('click').live('click',function(e){
				var $item = $(this).parents('.item');
				var index = $item.index();
				$item.remove();
				remove(index);
				stopPP(e);
				return false;
			});
			$playBox.find('.play-list .download').die('click').live('click',function(e){
				var index = $(this).parents('.item').index();
				download(index);
				stopPP(e);
				return false;
			});
		}
		var updateView = function(resetList){
			var $playBox = $(player).parents('.jPlayer');
			if(resetList){
				var html = '';
				$.each(playList,function(i,val){
					html += 
					'<li class="item">\
						<span class="name">'+val.title+'</span>\
						<div class="action-right">\
							<span class="download"><i class="icon-download-alt"></i></span>\
							<span class="remove"><i class="icon-remove"></i></span>\
						</div>\
					</li>';
				});
				$playBox.find('.play-list .content').html(html);
			}
			if(playList.length == 0 || !playList[playCurrent]){
				playCurrent = 0;
				$playBox.find('.item-title').html("&nbsp;  ");
				player.jPlayer("destroy");
				player.find(".jPlayer-container").children().remove();
				return;
			}
			$playBox.find('.item-title').html(playList[playCurrent].title);			
			$playBox.find('.item').removeClass('this');
			$playBox.find('.item:eq('+playCurrent+')').addClass('this');
			colorful($playBox.find('.player-bg'));
		}
		var colorful = function($dom){
			var from = randomColor();
			var to = randomColor();
			var rotate = '160deg';
			var css = 
			"background-image: -webkit-linear-gradient("+rotate+", "+from+", "+to+");\
			background-image: -moz-linear-gradient("+rotate+", "+from+", "+to+");\
			background-image: -o-linear-gradient("+rotate+", "+from+", "+to+");\
			background-image: -ms-linear-gradient("+rotate+", "+from+", "+to+");\
			background-image: linear-gradient("+rotate+", "+from+", "+to+");"
			$dom.attr('style',css);
		}
		var randomColor = function(r,g,b){
			return '#'+(Math.random()*0xffffff<<0).toString(16);
		}
		return {
			insert:insert,
			init:init
		};
	})();
	
	var readyPlay = function(list){
		if( !$.isArray(list) || list.length == 0){
			Tips.tips(LNG.error,false);
		}
		var playerType = getPlayerType(list[0]['ext']);
		if(playerType == MOVIE){
			require.async([
				appStatic+'jPlayer/kod.flat/template.js',
				appStatic+'jPlayer/jquery.jplayer.min.js',
				appStatic+'jPlayer/kod.flat/control.js',
				appStatic+'jPlayer/kod.flat/style.css'
				],function(){
				movieTemplate = jplayerTemplateMovie;
				play(list);
			});
		}else{
			require.async([
				appStatic+'jPlayer/kod.flat/template.js',
				appStatic+'jPlayer/jquery.jplayer.min.js',
				appStatic+'jPlayer/kod.flat/control.js',
				appStatic+'jPlayer/kod.flat/style.css'
				],function(a){
				musicTemplate = jplayerTemplateMusic;
				play(list);
			});
		}
	}
	
	//后台播放声音；
	var playSound = function(sound){//mp3
		var playerKey = 'x-play-sound';
		if($('.'+playerKey).length == 0){
			$('<div style="width:0px;height:0px;" class="'+playerKey+'"></div>').appendTo('body');
		}
		var $dom = $('.'+playerKey);
		require.async(appStatic+'jPlayer/jquery.jplayer.min.js',function(a){
			var config = {
				solution:'html',//'html,flash'
				swfPath: appStatic+'jPlayer/jquery.jplayer.swf',
				media:{title: "",mp3:sound},
				ready:function(){
					$dom.jPlayer("setMedia",config.media).jPlayer("play");
				}
			}
			$dom.jPlayer("destroy").children().remove();
			$dom.jPlayer(config);
		});
	}

	return {
		init:function(staticPath,staticDefault){
			appStatic = staticPath;
			appStaticDefault = staticDefault;
		},
		playSound:playSound,
		play:readyPlay
	};
});
