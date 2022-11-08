<section class="marker-wrapp">
	<div class="margin">
        <?php  

        $var=get_field('footer_address','options');
        if(!empty($var)){  ?>
		<div class="marker-row1">
        	<div class="marker-bar1 wow fadeIn" data-wow-delay="200ms">
				<p><?php echo $var; ?></p>
            </div>
        </div>
    <?php } ?>
        <div class="marker-row2">
        	<div class="marker-bar2">
			<?php  

        $var=get_field('book_online','options');
        if(!empty($var)){  ?>
                <a href="<?php echo $var; ?>"  target="_blank" class="marker-btn1 wow fadeIn" data-wow-delay="300ms">Book Online</a>
                <?php }
        ?>
                <?php  
        $var=get_field('phone','options');
        if(!empty($var)){  ?>
             <?php /* ?>
                <a href="tel:<?php echo str_replace(' ', '', $var); ?>" class="marker-btn1 wow fadeIn" data-wow-delay="300ms"><span>Call </span><?php echo $var; ?></a>
                <?php */ ?>
                <a href="tel:<?php echo str_replace(' ', '', $var); ?>"><span class="mediahawkNumber4184 marker-btn1 wow fadeIn" data-wow-delay="300ms"><?php echo $var; ?></span></a>
                <?php }
        ?>
        <?php  

        $var=get_field('contact_us','options');
        if(!empty($var)){  ?>
                <a href="<?php echo site_url('/').$var; ?>" class="marker-btn1 wow fadeIn" data-wow-delay="300ms">Contact Us</a>
                <?php }
        ?>
            </div>
        </div>
        <div class="marker-row3">
        	<div class="marker-bar3 wow fadeIn" data-wow-delay="400ms">

				<?php  

        $var=get_field('facebook','options');
        if(!empty($var)){  ?>
            <a href="<?php echo $var; ?>"  target="_blank" ><img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/marker-icon1.png" alt="marker icon1"></a>
            <?php }
        ?>
            <?php  

        $var=get_field('instagram','options');
        if(!empty($var)){  ?>
            <a href="<?php echo $var; ?>"  target="_blank" ><img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/marker-icon2.png" alt="marker icon2"></a>
            <?php }
        ?>
            <?php  

        $var=get_field('twitter','options');
        if(!empty($var)){  ?>
            <a href="<?php echo $var; ?>"  target="_blank" ><img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/marker-icon3.png" alt="marker icon3"></a>
            <?php }
        ?>
            <?php  

        $var=get_field('youtube','options');
        if(!empty($var)){  ?>
            <a href="<?php echo $var; ?>"  target="_blank" ><img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/marker-icon4.png" alt="marker icon4"></a>
            <?php }
        ?>
            </div>
        </div>
    
    </div>
</section>