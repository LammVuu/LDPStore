<?php
	include($level.'DB.php');
	$AdminName = DP::run_query("SELECT * FROM taikhoan WHERE loaiTK = 1",[],2);
	$Categories_List=DP::run_query("SELECT * FROM chuyenmuc",[],2);
?>