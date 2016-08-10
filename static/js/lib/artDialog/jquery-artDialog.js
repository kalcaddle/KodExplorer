/*!
 * artDialog 4.1.7
 * Date: 2013-03-03 08:04
 * http://code.google.com/p/artdialog/
 * (c) 2009-2012 TangBin, http://www.planeArt.cn
 *
 * This is licensed under the GNU LGPL, version 2.1 or later.
 * For details, see: http://creativecommons.org/licenses/LGPL/2.1/
 */


//icon-remove

// change by warlee
//------------------------------------------------
// 对话框模块
//------------------------------------------------
var dialogList = {//加入人物列表
	add:function(id,title){
		try{
			TaskTap.add(id,title);
		} catch(e) {};
	},
	focus:function(id){
		try{
			TaskTap.focus(id);
		} catch(e) {};
	},
	close:function(id){
		try{
			TaskTap.close(id);
		} catch(e) {};
	}
};
//rightMenu.hidden();


;(function ($, window, undefined) {
$.noop = $.noop || function () {}; // jQuery 1.3.2

//var _box, _thisScript,_path,
var _thisScript,_path,
	_count = 0,
	_$window = $(window),
	_$document = $(document),
	_$html = $('html'),
	_elem = document.documentElement,
	_isMobile = 'createTouch' in document && !('onmousemove' in _elem)
		|| /(iPhone|iPad|iPod)/i.test(navigator.userAgent),
	_expando = 'artDialog' + + new Date,
	_titleBarHeight = 0;

var artDialog = function (config, ok, cancel) {
	config = config || {};
	if (typeof config === 'string' || config.nodeType === 1) {
		config = {content: config, fixed: !_isMobile};
	};

	var api,
		defaults = artDialog.defaults,
		elem = config.follow = this.nodeType === 1 && this || config.follow;

	// 合并默认配置
	for (var i in defaults) {
		if (config[i] === undefined) config[i] = defaults[i];
	};

	// 兼容v4.1.0之前的参数，未来版本将删除此
	$.each({ok:"yesFn",cancel:"noFn",close:"closeFn",init:"initFn",okVal:"yesText",cancelVal:"noText"},
	function(i,o){config[i]=config[i]!==undefined?config[i]:config[o]});

	// 返回跟随模式或重复定义的ID
	if (typeof elem === 'string') elem = $(elem)[0];
	config.id = elem && elem[_expando + 'follow'] || config.id || _expando + _count;
	api = artDialog.list[config.id];

	//被意外删除dom
	if(api && $('.'+config.id).length==0){
		//_box = null;
		api = null;
		delete artDialog.list[config.id];
		dialogList.close(config.id);
	}

	if (elem && api) return api.follow(elem).zIndex().focus();
	if (api) return api.zIndex().focus().display(true);

	// 目前主流移动设备对fixed支持不好
	if (_isMobile) config.fixed = false;

	// 按钮队列
	if (!$.isArray(config.button)) {
		config.button = config.button ? [config.button] : [];
	};
	if (ok !== undefined) config.ok = ok;
	if (cancel !== undefined) config.cancel = cancel;
	config.ok && config.button.push({
		name: config.okVal,
		callback: config.ok,
		focus: true
	});
	config.cancel && config.button.push({
		name: config.cancelVal,
		callback: config.cancel
	});

	// zIndex全局配置
	artDialog.defaults.zIndex = config.zIndex;
	_count ++;

	//添加到任务栏
	if (config && config.hasOwnProperty('title') && config['title'] !== false){
		config.title = '<img draggable="false" src="'+config.ico+'" />'+config.title;
		if (_count>=1) dialogList.add(config.id,config.title);
	}

	var dialog = new artDialog.fn._init(config);
	artDialog.list[config.id] = dialog;
	return dialog;
};

artDialog.fn = artDialog.prototype = {
	version: '4.1.7',
	closed: true,
	_init: function (config) {
		var that = this, DOM,
			icon = config.icon,
			iconBg = icon && {'background-image': 'url(\'' + config.path + '/icons/' + icon + '.png\')','background-repeat':'no-repeat','background-position':'center'};
        that.closed = false;
		that.config = config;
		//that.DOM = DOM = that.DOM || that._getDOM();
		that.DOM = DOM = that._getDOM();

		//是否可以调节大小 对应样式处理
		//可以调节窗口大小——那么对应可以最大最小化
		if (config.resize && config.title != false) {
			DOM.wrap.addClass('dialog-can-resize');
		}

		//没有title
		if(!config.title){
			//DOM.wrap.find('.dialogShow').removeClass('dialogShow');
		}
		//是否可以调节大小 对应样式处理
		if (config.simple && config.title != false) {
			DOM.wrap.addClass('dialog-simple');
			DOM.wrap.die('mouseenter').live('mouseenter',function(){
				$(this).find('.aui_outer').addClass('dialog_mouse_in');
			}).live('mouseleave',function(){
				$(this).find('.aui_outer').removeClass('dialog_mouse_in');
			});
		}
		DOM.wrap.find('.dialog_menu').attr('id',config.id);
		DOM.wrap.addClass(config.id);
		DOM.close[config.cancel === false ? 'hide' : 'show']();
		DOM.icon[0].style.display = icon ? '' : 'none';
		DOM.iconBg.css(iconBg || {background: 'none'});
		DOM.title.css('cursor', config.drag ? 'move' : 'auto');
		DOM.content.css('padding', config.padding);

		that[config.show ? 'show' : 'hide'](true)
		that.button(config.button)
		.title(config.title)
		.content(config.content, true)
		.size(config.width, config.height)
		.time(config.time);

		config.follow
		? that.follow(config.follow)
		: that.position(config.left, config.top);

		if($('.'+config.id).length==0){
			dialogList.close(config.id);
			that.close();
			return;
		}
		that.zIndex().focus();
		config.lock && that.lock();

		//初始化设定高度；避免拖出可视区导致变形问题
		if($(DOM.wrap).get(0).style.width == 'auto'){
			$(DOM.wrap).css('width',DOM.wrap.outerWidth());
		}
		
		that._addEvent();
		config.init && config.init.call(that, window);
		_titleBarHeight = DOM.title.css('height');
		_titleBarHeight = _titleBarHeight.replace('px','');
		$(DOM.wrap).find('iframe').focus();
		return that;
	},


	/**
	 * 设置内容
	 * @param	{String, HTMLElement}	内容 (可选)
	 * @return	{this, HTMLElement}		如果无参数则返回内容容器DOM对象
	 */
	content: function (msg) {
		var prev, next, parent, display,
			that = this,
			DOM = that.DOM,
			wrap = DOM.wrap[0],
			width = wrap.offsetWidth,
			height = wrap.offsetHeight,
			left = parseInt(wrap.style.left),
			top = parseInt(wrap.style.top),
			cssWidth = wrap.style.width,
			$content = DOM.content,
			content = $content[0];

		that._elemBack && that._elemBack();
		//wrap.style.width = 'auto';

		if (msg === undefined) return content;
		if (typeof msg === 'string') {
			$content.html(msg)
			$frame = $content.find('iframe');
			if($frame.length>0){
				$content.append('<div class="aui_loading"><span>loading..</span></div>');
				$frame.css('display','none');
				$frame.load(function(){
					$content.find('.aui_loading').fadeOut(600);
					that.reset_title_length();
				});
				$frame.fadeIn(300);
			}
		} else if (msg && msg.nodeType === 1) {
			// 让传入的元素在对话框关闭后可以返回到原来的地方
			display = msg.style.display;
			prev = msg.previousSibling;
			next = msg.nextSibling;
			parent = msg.parentNode;
			that._elemBack = function () {
				if (prev && prev.parentNode) {
					prev.parentNode.insertBefore(msg, prev.nextSibling);
				} else if (next && next.parentNode) {
					next.parentNode.insertBefore(msg, next);
				} else if (parent) {
					parent.appendChild(msg);
				};
				msg.style.display = display;
				that._elemBack = null;
			};

			$content.html('');
			content.appendChild(msg);
			msg.style.display = 'block';
		};

		// 新增内容后调整位置
		if (!arguments[1]) {
			if (that.config.follow) {
				that.follow(that.config.follow);
			} else {
				width = wrap.offsetWidth - width;
				height = wrap.offsetHeight - height;
				left = left - width / 2;
				top = top - height / 2;
				wrap.style.left = Math.max(left, 0) + 'px';
				wrap.style.top = Math.max(top, 0) + 'px';
			};
			if (cssWidth && cssWidth !== 'auto') {
				wrap.style.width = wrap.offsetWidth + 'px';
			};
			that._autoPositionType();
		};

		that._runScript(content);
		return that;
	},

	/**
	 * 设置标题
	 * @param	{String, Boolean}	标题内容. 为false则隐藏标题栏
	 * @return	{this, HTMLElement}	如果无参数则返回内容器DOM对象
	 */
	title: function (text) {
		var DOM = this.DOM,
			wrap = DOM.wrap,
			title = DOM.title,
			className = 'aui_state_noTitle';

		if (text === undefined) return title[0];
		if (text === false) {
			title.hide().html('');
			wrap.addClass(className);
		} else {
			//title.show().html("<span>"+text+"</span>" || '');
			wrap.removeClass(className);
			title.show().html(text || '');
			title.data('data-title',text);
			var that = this;
			setTimeout(function(){
				that.reset_title_length();
			},50);
		};
		return this;
	},

	string_width:function(str,font_size){
	    var span = $("#__getwidth");
	    if (span.length==0) {
	    	$("<span id='__getwidth'></span>").appendTo('body');
	    	span = $("#__getwidth");
	    	span.css({'visibility':'hidden','whiteSpace':'nowrap'});
	    }
	    span.html(str);
	    span.css({'font-size':font_size+'px'});
	    return span.width();
	},
	reset_title_length:function(){
		if(!this.config.resize){
			return;
		}
		var DOM = this.DOM,
			title = DOM.title,
			font_size = parseInt(title.css("font-size")),
			title_str = title.data('data-title'),
			default_width = 200,	//其他占用
			max_width = title.width();
		var str_width = this.string_width(title_str,font_size);
		if( str_width<max_width-default_width || str_width< 150){
			title.html(title_str);
			return;
		}

		//截取title头部iocn
		var str_pre='';
		if(title_str.substr(0,4)=="<img"){
			var point = title_str.indexOf('>')+1;
			str_pre = title_str.substr(0,point);
			title_str = title_str.substr(point)
		}
		while(this.string_width(title_str,font_size)>max_width-default_width){
			title_str= title_str.substr(1);
			if(title_str.length<10){
				break;
			}
		}
		if($(title).text() == title_str){
			return;
		}
		title.html(str_pre+"..."+title_str);
	},

	/**
	 * 位置(相对于可视区域)
	 * @param	{Number, String}
	 * @param	{Number, String}
	 */
	position: function (left, top) {
		var that = this,
			config = that.config,
			wrap = that.DOM.wrap[0],
			isFixed = config.fixed,
			docLeft = _$document.scrollLeft(),
			docTop = _$document.scrollTop(),
			dl = isFixed ? 0 : docLeft,
			dt = isFixed ? 0 : docTop,
			ww = _$window.width(),
			wh = _$window.height(),
			ow = wrap.offsetWidth,
			oh = wrap.offsetHeight,
			style = wrap.style;

		if (left || left === 0) {
			that._left = left.toString().indexOf('%') !== -1 ? left : null;
			left = that._toNumber(left, ww - ow);

			if (typeof left === 'number') {
				left += docLeft;
				style.left = Math.max(left, dl) + 'px';
			} else if (typeof left === 'string') {
				style.left = left;
			};
		};

		if (top || top === 0) {
			that._top = top.toString().indexOf('%') !== -1 ? top : null;
			top = that._toNumber(top, wh - oh);

			if (typeof top === 'number') {
				top += docTop;
				style.top = Math.max(top, dt) + 'px';
			} else if (typeof top === 'string') {
				style.top = top;
			};
		};

		if (left !== undefined && top !== undefined) {
			that._follow = null;
			that._autoPositionType();
		};

		return that;
	},

	/**
	 *	尺寸
	 *	@param	{Number, String}	宽度
	 *	@param	{Number, String}	高度
	 */
	size: function (width, height) {
		var maxWidth, maxHeight, scaleWidth, scaleHeight,
			that = this,
			config = that.config,
			DOM = that.DOM,
			wrap = DOM.wrap,
			main = DOM.main,
			wrapStyle = wrap[0].style,
			style = main[0].style;

		if (width) {
			that._width = width.toString().indexOf('%') !== -1 ? width : null;
			maxWidth = _$window.width() - wrap[0].offsetWidth + main[0].offsetWidth;
			scaleWidth = that._toNumber(width, maxWidth);
			width = scaleWidth;

			if (typeof width === 'number') {
				wrapStyle.width = 'auto';
				style.width = Math.max(that.config.minWidth, width) + 'px';
				wrapStyle.width = wrap[0].offsetWidth + 'px'; // 防止未定义宽度的表格遇到浏览器右边边界伸缩
			} else if (typeof width === 'string') {
				style.width = width;
				width === 'auto' && wrap.css('width', 'auto');
			};
		};

		if (height) {
			that._height = height.toString().indexOf('%') !== -1 ? height : null;
			maxHeight = _$window.height() - wrap[0].offsetHeight + main[0].offsetHeight;
			scaleHeight = that._toNumber(height, maxHeight);
			height = scaleHeight;

			if (typeof height === 'number') {
				style.height = Math.max(that.config.minHeight, height) + 'px';
			} else if (typeof height === 'string') {
				style.height = height;
			};
		};
		return that;
	},

	/**
	 * 跟随元素
	 * @param	{HTMLElement, String}
	 */
	follow: function (elem) {
		var $elem, that = this, config = that.config;

		if (typeof elem === 'string' || elem && elem.nodeType === 1) {
			$elem = $(elem);
			elem = $elem[0];
		};

		// 隐藏元素不可用
		if (!elem || !elem.offsetWidth && !elem.offsetHeight) {
			return that.position(that._left, that._top);
		};

		var expando = _expando + 'follow',
			winWidth = _$window.width(),
			winHeight = _$window.height(),
			docLeft =  _$document.scrollLeft(),
			docTop = _$document.scrollTop(),
			offset = $elem.offset(),
			width = elem.offsetWidth,
			height = elem.offsetHeight,
			isFixed = config.fixed,
			left = isFixed ? offset.left - docLeft : offset.left,
			top = isFixed ? offset.top - docTop : offset.top,
			wrap = that.DOM.wrap[0],
			style = wrap.style,
			wrapWidth = wrap.offsetWidth,
			wrapHeight = wrap.offsetHeight,
			setLeft = left - (wrapWidth - width) / 2,
			setTop = top + height,
			dl = isFixed ? 0 : docLeft,
			dt = isFixed ? 0 : docTop;

		setLeft = setLeft < dl ? left :
		(setLeft + wrapWidth > winWidth) && (left - wrapWidth > dl)
		? left - wrapWidth + width
		: setLeft;

		setTop = (setTop + wrapHeight > winHeight + dt)
		&& (top - wrapHeight > dt)
		? top - wrapHeight
		: setTop;

		style.left = setLeft + 'px';
		style.top = setTop + 'px';

		that._follow && that._follow.removeAttribute(expando);
		that._follow = elem;
		elem[expando] = config.id;
		that._autoPositionType();
		return that;
	},

	/**
	 * 自定义按钮
	 * @example
		button({
			name: 'login',
			callback: function () {},
			disabled: false,
			focus: true
		}, .., ..)
	 */
	button: function () {
		var that = this,
			ags = arguments,
			DOM = that.DOM,
			buttons = DOM.buttons,
			elem = buttons[0],
			strongButton = 'aui_state_highlight',
			listeners = that._listeners = that._listeners || {},
			list = $.isArray(ags[0]) ? ags[0] : [].slice.call(ags);

		if (ags[0] === undefined) return elem;
		$.each(list, function (i, val) {
			var name = val.name,
				isNewButton = !listeners[name],
				button = !isNewButton ?
					listeners[name].elem :
					document.createElement('button');

			if (!listeners[name]) listeners[name] = {};
			if (val.callback) listeners[name].callback = val.callback;
			if (val.className) button.className = val.className;
			if (val.focus) {
				that._focus && that._focus.removeClass(strongButton);
				that._focus = $(button).addClass(strongButton);
				that.focus();
			};

			// Internet Explorer 的默认类型是 "button"，
			// 而其他浏览器中（包括 W3C 规范）的默认值是 "submit"
			// @see http://www.w3school.com.cn/tags/att_button_type.asp
			button.setAttribute('type', 'button');

			button[_expando + 'callback'] = name;
			button.disabled = !!val.disabled;

			if (isNewButton) {
				button.innerHTML = name;
				listeners[name].elem = button;
				elem.appendChild(button);
			};
		});

		buttons[0].style.display = list.length ? '' : 'none';
		return that;
	},

	//控制隐藏和显示
	display:function(type){
		var $wrap = this.DOM.wrap;
		var that = this;
		if(type == undefined) type = true;//默认显示
		if (type){//显示
			that.reset_title_length();
			this.zIndex();
			if ($wrap.css('visibility') != 'hidden') return this;
			$wrap
				.css({visibility:'visible',left:$wrap.attr("data-left")})
				.addClass('animated dialogDisplayShow')
				.stop(true,true)
				.animate({opacity:1},{duration:200,complete:function(){
					$wrap.removeClass('animated').removeClass('dialogDisplayShow');
					that.reset_title_length();
				}});
		}else{//隐藏  left+10000；
			if ($wrap.css('visibility') == 'hidden') return this;
			$wrap
				.attr('data-left',$wrap.css("left"))
				.addClass('animated dialogDisplayHide')
				.stop(true,true)
				.animate({opacity:0.01},{duration:200,complete:function(){
					$wrap.removeClass('animated').removeClass('dialogDisplayHide');
					$wrap.css({visibility:'hidden',left:'=10000'});
				}});
			this.resetIndex();
		}
		return this;
	},
	//重置焦点对话框
	resetIndex:function(){
		// 定位当前焦点frame
		var dialog_index = 0;
		var dialog_this = '';
		for (var i in artDialog.list) {
			if (typeof(artDialog.list[i]['config']) == "undefined"){
				delete artDialog.list[i];
				continue;
			}
			if (artDialog.list[i].DOM.wrap.css('visibility') == 'hidden') continue;

			var this_index =artDialog.list[i]['config']['zIndex'];
			if (dialog_index < this_index){
				dialog_index = this_index;
				dialog_this = artDialog.list[i];
			}
		}
		if (dialog_this !='') {
			dialog_this.zIndex();
		}
	},

	has_frame:function(){
		var f = this.DOM.wrap.find('iframe');
		if (f.length>=1) {
			return true;
		}else{
			return false;
		}
	},
	refresh:function(){
		var frame = this.DOM.wrap.find('iframe');
		frame.attr('src',frame.attr('src'));
		return this;
	},
	open_window:function(){
		var frame = this.DOM.wrap.find('iframe');
		window.open(frame.attr('src'));
		return this;
	},
	/** 显示对话框 */
	show: function () {
		this.DOM.wrap.show();
		!arguments[0] && this._lockMaskWrap && this._lockMaskWrap.show();
		return this;
	},

	/** 隐藏对话框 */
	hide: function () {
		this.DOM.wrap.hide();
		!arguments[0] && this._lockMaskWrap && this._lockMaskWrap.hide();
		return this;
	},

	/** 关闭对话框 */
	close: function () {
		if (this.closed) return this;
		var that = this,
			DOM = that.DOM,
			wrap = DOM.wrap,
			list = artDialog.list,
			fn = that.config.close,
			follow = that.config.follow;

		that.time();
		that.unlock();
		if (that.config && that.config['title'] !== false){
			dialogList.close(that.config.id);
		}
		that.config && (delete list[that.config['id']]);
		wrap.addClass('animated dialogClose').animate(
			{bottom:0},{duration:250,complete:function(){
			if (typeof fn === 'function' && fn.call(that, window) === false) {//iframe关闭调用
				//return that;//执行动画
			}
			// 置空内容
			that._elemBack && that._elemBack();
			wrap[0].className = wrap[0].style.cssText = '';
			DOM.title.html('');
			DOM.content.html('');
			DOM.buttons.html('');

			if (artDialog.focus === that) artDialog.focus = null;
			if (follow) follow.removeAttribute(_expando + 'follow');

			that._removeEvent();
			that.hide(true)._setAbsolute();
			// 清空除this.DOM之外临时对象，恢复到初始状态，以便使用单例模式
			for (var i in that) {
				if (that.hasOwnProperty(i) && i !== 'DOM') delete that[i];
			};
			wrap.remove();
			that.resetIndex();
			return that;
		}});
	},

	/**
	 * 定时关闭
	 * @param	{Number}	单位为秒, 无参数则停止计时器
	 */
	time: function (second) {
		var that = this,
			cancel = that.config.cancelVal,
			timer = that._timer;

		timer && clearTimeout(timer);

		if (second) {
			that._timer = setTimeout(function(){
				that._click(cancel);
			}, 1000 * second);
		};
		return that;
	},

	/** 设置焦点 */
	focus: function () {
		try {
			if (this.config.focus) {
				var elem = this._focus && this._focus[0] || this.DOM.close[0];
				elem && elem.focus();
			}
		} catch (e) {}; // IE对不可见元素设置焦点会报错
		return this;
	},

	/** 置顶对话框 */
	zIndex: function () {
		var that = this,
			DOM = that.DOM,
			wrap = DOM.wrap,
			top = artDialog.focus,
			index = artDialog.defaults.zIndex ++;

		//if (that.config.resize) TODO
		if($('.'+that.config.id).length==0){//找不到了
			this.close();
			return;
		}
		if (that.config["title"] !== false ){
			dialogList.focus(that.config.id);
		}

		// 设置叠加高度
		wrap.css('zIndex', index);
		that._lockMask && that._lockMask.css('zIndex', index - 1);

		// 设置最高层的样式
		top && top.DOM.wrap.removeClass('aui_state_focus');
		artDialog.focus = that;
		wrap.addClass('aui_state_focus');
		return that;
	},

	/** 设置屏锁 */
	lock: function () {
		if (this._lock) return this;

		var that = this,
			index = artDialog.defaults.zIndex - 1,
			wrap = that.DOM.wrap,
			config = that.config,
			docWidth = _$document.width(),
			docHeight = _$document.height(),
			lockMaskWrap = that._lockMaskWrap || $(document.body.appendChild(document.createElement('div'))),
			lockMask = that._lockMask || $(lockMaskWrap[0].appendChild(document.createElement('div'))),
			domTxt = '(document).documentElement',
			sizeCss = _isMobile ? 'width:' + docWidth + 'px;height:' + docHeight
				+ 'px' : 'width:100%;height:100%';

		that.zIndex();
		wrap.addClass('aui_state_lock');
		lockMaskWrap[0].style.cssText = sizeCss + ';position:fixed;z-index:'
			+ index + ';top:0;left:0;overflow:hidden;';
		lockMask[0].style.cssText = 'height:100%;background:' + config.background
			+ ';filter:alpha(opacity=0);opacity:0';

		lockMask.stop();
		lockMask.bind('click', function () {
			that._reset();
		}).bind('dblclick', function () {
			that._click(that.config.cancelVal);
		});

		if (config.duration === 0) {
			lockMask.css({opacity: config.opacity});
		} else {
			lockMask.animate({opacity: config.opacity}, config.duration);
		};

		that._lockMaskWrap = lockMaskWrap;
		that._lockMask = lockMask;

		that._lock = true;
		return that;
	},

	/** 解开屏锁 */
	unlock: function () {
		var that = this,
			lockMaskWrap = that._lockMaskWrap,
			lockMask = that._lockMask;

		if (!that._lock) return that;
		var style = lockMaskWrap[0].style;
		var un = function () {
			style.cssText = 'display:none';
			//_box && lockMaskWrap.remove();
			lockMaskWrap.remove();
		};

		lockMask.stop().unbind();
		that.DOM.wrap.removeClass('aui_state_lock');
		if (!that.config.duration) {// 取消动画，快速关闭
			un();
		} else {
			lockMask.animate({opacity: 0}, that.config.duration, un);
		};

		that._lock = false;
		return that;
	},

	// 获取元素
	_getDOM: function () {
		var wrap = document.createElement('div'),
			body = document.body;

		if(this.config.parentAt && $(this.config.parentAt).length!=0){
			body = $(this.config.parentAt).get(0);
		}
		wrap.style.cssText = 'position:absolute;left:0;top:0';
		wrap.innerHTML = artDialog._templates;
		body.insertBefore(wrap, body.firstChild);

		var name, i = 0,
			DOM = {wrap: $(wrap)},
			els = wrap.getElementsByTagName('*'),
			elsLen = els.length;

		for (; i < elsLen; i ++) {
			name = els[i].className.split('aui_')[1];
			if (name) DOM[name] = $(els[i]);
		};
		return DOM;
	},

	// px与%单位转换成数值 (百分比单位按照最大值换算)
	// 其他的单位返回原值
	_toNumber: function (thisValue, maxValue) {
		if (!thisValue && thisValue !== 0 || typeof thisValue === 'number') {
			return thisValue;
		};

		var last = thisValue.length - 1;
		if (thisValue.lastIndexOf('px') === last) {
			thisValue = parseInt(thisValue);
		} else if (thisValue.lastIndexOf('%') === last) {
			thisValue = parseInt(maxValue * thisValue.split('%')[0] / 100);
		};

		return thisValue;
	},

	// 解析HTML片段中自定义类型脚本，其this指向artDialog内部
	// <script type="text/dialog">/* [code] */</script>
	_runScript: function (elem) {
		var fun, i = 0, n = 0,
			tags = elem.getElementsByTagName('script'),
			length = tags.length,
			script = [];

		for (; i < length; i ++) {
			if (tags[i].type === 'text/dialog') {
				script[n] = tags[i].innerHTML;
				n ++;
			};
		};

		if (script.length) {
			script = script.join('');
			fun = new Function(script);
			fun.call(this);
		};
	},

	// 自动切换定位类型
	_autoPositionType: function () {
		this[this.config.fixed ? '_setFixed' : '_setAbsolute']();/////////////
	},


	// 设置静止定位
	// IE6 Fixed @see: http://www.planeart.cn/?p=877
	_setFixed: (function () {
		$(function () {
			var bg = 'backgroundAttachment';
			if (_$html.css(bg) !== 'fixed' && $('body').css(bg) !== 'fixed') {
				_$html.css({
					zoom: 1,// 避免偶尔出现body背景图片异常的情况
					backgroundAttachment: 'fixed'
				});
			};
		});
		return function () {
			var $elem = this.DOM.wrap,style = $elem[0].style;
			style.position = 'fixed';
		};
	}()),

	// 设置绝对定位
	_setAbsolute: function () {
		var style = this.DOM.wrap[0].style;
		style.position = 'absolute';
	},

	// 按钮回调函数触发
	_click: function (name) {
		var that = this,
			fn = that._listeners[name] && that._listeners[name].callback;
		return typeof fn !== 'function' || fn.call(that, window) !== false ?
			that.close() : that;
	},
	_clickMax:function(){
		var that = this,
			$wrap = this.DOM.wrap,
			$main = $(this.DOM.main[0]);
		if(!this.has_frame()){//缩放动画
			$wrap.addClass('dialogChangeMax');
			setTimeout(function(){
				$('.dialogChangeMax').removeClass('dialogChangeMax');
			},300);
		}
		if ($wrap.hasClass('dialogMax')) {//还原
			$wrap.removeClass('dialogMax');
			$wrap.css({
				'left':$wrap.data('initSize').left + 'px',
				'top':$wrap.data('initSize').top + 'px',
				'width':$wrap.data('initSize').width,
				'height':$wrap.data('initSize').height
			});
			$main.css({
				'height':$wrap.data('initSize').height
			});
		}else{//最大化
			var dialogDom = $wrap.context;
			var size = {
				left: dialogDom.offsetLeft,
				top: dialogDom.offsetTop,
				width: $wrap.css("width"),
				height:$wrap.css("height")
			};
			$wrap.addClass('dialogMax');
			$wrap.data('initSize',size);
			$wrap.css({
				'left':0,
				'top':0,
				'width':_$window.width(),
				'height':_$window.height()
			});
			var header_height = $wrap.find('.aui_n').height();
			if(header_height == 0){
				header_height = $wrap.find('.aui_header').height()
			}
			$main.css({
				'height':(_$window.height()-header_height-5)  + 'px'
			});
		}
		that.reset_title_length();
	},
	_clickMin:function(){
		try{
			if (TaskTap!=undefined){
				this.display(false);
			}
		} catch(e) {};
	},
	// 重置位置与尺寸
	_reset: function (test) {
		//最大化时，窗口调整保持
		if (this.DOM.wrap.hasClass('dialogMax')) {
			this.DOM.wrap.css('width',_$window.width());
			this.DOM.main[0].style.height = (_$window.height()-_titleBarHeight) + 'px';
			return;
		}

		var newSize,
			that = this,
			oldSize = that._winSize || _$window.width() * _$window.height(),
			elem = that._follow,
			width = that._width,
			height = that._height,
			left = that._left,
			top = that._top;

		if (test) {
			// IE6~7 window.onresize bug
			newSize = that._winSize =  _$window.width() * _$window.height();
			if (oldSize === newSize) return;
		};

		if (width || height) that.size(width, height);

		if (elem) {
			that.follow(elem);
		} else if (left || top) {
			//change by warlee [resize  don't change position]
			//that.position(left, top);
		};
	},

	// 事件代理
	_addEvent: function () {
		var resizeTimer,
			that = this,
			config = that.config,
			isIE = 'CollectGarbage' in window,
			DOM = that.DOM;
		// 窗口调节事件
		that._winResize = function () {
			resizeTimer && clearTimeout(resizeTimer);
			resizeTimer = setTimeout(function () {
				that._reset(isIE);
			}, 50);
		};
		_$window.bind('resize', that._winResize);
		// 监听点击
		DOM.wrap.bind('click', function (event) {
			var target = event.target, callbackID;
			if (target.disabled) return false; // IE BUG

			var clickClass = $(target).attr('class');
			//最大化 最小化 关闭
			switch(clickClass){
				case 'aui_min':that._clickMin();break;
				case 'aui_max':that._clickMax();break;
				case 'aui_close':
					that._click(config.cancelVal);
					return false;
				default:
					callbackID = target[_expando + 'callback'];
					callbackID && that._click(callbackID);
			}
		})
		.bind('mousedown', function () {
			try{rightMenu.hidden();}catch(e){};
			that.zIndex();
		});
	},

	// 卸载事件代理
	_removeEvent: function () {
		var that = this,
			DOM = that.DOM;

		DOM.wrap.unbind();
		_$window.unbind('resize', that._winResize);
	}

};

artDialog.fn._init.prototype = artDialog.fn;
$.fn.dialog = $.fn.artDialog = function () {
	var config = arguments;
	this[this.live ? 'live' : 'bind']('click', function () {
		artDialog.apply(this, config);
		return false;
	});
	return this;
};



/** 最顶层的对话框API */
artDialog.focus = null;


/** 获取某对话框API */
artDialog.get = function (id) {
	return id === undefined
	? artDialog.list
	: artDialog.list[id];
};

artDialog.list = {};



// 全局快捷键
_$document.bind('keydown', function (event) {
	var target = event.target,
		nodeName = target.nodeName,
		rinput = /^INPUT|TEXTAREA$/,
		api = artDialog.focus,
		keyCode = event.keyCode;

	if (!api || !api.config.esc || rinput.test(nodeName) || api.config.resize || api.config.simple) return;

	keyCode === 27 && api._click(api.config.cancelVal);
});



// 获取artDialog路径
_path = window['_artDialog_path'] || (function (script, i, me) {
	for (i in script) {
		// 如果通过第三方脚本加载器加载本文件，请保证文件名含有"artDialog"字符
		if (script[i].src && script[i].src.indexOf('artDialog') !== -1) me = script[i];
	};

	_thisScript = me || script[script.length - 1];
	me = _thisScript.src.replace(/\\/g, '/');
	return me.lastIndexOf('/') < 0 ? '.' : me.substring(0, me.lastIndexOf('/'));
}(document.getElementsByTagName('script')));


// 触发浏览器预先缓存背景图片
// _$window.bind('load', function () {
// 	setTimeout(function () {
// 		if (_count) return;
// 		artDialog({left: '-9999em',time: 9,fixed: false,lock: false,focus: false});
// 	}, 150);
// });

// 使用uglifyjs压缩能够预先处理"+"号合并字符串
// uglifyjs: http://marijnhaverbeke.nl/uglifyjs  fadeIn dialogShow zoomInUp
artDialog._templates =
'<div class="aui_outer animated dialogShow"><div class="aui_mask"></div>'
+	'<table class="aui_border">'
+		'<tbody>'
+			'<tr>'
+				'<td class="aui_nw"></td>'
+				'<td class="aui_n"></td>'
+				'<td class="aui_ne"></td>'
+			'</tr>'
+			'<tr>'
+				'<td class="aui_w"></td>'
+				'<td class="aui_c">'
+					'<div class="aui_inner">'
+					'<table class="aui_dialog">'
+						'<tbody>'
+							'<tr>'
+								'<td colspan="2" class="aui_header">'
+									'<div class="aui_titleBar dialog_menu">'
+										'<div class="aui_title"></div>'
+										'<a class="aui_min"></a>'
+										'<a class="aui_max"></a>'
+										'<a class="aui_close"></a>'
+									'</div>'
+								'</td>'
+							'</tr>'
+							'<tr>'
+								'<td class="aui_icon">'
+									'<div class="aui_iconBg"></div>'
+								'</td>'
+								'<td class="aui_main">'
+									'<div class="aui_content"></div>'
+								'</td>'
+							'</tr>'
+							'<tr>'
+								'<td colspan="2" class="aui_footer">'
+									'<div class="aui_buttons"></div>'
+								'</td>'
+							'</tr>'
+						'</tbody>'
+					'</table>'
+					'</div>'
+				'</td>'
+				'<td class="aui_e"></td>'
+			'</tr>'
+			'<tr>'
+				'<td class="aui_sw"></td>'
+				'<td class="aui_s"></td>'
+				'<td class="aui_se"></td>'
+			'</tr>'
+		'</tbody>'
+	'</table>'

+	'<div class="resize-handle resize-top" resize="top"></div>'
+	'<div class="resize-handle resize-right" resize="right"></div>'
+	'<div class="resize-handle resize-bottom" resize="bottom"></div>'
+	'<div class="resize-handle resize-left" resize="left"></div>'
+	'<div class="resize-handle resize-top-right" resize="top-right"></div>'
+	'<div class="resize-handle resize-bottom-right" resize="bottom-right"></div>'
+	'<div class="resize-handle resize-bottom-left" resize="bottom-left"></div>'
+	'<div class="resize-handle resize-top-left" resize="top-left"></div>'
+'</div>';



/**
 * 默认配置
 */
artDialog.defaults = {
	content: '',				// 消息内容
	parentAt: '',				// 所在父级元素
	title: '\u6d88\u606f',		// 标题. 默认'消息'
	button: null,				// 自定义按钮
	ok: null,					// 确定按钮回调函数
	cancel: null,				// 取消按钮回调函数
	init: null,					// 对话框初始化后执行的函数
	close: null,				// 对话框关闭前执行的函数
	okVal: '\u786E\u5B9A',		// 确定按钮文本. 默认'确定'
	cancelVal: '\u53D6\u6D88',	// 取消按钮文本. 默认'取消'
	width: 'auto',				// 内容宽度
	height: 'auto',				// 内容高度
	minWidth: 96,				// 最小宽度限制
	minHeight: 32,				// 最小高度限制
	padding: '20px 25px',		// 内容与边界填充距离
	icon: null,					// 消息图标名称
	time: null,					// 自动关闭时间
	esc: true,					// 是否支持Esc键关闭
	focus: true,				// 是否支持对话框按钮自动聚焦
	show: true,					// 初始化后是否显示对话框
	follow: null,				// 跟随某元素(即让对话框在元素附近弹出)
	path: _path,				// artDialog路径
	lock: false,				// 是否锁屏
	background: '#000',			// 遮罩颜色
	opacity: .7,				// 遮罩透明度
	duration: 300,				// 遮罩透明度渐变动画速度
	fixed: false,				// 是否静止定位
	left: '50%',				// X轴坐标
	top: '38.2%',				// Y轴坐标
	zIndex: 300,				// 对话框叠加高度值(重要：此值不能超过浏览器最大限制)

	ico:'./static/images/file_16/info.png',//默认标题小图标
	resize: false,				// 是否允许用户调节尺寸
	drag: true					// 是否允许用户拖动位置
};

window.artDialog = $.dialog = $.artDialog = artDialog;
}(this.art || this.jQuery && (this.art = jQuery), this));






//------------------------------------------------
// 对话框模块-拖拽支持（可选外置模块）
//------------------------------------------------
;(function ($) {

var _dragEvent, _use,
	_$window = $(window),
	_$document = $(document),
	_elem = document.documentElement,
	_isLosecapture = 'onlosecapture' in _elem,
	_isSetCapture = 'setCapture' in _elem;

// 拖拽事件
artDialog.dragEvent = function () {
	var that = this,
		proxy = function (name) {
			var fn = that[name];
			that[name] = function () {
				return fn.apply(that, arguments);
			};
		};

	proxy('start');
	proxy('move');
	proxy('end');
};

artDialog.dragEvent.prototype = {
	// 开始拖拽
	onstart: $.noop,
	start: function (event) {
		_$document
		.bind('mousemove', this.move)
		.bind('mouseup', this.end);
		this.onstart(event.clientX, event.clientY);
		return false;
	},

	// 正在拖拽
	onmove: $.noop,
	move: function (event) {
		this.onmove(event.clientX,event.clientY);
		return false;
	},

	// 结束拖拽
	onend: $.noop,
	end: function (event) {
		_$document
		.unbind('mousemove', this.move)
		.unbind('mouseup', this.end);
		this.onend(event.clientX, event.clientY);
		return false;
	}

};

preMouseUpTime=0;
_use = function (event) {
	var startWidth, startHeight, startLeft, startTop, isResize,
		api = artDialog.focus,
		startX,startY,
		screenWidth,screenHeight,
		DOM = api.DOM,
		wrap = DOM.wrap,
		title = DOM.title,
		main = DOM.main;

	// 清除文本选择
	var clsSelect = 'getSelection' in window ? function () {
		window.getSelection().removeAllRanges();
	} : function () {
		try {
			document.selection.empty();
		} catch (e) {};
	};

	// 对话框准备拖动
	_dragEvent.onstart = function (x, y) {
		startX = x;startY = y;
		screenHeight = $(window).height();
		screenWidth  = $(window).width();
		if (isResize) {
			startWidth = main[0].offsetWidth;
			startHeight = main[0].offsetHeight;

			startLeft = wrap[0].offsetLeft;
			startTop = wrap[0].offsetTop;
		} else {
			startLeft = wrap[0].offsetLeft;
			startTop = wrap[0].offsetTop;
		};

		_$document.bind('dblclick', _dragEvent.end);
		if (_isLosecapture) {
			title.bind('losecapture', _dragEvent.end)
		}else{
			_$window.bind('blur', _dragEvent.end);
		}
		_isSetCapture && title[0].setCapture();

		wrap.addClass('aui_state_drag');
		api.focus();
	};

	// 对话框拖动,8个方向调整大小
	_dragEvent.onmove = function (x, y) {
		if (wrap.hasClass('dialogMax')) return;//最大化则不可拖动
		x = (x >= screenWidth ? screenWidth : x);
		y = (y >= screenHeight ? screenHeight : y);
		x = (x <= 0 ? 0 : x);
		y = (y <= 0 ? 0 : y);

		x = x - startX;
		y = y - startY;

		if (isResize) {
			if (resizeDirection == undefined) return;
			var wrapStyle = wrap[0].style,style = main[0].style,
				left  = startLeft,
				top   = startTop,
				width = startWidth,
				height= startHeight;

			switch(resizeDirection){
				case 'top':
					top    =  y + top;
					height = -y + height;
					break;
				case 'right':
					width = x + width;
					break;
				case 'bottom':
					height = y + height;
					break;
				case 'left':
					left  = x  + left;
					width = -x + width;
					break;
				case 'top-left':
					left  = x + left;
					top   = y + top;
					width = -x + width;
					height = -y + height;
					break;
				case 'top-right':
					top   = y + top;
					width = x + width;
					height = -y + height;
					break;
				case 'bottom-right':
					width = x + startWidth;
					height = y + startHeight;
					break;
				case 'bottom-left':
					left  = x + left;
					width = -x + startWidth;
					height = y + startHeight;
					break;
				default:break;
			}

			left = (left<=0 ? 0:left);
			top = (top<=0 ? 0:top);

			wrapStyle.width = 'auto';
			wrapStyle.width = wrap[0].offsetWidth + 'px';
			wrapStyle.left = left  + 'px';
			wrapStyle.top = top + 'px';

			style.width = Math.max(0, width) + 'px';
			style.height = Math.max(0, height) + 'px';
			api.reset_title_length();
		} else {
			var style = wrap[0].style;
			style.left = x + startLeft  + 'px';
			style.top = y + startTop + 'px';

			var bottom_height = 50;
			if($(window).height()-(y + startTop)<=bottom_height){
				style.top = $(window).height()- bottom_height + 'px';
			}
		}
		clsSelect();
	};
	// 对话框拖动结束
	_dragEvent.onend = function (x, y) {
		var theTime = parseInt((new Date()).valueOf());
		if (theTime - preMouseUpTime<300 && api.config.resize) {
			api._clickMax();
		}else{
			preMouseUpTime = theTime;
		}

		_$document.unbind('dblclick', _dragEvent.end);
		_isLosecapture ? title.unbind('losecapture', _dragEvent.end) :
			_$window.unbind('blur', _dragEvent.end);
		_isSetCapture && title[0].releaseCapture();

		!api.closed && api._autoPositionType();
		wrap.removeClass('aui_state_drag');

		//iframe的话，焦点移到iframe中
		if($(DOM.wrap).find('iframe').length>=1){
			$(DOM.wrap).find('iframe').focus();
		}
	};

	isResize = $(event.target).hasClass('resize-handle');
	resizeDirection= $(event.target).attr('resize');
	_dragEvent.start(event);
};

// 代理 mousedown 事件触发对话框拖动
_$document.bind('mousedown', function (event) {
	if (event.which!=1) {
		return true;
	}
	var api = artDialog.focus;
	if (!api) return;
	var target = event.target,
		config = api.config,
		DOM = api.DOM;

	if (config.drag !== false && target === DOM.title[0]
	|| config.resize !== false && $(target).hasClass('resize-handle')) {
		_dragEvent = _dragEvent || new artDialog.dragEvent();
		_use(event);
		//return false;// 防止firefox与chrome滚屏 changed by warlee
	};
});
})(this.art || this.jQuery && (this.art = jQuery));





//==========================================================================
//==========================================================================
/*!
 * artDialog iframeTools
 * Date: 2011-11-25 13:54
 * http://code.google.com/p/artdialog/
 * (c) 2009-2011 TangBin, http://www.planeArt.cn
 *
 * This is licensed under the GNU LGPL, version 2.1 or later.
 * For details, see: http://creativecommons.org/licenses/LGPL/2.1/
 */

;(function ($, window, artDialog, undefined) {

var _topDialog, _proxyDialog, _zIndex,
	_data = '@ARTDIALOG.DATA',
	_open = '@ARTDIALOG.OPEN',
	_opener = '@ARTDIALOG.OPENER',
	_winName = window.name = window.name
	|| '@ARTDIALOG.WINNAME' + + new Date;

$(function () {
	!window.jQuery && document.compatMode === 'BackCompat'
	// 不支持怪异模式，请用主流的XHTML1.0或者HTML5的DOCTYPE申明
	&& alert('artDialog Error: document.compatMode === "BackCompat"');
});


/** 获取 artDialog 可跨级调用的最高层的 window 对象 */
var _top = artDialog.top = function () {
	try {
		return share.frameTop();
	} catch (e) {
		return window;
	};

	//-----unused
	// var top = window,
	// test = function (name) {
	// 	try {
	// 		var doc = window[name].document;	// 跨域|无权限
	// 		doc.getElementsByTagName; 			// chrome 本地安全限制
	// 	} catch (e) {
	// 		return false;
	// 	};

	// 	return window[name].artDialog
	// 	// 框架集无法显示第三方元素
	// 	&& doc.getElementsByTagName('frameset').length === 0;
	// };

	// if (test('top')) {
	// 	top = window.top;
	// } else if (test('parent')) {
	// 	top = window.parent;
	// };
	// return top;
}();
artDialog.parent = _top; // 兼容v4.1之前版本，未来版本将删除此


_topDialog = _top.artDialog;


// 获取顶层页面对话框叠加值
_zIndex = function () {
	return _topDialog.defaults.zIndex;
};



/**
 * 跨框架数据共享接口
 * @see		http://www.planeart.cn/?p=1554
 * @param	{String}	存储的数据名
 * @param	{Any}		将要存储的任意数据(无此项则返回被查询的数据)
 */
artDialog.data = function (name, value) {
	var top = artDialog.top,
		cache = top[_data] || {};
	top[_data] = cache;

	if (value !== undefined) {
		cache[name] = value;
	} else {
		return cache[name];
	};
	return cache;
};


/**
 * 数据共享删除接口
 * @param	{String}	删除的数据名
 */
artDialog.removeData = function (name) {
	var cache = artDialog.top[_data];
	if (cache && cache[name]) delete cache[name];
};


/** 跨框架普通对话框 */
artDialog.through = _proxyDialog = function () {
	var api = _topDialog.apply(this, arguments);

	// 缓存从当前 window（可能为iframe）调出所有跨框架对话框，
	// 以便让当前 window 卸载前去关闭这些对话框。
	// 因为iframe注销后也会从内存中删除其创建的对象，这样可以防止回调函数报错
	if (_top !== window) artDialog.list[api.config.id] = api;
	return api;
};

// 框架页面卸载前关闭所有穿越的对话框
_top !== window && $(window).bind('unload', function () {
	var list = artDialog.list, config;
	for (var i in list) {
		if (list[i]) {
			config = list[i].config;
			if (config) config.duration = 0; // 取消动画
			list[i].close();
		};
	};
});


/**
 * 弹窗 (iframe)
 * @param	{String}	地址
 * @param	{Object}	配置参数. 这里传入的回调函数接收的第1个参数为iframe内部window对象
 * @param	{Boolean}	是否允许缓存. 默认true
 */
artDialog.open = function (url, options, cache) {
	options = options || {};

	var api, DOM,
		$content, $main, iframe, $iframe, $idoc, iwin, ibody,$frame,
		top = artDialog.top,
		initCss = 'position:absolute;left:-9999em;top:-9999em;border:none 0;background:transparent',
		loadCss = 'width:100%;height:100%;border:none 0';

	if (cache === false) {
		var ts = + new Date,
			ret = url.replace(/([?&])_=[^&]*/, "$1_=" + ts );
		url = ret + ((ret === url) ? (/\?/.test(url) ? "&" : "?") + "_=" + ts : "");
	};

	var load = function () {
		var iWidth, iHeight,aConfig = api.config;
		DOM.content.find('.aui_loading').remove();
		$content.addClass('aui_state_full');
		try {
			iwin = iframe.contentWindow;
			$idoc = $(iwin.document);
			ibody = iwin.document.body;
		} catch (e) {// 跨域
			iframe.style.cssText = loadCss;

			aConfig.follow
			? api.follow(aConfig.follow)
			: api.position(aConfig.left, aConfig.top);

			options.init && options.init.call(api, iwin, top);
			options.init = null;
			return;
		};

		// 获取iframe内部尺寸
		iWidth = aConfig.width === 'auto'
		? $idoc.width() + parseInt($(ibody).css('marginLeft'))
		: aConfig.width;

		iHeight = aConfig.height === 'auto'
		? $idoc.height()
		: aConfig.height;

		// 适应iframe尺寸
		iframe.style.cssText = loadCss;
		api.size(iWidth, iHeight);

		// 调整对话框位置
		aConfig.follow
		? api.follow(aConfig.follow)
		: api.position(aConfig.left, aConfig.top);

		options.init && options.init.call(api, iwin, top);
		options.init = null;
	};

	var config = {
		zIndex: _zIndex(),
		init: function () {
			api = this;
			DOM = api.DOM;
			$main = DOM.main;
			$content = DOM.content;
			DOM.content.append('<div class="aui_loading"><span>loading..</span></div>');

			iframe = api.iframe = top.document.createElement('iframe');
			iframe.src = url;
			iframe.name = 'Open' + api.config.id;
			iframe.style.cssText = initCss;
			iframe.setAttribute('frameborder', 0, 0);
			iframe.setAttribute('allowTransparency', true);
			if(iframe){
				//$main.css('background','none');
			}
			$iframe = $(iframe);
			api.content().appendChild(iframe);//TODO
			iwin = iframe.contentWindow;
			try {
				iwin.name = iframe.name;
				artDialog.data(iframe.name + _open, api);
				artDialog.data(iframe.name + _opener, window);
			} catch (e) {};
			$iframe.one('load', load);
			//$frame.css('display','none');
		},
		close: function () {
			$iframe.css('display', 'none').unbind('load', load);
			if (options.close && options.close.call(this, iframe.contentWindow, top) === false) {
				return false;
			};
			$content.removeClass('aui_state_full');
			// 重要！重置iframe地址，否则下次出现的对话框在IE6、7无法聚焦input
			// IE删除iframe后，iframe仍然会留在内存中出现上述问题，置换src是最容易解决的方法
			$iframe[0].src = 'about:blank';
			$iframe.remove();

			try {
				artDialog.removeData(iframe.name + _open);
				artDialog.removeData(iframe.name + _opener);
			} catch (e) {};
		}
	};

	// 回调函数第一个参数指向iframe内部window对象
	if (typeof options.ok === 'function') config.ok = function () {
		return options.ok.call(api, iframe.contentWindow, top);
	};
	if (typeof options.cancel === 'function') config.cancel = function () {
		return options.cancel.call(api, iframe.contentWindow, top);
	};

	delete options.content;

	for (var i in options) {
		if (config[i] === undefined) config[i] = options[i];
	};

	return _proxyDialog(config);
};


/** 引用open方法扩展方法(在open打开的iframe内部私有方法) */
artDialog.open.api = artDialog.data(_winName + _open);


/** 引用open方法触发来源页面window(在open打开的iframe内部私有方法) */
artDialog.opener = artDialog.data(_winName + _opener) || window;
artDialog.open.origin = artDialog.opener; // 兼容v4.1之前版本，未来版本将删除此

/** artDialog.open 打开的iframe页面里关闭对话框快捷方法 */
artDialog.close = function () {
	var api = artDialog.data(_winName + _open);
	api && api.close();
	return false;
};

// 点击iframe内容切换叠加高度
_top != window && $(document).bind('mousedown', function () {
	var api = artDialog.open.api;
	api && api.zIndex();
});


/**
 * Ajax填充内容
 * @param	{String}			地址
 * @param	{Object}			配置参数
 * @param	{Boolean}			是否允许缓存. 默认true
 */
artDialog.load = function(url, options, cache){
	cache = cache || false;
	var opt = options || {};

	var config = {
		zIndex: _zIndex(),
		init: function(here){
			var api = this,
				aConfig = api.config;

			$.ajax({
				url: url,
				success: function (content) {
					api.content(content);
					opt.init && opt.init.call(api, here);
				},
				cache: cache
			});

		}
	};

	delete options.content;
	for (var i in opt) {
		if (config[i] === undefined) config[i] = opt[i];
	};

	return _proxyDialog(config);
};


/**
 * 警告
 * @param	{String}	消息内容
 */
artDialog.alert = function (content, callback) {
	return _proxyDialog({
		id: 'Alert',
		zIndex: _zIndex(),
		icon: 'warning',
		fixed: true,
		lock: true,
		content: content,
		ok: true,
		close: callback
	});
};


/**
 * 确认
 * @param	{String}	消息内容
 * @param	{Function}	确定按钮回调函数
 * @param	{Function}	取消按钮回调函数
 */
artDialog.confirm = function (content, yes, no) {
	return _proxyDialog({
		id: 'Confirm',
		zIndex: _zIndex(),
		icon: 'question',
		fixed: true,
		lock: true,
		opacity: .1,
		content: content,
		ok: function (here) {
			return yes.call(this, here);
		},
		cancel: function (here) {
			return no && no.call(this, here);
		}
	});
};


/**
 * 提问
 * @param	{String}	提问内容
 * @param	{Function}	回调函数. 接收参数：输入值
 * @param	{String}	默认值
 */
artDialog.prompt = function (content, yes, value) {
	value = value || '';
	var input;

	return _proxyDialog({
		id: 'Prompt',
		zIndex: _zIndex(),
		icon: 'question',
		fixed: true,
		padding:0,
		lock: true,
		opacity: .1,
		content: [
			'<div style="margin-bottom:5px;font-size:12px">',
				content,
			'</div>',
			'<div class="prompt_input">',
				'<input value="',
					value,
				'" style="padding:6px 4px" />',
			'</div>'
			].join(''),
		init: function () {
			input = this.DOM.content.find('input')[0];
			input.select();
			input.focus();
		},
		ok: function (here) {
			return yes && yes.call(this, input.value, here);
		},
		cancel: true
	});
};


/**
 * 短暂提示
 * @param	{String}	提示内容
 * @param	{Number}	显示时间 (默认1.5秒)
 */
artDialog.tips = function (content, time) {
	return _proxyDialog({
		id: 'Tips',
		zIndex: _zIndex(),
		title: false,
		cancel: false,
		fixed: true,
		lock: false
	})
	.content('<div style="padding: 0 1em;">' + content + '</div>')
	.time(time || 1.5);
};


// 增强artDialog拖拽体验
// - 防止鼠标落入iframe导致不流畅
// - 对超大对话框拖动优化
$(function () {
	var event = artDialog.dragEvent;
	if (!event) return;

	var $window = $(window),
		$document = $(document),
		positionType = 'fixed',
		dragEvent = event.prototype,
		mask = document.createElement('div'),
		style = mask.style;

	style.cssText = 'display:none;position:' + positionType + ';left:0;top:0;width:100%;height:100%;'
	+ 'cursor:move;filter:alpha(opacity=0);opacity:0;background:#FFF';

	document.body.appendChild(mask);
	dragEvent._start = dragEvent.start;
	dragEvent._end = dragEvent.end;

	dragEvent.start = function () {
		var DOM = artDialog.focus.DOM,
			main = DOM.main[0],
			iframe = DOM.content[0].getElementsByTagName('iframe')[0];

		dragEvent._start.apply(this, arguments);
		style.display = 'block';
		style.zIndex = artDialog.defaults.zIndex + 3;
		if (positionType === 'absolute') {
			style.width = $window.width() + 'px';
			style.height = $window.height() + 'px';
			style.left = $document.scrollLeft() + 'px';
			style.top = $document.scrollTop() + 'px';
		};

		// if (iframe && main.offsetWidth * main.offsetHeight > 307200) {
		// 	main.style.visibility = 'hidden';
		// };
	};

	dragEvent.end = function () {
		var dialog = artDialog.focus;
		dragEvent._end.apply(this, arguments);
		style.display = 'none';
		//if (dialog) dialog.DOM.main[0].style.visibility = 'visible';
	};
});

})(this.art || this.jQuery, this, this.artDialog);

if (typeof(LNG) != 'undefined') {
	artDialog.defaults.title='tips';
	artDialog.defaults.okVal = LNG.button_ok;
	artDialog.defaults.cancelVal = LNG.button_cancel;
};

