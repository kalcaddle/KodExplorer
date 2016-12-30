ace.define("ace/ext/beautify/php_rules",["require","exports","module","ace/token_iterator"], function(require, exports, module) {
	"use strict";
	var TokenIterator = require("ace/token_iterator").TokenIterator;
	exports.newLines = [{
	    type: 'support.php_tag',
	    value: '<?php'
	}, {
	    type: 'support.php_tag',
	    value: '<?'
	}, {
	    type: 'support.php_tag',
	    value: '?>'
	}, {
	    type: 'paren.lparen',
	    value: '{',
	    indent: true
	}, {
	    type: 'paren.rparen',
	    breakBefore: true,
	    value: '}',
	    indent: false
	}, {
	    type: 'paren.rparen',
	    breakBefore: true,
	    value: '})',
	    indent: false,
	    dontBreak: true
	}, {
	    type: 'comment'
	}, {
	    type: 'text',
	    value: ';'
	}, {
	    type: 'text',
	    value: ':',
	    context: 'php'
	},{
	    type: 'keyword',
	    value: 'default',
	    //indent: true,
	    dontBreak: true
	}, {
	    type: 'keyword',
	    value: 'break',//for,while,foreach中的break indent为true
	    //indent: true,
	    dontBreak: true
	}, {
	    type: 'punctuation.doctype.end',
	    value: '>'
	}, {
	    type: 'meta.tag.punctuation.end',
	    value: '>'
	}, {
	    type: 'meta.tag.punctuation.begin',
	    value: '<',
	    blockTag: true,
	    indent: true,
	    dontBreak: true
	}, {
	    type: 'meta.tag.punctuation.begin',
	    value: '</',
	    indent: false,
	    breakBefore: true,
	    dontBreak: true
	}, {
	    type: 'punctuation.operator',
	    value: ';'
	}];
	
	exports.spaces = [{//需要在前面或后面追加空格；关键字
	    type: 'xml-pe',
	    prepend: true
	},{
	    type: 'entity.other.attribute-name',
	    prepend: true
	}, 

	//add by warlee
	{type: 'keyword',append: true},
	{type: 'identifier',append: true},

	{
	    type: 'storage.type',
	    value: 'var',
	    append: true
	}, {
	    type: 'storage.type',
	    value: 'function',
	    append: true
	}, {
	    type: 'keyword.operator',
	    value: '='
	}, {
	    type: 'keyword',
	    value: 'as',
	    prepend: true,
	    append: true
	}, {
	    type: 'keyword',
	    value: 'function',
	    append: true
	}, {
	    type: 'support.function',
	    next: /[^\(]/,
	    append: true
	}, {
	    type: 'keyword',
	    value: 'or',
	    append: true,
	    prepend: true
	}, {
	    type: 'keyword',
	    value: 'and',
	    append: true,
	    prepend: true
	}, {
	    type: 'keyword',
	    value: 'case',
	    append: true
	}, {
	    type: 'keyword.operator',
	    value: '||',
	    append: true,
	    prepend: true
	}, {
	    type: 'keyword.operator',
	    value: '&&',
	    append: true,
	    prepend: true
	}];
	exports.singleTags = ['!doctype','area','base','br','hr','input','img','link','meta'];
	
	exports.transform = function(iterator, maxPos, context) {
	    var token = iterator.getCurrentToken();
	    
	    var newLines = exports.newLines;
	    var spaces = exports.spaces;
	    var singleTags = exports.singleTags;
	
	    var code = '';
	    
	    var indentation = 0;
	    var dontBreak = false;
	    var tag;
	    var lastTag;
	    var lastToken = {};
	    var nextTag;
	    var nextToken = {};
	    var breakAdded = false;
	    var value = '';
	    var nextLineIndent = 0;
	    var switchBreakMatch = 0;
	
	    while (token!==null) {
	        if( !token ){
	            token = iterator.stepForward();
	            continue;
	        }
	        if( token.type == 'support.php_tag' && token.value != '?>' ){
	            context = 'php';
	        }else if( token.type == 'support.php_tag' && token.value == '?>' ){
	            context = 'html';
	        }else if( token.type == 'meta.tag.name.style' && context != 'css' ){
	            context = 'css';
	        }else if( token.type == 'meta.tag.name.style' && context == 'css' ){
	            context = 'html';
	        }else if( token.type == 'meta.tag.name.script' && context != 'js' ){
	            context = 'js';
	        }else if( token.type == 'meta.tag.name.script' && context == 'js' ){
	            context = 'html';
	        }

	        nextToken = iterator.stepForward();
	        if (nextToken && nextToken.type.indexOf('meta.tag.name') == 0) {
	            nextTag = nextToken.value;
	        }
	        if ( lastToken.type == 'support.php_tag' && lastToken.value == '<?=') {
	            dontBreak = true;
	        }
	        if (token.type == 'meta.tag.name') {
	            token.value = token.value.toLowerCase();
	        }
	        if (token.type == 'text') {
	            token.value = token.value.trim();
	        }

	        //未知代码 add by warlee
	        if(context == undefined){
	        	code += token.value+"\n";
	        	token = nextToken;
	            continue;
	        }
	        //块注释保持初始
	        if(token.type == "comment.doc"){
	        	token.value += "\n";

	        	//块注释最后追加indent
	        	if(nextToken && nextToken.type!='comment.doc'){
	        		for (var j = 0; j < indentation; j++) {
                        token.value += "\t";
                    }
	        	}
	        }


	        if (!token.value) {
	            token = nextToken;
	            continue;
	        }
	        value = token.value;
	        for (var i in spaces) {
	            if (
	                token.type == spaces[i].type &&
	                (!spaces[i].value || token.value == spaces[i].value) &&
	                (
	                    nextToken &&
	                    (!spaces[i].next || spaces[i].next.test(nextToken.value))
	                )
	            ) {
	                if (spaces[i].prepend) {
	                    value = ' ' + token.value;
	                }
	
	                if (spaces[i].append) {
	                    value += ' ';
	                }
	            }
	        }
	        if (token.type.indexOf('meta.tag.name') == 0) {
	            tag = token.value;
	        }
	        //console.log(123,nextLineIndent,indentation,token,nextToken);

	        //处理indent对齐
	        breakAdded = false;
	        for (i in newLines) {
	            if (
	                token.type == newLines[i].type &&
	                (
	                    !newLines[i].value ||
	                    token.value == newLines[i].value
	                ) &&
	                (
	                    !newLines[i].blockTag ||
	                    singleTags.indexOf(nextTag) === -1
	                ) &&
	                (
	                    !newLines[i].context ||
	                    newLines[i].context === context
	                )
	            ) {
					if (newLines[i].indent === false) {
	                    indentation--;
	                }
	                if (
	                    newLines[i].breakBefore &&
	                    ( !newLines[i].prev || newLines[i].prev.test(lastToken.value) )
	                ) {
	                    code += "\n";
	                    breakAdded = true;
	                    for (var j = 0; j < indentation+nextLineIndent; j++) {
	                        code += "\t";
	                    }
	                }
	                break;
	            }
	        }


	        //处理换行
	        if (dontBreak===false) {
	            for (i in newLines) {
	                if (
	                    lastToken.type == newLines[i].type &&
	                    (
	                        !newLines[i].value || lastToken.value == newLines[i].value
	                    ) &&
	                    (
	                        !newLines[i].blockTag ||
	                        singleTags.indexOf(tag) === -1
	                    ) &&
	                    (
	                        !newLines[i].context ||
	                        newLines[i].context === context
	                    )
	                ) {
	                    if (newLines[i].indent === true && token.value !="break") {
	                        indentation++;
	                    }
	                    if (!newLines[i].dontBreak  && !breakAdded) {
	                    	var br = "\n",table="\t";
	                    	if(token.value == "}" || token.value == "else"){
	                    		br = "";table="";
	                    	}
	                    	if(nextToken && nextToken.value == "else"){
	                    		br = "";table="";
	                    	}
	                        code += br;
	                        for (i = 0; i < indentation+nextLineIndent; i++) {
	                            code += table;
	                        }
	                    }
	                    break;
	                }
	            }
	        }

	        if(token.type == 'keyword'){
	        	switch(token.value){
	        		case 'switch':
	        		case 'function':nextLineIndent = 0;break;
	        		case 'case':
	        		case 'default':
	        			if(switchBreakMatch === 0){
	        				nextLineIndent+=1;
	        				switchBreakMatch = 1;
	        			}
	        			break;
	        		case 'break':
	        			switchBreakMatch = 0;
	        			nextLineIndent -= 1;
	        			nextLineIndent = nextLineIndent<0?0:nextLineIndent;
	        			break;
	        		default:break;
	        	}
	        }

	        code += value;
	        if ( lastToken.type == 'support.php_tag' && lastToken.value == '?>' ) {
	            dontBreak = false;
	        }
	        lastTag = tag;
	
	        lastToken = token;
	
	        token = nextToken;
	
	        if (token===null) {
	            break;
	        }
	    }
	    
	    return code;
	};
	
	});
	
	ace.define("ace/ext/beautify",["require","exports","module","ace/token_iterator","ace/ext/beautify/php_rules"], 
		function(require, exports, module) {
	"use strict";
	var TokenIterator = require("ace/token_iterator").TokenIterator;
	var phpTransform = require("./beautify/php_rules").transform;
	exports.beautify = function(session) {
	    var iterator = new TokenIterator(session, 0, 0);
	    var token = iterator.getCurrentToken();
	
	    var context = session.$modeId.split("/").pop();
	
	    var code = phpTransform(iterator, context);
	    session.doc.setValue(code);
	};
	exports.commands = [{
	    name: "beautify",
	    exec: function(editor) {
	        exports.beautify(editor.session);
	    },
	    bindKey: "Ctrl-Shift-B"
	}]
});
(function() {
    ace.require(["ace/ext/beautify"], function() {});
})();