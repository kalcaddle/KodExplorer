kodReady.push(function(){
	kodApp.add({
		name:"DPlayer",
		title:LNG['Plugin.default.DPlayer'],
		ext:"{{config.fileExt}}",
		sort:"{{config.fileSort}}",
		icon:'{{pluginHost}}static/images/icon.png',
		callback:function(path,ext){
			var music = ['mp3','wav','aac','m4a','oga','ogg','webma'];
			if(isWap() && G.ACT != 'file'){ //移动端，非视频文件分享页面用跳转方式打开
				return window.open(core.path2url(path));
			}
			var vedio = {
				url:core.path2url(path),
				name:urlDecode(core.pathThis(path)),
				path:path,
				ext:ext
			};
			var appStatic = "{{pluginHost}}static/";
    		var top = ShareData.frameTop();
    		top.require.async(appStatic+'page.js',function(app){
    		    app.play(appStatic,vedio);
    		});
		}
	});
	window.DplayerSubtitle = parseInt("{{config.subtitle}}");


	/**
	 * 临时修复文件夹右键新窗口打开异常问题；<=4.32
	 */
	var checkAuth = function(path){
		if (path == undefined) return false;
		if (path.indexOf('http') === 0 ) return true;
		if (!G.shareInfo &&
			!core.pathReadable(path)){
			Tips.tips(LNG.no_permission_read_all,false);
			core.playSound("error");
			return false;
		}
		return true;
	}
	kodApp.add({
		name:"browserOpen",
		title:LNG.open_ie,
		sort:-100,
		icon:"x-item-file x-html",
		callback:function(path,ext){
			var url = core.path2url(path);
			console.log(url,path,ext);
			if( path.substr(-1) == '/' && url.search("explorer/fileProxy&") !=-1 ){
				return Tips.tips(LNG.path_can_not_action,false);
			}
			if(!checkAuth(path)) return;			
			if(isWap()){
				window.location.href = url;
			}else{
				window.open(url);
			}
		}
	});
	core.path2url=function(beforePath,testHttp){
		if (beforePath.substr(0,4) == 'http') return beforePath;
		if(testHttp == undefined) testHttp = true;//尝试转换为http真实路径;只允许root用户
		var url,path = core.pathClear(beforePath);

		//user group
		if (G.isRoot && testHttp &&
			path.substring(0,G.webRoot.length) == G.webRoot){//服务器路径下
			if (path.substring(0,G.basicPath.length) == G.basicPath){//设置了服务器到子目录
				url = G.appRoot + core.pathUrlEncode(path.replace(G.basicPath,''));
			}else{
				url = G.webHost + core.pathUrlEncode(path.replace(G.webRoot,''));
			}
		}else{
			url = G.appHost+'explorer/fileProxy&accessToken='+G.accessToken+'&path=' +urlEncode(path);
			if (typeof(G.sharePage) != 'undefined') {
				url = G.appHost+'share/fileProxy&user='+G.user+'&sid='+G.sid+'&path=' +urlEncode(path);
			}
		}
		return url;
	}
});
