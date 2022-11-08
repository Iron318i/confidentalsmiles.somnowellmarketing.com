<?php
/**
 * The template for displaying search results pages
 */

get_header(); 
?>

<section id="myAnchor" class="conten-wrapp">

    <div class="conten-row1">
        <div class="conten-bar1 bloger-wrapp">


<header class="page-header">
	<?php if ( have_posts() ) : ?>
		<h1 class="page-title"><?php printf( __( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
	<?php else : ?>
		<h1 class="page-title"><?php _e( 'Nothing Found' ); ?></h1>
	<?php endif; ?>
</header><!-- .page-header -->
                    
<h1>Search</h1>

<?php
if ( have_posts() ) :
$i = 1;
while ( have_posts() ) : the_post(); 
    $img = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); 
    if(empty($img)){
        $img = TEMPLATE_URL.'images/no-image.jpg';
        $img_alt = 'thumb';
    } else {
        $img_alt = get_post_meta(get_post_thumbnail_id($post->ID),'_wp_attachment_image_alt',true); 
        if(!$img_alt){
            $img_alt = 'thumb';
        }
    }
?>

         
            <a href="<?php echo get_permalink($post->ID); ?>" >
                <h2><?php the_title(); ?></h2>
            </a>
            <h3><?php echo get_the_date('jS F Y', $post->ID); ?></h3>
            <?php echo apply_filters('the_content', substr($post->post_content, 0, 150));?>

<?php endwhile;?>
</div>
 <div class="paiger-wrapp">
                    
                <div class="paiger-row1">
                   
                     <?php                                 
the_posts_pagination( array(
        'prev_text' => '<span class="paiger-btn1">' . __( 'Back') . '</span>',
        'next_text' => '<span class="paiger-btn2">' . __( 'Next') . '</span>',
        'before_page_number' => '',
        'screen_reader_text' => '&nbsp;',
) );
?>
                </div>
                        
            </div>
        
 <?php 
                        else :
                        echo '<h2>No blog posts found.</h2>';

                        endif; ?> 
        </div>
    </div>
    
    <div class="conten-row2">
        <div class="conten-bar2 sidbar-wrapp">
                        
            <?php include_once('include/sidbar-form.php'); ?>
            
            <?php include_once('include/sidbar-categories.php'); ?>
            
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
<?php get_footer();
