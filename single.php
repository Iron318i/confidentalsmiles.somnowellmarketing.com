<?php
get_header(); 
$prev_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
?>

 
<section id="myAnchor" class="conten-wrapp">

	<div class="conten-row1">
    	<div class="conten-bar1 blogin-wrapp common-style">
        
        	<div class="blogin-row11">
               <?php 
$img = get_field('blog_banner_image',$post->ID)['url'];
//$img = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
if (!empty($img)) {
      // $img_alt = get_post_meta(get_post_thumbnail_id($post->ID),'_wp_attachment_image_alt',true); 
     $img_alt  =get_field('blog_banner_image',$post->ID)['alt'];
       if(!$img_alt){
            $img_alt = 'blog-inner1';
        }
   
?>
            	<div class="blogin-row1">
                    <img loading="lazy" src="<?php echo aq_resize($img, 676, 354, true, true, true); ?>" alt="<?php echo $img_alt;?>">
                </div>
                <?php }
?>
                <h3><?php echo get_the_date('jS F Y', $post->ID); ?></h3>
                <h2><?php the_title();?></h2>
                <?php 

while(have_posts()):the_post();?>
        <?php the_content(); ?>
<?php endwhile; ?>
<?php wp_reset_query(); ?>

<?php
                if(empty($prev_url)){ ?>
               <a href="<?php echo get_permalink(7);?>" class="blogin-btn1">Back to Blog</a>
                 <?php }else{ ?>
                    <a href="<?php echo $prev_url; ?>" class="blogin-btn1">Back to Blog</a>
                    
                 <?php } ?>









                 
                
            </div>




            
        </div>
    </div>
    
    <div class="conten-row2">
        <div class="conten-bar2 sidbar-wrapp">
			        	
            <?php include_once('include/sidbar-form.php'); ?>
            
            <?php include_once('include/sidbar-categories.php'); ?>
            
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