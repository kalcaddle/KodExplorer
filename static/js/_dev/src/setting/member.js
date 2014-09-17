define(function(require, exports) {
    var api = 'index.php?member/',
        select = '',//用户组下拉列表
        groupData ={},
        userData;
    var init = function(){
        groupData = Group.getData();
        $.ajax({
            url:api+'get',
            dataType:'json',
            async:false,
            success:function(data){
                if (!data.code) {
                    tips(data);
                    return;
                }
                userData= data.data;
                _init_view();
            },
            error:function(){
                return false;
            }
        });
    };

    var _init_view = function(){
        var html="<tr class='title'>"+
                "<td width=''>"+LNG.username+"</td>"+
                "<td width='25%'>"+LNG.group_name+"</td>"+
                "<td width='35%'>"+LNG.action+"</td>"+
                "</tr>";
        for (var i in userData){
            html += get_html(userData[i]['name'],userData[i]['role']);
        }
        select = '';
        for (var i in groupData) {
            select += "<option value='"+groupData[i]['role']+"'>"+groupData[i]['name']+"</option>";
        };
        $('.member table#list').html(html);     
    }

    var get_html = function(name,role){
        if (name == undefined) name='';
        if (role == undefined) role='';
        var group_name;
        if (!groupData[role]) {
            group_name = LNG.group_not_exists;
            role = '';
        }else{
            group_name = groupData[role]['name'];
        }

        var action = "<a href='javascript:void(0)' class='button edit'>"+LNG.button_edit+"</a>    "+
                     "<a href='javascript:void(0)' class='button del'>"+LNG.button_del+"</a>";
        if (name == 'admin') action = LNG.default_group_can_not_do;
        var html="<tr name='"+name+"' role='"+role+"'>"+
        "   <td>"+name+"</td>"+
        "   <td><a href='javascript:void(0)' class='edit_role'>"+group_name+"</a></td>"+
        "   <td>"+ action +"</td>"+
        "</tr>";
        return html;
    }

    var get_edit = function(type,name,role){
        if (name == undefined) name='';
        if (role == undefined) role='';
        var action = '';
        if (type == 'add'){
            action = {b1:"add_save'>"+LNG.member_add,b2:"add_exit'>"+LNG.button_cancle};
        }else{
            action = {b1:"edit_save'>"+LNG.button_save_edit,b2:"edit_exit'>"+LNG.button_cancle};
        }
        var html=   
        "<tr name='"+name+"' role='"+role+"'>"+
        "   <td class='member'>"+LNG.username+":<input type='text' id='name' value='"+name+"'/>"+
        "       <span>"+LNG.password+":</span><input type='text' id='password'/></td>"+
        "   <td><select id='role' value='"+role+"'>"+select+"</select></td>"+
        "   <td>"+
        "       <a href='javascript:void(0)' class='button " + action.b1 + "</a>"+
        "       <a href='javascript:void(0)' class='button " + action.b2 + "</a>"+
        "   </td>"+
        "</tr>";
        return html;
    }

    //添加用户，dom操作。
    var add = function(){
        var html = get_edit('add');
        $(html).insertAfter(".member table#list tr:last");
    };
    var add_exit = function(){
        var obj=$(this).parent().parent();//定位到tr
        $(obj).detach();
    };
    //添加用户，保存动作
    var add_save = function(){
        var obj=$(this).parent().parent();//定位到tr
        var name=$(obj).find('#name').val();
        var password=$(obj).find('#password').val();
        var role=$(obj).find('#role').val();

        if (name=='' || password =='' || role==''){
            tips(LNG.not_null,'warning');
            return false;
        }
        if (escape(name).indexOf("%u")>=0){
            tips('名称不能为中文！','warning');
            return false;
        }

        $.ajax({
            url:api+'add&name='+name+'&password='+password+'&role='+role,
            dataType:'json',
            success:function(data){
                tips(data);
                if (data.code){
                    var html = get_html(name,role);
                    $(html).insertAfter(obj);
                    $(obj).detach();
                }           
            }
        });
    };

    //编辑用户
    var edit = function(){
        var obj=$(this).parent().parent();//定位到tr
        var html = get_edit('edit',$(obj).attr('name'),$(obj).attr('role'));
        
        $('.info').html(LNG.password_null_not_update).fadeIn(100);
        $(html).insertAfter(obj);

        var set_select = $(obj).attr('role');
        $(obj).next().find('option[value='+set_select+']').attr('selected','true');
        $(obj).detach();
    };
    //取消编辑
    var edit_exit = function(){
        var obj=$(this).parent().parent();//定位到tr
        var html = get_html($(obj).attr('name'),$(obj).attr('role'));

        $(html).insertAfter(obj);
        $(obj).detach();
        $('.info').fadeOut(100);
    };
    //编辑保存用户
    var edit_save = function(){
        var obj=$(this).parent().parent();//定位到tr
        var name=$(obj).attr('name');
        var name_to=$(obj).find('#name').val();
        var role_to=$(obj).find('#role').val();
        var password_to=$(obj).find('#password').val();
        if (name_to=='' || role_to ==''){
            tips(LNG.not_null,'error');
            return false;
        }
        if (escape(name_to).indexOf("%u")>=0){
            tips('名称不能为中文！','warning');
            return false;
        }

        var password = '';
        if (password_to !='') password = '&password_to='+password_to;
        $.ajax({
            url:api+'edit&name='+name+'&name_to='+name_to+'&role_to='+role_to+password,
            dataType:'json',
            success:function(data){
                tips(data);
                if (data.code){
                    var html = get_html(name_to,role_to);
                    $(html).insertAfter(obj);
                    $(obj).detach();
                    $('.info').fadeOut(100);
                }
            }
        }); 
    };
    //删除用户
    var del = function(){
        var obj=$(this).parent().parent();//定位到tr
        var name=$(obj).attr('name');
        $.dialog({
            fixed: true,//不跟随页面滚动
            icon:'question',
            drag: true,//拖曳
            title:LNG.warning,
            content: LNG.if_remove+name+'<br/>'+LNG.member_remove_tips,
            ok:function() {
                $.ajax({
                    url:api+'del&name='+name,
                    dataType:'json',
                    async:false,
                    success:function(data){
                        tips(data);
                        if (data.code) $(obj).detach();
                    }
                }); 
            },
            cancle:true
        });
    };

    var bindEvent = function(){
        $('.member a.add').live('click',add);
        $('.member a.add_exit').live('click',add_exit);
        $('.member a.add_save').live('click',add_save);
        $('.member a.edit').live('click',edit);
        $('.member a.edit_save').live('click',edit_save);
        $('.member a.edit_exit').live('click',edit_exit);
        $('.member a.del').live('click',del);   
        $('.member a.edit_role').live('click',function(){
            var role = $(this).parent().parent().attr('role');
            if (role == ''){
                tips(LNG.group_already_remove,false);return;
            }
            Group.edit(role);
        });         
    };

    return{
        init:init,
        bindEvent:bindEvent
    }
});