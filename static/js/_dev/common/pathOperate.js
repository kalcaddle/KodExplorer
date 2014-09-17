define(function(require, exports) {
	var tpl = require('../tpl/fileinfo');
	var path_not_allow  = ['/','\\',':','*','?','"','<','>','|'];//win文件名命不允许的字符
	//检测文件名是否合法，根据操作系统，规则不一样
	//win 不允许  / \ : * ? " < > |，lin* 不允许 ‘、’
	var _pathAllow = function(path){
		//字符串中检验是否出现某些字符，check=['-','=']
		var _strHasChar = function(str,check){
			var len=check.length;
			var reg="";
			for (var i=0; i<len; i++){
				if(str.indexOf(check[i])>0) return true;
			}
			return false;
		};
		if (_strHasChar(path,path_not_allow)){
			core.tips.tips(LNG.path_not_allow+':/ \ : * ? " < > |',false);
			return false;
		}
		return true;
	};
	//组装数据
	var _json = function(json){
		var send = 'list=[';
		for (var i in json) {
			send += '{"type":"'+json[i].type+'","path":"'+urlEncode2(json[i].path)+'"}';
			if (i != json.length-1) send+= ',';
		};
		return send+']';
	}
	// 新建文件
	var newFile = function(path,callback){
		if (!path) return;
		var filename = core.pathThis(path);
		if (!_pathAllow(filename)){
			if (typeof(callback) == 'function')callback();
			return;
		}
		$.ajax({
			dataType:'json',
			url: 'index.php?explorer/mkfile&path='+urlEncode2(path),
			beforeSend:function(){
				core.tips.loading();
			},
			error:core.ajaxError,
			success: function(data) {
				core.tips.close(data);
				if (typeof(callback) == 'function')callback(data);
			}
		});
	};
	// 新建文件夹
	var newFolder = function(path,callback){
		if (!path) return;
		var filename = core.pathThis(path);
		if (!_pathAllow(filename)){
			if (typeof(callback) == 'function')callback();
			return;
		}
		$.ajax({
			dataType:'json',
			url: 'index.php?explorer/mkdir&path='+urlEncode2(path),
			beforeSend:function(){
				core.tips.loading();
			},
			error:core.ajaxError,
			success: function(data) {
				core.tips.close(data);
				if (typeof (callback) == 'function')callback(data);
			}
		});
	};
	// 树目录重命名文件夹
	var rname = function(from,to,callback){
		if (!from || !to) return;
		if (from == to) return;
		if (!_pathAllow(core.pathThis(to))){
			if (typeof(callback) == 'function')callback();
			return;
		}
		$.ajax({
			type: "POST", 
			dataType:'json',
			url: 'index.php?explorer/pathRname',
			data: 'path='+urlEncode(from)+'&rname_to='+urlEncode(to),
			beforeSend:function(){
				core.tips.loading();
			},
			error:core.ajaxError,
			success: function(data) {
				core.tips.close(data);
				if (typeof(callback) == 'function')callback(data);
				//ui.tree.refresh(treeNode.getParentNode());
			}
		});
	};
	
	//多条数据操作
	//参数形如：list=[{"type":"file","file":"D:/test/a.txt"}]
	//删除 文件|文件夹 & 包含批量删除
	var remove = function(param,callback){
		if (param.length<1) return;
		var name = param[0]['path'];
		if (name.length > 20) {
			name = '...'+name.substr(-20);
		};

		$.dialog({
			id:'dialog_path_remove',
			fixed: true,//不跟随页面滚动
			icon:'question',
			title:LNG.remove_title,
			padding:40,
			lock:true,
			background:"#000",
			opacity:0.5,
			content:name+'<br/>'+LNG.remove_info+'【'+param.length+'】',
			ok:function() {
				$.ajax({
					url: 'index.php?explorer/pathDelete',
					type:'POST',
					dataType:'json',
					data:_json(param),
					beforeSend:function(){
						core.tips.loading();
					},
					error:core.ajaxError,
					success: function(data) {
						core.tips.close(data);
						if (typeof(callback) == 'function')callback(data);
					}
				});
			},
			cancel: true
		});
	};
	//复制
	var copy = function(param){
		if (param.length<1) return;
		$.ajax({
			url:'index.php?explorer/pathCopy',
			type:'POST',
			dataType:'json',
			data:_json(param),
			error:core.ajaxError,
			success: function(data) {
				core.tips.tips(data);
			}
		});
	};
	//剪切
	var cute = function(param){
		if (param.length<1) return;
		$.ajax({
			url:'index.php?explorer/pathCute',
			type:'POST',
			dataType:'json',
			data:_json(param),
			error:core.ajaxError,
			success:function(data){
				core.tips.tips(data);
			}
		});
	};
	// 粘贴
	var past = function(path,callback){
		if (!path) return;
		var url='index.php?explorer/pathPast&path='+urlEncode2(path);
		$.ajax({
			url:url,
			dataType:'json',
			beforeSend: function(){
				core.tips.loading(LNG.moving);
			},
			error:core.ajaxError,
			success:function(data){
				if (data.code){
					core.tips.close(data);
				}else{
					core.tips.close(data.info,false);
				}
				if (typeof(callback) == 'function')callback(data);
			}
		});
	};

	//获取文件夹属性
	var info = function(param){
		if (param.length<1) param = [{path:G.this_path,type:"folder"}];//当前目录属性
		$.ajax({
			url:'index.php?explorer/pathInfo',
			type:'POST',
			dataType:'json',
			data:_json(param),	
			beforeSend: function(){
				core.tips.loading(LNG.getting);
			},
			error:core.ajaxError,
			success:function(data){
				if (!data.code){
					core.tips.close(data);return;
				}
				core.tips.close(LNG.get_success,true);
				var tpl_file = 'path_info_more';
				var title = LNG.info;
				if (param.length ==1) {
					tpl_file = ((param[0].type =='folder')?'path_info':'file_info');
					title = core.pathThis(param[0].path);
					if (title.length>15) {
						title = title.substr(0,15)+"...  "+LNG.info
					}
				}
				var render = template.compile(tpl[tpl_file]);
				var dialog_id = UUID();
				data.data.LNG = LNG;//模板中的多语言注入				
				$.dialog({
					id:dialog_id,
					padding:5,
					ico:core.ico('info'),
					fixed: true,//不跟随页面滚动
					title:title,
					content:render(data.data),
					width:'350px',
					cancel: true
				});
				_chmod(dialog_id,param);			
			}
		});
	};
	var _chmod = function(dialog_id,param){
		$('.'+dialog_id).find('.edit_chmod').click(function(){
			var $input = $(this).parent().find('input');
			var $button = $(this);
			$.ajax({
				url:'index.php?explorer/pathChmod&mod='+$input.val(),
				type:'POST',
				data:_json(param),	
				beforeSend: function(){
					$button.text(LNG.loading);
				},
				error:function(data){
					$button.text(LNG.button_save);
				},
				success:function(data){
					$button.text(data.data)
						.animate({opacity:0.6},400,0)
						.delay(1000)
						.animate({opacity:1},200,0,function(){
							$button.text(LNG.button_save);
						});
				}
			});
		});
	}

	var zip = function(param,callback){
		if (param.length<1) return;
		$.ajax({
			url:'index.php?explorer/zip',
			type:'POST',
			dataType:'json',
			data:_json(param),
			beforeSend: function(){
				core.tips.loading(LNG.ziping);
			},
			error:core.ajaxError,
			success:function(data){
				core.tips.close(data);
				core.tips.tips(data);
				if (typeof (callback) == 'function') callback(data);
			}
		});
	};
	var unZip = function(path,callback){
		if (!path) return;
		var url='index.php?explorer/unzip&path='+urlEncode2(path);
		$.ajax({
			url:url,
			beforeSend: function(){
				core.tips.loading(LNG.unziping);
			},
			error:core.ajaxError,
			success:function(data){
				core.tips.close(data);
				if (typeof (callback) == 'function') callback(data);
			}
		});
	};
	// 粘贴
	var cuteDrag = function(param,dragTo,callback){
		if (!dragTo) return;
		$.ajax({
			url:'index.php?explorer/pathCuteDrag',
			type:'POST',
			dataType:'json',
			data:_json(param)+'&path='+urlEncode2(dragTo),
			beforeSend: function(){
				core.tips.loading(LNG.moving);
			},
			error:core.ajaxError,
			success:function(data){
				core.tips.close(data);
				if (typeof (callback) == 'function') callback(data);
			}
		});
	};
	// 创建副本
	var copyDrag = function(param,dragTo,callback){
		if (!dragTo) return;
		$.ajax({
			url:'index.php?explorer/pathCopyDrag',
			type:'POST',
			dataType:'json',
			data:_json(param)+'&path='+urlEncode2(dragTo),
			beforeSend: function(){
				core.tips.loading(LNG.moving);
			},
			error:core.ajaxError,
			success:function(data){
				core.tips.close(data);
				if (typeof (callback) == 'function') callback(data);
			}
		});
	};

	//==查看剪贴板
	var clipboard = function(){
		$.ajax({
			url:'index.php?explorer/clipboard',
			dataType:'json',
			error:core.ajaxError,
			success:function(data){
				if (!data.code) return;
				$.dialog({
					title:LNG.clipboard,
					padding:0,
					height:200,
					width:400,
					content:data.data
				});
			}
		});
	};
	//==添加收藏夹 
	var fav = function(path){
		if (!path) return;
		var pram='&name='+urlEncode(core.pathThis(path))+'&path='+urlEncode(path);
        core.setting('fav'+pram);
	};
	

	//获取数据
	var _app_param = function(dom) {
		var param ={};
		param.type = dom.find("input[type=radio]:checked").val();
		param.content = dom.find("textarea").val();
		param.group   = dom.find("[name=group]").val();	
		dom.find('input[type=text]').each(function(){
			var name = $(this).attr('name');
			param[name]=$(this).val();
		});
		dom.find('input[type=checkbox]').each(function(){
			var name = $(this).attr('name');
			param[name] = $(this).attr('checked')=='checked'?1:0;
		});
		return param;
	}
	var _bindAppEvent = function(dom) {
		dom.find('.type input').change(function() {
			var val = $(this).attr('apptype');
			dom.find('[data-type]').addClass('hidden');
			dom.find('[data-type='+val+']').removeClass('hidden');
		});
	}


	//应用添加、修改——创建文件；appstore 添加、修改——修改数据
	var appEdit = function(path,callback,action){//path——path/jsondata
		//action:user_add user_edit	root_add root_edit
		var title = LNG.app_create,dom,
			url,html,
			uuid  = UUID(),
			editpath,
			tpl = require('../tpl/app'),
			iconpath = G.basic_path+'static/images/app/',
			render = template.compile(tpl.html);
		if (action == undefined) {action= 'user_edit'};
		if (action == 'root_edit') {path = json_decode(path);};
		if (action == 'user_edit' || action == 'root_edit'){
			title = LNG.app_edit;
			html  = render({LNG:LNG,iconPath:iconpath,uuid:uuid,data:path});
		}else{
			html  = render({LNG:LNG,iconPath:iconpath,uuid:uuid,data:{}});
		}
		$.dialog({
			fixed: true,//不跟随页面滚动
			width:450,
			height:310,
			id:uuid,
			padding:15,			
			title:title,
			content:html,
			button:[
                {name:LNG.preview,callback:function(){
                    var data = _app_param(dom);
                    core.openApp(data);
                    return false;
                }},
                {name:LNG.button_save,focus:true,callback:function(){
                	var data = _app_param(dom);
                	switch(action){
						case 'user_add':
							var filename = urlEncode2(G.this_path+data.name);
							url = './index.php?app/user_app&action=add&path='+filename;
							break;
						case 'user_edit':
							url = './index.php?app/user_app&path='+urlEncode2(path.path);
							break;
						case 'root_add':url = './index.php?app/add&name='+data.name;break;
						case 'root_edit':url = './index.php?app/edit&name='+data.name+'&old_name='+path.name;break;
						default:break;
					}
	                $.ajax({
						url: url,
						type:'POST',
						dataType:'json',
						data:'data='+urlEncode2(json_encode(data)),
						beforeSend:function(){
							core.tips.loading();
						},
						error:core.ajaxError,
						success: function(data) {
							core.tips.close(data);
							if (!data.code) return;
							if (action == 'root_edit' || action == 'root_add') {
								//刷新应用列表
								if (!data.code) {return;};
								FrameCall.top('Openapp_store','App.reload','""');
							}else{
								if (typeof (callback) == 'function'){
									callback();
								}else{
									ui.f5();
								}								
							}
						}
					});
                }}             
            ]
		});
		dom = $('.'+uuid);
		//init 选中、初始化数据、显示隐藏
		if (path.group) {
			dom.find('option').eq(path.group).attr('selected',1);
		}
		dom.find('.aui_content').css('overflow','inherit');
		switch(action){
			case 'user_edit' :
				dom.find('.name').addClass('hidden');
				dom.find('.desc').addClass('hidden');
				dom.find('.group').addClass('hidden');
				dom.find('option[value='+path.group+']').attr('checked',true);
				break;
			case 'user_add':
				dom.find('.desc').addClass('hidden');
				dom.find('.group').addClass('hidden');
				dom.find('[apptype=url]').attr('checked',true);
				dom.find('[data-type=url] input[name=resize]').attr('checked',true);
				dom.find('input[name=width]').attr('value','800');
				dom.find('input[name=height]').attr('value','600');
				dom.find('input[name=icon]').attr('value','oexe.png');
				break;				
			case 'root_add':
				dom.find('[apptype=url]').attr('checked',true);
				dom.find('[data-type=url] input[name=resize]').attr('checked',true);
				dom.find('input[name=width]').attr('value','800');
				dom.find('input[name=height]').attr('value','600');
				dom.find('input[name=icon]').attr('value','oexe.png');
				break;
			case 'root_edit':
				dom.find('option[value='+path.group+']').attr('selected',true);
				break;
			default:break;
		}
		_bindAppEvent(dom);
	};
    var appList = function(){
    	core.appStore();
	};
	//ui.path.pathOperate.appAddURL('http://www.baidu.com');
	var appAddURL = function(url){
		if (url && url.length<4 && url.substring(0,4)!='http') return;
		$.ajax({
			url: './index.php?app/get_url_title&url='+url,
			dataType:'json',
			beforeSend:function(){
				core.tips.loading();
			},
			success: function(result) {
				var name = result.data;
				core.tips.close(result);
				var data = {
					content:"window.open('"+url+"');",
					desc: "",
					group: "others",
					type: "app",
					icon: "internet.png",
					name: name,
					resize: 1,
					simple: 0,
					height: "",
					width: ""
				};
				var filename = urlEncode2(G.this_path+name);
				url = './index.php?app/user_app&action=add&path='+filename;
			    $.ajax({
					url: url,
					type:'POST',
					dataType:'json',
					data:'data='+urlEncode2(json_encode(data)),					
					success: function(data) {
						core.tips.close(data);
						if (!data.code) return;
						ui.f5();
					}
				});
			}
		});		
	};

	return{
		appEdit:appEdit,
		appList:appList,
		appAddURL:appAddURL,

		newFile:newFile,
		newFolder:newFolder,
		rname:rname,
		unZip:unZip,

		//参数为json数据，可以操作多个对象
		zip:zip,
		copy:copy,
		cute:cute,
		info:info,
		remove:remove,
		cuteDrag:cuteDrag,
		copyDrag:copyDrag,

		past:past,
		clipboard:clipboard,
		fav:fav
	}
});