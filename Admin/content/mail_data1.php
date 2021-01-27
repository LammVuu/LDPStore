<?php
	include($level.'DB1.php');
	$mail=DB::run_query("SELECT * FROM `mail`order by STT desc",[],2);
?>