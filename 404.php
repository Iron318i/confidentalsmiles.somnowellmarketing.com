<?php
get_header(); ?>

              <section id="myAnchor" class="conten-wrapp">

	<div class="conten-row1">
    	<div class="conten-bar1 abouer-wrapp common-style">
                	<h1>404</h1>
                    <h2><?php _e( 'Oops! That page can&rsquo;t be found.'); ?></h2>
                    <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?'); ?></p>
					<?php get_search_form(); ?>
               
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
                    
<?php get_footer();
