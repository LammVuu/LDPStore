<?php 
include('config.php');
include('DB2.php');
$email = $_GET['email'];
$passemail = $_GET['passemail'];
$result = DC::run_query("SELECT taikhoan.password FROM taikhoan WHERE taikhoan.email=?",[$email],2);
?>