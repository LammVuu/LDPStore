<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Filter">Filter</button>
	<div class="modal fade" id="Filter">
		<div class="modal-dialog">
			<form action='<?php echo $level.'warehouse.php'; ?>' method='GET'>
				<div class="modal-content">
				<!-- Modal Header -->
					<div class="modal-header">
						<h4 class="modal-title" style="text-align: center;"><b>Product Filter</b></h4>
					</div>
					<!-- Modal body -->
					<div class="modal-body">
						<div class='form-group'>
							<label>Supplier</label>
							<select name='supplier' class='form-control'>
								<option></option>
								<option value='Apple VN'>Apple VN</option>
								<option value='Samsung VN'>Samsung VN</option>
								<option value='Xiaomi VN'>Xiaomi VN</option>
								<option value='Huawei VN'>Huawei VN</option>
								<option value='Oppo VN'>Oppo VN</option>
							</select>
						</div>
						<div class='form-group'>
							<label>Price</label>
							<input name="price" class='form-control' placeholder="price">
						</div>
					</div>
					<div class="modal-footer">
						<button type='submit' class='btn btn-primary'>Filter</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Exit</button>
					</div>
				</div>
			</form>
		</div>
	</div>