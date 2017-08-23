kodReady.push(function(){
	kodApp.add({
		name:"yzOffice",
		title:"{{LNG.yzOffice.meta.name}}",
		ext:"{{config.fileExt}}",
		sort:"{{config.fileSort}}",
		icon:'{{pluginHost}}static/images/icon.png',
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

