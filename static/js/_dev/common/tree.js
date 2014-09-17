define(function(require, exports) {
	var pathOperate  = require('./pathOperate');
	var pathOpen     = require('./pathOpen');
	var successCallback;
	var isUpdateRefresh = false;//上传连续更新树目录队列方式。没有处理完不做反应，处理完后sleep 2s;
	ui.pathOpen = pathOpen;
	var zTree;

	// 目录树操作
	var init=function(){
		$.ajax({
			url: Config.treeAjaxURL+"&type=init",
			dataType:'json',
			error:function(){
				$('#folderList').html('<div style="text-align:center;">'+LNG.system_error+'</div>');
			},
			success:function(data){
				if (!data.code){
					$('#folderList').html('<div style="text-align:center;">'+LNG.system_error+'</div>');
					return;
				} 
				var tree_json = data.data;
				$.fn.zTree.init($("#folderList"), setting,tree_json);
				zTree = $.fn.zTree.getZTreeObj("folderList");
			}
		});
		$('.ztree .switch').die('mouseenter').live('mouseenter',function(){
			$(this).addClass('switch_hover');
		}).die('mouseleave').live('mouseleave',function(){
			$(this).removeClass('switch_hover');
		});
		if (Config.pageApp == 'editor') {
			Mousetrap.bind('up',function(e) {
				keyAction(e,'up');		    
			}).bind('down',function(e) {
				keyAction(e,'down');
			}).bind('left',function(e) {
				keyAction(e,'left');
			}).bind('right',function(e) {
				keyAction(e,'right');
			});

			Mousetrap.bind('enter',function(e) {
				tree.open();
			}).bind(['del','command+backspace'],function(e) {
				tree.remove();
			}).bind('f2',function(e) {
				stopPP(e);
				tree.rname();
			}).bind(['ctrl+f','command+f'],function(e) {
				stopPP(e);
				tree.search();
			}).bind(['ctrl+c','command+c'],function(e) {
				tree.copy();
			}).bind(['ctrl+x','command+x'],function(e) {
				tree.cute();
			}).bind(['ctrl+v','command+v'],function(e) {
				tree.past();
			}).bind('alt+m',function(e) {
				tree.create('folder');
			}).bind('alt+n',function(e) {
				tree.create('file');
			});
		}
	};
	var keyAction = function(e,action){
		stopPP(e);
		var treeNode = zTree.getSelectedNodes()[0];
		if (!treeNode) return;			
		switch(action){
			case 'up':
				var node = treeNode.getPreNode();
				if (!node) {
					node = treeNode.getParentNode();
				}else if(node.open && node.children.length>0) {
					while(node.open && node.children && node.children.length>=1){
						node = node.children[node.children.length-1];
					}
					//if (node.getParentNode().tId == treeNode.tId) node=treeNode;
				}
				zTree.selectNode(node);
				break;
			case 'down':
				if (treeNode.open && treeNode.children.length>=1){
					node = treeNode.children[0];
				}else{
					var tempNode = treeNode,
						node = tempNode.getNextNode()||tempNode.getParentNode().getNextNode();
					try{
						while(!node){
							tempNode = tempNode.getParentNode();
							node = tempNode.getNextNode()||tempNode.getParentNode().getNextNode();
						}							
					}catch(e){}
				}
				zTree.selectNode(node);
				break;
			case 'left':
				if (!treeNode.isParent) {
					zTree.selectNode(treeNode.getParentNode());
				}else{
					if (treeNode.open) {
						zTree.expandNode(treeNode,false);
					}else{
						zTree.selectNode(treeNode.getParentNode());
					}						
				}
				break;
			case 'right':
				if (treeNode.open){
					zTree.selectNode(treeNode.children[0]);	
				}else{
					zTree.expandNode(treeNode,true);
				}					
				break;
			default:break;
		}
	};

	var setting={
		async: {
			enable: true,
			dataType: "json",
			url:Config.treeAjaxURL,//直接上次拿到的json变量。
			autoParam:["ajax_name=name","ajax_path=path","this_path"],//前面是value 后面是key
			dataFilter: function(treeId,parentNode,responseData){
				if (!responseData.code) return null;
				return responseData.data;
			}
		},
		edit: {
			enable: true,
			showRemoveBtn: false,
			showRenameBtn: false,
			drag:{
				isCopy:false,//暂时屏蔽拖拽方式移动
				isMove:false
				// 	isCopy:true,
				// 	isMove:true,
				// 	prev:false,
				// 	inner:true,
				// 	next:false
			}
		},
		view: {
			showLine: false,
			selectedMulti: false,
			dblClickExpand: false,
			// dblClickExpand: function(treeId, treeNode) {
			// 	return treeNode.level >= 0;
			// },// 双击 展开&折叠
			addDiyDom: function(treeId, treeNode) {
				var spaceWidth = Global.treeSpaceWide;
				var switchObj = $("#" + treeNode.tId + "_switch"),
				icoObj = $("#" + treeNode.tId + "_ico");
				switchObj.remove();
				icoObj.before(switchObj);
				if(treeNode.type=='file'){//如果是文件则用自定义图标
					icoObj.removeClass('button ico_docu')
					.addClass('file '+treeNode.ext)
				}
				if(treeNode.ext=='oexe'){//如果是文件则用自定义图标
					icoObj.removeClass('button ico_docu')
					.addClass('file oexe')
					.removeAttr('style');;
				}				
				if (treeNode.level >= 1) {
					var spaceStr = "<span class='space' style='display: inline-block;width:"
					 + (spaceWidth * treeNode.level)+ "px'></span>";
					switchObj.before(spaceStr);
				}

				//配置对应右键菜单
				var selector = '';
				if (Config.pageApp == 'explorer') {
					if (treeNode.ext == '__fav__') selector ='menuTreeFav';
					if (treeNode.ext == '__root__') selector ='menuTreeRoot';
					if (treeNode.type == 'folder') selector ='menuTreeFolder';
				}else if (Config.pageApp == 'editor'){//对应收藏夹  文件&文件夹
					if (treeNode.ext == '__fav__') selector ='menuTreeFav';
					if (treeNode.ext == '__root__') selector ='menuTreeRoot';
					if (treeNode.type == 'file') selector ='menuTreeFile'; 
					if (treeNode.type == 'folder') selector ='menuTreeFolder';
					if (treeNode.ext == 'oexe') selector ='menuApp'; 
				}

				var title = LNG.name+':'+treeNode.name+"\n"+LNG.size+':'+treeNode.size_friendly+"\n"
				+LNG.modify_time+':'+treeNode.mtime;
				if (treeNode.type != 'file') {
					title = treeNode.name;
				}
				switchObj.parent().addClass(selector).attr('title',title);
			}
		},
		callback: {//事件处理回调函数
			onClick: function(event,treeId,treeNode){
				zTree.selectNode(treeNode);
				zTree.expandNode(treeNode);
				if(treeNode.type=='folder' && Config.pageApp=='editor') return;
				if (treeNode.level == 0) {
					if (Config.pageApp=='explorer' && treeNode.ext != '__fav__'){
						ui.path.list(treeNode.this_path+'/');//更新文件列表
					}
					return false;
				}

				if (Config.pageApp=='editor'){
					ui.tree.openEditor();//编辑器优先打开文件
				}else if(Config.pageApp=='explorer'){
					ui.tree.open();
				}
			},
			beforeRightClick:function(treeId, treeNode){			
				zTree.selectNode(treeNode);
			},
			beforeAsync:function(treeId, treeNode){
				treeNode.ajax_name= urlEncode(treeNode.name);
				treeNode.ajax_path= urlEncode(treeNode.path);
			},
			onAsyncSuccess:function(event, treeId, treeNode, msg){//更新成功后调用
				if (msg.data.length == 0){
					zTree.removeChildNodes(treeNode);
					return;
				}
				if (typeof(successCallback) == 'function'){
					successCallback();
					successCallback = undefined;
				}
			},
			//新建文件夹、文件、重命名后回调（input blur时调用）
			onRename:function(event, treeId,treeNode){
				var parent = treeNode.getParentNode();
				//已存在检测
				if(zTree.getNodesByParam('name',treeNode.name,parent).length>1){
					core.tips.tips(LNG.name_isexists,false);
					zTree.removeNode(treeNode);
					return;
				}

				if (treeNode.create){//新建
					var path = treeNode.path+'/'+treeNode.name;				
					if (treeNode.type=='folder') {
						pathOperate.newFolder(path,function(data){
							if (!data.code) return;
							refresh(parent);
							successCallback = function(){
								var sel = zTree.getNodesByParam('name',treeNode.name,parent)[0];
								zTree.selectNode(sel);
								f5_refresh();
							}
						});						
					}else{//新建文件
						pathOperate.newFile(path,function(data){
							if (!data.code) return;
							refresh(parent);
							successCallback = function(){
								var sel = zTree.getNodesByParam('name',treeNode.name,parent)[0];
								zTree.selectNode(sel);
								f5_refresh();
							}
						});	
					}
				}else{//重命名
					var from = treeNode.path + treeNode.beforeName;
					var to = treeNode.path + treeNode.name;
					pathOperate.rname(from,to,function(data){
						if (!data.code) return;
						refresh(parent);
						successCallback = function(){
							var sel = zTree.getNodesByParam('name',treeNode.name,parent)[0];
							zTree.selectNode(sel);
							f5_refresh();
						}
					});
				}
			}
			// beforeDrag: function(treeId, treeNodes){
			// 	for (var i=0,l=treeNodes.length; i<l; i++) {
			// 		if (treeNodes[i].drag === false) return false;
			// 	}
			// 	return true;
			// },
			// beforeDrop: function(treeId, treeNodes, targetNode, moveType){
			// 	return targetNode ? targetNode.drop !== false : true;
			// },
			// onDrop:function(event, treeId, treeNodes, targetNode, moveType){
			// 	var path = '',path_to='';
			// 	var treeNode = treeNodes[0];
			// 	if (!treeNode.father && !treeNode.this_path) return;

			// 	path = treeNode.father+urlEncode(treeNode.name);
			// 	path_to = targetNode.father+urlEncode(targetNode.name);
			// 	pathOperate.cuteDrag([{path:path,type:treeNode.type}],path_to,function(){
			// 		refresh(treeNode);
			// 	});
			// }
		}
	};

	//配置请求数据  通用
	var _param = function(makeArray){
		if (!zTree) return;		
		var treeNode = zTree.getSelectedNodes()[0],
			path = '',
			type ='';
		if (!treeNode) return {path:'',type:''};

		if (treeNode.father){
			path = treeNode.father+treeNode.name;
		}else if (treeNode.this_path){
			path = treeNode.this_path;
		}else if (treeNode.path != ''){
			path = treeNode.path+treeNode.name;
		}else if (treeNode.path == ''){
			path = '/'+treeNode.name;
		}
		
		//打开文件夹&文件
		type = treeNode.ext;
		if (type == '_null_' || type==undefined) type = 'folder';
		if (type == 'file')   type = treeNode.ext;
		if (makeArray) {//多个操作接口
			return [{path:path,type:type,node:treeNode}];
		}else{
			return {path:path,type:type,node:treeNode};
		}
	};
	//通用刷新 不传参数则刷新选中节点
	var refresh = function(treeNode){
		if (treeNode == undefined) treeNode=zTree.getSelectedNodes()[0];
		if (!treeNode.isParent){
			treeNode = treeNode.getParentNode();
			if (!treeNode){
				ui.tree.init();
				return;
			}
			if (treeNode && treeNode['ext'] =='__fav__') return;//不刷新收藏夹
		}
		zTree.reAsyncChildNodes(treeNode, "refresh");
	};

	var f5_refresh = function(){//树目录变化后，对应刷新文件目录
		if (Config.pageApp == 'explorer') {
			ui.f5();
		}
	};

	//对外接口
	return {		
		pathOpen:pathOpen,
		init:init,
		refresh:refresh,
		openEditor:function(){pathOpen.openEditor(_param().path);},
		openIE:function(){pathOpen.openIE(_param().path);},
		download:function(){pathOpen.download(_param().path);},
		open:function(){
			if ($('.dialog_path_remove').length>=1) return;			
			var p=_param();
			if (p.type == 'oexe'){
				p.path = p.node;
			}
			pathOpen.open(p.path,p.type);
		},
		fav:function(){pathOperate.fav(_param().path);},
		search:function(){core.search('',_param().path);},
		appEdit:function(){
			var p=_param();
			var data = p.node;data.path = p.path;
			pathOperate.appEdit(data,function(){
			refresh(p.node.getParentNode());
		});},

		//operate
		info:function(){pathOperate.info(_param(true));},
		copy:function(){pathOperate.copy(_param(true));},
		cute:function(){pathOperate.cute(_param(true));},
		past:function(){
			var param = _param();
			if (!param.node.isParent) param.node = param.node.getParentNode();
			pathOperate.past(param.path,function(){
				f5_refresh();
				refresh(param.node);
			});
		},
		remove:function(){
			var param  = _param(true);
			var parent = param[0].node.getParentNode();
			pathOperate.remove(param,function(){
				f5_refresh();
				refresh(parent);
			});
		},
		checkIfChange:function(explorer_path){			
			if (isUpdateRefresh) return;
			isUpdateRefresh = true;
			if (!zTree) return;
			zTree.getNodesByFilter(function(treeNode){
				var path;
				if (treeNode.this_path){
					path = treeNode.this_path;
				}else if (treeNode.path != ''){
					path = treeNode.path+treeNode.name;
				}
				if (path == explorer_path ||
					path+'/'==explorer_path||
					'/'+treeNode.name+'/'==explorer_path) {
					refresh(treeNode);
					return true;
				}
				return false;
			},true);
			setTimeout(function(){
				isUpdateRefresh = false;
			},1000);			
		},
		explorer:function(){//管理文档
			var path = _param().path;
			if (!path) path = G.this_path;
			core.explorer(path);
		},
		fileBox:function(type){//管理文档
			if (type = 'save_file') {};//没有则自动创建
			if (type = 'save_folder') {};
			if (type = 'select_') {};
			$('.header-left').css('width',110)
				.next().css('left',150);
			$('.frame-left').width("width",142)

			$.dialog.open('?/explorer&plague='+type,{
				resize:true,
				fixed:true,
				title:'另存为',
				width:750,height:420
			});
		},
		// 创建节点 让元素进入编辑状态(编辑、新建)。保存动作在ztree的onRename回调函数中
		create:function(type){//type ='file' 'folder'
			var sel = zTree.getSelectedNodes();
			if (sel.length<=0){//工具栏新建文件（夹）
				var node = zTree.getNodeByParam("ext",'__root__', null);
				zTree.selectNode(node);
			} 

			var	param = _param(),
				treeNode = param.node,
				parent = treeNode.getParentNode(),
				file="newfile",i=0,
				folder=LNG.newfolder;
			if (type=='folder') {
				while(zTree.getNodesByParam('name',folder+'('+i+')',parent).length>0){
					i++;
				}
				newNode = {name:folder+'('+i+')','ext':'',type:'folder',create:true,path:param.path};
			}else if(type=='file'){
				while(zTree.getNodesByParam('name',file+'('+i+').txt',parent).length>0){
					i++;
				}
				newNode = {name:file+'('+i+').txt','ext':'txt',type:'file',create:true,path:param.path};
			}


			if(treeNode.children != undefined){
				var treeNodeNew = zTree.addNodes(treeNode,newNode)[0];
				zTree.editName(treeNodeNew);
			}else{				
				if (treeNode.type != 'folder') treeNode = treeNode.getParentNode();
				var treeNodeNew = zTree.addNodes(treeNode,newNode)[0];
				zTree.editName(treeNodeNew);
			}			
		},
		rname:function(){
			var treeNode = zTree.getSelectedNodes()[0],newNode;
			zTree.editName(treeNode);
			treeNode.beforeName = treeNode.name;
		}
	}
}); 
