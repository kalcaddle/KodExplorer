//对文件打开，文件操作的封装
define(function(require, exports) {
	var pathOperate  = require('../../common/pathOperate');
	var pathOpen 	 = require('../../common/pathOpen');
	var selectByChar = undefined;//键盘选择记录
	ui.pathOpen = pathOpen;

	//得到json中，获取新建文件名  dom节点的位置。
	//新建文件(保持排序队形不变)
	var _getCreatePos = function(str,type){
		var list    = "",i,j,offset=0,
			folderlist  =G.json_data['folderlist'],
			filelist    =G.json_data['filelist'];

		if (Config.pageApp == 'desktop') {
			offset = $('.menuDefault').length;
		}
		if (type=='folder'){
			for (i=0;i<folderlist.length; i++){
				//知直到比str大，返回该位置
				if (folderlist[i]['name']>=str) break;
			}
			if (G.sort_order == 'up') return i+offset;
			return filelist.length+i+offset;
		}else if(type=='file'){
			for (j=0;j<filelist.length; j++){
				//直到比str大，返回该位置
				if (filelist[j]['name']>=str) break;
			}
			if (G.sort_order == 'down') return j+offset;
			return folderlist.length+j+offset;
		}
		return -1;
	};

	//设置某个文件[夹]选中。传入字符串或数组
	var _setSelectByFilename = function(name) {
		if (name == undefined) return;
		if (typeof(name) == 'string') {
			name = [name];
		}
		fileLight.clear();
		$('.fileContiner .file').each(function(key,value){
			var current_name = fileLight.name($(this));
			if ($.inArray(current_name,name) !=-1){
				$(Global.fileListAll).eq(key).addClass(Config.SelectClassName);
			}
		});
		fileLight.select();
		fileLight.setInView();
	};

	//设置某个文件[夹]选中。传入字符串或数组
	var _setSelectByChar = function(ch) {
		if (ch == '') return;
		//初始化数据
		ch = ch.toLowerCase();
		if (selectByChar == undefined
			|| G.this_path != selectByChar.path 
			|| ch != selectByChar.key ) {
			var arr = [];
			$('.fileContiner .file').each(function(){
				var current_name = fileLight.name($(this));
				if (!current_name) return;
				if (ch == current_name.substring(0,ch.length).toLowerCase()){
					arr.push(current_name);
				}
			});
			selectByChar = {key:ch,path:G.this_path,index:0,list:arr};
		}
		
		if (selectByChar.list.length == 0) return;//没有匹配项
		//自动从匹配结果中查找
		_setSelectByFilename(selectByChar.list[selectByChar.index++]);
		if (selectByChar.index == selectByChar.list.length) {
			selectByChar.index = 0;
		}
	};

	//搜索当前文件夹 含有字母
	var _setSearchByStr = function(ch) {
		if (ch == ''){
			fileLight.clear();
			return;
		}
		fileLight.clear();
		$('.fileContiner .file').each(function(key,value){
			var current_name = fileLight.name($(this));
			if (current_name.toLowerCase().indexOf(ch) != -1){
				$(Global.fileListAll).eq(key).addClass(Config.SelectClassName);
			}
		});
		fileLight.select();
		fileLight.setInView();
	};

	//查找json中，文件名所在的数组位置。
	var _arrayFind = function(data,key,str){
		var m=data.length;
		for(i=0;i<m;i++){
			if(data[i][key]==str) return data[i];
		}
	};
	//重名&新建  文件[夹]名是否存在检测()
	var _fileExist = function(filename){
		var list="";
		var is_exist=0;
		if (G.json_data['filelist']!=null) {
			list=_arrayFind(G.json_data['filelist'],'name',filename);//重名检测
			if(list!=null){ 
				is_exist=1;
			}       
		}
		if (G.json_data['folderlist']!=null) {
			list=_arrayFind(G.json_data['folderlist'],'name',filename);//重名检测
			if(list!=null){ 
				is_exist=1;
			}
		}
		return is_exist;
	}
	//获得文件名,同名则结尾自增  folder--folder(1)--folder(2)
	var _getName = function(filename,ext){
		var i = 0,lastname;
		if (ext == undefined) {//文件夹
			if(!_fileExist(filename)){
				return filename;
			}
			lastname = filename+'(0)';
			while(_fileExist(lastname)){
				i++;
				lastname = filename+'('+i+')';
			}
			return lastname;
		}else{
			if(!_fileExist(filename+'.'+ext)){
				return filename+'.'+ext;
			}
			lastname = filename+'(0).'+ext;
			while(_fileExist(lastname)){        
				i++;
				lastname = filename+'('+i+').'+ext;
			}
			return lastname;            
		}
	};
	//构造参数 操作文件[夹]【选中数据】
	var _param = function(makeArray){
		if (makeArray) {//多个数据操作
			var list = [];
			if (Global.fileListSelect.length == 0) return list;
			Global.fileListSelect.each(function(index){
				var path = G.this_path + fileLight.name($(this));
				var type = fileLight.type($(this))=='folder' ? 'folder':'file'; 
				list.push({path:path,type:type});
			});
			return list;
		}else{// 单个操作  返回
			if (Global.fileListSelectNum !=1) return {path:'',type:''};//默认只能打开一个
			var selectObj= Global.fileListSelect;
			var path = G.this_path + fileLight.name(selectObj);
			var type = fileLight.type(selectObj);
			return {path:path,type:type};
		}
	};

	//打开目录。更新文件列表，ajax方式
	var list = function(path,tips){//
		if (path == G.this_path){
			if (tips != undefined) core.tips.tips(LNG.path_is_current,'info');
			return; //如果相同，则不加载。
		}
		//统一处理地址
		G.this_path = path.replace(/\\/g,'/');
		G.this_path = path.replace(/\/+/g,'/');
		if (G.this_path.substr(G.this_path.length-1) !='/') {
			G.this_path+='/';
		}
		ui.f5();
	};
	var back = function(){//后退操作
		$.ajax({
			dataType:'json',
			url:'index.php?explorer/historyBack',
			beforeSend:function(){
				$('.tools-left .msg').stop(true,true).fadeIn(100);
			},
			error:core.ajaxError,
			success:function(data){
				$('.tools-left .msg').fadeOut(100);
				if (!data.code) {					
					core.tips.tips(data);
					$(Config.FileBoxSelector).html('');
					return false;
				}
				data = data.data;
				G.this_path = data['thispath'];
				G.json_data = data['list'];
				Global.historyStatus = data['history_status'];
				ui.f5(false,true);
				ui.header.updateHistoryStatus();
				ui.header.addressSet();//header地址栏更新				
			}
		});
	}
	var next = function(){//前进操作
		$.ajax({
			dataType:'json',
			url:'index.php?explorer/historyNext',       
			beforeSend:function(){
				$('.tools-left .msg').stop(true,true).fadeIn(100);
			},
			error:core.ajaxError,
			success:function(data){
				$('.tools-left .msg').fadeOut(100);
				if (!data.code) {					
					core.tips.tips(data);
					$(Config.FileBoxSelector).html('');
					return false;
				}
				data = data.data;
				G.this_path = data['thispath'];
				G.json_data = data['list'];
				Global.historyStatus = data['history_status'];
				ui.f5(false,true);
				ui.header.updateHistoryStatus();
				ui.header.addressSet();//header地址栏更新
			}
		});
	};


	//====================桌面、文件管理器专用部分====================
	var newFile = function(newname_ext) {
		fileLight.clear();
		if (newname_ext == undefined) newname_ext = 'txt';
		var newname     = "newfile";
		var is_exist    = 0;
		var newname     = _getName(newname,newname_ext);
		var pos         = _getCreatePos(newname,'file');
		pos=(pos==0)?-1:(pos-1);

		var listhtml=
		'<div class="file select menufile"  id="makefile">\
			<div class="'+newname_ext+' ico"></div>\
				<div class="titleBox">\
					<span class="title">\
					<div class="textarea">\
						<textarea class="newfile fix">'+newname+'</textarea>\
					</span>\
				</div>\
			</div>\
			<div style="clear:both;"></div>\
		</div>';
		if (pos==-1){
			$(Config.FileBoxSelector).html(listhtml+$(Config.FileBoxSelector).html());      
		}else {
			$(listhtml).insertAfter(Config.FileBoxSelector+" .file:eq("+pos+")");
		}
		// dom 
		var $textarea   = $(".newfile");
		var textarea    = $textarea.get(0);
		// 处理选中文件名部分
		var selectlen=newname.length-newname_ext.length-1;
		if(Global.isIE){//IE
			var range = textarea.createTextRange();
			range.moveEnd('character', -textarea.value.length);         
			range.moveEnd('character', selectlen);
			range.moveStart('character', 0);
			range.select();
		}else{//firfox chrome ...
		   textarea.setSelectionRange(0,selectlen);
		}

		$textarea.focus();
		$textarea.unbind('keydown').keydown(function(event) {
			if (event.keyCode == 13 || event.keyCode == 27){
				//捕获键盘事件 enter  esc
				stopPP(event);
				event.preventDefault();//阻止编辑器回车
				filename=$textarea.attr('value');//获取编辑器值
				if(_fileExist(filename)){
					$("#makefile").remove();
					core.tips.tips(LNG.path_exists,'warning');
				}else{
					pathOperate.newFile(G.this_path+filename,function(){
						ui.f5_callback(function() {
							_setSelectByFilename(filename);
						});
					});
				}
			}
			return true;
		}); 
		$textarea.unbind('blur').blur(function(){   
			filename=$textarea.attr('value');//获取编辑器值
			if(_fileExist(filename)){
				$("#makefile").remove();
				core.tips.tips(LNG.path_exists,'warning');
				_newFile(newname_ext);
			}else{           
				pathOperate.newFile(G.this_path+filename,function(){
					ui.f5_callback(function() {
						_setSelectByFilename(filename);
					});
				});
			}
		});
	};
	//新建文件夹
	var newFolder = function() {
		fileLight.clear();
		var newname=LNG.newfolder;
		var is_exist=0;
		var newname=_getName(newname);//如果重复，则自动追加字符
		var pos=_getCreatePos(newname,'folder');
		pos=(pos==0)?-1:(pos-1);

		var listhtml='<div class="file select menufolder" id="makefile">';
		listhtml+='<div class="folder ico" filetype="folder"></div>';
		listhtml+='<div  class="titleBox"><span class="title">';
		listhtml+='<div class="textarea"><textarea class="newfile fix">'+newname+'</textarea></span></div></div><div style="clear:both;"></div></div>';
		
		if (pos==-1){//空目录时
			$(Config.FileBoxSelector).html(listhtml+$(Config.FileBoxSelector).html());      
		}else {
			$(listhtml).insertAfter(Config.FileBoxSelector+" .file:eq("+pos+")");
		}
		$('.newfile').select();
		$('.newfile').focus();
		$('.newfile').unbind('keydown').keydown(function(event) {
			if (event.keyCode == 13 || event.keyCode == 27) {
				stopPP(event);
				event.preventDefault();//阻止编辑器回车
				var filename=$('.newfile').attr('value');//获取编辑器值
				if(_fileExist(filename)){
					$("#makefile").remove();
					core.tips.tips(LNG.path_exists,'warning');
				}else{
					pathOperate.newFolder(G.this_path+filename,function(){
						if (Config.pageApp == 'explorer') {
 							ui.tree.checkIfChange(G.this_path);
	  					}
						ui.f5_callback(function() {
							_setSelectByFilename(filename);
						});
					});
				}
			}
		});
		$('.newfile').unbind('blur').blur(function(){//编辑框事件处理
			filename=$('.newfile').attr('value');//获取编辑器值
			if(_fileExist(filename)){
				$("#makefile").remove();
				core.tips.tips(LNG.path_exists,'warning');
				_newFolder();
			}else{
				pathOperate.newFolder(G.this_path+filename,function(){
					if (Config.pageApp == 'explorer') {
						ui.tree.checkIfChange(G.this_path);
					}					
					ui.f5_callback(function() {
						_setSelectByFilename(filename);
					});
				});
			}
		});
	};

	//重命名
	var rname = function() {
		var rname_to    = "";       
		var path        = "";
		var selectname  = "";//成功后选中的名称
		var selectObj   = Global.fileListSelect;
		var selectid    = fileLight.name(selectObj);
		var selecttype  = fileLight.type(selectObj);      
		selecttype      = (selecttype=='folder'?'folder':selecttype);
		$(selectObj).find(".title").html("<div class='textarea'><textarea class='fix' id='pathRenameTextarea'>"
			+$(selectObj).find(".title").text()+"</textarea><div>");
		
		var $textarea   = $("#pathRenameTextarea");
		var textarea    = $textarea.get(0);
		if (selecttype=='folder') {
			$textarea.select();
		}else{//若为文件，则只选中名称部分
			var selectlen=selectid.length-selecttype.length-1;
			if(Global.isIE){//IE
				var range = textarea.createTextRange();
				range.moveEnd('character', -textarea.value.length);         
				range.moveEnd('character', selectlen);
				range.moveStart('character', 0);
				range.select();
			}else{//firfox chrome ...
			   textarea.setSelectionRange(0,selectlen);
			}
		}
		$textarea.unbind('focus').focus();
		$textarea.keydown(function(event) {
			if (event.keyCode == 13) {
				event.preventDefault();//阻止编辑器回车
				stopPP(event);
				rname_to=$textarea.attr('value');//获取编辑器值
				if (selecttype == 'oexe') rname_to+='.oexe';
				var select_name = rname_to;//重命名后选中文件。
				if (rname_to!=selectid){
					path    =urlEncode(G.this_path+selectid);
					rname_to=urlEncode(G.this_path+rname_to);
					pathOperate.rname(path,rname_to,function(){
						if (Config.pageApp == 'explorer') {
 							ui.tree.checkIfChange(G.this_path);
	  					}
						ui.f5_callback(function() {
							_setSelectByFilename(select_name);
						});
					});
				}else{
					if (selecttype == 'oexe') selectid =selectid.replace('.oexe','');
					$(selectObj).find(".title").html(selectid);
				}
			}
			if ( event.keyCode == 27){
				if (selecttype == 'oexe') selectid =selectid.replace('.oexe','');
				$(selectObj).find(".title").html(selectid);
			}
		}); 
		$textarea.unbind('blur').blur(function(){   
			rname_to=$('#pathRenameTextarea').attr('value');//获取编辑器值
			if (selecttype == 'oexe') rname_to+='.oexe';
			var select_name = rname_to;//重命名后选中文件。
			if (rname_to!=selectid){
				path    =urlEncode(G.this_path+selectid);
				rname_to=urlEncode(G.this_path+rname_to);
				pathOperate.rname(path,rname_to,function(){
					if (Config.pageApp == 'explorer') {
						ui.tree.checkIfChange(G.this_path);
					}
					ui.f5_callback(function() {
						_setSelectByFilename(select_name);
					});
				});
			}else{
				if (selecttype == 'oexe') selectid =selectid.replace('.oexe','');
				$(selectObj).find(".title").html(selectid);
			}
		});
	};
	var refreshCallback=function(){//当前目录文件变化，刷新目录
		ui.f5();
		if (Config.pageApp == 'explorer') {
			ui.tree.checkIfChange(G.this_path);
		}
	};
	return {
		//app
		appEdit:function(create){
			if (create) {
				pathOperate.appEdit(0,0,'user_add');
			}else{
				var code = Global.fileListSelect.attr('data-app');
				var data = json_decode(urlDecode(code));
				data.path = G.this_path+fileLight.name(Global.fileListSelect);
				pathOperate.appEdit(data);
			}
		},
		appList:function(){pathOperate.appList(_param().path);},
		appInstall:function(){pathOperate.appInstall(_param().path);},

		//open
		openEditor 	:function(){pathOpen.openEditor(_param().path);},
		openIE 		:function(){pathOpen.openIE(_param().path);},
		download 	:function(){pathOpen.download(_param().path);},
		open:function(path){
			if (path != undefined) {pathOpen.open(path);return;};
			var param = _param();
			var selectObj= Global.fileListSelect;
			if (inArray(core.filetype['image'],param.type) ) {
				if (G.list_type=='icon' || Config.pageApp == 'desktop') {
					ui.picasa.play($(selectObj).find('.ico'));
				}else{
					ui.picasa.play($(selectObj));
				}
				return;
			}
			//oexe 的打开
			if (param.type == 'oexe') {
				var code = selectObj.attr('data-app');
				param.path = json_decode(urlDecode(code));
			}
			pathOpen.open(param.path,param.type);
		},
		play:function(){
			if (Global.fileListSelectNum <1) return;
			var list = [];//选中单个&多个都可以播放
			Global.fileListSelect.each(function(index){
				var pathtype = fileLight.type($(this));
				if (inArray(core.filetype['music'],pathtype)
					|| inArray(core.filetype['movie'],pathtype)) {
					var url = core.path2url(G.this_path+fileLight.name($(this)));
					list.push(url);
				}
			});
			pathOpen.play(list,'music');
		},

		//operate
		pathOperate:pathOperate,
		search 	:function(){core.search('',_param().path);},
		fav 	:function(){pathOperate.fav(_param().path);},
		remove 	:function(){pathOperate.remove(_param(true),refreshCallback);fileLight.clear();},
		copy 	:function(){pathOperate.copy(_param(true));},
		cute 	:function(){pathOperate.cute(_param(true),ui.f5);},
		zip 	:function(){pathOperate.zip(_param(true),refreshCallback);},
		unZip 	:function(){pathOperate.unZip(_param().path,ui.f5);},
		cuteDrag:function(dragTo){pathOperate.cuteDrag(_param(true),dragTo,refreshCallback);},
		copyDrag:function(dragTo,isDragCurrent){
			pathOperate.copyDrag(_param(true),dragTo,function(list){
				fileLight.clear();
				if (Config.pageApp == 'explorer'){
					ui.tree.checkIfChange(G.this_path);
				}
				ui.f5_callback(function() {
					if (isDragCurrent && list['data']){
						_setSelectByFilename(list.data);
					}					
				});
			});
		},
		info:function(){pathOperate.info(_param(true));},
		past:function(){
			fileLight.clear();
			pathOperate.past(G.this_path,function(list){
				if (Config.pageApp == 'explorer') {
					ui.tree.checkIfChange(G.this_path);
				}
				ui.f5_callback(function() {
					_setSelectByFilename(list.data);
				});
			});
		},
		//前进后退
		back:back,
		next:next,
		//内部特有的
		list:list,
		newFile:newFile,
		newFolder:newFolder,
		rname:rname,
		setSearchByStr:_setSearchByStr,
		setSelectByChar:_setSelectByChar,
		setSelectByFilename:_setSelectByFilename,
		clipboard:pathOperate.clipboard
	}
});