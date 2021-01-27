<?php
include('../config.php');
$level=L1;
include($level.'DB.php');
$user=$_GET['name'];
$email=$_GET['email'];
$content=$_GET['noidung'];
$date = $_GET['ngaygui'];
$time = $_GET['giogui'];
$result=DP::run_query("INSERT INTO `mail`(`name`, `email`, `noidung`, `ngaygui`, `giogui`) 
						VALUES (?,?,?,?,?)", [$user,$email,$content,$date,$time],3);
header('location:'.$level.'index.php');
?>