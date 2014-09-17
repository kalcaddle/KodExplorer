define(function(require, exports) {
    return{
        html:"<div class='appbox'>\
          <div class='appline name'>\
              <div class='left'>{{LNG.name}}</div>\
              <div class='right'><input type='text' name='name' value='{{data.name}}'/></div>\
              <div style='clear:both;'></div>\
          </div>\
          <div class='appline desc'>\
              <div class='left'>{{LNG.app_desc}}</div>\
              <div class='right'><input type='text' name='desc' value='{{data.desc}}'/></div>\
              <div style='clear:both;'></div>\
          </div>\
          <div class='appline icon'>\
              <div class='left'>{{LNG.app_icon}}</div>\
              <div class='right'><input type='text' name='icon' value='{{data.icon}}'/>\
              {{LNG.app_icon_show}}<a href='javascript:core.explorer(\"{{iconPath}}\");' class='button open'><img src='./static/images/app/computer.png'/></a></div>\
              <div style='clear:both;'></div>\
          </div>\
          <div class='appline group'>\
              <div class='left'>{{LNG.app_group}}</div>\
              <div class='right'><select name='group'>\
              <option value ='others'>{{LNG.app_group_others}}</option><option value ='game'>{{LNG.app_group_game}}</option>\
              <option value ='tools'>{{LNG.app_group_tools}}</option><option value ='reader'>{{LNG.app_group_reader}}</option>\
              <option value ='movie'>{{LNG.app_group_movie}}</option><option value ='music'>{{LNG.app_group_music}}</option>\
              </option><option value ='life'>{{LNG.app_group_life}}</option>\
              <select></div>\
              <div style='clear:both;'></div>\
          </div>\
          <div class='appline type'>\
              <div class='left'>{{LNG.app_type}}</div>\
              <div class='right'>\
                  <input class='w20' type='radio' id='url{{uuid}}' apptype='url' value='url' name='{{uuid}}type' {{if data.type=='url'}}checked='checked'{{/if}}>\
                  <label for='url{{uuid}}'>{{LNG.app_type_url}}</label>\
                  <input class='w20' type='radio' id='app{{uuid}}' apptype='app' value='app' name='{{uuid}}type' {{if data.type=='app'}}checked='checked'{{/if}}>\
                  <label for='app{{uuid}}'>{{LNG.app_type_code}}</label>\
              </div>\
              <div style='clear:both;'></div>\
          </div>\
          <div class='appline {{if data.type=='app'}}hidden{{/if}}' data-type='url'>\
              <div class='left'>{{LNG.app_display}}</div>\
              <div class='right'>\
                  <input class='w20' type='checkbox' id='simple{{uuid}}' name='simple' {{if data.simple}}checked='true'{{/if}}>\
                  <label for='simple{{uuid}}'>{{LNG.app_display_border}}</label>\
                  <input class='w20' type='checkbox' id='resize{{uuid}}' name='resize' {{if data.resize}}checked='true'{{/if}}>\
                  <label for='resize{{uuid}}'>{{LNG.app_display_size}}</label>\
              </div>\
              <div style='clear:both;'></div>\
          </div>\
          <div class='appline {{if data.type=='app'}}hidden{{/if}}' data-type='url'>\
              <div class='left'>{{LNG.app_size}}</div>\
              <div class='right'>\
                  {{LNG.width}}:&nbsp;&nbsp;<input class='w30' type='text' name='width'  value='{{data.width}}'/>\
                  {{LNG.height}}:&nbsp;&nbsp;<input class='w30' type='text' name='height' value='{{data.height}}'/>\
              </div>\
              <div style='clear:both;'></div>\
          </div>\
          <div class='appline content'>\
              <div class='left hidden' data-type='app'>{{LNG.app_code}}</div>\
              <div class='left' data-type='url'>{{LNG.app_url}}</div>\
              <div class='right'><textarea name='content'>{{data.content}}</textarea></div>\
              <div style='clear:both;'></div>\
          </div>\
      </div>"
    }
});