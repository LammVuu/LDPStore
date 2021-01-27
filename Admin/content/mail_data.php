<?php
	include($level.'DB.php');
	$Mail_List=DP::run_query("SELECT * FROM `mail`",[],2);
	$AdminName = DP::run_query("SELECT * FROM taikhoan WHERE loaiTK = 1",[],2);
?>