<?php
$prev_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
$terms = get_terms('gallerycategory',array('hide_empty'=>true));
  if(!empty($terms)) {
?>
<div class="sidbar-row3">
  <h3>Categories</h3>
        <ul class="sidbar-bar3">
        <?php 
        foreach ($terms as $term) {
      $pages = get_posts(array(
        'post_type' => 'gallery',
        'numberposts' => -1,
        'tax_query' => array(
          array(
            'taxonomy' => 'gallerycategory',
            'field' => 'id',
            'terms' => $term->term_id, // Where term_id of Term 1 is "1".
            'include_children' => false
          )
        )
      ));
      $count = count($pages);//print_r($pages);
        if($count == 1){
          $id = $pages[0]->ID;
          $link = get_permalink($id);
        } else {
          $link = get_term_link($term->term_id);
        }
      $query_args = get_posts(array(
        'post_type' => 'gallery',
          'tax_query' => array(
            array(
              'taxonomy' => 'gallerycategory',
              'field' => 'term_id',
              'terms' => $term->term_id,
              )
            ),
      ));
    if (!empty($query_args)) {
      $category_link = get_category_link($term->term_id);
    ?>
            <li <?php if(get_queried_object_id() == $term->term_id || $category_link == $prev_url){echo 'class="active"';  }?>><a href="<?php echo $link; ?>"><?php echo $term->name;?></a></li>
        <?php }
          }
        ?>
        </ul>
</div>
<?php }
?>
