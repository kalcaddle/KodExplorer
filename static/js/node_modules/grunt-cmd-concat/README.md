# grunt-cmd-concat

> Concatenate cmd files.

## Getting Started
This plugin requires Grunt `~0.4.0`

If you haven't used [Grunt](http://gruntjs.com/) before, be sure to check out the [Getting Started](http://gruntjs.com/getting-started) guide, as it explains how to create a [Gruntfile](http://gruntjs.com/sample-gruntfile) as well as install and use Grunt plugins. Once you're familiar with that process, you may install this plugin with this command:

```shell
npm install grunt-cmd-concat --save-dev
```

Once the plugin has been installed, it may be enabled inside your Gruntfile with this line of JavaScript:

```js
grunt.loadNpmTasks('grunt-cmd-concat');
```

## The "concat" task

### Overview
In your project's Gruntfile, add a section named `concat` to the data object passed into `grunt.initConfig()`.

```js
grunt.initConfig({
  concat: {
    options: {
      // Task-specific options go here.
    },
    your_target: {
      // Target-specific file lists and/or options go here.
    },
  },
})
```

### Options

#### options.paths

Type: `Array`
Default value: `['sea-modules']`

Where are the modules in the sea.


#### options.include

Type: `String`
Default value: `'self'`
Optional values:

- self
- relative
- all

How should it include its dependencies.

#### options.separator

Type: `String`
Default value: `',  '`

A string value that is used to do something with whatever.

#### options.banner

Type: `String`

The banner of the concated files.

#### options.relative

Type: `Boolean`
Default value: `true`

Include all relative dependencies.

#### options.uglify

Type: `Object`

Uglify prettifier, you really don't have to change this value.

#### options.processors

Type: `Object`

Processors are functions to find the related files to concat.


### Usage Examples

#### Simple Concat

This is the same as `grunt-contrib-concat`.

```js
grunt.initConfig({
  concat: {
    foo: {
      files: {
        'dist/a.js': ['src/a.js', 'src/b.js'],
      }
    }
  }
})
```

#### Relative Concat

This will include all relative dependencies.

**You should transport your modules first**, make sure your modules contain id and dependencies.

Get [transport task](https://github.com/spmjs/grunt-cmd-transport).

```js
grunt.initConfig({
  concat: {
    foo: {
      options: {
        include: 'relative'
      },
      files: {
        'dist/a.js': ['src/a.js', 'src/b.js'],
      }
    }
  }
})
```

The `a.js` is something like:

```js
define('a', ['./c'], ...)
```

And the result should be the concat of `a.js`, `c.js` and `b.js`.

## Contributing

In lieu of a formal styleguide, take care to maintain the existing coding style. Add unit tests for any new or changed functionality. Lint and test your code using [Grunt](http://gruntjs.com/).

## Release History

**April 11th, 2013** `0.2.0`

- Remove options.relative
- Add options.include

**April 10th, 2013** `0.1.1`

- Update `cmd-util`
- Bugfix

**April 1st, 2013** `0.1.0`

First version.
