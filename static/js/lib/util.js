/*changed by warlee 
* @link http://www.kalcaddle.com/
* @author warlee | e-mail:kalcaddle@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kalcaddle.com/tools/licenses/license.txt
*/

/*
* iframe之间函数调用
*
* main frame中每个frame需要name和id，以便兼容多浏览器
* 如果需要提供给其他frame调用，则需要在body中加入
* <input id="FrameCall" type='hidden' action='' value='' onclick='FrameCall.api()'/>
* 调用例子：Frame.doFunction('main','goUrl','"'+url+'"');该frame调用id为main的兄弟frame的goUrl方法，参数为后面的
* 参数为字符串时需要加引号，否则传过去会被理解成一个未定义变量
*/
var FrameCall = (function(){
	var idName 		= "FrameCall";
	var idNameAll	= "#"+idName;
	var ie = !-[1,];//是否ie
	return{
		apiOpen:function(){
			var html = '<input id="FrameCall" type="hidden" action="1" value="1" onclick="FrameCall.api()" />';
			$(html).prependTo('body');
		},
		//其他窗口调用该窗口函数，调用另一个frame的方法
		api:function(){
			var action = $(idNameAll).attr('action');
			var value=$(idNameAll).attr('value');
			
			if (action == 'get') {//获取变量
				share.data('create_app_path',eval(value));
				return;
			}			
			var fun=action+'('+value+');';//拼装执行语句，字符串转换到代码
			try{
				eval(fun);
			} catch(e) {};
		},
		//该窗口调用顶层窗口的子窗口api,调用iframe框架的js函数.封装控制器。
		top:function(iframe,action,value){
			if (!window.parent.frames[iframe]) return;
			//var obj = window.top.frames[iframe].document;
			var obj = window.parent.frames[iframe].document;
            if(!obj) return;
			obj=obj.getElementById(idName);		
			$(obj).attr("action",action);
			$(obj).attr("value",value);
			obj.click();
		},
		//该窗口调用父窗口的api
		child:function(iframe,action,value){
			if (!window.frames[iframe]) return;
			var obj = window.frames[iframe].document;
            if(!obj) return;
			obj=obj.getElementById(idName);
			$(obj).attr("action",action);
			$(obj).attr("value",value);
			obj.click();
		},
		//该窗口调用父窗口的api
		father:function(action,value){
			var obj=window.parent.document;
			obj=obj.getElementById(idName);	
			$(obj).attr("action",action);
			$(obj).attr("value",value);
			obj.click();	
		},
		//___自定义通用方法，可在页面定义更多提供给接口使用的api。
		goUrl:function(url){
			window.location.href=url;
		},
		goRefresh:function(){
			window.location.reload(); 
		}
	}
})();

$(document).ready(function() {
	FrameCall.apiOpen();
});

var time = function(){
    var time = (new Date()).valueOf();
    return time;
}
var urlEncode = encodeURIComponent;
var urlDecode = decodeURIComponent;
var urlEncode2 = function (str){
	return urlEncode(urlEncode(str));
};
var UUID = function(){
	return 'uuid_'+time()+'_'+Math.ceil(Math.random()*10000)
}
var round = function(val,point){
    if (!point) point = 2;
    point = Math.pow(10,parseInt(point));
    return  Math.round(parseFloat(val)*point)/point;
}

//跨框架数据共享
var share = {
	data: function (name, value) {
		var top = window.top,
			cache = top['_CACHE'] || {};
		top['_CACHE'] = cache;
		return value !== undefined ? cache[name] = value : cache[name];
	},
	removeData: function (name) {
		var cache = window.top['_CACHE'];
		if (cache && cache[name]) delete cache[name];
	}
};
jQuery.easing.def="easeInOutCubic";//easeOutExpo,easeInOutExpo,easeInOutSine
//cookie操作
var Cookie = (function(){
	var cookie = {};
	var _init = function(){
		cookie = {};//初始化cookie
        var cookieArray=document.cookie.split("; ");
        for (var i=0;i<cookieArray.length;i++){
            var arr=cookieArray[i].split("=");
            cookie[arr[0]] = unescape(arr[1]);
        }
        return cookie;
	}
	var get = function(key){//没有key代表获取所有
		_init();
		if (key == undefined) return cookie;
		return cookie[key];		
	};
	var set = function(key,value,timeout){
		var str = escape(key)+"="+escape(value);//不设置时间代表跟随页面生命周期
		if (timeout == undefined){//时间以小时计
			timeout = 365;
		}
		var expDate=new Date(); 
		expDate.setTime(expDate.getTime() + timeout*3600*24*1000);
        str += "; expires="+expDate.toGMTString();
        document.cookie = str;
	};
	var del = function(key){
		document.cookie = key+"=;expires="+(new Date(0)).toGMTString();
	};	
	var clear = function(){
		_init();
		for(var key in cookie){
			del(key);
		}
	}
	return {
		get:get,
		set:set,
		del:del,
		clear:clear
	}
})();

//是否在数组中。
var inArray = function(arr,value) {
    for (var i=0,l = arr.length ; i <l ; i++) {
        if (arr[i] === value) {
            return true;
        }
    }
    return false;
}
var stopPP = function(e){//防止事件冒泡
	e = e || window.event;
    if(!e) return;
	if (e.stopPropagation) {
		e.stopPropagation();
	}
	if (e.preventDefault) {
		e.preventDefault();
	}

	e.cancelBubble = true;
	e.keyCode = 0;  
    e.returnValue = false;  
}

//通用提示信息框
var tips = function(msg,code){
	Tips.tips(msg,code);
}
var Tips =  (function(){
	var in_time  = 600;
	var delay = 800;
	var opacity  = 0.7;
	var _init = function(msg,code){
		var tipsIDname = "messageTips";
		var tipsID = "#"+tipsIDname;
		if ($(tipsID).length ==0) {
			var html='<div id="'+tipsIDname+'" class="tips_box"><i></i><span></span>'+
                '<a class="tips_close">×</a></div>'
			$('body').append(html);

            $(tipsID).show().css({'left':($(window).width() - $(tipsID).innerWidth())/2});
			$(window).bind('resize',function(){
				if ($(tipsID).css('display') =="none") return;
				self.stop(true,true)
				$(tipsID).css({'left':($(window).width() - $(tipsID).width()) / 2});
			});
            $(tipsID).find('.tips_close').click(function(){
                $(tipsID).animate({opacity:0},
                    in_time,0,function(){
                        $(this).hide();
                    });
            });
		}
		var self = $(tipsID),icon,color;
		switch(code){
			case 100:delay = 3000;//加长时间 5s
			case true:
			case undefined:
			case 'succcess':color = '#5cb85c';icon = 'icon-ok';break;
			case 'info':color = '#519AF6';icon = 'icon-info';break;
			case 'warning':color = '#ed9c28';icon = 'icon-exclamation';break;
			case false:
			case 'error':delay = 1000;color = '#d9534f';icon = 'icon-remove';break;
			default:color = '';icon = '';break;
		}
		if (color != '') {
			self.css({'background':color,'color':'#fff'});
			self.find('i').removeClass().addClass(icon);		
		}
		if (msg != undefined) self.find('span').html(msg);
        $(tipsID).show().css({'left':($(window).width() - $(tipsID).innerWidth())/2});
		return self;
	};
	var tips = function(msg,code,offset_top){
		if (typeof(msg) == 'object'){
			code=msg.code;msg = msg.data;
		}
		if (offset_top == undefined) offset_top = 0;
		var self = _init(msg,code);
		self.stop(true,true)
			.css({'opacity':'0','top':offset_top-self.height()})
            .show()
			.animate({opacity:opacity,top:offset_top},in_time,0)
			.delay(delay)
			.animate({opacity:0,top:'-='+(offset_top+self.height())},in_time,0,function(){
				$(this).hide();
			});
	};
	var loading = function(msg,code,offset_top){
		if (typeof(msg) == 'object'){
			code=msg.code;msg = msg.data;
		}
		if (offset_top == undefined) offset_top = 0;
		if (msg == undefined) msg = 'loading...'
		msg+= "&nbsp;&nbsp; <img src='./static/images/loading.gif'/>";

		var self = _init(msg,code);
		self.stop(true,true)
			.css({'opacity':'0','top':offset_top-self.height()})
			.animate({opacity:opacity,top:offset_top},in_time,0);
	};
	var close = function(msg,code,offset_top){
		if (typeof(msg) == 'object'){
            try{
                code=msg.code;msg = msg.data;
            }catch(e){
                code=0;msg ='';
            };			
		}
		if (offset_top == undefined) offset_top = 0;
		var self = _init(msg,code);
		self.delay(delay)
            .show()
			.animate({
				opacity:0,
				top:'-='+(offset_top+self.height())},
				in_time,0,function(){
                    $(this).hide();
			});
	};
	return{
		tips:tips,
		loading:loading,
		close:close
	}
})();

//获取keys
var objectKeys = function(obj){
	var keys = [];
    for(var p in obj){
        if(obj.hasOwnProperty(p)){
            keys.push(p);
        }
    }
    return keys;
}
//获取values
var objectValues = function(obj){
	var values = [];
    for(var p in obj){
        keys.push(obj[p]);
    }
    return values;
}

var $sizeInt = function($obj){
	var str = $obj+'';
	var theSize = parseInt(str.replace('px',''));
	if (isNaN(theSize)) {
		return 0;
	}else{
		return theSize;
	}
}

//通用遮罩层
var MaskView =  (function(){
	var opacity = 0.6;
	var animatetime = 250;
	var color   ='#000';
	var maskId  = "#windowMaskView";
	var maskContent = '#maskViewContent';
	var add = function(content,t_opacity,t_color,time){
		if (t_opacity != undefined) opacity == t_opacity;
		if (t_color != undefined) color == t_color;
		if (time != undefined) animatetime == time;

		if ($(maskId).length == 0) {
			var html ='<div id="windowMaskView" style="position:fixed;top:0;left:0;right:0;bottom:0;background:'+
			color+';opacity:'+opacity+';z-index:9998;"></div><div id="maskViewContent" style="position:absolute;z-index:9999"></div>';
			$('body').append(html);
			$(maskId).bind('click',close);
			$(maskContent).bind('click',function(e){
				e.stopPropagation();
			});
			$(window).unbind('resize').bind('resize',_resize);
		}
		$(maskContent).html(content).fadeIn(animatetime);_resize();
		$(maskId).hide().fadeIn(animatetime);
	};
	var _resize = function(){
		var $content = $(maskContent);
		$content.css({'width':'auto','height':'auto'}).css({
			top:($(window).height()-$content.height())/2,
			left:($(window).width()-$content.width())/2});
		imageSize();
	}

	var tips = function(msg){
		add("<div style='font-size:50px;color:#fff;opacity:0.6;'>"+msg+"</div>");
	}
	var image = function(url){
		add("<img src='"+url+"' class='image' onload='MaskView.resize();' style='-webkit-box-reflect: below 1px -webkit-gradient(linear,left top,left bottom,from(transparent),color-stop(80%,transparent),color-stop(70%,rgba(255,255,255,0)),to(rgba(255,255,255,0.3)));'/>");
		var $content = $(maskContent)
		var $dom = $content.find('.image');
		var dragFlag = false,E;
		var old_left,old_top;

		$(document).bind({
			mousedown:function(e){
				if (!$(e.target).hasClass('image')) return;
				dragFlag = true;
				$dom.css('cursor','move');
				stopPP(e);E = e;
				old_top = parseInt($content.css('top').replace('px',''));
				old_left = parseInt($content.css('left').replace('px',''));
			},
			mousemove:function(e){
				if (!dragFlag) return;
				$content.css({
					'left':old_left+(e.clientX-E.clientX),
					'top':old_top+(e.clientY-E.clientY)
				});
			},
			mouseup:function(){
				dragFlag = false;
				$dom.css('cursor','default');
			},
            keydown:function(e){
                if ($(maskId).length > 0 && e.keyCode == 27){
                    MaskView.close();
                    stopPP(e);
                }
            }
		});

        $('#windowMaskView,#maskViewContent img').mousewheel(function(event, delta, deltaX, deltaY){
        	var offset = delta>0?1:-1;
        	offset = offset * Math.abs(delta/10);
        	var o_w = parseInt($dom.width()),
        		o_h=parseInt($dom.height()),
	        	w =  o_w * (1+offset/6),
	        	h =  o_h * (1+offset/6);
	        if(w<=5 || h<=5) return;
	        if(w>=10000 || h>=10000) return;

	        // var top  = ($(window).height() - h)/2;
	        // var left = ($(window).width()  - w)/2;
	        var top  = parseInt($content.css("top"))-(h-o_h)/2;
	        var left = parseInt($content.css("left"))-(w-o_w)/2;
	        $(maskContent+','+maskContent+' .image').stop(true)
	        	.animate({'width':w,'height':h,'top':top,'left':left},400);
	    });
	}
	var imageSize = function(){
		var $dom = $(maskContent).find('.image');
		if ($dom.length == 0) return;
		var image=new Image(); 
		image.src = $dom.attr('src');
		var percent = 0.7,
			w_width = $(window).width(),
			w_height= $(window).height(),
			m_width = image.width,
			m_height= image.height,
			width,height;
		if (m_width >= w_width*percent){
			width = w_width*percent;
			height= m_height/m_width * width;
		}else{
			width = m_width;
			height= m_height;
		}
		$dom.css({'width':width,'height':height});
		var $content = $(maskContent);
		$content.css({'width':'auto','height':'auto'}).css({
			top:($(window).height()-$content.height())/2,
			left:($(window).width()-$content.width())/2});
	}
	var close = function(){
		$(maskId).fadeOut(animatetime);
		if ($(maskContent).find('.image').length!=0) {
			$(maskContent+','+maskContent+' .image').animate({'width':0,'height':0,
				'top':$(window).height()/2,
				'left':$(window).width()/2
			},animatetime*1.3,0,function(){
				$(maskContent).hide();
				_resize();
			});
		}else{
			$(maskContent).fadeOut(animatetime);
		}
	};
	return{
		image:image,
		resize:_resize,
		tips:tips,
		add:add,
		close:close
	}
})();


//textarea自适应高度
(function($){
    $.fn.autoTextarea = function(options) {
        var defaults={
            minHeight:20,
            padding:0
        };
        var opts = $.extend({},defaults,options);
        var ie = !!window.attachEvent && !window.opera;
        $(this)
        .die("paste cut keydown keyup focus blur")
        .live("paste cut keydown keyup focus blur",function(){
		    if(!ie) this.style.height = options.minHeight+"px";
		    var height = this.scrollHeight-options.padding;
		    if(height<=options.minHeight){
		        this.style.height = options.minHeight+"px";
		    }else{
		    	this.style.height = height+"px";
		    }
        });
    };
})(jQuery);

(function($){
	$.fn.extend({
		//dom绑定enter事件  用于input
		keyEnter:function(callback){
			$(this).die('keydown').live('keydown',function(e){      
				if (e.keyCode == 13 && callback){
					callback();
				}
			});
		},
		//dom绑定鼠标滚轮事件
		mousewheel: function(fn){
	        var mousewheel = jQuery.browser.mozilla ? "DOMMouseScroll" : "mousewheel";
	        $(this).bind(mousewheel ,function(e){
	            e= window.event || e;
	            var delta = e.wheelDelta ? (e.wheelDelta / 120) : (- e.detail / 3);
	            fn.call(this,delta);
	            return false;
	        });
	    },
	    //晃动 $('.wrap').shake(4,4,100);
		shake: function(times,offset,delay){
	        this.stop().each(function(){
			    var Obj = $(this);
			    var marginLeft = parseInt(Obj.css('margin-left'));
			    var delay = delay > 50 ? delay : 50; 
			    Obj.animate({'margin-left':marginLeft+offset},delay,function(){
		        	Obj.animate({'margin-left':marginLeft},delay,function(){
			            times = times - 1;
			            if(times > 0)
			            Obj.shake(times,offset,delay);
		            })
		        });
		    });
		    return this;
	    }
    });
})(jQuery);


(function($){
    $.tooltipsy = function (el, options) {
        this.options = options;
        this.$el = $(el);
        this.title = this.$el.attr('title') || '';
        this.$el.attr('title', '');
        this.random = parseInt(Math.random()*10000);
        this.ready = false;
        this.shown = false;
        this.width = 0;
        this.height = 0;
        this.delaytimer = null;

        this.$el.data("tooltipsy", this);
        this.init();
    };

    $.tooltipsy.prototype = {
        init: function () {
            var base = this,
                settings,
                $el = base.$el,
                el = $el[0];

            base.settings = settings = $.extend({}, base.defaults, base.options);
            settings.delay = +settings.delay;

            if (typeof settings.content === 'function') {
                base.readify(); 
            }

            if (settings.showEvent === settings.hideEvent && settings.showEvent === 'click') {
                $el.toggle(function (e) {
                    if (settings.showEvent === 'click' && el.tagName == 'A') {
                        e.preventDefault();
                    }
                    if (settings.delay > 0) {
                        base.delaytimer = window.setTimeout(function () {
                            base.show(e);
                        }, settings.delay);
                    }
                    else {
                        base.show(e);
                    }
                }, function (e) {
                    if (settings.showEvent === 'click' && el.tagName == 'A') {
                        e.preventDefault();
                    }
                    window.clearTimeout(base.delaytimer);
                    base.delaytimer = null;
                    base.hide(e);
                });
            }
            else {
                $el.bind(settings.showEvent, function (e) {
                    if (settings.showEvent === 'click' && el.tagName == 'A') {
                        e.preventDefault();
                    }
                    base.delaytimer = window.setTimeout(function () {
                        base.show(e);
                    }, settings.delay || 0);
                }).bind(settings.hideEvent, function (e) {
                    if (settings.showEvent === 'click' && el.tagName == 'A') {
                        e.preventDefault();
                    }
                    window.clearTimeout(base.delaytimer);
                    base.delaytimer = null;
                    base.hide(e);
                });
            }
        },

        show: function (e) {
            if (this.ready === false) {
                this.readify();
            }

            var base = this,
                settings = base.settings,
                $tipsy = base.$tipsy,
                $el = base.$el,
                el = $el[0],
                offset = base.offset(el);

            if (base.shown === false) {
                if ((function (o) {
                    var s = 0, k;
                    for (k in o) {
                        if (o.hasOwnProperty(k)) {
                            s++;
                        }
                    }
                    return s;
                })(settings.css) > 0) {
                    base.$tip.css(settings.css);
                }
                base.width = $tipsy.outerWidth();
                base.height = $tipsy.outerHeight();
            }

            if (settings.alignTo === 'cursor' && e) {
                var tip_position = [e.clientX + settings.offset[0], e.clientY + settings.offset[1]];
                if (tip_position[0] + base.width > $(window).width()) {
                    var tip_css = {top: tip_position[1] + 'px', right: tip_position[0] + 'px', left: 'auto'};
                }
                else {
                    var tip_css = {top: tip_position[1] + 'px', left: tip_position[0] + 'px', right: 'auto'};
                }
            }
            else {
                var tip_position = [
                    (function () {
                        if (settings.offset[0] < 0) {
                            return offset.left - Math.abs(settings.offset[0]) - base.width;
                        }
                        else if (settings.offset[0] === 0) {
                            return offset.left - ((base.width - $el.outerWidth()) / 2);
                        }
                        else {
                            return offset.left + $el.outerWidth() + settings.offset[0];
                        }
                    })(),
                    (function () {
                        if (settings.offset[1] < 0) {
                            return offset.top - Math.abs(settings.offset[1]) - base.height;
                        }
                        else if (settings.offset[1] === 0) {
                            return offset.top - ((base.height - base.$el.outerHeight()) / 2);
                        }
                        else {
                            return offset.top + base.$el.outerHeight() + settings.offset[1];
                        }
                    })()
                ];
            }
            $tipsy.css({top: tip_position[1] + 'px', left: tip_position[0] + 'px'});
            base.settings.show(e, $tipsy.stop(true, true));
        },

        hide: function (e) {
            var base = this;

            if (base.ready === false) {
                return;
            }

            if (e && e.relatedTarget === base.$tip[0]) {
                base.$tip.bind('mouseleave', function (e) {
                    if (e.relatedTarget === base.$el[0]) {
                        return;
                    }
                    base.settings.hide(e, base.$tipsy.stop(true, true));
                });
                return;
            }
            base.settings.hide(e, base.$tipsy.stop(true, true));
        },

        readify: function () {
            this.ready = true;
            this.$tipsy = $('<div id="tooltipsy' + this.random + '" style="position:fixed;z-index:2147483647;display:none">').appendTo('body');
            this.$tip = $('<div class="' + this.settings.className + '">').appendTo(this.$tipsy);
            this.$tip.data('rootel', this.$el);
            var e = this.$el;
            var t = this.$tip;
            this.$tip.html(this.settings.content != '' ? (typeof this.settings.content == 'string' ? this.settings.content : this.settings.content(e, t)) : this.title);
        },

        offset: function (el) {
            return this.$el[0].getBoundingClientRect();
        },

        destroy: function () {
            if (this.$tipsy) {
                this.$tipsy.remove();
                $.removeData(this.$el, 'tooltipsy');
            }
        },

        defaults: {
            alignTo: 'element',
            offset: [0, -1],
            content: '',
            show: function (e, $el) {
                $el.fadeIn(100);
            },
            hide: function (e, $el) {
                $el.fadeOut(100);
            },
            css: {},
            className: 'tooltipsy',
            delay: 200,
            showEvent: 'mouseenter',
            hideEvent: 'mouseleave'
        }
    };

    $.fn.tooltipsy = function(options) {
        return this.each(function() {
            new $.tooltipsy(this, options);
        });
    };

})(jQuery);



var date = function(format, timestamp){ 
	timestamp = parseInt(timestamp);
    var a, jsdate=((timestamp) ? new Date(timestamp*1000) : new Date());
    var pad = function(n, c){
        if((n = n + "").length < c){
            return new Array(++c - n.length).join("0") + n;
        } else {
            return n;
        }
    };
    var txt_weekdays = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    var txt_ordin = {1:"st", 2:"nd", 3:"rd", 21:"st", 22:"nd", 23:"rd", 31:"st"};
    var txt_months = ["", "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"]; 
    var f = {
        // Day
        d: function(){return pad(f.j(), 2)},
        D: function(){return f.l().substr(0,3)},
        j: function(){return jsdate.getDate()},
        l: function(){return txt_weekdays[f.w()]},
        N: function(){return f.w() + 1},
        S: function(){return txt_ordin[f.j()] ? txt_ordin[f.j()] : 'th'},
        w: function(){return jsdate.getDay()},
        z: function(){return (jsdate - new Date(jsdate.getFullYear() + "/1/1")) / 864e5 >> 0},
       
        // Week
        W: function(){
            var a = f.z(), b = 364 + f.L() - a;
            var nd2, nd = (new Date(jsdate.getFullYear() + "/1/1").getDay() || 7) - 1;
            if(b <= 2 && ((jsdate.getDay() || 7) - 1) <= 2 - b){
                return 1;
            } else{
                if(a <= 2 && nd >= 4 && a >= (6 - nd)){
                    nd2 = new Date(jsdate.getFullYear() - 1 + "/12/31");
                    return date("W", Math.round(nd2.getTime()/1000));
                } else{
                    return (1 + (nd <= 3 ? ((a + nd) / 7) : (a - (7 - nd)) / 7) >> 0);
                }
            }
        },
       
        // Month
        F: function(){return txt_months[f.n()]},
        m: function(){return pad(f.n(), 2)},
        M: function(){return f.F().substr(0,3)},
        n: function(){return jsdate.getMonth() + 1},
        t: function(){
            var n;
            if( (n = jsdate.getMonth() + 1) == 2 ){
                return 28 + f.L();
            } else{
                if( n & 1 && n < 8 || !(n & 1) && n > 7 ){
                    return 31;
                } else{
                    return 30;
                }
            }
        },
       
        // Year
        L: function(){var y = f.Y();return (!(y & 3) && (y % 1e2 || !(y % 4e2))) ? 1 : 0},
        Y: function(){return jsdate.getFullYear()},
        y: function(){return (jsdate.getFullYear() + "").slice(2)},
       
        // Time
        a: function(){return jsdate.getHours() > 11 ? "pm" : "am"},
        A: function(){return f.a().toUpperCase()},
        B: function(){
            var off = (jsdate.getTimezoneOffset() + 60)*60;
            var theSeconds = (jsdate.getHours() * 3600) + (jsdate.getMinutes() * 60) + jsdate.getSeconds() + off;
            var beat = Math.floor(theSeconds/86.4);
            if (beat > 1000) beat -= 1000;
            if (beat < 0) beat += 1000;
            if ((String(beat)).length == 1) beat = "00"+beat;
            if ((String(beat)).length == 2) beat = "0"+beat;
            return beat;
        },
        g: function(){return jsdate.getHours() % 12 || 12},
        G: function(){return jsdate.getHours()},
        h: function(){return pad(f.g(), 2)},
        H: function(){return pad(jsdate.getHours(), 2)},
        i: function(){return pad(jsdate.getMinutes(), 2)},
        s: function(){return pad(jsdate.getSeconds(), 2)},

        O: function(){
            var t = pad(Math.abs(jsdate.getTimezoneOffset()/60*100), 4);
            if (jsdate.getTimezoneOffset() > 0) t = "-" + t; else t = "+" + t;
            return t;
        },
        P: function(){var O = f.O();return (O.substr(0, 3) + ":" + O.substr(3, 2))},
        c: function(){return f.Y() + "-" + f.m() + "-" + f.d() + "T" + f.h() + ":" + f.i() + ":" + f.s() + f.P()},
        U: function(){return Math.round(jsdate.getTime()/1000)}
    };
    return format.replace(/[\\]?([a-zA-Z])/g, function(t, s){
        if( t!=s ){
            ret = s;
        } else if( f[s] ){
            ret = f[s]();
        } else{
            ret = s;
        }
        return ret;
    });
}


var Base64 =  (function(){
    var _keyStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";  
    var encode = function (input) {  
        var output = "";  
        var chr1, chr2, chr3, enc1, enc2, enc3, enc4;  
        var i = 0;  
        input = _utf8_encode(input);  
        while (i < input.length) {  
            chr1 = input.charCodeAt(i++);  
            chr2 = input.charCodeAt(i++);  
            chr3 = input.charCodeAt(i++);  
            enc1 = chr1 >> 2;  
            enc2 = ((chr1 & 3) << 4) | (chr2 >> 4);  
            enc3 = ((chr2 & 15) << 2) | (chr3 >> 6);  
            enc4 = chr3 & 63;  
            if (isNaN(chr2)) {  
                enc3 = enc4 = 64;  
            } else if (isNaN(chr3)) {  
                enc4 = 64;  
            }  
            output = output +  
            _keyStr.charAt(enc1) + _keyStr.charAt(enc2) +  
            _keyStr.charAt(enc3) + _keyStr.charAt(enc4);  
        }  
        return output;  
    }  
    // public method for decoding  
    var decode = function (input) {  
        var output = "";  
        var chr1, chr2, chr3;  
        var enc1, enc2, enc3, enc4;  
        var i = 0;  
        input = input.replace(/[^A-Za-z0-9\+\/\=]/g, "");  
        while (i < input.length) {  
            enc1 = _keyStr.indexOf(input.charAt(i++));  
            enc2 = _keyStr.indexOf(input.charAt(i++));  
            enc3 = _keyStr.indexOf(input.charAt(i++));  
            enc4 = _keyStr.indexOf(input.charAt(i++));  
            chr1 = (enc1 << 2) | (enc2 >> 4);  
            chr2 = ((enc2 & 15) << 4) | (enc3 >> 2);  
            chr3 = ((enc3 & 3) << 6) | enc4;  
            output = output + String.fromCharCode(chr1);  
            if (enc3 != 64) {  
                output = output + String.fromCharCode(chr2);  
            }  
            if (enc4 != 64) {  
                output = output + String.fromCharCode(chr3);  
            }  
        }  
        output = _utf8_decode(output);  
        return output;  
    }
    // private method for UTF-8 encoding  
    _utf8_encode = function (string) {  
        string = string.replace(/\r\n/g,"\n");  
        var utftext = "";  
        for (var n = 0; n < string.length; n++) {  
            var c = string.charCodeAt(n);  
            if (c < 128) {  
                utftext += String.fromCharCode(c);  
            } else if((c > 127) && (c < 2048)) {  
                utftext += String.fromCharCode((c >> 6) | 192);  
                utftext += String.fromCharCode((c & 63) | 128);  
            } else {  
                utftext += String.fromCharCode((c >> 12) | 224);  
                utftext += String.fromCharCode(((c >> 6) & 63) | 128);  
                utftext += String.fromCharCode((c & 63) | 128);  
            }  
   
        }  
        return utftext;  
    }  
   
    // private method for UTF-8 decoding  
    _utf8_decode = function (utftext) {  
        var string = "";  
        var i = 0;  
        var c = c1 = c2 = 0;  
        while ( i < utftext.length ) {  
            c = utftext.charCodeAt(i);  
            if (c < 128) {  
                string += String.fromCharCode(c);  
                i++;  
            } else if((c > 191) && (c < 224)) {  
                c2 = utftext.charCodeAt(i+1);  
                string += String.fromCharCode(((c & 31) << 6) | (c2 & 63));  
                i += 2;  
            } else {  
                c2 = utftext.charCodeAt(i+1);  
                c3 = utftext.charCodeAt(i+2);  
                string += String.fromCharCode(((c & 15) << 12) | ((c2 & 63) << 6) | (c3 & 63));  
                i += 3;  
            }  
        }  
        return string;  
    };
    return {
        encode:encode,
        decode:decode
    }
})();
var base64_encode = Base64.encode;
var base64_decode = Base64.decode;