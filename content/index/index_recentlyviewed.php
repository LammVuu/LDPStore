<!--Recently Viewed-->
  <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Recently Viewed</h2>
                        <a href="#" class="wid-view-more">View All</a>
                        <?php 
                        foreach($recentlyViewed as $key)
                        {
                         ?>
                        <div class="single-wid-product">
                            <a href="<?php echo $level.PAGE.'single-product.php?id='.$key['masp']?>"><img src=<?php echo $level.IMG.$key['anhdaidien'];?> alt="" class="product-thumb"></a>
                            <h2><a href="<?php echo $level.PAGE.'single-product.php?id='.$key['masp']?>"><?php echo $key['tensp']; ?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$<?php echo $key['giamoi']; ?></ins> <del>$<?php echo $key['giacu']; ?></del>
                            </div>                            
                        </div>
                        <?php 
                        }
                         ?>
                        
                    </div>
                </div>