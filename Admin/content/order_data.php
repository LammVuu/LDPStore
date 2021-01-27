<?php
	include($level.'DB.php');

	$AdminName = DP::run_query("SELECT * FROM taikhoan WHERE loaiTK = 1",[],2);


	if (isset($_GET['customer'])&&isset($_GET['date'])) //lọc theo tên kh và sđt
	{

		$customer="%".$_GET['customer']."%";
		$date="%".$_GET['date']."%";
		$Order_List = DP::run_query("SELECT * FROM donhang WHERE khachhang like ? AND ngaydat like ?",[$customer,$date],2);
	}
	elseif(isset($_GET['customer']))//lọc theo tên kh
	{
		$customer="%".$_GET['customer']."%";
		$Product_List=DP::run_query("SELECT * FROM donhang WHERE khachhang like ?",[$customer],2);
	}
	elseif(isset($_GET['date']))//lọc theo sđt
	{
		$date="%".$_GET['date']."%";
		$Product_List=DP::run_query("SELECT * FROM donhang WHERE ngaydat like ?",[$date],2);
	}
	else
	{
		$Order_List = DP::run_query("SELECT * FROM donhang order by madh",[],2);
	}
?>