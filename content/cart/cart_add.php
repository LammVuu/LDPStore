<?php 
	session_start();
	//session_destroy(); //hàm hủy session
	$level = '../../';
	include($level.'config.php');
	include($level.'DB.php');	

	$masp = $_GET['id'];

	//kiểm tra tồn kho
	$Warehouse = DP::run_query("SELECT * FROM kho WHERE masp=?",[$masp],2);
	$inventory = $Warehouse[0]['soluong_ton'];
	if($inventory == 0)
	{
		$status = 'error';
		header('location:'.$level.PAGE.'cart.php?status='.$status);
	}
	else
	{
		$SP = DP::run_query("SELECT * FROM sanpham WHERE masp=?",[$masp],2);

		$hinhanh = $SP[0]['anhdaidien'];
		$tensp = $SP[0]['tensp'];
		$giamoi = $SP[0]['giamoi'];

		//kiểm tra session của mã sp đã có giá trị
		if(isset($_SESSION['cart'][$masp]))
		{	
			$soluong = $_SESSION['cart'][$masp]['soluong'];

			if(isset($_GET['soluong'])) //ở trang single
				$soluong = $_GET['soluong'];

			$_SESSION['cart'][$masp]['soluong'] += $soluong;
			$_SESSION['cart'][$masp]['thanhtien'] += ($soluong*$giamoi);
		}

		//session chưa có giá trị
		else
		{
			$soluong = 1;

			if(isset($_GET['soluong']))
				$soluong = $_GET['soluong'];
			
			$thanhtien = $soluong * $giamoi;
			$_SESSION['cart'][$masp] = array('masp'=>$masp, 'anhdaidien'=>$hinhanh, 'tensp'=>$tensp, 'giamoi'=>$giamoi, 'soluong'=>$soluong, 'thanhtien'=>$thanhtien);

			header('location:'.$level.PAGE.'cart.php');
		}
	}
 ?>