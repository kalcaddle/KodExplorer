<div class='h1'><i class="font-icon icon-dashboard"></i><?php echo $L['setting_theme'];?></div>
<div class="section">
	<div class='box' data-type="theme">
	<?php 
		$tpl="<div class='{this} list' data-value='{0}'><div class='theme ico'><img src='./static/images/thumb/theme/{2}.png'/></div><div class='info'>{1}</div></div>";
		echo getTplList(',',':',$config['setting_all']['themeall'],$tpl,$config['user']['theme']);
	?>
	<div style="clear:both;"></div>
	</div>
</div>
