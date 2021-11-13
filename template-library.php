<?php 
/* Template Name: MoveAddons Template Library */

get_header();
?>

<!-- Page Header Section Start -->
<div class="htmove-page-header section" data-bg-image="<?php echo get_stylesheet_directory_uri() ?>/assets/images/page-header/bg-pro.jpg" style="background-color: #1D39D8;">
    <div class="container">
        <div class="row">

            <!-- Page Header Content Start -->
            <div class="col-12">
                <div class="htmove-page-header-content htmove-page-header-content-pro">
                    <span class="icon"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/page-header/icon-pro.png" alt="Move Addons "></span>
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
<div id="page" class="section">

<!-- Template Library Home Pages Start -->
<div class="section section-padding">
    <div class="container">

        <div class="section-title" data-aos="fade">
            <h2 class="title"><?php the_field('home_pages_section_title'); ?></h2>
            <div class="desc">
                <p style="color: #333333;"><?php the_field('home_pages_section_des'); ?></p>
            </div>
        </div>

        <div class="row row-cols-xl-4 row-cols-md-3 row-cols-sm-2 row-cols-1 htmove-mb-n30">

            <!-- Template Start -->
            <?php
            if( have_rows('home_pages_demo_item') ):
                // Loop through rows.
                while( have_rows('home_pages_demo_item') ) : the_row();
            echo'<div class="col htmove-mb-30" data-aos="fade-up">
                <a href="'.esc_html( get_sub_field('pages_item_link') ).'" class="template-demo">
                    <div class="image">';
                        $item = get_sub_field('pages_item_image');
                        echo wp_get_attachment_image( $item['ID'], array('270','300'), false ); 
                    echo'</div>
                    <h5 class="title">'.esc_html( get_sub_field('pages_item_title') ).'</h5>
                </a>
            </div>';
            // End loop.
            endwhile; else : endif; ?>

        </div>

    </div>
</div>
<!-- Template Library Home Pages End -->

<hr class="section">

<!-- Template Library Inner Pages Start -->
<div class="section section-padding">
    <div class="container">

        <div class="section-title" data-aos="fade">
            <h2 class="title"><?php the_field('inner_pages_section_title'); ?></h2>
            <div class="desc">
                <p style="color: #333333;"><?php the_field('inner_pages_section_des'); ?></p>
            </div>
        </div>

        <div class="htmove-masonry-grid row row-cols-xl-4 row-cols-md-3 row-cols-sm-2 row-cols-1 htmove-mb-n30">

            <div class="htmove-masonry-sizer col-1"></div>

            <!-- Template Start -->
            <?php
            if( have_rows('inner_pages_demo_item') ):
                // Loop through rows.
                while( have_rows('inner_pages_demo_item') ) : the_row();
            echo'<div class="htmove-masonry-item col htmove-mb-30" data-aos="fade-up">
                <a href="'.esc_html( get_sub_field('inner_pages_item_link') ).'" class="template-demo">
                    <div class="image">';
                        $item1 = get_sub_field('inner_pages_item_image');
                        echo wp_get_attachment_image( $item1['ID'], array('270','300'), false ); 
                    echo'</div>
                    <h5 class="title">'.esc_html( get_sub_field('inner_pages_item_title') ).'</h5>
                </a>
            </div>';
            // End loop.
            endwhile; else : endif; ?>
            <!-- Template End -->

        </div>

    </div>
</div>
<!-- Template Library Inner Pages End -->

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