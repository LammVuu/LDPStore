<?php 
    
    $user = DP::run_query("SELECT * FROM taikhoan WHERE hoatdong=1 AND trangthai=1",[],2);

    $name = ''; $email = '';
    if(count($user) > 0)
    {
        $name = $user[0]['fullname'];
        $email = $user[0]['email'];
    }
 ?>
<div role="tabpanel" class="tab-pane fade" id="profile">
    <form action="<?php echo $level.CONT.'addcomment.php' ?>" method="get" >
        <div class="submit-review">
            <p>
                <label for="name">Name</label>
                <input class="form-control" disabled value='<?php echo $name; ?>'>
                <input name="name" hidden='true' value='<?php echo $name; ?>'>
            </p>

            <p>
                <label for="email">Email</label>
                <input class="form-control" type="email" disabled value='<?php echo $email; ?>'>
                <input name="email" hidden='true' value='<?php echo $email; ?>'>
            </p>

            <p><label for="review">Your review</label></p>

            <p>
                <input type="text" name="ngaydang" hidden="true" value="<?php echo date('d/m/Y') ?>">

                <input type="text" name="giodang" hidden="true" value="<?php date_default_timezone_set('Asia/Ho_Chi_Minh'); echo date('H:i'); ?>">

                <input type="text" name="idsanpham" hidden="true" value="<?php echo $ChiTietSanPham[0]['masp'] ?>">
                <input type="textarea" class="form-control" name="content" placeholder="Comment content" rows="3">
            </p>

            <p><button type='submit' class='form-control'>Send</button></p>
        </div>
   </form>
                     </div>
                 </div>
             </div>
        </div>
    </div>
</div>