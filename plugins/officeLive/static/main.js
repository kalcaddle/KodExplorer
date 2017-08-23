kodReady.push(function(){
	kodApp.add({
		name:"officeLive",
		title:"{{LNG.officeLive.meta.name}}",
		icon:'{{pluginHost}}static/images/icon.png',
		ext:"{{config.fileExt}}",
		sort:"{{config.fileSort}}",
		callback:function(path,ext){
			var url = '{{pluginApi}}&path='+core.pathCommon(path);
			if('window' == "{{config.openWith}}"){
				window.open(url);
			}else{
				core.openDialog(url,core.icon(ext),htmlEncode(core.pathThis(path)));
			}
		}
	});
});
