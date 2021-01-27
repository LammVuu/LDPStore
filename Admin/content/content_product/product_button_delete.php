<!-- Delete Product -->			
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#Delete">Delete</button>
			<!-- The Modal -->
			<div class="modal fade" id="Delete">
				<div class="modal-dialog modal-sm">
					<form action='<?php echo $level.CONT_PRODUCT.'product_delete.php' ?>' method='GET'>
						<div class="modal-content">
						<!-- Modal Header -->
							<div class="modal-header">
								<h4 class="modal-title" style="text-align: center;"><b>Delete the Product</b></h4>
							</div>
							<!-- Modal body -->
							<div class="modal-body">

								<div class='form-group'>
									<div class='row'>
										<div class='col-sm-6'>
											<label for='productcode' style="float:left">Product code:</label>
										</div>
										<div class='col-sm-6'>

											<select class='form-control' name='productcode'>
											<?php 
											foreach($Product_List as $key)
											{
											?>
											<option value='<?php echo $key['masp']; ?>'><?php echo $key['masp']; ?></option>
											<?php 
											}
											?>
											</select>
										</div>
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
