<!DOCTYPE html>
<html>
<head>
	<?php include($level.Header_Path."layout_header.php"); ?>
</head>
<body>
	<?php 
		include($level.Header_Path."Header.php");
	
		if($_isPostIndex == true)
		{
			include($level.CONT."index_data.php");
			include($level.CONT."index_sidebar.php");
			include($level.CONT."index_list.php");
		}

		if($_isPostAccount == true)
		{		
			include($level.CONT.'account_data.php');
			include($level.CONT.'account_sidebar.php');
			include($level.CONT.'account_list.php');
		}
		if($_isPostComment == true)
		{		
			include($level.CONT.'comment_data.php');
			include($level.CONT.'comment_sidebar.php');
			include($level.CONT.'comment_list.php');
		}
		if($_isPostMail == true)
		{		
			include($level.CONT.'mail_data.php');
			include($level.CONT.'mail_sidebar.php');
			include($level.CONT.'mail_list.php');
		}
		if($_isPostOrder == true)
		{
			include($level.CONT.'order_data.php');
			include($level.CONT.'order_sidebar.php');
			include($level.CONT.'order_list.php');
		}
		if($_isPostWarehouse == true)
		{
			include($level.CONT.'warehouse_data.php');
			include($level.CONT.'warehouse_sidebar.php');
			include($level.CONT.'warehouse_list.php');
		}
		if($_isCategories== true)
		{
			include($level.CONT.'categories_data.php');
			include($level.CONT.'categories_sidebar.php');
			include($level.CONT.'categories_list.php');
		}
		include($level.Footer_Path."Footer.php");
		include($level.Footer_Path."layout_footer.php");
	 ?>
</body>
</html>
