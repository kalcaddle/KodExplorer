var path = require('path');
var cmd = require('cmd-util');
var format = require('util').format;
var css = cmd.css;
var iduri = cmd.iduri;

exports.init = function(grunt) {

  var exports = {};

  exports.cssConcat = function(fileObj, options) {
    var data = grunt.file.read(fileObj.src);
    var meta = css.parse(data)[0];
    var id = meta.id;
    if (!id) {
      grunt.log.warn('require a transported file.');
      return '';
    }

    var records = grunt.option('concat-records');

    var imports = [];

    if (grunt.util._.contains(records, id)) {
      return '';
    }

    if (options.include === 'self') {
      return data;
    }

    while (hasImport()) {
    }

    function hasImport() {
      meta = css.parse(data)[0];

      var isImportted = false;
      data = css.stringify(meta.code, function(node) {
        if (node.type === 'import' && node.id) {
          isImportted = true;
          return importNode(node);
        }
      });
      return isImportted;
    }

    function importNode(node) {
      // circle imports
      if (grunt.util._.contains(imports, node.id)) {
        return false;
      }
      imports.push(node.id);

      var fpath, parsed;
      if (node.id.charAt(0) === '.') {
        fpath = path.join(path.dirname(fileObj.src), node.id);
        if (!/\.css$/.test(fpath)) fpath += '.css';
        if (!grunt.file.exists(fpath)) {
          grunt.log.warn('file ' + fpath + ' not found');
          return false;
        }

        parsed = css.parse(grunt.file.read(fpath))[0];

        // remove circle imports
        if (parsed.id === id) {
          grunt.log.warn('file ' + fpath + ' has circle dependencies');
          return false;
        }
        if (!parsed.id) {
          grunt.log.warn('file ' + fpath + ' has no defined id');
        }

        parsed.id = node.id;
        return parsed;
      }
      var fileInPaths;
      options.paths.some(function(basedir) {
        fpath = path.join(basedir, node.id);
        if (!/\.css$/.test(fpath)) fpath += '.css';
        var debugfile = fpath.replace(/\.css$/, '-debug.css');
        // prefer debug file, because it contains all meta info
        if (grunt.file.exists(debugfile)) {
          fileInPaths = debugfile;
          return true;
        } else if (grunt.file.exists(fpath)) {
          fileInPaths = fpath;
          return true;
        }
      });
      if (!fileInPaths) {
        grunt.log.warn('file ' + node.id + ' not found');
        return false;
      }
      parsed = css.parse(grunt.file.read(fileInPaths))[0];

      if (!parsed.id) {
        grunt.log.warn('file ' + fileInPaths + ' has no defined id');
      }

      parsed.id = node.id;
      return parsed;
    }

    function toString() {
      meta = css.parse(data)[0];
      return css.stringify(meta.code, function(node) {
        if (node.id && grunt.util._.contains(records, node.id)) {
          return false;
        }
        if (node.id) {
          if (node.id.charAt(0) === '.') {
            node.id = iduri.absolute(id, node.id);
          }
          if (grunt.util._.contains(records, node.id)) {
            return false;
          }
          records.push(node.id);
          return node;
        }
      });
    }

    return [
      format('/*! define %s */', id),
      toString()
    ].join('\n');
  };

  return exports;
};
