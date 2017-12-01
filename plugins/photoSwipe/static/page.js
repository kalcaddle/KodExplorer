define(function(require, exports) {
	var imageUrl = function(path){
	    if(path.substr(0,4) == 'http'){
			return path;
		}
		var imageThumb = G.appHost+'explorer/image';
		if(G.sid){
			imageThumb = G.appHost+'share/image&user='+G.user+'&sid='+G.sid;
		}
		imageThumb += '&path='+urlEncode(path)+'&thumbWidth=1200';
		return imageThumb;
	}

	var itemsArr = [];
	var getImageArr = function(imagePath){
		itemsArr = [];
		var index = -1;
		var itemsPush = function(path,msrc,$dom){
		    if($dom && $dom.attr('data-src')){
				path = $dom.attr('data-src');
				msrc = $dom.attr('data-original');
			}
			var width = 0,height = 0;
			var link  = imageUrl(path);
			if(!msrc){
				msrc = link;
			}
			itemsArr.push({
				src:link,
				msrc:msrc,
				title:core.pathThis(urlDecode(path)),
				w:width,h:height,
				$dom:$dom?$dom:false
			});
		}

		//打开时最后的target对象dom [文件列表;搜索列表;树目录[编辑器压缩文件预览]]
		var $lastTarget = kodApp.getLastOpenTarget();
		//console.log('test',$lastTarget);
		if(!$lastTarget || _.get($lastTarget,'length') == 0){
		}else if($lastTarget.hasClass('file-box')){
			var $continer = $lastTarget.parents('.file-continer');
			$continer.find('.ico.picture').each(function(i){
				var $image = $(this).find('img');
				var thePath = hashDecode($(this).parents('.file').attr('data-path'));
				if(thePath == imagePath){
					index = i;
				}
				itemsPush(thePath,$image.attr('data-original'),$image);
			});
		}else if($lastTarget.parents('.search-result').exists()){//搜索列表
			var $continer = $lastTarget.parents('.search-result');
			$continer.find('.file-item').each(function(i){
				var thePath = hashDecode($(this).attr('data-path'));
				if($(this).attr('data-src')){
					thePath = $(this).attr('data-src');
				}
				var ext = core.pathExt(thePath);
				if(!kodApp.appSupportCheck('photoSwipe',ext)){
					return;
				}
				if(thePath == imagePath){
					index = i;
				}
				itemsPush(thePath,false,$(this).find('.file-icon'));
			});
		}else if($lastTarget.parents('.ztree').exists()){ //树目录:编辑器或压缩文件内打开
			var id = $lastTarget.parents('.ztree').attr('id');
			var zTree = $.fn.zTree.getZTreeObj(id);
			var fileNum = 0;
			$lastTarget.parent().find('li[treenode]').each(function(){
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
				itemsPush(thePath,false,$(this).find('.tree_icon'));
			});
		}
		if(itemsArr.length == 0 || index == -1){
		    itemsArr = [];
		    itemsPush(imagePath);
		    index = 0;
		}
		return {items:itemsArr,index:index};
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
			var item = itemsArr[index];
			if(!item || !item.$dom || item.$dom.length == 0){//目录切换后没有原图
				return {x:$(window).width()/2,y:$(window).height()/2,w:1,h:1};
			}
			var pageYScroll = window.pageYOffset || document.documentElement.scrollTop; 
			var rect = $(item.$dom).get(0).getBoundingClientRect();
			return {x:rect.left,y:rect.top + pageYScroll,w:rect.width,h:rect.height};
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
			if($('.pswp').hasClass('pswp--open')){//已经打开
				return;
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




