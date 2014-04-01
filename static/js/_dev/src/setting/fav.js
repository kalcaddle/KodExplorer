define(function(require, exports) {
    var api = 'index.php?fav/';
    var init = function(setting){
        var favData;
        $.ajax({
            url:api+'get',
            dataType:'json',
            async:false,
            success:function(data){
                if (!data.code) {
                    tips(data);return;
                }
                favData= data.data;
            },
            error:function(){
                return false;
            }
        });
        var html="<tr class='title'>"+
                "<td class='name'>"+LNG.name+"<span>("+LNG.can_not_repeat+")</span></td>"+
                "<td class='path'>"+LNG.address+"<span>("+LNG.absolute_path+")</span></td>"+
                "<td class='action'>"+LNG.action+"</td>"+
                "</tr>";
        for (var i in favData){
            html+=
            "<tr class='favlist' name='"+favData[i]['name']+"' path='"+favData[i]['path']+"'>"+
            "   <td class='name'><input type='text' id='sname' value='"
                +favData[i]['name']+"' /></td>"+
            "   <td class='path'><input type='text' id='spath' value='"
                +favData[i]['path']+"' /></td>"+
            "   <td class='action'>"+
            "       <a href='javascript:void(0)' onclick='' class='button edit'>"+LNG.button_save_edit+"</a>"+
            "       <a href='javascript:void(0)' onclick='' class='button del'>"+LNG.button_del+"</a>"+
            "   </td>"+
            "</tr>";
        }
        $('table#list').html(html);
        if (setting.substring(0,4) == 'fav&') {//如果是添加收藏
            var name =  setting.split('&')[1].split('=')[1];
            var path =  setting.split('&')[2].split('=')[1];
            var htmltr= 
            "<tr class='favlist' name='' path=''>"+
            "   <td class='name'><input type='text' id='sname' value='"+urlDecode(name)+"' /></td>"+
            "   <td class='path'><input type='text' id='spath' value='"+urlDecode(path)+"' /></td>"+
            "   <td class='action'>"+
            "       <a href='javascript:void(0)' class='button addsave'>"+LNG.button_save+"</a>"+
            "       <a href='javascript:void(0)' class='button addexit'>"+LNG.button_cancle+"</a>"+
            "   </td>"+
            "</tr>";
            $(htmltr).insertAfter("table#list tr:last");
        }
    };

    //添加收藏记录，dom操作。
    var add = function(){
        var htmltr= 
        "<tr class='favlist' name='' path=''>"+
        "   <td class='name'><input type='text' id='sname' value='' /></td>"+
        "   <td class='path'><input type='text' id='spath' value='' /></td>"+
        "   <td class='action'>"+
        "       <a href='javascript:void(0)' class='button addsave'>"+LNG.button_save+"</a>"+
        "       <a href='javascript:void(0)' class='button addexit'>"+LNG.button_cancle+"</a>"+
        "   </td>"+
        "</tr>";
        $(htmltr).insertAfter("table#list tr:last");
    };
    var addEsc = function(){
        var obj=$(this).parent().parent();//定位到tr
        $(obj).detach();
    };
    //添加一条收藏记录，后保存
    var addSave = function(){
        var obj=$(this).parent().parent();//定位到tr
        var name=$(obj).find('#sname').val();
        var path=$(obj).find('#spath').val();
        if (name=='' || path ==''){
            tips(LNG.not_null,'error');
            return false;
        }
        $.ajax({
            url:api+'add&name='+name+'&path='+path,
            dataType:'json',
            success:function(data){
                tips(data);
                if (data.code){
                    $(obj).attr('name',name);
                    $(obj).attr('path',path);
                    var htmlaction=
                    "<a href='javascript:void(0)' class='button edit'>"+LNG.button_save_edit+"</a>&nbsp;"+
                    "<a href='javascript:void(0)' class='button del'>"+LNG.button_del+"</a>";
                    $(obj).find('td.action').html(htmlaction);
                    FrameCall.father('ui.tree.init','""');
                }
            }
        });
    };
    //编辑一条收藏记录
    var editSave = function(){
        var obj=$(this).parent().parent();//定位到tr
        var name=$(obj).attr('name');
        var name_to=$(obj).find('#sname').val();
        var path_to=$(obj).find('#spath').val();
        if (name_to=='' || path_to ==''){
            tips(LNG.not_null,'error');
            return false;
        }
        $.ajax({
            dataType:'json',
            url:api+'edit&name='+name+'&name_to='+name_to+'&path_to='+path_to,
            success:function(data){
                tips(data);
                if (data.code){
                    $(obj).attr('name',name_to);
                    FrameCall.father('ui.tree.init','""');
                }   
            }
        }); 
    };
    //删除一条收藏记录
    var del = function(){
        var obj=$(this).parent().parent();//定位到tr
        var name=$(obj).attr('name');
        $.ajax({
            url:api+'del&name='+name,
            dataType:'json',
            async:false,
            success:function(data){
                tips(data);
                if (data.code){
                    $(obj).detach();
                    FrameCall.father('ui.tree.init','""');
                }
            }
        }); 
    };

    var bindEvent = function(){
        $('.fav a.add').live('click',add);
        $('.fav a.addexit').live('click',addEsc);
        $('.fav a.addsave').live('click',addSave);
        $('.fav a.edit').live('click',editSave);
        $('.fav a.del').live('click',del);
    };

    return{
        init:init,
        bindEvent:bindEvent
    }
});


