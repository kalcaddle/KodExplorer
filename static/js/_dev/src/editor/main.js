define(function(require, exports, module) {
	Config = {
		TreeId:"folderList",        // 目录树对象
		AnimateTime:200,			// 动画时间设定
		pageApp 	: "editor",
		treeAjaxURL	: "index.php?explorer/treeList&app=editor",//树目录请求
	};
	Global = {
		topbar_height:40,			// 头部高度
		frameLeftWidth:200,			// 左边树目录宽度
		treeSpaceWide:15,			// 树目录层级相差宽度
		isIE:!-[1,],				// 是否ie
	};
    require('lib/jquery-lib');
    require('lib/util');
    require('lib/ztree/js/ztree');
    require('lib/contextMenu/jquery-contextMenu');
    require('lib/artDialog/jquery-artDialog');
	TaskTap		= require('../../common/taskTap');    //任务栏
    core        = require('../../common/core');       //公共方法及工具封装
    rightMenu   = require('../../common/rightMenu');  //通用右键菜单配置
    ui          = require('./ui');
    tree     	= require('../../common/tree');
    ui.tree = tree;
	$(document).ready(function() {
        ui.init();
		TaskTap.init();
        core.update();
		rightMenu.initEditor();
		$('.init_loading').fadeOut(450).addClass('pop_fadeout');
	});
});
