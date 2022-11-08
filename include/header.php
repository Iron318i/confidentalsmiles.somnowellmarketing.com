<header class="header-wrapp">
	<div class="margin">
    	<?php 
    	if(!empty(get_field('footer_logo','options'))){
    		$var=get_field('footer_logo','options'); 
    		if(empty($var['alt'])){

    			$img_alt="Confidental Smile - Logo";	
    		}else{
    			
    			$img_alt=get_field('footer_logo','options')['alt'];


    		}
    		?>
  
		<div class="header-box1 wow fadeIn" data-wow-delay="300ms">

				<a href="<?php echo site_url('/'); ?>"><img loading="lazy" src="<?php echo aq_resize($var['url'], 298, 83, true, true, true); ?>" alt="<?php echo $img_alt; ?>" /></a>
		</div>

		  <?php	}
    	

    	?>
        <div class="header-box2 wow fadeIn" data-wow-delay="300ms">
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
		<?php  

		$var=get_field('address','options');
		if(!empty($var)){  ?>
        <div class="header-box3 wow fadeIn" data-wow-delay="300ms">
			<p><?php echo $var; ?></p>
		</div>
		<?php }
		?>
		<?php 
              $rows = get_field('i_would_like_to','options'); 
              if(!empty($rows)) {  ?>
        <div class="header-box4">
			<form action="#" method="get">
			<span class="custom-text1 wow fadeIn" data-wow-delay="300ms">I would like to</span>
			<div class="custom-select1 wow fadeIn" data-wow-delay="300ms">
				<select name="redirectURL1" class="banner-fild1">
                     <option value="your natural smile" disabled="" selected="" style="display:none">Please Select </option>
                           <?php  foreach($rows as $row) { 

                                if(!empty($row['dropdown_treatment_link']) && !empty($row['dropdown_treatment_name'])){

                ?>
                            <option

                            <?php

                              if($row['dropdown_treatment_link_type'] =='int'){ ?>

                                 value="<?php echo site_url('/').$row['dropdown_treatment_link']; ?>"

                         <?php     }else{  ?>

                                 value="<?php echo $row['dropdown_treatment_link']; ?>"  target="_new"

                          <?php     }

                              ?>

                              ><?php echo $row['dropdown_treatment_name']; ?></option>  
                            <?php } } ?>
                </select>
			</div>
			</form>
		</div>
			<?php } ?>
		<div id="menuzord" class="header-row1 menuzord red menucontrol" data-wow-delay="300ms" style="display:none; ">
           
					<?php wp_nav_menu(array('menu'=>'Header Category Menu','container'=>'none','menu_class'=>'header-bar1 menuzord-menu wow fadeIn'));?>
		</div>
        <div class="header-row2">
			<div class="header-bar2 ">

				<?php  

		$var=get_field('phone','options');
		if(!empty($var)){ ?>
			<?php /* ?>
				<a href="tel:<?php echo str_replace(' ', '', $var); ?>" class="header-btn1 wow fadeIn" data-wow-delay="300ms"><span>Call </span><?php echo $var; ?></a>
				<?php */ ?>
				<a href="tel:<?php echo str_replace(' ', '', $var); ?>"><span class="mediahawkNumber4184 mhMobile header-btn1 wow fadeIn" data-wow-delay="300ms"><?php echo $var; ?></span></a>
				<?php }
		?>

				<?php  

		$var=get_field('book_online','options');
		if(!empty($var)){  ?>
				<a href="<?php echo $var; ?>"  target="_blank" class="header-btn2 wow fadeIn" data-wow-delay="300ms">Book Online</a>
				<?php }
		?>



		<a  class="header-btn2 wow fadeIn" data-dialog="somedialog" data-wow-delay="300ms">Call Back</a>

				<?php  

		$var=get_field('contact_us','options');
		if(!empty($var)){  ?>
				<a href="<?php echo site_url('/').$var; ?>" class="header-btn3 wow fadeIn" data-wow-delay="300ms">Contact Us</a>
				<?php }
		?>
			</div>
		</div>
                    
	</div>
</header>