define(function(require, exports) {
    var editConfig = {
        theme:G.code_config.theme,
        fontsize:G.code_config.font_size,
        auto_complete:parseInt(G.code_config.auto_complete),        
        wrap:parseInt(G.code_config.auto_wrap),//自适应宽度换行
        display:parseInt(G.code_config.display_char)//是否显示特殊字符
    };
    var editors  = {};
    var focusID  = undefined;
    var Mode = require('./mode');
    ace.require("ace/ext/language_tools");

    // 通过属性查找。
    var editorFind = function(key,value){
        if (value==undefined || key==undefined || editors.length<1) return '';
        for (var obj in editors){
            if (editors[obj]['kod'][key] == value){
                return editors[obj]['kod'].uuid;
            }
        }
        return '';
    };    

    var initFirst=function(){
        //code;
        $('#fontsize li').removeClass('this');
        $('#fontsize li').each(function(){
            if(editConfig.fontsize == $(this).html()){
                $(this).addClass('this');
            }   
        });
        $('#codetheme li').removeClass('this');
        $('#codetheme li').each(function(){
            if(editConfig.theme == $(this).attr('theme')){
                $(this).addClass('this');
            }
        });
        if (editConfig.wrap==1) {
            $('a[action=wordbreak]').addClass('select');
        }
        if (editConfig.display==1) {
            $('a[action=display]').addClass('select');
        }
        if (editConfig.auto_complete==1) {
            $('a[action=auto_complete]').addClass('select');
        }
    };
    initFirst();

    
    var initAdd = function(filename){
        var initData;
        var uuid = 'id_'+ UUID();
        if (filename == undefined) {
            initData = {
                uuid:       uuid,
                name:       'newfile.txt',
                charset:    'utf-8',
                filename:   '',
                mode:       Mode.get('txt'),
            };
            initEditor(initData);
            initAce(initData);
            $('.edit_body .this').removeClass('this');
            $('.edit_body pre#'+uuid).addClass('this');
            return;
        }
        //打开文件
        initData = {
            charset:    'utf-8',
            uuid:       uuid,
            name:       core.pathThis(urlDecode(urlDecode(filename))),
            filename:   filename,
            mode:       Mode.get(core.pathExt(urlDecode(filename))),
        };
        initEditor(initData,true);
        var load = art.dialog({title:false,content:LNG.getting,icon:'warning'});
        $.ajax({
            dataType:'json',
            url:'./index.php?editor/fileGet&filename='+filename,
            error:function(XMLHttpRequest, textStatus, errorThrown) {
                load.close();
                _removeData(initData.uuid);
                core.ajaxError(XMLHttpRequest, textStatus, errorThrown);
            },
            success: function(result) {
                load.close();
                if (!result.code){
                    Tips.tips(result);
                    _removeData(initData.uuid);
                    return;
                }
                var data = result.data;
                editors[uuid] = undefined;
                $('pre#'+uuid).text(data.content);
                initAce(initData);
                $('.edit_body .this').removeClass('this');
                $('.edit_body pre#'+uuid).addClass('this');
                var current = editors[uuid];
                current.kod.charset = data.charset;
                current.navigateTo(0);
                current.moveCursorTo(0,0);
            }
        });
    };
    var initEditor = function(initData,no_animate){
        var html_tab = 
        '<div class="edit_tab_menu tab tab_'+initData.uuid+'" uuid="'
            +initData.uuid+'" title="'+urlDecode(urlDecode(initData.filename))+'">'+
        '   <div class="name">'+initData.name+'</div>'+
        '   <a href="javascript:void(0);" class="close icon-remove-sign"></a>'+
        '   <div style="clear:both;"></div>'+
        '</div>';
        $(html_tab).insertBefore('.edit_tab .add');
        var html_body = '<pre id="'+initData.uuid+'" class="edit_content"></pre>';
        $('.edit_body .tabs').append(html_body);
        _select(initData.uuid);

        if (no_animate) {
            var temp_time=animate_time;animate_time = 1;
            Tap.resetWidth('add');
            animate_time = temp_time;
        }else{
            Tap.resetWidth('add');
        }
    };
    var initAce = function(initData){
        var this_editor = ace.edit(initData.uuid);
        this_editor.setTheme("ace/theme/"+editConfig.theme);
        if (initData.mode != undefined) {
            this_editor.getSession().setMode("ace/mode/"+initData.mode);
        }        
        this_editor.getSession().setTabSize(4);
        this_editor.getSession().setUseSoftTabs(true);
        this_editor.getSession().setUseWrapMode(editConfig.wrap);
        this_editor.setShowPrintMargin(false);//显示固定宽度
        this_editor.setDragDelay(100);
        this_editor.setShowInvisibles(editConfig.display);
        this_editor.setFontSize(editConfig.fontsize);
        this_editor.setOptions({
            enableBasicAutocompletion:true,
            enableSnippets: true,
            enableLiveAutocompletion:editConfig.auto_complete
        });
        this_editor.on("change", function(e){//ace_selected
            setChanged(this_editor,true);
        });
        this_editor.commands.addCommand({
            name: 'editSave',
            bindKey: {win: 'Ctrl-S',  mac: 'Command-S',sender: 'editor|cli'},
            exec: function(editor,args, request) {
                save(editor.kod.uuid);
            }
        });
        this_editor.commands.addCommand({
            name: 'preview',
            bindKey: {win: 'Ctrl-Shift-S',  mac: 'Command-Shift-S'},
            exec: function(editor) {
                preview.open();
                Toolbar.doAction('preview');
            }
        });

        //数据存储;以对象的方式存储在ace实例中
        this_editor.kod = {
            'uuid':initData.uuid,
            'name':initData.name,
            'charset':'ansii',
            'filename':initData.filename
        }
        editors[initData.uuid]=this_editor;
        focusID = initData.uuid;
        editors[focusID].focus();
    }

    var _select = function(uuid,exist){
        $('.edit_tab .this').removeClass('this');
        $('.edit_tab .tab_'+uuid).addClass('this');
        focusID = uuid;
        if (editors[uuid] != undefined){
            editors[uuid].focus();
        }
        if (exist == true) {
            $('.edit_tab .this')
                .stop(true,true)
                .animate({"opacity":0.3},100)
                .animate({"opacity":0.8},100)
                .animate({"opacity":0.5},40)
                .animate({"opacity":1},40,function(){
                    editors[uuid].focus();
                });
        }
    }
    //选中 分次封装
    var select = function(uuid,exist) {
        if(uuid == undefined || uuid =='') return;
        _select(uuid,exist);
        $('.edit_body .this').removeClass('this');
        $('.edit_body pre#'+uuid).addClass('this');
    };

    var config = function(key,value,uuid){
        var box = editors;
        if (uuid != undefined){
            box={};box[uuid]=editors[uuid];
        }

        var save_data=undefined;
        for(var obj in box){
            var edit = box[obj];
            switch(key){
                case 'resize':edit.resize();break;
                case 'theme':
                    editConfig[key] = value;
                    edit.setTheme("ace/theme/"+value);
                    G.code_config.theme = value;
                    save_data = {'k':'theme','v':value};
                    break;
                case 'fontsize':
                    editConfig[key] = value;
                    edit.setFontSize(value);
                    G.code_config.font_size = value;
                    save_data = {'k':'font_size','v':value};
                    break;
                case 'wrap':
                    editConfig[key] = !edit.getSession().getUseWrapMode();
                    edit.getSession().setUseWrapMode(editConfig[key]);
                    G.code_config.auto_wrap = editConfig[key];
                    var the_value = editConfig[key]?1:0;
                    save_data = {'k':'auto_wrap','v':the_value};
                    break;
                case 'display':
                    editConfig[key] = !edit.getShowInvisibles()
                    edit.setShowInvisibles(editConfig[key]);
                    G.code_config.display_char = editConfig[key];
                    var the_value = editConfig[key]?1:0;
                    save_data = {'k':'display_char','v':the_value};
                    break;//自动换行 true/false
                case 'setting':edit.commands.exec('showSettingsMenu',edit);break;//自动换行 true/false 
                //case 'mode':edit.getSession().setMode("ace/mode/"+value);break;
                //case 'table_size':edit.getSession().setTabSize(value);;break;//自动换行 true/false
                //case 'show_line':edit.setShowPrintMargin(value);break;//显示固定宽度线设置
                case 'auto_complete':
                    editConfig[key] = !edit.$enableBasicAutocompletion;
                    edit.setOptions({enableLiveAutocompletion:editConfig[key]});
                    edit.$enableBasicAutocompletion = editConfig[key];
                    G.code_config.auto_complete = editConfig[key];
                    var the_value = editConfig[key]?1:0;
                    save_data = {'k':'auto_complete','v':the_value};
                    break;
                default:break;
            }
        }
        if (save_data) {//配置保存到服务器
            $.ajax({
                url:'./index.php?editor/setConfig&k='+save_data.k+'&v='+save_data.v,
                dataType:'json',
                success:function(data){
                    //tips(data);
                }
            });
        }
    };
    var setChanged = function(theEditor,type){
        if (type == theEditor.hasChanged) return;
        theEditor.hasChanged = type;//true(change) or false(nochange)
        $('.edit_tab .tabs .tab_'+theEditor.kod.uuid).toggleClass('edit_changed');
    };

    // 编辑保存，如果是新建标签则新建文件，询问保存路径。
    var save = function(uuid,isDelete){
        if (focusID == undefined) return;
        if (uuid == undefined) uuid = focusID;
        if (isDelete == undefined) isDelete = false;

        var edit_this = editors[uuid];
        if(!edit_this.hasChanged) return;
        if(edit_this == undefined || edit_this == '') {
            tips(LNG.data_error,'warning');return;
        }

        current().focus();
        var html = urlEncode2(edit_this.getValue());
        var filename = edit_this.kod.filename;
        if (filename == '') {
                        
        }
        $.ajax({
            type:'POST',
            async:false,
            dataType:'json',
            url:'./index.php?editor/fileSave',
            data:'path='+filename+'&charset='+edit_this.kod.charset+'&filestr='+html,
            beforeSend: function(){
                Tips.loading(LNG.sending);
            },
            error:core.ajaxError,
            success:function(data){
                Tips.close(data);
                if (!data.code) return;
                // 保存成功 记录上次保存时的修改时间。
                setChanged(edit_this,false);
                if (isDelete) {
                    _removeData(uuid);
                }
            }
        });
    }
    var saveall = function(){
        for (var obj in editors){
            save(obj);
        }
    };
    
    //安全删除标签，先检测该文档是否修改。
    var removeSafe = function(uuid) {
        if (uuid == undefined) uuid = focusID;
        if (editors[uuid] == undefined) return;
        var edit_this = editors[uuid];
        if (edit_this.hasChanged) {
            $.dialog({
                title:LNG.warning,
                resize:false,
                background: '#fff',
                opacity: 0.4,
                lock:true,
                icon: 'question',
                content:edit_this.kod.name+'<br/>'+LNG.if_save_file,
                padding:30,
                button:[
                    {name:LNG.button_save,focus:true,callback:function(){
                        save(uuid,true);
                    }},
                    {name:LNG.button_not_save,callback:function(){
                        _removeData(uuid);
                    }},
                    {name:LNG.button_cancle,callback:function(){
                        current().focus();
                    }}
                ]
            });
        }else{
            _removeData(uuid);
        }
    }


    //删除
    var _removeData = function(uuid) {
        delete editors[uuid];
        var changeID = '';
        var $tabs    = $('.edit_tab .tab');
        var $that    = $('.edit_tab .tab_'+uuid);
        var $editor  = $('.edit_body pre#'+uuid);  
        if ($that.hasClass('this')){
            if ($tabs.length > 1) {
                if ($($tabs[0]).attr('uuid') == uuid) {
                    changeID = $($tabs[1]).attr('uuid');
                }else{
                    $tabs.each(function(i){
                        var temp_id = $(this).attr('uuid');
                        if (temp_id == uuid){return false;}//跳出该循环。
                        changeID = temp_id;
                    });
                }                       
            }
            if(changeID !=''){//先显示下一个body，避免闪烁
                $('.edit_body pre#'+changeID).addClass('this');
            }
            $editor.remove();
            Tap.resetWidth('remove',$that,changeID);
        }else{
            $editor.remove();
            Tap.resetWidth('remove',$that);
        }
    };
    var hasFileSave = function(){
        for (var obj in editors){
            if (editors[obj].hasChanged) return true;
        }
        return false;
    };
    var setTheme = function(thistheme){
        core.setSkin(thistheme,'app_code_edit.css');
    };
    var current = function(){
        if (!focusID || !editors[focusID]) return false;
        return editors[focusID];
    };
    //----------------------------------------
    return {
        current:current,
        hasFileSave:hasFileSave,
        config:config,
        setTheme:setTheme,
        select:select,
        remove:removeSafe,
        save:save,
        saveall:saveall,
        add:function(filename){
            var id   = editorFind('filename',filename);
            if (id  != ''){//已存在
                select(id,true);
            }else{
                initAdd(filename);
            }
        }
    };
});