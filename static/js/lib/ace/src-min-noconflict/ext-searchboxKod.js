ace.define("ace/ext/searchboxKod", ["require", "exports", "module", "ace/lib/dom", "ace/lib/lang", "ace/lib/event", "ace/keyboard/hash_handler", "ace/lib/keys"], function(require, exports, module) {
	"use strict";

	var dom = require("../lib/dom");
	var lang = require("../lib/lang");
	var event = require("../lib/event");
	var searchboxCss = "\
		.ace_search {\
		background-color: #ddd;\
		border: 1px solid #cbcbcb;\
		border-top: 0 none;\
		max-width: 325px;\
		overflow: hidden;\
		margin: 0;\
		padding: 4px;\
		padding-right: 6px;\
		padding-bottom: 0;\
		position: absolute;\
		z-index: 99;\
		white-space: normal;\
		}\
		.ace_search.left {\
		border-left: 0 none;\
		border-radius: 0px 0px 5px 0px;\
		left: 0;\
		}\
		.ace_search.right {\
		border-radius: 0px 0px 0px 5px;\
		border-right: 0 none;\
		right: 0;\
		}\
		.ace_search_form, .ace_replace_form {\
		border-radius: 3px;\
		border: 1px solid #cbcbcb;\
		float: left;\
		margin-bottom: 4px;\
		overflow: hidden;\
		}\
		.ace_search_form.ace_nomatch {\
		outline: 1px solid red;\
		}\
		.ace_search_field {\
		background-color: white;\
		border-right: 1px solid #cbcbcb;\
		border: 0 none;\
		-webkit-box-sizing: border-box;\
		-moz-box-sizing: border-box;\
		box-sizing: border-box;\
		float: left;\
		height: 22px;\
		outline: 0;\
		padding: 0 7px;\
		width: 214px;\
		margin: 0;\
		}\
		.ace_searchbtn,\
		.ace_replacebtn {\
		background: #fff;\
		border: 0 none;\
		border-left: 1px solid #dcdcdc;\
		cursor: pointer;\
		float: left;\
		height: 22px;\
		margin: 0;\
		position: relative;\
		}\
		.ace_searchbtn:last-child,\
		.ace_replacebtn:last-child {\
		border-top-right-radius: 3px;\
		border-bottom-right-radius: 3px;\
		}\
		.ace_searchbtn:disabled {\
		background: none;\
		cursor: default;\
		}\
		.ace_searchbtn {\
		background-position: 50% 50%;\
		background-repeat: no-repeat;\
		width: 27px;\
		}\
		.ace_searchbtn.prev {\
		background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAgAAAAFCAYAAAB4ka1VAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAADFJREFUeNpiSU1NZUAC/6E0I0yACYskCpsJiySKIiY0SUZk40FyTEgCjGgKwTRAgAEAQJUIPCE+qfkAAAAASUVORK5CYII=);    \
		}\
		.ace_searchbtn.next {\
		background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAgAAAAFCAYAAAB4ka1VAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAADRJREFUeNpiTE1NZQCC/0DMyIAKwGJMUAYDEo3M/s+EpvM/mkKwCQxYjIeLMaELoLMBAgwAU7UJObTKsvAAAAAASUVORK5CYII=);    \
		}\
		.ace_searchbtn_close {\
		background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAAcCAYAAABRVo5BAAAAZ0lEQVR42u2SUQrAMAhDvazn8OjZBilCkYVVxiis8H4CT0VrAJb4WHT3C5xU2a2IQZXJjiQIRMdkEoJ5Q2yMqpfDIo+XY4k6h+YXOyKqTIj5REaxloNAd0xiKmAtsTHqW8sR2W5f7gCu5nWFUpVjZwAAAABJRU5ErkJggg==) no-repeat 50% 0;\
		border-radius: 50%;\
		border: 0 none;\
		color: #656565;\
		cursor: pointer;\
		float: right;\
		font: 16px/16px Arial;\
		height: 14px;\
		margin: 5px 1px 9px 5px;\
		padding: 0;\
		text-align: center;\
		width: 14px;\
		}\
		.ace_searchbtn_close:hover {\
		background-color: #656565;\
		background-position: 50% 100%;\
		color: white;\
		}\
		.ace_replacebtn.prev {\
		width: 54px\
		}\
		.ace_replacebtn.next {\
		width: 27px\
		}\
		.ace_button {\
		margin-left: 2px;\
		cursor: pointer;\
		-webkit-user-select: none;\
		-moz-user-select: none;\
		-o-user-select: none;\
		-ms-user-select: none;\
		user-select: none;\
		overflow: hidden;\
		opacity: 0.7;\
		border: 1px solid rgba(100,100,100,0.23);\
		padding: 1px;\
		-moz-box-sizing: border-box;\
		box-sizing:    border-box;\
		color: black;\
		}\
		.ace_button:hover {\
		background-color: #eee;\
		opacity:1;\
		}\
		.ace_button:active {\
		background-color: #ddd;\
		}\
		.ace_button.checked {\
		border-color: #3399ff;\
		opacity:1;\
		}\
		.ace_search_options{\
		margin-bottom: 3px;\
		text-align: right;\
		-webkit-user-select: none;\
		-moz-user-select: none;\
		-o-user-select: none;\
		-ms-user-select: none;\
		user-select: none;\
		}";
	var HashHandler = require("../keyboard/hash_handler").HashHandler;
	var keyUtil = require("../lib/keys");
	dom.importCssString(searchboxCss, "ace_searchbox");

	var html = '<div class="ace_search right">\
		<button type="button" action="hide" class="ace_searchbtn_close"></button>\
		<div class="ace_search_form">\
			<div class="ace_search_input">\
				<input class="ace_search_field" placeholder="Search for" spellcheck="false"></input>\
				<span class="search-info"></span>\
				<div class="history-list dropup">\
					<span class="dropmenu" data-toggle="dropdown" id="history_search" aria-haspopup="true" aria-expanded="false"><i class="font-icon icon-time"></i></span>\
					<ul class="dropdown-menu menu-top" aria-labelledby="history_search"></ul>\
				</div>\
			</div>\
			<div class="ace_search_action">\
				<button type="button" action="findNext" class="ace_searchbtn next"><i class="font-icon icon-angle-left"></i></button>\
				<button type="button" action="findPrev" class="ace_searchbtn prev"><i class="font-icon icon-angle-right"></i></button>\
				<button type="button" action="findAll" class="ace_searchbtn" title="Alt-Enter">All</button>\
			</div>\
		</div>\
		<div class="ace_replace_form">\
			<div class="ace_search_input">\
				<input class="ace_search_field" placeholder="Replace with" spellcheck="false"></input>\
				<div class="history-list dropup">\
					<span class="dropmenu" data-toggle="dropdown" id="history_replace" aria-haspopup="true" aria-expanded="false"><i class="font-icon icon-time"></i></span>\
					<ul class="dropdown-menu menu-top" aria-labelledby="history_replace"></ul>\
				</div>\
			</div>\
			<div class="ace_search_action">\
				<button type="button" action="replaceAndFindNext" class="ace_replacebtn">Replace</button>\
				<button type="button" action="replaceAll" class="ace_replacebtn">All</button>\
			</div>\
		</div>\
		<div class="ace_search_options">\
			<span action="toggleRegexpMode" class="ace_button" title="RegExp Search">.*</span>\
			<span action="toggleCaseSensitive" class="ace_button" title="CaseSensitive Search">Aa</span>\
			<span action="toggleWholeWords" class="ace_button" title="Whole Word Search">\\b</span>\
		</div>\
	</div>'.replace(/>\s+/g, ">");

	var SearchBox = function(appSpace,editor, range, showReplaceForm) {
		var div = dom.createElement("div");
		div.innerHTML = html;
		this.element = div.firstChild;
		this.$init();
		this.setEditor(appSpace,editor);
		this.bindHistoryMenu();
	};

	(function() {
		this.bindHistoryMenu = function(){
			var that = this;
			$('.ace_search .dropmenu').dropdown();
			$('.ace_search .dropmenu').live('mousedown',function(e){
				var html = '';
				var history = that.historySearch.list();
				for (var i = 0; i <= history.length - 1; i++) {
					html += '<li><a href="javascript:void(0);" draggable="false">'+htmlEncode(history[i])+'</a></li>'
					history[i]
				}
				$('[aria-labelledby=history_search]').html(html);

				html = '';
				history = that.historyReplace.list();
				for (var i = 0; i <= history.length - 1; i++) {
					html += '<li><a href="javascript:void(0);">'+htmlEncode(history[i])+'</a></li>'
					history[i]
				}
				$('[aria-labelledby=history_replace]').html(html);
			});

			$('.ace_search .dropdown-menu li a').live('mouseup',function(){
				var value = $(this).text();
				var $input = $(this).parents('.ace_search_input').find('.ace_search_field');

				$(this).parents('.history-list').removeClass('open');
				$input.val(value);
				$input.focus();
				that.find(false, false, undefined,true);
			});
		}
		this.resetEditorHeight = function(show){
			var $search = $('.search-content');
			var $searchBody = $('.ace_search');
			var $editBody = $('.edit-body');
			if(show){
				$search.removeClass('hidden');
				$editBody.css('bottom',$searchBody.outerHeight());
			}else{
				$search.addClass('hidden');
				$editBody.css('bottom',0);
			}
			Editor.current() && Editor.current().resize();
		}
		this.setEditor = function(appSpace,editor) {
			var $search = $('.search-content');
			if($search.html() == ''){
				$search.get(0).appendChild(this.element);
			}
			this.resetEditorHeight(true);
			appSpace.searchBox = this;
			this.editor = editor;
			Editor.current() && Editor.current().resize();
		};
		this.$initElements = function(sb) {
			this.searchBox = sb.querySelector(".ace_search_form");
			this.replaceBox = sb.querySelector(".ace_replace_form");
			this.searchOptions = sb.querySelector(".ace_search_options");
			this.regExpOption = sb.querySelector("[action=toggleRegexpMode]");
			this.caseSensitiveOption = sb.querySelector("[action=toggleCaseSensitive]");
			this.wholeWordOption = sb.querySelector("[action=toggleWholeWords]");
			this.searchInput = this.searchBox.querySelector(".ace_search_field");
			this.replaceInput = this.replaceBox.querySelector(".ace_search_field");
		};

		this.$init = function() {
			var sb = this.element;
			this.$initElements(sb);
			var _this = this;
			event.addListener(sb, "mousedown", function(e) {
				//下拉菜单
				if($(e.target).parents('.history-list').length>0){
					return true;
				}
				setTimeout(function() {
					_this.activeInput.focus();
				}, 0);
				event.stopPropagation(e);
			});
			event.addListener(sb, "click", function(e) {
				var t = e.target || e.srcElement;
				var action = t.getAttribute("action");
				if (action && _this[action])
					_this[action]();
				else if (_this.$searchBarKb.commands[action])
					_this.$searchBarKb.commands[action].exec(_this);
				event.stopPropagation(e);
			});

			event.addCommandKeyListener(sb, function(e, hashId, keyCode) {
				var keyString = keyUtil.keyCodeToString(keyCode);
				var command = _this.$searchBarKb.findKeyCommand(hashId, keyString);
				if (command && command.exec) {
					command.exec(_this);
					event.stopEvent(e);
				}
			});

			this.$onChange = lang.delayedCall(function() {
				_this.find(false, false);
			});

			event.addListener(this.searchInput, "input", function() {
				_this.$onChange.schedule(20);
			});
			event.addListener(this.searchInput, "focus", function() {
				_this.activeInput = _this.searchInput;
				_this.searchInput.value && _this.highlight();
			});
			event.addListener(this.replaceInput, "focus", function() {
				_this.activeInput = _this.replaceInput;
				_this.searchInput.value && _this.highlight();
			});
		};
		this.$searchBarKb = new HashHandler();
		this.$searchBarKb.bindKeys({
			"Ctrl-f|Command-f": function(sb) {
				var isReplace = sb.isReplace = !sb.isReplace;
				sb.replaceBox.style.display = isReplace ? "" : "none";
				sb.searchInput.focus();
				sb.resetEditorHeight(true);
			},
			"Ctrl-H|Command-Option-F": function(sb) {
				sb.replaceBox.style.display = "";
				sb.replaceInput.focus();
			},
			"Ctrl-G|Command-G": function(sb) {
				sb.findNext();
			},
			"Ctrl-Shift-G|Command-Shift-G": function(sb) {
				sb.findPrev();
			},
			"esc": function(sb) {
				setTimeout(function() {
					sb.hide();
				});
			},
			"Return": function(sb) {
				if (sb.activeInput == sb.replaceInput)
					sb.replace();
				sb.findNext();
			},
			"Shift-Return": function(sb) {
				if (sb.activeInput == sb.replaceInput)
					sb.replace();
				sb.findPrev();
			},
			"Alt-Return": function(sb) {
				if (sb.activeInput == sb.replaceInput)
					sb.replaceAll();
				sb.findAll();
			},
			"Tab": function(sb) {
				(sb.activeInput == sb.replaceInput ? sb.searchInput : sb.replaceInput).focus();
			},
			"Up": function(sb){
				var value;
				if(document.activeElement == sb.searchInput){
					value = sb.historySearch.back();
					sb.searchInput.value = value;
					sb.find(false, false, undefined,true);
				}else{
					value = sb.historyReplace.back();
					sb.replaceInput.value = value;
				}
			},
			"Down": function(sb){
				var value;
				if(document.activeElement == sb.searchInput){
					value = sb.historySearch.next();
					sb.searchInput.value = value;
					sb.find(false, false);
				}else{
					value = sb.historyReplace.next();
					sb.replaceInput.value = value;
				}
			}
		});

		//搜索历史记录
		this.historySearch  = new Queen(10,'historySearch');
		this.historyReplace = new Queen(10,'historyReplace');
		this.$searchBarKb.addCommands([{
				name: "toggleRegexpMode",
				bindKey: {
					win: "Alt-R|Alt-/",
					mac: "Ctrl-Alt-R|Ctrl-Alt-/"
				},
				exec: function(sb) {
					sb.regExpOption.checked = !sb.regExpOption.checked;
					sb.$syncOptions();
				}
			}, {
				name: "toggleCaseSensitive",
				bindKey: {
					win: "Alt-C|Alt-I",
					mac: "Ctrl-Alt-R|Ctrl-Alt-I"
				},
				exec: function(sb) {
					sb.caseSensitiveOption.checked = !sb.caseSensitiveOption.checked;
					sb.$syncOptions();
				}
			}, {
				name: "toggleWholeWords",
				bindKey: {
					win: "Alt-B|Alt-W",
					mac: "Ctrl-Alt-B|Ctrl-Alt-W"
				},
				exec: function(sb) {
					sb.wholeWordOption.checked = !sb.wholeWordOption.checked;
					sb.$syncOptions();
				}
			}
		]);

		this.$syncOptions = function() {
			dom.setCssClass(this.regExpOption, "checked", this.regExpOption.checked);
			dom.setCssClass(this.caseSensitiveOption, "checked", this.caseSensitiveOption.checked);
			dom.setCssClass(this.wholeWordOption, "checked", this.wholeWordOption.checked);

			this.find(false, false);
			this.searchConfig({
				"regExpOption":this.regExpOption.checked,
				"caseSensitiveOption":this.caseSensitiveOption.checked,
				"wholeWordOption":this.wholeWordOption.checked
			});
		};

		//搜索设置本地保存
		this.searchConfig = function(config){
			var key = 'editor_search_config';
			if(config == undefined){
				var config = LocalData.getConfig(key);
				if(!config){
					config = {
						"regExpOption":false,
						"wholeWordOption":false,
						"caseSensitiveOption":false
					};
				}
				this.regExpOption.checked = config.regExpOption;
				this.wholeWordOption.checked = config.wholeWordOption;
				this.caseSensitiveOption.checked = config.caseSensitiveOption;
				dom.setCssClass(this.regExpOption, "checked", this.regExpOption.checked);
				dom.setCssClass(this.wholeWordOption, "checked", this.wholeWordOption.checked);
				dom.setCssClass(this.caseSensitiveOption, "checked", this.caseSensitiveOption.checked);
			}else{
				return LocalData.setConfig(key,config);
			}
		}

		this.highlight = function(re) {
			this.editor.session.highlight(re || this.editor.$search.$options.re);
			this.editor.renderer.updateBackMarkers()
		};

		// 搜索信息展示
		this.findAllInfo = function(needle, options, additive) {
	        options = options || {};
	        options.needle = needle || options.needle;
	        if (options.needle == undefined) {
	            var range = this.editor.selection.isEmpty()
	                ? this.editor.selection.getWordRange()
	                : this.editor.selection.getRange();
	            options.needle = this.editor.session.getTextRange(range);
	        }
	        this.editor.$search.set(options);
	        var ranges = this.editor.$search.findAll(this.editor.session);
	        return ranges;
	    };

		this.find = function(skipCurrent, backwards, preventScroll,ignoreHistory) {
			//console.log(2233,skipCurrent, backwards, preventScroll);
			var range = this.editor.find(this.searchInput.value, {
				skipCurrent: skipCurrent,
				backwards: backwards,
				wrap: true,
				regExp: this.regExpOption.checked,
				caseSensitive: this.caseSensitiveOption.checked,
				wholeWord: this.wholeWordOption.checked,
				preventScroll: preventScroll
			});
			var noMatch = !range && this.searchInput.value;
			dom.setCssClass(this.searchBox, "ace_nomatch", noMatch);
			this.editor._emit("findSearchBox", {
				match: !noMatch
			});
			this.highlight();

			//搜索个数及当前匹配位置信息展示
			var ranges = this.findAllInfo(this.searchInput.value, {
				regExp: this.regExpOption.checked,
				caseSensitive: this.caseSensitiveOption.checked,
				wholeWord: this.wholeWordOption.checked
			});
			var html = '',searchCurrent = 0,searchNum = 0;
			if (range && ranges.length !== 0) {
				var index = 0;
				for (index = 0; index < ranges.length; index++) {
					if (ranges[index].start.column == range.start.column &&
						ranges[index].start.row == range.start.row) {
						break;
					}
				}
				searchCurrent = (index + 1);
				searchNum = ranges.length;
			}
			html ='<span class="search_at_index">'+ searchCurrent +'</span>of<span class="search_total_num">' + searchNum + '</span>';
			$(".search-info").html(html);
			if(searchCurrent == 1){
				$(".search-info").addClass('search-first');
			}else{
				$(".search-info").removeClass('search-first');
			}
		};
		this.findNext = function() {
			this.find(true, false);
			//添加历史记录
			this.historySearch.add(this.searchInput.value);
		};
		this.findPrev = function() {
			console.log(123123);
			this.find(true, true);
			//添加历史记录
			this.historySearch.add(this.searchInput.value);
		};
		this.findAll = function() {
			var range = this.editor.findAll(this.searchInput.value, {
				regExp: this.regExpOption.checked,
				caseSensitive: this.caseSensitiveOption.checked,
				wholeWord: this.wholeWordOption.checked
			});
			var noMatch = !range && this.searchInput.value;
			dom.setCssClass(this.searchBox, "ace_nomatch", noMatch);
			this.editor._emit("findSearchBox", {
				match: !noMatch
			});
			this.highlight();
			this.hide();

			//添加历史记录
			this.historySearch.add(this.searchInput.value);
		};
		this.replace = function() {
			if (!this.editor.getReadOnly()){
				this.editor.replace(this.replaceInput.value);
				this.historyReplace.add(this.replaceInput.value);
			}
		};
		this.replaceAndFindNext = function() {
			if (!this.editor.getReadOnly()) {
				this.editor.replace(this.replaceInput.value);
				this.findNext();
				this.historyReplace.add(this.replaceInput.value);
			}
		};
		this.replaceAll = function() {
			if (!this.editor.getReadOnly()){
				this.editor.replaceAll(this.replaceInput.value);
				this.historyReplace.add(this.replaceInput.value);
			}
		};
		this.hide = function() {
			this.element.style.display = "none";
			this.editor.focus();
			this.resetEditorHeight(false);
		};
		this.show = function(appSpace,editor,value, isReplace) {
			this.searchConfig();
			this.setEditor(appSpace,editor);
			this.element.style.display = "";
			this.replaceBox.style.display = isReplace ? "" : "none";
			this.isReplace = isReplace;

			if(!value){// 没有选中；则填充上一次搜索的内容
				var last = this.historySearch.last();
				if(!last){
					last = '';
				}
				value = last;
			}
			this.searchInput.value = value;
			this.find(false, false, true);
			this.searchInput.focus();
			this.searchInput.select();
			this.find(false, false);
			this.resetEditorHeight(true);

			//搜索框保持焦点
			var that = this;
			setTimeout(function(){
				if(!that.isFocused()){
					that.searchInput.focus();
					that.searchInput.select();
				}
			},10);
		};
		this.isShow = function(){
			return $('.ace_search').css('display') != 'none';
		}

		this.isFocused = function() {
			var el = document.activeElement;
			return el == this.searchInput || el == this.replaceInput;
		}
	}).call(SearchBox.prototype);

	exports.SearchBox = SearchBox;
	exports.Search = function(appSpace,editor, isReplace) {
		var sb = appSpace.searchBox || new SearchBox(appSpace,editor);
		sb.show(appSpace,editor,editor.session.getTextRange(), isReplace);
	};
});
(function() {
	ace.require(["ace/ext/searchboxKod"], function() {});
})();
