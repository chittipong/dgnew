<div id="main-slider" class="flexslider">
            <ul class="slides">
            <?php
				$sql="SELECT * FROM slide";
				$rs=mysqli_query($conn,$sql);
				
				while($data=mysqli_fetch_assoc($rs)){
					$slideTitle=$data['title'];
					$slideDesc=$data['desc'];
					$pic=$data['pic'];
			?>
              <li>
                <img src="images/main-slide/<?php echo $pic ?>">
<div class="flex-caption">
                    <h3><?php echo $slideTitle ?></h3>
					<p><?php echo $slideDesc ?></p>
					<a href="#" class="btn btn-theme">Detail</a>
                </div>
              </li>
              <?php } ?>
            </ul>
        </div>