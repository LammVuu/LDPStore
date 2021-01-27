<?php 
	$Account = DP::run_query("SELECT * FROM taikhoan WHERE hoatdong = 1 AND trangthai = 1",[],2);

	$fullname = '';
	if(count($Account) > 0)
		$fullname = $Account[0]['fullname'];

	$Product = DP::run_query("SELECT * FROM sanpham WHERE chuyenmuc like 'CM1' limit 1,5",[],2);

	$Review2 = DP::run_query("SELECT * FROM sanpham WHERE sanpham.chuyenmuc like 'CM2' limit 1,2",[],2);
 ?> 