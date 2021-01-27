<?php 
	$check=false;
	if(count($DS_donhang) > 0)
		$check=true;
 ?>
<style>
	th{
		text-align: center;
		padding:10px;
	}
	td{
		text-align: center;
		padding:10px;
	}
	.ThongBao{
		border: 2px solid black;
		border-radius: 5px;
		margin:100px 0px 100px 0px;
		padding:50px;
		text-align:center;
	}
</style>

<div class='container'>
	<?php if($check==true){ ?>
	<table class='table-bordered' style='margin:100px 0px 100px 0px;'>
		<thead>
			<th>Code orders</th>
			<th>Date</th>
			<th>Time</th>
			<th>Customer</th>
			<th>Phone number</th>
			<th>Address</th>
			<th>Total</th>
			<th>Form of Payment</th>
			<th>Form of Delivery</th>
			<th>Delivery charges</th>
			<th>Status</th>
			<th>See details</th>
		</thead>
		<tbody>
			<?php foreach($DS_donhang as $dh){ ?>
			<tr>
				<?php
					$madh = $dh['madh']; 
					$DS_CTDH = DP::run_query("SELECT * FROM ctdh WHERE madh=?",[$madh],2);
					$id = $DS_CTDH[0]['madh'];
				?>

				<td><?php echo $madh; ?></td>
				<td><?php echo $dh['ngaydat']; ?></td>
				<td><?php echo $dh['thoigian']; ?></td>
				<td><?php echo $fullname; ?></td>
				<td><?php echo $dh['sdt']; ?></td>
				<td><?php echo $dh['diachi']; ?></td>
				<td><?php echo '$'.$dh['tongtien']; ?></td>
				<td><?php echo $dh['hinhthucTT']; ?></td>
				<td><?php echo $dh['hinhthucGH']; ?></td>
				<td><?php echo '$'.$dh['ship']; ?></td>
				<td><?php echo $dh['trangthai']; ?></td>

				<td>
					<button type="button" class="btn btn-info" data-toggle="modal" data-target="<?php echo '#'.$id; ?>" style='width:120px;height:42px;font-size:14px;'>View</button>
                	<center>
	                    <!-- The Modal -->
	                    <div class="modal fade" id="<?php echo $id; ?>">
	                        <div class="modal-dialog">
	                            <div class="modal-content">
	                            <!-- Modal Header -->
	                                <div class="modal-header">
	                                    <h3 class="modal-title" style="text-align: center;"><b>Invoice details</b></h3>
	                                </div>

	                                <!-- Modal body -->
	                                <div class="modal-body">
	                                    <table class='table-bordered'>
	                                        <thead>
	                                            <tr>
	                                                <th class="product-thumbnail">Picture</th>
	                                                <th class="product-name">Product</th>
	                                                <th class="product-price">Price</th>
	                                                <th class="product-quantity">Number</th>
	                                                <th class="product-price">Total</th>
	                                            </tr>
	                                        </thead>
	                                        <tbody>
	                                            <?php  
	                                            foreach($DS_CTDH as $post){
	                                            ?>
	                                            <tr class="cart_item">

	                                                <!-- hình ảnh -->
	                                                <td class="product-thumbnail">
	                                                    <img width="145" height="145" src=<?php echo $level.IMG.$post['hinhanh'];?>>
	                                                </td>

	                                                <!--  tên sản phẩm -->
	                                                <td class="product-name">
	                                                    <?php echo $post['tensp'];?>
	                                                </td>

	                                                <!-- giá bán -->
	                                                <td class="product-subtotal">
	                                                    <span class="amount"><?php echo $post['giaban'];?></span> 
	                                                </td>

	                                                <!-- số lượng -->
	                                                <td class="product-quantity">
	                                                    <div class="quantity buttons_added">
	                                                        <span><?php echo $post['soluong']; ?></span>
	                                                    </div>
	                                                </td> 

	                                                <!-- thành tiền -->
	                                                <td class="product-subtotal">
	                                                    <span class="amount"><?php echo $post['thanhtien'];?></span>
	                                                </td>
	                                            </tr>
	                                        <?php } ?>
	                                        </tbody>
	                                    </table>
	                                </div>

				                </div>
				            </div>
			        	</div>
		        	</center>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>

	<?php } 

	else {
		if($str == 'Log In') { ?>

		<h3 class='ThongBao'>Please login to check orders. <a href="<?php echo $level.'login.php'; ?>" style='text-decoration:none; font-size:22px'>Login</a></h3>

	<?php } else { ?>

		<h3 class='ThongBao'>You have no orders yet. <a href="<?php echo $level.PAGE.'shop.php'; ?>" style='text-decoration:none; font-size:22px'>Buy now</a></h3>

	<?php }
		} ?>
</div>