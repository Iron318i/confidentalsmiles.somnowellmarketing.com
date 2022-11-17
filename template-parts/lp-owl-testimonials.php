<?php
/**
 * LP Owl testimonials
 *
 * @package confidentalsmiles
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<div class="pt-5">
    <svg width="0" height="0" class="d-none">
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20.06 14.97" id="quote" fill="#898989">
            <path d="M20,3.72l0-.17h0a4.58,4.58,0,1,0-3.75,5.38,4.28,4.28,0,0,1-.25.68,4.62,4.62,0,0,1-.47.84,5.39,5.39,0,0,1-.6.74,7.59,7.59,0,0,1-.69.6,4.13,4.13,0,0,1-.72.46,3.2,3.2,0,0,1-.65.35l-.54.23-.47.19L12.24,15l.6-.14.69-.17a5,5,0,0,0,.88-.32,5.74,5.74,0,0,0,1-.46,10.31,10.31,0,0,0,1.09-.69,8.5,8.5,0,0,0,1-.95,6.85,6.85,0,0,0,.91-1.16,8.6,8.6,0,0,0,.7-1.3,11.88,11.88,0,0,0,.47-1.34A11.76,11.76,0,0,0,20,6a12.08,12.08,0,0,0,0-1.75C20,4.08,20,3.9,20,3.72Zm-11,0,0-.17h0A4.5,4.5,0,1,0,4.5,9a4.48,4.48,0,0,0,.65-.06,4.28,4.28,0,0,1-.25.68,4.62,4.62,0,0,1-.47.84,5.39,5.39,0,0,1-.6.74,7.59,7.59,0,0,1-.69.6,4.13,4.13,0,0,1-.72.46,3.2,3.2,0,0,1-.65.35l-.54.23L.76,13,1.24,15l.6-.14.69-.18a4.93,4.93,0,0,0,.88-.31,6.54,6.54,0,0,0,1-.46,9,9,0,0,0,1.09-.7,7.69,7.69,0,0,0,1-.94,6.85,6.85,0,0,0,.91-1.16,8.6,8.6,0,0,0,.7-1.3,10.19,10.19,0,0,0,.47-1.34A11.76,11.76,0,0,0,9,6,12.08,12.08,0,0,0,9,4.26C9,4.08,9,3.9,9,3.72Z"></path>
        </symbol>
    </svg>
    <div class="container">
        <div class="row">
            <?php
            $args = get_posts(array('post_type' => 'team', 'post_status' => 'publish', 'posts_per_page' => -1));
            if (!empty($args)) :
                foreach ($args as $item) :?>
                    <div class="col-md-4 item">
                        <div class="team-testimonial">
                            <?php
                            $img = wp_get_attachment_url(get_post_thumbnail_id($item->ID));
                            $imgalt = get_post_meta(get_post_thumbnail_id($item->ID), '_wp_attachment_image_alt', true);
                            ?>
                            <div class="top">
                                <svg class="icon">
                                    <use xlink:href="#quote"></use>
                                </svg>
                                <p class="quote"><?php echo strip_shortcodes(wp_trim_words($item->post_content, 20)); ?></p>
                                <h3 class="name">-<?php echo $item->post_title; ?></h3>
                                <?php
                                $designation = get_field('designation', $item->ID);
                                if (!empty($designation)) { ?>
                                    <p class="designation"> <?php echo $designation; ?></p>
                                <?php } ?>
                                <?php
                                $gdc = get_field('gdc', $item->ID);
                                if (!empty(gdc)) { ?>
                                    <p class="gdc">GDC No. <?php echo $gdc; ?></p>
                                <?php } ?>
                            </div>
                            <div class="bottom">
                                <a href="<?php echo get_permalink($item->ID); ?>" class="btn btn-outline-primary">Learn More</a>
                                <div class="img">
                                    <?php if (empty($img)) { ?>
                                        <a href="<?php echo get_permalink($item->ID); ?>"> <img loading="lazy" src="<?php echo TEMPLATE_URL . 'images/noimage-team.jpg'; ?>" alt="<?php echo $imgalt; ?>"/> </a>
                                    <?php } else { ?>
                                        <a href="<?php echo get_permalink($item->ID); ?>"> <img loading="lazy" src="<?php echo aq_resize($img, 113, 113, true, true, true); ?>" alt="<?php echo $img_alt; ?>"/> </a>
                                    <?php }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
