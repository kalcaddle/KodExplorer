KodExplorer(http://kalcaddle.com/)
========
  KodExplorer是一款开源的基于Web的在线文件管理、代码编辑器。它提供了类windows经典用户界面，一整套在线文件管理、文件预览、编辑、上传下载、在线解压缩、音乐播放功能。让你直接在浏览器端实现web开发、源码文件预览、网站部署。同时拥有与本地操作一样方便、快捷、安全的体验。
 `商业版授权请联系：kalcaddle#qq.com`
 
####  1.是什么：
 - kodExplorer为千帆网络工作室开发的一款服务器文件管理程序。
 - 完美取代FTP管理：可用于服务器文件管理,zip解压缩、备份还原
 - 支持常见文件的预览：支持图片、音乐、视频预览、office、pdf等格式在线预览。
 - 上传：文件分片上传；保证整体的体验与大文件上传的问题。文件夹拖拽上传……。
 - 方便的下载:可以文件夹直接下载，框选后直接下载
 - 分享：你可以将你的文档或文件夹直接分享出来，供其他人浏览或下载
 - 在线编程：支持几乎所有编程语言的在线编辑(高亮,多光标编辑.堪比本地的sublime);自动展示函数列表
 - 极佳的操作体验：及其便捷的快捷键支持,让你拥有本地化的体验
 - 中文等多语言支持：中文编码全面兼容,文件编辑自动适配。
 - 超快的速度：全面采用Ajax+Json进行数据通信,毫秒级的响应速度；
 - 全平台兼容性：Win Linux Mac (Apache、Nginx、IIS)

#### 2.使用场景：
 - 取代FTP,服务端、客户端软件等复杂的安装配置。kod可以一键安装随处使用.
 - 你可以用它来管理你的服务器(备份,在线解压缩,版本发布....)
 - 你可以把他当做管理linux的一个操作系统界面
 - 可以用来作为私有云存储系统,存储你的文件...
 - 当然你也可以用来分享文件
 - Web IDE
 - 更多场景等你来挖掘！……

#### 3.使用说明
    默认加入了三个用户（分别对应不同的用户组）
    管理员：  admin/admin
    普通用户：demo/demo
    游客用户：guest/guest

    [如何使用] 下载程序,解压上传到你的服务器路径下,data目录设置777权限。访问体验超便捷的服务吧！
    (为确保数据安全，最好配置服务器不允许列目录)
    [关于上传问题] 程序没有做任何限制,如果需要上传大文件,则修改
      php.ini：`upload_max_filesize = 1000M post_max_size = 1000M`  [详情：http://955.cc/R2yT]
      注意不能大于2g，可能否则导致php无法正常运行(不支持post)。
    [关于解压缩问题] 程序不做任何限制,如若失败请设置php内存限制。memory_limit  1000M
    [关于解压缩乱码] linux服务器压缩，下载到windows下中文会乱码。是由于系统导致的。所以尽量不要跨系统操作。
    [关于"系统错误"] 请配置php错误提示级别error_reporting; 配置php.ini或者允许error_reporting函数
    [关于兼容性] 建议使用chrome firefox ie9+  体验更完整。ie8以下基本上不做兼容处理。chrome支持文件夹拖拽上传。
    [文件打开] office文件在线预览功能,服务器必须在公网(外部能访问该服务器);
        内部或局域网需要使用请参考qq群共享“web office搭建”,然后配置kod程序config/config.php OFFICE_SERVER
    [安全提示] 为确保数据安全，请设置http服务器不允许列目录。[详情：http://955.cc/R2vw]
    [忘记密码] 修改data/system/member.php 密码为明文的md5值 例如将admin密码重设为admin
        则修改第一行："name":"admin","password":"21232f297a57a5a743894a0e4a801fc3"

    【文件拖拽上传】除了ie8以下的大部分浏览器支持；建议使用chrome、360、猎豹、uc等
    【文件夹拖拽上传】除了ie10以下、firefox大部分浏览器都支持，建议使用chrome、360、猎豹、uc等

![](https://cloud.githubusercontent.com/assets/3761968/2583304/764f562a-b9cf-11e3-8e59-afdbdffc20eb.png)

## editor
![](https://cloud.githubusercontent.com/assets/3761968/2583309/7fd52f8a-b9cf-11e3-8052-b4f908fd5209.png)


## player
![](https://cloud.githubusercontent.com/assets/3761968/2583312/84462bf0-b9cf-11e3-8b00-96fb3fc1610e.png)

## desktop
![](https://cloud.githubusercontent.com/assets/3761968/2583348/1b260572-b9d0-11e3-8f3e-3004dbbc63c9.png)
