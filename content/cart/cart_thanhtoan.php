<style>
	.thongtin{
		border-right: 3px solid dodgerblue;
		height: 150px;
	}
	.hinhthuc{
		border-right: 3px solid dodgerblue;
		height: 135px;
	}
	.row{
		margin-bottom: 50px;
	}
	.td_left{

		text-transform:uppercase;
		font-weight:bold;
	}
	.td_right{

		font-weight:bold;
	}
  .success{
    margin-top:5px;
    border-radius: 5px;
    float:left;
    text-decoration: none;
    font-size: 16px;
    border:none;
    display: inline-block;
    background-color:green;
    color:white;
    cursor: pointer;
    -webkit-transition-duration: 0.3s; /* Safari */
    transition-duration: 0.3s;
  }
  .DangNhap{
    padding:10px;
    background-color: dodgerblue;
    color:white;
    text-decoration: none;
    font-size: 16px;
    border-radius: 8px;
  }
  a.DangNhap:hover{
    color:white;
    background-color: black
  }
</style>

<?php 
  //kiểm tra đăng nhập mới được mua hàng
  $id_cart = '#thanhtoan';
  if($str == 'Log In')
    $id_cart = '#message_cart';


 ?>
<button type="button" class="btn btn-success" data-toggle="modal" data-target="<?php echo $id_cart; ?>" style='width:120px;height:42px;font-size:14px;width:100%'>PAYMENT</button>

<?php include($level.CONT_CART.'cart_modal_thanhtoan.php'); ?>


<div class="modal fade" id="message_cart">
  <div class="modal-dialog">
      <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
          <span class='fa fa-info-circle' style='font-size: 100px;color:dodgerblue;margin-bottom: 10px'></span>
          <h3>You need to login to payment.</h3>
      </div>

      <div class='modal-footer'>
        <center>
          <a href="<?php echo $level.'login.php'; ?>" class='DangNhap'>Login Now</a>
        </center>
      </div>
      </div>
  </div>
</div>



<script language='javascript'>
	function HinhThucTT(obj){
		var option = obj.children;
		var str = '';
		for(var i=1; i < option.length; i++){
			if(option[i].selected){
					str += option[i].value;
			}
		}
		document.getElementById('result_TT').innerHTML = str;
	}

	function HinhThucGH(obj){
		var option = obj.children;
		var str = ''; var ship = '';
		for(var i=1; i < option.length; i++){
			if(option[i].selected){
				str += option[i].value;
				if(option[i].value=='Fast delivery')
					ship = '10$';
				else if(option[i].value=='Saving delivery')
					ship = '5$';
			}
		}
		document.getElementById('result_GH').innerHTML = str;
		document.getElementById('result_GH_Ship').innerHTML = ship;
	}
</script>