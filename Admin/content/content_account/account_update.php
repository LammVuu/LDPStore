<?php 
	$level='../../';
	include($level.'config.php');
	include($level.'DB.php');

	$username = $_GET['username'];
	$new_password = $_GET['new_password'];
	$new_fullname = $_GET['new_fullname'];
	$new_phone = $_GET['new_phone'];
	$new_address = $_GET['new_address'];
	$new_email = $_GET['new_email'];
	$status = $_GET['status'];

	// cập nhật tài khoản
	$update = DP::run_query("UPDATE taikhoan SET password=?,fullname=?,sdt=?,diachi=?,email=?,trangthai=? WHERE username=?",[$new_password,$new_fullname,$new_phone,$new_address,$new_email,$status,$username],1);

	header('location:'.$level.'account.php');
 ?>