<style>
	/* CSS */
	th, td{
		text-align: center;
		vertical-align: middle;
	}
</style>
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Categories List</h1>
	</div>

</div><!--/.row-->
	
<div class="panel panel-container">
	<!-- button group -->
	<div class='btn-group-lg' style='margin: 0px 0px 20px 30px'>

		<!-- add new account -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Add">Add</button>
					<!-- The Modal -->
					<div class="modal fade" id="Add">
						<div class="modal-dialog">
							<form action='<?php echo $level.CONT_CATE.'categories_add.php' ?>' method='GET'>
								<div class="modal-content">
								<!-- Modal Header -->
									<div class="modal-header">
										<h4 class="modal-title" style="text-align: center;"><b>Add new Categories</b></h4>
									</div>
									<!-- Modal body -->
									<div class="modal-body">

										<div class='form-group'>
											<label for='username' style="float:left">ID:</label>
											<input name="id" class='form-control' required>
										</div>

										<div class='form-group'>
											<label for='username' style="float:left">Name:</label>
											<input type='name' name="name" class='form-control' required>
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
		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#Update">Update</button>
					<!-- The Modal -->
					<div class="modal fade" id="Update">
						<div class="modal-dialog">
							<form action='<?php echo $level.CONT_CATE.'categories_update.php' ?>' method='GET'>
								<div class="modal-content">
								<!-- Modal Header -->
									<div class="modal-header">
										<h4 class="modal-title" style="text-align: center;"><b>Update information</b></h4>
									</div>
									<!-- Modal body -->
									<div class="modal-body">

										<div class='form-group'>
											<label for='username' style="float:left">ID:</label>
											<select class='form-control' name='id' readonly>
												
												<?php 
												foreach($Categories_List as $ct)
												{
												?>
												<option value='<?php echo $ct['id']; ?>'><?php echo $ct['id']; ?></option>
												<?php 
												} ?>
											</select>
										</div>


										<div class='form-group'>
											<label for='new_password' style="float:left">Name</label>
											<input type='text' name="name" class='form-control'required>
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
		<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#Delete">Delete</button>
					<!-- The Modal -->
					<div class="modal fade" id="Delete">
						<div class="modal-dialog modal-sm">
							<form action='<?php echo $level.CONT_CATE.'categories_delete.php' ?>' method='GET'>
								<div class="modal-content">
								<!-- Modal Header -->
									<div class="modal-header">
										<h4 class="modal-title" style="text-align: center;"><b>Delete the Categories</b></h4>
									</div>
									<!-- Modal body -->
									<div class="modal-body">

										<div class='form-group'>
											<div class='row'>
												<div class='col-sm-5'>
													<label for='username' style="float:left">ID:</label>	
												</div>
												<div class='col-sm-7'>
													<select class='form-control' name='id'>
														
												
													<?php 
												foreach($Categories_List as $ct)
												{
												?>
												<option value='<?php echo $ct['id']; ?>'><?php echo $ct['id']; ?></option>
												<?php 
												} ?>

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
	</div>



	<!-- Load danh sách chuyen muc -->
	<table class="table table-bordered" style="width: 90%; border: 2px solid black; margin-left: 50px;">
	    <thead>
		    <tr>
		    	<th>Id</th>
		        <th>Name</th>
		      
		        
		    </tr>
		</thead>
		<tbody>
			<?php 
			foreach($Categories_List as $key)
			{	
				$id=$key['id'];
				$name = $key['tenchuyenmuc'];
				
			
			?>

			<tr>
				<td><?php echo $id; ?></td>
				<td><?php echo $name; ?></td>
			
			</tr>
			<?php 
			}
			?>
		</tbody>
	</table>
</div>