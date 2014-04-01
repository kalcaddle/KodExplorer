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
                <form id='form' method='post'>\
                    <div class='list'>{{LNG.download_address}}1: <input type='text' name='url1'/></div>\
                    <div class='list'>{{LNG.download_address}}2: <input type='text' name='url2'/></div>\
                    <div class='list'>{{LNG.download_address}}3: <input type='text' name='url3'/></div>\
                    <div class='list'>{{LNG.download_address}}4: <input type='text' name='url4'/></div>\
                    <div class='list'>{{LNG.download_address}}5: <input type='text' name='url5'/></div>\
                    <div class='submit'><input type='button' name='' value='{{LNG.button_submit}}' class=''/></div>\
                </form>\
            </div>\
        </div>"
    }
});
