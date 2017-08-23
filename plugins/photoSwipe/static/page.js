define(function(require, exports) {
	var getImageArr = function(imagePath){
		var items = [];
		var index = -1;
		var width = 0,height = 0;
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
					items.push({
						src:core.path2url(thePath),
						msrc:core.path2url(thePath),
						title:urlDecode(core.pathThis(thePath)),
						w:width,h:height
					});
				});
			}else{
				$('.file-continer .ico.picture').each(function(i){
					var $image = $(this).find('img');
					var thePath = hashDecode($(this).parents('.file').attr('data-path'));
					if(thePath == imagePath){
						index = i;
					}
					items.push({
						src:core.path2url(thePath),
						msrc:$image.attr('data-original'),
						title:urlDecode(core.pathThis(thePath)),
						w:width,h:height
					});
				});
			}
		}
		if(items.length == 0 || index == -1){
			items = [{
				src:core.path2url(imagePath),
				msrc:core.path2url(imagePath),
				title:urlDecode(core.pathThis(imagePath)),
				w:width,h:height
			}];
		}
		return {items:items,index:index};
	}

	var options = {
		history: false,
		focus: true,
		index: 0,
		bgOpacity:0.8,
		maxSpreadZoom:5,
		closeOnScroll:false,
		shareEl: false,

		showHideOpacity:false,
		showAnimationDuration: 300,
		hideAnimationDuration: 300,
		getThumbBoundsFn: function(index) {
			// 自动获取图片大小后;不支持打开关闭渐变动画了
			var thumbnail = $('.ico.picture')[index];
			if(!thumbnail || $(thumbnail).find('img').length == 0){//目录切换后没有原图
				var result = {x:$(window).width()/2,y:$(window).height()/2,w:1,h:1};
				return result;
			}
			thumbnail = $(thumbnail).find('img').get(0);
			var pageYScroll = window.pageYOffset || document.documentElement.scrollTop; 
			var rect = thumbnail.getBoundingClientRect();
			var result = {x:rect.left,y:rect.top + pageYScroll,w:rect.width,h:rect.height};
			return result;
		}
	};

	//http://dimsemenov.com/plugins/royal-slider/gallery/
	//http://photoswipe.com/documentation/faq.html
	return function(imagePath,appStatic,appStaticDefault){
		require.async([
			appStaticDefault+'PhotoSwipe/photoSwipe.html',
			appStatic+'PhotoSwipe/photoswipe.min',
			appStatic+'PhotoSwipe/photoswipe-ui-default.min',
			appStatic+'PhotoSwipe/photoswipe.css',
			appStatic+'PhotoSwipe/default-skin/default-skin.css',
		],function(photoSwipeTpl){
			if($('.pswp_content').length == 0){
				$(photoSwipeTpl).appendTo('body');
				$('.pswp__caption__center').css({"text-align":"center"});
			}

			var image = getImageArr(imagePath);
			options.index = image.index;
			var gallery = new PhotoSwipe($('.pswp').get(0),PhotoSwipeUI_Default,image.items,options);
			gallery.loadFinished = false;
			gallery.listen('gettingData', function(index, item) {
				if (item.w < 1 || item.h < 1) {
					var img = new Image(); 
					img.onload = function() {
						item.w = this.width;
						item.h = this.height;
						gallery.updateSize(true);
					}
					img.src = item.src;
				}

				//打开图片，加载动画起始位置
				if(!gallery.loadFinished){
					var rect = options.getThumbBoundsFn(index);
					item.w = rect.w * 25;
					item.h = rect.h * 25;
					gallery.loadFinished = true;
				}
			});
			gallery.init();
		});
	}	
});




