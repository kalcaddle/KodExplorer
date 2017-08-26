define(function(require, exports) {
	var currentFileUrl = '';
	var tplZipview = 
	'<div class="zip-view-content">\
		<div class="header">\
			<div class="bg"></div>\
			<div class="icon"><i class="x-item-file x-{{ext}}"></i></div>\
			<div class="name">{{name}}</div>\
			<div class="desc"></div>\
		</div>\
		<div class="zip-header-title">\
			<div class="item name"><span>{{LNG.name}}</span></div>\
			<div class="item size"><span>{{LNG.size}}</span></div>\
			<div class="item mtime"><span>{{LNG.modify_time}}</span></div>\
			<div class="clear"></div>\
		</div>\
		<div id="{{treeID}}"  class="ztree"></div>\
	</div>';

	//压缩文件打开，列表右键菜单	
	Hook.bind('rightMenu.show',function(selector,$menuAt,$theMenu){
		var disableClass = 'disabled';
		//界面绑定
		if(_.include([
			'menu-zip-list-folder',
			'menu-zip-list-file'
		],selector)){
			if(!core.pathCurrentWriteable()){
				$theMenu.find('.unzip-this').addClass(disableClass);
			}else{
				$theMenu.find('.unzip-this').removeClass(disableClass);
			}
		}		
	});

	return function(appOption){
		var zTree;
		var setting = {
			view: {
				showLine: false,
				selectedMulti: false,
				expandSpeed:"fast",
				dblClickExpand:false,// 双击 展开&折叠
				addDiyDom: function(treeId, treeNode) {
					var spaceWidth = 15;//相差宽度
					var switchObj = $("#" + treeNode.tId + "_switch"),
					icoObj = $("#" + treeNode.tId + "_ico");
					switchObj.remove();
					treeNode.iconSkin = treeNode.tree_icon;

					$("#" + treeNode.tId + "_span").addClass('name');
					var tree_icon = treeNode.tree_icon;
					if(treeNode.ext){
						tree_icon = treeNode.ext;
					}else if(!treeNode.tree_icon){
						tree_icon = treeNode.type;
					}
					icoObj.before(switchObj)
						.before('<span id="'+treeNode.tId +'_my_ico"  class="tree_icon button">'+core.iconSmall(tree_icon)+'</span>')
						.remove();

					if(treeNode.ext!=undefined){//如果是文件则用自定义图标
						icoObj.attr('class','')
						.addClass('file '+treeNode.ext).removeAttr('style');;
					}
					if (treeNode.level >= 1) {
						var spaceStr = "<span class='space' style='display: inline-block;width:"
						 + (spaceWidth * treeNode.level)+ "px'></span>";
						switchObj.before(spaceStr);
					}


					var info = '<span class="time">'+date(LNG.time_type,treeNode.mtime)+'</span>';
					info += '<span class="size">'+pathTools.fileSize(treeNode.size)+'</span>';
					info += '<span class="menu-item-parent icon-ellipsis-vertical"></span>';
					$("#" + treeNode.tId + "_span").after(info);

					switchObj.parent().addClass(treeNode.menuType);
				}
			},
			callback: {//事件处理回调函数
				onClick: function(event,treeId,treeNode){
					if($(event.target).hasClass('menu-item-parent')){
						return;
					}
					zTree.selectNode(treeNode);
					pathInfoNode(treeNode);
					if(treeNode && treeNode.type=='folder'){
						$("#"+treeNode.tId+'_switch').click();
					}
				},
				onCollapse: function(event,treeId,treeNode){
					resetOdd(treeId);					
				},
				onExpand: function(event,treeId,treeNode){
					resetOdd(treeId);
				},
				beforeRightClick:function(treeId, treeNode){
					if(!treeNode) return;
					pathInfoNode(treeNode);
					zTree.selectNode(treeNode);
				},
				onDblClick:function(event,treeId,treeNode){
					if($(event.target).hasClass('.menu-item-parent')){
						return;
					}
					if(treeNode && treeNode.type == 'file'){
						menuAction('open',zTree);
					}
				}
			}
		};

		var makeTree = function(theList){
			var clearCell = function(tree){
				for(var i=0;i<tree.length;i++) {
					if(tree[i] == undefined){
						delete(tree[i]);continue;
					}
					var item = tree[i];
					tree[i] = {
						name:core.pathThis(item.filename),
						filePath:item.filename,
						path:currentFileUrl+'&index='+item.index+"&name=/"+urlEncode(item.filename),
						isParent:!!(item.child),
						type:item.folder?'folder':'file',
						menuType:item['folder']?'menu-zip-list-folder':'menu-zip-list-file',
						ext:core.pathExt(item.filename),
						mtime:item.mtime,
						index:item.index,
						size:item.size,
						child:item.child
					}
					if(item['folder']){
						delete(tree[i]['ext']);
					}

					if(tree[i]['child']){
						tree[i]['children'] = tree[i]['child'];
						delete(tree[i]['child']);
						clearCell(tree[i]['children']);
					}else{
						delete(tree[i]['child']);
					}
				}
			}

			var items = {};
			for (var i = 0; i < theList.length; i++) {
				if( typeof(theList[i]['filename']) != 'string' && 
					theList[i]['stored_filename']){
					theList[i]['filename'] = theList[i]['stored_filename'];
				}
				if(typeof(theList[i]['filename']) != 'string'){
					continue;
				}
				theList[i]['filename'] = theList[i]['filename'].replace(/\\/g,'/');
				items[theList[i]['filename']] = theList[i];
			}
			
			
			//没有目录结构则补足.
			for (var key in items) {
				if(!items[key]['folder']){
					var path = core.pathFather(items[key]['filename']);
					while( (path != '' && path != '/') && 
							!items[path] &&
							!items[rtrim(path,'/')]
						){
						items[path] = {
							filename:path,
							folder:true,
							mitme:0,
							size:0,
							index:-1
						}
						path = core.pathFather(path);
					}
				}
			}

			var tree = [];
			for(var key in items){
				var cell = items[key];
				var parent_key = core.pathFather(cell['filename']);

				if(items[parent_key]) parent_key = core.pathFather(cell['filename']);
				if(items[rtrim(parent_key,'/')]) parent_key = rtrim(parent_key,'/');
				if (items[parent_key]){
					if(!items[parent_key]['child']){
						items[parent_key]['child'] = [];
					}
					items[parent_key]['child'].push(items[cell['filename']]);
				}else{
					var temp = items[cell['filename']];
					if(temp){
						tree.push(temp);
					}
				}
			}
			clearCell(tree);
			return tree;
		}

		var bindMenu = function(){
			$.contextMenu({
				selector:'.menu-zip-list-folder',
				className:'menu-zip-list-folder',
				zIndex:9999,
				callback: function(key, options) {menuAction(key);},
				items: {
					"unzip-this":{name:LNG.unzip_this,className:"unzip-this",icon:"external-link"},
					"unzip-to":{name:LNG.unzip_to,className:"unzip-to",icon:"external-link"},
					"sep1":"--------",
					"info":{name:LNG.info,className:"info",icon:"info",accesskey: "i"}
				}
			});
			$.contextMenu({
				selector:'.menu-zip-list-file',
				className:'menu-zip-list-file',
				zIndex:9999,
				callback: function(key, options) {menuAction(key);},
				items: {
					"open":{name:LNG.open,className:"open",icon:"external-link",accesskey: "o"},
					"open-with":{
						name:LNG.open_with,
						icon:"external-link",
						className:"open-with",
						accesskey: "a",
						items:{
							"open-with-first":{name:"",className:"hidden open-with-first"}
						}
					},
					"down":{name:LNG.download,className:"down",icon:"cloud-download",accesskey: "x"},
					"sep1":"--------",
					"unzip-this":{name:LNG.unzip_this,className:"unzip-this",icon:"external-link"},
					"unzip-to":{name:LNG.unzip_to,className:"unzip-to",icon:"external-link"},
					"sep2":"--------",
					"info":{name:LNG.info,className:"info",icon:"info",accesskey: "i"}
				}
			});

			$('.menu-zip-list-file .menu-item-parent,.menu-zip-list-folder .menu-item-parent')
				.die('click').live('click', function(e) {
				var $target = $(this);
				$(this).contextMenu({
					x:$target.offset().left + $target.width(),
					y:$target.offset().top
				});
			});
			bindFileOpen();
		};


		var bindFileOpen = function(){
			Hook.unbind('rightMenu.show.menu-zip-list-file');
			Hook.bind('rightMenu.show.menu-zip-list-file',function($menuAt,$theMenu){
				var $tree = $(".context-menu-active").parents('.ztree');
				if( $tree.length == 0) return;
				zTree = $.fn.zTree.getZTreeObj($tree.attr('id'));
				var treeNode = zTree.getSelectedNodes()[0];
				var ext = core.pathExt(treeNode.path);
				var hideClass = 'hidden';

				if(kodApp.getApp(ext)){
					var menu = kodApp.getAppMenu(ext);
					menu = $.objClone(menu);
					$.each(menu,function(){
						var that = this;
						this.callback = function(){
							menuAction('open-with',zTree,that.app);
						}
					});
					$theMenu.find('li.open-with.context-menu-submenu').removeClass(hideClass);
					$theMenu.find("ul.context-menu-list.open-with .context-menu-item").not('.open-with-first').remove();
					$.contextMenu.menuAdd(menu,'.menu-zip-list-file','.open-with-first');
				}else{
					$theMenu.find('li.open-with.context-menu-submenu').addClass(hideClass);
				}
			});
		}
		var menuAction = function(action, zTree, param){
			if(zTree == undefined){
				var $tree = $(".context-menu-active").parents('.ztree');
				if( $tree.length == 0) return;
				zTree = $.fn.zTree.getZTreeObj($tree.attr('id'));
			}
			var treeNode = zTree.getSelectedNodes()[0];
			switch(action){
				case 'open':zipFileOpen(zTree,treeNode);break;
				case 'open-with':zipFileOpen(zTree,treeNode,param);break;
				case 'down':zipFileDownload(zTree,treeNode);break;
				case 'unzip-this':zipFileUnzip(zTree,treeNode);break;
				case 'unzip-to':zipFileUnzipTo(zTree,treeNode);break;
				case 'info':pathInfo(zTree,treeNode);break;
				default:break;
			}
		}

		var folderSizeCell = {fileCount:0,folderCount:0,size:0};
		var folderSize = function(node){
			if(node.type == 'folder'){
				folderSizeCell.folderCount++;
				if(node.children){
					for (var i = 0; i < node.children.length; i++) {
						folderSize(node.children[i]);
					}
				}
			}else{
				folderSizeCell.fileCount++;
				folderSizeCell.size += parseInt(node.size);
			}
		}

		var zipFileDownload = function(tree,node){
			var filePath = tree.setting.filePath;
			var fileUrl  = tree.setting.fileUrl;
			var url = fileUrl+'&download=1&index='+node.index;
			kodApp.download(url);
		}
		var zipFileOpen = function(tree,node,app){
			var ext = node.ext;
			if( ext == 'zip'){//zip内的zip则不处理
				//ext = 'unknow';
			}
			//文件太大，提示解压后
			if(node.size >= 1024*1024*200){
				Tips.tips(LNG.zipview_file_big,'warning');
				ext = 'unknow';
			}
			kodApp.setLastOpenTarget($('#'+node.tId));
			kodApp.open(node.path,ext,app);
		}
		var zipFileUnzipTo = function(tree,node){
			core.api.pathSelect(
				{type:'folder',title:LNG.unzip_to},
				function(path){
					zipFileUnzip(tree,node,path)
				});
		}
		var zipFileUnzip = function(tree,node,unzipTo){
			var filePath = tree.setting.filePath;
			var fileUrl  = tree.setting.fileUrl;
			if(unzipTo == undefined){
				unzipTo = G.thisPath;//tree
				if(unzipTo == undefined){
					unzipTo = core.pathFather(filePath);
				}
			}
			$.ajax({
				url:appOption.apiUnzip,
				data:{
					path:filePath,
					pathTo:unzipTo,
					unzipPart:node.index
				},
				type:'POST',
				dataType:'json',
				beforeSend: function(){
					Tips.loading(LNG.unziping);
				},
				error:core.ajaxError,
				success:function(data){
					Tips.close(data);
					if(core.isApp('editor')){
						ui.tree.refreshPath(core.pathFather(filePath));
						return;
					}
					ui.f5(true,true,function(){
						var thePath = unzipTo+node.name;
						ui.path.setSelectByFilename(thePath);
					});
				}
			});
		}

		var pathInfoNode = function(node){
			var data = pathInfoData(node);
			var html = LNG.size+" "+data.sizeFriendly+' ('+data.size+' Byte)';
			if(node.type =='folder'){
				html = data.fileCount +LNG.file+','+data.folderCount +LNG.folder+', '+html
			}
			$('#'+node.tId).parents('.zip-view-content').find('.header .desc').html(html);
		}

		var pathInfoData = function(node){
			var data = {
				name:node.name,
				path:node.filename,
				size:node.size,
				sizeFriendly:pathTools.fileSize(node.size),
				mtime:date(LNG.time_type_info,node.mtime)
			}
			if(node.level == 0){
				data.path = data.name;
			}

			if(node.type == 'folder'){
				folderSizeCell = {fileCount:0,folderCount:0,size:0};
				folderSize(node);
				$.extend(data,folderSizeCell);
				data.sizeFriendly = pathTools.fileSize(data.size);
			}
			return data;
		}

		var pathInfo = function(zTree,node){
			var icoType = (node.type =='folder')?'folder':node.ext;
			var tplFile = (node.type =='folder')?tplPathInfo:tplFileInfo;	
			var render = template.compile(tplFile);
			var data = pathInfoData(node);
			data.LNG = LNG;

			var dialog = $.dialog({
				padding:5,
				ico:core.iconSmall(icoType),
				fixed: true,//不跟随页面滚动
				title:node.name,
				content:render(data),
				ok: true
			});
		}


		var initView = function(treeID,title,path){
			var render = template.compile(tplZipview);
			var html = render({
				LNG:LNG,
				treeID:treeID,
				name:title,
				ext:core.pathExt(path)
			});
			var dialog = $.dialog({
				className:'zip-view-dialog dialog-no-title menu-empty',
				id:'zip-view-path-'+md5(path),
				ico:core.icon(core.pathExt(path)),
				title:title,
				width:630,
				height:450,
				content:html,
				resize:true,
				padding:0,
				fixed:true
			});
			var offset = 15 * $('.zip-view-content').length;
			dialog.DOM.wrap.css({
				'left':"+="+offset+"px",
				'top' :"+="+offset+"px"
			});
		}

		var resetOdd = function(treeID){
			$("#"+treeID).find('ul:visible > li > a').each(function(index){
				$(this).removeClass('odd');
				if(index % 2 == 0){
					$(this).addClass('odd');
				}
			});
		}
		var treeDataSort = function(treeData,isRoot){
			var fileList = [],folderList=[];
			for (var i = 0; i < treeData.length; i++) {
				treeData[i].name = treeData[i].name;
				if (treeData[i].isParent && treeData[i].children) {
					treeData[i].children = treeDataSort(treeData[i].children);//递归
				}
				if (treeData[i].type=='folder') {
					folderList.push(treeData[i]);
				}else{
					fileList.push(treeData[i]);
				}
			}
			if( isRoot ){//根目录不排序
				return treeData;
			}
			folderList= folderList.sort(function (a, b) {
				var a = a['name'];
				var b = b['name'];
				return pathTools.strSort(a,b);
			});
			fileList= fileList.sort(function (a, b) {
				var a = a['name'];
				var b = b['name'];
				return pathTools.strSort(a,b);
			});
			return folderList.concat(fileList);
		};

		var initData = function(title,data,path){
			var treeData = makeTree(data);
			var treeID   = 'folder-list-zip-'+UUID();
			treeData = treeDataSort(treeData);
			initView(treeID,title,path);
			Hook.trigger('Plugin.zipView.init');
			bindMenu();
			treeData = {//根目录
				name:title,
				ext:core.pathExt(path),
				mtime:'',
				isParent:true,
				open:true,
				children:treeData,
				type:'folder',
				path:'',
				index:'-1',
				menuType:'menu-zip-list-folder'
			}
			$.fn.zTree.init($("#"+treeID),setting,treeData);
			zTree = $.fn.zTree.getZTreeObj(treeID);
			resetOdd(treeID);
			pathInfoNode(zTree.getNodeByParam("index",'-1',null));
		}

		var init = function(path){
			var $dlgItem = $('.zip_view_'+md5(path));
			if($dlgItem.length > 0 ){ //已存在处理
				$dlgItem.shake(3,20,80);
				return;
			}
			var fileUrl = appOption.apiList+'&path='+urlEncode(path);
			currentFileUrl = fileUrl;
			if (typeof(G.sharePage) != 'undefined' && G.sid) {
				kodApp.openUnknow(path);
				return;
			}
			$.ajax({
				url:fileUrl,
				dataType:'json',
				beforeSend: function(){
					Tips.loading(LNG.loading);
				},
				error:core.ajaxError,
				success:function(data){
					Tips.close(data);
					if(data.code){
						var name = urlDecode(core.pathThis(path));
						initData(name,data.data,path);
						zTree.setting.filePath = path;
						zTree.setting.fileUrl  = fileUrl;
					}else{//预览失败
						kodApp.openUnknow(path,data.data);
					}
				}
			});
		}
		init(appOption.filePath);
	}
});

