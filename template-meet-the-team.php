<?php
/**
 * * Template Name: Meet The Team Page
 * */
get_header();
?>


<section id="myAnchor" class="conten-wrapp ">

        <div class="teamer-wrapp common-style">
        
        	<div class="margin">
         <?php 
$args = get_posts(array('post_type'=>'team','post_status'=>'publish','posts_per_page'=>-1));

if(!empty($args)) { ?>
            <div class="teamer-row1">


            	<?php    
               
               foreach($args as $item) {
$img = wp_get_attachment_url(get_post_thumbnail_id($item->ID)); 
$imgalt = get_post_meta(get_post_thumbnail_id($item->ID),'_wp_attachment_image_alt',true);
if(empty($imgalt)) {
                            $imgalt = 'Team - 2greendental';
                        }
?> 
                <div class="teamer-row2">
                    <h2><?php
                                    $designation=get_field('designation',$item->ID);
                                    if(!empty($designation)){
                                    ?><?php echo $designation; ?>                                    
                                       <?php }  ?></h2>
                    <h3><?php echo $item->post_title; ?></h3>
                    <h4><?php
                                    $designation=get_field('gdc',$item->ID);
                                    if(!empty($designation)){
                                    ?>GDC No. <?php echo $designation; ?>                                    
                                       <?php }  ?></h4>
                    <div class="teamer-bar1 masonry-row1">
                        <?php


                                if(empty($img)){ ?>

<a href="<?php echo get_permalink($item->ID); ?>"> <img loading="lazy" src="<?php echo TEMPLATE_URL.'images/noimage-team.jpg'; ?>" alt="<?php echo $imgalt; ?>"/> </a>

                      <?php      }else{  ?>

 <a href="<?php echo get_permalink($item->ID); ?>"> <img loading="lazy" src="<?php echo aq_resize($img, 113, 113, true, true, true); ?>" alt="<?php echo $imgalt; ?>" />  </a>


                     <?php      }
                            ?>
                    </div>
                    <div class="teamer-bar2">
                        <p><?php echo strip_shortcodes(wp_trim_words($item->post_content, 15 ));?></p>
                        <a href="<?php echo get_permalink($item->ID); ?>" class="teamer-btn1">Learn More</a>
                    </div>
                </div>
                
                <?php      }
                            ?>
               
                
            </div>
             <?php      }
                            ?>
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