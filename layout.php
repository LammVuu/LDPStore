<!DOCTYPE html>
<html>
<head>
	<title>WEBSITE BÁN HÀNG</title>
	<?php
		include_once($level.HEAD."layout_header.php");
	?>
</head>
<body>
<?php
	include_once($level.CONT_INDEX."index_data.php");
	include_once ($level.HEAD."menuheader.php");
	include_once ($level.CONT_INDEX."logotop.php");
	

?>
<?php
	if($_hasSlideShow==true)
	{
		include ($level.CONT."SlideShow_data.php");
		include_once($level.CONT_INDEX."index_mainmenu.php");
		include ($level.CONT."SlideShow.php");
	}
	if($_isPostIndex==true)
	{
		include_once($level.CONT_INDEX."index_data.php");
		include_once($level.CONT_INDEX."index_promoarea.php");
		include_once($level.CONT_INDEX."index_latestproduct.php");
		include_once($level.CONT_INDEX."index_logomid.php");
		include_once($level.CONT_INDEX."index_topseller.php");
		include_once($level.CONT_INDEX."index_recentlyviewed.php");
		include_once($level.CONT_INDEX."index_topnew.php");
	}
	if ($_isPostCart==true)
	{
			include_once($level.CONT_CART."cart_data.php");
			include_once($level.CONT_CART."cart_MainMenu.php");
			include_once($level.CONT_CART."cart_product.php");
			include_once($level.CONT_CART."cart_review.php");
	}
	if ($_isPostOrder==true)
	{
			include_once($level.CONT_ORDER."order_data.php");
			include_once($level.CONT_ORDER."order_MainMenu.php");
			include_once($level.CONT_ORDER."order_content.php");
	}
	if($Show_ShopPage == true)
	{
		include($level.CONT_SHOP."shop_data.php");
		include($level.CONT_SHOP."Shop_MainMenu.php");
		include($level.CONT_SHOP."shop_title.php");
		include($level.CONT_SHOP."shop_content.php");
	}

	if($Show_SingleProduct == true)
	{
		include($level.CONT_SINGLE."single_data.php");
		include($level.CONT_SINGLE."single_MainMenu.php");
		include($level.CONT_SINGLE."single_title.php");
		include($level.CONT_SINGLE."single_search.php");
		include($level.CONT_SINGLE."single_products.php");
		include($level.CONT_SINGLE."single_recentpost.php");
		include($level.CONT_SINGLE."single_product_information.php");
		include($level.CONT_SINGLE."single_danhgia.php");
		include($level.CONT_SINGLE."single_related.php");
		include($level.CONT_SINGLE."single_binhluan.php");
	}
	if($search_page == true)
	{
		include($level.CONT_SEARCH."search_data.php");
		include($level.CONT_SEARCH."search_MainMenu.php");
		include($level.CONT_SEARCH."search_title.php");
		include($level.CONT_SEARCH."search_content.php");
	}
	if($account== true)
	{
		include($level.CONT_ACC."data_account.php");
		include($level.CONT_ACC."information_account.php");
		
	}
	


 ?>
 <?php
  include_once($level.FOOT."footer.php"); 
 include_once($level.FOOT."layout_footer.php"); 
 ?>

</body>
</html>