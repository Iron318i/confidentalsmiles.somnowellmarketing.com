 <?php
get_header(); 
?>

      

<section id="myAnchor" class="conten-wrapp">

	<div class="conten-row1">
    	<div class="conten-bar1 teamin-wrapp common-style">
        
        	<div class="teamin-row1">
        		<?php 
                	$img = wp_get_attachment_url(get_post_thumbnail_id($post->ID),'full');

                	$imgalt = get_post_meta(get_post_thumbnail_id($post->ID),'_wp_attachment_image_alt',true);
                	$designation = get_field('designation',$post->ID);
                	$qualification = get_field('qualification',$post->ID);
                	
                	$gdc = get_field('gdc',$post->ID);
                	if(empty($imgalt)) {
                            $imgalt = 'Team - Confidental Smile';
                        }
                       $posthreID=$post->ID;
                	?>

				<div class="teamin-lt"><?php 
                        if(!empty($img)){  ?>

                            <img loading="lazy" src="<?php echo aq_resize($img, 350, 350, true, true, true); ?>" alt="<?php echo $imgalt; ?>"/>
                             <?php    }else{ ?>

                                <img loading="lazy" src="<?php echo TEMPLATE_URL.'images/noimage-team-inner.jpg'; ?>" alt="<?php echo $imgalt; ?>"/>

                                <?php      }

                        ?></div>

 

				<div class="teamin-rt">
					<h2><?php
                                    $designation=get_field('designation',$post->ID);
                                    if(!empty($designation)){
                                    ?><?php echo $designation; ?>                                    
                                       <?php }  ?></h2>
					<h3><?php the_title();?></h3>
					<h4><?php
                                    $designation=get_field('qualification',$post->ID);
                                    if(!empty($designation)){
                                    ?><?php echo $designation; ?>                                    
                                       <?php }  ?></h4>
					<h5><?php
                                    $designation=get_field('gdc',$post->ID);
                                    if(!empty($designation)){
                                    ?>GDC No. <?php echo $designation; ?>                                    
                                       <?php }  ?></h5>
				</div>
			</div>
            
            <?php 

while(have_posts()):the_post();?>
        <?php the_content(); ?>
<?php endwhile; ?>
<?php wp_reset_query(); ?>
            <a href="<?php echo get_permalink(11);?>" class="teamin-btn1">Back to our Team</a>
            
        </div>
    </div>
    
    <div class="conten-row2">
        <div class="conten-bar2 sidbar-wrapp">
			        	
            <?php include_once('include/sidbar-form.php'); ?>
            
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