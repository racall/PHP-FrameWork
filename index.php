<?php
	header("Content-type: text/html; charset=utf-8");
	//url形式  index.php?controller=控制器名&method=方法名
	require_once('include.php');
	require_once('start.php');
	start::run($config);
?>