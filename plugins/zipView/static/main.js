kodReady.push(function(){
	var apiView = function(){
		var url = '{{pluginApi}}unzipList&accessToken='+G.accessToken
		//var url = 'explorer/unzipList&accessToken='+G.accessToken;
		if (typeof(G.sharePage) != 'undefined') {
			url = '{{pluginApi}}unzipList&user='+G.user+'&sid='+G.sid;
		}
		return url;
	}
	kodApp.add({
		name:"zipView",
		title:"{{LNG.Plugin.default.zipView}}",
		ext:"{{config.fileExt}}",
		sort:"{{config.fileSort}}",
		icon:"{{pluginHost}}static/images/icon.png",
		callback:function(path,ext){
			var appOption = {
				filePath:path,
				apiUnzip:G.appHost+"explorer/unzip",
				apiList:apiView()
			}
			require.async([
				'lib/ztree/ztree',
				'{{pluginHost}}static/zipView.js'
			],function(tree,zipView){
				new zipView(appOption);
			});
		}
	});
	require.async('{{pluginHost}}static/page.js');
});
