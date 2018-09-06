define(function(require, exports) {
	if(!core.authCheck('explorer.fileDownload')){
		$(".context-menu-list .open-browser").remove();
	}
	var menuAction = function(action,option){
		//console.log(action,option);
		var zip = function(fileType){
			var oprate = ui.path.pathOperate;
			oprate.zip(ui.path.makeParam(true),ui.path.refreshCallback,fileType);
		};
		var unZip = function(createFolder){
			if(!ui.path.checkSystemPath()) return;
			var oprate = ui.path.pathOperate;
			ui.pathOperate.unZip(ui.path.makeParam().path,ui.f5,createFolder);
		};
		switch(action){
			case 'zip-zip': zip();break;
			case 'zip-tar': zip('tar');break;
			case 'zip-tgz': zip('tar.gz');break;
			case 'unzip-folder':unZip();break;
			case 'unzip-this':unZip('toThis');break;
			case 'unzip-to':unZip('toFolder');break;
		}
	}
	var option = {//file;
		"unzip":{
			name:LNG.unzip,
			className:"unzip",
			icon:"icon-folder-open-alt",
			items:{
				"unzip-this":{name:LNG.unzip_this,className:"unzip-this",icon:"icon-external-link",callback:menuAction},
				"unzip-folder":{name:LNG.unzip_folder,className:"unzip-folder",icon:"icon-external-link",callback:menuAction},
				"unzip-to":{name:LNG.unzip_to,className:"unzip-to",icon:"icon-external-link",callback:menuAction}
			}
		},
		"zip":{
			name:LNG.zip,
			className:"zip",
			icon:"icon-external-link",
			items:{
				"zip-zip":{name:"ZIP "+LNG.file,className:"zip-zip",icon:"icon-external-link",callback:menuAction},
				"sep109":"--------",
				"zip-tar":{name:"TAR "+LNG.file,className:"zip-tar",icon:"icon-external-link",callback:menuAction},
				"zip-tgz":{name:"GZIP "+LNG.file,className:"zip-tgz",icon:"icon-external-link",callback:menuAction}
			}
		}
	}
	var menuAdd = function(){
		if (!core.authCheck('explorer.zip')) {
			return;
		}

		$.contextMenu.menuAdd({zip:option.zip},'.menu-more',false,'.clone');
		$.contextMenu.menuAdd(option,'.menu-file',false,'.open-browser');
		$.contextMenu.menuAdd({zip:option.zip},'.menu-folder',false,'.open-browser');
		$.contextMenu.menuAdd(option,'.toolbar-path-more',false,'.others');
	}

	Hook.bind('rightMenu.show.menu-file,rightMenu.show.menu-tree-file',function($menuAt,$theMenu){
		if($('.context-menu-active').hasClass('menu-tree-file') ){
			var param = ui.tree.makeParam();
		}else{
			var param = ui.path.makeParam();
		}
		var ext = core.pathExt(param.path);
		var hideClass = 'hidden';
		if ( kodApp.appSupportCheck('zipView',ext) ) {
			$theMenu.find('.unzip').removeClass(hideClass);
		}else{
			$theMenu.find('.unzip').addClass(hideClass);
		}
	});

	//解压缩对话框菜单
	Hook.bind('rightMenu.show',function(selector,$menuAt,$theMenu){
		var menuArr = [
			".menu-folder",
			".menu-file",
			".menu-tree-folder",
			".menu-tree-file",
		]
		if(!_.include(menuArr,selector)){
			return;
		}
		var disableClass = 'disabled';
		var menuNotWrite = '.zip';
		var menuNotRead = '.zip,.unzip-this,.unzip-folder';
		//不可读写
		if($menuAt.hasClass('file-not-readable')){
			$theMenu.find(menuNotRead).addClass(disableClass);
		}else{
			$theMenu.find(menuNotRead).removeClass(disableClass);
		}
		//只读
		if($menuAt.hasClass('file-not-writeable')){
			$theMenu.find(menuNotWrite).addClass(disableClass);
		}else{
			$theMenu.find(menuNotWrite).removeClass(disableClass);
		}
	});
	menuAdd();
});

