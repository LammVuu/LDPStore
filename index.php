<?php
include('config.php');
$level =L0;
$_hasSlideShow=true;
$_isPostIndex=true;
$_isPostCart=false;
$_isPostOrder=false;
$Show_ShopPage = false;
$Show_SingleProduct = false;
$search_page = false;
$account = false;

//setcookie('visit','',time()-3600);
if(isset($_COOKIE['visit']))
{
	$count = $_COOKIE['visit'];
	$count++;
	setcookie('visit',$count,time()+3600,'/');
}
else
{
	$count=0;
	setcookie('visit',$count,time()+3600,'/');
}


	

include ($level.'DB.php');
include ($level.'layout.php');
?>