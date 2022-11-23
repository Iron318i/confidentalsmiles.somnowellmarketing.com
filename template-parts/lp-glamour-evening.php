<?php
/**
 * LP GLAMOUR EVENING
 *
 * @package confidentalsmiles
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
$event_bg_image = get_field('event_bg_image', 5);
if (!empty($event_bg_image)) {
    $event_bg_image = aq_resize($event_bg_image, 1500, 800, true, true, true);
}
?>
<section class="glamour-evening py-4" <?php echo !empty($event_bg_image) ? 'style="background: url(' . $event_bg_image . ') no-repeat center / cover;"' : ''; ?>>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <?php
                if (!empty(get_field('event_title', 5))) {
                    echo get_field('event_title', 5);
                }
                if (!empty(get_field('event_date', 5)) || !empty(get_field('event_time', 5))) {

                    $var1 = get_field('event_date', 5);
                    $var2 = get_field('event_time', 5);
                }
                ?>
                <h2><?php if (!empty(get_field('event_date', 5))) {
                        echo $var1;
                    } ?> <span>|</span><?php if (!empty(get_field('event_time', 5))) {
                        echo $var2;
                    } ?></h2>
                <p class="mb-2"><strong><?php
                        if (!empty(get_field('event_location', 5))) {
                            echo get_field('event_location', 5);
                        }
                        ?></strong><br>
                    <?php
                    if (!empty(get_field('event_description', 5))) {
                        echo get_field('event_description', 5);
                    }
                    ?>
                </p>
                <?php if (!empty(get_field('event_reserve_link', 5))) { ?>
                    <p><a href="<?php echo get_field('event_reserve_link', 5) ?>" class="btn btn-primary">Reserve Now</a></p>
                <?php } ?>
            </div>
            <div class="col-md-5 evening-badge">
                <a href="http://confidentalsmiles-25790036.hs-sites-eu1.com/en/facial_aesthetics_glamour_evening_2022" class="">
                    <img src="https://www.confidentalsmiles.co.uk/wp-content/uploads/2022/11/glamour-evening-badge.png" alt="limited space available">
                </a>
            </div>
        </div>
    </div>
</section>