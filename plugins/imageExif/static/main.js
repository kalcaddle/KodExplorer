// fileHistoryPlugin
kodReady.push(function(){
	var menuOpt = {
		'image-exif':{
			name:LNG['imageExif.meta.name'],
			className:"image-exif",
			icon:" icon-info",
			callback:function(action,option){
				if(option.selector == '.menu-tree-file'){
					var param = ui.tree.makeParam();
				}else{
					var param = ui.path.makeParam();
				}
				var request = '{{pluginApi}}getExif&path='+urlEncode(param.path);
				console.log(param.path);

				$.ajax({
					url:request,
					dataType:'json',
					beforeSend: function(){
						Tips.loading(LNG.loading);
					},
					error:core.ajaxError,
					success:function(data){
						Tips.close(data);
						if(data.code){
							console.log(data.data);
						}
					}
				});
			}
		}
	}
	$.contextMenu.menuAdd(menuOpt,'.menu-file',false,'.info');
	$.contextMenu.menuAdd(menuOpt,'.menu-tree-file',false,'.info');

	//显示隐藏 [ 只在自己的目录；自己所在的群组目录文件有历史记录权限]
	Hook.bind('rightMenu.show.menu-file',function($menuAt,$theMenu){
		if($('.context-menu-active').hasClass('menu-tree-file') ){
			var param = ui.tree.makeParam();
		}else{
			var param = ui.path.makeParam();
		}
		var ext = core.pathExt(param.path);
		var hideClass = 'hidden';//'disabled' hideClass
		if (inArray(['jpg','jpeg','png','bmp'],ext)){
			$theMenu.find('.image-exif').removeClass(hideClass);
		}else{
			$theMenu.find('.image-exif').addClass(hideClass);
		}
	});
});