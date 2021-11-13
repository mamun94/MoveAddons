<?php 
/* Template Name: MoveAddons Contact Us */

get_header();
?>

<!-- Page Header Section Start -->
<div class="htmove-page-header section" data-bg-image="<?php echo get_stylesheet_directory_uri() ?>/assets/images/page-header/bg-pro.jpg" style="background-color: #1D39D8;">
    <div class="container">
        <div class="row">

            <!-- Page Header Content Start -->
            <div class="col-12">
                <div class="htmove-page-header-content htmove-page-header-content-pro">
                    <span class="icon"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/page-header/icon-pro.png" alt=""></span>
                    <h1 class="title"><?php if(is_front_page() || is_home()){echo get_bloginfo('name');} else{echo wp_title('');}?></h1>
                    <ul class="htmove-page-breadcrumb">
                        <li><a href="<?php echo get_home_url(); ?>"><?php echo get_the_title(get_option('page_on_front')); ?></a></li>
                        <li class="active"><?php echo get_the_title(); ?></li>
                    </ul>
                </div>
            </div>
            <!-- Page Header Content End -->

        </div>
    </div>
</div>
<!-- Page Header Section End -->


<!-- Main Page Wrapper Start -->
<div class="section section-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="contact-us-form">
                    <?php the_field('contact_wp_form'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Page Wrapper End -->

<div class="htmove-footer-cta section">
    <div class="inner section section-padding" data-bg-image="<?php echo get_stylesheet_directory_uri() ?>/assets/images/cta/bg.jpg">
        <div class="container">
            <div class="htmove-footer-cta-content">

                <div class="icon"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/cta/icon.png" alt=""></div>
                <h2 class="title"><?php the_field('happy_user_title'); ?></h2>
                <p><?php the_field('happy_user_content'); ?></p>
                <div class="htmove-buttons">
                    <a href="<?php the_field('premium_button_link'); ?>" class="htmove-btn htmove-btn-gradient"><span class="inner"><?php the_field('premiumm_button_text'); ?></span></a>
                    <a href="<?php the_field('free_button_link'); ?>" class="htmove-btn"><span class="inner"><?php the_field('free_button_text'); ?></span></a>
                </div>

            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>