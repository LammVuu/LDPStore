<?php 
	$level='../../';
	include($level.'config.php');
	include($level.'DB.php');

	$username = $_GET['username'];
	$password = $_GET['password'];
	$fullname = $_GET['fullname'];
	$phone = $_GET['phone'];
	$address = $_GET['address'];
	$email = $_GET['email'];

	$insert = DP::run_query("INSERT INTO taikhoan(username,password,fullname,sdt,diachi,email,hoatdong,loaiTK,trangthai) VALUES(?,?,?,?,?,?,?,?,?)",[$username,$password,$fullname,$phone,$address,$email, 0, 2, 1],1);

	header('location:'.$level.'account.php');
	
 ?>