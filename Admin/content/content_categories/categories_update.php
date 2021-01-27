<?php 
	$level='../../';
	include($level.'config.php');
	include($level.'DB.php');

	$id = $_GET['id'];
	$name = $_GET['name'];
	
	$insert = DP::run_query("UPDATE chuyenmuc SET tenchuyenmuc=?WHERE id=?",[$name,$id],1);
header('location:'.$level.'categories.php');
 ?>