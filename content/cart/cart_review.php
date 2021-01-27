<div class="col-md-8">
                    <div class="product-content-right">
                        <div class="woocommerce">
                            <table cellspacing="0" class="shop_table cart">     
                                <thead>
                                    <tr>
                                        <th class="product-remove">&nbsp;</th>
                                        <th class="product-thumbnail">Picture</th>
                                        <th class="product-name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Number</th>
                                        <th class="product-price">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <form action='<?php echo $level.CONT_CART.'cart_action.php'; ?>' method="get">
                                    <?php  
                                    $check = false; $TongTien = 0;

                                    if(isset($_SESSION['cart']))
                                    {
                                        foreach($_SESSION['cart'] as $k)
                                        {        
                                            if(isset($k))
                                            {
                                                $check = true;
                                            }
                                        }
                                    }

                                    //hiển thị giỏ hàng
                                    if($check==true)
                                    {
                                    foreach($_SESSION['cart'] as $post){
                                        $Warehouse = DP::run_query("SELECT * FROM kho WHERE masp=?",[$post['masp']],2);
                                        $max = $Warehouse[0]['soluong_ton'];
                                    ?>
                                    <tr class="cart_item">
                                        <!-- dấu hủy -->
                                        <td class="product-remove">
                                            <a title="Remove this item" class="remove" href='<?php echo $level.CONT_CART.'cart_remove.php?id='.$post['masp']; ?>'>×</a> 
                                        </td>

                                        <!-- hình ảnh -->
                                        <td class="product-thumbnail">
                                            <a href=<?php echo $level.PAGE."single-product.php";?>><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src=<?php echo $level.IMG.$post['anhdaidien'];?>></a>
                                        </td>

                                        <!--  tên sản phẩm -->
                                        <td class="product-name">
                                            <a href=<?php echo $level.PAGE."single-product.php";?>><?php echo $post['tensp'];?></a> 
                                        </td>

                                        <!-- giá bán -->
                                        <td class="product-subtotal">
                                            <span class="amount"><?php echo $post['giamoi'];?></span> 
                                        </td>

                                        <!-- số lượng -->
                                        <td class="product-quantity">
                                            <div class="quantity buttons_added">
                                                <input type="number" name='<?php echo $post['masp'];?>' size="4" class="input-text qty text" value="<?php echo $post['soluong'];?>" min="1" max='<?php echo $max; ?>' step="1">
                                            </div>
                                        </td> 

                                        <!-- thành tiền -->
                                        <td class="product-subtotal">
                                            <span class="amount"><?php echo $post['thanhtien'];?></span> 
                                        </td>
                                    </tr>
                                    <?php
                                    $TongTien += $post['thanhtien'];}
                                    ?>
                                    <tr>
                                        <td colspan="4">
                                            <button type='submit' class='btn btn-primary' name='ThemSP'>Add products</button>

                                            <button type='submit' class='btn btn-primary' name='CapNhat'>Update</button>
                                        </td>

                                        <td class="product-name" style='background-color: orange'>
                                            <b>TOTAL</b>
                                        </td>

                                        <td class="product-subtotal" style='background-color:gray'>
                                            <b><span style='font-size: 22px; color:white'><?php echo $TongTien; ?></span></b>
                                        </td>
                                    </tr>
                                    </form>

                                    <tr>
                                        <td colspan="6">
                                            <?php include($level.CONT_CART.'cart_thanhtoan.php'); ?>
                                        </td>
                                    </tr>
                                    


                                    <?php } 

                                    //Xử lý chưa chọn sản phẩm & hết hàng
                                    elseif($check==false) {                                    
                                        if(isset($_GET['status'])){
                                          $status = $_GET['status'];
                                          if($status=='error'){
                                    ?>
                                        <tr>
                                            <td colspan="6">
                                                <h4 style='margin: 25px 0px 25px 0px;'>
                                                Oops! The product you have chosen is out of stock.
                                                <a href="<?php echo $level.PAGE.'shop.php'; ?>" style='text-decoration-line: none;font-size: 16px'>Shop now</a>
                                                </h4>
                                            </td>
                                        </tr>

                                    <?php }}
                                        else{ ?>
                                        <tr>
                                            <td colspan="6">
                                                <h4 style='margin: 25px 0px 25px 0px;'>You have not selected the product. <a href="<?php echo $level.PAGE.'shop.php'; ?>" style='text-decoration-line: none;font-size: 16px'>Buy now</a></h4>
                                            </td>
                                        </tr>
                                    <?php }} ?>
                                </tbody>
                            </table>

                            <div class="cart-collaterals">
                                <div class="cross-sells">
                                    <h2>Maybe you are interested</h2>
                                    <ul class="products">
                                        <?php
                                        foreach ($Review2 as $post) {
                                        ?>
                                        <li class="product">
                                            <a href=<?php echo $level.PAGE."single-product.php?id=".$post['masp'];?>>
                                                <img width="325" height="325" alt="T_4_front" class="attachment-shop_catalog wp-post-image" src=<?php echo $level.IMG.$post['anhdaidien'];?>>
                                                <h3><?php echo $post['tensp'];?></h3>
                                                <span class="price"><span class="amount"><ins><?php echo $post['giamoi'];?></ins> <del><?php echo $post['giacu'];?></del></span></span>

                                            </a>

                                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="22" rel="nofollow" href=<?php echo $level.PAGE."single-product.php?id=".$post['masp'];?>>See details</a>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>                        
                    </div>                    
                </div>
            </div>
        </div>
    </div>