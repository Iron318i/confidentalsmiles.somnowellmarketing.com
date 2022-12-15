<?php
/**
 * * Template Name: Fees Template Page
 * */
get_header();
?>


<section id="myAnchor" class="conten-wrapp fees-extra">
		<div class="margin">

	<div class="conten-row1">
    	<div class="conten-bar1 feeser-wrapp common-style">
			<div class="fees-full-side">
				
				<div class="right-hand">
					
				<?php while (have_posts()):the_post(); ?>
				<?php the_content(); ?>
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>

					</div>
				
<?php if(!empty(get_field('launch_finanance_button_label',$post->ID))){ ?>

<div class="lanuch-btn">

    <a href="<?php echo get_field('launch_finanance_button_label_copy',$post->ID); ?>" target="_blank"><?php echo get_field('launch_finanance_button_label',$post->ID); ?></a>


    </div>

<?php } ?>
			
			</div>
			
			<?php $terms = get_terms('feesecategorynew',array('hide_empty'=>true));



if(!empty($terms)) { ?>
			<div class="full-btn-case tabstyle">
					<?php
					
					    foreach ($terms as $term) {  ?>
					
					<a  class="term-case common-case unit-<?php echo $term->term_id; ?>" data-deq="<?php echo $term->term_id; ?>" ><?php echo $term->name;?></a>
				
					<?php } ?>
			</div>
			<?php } ?>
			<?php $terms = get_terms('feesecategorynew',array('hide_empty'=>true));



if(!empty($terms)) { 
			$uter=0;
			foreach ($terms as $term) {  ?>
                
               <div class="accordion common-acc unitacc<?php echo $term->term_id; ?>" <?php if($uter==0){ ?> style="display:none;"  <?php }else{ ?> style="display:none;"  <?php } ?> >
                   
                    <?php  $rowcount=0;
                $args = get_posts(array('post_type'=>'feenewdata','orderby'=>'menu_order','order'=>'DESC','post_status'=>'publish','posts_per_page'=>-1,'tax_query' => array(



               array(



                   'taxonomy' => 'feesecategorynew',



                   'field'    => 'id',



                   'terms'    => $term->term_id,



                   )



               )));
                if(!empty($args)) { 
                    foreach($args as $item) { ?>
                    <div class="feeser-row1"> 
                        <h2>
                        <div class="subheading">  
                            <div class="headone"><?php echo $item->post_title; ?></div> 
                             
                        </div></h2>
                        <div class="content">
                        <div class="feeser-row2">
                            <?php
											 	
											 if(have_rows('fees2022',$item->ID)): 
                                    while ( have_rows('fees2022',$item->ID) ) : the_row();
                            ?>
                            <div class="feeser-row3 <?php
                                if(!empty(get_sub_field('treatment_highlight'))){ 


                                    if(get_sub_field('treatment_highlight')[0] =='highlight'){

                                        echo "highlight";

                                    }

                                    }
                                ?>" >

                           
                                <div class="feeser-bar1">
                                    <?php
                                if(!empty(get_sub_field('treatment_name'))){ ?>
                                     <?php echo get_sub_field('treatment_name');?>
                                      <?php  }
                                ?>
                                </div>
                                 <div class="feeser-bar2">
                                <?php
                                if(!empty(get_sub_field('treatment_price_1'))){ ?>
                               
                                    <?php echo get_sub_field('treatment_price_1');?>
                               
                                 <?php  }
                                ?>   </div>


                                 <div class="feeser-bar2">

                                 <?php
                                if(!empty(get_sub_field('treatment_price_2'))){ ?>
                               
                                    <?php echo get_sub_field('treatment_price_2');?>
                             
                                 <?php  }
                                ?>
                                   </div>

                                 <?php
                                if(!empty(get_sub_field('treatment_content'))){ ?>

                                    <div class="feeser-bar2 tooltip" onclick="showsmorebenefit('<?php echo $rowcount; ?>')"  >

                                        <span class="tooltip">&iexcl;</span>


                               
							 		 
                                
                                

                                </div>

                                 	<?php } ?>

                           

                             <?php
                                if(!empty(get_sub_field('treatment_content'))){ ?>

                            <div class="treatment-content  unit_<?php echo $rowcount; ?>" style="display:none;">

                                    <?php echo get_sub_field('treatment_content');?>

                                    <?php if(get_sub_field('book_now_copy') ==  "External"){ ?>

                                <a href="<?php echo get_sub_field('book_now');?>" target="_blank" class="buk-now"> Book Now </a>

                            <?php }else{ ?>

                                <a href="<?php echo site_url('/').get_sub_field('book_now');?>"   class="buk-now"> Book Now </a>

                            <?php } ?>

                            </div>

                             <?php  }
                                ?>
							</div>
                            
                                 <?php $rowcount++; endwhile;
                                endif;?>   
                            
                            
                           
                            
                         
                            
                        </div>
                        </div>
                    </div>
                    
                       <?php } } ?>   
                    
                </div>

       <?php $uter++; } }  ?>

 
            
                        
        </div>
    </div>
	
	 </div>
    <?php /***
    <div class="conten-row2">
        <div class="conten-bar2 sidbar-wrapp">
			        	
            <?php include_once('include/sidbar-form.php'); ?>
            
            <?php include_once('include/sidbar-testimonials-slider.php'); ?>
            
    	</div>
    </div>
	<?php *****/ ?>
    
    <?php include_once('include/canver-wrapp.php'); ?>

</section>

<?php include_once('include/gester-wrapp.php'); ?>

<?php include_once('include/judger-wrapp.php'); ?>

<?php include_once('include/knower-wrapp.php'); ?>

<?php include_once('include/laboer-wrapp.php'); ?>

<?php include_once('include/marker-wrapp.php'); ?>

<script>
function showsmorebenefit(idee){
	
	
	
  if(jQuery('.unit_'+idee).is(':visible')){
	   	jQuery('.unit_'+idee).hide();
	   }else{
		   jQuery('.treatment-content').hide();
	   		jQuery('.unit_'+idee).show();
	   }
	
}
	
jQuery(".common-case").click(function(){  
	
		 var activedata = jQuery(this).attr('data-deq');
         jQuery('.common-case').removeClass('active');
	
		jQuery(this).addClass('active');
	
		jQuery('.common-acc').hide();
	
		jQuery('.unitacc'+activedata).show();
		jQuery('.accordion .content').hide();
		jQuery('.unitacc'+activedata+' h2:first').addClass('active').next().slideDown('slow');
		
    });

</script>



<?php
get_footer();
