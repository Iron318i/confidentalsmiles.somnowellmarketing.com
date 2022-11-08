<?php
/**
 * * Template Name: About Page
 * */
get_header();
?>


<section id="myAnchor" class="conten-wrapp">

	<div class="conten-row1">
    	<div class="conten-bar1 abouer-wrapp common-style">
            
            

			<?php while (have_posts()):the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>

            <?php 

                    $var=get_field('cqc_widget',$post->ID);
                    if(!empty($var)){  ?>
			<div class="abouer-row2">
				<div class="abouer-bar2">
					  <?php echo $var; ?>
				</div>
			</div>
            <?php  }
                    ?>
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
