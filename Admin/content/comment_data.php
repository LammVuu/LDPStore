<?php
	include($level.'DB.php');
	$Comment_List = DP::run_query("SELECT * FROM `binhluan` order by STT",[],2);
	$AdminName = DP::run_query("SELECT * FROM taikhoan WHERE loaiTK = 1",[],2);
?>