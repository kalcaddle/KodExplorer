module.exports = function (grunt) {
    var transport = require('grunt-cmd-transport');
    var style = transport.style.init(grunt);
    var text = transport.text.init(grunt);
    var script = transport.script.init(grunt);

    //http://www.jankerli.com/?p=1658
    //http://gruntjs.com/configuring-tasks#files
    grunt.initConfig({
        pkg:grunt.file.readJSON("package.json"),
        meta: {
            basePath: './'
        },
        transport:{/*解析*/
            options:{
                paths:['.'],
                alias: '<%= pkg.spm.alias %>',
                parsers:{
                    '.js':[script.jsParser],
                    '.css':[style.css2jsParser],
                    '.html':[text.html2jsParser]
                }
            },
            kod:{
                options:{
                    idleading:'app/'//前缀
                },
                files:[{
                    cwd:'_dev/',
                    src:'**/*.js',
                    filter:'isFile',
                    dest:'.build/'
                }]
            }
        },
        concat:{/*合并*/
            options:{
                 paths:['.'],
                 include:'relative'    
            },
            kod:{
                files: [{
                    expand: true,
                    cwd: '.build/',
                    src: ['**/*.js'],
                    dest: 'app/',//输出
                    ext: '.js'
                }]
            }
        },
        uglify:{/*压缩*/
            kod:{
                files: [{
                    expand: true,
                    cwd: 'app',
                    src: ['**/*.js','!**/*-debug.js'],
                    dest: 'app/',
                    ext: '.js'
                }]
            }
        },
        clean:{/*清除.build文件*/
            spm:['.build','app/common','app/tpl','app/**/*.js','!app/**/main.js']
            //spm:['.build']
        }
    });

    grunt.loadNpmTasks('grunt-cmd-transport');
    grunt.loadNpmTasks('grunt-cmd-concat');
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.registerTask('build', ['transport:kod', 'concat:kod', 'uglify:kod', 'clean']);
//    grunt.registerTask('default', ['clean']);
};