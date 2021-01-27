
<?php 
	//đếm có bao nhiêu bình luận và tăng tự động
	include($level.CONT."mail_data1.php");
	$count = count($mail);
 ?>
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="<?php echo $level.'index.php'; ?>"><span>LDP</span>Admin</a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown">
						<a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
							<em class="fa fa-envelope"></em>
								<span class="label label-danger"><?php echo $count ?></span>
						</a>

						<ul class="dropdown-menu dropdown-messages">
							<?php
							foreach ($mail as $key) {
							?>
							<li>
								<div>
									<img alt="image" class="img-circle" style="width:40px; height:40px" src="http://placehold.it/40/30a5ff/fff">
									<div class="message-body">
										<p>
											<a href="mail.php">
												<strong><?php echo $key['name'] ?></strong> sent you a mail.
											</a>
										</p>
										<small class="text-muted"><?php echo $key['giogui']; ?> - <?php echo $key['ngaygui']; ?></small>
									</div>
							</li>
							<li class="divider"></li>
							<?php } ?>
							<li>
								<div class="all-button"><a href="mail.php">
									<em class="fa fa-inbox"></em> <strong>All Messages</strong>
								</a></div>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>