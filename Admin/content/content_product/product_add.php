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

	$insert = DP::run_query("INSERT INTO sanpham VALUES(?,?,?,?,?,?,?,?,?,?)",[$productcode, $productname, $avatar, $categories, $description, $otherimage1, $otherimage2, $newprice, $oldprice, 1],1);

	var_dump($insert);
//	header('location:'.$level.'index.php');
 ?>