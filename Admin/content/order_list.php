<style>
	/* CSS */
	th, td{
		text-align: center;
		vertical-align: middle;
	}
</style>
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Order List</h1>
	</div>

</div><!--/.row-->
	
<div class="panel panel-container" style='padding-bottom: 50px'>
	<!-- button group -->
	<div class='btn-group-lg' style='margin: 0px 0px 20px 30px'>

		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#Update">Update</button>
					<!-- The Modal -->
					<div class="modal fade" id="Update">
						<div class="modal-dialog">
							<form action='<?php echo $level.CONT_ORDER.'order_update.php' ?>' method='GET'>
								<div class="modal-content">
								<!-- Modal Header -->
									<div class="modal-header">
										<h4 class="modal-title" style="text-align: center;"><b>Update Information</b></h4>
									</div>
									<!-- Modal body -->
									<div class="modal-body">
										<div class='row'>
											<div class='col-md-6'>
												<div class='form-group'>
													<label for='ordercode'>Oder code</label>
													<select class='form-control' name='ordercode'>
														<?php foreach($Order_List as $key){?>

														<option value='<?php echo $key['madh']; ?>'><?php echo $key['madh']; ?></option>

														<?php } ?>
													</select>
												</div>

												<div class='form-group'>
													<label for='customer'>Customer</label>
													<input name="customer" class='form-control' required>
												</div>

												<div class='form-group'>
													<label for='phone'>Phone number</label>
													<input name="phone" class='form-control' required>
												</div>

												<div class='form-group'>
													<label for='address'>Address</label>
													<input name='address' class='form-control'required>
												</div>

											</div>
											<div class='col-md-6'>
												<div class='form-group'>
													<label for='payments'>Payments</label>
													<select class='form-control' name='payments'>
														<option value='Credit Card'>Credit card</option>
														<option value='Cash'>Cash</option>
													</select>
												</div>

												<div class='form-group'>
													<label for='delivery'>Delivery</label>
													<select class='form-control' name='delivery'>
														<option value='Fast delivery'>Fast delivery</option>
														<option value='Saving delivery'>Saving delivery</option>
													</select>
												</div>

												<div class='form-group' style='padding-top: 11px'>
													<label for='email'>Email</label>
													<input name='email' class='form-control'>
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
		<button type="button" class="btn btn-success" style="background-color:#FFFF33" data-toggle="modal" data-target="#Approved">Approved</button>
					<!-- The Modal -->
					<div class="modal fade" id="Approved">
						<div class="modal-dialog">
							<form action='<?php echo $level.CONT_ORDER.'order_approved.php' ?>' method='GET'>
								<div class="modal-content">
								<!-- Modal Header -->
									<div class="modal-header">
										<h4 class="modal-title" style="text-align: center;"><b>Update Status</b></h4>
									</div>
									<!-- Modal body -->
									<div class="modal-body">
										<div class='row'>
											<div class='col-md-6'>
												<div class='form-group'>
													<label for='ordercode'>Order code</label>
													<select class='form-control' name='ordercode'>
														<?php foreach($Order_List as $key){?>

														<option value='<?php echo $key['madh']; ?>'><?php echo $key['madh']; ?></option>

														<?php } ?>
													</select>
												</div>
												<div class='form-group'>
													<label for='status'>Status</label>
													<select class='form-control' name='status'>
														<option value='Shipping'>Shipping</option>
														<option value='Successful delivery'>Successful delivery</option>
														<option value='Cancelled'>Cancelled</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<!-- Modal footer -->
									<div class="modal-footer">
										<button type='submit' class='btn btn-success' style="background-color:#FFFF33">Approved</button>
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
							<form action='<?php echo $level.CONT_ORDER.'order_delete.php' ?>' method='GET'>
								<div class="modal-content">
								<!-- Modal Header -->
									<div class="modal-header">
										<h4 class="modal-title" style="text-align: center;"><b>Delete Order</b></h4>
									</div>
									<!-- Modal body -->
									<div class="modal-body">
										<div class='form-group'>
											<label for='ordercode'>Order code</label>
											<select class='form-control' name='ordercode'>
												<?php foreach($Order_List as $key){ ?>
													<option value='<?php echo $key['madh']; ?>'><?php echo $key['madh']; ?></option>
												<?php } ?>
											</select>
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
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Filter">Filter</button>
			<div class="modal fade" id="Filter">
			<div class="modal-dialog modal-lg">
				<form action='<?php echo $level.'order.php' ?>' method='GET'>
					<div class="modal-content">
					<!-- Modal Header -->
						<div class="modal-header">
							<h4 class="modal-title" style="text-align: center;"><b>Product Filter</b></h4>
						</div>
						<!-- Modal body -->
						<div class="modal-body">
							<!--form-group: 1 nhóm của form -->
							<div class='form-group'>
								<div class='row'>
									<div class='col-sm-2'>
										<label for='customer' style="float:left">Customer:</label>
									</div>
									<div class='col-lg-4'>
										<input name="customer" class='form-control' placeholder="Enter the customer name">
									</div>
									<div class='col-sm-2'>
										<label for='date' style="float:left">Date:</label>
									</div>
									<div class='col-lg-4'>
										<input name="date" class='form-control' placeholder="Enter the date">
									</div>
								</div>
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
	</div>
	<!-- load danh sách đơn hàng -->
	<table class='table table-bordered' style='width: 95%; border: 2px solid black; margin-left:30px;'>
		<thead>
			<tr>
				<th>Order code</th>
				<th>Account</th>
				<th>Customer</th>
				<th>Phone number</th>
				<th>Address</th>
				<th>Email</th>
				<th>Total</th>
				<th>Payments</th>
				<th>Delivery</th>
				<th>Delivery charges</th>
				<th>Status</th>
				<th>Order details</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			foreach($Order_List as $key)
			{ 
				$ordercode = $key['madh'];

				$OrderDetails = DP::run_query("SELECT * FROM ctdh WHERE madh=?",[$ordercode],2);

				$ngaydat = $key['ngaydat'];
				$thoigian = $key['thoigian'];
				$account = $key['username'];
				$customer = $key['khachhang'];
				$phone = $key['sdt'];
				$address = $key['diachi'];
				$email = $key['email'];
				$total = $key['tongtien'];
				$payments = $key['hinhthucTT'];
				$delivery = $key['hinhthucGH'];
				$ship = $key['ship'];
				$status = $key['trangthai'];
			?>
				<tr>
					<td><?php echo $ordercode;?></td>
					<td><?php echo $account; ?></td>
					<td><?php echo $customer;?></td>
					<td><?php echo $phone; ?></td>
					<td><?php echo $address;?></td>
					<td><?php echo $email;?></td>
					<td><?php echo '$'.$total; ?></td>
					<td><?php echo $payments; ?></td>
					<td><?php echo $delivery; ?></td>
					<td><?php echo '$'.$ship; ?></td>
					<td><?php echo $status; ?></td>
					<td><?php include($level.CONT_ORDER.'order_button_orderdetails.php');?></td>
				</tr>
			<?php 
			}
			?>
		</tbody>
	</table>
</div>