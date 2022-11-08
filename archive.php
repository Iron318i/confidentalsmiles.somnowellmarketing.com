<?php get_header();
?>

<section id="myAnchor" class="conten-wrapp">

    <div class="conten-row1">
        <div class="conten-bar1 bloger-wrapp">
             <?php
                    if ( have_posts() ) :  ?>
            <div class="bloger-row1">
            
                <?php
                    $i = 1;
                    while ( have_posts() ) : the_post(); 
                    $img = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); 
                   // $img = get_field('blog_thumb_image',$post->ID)['url'];

                    if(empty($img)){
                    $img = TEMPLATE_URL.'images/no-image-blog.jpg';
                    $img_alt = 'thumb';
                    } else {
                    //$img_alt = get_field('blog_thumb_image',$post->ID)['alt'];
                          $img_alt = get_post_meta(get_post_thumbnail_id($post->ID),'_wp_attachment_image_alt',true); 
                    if(!$img_alt){
                    $img_alt = 'thumb';
                    }
                    }
                    ?>

                <div class="bloger-row2">
                    <div class="bloger-bar1">
                         <?php
                                if($img==TEMPLATE_URL.'images/no-image-blog.jpg'){ ?>
                                <a href="<?php echo get_permalink($post->ID); ?>"> <img loading="lazy" src="<?php echo $img; ?>" alt="<?php echo $img_alt; ?>" /></a>
                                <?php      }else{  ?>
                                <a href="<?php echo get_permalink($post->ID); ?>"> <img loading="lazy" src="<?php echo aq_resize($img, 153, 153, true, true, true); ?>" alt="<?php echo $img_alt; ?>" /></a>
                                <?php      }
                                ?>    
                    </div>
                    <div class="bloger-bar2">
                        <h3><?php echo get_the_date('jS F Y', $post->ID); ?></h3>
                        <h2><?php the_title();?></h2>
                        <p><?php echo strip_shortcodes(wp_trim_words($post->post_content, 25 ));?></p>
                        <a href="<?php echo get_permalink($post->ID); ?>" class="bloger-btn1">Read More</a>
                    </div>
                </div>


                
                 <?php endwhile;?>   
                
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
            <?php 
                        else :
                        echo '<h2>No blog posts found.</h2>';

                        endif; ?> 
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


<?php get_footer();