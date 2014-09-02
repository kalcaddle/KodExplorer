define(function(require, exports) {
	var page;
	var bindEvent = function(){
		page = location.hash.split("#", 2)[1];
		if (!page) {page = 'all'}
		change(page);

		$('ul.setting li').hover(
			function(){	$(this).addClass('hover');},
			function(){	$(this).removeClass('hover');}
		).click(function(){
			page=$(this).attr('id');
			change(page);
		});
		
		//选择事件绑定
		$('.box .list').live(
			'hover',
			function(){	$(this).addClass('listhover');},
			function(){	$(this).toggleClass('listhover');}
		).live('click',function(){		
			//保存到服务器
			var geturl='index.php?setting/set&k='+type+'&v='+value;
			$.ajax({
				url:geturl,
				type:'json',
				success:function(data){
					tips(data.data,data.code);
				}
			});			
		});

		$('a.create_app').bind('click',function(){
			FrameCall.father('ui.path.pathOperate.appEdit','"","","root_add"');
		});	
		$('.app-list li .right a.button').live('click',function(){
			var data = json_decode($(this).parent().parent().attr('data'));
			var action = $(this).attr('action');
			switch(action){
				case 'preview':core.openApp(data);break;
				case 'add':
					FrameCall.father('get','G.this_path');
					var path = share.data('create_app_path');
					var filename = urlEncode(path+data.name);
					var url = './index.php?app/user_app&action=add&path='+filename;
					$.ajax({
						url:url,
						dataType:'json',
						type:'POST',
						data:'data='+urlEncode(json_encode(data)),
						error:core.ajaxError,
						success:function(data){
							tips(data.data,data.code);
							if (!data.code) return;
							FrameCall.father('ui.f5','');
						}
					});
					break;
				case 'edit':;
					FrameCall.father('ui.path.pathOperate.appEdit',
						"'"+json_encode(data)+"','','root_edit'");
					break;
				case 'del':
					$.ajax({
						url:'./index.php?app/del&name='+urlEncode(data.name),
						dataType:'json',
						error:core.ajaxError,
						success:function(data){
							tips(data.data,data.code);
							if (!data.code) return;
							change();
						}
					});					
					break;
				default:break;
			}
		});
	};
	var _html = function(data){
		var html = '';
		var root_action="<a class='button' action='edit' href='javascript:;'>编辑</a>\
						 <a class='button' action='del' href='javascript:;'>删除</a>";
		if (!G.is_root) {root_action='';}
		for (var i in data) {
			var icon = data[i].icon;
			if (icon.search(G.static_path)==-1
			 && icon.substring(0,4) !='http') {
				icon = G.static_path + 'images/app/' + icon;
			}
			html+="<li data='"+json_encode(data[i])+"'>\
				<a href='javascript:;' class='icon'><img src='"+icon+"'></a>\
				<p><span class='title'>"+data[i].name+"</span>\
				<span class='info'>"+data[i].desc+"</span></p>\
				<div class='right'>\
					<a class='button' action='preview' 'href=javascript:;'>预览</a>\
					<a class='button' action='add' href='javascript:;'>添加</a>\
				"+root_action+"</div>\
				<div style='clear:both;'></div>\
			</li>";
		}
		return html;
	}

	var change = function(group){
		if (group == undefined || group =='') {group = page;}
		window.location.href ='#'+group;
		$('.selected').removeClass('selected');
		$('ul.setting li#'+group).addClass('selected');
		$('.main').find('.h1').html($('.selected').html());

		var $content = $('.main .app-list');
		$.ajax({
			url:'./index.php?app/get&group='+group,
			dataType:'json',
			beforeSend:function (data){
			},
			success:function(data){
				$content.css('display','none')
					.html(_html(data.data)).fadeIn('fast');
			}
		});
	};

	// 对外提供的函数
	return{
		reload:change,
		init:bindEvent	
	};
});
