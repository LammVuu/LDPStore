<style>
	/* CSS */
	th, td{
		text-align: center;
		vertical-align: middle;
	}
</style>
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Warehouse</h1>
	</div>

</div><!--/.row-->
	
<div class="panel panel-container">
	<!-- nhóm button -->
	<div class='btn-group-lg' style='margin: 0px 0px 20px 50px'>
		<?php 
			include($level.CONT_WAREHOUSE.'warehouse_button_import.php');
			include($level.CONT_WAREHOUSE.'warehouse_button_update.php');
			include($level.CONT_WAREHOUSE.'warehouse_button_delete.php');
			include($level.CONT_WAREHOUSE.'warehouse_button_filter.php');
		 ?>
	</div>

	<!-- Warehouse -->
	<table class="table table-bordered" style="width: 90%; border: 2px solid black; margin-left: 50px;">
	    <thead>
		    <tr>
		    	<th>Product code</th>
		        <th>Avatar</th>
		        <th>Product's name</th>
		        <th>Price</th>
				<th>Import</th>
				<th>Inventory</th>
				<th>Supplier</th>
				<th>Status</th>
		    </tr>
		</thead>
		<tbody>
			<?php 
			foreach($Warehouse as $k)
			{	
				$productcode = $k['masp'];
				$avatar = $k['hinhanh'];
				$productname = $k['tensp'];
				$price = $k['giaban'];
				$imp = $k['soluong_nhap'];
				$inv = $k['soluong_ton'];
				$supp = $k['nhacungcap'];
				$status = $k['trangthai'];
			?>

			<tr>
				<td><?php echo $productcode; ?></td>
				<td>
					<button type="button" class="btn btn-info" data-toggle="modal" data-target="<?php echo '#'.$productcode; ?>">See</button>
				</td>
				<td><?php echo $productname; ?></td>
				<td><?php echo $price; ?></td>
				<td><?php echo $imp; ?></td>
				<td><?php echo $inv; ?></td>
				<td><?php echo $supp; ?></td>
				<td><?php echo $status; ?></td>
			</tr>

			<!-- The Modal -->
			<div class="modal fade" id="<?php echo $productcode; ?>">
				<div class="modal-dialog">
					<div class="modal-content">
					<!-- Modal Header -->
						<center>
							<img src="<?php echo $level_2.IMG.$avatar; ?>" style='width:60%;height:60%;padding:50px 0px 50px 0px'>
						</center>
					</div>
				</div>
			</div>

			<?php 
			}
			?>
		</tbody>
	</table>
</div>