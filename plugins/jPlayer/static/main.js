kodReady.push(function(){
	var playerSupport = function(){
		var support = {
			wap:{//移动端
				music:['mp3','m4a','aac'],
				movie:['mp4','m4v','mov']
			},			
			ie:{
				music:['mp3','m4a','aac'],
				movie:['mp4','m4v','mov' ,  'flv','f4v']
			},
			chrome:{//default chrome,firefox,edge
				music:['mp3','wav','aac',	'm4a','oga','ogg','webma'],
				movie:['mp4','m4v','mov',	'f4v','flv','ogv','webm','webmv']
			}
			//safari 已经禁用了flash
		};
		var res = support.chrome;
		if(isWap()){
			res = support.wap;
		}else if(!!window.ActiveXObject || "ActiveXObject" in window){
			res = support.ie;
		}
		return res.music.join(',') + ',' + res.movie.join(',');
	}
	//'mp3,wav,m4a,aac,oga,ogg,webma,mp4,m4v,flv,mov,f4v,ogv,webm,webmv'

	kodApp.add({
		name:"jPlayer",
		title:LNG['Plugin.default.jPlayer'],
		ext:playerSupport(),
		//ext:"{{config.fileExt}}",
		sort:"{{config.fileSort}}",
		icon:'{{pluginHost}}/static/images/icon.png',
		callback:function(path,ext){
			var list = [{
				url:core.path2url(path),
				name:urlDecode(core.pathThis(path)),//zip内文件播放
				ext:ext
			}];
			loadMyPlayer(function(player){
				player.play(list);
			});
		}
	});


	var myPlayer;
	var loadMyPlayer = function(callback){
		var appStatic = "{{pluginHost}}static/";
		var appStaticDefault = "{{pluginHostDefault}}static/";
		if(myPlayer){
			callback(myPlayer);
		}else{
			var top = ShareData.frameTop();
			top.require.async(appStatic+'page.js',function(app){
				if(!myPlayer){
					myPlayer = app;
					myPlayer.init(appStatic,appStaticDefault);
				}
				callback(myPlayer);
			});
		}
	};
	//音效播放绑定
	Hook.bind('playSound',function(url){
		loadMyPlayer(function(player){
			player.playSound(url);
		});
	});
	

	//多选含有音乐右键菜单
	var menuOpt = {
		'play-media':{
			name:LNG.add_to_play,
			className:"play-media hidden",
			icon:"x-item-file x-mp3",
			accesskey: "p",
			callback:function(action,option){
				if (ui.fileLight.fileListSelect().length <1) return;
				var list = [];//选中单个&多个都可以播放
				ui.fileLight.fileListSelect().each(function(index){
					var pathtype = ui.fileLight.type($(this));
					if ( kodApp.appSupportCheck('jwplayer',pathtype) ) {
						var path = ui.fileLight.path($(this));
						var url = core.path2url(path,false);
						list.push({
							url:url,
							name:core.pathThis(path),
							ext:pathtype
						});
					}
				});
				loadMyPlayer(function(player){
					player.play(list);
				});
			}
		}
	}
	$.contextMenu.menuAdd(menuOpt,'.menu-more',false,'.clone');


	//多选含有音乐检测；添加到音乐列表
	Hook.bind('rightMenu.show.menu-more',function($menuAt,$theMenu){
		var needMenu  = 0;
		var hideClass = 'hidden';
		ui.fileLight.fileListSelect().each(function(){
			var ext = core.pathExt(ui.fileLight.name($(this)));
			if ( kodApp.appSupportCheck('jPlayer',ext) ){
				needMenu +=1;
			}
		});
		if(needMenu == 0){
			$theMenu.find('.play-media').addClass(hideClass);
		}else{
			$theMenu.find('.play-media').removeClass(hideClass);
		}
	});
});
