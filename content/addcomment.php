<?php
	include('../config.php');
	$level=L1;
	include($level.'DB.php');
	$user=$_GET['name'];
	$email=$_GET['email'];
	$content=$_GET['content'];
	$idsanpham=$_GET['idsanpham'];
	$date = $_GET['ngaydang'];
	$giodang = $_GET['giodang'];

$result=DP::run_query("INSERT INTO `binhluan`(`masp`, `name`, `email`, `noidung`, `ngaydang`, `giodang`, `trangthai`) VALUES (?,?,?,?,?,?,?)",[$idsanpham,$user,$email,$content,$date,$giodang,"wait"],3);
header('location:'.$level.PAGE.'single-product.php?id='.$idsanpham);
?>