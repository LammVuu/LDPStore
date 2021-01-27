   <div class="single-sidebar">
                        <h2 class="sidebar-title">Product</h2>
                        <?php 
                        foreach($SanPham as $key)
                        {
                         ?>
                        <div class="thubmnail-recent">
                            <img src="<?php echo $level.IMG.$key['anhdaidien'];?>"   class="recent-thumb" alt="">
                            <h2><a href=<?php echo $level.PAGE."single-product.php?id=".$key['masp'];?>><?php echo $key['tensp']; ?></a></h2>
                            <div class="product-sidebar-price">
                                <ins>$<?php echo $key['giamoi']; ?></ins> <del>$ <?php echo $key['giacu']; ?> </del>
                            </div>                             
                        </div>
                        <?php 
                        }
                         ?>
                        
                    </div>
                    