<?php 
/* Template Name: MoveAddons Home */

get_header();
?>

<?php 
    $hero_area = get_field('hero_content');
    $hero_button = get_field('hero_button_area');
    $section_content = get_field('features_section_area');
    $element_free_section = get_field('element_free_section_title_area');
    $premium_section_title_area = get_field('premium_section_title_area');

?>

<!-- Hero Section Start -->
<div class="htmove-hero-section section">
    <img class="hero-bg-image" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/hero/hero-bg.png" alt="Move Addons" />
    <div class="container">
        <div class="row">
            <!-- Hero Content Start -->
            <div class="col-xl-4 col-lg-5 col-12">
                <div class="htmove-hero-content" data-aos="fade-up">
                    <h1 class="hero-title"><?php echo $hero_area['hero_title']; ?> <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/hero/text-shape.svg" alt="Move Plugin for Elementor" /></span>
                    </h1>
                    <h3 class="hero-sub-title"><?php echo $hero_area['hero_subtitle']; ?></h3>
                    <div class="hero-desc">
                        <p><?php echo $hero_area['hero_description']; ?></p>
                    </div>
                    <div class="hero-buttons">
                        <a href="#feature-section-1" class="smoothscroll hero-btn htmove-btn htmove-btn-gradient"><span class="inner"><?php echo $hero_button['get_button_text']; ?> <span class="arrow"><?php echo $hero_button['get_button_icon']; ?></span></span></a>
                        <a href="#elements-free" class="smoothscroll hero-btn htmove-btn"><span class="inner"><?php echo $hero_button['demo_button_icon']; ?> <?php echo $hero_button['demo_button_text']; ?></span></a>
                    </div>
                </div>
            </div>
            <!-- Hero Content End -->

            <!-- Hero Image Start -->
            <div class="col-xl-8 col-lg-7 col-12">
                <div class="htmove-hero-image" data-aos="fade-up">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/hero/hero-1.png" alt="Move Plugin for Elementor Addon" />
                </div>
                <div class="hero-scene-1 htmove-scene" >
                    <div><img class="svginject" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/hero/shape-1.svg" alt="Move Addons WP plugin for Elementor Page builder" /></div>
                </div>
                <div class="hero-scene-2 htmove-scene">
                    <div><img class="svginject" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/hero/shape-2.svg" alt="Move addons is a WordPress plugin for Elementor" /></div>
                </div>
            </div>
        </div>
        <!-- Hero Image End -->

        <span class="hero-scroll-down">Scroll Down <i class="fal fa-mouse-alt"></i></span>
    </div>
</div>
<!-- Hero Section End -->

<!-- Main Page Wrapper Start -->
<div id="page" class="section">
    <!-- Feature Section Start -->
    <div id="feature-section-1" class="feature-section-1 section">
        <img class="shape shape-1" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/feature/1/shape-1.png" alt="Move Addons feature" />
        <img class="shape shape-2" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/feature/1/shape-2.png" alt="Move Addons Elementor Plugin" />
        <img class="shape shape-3" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/feature/1/shape-3.png" alt="Move addons is a WordPress plugin for Elementor" />
        <img class="shape shape-6" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/feature/1/shape-6.png" alt="Move Addons WP plugin for Elementor" />

        <div class="container">
            <div class="section-title" data-aos="fade" data-aos-delay="100">
                <span class="icon"><img class="svginject" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/section-title/feature-1.svg" alt="Move Addons Feature" /></span>
                <h2 class="title"><?php echo $section_content['section_title']; ?></h2>
                <div class="desc">
                    <p><?php echo $section_content['section_description']; ?></p>
                </div>
            </div>

            <div class="row">

                <!-- Feature Start -->
                <?php
                // check if the repeater field has rows of data
                if( have_rows('single_features_item') ):
                    while ( have_rows('single_features_item') ) : the_row();
                echo'<div class="col-lg-4 col-md-6 col-12"  data-aos="fade-up">';
                    echo'<div class="feature-one">
                        <div class="icon">
                            <img class="svginject" src="'.esc_html( get_sub_field('single_item_image') ).'" alt="MoveAddons Features" />
                        </div>
                        <div class="content">
                            <h3 class="title">'.esc_html( get_sub_field('single_item_title') ).'</h3>
                            <p>'.esc_html( get_sub_field('single_item_content') ).'</p>
                        </div>
                        <span class="shape-bar"></span>
                    </div>';
                echo'</div>';
                endwhile;
                else : endif; ?>
                <!-- Feature End -->
                
            </div>
        </div>
    </div>
    <!-- Feature Section End -->

    <!-- Feature Two Section Start -->
    <div id="feature-section-2" class="feature-section-2 section">
        <div class="container">

            <!-- Feature Two Start -->
            <?php
            // check if the repeater field has rows of data
            if( have_rows('features_item') ):
                $shape_class = 1;
                $count = 0;
                while( have_rows('features_item') ) : the_row();
                if($count % 2 == 0){
                    $order = "order-lg-2";
                    $ordercontent = "order-lg-1"; 
                }
                else{
                    $order = "";
                    $ordercontent = "";
                }
            echo'<div class="feature-two">
                <div class="row justify-content-between htmove-mb-n40">
                    <div class="col-lg-6 col-12 htmove-mb-40 '. $order .'" data-aos="fade-up">
                        <div class="feature-two-image">
                            <img src="'.esc_html( get_sub_field('features_item_image') ).'" alt="Move Addons features item" />
                            <img class="shape shape-'. $shape_class .'" src="'.esc_html( get_sub_field('features_item_shape_image') ).'" alt="Move Addons features item" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 align-self-center htmove-mb-40 '. $ordercontent .'" data-aos="fade-up">
                        <div class="feature-two-content">
                            <div class="icon" data-border-solid>
                                <img class="svginject" src="'.esc_html( get_sub_field('features_content_icon') ).'" alt="Move Addons WP plugin for Elementor" />
                                <span class="number">'.esc_html( get_sub_field('features_content_count') ).'</span>
                            </div>
                            <h2 class="title">'.esc_html( get_sub_field('features_content_title') ).'</h2>
                            <p>'.wp_kses_post( get_sub_field('features_content_des') ).'</p>
                        </div>
                    </div>
                </div>
            </div>';
            $count ++;
            $shape_class ++;
            endwhile;
            endif;
            ?>
            <!-- Feature Two End -->

        </div>
    </div>
    <!-- Feature Two Section End -->

    <!-- ELement Free Section Start -->
    <div id="elements-free" class="element-section-free section">
        <div class="container">
            <div class="section-title" data-aos="fade">
                <span class="icon" style="margin-bottom: 20px"><img class="svginject" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/section-title/element-free.svg" alt="Move Addons Free Element" /></span>
                <h2 class="title">
                    <?php echo $element_free_section['element_section_title']; ?>
                </h2>
                <div class="desc">
                    <p style="color: #333333"><?php echo $element_free_section['element_section_content']; ?></p>
                </div>
            </div>

            <div class="row row-cols-xl-4 row-cols-md-3 row-cols-sm-2 row-cols-1 htmove-mb-n30">
                <!-- Element Start -->
                <?php
                if( have_rows('free_elements_item') ):
                    // Loop through rows.
                    while( have_rows('free_elements_item') ) : the_row();
                echo'<div class="col htmove-mb-30" data-aos="fade-up">
                    <a href="'.esc_html( get_sub_field('item_link') ).'" class="element element-free">
                        <div class="icon">'.moveaddons_child_get_svg_icon_content( get_sub_field('item_iconimage') ).'</div>
                        <h5 class="title">'.esc_html( get_sub_field('item_title') ).'</h5>
                    </a>
                </div>';
                // End loop.
                endwhile; else : endif; ?>
                <!-- Element End -->
            </div>

            <div class="row">
                <div class="col htmove-text-center">
                    <a href="<?php the_field('elements_button_link'); ?>" class="element-btn htmove-btn"><span class="inner"><?php the_field('elements_button_text'); ?></span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- ELement Free Section End -->

    <!-- ELement Pro Section Start -->
    <div id="elements-pro" class="element-section-pro section" data-bg-image="<?php echo get_stylesheet_directory_uri() ?>/assets/images/elements/bg/pro-bg.svg">
        <div class="container">
            <div class="section-title section-title-light" data-aos="fade">
                <span class="icon"><img class="svginject" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/section-title/element-pro.svg" alt="Move Addons Pro Element" /></span>
                <h2 class="title">
                    <span style="color: #f8e71c"><?php echo $premium_section_title_area['premium_section_title']; ?></span>
                </h2>
                <div class="desc">
                    <p><?php echo $premium_section_title_area['premium_section_content']; ?></p>
                </div>
            </div>

            <div class="row row-cols-xl-4 row-cols-md-3 row-cols-sm-2 row-cols-1 htmove-mb-n40">

                <!-- Element Start -->
                <?php
                if( have_rows('premium_elements_item') ):
                    // Loop through rows.
                    while( have_rows('premium_elements_item') ) : the_row();
                echo'<div class="col htmove-mb-40" data-aos="fade-up">
                    <a href="'.esc_html( get_sub_field('pre_item_link') ).'" class="element element-shadow element-pro">
                        <div class="icon">'.moveaddons_child_get_svg_icon_content( get_sub_field('pre_item_iconimage'), 'pro' ).'</div>
                        <h5 class="title">'.esc_html( get_sub_field('pre_item_title') ).'</h5>
                    </a>
                </div>';
                // End loop.
                endwhile; else : endif; ?>
                <!-- Element End -->

            </div>

            <div class="row">
                <div class="col htmove-text-center">
                    <a href="<?php the_field('premium_button_link'); ?>" class="element-btn htmove-btn htmove-btn-gradient"><span class="inner"><?php the_field('premium_button_text'); ?></span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- ELement Pro Section End -->

    <!-- Templates Section Start -->
    <div id="template-section" class="template-section section" data-bg-image="<?php echo get_stylesheet_directory_uri() ?>/assets/images/template/bg.svg">
        <div class="container">
            <div class="section-title section-title-light" data-aos="fade">
                <h2 class="title">
                    <span style="color: #f8e71c"><?php the_field('template_section_title'); ?></span>
                </h2>
                <div class="desc">
                    <p><?php the_field('template_section_des'); ?></p>
                </div>
                <div class="link">
                    <a href="<?php the_field('see_button_link'); ?>" style="color: #f8e71c"><?php the_field('see_button_text'); ?><i class="far fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="templates-images row row-cols-5 align-items-center">
            <div class="template-image col"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/template/home/8-photography.png" alt="Move Addons Photography Template" /></div>
            <div class="template-image col">
                <div class="row row-cols-1">
                    <div class="template-image col"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/template/home/7-kid-school.png" alt="Move Addons Ready Template Kid School" /></div>
                    <div class="template-image col"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/template/home/2-doctor.png" alt="Move Addons Doctor Template" /></div>
                </div>
            </div>
            <div class="template-image col">
                <div class="row row-cols-1">
                    <div class="template-image col"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/template/home/9-gym.png" alt="Move Addons Free Template Gym" /></div>
                    <div class="template-image col"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/template/home/3-consultant-business.png" alt="Move Addons Ready Template Consultant Business" /></div>
                </div>
            </div>
            <div class="template-image col"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/template/home/4-app.png" alt="Move Addons App Template" /></div>
            <div class="template-image col"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/template/home/6-business.png" alt="Move Addons Free Template Business" /></div>
        </div>
    </div>
    <!-- Templates Section End -->

    <!-- Feature Section Start -->
    <div id="feature-section-5" class="feature-section-5 section overflow">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-12">
                    <div class="feature-five-image" data-aos="fade-up">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/feature/3/feature-1.png" alt="Supercharge your page building experience with Move Plugin" />
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-12">
                    <div class="feature-five-content">
                        <h2 class="title" data-aos="fade-left" data-aos-delay="250"><?php the_field('supercharge_title'); ?></h2>
                        <h3 class="sub-title" data-aos="fade-left" data-aos-delay="500"><?php the_field('supercharge_subtitle'); ?> <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/feature/5/logo-icon.svg" alt="Move Addons Logo" /></h3>
                        <a href="<?php the_field('supercharge_button_link'); ?>" class="htmove-btn htmove-btn-gradient" data-aos="fade-left" data-aos-delay="750"><span class="inner"><?php the_field('supercharge_button_text'); ?> <span class="arrow"><i class="fal fa-arrow-right"></i></span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Section End -->

    <!-- Feature Section Start -->
    <div id="feature-section-4" class="feature-section-4 section">
        <div class="container">
            <div class="section-title section-title-left" data-aos="fade">
                <span class="icon" style="margin-bottom: 20px"><img class="svginject" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/section-title/element-free.svg" alt="Move Addons Free Element Features" /></span>
                <h2 class="title" data-aos="fade-up"><?php the_field('love_fetures_title'); ?></h2>
            </div>

            <div class="feature-four-wrapper row row-cols-lg-3 row-cols-md-2 row-cols-1 htmove-mb-n50">

                <!-- Feature Four Start -->
                <?php
                if( have_rows('love_features_item') ):
                    // Loop through rows.
                    while( have_rows('love_features_item') ) : the_row();
                echo'<div class="col htmove-mb-50" data-aos="fade-up">
                    <div class="feature-four">
                        <div class="icon">
                            <img class="svginject" src="'.esc_html( get_sub_field('love_features_icon') ).'" alt="Move Addons Features Icon" />
                        </div>
                        <div class="content">
                            <h3 class="title">'.esc_html( get_sub_field('love_features_title') ).'</h3>
                            <p>'.esc_html( get_sub_field('love_features_des') ).'</p>
                        </div>
                    </div>
                </div>';
                // End loop.
                endwhile; else : endif; ?>
                <!-- Feature Four End -->

            </div>
        </div>
    </div>
    <!-- Feature Section End -->
</div>
<!-- Main Page Wrapper End -->

<div class="htmove-footer-cta section">
    <div class="inner section section-padding" data-bg-image="<?php echo get_stylesheet_directory_uri() ?>/assets/images/cta/bg.jpg">
        <div class="container">
            <div class="htmove-footer-cta-content">

                <div class="icon"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/cta/icon.png" alt="Move Addons Happy User"></div>
                <h2 class="title"><?php the_field('happy_user_title'); ?></h2>
                <p><?php the_field('happy_user_content'); ?></p>
                <div class="htmove-buttons">
                    <a href="<?php the_field('premiumm_button_link'); ?>" class="htmove-btn htmove-btn-gradient"><span class="inner"><?php the_field('premiumm_button_text'); ?></span></a>
                    <a href="<?php the_field('free_button_link'); ?>" class="htmove-btn"><span class="inner"><?php the_field('free_button_text'); ?></span></a>
                </div>

            </div>
        </div>
    </div>
</div>



<?php get_footer(); ?>