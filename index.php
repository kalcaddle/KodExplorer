<?php
	ob_start();
	include ('config/config.php');
	$app = new Application();
	init_config();
	$app->run();
?>
