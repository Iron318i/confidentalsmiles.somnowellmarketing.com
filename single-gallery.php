<?php
$gallery_category="";
get_header();
$prev_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
?>
<section id="myAnchor" class="conten-wrapp">

	<div class="conten-row1 common-style">
    	<div class="conten-bar1 gallin-wrapp">
        	<?php while (have_posts()):the_post(); 

                            $before_img      = get_field('before_image',$post->ID);
                            $before_img2     = get_field('before_image_2',$post->ID);
                            $before_img_url  = $before_img['url'];
                            $before_img_alt  = $before_img['alt'];
                            $before_img_url2 = $before_img2['url'];
                            $before_img_alt2 = $before_img2['alt'];

                            if(empty($before_img_alt)) {
                                $before_img_alt = 'Before - Confidental Smile';
                            }

                            if(empty($before_img_alt2)) {
                                $before_img_alt2 = 'Before - Confidental Smile';
                            }

                            $after_img      = get_field('after_image',$post->ID);
                            $after_img_url  = $after_img['url'];
                            $after_img_alt  = $after_img['alt'];
                            $after_img2     = get_field('after_image_2',$post->ID);
                            $after_img_url2 = $after_img2['url'];
                            $after_img_alt2 = $after_img2['alt'];

                            if(empty($after_img_alt)) {
                                $after_img_alt = 'After - Confidental Smile';
                            }
                            if(empty($after_img_alt2)) {
                                $after_img_alt2 = 'After - Confidental Smile';
                            }

                        ?>
        	<div class="gallin-row1">
				<div class="gallin-row2">
					<div class="gallin-bar1">
                        <?php if(!empty($before_img)) { ?>
                            <img loading="lazy" src="<?php echo aq_resize($before_img_url, 327, 218, true, true, true); ?>" alt="<?php echo $before_img_alt;?>"/>
                    <?php } else { ?>
                            <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/smile-gallery-inner-noimage.jpg" alt="<?php echo $before_img_alt;?>"/>
                    <?php } ?><h2>Before</h2></div>
                       <div class="gallin-bar1">
                        <?php if(!empty($after_img)) { ?>
                            <img loading="lazy" src="<?php echo aq_resize($after_img_url, 327, 218, true, true, true); ?>" alt="<?php echo $after_img_alt;?>"/>
                    <?php } else { ?>
                            <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/smile-gallery-inner-noimage.jpg" alt="<?php echo $after_img_alt;?>"/>
                    <?php } ?><h2>After</h2></div>
                    <?php if(!empty($before_img2)) { ?>
                    <div class="gallin-bar1">
                        <?php if(!empty($before_img2) && !empty($after_img2)) { ?>
                            <img loading="lazy" src="<?php echo aq_resize($before_img_url2, 327, 218, true, true, true); ?>" alt="<?php echo $before_img_alt2;?>"/>
                    <?php } else { ?>
                            <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/smile-gallery-inner-noimage.jpg" alt="<?php echo $before_img_alt2;?>"/>
                    <?php } ?><h2>Before</h2></div>
                       <div class="gallin-bar1">
                        <?php if(!empty($after_img2)) { ?>
                            <img loading="lazy" src="<?php echo aq_resize($after_img_url2, 327, 218, true, true, true); ?>" alt="<?php echo $after_img_alt2;?>"/>
                    <?php } else { ?>
                            <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/smile-gallery-inner-noimage.jpg" alt="<?php echo $after_img_alt2;?>"/>
                    <?php } ?><h2>After</h2></div>
                <?php } ?>
				</div>


        <?php the_content(); ?>
<?php endwhile; ?>
<?php wp_reset_query(); ?>
<?php

                    if(!empty(get_field('gallery_common_content','options'))){

                        echo get_field('gallery_common_content','options');

                    }


                    ?>
               
				

				<?php


                if(empty($prev_url)){ ?>
                    <a href="<?php echo get_permalink(13);?>" class="gallin-btn1">Back to smile gallery</a>
                <?php }else{ ?>
                    <a href="<?php echo $prev_url;?>" class="gallin-btn1">Back to smile gallery</a>

                <?php }
                ?>


			</div>
          
        </div>
    </div>
    
    <div class="conten-row2">
        <div class="conten-bar2 sidbar-wrapp">
			        	
            <?php include_once('include/sidbar-form.php'); ?>
            
            <?php include_once('include/sidbar-gallery.php'); ?>
            
            <?php include_once('include/sidbar-testimonials-slider.php'); ?>
            
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