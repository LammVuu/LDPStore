<?php

	include('../config.php');
	$level=L1;
	include($level.'DB.php');

	$DS_TaiKhoan = DP::run_query("SELECT * FROM taikhoan",[],2);

	$username=$_GET['username'];
	$password=$_GET['password'];

	
	//cập nhật đăng nhập
	$update_hoatdong = DP::run_query("UPDATE taikhoan SET hoatdong = 1 WHERE username = ?",[$username],1);

	$result=DP::run_query("SELECT username, password, loaiTK FROM taikhoan WHERE username=? AND password=?",[$username,$password],2);
	$error='';

	if(!empty($result))
	{
		if($result[0]['loaiTK'] == 2)
			header('location:'.$level."index.php");
		elseif($result[0]['loaiTK'] == 1)
			header('location:'.$level.'Admin/index.php');//thanhcong
	}
	else
	{	
		$error='error';
		header('location:'.$level.'login.php?status='.$error);//thatbai
	}
	
?>