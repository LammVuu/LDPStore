<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <?php
            foreach($danhsachSP as $SP)
            {
                //tồn kho
                $id = $SP['masp'];
                $Warehouse = DP::run_query("SELECT * FROM kho WHERE masp=?",[$id],2);
                $inventory = $Warehouse[0]['soluong_ton'];
            ?>
            <div class="col-md-3 col-sm-6">
                <div class="single-shop-product">
                    <div class="product-upper">
                        <a href='<?php echo $level.PAGE.'single-product.php?id='.$SP['masp']; ?>'>
                            <img src='<?php echo $level.IMG.$SP["anhdaidien"];?>' alt="">
                        </a>
                    </div>
                    <h2><a href='<?php echo $level.PAGE.'single-product.php?id='.$SP['masp']; ?>'style='text-decoration-line: none'><?php echo $SP["tensp"];?></a></h2>
                    <div class="product-carousel-price">
                        <ins><?php echo "$".$SP["giamoi"];?></ins> 
                    </div>  
                    
                    <?php if($inventory>0){ ?>
                    <div class="product-option-shop">
                        <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href=<?php echo $level.CONT_CART.'cart_add.php?id='.$SP['masp'] ?>> Add to cart </a>
                    </div>   

                    <?php }
                    else { ?>
                    <div class="product-option-shop">
                        <h4 style='color:red'>
                            <span class='fa fa-exclamation-circle'></span>&nbsp;Out of stock
                        </h4>
                    </div> 
                    <?php } ?>
                </div>
            </div>
           
           <?php
       }
       ?>
        
        <div class="row">
            <div class="col-md-12">
                <div class="product-pagination text-center">
                    <nav>
                      <ul class="pagination">
                        <li>
                          <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                          </a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                          <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                          </a>
                        </li>
                      </ul>
                    </nav>                        
                </div>
            </div>
        </div>
    </div>
</div>
</div>