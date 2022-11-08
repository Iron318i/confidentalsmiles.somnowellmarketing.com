<section class="linker-wrapp">
	<div class="margin">
    	<?php 
    	if(!empty(get_field('logo','options'))){
    		$var=get_field('logo','options'); 
    		if(empty($var['alt'])){

    			$img_alt="confidentsmilenew -logo";	
    		}else{
    			
    			$img_alt=get_field('logo','options')['alt'];


    		}
    		?>
		<div class="linker-row1">
			<div class="linker-bar1 wow fadeIn" data-wow-delay="200ms">
				<a href="<?php echo site_url('/'); ?>"><img loading="lazy" src="<?php echo aq_resize($var['url'], 298, 83, true, true, true); ?>" alt="<?php echo $img_alt; ?>" /></a>
			</div>
		</div>
		 <?php	}
    	

    	?>
		<?php  

		$var=get_field('address','options');
		if(!empty($var)){  ?>
		<div class="linker-row2">
			<div class="linker-bar2 wow fadeIn" data-wow-delay="300ms">
				<p><?php echo $var; ?></p>
			</div>
		</div>
		<?php }
		?>
        <div class="linker-row3">
			<div class="linker-bar3 wow fadeIn" data-wow-delay="300ms">
				<?php  

		$var=get_field('facebook','options');
		if(!empty($var)){  ?>
			<a href="<?php echo $var; ?>"  target="_blank" ><img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/linker-icon1.png" alt="linker-icon1" /></a>
			<?php }
		?>
                <?php  

		$var=get_field('instagram','options');
		if(!empty($var)){  ?>
			<a href="<?php echo $var; ?>"  target="_blank" ><img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/linker-icon2.png" alt="linker icon2" /></a>
			<?php }
		?>
               <?php  

		$var=get_field('twitter','options');
		if(!empty($var)){  ?>
			<a href="<?php echo $var; ?>"  target="_blank" ><img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/linker-icon3.png" alt="linker icon3" /></a>
			<?php }
		?>
               <?php  

		$var=get_field('youtube','options');
		if(!empty($var)){  ?>
			<a href="<?php echo $var; ?>"  target="_blank" ><img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/linker-icon4.png" alt="linker icon4" /></a>
			<?php }
		?>
			</div>
		</div>
		<?php 
              $rows = get_field('i_would_like_to','options'); 
              if(!empty($rows)) {  ?>
        <div class="linker-row4">
			<div class="linker-bar4">
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
		</div>
           	<?php } ?> 
	</div>
</section>