# cmd-util [![Build Status](https://travis-ci.org/spmjs/cmd-util.png)](https://travis-ci.org/spmjs/cmd-util)

Utilities for common module definition.

---------------------------

This package is designed for developers, if you are a user, don't read this.

**100% test coverage**

## Implements

- **ast**: parse cmd javascript code, do whatever you want.
- **css**: css parser
- **iduri**: solutions for id and uri.


## Install

```
$ npm install cmd-util
```

Get the unstable version with:

```
$ npm install cmd-util@ninja
```

## Contribute

Yes, please do contribute. But before this, you should read our [Contributing Guide](https://github.com/spmjs/cmd-util/blob/master/CONTRIBUTING.md).

## Changelog

**April 8th, 2013** `0.3.5`

1. Fix parse dependency of `require('foo')('bar')`

**Mar 29, 2013** `0.3.4`

1. Only parse `require`, don't parse `require.async`

**Mar 19, 2013** `0.3.3`

1. Enhancement of ast. Delete a dependency by `return null`

**Mar 16, 2013** `0.3.2`

1. add `iduri.validateFormat`

**Mar 14, 2013** `0.3.1`

1. make `css.walk` the right way
2. add `css.strigify`

**Mar 14, 2013** `0.3.0`

1. add css parser

**Mar 2, 2013** `0.2.0`

1. ast.modify return ast instead of string
2. iduri.resolve only resolve cmd uri
3. rewrite ast parser

**Feb 1, 2013** `0.1.0`

This first version.
