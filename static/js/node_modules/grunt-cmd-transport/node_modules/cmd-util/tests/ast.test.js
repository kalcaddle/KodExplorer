var should = require('should');
var ast = require('./_require')('../lib/ast');

describe('ast.parse', function() {
  it('has id, but no dependencies', function() {
    var code = [
      "define('id', function(require, exports, module) {",
      "  var jquery = require('jquery-ui');",
      "  var moment = require('moment');",
      "})"
    ].join('\n');
    var parsed = ast.parseFirst(code);
    parsed.id.should.equal('id');
    parsed.dependencies.should.have.length(0);
  });

  it('find ./a as dependency', function() {
    var code = [
      "define('id', ['./a'], function(require, exports, module) {",
      "  var jquery = require('jquery');",
      "})"
    ].join('\n');
    var parsed = ast.parse(code)[0];
    parsed.id.should.equal('id');
    parsed.dependencies.should.includeEql('./a');
  });

  it('find b as dependency', function() {
    var code = [
      "define(['b'], function(require, exports, module) {",
      "  var jquery = require('jquery');",
      "})"
    ].join('\n');
    var parsed = ast.parse(code)[0];
    parsed.dependencies.should.includeEql('b');
  });

  it('find a, b as dependencies', function() {
    var code = [
      "define('id', ['a', 'b'], function(require, exports, module) {",
      "  var jquery = require('jquery');",
      "})"
    ].join('\n');
    var parsed = ast.parse(code)[0];
    parsed.id.should.equal('id');
    parsed.dependencies.should.eql(['a', 'b']);
  });

  it('find both two define dependencies', function() {
    var code = [
      "define('id', ['a', 'b'], function(require, exports, module) {",
      "  var jquery = require('jquery');",
      "})",
      "define('id2', ['c', 'd'], function(require, exports, module) {",
      "})"
    ].join('\n');
    var parsed = ast.parse(code);
    parsed.should.have.length(2);
    var deps = [];
    parsed.forEach(function(ret) {
      ret.dependencies.forEach(function(dep) {
        deps.push(dep);
      });
    });
    deps.should.eql(['a', 'b', 'c', 'd']);
  });

  it('should not find the define in define', function() {
    var code = [
      "define('id', ['a', 'b'], function(require, exports, module) {",
      "  var jquery = require('jquery');",
      "  define('id2', ['c', 'd'], function(require, exports, module) {",
      "  })",
      "})"
    ].join('\n');
    var parsed = ast.parse(code)[0];
    parsed.id.should.equal('id');
    parsed.dependencies.should.eql(['a', 'b']);
  });

  it('should have factory {}', function() {
    var parsed = ast.parse('define({})')[0];
    should.exists(parsed.factory);
  });

  it('find jquery as dependency', function() {
    var code = [
      "define(function(require, exports, module) {",
      "  var jquery = require('jquery');",
      "})"
    ].join('\n');
    ast.parseFirst(code).dependencies.should.includeEql('jquery');
  });

  it('find nothing as dependency', function() {
    var code = [
      "define(function(require, exports, module) {",
      "  var jquery = module.require('jquery');",
      "})"
    ].join('\n');
    ast.parseFirst(code).dependencies.should.have.length(0);

    code = [
      "define(function(require, exports, module) {",
      "  require.async('jquery');",
      "})"
    ].join('\n');
    ast.parseFirst(code).dependencies.should.have.length(0);
  });

  it('can find excutable dependency', function() {
    var code = [
      "define(function(require, exports, module) {",
      "  require('foo')('bar');",
      "})"
    ].join('\n');
    var parsed = ast.parseFirst(code);
    parsed.dependencies.should.eql(['foo']);
  });

  it('can parse AMD', function() {
    var code = [
      "(function() {",
      "  var jQuery = {};",
      "  define('jquery', [], function() {",
      "    return jQuery;",
      "  });",
      "})();"
    ].join('\n');
    ast.parseFirst(code).id.should.equal('jquery');
  });
});

describe('ast.modify', function() {
  it('can replace require with object', function() {
    var code = [
      "define(function(require) {",
      "  var jquery = require('jquery');",
      "  var underscore = require('underscore');",
      "})"
    ].join('\n');
    code = ast.modify(code, {require: {jquery: '$'}});
    code = code.print_to_string();
    code.should.include('require("$")');
    code.should.include('require("underscore")');
  });

  it('can replace require with function', function() {
    var code = [
      "define(function(require) {",
      "  var jquery = require('jquery');",
      "  var undersocre = require('undersocre');",
      "})"
    ].join('\n');
    code = ast.modify(code, {require: function(v) {
      if (v === 'jquery') return '$';
      if (v === 'undersocre') return '_';
    }});
    code = code.print_to_string();
    code.should.include('require("$")');
    code.should.include('require("_")');
  });

  it('can replace id', function() {
    var code = "define({})";
    ast.modify(code, {
      id: 'id',
    }).
      print_to_string({beautify: true}).
      should.equal('define("id", [], {});');

    code = "define(['id'], {})";
    ast.modify(code, {id: function(v) {
      return 'id2';
    }}).
      print_to_string({beautify: true}).
      should.equal('define("id2", [ "id" ], {});');
  });

  it('can replace dependencies', function() {
    var code = "define({})";
    ast.modify(code, {dependencies: 'a'}).
      print_to_string({beautify: true}).
      should.equal('define([ "a" ], {});');
    ast.modify(code, {dependencies: ['a']}).
      print_to_string({beautify: true}).
      should.equal('define([ "a" ], {});');
  });

  it('can replace dependencies with object', function() {
    var code = 'define(["a", "b"], {})';
    ast.modify(code, {dependencies: {a: 'arale'}}).
      print_to_string({beautify: true}).
      should.equal('define([ "arale", "b" ], {});');
  });

  it('replace id and dependencies via function', function() {
    var code = "define({})";
    code = ast.modify(code, {id: 'id', dependencies: ['a']});
    code = code.print_to_string({beautify: true});
    code.should.equal('define("id", [ "a" ], {});');
  });

  it('should be debug id', function() {
    var code = "define('id', [], {})";
    ast.modify(code, function(v) {
      return v + '-debug';
    }).
      print_to_string().
      should.include('id-debug');
  });

  it('should be debug require', function() {
    var code = "define(function(require){ require('jquery') })";

    ast.modify(code, function(v) {
      return v + '-debug';
    }).
      print_to_string().
      should.include('jquery-debug');
  });

  it('should be debug dependencies', function() {
    var code = "define('id', ['jquery'], {})";

    ast.modify(code, function(v) {
      return v + '-debug';
    }).
      print_to_string().
      should.include('jquery-debug');
  });

  it('can delete dependencies', function() {
    var code = "define('id', ['jquery', 'b'], {})";
    code = ast.modify(code, function(v) {
      if (v === 'jquery') return null;
      return v;
    }).print_to_string();
    code.should.not.include('jquery');
  });

  it('should have id-debug, jquery-debug', function() {
    var code = "define('id', [], function(require){ require('jquery') })";

    var data = ast.modify(code, function(v) {
      return v + '-debug';
    });
    data = data.print_to_string();
    data.should.include('id-debug');
    data.should.include('jquery-debug');
  });

  it('can modify AMD', function() {
    var code = [
      "(function() {",
      "  var jQuery = {};",
      "  define('jquery', [], function() {",
      "    return jQuery;",
      "  });",
      "})();"
    ].join('\n');
    code = ast.modify(code, function(v) { return 'jquery-debug'; });
    code = code.print_to_string();
    code.should.include('(function()');
    code.should.include('jquery-debug');
  });
});
