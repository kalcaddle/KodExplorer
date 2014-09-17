define(function(require, exports) {
    var api = 'index.php?group/';
    var Data = {};
    var init = function(setting){
        $.ajax({
            url:api+'get',
            dataType:'json',
            async:false,
            success:function(data){
                if (!data.code) {
                    tips(data);
                    return;
                }
                var groupData = data.data;
                Data = {};
                //需要预处理成key value 形式。
                for (var i in groupData) {
                    Data[groupData[i]['role']] = groupData[i];
                };
                _init_html();
                Member.init();
            },
            error:function(){
                return false;
            }
        });

        $('.group_editor .path_ext_tips').tooltip({placement:'bottom',html:true});
        $('.group_editor .warning').tooltip({
            placement:'bottom',
            html:true,
            title:function(){
                return $('.group_tips').html();
            }
        });
    };
    var _init_html = function(){
        var html="<tr class='title'>"+
                "<td width='20%'>"+LNG.group+"</td>"+
                "<td width=''>"+LNG.name+"</td>"+
                "<td width='35%'>"+LNG.action+"</td>"+
                "</tr>";
        for (var i in Data){
            var action = "<a href='javascript:void(0)' class='button edit'>"+LNG.button_edit+"</a>"+
                         "<a href='javascript:void(0)' class='button del'> "+LNG.button_del+"</a>";
            if (Data[i]['role'] == 'root') action = LNG.default_group_can_not_do;
            html +=
                "<tr role='"+Data[i]['role'] +"'>"+
                "   <td>"+Data[i]['role']+"</td>"+
                "   <td>"+Data[i]['name'] +"</td><td>"+action+'</td>';
                "</tr>";
        }
        $('.group table#list').html(html);
    }
    
    //添加状态
    var set_add = function(){
        _set_nav($('.nav .group_status'));
        $('.group_editor #role').val('').focus();
        $('.group_editor #name').val('');
        $('.group_editor #ext_not_allow').val($('.group_editor #ext_not_allow').attr('default'));       
        $('.group_editor .tag').removeClass('this');
        $('.group_editor input').removeAttr('checked');

        $('.group_editor .edit_save').addClass('hidden');
        $('.group_editor .edit_exit').addClass('hidden');
        $('.group_editor .add_save').removeClass('hidden');
        $('.nav .group_status').html(LNG.setting_group_add);
    }
    
    //编辑状态
    var set_edit = function(role){
        var group_role;
        group_role = Data[role];
        $('.group_editor .tag').removeClass('this');
        $('.group_editor input').removeAttr('checked');

        $('.group_editor .edit_save').removeClass('hidden');
        $('.group_editor .edit_exit').removeClass('hidden');
        $('.group_editor .add_save').addClass('hidden');
        $('.nav .group_status').html(LNG.setting_group_edit);
        _set_nav($('.nav .group_status'));

        $('.group_editor #role').val(group_role.role)
            .attr('data-before',group_role.role);
        $('.group_editor #name').val(group_role.name);
        $('.group_editor #ext_not_allow').val(group_role.ext_not_allow);

        //设置选中状态
        $('.group_editor .tag').each(function(){
            var self = $(this);
            var data_role = self.attr('data-role');
            data_role = data_role.split(';');
            data_role = data_role[0];
            if (group_role[data_role]) {
                self.addClass('this');
                self.find('input').attr('checked',true);
            }
        });
    }

    //添加一条收藏记录，后保存
    var save = function(){
        var role= $('.group_editor #role').val(),
            name= $('.group_editor #name').val(),
            ext_not_allow= $('.group_editor #ext_not_allow').val(),
            actions = {},   //具体功能权限数据
            url = '',
            action_type = 'add';

        if (ext_not_allow == undefined) ext_not_allow = '';
        if (role=='' || name ==''){
            tips(LNG.not_null,'error');
            return false;
        }
        if (escape(role).indexOf("%u")>=0){
            tips('名称不能为中文！','warning');
            return false;
        }
        
        $('.group_editor .tag.this').each(function(){
            var data = $(this).attr('data-role').split(';');
            for (var i = 0; i < data.length; i++) {
                actions[data[i]] = 1;
            };
        });

        //动作分发,保存或者添加
        if ($('.group_editor .add_save').hasClass('hidden')) {
            action_type = 'edit';
            var role_old = $('.group_editor #role').attr('data-before');
            url='edit&role_old='+role_old+'&role='+role+'&name='+name+'&ext_not_allow='+ext_not_allow;
        }else{
            url='add&role='+role+'&name='+name+'&ext_not_allow='+ext_not_allow;
        }
        $.ajax({
            url:api+url,
            data:actions,
            type:'POST',
            dataType:'json',
            success:function(data){
                tips(data);
                if (data.code){
                    init();
                    if (action_type == 'add') set_add();
                }           
            }
        });
    };

    //删除用户
    var del = function(){
        var obj=$(this).parent().parent();//定位到tr
        var role=$(obj).attr('role');
        $.dialog({
            fixed: true,//不跟随页面滚动
            icon:'question',
            drag: true,//拖曳
            title:LNG.warning,
            content: LNG.if_remove+role+'?<br/>'+LNG.group_remove_tips,
            ok:function() {
                $.ajax({
                    url:api+'del&role='+role,
                    async:false,
                    dataType:'json',
                    success:function(data){
                        tips(data);
                        if (data.code){
                            $(obj).detach();
                            init();
                            _set_nav($('.nav a:eq(1)'));
                        }
                    }
                }); 
            },
            cancle:true
        });
    };

    //设置菜单显示
    var _set_nav = function($dom){
        $('.nav .this').removeClass('this');
        $dom.addClass('this');
        var page = $dom.attr('data-page');
        $('.section').addClass('hidden');
        $('.'+page).removeClass('hidden');      
    }
    //事件绑定
    var bindEvent = function(){
        //列表页面
        $('.group a.add').live('click',set_add);
        $('.group a.del').live('click',del);
        $('.group a.edit').live('click',function(e){
            var obj=$(this).parent().parent();//定位到tr
            set_edit(obj.attr('role'));
        });

        //编辑保存页面
        $('.group_editor a.add_save').live('click',save);
        $('.group_editor a.edit_save').live('click',save);
        $('.group_editor a.edit_exit').live('click',set_add);       
        $('.group_editor a.revert').live('click',function(){
            $('.group_editor .tag').each(function(){
                if ($(this).hasClass('this')) {
                    $(this).removeClass('this');
                    $(this).find('input').removeAttr('checked');
                }else{
                    $(this).addClass('this');
                    $(this).find('input').attr('checked',true);
                }
            });

            if (!$('.group_editor .combox:eq(0) .tag:eq(0)').hasClass('this')) {
                $('.group_editor .combox:eq(0) .tag').removeClass('this');
                $('.group_editor .combox:eq(0) .tag').find('input').removeAttr('checked');
            }
            if (!$('.group_editor .combox:eq(1) .tag:eq(0)').hasClass('this')) {
                $('.group_editor .combox:eq(1) .tag').removeClass('this');
                $('.group_editor .combox:eq(1) .tag').find('input').removeAttr('checked');
            }
        });

        //菜单栏
        $('.nav a').live('click',function(){
            _set_nav($(this));
        });
        
        $('.group_editor .tag').live('click',function(){
            var self = $(this)
                select = false;
            self.toggleClass('this');
            if (self.hasClass('this')) {
                select = true;
                self.find('input').attr('checked',true);
            }else{
                select = false;
                self.find('input').removeAttr('checked');
            }

            if(self.parent().hasClass('combox')){
                var index = self.index();
                //取消选中第一项，则默认取消后面权限。
                if (index == 1 && select==false){
                    self.parent().find('.tag').removeClass('this');
                    self.parent().find('input').removeAttr('checked');
                }
                //选择后面操作，默认选中第一项
                if (index !=1 && select==true) {
                    self.parent().find('.tag:eq(0)').addClass('this');
                    self.parent().find('input:eq(0)').attr('checked',true);
                }
            }
        });
    };
    var getData = function(){
        return Data;
    };
    return{
        getData:getData,
        edit:set_edit,
        init:init,
        bindEvent:bindEvent
    }
});