<?php
$level='../../';
	include($level.'config.php');
	include($level.'DB.php');

	$status = $_GET['status'];
	$update = DP::run_query("UPDATE donhang SET trangthai=?",[$status],1);
	header('location:'.$level.'order.php');
?>