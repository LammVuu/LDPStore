<?php 
	$level = "";

	//$level_2 go out admin folder
	$level_2 = '../';
	include($level."config.php");
	$_isPostIndex = false;
	$_isPostAccount = true;
	$_isPostComment = false;
	$_isPostMail = false;
	$_isPostOrder = false;
	$_isPostWarehouse = false;
	$_isCategories = false;
	include($level."layout.php");
 ?>
