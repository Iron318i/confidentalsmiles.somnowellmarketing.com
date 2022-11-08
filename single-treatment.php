<?php
get_header();
$prev_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
?>
    <section id="myAnchor" class="conten-wrapp">
        <div class="conten-row1 common-style">
            <div class="conten-bar1 treatin-wrapp">
                <?php
                while (have_posts()):the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
                <?php if ($post->ID == '277' || $post->ID == '281' || $post->ID == '279' || $post->ID == '273') {
                    if (!empty(get_field('d_a_1', $post->ID))) {
                        ?>
                    <?php }
                } elseif ($post->ID == '280') { ?>
                    <!-- <a class="smilegallery" href="\\" >Click Here To See Our Success Stories</a>
                     -->
                    <?php
                } ?>
                <?php if ($post->ID == '281') { ?>
                <?php }
                ?>
                <?php if ($post->ID == '279') { ?>
                <?php }
                ?>
                <?php
                if (!empty(get_field('video_testimonials', $post->ID)) && $post->ID == '277') { ?>
                    <div class="testimonialsection testi-row11">
                        <?php
                        $video = get_field('video_testimonials', $post->ID);
                        $count_displayed = 1;
                        $total_items = count($video);
                        ?>
                        <div class="testi-row1">
                            <?php
                            foreach ($video as $vid) {
                                ?>
                                <a class="testi-row2 videobox appear_video_<?php echo $count_displayed; ?>" <?php if ($count_displayed > 4) {
                                    ?>
                                    style="display:none;"
                                    <?php
                                }
                                ?> data-flashy-type="video"
                                    <?php
                                    if (!empty($vid['video_type'])) {
                                        if ($vid['video_type'] == 'youtube') { ?>
                                            href="https://www.youtube.com/watch?v=<?php echo $vid['video_id']; ?>"
                                        <?php } else { ?>
                                            href="https://player.vimeo.com/video/<?php echo $vid['video_id']; ?>"
                                        <?php }
                                    }
                                    ?>
                                    <div class="testi-bar1">
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
                                    </div>
                                    <div class="testi-bar2">
                                        <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/vidio-icon1.png" alt="testimonials thumb1"/>
                                    </div>
                                </a>
                                <?php $count_displayed++;
                            } ?>
                        </div>
                        <a onclick="LoadMOrevideo(<?php echo $total_items; ?>)" class="testi-btn1 loadmoretestimonialsmaonpagevideo">Load More</a>
                    </div>
                <?php } ?>
                <?php
                if (!empty(get_field('treatment_common_content', 'options'))) {
                    echo get_field('treatment_common_content', 'options');
                }
                ?>
                <?php
                if (empty($prev_url)) { ?>
                    <a href="<?php echo get_permalink(12); ?>" class="treatin-btn2">Back to Treatments</a>
                <?php } else { ?>
                    <a href="<?php echo $prev_url . '?call=single'; ?>" class="treatin-btn2">Back to Treatments</a>
                <?php } ?>
            </div>
        </div>
        <div class="conten-row2">
            <div class="conten-bar2 sidbar-wrapp">
                <?php include_once('include/sidbar-form.php'); ?>
                <?php include_once('include/sidbar-treatments.php'); ?>
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
<?php
get_footer();