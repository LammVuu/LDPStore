<?php 
	$level='../../';
	include($level.'config.php');
	include($level.'DB.php');

	$productcode = $_GET['productcode'];
	$productname = $_GET['productname'];
	$avatar = $_GET['avatar'];
	$categories = $_GET['categories'];
	$description = $_GET['description'];
	$otherimage1 = $_GET['otherimage1'];
	$otherimage2 = $_GET['otherimage2'];
	$newprice = $_GET['newprice'];
	$oldprice = $_GET['oldprice'];
	$status = $_GET['status'];

	$update = DP::run_query("UPDATE sanpham SET tensp=?, anhdaidien=?, chuyenmuc=?, mota=?, hinhanhkhac1=?, hinhanhkhac2=?, giamoi=?, giacu=?, trangthai=? WHERE masp=?",[$productname, $avatar, $categories, $description, $otherimage1, $otherimage2, $newprice, $oldprice, $status, $productcode],1);

	header('location:'.$level.'index.php');
 ?>