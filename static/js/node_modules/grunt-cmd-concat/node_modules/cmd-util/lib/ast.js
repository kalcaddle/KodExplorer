/*
 * spm.sdk.ast
 * https://spmjs.org
 *
 * Hsiaoming Yang <lepture@me.com>
 */

var util = require('util');
var UglifyJS = require('uglify-js');


// UglifyJS ast.
function getAst(ast, options) {
  if (isString(ast)) {
    return UglifyJS.parse(ast, options || {});
  }
  return ast;
}
exports.getAst = getAst;


// A standard cmd module:
//
//   define('id', ['deps'], fn)
//
// Return everything in define:
//
//   {id: 'id', dependencies: ['deps'], factory: ast of fn}
function parse(ast) {
  ast = getAst(ast);
  var meta = [];

  var walker = new UglifyJS.TreeWalker(function(node, descend) {
    var id, factory, dependencies = [];
    // don't collect dependencies in the define in define
    if (node instanceof UglifyJS.AST_Call && node.start.value === 'define') {
      var define = getDefine(node);
      if (define) {
        meta.push(define);
      }
      return true;
    }
  });
  ast.walk(walker);
  return meta;
}
exports.parse = parse;

exports.parseFirst = function(ast) {
  return parse(ast)[0];
};


// Replace everything in `define` and `require`.
//
//    define('id', ['a'], function(require) {
//        var $ = require('jquery')
//    })
//
// Replace the code with:
//
//    replaceAll(code, function(value) {
//        return value + '-debug';
//    })
//
// The result will be:
//
//    define('id-debug', ['a-debug'], function(require) {
//        var $ = require('jquery-debug')
//    })
function modify(ast, options) {
  ast = getAst(ast);

  var idfn, depfn, requirefn;
  if (isFunction(options)) {
    idfn = depfn = requirefn = options;
  } else {
    idfn = options.id;
    depfn = options.dependencies;
    requirefn = options.require;
  }

  if (isObject(depfn)) {
    var alias = depfn;
    depfn = function(value) {
      if (alias.hasOwnProperty(value)) {
        return alias[value];
      } else {
        return value;
      }
    };
  }

  var trans = new UglifyJS.TreeTransformer(function(node, descend) {
    // modify define
    if ((idfn || depfn) && node instanceof UglifyJS.AST_Call && node.start.value === 'define' && node.args.length) {
      var args = [];
      var meta = getDefine(node);
      var deps = [];
      if (idfn && isFunction(idfn)) {
        meta.id = idfn(meta.id);
      } else if (idfn && isString(idfn)) {
        meta.id = idfn;
      }
      if (meta.id) {
        args.push(new UglifyJS.AST_String({
          value: meta.id
        }));
      }
      // modify dependencies
      if (meta.dependencyNode && !depfn) {
        args.push(meta.dependencyNode);
      } else if (depfn) {
        var elements = [];
        if (meta.dependencies.length && isFunction(depfn)) {
          meta.dependencies.forEach(function(d) {
            var value = depfn(d);
            if (value) {
              elements.push(
                new UglifyJS.AST_String({value: value})
              );
            }
          });
        } else if (isString(depfn)) {
          elements = [new UglifyJS.AST_String({value: depfn})];
        } else if (Array.isArray(depfn)) {
          elements = depfn.map(function(value) {
            return new UglifyJS.AST_String({
              value: value
            });
          });
        }
        if (meta.dependencyNode) {
          args.push(new UglifyJS.AST_Array({
            start: meta.dependencyNode.start,
            end: meta.dependencyNode.end,
            elements: elements
          }));
        } else {
          args.push(new UglifyJS.AST_Array({elements: elements}));
        }
      } else {
        args.push(new UglifyJS.AST_Array({elements: []}));
      }
      if (meta.factory) {
        args.push(meta.factory);
      }
      return new UglifyJS.AST_Call({
        start: node.start,
        end: node.end,
        expression: node.expression,
        args: args
      });
    }
  });
  ast = ast.transform(trans);

  if (requirefn) {
    ast = replaceRequire(ast, requirefn);
  }
  return ast;
}
exports.modify = modify;


function getDefine(node) {
  var id, factory, dependencyNode, dependencies = [];
  // don't collect dependencies in the define in define
  if (node instanceof UglifyJS.AST_Call && node.start.value === 'define') {
    if (!node.args || !node.args.length) return null;

    if (node.args.length === 1) {
      factory = node.args[0];
      if (factory instanceof UglifyJS.AST_Function) {
        dependencies = getRequires(factory);
      }
    } else if (node.args.length === 2) {
      factory = node.args[1];
      var child = node.args[0];
      if (child instanceof UglifyJS.AST_Array) {
        // define([], function(){});
        dependencies = map(child.elements, function(el) {
          if (el instanceof UglifyJS.AST_String) {
            return el.getValue();
          }
        });
        dependencyNode = child;
      }
      if (child instanceof UglifyJS.AST_String) {
        // define('id', function() {});
        id = child.getValue();
      }
    } else {
      factory = node.args[2];
      var firstChild = node.args[0], secondChild = node.args[1];
      if (firstChild instanceof UglifyJS.AST_String) {
        id = firstChild.getValue();
      }
      if (secondChild instanceof UglifyJS.AST_Array) {
        dependencies = map(secondChild.elements, function(el) {
          if (el instanceof UglifyJS.AST_String) {
            return el.getValue();
          }
        });
      }
      dependencyNode = secondChild;
    }
  }
  return {
    id: id, dependencies: dependencies, factory: factory,
    dependencyNode: dependencyNode
  };
}

// A standard cmd module:
//
//   define(function(require) {
//       var $ = require('jquery')
//       var _ = require('lodash')
//   })
//
// Return everything in `require`: ['jquery', 'lodash'].
function getRequires(ast) {
  ast = getAst(ast);

  var deps = [];

  var walker = new UglifyJS.TreeWalker(function(node, descend) {
    if (node instanceof UglifyJS.AST_Call && node.start.value === 'require' && !node.expression.property) {
      var args = node.expression.args || node.args;
      if (args && args.length === 1) {
        var child = args[0];
        if (child instanceof UglifyJS.AST_String) {
          deps.push(child.getValue());
        }
        // TODO warning
      }
      return true;
    }
  });

  ast.walk(walker);
  return deps;
}

// Replace every string in `require`.
//
//    define(function(require) {
//        var $ = require('jquery')
//    })
//
// Replace requires in this code:
//
//    replaceRequire(code, function(value) {
//        if (value === 'jquery') return 'zepto';
//        return value;
//    })
function replaceRequire(ast, fn) {
  ast = getAst(ast);

  if (isObject(fn)) {
    var alias = fn;
    fn = function(value) {
      if (alias.hasOwnProperty(value)) {
        return alias[value];
      } else {
        return value;
      }
    };
  }

  var trans = new UglifyJS.TreeTransformer(function(node, descend) {
    // modify require
    if (fn && node instanceof UglifyJS.AST_Call && node.start.value === 'require' && node.args.length === 1) {
      var child = node.args[0];
      if (child instanceof UglifyJS.AST_String) {
        var requiredNode = new UglifyJS.AST_String({
          start: child.start,
          end: child.end,
          value: fn(child.getValue())
        });
        return new UglifyJS.AST_Call({
          start: node.start,
          end: node.start,
          expression: node.expression,
          args: [requiredNode]
        });
      }
    }
  });
  return ast.transform(trans);
}

function isString(str) {
  return typeof str === 'string';
}
function isFunction(fn) {
  return typeof fn === 'function';
}
function isObject(obj) {
  return (typeof obj === 'object' && !Array.isArray(obj));
}
function map(obj, fn, context) {
  var results = [];
  if (obj === null) return results;
  if (obj.map === Array.prototype.map) return obj.map(fn, context);

  for (var i = 0; i < obj.length; i++) {
    results[i] = fn.call(context, obj[i], i, obj);
  }
  return results;
}
