<?php 
   
    include("../config.php");
    $level=L1;
    $_hasSlideShow=false;
    $_isPostIndex=false;
    $_isPostCart=false;
    $_isPostOrder=false;
    $Show_ShopPage = true;
    $Show_SingleProduct = false;
    $search_page = false;
	$account = false;
    include($level."DB.php");
    include($level."layout.php");
 ?>