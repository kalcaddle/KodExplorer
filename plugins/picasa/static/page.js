define(function(require, exports) {
	var getImageArr = function(imagePath){
		var items = [];
		var index = 0;
		if(window.Config){
			if(Config.pageApp == 'editor'){
				var $folder = $(".curSelectedNode").parent().parent();
				var fileNum = 0;
				var zTree = ui.tree.zTree()
				$folder.find('li[treenode]').each(function(){
					var node = zTree.getNodeByTId($(this).attr('id'));
					if(!node) return;

					var thePath = node.path;
					var ext = core.pathExt(node.path);
					if(!kodApp.appSupportCheck('photoSwipe',ext)){
						return;
					}
					if(thePath == imagePath){
						index = fileNum;
					}
					fileNum ++;
					items.push([
						[core.path2url(thePath),core.path2url(thePath),thePath],
						core.pathThis(thePath),[0,0],''
					]);
				});
			}else{
				$('.file-continer .ico.picture').each(function(i){
					var thumb = $(this).find('img').attr('data-original');
					var thePath = hashDecode($(this).parents('.file').attr('data-path'));
					if(thePath == imagePath){
						index = i;
					}
					items.push([
						[thumb,core.path2url(thePath),thePath],
						core.pathThis(thePath),[0,0],''
					]);
				});
			}
		}
		if(items.length == 0){
			items = [[[core.path2url(imagePath),core.path2url(imagePath),imagePath],
					 core.pathThis(imagePath),[0,0],'']];
		}
		return {items:items,index:index};
	}

	//播放幻灯片时，删除图片.
	var removeImageRequest = function(path,callback){
		ui.pathOperate.remove([{type:"file",path:path}],function(result){
			if(!result || !result.code){
				return;
			}
			ui.fileLight.clear();
			ui.f5Callback(function() {
				callback();
			});
		})
	};
	var removeImage = function(){
		var index = parseInt($('#PV_Control #PV_Items .current').attr('number'));
		var path = myPicasa.arrItems[index][0][2];
		removeImageRequest(path,function(){
			if(myPicasa.arrItems.length <=1){
				return myPicasa.close();
			}
			myPicasa.arrItems.splice(index,1);
			if(index >= myPicasa.arrItems.length -1){
				index = myPicasa.arrItems.length -1
			}
			myPicasa.play(myPicasa.arrItems,index);
		});
	}
	var imageRotate = function(rotate){
		var index = parseInt($('#PV_Control #PV_Items .current').attr('number'));
		var path = myPicasa.arrItems[index][0][2];
		ui.pathOperate.imageRotate(path,rotate,function(){
			var imgSrc = function(img){
				var str = '&picture='+UUID();
				return img.indexOf('?') == -1 ? img+'?a=1'+str : img+str
			}
			var $img = $('[data-path='+pathHashEncode(path)+']').find('img');
			var imageSmall = imgSrc(myPicasa.arrItems[index][0][0]);
			var imgageBig = imgSrc(myPicasa.arrItems[index][0][1]);
			
			$("#PV_Items .current img").attr('src',imageSmall);
			$img.attr('src',imageSmall);
			$img.attr('data-original',imageSmall);
			myPicasa.resetImage(imgageBig,imageSmall);
		});
	}
	return function(imagePath,appStatic){
		if (imagePath.indexOf('http') == 0) {
			MaskView.image(core.path2url(imagePath));
			return;
		}
		require.async([
			appStatic+'picasa/style/style.css',
			appStatic+'picasa/picasa.js'
		],function(){
			if(!window.myPicasa){
				myPicasa = new Picasa();
				myPicasa.removeImage = removeImage;
				myPicasa.imageRotate = imageRotate;
			}
			var image = getImageArr(imagePath);
			myPicasa.play(image.items,image.index);
		});
	}	
});

