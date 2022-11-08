<?php 
    	if(!empty(get_field('footer_logo','options'))){
    		$var=get_field('footer_logo','options'); 
    		if(empty($var['alt'])){

    			$img_alt="ConfidentalSmile Logo";	
    		}else{
    			
    			$img_alt=get_field('footer_logo','options')['alt'];


    		}
    		?>
<section class="knower-wrapp">
	<div class="margin">
    
		<div class="knower-row1">
        	<div class="knower-bar1 wow fadeIn" data-wow-delay="200ms">
            	<a href="<?php echo site_url('/'); ?>"><img loading="lazy" src="<?php echo aq_resize($var['url'], 298, 83, true, true, true); ?>" alt="<?php echo $img_alt; ?>" /></a>
            </div>
        </div>
    
    </div>
</section>
<?php	}
    	

    	?>