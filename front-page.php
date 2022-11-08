<?php
get_header();
?>


<section class="banner-wrapp">

         <?php 
    $var=get_field('home_banner','5');
    if(!empty($var)){  ?>
    <div class="welcome-slides owl-carousel">
         <?php  foreach($var as $row){ 

    
    if(empty($row['home_banner_image']['url'])){

       // $img=TEMPLATE_URL.'images/';
    }else{
$img=$row['home_banner_image']['url'];


    }

   if(empty($row['home_banner_image']['alt'])){


  $alt="Banner confidentsmilenew";

    }else{

       $alt= $row['home_banner_image']['alt'];

    }

  ?>




        <div class="single-welcome-slide">
            <div class="main-bg-img">
                 <?php 


            if(!empty($img)){

            ?>

                
                <img loading="lazy" src="<?php echo aq_resize($img, 1500, 868, true, true, true); ?>" alt="<?php echo $alt;?>" />
               
<?php } ?>
            </div>
            <div class="banner-row1">
                
                <div class="margin">
                    <div class="banner-bar1">

                        <?php 


            if(!empty($row['home_banner_title'])){  

            ?>
                        <h2 data-animation="fadeInLeft" data-delay="200ms"><?php  echo $row['home_banner_title']; ?></h2>


                        <?php 
                    }

            if(!empty($row['home_banner_content'])){  

            ?>
                        <p data-animation="fadeInLeft" data-delay="400ms"><?php  echo $row['home_banner_content']; ?></p>
                         <?php } ?>
                          <?php 


            if(!empty($row['home_banner_learn_more_link_2'])  & !empty($row['home_banner_learn_more_label']) ){  

            ?>
                        <a

                       

                        href="<?php echo site_url('/').$row['home_banner_learn_more_link_2']; ?>"
                     
                        


                          class="banner-btn1" data-animation="fadeInLeft" data-delay="600ms">
                                <?php 


            if(!empty($row['home_banner_learn_more_label_2'])){  

                echo $row['home_banner_learn_more_label_2'];

}
            ?>



                        </a>
                        <?php } ?>
                      <?php 


            if(!empty($row['home_banner_learn_more_link'])  & !empty($row['home_banner_learn_more_label']) ){  

            ?>
                        <a 


                       
                             href="<?php echo $row['home_banner_learn_more_link']; ?>" target="_blank"
                    


                        class="banner-btn1" data-animation="fadeInLeft" data-delay="600ms">
                                <?php 


            if(!empty($row['home_banner_learn_more_label'])){  

                echo $row['home_banner_learn_more_label'];

}
            ?>



                        </a>
                        <?php } ?>

                       
                    </div>
                </div>
                    
            </div>
        </div>
        
        
<?php } ?>



        
    
    </div>

    <?php } ?>
    <?php if(!empty(get_field('home_banner_watch_video',5))){ 

        ?>
    <div class="banner-row2">
                
        <div class="margin">
            <div class="banner-bar2 wow fadeIn" data-wow-delay="300ms">
                <a href="<?php echo get_field('home_banner_watch_video',5); ?>" target="_blank" class="" >
                    <span class="video-play-button">
                        <span></span>
                    </span>
                    <span class="js-video-tex1">Virtual Tour</span>
                </a>
            </div>
        </div>

    </div>
<?php } ?>
    <?php if(!empty(get_field('google','options'))){ 

        ?>
    <div class="banner-row3">
    
        <div class="margin">
            <div class="banner-bar3 wow fadeIn" data-wow-delay="300ms">
                <a href="<?php echo get_field('google','options'); ?>" target="_blank" ><img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/google-rating-thumb1.png" alt="google rating thumb1" /></a>
            </div>
        </div>
        
    </div>
<?php } ?>
    <div class="banner-row4">
    
        <div class="margin">
            <div class="banner-bar4 wow fadeInUpBig" data-wow-delay="200ms">
                <div class="scroll-effect1" data-aos="fade-in" data-aos-easing="linear">
                    <a href="#myAnchor" id="anchor1"><span></span></a>
                </div>
            </div>
        </div>
        
    </div>
</section>
<?php 
$terms = get_terms('treatmentcategory',array('hide_empty'=>true));
if(!empty($terms)) { ?>
<section id="myAnchor" class="canver-wrapp">
    <div class="margin">
        
        <div class="canver-row1">
            <div class="slide-post owl-carousel">
                <?php foreach ($terms as $term) { 
                $pages = get_posts(array(
                    'post_type' => 'treatment',
                    'numberposts' => -1,
                      'tax_query' => array(
                        array(
                          'taxonomy' => 'treatmentcategory',
                            'field' => 'id',
                            'terms' => $term->term_id, // Where term_id of Term 1 is "1".
                            'include_children' => false
                          )
                        )
                ));
                $count = count($pages);//print_r($pages);
                    if($count == 1) {
                      $id = $pages[0]->ID;
                      $link = get_permalink($id);
                    } else {
                        $link = get_term_link($term->term_id);
                    }

                $treatmentcat_img = get_field('treatment_category_image_slider',$term);
                $treat_cat_imgurl = $treatmentcat_img['url'];
                   
                $cat_img_alt = $treatmentcat_img['alt'];
                    if(empty($cat_img_alt)) {
                        $cat_img_alt = 'Treatment - Confidental Smile';
                    }
            ?>
                <div class="canver-row2">
                    <div class="canver-bar1 masonry-row1 wow fadeIn" data-wow-delay="200ms">
                        <?php if(!empty($treatmentcat_img)) {

                            $image_size = getimagesize($treat_cat_imgurl);

                         ?>
                                  <a href="<?php echo $link;?>" >  <img loading="lazy" src="<?php echo aq_resize($treat_cat_imgurl, 326, 182, true, true, true); ?>" alt="<?php echo $cat_img_alt;?>" /></a>
                            <?php } else { ?>
                                   <a href="<?php echo $link;?>" > <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/treatments-noimage-frontpage.jpg"  alt="<?php echo $cat_img_alt;?>" /></a>
                            <?php } ?>
                    </div>
                    <div class="canver-bar2">
                        <h2 class="wow fadeIn" data-wow-delay="300ms"><?php echo $term->name;?></h2>
                        <p class="wow fadeIn" data-wow-delay="400ms"><?php echo $term->description;?></p>
                        <a href="<?php echo $link;?>" class="canver-btn1 wow fadeIn" data-wow-delay="500ms">Learn More</a>
                    </div>
                </div>
                
             <?php } ?>
                
            </div>
        </div>
        
    </div>
</section>
 <?php } ?>
<section class="detier-wrapp">
    <div class="margin">

        <div class="detier-row1">
            <?php
          
  
            if(!empty(get_field('home_clinic_background_image',5))){  ?>



       
            <div class="detier-bar1 wow fadeInRight" data-wow-delay="200ms">
                
                <img loading="lazy" src="<?php echo aq_resize(get_field('home_clinic_background_image',5)['url'], 564, 642, true, true, true); ?>" alt="<?php echo get_field('home_clinic_background_image',5)['alt'];?>" />
            </div>
<?php  }

        ?>
         <?php
          
  
            if(!empty(get_field('home_clinic_badge_image',5))){  ?>
            <div class="detier-box1 wow fadeInRight" data-wow-delay="300ms">
                 <img loading="lazy" src="<?php echo aq_resize(get_field('home_clinic_badge_image',5)['url'], 227, 250, true, true, true); ?>" alt="<?php echo get_field('home_clinic_badge_image',5)['alt'];?>" />
            </div>
<?php  }

        ?>

        </div>
        <div class="detier-row2">
            <div class="detier-bar2">
                <?php
                    $var = get_field('home_clinic_content',5);
                    if( !empty($var) ) {
                ?>
                    <?php echo $var; ?>
                <?php
                    } 
                    
                    $var = get_field('home_clinic_learn_more',5);
                    if( !empty($var) ) {

                        if( strpos($var, 'http://') === false && strpos($var, 'https://') === false ) {
                ?>
                    <a href="<?php echo site_url('/').$var; ?>"  class="detier-btn1 wow fadeInLeft" data-wow-delay="600ms">Learn More</a>
                <?php
                        } else {
                ?>
                    <a href="<?php echo $var; ?>" target="_blank" class="detier-btn1 wow fadeInLeft" data-wow-delay="600ms">Learn More</a>
                <?php
                        } // end if( strpos($var, 'http://') === false || strpos($var, 'https://') === false ) {..}else{..}
                    } // end if( !empty($var) ) {..}
                ?>

            </div>

            <?php 
            $var=get_field('home_clini_award_logo',5);
            $deit=2;
            foreach($var as $row){ 

                $image_size = getimagesize($row['home_clininc_award_image']['url']);
                $img_alt="Image alt";

             ?> 

          

            <div class="detier-box<?php echo $deit; ?> wow fadeInLeft" data-wow-delay="700ms">
                <a

                <?php 
                if(!empty($row['home_clininc_award_link'])){  ?>

                      href="<?php echo $row['home_clininc_award_link']; ?>" target="_blank"
              <?php  }

                ?>
               

                 ><img loading="lazy" src="<?php echo aq_resize($row['home_clininc_award_image']['url'], $image_size[0], $image_size[1], true, true, true); ?>" alt="<?php echo $img_alt; ?>" /> </a>
            </div>

            <?php $deit++;  }

            ?>

       





        </div>

    </div>
</section>




<section class="enquer-wrapp fullscreen background parallax" data-img-width="1500" data-img-height="800" data-diff="100">
    <div class="margin">
    
        <div class="enquer-row1">
            <div class="enquer-bar1">
                 <?php 
                $var=get_field('home_facial_aethetics_title',5);
                if(!empty($var)){  ?> 
                <h2 class="wow fadeIn" data-wow-delay="200ms"><?php echo $var; ?></h2>
                 <?php }
                ?>
                <?php 
                $var=get_field('home_facial_aethetics_content',5);
                if(!empty($var)){  ?> 
                <p class="wow fadeIn" data-wow-delay="300ms"><?php echo $var; ?></p>
                 <?php }
                ?>
                <?php 
                $var=get_field('home_facial_aethetics_learn_more_link',5);
                if(!empty($var)){  


                    ?> 
                <a href="<?php echo site_url('/').$var; ?>" class="enquer-btn1 wow fadeIn" data-wow-delay="400ms">Learn More</a>
                 <?php }
                ?>
            </div>
        </div>
            
    </div>
</section>

<?php 
        if(!empty(get_field('testimonial_video',15))){
        ?>

<section class="facier-wrapp">
    <div class="margin">
        
        <div class="facier-row1">
            <div class="slider slider-for">
            
                <?php 
                if(!empty(get_field('testimonial_video',15))){
                
                $video=get_field('testimonial_video',15);
                  $vno=count($video);
                

            }

$tno=0;

            if(!empty(get_field('testimonials',15))){
                   $tes=get_field('testimonials',15);
               
                          $tno=count($tes);
               
                }



                $bigno=0;

                if($vno>=$tno){
                    $bigno=$tno;

                }else{

                    $bigno=$vno;
                }

                $while_no=0;
               // echo $bigno;

                //while($while_no <= $bigno){   
                while($while_no<$vno){  
                ?>


            
                <div>


                    <div class="facier-row2">





                        <div class="facier-bar1 masonry-row1 wow fadeIn" data-wow-delay="200ms">
                            <div class="masonry-bar1">
                                <?php 

                                if($video[$while_no]['testimonial_video_type']=='youtube'){  ?>

                                    <img loading="lazy" src="https://img.youtube.com/vi/<?php echo $video[$while_no]['testimonial_video']; ?>/hqdefault.jpg" alt="testimonials thumb1">
                             <?php    }else{  


                                    $video_id=$video[$while_no]['testimonial_video'];
                                    $video_url ='https://player.vimeo.com/video/'.$video_id;
                                    $imgs = unserialize(file_get_contents("https://vimeo.com/api/v2/video/$video_id.php"));
                                    $img = $imgs[0]['thumbnail_large'];


                                ?>

                                <img loading="lazy" src="<?php echo $img; ?>" width="480" alt="testimonials thumb1">

                              <?php  }
                                ?>

                                
                            </div>
                            <div class="video-play-button wow fadeIn" data-wow-delay="300ms">
                                <span></span>
                            </div>
                            <?php 
                                if(!empty($video[$while_no]['testimonial_video_type'])){
                                if($video[$while_no]['testimonial_video_type']=='youtube'){  ?>
                            <a class="videobox" data-flashy-type="video" href="https://youtu.be/<?php echo $video[$while_no]['testimonial_video']; ?>">  </a>

                                 <?php    }else{   ?>
                                     <a class="videobox" data-flashy-type="video" href="https://player.vimeo.com/video/<?php echo $video[$while_no]['testimonial_video']; ?>">  </a>


                                    <?php  }  } 
                                ?>

                           
                        </div>


                        <div class="facier-bar2">
                            <h2 class="wow fadeInRight" data-wow-delay="200ms">testimonials</h2>
                            <h3 class="wow fadeInRight" data-wow-delay="300ms"><?php echo get_field('home_testimonial_title',$post->ID); ?></h3>
                            <p class="wow fadeInRight" data-wow-delay="400ms"><?php echo get_field('home_testimonial_contents',$post->ID); ?></p>
                            
                            
                            <?php  
                                       /* $stat=$tes[$while_no]['testimonial_message'];
                                        $datafeedchars=120;
                                        $res= substr($stat, 0, $datafeedchars);
                                        echo  wp_strip_all_tags($res);
                                        if(strlen($res) >=$datafeedchars){
                                        echo "...";
                                        }
                                        */
                                        ?>

                            

                            <?php 

                            if(!empty(get_field('google','options'))){  ?>


                        
                            <div class="facier-box1 wow fadeInRight" data-wow-delay="500ms">
                                <a href="<?php echo get_field('google','options'); ?>" target="_blank" ><img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/google-rating-thumb2.png" alt="google rating thumb1" /></a>
                            </div>
                            <?php    }
                            $home_testimonial_learn_more_link = get_field('home_testimonial_learn_more_link',$post->ID);
                            if(!empty($home_testimonial_learn_more_link)){
                            ?>

                            <a href="<?php echo site_url().$home_testimonial_learn_more_link;  ?>" class="facier-btn1 wow fadeInRight" data-wow-delay="600ms">Learn More</a>
                            <?php } ?>
                        </div>






                    </div>



                </div>



                
                
            
                    
<?php  $while_no++; }

                ?>





            </div>
        </div>










        <?php 
                if(!empty(get_field('testimonial_video',15))){



                
                $video=get_field('testimonial_video',15);
              
                ?>
        <div class="facier-row3">
            <div class="slider slider-nav">
            
                <?php 
                foreach($video as $vid)
                {  ?>



                <div>
                    <div class="facier-bar3 masonry-row1 wow fadeIn" data-wow-delay="200ms">
                        <div class="masonry-bar1"> 
                            <?php 
                            if(!empty($vid['testimonial_video_type'] =='youtube')){  ?>
                                <img loading="lazy" src="https://img.youtube.com/vi/<?php echo $vid['testimonial_video']; ?>/hqdefault.jpg" alt="testimonials thumb1">
                                 <?php    }else{ 

                                    $video_id=$vid['testimonial_video'];
                                    $video_url ='https://player.vimeo.com/video/'.$video_id;
                                    $imgs = unserialize(file_get_contents("https://vimeo.com/api/v2/video/$video_id.php"));
                                    $img = $imgs[0]['thumbnail_large'];


                                   ?>
                                   <img loading="lazy" src="<?php echo $img; ?>" width="480" alt="testimonials thumb1">

                          <?php   }
                            ?>
                            
                        </div>
                        <div class="video-play-button wow fadeIn" data-wow-delay="300ms">
                            <span></span>
                        </div>

                        <?php 


                            /* if(!empty($vid['testimonial_video_type'])){
                            if(!empty($vid['testimonial_video_type'] =='youtube')){  ?>
                                 <a class="videobox" data-flashy-type="video" href="https://youtu.be/<?php echo $vid['testimonial_video']; ?>"> </a>
                                 <?php    }else{   ?>
                                    <a class="videobox" data-flashy-type="video" href="https://player.vimeo.com/video/<?php echo $vid['testimonial_video']; ?>"> </a>

                          <?php   } } */
                            ?>


                         
                            
                    </div>
                </div>
                
                  <?php } ?>
            
                
            </div>
        </div>
        

    <?php } ?>


        


    </div>
</section>
<?php }?>
<?php include_once('include/gester-wrapp.php'); ?>
  <?php 
$args = get_posts(array('post_type'=>'team','post_status'=>'publish','posts_per_page'=>-1));

if(!empty($args)) { ?>
<section class="honoer-wrapp">
    <div class="margin">
        
        <div class="mona-all-model-slide owl-carousel">
        
            <?php    
               $team_count=0;
               foreach($args as $item) {
$img = wp_get_attachment_url(get_post_thumbnail_id($item->ID)); 
$imgalt = get_post_meta(get_post_thumbnail_id($item->ID),'_wp_attachment_image_alt',true);
if(empty($imgalt)) {
                            $imgalt = 'Team - Confidental';
                        }
?> 


    <?php 

    if($team_count =='0' || $team_count%2 =='0'){  ?>



   
            <div>
              
<?php }
    ?>

                <div class="honoer-row1">
                    <div class="honoer-row2">
                        <h2 class="wow fadeIn" data-wow-delay="200ms"><?php
                                    $designation=get_field('designation',$item->ID);
                                    if(!empty($designation)){
                                    ?><?php echo $designation; ?>                                    
                                       <?php }  ?></h2>
                        <h3 class="wow fadeIn" data-wow-delay="300ms"><?php echo $item->post_title; ?></h3>
                        <h4 class="wow fadeIn" data-wow-delay="400ms"><?php
                                    $designation=get_field('gdc',$item->ID);
                                    if(!empty($designation)){
                                    ?>GDC No. <?php echo $designation; ?>                                    
                                       <?php }  ?></h4>
                        <div class="honoer-bar1 masonry-row1 wow fadeIn" data-wow-delay="500ms">
                            <?php


                                if(empty($img)){ ?>

<a href="<?php echo get_permalink($item->ID); ?>"> <img loading="lazy" src="<?php echo TEMPLATE_URL.'images/noimage-team.jpg'; ?>" alt="<?php echo $imgalt; ?>"/> </a>

                      <?php      }else{  ?>

 <a href="<?php echo get_permalink($item->ID); ?>"> <img loading="lazy" src="<?php echo aq_resize($img, 113, 113, true, true, true); ?>" alt="<?php echo $img_alt; ?>" />  </a>


                     <?php      }
                            ?>
                        </div>
                        <div class="honoer-bar2">
                            <p class="wow fadeIn" data-wow-delay="600ms"><?php echo strip_shortcodes(wp_trim_words($item->post_content, 25 ));?></p>
                            <a href="<?php echo get_permalink($item->ID); ?>" class="honoer-btn1 wow fadeIn" data-wow-delay="700ms">Learn More</a>
                        </div>
                    </div>
                </div>
                


 <?php 

   if($team_count =='1' || $team_count%2 !='0'){  ?>

            </div>
            <?php }
    ?>

 <?php    $team_count++;  }
                            ?>
            
        
        </div>
        
    </div>
</section>

<?php      }
                            ?>


<section class="impoer-wrapp fullscreen background parallax" data-img-width="1500" data-img-height="600" data-diff="100">
    <div class="margin">
    
        <div class="impoer-row1">


                 <div class="impoer-box1">
                    <h2 class="wow fadeIn" data-wow-delay="200ms">Contact</h2>
                    <h3 class="wow fadeIn" data-wow-delay="300ms">Get in touch</h3>
                </div>
                <script>
                  hbspt.forms.create({
                    region: "eu1",
                    portalId: "25790036",
                    formId: "fa0ac857-d050-4de3-afdc-491c310b2ad5"
                  });
                </script>

        </div><!-- / .impoer-row1 -->
        
    </div>
</section>

<?php include_once('include/judger-wrapp.php'); ?>

<?php include_once('include/knower-wrapp.php'); ?>

<?php include_once('include/laboer-wrapp.php'); ?>

<?php include_once('include/marker-wrapp.php'); ?>
                   
<?php
get_footer(); 