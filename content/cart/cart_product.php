
    <!--Product -->
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Search Product</h2>
                        <form action="<?php echo $level.PAGE.'search.php'?>" method='get'>
                            <input type="text" name="search" placeholder="Search products...">
                            <input type="search" name="flag" hidden="true" value="0"><!-- 0 là tìm theo 1 điều kiện -->
                            <input type="submit" value="Search">
                        </form>
                    </div>
                
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Product</h2>
                        <?php
                        foreach ($Product as $post) {
                        ?>
                        <div class="thubmnail-recent">
                            <img src=<?php echo $level.IMG.$post['anhdaidien'];?> class="recent-thumb" alt="">
                            <h2><a href=<?php echo $level.PAGE."single-product.php?id=".$post['masp'];?>><?php echo $post['tensp'];?></a></h2>
                            <div class="product-sidebar-price">
                                <ins><?php echo $post['giamoi'];?></ins> <del><?php echo $post['giacu'];?></del>
                            </div>                             
                        </div>
                        <?php } ?>
                    </div>
                    
           
                </div>
                