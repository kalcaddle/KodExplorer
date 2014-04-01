<div class='h1'><i class="font-icon icon-picture"></i><?php echo $L['setting_wall'];?></div>
<div class="section">
	<div class='box' data-type="wall">
	<?php 
		$tpl="<div class='{this} list' data-value='{0}'><div class='ico'><img src='./static/images/wall_page/thumb/{0}.jpg'/></div></div>";
		echo getTplList(',',':',$config['setting_all']['wallall'],$tpl,$config['user']['wall']);
	?>
	<div style="clear:both;"></div>
	</div>
</div>

<div class="section">
    <?php echo $L['setting_wall_diy'];?> <input id="wall_url" type="text" style="width: 60%;" 
    <?php $w=$config['user']['wall']; if(strlen($w)>3){echo 'value="'.$w.'"';} ?>
    /> 
    <a onclick="Setting.tools();" href="javascript:void(0);"class="button" style="padding:5px 1.5em;margin-left:20px;">
    <?php echo $L['button_set'];?></a> 
    <div style="font-size: 12px;color:#aaa;"><?php echo $L['setting_wall_info'];?></div>
</div>