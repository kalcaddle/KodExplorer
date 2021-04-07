kodReady.push(function(){
	var apiView = function(){
		var url = '{{pluginApi}}unzipList&accessToken='+G.accessToken
		if (typeof(G.sid) != 'undefined') {
			url = '{{pluginApi}}unzipList&user='+G.user+'&sid='+G.sid;
		}
		return url;
	}

	//测试 替换分享链接地址；
	// Hook.bind('explorer.path.share.uiInitStart',function(){
	// 	G.appHostTemp = G.appHost;
	// 	G.appHost = "http://test.com/";
	// 	console.log(G.appHost);
	// });
	// Hook.bind('explorer.path.share.uiInit',function(){
	// 	G.appHost = G.appHostTemp;
	// });


	kodApp.add({
		name:"zipView",
		title:"{{LNG.Plugin.default.zipView}}",
		ext:"{{config.fileExt}}",
		sort:"{{config.fileSort}}",
		icon:"{{pluginHost}}static/images/icon.png",
		callback:function(path,ext){
			//分享内容暂不支持查看内容
			if (typeof(G.sharePage) != 'undefined' && G.sid) {
				kodApp.openUnknow(path);
				return;
			}
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