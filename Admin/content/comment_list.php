<?php 
	//đếm có bao nhiêu bình luận và tăng tự động
	$count = count($Comment_List) + 1;
 ?>
<style>
	/* CSS */
	th, td{
		text-align: center;
		vertical-align: middle;
	}

	img{
		width: 100px;
		height: 100px;
	}
</style>
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Comment List</h1>
	</div>

</div><!--/.row-->
	
<div class="panel panel-container">
	<!-- button group -->
	<div class='btn-group-lg' style='margin: 0px 0px 20px 25px'>

	
		<!-- comment update -->
		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#Update">Approve</button>
			<!-- The Modal -->
			<div class="modal fade" id="Update">
				<div class="modal-dialog modal-lg">
					<form action='<?php echo $level.CONT_COMMENT.'comment_update.php' ?>' method='GET'>
						<div class="modal-content">
						<!-- Modal Header -->
							<div class="modal-header">
								<h4 class="modal-title" style="text-align: center;"><b>Approve comments</b></h4>
							</div>
							<!-- Modal body -->
							<div class="modal-body">
								<div class='form-group'>
									<div class='row'>
										<div class='col-sm-2'>
											<label for='masp' style="float:left">No.</label>
										</div>
										<div class='col-sm-4'>

											<select class='form-control' name='no'>
												<?php 
												foreach($Comment_List as $cmt)
												{
												?>
												<option value='<?php echo $cmt['STT'];?>'><?php echo $cmt['STT'];?></option>
												<?php 
												}
												?>
											</select>
										</div>
										
									</div>
								</div>
								
								<div class='form-group'>
									<div class='row'>
										<div class='col-sm-2'>
											<label for='status' style="float:left">status:</label>
										</div>
										<div class='col-sm-4'>
											<select class='form-control' name='status'>
												<option value='Approved'>Approve</option>
												<option value='Delete'>Delete</option>
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

		
</div>



	<!-- Comment List -->
	<table class="table table-bordered" style="width: 95%; border: 2px solid black; margin-left: 25px;">
	    <thead>
		    <tr>
		    	<th>No.</th>
		        <th>Product code</th>
		        <th>Name</th>
		        <th>Email</th>
		        <th>Content</th>
				<th>Date</th>
				<th>Time</th>
				<th>Status</th>
				<th>Function</TH>
		    </tr>
		</thead>
		<tbody>
			<?php 
			foreach($Comment_List as $key)
			{	
				$no = $key['STT'];
				$productcode = $key['masp'];
				$name = $key['name'];
				$email = $key['email'];
				$content =$key['noidung'];
				$date =$key['ngaydang'];
				$time =$key['giodang'];

				$status = $key['trangthai'];
				if($status == '0')
					$status = 'Đã xóa';
				elseif($status =='1')
					$status = 'Duyệt';
				$function="Delete";
			?>

			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $productcode; ?></td>
				<td><?php echo $name; ?></td>
				<td><?php echo $email; ?></td>
				<td><?php echo $content; ?></td>
				<td><?php echo $date; ?></td>
				<td><?php echo $time; ?></td>
				<td><?php echo $status; ?></td>
				<td>
					<form action='<?php  echo $level.CONT_COMMENT.'comment_delete.php' ?>' method='GET'>
						<input type="text" name="no" hidden="true" value=" <?php echo $no; ?>" name=""><button type="submit" class='btn btn-primary'><?php echo $function; ?></button>
					</form>
				</td>
			</tr>
			<?php 
			}
			?>
		</tbody>
	</table>
</div>