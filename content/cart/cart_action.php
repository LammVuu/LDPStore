<?php 
	session_start();

	$level = '../../';
	include($level.'config.php');
	include($level.'DB.php');

	//Thêm sản phẩm vào giỏ hàng
	if(isset($_GET['ThemSP']))
	{
		header('location:'.$level.PAGE.'shop.php');
	}
	

	//cập nhật giỏ hàng
	elseif(isset($_GET['CapNhat']))
	{
		foreach($_GET as $masp=>$soluong)
		{
			if(($soluong > 0) and (is_numeric($soluong)))
			{
				$_SESSION['cart'][$masp]['soluong']=$soluong;
				$_SESSION['cart'][$masp]['thanhtien']=$soluong*$_SESSION['cart'][$masp]['giamoi'];
			}
		}
		var_dump($_SESSION);
		header('location:'.$level.PAGE.'cart.php');
	}


	//Thanh toán
	elseif(isset($_GET['ThanhToan']))
	{
		//Khởi tạo biến
		$ship = '5';
		
		$DS_donhang = DP::run_query("SELECT * FROM donhang",[],2);
		$ngaydat = $_GET['ngaydat'];
		$thoigian = $_GET['thoigian'];
		$madh = count($DS_donhang) + 1;

		$Account = DP::run_query("SELECT * FROM taikhoan WHERE hoatdong = 1 AND trangthai = 1",[],2);
		$username = $Account[0]['username'];
		$khachhang = $_GET['khachhang'];
		$sdt = $_GET['sdt'];
		$diachi = $_GET['diachi'];
		$email = $_GET['email'];
		$tongtien = $_GET['tongtien'];
		$hinhthucTT = $_GET['hinhthucTT'];
		$hinhthucGH = $_GET['hinhthucGH'];
		if($hinhthucGH == 'Saving delivery')
			$ship = '10';

		//thêm dữ liệu vào bảng đơn hàng
		$insert_donhang = DP::run_query("INSERT INTO donhang(madh,ngaydat,thoigian,username,khachhang,sdt,diachi,email,tongtien,hinhthucTT,hinhthucGH,ship,trangthai) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)",[$madh,$ngaydat,$thoigian,$username,$khachhang,$sdt,$diachi,$email,$tongtien,$hinhthucTT,$hinhthucGH,$ship,'Shipping'],1);

		//thêm dữ liệu vào bảng chi tiết đơn hàng và trừ số lượng tồn trong kho
		foreach($_SESSION['cart'] as $sp)
		{
			$masp = $sp['masp'];
			$hinhanh = $sp['anhdaidien'];
			$tensp = $sp['tensp'];
			$giaban = $sp['giamoi'];
			$soluong = $sp['soluong'];
			$thanhtien = $sp['thanhtien'];

			$insert_ctdh = DP::run_query("INSERT INTO ctdh(madh,hinhanh,masp,tensp,giaban,soluong,thanhtien) VALUES(?,?,?,?,?,?,?)",[$madh,$hinhanh,$masp,$tensp,$giaban,$soluong,$thanhtien],3);

			//cập nhật số lượng tồn trong kho
			$Warehouse = DP::run_query("SELECT * FROM kho WHERE masp=?",[$masp],2);
			$soluong_ton = $Warehouse[0]['soluong_ton'];
			$inventory = $soluong_ton - $soluong;
			$update=DP::run_query("UPDATE kho SET soluong_ton=? WHERE masp=?",[$inventory,$masp],3);
		}
		
		session_destroy();
		header('location:'.$level.PAGE.'order.php');
	}
	
?>

 