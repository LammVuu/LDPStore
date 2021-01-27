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
		<h1 class="page-header">Mail</h1>
	</div>

</div><!--/.row-->
	
<div class="panel panel-container">
	<!-- nhóm button -->
	<div class='btn-group-lg' style='margin: 0px 0px 20px 50px'>
	</div>



	<!-- Load danh sách bình luận -->
	<table class="table table-bordered" style="width: 90%; border: 2px solid black; margin-left: 50px;">
	    <thead>
		    <tr>
		    	<th>No.</th>
		        <th>Name</th>
		        <th>Email</th>
		        <th>Content</th>
				<th>Date</th>
				<th>Time</th>
		    </tr>
		</thead>
		<tbody>
			<?php 
			foreach($Mail_List as $key)
			{	
				$no=$key['STT'];
				$name = $key['name'];
				$email = $key['email'];
				$content =$key['noidung'];
				$date =$key['ngaygui'];
				$time =$key['giogui'];
			?>

			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $name; ?></td>
				<td><?php echo $email; ?></td>
				<td><?php echo $content; ?></td>
				<td><?php echo $date; ?></td>
				<td><?php echo $time; ?></td>
			</tr>
			<?php 
			}
			?>
		</tbody>
	</table>
</div>