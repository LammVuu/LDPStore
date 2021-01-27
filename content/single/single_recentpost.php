<div class="single-sidebar">
                        <h2 class="sidebar-title">Recent posts</h2>
                        <ul>
                            <?php 
                            foreach($BaiVietGanDay as $key)
                            {
                             ?>
                            <li><a href=<?php echo $level.PAGE.'single-product.php?id='.$key['idbaiviet']; ?>><?php echo $key['tieude']; ?></a></li>
                            <?php 
                            }
                             ?>
                        </ul>
                    </div>
                </div>