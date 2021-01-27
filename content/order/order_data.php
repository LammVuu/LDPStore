<?php 
	//lấy username + tên khách hàng
	$Account = DP::run_query("SELECT * FROM taikhoan WHERE hoatdong = 1 AND trangthai = 1",[],2);

	$username = ''; $fullname = '';
	if(count($Account) > 0)
	{	
		$username = $Account[0]['username'];
		$fullname = $Account[0]['fullname'];
	}

	//danh sách đơn hàng của khách có tên chỉ định
	$DS_donhang = DP::run_query("SELECT * FROM donhang WHERE username=? ORDER BY madh",[$username],2);




 ?>