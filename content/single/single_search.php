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