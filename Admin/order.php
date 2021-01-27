<?php
	$level = "";

	// level_2 ra ngoài vào thư mục img/
	$level_2 = "../";
	include($level."config.php");
	$_isPostIndex = false;
	$_isPostAccount = false;
	$_isPostComment = false;
	$_isPostMail = false;
	$_isPostOrder = true;
	$_isPostWarehouse = false;
	$_isCategories = false;
	include($level."layout.php");
?>