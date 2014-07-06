define(function(require, exports) {
	var isSelect		= false;	// 	是否多选状态
	var isDraging		= false;	//	是否拖拽状态
	var isCtrlSelect 	= false;	//  是否ctrl按住并选择

	//初始化选择
	var _initSelect = function(){
		_bindDragEvent();
		_bindEvent();
		_bindSelectEvent();
	};
	var _bindEvent = function(){
		//phone
		$(Config.FileBoxClass).die('touchstart').live('touchstart',function(event, phase, $target, data){
			if (!$(this).hasClass('select')){
				fileLight.clear();
				$(this).removeClass('select');
				$(this).addClass('select');
				fileLight.select();
			}else{
				ui.path.open();
			}
		});
		
		// 屏蔽对话框内操作
		$(Config.FileBoxClass).live('mouseenter',function (e) {
			if (isDraging) {//hover,hover 到文件夹时则添加目标选择类
				if ($(this).hasClass(Config.TypeFolderClass)
					&& !$(this).hasClass(Config.SelectClassName)) {					
					$(this).addClass('selectDragTemp');
				}
			}
			if(!isSelect && !isDraging){//框选时，由于ctrl重选时会反选有hover
				$(this).addClass(Config.HoverClassName);	
			}

			$(this).unbind("mousedown").mousedown(function(e){
				rightMenu.hidden();
				//已选中多个,点击可拖动以选中进行操作；点击未选中则清空
				if (!e.ctrlKey && !e.shiftKey && !$(this).hasClass(Config.SelectClassName)) {
					fileLight.clear();
					$(this).addClass(Config.SelectClassName);
					fileLight.select();
				}
				//鼠标右键,有选中，且当前即为选中
				if(e.which==3 && !$(this).hasClass(Config.SelectClassName)){
					fileLight.clear();
					$(this).addClass(Config.SelectClassName);
					fileLight.select();
				}
				if(e.ctrlKey) {//ctrl 跳跃选择
					if ($(this).hasClass(Config.SelectClassName)) {//已经选定 设置标志位弹起时取消选择
						isCtrlSelect = true;
					}else{
						fileLight.setMenu($(this));
						$(this).addClass(Config.SelectClassName);
					}
					fileLight.select();
				}
				if(e.shiftKey){//shift 连选
					var current = parseInt($(this).attr(Config.FileOrderAttr));
					if (Global.fileListSelectNum == 0) {
						_selectFromTo(0,current);
					}else{//有选中，则当前元素序号对比选中的最左和最右，
						var first = parseInt(Global.fileListSelect.first().attr(Config.FileOrderAttr));
						var last  = parseInt(Global.fileListSelect.last().attr(Config.FileOrderAttr));
						if (current < first) {
							//selectFromTo(current,last);
							_selectFromTo(current,first);
						}else if(current > last){
							//selectFromTo(first,current);
							_selectFromTo(last,current);
						}else if(current > first  && current < last){
							_selectFromTo(first,current);
						}
					}
				}	
			});
		}).die('mouseleave').live('mouseleave',function(){
			$(this).removeClass(Config.HoverClassName);
			$(this).removeClass('selectDragTemp');
		}).die('click').live('click',function (e) {
			stopPP(e);//再次绑定，防止冒泡到html的click事件
			if (!e.ctrlKey && !e.shiftKey) {
				fileLight.clear();
				$(this).addClass(Config.SelectClassName);
				fileLight.select();
			}
			if(e.ctrlKey && isCtrlSelect) {//ctrl 跳跃选择
				isCtrlSelect = false;
				fileLight.resumeMenu($(this));//恢复右键菜单id
				$(this).removeClass(Config.SelectClassName);
				fileLight.select();
			}
		});
		//双击事件
		$(Config.FileBoxClass).unbind('dblclick').live('dblclick',function(e){//双击打开
			stopPP(e);
			if (e.altKey){
				ui.path.pathInfo();
			}else {
				ui.path.open();
			}
		});	
		$(Config.FileBoxTittleClass).unbind('dblclick').live('dblclick',function (e) {
			ui.path.rname();//重命名
			stopPP(e);return false;
		});
	};

	// 拖拽——移动 select 
	var _bindDragEvent= function(){
		var delayTime = 100;
		var leftOffset= 50;
		var dragCopyOffset = 30;
		var topOffset = 80-Global.topbar_height;
		var $self;
		var startTime = 0;
		var hasStart  = false;
		var boxTop	  = 0;
		var boxLeft	  = 0;
		var screenHeight;
		var screenWidth;

		$(Config.FileBoxClass).unbind('mousedown').live('mousedown',function(e){
			if (Global.shiftKey) return;
			if (ui.isEdit()) return true;
			if (e.which != 1 || isSelect) return true;
			$self = $(this);
			__dragStart(e);
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
			rightMenu.hidden();
			isDraging = true;
			startTime = $.now();
			boxTop  = e.pageY;
			boxLeft = e.pageX;
			screenHeight = $(document).height();
			screenWidth  = $(document).width();
		};
		var __dragMove = function(e){
			if (!isDraging) return true;
			if (($.now() - startTime > delayTime)  && !hasStart) {
				__makeDragBox();
			}
			var x = (e.clientX >= screenWidth-50 ? screenWidth-50 : e.clientX);
			var y = (e.clientY >= screenHeight-50 ? screenHeight-50 : e.clientY);		
			x = (x <= 0 ? 0 : x);
			y = (y <= 0 ? 0 : y);
			x = x - leftOffset;
			y = y - topOffset;

			$('.draggable-dragging').css('left',x);
			$('.draggable-dragging').css('top',y);
			if(Global.isIE){//ie 无法事件穿透则遍历对比鼠标位置
				$('.'+Config.TypeFolderClass).each(function() {
			    	var mouseX = e.pageX;
			    	var mouseY = e.pageY;
			    	var offset = $(this).offset();
			    	var width = $(this).width();
			    	var height = $(this).height();		       
			    	if (mouseX > offset.left 
				       	&& mouseX < offset.left+width
				       	&& mouseY > offset.top
				       	&& mouseY < offset.top+height){
						$(this).addClass('selectDragTemp');
					}else{
						$(this).removeClass('selectDragTemp');
					}
			    });
			}
		};
		var __dragEnd = function(e){
			if (!isDraging) return false;
			isDraging = false;
			hasStart  = false;
			$('body').css('cursor','auto');
			$('.draggable-dragging').fadeOut(200,function(){
				$(this).remove();
			});

			var dragTo = G.this_path;
			var isDragCurrent = ($('.selectDragTemp').length == 0);
			if (Global.ctrlKey) {
				if (!isDragCurrent) {
					dragTo = dragTo+fileLight.name($('.selectDragTemp'));
				}
				if (Math.abs(e.pageX-boxLeft) > dragCopyOffset || 
					Math.abs(e.pageY-boxTop)  > dragCopyOffset) {
					ui.path.copyDrag(dragTo,isDragCurrent);
				}
			}else if (!isDragCurrent){
				dragTo = dragTo+fileLight.name($('.selectDragTemp'));
				ui.path.cuteDrag(dragTo);
			}
		};
		var __makeDragBox = function(){
			hasStart = true;
			$('body').css('cursor','move');	
			//移动时会挡住下面元素，导致hover不可用，
			//webkit firfox下css属性 pointer-events: none;鼠标事件穿透可解决。
			var type = $self.find('.ico').attr('filetype');
			$('<div class="file draggable-dragging">'
				+'<div class="drag_number">'+Global.fileListSelectNum+'</div>'
				+'<div class="ico" style="background:'+$self.find('.ico').css('background')+'"></div>'
			  +'</div>').appendTo('body');
		};
	};


	// 框选 select 
	var _bindSelectEvent = function(){
		var startX			= null;
		var startY			= null;
		var $selectDiv		= null;
		$(Config.BodyContent).unbind('mousedown').live('mousedown',function(e){
			if (ui.isEdit()) return true;
			if (isDraging || e.which != 1) return true;
			__dragSelectInit(e);
			if(this.setCapture){this.setCapture();}
			$(document).unbind('mousemove').mousemove(function(e) {__dragSelecting(e);});
			$(document).one('mouseup',function(e) {
				__dragSelectEnd(e);
				Global.isDragSelect = true;
				if(this.releaseCapture) {this.releaseCapture();}
			});
		})
		//创建模拟 选择框，框选开始
		var __dragSelectInit = function(e) {
			if ($(e.target).parent().hasClass(Config.FileBoxClassName)
				|| $(e.target).parent().parent().hasClass(Config.FileBoxClassName)
				|| $(e.target).hasClass('fix')
			) return;

			rightMenu.hidden();
			if (!(e.ctrlKey || e.shiftKey)) fileLight.clear();
			if ($(e.target).hasClass("ico")==false){// 编辑状态不可选
				if ($('#selContainer').length == 0) {
					$('<div id="selContainer"></div>').appendTo(Config.FileBoxSelector);
					$selectDiv = $('#selContainer');
				}				
				startX = e.pageX;
				startY = e.pageY-Global.topbar_height;
				isSelect = true;
			}
		};		
		//框选，鼠标移动中
		var __dragSelecting= function(e) {
			if (!isSelect) return true;		
			if ($selectDiv.css('display') =="none" ){
				$selectDiv.css('display','');
			}
			var mouseX = e.pageX;
			var mouseY = e.pageY-Global.topbar_height;
			$selectDiv.css({
				'left'	: Math.min(mouseX,  startX),
				'top'	: Math.min(mouseY,  startY),
				'width' : Math.abs(mouseX - startX),
				'height': Math.abs(mouseY - startY)
			});
			// ---------------- 框中选择关键算法 ---------------------
			var _l = $selectDiv.offset().left;
			var _t = $selectDiv.offset().top-Global.topbar_height;
			var _w = $selectDiv.width(), _h = $selectDiv.height();
			var totalNum = Global.fileListNum;

			for ( var i = 0; i < totalNum; i++) {
				var currentBox = Global.fileListAll[i];
				var $currentBox= $(Global.fileListAll[i]);
				var sl = currentBox.offsetWidth + currentBox.offsetLeft;
				var st = currentBox.offsetHeight + currentBox.offsetTop;
				if (sl > _l && st > _t
					&& currentBox.offsetLeft < _l + _w 
					&& currentBox.offsetTop < _t + _h) {
					if (!$currentBox.hasClass("selectDragTemp")) {
						if ($currentBox.hasClass("selectToggleClass")){
							continue;
						}
						if ($currentBox.hasClass(Config.SelectClassName)) {
							$currentBox.removeClass(Config.SelectClassName).addClass("selectToggleClass");
							fileLight.resumeMenu($currentBox);//恢复右键选择
							continue;
						}
						$currentBox.addClass("selectDragTemp");
					}							
				}else {
					$currentBox.removeClass("selectDragTemp");
					if ($currentBox.hasClass("selectToggleClass")) {
						$currentBox.addClass(Config.SelectClassName).removeClass("selectToggleClass");
					}
				}
			}
		};
		//框选结束
		var __dragSelectEnd = function(e) {
			if (!isSelect) return false;
			$selectDiv.css('display','none');
			$('.selectDragTemp').addClass(Config.SelectClassName).removeClass("selectDragTemp");
			$('.selectToggleClass').removeClass('selectToggleClass');//移除反选掉的div

			fileLight.select();
			isSelect = false;
			startX	 = null;
			startY	 = null;
		};
	};

	//获得选中文件【夹】相对位置的文件并返回
	var _getPosition = function(pose){
		var position = 0;						//选择的位置，默认为第一个
		var $list 	 = Global.fileListSelect;//
		var listNum  = Global.fileListSelectNum;
		var totalNum = Global.fileListNum;	//总数目		

		var __icon_position = function(){
			var rowNum		= Global.fileRowNum;	//一行的数目			
			if (Global.fileListSelectNum == 1) {//只有一个为选中状态
				var thisNumber = parseInt($list.attr(Config.FileOrderAttr));
				switch(pose){
					case "up":
						position = ((thisNumber <=0)? thisNumber:thisNumber - 1);
						break;
					case "left":
						position = ((thisNumber < rowNum)? 0:thisNumber-rowNum);
						break;
					case "down":
						position = ((thisNumber >=totalNum-1)? thisNumber:thisNumber + 1);
						break;
					case "right":
						position = ((thisNumber+rowNum >=totalNum-1)? totalNum-1:thisNumber+rowNum);
						break;
					default:break;
				}
			}else if(Global.fileListSelectNum > 1){	//多个已选择的文件
				var firstNumber = parseInt($list.first().attr(Config.FileOrderAttr));
				var lastNumber  = parseInt($list.last().attr(Config.FileOrderAttr));
				switch(pose){
					case "up":
						position = position = ((firstNumber <=0)? firstNumber:firstNumber - 1);
						break;
					case "left":((firstNumber <=rowNum)? firstNumber:firstNumber-rowNum);
						break;
					case "down":
						position = ((lastNumber >=totalNum)? lastNumber:lastNumber + 1);
						break;
					case "right":
						position = ((lastNumber+rowNum >=totalNum)? lastNumber:lastNumber+rowNum);
						break;
					default:break;
				}
			}
		}
		__icon_position();
		return Global.fileListAll.eq(position);
	};

	//设置选中
	var _setSelectAt = function(pos){
		var $select;
		switch (pos){
			case 'home':$select = Global.fileListAll.first();break;
			case 'end':	$select = Global.fileListAll.last(); break;		
			case 'left':
			case 'up':
			case 'right':
			case 'down':
				$select = _getPosition(pos);
				break;
			case 'all'://全选
				$select = Global.fileListAll;break;
			default:break;
		}
		fileLight.clear();
		$select.addClass(Config.SelectClassName);
		fileLight.select();		
	};

	//shift 选择，ctrl+上下左右选择
	var _selectFromTo = function(from,to){
		//console.log('from='+from+';to='+to);
		fileLight.clear();		
		for (var i = from; i <= to; i++) {
			$(Global.fileListAll[i]).addClass(Config.SelectClassName);
		}
		fileLight.select();
	};

	//设置选中相关函数===========================================
	var fileLight = {	
		init:function(){//初始化页面，缓存jquery所有文件对象		
			var $listAll = $(Config.FileBoxClass);
			$listAll.each(function(index){
				$(this).attr(Config.FileOrderAttr,index);
			});
			Global.fileListSelect = '';
			Global.fileListAll = $listAll;
			Global.fileListNum = $listAll.length;
			Global.fileListSelectNum = 0;
		},

		//选择处理
		select:function(){
			var $list = $(Config.SelectClass);
			Global.fileListSelect = $list;
			Global.fileListSelectNum = $list.length;
			if ($list.length > 1) {				
				fileLight.setMenu($list);
			}
		},
		setInView:function(){
			return;//desktop不处理
		},
		//获取文件&文件夹名字
		name:function($obj){
			return $obj.attr("data-name");
		},
		//获取文件&文件夹类型 folder为文件夹，其他为文件扩展名
		type:function($obj){			
			return $obj.find(".ico").attr("filetype");
		},
		
		//已有的情况下，选择则标记右键菜单标记
		setMenu:function($obj){
			$obj.removeClass("menufile menufolder menuApp menuDefault")
				.addClass("menuMore");
		},
		//反选，或者框选已经选择的则恢复右键菜单标记
		resumeMenu:function($obj){
			var menu = {"fileApp":"menuApp","fileBox":"menufile",
			"folderBox":"menufolder","systemBox":"menuDefault",};
			for(var key in menu){
				if ($obj.hasClass(key)) {
					$obj.removeClass("menuMore").addClass(menu[key]);
				}
			}
		},
		
		//获取选中的文件名	
		getAllName:function(){
			var arr_name = [];
			if (Global.fileListSelectNum == 0) return;
			var $list = Global.fileListSelect;
			$list.each(function(i){
				arr_name.push(fileLight.name($(this)));
			});
			return arr_name;
		},

		//清空选择，还原右键关联menu		
		clear:function(){
			if (Global.fileListSelectNum == 0) return;
			var $list = Global.fileListSelect;
			$list.removeClass(Config.SelectClassName);
			$list.each(function(){
				fileLight.resumeMenu($(this));
			});		
			Global.fileListSelect = '';
			Global.fileListSelectNum = 0;
		}
	}

	//对外提供调用方法
	return{
		init:_initSelect,
		fileLight:fileLight,
		selectPos:_setSelectAt
	}
});