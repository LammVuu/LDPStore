<style>
	/* CSS */
	th, td{
		text-align: center;
		vertical-align: middle;
	}
</style>
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Account List</h1>
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
							<form action='<?php echo $level.CONT_ACCOUNT.'account_add.php' ?>' method='GET'>
								<div class="modal-content">
								<!-- Modal Header -->
									<div class="modal-header">
										<h4 class="modal-title" style="text-align: center;"><b>Add new Account</b></h4>
									</div>
									<!-- Modal body -->
									<div class="modal-body">

										<div class='form-group'>
											<label for='username' style="float:left">New Username:</label>
											<input name="username" class='form-control' required>
										</div>

										<div class='form-group'>
											<label for='password' style="float:left">New Password:</label>
											<input type='password' name="password" class='form-control' required>
										</div>

										<div class='form-group'>
											<label for='fullname' style="float:left">Fullname:</label>
											<input name="fullname" class='form-control' required>
										</div>

										<div class='form-group'>
											<label for='phone' style="float:left">Phone number:</label>
											<input name="phone" class='form-control' required>
										</div>

										<div class='form-group'>
											<label for='address' style="float:left">Address:</label>
											<input name="address" class='form-control' required>
										</div>

										<div class='form-group'>
											<label for='email' style="float:left">Email:</label>
											<input name="email" class='form-control' required>
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
							<form action='<?php echo $level.CONT_ACCOUNT.'account_update.php' ?>' method='GET'>
								<div class="modal-content">
								<!-- Modal Header -->
									<div class="modal-header">
										<h4 class="modal-title" style="text-align: center;"><b>Update information</b></h4>
									</div>
									<!-- Modal body -->
									<div class="modal-body">

										<div class='form-group'>
											<label for='username' style="float:left">Username:</label>
											<select class='form-control' name='username'>
												
												<?php 
												foreach($Account_list as $acc)
												{
												?>
												<option value='<?php echo $acc['username']; ?>'><?php echo $acc['username']; ?></option>
												<?php 
												} ?>
											</select>
										</div>

										<div class='form-group'>
											<label for='new_password' style="float:left">New Password</label>
											<input type='password' name="new_password" class='form-control'required>
										</div>

										<div class='form-group'>
											<label for='new_fullname' style="float:left">New Fullname</label>
											<input name="new_fullname" class='form-control' required>
										</div>

										<div class='form-group'>
											<label for='new_phone' style="float:left">New Phone number</label>
											<input name="new_phone" class='form-control' required>
										</div>

										<div class='form-group'>
											<label for='new_address' style="float:left">New Address</label>
											<input name="new_address" class='form-control' required>
										</div>

										<div class='form-group'>
											<label for='new_email' style="float:left">Email:</label>
											<input name="new_email" class='form-control' required>
										</div>

										<div class='form-group'>
											<label for='status' style="float:left">Status:</label>
											<select class='form-control' name='status'>
												<option value='0'>Cancelled</option>
												<option value='1'>Exist</option>
											</select>
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
							<form action='<?php echo $level.CONT_ACCOUNT.'account_delete.php' ?>' method='GET'>
								<div class="modal-content">
								<!-- Modal Header -->
									<div class="modal-header">
										<h4 class="modal-title" style="text-align: center;"><b>Delete the Account</b></h4>
									</div>
									<!-- Modal body -->
									<div class="modal-body">

										<div class='form-group'>
											<div class='row'>
												<div class='col-sm-5'>
													<label for='username' style="float:left">Username:</label>	
												</div>
												<div class='col-sm-7'>
													<select class='form-control' name='username'>
													<!-- select nó sẽ lấy dữ liệu từ VALUE của option -->
													<?php 
													foreach($Account_list as $acc)
													{
													?>
													<option value='<?php echo $acc['username']; ?>'><?php echo $acc['username']; ?></option>
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

	<!-- Account list -->
	<table class='table table-bordered' style='width: 95%; border: 2px solid black; margin-left: 30px;'>
		<thead>
			<tr>
				<th>Username</th>
				<th>Password</th>
				<th>Fullname</th>
				<th>Phone number</th>
				<th>Address</th>
				<th>Email</th>
				<th>Working</th>
				<th>Accoung type</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			foreach($Account_list as $key)
			{ 
				$username = $key['username'];
				$password = $key['password'];
				$fullname = $key['fullname'];
				$phone = $key['sdt'];
				$address = $key['diachi'];
				$email = $key['email'];
				$working = "Offline"; $acctype = "Administrator"; $status = "Cancelled";
				if($key['hoatdong'] == 1)
					$working = "Online";

				if($key['loaiTK'] == 2)
					$acctype = "User";

				if($key['trangthai'] == 1)
					$status = "Exist";
			?>
				<tr>
					<td><?php echo $username;?></td>
					<td><?php echo $password;?></td>
					<td><?php echo $fullname;?></td>
					<td><?php echo $phone; ?></td>
					<td><?php echo $address ?></td>
					<td><?php echo $email;	 ?></td>
					<td><?php echo $working;?></td>
					<td><?php echo $acctype;?></td>
					<td><?php echo $status; ?></td>
				</tr>
			<?php 
			}
			?>
		</tbody>
	</table>
</div>