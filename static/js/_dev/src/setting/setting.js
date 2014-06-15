define(function(require, exports) {
	var setting; //url后缀参数
	//主动修改	
	var setTheme = function(thistheme){
		core.setSkin(thistheme,'app_setting.css');
		FrameCall.father('ui.setTheme','"'+thistheme+'"');
	};
	//被动修改
	var setThemeSelf = function(thistheme){
		core.setSkin(thistheme,'app_setting.css');
	};
	var gotoPage = function (page){
		if (page == '' ||page==undefined) page = 'user';
		setting = page;
		if (page.substring(0,4) == 'fav&') page='fav';
		
		$('.selected').removeClass('selected');
		$('ul.setting li#'+page).addClass('selected');
		window.location.href ='#'+page;

		$.ajax({
			url:'./index.php?setting/slider&slider='+page,
			beforeSend:function (data){
				$('.main').html("<img src='./static/images/loading.gif'/>");
			},
			success:function(data){
				$('.main').css('display','none');
				$('.main').html(data);
				$('.main').fadeIn('fast');
				if (page=='fav') Fav.init(setting);	//收藏夹
				if (page=='member') Group.init();	//用户管理
				setting = page;
			}
		});
	};

	var bindEvent = function(){
		setting = location.hash.split("#", 2)[1];
		gotoPage(setting);
		$('ul.setting li').hover(
			function(){	$(this).addClass('hover');},
			function(){	$(this).toggleClass('hover');}
		).click(function(){
			setting=$(this).attr('id');
			gotoPage(setting);
		});;
		
		//选择事件绑定
		$('.box .list').live(
			'hover',
			function(){	$(this).addClass('listhover');},
			function(){	$(this).toggleClass('listhover');}
		).live('click',function(){
			var _self 	= $(this),
				_parent = _self.parent();
				type 	= _parent.attr('data-type');//设置参数
				value 	= _self.attr('data-value');
			_parent.find('.this').removeClass('this');
			_self.addClass('this');
			
			//对应相应动作
			switch(type){
				case 'wall':
					var image = G.static_path+'images/wall_page/'+value+'.jpg';
					FrameCall.father('ui.setWall','"'+image+'"');
					break;
				case 'theme':setTheme(value);break;
				case 'musictheme':
					FrameCall.father('CMPlayer.changeTheme','"music","'+value+'"');
					break;
				case 'movietheme':
					FrameCall.father('CMPlayer.changeTheme','"movie","'+value+'"');
					break;
				default:break;
			}
			//保存到服务器
			var geturl='index.php?setting/set&k='+type+'&v='+value;
			$.ajax({
				url:geturl,type:'json',
				success:function(data){
					tips(data);
				}
			});			
		});
	};

	// 设置子内容动作处理
	var tools = function (action){  		
		var page=$('.selected').attr('id');
		switch (page){
			case 'user'://修改密码
				var password_now=$('#password_now').val();
				var password_new=$('#password_new').val();
				if (password_new=='' || password_now=='') {
					tips(LNG.password_not_null,'error');
					break;
				}
				$.ajax({
					url:'index.php?user/changePassword&password_now='+password_now+'&password_new='+password_new,
					dataType:'json',
					success:function(data){
						tips(data);
						if (data.code) {
							window.top.location.href='./index.php?user/logout';
						}				
					}
				});
				break;
			case 'wall':
				var image = $('#wall_url').val();
				if (image=="") {
					tips(LNG.picture_can_not_null,'error');break;
				}
				FrameCall.father('ui.setWall','"'+image+'"');
				$('.box').find('.this').removeClass('this');
				var geturl='index.php?setting/set&k=wall&v='+urlEncode(image);
				$.ajax({
					url:geturl,type:'json',
					success:function(data){
						tips(data);						
					}
				});	
			default:break;
		}
	};
	// 对外提供的函数
	return{
		init:bindEvent,
		setGoto:gotoPage,
		tools:tools,
		setThemeSelf:setThemeSelf,
		setTheme:setTheme		
	};
});
