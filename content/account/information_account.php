<h2 style="text-align: center">
ACCOUNT INFORMATION
</h2>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<div>
					<center>
						<i style="color:red">
							<?php
								if(isset($_GET['status']))
									echo "Update successful!";
							?>
						</i>
					</center>
				</div>
				<form class="login100-form validate-form flex-sb flex-w" action="<?php echo $level.CONT.'update_account.php' ?>" method="get"> 
					
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Username
						</span>
						
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100"  type="text" readonly name="username" id="username" value="<?php echo $information[0]['username'] ?>">
						<span class="focus-input100"></span>
					</div>
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Fullname
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="fullname" id="fullname" value="<?php echo $information[0]['fullname'] ?>" autofocus required>
						<span class="focus-input100"></span>
					</div>

					
					<div>	
					</div>
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Phone Number
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="phone" id="phone" value="<?php echo $information[0]['sdt'] ?>" pattern="[0-9]{10}" title="Số điện thoại phải là 10 chữ số!"required>
						<span class="focus-input100"></span>
					</div>
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Address
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="address" id="address" value="<?php echo $information[0]['diachi'] ?>" required>
						<span class="focus-input100"></span>
					</div>
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Email
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="email" id="email" value="<?php echo $information[0]['email'] ?>" >
						<span class="focus-input100" required></span>
					</div>
					<div class="container-login100-form-btn m-t-17">
						<button type="submit" class="btn btn-success" name="update">
							Update
						</button>
						<button type='button' class='btn btn-danger' style='height:42px;width:80px;margin-left:5px'><a href="<?php echo $level.'index.php'; ?>" style='text-decoration: none; color:white'>Back</a></button>
					</div>
				
					
				</form>
			</div>
		</div>
		</div>