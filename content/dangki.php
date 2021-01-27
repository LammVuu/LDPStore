<?php

include('../config.php');
$level=L1;
include($level.'DB.php');


$username=$_GET['username'];
$password=$_GET['password'];
$fullname=$_GET['fullname'];
$phone = $_GET['phone'];
$address=$_GET['address'];
$email = $_GET['email'];



$result=DP::run_query("INSERT INTO taikhoan(username,password,fullname,sdt,diachi,email,hoatdong,trangthai,loaitk) 
						values (?,?,?,?,?,?,?,?,?)",[$username,$password,$fullname,$phone,$address,$email,0,1,2],3);

if($result=='0')
{
$success="success";
header('location:'.$level."login.php?status=".$success); //thanhcong chuyển sang form đăng nhập
}
else
{
$error="error";
header('location:'.$level."signup.php?status=".$error); //that bai chuyển sang form đăng kí
}



?>