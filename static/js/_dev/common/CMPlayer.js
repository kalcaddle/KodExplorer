define(function(require, exports) {
	var _skin = {
		ting:{path:'music/ting',width:410,height:530},
		beveled:{path:'music/beveled',width:350,height:200},
		kuwo:{path:'music/kuwo',width:480,height:200},
		manila:{path:'music/manila',width:320,height:400},
		mp3player:{path:'music/mp3player',width:320,height:410},
		qqmusic:{path:'music/qqmusic',width:300,height:400},
		somusic:{path:'music/somusic',width:420,height:137},
		xdj:{path:'music/xdj',width:595,height:235},

		//---适合视频播放
		webplayer:{path:'movie/webplayer',width:600,height:400},
		qqplayer:{path:'movie/qqplayer',width:600,height:400},
		tvlive:{path:'movie/tvlive',width:600,height:400},
		youtube:{path:'movie/youtube',width:600,height:400},
		vplayer:{path:'movie/vplayer',width:600,height:400}
	};

	var _getPlayer = function(type){
		if (type =='music' ) return 'music_player';
		if(type == undefined) type = 'mp3';
		if (inArray(core.filetype['music'],type)) {
			return 'music_player';
		}else {
			return 'movie_player';
		}
	};

	// 创建播放器；动态获取皮肤以及对应大小尺寸
	var _create = function(player){
		var playerSkin,playerTitle,resize,ico;	
		if (player == 'music_player') {
			ico=core.ico('mp3');
			playerSkin = _skin[G.musictheme];
			playerTitle= 'music player';
			resize = false;
		}else {
			ico=core.ico('flv');
			playerSkin = _skin[G.movietheme];
			playerTitle= 'movie player';
			resize = true;
		}
		var html = core.createFlash(G.static_path+'js/lib/cmp4/cmp.swf',
			'context_menu=2&auto_play=1&play_mode=1&skin=skins/'+playerSkin.path+'.zip',player);
		var playerDialog = {
			id:player+'_dialog',
			simple:true,
			ico:ico,
			title:playerTitle,
			width:playerSkin.width,
			height:playerSkin.height,
			content:html,
			resize:resize,
			padding:0,
			fixed:true,
			close:function(){
				var cmpo = _get(player);
				if (cmpo && cmpo.sendEvent) {
					cmpo.sendEvent('view_stop');
				}
			}
		}
		if (window.top.CMP){
			art.dialog.through(playerDialog);
		}else{
			$.dialog(playerDialog);
		}
	};
	// 文件数组创建播放器列表
	var _makeList = function(fileList){
		var play_url,i,xml='';
		for (i = fileList.length - 1; i >= 0; i--) {
			var path,name;
			if (fileList[i].search('fileProxy') == -1) {
				path = urlEncode(fileList[i]);
				name = core.pathThis(fileList[i]);
			}else{//非服务器路径下文件  或者网络文件
				path = fileList[i];
				name = core.pathThis(urlDecode(path));
			}
			path = path.replace(/%2F/g,'/');
			path = path.replace(/%3F/g,'?');
			path = path.replace(/%26/g,'&');
			path = path.replace(/%3A/g,':');
			path = path.replace(/%3D/g,'=');
			xml +='<list><m type="" src="'+path+'" label="'+name+'"/></list>';
		};
		return xml;
	};
	//获取播放器
	var _get = function(player){
		if (window.top.CMP) {
			return window.top.CMP.get(player);
		}else{
			return CMP.get(player);
		}		
	};
	var _insert = function(fileList,player){
		var new_list = _makeList(fileList);
		var cmpo = _get(player);
		if (cmpo) {
			cmpo.config('play_mode','normal');//写入配置,播放模式改为自动跳到next
			var old_length = cmpo.list().length;
			cmpo.list_xml(new_list,true);
			cmpo.sendEvent('view_play',old_length+1);
		}
	};

	return {
		changeTheme:function (key,value) {
			var player,playerSkin,cmpo;
			if (key =='music') {
				G.musictheme = value;
				player = 'music_player';
			}else if(key == 'movie'){
				G.movietheme = value;
				player = 'movie_player';
			}

			//如果存在播放器，则实时改变皮肤。
			cmpo = _get(player);
			if (cmpo){
				playerSkin = _skin[value];
				window.top.art.dialog.list[player+'_dialog'].size(playerSkin.width,playerSkin.height);
				cmpo.sendEvent("skin_load",'skins/'+playerSkin.path+'.zip');
			}
		},
		play:function(fileList,type){
			var player = _getPlayer(type);
			var cmpo = _get(player);
			if (!cmpo) {
				_create(player);
				setTimeout(function(){
					_insert(fileList,player);
				},1000);
			}else{
				_insert(fileList,player);
				window.top.art.dialog.list[player+'_dialog'].display(true);
			}		
		}
	};
});