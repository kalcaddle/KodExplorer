kodReady.push(function(){
	if( !$.supportCanvas() ){
		return;
	}
	kodApp.add({
		name:"webodfView",
		title:"Opendocument Viewer",
		ext:"{{config.fileExt}}",
		sort:"{{config.fileSort}}",
		icon:'x-item-file x-odt',
		callback:function(path,ext){
			var url = '{{pluginApi}}&path='+core.pathCommon(path)+'#locale='+G.lang;
			if('window' == "{{config.openWith}}"  && !core.isFileView() ){
				window.open(url);
			}else{
				core.openDialog(url,core.icon(ext),htmlEncode(core.pathThis(path)));
			}
		}
	});
});