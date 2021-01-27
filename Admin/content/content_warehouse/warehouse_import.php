<?php 

	$level='../../';
	include($level.'config.php');
	include($level.'DB.php');

	$productcode = $_GET['productcode'];
	$avatar = $_GET['avatar'];
	$productname = $_GET['productname'];
	$price = $_GET['price'];
	$imp = $_GET['import'];
	$inv = $imp;
	$supp = $_GET['supplier'];

	$insert = DP::run_query("INSERT INTO kho(masp,hinhanh,tensp,giaban,soluong_nhap,soluong_ton,nhacungcap) VALUES(?,?,?,?,?,?,?)",[$productcode,$avatar,$productname,$price,$imp,$inv,$supp],1);

	header('location:'.$level.'warehouse.php');
 ?>