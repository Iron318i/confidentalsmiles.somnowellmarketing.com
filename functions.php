<?php
function customtheme_setup()
{

    load_theme_textdomain('customtheme');

    add_theme_support('automatic-feed-links');

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    add_image_size('customtheme-featured-image', 2000, 1200, true);

    add_image_size('customtheme-thumbnail-avatar', 100, 100, true);

    $GLOBALS['content_width'] = 525;

    register_nav_menus(array(
        'top' => __('Top Menu', 'customtheme'),
        'social' => __('Social Links Menu', 'customtheme'),
    ));

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support('html5', array(
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    /*
     * Enable support for Post Formats.
     *
     * See: https://codex.wordpress.org/Post_Formats
     */
    add_theme_support('post-formats', array(
        'aside',
        'image',
        'video',
        'quote',
        'link',
        'gallery',
        'audio',
    ));

    // Add theme support for Custom Logo.
    add_theme_support('custom-logo', array(
        'width' => 250,
        'height' => 250,
        'flex-width' => true,
    ));

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

}

add_action('after_setup_theme', 'customtheme_setup');

function customtheme_widgets_init()
{
    register_sidebar(array(
        'name' => __('Sidebar', 'customtheme'),
        'id' => 'sidebar-1',
        'description' => __('Add widgets here to appear in your sidebar on blog posts and archive pages.', 'customtheme'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'customtheme_widgets_init');

function customtheme_excerpt_more($link)
{
    if (is_admin()) {
        return $link;
    }
    return $link;
}

add_filter('excerpt_more', 'customtheme_excerpt_more');


// Hook in very late, let the theme fix it first.
add_filter('wp_title', 't5_fill_static_front_page_title', 100);

/**
 * Fill empty front page title if a static page is set.
 *
 * @wp-hook wp_title
 * @param string $title Existing title
 * @return  string
 */

function is_new_lp()
{
    if (is_page_template('page-templates/lp-smile-makeover.php') || is_page_template('page-templates/lp-dental-implants.php') || is_page_template('page-templates/lp-general-dentistry.php') || is_page_template('page-templates/lp-invisalign.php')) {
        return true;
    } else {
        return false;
    }
}

function t5_fill_static_front_page_title($title)
{
    // another filter may have fixed this already.
    if ('' !== $title or !is_page() or !is_front_page()) {
        return $title;
    }

    $page_id = get_option('page_on_front');
    $page = get_page($page_id);

    if (!$page or '' === $page->post_title) {
        $title = get_option('blogname');
    } else {
        $title = $page->post_title;
    }

    // We don’t know if there is any output after the title, so we cannot just
    // add the separator. We use an empty space instead.
    return "$title ";
}

//add_filter('use_block_editor_for_post', '__return_false', 10);

if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}

function website_assets_js_css()
{

    if (!is_new_lp()) :
        $cssVersion = 1000000022;
        $jsVersion = 1000000009;

        wp_enqueue_style('dashicons');
        wp_enqueue_style('menuzord-style', get_template_directory_uri() . '/css/menuzord.css', array(), $cssVersion);
        wp_enqueue_style('cssmenu-style', get_template_directory_uri() . '/css/cssmenu.css', array(), $cssVersion);
        wp_enqueue_style('overlay-style', get_template_directory_uri() . '/css/overlay.css', array(), $cssVersion);
        wp_enqueue_style('dropdown-style', get_template_directory_uri() . '/css/dropdown.css', array(), $cssVersion);
        wp_enqueue_style('sticky-style', get_template_directory_uri() . '/css/sticky.css', array(), $cssVersion);
        wp_enqueue_style('flashy-min-style', get_template_directory_uri() . '/css/flashy-min.css', array(), $cssVersion);
        wp_enqueue_style('popup-style', get_template_directory_uri() . '/css/popup.css', array(), $cssVersion);
        wp_enqueue_style('slicks-style', get_template_directory_uri() . '/css/slicks.css', array(), $cssVersion);
        wp_enqueue_style('slick-theme-style', get_template_directory_uri() . '/css/slick-theme.css', array(), $cssVersion);
        wp_enqueue_style('parallax-style', get_template_directory_uri() . '/css/parallax.css', array(), $cssVersion);
        wp_enqueue_style('slider-style', get_template_directory_uri() . '/css/slider.css', array(), $cssVersion);
        wp_enqueue_style('carousel-style', get_template_directory_uri() . '/css/carousel.css', array(), $cssVersion);
        wp_enqueue_style('videos-style', get_template_directory_uri() . '/css/videos.css', array(), $cssVersion);
        wp_enqueue_style('flexslider-style', get_template_directory_uri() . '/css/flexslider.css', array(), $cssVersion);
        wp_enqueue_style('accordion-style', get_template_directory_uri() . '/css/accordion.css', array(), $cssVersion);
        wp_enqueue_style('lightbox-style', get_template_directory_uri() . '/css/lightbox.css', array(), $cssVersion);
        wp_enqueue_style('lightbox-min-style', get_template_directory_uri() . '/css/lightbox-min.css', array(), $cssVersion);
        wp_enqueue_style('checkbox-style', get_template_directory_uri() . '/css/checkbox.css', array(), $cssVersion);
        wp_enqueue_style('hovers-style', get_template_directory_uri() . '/css/hovers.css', array(), $cssVersion);
        wp_enqueue_style('animate-style', get_template_directory_uri() . '/css/animate.css', array(), $cssVersion);

        wp_enqueue_script('slick-min-js', get_template_directory_uri() . '/js/slick.min.js', array(), $jsVersion, false);
        wp_enqueue_script('wow-js', get_template_directory_uri() . '/js/wow.js', array(), $jsVersion, false);
        wp_enqueue_script('menuzord-js', get_template_directory_uri() . '/js/menuzord.js', array(), $jsVersion, false);
        wp_enqueue_script('dropdown-js', get_template_directory_uri() . '/js/dropdown.js', array(), $jsVersion, false);
        wp_enqueue_script('sticky-js', get_template_directory_uri() . '/js/sticky.js', array(), $jsVersion, false);
        wp_enqueue_script('flashy-min-js', get_template_directory_uri() . '/js/flashy-min.js', array(), $jsVersion, false);
        wp_enqueue_script('parallax-js', get_template_directory_uri() . '/js/parallax.js', array(), $jsVersion, false);
        wp_enqueue_script('slider-js', get_template_directory_uri() . '/js/slider.js', array(), $jsVersion, false);
        wp_enqueue_script('active-js', get_template_directory_uri() . '/js/active.js', array(), $jsVersion, false);
        wp_enqueue_script('videos-js', get_template_directory_uri() . '/js/videos.js', array(), $jsVersion, false);
        wp_enqueue_script('flexslider-min-js', get_template_directory_uri() . '/js/flexslider-min.js', array(), $jsVersion, false);
        wp_enqueue_script('lightbox-js', get_template_directory_uri() . '/js/lightbox.js', array(), $jsVersion, false);
        wp_enqueue_script('lightbox-min-js', get_template_directory_uri() . '/js/lightbox-min.js', array(), $jsVersion, false);
        wp_enqueue_script('modernizr-js', get_template_directory_uri() . '/js/modernizr.js', array(), $jsVersion, false);
        wp_enqueue_script('classie-js', get_template_directory_uri() . '/js/classie.js', array(), $jsVersion, false);
        wp_enqueue_script('popup-js', get_template_directory_uri() . '/js/popup.js', array(), $jsVersion, false);

        wp_enqueue_script('footer-scripts-js', get_template_directory_uri() . '/js/footer-scripts.js', array(), $jsVersion, false);
    else:
        $the_theme = wp_get_theme();
        $theme_version = $the_theme->get('Version');
        $css_version = $theme_version . '.' . filemtime(get_template_directory() . '/css/lp.min.css');

        wp_enqueue_style('lp-styles', get_template_directory_uri() . '/css/lp.min.css', array(), $css_version);

        $js_version = $theme_version . '.' . filemtime(get_template_directory() . '/js/theme.js');

        wp_enqueue_script('jquery');
        wp_enqueue_script('lp-scripts', get_template_directory_uri() . '/js/lp.js', array(), $js_version, true);
    endif;

}

add_action('wp_footer', 'website_assets_js_css');


function insert_jquery_in_header()
{
    wp_enqueue_script('jquery', true, array(), true, true);
}

add_filter('wp_enqueue_scripts', 'insert_jquery_in_header', 1);

//image management


/**
 * Title         : Aqua Resizer
 * Description   : Resizes WordPress images on the fly
 * Version       : 1.2.2
 * Author        : Syamil MJ
 * Author URI    : http://aquagraphite.com
 * License       : WTFPL - http://sam.zoy.org/wtfpl/
 * Documentation : https://github.com/sy4mil/Aqua-Resizer/
 *
 * @param string $url - (required) must be uploaded using wp media uploader
 * @param int $width - (required)
 * @param int $height - (optional)
 * @param bool $crop - (optional) default to soft crop
 * @param bool $single - (optional) returns an array if false
 * @param bool $upscale - (optional) resizes smaller images
 * @return str|array
 * @uses  wp_upload_dir()
 * @uses  image_resize_dimensions()
 * @uses  wp_get_image_editor()
 *
 */
if (!class_exists('Aq_Resize')) {
    class Aq_Exception extends Exception
    {
    }

    class Aq_Resize
    {
        /**
         * The singleton instance
         */
        static private $instance = null;

        /**
         * Should an Aq_Exception be thrown on error?
         * If false (default), then the error will just be logged.
         */
        public $throwOnError = false;

        /**
         * No initialization allowed
         */
        private function __construct()
        {
        }

        /**
         * No cloning allowed
         */
        private function __clone()
        {
        }

        /**
         * For your custom default usage you may want to initialize an Aq_Resize object by yourself and then have own defaults
         */
        static public function getInstance()
        {
            if (self::$instance == null) {
                self::$instance = new self;
            }

            return self::$instance;
        }

        /**
         * Run, forest.
         */
        public function process($url, $width = null, $height = null, $crop = null, $single = true, $upscale = false)
        {
            try {
                // Validate inputs.
                if (!$url)
                    throw new Aq_Exception('$url parameter is required');
                if (!$width)
                    throw new Aq_Exception('$width parameter is required');

                // Caipt'n, ready to hook.
                if (true === $upscale) add_filter('image_resize_dimensions', array($this, 'aq_upscale'), 10, 6);

                // Define upload path & dir.
                $upload_info = wp_upload_dir();
                $upload_dir = $upload_info['basedir'];
                $upload_url = $upload_info['baseurl'];

                $http_prefix = "http://";
                $https_prefix = "https://";
                $relative_prefix = "//"; // The protocol-relative URL

                /* if the $url scheme differs from $upload_url scheme, make them match
                   if the schemes differe, images don't show up. */
                if (!strncmp($url, $https_prefix, strlen($https_prefix))) { //if url begins with https:// make $upload_url begin with https:// as well
                    $upload_url = str_replace($http_prefix, $https_prefix, $upload_url);
                } elseif (!strncmp($url, $http_prefix, strlen($http_prefix))) { //if url begins with http:// make $upload_url begin with http:// as well
                    $upload_url = str_replace($https_prefix, $http_prefix, $upload_url);
                } elseif (!strncmp($url, $relative_prefix, strlen($relative_prefix))) { //if url begins with // make $upload_url begin with // as well
                    $upload_url = str_replace(array(0 => "$http_prefix", 1 => "$https_prefix"), $relative_prefix, $upload_url);
                }


                // Check if $img_url is local.
                if (false === strpos($url, $upload_url))
                    throw new Aq_Exception('Image must be local: ' . $url);

                // Define path of image.
                $rel_path = str_replace($upload_url, '', $url);
                $img_path = $upload_dir . $rel_path;

                // Check if img path exists, and is an image indeed.
                if (!file_exists($img_path) or !getimagesize($img_path))
                    throw new Aq_Exception('Image file does not exist (or is not an image): ' . $img_path);

                // Get image info.
                $info = pathinfo($img_path);
                $ext = $info['extension'];
                list($orig_w, $orig_h) = getimagesize($img_path);

                // Get image size after cropping.
                $dims = image_resize_dimensions($orig_w, $orig_h, $width, $height, $crop);
                $dst_w = $dims[4];
                $dst_h = $dims[5];

                // Return the original image only if it exactly fits the needed measures.
                if (!$dims || (((null === $height && $orig_w == $width) xor (null === $width && $orig_h == $height)) xor ($height == $orig_h && $width == $orig_w))) {
                    $img_url = $url;
                    $dst_w = $orig_w;
                    $dst_h = $orig_h;
                } else {
                    // Use this to check if cropped image already exists, so we can return that instead.
                    $suffix = "{$dst_w}x{$dst_h}";
                    $dst_rel_path = str_replace('.' . $ext, '', $rel_path);
                    $destfilename = "{$upload_dir}{$dst_rel_path}-{$suffix}.{$ext}";

                    if (!$dims || (true == $crop && false == $upscale && ($dst_w < $width || $dst_h < $height))) {
                        // Can't resize, so return false saying that the action to do could not be processed as planned.
                        throw new Aq_Exception('Unable to resize image because image_resize_dimensions() failed');
                    } // Else check if cache exists.
                    elseif (file_exists($destfilename) && getimagesize($destfilename)) {
                        $img_url = "{$upload_url}{$dst_rel_path}-{$suffix}.{$ext}";
                    } // Else, we resize the image and return the new resized image url.
                    else {

                        $editor = wp_get_image_editor($img_path);

                        if (is_wp_error($editor) || is_wp_error($editor->resize($width, $height, $crop))) {
                            throw new Aq_Exception('Unable to get WP_Image_Editor: ' .
                                $editor->get_error_message() . ' (is GD or ImageMagick installed?)');
                        }

                        $resized_file = $editor->save();

                        if (!is_wp_error($resized_file)) {
                            $resized_rel_path = str_replace($upload_dir, '', $resized_file['path']);
                            $img_url = $upload_url . $resized_rel_path;
                        } else {
                            throw new Aq_Exception('Unable to save resized image file: ' . $editor->get_error_message());
                        }

                    }
                }

                // Okay, leave the ship.
                if (true === $upscale) remove_filter('image_resize_dimensions', array($this, 'aq_upscale'));

                // Return the output.
                if ($single) {
                    // str return.
                    $image = $img_url;
                } else {
                    // array return.
                    $image = array(
                        0 => $img_url,
                        1 => $dst_w,
                        2 => $dst_h
                    );
                }

                return $image;
            } catch (Aq_Exception $ex) {
                error_log('Aq_Resize.process() error: ' . $ex->getMessage());

                if ($this->throwOnError) {
                    // Bubble up exception.
                    throw $ex;
                } else {
                    // Return false, so that this patch is backwards-compatible.
                    return false;
                }
            }
        }

        /**
         * Callback to overwrite WP computing of thumbnail measures
         */
        function aq_upscale($default, $orig_w, $orig_h, $dest_w, $dest_h, $crop)
        {
            if (!$crop) return null; // Let the wordpress default function handle this.

            // Here is the point we allow to use larger image size than the original one.
            $aspect_ratio = $orig_w / $orig_h;
            $new_w = $dest_w;
            $new_h = $dest_h;

            if (!$new_w) {
                $new_w = intval($new_h * $aspect_ratio);
            }

            if (!$new_h) {
                $new_h = intval($new_w / $aspect_ratio);
            }

            $size_ratio = max($new_w / $orig_w, $new_h / $orig_h);

            $crop_w = round($new_w / $size_ratio);
            $crop_h = round($new_h / $size_ratio);

            $s_x = floor(($orig_w - $crop_w) / 2);
            $s_y = floor(($orig_h - $crop_h) / 2);

            return array(0, 0, (int)$s_x, (int)$s_y, (int)$new_w, (int)$new_h, (int)$crop_w, (int)$crop_h);
        }
    }
}
if (!function_exists('aq_resize')) {

    /**
     * This is just a tiny wrapper function for the class above so that there is no
     * need to change any code in your own WP themes. Usage is still the same :)
     */
    function aq_resize($url, $width = null, $height = null, $crop = null, $single = true, $upscale = false)
    {
        /* WPML Fix */
        if (defined('ICL_SITEPRESS_VERSION')) {
            global $sitepress;
            $url = $sitepress->convert_url($url, $sitepress->get_default_language());
        }
        /* WPML Fix */

        $aq_resize = Aq_Resize::getInstance();
        return $aq_resize->process($url, $width, $height, $crop, $single, $upscale);
    }
}

//image management ends
//ACF Load more

// add action for logged in users
add_action('wp_ajax_my_repeater_show_more', 'my_repeater_show_more');
// add action for non logged in users
add_action('wp_ajax_nopriv_my_repeater_show_more', 'my_repeater_show_more');

function my_repeater_show_more()
{
    define(TEMPLATE_URL, get_template_directory_uri() . '/');
    // validate the nonce
    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'my_repeater_field_nonce')) {
        exit;
    }
    // make sure we have the other values
    if (!isset($_POST['post_id']) || !isset($_POST['offset'])) {
        return;
    }
    $show = 3; // how many more to show
    $start = $_POST['offset'];
    $end = $start + $show;
    $post_id = $_POST['post_id'];
    // use an object buffer to capture the html output
    // alternately you could create a varaible like $html
    // and add the content to this string, but I find
    // object buffers make the code easier to work with
    ob_start();
    if (have_rows('testimonials', $post_id)) {
        $total = count(get_field('testimonials', $post_id));
        $count = 0;
        while (have_rows('testimonials', $post_id)) {
            the_row();
            if ($count < $start) {
                // we have not gotten to where
                // we need to start showing
                // increment count and continue
                $count++;
                continue;
            }
            ?>
            <div class="testi-bar1">
                <div class="testi-bar2"><img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/testi-thumb1.png" alt="testi thumb1"/></div>
                <p><?php the_sub_field('testimonial_content'); ?></p>
                <div class="testi-bar3"><img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/rating-stars.png" alt="rating stars"/></div>
                <h3><?php the_sub_field('testimonial_author'); ?></h3>
            </div>
            <?php
            $count++;
            if ($count == $end) {
                // we've shown the number, break out of loop
                break;
            }
        } // end while have rows
    } // end if have rows
    $content = ob_get_clean();
    // check to see if we've shown the last item
    $more = false;
    if ($total > $count) {
        $more = true;
    }
    // output our 3 values as a json encoded array
    echo json_encode(array('content' => $content, 'more' => $more, 'offset' => $end));
    exit;
} // end function my_repeater_show_more

//Wp-admin Login

function my_login_logo_one()
{
    ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(<?php echo get_template_directory_uri(); ?>/images/confidental-logo2.png);
        }
        body.login-action-login {
            background: #fff !important;
        }
        body.login-action-login #backtoblog a, body.login-action-login #nav a {
            color: #604a7b !important;
        }
        body.login-action-login.wp-core-ui .button-primary {
            background: #604a7b !important;
            box-shadow: none !important;
            border: 0px !important;
            text-shadow: none !important;
        }
        body.login-action-login form#loginform {
            border-radius: 8px;
        }
        .login h1 a {
            width: 180px !important;
            background-size: 170px !important;
            height: 95px !important;
        }
        form#loginform {
            background: #604a7b !important;
        }
        form#loginform p label {
            color: #fff !important;
        }
        .user-pass-wrap {
            color: #fff !important;
        }
        form#loginform input#wp-submit {
            background: #fff !important;
            color: #604a7b !important;
            font-weight: 600;
        }
        .login h1 a {
            width: 180px !important;
            background-size: 180px !important;
            height: 120px !important;
            outline: none !important;
        }
        .login h1 a:focus {
            box-shadow: none !important;
        }
        .login h1 a {
            width: 180px !important;
            background-size: 180px !important;
            height: 142px !important;
            outline: none !important;
        }


    </style>

    <?php
}

add_action('login_enqueue_scripts', 'my_login_logo_one');

function my_login_logo_url()
{
    return home_url();
}

add_filter('login_headerurl', 'my_login_logo_url');
function add_my_favicon()
{
    $favicon_path = get_template_directory_uri() . '/images/favicon1.ico';

    echo '<link rel="shortcut icon" href="' . esc_url($favicon_path) . '" />';
}

add_action('admin_head', 'add_my_favicon'); //admin end
add_action('login_head', 'add_my_favicon');
//Video Wrapper

function shortcode_YouTube($params = array())
{
    // default parameters
    extract(shortcode_atts(array(
        'video' => '',
    ), $params));
    if (empty($video)) {
        return '';
    }
    $html = '';
    $html .= '<div class="videoWrapper"><iframe loading="lazy" width="640" height="360" src="https://www.youtube-nocookie.com/embed/' . $video . '?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>';
    return $html;
}

add_shortcode('youtube', 'shortcode_YouTube');

function shortcode_Vimeo($params = array())
{
    // default parameters
    extract(shortcode_atts(array(
        'video' => '',
    ), $params));
    if (empty($video)) {
        return '';
    }
    $html = '';
    $html .= '<div class="videoWrapper"><iframe loading="lazy" width="640" height="360" src="https://player.vimeo.com/video/' . $video . '?rel=0&amp;showinfo=0&amp;dnt=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>';
    return $html;
}

add_shortcode('vimeo', 'shortcode_Vimeo');
function pippin_add_taxonomy_filters_treatment()
{
    global $typenow;
    // an array of all the taxonomyies you want to display. Use the taxonomy name or slug
    $taxonomies = array('treatmentcategory');
    // must set this to the post type you want the filter(s) displayed on
    if ($typenow == 'treatment') {
        foreach ($taxonomies as $tax_slug) {
            $tax_obj = get_taxonomy($tax_slug);
            $tax_name = $tax_obj->labels->name;
            $terms = get_terms($tax_slug);
            if (count($terms) > 0) {
                echo "<select name='$tax_slug' id='$tax_slug' class='postform'>";
                echo "<option value=''>Show All $tax_name</option>";
                foreach ($terms as $term) {
                    echo '<option value=' . $term->slug, isset($_GET[$tax_slug]) && $_GET[$tax_slug] == $term->slug ? ' selected="selected"' : '', '>' . $term->name . ' (' . $term->count . ')</option>';
                }
                echo "</select>";
            }
        }
    }
}

add_action('restrict_manage_posts', 'pippin_add_taxonomy_filters_treatment');
function pippin_add_taxonomy_filters_gallerycategory()
{
    global $typenow;
    // an array of all the taxonomyies you want to display. Use the taxonomy name or slug
    $taxonomies = array('gallerycategory');
    // must set this to the post type you want the filter(s) displayed on
    if ($typenow == 'gallery') {
        foreach ($taxonomies as $tax_slug) {
            $tax_obj = get_taxonomy($tax_slug);
            $tax_name = $tax_obj->labels->name;
            $terms = get_terms($tax_slug);
            if (count($terms) > 0) {
                echo "<select name='$tax_slug' id='$tax_slug' class='postform'>";
                echo "<option value=''>Show All $tax_name</option>";
                foreach ($terms as $term) {
                    echo '<option value=' . $term->slug, isset($_GET[$tax_slug]) && $_GET[$tax_slug] == $term->slug ? ' selected="selected"' : '', '>' . $term->name . ' (' . $term->count . ')</option>';
                }
                echo "</select>";
            }
        }
    }
}

add_action('restrict_manage_posts', 'pippin_add_taxonomy_filters_gallerycategory');

add_action('admin_head', 'change_meta_box_title_post');

function change_meta_box_title_post()
{
    remove_meta_box('postimagediv', 'post', 'side'); //replace post_type from your post type name
    add_meta_box('postimagediv', __('Featured Image <br> Best Proportion: 153 px  x 153 px '), 'post_thumbnail_meta_box', 'post', 'side', 'low');
}

add_action('admin_head', 'change_meta_box_title_treatment');

function change_meta_box_title_treatment()
{
    remove_meta_box('postimagediv', 'treatment', 'side'); //replace post_type from your post type name
    add_meta_box('postimagediv', __('Featured Image <br> Best Proportion: 362 px  x 364 px '), 'post_thumbnail_meta_box', 'treatment', 'side', 'low');
}

add_action('admin_head', 'change_meta_box_title_team');

function change_meta_box_title_team()
{
    remove_meta_box('postimagediv', 'team', 'side'); //replace post_type from your post type name
    add_meta_box('postimagediv', __('Featured Image <br> Best Proportion: 350 px  x 350 px '), 'post_thumbnail_meta_box', 'team', 'side', 'low');
}


remove_action('wp_head', 'wp_generator');

function itsme_disable_feed()
{
    wp_die(__('No feed available, please visit the <a href="' . esc_url(home_url('/')) . '">homepage</a>!'));
}

add_action('do_feed', 'itsme_disable_feed', 1);
add_action('do_feed_rdf', 'itsme_disable_feed', 1);
add_action('do_feed_rss', 'itsme_disable_feed', 1);
add_action('do_feed_rss2', 'itsme_disable_feed', 1);
add_action('do_feed_atom', 'itsme_disable_feed', 1);
add_action('do_feed_rss2_comments', 'itsme_disable_feed', 1);
add_action('do_feed_atom_comments', 'itsme_disable_feed', 1);

function disable_embeds_code_init()
{
    remove_action('rest_api_init', 'wp_oembed_register_route');
    add_filter('embed_oembed_discover', '__return_false');
    remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    remove_action('wp_head', 'wp_oembed_add_host_js');
    add_filter('tiny_mce_plugins', 'disable_embeds_tiny_mce_plugin');
    add_filter('rewrite_rules_array', 'disable_embeds_rewrites');
    remove_filter('pre_oembed_result', 'wp_filter_pre_oembed_result', 10);
}

add_action('init', 'disable_embeds_code_init', 9999);

function disable_embeds_tiny_mce_plugin($plugins)
{
    return array_diff($plugins, array('wpembed'));
}

function disable_embeds_rewrites($rules)
{
    foreach ($rules as $rule => $rewrite) {
        if (false !== strpos($rewrite, 'embed=true')) {
            unset($rules[$rule]);
        }
    }
    return $rules;
}

function disable_emojis()
{
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
    add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
    add_filter('wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2);
}

add_action('init', 'disable_emojis');

function disable_emojis_tinymce($plugins)
{
    if (is_array($plugins)) {
        return array_diff($plugins, array('wpemoji'));
    } else {
        return array();
    }
}

function disable_emojis_remove_dns_prefetch($urls, $relation_type)
{
    if ('dns-prefetch' == $relation_type) {
        $emoji_svg_url = apply_filters('emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/');
        $urls = array_diff($urls, array($emoji_svg_url));
    }
    return $urls;
}


/**
 * Enable features from Soil when plugin is activated
 * @link https://roots.io/plugins/soil/
 */
add_theme_support('soil', [
    /**
     * Clean up WordPress
     */
    'clean-up' => [
        /**
         * Obscure and suppress WordPress information.
         */
        'wp_obscurity',

        /**
         * Disable WordPress emojis.
         */
        'disable_emojis',

        /**
         * Disable extra RSS feeds.
         */
        'disable_extra_rss',

        /**
         * Disable recent comments CSS.
         */
        'disable_recent_comments_css',

        /**
         * Clean HTML5 markup.
         */
        'clean_html5_markup',
    ],

    /**
     * Disables trackbacks/pingbacks
     */
    'disable-trackbacks',

    /**
     * Cleaner walker for wp_nav_menu()
     */
    'nav-walker',

    /**
     * Redirects search results from /?s=query to /search/query/, converts %20 to +
     *
     * @link http://txfx.net/wordpress-plugins/nice-search/
     */
    'nice-search',
]);

/*
 * Load ucss lower in <head>
 * For WP functions.php
 */
add_filter('litespeed_optm_html_after_head', '__return_true');

add_filter('caldera_forms_phone_js_options', function ($options) {
    //Use ISO_3166-1_alpha-2 formatted country code
    $options['initialCountry'] = 'GB';
    return $options;
});


function shortcode_HubSpotForm($params = array())
{
    $html = '';
    $html .= '
<div class="generalHubSpotInPage">
<script charset="utf-8" type="text/javascript" src="//js-eu1.hsforms.net/forms/v2.js"></script>
<script>
  hbspt.forms.create({
    region: "eu1",
    portalId: "25790036",
    formId: "fa0ac857-d050-4de3-afdc-491c310b2ad5"
  });
</script></div>';
    return $html;
}

add_shortcode('hubspot_general', 'shortcode_HubSpotForm');
