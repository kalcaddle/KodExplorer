kodReady.push(function(){
	kodApp.add({
		name:"photoSwipe",
		title:"photoSwipe Image",
		ext:"{{config.fileExt}}",
		sort:"{{config.fileSort}}",
		icon:"x-item-file x-jpg",
		callback:function(imagePath,ext){
			var appStatic = "{{pluginHost}}static/";
			var appStaticDefault = "{{pluginHostDefault}}static/";
			require.async(appStatic+'page.js',function(app){
				app(imagePath,appStatic,appStaticDefault)
			});
		}
	});
});