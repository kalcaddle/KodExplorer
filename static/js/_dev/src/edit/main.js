var animate_time	= 160;//关闭动画
define(function(require, exports, module) {
    require('lib/jquery-lib');
    require('lib/util');
    require('lib/contextMenu/jquery-contextMenu');
    require('lib/artDialog/jquery-artDialog');
    Tap     = require('./taskTap');    //任务栏
    Toolbar = require('./toolbar');    //任务栏
    Editor  = require('./edit');    //任务栏
    core    = require('../../common/core');     //公共方法及工具封装
    rightMenu = Tap.rightMenu;
    preview = Toolbar.preview;

    Global = {
        topbar_height:40,           // 头部高度
        isIE:!-[1,],                // 是否ie
    };

    $(document).ready(function() {
        Tap.init();
        Toolbar.init();
        if (G.frist_file != '') {
            Editor.add(G.frist_file);
        }
        window.onbeforeunload = function(){//关闭窗口编辑器保存提示
            if (Editor.hasFileSave()) {
                return LNG.if_save_file;
            }else{
                return undefined;
            }
        }
    });
});