kodReady.push(function(){
	if( !$.supportCanvas() ){
		return;
	}
	kodApp.add({
		name:"photoSwipe",
		title:"photoSwipe Image",
		ext:"{{config.fileExt}}",
		sort:"{{config.fileSort}}",
		icon:"x-item-file x-jpg",
		callback:function(imagePath,ext){
			var appStatic = "{{pluginHost}}static/";
			var appStaticDefault = "{{pluginHostDefault}}static/";
			require.async(appStatic+'page.js?ver='+G.version,function(app){
				app(imagePath,appStatic,appStaticDefault)
			});
		}
	});
	if(isWap()){
		$.addStyle(".pswp--supports-fs .pswp__button--fs{display:none !important;}")
	}
});