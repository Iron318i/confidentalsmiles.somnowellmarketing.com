<?php 
$terms = get_terms('treatmentcategory',array('hide_empty'=>true));
if(!empty($terms)) { ?>
<div class="canver-wrapp canver-wrapp2">
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
                        $cat_img_alt = 'Treatment - 2greendental';
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
</div>
<?php } ?>