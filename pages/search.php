<?php 
   
    include("../config.php");
    $level=L1;
    $_hasSlideShow=false;
    $_isPostIndex=false;
    $_isPostCart=false;
    $_isPostOrder=false;
    $Show_ShopPage = false;
    $Show_SingleProduct = false;
    $search_page = true;
	$account = false;
    include($level."DB.php");
    include($level."layout.php");
 ?>