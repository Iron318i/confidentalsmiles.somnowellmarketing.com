<?php
/**
 * * Template Name: Contact Page
 * */
get_header();
?>


<section id="myAnchor" class="conten-wrapp">

	<div class="conten-row1">
    	<div class="conten-bar1 contac-wrapp">
            
            <div class="contac-row11">
                
                <div class="addres-wrapp">
                
                    <div class="addres-row1">
                        <?php 

                        $var=get_field('contact_address',$post->ID);
                        if(!empty($var)){  ?>


                      
						<div class="addres-row2">
							<div class="addres-bar2">
								<p><?php echo $var; ?></p>
							</div>
						</div>
                        <?php  }
                        ?>
                         <?php 

                        $var=get_field('phone','options');
                        if(!empty($var)){  ?>           
						<div class="addres-row3">
							<div class="addres-bar2">
								<?php /* ?><p><a href="tel:<?php echo str_replace(' ', '', $var); ?>"><span>T.</span> <?php echo $var; ?></a></p>
                                <?php */ ?>
                                <p><a href="tel:<?php echo str_replace(' ', '', $var); ?>">T. <span class="mediahawkNumber4184"><?php echo $var; ?></span></a></p>
                  			</div>
                		</div>
                            <?php  }
                        ?>  
                        <?php 

                        $var=get_field('email',$post->ID);
                        if(!empty($var)){  ?>
      
						<div class="addres-row3">
                      		<div class="addres-bar2">
                           		<p><a href="mailto:<?php echo str_replace(' ', '', $var); ?>"><span>E.</span>    <?php echo $var; ?></a></p>
                       		</div>
						</div>
                         <?php  }
                        ?>  
                    </div>
                    
                </div>
                
                <div class="contac-row1">
                    <div class="contac-bar1">
                        <h2>Get in touch</h2>

                            <script type="text/javascript" data-no-optimize="1">
                                hbspt.forms.create({
                                    region: "eu1",
                                    portalId: "25790036",
                                    formId: "fa0ac857-d050-4de3-afdc-491c310b2ad5"
                                  });
                            </script>

                    </div>
        		</div>
                
                </div>
            
        </div>
    </div>
    
    <div class="conten-row2">
        <div class="conten-bar2 sidbar-wrapp">
			        	
            <div class="sidbar-row">

                <?php 


                        $var=get_field('opening_hours',$post->ID);

                        if(!empty($var)){  ?>  
                <div class="sidbar-row1">
                    <h3>Opening Hours</h3>

 <?php foreach($var as $row ){  ?>
                    <div class="contac-time">
                        <div class="contac-lt">
                           <?php echo $row['day']; ?>
                        </div>
                        <div class="contac-rt">
                            <?php echo $row['time']; ?>
                        </div>
                    </div>
                    <?php   }
                        ?>
                </div>

                <?php   }
                        ?>
			</div>
            
    	</div>
    </div>
    <?php 

                        $var=get_field('map',$post->ID);
                        if(!empty($var)){  ?>
    <div class="map-row1">
    	<iframe loading="lazy" src="<?php echo $var; ?>" class="map-color" style="border:0;" allowfullscreen=""></iframe>
    </div>
<?php } ?>
    
    <?php include_once('include/canver-wrapp.php'); ?>

</section>

<?php include_once('include/gester-wrapp.php'); ?>

<?php include_once('include/judger-wrapp.php'); ?>

<?php include_once('include/knower-wrapp.php'); ?>

<?php include_once('include/laboer-wrapp.php'); ?>

<?php include_once('include/marker-wrapp.php'); ?>
                    





<?php
get_footer();
