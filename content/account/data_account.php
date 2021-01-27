<?php
$username=$_GET['user'];

$information=DP::run_query("SELECT * FROM taikhoan WHERE username=?",[$username],2);

?>