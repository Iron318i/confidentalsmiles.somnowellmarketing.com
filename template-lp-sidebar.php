<?php
/*
 * Template Name: LP - With Sidebar
 */
get_header(); 
?>    
<section id="myAnchor" class="conten-wrapp" style="background: transparent;">

	<div class="conten-row1 common-style">
		<div class="conten-bar1 treatin-wrapp">
			<?php while(have_posts()):the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>
		</div><!-- / .conten-bar1 .treatin-wrapp -->
	</div><!-- / .conten-row1 .common-style -->
    
	<div class="conten-row2">
		<div class="conten-bar2 sidbar-wrapp">
			<?php include_once('include/sidbar-form.php'); ?>
		</div><!-- / .conten-bar2 .sidbar-wrapp -->
	</div><!-- / .conten-row2 -->
    
</section>

<?php include_once('include/knower-wrapp.php'); ?>
<?php include_once('include/laboer-wrapp.php'); ?>
<?php include_once('include/marker-wrapp.php'); ?>
         

<?php
get_footer();