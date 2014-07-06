# iduri

- pubdate: 2013-03-16

-----

```js
var iduri = require('cmd-util').iduri
```

## iduri.resovle(uri)

Resolve uri to an object. Demo talks:

```js
// iduri.resovle('arale/base')
// iduri.resovle('arale.base')
{
    family: 'arale',
    name: 'base',
    version: '',
}
```

Supported formats:

- family/name@version
- family/name#version
- family.name@version
- family/name#version

```js
// iduri.resovle('seajs')
{
    family: 'seajs',
    name: 'seajs',
    version: '',
}
```

If family is the same as name, the supported formats:

- name@version
- name#version


## iduri.normalize(uri)

Normalize uri and make sure the uri to be pretty.

```js
iduri.normalize('a//b/../c')

// => a/c
```

## iduri.relative(base, uri)


## iduri.absolute(base, uri)

Generate the absolute id:

```js
iduri.absolute('arale/widget/1.0.0/daparser', './base')

// => arale/base/1.0.0/base
```

## iduri.join(base, uri)

The same as `path.join`.

## iduri.dirname(uri)

The same as `path.dirname`.

## iduri.basename(uri)

The same as `path.basename`.

## iduri.extname(uri)

The same as `path.extname`.

However, if no extname is found, it will return `.js`.

## iduri.appendext(uri)

If uri has no extname, append `.js` to it.

## iduri.parseAlias(pkg, name)

Find `name` in `pkg.spm.alias`.

## iduri.isAlias(pkg, name)

If the name is an alias.

## iduri.idFromPackage(pkg, filename, format)

Generate id from package with the format. Default format is:

```
'{{ family }}/{{ name }}/{{ version }}/{{ filename }}'
```

## iduri.validateFormat(format)

Detect if the format is the default format.
