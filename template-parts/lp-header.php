<?php
/**
 * LP HEADER
 *
 * @package confidentalsmiles
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<div class="lp-header">
    <div class="container">
        <div class="logo-wrp">
            <a href="<?php echo site_url() ?>" class="main-logo"><img src="<?php echo get_template_directory_uri() ?>/images/lp/main-logo.png" alt="<?php bloginfo('name'); ?>"></a>
            <div class="slogan">
                70A YorkTown Road, Sandhurst, Berkshire, GU47 9BT
            </div>
        </div>
        <div class="phone">
            <a href="tel:01252888177">
                <svg class="icon">
                    <use xlink:href="#smartphone"></use>
                </svg>
                01252 888 177</a>
        </div>
        <ul class="social">
            <li>
                <a href="https://www.facebook.com/ConfidentalUK/" target="_blank">
                    <svg class="icon">
                        <use xlink:href="#facebook"></use>
                    </svg>
                </a>
            </li>
            <li>
                <a href="https://twitter.com/ConfidentalUK?lang=en" target="_blank">
                    <svg class="icon">
                        <use xlink:href="#twitter"></use>
                    </svg>
                </a>
            </li>
            <li>
                <a href="https://www.youtube.com/channel/UCIgPWkLc9EVtJK6Mprf_Few" target="_blank">
                    <svg class="icon">
                        <use xlink:href="#youtube"></use>
                    </svg>
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com/confidental_smiles/" target="_blank">
                    <svg class="icon">
                        <use xlink:href="#instagram"></use>
                    </svg>
                </a>
            </li>
        </ul>
    </div>
</div>