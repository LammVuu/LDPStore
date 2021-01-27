<!--Logo top-->
<?php   
    $TongTien = 0; $count = 0;
    if(isset($_SESSION['cart']))
    {   foreach($_SESSION['cart'] as $sp){
            $TongTien += $sp['thanhtien'];
            $count++;
        }
    }
 ?>
<div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo">
                        <h1><a href=" <?php echo $level."index.php"?>"><img src='<?php echo $level.IMG."logo_main.jpg";?>'></a></h1>
                    </div>
                </div>

                <div class='col-sm-8'>
                    <div class="shopping-item">
                        <a href="<?php echo $level.PAGE.'cart.php';?>" style='font-size: 22px'>Cart - <span class="cart-amunt"><?php echo "$ ".$TongTien; ?></span><i class="fa fa-shopping-cart"></i><span class="product-count"><?php echo $count; ?></span></a>
                    </div>
                </div>
            </div>  
        </div>
</div> 