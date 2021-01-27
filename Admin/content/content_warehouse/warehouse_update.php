<?php 
	$level='../../';
	include($level.'config.php');
	include($level.'DB.php');

	$productcode = $_GET['productcode'];
	$avatar = $_GET['avatar'];
	$productname = $_GET['productname'];
	$price = $_GET['price'];
	$imp = $_GET['import'];
	$inv = $_GET['inventory'];
	$supp = $_GET['supplier'];

	$update = DP::run_query("UPDATE kho SET hinhanh=?,tensp=?,giaban=?,soluong_nhap=?,soluong_ton=?,nhacungcap=? WHERE masp=?",[$avatar,$productname,$price,$imp,$inv,$supp,$productcode],1);

	header('location:'.$level.'warehouse.php');
 ?>