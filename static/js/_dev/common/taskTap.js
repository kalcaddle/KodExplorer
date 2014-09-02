define(function(require, exports) {
	var dialogs			= {};
	var dialog_focus_id = '';
	var animate_time	= 160;
	var _bindTab = function(){
		$('.task_tab .tab').die('mouseenter').live('mouseenter',function (e) {
			if (!$(this).hasClass('this')){
				$(this).addClass('hover');
			}
		}).die('click').live('click',function(){
			var id = $(this).attr('id');
			var dialog = art.dialog.list[id];
			var dom = $('.'+id);
			if (dom.css('visibility') == 'hidden'){
				dialog.display(true);
			}else if(dom.hasClass('aui_state_focus')){
				dialog.display(false);
			}else{
				dialog.zIndex();
			}
			
		}).die('mouseleave').live('mouseleave',function(){
			$(this).removeClass('hover');
		}).die('dblclick').live('dblclick',function(){
			//remove($(this).attr('id'));
		});
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
			current_animate_id;	//标签切换，当前动画所在的标签
		$('.task_tab .tab').die('mousedown').live('mousedown',function(e){
			$self = $(this);
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
			$tab_parent  = $('.task_tab');
			$tabs = $('.task_tab .tab');
			$(".tasktab-dragging").remove();
			$drag = $self.clone().addClass("tasktab-dragging").prependTo('body');
							
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
					if ($self.attr('id') == $(this).attr('id')) {
						return;//当前区域移动，没有超过左右过半
					}
					__change($(this).attr('id'),'left');
				}
				if (left > t_left-tab_width/2+tab_margin && left < t_left){
					if ($self.attr('id') == $(this).attr('id')) {
						return;//当前区域移动，没有超过左右过半
					}
					__change($(this).attr('id'),'right');
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
			$tabs = $('.task_tab .tab');
			
			var temp,width = $self.width();
			var $move = $('.task_tab #'+id);
			var	$insert = $self.clone(true).insertAfter($self)
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
				$tabs = $('.task_tab .tab');
			});
		};

		var __dragEnd = function(e){
			//if (!isDraging) return false;
			isDraging = false;
			isDragInit= false;
			startTime = 0;
			$('.dragMaskView').remove();
			if ($drag == undefined) return;
			box_left = $self.get(0).getBoundingClientRect().left;
			$drag.animate({left:box_left+'px'},animate_time,function(){
				$self.css('opacity',1);
				$(this).remove();						
			});
		};
	};

	var _resetWidth = function(action){
		var max_width	= 110;
		var reset_width = max_width;
		var max_width_all = max_width+12;		
		var $tabs		= $('.task_tab .tab');
		var full_width	= $('.task_tab .tabs').width()-50;
		var count		= $tabs.length;
		
		//不用变化的个数				
		var max_count = Math.floor(full_width/max_width_all);
		if (count > max_count) {
			reset_width = Math.floor(full_width/count)-12;
		}
		switch (action) {
			case 'add':
				$('.task_tab .tabs .this').css('width','0')
				.animate({'width':reset_width+'px'},animate_time);
			case 'close':
				$tabs.animate({width:reset_width+'px'},animate_time);
				break;
			case 'resize':
				$tabs.css('width',reset_width+'px');
				break;
			default:break;
		}
	}
	var _add = function(id,title){
		$('.task_tab').removeClass('hidden');
		var title_hover = title.replace(/<[^>]+>/g,"");
		var html_tab = '<div class="tab taskBarMenu" id="'+id+'" title="'+title_hover+'">'+title+'</div>';
		$(html_tab).insertBefore('.task_tab .last');
		_resetWidth('add');
		dialogs[id] = {id:id,name:name};
	};
	//选中
	var _focus = function(selectID) {
		//添加最初标签，或者标签不存在
		$('.task_tab .this').removeClass('this');
		$('.task_tab #'+selectID).addClass('this');
		dialog_focus_id = selectID;
	};
	//删除
	var _close = function(selectID) {
		delete dialogs[selectID];
		$('.task_tab #'+selectID).animate({width:0},animate_time,function(){
			$('.task_tab #'+selectID).remove();
			_resetWidth('close');
			if ($('.tabs .tab').length == 0) {
				$('.task_tab').addClass('hidden');
			}
		});
	};

	//----------------------------------------
	//交互只能完成基本功能，如果同时调用对话框，会形成死循环。
	return {
		add:_add,
		focus:_focus,
		close:_close,
		init:function(){
			var html = 
				'<div class="task_tab hidden"><div class="tabs">'+
				'<div class="last" style="clear:both;"></div></div></div>';
			$(html).appendTo('body');
			$(window).bind("resize",function(){
				_resetWidth('resize');
			});
			_bindTab();
			_bindDrag();
		}
	}
});
