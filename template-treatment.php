<?php
/**
 * * Template Name: Treatments Page
 * */
get_header();
?>

<?php 
$terms = get_terms('treatmentcategory',array('hide_empty'=>true));
if(!empty($terms)) { ?>
<section id="myAnchor" class="conten-wrapp treat-wrapp">
	<div class="margin">
    
        <div class="treat-row1">
            
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

                $treatmentcat_img = get_field('treatment_category_image',$term);
                $treat_cat_imgurl = $treatmentcat_img['url'];
                   
                $cat_img_alt = $treatmentcat_img['alt'];
                    if(empty($cat_img_alt)) {
                        $cat_img_alt = 'Treatment - 2greendental';
                    }
            ?>


            <div class="treat-row2 masonry-row1">
                <div class="treat-bar1 masonry-bar1"><?php if(!empty($treatmentcat_img)) {

                            $image_size = getimagesize($treat_cat_imgurl);

                         ?>
                                  <a href="<?php echo $link;?>" >  <img loading="lazy" src="<?php echo aq_resize($treat_cat_imgurl, 362, 364, true, true, true); ?>" alt="<?php echo $cat_img_alt;?>" /></a>
                            <?php } else { ?>
                                   <a href="<?php echo $link;?>" > <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/treatments-noimage.jpg"  alt="<?php echo $cat_img_alt;?>" /></a>
                            <?php } ?></div>
                <div class="treat-bar2">
                    <h2><?php echo $term->name;?></h2>
                </div>
                 <a href="<?php echo $link;?>" class="comman-anchor"></a>
            </div>
            
           <?php } ?>


                
        </div>
    
    </div>
</section>
<?php } ?>  

<?php include_once('include/gester-wrapp.php'); ?>
<?php include_once('include/judger-wrapp.php'); ?>
<?php include_once('include/knower-wrapp.php'); ?>
<?php include_once('include/laboer-wrapp.php'); ?>
<?php include_once('include/marker-wrapp.php'); ?>
                    
<?php
get_footer();