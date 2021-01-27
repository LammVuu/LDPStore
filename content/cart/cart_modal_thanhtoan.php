<!-- The Modal -->
<div class="modal fade" id="thanhtoan">
    <div class="modal-dialog" style='width:1330px'>
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h2 class="modal-title" style="text-align: center;"><b>Payment</b></h2>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form action='<?php echo $level.CONT_CART.'cart_action.php'; ?>' method='GET'>
                	   <!-- Nhập thông tin -->
                    <div class='row'>
                    	<div class='col-md-2'>
        								<div class='thongtin'>
        									<h3 style='padding-top:60px;color:dodgerblue'>Fill in The Information</h3>
        								</div>
                    	</div>

                    	<div class='col-md-10'>
                          <table class='table-bordered'>
                              <thead>
                                  <th>Customer</th>
                                  <th>Phone Number</th>
                                  <th>Address</th>
                                  <th>Email</th>
                                  <th>Total</th>
                                  <th>See Details</th>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                      <span><b><?php echo $fullname; ?></b></span>
                                      <input name="khachhang" hidden='true' value='<?php echo $fullname; ?>'>

                                      <input name="ngaydat" hidden="true" value="<?php echo date('d/m/Y') ?>">

                                      <input name="thoigian" hidden="true" value="<?php date_default_timezone_set('Asia/Ho_Chi_Minh'); echo date('H:i'); ?>">
                                  </td>

                                  <td>
                                      <input name='sdt' class='form-control' required>
                                  </td>

                                  <td>
                                      <input name='diachi' class='form-control' required>
                                  </td>

                                  <td>
                                  	<input name="email" class='form-control' required>
                                  </td> 

                                  <td>
                                      <span><b><?php echo $TongTien; ?></b></span>
                                      <input name="tongtien" hidden="true" value='<?php echo $TongTien; ?>'>
                                  </td>

                                  <td>
                                  	<?php include('cart_CTSP.php'); ?>
                                  </td>
                              </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>


                  <!-- Chọn hình thức -->
                  <div class='row'>
                  	<div class='col-md-2'>
            					<div class='hinhthuc'>
            						<h3 style='padding-top:50px;color:dodgerblue'>Choose the form of Payment</h3>
            					</div>
                  	</div>
                  	<div class='col-md-10'>
                     		<div class='col-md-7'>
                     			<div class='form-group'>
                     				<label for='hinhthucTT' style='float:left'>Form of Payment</label>
                       					<select onchange="HinhThucTT(this)" class='form-control' name="hinhthucTT" required>
                         						<option>Choose</option>
                         						<option value='Credit Card'>Credit Card</option>
                         						<option value='Cash'>Cash</option>
                       					</select>
                     			</div>

                     			<div class='form-group'>
                         			<div class='row'>
                         				<div class='col-sm-10'>
                         					<label for='hinhthucGH' style='float:left'>Form of Delivery</label>
                     						<select onchange="HinhThucGH(this)" class='form-control' name='hinhthucGH' required>
	                       					<option>Choose</option>
	                       					<option value='Fast delivery'>Fast delivery (10$ ship)</option>
	                       					<option value='Saving delivery'>Saving delivery (5$ ship)</option>
	                       				</select>
                             			</div>

                                 		<div class='col-sm-2'>
                                 			<button type='button' class='btn btn-success' style='margin-top: 22px;float:right;width:100px' data-toggle='collapse' data-target='#TT'>Complete</button>
                                 		</div>
                                 	</div>
                             	</div>
                     		</div>
                     		<div class='col-md-5'>
                     			<center>
                     				<div id='TT' class='collapse'>
                             			<table class='table-bordered' style='border: 2px solid red;'>
                             				<tbody>
                             					<tr>
                             						<td class='td_left'>Total</td>

                             						<td class='td_right'><?php echo $TongTien; ?></td>
                             					</tr>

                             					<tr>
                             						<td class='td_left'>Ship fee</td>

                             						<td class='td_right'><span id='result_GH_Ship'></span></td>
                             					</tr>

                             					<tr>
                             						<td class='td_left'>Payment</td>

                             						<td class='td_right'><span id='result_TT'></span></td>
                             					</tr>

                             					<tr>
                             						<td class='td_left'>Delivery</td>

                             						<td class='td_right'><span id='result_GH'></span></td>
                             					</tr> 

                             					<tr>
                             						<td colspan="2">
                             							<button type="submit" name='ThanhToan' class="btn btn-primary" data-toggle="modal" data-target="#success" style='width:120px;height:42px;font-size:14px;'>Payment</button>
                             						</td>
                             					</tr>             		
                             				</tbody>
                             			</table>
                         		</center>
                     		</div>
                      </div>
                    </div>
                      </form>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
            </div>
        </div>  
      </div>
            
