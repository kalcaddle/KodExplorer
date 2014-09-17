define(function(require, exports) {
    return{
        html:"<div class='file_upload'>\
            <div class='top_nav'>\
               <a href='javascript:void(0);' class='menu this tab_upload'>{{LNG.upload_local}}</a>\
               <a href='javascript:void(0);' class='menu tab_download''>{{LNG.download_from_server}}</a>\
               <a class='button' style='margin:-1px 0 0 10px;cursor: pointer;' href='javascript:core.upload()'>{{LNG.upload_path_current}}</a>\
               <div style='clear:both'></div>\
            </div>\
            <div class='upload_path'>{{LNG.save_path}}:<b></b></div>\
            <div class='upload_box'>\
                <div class='btns'><div id='picker'>{{LNG.upload_select}}</div>\
                <div tips class='tips' title='{{LNG.upload_size_info}}'>{{LNG.upload_max_size}}:{{maxsize}}</div>\
                <div style='clear:both'></div></div>\
                <div id='uploader' class='wu-example'>\
                    <div id='thelist' class='uploader-list'></div>\
                </div>\
            </div>\
            <div class='download_box hidden'>\
                <div class='list'>{{LNG.download_address}}<input type='text' name='url'/>\
                <button class='btn btn-default btn-sm' type='button'>{{LNG.download}}</button>\
                </div>\
                <div style='clear:both'></div>\
                <div id='downloader'>\
                    <div id='download_list' class='uploader-list'></div>\
                </div>\
            </div>\
        </div>"
    }
});
