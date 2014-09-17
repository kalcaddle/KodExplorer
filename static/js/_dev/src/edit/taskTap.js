define(function(require, exports) {
	var _bindTab = function(){
		$('.edit_tab .tab').live('mouseenter',function (e) {
			if (!$(this).hasClass('this')){
				$(this).addClass('hover');
			}
			$(this).unbind("mousedown").mousedown(function(e){
				if (!$(this).hasClass('this') && !$.nodeName(e.target,'A')){
					$(this).removeClass('hover').addClass('this');
					Editor.select($(this).attr('uuid'));
					//return false;
				}
			});
		}).die('mouseleave').live('mouseleave',function(){
			$(this).removeClass('hover');
		}).die('dblclick').live('dblclick',function(e){
			//双击关闭标签
			Editor.remove($(this).attr('uuid'));
			stopPP(e);
		});
		$('.edit_tab').die('dblclick').live('dblclick',function(e){
			Editor.add();stopPP(e);
		});
		$('.edit_tab .tab .close').live('click',function (e) {
			var id = $(this).parent().attr('uuid');
			Editor.remove(id);
		});
	};
	var _menu_hidden = function(){
		$('.context-menu-list').filter(':visible').trigger('contextmenu:hide');
	};
	var _bind_menu = function(){//右键绑定
		$('body').click(_menu_hidden).contextmenu(_menu_hidden);
		$.contextMenu({
			zIndex:9999,
			selector: '.edit_tab_menu', 
			items: {
				"close":{name:LNG.close,icon:"remove",accesskey: "d"},
				"close_right":{name:LNG.close_right,icon:"remove-sign",accesskey: "r"},
				"close_others":{name:LNG.close_others,icon:"remove-circle",accesskey: "o"},
				"sep1":"--------",
				"create":{name:LNG.newfile,icon:"plus",accesskey: "n"},
				"preview":{name:LNG.preview,icon:"globe",accesskey: "p"},
			},
			callback: function(key, options) {
				var $item =options.$trigger;
				var id = $item.attr('uuid');
				switch(key){                   
					case 'close':Editor.remove();break;                                
					case 'close_right':
						var index = $('.edit_tab .tabs .tab').index($item);
						$('.edit_tab .tabs .tab:gt('+index+')').each(function(){
							Editor.remove($(this).attr('uuid'));
						});
						break;
					case 'close_others':
						$('.edit_tab .tabs .tab').each(function(){
							var uuid = $(this).attr('uuid');
							if (uuid != id) {
								Editor.remove(uuid);
							}
						});
						break;
					case 'create':Editor.add();break;  
					case 'preview':Toolbar.doAction('preview');break;                        
					default:break;
				}
			}
		});
		$('.context-menu-root').addClass('fadein');
	};
		
	// 拖拽——移动
	var _bindDrag = function(){
		var $self,$tabs,$drag,
			isDraging = false,
			isDragInit= false,
			first_left= 0,
			box_left  = 0,              
			tab_width = 0,
			tab_margin= 0,
			tab_parent_width= 0,
			tab_parent_left = 0,
			current_animate_id; //标签切换，当前动画所在的标签
		$('.edit_tab .tab').die('mousedown').live('mousedown',function(e){
			if ($.nodeName(e.target,'A')) {
				return ;
			}else if($.nodeName(e.target,'SPAN')) {
				$self = $(e.target).parent();
			}else {
				$self = $(this);
			}
			isDraging = true;
			//事件 在 window之外操作，继续保持。
			if(this.setCapture) this.setCapture();
			$(document).mousemove(function(e) {__dragMove(e);});
			$(document).one('mouseup',function(e) {             
				__dragEnd(e);
				if(this.releaseCapture) {this.releaseCapture();}
				stopPP(e);return false;
			});
		});
		var __dragStart = function(e){
			isDragInit = true,
			first_left = e.pageX;
			$tab_parent  = $('.edit_tab');
			$tabs = $('.edit_tab .tab');
			$(".draggable-dragging").remove();
			$drag = $self.clone().addClass("draggable-dragging").prependTo('body');
							
			tab_margin= parseInt($tabs.css('margin-right'));
			tab_parent_width = $tab_parent.width();
			tab_parent_left  = $tab_parent.get(0).getBoundingClientRect().left;
			tab_parent_left  = tab_parent_left+$(window).scrollLeft();
			box_left = $self.get(0).getBoundingClientRect().left;
			tab_width = parseInt($tabs.css('width'));

			var top = $self.get(0).getBoundingClientRect().top-parseInt($self.css('margin-top'));
			var left = e.clientX - first_left + box_left;

			$('body').prepend("<div class='dragMaskView'></div>");
			$drag.css({'width':tab_width+'px','top':top,'left':left});
			$self.css('opacity',0);
		};
		var __dragMove = function(e){
			if (!isDraging) return;
			if(isDragInit==false){
				__dragStart(e);
			}

			var left = e.clientX - first_left + box_left;
			if (left < tab_parent_left 
				|| left > tab_parent_left+tab_parent_width-tab_width){
				return;// 拖出边界则不处理
			}
			$drag.css('left',left);
			$tabs.each(function(i) {
				var t_left = $(this).get(0).getBoundingClientRect().left;
				if (left > t_left && left < t_left+tab_width/2+tab_margin){
					if ($self.attr('uuid') == $(this).attr('uuid')) {
						return;//当前区域移动，没有超过左右过半
					}
					__change($(this).attr('uuid'),'left');
				}
				if (left > t_left-tab_width/2+tab_margin && left < t_left){
					if ($self.attr('uuid') == $(this).attr('uuid')) {
						return;//当前区域移动，没有超过左右过半
					}
					__change($(this).attr('uuid'),'right');
				}
			});
		};
		// 标签交换位置
		var __change  = function(id,change){
			//chrome标签类似动画，动画进行中，，且为当前标签动画则继续   
			if ($self.is(":animated") 
				&& current_animate_id == id){
				return;
			}
			//处理上次动画结束事物
			current_animate_id = id;
			$self.stop(true,true);
			$('.insertTemp').remove();
			$tabs = $('.edit_tab .tab');
			
			var temp,width = $self.width();
			var $move = $('.edit_tab .tab_'+id);
			var $insert = $self.clone(true).insertAfter($self)
				.css({'margin-right':'0px','border':'none'}).addClass('insertTemp');

			if (change == 'left') {
				$self.after($move).css('width','0px');              
			}else{
				$self.before($move).css('width','0px');
				$move.before($insert);
			}                   
			$self.animate({'width':width+'px'},animate_time);
			$insert.animate({'width':'0px'},animate_time,function(){
				$(this).remove();
				$tabs = $('.edit_tab .tab');
			});
		};

		var __dragEnd = function(e){
			//if (!isDraging) return false;
			isDraging = false;
			isDragInit= false;
			startTime = 0;
			$('.dragMaskView').remove();
			
			 // 点击事件回调会影响两个事件：选择，和拖拽弹起，
			 //此处后执行，设置需要再次设置焦点
			//Editor.current().focus();
			if ($drag == undefined) return;

			box_left = $self.get(0).getBoundingClientRect().left;
			$drag.animate({left:box_left+'px'},animate_time,function(){
				$self.css('opacity',1);
				$(this).remove();                       
			});
		};
	};

	var resetWidth = function(action,dom,selectID){
		var time = animate_time*1.5;
		var max_width   = 122;
		var reset_width = max_width;
		var $tabs       = $('.edit_tab .tab');
		var full_width  = $('.edit_tab .tabs').width()-4;
		var margin      = parseInt($tabs.css('margin-right')) + parseInt($tabs.css('border-right'));
		var add_width   = parseInt($('.edit_tab .add').outerWidth())+margin*2;
		var count       = $tabs.length; 
		//不用变化的个数
		var max_count = Math.floor((full_width-add_width)/(max_width+margin));
		if (count > max_count) {
			reset_width = Math.floor((full_width - add_width)/count) - margin;
		}
		switch (action) {
			case 'add':
				$('.edit_tab .tabs .this').css({'margin-top':'30px','width':reset_width})
				.animate({'margin-top':'0px'},time);
				$tabs.animate({width:reset_width+'px'},time);
				break;
			case 'remove':
				if (selectID!=undefined) Editor.select(selectID);
				dom.animate({'width':'0','margin-top':'+=30'},time,function(){
					dom.remove();
				});
				$tabs.animate({width:reset_width+'px'},time);
				break;
			case 'resize':
				$tabs.css('width',reset_width+'px');
				break;
			default:break;
		}
	}

	return {
		rightMenu:{
			hidden:_menu_hidden
		},
		resetWidth:resetWidth,
		init:function(){
			$('body').live("resize",function(){
				resetWidth('resize');
			});
			_bindTab();
			_bindDrag();
			_bind_menu();

			//ctrl s bind
			Mousetrap.bind(['ctrl+s', 'command+s'],function(e) {
				e.preventDefault();e.returnvalue = false;
				Editor.save();
			});
		}
	};
});
