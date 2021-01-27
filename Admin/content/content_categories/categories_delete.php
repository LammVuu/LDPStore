<?php 
	$level='../../';
	include($level.'config.php');
	include($level.'DB.php');

	$id = $_GET['id'];

	
	$del = DP::run_query("DELETE FROM chuyenmuc WHERE id=?",[$id],2);
header('location:'.$level.'categories.php');
 ?>