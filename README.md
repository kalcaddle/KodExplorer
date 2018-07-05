# KodExplorer

[![Home page](https://img.shields.io/badge/home-page-yellow.svg?style=flat)](http://kodcloud.com) [![GPLV3 License](https://img.shields.io/badge/Licence-GPLV3-green.svg?style=flat)](http://kodcloud.com) [![Download](http://kodcloud.com/tools/version/?analyze/download)](https://gitee.com/kalcaddle/KODExplorer/repository/archive/master.zip)

> KodExplorer可道云，原名芒果云，是基于Web技术的私有云和在线文件管理系统。致力于为用户提供安全可控、可靠易用、高扩展性的私有云解决方案。用户只需通过简单环境搭建，即可使用KodExplorer快速完成私有云/私有网盘/在线文档管理系统的部署和搭建。可道云提供了类windows经典用户界面，延续了windows平台的用户界面、操作逻辑和使用习惯，支持100余种文件格式的在线预览，解决了文件在线存储与管理、共享和跨平台访问、在线办公影音娱乐等一系列问题，使得用户的私有云产品可以拥有本地操作一样方便、快捷、安全的体验。

> 全平台支持:Linux，Windows，Mac; 只需要php5以上服务器环境.

-----

> 开源协议: 采用GPL v3协议;  注: 开源版和商业版不是同一个版本。开源版是可道云商业版的一个衍生子版本，提供给个人或开发者使用。团队通过商业版授权、功能增强来盈利确保团队及项目不断发展。进一步会开源更多的功能及组件贡献到开源版中。



![](https://raw.githubusercontent.com/kalcaddle/static/master/images/kod/common2.png)
![](https://raw.githubusercontent.com/kalcaddle/static/master/images/kod/common3.png)


### [立即体验](http://demo.kodcloud.com/) [user: demo/demo]
-----
- [API开发文档](http://doc.kodcloud.com/)
- [更新日志](./ChangeLog.md)


# 特性
 - 像使用操作系统一样使用体验，右键操作，拖拽，快捷键……
 - 框中选择，拖拽移动，拖拽上传，在线编辑器，影音播放器，解压缩。全面ajax保证性能和体验！
 - 各个功能直接无缝连接；以对话框形式存在，多任务管理等功能
 - 完备的中文支持，各种情况下乱码解决；

## 文件管理
 - 便捷的文件选择：单选，鼠标框选，shift连选，ctrl随意选择，键盘上下左右、home、end选择；同时支持类似windows的键盘字母快捷定位文件功能
 - 文件操作：选择文件后，可以进行复制，剪切，删除，属性查看，压缩，重命名，打开预览等操作……
 - 文件上传：多文件批量上传；html5拖拽上传(拖拽到窗口实现无缝上传)
 - 右键功能：文件右键，文件夹右键，多选后右键操作，桌面右键，树目录右键操作，右键菜单绑定快捷键 (全选——复制——剪切——粘贴——删除——重命名，设置……)
 - 文件浏览：列表模式，图标模式；双击进入子文件夹；地址栏操作；打开文件夹记录逆势操作记录（前进后退）
 - 拖拽操作：选中后拖拽，实现剪切到指定文件夹功能；支持拖拽到文件夹、地址栏路径、回收站、左侧树目录等
 - 快捷键操作：delete删除，ctrl+A全选，ctrl+C复制，ctrl+X剪切，up/down/left/right/home/end选择文件等等，几乎还原了windows的所有快捷键操作
 - 强大的视图：综合windows和mac系统文件管理的有点，整合了图标模式、列表模式、分栏模式；极大方便了不同场景下的操作体验
 - 多用户支持，自定义角色组。
 - 剪贴板：复制，剪切，粘贴，清除
 - 收藏夹：将文件、文件夹添加到收藏夹中
 - 快捷分享：将文件或文件夹共享给其他人。
 - 搜索：支持文件、文件夹快捷搜索；同时支持文本文件内容全文搜索；搜索结果直接跳转到文件对应行
 - 上传：支持文件多选上传，文件夹上传、支持拖拽文件、文件夹直接上传(webkit内核)；支持断点续传、自动分块上传
 - 离线下载：支持下载链接直接下载到服务器
 - 下载：支持多选或文件夹直接下载；下载支持断点续传、多线程下载
 - 在线解压缩: 全功能在线解压：zip，rar，7z，tar，gzip，tgz；并完美解决了linux到windows压缩包内中文解压乱码的问题
 - 其他特性：完美解决各种系统中文乱码问题；文件名自然排序；自动计算选中文件个数和大小；图片自动缩略图展示

## 在线预览
 - 打开方式支持：可以选择对应关联了扩展名的打开方式，可以通过安装插件扩展各种文件打开方式；
 - 文本文件：文本文件内容查看编辑保存；，
 - 图片文件：自动生成缩略图，图片幻灯片播放；
 - 音频播放：在线播放音乐，视频文件；支持mp3，wav，wma，m4a，aac，oga，ogg，webma，wav等常见格式
 - 视频播放：在线视频文件播放，支持格式：flv，f4v，mp4，mkv，wmv，rmvb，vob，webm，webmv等各种视频格式
 - 办公文档：支持pdf、word、excle、ppt下各种文件格式的在线预览
 - 压缩文件：支持zip，rar，7z，tar，gzip，tgz 等压缩文件直接在线预览，而无需先解压；可以打开压缩包内的文件，同时支持打开方式选择
 - 工程文档：支持AutoCAD各种图纸格式、3d模型在线预览
 - 其他文档：swf、pdf、epub等文件实现在线预览支持


## 编辑器
 - 超过120种语言的语法高亮显示，部分编程语言自动纠错；支持html、js、php等语言代码格式化
 - 支持多标签：同时编辑多份文件，拖动标签可以切换顺序;支持最大化模式
 - 自动完成
 - 多光标支持：支持多光标同时编辑，鼠标中间拖拽直接多光标选中
 - 主题切换：选择你喜欢的编程风格
 - Web开发：支持Emmet插件(html/js/css)，进行极速编程
 - 快速预览：支持html、php等文件结果快速预览
 - 查找、替换；撤销反撤销，维持历史记录;支持用正则表达式搜索和替换
 - 自动补全[]，{}，()，""，''；自动换行，自定义字体，鼠标拖放文本，代码折叠等诸多实用功能
 - markdown支持：支持语法高亮、快捷工具栏；支持实时预览；支持latex公式、流程图、时序图、甘特图、类图等高级特性


# 安装

**1. 通过源码安装**
```
git clone https://gitee.com/kalcaddle/KODExplorer.git
chmod -Rf 777 ./KODExplorer/*
```

**2. 下载安装**
```
wget https://gitee.com/kalcaddle/KODExplorer/repository/archive/master.zip
unzip master.zip
chmod -Rf 777 ./*
```


# 使用帮助
* 忘记密码
    > 登陆页面: 点击"忘记密码".

* 拖拽上传及文件夹上传
    > 浏览器适配: Chrome，Firefox and Edge

* 如何使系统更安全？
    > 确认管理员密码足够复杂，并养成定期修改密码的习惯.  
    > 开启登陆验证码.  
    > 设置http服务器，禁用列目录功能;  
    > php设置: 设置防跨站保护，开启open_basedir.  


# 一些界面截图
### 文件管理:
- 概览
![Overview](https://raw.githubusercontent.com/kalcaddle/static/master/images/kod/file.png)
- 文件视图 图标模式，列表模式(支持文件夹展开)，分栏模式
![File list Type](https://raw.githubusercontent.com/kalcaddle/static/master/images/kod/file-resize.png)
- 压缩包 压缩/解压/在线预览 (zip，rar，7z，tar，gzip，tgz)
![Archives create/extract/preview](https://raw.githubusercontent.com/kalcaddle/static/master/images/kod/file-unzip.png)
- 拖拽上传
![Drag upload](https://raw.githubusercontent.com/kalcaddle/static/master/images/kod/file-upload-drag.png)
- 播放器
![Player](https://raw.githubusercontent.com/kalcaddle/static/master/images/kod/file-player.png)
- office在线预览编辑
![Online Office](https://raw.githubusercontent.com/kalcaddle/static/master/images/kod/file-open-pptx.png)


### 编辑器:
- 概览
![Overview](https://raw.githubusercontent.com/kalcaddle/static/master/images/kod/editor.png)
- 实时预览
![Live preview](https://raw.githubusercontent.com/kalcaddle/static/master/images/kod/editor-preview.png)
- 文件夹搜索
![Search folder](https://raw.githubusercontent.com/kalcaddle/static/master/images/kod/editor-search.png)
- Markdown
![Markdown](https://raw.githubusercontent.com/kalcaddle/static/master/images/kod/file-markdown.png)
- 代码风格
![Code style](https://raw.githubusercontent.com/kalcaddle/static/master/images/kod/editor-theme.png)


### 其他:
- 权限组
![System role](https://raw.githubusercontent.com/kalcaddle/static/master/images/kod/system-role.png)
- 多彩的主题风格
![Colorful Theme](https://raw.githubusercontent.com/kalcaddle/static/master/images/kod/system-theme.png)
- 自定义主题
![Custom Theme](https://raw.githubusercontent.com/kalcaddle/static/master/images/kod/common-alpha.png)
- 多语言支持
![Language](https://raw.githubusercontent.com/kalcaddle/static/master/images/kod/language.png)


# 运行环境
- 服务器:
    - Windows，Linux，Mac ...
    - PHP 5.0+
    - 数据库: File system driver;sqlite;mysql;...
- 浏览器适配: 
    - Chrome 
    - Firefox
    - Opera
    - IE8+
> 注: 你甚至可以将kod安装到你的路由器、家用NAS设备


# 鸣谢
kod项目离不开其他的开源项目

* seajs
* jQuery
* ace
* [zTree](https://gitee.com/zTree/zTree_v3) 
* webuploader 
* artTemplate
* artDialog
* jQuery-contextMenu
* ...


# 版权声明
kodexplorer 使用 GPL v3 协议.  license.[License](http://kodcloud.com/tools/licenses/license.txt)  
Contact: warlee#kodcloud.com  
Copyright (C) 2013 kodcloud.com  
