<button type="button" class="btn btn-success" data-toggle="modal" data-target="#Update">Update</button>
<!-- The Modal -->
<div class="modal fade" id="Update">
	<div class="modal-dialog modal-lg">
		<form action='<?php echo $level.CONT_WAREHOUSE.'warehouse_update.php' ?>' method='GET'>
			<div class="modal-content">
			<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title" style="text-align: center;"><b>Update Warehouse</b></h4>
				</div>
				<!-- Modal body -->
				<div class="modal-body">
					<div class='row'>
						<div class='col-md-6'>
							<div class='form-group'>
								<label>Product code</label>
								<select name='productcode' class='form-control'>
									<?php foreach($Warehouse as $k){ ?>
										<option value='<?php echo $k['masp']; ?>'><?php echo $k['masp']; ?>
										</option>
									<?php } ?>
								</select>
							</div>
							<div class='form-group'>
								<label>Product's name</label>
								<input name="productname" class='form-control' required>
							</div>
							<div class='form-group'>
								<label>Avatar</label>
								<input type="file" name="avatar" class='form-control' required>
							</div>
							<div class='form-group'>
								<label>Price</label>
								<input name='price' class='form-control' required>
							</div>
						</div>
						<div class='col-md-6'>
							<div class='form-group'>
								<label>Import</label>
								<input name='import' class='form-control' required>
							</div>
							<div class='form-group'>
								<label>Inventory</label>
								<input name='inventory' class='form-control' required>
							</div>
							<div class='form-group'>
								<label>Supplier</label>
								<select name='supplier' class='form-control'>
									<option value='Apple VN'>Apple VN</option>
									<option value='Samsung VN'>Sansung VN</option>
									<option value='Xiaomi VN'>Xiaomi VN</option>
									<option value='Huawei VN'>Huawei VN</option>
									<option value='Oppo VN'>Oppo VN</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<!-- Modal footer -->
				<div class="modal-footer">
					<button type='submit' class='btn btn-success'>Update</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">Exit</button>
				</div>
			</div>
		</form>
	</div>
</div>