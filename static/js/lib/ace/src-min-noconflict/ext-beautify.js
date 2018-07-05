ace.define("ace/ext/beautify",["require","exports","module","ace/token_iterator"], function(require, exports, module) {

	/**
	* 1. 分号、中括号后面换行，for里面的分号不换行
	* 2. 数组定义key=>value; 不处理里面的换行和空格及tab键
	* 3. switch case/default 后面没有break时，后面行indent还原；
	* 4. switch 多个case/default并列，没有break时；后面indent处理
	* 5. +-/*.&^|%后面跟等号运算符；等号不加空格
	* 6. 块级字符串；结束标记无indent;否则语法错误
	* 7. if/else {前后多余空行去除；
	* 8. try cache 中cache不换行；同else
	* 9. --表达式含有{}不换行; 形如:ord($text{strlen($text)-1});  冲突:导致行注释后括号变成注释导致语法错误;
	* 10. 多行注释；注释内容不做修改
	*/

	"use strict";
	var TokenIterator = require("../token_iterator").TokenIterator;
	function is(token, type) {
		return token.type.lastIndexOf(type + ".xml") > -1;
	}
	exports.singletonTags = ["area", "base", "br", "col", "command", "embed", "hr", "html", "img", "input", "keygen", "link", "meta", "param", "source", "track", "wbr"];
	exports.blockTags = ["article", "aside", "blockquote", "body", "div", "dl", "fieldset", "footer", "form", "head", "header", "html", "nav", "ol", "p", "script", "section", "style", "table", "tbody", "tfoot", "thead", "ul"];

	exports.beautify = function(session) {
		//压缩成一行的代码; 解决迭代获取token;每行最大token数量限制  MAX_TOKEN_COUNT=2000==>500000
		var iterator = new TokenIterator(session, 0, 0);
		var token = iterator.getCurrentToken();
		var tabString = session.getTabString();
		var singletonTags = exports.singletonTags;
		var blockTags = exports.blockTags;
		var nextToken;
		var breakBefore = false;
		var spaceBefore = false;
		var spaceAfter = false;
		var code = "";
		var value = "";
		var tagName = "";
		var depth = 0;
		var lastDepth = 0;
		var lastIndent = 0;
		var indent = 0;
		var unindent = 0;
		var roundDepth = 0;
		var onCaseLine = false;
		var row;
		var curRow = 0;
		var rowsToAdd = 0;
		var rowTokens = [];
		var abort = false;
		var i;
		var indentNextLine = false;
		var inTag = false;
		var inCSS = false;
		var inBlock = false;
		var levels = {0: 0};
		var parents = {};

		var trimNext = function() {
			if (nextToken && nextToken.value && nextToken.type !== 'string.regexp'){
				nextToken.value = nextToken.value.trim();
			}
		};

		var trimLine = function() {
			code = code.replace(/ +$/, "");
		};

		var trimCode = function() {
			code = code.trimRight();
			breakBefore = false;
		};

		//add by warlee;
		var preToken = token;
		var parentChar = [];

		while (token !== null) {
			curRow = iterator.getCurrentTokenRow();
			rowTokens = iterator.$rowTokens;
			nextToken = iterator.stepForward();

			if (typeof token !== "undefined") {
				value = token.value;
				unindent = 0;
				inCSS = (tagName === "style" || session.$modeId === "ace/mode/css");
				if (is(token, "tag-open")) {
					inTag = true;
					if (nextToken){
						inBlock = (blockTags.indexOf(nextToken.value) !== -1);
					}
					if (value === "</") {
						if (inBlock && !breakBefore && rowsToAdd < 1){
							rowsToAdd++;
						}
						if (inCSS){
							rowsToAdd = 1;
						}
						unindent = 1;
						inBlock = false;
					}
				} else if (is(token, "tag-close")) {
					inTag = false;
				} else if (is(token, "comment.start")) {
					inBlock = true;
				} else if (is(token, "comment.end")) {
					inBlock = false;
				}
				if (!inTag && !rowsToAdd && token.type === "paren.rparen" && token.value.substr(0, 1) === "}") {
					rowsToAdd++;
				}
				if (curRow !== row) {
					rowsToAdd = curRow;
					if (row){
						rowsToAdd -= row;
					}
				}

				if (rowsToAdd) {
					trimCode();
					for (; rowsToAdd > 0; rowsToAdd--){
						code += "\n";
					}

					breakBefore = true;
					if (!is(token, "comment") && !token.type.match(/^(comment|string)$/)){
						value = value.trimLeft();
					}
				}
				if (value) {
					//add by warlee; 分号符号后换行;for括号里面的分号不换行
					if(token.type == 'text' && value.trimRight().substr(-1) == ';'){
						rowsToAdd+=1;
						if (parents[depth-1] === 'for' && parentChar[parentChar.length-1] == '('){
							rowsToAdd-=1;
						}
					}
					if (token.type=='paren.rparen' && token.value == '})'){
						rowsToAdd-=1;
					}


					if (token.type === "keyword" && value.match(/^(if|else|elseif|catch|for|foreach|while|switch)$/)) {
						parents[depth] = value;
						trimNext();
						spaceAfter = true;
						if (value.match(/^(else|elseif|catch)$/)) {
							if (code.match(/\}[\s]*$/)) {
								trimCode();
								spaceBefore = true;
							}
						}
					} else if (token.type === "paren.lparen") {
						trimNext();
						if (value.substr(-1) === "{") {
							spaceAfter = true;
							indentNextLine = false;
							if(!inTag){
								rowsToAdd = 1;
							}
						}
						if (value.substr(0, 1) === "{") {
							spaceBefore = true;
							if (code.substr(-1) !== '[' && code.trimRight().substr(-1) === '[') {
								trimCode();
								spaceBefore = false;
							} else if (code.trimRight().substr(-1) === ')') {
								trimCode();
							} else {
								trimLine();
							}
						}
					} else if (token.type === "paren.rparen") {
						unindent = 1;
						if (value.substr(0, 1) === "}") {
							rowsToAdd+=1;//add by warlee; }符号后换行;
							//changed by warlee; switch default没有break时indent-1;
							if (parents[depth-1] === 'case' || parents[depth-1] === 'default'){
								unindent++;
							}
							if (code.trimRight().substr(-1) === '{') {
								trimCode();
							} else {
								spaceBefore = true;
								if (inCSS){
									//rowsToAdd+=1;
								}
							}
						}
						if (value.substr(0, 1) === "]") {
							if (code.substr(-1) !== '}' && code.trimRight().substr(-1) === '}') {
								spaceBefore = false;
								indent++;
								trimCode();
							}
						}
						if (value.substr(0, 1) === ")") {
							if (code.substr(-1) !== '(' && code.trimRight().substr(-1) === '(') {
								spaceBefore = false;
								indent++;
								trimCode();
							}
						}
						trimLine();
					} else if ((token.type === "keyword.operator" || token.type === "keyword") && value.match(/^(=|==|===|!=|!==|&&|\|\||and|or|xor|\+=|.=|>|>=|<|<=|=>)$/)) {
						trimCode();
						trimNext();
						spaceBefore = true;
						spaceAfter = true;

						//add by warlee; .= 中间不加空格,语法错误
						var operatorChar = ['+','-','/','*','.','&','^','|','%'];
						if(trim(token.value) == '=' && operatorChar.indexOf(trim(preToken.value)) !== -1  ){
							spaceBefore = false;
						}
					} else if (token.type === "punctuation.operator" && value === ';') {
						trimCode();
						trimNext();
						spaceAfter = true;

						if (inCSS){
							rowsToAdd++;
						}
					} else if (token.type === "punctuation.operator" && value.match(/^(:|,)$/)) {
						trimCode();
						trimNext();
						spaceAfter = true;
						breakBefore = false;
					} else if (token.type === "support.php_tag" && value === "?>" && !breakBefore) {
						trimCode();
						spaceBefore = true;
					} else if (is(token, "attribute-name") && code.substr(-1).match(/^\s$/)) {
						spaceBefore = true;
					} else if (is(token, "attribute-equals")) {
						trimLine();
						trimNext();
					} else if (is(token, "tag-close")) {
						trimLine();
						if(value === "/>"){
							spaceBefore = true;
						}
					}

					//add by warlee;php tag后面换行
					if (token.type === "support.php_tag" && value.trim().substr(0,2) === "<?") {
						//rowsToAdd += 1;
					}
					if (token.type === "keyword" && value.match(/^(case|default)$/)) {
						if(parents[depth-1] == 'case' || parents[depth-1] == 'default'){
							unindent = 1;//case左缩进
						}
					}
					//块级字符串；结束标记无indent;
					if (token.type === "markup.list" ) {
						unindent = 100;//去除缩进
					}

					if (breakBefore && !(token.type.match(/^(comment)$/) && !value.substr(0, 1).match(/^[/#]$/)) && !(token.type.match(/^(string)$/) && !value.substr(0, 1).match(/^['"]$/))) {
						indent = lastIndent;
						if(depth > lastDepth) {
							indent++;
							for (i=depth; i > lastDepth; i--){
								levels[i] = indent;
							}
						} else if(depth < lastDepth){
							indent = levels[depth];
						}

						lastDepth = depth;
						lastIndent = indent;
						if(unindent){
							indent -= unindent;
						}

						if (indentNextLine && !roundDepth) {
							indent++;
							indentNextLine = false;
						}
						for (i = 0; i < indent; i++){
							code += tabString;
						}
					}

					if (token.type === "keyword" && value.match(/^(case|default)$/)) {
						//add by warlee; 只加switch第一层加indent;
						if(parents[depth-1] == 'switch'){
							parents[depth] = value;
							depth++;
						}
					}
					// if (token.type === "keyword" && value.match(/^(break)$/)) {
					// 	if(parents[depth-1] && parents[depth-1].match(/^(case|default)$/)) {
					// 		depth--;
					// 	}
					// }
					if (token.type === "paren.lparen") {
						roundDepth += (value.match(/\(/g) || []).length;
						depth += value.length;

						//{前面是一个变量;则{后面不换行;是函数变量;
						if(value == '{' && preToken && preToken.type == 'variable'){
							rowsToAdd -=1;
						}
						parentChar.push(value.trim());// { (// add by warlee;当前代码块类型入栈
					}
					if (token.type === "keyword" && value.match(/^(if|else|elseif|for|while)$/)) {
						indentNextLine = true;
						roundDepth = 0;
					} else if (!roundDepth && value.trim() && token.type !== "comment"){
						indentNextLine = false;
					}

					if (token.type === "paren.rparen") {
						roundDepth -= (value.match(/\)/g) || []).length;
						for (i = 0; i < value.length; i++) {
							depth--;
							//changed by warlee; switch default没有break时indent-1;
							if(value.substr(i, 1)==='}' && (parents[depth]==='case' || parents[depth]==='default'  )  ) {
								depth--;
							}
						}

						//add by warlee;删除多余的配对代码块
						for (var index in parents) {
							if(index > depth ){
								delete parents[index];
							}
						}
						parentChar.push(value.trim());// { (// add by warlee;当前代码块类型入栈
						parentChar.pop();//出栈
						if( value.match(/\)/g) && preToken && preToken.type != 'comment'){
							// code = code.trimRight();
							// spaceAfter = false;
						}
					}
					if(token && token.type  == 'comment.doc' && value.substr(0,1) == '*'){
						value = ' '+value;
					}
					//console.log(7878,value,token,preToken,indent,unindent,levels,parents,roundDepth,depth);

					if (spaceBefore && !breakBefore) {
						trimLine();
						if (code.substr(-1) !== "\n"){
							code += " ";
						}
					}
					//add by warlee;删除{、}前后多余的空白字符
					if( token && token.type  == 'paren.lparen' && token.value == '{' &&
						preToken && preToken.type != 'comment'){
						// code = code.trimRight();
						// spaceAfter = false;
					}

					code += value;
					if (spaceAfter){
						code += " ";
					}

					breakBefore = false;
					spaceBefore = false;
					spaceAfter = false;
					if ((is(token, "tag-close") && (inBlock || blockTags.indexOf(tagName) !== -1)) || (is(token, "doctype") && value === ">")) {
						if (inBlock && nextToken && nextToken.value === "</"){
							rowsToAdd = -1;
						}else{
							rowsToAdd = 1;
						}
					}
					if (is(token, "tag-open") && value === "</") {
						depth--;
					} else if (is(token, "tag-open") && value === "<" && singletonTags.indexOf(nextToken.value) === -1) {
						depth++;
					} else if (is(token, "tag-name")) {
						tagName = value;
					} else if (is(token, "tag-close") && value === "/>" && singletonTags.indexOf(tagName) === -1){
						depth--;
					}
					row = curRow;
				}
			}
			preToken = token;
			token = nextToken;
			//console.log(preToken,token);
		}
		code = code.trim();
		//code = code.replace(/\n{2,}/g,"\n\n");//去除多余空行
		session.doc.setValue(code);
	};

	exports.commands = [{
		name: "beautify",
		exec: function(editor) {
			exports.beautify(editor.session);
		},
		bindKey: "Ctrl-Shift-B"
	}];
});

(function() {
	ace.require(["ace/ext/beautify"], function(m) {
		if (typeof module == "object" && typeof exports == "object" && module) {
			module.exports = m;
		}
	});
})();