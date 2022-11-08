<?php
    $event_bg_image = get_field('event_bg_image', 5);
    if( !empty($event_bg_image) ) {
        $event_bg_image = aq_resize($event_bg_image, 1500, 800, true, true, true);
    }
?>
<section <?php echo !empty($event_bg_image) ? 'style="background: url('. $event_bg_image .') no-repeat center / cover;"' : ''; ?> class="gester-wrapp fullscreen background parallax" data-img-width="1500" data-img-height="800" data-diff="100">
	<div class="margin">
    	
        <div class="gester-row1">
            <div class="gester-bar1">

                <?php 
                
                if(!empty(get_field('event_title',5))){ 

                    $var=get_field('event_title',5);
                 ?>


                <?php echo $var; ?>
				
                  <?php }
                ?>


                  <?php 
                
                if(!empty(get_field('event_date',5)) || !empty(get_field('event_time',5))){ 

                    $var1=get_field('event_date',5);
                     $var2=get_field('event_time',5);
                 ?>


                <h4 class="wow fadeInLeft" data-wow-delay="400ms"><?php if(!empty(get_field('event_date',5))){ echo $var1; }?>  <span>|</span><?php if(!empty(get_field('event_time',5))){ echo $var2; }?> </h4>

                  <?php }
                ?>
                 <?php 
                
                if(!empty(get_field('event_location',5))){ 

                    $var=get_field('event_location',5);
                 ?>

                <div class="gester-box1 wow fadeInLeft" data-wow-delay="500ms">
                	<h5><?php echo $var; ?></h5>
                </div>
                 <?php }
                ?>
                <?php 
                
                if(!empty(get_field('event_description',5))){ 

                    $var=get_field('event_description',5);
                 ?>
                <p class="wow fadeInLeft" data-wow-delay="600ms"> <?php echo $var; ?></p>

                <?php }
                ?>
                <?php 
                
                if(!empty(get_field('event_reserve_link',5))){ 

                    $var=get_field('event_reserve_link',5);
                 ?>
                <a   
        href="<?php echo $var; ?>" target="_blank"
        class="gester-btn1 wow fadeInLeft" data-wow-delay="700ms">Reserve Now</a>
        <?php }
                ?>
			</div>
        </div>
        <?php 
                
                if(!empty(get_field('event_seat_details_link',5))){ 

                    $var=get_field('event_seat_details_link',5);
                 ?>
        <a 

          
        href="<?php echo $var; ?>" target="_blank"
       

         class="gester-row2 wow zoomIn" data-wow-delay="200ms">
        	<div class="gester-bar2">
            	<h6>limited <span>space</span> available</h6>
            </div>
        </a>
 <?php }
                ?>
	</div>
</section>