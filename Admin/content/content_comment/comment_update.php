<?php 
	$level='../../';
	include($level.'config.php');
	include($level.'DB.php');

	$no = $_GET['no'];

	$status = $_GET['status'];
	$update = DP::run_query("UPDATE binhluan SET trangthai=? WHERE STT=?",[$status, $no],1);

	header('location:'.$level.'comment.php');
 ?>