var fs = require('fs');
var read = function(filepath) {
  return fs.readFileSync(filepath, 'utf8');
};

var path = require('path');
var should = require('should');
var css = require('./_require')('../lib/css');

describe('css.parse', function() {
  fs.readdirSync(__dirname + '/css-cases').forEach(function(file) {
    if (!/\.css/.test(file)) return;
    file = path.basename(file, '.css');
    it('should parse ' + file, function() {
      var code = read(path.join(__dirname, 'css-cases', file + '.css'));
      var ret = css.parse(code);
      var json = read(path.join(__dirname, 'css-cases', file + '.json'));
      JSON.stringify(ret, null, 2).should.equal(json.trim());
    });
  });

  it('should throw block not finished', function() {
    (function() {
      var code = [
        '/*! block a */'
      ].join('\n');
      css.parse(code);
    }).should.throwError('block not finished.');
  });

  it('should throw block indent error', function() {
    (function() {
      var code = [
        '/*! block a */',
        '/*! endblock */',
        '/*! endblock a*/'
      ].join('\n');
      css.parse(code);
    }).should.throwError('block indent error.');
  });
});

describe('css.walk', function() {
  it('can stop the walk', function() {
    var data = read(path.join(__dirname, 'css-cases', 'block.css'));
    var ret = css.parse(data);
    var count = 0;
    css.walk(ret, function(node, p) {
      if (node.id === 'b') {
        return false;
      }
      count++;
    });
    count.should.equal(4);
  });

  it('can walk through', function() {
    var data = read(path.join(__dirname, 'css-cases', 'block.css'));
    var count = 0;
    css.walk(data, function(node) {
      count++;
    });
    count.should.equal(9);
  });
});

describe('css.stringify', function() {
  fs.readdirSync(__dirname + '/css-cases').forEach(function(file) {
    if (!/\.txt/.test(file)) return;
    file = path.basename(file, '.txt');
    it('should stringify ' + file, function() {
      var code = read(path.join(__dirname, 'css-cases', file + '.css'));
      var ret = css.stringify(css.parse(code));
      var txt = read(path.join(__dirname, 'css-cases', file + '.txt'));
      ret.should.equal(txt.trim());
    });
  });

  it('can stringify with filter', function() {
    var code = read(path.join(__dirname, 'css-cases', 'block.css'));
    code = css.parse(code);
    var ret = css.stringify(code, function(node) {
      if (node.id === 'b') {
        return false;
      }
      if (node.id === 'a') {
        node.id = 'a/b/c';
        return node;
      }
    });
    var expected = [
      'body {color: red}',
      '',
      '/*! block a/b/c */',
      'a {color: black}',
      '/*! endblock a/b/c */'
    ].join('\n');
    ret.should.equal(expected);
  });

  it('stringify nothing', function() {
    css.stringify('a').should.equal('a');
  });
});
