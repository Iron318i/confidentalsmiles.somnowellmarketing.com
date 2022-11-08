<?php
/**
 * * Template Name: Smile Gallery  Page
 * */
get_header();
?>


<section id="myAnchor" class="conten-wrapp">

	<div class="conten-row1">

		 <?php 
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = query_posts(
                array(
                    'post_type'=>'gallery',
                    'posts_per_page'=>get_option('posts_per_page'),
                    'post_status'=>'publish',
                    'paged'=>$paged
                )
            );  
        if(!empty($args)) {
        ?>
    	<div class="conten-bar1 galler-wrapp">
        
        	<div class="galler-row1">
            

        		 <?php foreach($args as $item) { 
                            $before_img = get_field('before_image',$item->ID);
                            $before_img_url = $before_img['url'];
                            $before_img_alt = $before_img['alt'];

                            if(empty($before_img_alt)) {
                                $before_img_alt = 'Before - Confidental Smile';
                            }

                            $after_img = get_field('after_image',$item->ID);
                            $after_img_url = $after_img['url'];
                            $after_img_alt = $after_img['alt'];

                            if(empty($after_img_alt)) {
                                $after_img_alt = 'After - Confidental Smile';
                            }
                        ?>


				<div class="galler-row2">
					<div class="galler-lt">
						<div class="galler-bar1"><?php if(!empty($before_img)) { ?>
                                            <a href="<?php echo get_permalink($item->ID);?>">     <img loading="lazy" src="<?php echo aq_resize($before_img_url, 180, 120, true, true, true); ?>" alt="<?php echo $before_img_alt;?>"/></a>
                                        <?php } else { ?>
                                              <a href="<?php echo get_permalink($item->ID);?>">   <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/noimage-gallery-thumb.jpg" alt="<?php echo $before_img_alt;?>"/></a>
                                        <?php } ?><h2>Before</h2></div>
						<div class="galler-bar1"><?php if(!empty($after_img)) { ?>
                                              <a href="<?php echo get_permalink($item->ID);?>">   <img loading="lazy" src="<?php echo aq_resize($after_img_url, 180, 120, true, true, true); ?>" alt="<?php echo $after_img_alt;?>"/></a>
                                        <?php } else { ?>
                                              <a href="<?php echo get_permalink($item->ID);?>">   <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/noimage-gallery-thumb.jpg" alt="<?php echo $after_img_alt;?>"/></a>
                                        <?php } ?><h2>After</h2></div>
					</div>
					<div class="galler-rt">
						<p><?php if(!empty($item->post_content)){
                     //echo  strip_shortcodes(wp_trim_words($item->post_content, 30 ));
                            // $stat=$item->post_content;

                              $stat=apply_filters('the_content', $item->post_content);
     $res= substr($stat, 0, 90);
    echo  wp_strip_all_tags($res);
    if(strlen($res) >='90'){
    echo "...";

    }
                              }?></p>
						<a href="<?php echo get_permalink($item->ID);?>" class="galler-btn1">Read More</a>
					</div>
				</div>
				
                  <?php } ?>
                
                




                
                    
			</div>
            
            <div class="paiger-wrapp">
                    
				<div class="paiger-row1">
					
					<?php                                 
                            the_posts_pagination( array(
                                    'prev_text' => '<span class="paiger-btn1">' . __( 'Back') . '</span>',
                                    'next_text' => '<span class="paiger-btn2">' . __( 'Next') . '</span>',
                                    'before_page_number' => '',
                                    'screen_reader_text' => '&nbsp;',
                            ) );
                        ?>
				</div>
                        
			</div>
            
        </div>

             <?php } ?>

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