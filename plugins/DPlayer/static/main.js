kodReady.push(function(){
	kodApp.add({
		name:"DPlayer",
		title:LNG['Plugin.default.DPlayer'],
		ext:"{{config.fileExt}}",
		sort:"{{config.fileSort}}",
		icon:'{{pluginHost}}static/images/icon.png',
		callback:function(path,ext){
			var music = ['mp3','wav','aac','m4a','oga','ogg','webma'];
			if(isWap()){
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
});
