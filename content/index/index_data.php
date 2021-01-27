<?php

	$latesProducts = DP::run_query("SELECT * FROM sanpham WHERE sanpham.chuyenmuc like 'CM1' ",[],2);

	$topSeller = DP::run_query("SELECT * FROM sanpham WHERE sanpham.chuyenmuc like 'CM2' ",[],2);

	$recentlyViewed = DP::run_query("SELECT * FROM sanpham WHERE sanpham.chuyenmuc like 'CM4' ",[],2);

	$topNew = DP::run_query("SELECT * FROM sanpham WHERE sanpham.chuyenmuc like 'CM3' ",[],2);

	$logomid = DP::run_query("SELECT logo.tenfile FROM logo",[],2);
	

?>