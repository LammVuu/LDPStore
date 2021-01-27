<style>
	.icon{
		font-size:18px;
	}
</style>
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="<?php echo $level_2.IMG.'img_avatar2.png';?>" style='border-radius:50%; width:50px,height:50px'>
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo $AdminName[0]['fullname']; ?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>

		<ul class="nav menu">
			<li class='active'><a href="index.php"><em class="fa fa-mobile-phone icon">&nbsp;</em>Product List</a></li>
			<li><a href="account.php"><em class="fa fa-user icon">&nbsp;</em>Account List</a></li>
			<li><a href="comment.php"><em class="fa fa-comment icon">&nbsp;</em>Comment List</a></li>
			<li><a href="order.php"><em class="fa fa-truck icon">&nbsp;</em>Order List</a></li>
			<li><a href="mail.php"><em class="fa fa-envelope icon">&nbsp;</em>Mail</a></li>
			<li><a href="warehouse.php"><em class="fa fa-book icon">&nbsp;</em>Warehouse</a></li>
			<li><a href="categories.php"><em class="fa fa-book icon">&nbsp;</em>Categories</a></li>
			<li><a href="<?php echo $level_2.'content/logout.php' ?>"><em class="fa fa-power-off icon">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Product List</li>
			</ol>
		</div><!--/.row-->