
<?php
$prev_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';

$args = array(
    'post_type'=>'treatment',
    'posts_per_page'=>-1,
    'post_status'=>'publish',
        'tax_query' => array(
            array(
                'taxonomy' => 'treatmentcategory',
                'field'    => 'id',
                'terms'    => get_queried_object_id(),
                )
            )
    );       
query_posts($args); 

$countingpost=1;
while(have_posts()) : the_post();
    $countingpost++;
    endwhile;
   






   if($countingpost <=2){

    if (isset($_GET["call"])) {  ?>
    
<script>window.location.replace("<?php echo get_permalink(12);?>");</script>
<?php }else{  ?>

    <script>window.location.replace("<?php echo get_permalink($post->ID);?>");</script>
   
<?php  }  }else{  ?>

   <!--  <script>window.location.replace("<php echo get_permalink($post->ID);?>");</script> -->

    <?php }   ?>

    <?php 
 get_header();
?>

<?php
$args = array(
    'post_type'=>'treatment',
    'posts_per_page'=>-1,
    'post_status'=>'publish',
        'tax_query' => array(
            array(
                'taxonomy' => 'treatmentcategory',
                'field'    => 'id',
                'terms'    => get_queried_object_id(),
                )
            )
    );       
query_posts($args); 
?>
<section id="myAnchor" class="conten-wrapp treat-wrapp">
	<div class="margin">
    
        <div class="treat-row1">
            
        		<?php while(have_posts()) : the_post();
                $treat_cat_imgurl = wp_get_attachment_url(get_post_thumbnail_id($post->ID),'large');
                $cat_img_alt = get_post_meta(get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true);
                        if(empty($cat_img_alt)) {
                            $cat_img_alt = 'Treatment - Confidental Smile';
                        }
            ?>


            <div class="treat-row2 masonry-row1">
                <div class="treat-bar1 masonry-bar1"><?php if(!empty($treat_cat_imgurl)) {

                            $image_size = getimagesize($treat_cat_imgurl);

                         ?>
                                  <a href="<?php echo get_permalink($post->ID);?>">  <img loading="lazy" src="<?php echo aq_resize($treat_cat_imgurl, 500, 500, true, true, true); ?>" alt="<?php echo $cat_img_alt;?>" /></a>
                            <?php } else { ?>
                                   <a href="<?php echo $link;?>" > <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/treatments-noimage.jpg"  alt="<?php echo $cat_img_alt;?>" /></a>
                            <?php } ?></div>
                <div class="treat-bar2">
                    <h2><?php echo the_title();?></h2>
                </div>
                 <a href="<?php echo get_permalink($post->ID);?>" class="comman-anchor"></a>
            </div>
            
                 <?php endwhile;?>


                
        </div>
    
    </div>
</section>

<?php include_once('include/gester-wrapp.php'); ?>
<?php include_once('include/judger-wrapp.php'); ?>
<?php include_once('include/knower-wrapp.php'); ?>
<?php include_once('include/laboer-wrapp.php'); ?>
<?php include_once('include/marker-wrapp.php'); ?>
                    
<?php
get_footer();