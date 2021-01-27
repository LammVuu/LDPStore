<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Import">Import</button>
<!-- The Modal -->
<div class="modal fade" id="Import">
	<div class="modal-dialog modal-lg">
		<form action='<?php echo $level.CONT_WAREHOUSE.'warehouse_import.php' ?>' method='GET'>
			<div class="modal-content">
			<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title" style="text-align: center;"><b>Import</b></h4>
				</div>
				<!-- Modal body -->
				<div class="modal-body">
					<div class='row'>
						<div class='col-md-6'>
							<div class='form-group'>
								<label>Product code</label>
								<input class='form-control' disabled value='<?php echo $count ?>'>
								<input name="productcode" hidden='true' value='<?php echo $count; ?>'>
							</div>
							<div class='form-group'>
								<label>Product's name</label>
								<input name="productname" class='form-control' required>
							</div>
							<div class='form-group'>
								<label>Avatar</label>
								<input type="file" name="avatar" class='form-control' required>
							</div>
						</div>
						<div class='col-md-6'>
							<div class='form-group'>
								<label>Price</label>
								<input name='price' class='form-control' required>
							</div>
							<div class='form-group'>
								<label>Import</label>
								<input name='import' class='form-control' required>
							</div>
							<div class='form-group'>
								<label>Supplier</label>
								<select name='supplier' class='form-control'>
									<option value='Apple VN'>Apple VN</option>
									<option value='Samsung VN'>Samsung VN</option>
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
					<button type='submit' class='btn btn-primary'>Import</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">Exit</button>
				</div>
			</div>
		</form>
	</div>
</div>