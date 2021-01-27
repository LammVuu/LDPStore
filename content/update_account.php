<?php

include('../config.php');
$level=L1;
include($level.'DB.php');
$username=$_GET['username'];
$fullname=$_GET['fullname'];
$phone = $_GET['phone'];
$address=$_GET['address'];
$email = $_GET['email'];



$result=DP::run_query("UPDATE taikhoan set fullname=?,sdt=?,diachi=?,email=? WHERE username=?",[$fullname,$phone,$address,$email,$username],3);

if($result=='0')
{
$success="success";
header('location:'.$level.PAGE."account.php?user=$username&status=$success"); //thanh cong chuyển sang form thong tin account
}
else
{
$error="error";
header('location:'.$level.PAGE."account.php?user=$username&?status=$error"); //that bai chuyển sang form đăng kí
}



?>