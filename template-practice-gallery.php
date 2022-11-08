<?php
/**
 * * Template Name: Practice Gallery Page
 * */
get_header();
?>


                    
<section id="myAnchor" class="practice-wrapp">
    <div class="margin">
                    
        <div class="practice-row2 common-style">


    	
            	<?php while (have_posts()):the_post(); ?>
                    <?php the_content(); ?>
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>

                     <?php 
                    while ( have_rows('practice_gallery') ) : the_row();

                        $img = get_sub_field('practice_gallery_image');
                        $image_size = getimagesize($img['url']);
                        $gal_img = aq_resize($img['url'], $image_size[0], $image_size[1], true, true, true);
                        $gal_img_thumb = aq_resize($img['url'], 362, 364, true, true, true);
                        $practicetitle =  get_sub_field('practice_gallery_title');
                        $practicealt =  get_sub_field('practice_gallery_alt');

                        if(empty($practicetitle)) {
                            $practicetitle = "Confidental Smile";
                        }

                        if(empty($practicealt)) {
                            $practicealt = "Confidental Smile";
                        }
                    ?>
            <div class="practice-row1">
                <a class="practice-bar1 thumbnail gallery" href="<?php echo $gal_img; ?>">
                   <img loading="lazy" src="<?php echo $gal_img_thumb; ?>" title="<?php echo $practicetitle; ?>"  alt="<?php echo $practicealt; ?>" />
                </a>
            </div>
              <?php 
                                            endwhile;
                                        ?>     



           



</div>
            
    </div>
</section>

<?php include_once('include/gester-wrapp.php'); ?>
<?php include_once('include/judger-wrapp.php'); ?>
<?php include_once('include/knower-wrapp.php'); ?>
<?php include_once('include/laboer-wrapp.php'); ?>
<?php include_once('include/marker-wrapp.php'); ?>

<?php
get_footer();