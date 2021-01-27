<?php 
	session_start();

	//session_destroy();
	$level = '../../';
	include($level.'config.php');
	include($level.'DB.php');

	$masp = $_GET['id'];
	
	//hủy biến
	unset($_SESSION['cart'][$masp]);

	header('location:'.$level.PAGE.'cart.php');
 ?>