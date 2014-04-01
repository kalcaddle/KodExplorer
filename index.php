<?php
	include ('./config/config.php');
	$app = new Application();			//声明控制器类
	$app->setDefaultController('explorer');//设置默认控制器
	$app->setDefaultAction('index');	//设置默认控制器函数 
	$app->run();
?>