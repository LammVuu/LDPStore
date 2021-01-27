<?php 
	$level='../../';
	include($level.'config.php');
	include($level.'DB.php');

	$username = $_GET['username'];

	$update = DP::run_query("UPDATE taikhoan SET trangthai=0 WHERE username=?",[$username],1);

	header('location:'.$level.'account.php');
	
 ?>