<?php 
	include('DB.php');
	$Account_list = DP::run_query("SELECT * FROM taikhoan ORDER BY loaiTK",[],2);
	$AdminName = DP::run_query("SELECT * FROM taikhoan WHERE loaiTK = '1'",[],2);
 ?>