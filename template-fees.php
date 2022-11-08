<?php
/**
 * * Template Name: Fees Page
 * */
get_header();
?>


<section id="myAnchor" class="conten-wrapp">

	<div class="conten-row1">
    	<div class="conten-bar1 feeser-wrapp common-style">
			
            <?php while (have_posts()):the_post(); ?>
    <?php the_content(); ?>
<?php endwhile; ?>
<?php wp_reset_query(); ?>
                
               <div class="accordion">
                   
                    <?php 
                $args = get_posts(array('post_type'=>'feedata','post_status'=>'publish','posts_per_page'=>-1));
                if(!empty($args)) { 
                    foreach($args as $item) { ?>
                    <div class="feeser-row1"> 
                        <h2>
                        <div class="subheading">  
                            <div class="headone">Consultation Type</div> 
                            <div class="headtwo"> Cost</div> 
                             <div class="headtwo">Memberships</div> 
                              <div class="headtwo">Denplan</div> 
                        </div></h2>
                        <div class="content">
                        <div class="feeser-row2">
                            <?php if(have_rows('treatment_fees',$item->ID)): 
                                    while ( have_rows('treatment_fees',$item->ID) ) : the_row();
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
                                if(!empty(get_sub_field('treatment_price'))){ ?>
                               
                                    <?php echo get_sub_field('treatment_price');?>
                               
                                 <?php  }
                                ?>   </div>


                                 <div class="feeser-bar2">

                                 <?php
                                if(!empty(get_sub_field('treatment_membership'))){ ?>
                               
                                    <?php echo get_sub_field('treatment_membership');?>
                             
                                 <?php  }
                                ?>
                                   </div>

                                    <div class="feeser-bar2">
                                 <?php
                                if(!empty(get_sub_field('treatment_dental_plan'))){ ?>
                               
                                    <?php echo get_sub_field('treatment_dental_plan');?>
                                
                                 <?php  }
                                ?>

                                </div>











                            </div>
                            
                                 <?php endwhile;
                                endif;?>   
                            
                            
                           
                            
                         
                            
                        </div>
                        </div>
                    </div>
                    
                       <?php } } ?>   
                    
                </div>

        <div class="accordion">


 <?php if(have_rows('menu',$post->ID)): 
                                    while ( have_rows('menu',$post->ID) ) : the_row();
                            ?>

                <div class="feeser-row1"> 
                    
                    <h2>

                        <?php if(!empty(get_sub_field('menu_heading'))){ ?>
                            <div class="menuhead">
                        <?php echo get_sub_field('menu_heading'); ?>
                           </div>
                         <?php } ?>

                          <?php if(!empty(get_sub_field('menu_total'))){ ?>
                         <div class="menutotal">
                          <?php echo get_sub_field('menu_total'); ?>
                      </div>
                       <?php } ?>

                        </h2>
               
                <div class="content">
                    <div class="feeser-row2">



                        <div class="feeser-row3 menucontent">


                            <div class="feeser-bar1">
                                <?php echo get_sub_field('menu_content'); ?>
                            </div>


                            


                        </div>
                       


                    </div>
                </div>
                </div>
                
                
<?php endwhile;
                                endif;?>  
                
                
            </div>


                  <?php
if(!empty(get_field('footer_content',$post->ID))){  ?>


            <div class="sub-content">
                <?php echo get_field('footer_content',$post->ID); ?>
            </div>
                
              <?php
}

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
