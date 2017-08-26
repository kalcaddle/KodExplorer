kodReady.push(function(){
	require.async([
		'{{pluginHost}}static/pie/pie.css',//ie8 css hack
		// 'https://cdn.bootcss.com/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js',
		// 'https://cdn.bootcss.com/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.css'
		],function(a,b){
		
		// $.mCustomScrollbar.defaults.scrollButtons.enable=true;
		// var scrollArr = [
		// 	//'.app-content .app-model',
		// 	// '#page-explorer .bodymain',
		// 	'#folder-list-tree',
		// 	'#page-editor .frame-main .frame-left'
		// ];
		// $(scrollArr.join(',')).mCustomScrollbar({theme:"minimal-dark"});
	});

	//关闭随机壁纸
	//$.addStyle('#random-wallpaper,.randomImage{display:none;}');


	//编辑器扩展
	kodApp.appSupportSet('aceEditor','vue,we,wpy');
	Hook.bind('edit.main.init',function(){
		Editor.fileModeSet('vue,we,wpy','html');
	});
	$.addStyle(
		".x-item-file.x-vue,.x-item-file.x-we,.x-item-file.x-wpy{\
			background-image:url('{{pluginHost}}static/file_icon/vue.png');\
		}");
});
