<?php
/**
 * LP Treatments
 *
 * @package confidentalsmiles
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<section class="py-5">
    <div class="container">
        <h2 class="h2 mb-2 text-center">Our Treatments</h2>
        <div class="recent-treatments owl-carousel owl-theme">
            <?php
            $terms = get_terms([
                'taxonomy' => 'treatmentcategory'
            ]);
            foreach ($terms as $term) {
                $treatmentcat_img = get_field('treatment_category_image_slider', $term);
                ?>
                <div class="treatment">
                    <div class="img">
                        <?php
                        echo wp_get_attachment_image($treatmentcat_img["ID"], 'medium', false, array("class" => ''));
                        ?>
                    </div>
                    <div class="content">
                        <h4><?php echo $term->name; ?></h4>
                        <p><?php echo $term->description; ?></p>
                        <a href="<?php echo get_term_link($term->slug, 'treatmentcategory'); ?>" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
                <?php
            }
            ?>

        </div>
    </div>
</section>