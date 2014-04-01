/*
 * css
 * https://github.com/spmjs/spm2/issues/4
 *
 * Hsiaoming Yang <lepture@me.com>
 */

/* 
 * parse code into a tree
 */
exports.parse = function(code) {
  var lines = code.split(/\r\n|\r|\n/);
  var isStarted = false;
  var id, line;

  // clean blank lines
  while (!isStarted && lines.length) {
    line = lines[0];
    if (line.trim()) {
      isStarted = true;
      id = match(line, 'define');
      if (id) {
        lines = lines.slice(1);
      }
    } else {
      lines = lines.slice(1);
    }
  }
  var node = {};
  if (id) {
    node.id = id;
  }
  node.type = 'block';
  node.code = parseBlock(lines.join('\n'));
  return [node];
};

function match(text, key) {
  // /*! key value */
  var re = new RegExp('^\\/\\*!\\s*' + key + '\\s+(.*?)\\s*\\*\\/$');
  var m = text.match(re);
  if (!m) return;
  return m[1];
}

/*
 * recursive parse a block type code
 */
function parseBlock(code) {
  var lines = code.split(/\r\n|\r|\n/);
  var tree = [];

  var stringNode = {
    type: 'string',
    code: ''
  };
  var blockNode = {};
  var blockDepth = 0;


  while (lines.length) {
    parseInBlock();
  }

  function pushStringNode() {
    if (!stringNode.code) return;
    var text = stringNode.code.replace(/^\n+/, '');
    text = text.replace(/\n+$/, '');
    if (text) {
      stringNode.code = text;
      tree.push(stringNode);
    }
    stringNode = {
      type: 'string',
      code: ''
    };
  }

  function parseLine() {
    if (blockDepth !== 0) return;

    var text = lines.shift();
    var re = /^@import\s+(?:url\()?(\'|\")([^\)]+)\1\)?;?\s*$/;

    var m = match(text, 'import');
    if (!m) {
      m = text.match(re);
      m = m ? m[2]: null;
    }
    if (m) {
      pushStringNode();
      tree.push({
        id: m,
        type: 'import'
      });
      return;
    } else {
      stringNode.code = [stringNode.code, text].join('\n');
    }
  }

  function parseInBlock() {
    var text = lines[0];
    var start = match(text, 'block');
    if (start) {
      lines = lines.slice(1);
      if (blockDepth === 0) {
        pushStringNode();
        blockNode.id = start;
        blockNode.type = 'block';
        blockNode.code = '';
      } else {
        blockNode.code = [blockNode.code, text].join('\n');
      }
      blockDepth++;
      return;
    }
    /*! endblock id */
    var re = /\/\*!\s*endblock(\s+[^\*]*)?\s*\*\/$/;
    var end = text.match(re);
    if (end) {
      blockDepth--;
      if (blockDepth < 0) {
        throw new Error('block indent error.');
      }

      lines = lines.slice(1);
      if (blockDepth === 0) {
        blockNode.code = parseBlock(blockNode.code);
        tree.push(blockNode);
        // reset block node
        blockNode = {};
      } else {
        blockNode.code = [blockNode.code, text].join('\n');
      }
      return;
    }
    if (blockDepth > 0) {
      lines = lines.slice(1);
      blockNode.code = [blockNode.code, text].join('\n');
    } else {
      parseLine();
    }
  }

  if (blockDepth !== 0) {
    throw new Error('block not finished.');
  }

  pushStringNode();
  return tree;
}

/*
 * Walk through the code tree
 */
exports.walk = function(code, fn) {
  if (!Array.isArray(code)) {
    code = exports.parse(code);
  }

  function walk(code) {
    // if fn return false, it will stop the walk
    if (Array.isArray(code)) {
      code.forEach(function(node) {
        if (fn(node) !== false && node.type === 'block' && Array.isArray(node.code)) {
          walk(node.code, node);
        }
      });
    }
  }
  walk(code);
};

/*
 * print string of the parsed code
 */
exports.stringify = function(code, filter) {
  if (!Array.isArray(code)) {
    return code;
  }

  function print(code) {
    var cursor = '';

    code.forEach(function(node) {
      if (filter) {
        var ret = filter(node);
        if (ret === false) return;
        if (ret && ret.type) node = ret;
      }
      if (node.type === 'string') {
        cursor = [cursor, node.code].join('\n');
        return;
      }
      if (node.type === 'import') {
        cursor = [cursor, '/*! import ' + node.id + ' */'].join('\n');
        return;
      }
      if (node.type === 'block' && node.id) {
        cursor = [
          cursor,
          '',
          '/*! block ' + node.id + ' */',
          print(node.code),
          '/*! endblock ' + node.id + ' */',
          '',
        ].join('\n');
        return;
      }
      if (node.type === 'block' && ! node.id) {
        cursor = print(node.code);
        return;
      }
    });
    cursor = cursor.replace(/^\n+/, '');
    cursor = cursor.replace(/\n+$/, '');
    cursor = cursor.replace(/\n{3,}/g, '\n\n');
    return cursor;
  }

  return print(code);
};
