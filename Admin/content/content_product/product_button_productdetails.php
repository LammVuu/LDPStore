<?php 
	$id = $productcode;
 ?>
 <style type="text/css">
 	.avatar{
 		width:300px;
 		height:300px;
 		margin-bottom: 20px;
 	}
 	.otherimg{
 		width:100px;
 		height:100px;
 		margin-right: 5px;
 	}
 	input, textarea{
 		float:right;
 	}
 </style>
<!-- Product details -->			
<button type="button" class="btn btn-info" data-toggle="modal" data-target="<?php echo '#'.$id; ?>">See</button>
	<!-- The Modal -->
	<div class="modal fade" id="<?php echo $id; ?>">
		<div class="modal-dialog" style='width:650px'>
			<div class="modal-content">
			<!-- Modal Header -->
				<div class="modal-header">
					<h3 class="modal-title" style="text-align: center;"><b>Product details</b></h3>
				</div>
				<!-- Modal body -->
				<div class="modal-body">
					<div class='row'>
						<div class='col-sm-5'>
							<img class='avatar' src="<?php echo $level_2.IMG.$key['anhdaidien']; ?>">
							<img class='otherimg' src="<?php echo $level_2.IMG.$key['hinhanhkhac1']; ?>">
							<img class='otherimg' src="<?php echo $level_2.IMG.$key['hinhanhkhac2']; ?>">
						</div>
						<div class='col-sm-7'>
							<form style='margin-top: 40px'>
								<div class='form-group'>
									<label>Product's name</label>
									<input disabled value='<?php echo $key['tensp']; ?>'>
								</div>

								<div class='form-group'>
									<label>Categories</label>
									<input disabled value='<?php echo $key['chuyenmuc']; ?>'>
								</div>

								<div class='form-group'>
									<label>Old price</label>
									<input disabled value='<?php echo $key['giacu']; ?>'>
								</div>

								<div class='form-group'>
									<label>New price</label>									
									<input disabled value='<?php echo $key['giamoi']; ?>'>
								</div>

								<div class='form-group'>
									<label>Description</label>
									<textarea disabled style='width:175px;height:150px'><?php echo $key['mota']; ?></textarea>
								</div>

								
							</form>
						</div>
					</div>
				</div>
				<!-- Modal footer -->
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Exit</button>
				</div>
			</div>
		</div>
	</div>
