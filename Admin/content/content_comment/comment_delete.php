<?php 
	$level='../../';
	include($level.'config.php');
	include($level.'DB.php');

	$no = $_GET['no'];
	$delete = DP::run_query("DELETE FROM binhluan WHERE STT=?",[$no],1);

	header('location:'.$level.'comment.php');
 ?>