<?php
/**
 * LP We Love our patients
 *
 * @package confidentalsmiles
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<section class="lp-testimonials py-4">
    <div class="container">
        <div class="text-center">
            <h4 class="sub-heading">Testimonials</h4>
            <h2 class="h2 mb-2">We Love our patients</h2>
            <p class="mb-2" style="max-width: 525px">This dental practice is excellent, all the staff are lovely, friendly as well as professional. It has a very calming atmosphere, which relaxes you.</p>
            <p><a href="https://www.confidentalsmiles.co.uk/testimonials" class="btn btn-primary">Learn More</a></p>
        </div>
        <?php
        if (!empty(get_field('testimonial_video', 15))) {
            $video = get_field('testimonial_video', 15);
        }
        ?>
        <div class="videos-outer pt-4">
            <div id="big" class="owl-carousel owl-theme">
                <?php foreach ($video as $vid) { ?>
                    <div class="item">
                        <a class="video-link" data-fancybox
                            <?php
                            if (!empty($vid['testimonial_video_type'])) {
                                if ($vid['testimonial_video_type'] == 'youtube') { ?>
                                    href="https://www.youtube.com/watch?v=<?php echo $vid['testimonial_video']; ?>&amp;autoplay=1"
                                <?php } else { ?>
                                    href="https://player.vimeo.com/video/<?php echo $vid['testimonial_video']; ?>"
                                <?php }
                            }
                            ?>
                        >
                            <?php
                            if (!empty($vid['testimonial_video_type'])) {
                                if ($vid['testimonial_video_type'] == 'youtube') { ?>
                                    <img loading="lazy" src="https://img.youtube.com/vi/<?php echo $vid['testimonial_video']; ?>/maxresdefault.jpg" alt="testimonials thumb1">
                                <?php } else {

                                    $video_id = $vid['testimonial_video'];
                                    $video_url = 'https://player.vimeo.com/video/' . $video_id;
                                    $imgs = unserialize(file_get_contents("https://vimeo.com/api/v2/video/$video_id.php"));
                                    $img = $imgs[0]['thumbnail_large'];

                                    ?>
                                    <img loading="lazy" src="<?php echo $img; ?>" width="480" alt="testimonials thumb1">
                                <?php }
                            }
                            ?>
                        </a>
                    </div>
                <?php } ?>
            </div>
            <div id="thumbs" class="owl-carousel owl-theme">
                <?php foreach ($video as $vid) { ?>
                    <div class="item">
                        <?php
                        if (!empty($vid['testimonial_video_type'])) {
                            if ($vid['testimonial_video_type'] == 'youtube') { ?>
                                <img loading="lazy" src="https://img.youtube.com/vi/<?php echo $vid['testimonial_video']; ?>/mqdefault.jpg" alt="testimonials thumb1">
                            <?php } else {
                                $video_id = $vid['testimonial_video'];
                                $video_url = 'https://player.vimeo.com/video/' . $video_id;
                                $imgs = unserialize(file_get_contents("https://vimeo.com/api/v2/video/$video_id.php"));
                                $img = $imgs[0]['thumbnail_large'];

                                ?>
                                <img loading="lazy" src="<?php echo $img; ?>" width="480" alt="testimonials thumb1">
                            <?php }
                        }
                        ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>