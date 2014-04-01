<div class='h1'><i class="font-icon icon-user"></i><?php echo $L['setting_password'];?></div>
<div class="section">
	<div class='box'>
		<span ><?php echo $L['setting_password_old'];?></span>
		<input type="text" id="password_now"value="" />
		<div class='line'></div>
		<span ><?php echo $L['setting_password_new'];?></span>
		<input type="password" id="password_new" value=""/><div class='upasswordinfo'></div>
		<a onclick="Setting.tools();" href="javascript:void(0);" class="save button"><?php echo $L['button_save'];?></a>
	</div>
</div>
