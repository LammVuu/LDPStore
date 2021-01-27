<div class="col-md-8">
    <div class="product-content-right">
         <div class="product-breadcroumb">
            <?php foreach($ChiTietSanPham as $key) 
            {
                ?>
            <a href=<?php echo $level."index.php"; ?>>Home</a>
            <a href="">Category Name</a>
            <a href=""><?php echo $key['tensp']; ?></a>
            <?php } 
            ?>
         </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="product-images">
                     <?php 
                     foreach($ChiTietSanPham as $key) 
                    {
                    ?>
                        <div class="product-main-img">
                            <img src=<?php echo $level.IMG.$key['anhdaidien'];?> alt="">
                        </div>
                                    
                         <div class="product-gallery">
                            <img src=<?php echo $level.IMG.$key['hinhanhkhac1'];?> alt="">
                            <img src=<?php echo $level.IMG.$key['hinhanhkhac2'];?> alt="">
                        </div>
                    <?php 
                    } 
                    ?>
                </div>
            </div>
                            
            <div class="col-sm-6">
                <?php 
                foreach($ChiTietSanPham as $key) 
                {
                ?>
                <div class="product-inner">
                    <h2 class="product-name"><?php echo $key['tensp'];?></h2>
                    
                    <?php if($inventory>0){ ?>
                        <div class="product-inner-price">
                            <ins><?php echo $key['giamoi'];?></ins> <del><?php echo $key['giacu'];?></del>
                        </div>              
                            <form action="<?php echo $level.CONT_CART.'cart_add.php'; ?>"class="cart"method="GET">
                                <div class="quantity">
                                    <input type="number" size="4" class="input-text qty text" value="1" name="soluong" min="1" step="1">
                                    <input type="text" name="id" hidden="true" value="<?php echo $key['masp'];?>">
                                </div>
                                    <button class="add_to_cart_button" type="submit">Add to cart</button>
                            </form>   
                    <?php } 
                    else { ?>
                        <h4 style='padding-bottom: 25px;color:red'>
                            <span class='fa fa-exclamation-circle'></span>
                            Out of stock
                        </h4>
                    <?php } ?>
                        <div role="tabpanel">
                            <ul class="product-tab" role="tablist">
                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                            </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                <h2>Product Description</h2>  
                                    <p><?php echo $key['mota'];?></p>
                            </div>
                <?php 
                } 
                ?>
                            