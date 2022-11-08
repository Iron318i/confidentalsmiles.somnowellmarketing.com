<?php
/**
 * * Template Name: Testimonials Page
 * */
get_header();
?>
<section id="myAnchor" class="conten-wrapp">

	<div class="conten-row1">
    	<div class="conten-bar1 testi-wrapp">
        	
            <div class="testi-row11">
            
            	<?php 
            	if(!empty(get_field('testimonial_video',$post->ID))){



            	
            	$video=get_field('testimonial_video',$post->ID);
            	$count_displayed=1;
            	$total_items=count($video);
            	?>

        	<div class="testi-row1">
            	<?php 
            	foreach($video as $vid) {
            	?>
				<a class="testi-row2 videobox appear_video_<?php echo $count_displayed; ?>" <?php if($count_displayed > 4){
                       ?> 
                     style="display:none;"
                     <?php 

                 }
                     ?> data-flashy-type="video" 

                     <?php 
                                if(!empty($vid['testimonial_video_type'])){
                                if($vid['testimonial_video_type']=='youtube'){  ?>
                                    href="https://www.youtube.com/watch?v=<?php echo $vid['testimonial_video']; ?>"
                                     <?php    }else{   ?>
                                     href="https://player.vimeo.com/video/<?php echo $vid['testimonial_video']; ?>"
                                         <?php  }  }
                                ?>
                     


                     >
					<div class="testi-bar1">
                           <?php 
                                if(!empty($vid['testimonial_video_type'])){
                                if($vid['testimonial_video_type']=='youtube'){  ?>
                                    <img loading="lazy" src="https://img.youtube.com/vi/<?php echo $vid['testimonial_video']; ?>/hqdefault.jpg"  alt="testimonials thumb1">
                                     <?php    }else{ 

                                         $video_id=$vid['testimonial_video'];
                                    $video_url ='https://player.vimeo.com/video/'.$video_id;
                                    $imgs = unserialize(file_get_contents("https://vimeo.com/api/v2/video/$video_id.php"));
                                    $img = $imgs[0]['thumbnail_large'];

                                       ?>
                                        <img loading="lazy" src="<?php echo $img; ?>" width="480" alt="testimonials thumb1">
                                         <?php  }  }
                                ?>
						
					</div>
                    <div class="testi-bar2">

						<img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/vidio-icon1.png" alt="testimonials thumb1" />
					</div>
				</a>
                
                	<?php $count_displayed++; } ?>
                
			</div>
            

		<?php } ?>

            <a onclick="LoadMOrevideo(<?php echo $total_items; ?>)" class="testi-btn1 loadmoretestimonialsmaonpagevideo">Load More</a>
            <div class="border"></div>
            





<?php 
            	if(!empty(get_field('testimonials',$post->ID))){


            		$tes=get_field('testimonials',$post->ID);

            		?>

            <div class="testi-row3">
        
            	<?php 

            	$count_displayed=1;
            	$total_items=count($tes);

            	foreach($tes as $rwo)
            	{
            	?>
                <div class="testi-bar3 appear_<?php echo $count_displayed; ?>"  <?php 
                       

                       if($count_displayed > 4){
                       ?> 
                     style="display:none;"
                     <?php 

                 }
                     ?>>
                    <div class="testi-lt"><img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/testi-icon1.png" alt="testi icon1"/></div>
                    <div class="testi-rt">

                    	<?php if(!empty($rwo['testimonial_message'])){  ?>



                    
                        <p>"<?php echo $rwo['testimonial_message']; ?>"</p>

                        	<?php }

                    	?>
<?php if(!empty($rwo['testimonial_author'])){  ?>
                        <h3><?php echo $rwo['testimonial_author']; ?></h3>
                        	<?php }

                    	?>
                        <div class="testi-rating"><img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/testi-rating.png" alt="testi rating"/></div>
                    </div>
                </div>
                
                <?php $count_displayed++; } ?>


              
                
                <a onclick="LoadMOre(<?php echo $total_items; ?>)" class="testi-btn1 loadmoretestimonialsmaonpage">Load More</a>
            
        	</div>
            


        		<?php } ?>


<?php echo do_shortcode('[grw place_photo="https://maps.gstatic.com/mapfiles/place_api/icons/generic_business-71.png" place_name="Confidental Dental Practice" place_id="ChIJP2Z-uSqAdkgRqyJsqnfrAlI" pagination="5" text_size="120" refresh_reviews=true lazy_load_img=true reduce_avatars_size=true open_link=true nofollow_link=true]');?>

<iframe loading="lazy" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fkaytie.green%2Fposts%2F2202091933218593&width=500" width="500" height="142" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>


<script src='https://features.workingfeedback.co.uk/review-feed/9255842'></script>



            </div>
            
        </div>
    </div>
    
    <div class="conten-row2">
        <div class="conten-bar2 sidbar-wrapp">
			        	
            <?php include_once('include/sidbar-form.php'); ?>
            
    	</div>
    </div>
    
    <?php include_once('include/canver-wrapp.php'); ?>

</section>

<?php include_once('include/gester-wrapp.php'); ?>

<?php include_once('include/judger-wrapp.php'); ?>

<?php include_once('include/knower-wrapp.php'); ?>

<?php include_once('include/laboer-wrapp.php'); ?>

<?php include_once('include/marker-wrapp.php'); ?>               





<?php
get_footer();