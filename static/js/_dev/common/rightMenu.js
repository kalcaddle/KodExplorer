//点击右键，获取元素menu的值，对应为右键菜单div的id值。实现通用。
//流程：给需要右键菜单的元素，加上menu属性，并赋值，把值作为右键菜单div的id值
define(function(require, exports) {
    var fileMenuSelector   = ".menufile";
    var folderMenuSelector = ".menufolder";
    var selectMoreSelector = ".menuMore";
    var selectAppSelector  = ".menuApp";
    var selectTreeSelectorFav       = ".menuTreeFav";
    var selectTreeSelectorRoot      = ".menuTreeRoot";
    var selectTreeSelectorFolder    = ".menuTreeFolder";   
    var selectTreeSelectorFile      = ".menuTreeFile";

    var _init_explorer = function(){
        $('<div id="rightMenu" class="hidden"></div>').appendTo('body');
        $('.context-menu-list').die("click").live("click",function(e){
            stopPP(e);return false;//屏蔽html点击隐藏
        });

        _bindBody_explorer();
        _bindFolder();
        _bindFile();
        _bindSelectMore();
        _bindTreeFav();
        _bindTreeRoot();
        _bindTreeFolder();
        _bindApp();
        _bindDialog();
        _bindTask();
        _bindTaskBar();
        //初始化绑定筛选排序方式
        $('.set_set'+G.list_type).addClass('selected');
        $('.set_sort_'+G.sort_field).addClass('selected');
        $('.set_sort_'+G.sort_order).addClass('selected');
        $('.context-menu-root').addClass('fadein');
    };
    var _init_desktop = function(){
        $('<div id="rightMenu" class="hidden"></div>').appendTo('body');
        $('.context-menu-list').die("click").live("click",function(e){
            stopPP(e);return false;//屏蔽html点击隐藏
        });       
        _bindBody_desktop();
        _bindApp();
        _bindSystem();
        _bindFolder();
        _bindFile();
        _bindTask();
        _bindDialog();
        _bindSelectMore();
        _bindTaskBar();
        $('.set_sort_'+G.sort_field).addClass('selected');
        $('.set_sort_'+G.sort_order).addClass('selected');
        $('.context-menu-root').addClass('fadein');
    };

    //初始化编辑器 树目录右键菜单
    var _init_editor = function(){
        $('<div id="rightMenu" class="hidden"></div>').appendTo('body');
        $('.context-menu-list').die("click").live("click",function(e){
            stopPP(e);
            return false;//屏蔽html点击隐藏
        });
        _bindTreeFav();
        _bindTreeRoot();
        _bindApp();
        _bindTask();
        _bindDialog();
        _bindTreeFolderEditor();
        _bindEditorFile();
        _bindTaskBar();
        $('.context-menu-root').addClass('fadein');
    };


    var _bindBody_explorer = function(){
        $.contextMenu({
            selector: Config.BodyContent,
            zIndex:9999,
            callback: function(key, options) {_menuBody(key, options);},
            items: {
                "refresh":{name:LNG.refresh,className:"refresh",icon:"refresh",accesskey: "e"},
                "upload":{name:LNG.upload,className:"upload",icon:"upload",accesskey: "u"},
                "past":{name:LNG.past,className:"past",icon:"paste",accesskey: "p"},
                "copy_see":{name:LNG.clipboard,className:"copy_see",icon:"eye",accesskey: "b"},
                "sep1":"--------",
                "listIcon": {
                    name: LNG.list_type,
                    accesskey: "v",
                    icon:"eye-open",
                    items:{
                        "seticon":{name:LNG.list_icon,className:"seticon",icon:"th",accesskey: "i",className:'menu_seticon set_seticon'},
                        "setlist":{name:LNG.list_list,className:"setlist",icon:"list",accesskey: "l",className:'menu_seticon set_setlist'}
                    }
                },
                "sortBy": {
                    name: LNG.order_type,
                    accesskey: "o",
                    icon:"sort",
                    items:{
                        "set_sort_name":{name:LNG.name,className:'menu_set_sort set_sort_name'},
                        "set_sort_ext":{name:LNG.type,className:'menu_set_sort set_sort_ext'},
                        "set_sort_size":{name:LNG.size,className:'menu_set_sort set_sort_size'},
                        "set_sort_mtime":{name:LNG.modify_time,className:'menu_set_sort set_sort_mtime'},
                        "set_sort_up":{name:LNG.sort_up,className:"set_sort_up",icon:"sort-up",className:'menu_set_desc set_sort_up'},
                        "set_sort_down":{name:LNG.sort_down,className:"set_sort_down",icon:"sort-down",className:'menu_set_desc set_sort_down'}
                    }
                },
                "sep2":"--------",
                "app_install":{name:LNG.app_store,className:"app_install",icon:"tasks",accesskey: "a"},
                "app_create":{name:LNG.app_create,className:"app_create",icon:"puzzle-piece",accesskey: "k"},
                "sep3":"--------",
                "newfolder":{name:LNG.newfolder,className:"newfolder",icon:"folder-close-alt",accesskey: "n"},
                "newfile":{name:LNG.newfile,className:"newfile",icon:"file-alt",accesskey: "j"},
                "newfileOther":{
                    name:LNG.newothers,
                    items:{
                        "newfile_html":{name:"html "+LNG.file},
                        "newfile_php":{name:"php "+LNG.file},
                        "newfile_js":{name:"js "+LNG.file},
                        "newfile_css":{name:"css "+LNG.file}
                    }
                },
                "sep3":"--------",
                "info":{name:LNG.info,className:"info",icon:"info",accesskey: "i"}
            }
        });
    }; 
    var _bindSystem = function(){
        $.contextMenu({
            selector:'.menuDefault',
            zIndex:9999,
            items: {"open":{name:LNG.open,className:"open",icon:"external-link",accesskey: "o"}},
            callback: function(key, options) {
                switch(key){
                    case 'open':ui.path.open();break;
                    default:break;
                }
            }
        });
    };
    var _bindBody_desktop = function(){
        $.contextMenu({
            selector: Config.BodyContent,
            zIndex:9999,
            callback: function(key, options) {_menuBody(key);},
            items: {
                "refresh":{name:LNG.refresh,className:"refresh",icon:"refresh",accesskey: "e"},
                "sortBy": {
                    name: LNG.order_type,
                    accesskey: "o",
                    icon:"sort",
                    items:{
                        "set_sort_name":{name:LNG.name,className:'menu_set_sort set_sort_name'},
                        "set_sort_ext":{name:LNG.type,className:'menu_set_sort set_sort_ext'},
                        "set_sort_size":{name:LNG.size,className:'menu_set_sort set_sort_size'},
                        "set_sort_mtime":{name:LNG.modify_time,className:'menu_set_sort set_sort_mtime'},
                        "set_sort_up":{name:LNG.sort_up,className:"set_sort_up",icon:"sort-up",className:'menu_set_desc set_sort_up'},
                        "set_sort_down":{name:LNG.sort_down,className:"set_sort_down",icon:"sort-down",className:'menu_set_desc set_sort_down'}
                    }
                },
                "sep1":"--------",              
                "upload":{name:LNG.upload,className:"upload",icon:"upload",accesskey: "u"},
                "past":{name:LNG.past,className:"past",icon:"paste",accesskey: "p"},
                "copy_see":{name:LNG.clipboard,className:"copy_see",icon:"eye",accesskey: "b"},
                "sep2":"--------",
                "app_install":{name:LNG.app_store,className:"app_install",icon:"tasks",accesskey: "a"},
                "app_create":{name:LNG.app_create,className:"app_create",icon:"puzzle-piece",accesskey: "k"},
                "sep3":"--------",
                "newfolder":{name:LNG.newfolder,className:"newfolder",icon:"folder-close-alt",accesskey: "n"},
                "newfile":{name:LNG.newfile,className:"newfile",icon:"file-alt",accesskey: "j"},
                "newfileOther":{
                    name:LNG.newothers,                    
                    items:{
                        "newfile_html":{name:"html "+LNG.file},
                        "newfile_php":{name:"php "+LNG.file},
                        "newfile_js":{name:"js "+LNG.file},
                        "newfile_css":{name:"css "+LNG.file}
                    }
                },
                "sep3":"--------",
                "full":{name:LNG.full_screen,className:"full",icon:"fullscreen",accesskey: "m"},
                "setting_wall":{name:LNG.setting_wall,className:"setting_wall",icon:"picture",accesskey: "w"},
                "setting":{name:LNG.setting,className:"setting",icon:"cogs",accesskey: "s"}
            }
        });
    };
    var _bindFolder = function(){
        $('<i class="'+folderMenuSelector.substr(1)+'"></i>').appendTo('#rightMenu');
        $.contextMenu({
            zIndex:9999,
            selector: folderMenuSelector,
            className:folderMenuSelector,
            callback: function(key, options) {_menuPath(key);},
            items: {
                "open":{name:LNG.open,className:"open",icon:"folder-open-alt",accesskey: "o"},
                "open_ie":{name:LNG.open_ie,className:"open_ie",icon:"globe",accesskey: "b"},
                "sep1":"--------",
                "copy":{name:LNG.copy,className:"copy",icon:"copy",accesskey: "c"},
                "cute":{name:LNG.cute,className:"cute",icon:"cut",accesskey: "k"},                
                "remove":{name:LNG.remove,className:"remove",icon:"trash",accesskey: "d"},
                "rname":{name:LNG.rename,className:"rname",icon:"pencil",accesskey: "r"},
                "sep2":"--------",
                "search":{name:LNG.search_in_path,className:"search",icon:"search",accesskey: "s"},
                "fav":{name:LNG.add_to_fav,className:"fav",icon:"star",accesskey: "f"},
                "zip":{name:LNG.zip,className:"zip",icon:"folder-close",accesskey: "z"},
                "sep3":"--------",
                "info":{name:LNG.info,className:"info",icon:"info",accesskey: "i"}
            }
        });
    };
    var _bindFile = function(){
        $('<i class="'+fileMenuSelector.substr(1)+'"></i>').appendTo('#rightMenu');
        $.contextMenu({
            zIndex:9999,
            selector: fileMenuSelector,
            className:folderMenuSelector,
            callback: function(key, options) {_menuPath(key);},
            items: {
                "open":{name:LNG.open,className:"open",icon:"external-link",accesskey: "o"},
                "open_text":{name:LNG.edit,className:"open_text",icon:"edit",accesskey: "e"},
                "open_ie":{name:LNG.open_ie,className:"open_ie",icon:"globe",accesskey: "b"},
                "newfileOther":{                    
                    name:LNG.open_with,
                    accesskey:'h',
                    items:{
                        "open_text":{name:LNG.edit,className:"open_text",icon:"edit"},
                        "open_kindedit":{name:LNG.others,className:"open_kindedit",icon:"edit"}
                    }
                },
                "sep1":"--------",
                "copy":{name:LNG.copy,className:"copy",icon:"copy",accesskey: "c"},
                "cute":{name:LNG.cute,className:"cute",icon:"cut",accesskey: "k"},                
                "remove":{name:LNG.remove,className:"remove",icon:"trash",accesskey: "d"},
                "rname":{name:LNG.rename,className:"rname",icon:"pencil",accesskey: "r"},
                "sep2":"--------",
                "zip":{name:LNG.zip,className:"zip",icon:"folder-close",accesskey: "z"},
                "unzip":{name:LNG.unzip,className:"unzip",icon:"folder-open-alt",accesskey: "u"},
                "down":{name:LNG.download,className:"down",icon:"download",accesskey: "x"},
                "sep3":"--------",
                "info":{name:LNG.info,className:"info",icon:"info",accesskey: "i"}
            }
        });
    };
    var _bindApp = function(){
        $('<i class="'+selectAppSelector.substr(1)+'"></i>').appendTo('#rightMenu');
        $.contextMenu({
            zIndex:9999,
            selector: selectAppSelector,
            className:folderMenuSelector,
            callback: function(key, options) {
                if(Config.pageApp == 'editor'){
                    _menuTree(key);
                }else{
                    _menuPath(key);
                }
            },
            items: {
                "open":{name:LNG.open,className:"open",icon:"external-link",accesskey: "o"},
                "app_edit":{name:LNG.app_edit,className:"app_edit",icon:"code",accesskey: "a"},          
                "sep1":"--------",
                "copy":{name:LNG.copy,className:"copy",icon:"copy",accesskey: "c"},
                "cute":{name:LNG.cute,className:"cute",icon:"cut",accesskey: "k"},
                "remove":{name:LNG.remove,className:"remove",icon:"trash",accesskey: "d"},
                "rname":{name:LNG.rename,className:"rname",icon:"pencil",accesskey: "r"},
                "sep2":"--------",
                "info":{name:LNG.info,className:"info",icon:"info",accesskey: "i"}
            }
        });
    };    
    var _bindSelectMore = function(){
        $('<i class="'+selectMoreSelector.substr(1)+'"></i>').appendTo('#rightMenu');
        $.contextMenu({
            zIndex:9999,
            selector: selectMoreSelector,
            className:folderMenuSelector,
            callback: function(key, options) {_menuPath(key);},
            items: {
                "copy":{name:LNG.copy,className:"copy",icon:"copy",accesskey: "c"},
                "clone":{name:LNG.clone,className:"clone",icon:"external-link",accesskey: "m"},
                "cute":{name:LNG.cute,className:"cute",icon:"cut",accesskey: "k"},                
                "remove":{name:LNG.remove,className:"remove",icon:"trash",accesskey: "d"},
                "sep1":"--------",
                "playmedia":{name:LNG.add_to_play,className:"playmedia",icon:"music",accesskey: "p"},
                "zip":{name:LNG.zip,className:"zip",icon:"folder-close",accesskey: "z"},         
                "sep2":"--------",
                "info":{name:LNG.info,className:"info",icon:"info",accesskey: "i"}
            }
        });
    }

    //___________________________________________________________________________________
    //桌面右键& 资源管理器右键动作
    var _menuBody = function(action) {
        switch(action){
            case 'refresh':ui.f5(true,true);break;
            case 'back':ui.path.back();
            case 'next':ui.path.next();break;
            case 'seticon': ui.setListType('icon');break;//大图标显示
            case 'setlist':ui.setListType('list');break;//列表显示
            case 'set_sort_name':ui.setListSort('name',0);break;//排序方式，名称
            case 'set_sort_ext':ui.setListSort('ext',0);break;//排序方式，扩展名
            case 'set_sort_size':ui.setListSort('size',0);break;//排序方式，大小
            case 'set_sort_mtime':ui.setListSort('mtime',0);break;//排序方式，修改时间               
            case 'set_sort_up':ui.setListSort(0,'up');break;//已有模式升序
            case 'set_sort_down':ui.setListSort(0,'down');break;//已有模式降序
            case 'upload':core.upload();break;

            case 'past':ui.path.past();break;  //粘贴到当前文件夹 
            case 'copy_see':ui.path.clipboard();break;  //查看剪贴板 
            case 'newfolder':ui.path.newFolder();break;  //新建文件夹
            case 'newfile':ui.path.newFile();break;//新建文件
            case 'newfile_html':ui.path.newFile('html');break;
            case 'newfile_php':ui.path.newFile('php');break;
            case 'newfile_js':ui.path.newFile('js');break;
            case 'newfile_css':ui.path.newFile('css');break;
            case 'newfile_oexe':ui.path.newFile('oexe');break;     
            case 'info':ui.path.info();break;//当前文件夹熟悉

            case 'open':ui.path.open();break;
            case 'open_new':ui.path.open_new();break;     

            case 'app_install':ui.path.appList();break;
            case 'app_create':ui.path.appEdit(true);break;

            //桌面会用到    
            case 'full':ui.fullScreen();break;
            case 'setting':core.setting();break;//新建文件
            case 'setting_wall':core.setting('wall');break;//新建文件
            default:break;
        }
    };

    //目录右键绑定(文件、文件夹) 树目录文件(夹)
    var _menuPath = function(action) {
        switch(action){
            case 'open':ui.path.open();break;            
            case 'down':ui.path.download();break;
            case 'open_ie':ui.path.openIE();break;
            case 'open_text':ui.path.openEditor();break;
            case 'app_edit':ui.path.appEdit();
            case 'open_kindedit':break;
            case 'playmedia':ui.path.play();break;

            case 'fav':ui.path.fav();break;//添加到收藏夹
            case 'search':ui.path.search();break;

            case 'copy':ui.path.copy();break;
            case 'clone':ui.path.copyDrag(G.this_path,true);break;
            case 'cute':ui.path.cute();break;
            case 'remove':ui.path.remove();break;
            case 'rname':ui.path.rname();break;
            case 'zip':ui.path.zip();break;
            case 'unzip':ui.path.unZip();break;
            case 'info':ui.path.info();break;
            default:break;
        }
    };

    //=============================tree start=============================
    //资源管理器tree 右键绑定
    var _bindTreeFav = function(){
        $('<i class="'+selectTreeSelectorFav.substr(1)+'"></i>').appendTo('#rightMenu');
        $.contextMenu({
            zIndex:9999,
            selector: selectTreeSelectorFav, 
            callback: function(key, options) {_menuTree(key);},
            items: {
                "fav_page":{name:LNG.manage_fav,className:"fav_page",icon:"star",accesskey: "r"},
                "refresh_all":{name:LNG.refresh_tree,className:"refresh_all",icon:"refresh",accesskey: "e"},
                "sep1":"--------",
                "quit":{name:LNG.close_menu,className:"quit",icon:"remove",accesskey: "q"}
            }
        });
    }
    var _bindTreeRoot = function(){
        $('<i class="'+selectTreeSelectorRoot.substr(1)+'"></i>').appendTo('#rightMenu');
        $.contextMenu({
            zIndex:9999,
            selector: selectTreeSelectorRoot, 
            callback: function(key, options) {_menuTree(key);},
            items: {
                "explorer":{name:LNG.manage_folder,className:"explorer",icon:"laptop",accesskey: "v"},    
                "refresh":{name:LNG.refresh_tree,className:"refresh",icon:"refresh",accesskey: "e"},
                "newfolder":{name:LNG.newfolder,className:"newfolder",icon:"folder-close-alt",accesskey: "n"}, 
                "newfile":{name:LNG.newfile,className:"newfile",icon:"file-alt",accesskey: "j"}, 
                "fav":{name:LNG.add_to_fav,className:"fav",icon:"star",accesskey: "f"},
                "search":{name:LNG.search_in_path,className:"search",icon:"search",accesskey: "s"},
                "sep1":"--------",
                "past":{name:LNG.past,className:"past",icon:"paste",accesskey: "p"},
                "sep3":"--------",
                "quit":{name:LNG.close_menu,className:"quit",icon:"remove",accesskey: "q"} 
            }
        });
    }
    var _bindTreeFolder = function(){
        $('<i class="'+selectTreeSelectorFolder.substr(1)+'"></i>').appendTo('#rightMenu');
        $.contextMenu({
            zIndex:9999,
            selector: selectTreeSelectorFolder, 
            callback: function(key, options) {_menuTree(key);},
            items: {
                "refresh":{name:LNG.refresh_tree,className:"refresh",icon:"refresh",accesskey: "e"},
                "newfolder":{name:LNG.newfolder,className:"newfolder",icon:"folder-close-alt",accesskey: "n"}, 
                "fav":{name:LNG.add_to_fav,className:"fav",icon:"star",accesskey: "f"},
                "search":{name:LNG.search_in_path,className:"search",icon:"search",accesskey: "s"},
                "sep1":"--------",
                "copy":{name:LNG.copy,className:"copy",icon:"copy",accesskey: "c"},
                "cute":{name:LNG.cute,className:"cute",icon:"cut",accesskey: "k"},
                "past":{name:LNG.past,className:"past",icon:"paste",accesskey: "p"}, 
                "rname":{name:LNG.rename,className:"rname",icon:"pencil",accesskey: "r"},           
                "sep2":"--------",
                "remove":{name:LNG.remove,className:"remove",icon:"trash",accesskey: "d"},
                "info":{name:LNG.info,className:"info",icon:"info",accesskey: "i"}
            }
        });
    }

    var _bindTreeFolderEditor = function(){
        $('<i class="'+selectTreeSelectorFolder.substr(1)+'"></i>').appendTo('#rightMenu');
        $.contextMenu({
            zIndex:9999,
            selector: selectTreeSelectorFolder, 
            callback: function(key, options) {_menuTree(key);},
            items: {
                "explorer":{name:LNG.manage_folder,className:"explorer",icon:"laptop",accesskey: "v"},    
                "refresh":{name:LNG.refresh_tree,className:"refresh",icon:"refresh",accesskey: "e"}, 
                "fav":{name:LNG.add_to_fav,className:"fav",icon:"star",accesskey: "f"},
                "search":{name:LNG.search_in_path,className:"search",icon:"search",accesskey: "s"},
                "sep3":"--------",
                "newfolder":{name:LNG.newfolder,className:"newfolder",icon:"folder-close-alt",accesskey: "n"},
                "newfile":{name:LNG.newfile,className:"newfile",icon:"file-alt",accesskey: "j"},
                "sep2":"--------",
                "copy":{name:LNG.copy,className:"copy",icon:"copy",accesskey: "c"},
                "cute":{name:LNG.cute,className:"cute",icon:"cut",accesskey: "k"},
                "past":{name:LNG.past,className:"past",icon:"paste",accesskey: "p"},
                "rname":{name:LNG.rename,className:"rname",icon:"pencil",accesskey: "r"},
                "sep4":"--------",
                "remove":{name:LNG.remove,className:"remove",icon:"trash",accesskey: "d"},
                "info":{name:LNG.info,className:"info",icon:"info",accesskey: "i"},
                "sep5":"--------",
                "quit":{name:LNG.close_menu,className:"quit",icon:"remove",accesskey: "q"}
            }
        });
    };
    var _bindEditorFile = function(){
        $('<i class="'+selectTreeSelectorFile.substr(1)+'"></i>').appendTo('#rightMenu');
        $.contextMenu({
            zIndex:9999,
            selector: selectTreeSelectorFile, 
            callback: function(key, options) {_menuTree(key);},
            items: {
                "edit":{name:LNG.edit,className:"edit",icon:"edit",accesskey: "e"},
                "open":{name:LNG.open,className:"open",icon:"external-link",accesskey: "o"},
                "openIE":{name:LNG.open_ie,className:"openIE",icon:"globe",accesskey: "b"}, 
                "download":{name:LNG.download,className:"download",icon:"download",accesskey: "x"},               
                "sep1":"--------",
                "rname":{name:LNG.rename,className:"rname",icon:"pencil",accesskey: "r"},
                "copy":{name:LNG.copy,className:"copy",icon:"copy",accesskey: "c"},
                "cute":{name:LNG.cute,className:"cute",icon:"cut",accesskey: "k"},
                "remove":{name:LNG.remove,className:"remove",icon:"trash",accesskey: "d"},
                "sep2":"--------",              
                "info":{name:LNG.info,className:"info",icon:"info",accesskey: "i"},
                "quit":{name:LNG.close_menu,className:"quit",icon:"remove",accesskey: "q"}
            }
        });
    };

    //绑定任务栏 程序标签
    var _bindTaskBar = function(){
        $('<i class="taskBarMenu"></i>').appendTo('#rightMenu');
        $.contextMenu({
            zIndex:9999,
            selector: '.taskBarMenu', 
            items: {    
                "quitOthers":{name:LNG.close_others,className:"quitOthers",icon:"remove-circle",accesskey: "o"},
                "quit":{name:LNG.close,className:"quit",icon:"remove",accesskey: "q"}
            },
            callback: function(key, options) {
                var id =options.$trigger.attr('id');
                var dialog = art.dialog.list[id];
                switch(key){
                    case 'quitOthers':
                        $.each(art.dialog.list,function(index,dlg){
                            if(id != index) dlg.close();
                        });
                        break;                        
                     case 'quit':dialog.close();break;
                }
            }
        });        
    };
    //绑定任务栏
    var _bindTask = function(){
        $.contextMenu({
            zIndex:9999,
            selector: '.task_tab', 
            items: {
                "closeAll":{name:LNG.dialog_close_all,icon:"remove-circle",accesskey: "o"},
                "showAll":{name:LNG.dialog_display_all,icon:"th-large",accesskey: "o"},
                "hideAll":{name:LNG.dialog_min_all,icon:"remove",accesskey: "q"}
            },
            callback: function(key, options) {
                var id =options.$trigger.attr('id');
                var dialog = art.dialog.list[id];
                switch(key){
                    case 'showAll':
                        $.each(art.dialog.list,function(index,dlg){
                            dlg.display(true);
                        });
                        break;                       
                    case 'hideAll':
                        $.each(art.dialog.list,function(index,dlg){
                            dlg.display(false);
                        });
                        break;                    
                    case 'closeAll':
                        $.each(art.dialog.list,function(index,dlg){
                            dlg.close();
                        });
                        break;
                    default:break;
                }
            }
        });        
    };

    //绑定任务栏
    var _bindDialog = function(){
        $('<i class="dialog_menu"></i>').appendTo('#rightMenu');
        $.contextMenu({
            zIndex:9999,
            selector: '.dialog_menu', 
            items: {    
                "quit":{name:LNG.close,icon:"remove",accesskey: "o"},
                "hide":{name:LNG.dialog_min,icon:"minus",accesskey: "o"},
                "refresh":{name:LNG.refresh,icon:"refresh",accesskey: "q"}
            },
            callback: function(key, options) {
                var id =options.$trigger.attr('id');
                var dialog = art.dialog.list[id];
                switch(key){
                    case 'quit':dialog.close();break;
                    case 'hide':dialog.display(false);break;
                    case 'refresh':dialog.refresh();break;
                    default:break;
                }
            }
        });        
    };



    var _menuTree = function(action) {//多选，右键操作
        switch(action){
            case 'app_edit':ui.tree.appEdit();break;
            case 'edit':ui.tree.openEditor();break;
            case 'open':ui.tree.open();break;
            case 'refresh':ui.tree.refresh();break;            
            case 'copy':ui.tree.copy();break;
            case 'cute':ui.tree.cute();break;
            case 'past':ui.tree.past();break;
            case 'rname':ui.tree.rname();break;
            case 'remove':ui.tree.remove();break;
            case 'info':ui.tree.info();break;

            case 'download':ui.tree.download();break;
            case 'openIE':ui.tree.openIE();break;
            case 'search':ui.tree.search();break;

            case 'newfolder':ui.tree.create('folder');break;
            case 'newfile':ui.tree.create('file');break;            
            case 'explorer':ui.tree.explorer();break;
            case 'fav_page':core.setting('fav');break;
            case 'fav':ui.tree.fav();break;//添加当前到收藏夹
            case 'refresh_all':ui.tree.init();break;
            case 'quit':;break;
            default:break;
        }
    };
    //=============================tree end==========================

    return{
        initDesktop:_init_desktop,
        initExplorer:_init_explorer,
        initEditor:_init_editor,
        show:function(select,left,top){
            if (!select) return;
            rightMenu.hidden();
            $(select).contextMenu({x:left, y:top});
        },
        isDisplay:function(){//检测是否有右键菜单
            var display = false;
            $('.context-menu-list').each(function(){
                if($(this).css("display") !="none"){
                    display = true;
                }
            });
            return display;
        },
        hidden:function(){
            $('.context-menu-list').filter(':visible').trigger('contextmenu:hide');
        }
    }
});