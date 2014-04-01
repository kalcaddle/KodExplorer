define(function(require, exports) {
    var search_init = "<div class='do_search'>\
        <div class='search_header'>\
           <div class='s_br'>\
                <input type='text' id='search_value' value='{{search}}'/><a class='right button icon-search'></a>\
                <div style='float:right'>{{LNG.path}}:<input type='text' id='search_path' value='{{path}}'/></div>\
            </div>\
           <div class='s_br'>\
                <input type='checkbox' id='search_is_case' {{if is_case}}checked='true'{{/if}}/>\
                <label for='search_is_case'>{{LNG.search_uplow}}</label>\
                <input type='checkbox' id='search_is_content' {{if is_content}}checked='true'{{/if}}/>\
                <label for='search_is_content'>{{LNG.search_content}}</label>\
                <div style='float:right'>{{LNG.file_type}}:<input type='text' id='search_ext' value='{{ext}}' title='{{LNG.search_ext_tips}}'/></div>\
            </div>\
        </div>\
        <div class='search_result'>\
            <table border='0' cellspacing='0' cellpadding='0'>\
                <tr class='search_title'>\
                   <td class='name'>{{LNG.name}}</td>\
                   <td class='type'>{{LNG.type}}</td>\
                   <td class='size'>{{LNG.size}}</td>\
                   <td class='path'>{{LNG.path}}</td>\
                </tr>\
                <tr class='message'><td colspan='4'></td></tr>\
            </table>\
        </div>\
    </div>";
    var list = 
    "{{each folderlist as v i}}\
        <tr class='list folder' data-path='{{v.path}}{{v.name}}' data-type='folder' data-size='0'>\
            <td class='name'><a href='javascript:void(0);' title='{{LNG.open}}{{v.name}}'>{{v.name}}</a></td>\
            <td class='type'>{{LNG.folder}}</td>\
            <td class='size'>0</td>\
            <td class='path'><a href='javascript:void(0);' title='{{LNG.goto}}{{v.path}}'>{{v.path}}</a></td>\
        </tr>\
    {{/each}}\
    {{each filelist as v i}}\
        <tr class='list file'\
            data-path='{{v.path}}{{v.name}}' \
            data-type='{{v.ext}}' \
            data-size='{{v.size}}'>\
            <td class='name'><a href='javascript:void(0);' title='{{LNG.open}}{{v.name}}'>{{v.name}}</a></td>\
            <td class='type'>{{v.ext}}</td>\
            <td class='size'>{{v.size_friendly}}</td>\
            <td class='path'><a href='javascript:void(0);' title='{{LNG.goto}}{{v.path}}'>{{v.path}}</a></td>\
        </tr>\
    {{/each}}";
    return{
        html:search_init,
        list:list
    }
});