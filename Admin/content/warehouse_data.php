<?php 
	include($level.'DB.php');
	$AdminName = DP::run_query("SELECT * FROM taikhoan WHERE loaiTK = 1",[],2);

	if(isset($_GET['price'])&&isset($_GET['supplier']))
	{
		$price = '%'.$_GET['price'].'%';
		$supp = '%'.$_GET['supplier'].'%';

		$Warehouse = DP::run_query("SELECT * FROM kho WHERE giaban LIKE ? AND nhacungcap LIKE ?",[$price,$supp],2);
	}
	elseif(isset($_GET['supplier']))
	{
		$supp = '%'.$_GET['supplier'].'%';

		$Warehouse = DP::run_query("SELECT * FROM kho WHERE nhacungcap LIKE ?",[$supp],2);
	}
	elseif(isset($_GET['price']))
	{
		$price = '%'.$_GET['price'].'%';

		$Warehouse = DP::run_query("SELECT * FROM kho WHERE giaban LIKE ?",[$price],2);
	}
	else
	{
		$Warehouse = DP::run_query("SELECT * FROM kho ORDER BY masp",[],2);
		$count = (count($Warehouse)) + 1;
	}
 ?>