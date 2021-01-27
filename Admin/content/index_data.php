<?php
	include($level.'DB.php');

	$AdminName = DP::run_query("SELECT * FROM taikhoan WHERE loaiTK = 1",[],2);
	if (isset($_GET['price'])&&isset($_GET['productname'])) //lọc theo tên sp và giá
	{
		$productname="%".$_GET['productname']."%";
		$price="%".$_GET['price']."%";
		$Product_List = DP::run_query("SELECT * FROM sanpham WHERE tensp like ? AND giamoi like ?",[$productname,$price],2);
	}
	elseif(isset($_GET['productname']))//lọc theo tên sp
	{
		$productname="%".$_GET['productname']."%";
		$Product_List=DP::run_query("SELECT * FROM sanpham WHERE tensp like ?",[$productname],2);
	}
	elseif(isset($_GET['price']))//lọc theo gia
	{
		$price="%".$_GET['price']."%";
		$Product_List=DP::run_query("SELECT * FROM sanpham WHERE giamoi like ?",[$price],2);
	}
	else
	{
		$Product_List=DP::run_query("SELECT * FROM sanpham ",[],2);
	}
?>