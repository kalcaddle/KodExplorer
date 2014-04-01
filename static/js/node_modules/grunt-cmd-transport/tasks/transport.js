/*
 * grunt-cmd-transport
 * https://github.com/spmjs/grunt-cmd-transport
 *
 * Copyright (c) 2013 Hsiaoming Yang
 * Licensed under the MIT license.
 */

module.exports = function(grunt) {
  var path = require('path');
  var cmd = require('cmd-util');
  var ast = cmd.ast;
  var iduri = cmd.iduri;


  var text = require('./lib/text').init(grunt);
  var script = require('./lib/script').init(grunt);
  var style = require('./lib/style').init(grunt);
  var template = require('./lib/template').init(grunt);

  var data, astCache;

  grunt.registerMultiTask('transport', 'Transport everything into cmd.', function() {

    var options = this.options({
      paths: ['sea-modules'],

      idleading: '',
      alias: {},

      // create a debug file or not
      debug: true,

      // process a template or not
      process: false,

      // define parsers
      parsers: {
        '.js': [script.jsParser],
        '.css': [style.cssParser],
        '.html': [text.html2jsParser],
        '.handlebars': [template.handlebarsParser]
      },

      // for handlebars
      handlebars: {
        knownHelpers: [],
        knownHelpersOnly: false
      },

      // output beautifier
      uglify: {
        beautify: true,
        comments: true
      }
    });

    if (options.process === true) {
      options.process = {};
    }

    var fname, destfile;
    this.files.forEach(function(fileObj) {
      fileObj.src.forEach(function(fpath) {

        // get the right filename and filepath
        if (fileObj.cwd) {
          // not expanded
          fname = fpath;
          fpath = path.join(fileObj.cwd, fpath);
        } else {
          fname = path.relative(fileObj.orig.cwd || '', fpath);
        }
        if (grunt.file.isDir(fpath)) {
          grunt.file.mkdir(fpath);
          return;
        }
        destfile = path.join(fileObj.dest, fname);

        // fpath, fname, dest
        var extname = path.extname(fpath);

        var fileparsers = options.parsers[extname];
        if (!fileparsers || fileparsers.length === 0) {
          grunt.file.copy(fpath, destfile);
          return;
        }
        if (!Array.isArray(fileparsers)) {
          fileparsers = [fileparsers];
        }
        var srcData = grunt.file.read(fpath);
        if (options.process) {
          srcData = grunt.template.process(srcData, options.process);
        }
        fileparsers.forEach(function(fn) {
          fn({
            src: fpath,
            srcData: srcData,
            name: fname,
            dest: destfile
          }, options);
        });
      });
    });
  });
};
