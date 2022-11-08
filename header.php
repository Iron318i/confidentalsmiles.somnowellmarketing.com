<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<?php define('TEMPLATE_URL', get_template_directory_uri().'/'); ?>
<?php wp_head(); ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link rel="icon" href="<?php echo TEMPLATE_URL; ?>images/favicon1.ico" type="image/x-icon" />
<link href="<?php echo TEMPLATE_URL; ?>css/stylesheet.css?v=100001" rel="stylesheet" type="text/css" />


 
<link rel="preload prefetch" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'" type="text/css" crossorigin="anonymous" />
<style type="text/css">
html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed,  figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary,time, mark, audio, video, textarea, input { margin:0; padding:0; border:0; font-size:100%; font:inherit; vertical-align:baseline; outline:none; font-family: 'Poppins', sans-serif;}
.common-style ul li:before {content:"\2022 "; position: absolute; left: 0px;     color: #010101; font-size: 18px; top: 0px;} 
</style>

<script charset="utf-8" type="text/javascript" src="//js-eu1.hsforms.net/forms/v2.js?pre=1"></script>

</head>
<body <?php body_class(); ?>>

<?php if( is_page_template('template-lp.php') || is_page_template('template-lp-sidebar.php') ) { } else { ?>
<?php echo do_shortcode("[google-reviews-pro place_photo=https://www.confidentalsmiles.co.uk/wp-content/uploads/2020/06/tooth-icon.png place_name='Confidental Dental Practice' place_id=ChIJP2Z-uSqAdkgRqyJsqnfrAlI auto_load=true rating_snippet=true sort=1 min_filter=5 hide_photo=true write_review=true view_mode=badge_left open_link=true nofollow_link=true lazy_load_img=true]"); ?>
<?php } ?>

<?php /*<!--Preloader 
<div id="preloader">
	<div class="wrapper">
		<div class="cssload-loader"></div>
	</div>
</div>-->*/ ?>

<?php include_once('include/menu.php'); ?>

<div class="menu-row1 toggle">
	<div class="menu-bar1">
		<span class="bar top"></span>
		<span class="bar middle"></span>
		<span class="bar bottom"></span>
	</div>
    <span class="menu-tex1">Menu</span>
</div>

<?php include_once('include/header.php'); ?>
<?php include_once('include/linker-wrapp.php'); ?>

<?php if(!is_front_page()) { ?>

    <?php if( is_page() && in_array(get_page_template_slug(), array('template-lp-sidebar.php', 'template-lp.php')) ): ?>

<?php $header_background_images_type = get_field('header_background_images_type'); ?>
<section class="banner-wrapp innser-wrapp" <?php if( $header_background_images_type == 'single' ) { ?>style="background-image:url('<?php echo aq_resize(get_field('header_single_image'), 1500, 614, true, true, true); ?>'); position: relative; background-repeat: no-repeat !important; background-size: cover !important; "<?php } ?>>

    <?php
        if( $header_background_images_type == 'slider' ) {
    ?>
        <div class="flexslider">
            <ul class="slides">
                <?php
                    if( have_rows('header_slider') ):
                        while( have_rows('header_slider') ): the_row();
                            $image = get_sub_field('image');
                ?>
                <li class="bgflex header" style="background-image:url('<?php echo aq_resize($image, 1500, 614, true, true, true); ?>')"></li>
                <?php
                        endwhile;
                    endif;
                ?>
            
            </ul><!-- / .slides -->
        </div><!-- / .flexslider -->
    <?php
        }
    ?>

    <div class="innser-row1">
        <div class="margin">
            <h1><?php the_title(); ?></h1>
            <?php if( !empty(get_field('header_subtitle')) ) { ?>
                <h2><?php the_field('header_subtitle'); ?></h2>
            <?php } ?>
        </div><!-- / .margin -->
    </div><!-- / .innser-row1 -->
    
    <?php if( get_field('show_google_reviews_image') == 1 && !empty(get_field('google','options')) ) { ?>
        <div class="banner-row3">
            <div class="margin">
                <div class="banner-bar3 wow fadeIn" data-wow-delay="300ms">
                    <a href="<?php echo get_field('google','options'); ?>" target="_blank" ><img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/google-rating-thumb1.png" alt="google rating thumb1" /></a>
                </div>
            </div>
        </div>
    <?php } ?>
    
    <div class="banner-row4">
        <div class="margin">
            <div class="banner-bar4 wow fadeInUpBig" data-wow-delay="200ms">
                <div class="scroll-effect1" data-aos="fade-in" data-aos-easing="linear">
                    <a href="#myAnchor" id="anchor1"><span></span></a>
                </div>
            </div>
        </div>
    </div><!-- / .banner-row4 -->
    
    <?php if( get_field('show_virtual_tour_button') == 1 && !empty(get_field('home_banner_watch_video',5)) ) { ?>
        <div class="banner-row2 innerpage">
            <div class="margin">
                <div class="banner-bar2 wow fadeIn innerpage2" data-wow-delay="300ms">
                    <a href="<?php echo get_field('home_banner_watch_video',5); ?>" target="_blank" class="">
                        <span class="video-play-button">
                        <span></span>
                        </span>
                        <span class="js-video-tex1">Virtual Tour</span>
                    </a>
                </div>
            </div>
            </div>
    <?php } ?>

</section>
<?php /*<div class="backbtm"></div>*/ ?>

    <?php else: ?>

    
<section class="banner-wrapp innser-wrapp">

	<?php include_once('include/flexslider.php'); ?>
    
    <div class="innser-row1">
        <div class="margin">
        	<ul class="innser-bar1">
                <?php
                    global $post;
                    $prev_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
                ?>
                
                <?php if(is_home()) { ?>
                    <li><a href="<?php echo site_url('/'); ?>"> Home </a> </li><li> / </li><li> Blog </li>
                <?php } elseif(is_tax('treatmentcategory')) {  ?>
                    <li><a href="<?php echo site_url('/'); ?>"> Home </a> </li><li> / </li> <li> <a href="<?php echo get_permalink(12); ?>"> Treatments </a> </li> <li> / </li> <li> <?php single_cat_title(); ?></li>
                <?php } elseif(is_tax('gallerycategory')) {  ?>
                    <li><a href="<?php echo site_url('/'); ?>"> Home </a> </li><li> / </li><li> <a href="<?php echo get_permalink(13); ?>"> Smile Gallery </a> </li> <li> / </li><li> <?php single_cat_title(); ?></li>
                <?php } elseif(is_search()) {  ?>
                    <li>  <a href="<?php echo site_url('/'); ?>"> Home </a> </li><li> / </li> <li> Search </li>
                <?php } elseif(is_archive()) { ?>
                    <li><a href="<?php echo site_url('/'); ?>"> Home </a> </li><li> / </li><li> <a href="<?php echo get_permalink(7); ?>">Blog</a> </li><li> / </li> <li> <?php single_cat_title(); ?> </li>
                <?php } elseif(is_404()) { ?>
                    <li><a href="<?php echo site_url('/'); ?>"> Home </a> </li><li> / </li> <li> 404 </li>
                 <?php } elseif(is_singular('treatment')) { ?>
                    <li><a href="<?php echo site_url('/'); ?>"> Home </a> </li><li> / </li> 
                    <li><a href="<?php echo get_permalink(12); ?>"> Treatments </a></li> <li> / </li>  
                    <li><?php $category=get_the_term_list( $post->ID, 'treatmentcategory', '', ', ' ); $explode = explode(",",$category); if(!empty($explode)){ echo $explode[0]; } ?></li> <li> / </li> <li> <?php the_title(); ?> </li>
                <?php }elseif(is_singular('gallery')){ ?>
                    <li><a href="<?php echo site_url('/'); ?>"> Home </a><li> / </li> 
                    <li><a href="<?php echo get_permalink(13); ?>"> Smile Gallery </a></li> <li> / </li>
                    <li>
                        <?php
                            $category = get_the_term_list( $post->ID, 'gallerycategory', '', ', ' ); 
                            $explode = explode(",",$category);
                            if(!empty($explode)){
                                $gallery_category=$explode[0];
                                echo $explode[0];
                            }                 
                        ?>
                    </li> <li> / </li><li> <?php the_title(); ?> </li>
                <?php } elseif(is_singular('team')) { ?>
                    <li><a href="<?php echo site_url('/'); ?>"> Home </a> </li><li> / </li><li> <a href="<?php echo get_permalink(11); ?>"> Meet The Team </a> </li><li> / </li><li> <?php the_title(); ?> </li>
                <?php } elseif(is_single()) {  ?>
                    <li><a href="<?php echo site_url('/'); ?>"> Home </a> </li><li> / </li><li><a href="<?php echo get_permalink(7); ?>">Blog </a> </li><li> / </li> 
                    <li><?php $category=get_the_term_list( $post->ID, 'category', '', ', ' ); $explode = explode(",",$category); if(!empty($explode)){ echo $explode[0]; } ?></li> <li> / </li><li> <?php the_title(); ?> </li>
                <?php } else { ?>
                    <li><a href="<?php echo site_url('/'); ?>"> Home </a> </li><li> / </li><li> <?php the_title(); ?> </li>
                <?php } ?> 
			</ul>

			<?php if(is_home()) 
                    { 

                    if(!empty(get_field('heading',7)))
                        {?>

                        <h1><?php echo get_field('heading',7);?> </h1>

            <?php       }
                    else{ ?>

                        <h1>Blog </h1>

            <?php       } ?>

            <?php   } elseif(is_tax('treatmentcategory')) 
                    {  ?>

                    <h1 >

                    <?php

                        $tax = $wp_query->get_queried_object();

                        if(!empty(get_field('heading',$tax)))
                            { 

                            echo get_field('heading',$tax);


                            }
                        else{ 

                            single_cat_title();

                            }

                        ?>                          

                    </h1>

            <?php   } elseif(is_tax('gallarycategory')) 
                    {  ?>

                    <h1 ><?php single_cat_title();?></h1>

            <?php   } elseif(is_search()) 
                    {  ?>

                    <h1 >Search</h1>

            <?php   } elseif(is_archive()) 
                    {  ?>

                    <h1><?php single_cat_title();?></h1>

            <?php   } elseif(is_404()) 
                    { ?>

                    <h1 >404</h1>

            <?php   }else
                    {  

                    if(is_singular('treatment'))
                        { ?>

                        <h1>

                        <?php 

                            if(!empty($post->ID))
                                { 

                                if(!empty(get_field('heading',$post->ID)))
                                    { 

                                    echo get_field('heading',$post->ID);

                                    }
                                else{

                                    the_title(); 

                                    } 


                                }
                            else{

                                the_title(); 

                                }   

                            ?>
                                    
                        </h1>
                
            <?php       }
                    else{ ?>
                
                        <h1 >

                        <?php 

                            if(!empty($post->ID))
                                { 

                                if(!empty(get_field('heading',$post->ID)))
                                    { 


                                    echo get_field('heading',$post->ID);

                                    }
                                else{

                                    the_title(); 

                                    } 

                                }
                            else{

                                the_title(); 

                                }   


                            ?>
                                
                        </h1>
                
            <?php       }  

                    } ?>
		</div><!-- / .margin -->
	</div><!-- / .innser-row1 -->

    <?php if( !empty(get_field('google','options')) ) { ?>
        <div class="banner-row3">
            <div class="margin">
                <div class="banner-bar3 wow fadeIn" data-wow-delay="300ms">
                    <a href="<?php echo get_field('google','options'); ?>" target="_blank" ><img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/google-rating-thumb1.png" alt="google rating thumb1" /></a>
                </div>
            </div>
        </div>
    <?php } ?>
    
    <div class="banner-row4">
        <div class="margin">
            <div class="banner-bar4 wow fadeInUpBig" data-wow-delay="200ms">
                <div class="scroll-effect1" data-aos="fade-in" data-aos-easing="linear">
                    <a href="#myAnchor" id="anchor1"><span></span></a>
                </div>
            </div>
        </div>
    </div><!-- / .banner-row4 -->
    
    <?php if( !empty(get_field('home_banner_watch_video',5)) ) { ?>
        <div class="banner-row2 innerpage">
            <div class="margin">
                <div class="banner-bar2 wow fadeIn innerpage2" data-wow-delay="300ms">
                    <a href="<?php echo get_field('home_banner_watch_video',5); ?>" target="_blank" class="">
                        <span class="video-play-button">
                        <span></span>
                        </span>
                        <span class="js-video-tex1">Virtual Tour</span>
                    </a>
                </div>
            </div>
            </div>
    <?php } ?>

</section>

<div class="backbtm"></div>
    
    <?php endif; // end if if( is_page() && in_array(get_page_template_slug(), array('template-lp-sidebar.php', 'template-lp.php')) ):[..] else: [..] endif; ?>

<?php } ?>