<div class='h1'><i class="font-icon icon-group"></i><?php echo $L['setting_member'];?></div>
<div class="nav">
    <a href="javascript:;" class="this" data-page="member"><?php echo $L['setting_member'];?></a>
    <a href="javascript:;" data-page="group"><?php echo $L['setting_group'];?></a>
    <a href="javascript:;" class="group_status" data-page="group_editor"><?php echo $L['setting_group_add'];?></a>
    <div style="clear:both;"></div>
</div>

<!-- 权限组列表 -->
<div class="section member">
	<table id='list' align="center" border=0 cellspacing=0 cellpadding=0 ></table>
	<a href="javascript:void(0)" class='add'><i class="icon-plus pr-10"></i><?php echo $L['button_add'];?></a>
    <div class="info hidden"></div>
</div>

<!-- 用户组列表 -->
<div class="section group hidden">
    <table id='list' align="center" border=0 cellspacing=0 cellpadding=0 ></table>
    <a href="javascript:void(0)" class='add'><i class="icon-plus"></i><?php echo $L['button_add'];?></a>
</div>

<!-- 权限组编辑 -->
<div class="section group_editor hidden">
    <div class="together input">
        <div class="title"><i><?php echo $L['group_name'];?></i></div>
        <input type="text" id='role' data-before=""/>
        <span class="text"><?php echo $L['group_name_tips'];?></span>
        <a href="javascript:;" class="button warning" style="margin-left: 20px;padding: 3px 5px;background: #ccc;border:none;color:#fff;"><i class="icon-warning-sign"></i><?php echo $L['tips'];?>!</a>
        <div style="display:none;" class="group_tips">
            <ul style="text-align: left;padding: 10px;list-style: none;">
                <?php echo $L['group_tips'];?>
            </ul>
        </div>
        <div style="clear:both;"></div>
        <div class="title"><i><?php echo $L['group_desc'];?></i></div>
        <input type="text" id='name'/><span class="text"><?php echo $L['group_desc_tips'];?></span>
        <div style="clear:both;"></div>
        <div class="title"><i><?php echo $L['group_role_ext'];?></i></div>
        <input type="text" id='ext_not_allow' default='php|asp|jsp' value="php|asp|jsp"/>
        <span class="text"><?php echo $L['group_role_ext_tips'];?></span>
        <a href="javascript:;" class="button warning path_ext_tips" title='<?php echo $L['group_role_ext_warning'];?>' style="margin-left: 20px;padding: 3px 5px;background: #ccc;border:none;color:#fff;"><i class="icon-warning-sign"></i><?php echo $L['tips'];?>!</a>
        <div style="clear:both;"></div>
    </div>
    <div class="together">
        <div class="title"><i><?php echo $L['group_role_file'];?></i></div>
        <div class="tagdiv" style="margin:2px 0 5px">
            <a class="tag" href="javascript:;" data-role='explorer:mkfile;app:user_app'>
                <input type="checkbox" class="checkbox"><span><?php echo $L['group_role_mkfile'];?></span>
            </a>
            <a class="tag" href="javascript:;" data-role='explorer:mkdir'>
                <input type="checkbox" class="checkbox"><span><?php echo $L['group_role_mkdir'];?></span>
            </a>
            <a class="tag" href="javascript:;" data-role='explorer:pathRname'>
                <input type="checkbox" class="checkbox"><span><?php echo $L['group_role_pathrname'];?></span>
            </a>
            <a class="tag" href="javascript:;" data-role='explorer:pathDelete'>
                <input type="checkbox" class="checkbox"><span><?php echo $L['group_role_pathdelete'];?></span>
            </a>
            <a class="tag" href="javascript:;" data-role='explorer:pathInfo;explorer:pathInfoMuti'>
                <input type="checkbox" class="checkbox"><span><?php echo $L['group_role_pathinfo'];?></span>
            </a>

            <a class="tag" href="javascript:;" 
            data-role='explorer:pathCopy;explorer:pathCute;explorer:pathCuteDrag;explorer:clipboard;explorer:pathPast'>
                <input type="checkbox" class="checkbox"><span><?php echo $L['group_role_pathmove'];?></span>
            </a>
            <a class="tag" href="javascript:;" data-role='explorer:zip'>
                <input type="checkbox" class="checkbox"><span><?php echo $L['group_role_zip'];?></span>
            </a>
            <a class="tag" href="javascript:;" data-role='explorer:unzip'>
                <input type="checkbox" class="checkbox"><span><?php echo $L['group_role_unzip'];?></span>
            </a>
            <a class="tag" href="javascript:;" data-role='explorer:search'>
                <input type="checkbox" class="checkbox"><span><?php echo $L['group_role_search'];?></span>
            </a> 
            <a class="tag" href="javascript:;" data-role='editor:fileSave'>
                <input type="checkbox" class="checkbox"><span><?php echo $L['group_role_filesave'];?></span>
            </a>
            <div style="clear:both;"></div>
        </div>
        <div style="clear:both;"></div>
    </div>
    <div class="together">
        <div class="title"><i><?php echo $L['group_role_can_upload'];?></i></div>
        <a class="tag" href="javascript:;" data-role='explorer:fileUpload'>
            <input type="checkbox" class="checkbox"><span><?php echo $L['group_role_upload'];?></span>
        </a>
        <a class="tag" href="javascript:;" data-role='explorer:serverDownload'>
            <input type="checkbox" class="checkbox"><span><?php echo $L['group_role_download'];?></span>
        </a>
        <a class="tag" href="javascript:;" data-role='explorer:fileDownload'>
            <input type="checkbox" class="checkbox"><span><?php echo $L['group_role_fileDownload'];?></span>
        </a>
        <a class="tag" href="javascript:;" data-role='userShare:set;userShare:del'>
            <input type="checkbox" class="checkbox"><span><?php echo $L['group_role_share'];?></span>
        </a>
        <div style="clear:both;"></div>   
    </div>

    <div class="together">
        <div class="title"><i><?php echo $L['group_role_config'];?></i></div>
        <a class="tag" href="javascript:;" data-role='user:changePassword'>
            <input type="checkbox" class="checkbox"><span><?php echo $L['group_role_passowrd'];?></span>
        </a>
        <a class="tag" href="javascript:;" data-role='setting:set'>
            <input type="checkbox" class="checkbox"><span><?php echo $L['group_role_config'];?></span>
        </a>
        <a class="tag" href="javascript:;" data-role='fav:edit;fav:add;fav:del'>
            <input type="checkbox" id="23" class="checkbox"><span><?php echo $L['group_role_fav'];?></span>
        </a>
        <div style="clear:both;"></div>
    </div>

    <div class="together combox">
        <div class="title"><i><?php echo $L['group_role_member'];?></i></div>
        <a class="tag" href="javascript:;" data-role='member:get'>
            <input type="checkbox" class="checkbox"><span><?php echo $L['group_role_list'];?></span>
        </a>
        <a class="tag" href="javascript:;" data-role='member:add'>
            <input type="checkbox" class="checkbox"><span><?php echo $L['group_role_member_add'];?></span>
        </a>
        <a class="tag" href="javascript:;" data-role='member:edit'>
            <input type="checkbox" class="checkbox"><span><?php echo $L['group_role_member_edit'];?></span>
        </a>
        <a class="tag" href="javascript:;" data-role='member:del'>
            <input type="checkbox" class="checkbox"><span><?php echo $L['group_role_member_del'];?></span>
        </a>
        <div style="clear:both;"></div> 
    </div>    
    <div class="together combox">
        <div class="title"><i><?php echo $L['group_role_group'];?></i></div>
        <a class="tag" href="javascript:;" data-role='group:get'>
            <input type="checkbox" class="checkbox"><span><?php echo $L['group_role_list'];?></span>
        </a>
        <a class="tag" href="javascript:;" data-role='group:add'>
            <input type="checkbox" class="checkbox"><span><?php echo $L['group_role_group_add'];?></span>
        </a>
        <a class="tag" href="javascript:;" data-role='group:edit'>
            <input type="checkbox" class="checkbox"><span><?php echo $L['group_role_group_edit'];?></span>
        </a>
        <a class="tag" href="javascript:;" data-role='group:del'>
            <input type="checkbox" class="checkbox"><span><?php echo $L['group_role_group_del'];?></span>
        </a>
        <div style="clear:both;"></div> 
    </div>
    <a href="javascript:;" class="add_save button"><?php echo $L['button_save_submit'];?></a>
    <a href="javascript:;" class="hidden edit_exit button"><?php echo $L['button_back_add'];?></a>
    <a href="javascript:;" class="hidden edit_save button"><?php echo $L['button_save'];?></a>
    <a href="javascript:;" class="revert"><?php echo $L['button_select_all'];?></a>   
</div>

