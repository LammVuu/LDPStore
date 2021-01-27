<?php
$flag=$_GET['flag'];
if($flag==0)
{	
	
	$temp =$_GET['search'];
	if(is_numeric($temp))
	{
		$search=$temp;
		$danhsachSP=DP::run_query("SELECT sanpham.masp, sanpham.tensp,sanpham.anhdaidien,sanpham.giacu,sanpham.giamoi FROM `sanpham` 
						WHERE sanpham.giamoi =?",[$search],2);
	}
	else
	{	$search="%".$temp."%";
		$danhsachSP=DP::run_query("SELECT sanpham.masp, sanpham.tensp,sanpham.anhdaidien,sanpham.giacu,sanpham.giamoi FROM `sanpham` 
						WHERE sanpham.tensp like ?",[$search],2);
	}
	$name = $_GET['search'];
	
}
else if($flag==1)
{
	$tensp="%".$_GET['tensanpham']."%";
	$giaban="%".$_GET['giaban']."%";
	$danhsachSP=DP::run_query("SELECT sanpham.masp, sanpham.tensp,sanpham.anhdaidien,sanpham.giacu,sanpham.giamoi FROM `sanpham` 
						WHERE sanpham.tensp like ? and sanpham.giamoi like ?",[$tensp,$giaban],2);
	$name = $_GET['tensanpham']." + $".$_GET['giaban'];
}
?>