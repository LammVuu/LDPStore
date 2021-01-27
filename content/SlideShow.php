    <div class="slider-area">
        	<!-- Slider -->
			<div class="block-slider block-slider4">
				<ul class="" id="bxslider-home4">
					<?php
					foreach ($SlideShow as $img) {
						
					
					?>
					<li>
						<img src=<?php echo $level.IMG.$img['tenfile']?> alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
								<?php echo $img['ten']?> <span class="primary"> <strong><?php echo $img['tennoibat']?></strong></span>
							</h2>
							<h4 class="caption subtitle"><?php echo $img['chucnangnoibat']?></h4>
							<a class="caption button-radius" href="<?php echo $level.PAGE.'cart.php?id='.$img['idsp']?>"><span class="icon"></span>Buy now</a>
						</div>
					</li>
					<?php
				}
					?>
					
					
				</ul>
			</div>
			<!-- ./Slider -->
    </div> <!-- End slider area -->