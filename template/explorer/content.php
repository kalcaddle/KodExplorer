<div class="frame-main">
	<div class='frame-left'>
		<ul id="folderList" class="ztree"></ul>
		<div class="bottom_box">
			<div class="user_space_info"></div>
			<div class="box_content">
				<div class="cell menuRecycleButton"><i class="font-icon icon-trash"></i><span><?php echo $L['recycle'];?></span></div>
				<div class="cell menuShareButton"><i class="font-icon icon-share-sign"></i><span><?php echo $L['my_share'];?></span></div>
				<div style="clear:both"></div>
			</div>
		</div>
	</div><!-- / frame-left end-->
	
	<div class='frame-resize'></div>
	<div class='frame-right'>
		<div class="frame-header">
			<div class="header-content">
				<div class="header-left">
					<div class="btn-group btn-group-sm">
						<button class="btn btn-default" id='history_back' title='<?php echo $L['history_back'];?>' type="button">
							<i class="font-icon icon-angle-left"></i>
						</button>
						<button class="btn btn-default" id='history_next' title='<?php echo $L['history_next'];?>' type="button">
							<i class="font-icon icon-angle-right"></i>
						</button>
					</div>
				</div><!-- /header left -->

				<div class='header-middle'>
					<button class="btn btn-default btn-left-radius ml-10" id='home' title='<?php echo $L['root_path'];?>'>
						<i class="font-icon icon-home"></i>
					</button>
					<div id='yarnball' title="<?php echo $L['address_in_edit'];?>"></div>
					<div id='yarnball_input'><input type="text" name="path" value="" class="path" id="path"/></div>

					<button class="btn btn-default" id='fav' title='<?php echo $L['add_to_fav'];?>' type="button">
						<i class="font-icon icon-star"></i>
					</button>
					<!-- <button class="btn btn-default" id='refresh' title='<?php echo $L['refresh_all'];?>' type="button">
						<i class="font-icon icon-refresh"></i>
					</button> -->
					<button class="btn btn-default btn-right-radius" id='goto_father' title='<?php echo $L['go_up'];?>' type="button">
						<i class="font-icon icon-circle-arrow-up"></i>
					</button>
					<div class="path_tips" title="<?php echo $L['only_read_desc'];?>" title-timeout="0">
						<i class="icon-warning-sign"></i><span></span>
					</div>

					<div class="role_label_box"></div>
				</div><!-- /header-middle end-->		
				<div class='header-right'>
					<input type="text" name="seach" class="btn-left-radius"/>
					<button class="btn btn-default btn-right-radius" id='search' title='<?php echo $L['search'];?>' type="button">
						<i class="font-icon icon-search"></i>
					</button>
				</div>
			</div>
		</div><!-- / header end -->
		<div class="frame-right-main">
			<div class="tools">
				<div class="tools-left tools-left-share    <?php if(ST!='share'){echo 'hidden';}?>">
					<!-- 文件功能 -->
					<div class="btn-group btn-group-sm kod_path_tool">
						<button id='selectAll' class="btn btn-default" type="button">
							<i class="font-icon icon-check"></i><?php echo $L['selectAll'];?>
						</button>
						<button id='upload' class="btn btn-default" type="button">
							<i class="font-icon icon-cloud-upload"></i><?php echo $L['upload'];?>
						</button>
						
						<button id='download' class="btn btn-default" type="button">
							<i class="font-icon icon-download"></i><?php echo $L['download'];?>
						</button>					        				        
					</div>
					<span class='msg'><?php echo $L['path_loading'];?></span>
					<div class="clear"></div>
				</div>
				<div class="tools-left tools-left-explorer <?php if(ST=='share'){echo 'hidden';}?>">
					<!-- 回收站tool -->
					<div class="btn-group btn-group-sm kod_recycle_tool hidden fl-left">
						<button id='recycle_clear' class="btn btn-default" type="button">
				        	<i class="font-icon icon-folder-close-alt"></i><?php echo $L['recycle_clear'];?>
				        </button>
					</div>

					<!-- 分享 tool -->
					<div class="btn-group btn-group-sm kod_share_tool hidden fl-left">
						<button id='refresh' class="btn btn-default" type="button">
				        	<i class="font-icon icon-refresh"></i><?php echo $L['refresh'];?>
				        </button>
					</div>

					<!-- 文件功能 -->
					<div class="btn-group btn-group-sm kod_path_tool fl-left">
				        <button id='newfolder' class="btn btn-default" type="button">
				        	<i class="font-icon icon-folder-close-alt"></i><?php echo $L['newfolder'];?>
				        </button>
				        <button id='newfile' class="btn btn-default" type="button">
				        	<i class="font-icon icon-file-alt"></i><?php echo $L['newfile'];?>
				        </button>
				        <button id='upload' class="btn btn-default" type="button">
				        	<i class="font-icon icon-cloud-upload"></i><?php echo $L['upload'];?>
				        </button>

				        <div class="btn-group btn-group-sm">
						    <button type="button" class="btn btn-default btn-sm toolPathMore">
						      <i class="font-icon icon-ellipsis-horizontal"></i><?php echo $L['button_more'];?>&nbsp;<span class="caret"></span>
						    </button>
						</div>
						<div class="group_space_use fl-left hidden"></div>
						<div class="admin_real_path hidden fl-left ml-10">
							<button type="button" class="btn btn-default btn-sm dlg_goto_path"  title="<?php echo $L['open_the_path'];?>">
								<i class="font-icon icon-folder-open"></i>
							</button>
		                </div>
						<span class='msg fl-left'><?php echo $L['path_loading'];?></span>
						<div class="clear"></div>
					</div>
				</div>
				<div class="tools-right">
					<div class="btn-group btn-group-sm">
					  <button id='set_icon' title="<?php echo $L['list_icon'];?>" type="button" class="btn btn-default">
					  	<i class="font-icon icon-th"></i>
					  </button>
					  <button id='set_list' title="<?php echo $L['list_list'];?>" type="button" class="btn btn-default">
					  	<i class="font-icon icon-list"></i>
					  </button>
					  <button id='set_list_split' title="<?php echo $L['list_list_split'];?>" type="button" class="btn btn-default">
					  	<i class="font-icon icon-columns"></i>
					  </button>

					  <div class="btn-group btn-group-sm menu-theme-list">
					    <button id="set_theme" title="<?php echo $L['setting_theme'];?>" type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
					      <i class="font-icon icon-dashboard"></i>&nbsp;&nbsp;<span class="caret"></span>
					    </button>
					    <ul class="dropdown-menu pull-right dropdown-menu-theme animated menuShow">
						    <?php 
						    	$arr = explode(',',$config['setting_all']['themeall']);
						    	foreach ($arr as $value) {
						    		echo "<li class='list' theme='{$value}'><a href='javascript:void(0);'>".$L['theme_'.$value]."</a></li>\n";
						    	}
							?>
					    </ul>
					  </div>
					</div>
					<div class="set_icon_size">
						<span class="dropdown-toggle" data-toggle="dropdown">
					    	<i class="font-icon icon-zoom-in"></i>
					    </span>
					    <ul class="dropdown-menu set_icon_size_slider animated menuShow">
						    <div class="slider_bg"></div>
						    <div class="slider_handle"></div>
					    </ul>
					</div>
				</div>
				<div style="clear:both"></div>
			</div><!-- end tools -->
			<div id='list_type_list' class="hidden">
				<div id="main_title">
					<div class="filename" field="name"><?php echo $L['name'];?><span></span></div><div class="resize filename_resize"></div>
					<div class="filetype" field="ext"><?php echo $L['type'];?><span></span></div><div class="resize filetype_resize"></div>
					<div class="filesize" field="size"><?php echo $L['size'];?><span></span></div><div class="resize filesize_resize"></div>
					<div class="filetime" field="mtime"><?php echo $L['modify_time'];?><span></span></div><div class="resize filetime_resize"></div>
					<div style="clear:both"></div>
				</div>
			</div>
			</div><!-- list type 列表排序方式 -->

			<div class='bodymain html5_drag_upload_box menuBodyMain'>
				<div class="list_split_box hidden">
					<div class="split_line"></div>
					<div class="split_line"></div>
					<div class="split_line"></div>
					<div class="split_line"></div>
					<div class="split_line"></div>
					<div class="split_line"></div>
					<div class="split_line"></div>
					<div class="split_line"></div>
					<div class="split_line"></div>
					<div class="split_line"></div>
				</div>
				<div class="fileContiner"></div>
				<div class="fileContinerMore"></div>
			</div><!-- html5拖拽上传list -->
			<div class="file_select_info">
				<span class="item_num"></span>
				<span class="item_select"></span>
			</div>
		</div>
	</div><!-- / frame-right end-->
</div><!-- / frame-main end-->

