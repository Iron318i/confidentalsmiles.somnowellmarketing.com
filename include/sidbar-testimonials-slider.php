
<?php 
            	if(!empty(get_field('testimonials',15))){


            		$tes=get_field('testimonials',15);

            		?>
<div class="sidbar-row22">
	<div class="silder-row">
		<div class="slider fade">
              <?php 

              foreach($tes as $rwo)
            	{

              ?>      
			<div>
			<div class="sidbar-row2">
				<div class="sidbar-bar2">
					<h2>testimonials</h2>
					<h3>We Love our patients</h3>
					<?php if(!empty($rwo['testimonial_message'])){  ?>



                    
                        <p>"<?php 
                        
	$stat= $rwo['testimonial_message'];
	$datafeedchars=100;
    $res= substr($stat, 0, $datafeedchars);
    echo  wp_strip_all_tags($res);
    if(strlen($res) >=$datafeedchars){
	echo "...";

	}


                         ?>"</p>

                        	<?php } ?>
					<?php if(!empty($rwo['testimonial_author'])){  ?>
                        <h4><?php echo $rwo['testimonial_author']; ?></h4>
                        	<?php }

                    	?>
					<div class="sidbar-bar22">
						<div class="sidbar-rating"><img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/rating-thumb1.png" alt="rating thumb1"/></div>
					</div>
					<a href="<?php echo get_permalink(15);?>" class="sidbar-btn2">Read More</a>
				</div>
			</div>
			</div>
            
           <?php } ?>
                                    
		</div>
	</div>
            
</div>
<?php } ?>