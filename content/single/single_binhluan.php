<style>
    .binhluan{
        border-bottom: 3px solid DodgerBlue;
    }
    .avatar{
        margin: 25px 20px 25px 0px;
        border: 1px solid white;
        width: 100px;
        height: 100px;
    }
    .name{
        text-align: center;
        font-size: 14px;
        margin-top: 2px;
        font-weight: bold;
    }
    .border{
        border: 1px solid gray;
        margin: 25px 0px 10px 0px;
        width: 100%;
        height: 70px;
    }
    h1{
        color:DodgerBlue;
    }
    .hinhanh{
        width: 100px;
        height:80px;
    }
</style>
<div class='container'>
    <div class="binhluan">
        <h1>Reviews</h1>    
    </div>
    
    <div>
        <?php
        foreach ($dsbinhluan as $binhluan) 
        {
        ?>
        <div class='row'>
            <div class='col-md-2'>
                <div class='card avatar'>
                    <div class='card-header'>
                        <img src="<?php echo $level.IMG.'img_avatar2.png'?>" class='rounded-circle hinhanh'>    
                    </div>
                    <div class='card-footer name'>
                        <?php echo $binhluan['name']; ?>
                    </div>
                </div>
            </div>
            <div class='col-md-10'>
                <div class='border'>
                    <h4 style="padding:10px"><?php echo $binhluan['noidung']; ?></h4>
                </div>
                <span>Time: <?php echo $binhluan['giodang'].' - '.$binhluan['ngaydang']; ?></span>
            </div>
        </div>
        <?php 
        }
        ?>
    </div>  
</div>
      