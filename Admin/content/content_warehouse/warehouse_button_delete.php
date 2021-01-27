<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#Delete">Delete</button>
<!-- The Modal -->
<div class="modal fade" id="Delete">
	<div class="modal-dialog modal-sm">
		<form action='<?php echo $level.CONT_WAREHOUSE.'warehouse_delete.php' ?>' method='GET'>
			<div class="modal-content">
			<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title" style="text-align: center;"><b>Delete Warehouse</b></h4>
				</div>
				<!-- Modal body -->
				<div class="modal-body">
					<div class='row'>
						<div class='col-sm-4'>
							<label>Product code</label>
						</div>
						<div class='col-sm-8'>
							<select name='productcode' class='form-control'>
							<?php foreach($Warehouse as $k){ ?>
								<option value='<?php echo $k['masp']; ?>'><?php echo $k['masp']; ?>
								</option>
							<?php } ?>
						</select>
						</div>
					</div>
				</div>
				<!-- Modal footer -->
				<div class="modal-footer">
					<button type='submit' class='btn btn-warning'>Delete</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">Exit</button>
				</div>
			</div>
		</form>
	</div>
</div>