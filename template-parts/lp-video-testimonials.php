<?php
/**
 * LP Video testimonials
 *
 * @package confidentalsmiles
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<div class="video-testimonials">
    <?php
    $video = get_field('video_testimonials', 277);
    ?>
    <div class="row">
        <?php
        foreach ($video as $vid) {
            ?>
            <div class="col-md-6 mb-1">
                <a class="video-link" data-fancybox
                    <?php if (!empty($vid['video_type'])) {
                        if ($vid['video_type'] == 'youtube') { ?>
                            href="https://www.youtube.com/watch?v=<?php echo $vid['video_id']; ?>&amp;autoplay=1"
                        <?php } else { ?>
                            href="https://player.vimeo.com/video/<?php echo $vid['video_id']; ?>"
                        <?php }
                    } ?>>
                    <?php
                    if (!empty($vid['video_type'])) {
                        if ($vid['video_type'] == 'youtube') { ?>
                            <img loading="lazy" src="https://img.youtube.com/vi/<?php echo $vid['video_id']; ?>/hqdefault.jpg" alt="testimonials thumb1">
                        <?php } else {
                            $video_id = $vid['video_id'];
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
    <div class="text-center" style="padding-top: 2rem;">
        <a id="loadMoreVideos" class="btn btn-primary">Load More</a>
    </div>
</div>