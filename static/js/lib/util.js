/*changed by warlee
* @link http://kodcloud.com/
* @author warlee | e-mail:kodcloud@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kodcloud.com/tools/license/license.txt
*/

//return 时间戳到秒
var time = function(){
	var time = (new Date()).valueOf();
	return parseInt(time/1000);
}
//return 时间戳，含小数点；小数点部分为毫秒；date('Y/m/d H:i:s',time()) or date('Y/m/d H:i:s')
var timeFloat = function(){
	var time = (new Date()).valueOf();
	return time/1000;
}
var urlEncode = encodeURIComponent;
var urlDecode = function(str){
	try {
		return decodeURIComponent(str);
	} catch (e) {
		return str;
	}
};

var UUID = function(){
	return 'uuid_'+time()+'_'+Math.ceil(Math.random()*10000)
}
var round = function(val,point){//随机数
	if (!point) point = 2;
	point = Math.pow(10,parseInt(point));
	return  Math.round(parseFloat(val)*point)/point;
}
var roundFromTo = function(from,to){//生成from到to的随机数；整数，包含to不包含from
	var react = to - from;
	return Math.ceil(Math.random()*react+from);
}
var roundString = function(len){
	var result = "";
	var charArr = '01234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	len = len || 5;
	for (var i = 0; i < len; i++) {
		var index = roundFromTo(0,charArr.length) - 1;
		result += charArr.charAt(index);
	}
	return result;
}
var md5 = function(str){
	return CryptoJS.MD5(str).toString();
}
var aesEncode = function(str,key){
	return CryptoJS.AES.encrypt(str,key).toString();
}
var aesDecode = function(str,key){
	return CryptoJS.AES.decrypt(str,key).toString(CryptoJS.enc.Utf8);
}
var replaceAll = function(str, find, replace_to){
	while (str.indexOf(find) >= 0){
	   str = str.replace(find, replace_to);
	}
	return str;
}
var ltrim = function (str,remove){
	if (!str || str.length == 0) return "";
	var i;remove = remove==undefined?' ':remove;
	while (str.substring(0,remove.length) == remove ) {
		str = str.substring(remove.length);
	}
	return str;
}
var rtrim = function (str,remove){
	if (typeof(str) != 'string') return "";
	var i;remove = remove == undefined?' ' : remove;
	while (str.substring(str.length - remove.length) == remove ) {
		str = str.substring(0,str.length - remove.length);
	}
	return str;
}
var trim = function (str,remove){
	if(remove == undefined){
		return str.replace(/(^\s*)|(\s*$)/g,"");
	}
	return ltrim(rtrim(str,remove),remove);
}
var quoteHtml = function(str){
	str = str.replace(/"/g,'&quot;');
	str = str.replace(/'/g,'&#39;');
	return str;
}
var quoteEncode = function(str){
	str = str.replace(/(['"])/g,'\\$1');
	return str;
}
var strAdd=function(str,add){
	add=add==undefined?1:add;
	var res='';
	for(var i=0;i<str.length;i++){
		res+=String.fromCharCode((str[i]).charCodeAt()+add);
	}
	return res;
}
var isWap = function(){
	if(navigator.userAgent.match(/(iPhone|iPod|Android|ios|MiuiBrowser)/i)){
		return true;
	}
	return false;
}

//var obj1 = $.extend({}, obj);//浅拷贝
//var obj2 = $.extend(true, {}, obj);//深拷贝

$.objClone = function(obj){
	return $.extend(true, {}, obj);
}

//跨框架数据共享;
var KOD_NAMESPACE = 'kod';
var ShareData = {
	data: function (name, value) {
		var top = ShareData.frameTop();
		var cache = top['_CACHE'] || {};
		top['_CACHE'] = cache;
		if(name==undefined){
			return cache;
		}
		return value !== undefined ? cache[name] = value : cache[name];
	},
	remove: function (name) {
		var top = ShareData.frameTop();
		var cache = top['_CACHE'];
		if (cache && cache[name]) delete cache[name];
	},
	frameChild:function(frame,action){
		if (!window.frames[frame]) return false;
		var that = window.frames[frame];
		try {
			action(that);
		} catch (e) {
			console.trace();
		}
		return that;
	},
	frameTop:function(frame,action){//frame=='' 则parent;为空则获取；指定则从top找child
		var top = window;
		var testParent = function (page) {
			try {
				if(page.parent && page.parent.KOD_NAMESPACE){
					return page.parent;
				}else{
					return false;
				}
			} catch (e) {
				return false;
			}
		};
		while(testParent(top)!==false && top!=testParent(top)){
			top = testParent(top);
		}
		if (frame!='' && typeof(frame) != 'undefined') {
			if (!top.frames[frame]) return false;
			top = top.frames[frame];
		}
		if(top == window){
			return top;//自己则忽略事件调用，避免循环
		}
		if (typeof (action) == 'function'){
			try {
				action(top);
			} catch (e) {
				//console.trace();
			}
		}
		return top;
	}
};
jQuery.easing.def="easeInOutCubic";//easeOutExpo,easeInOutExpo,easeInOutSine


/**
 * 通知中心[观察者模式]
 * 
 * Hook.bind('test',function(a){console.log('a2'+a,this);});
 * Hook.once('test',console.log);
 * Hook.trigger('test',123,3,4,5);
 * Hook.trigger('test',456,234,234,22);
 * 
 */
var Hook = function(){}
var Hook = (function(){
	// {'kodReady':[{action:action,once:false},{action:action,once:true}]}
	var eventList = {};
	var debug = false;
	return {
		debug:function(type){
			debug = type;
		},
		get:function(key){
			if(key) {
				return eventList[key];
			}else{
				return eventList;
			}
		},
		bind:function(key,action,once){
			debug && console.trace('bind',arguments);
			once = once?true:false;
			var actionArr = key.split(',');
			for (var i = 0; i < actionArr.length; i++) {
				var current = actionArr[i];
				if(!eventList[current]){
					eventList[current] = [];
				}
				if(!$.isArray(action)){
					action = [action];
				}
				for (var j = 0; j < action.length; j++) {
					eventList[current].push({
						"action":action[j],
						"once":once
					});
				}
			}
			return this;
		},
		unbind:function(key){
			delete eventList[key];
			return this;
		},
		once:function(key,action){
			this.bind(key,action,true);
			return this;
		},
		trigger:function(){
			debug && console.info('trigger',arguments);
			var key = Array.prototype.shift.apply(arguments);
			var arr = eventList[key];
			var newArr = [];
			if(!arr) return;

			var result = false;
			for (var i = 0; i < arr.length; i++) {
				var item = arr[i];
				debug && console.info('trigger',item);
				if(!item.once){
					newArr.push(item);
				}
				try{
					var current = item['action'].apply(this,arguments);
					if(current !== undefined){
						result = current;
					}
				}catch(e){
					console.error(e,key);
				}
			}
			eventList[key] = newArr;
			return result;
		}
	}
})();


//cookie操作
//titmeout 单位为天
var Cookie = (function(){
	var data = {};
	var _init = function(){
		data = {};//初始化
		var cookieArray=document.cookie.split("; ");
		for (var i=0;i<cookieArray.length;i++){
			var arr=cookieArray[i].split("=");
			if( typeof(data[arr[0]]) == 'undefined' ){
				data[arr[0]] = unescape(arr[1]);
			}
		}
		return data;
	}
	var get = function(key){//没有key代表获取所有
		_init();
		if (key == undefined) return data;
		return data[key];
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
		for(var key in data){
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

//LocalData操作 数据存储
var LocalData = function(){};
var LocalData = (function(){
	var nameSpace = 'kodcloud-';
	var makeKey = function(key){
		if(key!=''){
			return nameSpace+key;
		}else{
			return key;
		}
	}
	var support = function(){
		try { 
			var supported = !!window.localStorage;
			if (supported) { 
				window.localStorage.setItem("storage","");
				window.localStorage.removeItem("storage");
			}
			return supported;
		}catch(err) { 
			return false;
		}
	}
	var get = function(key){//没有key代表获取所有
		key = makeKey(key);
		if(support()){
			if(key!=undefined){
				return localStorage.getItem(key);
			}else{
				var result = {};
				for (var i = 0; i < localStorage.length; i++) {
					result[localStorage.key(i)] = localStorage.getItem(localStorage.key(i));
				}
				return result;
			}
		}else{
			return Cookie.get(key);
		}
	};
	var set = function(key,value,timeout){
		key = makeKey(key);
		if(support()){
			localStorage.setItem(key,value);
		}else{
			Cookie.set(key,value,timeout);
		}
	};
	var del = function(key){
		key = makeKey(key);
		if(support()){
			localStorage.removeItem(key);
		}else{
			Cookie.del(key);
		}
	};

	//复杂数据读写 只存储json数据
	var setConfig = function(key,value){
		key = makeKey(key);
		value = base64Encode(jsonEncode(value));
		if(support()){
			localStorage.setItem(key,value);
		}
	}
	//复杂数据读写
	var getConfig = function(key){
		var result = this.get(key);
		if(result === null || result == undefined || result == ''){
			return false;
		}else{
			return jsonDecode(base64Decode(result));
		}
	}
	var clear = function(){
		if(support()){
			for(var i=0;i<storage.length;i++){
				localStorage.removeItem(storage.key(i));
			}
		}else{
			Cookie.clear();
		}
	}
	return {
		setSpace:function(space){
			nameSpace = space ? space:'';
		},
		support:support,
		get:get,
		set:set,
		setConfig:setConfig,
		getConfig:getConfig,
		del:del,
		clear:clear
	}
})();


//ie 兼容
if(!Array.indexOf){
	Array.prototype.indexOf = function(obj){
		for(var i=0; i<this.length; i++){
			if(this[i]==obj){
				return i;
			}
		}
		return -1;
	}
}

var jsonEncodeForce = function(obj){
	function censor(censor) {
		var i = 0;
		return function(key, value) {
			if(i !== 0 && typeof(censor) === 'object' && typeof(value) == 'object' && censor == value) 
				return '[Circular]'; 

			if(i >= 100) // seems to be a harded maximum of 30 serialized objects?
			  return '[Unknown]';

			++i; // so we know we aren't using the original object anymore
			return value;
		}
	}
	return jsonEncode(obj,censor(obj));
}


//队列数据类；用于历史记录记录前进后退等;数据浏览器持久化
//eg:  var historySearch  = new Queen(10,'historySearch');
function Queen(maxLength,identify){
	//数据读取与存储
	var data = function(list){
		if(!LocalData.support()){
			return [];
		}
		if(list == undefined){
			return LocalData.getConfig(identify);
		}else{
			return LocalData.setConfig(identify,list);
		}
	}
	var queenList = data();//本地存储初始化
	if(!queenList){
		queenList = [];
	}
	var index = queenList.length - 1;
	var add = function(val){
		index = queenList.length-1;//重置
		if (val == '' || val == queenList[queenList.length - 1]){
			return;
		}
		if (queenList.length - 1 >= maxLength) {
			queenList = queenList.slice(1 , queenList.length);
		}
		queenList.push(val);
		data(queenList);
		index = queenList.length - 1;//重置
	};
	var next = function(){
		if (++index <= queenList.length - 1) {
			return queenList[index];
		}else{
			index = queenList.length;
			return '';
		}
	}
	var back = function(){
		if (--index >= 0) {
			return queenList[index];
		}else{
			index = 0;
			return queenList[0];
		}
	}
	var last = function(){
		return queenList[queenList.length - 1];
	}
	var clear = function(){
		index = 0;
		queenList = [];
		data(queenList);
	}
	return {
		add:add,
		back:back,
		next:next,
		last:last,
		clear:clear,
		list:function(){
			return queenList;
		}
	}
};


function download(data, strFileName, strMimeType) {
	var self = window, // this script is only for browsers anyway...
		defaultMime = "application/octet-stream", // this default mime also triggers iframe downloads
		mimeType = strMimeType || defaultMime,
		payload = data,
		url = !strFileName && !strMimeType && payload,
		anchor = document.createElement("a"),
		toString = function(a){return String(a);},
		myBlob = (self.Blob || self.MozBlob || self.WebKitBlob || toString),
		fileName = strFileName || "download",
		blob,
		reader;
		myBlob= myBlob.call ? myBlob.bind(self) : Blob ;
  
	if(String(this)==="true"){
		payload=[payload, mimeType];
		mimeType=payload[0];
		payload=payload[1];
	}
	if(url && url.length< 2048){
		fileName = url.split("/").pop().split("?")[0];
		anchor.href = url; // assign href prop to temp anchor
		if(anchor.href.indexOf(url) !== -1){ // if the browser determines that it's a potentially valid url path:
			var ajax=new XMLHttpRequest();
			ajax.open( "GET", url, true);
			ajax.responseType = 'blob';
			ajax.onload= function(e){ 
			  download(e.target.response, fileName, defaultMime);
			};
			setTimeout(function(){ ajax.send();}, 0); // allows setting custom ajax headers using the return:
			return ajax;
		} // end if valid url?
	}
	if(/^data\:[\w+\-]+\/[\w+\-]+[,;]/.test(payload)){
		if(payload.length > (1024*1024*1.999) && myBlob !== toString ){
			payload=dataUrlToBlob(payload);
			mimeType=payload.type || defaultMime;
		}else{			
			return navigator.msSaveBlob ?  // IE10 can't do a[download], only Blobs:
				navigator.msSaveBlob(dataUrlToBlob(payload), fileName) :
				saveToData(payload) ; // everyone else can save dataURLs un-processed
		}
	}//end if dataURL passed?

	blob = payload instanceof myBlob ?
		payload :
		new myBlob([payload], {type: mimeType}) ;
	function dataUrlToBlob(strUrl) {
		var parts= strUrl.split(/[:;,]/),
		type= parts[1],
		decoder= parts[2] == "base64" ? atob : decodeURIComponent,
		binData= decoder( parts.pop() ),
		mx= binData.length,
		i= 0,
		uiArr= new Uint8Array(mx);
		for(i;i<mx;++i) uiArr[i]= binData.charCodeAt(i);

		return new myBlob([uiArr], {type: type});
	 }

	function saveToData(url, winMode){
		if ('download' in anchor) { //html5 A[download]
			anchor.href = url;
			anchor.setAttribute("download", fileName);
			anchor.className = "download-js-link";
			anchor.innerHTML = "downloading...";
			anchor.style.display = "none";
			document.body.appendChild(anchor);
			setTimeout(function() {
				anchor.click();
				document.body.removeChild(anchor);
				if(winMode===true){setTimeout(function(){ self.URL.revokeObjectURL(anchor.href);}, 250 );}
			}, 66);
			return true;
		}
		if(/(Version)\/(\d+)\.(\d+)(?:\.(\d+))?.*Safari\//.test(navigator.userAgent)) {
			url=url.replace(/^data:([\w\/\-\+]+)/, defaultMime);
			if(!window.open(url)){ // popup blocked, offer direct download:
				if(confirm("Displaying New Document\n\nUse Save As... to download, then click back to return to this page.")){ location.href=url; }
			}
			return true;
		}
		var f = document.createElement("iframe");
		document.body.appendChild(f);
		if(!winMode){ // force a mime that will download:
			url="data:"+url.replace(/^data:([\w\/\-\+]+)/, defaultMime);
		}
		f.src=url;
		setTimeout(function(){ document.body.removeChild(f); }, 333);
	}
	if (navigator.msSaveBlob) { // IE10+ : (has Blob, but not a[download] or URL)
		return navigator.msSaveBlob(blob, fileName);
	}
	if(self.URL){
		saveToData(self.URL.createObjectURL(blob), true);
	}else{
		if( typeof(blob) === "string" || 
			blob.constructor===toString ){
			return saveToData("data:"+mimeType+";base64,"+window.btoa(blob));
		}
		reader=new FileReader();
		reader.onload=function(e){
			saveToData(this.result);
		};
		reader.readAsDataURL(blob);
	}
	return true;
}

var pathTools = function(){};
var pathTools = (function(){
	var pathThis = function(path){
		var arr = path.split('/');
		return arr[arr.length - 1];
	}
	var fileSize = function(size,pointNum){
		if(size==undefined||size==''){
			return '0B'
		}
		if(pointNum==undefined){
			pointNum = 1;
		}
		if (size <= 1024) return parseInt(size)+"B";
		size = parseInt(size);
		var unit = {
			'G' : 1073741824,	// pow( 1024, 3)
			'M' : 1048576,		// pow( 1024, 2)
			'K' : 1024,		// pow( 1024, 1)
			'B' : 1			// pow( 1024, 0)
		};
		for (var key in unit) {
			if (size >= unit[key]){
				return (size/unit[key]).toFixed(pointNum)+key;
			}
		}
	};

	var strSortChina = function(a,b){
		var arr = '0123456789零一二三四五六七八九十百千万壹贰叁肆伍陆柒捌玖拾佰仟万';//
		for (var i=0;i<Math.max(a.length,b.length);i++){
			if (a.charAt(i) != b.charAt(i)){
				var aIndex = arr.indexOf(a.charAt(i));
				var bIndex = arr.indexOf(b.charAt(i));
				if(aIndex!=-1 && bIndex!=-1){//有该字符
					if(aIndex>bIndex){
						return 1;
					}else if(aIndex<bIndex){
						return -1;
					}else{
						return 0;
					}
				}else{//字符比较
					if(a.charAt(i)>b.charAt(i)){
						return 1;
					}else if(a.charAt(i)<b.charAt(i)){
						return -1;
					}else{
						return 0;
					}
				}
			}
		}
		return 0;
	}
	//字符串排序函数 ；222>111,bbb>aaa; bbb(1).txt>bbb(0).txt [bbb(100).txt>bbb(55).txt]
	//https://github.com/overset/javascript-natural-sort/blob/master/speed-tests.html
	var strSort = function(a,b){
		if(a==undefined || b==undefined){
			return 0;
		}
		if($.isNumeric(a) && $.isNumeric(b)){
			a = parseFloat(a);b = parseFloat(b);
			return a>b?1:(a==b?0:-1);
		}
		var re = /([0-9\.]+)/g,	// /(-?[0-9\.]+)/g,  负数 2016-11-09 2016-11-10歧义
			x = a.toString().toLowerCase() || '',
			y = b.toString().toLowerCase() || '',
			nC = String.fromCharCode(0),
			xN = x.replace( re, nC + '$1' + nC ).split(nC),
			yN = y.replace( re, nC + '$1' + nC ).split(nC),
			xD = (new Date(x)).getTime(),
			yD = xD ? (new Date(y)).getTime() : null;

		if ( yD ){//时间戳排序
			if ( xD < yD ){
				return -1;
			}else if ( xD > yD ){
				return 1;
			}
		}
		for( var cLoc = 0, numS = Math.max(xN.length, yN.length); cLoc < numS; cLoc++ ) {
			oFxNcL = parseFloat(xN[cLoc]) || xN[cLoc];
			oFyNcL = parseFloat(yN[cLoc]) || yN[cLoc];
			if(oFxNcL== oFyNcL){
				continue;
			}
			if(typeof(oFxNcL) == 'string' && typeof(oFyNcL)== 'string'){
				//自定义字符大小顺序
				var resultCurrent = strSortChina(oFxNcL,oFyNcL);
				if(resultCurrent!=0){
					return resultCurrent;
				}
			}else{
				if (oFxNcL < oFyNcL){
					return -1;
				}else if (oFxNcL > oFyNcL){
					return 1;
				}
			}
		}
		return 0;
	}

	return {
		fileSize:fileSize,
		strSort:strSort,
		pathThis:pathThis
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


//tips message
//type: success/error/warning/info
var Tips =  (function(){
	var inTime  = 400;
	var delay = 1000;
	var staticPath = "./static/";
	if(typeof(G) != "undefined"){
		staticPath = G.staticPath;
	}
	var _init = function(single,msg,code){
		var tipsIDname = UUID();
		if(single){
			tipsIDname = 'messageTips';
		}

		var tipsID = "#"+tipsIDname;
		if ($(tipsID).length ==0) {
			var html='<div id="'+tipsIDname+'" class="tips-box"><i class="tips-icon"></i><div class="tips-msg"><p></p></div>'+
				'<a class="tips-close">×</a><div style="clear:both"></div></div>'
			$('body').append(html);

			$(tipsID).show().css({'left':($(window).width() - $(tipsID).innerWidth())/2});
			$(window).bind('resize',function(){
				if ($(tipsID).css('display') =="none") return;
				self.stop(true,true)
				$(tipsID).css({'left':($(window).width() - $(tipsID).width()) / 2});
			});
			$(tipsID).find('.tips-close').click(function(){
				$(tipsID).animate({opacity:0},
					inTime,0,function(){
						$(this).hide();
					});
			});
		}
		var self = $(tipsID),theType;
		switch(code){//  success/warning/info/error
			case 100:delay = 2000;//加长时间 5s
			case true:
			case undefined:
			case 'success':theType = 'success';break;
			case 'info':theType = 'info';break;
			case 'warning':theType = 'warning';break;
			case false:
			case 'error':theType = 'error';delay = 2000;break;
			default:theType = 'info';break;
		}

		self.removeClass().addClass('tips-box '+theType);
		if (msg != undefined) self.find('.tips-msg p').html(msg);
		$(tipsID).show().css({'left':($(window).width() - $(tipsID).innerWidth())/2});
		return self;
	};
	var tips = function(msg,code){
		if (msg && typeof(msg) == 'object'){
			code = msg.code;
			msg  = msg.data;
		}
		var self = _init(false,msg,code);
		self.stop(true,true)
			.css({opacity:0,'top':-self.height()})
			.show()
			.animate({opacity:1,top:0},inTime,0);
		setTimeout(function(){
			self.animate({opacity:0,top:-self.height()},inTime,0,function(){
				self.remove();
			});
		},delay);
	};

	var pop = function(msg){
		var tipsIDname = 'messageTipsPop';
		var $self = $("#"+tipsIDname);
		if ($self.length ==0) {
			var html='<div id="'+tipsIDname+'" class="tips-box-pop"><div class="tips-msg"></div></div>';
			$('body').append(html);
			$self = $("#"+tipsIDname);
		}
		$self.find('.tips-msg').html(msg);
		$self.css({
			'left':($(window).width() - $self.innerWidth())/2,
			'top':($(window).height() - $self.innerHeight())/2
		});

		var animateTime = 150;
		$self.stop(true,true)
			.fadeIn(animateTime)
			.animate({opacity:0.4},animateTime,0)
			.delay(delay)
			.animate({opacity:0},animateTime,0,function(){
				$self.remove();
			});
	};

	var loading = function(msg,code){
		if (typeof(msg) == 'object'){
			code=msg.code;
			msg = msg.data;
		}
		if (msg == undefined) msg = _.get(window,'LNG.loading','loading...');
		msg+= "&nbsp;&nbsp; <img src='"+staticPath+"images/common/loading_circle.gif'/>";

		var self = _init(true,msg,code);
		self.stop(true,true)
			.css({'opacity':'0','top':-self.height()})
			.animate({opacity:1,top:0},inTime,0);
	};
	var close = function(msg,code){
		if (typeof(msg) == 'object'){
			try{
				code=msg.code;msg = msg.data;
				if(code && typeof(msg) != 'string'){
					msg = "Success!";
					if(window.LNG && LNG.success){
						msg = LNG['success'];
					}					
				}
			}catch(e){
				code=0;msg ='';
			};
		}
		var self = _init(true,msg,code);
		setTimeout(function(){
			self.stop(true,true).animate({opacity:0,top:- self.height()},inTime,'linear',function(){
				self.remove();
			});
		},delay);
		// $(self).stop(true,true)
		// 	.show()
		// 	.delay(delay)
		// 	.animate({opacity:0,top:- self.height()},inTime,'linear',function(){
		// 		self.remove();
		// 	});
	};
	return{
		tips:tips,
		pop:pop,
		loading:loading,
		close:close
	}
})();

if($.artDialog){
	$.artDialog.loading = function(msg){
		msg = msg || LNG.loading || 'loading...';
		return $.artDialog({
			title:false,
			content:"<div style='text-align:center;line-height:1.6em;'><img src='./static/images/common/loading.gif'/><br/>"+msg+"</div>",
			padding:'10px 0px'
		});
	}
}

var Title = (function(){
	var oldTitle = document.title;
	var reset = function(){
		document.title = oldTitle;
	}
	var set = function(msg){
		document.title = msg + '        ' +oldTitle;
	}
	return {
		reset:reset,
		set:set
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

//点击水波效果；按钮
var loadRipple = function(search_arr,ignoreArr){
	var UUID = function(){
		var time = (new Date()).valueOf();
		return 'uuid_'+parseInt(time/1000)+'_'+Math.ceil(Math.random()*10000)
	}
	var getTarget = function($target){
		for (var i = 0; i < search_arr.length; i++) {
			var se = search_arr[i];
			if( se.substr(0,1) == '#'){
				if($target.attr('id') == se.substr(1) ){
					return $target;
				}else if($target.parent(se).length!=0){
					return $($target.parents(se)[0]);
				}
			}else if( se.substr(0,1) == '.'){
				if($target.hasClass(se.substr(1)) ){
					return $target;
				}else if($target.parents(se).length!=0){
					return $($target.parents(se)[0]);
				}
			}else{
				if($target.is(se)){
					return $target;
				}else if($target.parents(se).length!=0){
					return $($target.parents(se)[0]);
				}
			}
		}
		return '';
	}
	var isIgnore = function($target){
		for (var i = 0; i < ignoreArr.length; i++) {
			var select = ignoreArr[i];
			if($target.closest(select).length !=0){//从当前想上查找
				return true;
			}
		}
		return false;
	}

	if (typeof(Worker) == "undefined" ||
		$.browser.msie && $.browser.version<=10) { //ie 10不支持 但支持worker
	   return;//不支持html5 css3
	}
	//|| $(e.target).parents(".aui-state-focus").length!=0
	$('body').on('mousedown', function (e) {
		var $target= getTarget($(e.target));
		if($target=='' || isIgnore($target)){
			return;
		}
		var uuid = 'ripple-'+UUID();
		var father = $target;//$(this) $target
		var circleWidth = $target.outerWidth();
		$('<div class="ripple-father" id="'+uuid+'"><div class="ripple"></div></div>').appendTo(father);
		if($target.outerWidth()<$target.outerHeight()){
			circleWidth = $target.outerHeight();
		}
		circleWidth = circleWidth>150?150:circleWidth;
		circleWidth = circleWidth<50?50:circleWidth;

		var $ripp = $('#'+uuid).css({
			left: 0,
			top:  0,
			'border-radius':$target.css("border-radius"),
			width: $target.innerWidth(),
			height:$target.innerHeight()
		});

		var position = $ripp.parent().css('position');
		if(position != 'absolute' && position != 'fixed'){//父元素为绝对定位则不设置相对定位
			$ripp.parent().css('position','relative');
		}
		$('#'+uuid+' .ripple').css({
			'background':$target.css('color'),
			"margin-left":e.pageX - circleWidth/2 - $target.offset().left,
			"margin-top": e.pageY - circleWidth/2 - $target.offset().top,
			"width": circleWidth,
			"height":circleWidth
		});

		var animateTime = 700;
		setTimeout(function(){
			$ripp.find('.ripple').css('transform',"scale(2.5)");
		},animateTime);
		$(this).one('click mouseup mouseleave',function(e){
			$ripp.animate({'opacity':0},400,function(){
				$ripp.remove();
			});
		});
	});
}

//通用遮罩层
var MaskView =  (function(){
	var opacity = 0.7;
	var color   ='#000';
	var animatetime = 250;
	var maskId  = "#windowMaskView";
	var maskContent = '#maskViewContent';
	var staticPath = "./static/";
	if(typeof(G) != "undefined"){
		staticPath = G.staticPath;
	}
	var add = function(content,t_opacity,t_color,time){
		if (t_opacity != undefined) opacity == t_opacity;
		if (t_color != undefined) color == t_color;
		if (time != undefined) animatetime == time;

		if ($(maskId).length == 0) {
			var html ='<div id="windowMaskView" style="position:fixed;top:0;left:0;right:0;bottom:0;background:'+
			color+';opacity:'+opacity+';filter:alpha(opacity='+(opacity*100)+');z-index:9998;"></div><div id="maskViewContent" style="position:absolute;z-index:9999"></div>';
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
		add("<div style='font-size:50px;color:#fff;'>"+msg+"</div>");
	}
	var image = function(url){
		add("<img class='kod_image_view_loading' src='"+staticPath+"images/common/loading_black.gif' style='position:fixed;top:50%;left:50%;opacity:0.5;z-index:99'/>"+
			"<img src='"+htmlEncode(url)+"' class='image kod_image_view' "+
			" style='opacity:0.01;-webkit-box-reflect: below 1px -webkit-gradient(linear,left top,left bottom,from(transparent),"+
			"color-stop(80%,transparent),color-stop(70%,rgba(255,255,255,0)),to(rgba(255,255,255,0.3)));'/>");
		var $content = $(maskContent)
		var $dom = $content.find('.image');
		var dragFlag = false,E;
		var old_left,old_top;

		$('#maskViewContent .kod_image_view_loading').fadeIn(300);
		$('#maskViewContent .kod_image_view').load(function(){
			$('#maskViewContent .kod_image_view_loading').stop(true).fadeOut(500, function() {
				$(this).remove();
			});
			_resize();
			$(this).css('opacity',1.0).addClass('animated-500 dialogShow');
		});
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

		$('#windowMaskView,#maskViewContent img').mouseWheel(function(delta){
			var offset = delta>0?1:-1;
			offset = offset * Math.abs(delta/3);
			var o_w = parseInt($dom.width()),
				o_h=parseInt($dom.height()),
				w =  o_w * (1+offset/5),
				h =  o_h * (1+offset/5);
			if(w<=20 || h<=20) return;
			if(w>=10000 || h>=10000) return;

			var top  = parseInt($content.css("top"))-(h-o_h)/2;
			var left = parseInt($content.css("left"))-(w-o_w)/2;
			$(maskContent+' .image').stop(false)
				.animate({'width':w,'height':h,'top':top,'left':left},100);
		});
	}
	var imageSize = function(){
		var $dom = $(maskContent).find('.image');
		if ($dom.length == 0) return;
		$dom.load(function(){ 
			if (this.complete || this.readyState == "complete") { 
				var percent = 0.7,
					w_width = $(window).width(),
					w_height= $(window).height(),
					m_width = this.width,
					m_height= this.height,
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
		});
	}
	var close = function(){
		$(maskId).fadeOut(animatetime);
		if ($(maskContent).find('.image').length!=0) {
			$(maskContent+','+maskContent+' .image').animate({
				'width':0,
				'height':0,
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
		tips:tips,
		close:close
	}
})();

(function(w){
    if(/msie|applewebkit.+safari/i.test(w.navigator.userAgent)){
        var _sort = Array.prototype.sort;
        Array.prototype.sort = function(fn){
            if(!!fn && typeof fn === 'function'){
                if(this.length < 2) return this;
                var i = 0, j = i + 1, l = this.length, tmp, r = false, t = 0;
                for(; i < l; i++){
                    for(j = i + 1; j < l; j++){
                        t = fn.call(this, this[i], this[j]);
                        r = (typeof t === 'number' ? t : !!t ? 1 : 0) > 0 ? true : false;
                        if(r){
                            tmp = this[i];
                            this[i] = this[j];
                            this[j] = tmp;
                        }
                    }
                }
                return this;
            } else {
                return _sort.call(this);
            }
        };
    }
})(window);
//textarea自适应高度
(function($){
	$.fn.exists = function(){
		return $(this).length >0;
	}
	$.fn.displayWidth = function(){//文本宽度
		var text = $(this).text() || $(this).val();
		var html = "<span style='z-index:-1;;white-space: nowrap;font-size:"+$(this).css('font-size')+"'>"+text+"</span>";
		var $html = $(html);
		$html.appendTo('body');
		var size = $html.get(0).offsetWidth;
		$html.remove();
		return size;
	}
	$.fn.autoTextarea = function(options) {
		var defaults={
			minHeight:34,
			padding:0
		};
		var opts = $.extend({},defaults,options);
		var ie = !!window.attachEvent && !window.opera;
		var resetHeight = function(that){
			if($(that).is('input')){//input则自动调节宽度
				$(that).css('width',$(that).displayWidth()+20);
				return;
			}
			if(!ie) that.style.height = opts.minHeight+"px";
			var height = that.scrollHeight-opts.padding;
			if(height<=opts.minHeight){
				that.style.height = opts.minHeight+"px";
			}else{
				that.style.height = height+"px";
			}
		}
		this.each(function(){
			$(this).die("paste cut keydown keyup focus blur change")
				   .live("paste cut keydown keyup focus blur change",function(){
				resetHeight(this);
			});
			resetHeight(this);
		});
	};

	//长按
	$.fn.longPress = function(callback,time){
		if(time == undefined) time = 2000;
		$(this).die('mousedown').live('mousedown', function() {
			var timer = setTimeout(function() {
				callback(this);
			},time);
			$(this).data('longPressTimer',timer);
		}).die('mouseup').live('mouseup', function(){
			clearTimeout($(this).data('longPressTimer'));
		}).die('mouseout').live('mouseout', function(){
			clearTimeout($(this).data('longPressTimer'));
		});
	}

	$.fn.inputChange = function(callback){
		this.each(function(){
			$(this).on('input propertychange change blur', function() {
				if($(this).prop('comStart')) return;    // 中文输入过程中不截断
				var value = $(this).val();
				callback(this,value);
			}).on('compositionstart', function(){
				$(this).prop('comStart', true);
			}).on('compositionend', function(){
				$(this).prop('comStart', false);
				$(this).trigger('input');
			});
		});
		return this;
	}

	//自动focus，并移动光标到指定位置，默认移到最后
	$.fn.textFocus=function(index){
		var range,len,index=index===undefined?0:parseInt(v);
		if($(this).is(':focus')){
			return;
		}

		var thatDom = $(this).get(0);
		index = (index==undefined?this.value.length:parseInt(index));
		if($.browser.msie){
			var range=thatDom.createTextRange();
			index===0?range.collapse(false):range.move("character",index);
			range.select();
		}else{
			thatDom.setSelectionRange(index,0);
		}
		this.focus();
		return this;
	};

	//选中input内文本段，并移动光标到最后
	$.fn.textSelect=function(from,to){
		if($(this).length == 0 || $(this).is(':focus')){
			return;
		}

		var thatDom = $(this).get(0);
		from = (from==undefined?0:parseInt(from));
		to = (to==undefined? $(this).val().length:parseInt(to));
		if($.browser.msie){
			var range=thatDom.createTextRange();
			range.moveEnd('character',to);
			range.moveStart('character',from);
			range.select();
		}else{
			thatDom.setSelectionRange(from,to-from);
		}
		this.focus();
		return this;
	};
})(jQuery);

//拖动事件
(function($){
	$.fn.drag = function(obj,isStopPP) {
		this.each(function(){
			var isDraging 		= false;
			var mouseFirstX		= 0;
			var mouseFirstY		= 0;
			var offsetX = 0;
			var offsetY = 0;

			var $that = $(this);
			if(isWap()){
			//移动端拖拽支持
				$that.unbind('mousedown').on('touchstart',function(e){
					dragStart(e);
				}).unbind('touchmove').on('touchmove',function(e){
					dragMove(e);
				}).unbind('touchend').on('touchend',function(e){
					dragEnd(e);
					stopPP(e);
					return false;
				});
			}else{
				$that.die('mousedown').live('mousedown',function(e){
					if (e.which != 1) return true;
					dragStart(e);
					if($that.setCapture) $that.setCapture();
					$(document).mousemove(function(e) {dragMove(e);});
					$(document).one('mouseup',function(e) {
						dragEnd(e);
						if($that.releaseCapture) {$that.releaseCapture();}
						stopPP(e);
						return false;
					});
					if(isStopPP){//指定不冒泡才停止向上冒泡。split拖拽调整宽度，父窗口拖拽框选防止冒泡
						stopPP(e);return false;
					}
					//stopPP(e);return false;//跨iframe导致事件屏蔽问题
				});
			}
			
			var getEvent = function(e){
				if( e.originalEvent && 
					e.originalEvent.targetTouches){
					return  e.originalEvent.targetTouches[0];
				}
				return e;
			}
			var dragStart = function(e){
				var mouse = getEvent(e);
				isDraging = true;
				mouseFirstX = mouse.pageX;
				mouseFirstY = mouse.pageY;
				offsetX = 0;
				offsetY = 0;
				if (typeof(obj["start"]) == 'function'){
					obj["start"](e,$that);
				}
			};
			var dragMove = function(e){
				if (!isDraging) return true;
				if (typeof(obj["move"]) == 'function'){
					var mouse = getEvent(e);
					offsetX = mouse.pageX - mouseFirstX;
					offsetY = mouse.pageY - mouseFirstY;
					obj["move"](offsetX,offsetY,e,$that);
				}
			};
			var dragEnd = function(e){
				if (!isDraging) return false;
				isDraging = false;
				if (typeof(obj["end"]) == 'function'){
					//var mouse = getEvent(e);
					obj["end"](offsetX,offsetY,e,$that);
				}
			};
		});
	};
})(jQuery);


(function($){
	$.getUrlParam = function(name,url){
		if(!url) url = window.location.href;
		var urlParam = $.parseUrl(url);
		if(!name){
			return urlParam;
		}
		return urlParam.params[name];//unescape
	};
	$.parseUrl = function(url){
		if(!url){
			url = window.location.href;
		}
		var a = document.createElement('a');
		a.href = url;
		var result = {
			source: url,
			protocol: a.protocol.replace(':', ''),
			host: a.hostname,
			port: a.port,
			query: a.search,
			params: (function() {
				var ret = {},
					seg = a.search.replace(/^\?/, '').split('&'),
					len = seg.length,
					i = 0,
					s;
				for (; i < len; i++) {
					if (!seg[i]) {
						continue;
					}
					s = seg[i].split('=');
					ret[s[0]] = s[1];
				}
				return ret;
			})(),
			file: (a.pathname.match(/\/([^\/?#]+)$/i) || [, ''])[1],
			hash: a.hash.replace('#', ''),
			path: a.pathname.replace(/^([^\/])/, '/$1'),
			relative: (a.href.match(/tps?:\/\/[^\/]+(.+)/) || [, ''])[1],
			segments: a.pathname.replace(/^\//, '').split('/')
		};
		var port = result.port ? ':'+result.port:'';
		result.url = result.protocol + '://' + result.host + port + result.path + result.query;
		result.origin = result.protocol + '://' + result.host + port;
		return result;
	}

	//选择器，目标含有特殊字符的预处理
	//http://stackoverflow.com/questions/2786538/need-to-escape-a-special-character-in-a-jquery-selector-string
	$.escape = function(str) {
		if(!str){
			return str;
		}
		return str.replace(/[ !"#$%&'()*+,.\/:;<=>?@[\\\]^`{|}~]/g, "\\$&");
	};
	$.setStyle = function(cssText,id){
		var head = document.getElementsByTagName('head')[0] ||document.documentElement;
		var element = document.getElementById(id);
		$(element).remove();

		element = document.createElement('style');
		id && (element.id = id);
		element.type="text/css";
		head.appendChild(element);
		if (element.styleSheet!== undefined) {
			// IE http://support.microsoft.com/kb/262161
			if (document.getElementsByTagName('style').length > 31) {
				throw new Error('Exceed the maximal count of style tags in IE')
			}
			element.styleSheet.cssText = cssText
		}else {
			element.appendChild(document.createTextNode(cssText));
		}
	}
	$.addStyle = function(cssText){
		var head = document.getElementsByTagName('head')[0] ||document.documentElement;
		var id = 'add-style-css-text';
		var element = document.getElementById(id);
		if(!element){
			element = document.createElement('style');
			element.id = 'add-style-css-text';
			element.type="text/css";
			head.appendChild(element);
		}
		if (element.styleSheet!== undefined) {
			element.styleSheet.cssText += cssText
		}else {
			element.appendChild(document.createTextNode(cssText));
		}
	}
	// 进指定字符串通过浏览器下载
	$.htmlDownload = function(str,name){
		if(!/Trident|MSIE/.test(navigator.userAgent)){//html5 支持保存文件
			// http://danml.com/download.html
			download(str, name, "text/html")
		}else{//ie 下载
			var ifr = document.createElement('iframe');
			ifr.style.display = 'none';
			ifr.src = str;
			document.body.appendChild(ifr);
			ifr.contentWindow.document.execCommand('SaveAs', false, name);
			document.body.removeChild(ifr);
		}
	}
	$.printLink = function(link){
		var $iframe = $('#page-print');
		if ($iframe.length > 0) {
			$iframe.remove();
		}
		$('<iframe id="page-print" style="opacity:0.01;width:1px;height:1px;z-index:-1;"></iframe>').appendTo('body');
		var iframe = $('#page-print').get(0);
		iframe.onload = function() {
			iframe.contentWindow.focus();
			iframe.contentWindow.print();
			iframe.contentWindow.blur();
			window.focus();
		};
		if (link) iframe.src = link;
	}

	//是否为ie ie6~11
	$.isIE = function(){
		return !!(window.ActiveXObject || "ActiveXObject" in window);
	}
	$.isIE8 = function(){
		if($.isIE() && parseInt($.browser.version) <=8 ){
			return true;
		}
		return false;
	}

	$.supportUploadFolder = function(){
		if(isWap()){
			return false;
		}
		var el = document.createElement('input');
		el.type = 'file';
		return typeof el.webkitdirectory !== "undefined" || typeof el.directory !== "undefined";
	};
	$.supportCanvas = function() {
		return !!document.createElement('canvas').getContext;
	}
	$.supportCss3 = function(style){
		if(!style) style = 'box-shadow';
		var prefix = ['webkit', 'Moz', 'ms', 'o'],
			i,
			humpString = [],
			htmlStyle = document.documentElement.style,
			_toHumb = function (string) {
				return string.replace(/-(\w)/g, function ($0, $1) {
					return $1.toUpperCase();
				});
			};
	
		for (i in prefix){
			humpString.push(_toHumb(prefix[i] + '-' + style));
		}
		humpString.push(_toHumb(style));
		for (i in humpString){
			if (humpString[i] in htmlStyle) return true;
		}
		return false;
	}

	//打印html
	$.htmlPrint = function(html){
		html = "<div style='width:100%;height:100%;'>"+html+"</div>";
		if ($.browser.opera) { 
			var tab = window.open("","print-preview");
			doc.open();
			var doc = tab.document;
			var paWindow = tab;
		}else{
			var $iframe = $("<iframe />");
			$iframe.css({ position: "absolute",width:"0px",height:"0px",left:"-2000px",top:"-2000px" });
			$iframe.appendTo("body");
			var doc = $iframe[0].contentWindow.document;
			var paWindow = $iframe[0].contentWindow;
		}
		if (!doc) throw "Cannot find document.";

		// $("link").each( function() {
		// 	doc.write("<link type='text/css' rel='stylesheet' href='" + $(this).attr("href") + "' />");
		// });
		doc.write(html);
		doc.close();
		setTimeout( function () {
			$(doc).ready(function(){
				paWindow.focus();
				paWindow.print();
				if (tab) tab.close(); 
			});
		},500);
	};
	$.fn.extend({
		//dom绑定enter事件  用于input
		keyEnter:function(callback){
			this.each(function(){
				$(this).die('keydown').live('keydown',function(e){
					if (e.keyCode == 13 && callback){
						callback();
					}
				});
			});
			return this;
		},

		myDbclick:function(callback){
			var timeout = 0.5;
			$(this).die('mouseup').live('mouseup',function(e){
				if(e.which !== 1) return;
				var preClick = $(this).data('myDbclick');
				var time = timeFloat();
				if(!preClick){
					$(this).data('myDbclick',time);
					return;
				}
				if(time - preClick <= timeout){
					callback && callback(e);
				}
				$(this).data('myDbclick',time);
				return true;
			});
			return this;
		},


		inScreen:function(isCenter){//是否在屏幕中 ;isCenter 按中心点来判断
			var el = $(this).get(0);
			if (typeof jQuery === "function" && el instanceof jQuery) {
				el = el[0];
			}
			if(!el) return false;
			var rect     = el.getBoundingClientRect(),
				vWidth   = window.innerWidth || document.documentElement.clientWidth,
				vHeight  = window.innerHeight || document.documentElement.clientHeight,
				efp      = function (x, y) { return document.elementFromPoint(x, y) };
			if (rect.right < 0 ||  rect.bottom < 0 ||
				rect.left > vWidth || rect.top > vHeight){
				return false;
			}
			if(isCenter){//按元素中心点判断
				var left = rect.left + (rect.right - rect.left)/2;
				var top  = rect.top + (rect.bottom - rect.top)/2;
				return el.contains(efp(left,top))
			}
			return (
				rect.left   >=0 && 
				rect.right  >=0 && 
				rect.top    >=0 && 
				rect.bottom >=0
			)
			// return (
			// 	  el.contains(efp(rect.left,  rect.top))
			//   ||  el.contains(efp(rect.right, rect.top))
			//   ||  el.contains(efp(rect.right, rect.bottom))
			//   ||  el.contains(efp(rect.left,  rect.bottom))
			// );
		},
		//dom绑定鼠标滚轮事件
		mouseWheel: function(fn){
			var mousewheel = jQuery.browser.mozilla ? "DOMMouseScroll" : "mousewheel";
			this.each(function(){
				$(this).bind(mousewheel ,function(e){
					e= window.event || e;
					var delta = e.wheelDelta ? (e.wheelDelta / 120) : (- e.detail / 3);
					fn.call(this,delta);
					return false;
				});
			});
		},
		//晃动 $('.wrap').shake(4,4,100);//次数；位移；运动时间
		shake: function(times,offset,delay){
			$(this).stop(true,true).each(function(){
				var Obj = $(this);
				var marginLeft = parseInt(Obj.css('margin-left'));
				delay = delay > 50 ? delay : 50;
				Obj.animate({'margin-left':marginLeft+offset},delay,function(){
					Obj.animate({'margin-left':marginLeft},delay,function(){
						times = times - 1;
						if(times > 0)
						Obj.shake(times,offset,delay);
					});
				});
			});
			return this;
		},
		//闪烁 $('.wrap').flash(4,100);//次数；运动时间
		flash: function(times,delay){
			$(this).stop(true,true).each(function(){
				var Obj = $(this);
				delay = delay > 50 ? delay : 50;
				Obj.animate({'opacity':0.3},delay,function(){
					Obj.animate({'opacity':1},delay,function(){
						times = times - 1;
						if(times > 0){
							Obj.flash(times,delay);
						}
					});
				});
			});
			return this;
		},
		scale:function(xScale, yScale) {
			var Obj = $(this);
			if($.browser.mozilla || $.browser.opera || $.browser.safari) {
				Obj.css('transform', 'scale(' + xScale + ', ' + yScale + ')');
				Obj.css('transform-origin', '0px 0px');
			}else if($.browser.msie && parseInt($.browser.version)>= 9) {
				Obj.css('-ms-transform', 'scale(' + xScale + ')');
				Obj.css('-ms-transform-origin', '0px 0px');
			}else if($.browser.msie && parseInt($.browser.version) < 9) {
				Obj.css('zoom', xScale);
			}else {
				Obj.css('-webkit-transform', 'scale(' + xScale + ', ' +  yScale + ')');
				Obj.css('-webkit-transform-origin', '0px 0px');
			}
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


/**
 * FunctionHooks;
 *
 * alert.hook("alert",window,function(){console.log(arguments);});
 * kodApp.open.hook("open",kodApp,function(){});
 * String.prototype.slice.hook("slice",String.prototype,function(){});
 * 
 * 
 * WebSocket.hook("WebSocket",window,{
 * 		before:function(){
 * 			arguments[0] && arguments[0] = arguments[0].replace("http","ws");
 * 			return arguments;
 * 		}
 * });
 *
 * hookFunc支持hook前执行；hook后执行；  如果参数是函数则默认为hook前执行；如果为对象则分别配置hook前、hook后执行
 * {before:function,after:function} //
 * ---------------------------
 * ui.fileLight.select.hook("select",ui.fileLight,{before:function(){console.log("1",arguments)},after:function(){console.log("2",arguments)}});
 *
 * ---------------------------
 * 1.hook函数在原函数之前执行；可修改传入参数；修改后返回arguments
 * 2.如果没有任何返回：则使用原始参数
 * 3.before function 如果返回"hookReturn";则不执行旧函数；相当于替换
 */
function FunctionHooks(){
	return {
		initEnv:function () {
			Function.prototype.hook = function (funcName,context,hookFunc) {
				var _context  = null; //函数上下文
				var _funcName = null; //函数名
				var _realFunc = funcName+"Old";

				var hookFuncBefore = undefined;
				var hookFuncAfter  = undefined;
				if(typeof(hookFunc) == 'function'){
					hookFuncBefore = hookFunc;
				}else if(typeof(hookFunc) == 'object'){
					hookFuncBefore = hookFunc['before'];
					hookFuncAfter  = hookFunc['after'];
				}

				if(!hookFuncBefore){
					hookFuncBefore = function(){};
				}
				_context = context || window;
				_funcName = funcName || getFuncName(this);
				_context[_realFunc] = this;
				if( _context[_funcName] != undefined && 
					_context[_funcName].prototype && 
					_context[_funcName].prototype.isHooked){
					console.log("Already has been hooked,unhook first");
					return false;
				}
				function getFuncName (fn) {// 获取函数名
					var strFunc = fn.toString();
					var _regex = /function\s+(\w+)\s*\(/;
					var patten = strFunc.match(_regex);
					if (patten) {
						return patten[1];
					};
					return '';
				}
				try{
					eval(
						'_context[_funcName] = function '+_funcName+'(){\
							var args = Array.prototype.slice.call(arguments,0);\
							var obj = this;\
							args = hookFuncBefore.apply(obj,args);\
							if(args === "hookReturn"){\
								return;\
							}\
							if(args === undefined){\
								args = arguments;\
							}\
							var result = false,func = _context[_realFunc];\
							if( func.prototype && func.prototype.constructor &&\
                                func.prototype.constructor.toString().indexOf("{ [native code] }") != -1 ){\
								switch( args.length ){\
									case 0:new func();break;\
									case 1:new func(args[0]);break;\
									case 2:new func(args[0],args[1]);break;\
									case 3:new func(args[0],args[1],args[2]);break;\
									case 4:new func(args[0],args[1],args[2],args[3]);break;\
									case 5:new func(args[0],args[1],args[2],args[3],args[4]);break;\
									case 6:new func(args[0],args[1],args[2],args[3],args[4],args[5]);break;\
									default:new func(args[0],args[1],args[2],args[3],args[4],args[5],args[6]);break;\
								}\
							}else{\
								result = func.apply(obj,args);\
							}\
							if(hookFuncAfter){\
								return hookFuncAfter.apply(result);\
							}else{\
								return result;\
							}\
						};'
					);
					_context[_funcName].prototype.isHooked = true;
					return true;
				}catch (e){
					console.log("Hook failed,check the params.");
					return false;
				}
			}
			Function.prototype.unhook = function (funcName,context) {
				var _context = null;
				var _funcName = null;
				var realFunc = _funcName+"Old";
				_context = context || window;
				_funcName = funcName;
				if(!_context[_funcName]){
					return false;
				}
				if (!_context[_funcName].prototype.isHooked){
					console.log("No function is hooked on");
					return false;
				}
				_context[_funcName] = _context[realFunc];
				delete _context[realFunc];
				return true;
			}
		},
		cleanEnv:function () {
			if(Function.prototype.hasOwnProperty("hook")){
				delete Function.prototype.hook;
			}
			if(Function.prototype.hasOwnProperty("unhook")){
				delete Function.prototype.unhook;
			}
			return true;
		}
	};
}
var functionHooks = new FunctionHooks();
functionHooks.initEnv();


/**
 * iframe 兼容跨域通信组件
 * @description MessengerJS, a common cross-document communicate solution.
 * @author biqing kwok
 * @version 2.0
 * @license release under MIT license
 * ---------------
 * https://github.com/biqing/MessengerJS
 * 
 */
window.Messenger = (function(){
	// 消息前缀, 建议使用自己的项目名, 避免多项目之间的冲突
	var prefix = "[PROJECT_NAME]",
		supportPostMessage = 'postMessage' in window;

	// Target 类, 消息对象
	function Target(target, name){
		var errMsg = '';
		if(arguments.length < 2){
			errMsg = 'target error - target and name are both requied';
		} else if (typeof target != 'object'){
			errMsg = 'target error - target itself must be window object';
		} else if (typeof name != 'string'){
			errMsg = 'target error - target name must be string type';
		}
		if(errMsg){
			throw new Error(errMsg);
		}
		this.target = target;
		this.name = name;
	}

	// 往 target 发送消息, 出于安全考虑, 发送消息会带上前缀
	if ( supportPostMessage ){
		// IE8+ 以及现代浏览器支持
		Target.prototype.send = function(msg){
			this.target.postMessage(prefix + msg, '*');
		};
	} else {
		// 兼容IE 6/7
		Target.prototype.send = function(msg){
			var targetFunc = window.navigator[prefix + this.name];
			if ( typeof targetFunc == 'function' ) {
				targetFunc(prefix + msg, window);
			} else {
				throw new Error("target callback function is not defined");
			}
		};
	}

	// 信使类
	// 创建Messenger实例时指定, 必须指定Messenger的名字, (可选)指定项目名, 以避免Mashup类应用中的冲突
	// !注意: 父子页面中projectName必须保持一致, 否则无法匹配
	function Messenger(messengerName, projectName){
		this.targets = {};
		this.name = messengerName;
		this.listenFunc = [];
		prefix = projectName || prefix;
		this.initListen();
	}

	// 添加一个消息对象
	Messenger.prototype.addTarget = function(target, name){
		var targetObj = new Target(target, name);
		this.targets[name] = targetObj;
	};

	// 初始化消息监听
	Messenger.prototype.initListen = function(){
		var self = this;
		var generalCallback = function(msg){
			if(typeof msg == 'object' && msg.data){
				msg = msg.data;
			}
			// 剥离消息前缀
			msg = msg.slice(prefix.length);
			for(var i = 0; i < self.listenFunc.length; i++){
				self.listenFunc[i](msg);
			}
		};
		if ( supportPostMessage ){
			if ( 'addEventListener' in document ) {
				window.addEventListener('message', generalCallback, false);
			} else if ( 'attachEvent' in document ) {
				window.attachEvent('onmessage', generalCallback);
			}
		} else {
			// 兼容IE 6/7
			window.navigator[prefix + this.name] = generalCallback;
		}
	};
	// 监听消息
	Messenger.prototype.listen = function(callback){
		this.listenFunc.push(callback);
	};
	// 注销监听
	Messenger.prototype.clear = function(){
		this.listenFunc = [];
	};
	// 广播消息
	Messenger.prototype.send = function(msg){
		var targets = this.targets,
			target;
		for(target in targets){
			if(targets.hasOwnProperty(target)){
				targets[target].send(msg);
			}
		}
	};
	return Messenger;
})();



//yyyy-mm-dd H:i:s or yy-mm-dd  to timestamp
var strtotime = function(datetime){
	var tmp_datetime = datetime.replace(/:/g,'-');   
	tmp_datetime = tmp_datetime.replace(/\//g,'-');  
	tmp_datetime = tmp_datetime.replace(/ /g,'-');   
	var arr = tmp_datetime.split("-");   
	var y=arr[0];
	var m=arr[1]-1;
	var d=arr[2];
	var h=arr[3]-8; ///兼容八小时时差问题  
	var i=arr[4];
	var s=arr[5];
	//兼容无"时:分:秒"模式  
	if(arr[3]=='undefined' || isNaN(h)){  
	  h=0;
	}  
	if(arr[4]=='undefined' || isNaN(i)){  
	  i=0;
	}  
	if(arr[5]=='undefined' || isNaN(s)){  
	  s=0;
	}  
	var now = new Date(Date.UTC(y,m,d,h,i,s));   
	return parseInt(now.getTime()/1000);   
}
var date = function(format, timestamp){
	if(format == undefined) format = "Y-m-d H:i:s";
	if(timestamp == undefined) timestamp = time();

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


var Base64Hex =  (function(){
	var encode = function (str) {
		var base64EncodeChars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/"; 
		var out, i, len; 
		var c1, c2, c3; 

		len = str.length; 
		i = 0; 
		out = ""; 
		while(i < len) { 
			c1 = str.charCodeAt(i++) & 0xff; 
			if(i == len){ 
				out += base64EncodeChars.charAt(c1 >> 2); 
				out += base64EncodeChars.charAt((c1 & 0x3) << 4); 
				out += "=="; 
				break; 
			} 
			c2 = str.charCodeAt(i++); 
			if(i == len){ 
				out += base64EncodeChars.charAt(c1 >> 2); 
				out += base64EncodeChars.charAt(((c1 & 0x3)<< 4) | ((c2 & 0xF0) >> 4)); 
				out += base64EncodeChars.charAt((c2 & 0xF) << 2); 
				out += "="; 
				break; 
			} 
			c3 = str.charCodeAt(i++); 
			out += base64EncodeChars.charAt(c1 >> 2); 
			out += base64EncodeChars.charAt(((c1 & 0x3)<< 4) | ((c2 & 0xF0) >> 4)); 
			out += base64EncodeChars.charAt(((c2 & 0xF) << 2) | ((c3 & 0xC0) >>6)); 
			out += base64EncodeChars.charAt(c3 & 0x3F); 
		}
		return out; 
	} 

	var decode = function(str) {
		var base64DecodeChars = new Array( 
		-1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 
		-1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 
		-1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 62, -1, -1, -1, 63, 
		52, 53, 54, 55, 56, 57, 58, 59, 60, 61, -1, -1, -1, -1, -1, -1, 
		-1, 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 
		15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, -1, -1, -1, -1, -1, 
		-1, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 
		41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, -1, -1, -1, -1, -1); 
		var c1, c2, c3, c4; 
		var i, len, out; 

		len = str.length; 
		i = 0; 
		out = ""; 
		while(i < len) { 
			/* c1 */ 
			do { 
				c1 = base64DecodeChars[str.charCodeAt(i++) & 0xff]; 
			} while(i < len && c1 == -1); 
			if(c1 == -1) 
				break; 

			/* c2 */ 
			do { 
				c2 = base64DecodeChars[str.charCodeAt(i++) & 0xff]; 
			} while(i < len && c2 == -1); 
			if(c2 == -1) 
				break; 

			out += String.fromCharCode((c1 << 2) | ((c2 & 0x30) >> 4)); 

			/* c3 */ 
			do { 
				c3 = str.charCodeAt(i++) & 0xff; 
				if(c3 == 61) 
				return out; 
				c3 = base64DecodeChars[c3]; 
			} while(i < len && c3 == -1); 
			if(c3 == -1) 
				break; 

			out += String.fromCharCode(((c2 & 0XF) << 4) | ((c3 & 0x3C) >> 2)); 
			/* c4 */ 
			do { 
				c4 = str.charCodeAt(i++) & 0xff; 
				if(c4 == 61) 
				return out; 
				c4 = base64DecodeChars[c4]; 
			} while(i < len && c4 == -1); 
			if(c4 == -1) 
				break; 
			out += String.fromCharCode(((c3 & 0x03) << 6) | c4); 
		} 
		return out; 
	} 
	return {
		encode:encode,
		decode:decode
	}
})();


var Base64 =  (function(){
	var _keyStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
	var encode = function (input) {  
		var output = "";
		var chr1, chr2, chr3, enc1, enc2, enc3, enc4;
		var i = 0;
		input = utf8Encode(input);
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
		output = utf8Decode(output);
		return output; 
	}
	// private method for UTF-8 encoding  
	utf8Encode = function (string) {
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
	utf8Decode = function (utftext) {  
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


// 处理 emoji时有差异;
var Base64Server =  (function(){
	var encode = function (stringToEncode) {  
		var encodeUTF8string = function (str) {
			return encodeURIComponent(str).replace(/%([0-9A-F]{2})/g,
				function toSolidBytes (match, p1) {
					return String.fromCharCode('0x' + p1)
				});
		}
		if (typeof window !== 'undefined') {
			if (typeof window.btoa !== 'undefined') {
				return window.btoa(encodeUTF8string(stringToEncode));
			}
		} else {
			return new Buffer(stringToEncode).toString('base64');
		}
		var b64 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/='
		var o1,o2,o3,h1,h2,h3,h4,bits;
		var i = 0;
		var ac = 0;
		var enc = '';
		var tmpArr = [];
		if (!stringToEncode) {
			return stringToEncode
		}
		stringToEncode = encodeUTF8string(stringToEncode)
		do {
			o1 = stringToEncode.charCodeAt(i++);
			o2 = stringToEncode.charCodeAt(i++);
			o3 = stringToEncode.charCodeAt(i++);
			bits = o1 << 16 | o2 << 8 | o3;
			h1 = bits >> 18 & 0x3f;
			h2 = bits >> 12 & 0x3f;
			h3 = bits >> 6 & 0x3f;
			h4 = bits & 0x3f;
			tmpArr[ac++] = b64.charAt(h1) + b64.charAt(h2) + b64.charAt(h3) + b64.charAt(h4);
		} while (i < stringToEncode.length)
	
		enc = tmpArr.join('');
		var r = stringToEncode.length % 3;
		return (r ? enc.slice(0, r - 3) : enc) + '==='.slice(r || 3);
	}  
	// public method for decoding  
	var decode = function (encodedData) {  
		var decodeUTF8string = function (str) {
			try {
				return decodeURIComponent(str.split('').map(function (c) {
					return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2)
				}).join(''));
			} catch (e) {
				return str;
			}
		}
		if (typeof window !== 'undefined') {
			if (typeof window.atob !== 'undefined') {
			  return decodeUTF8string(window.atob(encodedData))
			}
		} else {
			return new Buffer(encodedData, 'base64').toString('utf-8')
		}
		var b64 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/='
		var o1,o2,o3,h1,h2,h3,h4,bits;
		var i = 0
		var ac = 0
		var dec = ''
		var tmpArr = []

		if (!encodedData) {
			return encodedData
		}
		encodedData += ''
		do {
			h1 = b64.indexOf(encodedData.charAt(i++))
			h2 = b64.indexOf(encodedData.charAt(i++))
			h3 = b64.indexOf(encodedData.charAt(i++))
			h4 = b64.indexOf(encodedData.charAt(i++))

			bits = h1 << 18 | h2 << 12 | h3 << 6 | h4
			o1 = bits >> 16 & 0xff
			o2 = bits >> 8 & 0xff
			o3 = bits & 0xff;

			if (h3 === 64) {
				tmpArr[ac++] = String.fromCharCode(o1)
			} else if (h4 === 64) {
				tmpArr[ac++] = String.fromCharCode(o1, o2)
			} else {
				tmpArr[ac++] = String.fromCharCode(o1, o2, o3)
			}
		} while (i < encodedData.length);
		dec = tmpArr.join('')
		return decodeUTF8string(dec.replace(/\0+$/, ''))
	}
	return {
		encode:encode,
		decode:decode
	}
})();


var authCrypt = (function(){
	var base64Encode = Base64Hex.encode;
	var base64Decode = Base64Hex.decode;
	var time = function() {
		var timeStamp = new Date().getTime();
		return parseInt(timeStamp / 1000);
	}
	var microtime = function(timeFloat) {
		var timeStamp = new Date().getTime();
		var sec = parseInt(timeStamp / 1000);
		return timeFloat ? (timeStamp / 1000) : (timeStamp - (sec * 1000)) / 1000 + ' ' + sec;
	}
	var chr = function(s) {
		return String.fromCharCode(s);
	}
	var ord = function(s) {
		return s.charCodeAt();
	}
	var authcode = function(str, operation, key, expiry) {
		var operation = operation ? operation : 'DECODE';
		var key = key ? key : '';
		var expiry = expiry ? expiry : 0;
		var ckey_length = 4;
		key = md5(key);
		var keya = md5(key.substr(0, 16));
		var keyb = md5(key.substr(16, 16));
		if(ckey_length){
			if(operation == 'DECODE'){
				var keyc = str.substr(0, ckey_length);
			}else{
				var md5_time = md5(microtime());
				var start = md5_time.length - ckey_length;
				var keyc = md5_time.substr(start, ckey_length)
			}
		}else{
			var keyc = '';
		}

		var cryptkey = keya + md5(keya + keyc);
		var strbuf;
		if (operation == 'DECODE') {
			str = str.substr(ckey_length);
			strbuf = base64Decode(str);
		} else {
			expiry = expiry ? expiry + time() : 0;
			tmpstr = expiry.toString();
			if (tmpstr.length >= 10){
				str = tmpstr.substr(0, 10) + md5(str + keyb).substr(0, 16) + str;
			}else {
				var count = 10 - tmpstr.length;
				for (var i = 0; i < count; i++) {
					tmpstr = '0' + tmpstr;
				}
				str = tmpstr + md5(str + keyb).substr(0, 16) + str;
			}
			strbuf = str;
		}
		
		var box = new Array(256);
		for (var i = 0; i < 256; i++) {
			box[i] = i;
		}
		var rndkey = new Array();
		for (var i = 0; i < 256; i++) {
			rndkey[i] = cryptkey.charCodeAt(i % cryptkey.length);
		}
		for (var j = i = 0; i < 256; i++) {
			j = (j + box[i] + rndkey[i]) % 256;
			tmp = box[i];
			box[i] = box[j];
			box[j] = tmp;
		}

		var s = '';
		strbuf = strbuf.split('');
		for (var a = j = i = 0; i < strbuf.length; i++) {
			a = (a + 1) % 256;
			j = (j + box[a]) % 256;
			tmp = box[a];
			box[a] = box[j];
			box[j] = tmp;
			s += chr(ord(strbuf[i])^(box[(box[a] + box[j]) % 256]));
		}
		
		if (operation == 'DECODE') {
			if ((s.substr(0, 10) == 0 || s.substr(0, 10) - time() > 0) && s.substr(10, 16) == md5(s.substr(26) + keyb).substr(0, 16)) {
				s = s.substr(26);
			} else {
				s = '';
			}
		} else {
			s = base64Encode(s);
			var regex = new RegExp('=', "g");
			s = s.replace(regex, '');
			s = keyc + s;
		}
		return s;
	}
	return {
		authcode:authcode,
		encode:function(string,key,expiry){
			var result = authcode(string,"ENCODE",key,expiry);
			result = result.replace(/\+/g,'-');
			result = result.replace(/\//g,'_');
			result = result.replace(/=/g,'.');
			return result;
		},
		decode:function(string,key){
			string = string.replace(/-/g,'+');
			string = string.replace(/_/g,'/');
			string = string.replace(/\./g,'=');
			var result = authcode(string,"DECODE",key);
			return result;
		}
	}
})();


var base64Encode = Base64Server.encode;
var base64Decode = Base64Server.decode;
var htmlEncode=function(str){
	var s = "";
	if (!str || str.length == 0) return "";
	s = str.replace(/&/g, "&amp;");
	s = s.replace(/</g, "&lt;");
	s = s.replace(/>/g, "&gt;");
	//s = s.replace(/ /g, "&nbsp;");
	s = s.replace(/\'/g, "&#39;");
	s = s.replace(/\"/g, "&quot;");
	return s;
}
var htmlDecode=function(str){
	var temp = document.createElement("div");
	temp.innerHTML = str;
	var output = temp.innerText || temp.textContent;
	temp = null;
	return output;
}
//去掉所有的html标记  
var htmlRemoveTags=function(str){
	return str.replace(/<[^>]+>/g,"");
}

//http://codepen.io/anon/pen/wWaMQZ?editors=1011
//对应php处理
var hashEncode = function(str){
	if(!str) return str;
	var res = base64Encode(str);
	res = res.replace(/\+/g, "_a");
	res = res.replace(/\//g, "_b");
	res = res.replace(/=/g, "_c");
	return res;
}
var hashDecode = function (str) {
	if(!str) return str;
	var res = str.replace(/_a/g, "+");
	res = res.replace(/_b/g, "/");
	res = res.replace(/_c/g, "=");
	return base64Decode(res);
}


//ie js
if (!window.console) {
	window.console = {
		log:function(){},
		trace:function() {},
		info:function() {},
		warn:function() {},
		error:function() {},
		assert:function() {},
		dir:function() {},
		clear:function() {},
		profile:function() {}
	};
	//window.console = undefined;
}
if (!Object.keys) {
	Object.keys = (function() {
		'use strict';
		var hasOwnProperty = Object.prototype.hasOwnProperty,
			hasDontEnumBug = !({ toString: null }).propertyIsEnumerable('toString'),
			dontEnums = [
				'toString',
				'toLocaleString',
				'valueOf',
				'hasOwnProperty',
				'isPrototypeOf',
				'propertyIsEnumerable',
				'constructor'
			],
			dontEnumsLength = dontEnums.length;
		return function(obj) {
			if (typeof obj !== 'object' && (typeof obj !== 'function' || obj === null)) {
				throw new TypeError('Object.keys called on non-object');
			}

			var result = [], prop, i;
			for (prop in obj) {
				if (hasOwnProperty.call(obj, prop)) {
					result.push(prop);
				}
			}
			if (hasDontEnumBug) {
				for (i = 0; i < dontEnumsLength; i++) {
					if (hasOwnProperty.call(obj, dontEnums[i])) {
					result.push(dontEnums[i]);
					}
				}
			}
			return result;
		};
	}());
}
