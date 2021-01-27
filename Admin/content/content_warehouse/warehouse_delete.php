<?php 
	$level='../../';
	include($level.'config.php');
	include($level.'DB.php');

	$productcode = $_GET['productcode'];
	$status = 'Đã hủy';

	$delete = DP::run_query("UPDATE kho SET trangthai=? WHERE masp=?",[$status,$productcode],1);

	header('location:'.$level.'warehouse.php');
 ?>