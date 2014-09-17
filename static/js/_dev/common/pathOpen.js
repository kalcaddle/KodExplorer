define(function(require, exports) {
	//双击或者选中后enter 打开 执行事件
	//或者打开指定文件
	var _open = function(path,ext){
		if (path == undefined) return;

		if (ext == undefined) ext = core.pathExt(path);//没有扩展名则自动解析
		ext = ext.toLowerCase();
		if (ext == 'folder'){
			if (Config.pageApp == 'explorer'){
				ui.path.list(path+'/');//更新文件列表
			}else{
				core.explorer(path);
			}
			return;
		}
		if (ext == 'swf') {
			var url = core.path2url(path);
			_openWindow(url,core.ico('swf'),core.pathThis(path));
			return;
		}
		if (ext == 'oexe') {
			core.openApp(path);
			return;
		}
		if (ext == 'pdf') {
			var uuid = 'pdf'+UUID();
			var url = core.path2url(path);
			var html = '<div id="'+uuid+'" style="height:100%;">\
			<a href="'+url+'" target="_blank" style="display:block;margin:0 auto;margin-top:80px;font-size:16px;text-align:center;">'+LNG.error+'   '+LNG.download+' PDF</a></div>';
			$.dialog({
				resize:true,
				fixed:true,
				ico:core.ico('pdf'),
				title:core.pathThis(path),
				width:800,
				height:400,
				padding:0,
				content:html
			});
			new PDFObject({url:url}).embed(uuid);
			return;
		}
		if (ext=='html' || ext =='htm'){
			var url = core.path2url(path);
			_openWindow(url,core.ico('html'),core.pathThis(path));
			return;
		}
		if (inArray(core.filetype['image'],ext)){//单张图片打开
			var url = urlDecode(path);
			if (path.indexOf('http:') == -1) {
				url = core.path2url(url);
			}
			MaskView.image(url);
			return;
		}
		if (inArray(core.filetype['music'],ext) 
			|| inArray(core.filetype['movie'],ext) ) {
			var url = core.path2url(path);
			_player(url,ext);
			return;
		}
		if (inArray(core.filetype['doc'],ext)){
			var url = core.path2url(path);
			_openOffice(url,ext);
			return;
		}        
		if (inArray(core.filetype['bindary'],ext)) {//二进制文件，则下载
			_download(path);
			return;
		}
		_openEditor(path);//代码文件，编辑
	} 
	var _download = function(path){
		if (!path) return;
		var url='index.php?explorer/fileDownload&path='+urlEncode2(path);
		var html = '<iframe src="'+url+'" style="width:0px;height:0px;border:0;" frameborder=0></iframe>'+
					LNG.download_ready +'...';
		var dlg = $.dialog({
			icon:'succeed',
			title:false,
			time:1,
			content:html
		});
		dlg.DOM.wrap.find('.aui_loading').remove();
	};
	//新的页面作为地址打开。鼠标右键，IE下打开
	var _openIE = function(path){
		if (path==undefined) return;
		var url=core.path2url(path);
		window.open(url);
	};
	var _openWindow = function(url,ico,title,name) {
		if (!url) return;
		if (name == undefined) name = 'openWindow'+UUID();

		var html = "<iframe frameborder='0' name='Open"+name+"' src='"+url+
				"' style='width:100%;height:100%;border:0;'></iframe>";
		// if(url.substr(url.length-4).toLowerCase() == '.swf'){
		// 	html = core.createFlash(url,'',name);
		// }
		art.dialog.through({
			id:name,
			title:title,
			ico:ico,
			width:'70%',
			height:'65%',
			padding:0,
			content:html,
			resize:true
		});
	};
	var _openEditor = function(path){
		if (!path) return;
		var ext = core.pathExt(path);
		var filename = core.pathThis(path);
		if (inArray(core.filetype['bindary'],ext) ||
			inArray(core.filetype['music'],ext) ||
			inArray(core.filetype['image'],ext) ||
			inArray(core.filetype['movie'],ext) ||
			inArray(core.filetype['doc'],ext)
			){
			core.tips.tips(ext+LNG.edit_can_not,false);
			return;
		}
		if (window.top.frames["OpenopenEditor"] == undefined) {
		   var url ='./index.php?editor/edit&filename='+urlEncode(urlEncode2(path));//3次
		   var title = filename+' ——'+LNG.edit;
			_openWindow(url,core.ico('edit'),title.substring(title.length-50),'openEditor');
		}else{
			if ($.dialog.list['openEditor']) $.dialog.list['openEditor'].display(true);;
			FrameCall.top('OpenopenEditor','Editor.add','"'+urlEncode2(path)+'"');//2次
		}
	};
	var _openOffice = function(url,ext){
		if (G.office_server !='') {
			var office_url = G.office_server + urlEncode(url);
			var title = core.pathThis(urlDecode(url));
			art.dialog.open(office_url,{
				ico:ico,
				title:title,width:'70%',
				height:'65%',
				resize:true
			});
			return;
		}

		var app_url,temp_url,frame,ico;
		switch (ext) {
			case 'doc':
			case 'docx':
			case 'docm':
			case 'dot':
				ico=core.ico('doc');
				app_url ='http://sg1b-word-view.officeapps.live.com/wv/wordviewerframe.aspx?ui=zh-CN&rs=zh-CN&WOPISrc=';
				break;
			case 'ppt':
			case 'pptm':
			case 'pptx':
				ico=core.ico('ppt');
				app_url ='http://sg1b-powerpoint.officeapps.live.com/p/PowerPointFrame.aspx?PowerPointView=ReadingView&ui=zh-CN&rs=zh-CN&WOPISrc=';
				break;          
			case 'xls':
			case 'xlsb':
			case 'xlsm':
			case 'xlsx':
				ico=core.ico('xls');
				app_url = 'http://sg1b-excel.officeapps.live.com/x/_layouts/xlviewerinternal.aspx?ui=zh-CN&rs=zh-CN&WOPISrc=';
				break;
			default:break;
		}
		temp_url = 'http://sg1b-15-view-wopi.wopi.live.net:808/oh/wopi/files/@/wFileId?wFileId=';
		temp_url += urlEncode(url);
		frame = app_url+urlEncode(temp_url)+'&access_token=1&access_token_ttl=0';

		var title = core.pathThis(urlDecode(url));
		art.dialog.open(frame,{
			ico:ico,
			title:title,width:'70%',
			height:'65%',
			resize:true
		});
	}
	//传入音乐播放地址，多个的话传入数组。可以扩展播放网络音乐
	var _player = function(list,ext){
		if (!list) return;
		if (typeof(list) == 'string') list=[list];
		CMPlayer = require('./CMPlayer');
		CMPlayer.play(list,ext);
	};
	//对外接口
	return{
		open:_open,
		play:_player,
		openEditor:_openEditor,
		openIE:_openIE,
		download:_download
	}
});
