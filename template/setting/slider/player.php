<div class='h1'><i class="font-icon icon-music"></i><?php echo $L['setting_player_music'];?></div>
<div class="section">
	<div class='box' data-type="musictheme">
	<?php 
		$tpl="<div class='{this} list' data-value='{0}'><div class='ico'><img src='./static/images/thumb/music/{0}.jpg'/></div></div>";
		echo getTplList(',',':',$config['setting_all']['musicthemeall'],$tpl,$config['user']['musictheme']);
	?>
	<div style="clear:both;"></div>
	</div>
</div>
<div class='h1'><?php echo $L['setting_player_movie'];?></div>
<div class="section">
	<div class='box' data-type="movietheme">
		<?php 
			$tpl="<div class='{this} list' data-value='{0}'><div class='ico'><img src='./static/images/thumb/movie/{0}.jpg'/></div></div>";
			echo getTplList(',',':',$config['setting_all']['moviethemeall'],$tpl,$config['user']['movietheme']);
		?>
		<div style="clear:both;"></div>
	</div>	
</div>