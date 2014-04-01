
1.安装node：下载exe安装
2.安装npm：npm install
3.安装grunt：npm install -g grunt-cli

配置环境变量
   path 加入nodejs 安装目录。
   path 加入C:\Users\kuanganlei.DOUYOLE\AppData\Roaming\npm

使用：
1.cd到需要执行的目录。编写好Gruntfile.js文件
2.grunt build 执行即可

grunt中文文档 http://www.gruntjs.net/docs/frequently-asked-questions/
http://www.hulufei.com/post/grunt-introduction
(关于如何配置:参考来源:https://github.com/seajs/seajs/issues/672 和
http://hi.baidu.com/liuda101/item/54bcf8d0b6a65602d68ed057 和 
http://gruntjs.com/configuring-tasks#files )
构建工具：https://github.com/seajs/seajs/issues/538
如何使用Grunt构建一个中型项目：https://github.com/seajs/seajs/issues/672


使用配置前：seajs.use("js/_dev/main");
构建后使用：seajs.use("js/app/main");
捐助：http://slidesjs.com/
http://fancyapps.com/fancybox/