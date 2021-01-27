<!--LOGO MID -->
    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list">
                            <?php
                                foreach ($logomid as $hinh) {
                                    # code...
                                
                            ?>
                            <img src= <?php echo $level.IMG.$hinh["tenfile"] ?> alt="">
                                   <?php } ?>                     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->