<?php
	include ('./config/config.php');
	$app = new Application();
	init_lang();
	init_setting();
	$app->run();
?>