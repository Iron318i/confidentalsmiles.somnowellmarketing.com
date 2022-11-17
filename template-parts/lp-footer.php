<?php
/**
 * LP Footer
 *
 * @package confidentalsmiles
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<section class="lp-footer">
    <div class="container">
        <div class="row">
            <div class="col footer-logo">
                <a href="<?php echo site_url() ?>" class=""><img src="<?php echo get_template_directory_uri() ?>/images/lp/main-logo.png" alt="<?php bloginfo('name'); ?>"></a>
            </div>
            <div class="col sep-1">
                <div class="sep"></div>
            </div>
            <div class="col">
                <div class="wrp links">
                    <h3>Links</h3>
                    <ul class="nav">
                        <?php wp_nav_menu(array('menu' => 'Footer Category Menu', 'container' => 'none', 'menu_class' => '')); ?>
                        <?php wp_nav_menu(array('menu' => 'Footer Menu', 'container' => 'none', 'menu_class' => '')); ?>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="sep"></div>
            </div>
            <div class="col">
                <div class="wrp address">
                    <h3>Address</h3>
                    <ul class="nav">
                        <li><a href="https://g.page/confidental-smiles?share" target="_blank">Confidental Smiles, 70A<br> YorkTown Road, Sandhurst,<br> Berkshire, GU47 9BT</a></li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="sep"></div>
            </div>
            <div class="col">
                <div class="wrp call">
                    <h3>Call Us</h3>
                    <ul class="nav">
                        <li><a href="tel:01252888177" target="_blank">01252 888 177</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="copy">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
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
            <div class="col-md-8">Copyright © <?php echo date('Y') ?> Confidental Smiles All Rights Reserved.. <a href="https://www.confidentalsmiles.co.uk/privacy-policy/">Privacy Policy</a> | <a href="https://www.confidentalsmiles.co.uk/terms-of-use/">Terms & Condition</a></div>
        </div>
    </div>
</div>