var file_info = "<div class='pathinfo'>\
    <div class='p'>\
        <div class='icon file_icon'></div>\
        <input type='text' class='info_name' name='filename' value='{{name}}'/>\
        <div style='clear:both'></div>\
    </div>\
    <div class='line'></div>\
    <div class='p'>\
        <div class='title'>{{LNG.file_type}}:</div>\
        <div class='content'>{{ext}} {{LNG.file}}</div>\
        <div style='clear:both'></div>\
    </div>\
    <div class='line'></div>\
    <div class='p'>\
        <div class='title'>{{LNG.address}}:</div>\
        <div class='content' id='id_fileinfo_path'>{{path}}</div>\
        <div style='clear:both'></div>\
    </div>\
    <div class='p'>\
        <div class='title'>{{LNG.size}}:</div>\
        <div class='content'>{{size_friendly}}  ({{size}} Byte)</div>\
        <div style='clear:both'></div>\
    </div>\
    <div class='line'></div>\
    <div class='p'>\
        <div class='title'>{{LNG.create_time}}</div>\
        <div class='content'>{{ctime}}</div>\
        <div style='clear:both'></div>\
    </div>\
    <div class='p'>\
        <div class='title'>{{LNG.modify_time}}</div>\
        <div class='content'>{{mtime}}</div>\
        <div style='clear:both'></div>\
    </div>\
    <div class='p'>\
        <div class='title'>{{LNG.last_time}}</div>\
        <div class='content'>{{atime}}</div>\
        <div style='clear:both'></div>\
    </div>\
    <div class='line'></div>\
    <div class='p'>\
        <div class='title'>{{LNG.permission}}:</div>\
        <div class='content'>{{mode}}</div>\
        <div style='clear:both'></div>\
    </div>\
    <div class='p'>\
        <div class='title'>{{LNG.permission_edit}}:</div>\
        <div class='content'><input type='text' class='info_chmod' value='777'/>\
        <button class='btn btn-default btn-sm edit_chmod' type='button'>{{LNG.button_save}}</button></div>\
        <div style='clear:both'></div>\
    </div>\
</div>";

var path_info = "<div class='pathinfo'>\
    <div class='p'>\
        <div class='icon folder_icon'></div>\
        <input type='text' class='info_name' name='filename' value='{{name}}'/>\
        <div style='clear:both'></div>\
    </div>\
    <div class='line'></div>\
    <div class='p'>\
        <div class='title'>{{LNG.type}}:</div>\
        <div class='content'>{{LNG.folder}}</div>\
        <div style='clear:both'></div>\
    </div>\
    <div class='p'>\
        <div class='title'>{{LNG.address}}:</div>\
        <div class='content'>{{path}}</div>\
        <div style='clear:both'></div>\
    </div>\
    <div class='p'>\
        <div class='title'>{{LNG.size}}:</div>\
        <div class='content'>{{size_friendly}}  ({{size}} Byte)</div>\
        <div style='clear:both'></div>\
    </div>\
    <div class='p'>\
        <div class='title'>{{LNG.contain}}:</div> \
        <div class='content'>{{file_num}}  {{LNG.file}},{{folder_num}}  {{LNG.folder}}</div>\
        <div style='clear:both'></div>\
    </div>\
    <div class='line'></div>\
    <div class='p'>\
        <div class='title'>{{LNG.create_time}}</div>\
        <div class='content'>{{ctime}}</div>\
        <div style='clear:both'></div>\
    </div>\
    <div class='p'>\
        <div class='title'>{{LNG.modify_time}}</div>\
        <div class='content'>{{mtime}}</div>\
        <div style='clear:both'></div>\
    </div>\
    <div class='p'>\
        <div class='title'>{{LNG.last_time}}</div>\
        <div class='content'>{{atime}}</div>\
        <div style='clear:both'></div>\
    </div>\
    <div class='line'></div>\
    <div class='p'>\
        <div class='title'>{{LNG.permission}}:</div>\
        <div class='content'>{{mode}}</div>\
        <div style='clear:both'></div>\
    </div>\
    <div class='p'>\
        <div class='title'>{{LNG.permission_edit}}:</div>\
        <div class='content'><input type='text' class='info_chmod' value='777'/>\
        <button class='btn btn-default btn-sm edit_chmod' type='button'>{{LNG.button_save}}</button></div>\
        <div style='clear:both'></div>\
    </div>\
</div>";

var path_info_more = "<div class='pathinfo'>\
    <div class='p'>\
        <div class='icon folder_icon'></div>\
        <div class='content' style='line-height:40px;margin-left:40px;'>\
            {{file_num}}  {{LNG.file}},{{folder_num}}  {{LNG.file}}</div>\
        <div style='clear:both'></div>\
    </div>\
    <div class='line'></div>\
    <div class='p'>\
        <div class='title'>{{LNG.size}}:</div>\
        <div class='content'>{{size_friendly}} ({{size}} Byte)</div>\
        <div style='clear:both'></div>\
    </div>\
    <div class='line'></div>\
    <div class='p'>\
        <div class='title'>{{LNG.permission}}:</div>\
        <div class='content'>{{mode}}</div>\
        <div style='clear:both'></div>\
    </div>\
    <div class='p'>\
        <div class='title'>{{LNG.permission_edit}}:</div>\
        <div class='content'><input type='text' class='info_chmod' value='777'/>\
        <button class='btn btn-default btn-sm edit_chmod' type='button'>{{LNG.button_save}}</button></div>\
        <div style='clear:both'></div>\
    </div>\
</div>";

define(function(require, exports) {
    return{
        file_info:file_info,
        path_info:path_info,
        path_info_more:path_info_more
    }
});