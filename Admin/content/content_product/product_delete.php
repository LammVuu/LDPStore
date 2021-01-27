<?php 
	$level='../../';
	include($level.'config.php');
	include($level.'DB.php');

	$productcode = $_GET['productcode'];

	$update = DP::run_query("UPDATE sanpham SET trangthai=0 WHERE masp=?",[$productcode],1);

	header('location:'.$level.'index.php');
 ?>