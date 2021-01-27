<?php 
	$level='../../';
	include($level.'config.php');
	include($level.'DB.php');

	$ordercode = $_GET['ordercode'];

	$update = DP::run_query("UPDATE donhang SET trangthai='Cancelled' WHERE madh=?",[$ordercode],1);

	header('location:'.$level.'order.php');
 ?>