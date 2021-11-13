<?php 
/* Template Name: MoveAddons About Us */

get_header();
?>

<!-- Page Header Section Start -->
<div class="htmove-page-header htmove-page-header-about section" data-bg-image="<?php echo get_stylesheet_directory_uri() ?>/assets/images/page-header/about.jpg" style="background-color: #1D39D8;">
    <div class="container">
        <div class="row">

            <!-- Page Header Content Start -->
            <div class="col-12">
                <div class="htmove-page-header-content htmove-page-header-content-about">
                    <span class="icon"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/page-header/icon-about.png" alt="Move Addons About Us"></span>
                    <h1 class="title"><?php the_field('page_header_title'); ?></h1>
                    <p><?php the_field('page_header_content'); ?></p>
                </div>
            </div>
            <!-- Page Header Content End -->

        </div>
    </div>
</div>
<!-- Page Header Section End -->

<!-- Main Page Wrapper Start -->
<div id="page" class="section">

    <!-- ELement Free Section Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="row align-items-end htmove-mb-n30">

                <div class="col-lg-5 col-12 htmove-mb-30">
                    <div class="about-us-content">
                        <div class="icon" data-aos="fade-up"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/about/about-us/heart.png" alt="MoveAddons About Us"></div>
                        <h2 class="title" data-aos="fade-up" data-aos-delay="250"><?php the_field('about_us_content_title'); ?></h2>
                        <div class="desc"><?php the_field('about_us_content_des'); ?></div>
                        <div class="author-badges">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/about/about-us/badge-1.png" alt="ThemeMove Move Addons" data-aos="fade-left" data-aos-delay="500">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/about/about-us/badge-2.png" alt="Envato Elite" data-aos="fade-left" data-aos-delay="750">
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 col-12 htmove-mb-30" data-aos="fade-up">
                    <div class="about-us-image"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/about/about-us/about-image.png" alt="Move Addons for Elementor"></div>
                </div>

            </div>

            <div class="about-us-funfacts row row-cols-lg-3 row-cols-md-2 row-cols-1 htmove-mb-n30">
                <?php
                if( have_rows('about_funfact_item') ):
                    // Loop through rows.
                    while( have_rows('about_funfact_item') ) : the_row();
                echo'<div class="col htmove-mb-30" data-aos="fade-up">
                    <div class="funfact">
                        <div class="content">
                            <div class="number"><span class="counter">'.esc_html( get_sub_field('funfact_item_counter') ).'</span>+</div>
                            <p>'.esc_html( get_sub_field('funfact_item_title') ).'</p>
                        </div>
                        <div class="image"><img src="'.esc_html( get_sub_field('funfact_item_icon') ).'" alt="Move Addons About Funfact"></div>
                    </div>
                </div>';
                // End loop.
                endwhile; else : endif; ?>
                <!-- Feature Four End -->

            </div>
        </div>
    </div>
    <!-- ELement Free Section End -->

    <!-- Project Section Start -->
    <div class="section section-padding htmove-pt-0">
        <div class="container">
            <div class="about-section-title">
                <h2 class="title"><?php the_field('our_product_tf_title'); ?></h2>
            </div>
            <div class="row row-cols-lg-3 row-cols-sm-2 row-cols-1 htmove-mb-n30">

                <!-- Project Start -->
                <?php
                if( have_rows('product_tf_item') ):
                    // Loop through rows.
                    while( have_rows('product_tf_item') ) : the_row();
                echo'<div class="col htmove-mb-30">
                    <a href="'.esc_html( get_sub_field('product_item_link') ).'" class="project-demo" target="_blank">
                        <div class="image">
                            <img src="'.esc_html( get_sub_field('product_item_img_lnk') ).'" alt="Move Addons Project">
                        </div>
                    </a>
                </div>';
                // End loop.
                endwhile; else : endif; ?>
                <!-- Project End -->

            </div>

            <div class="row htmove-mt-50">
                <div class="col htmove-text-center">
                    <a href="<?php the_field('view_more_buton_link'); ?>" target="_blank" class="htmove-btn about-project-btn"><span class="inner"><?php the_field('view_more_buton_text'); ?></span></a>
                </div>
            </div>

        </div>
    </div>
    <!-- Project Section End -->

    <!-- Feature Section Start -->
    <div id="feature-section-5" class="feature-section-5 section overflow">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-12">
                    <div class="feature-five-image">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/feature/3/feature-1.png" alt="Move Adsdons Feature" />
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-12">
                    <div class="feature-five-content">
                        <h2 class="title"><?php the_field('supercharge_title'); ?></h2>
                        <h3 class="sub-title"><?php the_field('supercharge_subtitle'); ?> <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/feature/5/logo-icon.svg" alt="Move Addons Logo" /></h3>
                        <a href="<?php the_field('supercharge_button_link'); ?>" class="htmove-btn htmove-btn-gradient"><span class="inner"><?php the_field('supercharge_button_text'); ?> <span class="arrow"><i class="fal fa-arrow-right"></i></span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Section End -->


</div>
<!-- Main Page Wrapper End -->

<?php get_footer(); ?>