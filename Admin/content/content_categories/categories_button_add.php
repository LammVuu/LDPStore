<!-- Add new Account -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Add">Add</button>
<!-- The Modal -->
<div class="modal fade" id="Add">
	<div class="modal-dialog modal-lg">
		<form action='<?php echo $level.CONT_PRODUCT.'product_add.php' ?>' method='GET'>
			<div class="modal-content">
			<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title" style="text-align: center;"><b>Add new Categories</b></h4>
				</div>
				<!-- Modal body -->
				<div class="modal-body">
					<div class='form-group'>
						<div class='row'>
							<div class='col-sm-2'>
								<label for='productcode' style="float:left">Id categories(CMx)</label>
							</div>
							<div class='col-lg-4'>
								<input name="id" class='form-control' required>
							</div>
							
							<div class='col-sm-2'>
								<label for='productname' style="float:left"> Name:</label>
							</div>
							<div class='col-lg-4'>
								<input name="name" class='form-control' required>
							</div>
							
							<div class='col-sm-2'>
								<label for='productname' style="float:left"> Status:</label>
							</div>
							<div class='col-lg-4'>
								<select name="status">
									<option value="0">0</option>
									<option value="1">1</option>
								</select>
							</div>
						</div>
					</div>
					
					
				<!-- Modal footer -->
				<div class="modal-footer">
					<button type='submit' class='btn btn-primary'>Add</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">Exit</button>
				</div>
			</div>
		</form>
	</div>
</div>