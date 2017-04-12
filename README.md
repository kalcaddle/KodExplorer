# KodExplorer

[![Home page](https://img.shields.io/badge/home-page-yellow.svg?style=flat)](http://kalcaddle.com) [![GPLV3 License](https://img.shields.io/badge/Licence-GPLV3-green.svg?style=flat)](http://kalcaddle.com) [![Download](http://kalcaddle.com/tools/version/?analyze/download)](https://github.com/kalcaddle/KODExplorer/archive/master.zip)

> KodExplorer is a file manager for web. It is also a web IDE / browser based code editor, which allows you to develop websites directly within the web browser.You can run KodExplorer either online or locally,on Linux, Windows or Mac based platforms. The only requirement is to have PHP 5 available.

![](https://raw.githubusercontent.com/kalcaddle/static/master/images/kod/common2.png)
![](https://raw.githubusercontent.com/kalcaddle/static/master/images/kod/common3.png)


### [Demo](http://demo.kalcaddle.com/) [user: demo/demo]
-----
- [Change log](./ChangeLog.md)
- [English Document](http://kalcaddle.com#lang=en)
- [中文文档](http://kalcaddle.com/#lang=zh_CN)
- [Donate](https://www.paypal.me/kalcaddle)

# Features
- Use experience like operating system, Rich context menu and toolbar, drag and drop, shortcut keys......
- Available in more than 40 languages.
- File Manage
    - All operations with files and folders on a remote server(copy,cute,paste,move,remove,upload,create folder/file,rename,etc.)
    - Multi-User support,custom role group.
    - Flexible configuration of access rights,file types restriction, user - interface and other
    - Clipboard: copy, cut, paste, clear
    - Selectable files & folders support (mouse click & Ctrl & Shift & words & Keyboard shortcuts)
    - Keyboard shortcuts: delete deletion, ctrl+A select, ctrl+C replication, ctrl+X splicing, up/down/left/right/home/end etc.
    - Multiple actions support for selected files & folders:   move,copy,cute,remove,rename,open,archive,delete,download etc.
    - Double or single click setup to open files & folders
    - Filetree: allow to open and display multiple subfolders at a time
    - Implemented natural sorting on the client-side
    - List,Icons and Split view;
    - Move/Copy/Clone/Delete files with Drag & Drop
    - Share files or folder to others.
    - Add folder to your favorites
    - Calculate directory sizes
    - Thumbnails for image files
    - Normalizer:UTF-8 Normalizer of file-name and file-path etc.
    - Muti Charset support, in a variety of circumstances garbled solution;Sanitizer of file-name and file-path etc.
    - Multiple & chunked uploads support,
    - Background file upload with Drag & Drop HTML5 support;Folder upload with Chrome, Firefox and Edge
    - Upload form URL (or list)
    - Direct extraction to the current working directory (you do not want - to create a folder)
    - Search: search by filename & file contents
    - File exclusion based on name
    - Copy direct file URL
    - Archives create/extract/preview (zip, rar, 7z, tar, gzip, tgz)
    - Quicklook, preview for common file types; image file,text file,pdf,swf,document file etc.
    - Video and audio player relying on web browser capabilities
- Editor
    - Syntax highlighting for over 120 languages
    - Multiple label, Drag & Drop the label.
    - Over 15 themes,Choose your favorite programming style
    - Web development: HTML/JS/CSS editor with Emmet integrated
    - Automatic indent and outdent;Line wrapping;Code folding
    - Multiple cursors and selections;(Middle key select;Ctrl+Command+G)
    - Autocomplete.
    - Fully customizable key bindings including vim and Emacs modes
    - Search and replace with regular expressions;Highlight matching parentheses
    - Toggle between soft tabs and real tabs
    - Displays hidden characters
    - Drag and drop text using the mouse
    - Live syntax checker (JavaScript/CoffeeScript/CSS/XQuery/HTML/PHP etc.)
    - Cut, copy, and paste functionality
    - Markdown support.(live preview;convert to html etc.)
    - Format: JavaScript/CSS/HTML/JSON/PHP etc.
    - Cross-platform, even on mobile devices
    - Easy to integrate with other systems
    - Developed by kod itself, this is a nice try.


# Install

**1. Install from source**
```
git clone https://github.com/kalcaddle/KODExplorer.git
chmod -Rf 777 ./KODExplorer/*
```

**2. Install via download**
```
wget https://github.com/kalcaddle/KODExplorer/archive/master.zip
unzip master.zip
chmod -Rf 777 ./*
```



# FAQs

* Forget password
    > Login page: see the "Forget password".

* Upload with Drag & Drop
    > Browser compatibility: Chrome, Firefox and Edge

* How to make the system more secure?
    > Make sure the administrator password is more complex.  
    > Open login verification code.  
    > Set the http server to not allow list the directory;  
    > PHP Security:Set the path for open_basedir.  

# Screenshot
### file manage:
- Overview
![Overview](https://raw.githubusercontent.com/kalcaddle/static/master/images/kod/file.png)
- File list Type (icon,list,split)
![File list Type](https://raw.githubusercontent.com/kalcaddle/static/master/images/kod/file-resize.png)
- Archives create/extract/preview (zip, rar, 7z, tar, gzip, tgz)
![Archives create/extract/preview](https://raw.githubusercontent.com/kalcaddle/static/master/images/kod/file-unzip.png)
- Drag upload
![Drag upload](https://raw.githubusercontent.com/kalcaddle/static/master/images/kod/file-upload-drag.png)
- Player
![Player](https://raw.githubusercontent.com/kalcaddle/static/master/images/kod/file-player.png)
- Online Office view & Editor
![Online Office](https://raw.githubusercontent.com/kalcaddle/static/master/images/kod/file-open-pptx.png)


### Editor:
- Overview
![Overview](https://raw.githubusercontent.com/kalcaddle/static/master/images/kod/editor.png)
- Live preview
![Live preview](https://raw.githubusercontent.com/kalcaddle/static/master/images/kod/editor-preview.png)
- Search folder
![Search folder](https://raw.githubusercontent.com/kalcaddle/static/master/images/kod/editor-search.png)
- Markdown
![Markdown](https://raw.githubusercontent.com/kalcaddle/static/master/images/kod/file-markdown.png)
- Code style
![Code style](https://raw.githubusercontent.com/kalcaddle/static/master/images/kod/editor-theme.png)


### Others:
- System role
![System role](https://raw.githubusercontent.com/kalcaddle/static/master/images/kod/system-role.png)
- Colorful Theme
![Colorful Theme](https://raw.githubusercontent.com/kalcaddle/static/master/images/kod/system-theme.png)
- Custom Theme 
![Custom Theme](https://raw.githubusercontent.com/kalcaddle/static/master/images/kod/common-alpha.png)
- Language
![Language](https://raw.githubusercontent.com/kalcaddle/static/master/images/kod/language.png)




# Software requirements
- Server:
    - Windows,Linux,Mac ...
    - PHP 5.0+
    - Database: File system driver;sqlite;mysql;...
- Browser compatibility: 
    - Chrome 
    - Firefox
    - Opera
    - IE8+
> Tips: It can also run on a router, or your home NAS


# Credits
kod is made possible by the following open source projects.

* [seajs](https://github.com/seajs/seajs) 
* [jQuery](https://github.com/jquery/jquery)
* [ace](https://github.com/ajaxorg/ace)
* [zTree](https://github.com/zTree/zTree_v3) 
* [webuploader](https://github.com/fex-team/webuploader) 
* [artTemplate](http://aui.github.com/artTemplate/)
* [artDialog](https://github.com/aui/artDialog)
* [jQuery-contextMenu](http://medialize.github.com/jQuery-contextMenu/) 
* ...



# License
kodexplorer is issued under GPLv3.   license.[License](http://kalcaddle.com/tools/licenses/license.txt)  
Contact: kalcaddle#qq.com  
Copyright (C) 2013 kalcaddle.com  
