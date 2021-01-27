<?php 
	//hủy giỏ hàng
	session_start();
	session_destroy();

	include('../config.php');
	$level=L1;
	include($level.'DB.php');

	$DS_TaiKhoan = DP::run_query("SELECT * FROM taikhoan",[],2);
	foreach($DS_TaiKhoan as $acc)
	{
		//đăng xuất
		$reset_hoatdong = DP::run_query("UPDATE taikhoan SET taikhoan.hoatdong = 0",[],1);
	}

	header('location:'.$level.'index.php');
 ?>