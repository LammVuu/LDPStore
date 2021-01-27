<?php 
	$level='../../';
	include($level.'config.php');
	include($level.'DB.php');

	$id = $_GET['id'];
	$name = $_GET['name'];
	
	$insert = DP::run_query("INSERT INTO `chuyenmuc`(`id`, `tenchuyenmuc`) VALUES (?,?)",[$id,$name],1);
header('location:'.$level.'categories.php');
 ?>