# grunt-cmd-transport

> Transport javascript into cmd.

## Getting Started

This plugin requires Grunt `~0.4.1`

If you haven't used [Grunt](http://gruntjs.com/) before, be sure to check out the [Getting Started](http://gruntjs.com/getting-started) guide, as it explains how to create a [Gruntfile](http://gruntjs.com/sample-gruntfile) as well as install and use Grunt plugins. Once you're familiar with that process, you may install this plugin with this command:

```shell
npm install grunt-cmd-transport --save-dev
```

Once the plugin has been installed, it may be enabled inside your Gruntfile with this line of JavaScript:

```js
grunt.loadNpmTasks('grunt-cmd-transport');
```

## The "transport" task

### Overview

In your project's Gruntfile, add a section named `cmd_transport` to the data object passed into `grunt.initConfig()`.

```js
grunt.initConfig({
  transport: {
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

#### options.idleading

Type: `String`
Default value: `""`

Prepend idleading to generate the id of the module.

#### options.alias

Type: `Object`
Default value: `{}`

Alias of modules.

#### options.debug

Type: `Boolean`
Default value: `true`

Create a debugfile or not.

#### options.handlebars

Type: `Object`

Options for handlebars compiler.

#### options.uglify

Type: `Object`

Uglify prettifier, you really don't have to change this value.


#### options.parsers

Transport a specific filetype with the right parser.

You can write your own parsers, for example `coffeeParser`:

```js
options: {
    parsers: {
        '.coffee': [coffeeParser]
    }
}
```

Sorry for the missing documentation on how to write a parser.

### Usage Examples

Gruntfile use default options.


```js
grunt.initConfig({
    transport: {
        target_name: {
            files: [{
                cwd: 'src',
                src: '**/*',
                dest: 'dist'
            }]
        }
    }
});
```

## Contributing

In lieu of a formal styleguide, take care to maintain the existing coding style. Add unit tests for any new or changed functionality. Lint and test your code using [Grunt](http://gruntjs.com/).

## Release History

**April 10th, 2013** `0.1.3`

Upgrade dependencies.

**April 9th, 2013** `0.1.2`

Bugfix for parsing nested relative dependencies.

**April 1st, 2013** `0.1.1`

Template process on source data.

**April 1st, 2013** `0.1.0`

First version.
