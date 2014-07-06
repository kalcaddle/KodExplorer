define(function(require, exports, module) {
    Config = {
        BodyContent:".bodymain",    // 框选事件起始的dom元素
        FileBoxSelector:'.fileContiner',// dd
        FileBoxClass:".fileContiner .file",     // 文件选择器
        FileBoxClassName:"file",    // 文件选择器    
        FileBoxTittleClass:".fileContiner .title",// 文件名选择器
        SelectClass:".fileContiner .select",        // 选中文件选择器
        SelectClassName:"select",   // 选中文件选择器名称
        TypeFolderClass:'folderBox',// 文件夹标记选择器
        TypeFileClass:'fileBox',    // 文件标记选择器
        HoverClassName:"hover",     // hover类名
        FileOrderAttr:"number",     // 所有文件排序属性名
        TreeId:"folderList",        // 目录树对象

        pageApp     : "explorer",
        treeAjaxURL : "index.php?explorer/treeList&app=explorer",//树目录请求
        AnimateTime:200             // 动画时间设定
    };
    Global = {
        fileListAll:'',             // 当前路径下文件对象集合,缓存起来便于全局使用
        fileListNum:0,              // 文件&文件夹总个数
        fileRowNum:0,               // 当前屏幕每行文件&文件夹个数
        frameLeftWidth:200,         // 左边树目录宽度
        treeSpaceWide:10,           // 树目录层级相差宽度
        topbar_height:40,           // 头部高度
        ctrlKey:false,              // 是否按下ctrl
        shiftKey:false,             // 是否按下shift

        fileListSelect:'',          // 选s择的文件
        fileListSelectNum:'',       // 选中的文件数。
        isIE:!-[1,],                // 是否ie
        isDragSelect:false,         // 是否框选
        historyStatus:{back:1,next:0}   // 是否可以前进后退操作状态
    };
    
    require('lib/jquery-lib');
    require('lib/util');
    require('lib/webuploader/webuploader-min');//
    require('lib/ztree/js/ztree');
    require('lib/contextMenu/jquery-contextMenu');
    require('lib/artDialog/jquery-artDialog');
	require('lib/picasa/picasa');
    ui= require('./ui');
	TaskTap		= require('../../common/taskTap');    //任务栏
    core        = require('../../common/core');     //公共方法及工具封装
    rightMenu   = require('../../common/rightMenu');  //通用右键菜单配置
    ui.tree     = require('../../common/tree');
    ui.path     = require('./path');
    fileSelect  = require('./fileSelect');
	fileLight   = fileSelect.fileLight;
    var uploader;

	$(document).ready(function() {
        if ($('.topbar').css('display') == 'none') {
            Global.topbar_height = 0;
        }else{
            Global.topbar_height = $('.topbar').height();
        }
        
        ui.init();
        ui.tree.init();
		TaskTap.init();
        core.update();
        core.upload_init();
		fileSelect.init();
		rightMenu.initExplorer();
        $('.init_loading').fadeOut(450).addClass('pop_fadeout');
	});
});