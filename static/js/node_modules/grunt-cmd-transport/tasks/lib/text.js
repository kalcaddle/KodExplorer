var path = require('path');
var format = require('util').format;

exports.init = function(grunt) {
  var ast = require('cmd-util').ast;
  var iduri = require('cmd-util').iduri;

  var exports = {};

  exports.html2jsParser = function(fileObj, options) {
    // don't transport debug html files
    if (/\-debug\.html/.test(fileObj.src)) return;
    grunt.log.writeln('Transport ' + fileObj.src + ' -> ' + fileObj.dest);
    // transport html to js
    var data = fileObj.srcData || grunt.file.read(fileObj.src);
    var id = options.idleading + fileObj.name.replace(/\.js$/, '');

    data = html2js(data, id);
    data = ast.getAst(data).print_to_string(options.uglify);
    var dest = fileObj.dest + '.js';
    grunt.file.write(dest, data);

    if (!options.debug) {
      return;
    }
    dest = dest.replace(/\.html\.js$/, '-debug.html.js');
    grunt.log.writeln('Creating debug file: ' + dest);

    data = ast.modify(data, function(v) {
      var ext = path.extname(v);
      if (ext && options.parsers[ext]) {
        return v.replace(new RegExp('\\' + ext + '$'), '-debug' + ext);
      } else {
        return v + '-debug';
      }
    });
    data = data.print_to_string(options.uglify);
    grunt.file.write(dest, data);
  };

  return exports;
};


// helpers
function html2js(code, id) {
  var tpl = 'define("%s", [], "%s");';

  code = code.split(/\r\n|\r|\n/).map(function(line) {
    return line.replace(/\\/g, '\\\\');
  }).join('\n');

  code = format(tpl, id, code.replace(/\"/g, '\\\"'));
  return code;
}

exports.html2js = html2js;
