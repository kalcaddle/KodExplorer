# ast

- pubdate: 2013-01-29

The AST of javascript.

-----

```js
var ast = require('cmd-util').ast
```

## ast.parseFirst(code)

Get information of the first `define`:

```js
define('id', ['a'], function(require) {
   var $ = require('jquery')
});
```

When `ast.parse(code)` this code block, it will return:

```js
{id: 'id', dependencies: ['a'], factory: factoryNode}
```

If the `define` only has a factory:

```js
define(function(require) {
   var $ = require('jquery')
});
```

The result should be:

```js
{id: null, dependencies: ['jquery'], factory: factoryNode}
```


## ast.parse(code)

Information or meta data in every `define`:

```js
define('id', ['a'], {})
define(function(require) {
   var $ = require('jquery')
});
```

The result of `ast.parse(code)`:

```js
[
    {id: 'id', dependencies: ['a'], factory: factoryNode},
    {id: null, dependencies: ['jquery'], factory: factoryNode}
]
```

## ast.modify(code, {id: fn, dependencies: fn, require: fn})

Modify meta data in the `define`, it returns ast, get the string with:

```js
var m = ast.modify(code, ...)
console.log(m.print_to_string())
```

Some examples of `ast.modify`:

```js
// define({})
ast.modify(code, {id: 'id', dependencies: ['a']})

// => define('id', ['a'], {})
```

```js
// define('id', ['a'], {})
ast.modify(code, {id: function(v) { return v + '-debug'}})

// => define('id-debug', ['a'], {})
```

```js
// define('id', [], function(require) { var $ = require('jquery') })
ast.modify(code, {require: function(v) {
   if (v === 'jquery') return '$';
});

// => define('id', [], function(require) { var $ = require('$') })
```

```js
// define('id', [], function(require) { var $ = require('jquery') })
ast.modify(code, {require: {'jquery': '$'}});

// => define('id', [], function(require) { var $ = require('$') })
```

You can delete a dependencies by `return null`.

```js
// define('id', ['jquery', 'a', 'b'], {})
ast.modify(code, {dependencies: function(v) {
    if (v === 'jquery') return null;
    return v;
});
// => define('id', ['a', 'b'], {})
```

## ast.modify(code, fn)

Modify every meta data with the function:

```js
define('id', ['a'], function(require) {
    var $ = require('jquery')
});
```

Modify the code with:

```js
ast.modify(code, function(v) {
    return v + '-debug'
})
```

The result should be:

```js
define('id-debug', ['a-debug'], function(require) {
    var $ = require('jquery-debug');
});
```
