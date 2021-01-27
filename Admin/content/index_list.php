<?php 
	//auto increase product code
	$count = count($Product_List) + 1;
 ?>
<style>
	/* CSS */
	th{
		text-align: center;
	}
	td{
		text-align: center;
 	}

	img{
		width: 100px;
		height: 100px;
	}
</style>
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Product List</h1>
	</div>

</div><!--/.row-->
	
<div class="panel panel-container">
	<!-- nhóm button -->
	<div class='btn-group-lg' style='margin: 0px 0px 20px 50px'>
		<?php 
			include('content_product/product_button_add.php');
			include('content_product/product_button_update.php');
			include('content_product/product_button_delete.php');
			include('content_product/product_button_filter.php');
		 ?>
	</div>



	<!-- Product List -->
	<table class="table table-bordered" style="width: 90%; border: 2px solid black; margin-left: 50px;">
	    <thead>
		    <tr>
		        <th>Product list</th>
		        <th>Product's name</th>
		        <th>Price</th>
				<th>Status</th>
				<th>See details</th>
		    </tr>
		</thead>
		<tbody>
			<?php 
			foreach($Product_List as $key)
			{	
				$productcode = $key['masp'];
				$productname = $key['tensp'];
				$price = "";
				if(isset($key['giamoi']))
					$price ="$ ".$key['giamoi'];
				$status = "Stop business";
				if($key['trangthai'] == 1)
					$status = "New product";
			?>
			<tr>
				<td><?php echo $productcode; ?></td>
				<td><?php echo $productname; ?></td>
				<td><?php echo $price; ?></td>
				<td><?php echo $status; ?></td>
				<td><?php include('content_product/product_button_productdetails.php'); ?></td>
			</tr>
			<?php 
			}
			?>
		</tbody>
	</table>
</div>