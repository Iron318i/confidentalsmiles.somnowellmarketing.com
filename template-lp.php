<?php
/*
 * Template Name: LP - Full Width
 */
get_header(); 
?>    
<section id="myAnchor" class="conten-wrapp" style="background: transparent;">

	<div class="conten-row1 common-style" style="width: 100%; float: left; text-align: center;">
		<div class="conten-bar1 treatin-wrapp" style="width: 90%; display: inline-block; float: none;">
			<?php while(have_posts()):the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>
		</div><!-- / .conten-bar1 .treatin-wrapp -->
	</div><!-- / .conten-row1 .common-style -->
    
</section>

<?php include_once('include/knower-wrapp.php'); ?>
<?php include_once('include/laboer-wrapp.php'); ?>
<?php include_once('include/marker-wrapp.php'); ?>
         

<?php
get_footer();