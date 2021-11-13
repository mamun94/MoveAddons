<?php 
/* Template Name: MoveAddons Pricing */

get_header();
?>

<!-- Page Header Section Start -->
<div class="htmove-pricing-page-header section" data-bg-image="<?php echo get_stylesheet_directory_uri() ?>/assets/images/pricing/page-header/bg.jpg" style="background-color: #1d39d8">
        <div class="container">
            <div class="row justify-content-between">
                <!-- Pricing Header Content Start -->
                <div class="col-auto">
                    <div class="htmove-pricing-header-content">
                        <h1 class="title"><?php the_field('pricing_page_header_title'); ?></h1>
                        <p><?php the_field('pricing_page_header_cntnt'); ?></p>
                    </div>
                </div>
                <!-- Pricing Header Content End -->

                <!-- Pricing Header Image Start -->
                <div class="col-auto">
                    <div class="htmove-pricing-header-image">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/pricing/page-header/image.png" alt="" />
                    </div>
                </div>
                <!-- Pricing Header Image End -->
            </div>
        </div>
    </div>
    <!-- Page Header Section End -->

    <!-- Main Page Wrapper Start -->
    <div id="page" class="section">
        <!-- Pricing Section Start -->
        <div class="pricing-section section section-padding">
            <div class="container">
                <div class="htmove-pricing-container">
                    <?php
                        $pricing_plan_switcher = get_field('pricing_plan_switcher');
                        if( $pricing_plan_switcher ): ?>
                    <div class="htmove-pricing-switcher">
                        <input type="radio" name="duration" value="yearly" id="yearly" checked />
                        <label for="yearly"><span class="text"><?php echo esc_html( $pricing_plan_switcher['pricing_switcher_yearly_text']); ?></span></label>
                        <span class="htmove-switch"></span>
                        <input type="radio" name="duration" value="lifetime" id="lifetime" />
                        <label for="lifetime"><?php echo wp_kses_post( $pricing_plan_switcher['pricing_switcher_lifetime_text']); ?></label>
                    </div>
                    <?php endif; ?>

                    <ul class="htmove-pricing-list htmove-bounce-invert">
                        <?php
                        
                        $moveaddons_yearly_pricing_list_formatted = array();

                        // Check rows exists.
                        if( have_rows('moveaddons_yearly_pricing_list') ):
                            $count = 0;
                            while( have_rows('moveaddons_yearly_pricing_list') ) : the_row();

                            if ( 1 == $count ) {
                                $btn_gradient_color = 'htmove-btn-gradient';
                            }else{
                                $btn_gradient_color = '';
                            }

                                $pricing_list_item_data = '<li data-type="yearly" class="is-visible">';

                                    $pricing_list_item_data .= '<header class="htmove-pricing-header" style="background-image: url('.esc_html( get_sub_field('moveaddons_yearly_pricing_header_bg_image') ).'">
                                        <h2 class="title">'.esc_html( get_sub_field('moveaddons_yearly_pricing_header_title') ).'</h2>
                                        <div class="price">
                                            <span class="currency">'.esc_html('$').'</span>
                                            <span class="value">'.esc_html( get_sub_field('moveaddons_yearly_pricing_value') ).'</span>
                                            <span class="duration">'.esc_html( get_sub_field('moveaddons_yearly_pricing_duration') ).'</span>
                                        </div>
                                        <div class="website">
                                            <span class="number">'.esc_html( get_sub_field('yearly_pricing_website_number') ).'</span>
                                            <span class="text">'.esc_html( get_sub_field('yearly_pricing_website_title') ).'</span>
                                        </div>
                                    </header>

                                    <div class="htmove-pricing-body">
                                        <ul class="htmove-pricing-features">';
                                        if( have_rows('moveaddons_yearly_pricing_features') ):
                                            while( have_rows('moveaddons_yearly_pricing_features') ) : the_row();
                                                $pricing_list_item_data .= '<li>'.esc_html( get_sub_field('moveaddons_yearly_pricing_features_title') ).'</li>';
                                            endwhile;
                                        endif;
                                        $pricing_list_item_data .= '</ul>
                                    </div>

                                    <footer class="htmove-pricing-footer">
                                        <a class="cusParmBtn htmove-btn '. $btn_gradient_color .'" href="'.esc_html( get_sub_field('pricing_yearly_footer_purchase_button_link') ).'" data-fsc-item-path-value="move-addons-personal-yearly" data-fsc-action="Add,Checkout"><span class="inner">'.esc_html( get_sub_field('pricing_yearly_footer_purchase_button_text') ).'</span></a>
                                        <a target="_blank" class="cusParmBtn" href="'.esc_html( get_sub_field('pricing_yearly_footer_add_to_cart_button_link') ).'"><span class="inner">'.esc_html( get_sub_field('pricing_yearly_footer_add_to_cart_button_text') ).'</span></a>
                                    </footer>
                                </li>';
                                $moveaddons_yearly_pricing_list_formatted[ $count ]['yearly'] = $pricing_list_item_data;
                                    
                                    $count++;
                                    endwhile;
                                else :
                                endif;
                                
                                // Check rows exists.
                                if( have_rows('moveaddons_lifetime_pricing_list') ):
                                    $count = 0;
                                    while( have_rows('moveaddons_lifetime_pricing_list') ) : the_row();

                                    if ( 1 == $count ) {
                                        $btn_gradient_color = 'htmove-btn-gradient';
                                    }else{
                                        $btn_gradient_color = '';
                                    }

                                    $pricing_list_item_data = '<li data-type="lifetime" class="is-hidden">';
                                    $pricing_list_item_data .= '<header class="htmove-pricing-header" style="background-image: url('.esc_html( get_sub_field('moveaddons_lifetime_pricing_header_bg_image') ).'">
                                        <h2 class="title">'.esc_html( get_sub_field('moveaddons_lifetime_pricing_header_title') ).'</h2>
                                        <div class="price">
                                            <span class="currency">'.esc_html('$').'</span>
                                            <span class="value">'.esc_html( get_sub_field('moveaddons_lifetime_pricing_value') ).'</span>
                                            <span class="duration">'.esc_html( get_sub_field('moveaddons_lifetime_pricing_duration') ).'</span>
                                        </div>
                                        <div class="website">
                                            <span class="number">'.esc_html( get_sub_field('lifetime_pricing_website_number') ).'</span>
                                            <span class="text">'.esc_html( get_sub_field('lifetime_pricing_website_title') ).'</span>
                                        </div>
                                    </header>

                                    <div class="htmove-pricing-body">
                                        <ul class="htmove-pricing-features">';
                                        if( have_rows('moveaddons_lifetime_pricing_features') ):
                                            while( have_rows('moveaddons_lifetime_pricing_features') ) : the_row();
                                                $pricing_list_item_data .= '<li>'.esc_html( get_sub_field('moveaddons_lifetime_pricing_features_title') ).'</li>';
                                            endwhile;
                                        endif;
                                        $pricing_list_item_data .= '</ul>
                                    </div>

                                    <footer class="htmove-pricing-footer">
                                        <a class="cusParmBtn htmove-btn '. $btn_gradient_color .'" href="'.esc_html( get_sub_field('pricing_lifetime_footer_purchase_button_link') ).'" data-fsc-item-path-value="move-addons-lifetime-personal" data-fsc-action="Add,Checkout"><span class="inner">'.esc_html( get_sub_field('pricing_lifetime_footer_purchase_button_text') ).'</span></a>
                                        <a target="_blank" class="cusParmBtn" href="'.esc_html( get_sub_field('pricing_lifetime_footer_add_to_cart_button_link') ).'"><span class="inner">'.esc_html( get_sub_field('pricing_lifetime_footer_add_to_cart_button_text') ).'</span></a>
                                    </footer>
                                </li>';
                                $moveaddons_yearly_pricing_list_formatted[ $count ]['lifetime'] = $pricing_list_item_data;
                                    
                                    $count++;
                                    endwhile;
                                else :
                                endif;

                                if ( is_array( $moveaddons_yearly_pricing_list_formatted ) && ! empty( $moveaddons_yearly_pricing_list_formatted ) ) {
                                    $count = 0;

                                    foreach ( $moveaddons_yearly_pricing_list_formatted as $list_group ) {
                                        if ( 2 === $count ) {echo '<li><ul class="htmove-pricing-wrapper recommended">';
                                        } else {
                                            echo '<li><ul class="htmove-pricing-wrapper">';
                                        }

                                        if ( is_array( $list_group ) && ! empty( $list_group ) ) {
                                            foreach ( $list_group as $list_item ) {
                                                echo $list_item;
                                            }
                                        }

                                        echo '</ul></li>';

                                        $count++;
                                    }
                                }
                                ?>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Pricing Section End -->

        <!-- Newsletter Section Start -->
        <div class="newsletter-section section section-padding" data-bg-image="<?php echo get_stylesheet_directory_uri() ?>/assets/images/pricing/bg/newsletter-bg.jpg" style="background-color: #1d39d8">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="htmove-newsletter-image">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/pricing/icons/heart.png" alt="Move Addons Pricing List" />
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="htmove-newsletter-content">
                            <span class="badge">Subscribe to</span>
                            <h2 class="title">
                                SAVE<span> <span class="counter">40</span>% </span>NOW
                            </h2>
                            <div class="htmove-newsletter-form">
                                <!-- Begin Mailchimp Signup Form -->

                                <div id="mc_embed_signup">
                                    <form action="https://moveaddons.us17.list-manage.com/subscribe/post?u=01319c0c2f4c9121ac5dc2d11&amp;id=455711707f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                        <div id="mc_embed_signup_scroll">
                                            <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email Address" required />
                                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                            <div style="position: absolute; left: -5000px" aria-hidden="true"><input type="text" name="b_01319c0c2f4c9121ac5dc2d11_455711707f" tabindex="-1" value="" /></div>
                                            <div class="clear">
                                                <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="button htmove-btn htmove-btn-gradient">
                                                    <span class="inner"><?php echo esc_html('Get Coupon Code') ?><span class="arrow"><i class="fal fa-arrow-right"></i></span></span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <!--End mc_embed_signup-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter Section End -->

        <!-- Money Back Guarantee Section Start -->
        <div class="section section-padding pb-0" style="background-color: #f3f4f6">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-6 col-12">
                        <div class="htmove-mbg-image"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/pricing/mbg/mbg-1.png" alt="Move Addons Money Back Guarantee" /></div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-12">
                        <div class="htmove-mbg-content">
                            <div class="icon">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/pricing/mbg/icon-1.svg" alt="Money Back Guarantee MoveAddons" />
                            </div>
                            <h2 class="title"><?php the_field('guarantee_title'); ?></h2>
                            <p><?php the_field('guarantee_content'); ?></p>
                            <a href="<?php the_field('gurantee_button_link'); ?>" class="read-more"><?php the_field('gurantee_button_text'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Money Back Guarantee Section End -->

        <!-- Payment Section Start -->
        <div class="section section-padding">
            <div class="container">
                <div class="htmove-payment-image"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/pricing/payment/payment.png" alt="Trusted Payment Methods Move Addons"/></div>
                <div class="htmove-pticing-section-title">
                    <h2 class="title"><?php the_field('trusted_title'); ?></h2>
                    <div class="desc">
                        <p><?php the_field('trusted_content'); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Payment Section End -->

        <!-- Go Pro Section Start -->
        <div id="free-pro-compare" class="section">
            <div class="container">
                <div class="htmove-pticing-section-title" data-aos="fade">
                    <h2 class="title"><?php the_field('free_pro_compare_title'); ?></h2>
                    <div class="desc">
                        <p><?php the_field('free_pro_compare_content'); ?></p>
                    </div>
                </div>

                <div class="htmove-pricing-feature-table">
                    <table>
                        <thead>
                            <tr>
                                <th><?php echo esc_html('Features') ?></th>
                                <th><?php echo esc_html('Lite') ?></th>
                                <th><?php echo esc_html('Pro') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if( have_rows('compare_features_item') ):
                                // Loop through rows.
                                while( have_rows('compare_features_item') ) : the_row();
                            echo'<tr>
                                <td>'.wp_kses_post( get_sub_field('compare_features_title') ).'</td>
                                <td class="check">'.wp_kses_post( get_sub_field('compare_features_lite_icon') ).'</td>
                                <td class="check">'.wp_kses_post( get_sub_field('compare_features_pro_icon') ).'</td>
                            </tr>';
                            // End loop.
                            endwhile; else : endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Go Pro Section End -->

        <!-- FAQ Section Start -->
        <div class="section section-padding">
            <div class="container">
                <div class="htmove-faq-image"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/pricing/faq/faq.png" alt="Move Addons Frequently Asked Questions" /></div>

                <div class="htmove-pticing-section-title" data-aos="fade">
                    <h2 class="title"><?php the_field('faq_section_title'); ?></h2>
                    <div class="desc">
                        <p><?php the_field('faq_section_description'); ?></p>
                    </div>
                </div>

                <!-- Accordion Start -->
                <div id="htmove-faq-2" class="htmove-accordion htmove-accordion-five">

                    <!-- Accordion Card Start -->
                    <?php
                    if( have_rows('faq_single_item') ):
                        // Loop through rows.
                        while( have_rows('faq_single_item') ) : the_row();
                    echo'<div class="htmove-accordion-card">
                        <div class="htmove-accordion-head">
                            <span class="htmove-accordion-head-icon"><i class="fas fa-lamp-desk"></i></span>
                            <span class="htmove-accordion-head-indicator"></span>
                            <span class="htmove-accordion-head-text">'.esc_html( get_sub_field('faq_single_title') ).'</span>
                        </div>
                        <div class="htmove-accordion-body">
                            <div class="htmove-accordion-content">
                                <p>'.wp_kses_post( get_sub_field('faq_single_des') ).'</p>
                            </div>
                        </div>
                    </div>';
                    // End loop.
                    endwhile; else : endif; ?>
                    <!-- Accordion Card End -->

                </div>
                <!-- Accordion Start -->
            </div>
        </div>
        <!-- FAQ Section End -->

        <!-- Feature Section Start -->
        <div id="feature-section-5" class="feature-section-5 section overflow">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-12">
                        <div class="feature-five-image" data-aos="fade-up">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/feature/3/feature-1.png" alt="" />
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-12">
                        <div class="feature-five-content">
                            <h2 class="title" data-aos="fade-left" data-aos-delay="250"><?php the_field('supercharge_title'); ?></h2>
                            <h3 class="sub-title" data-aos="fade-left" data-aos-delay="500"><?php the_field('supercharge_subtitle'); ?> <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/feature/5/logo-icon.svg" alt="" /></h3>
                            <a href="<?php the_field('supercharge_button_link'); ?>" class="htmove-btn htmove-btn-gradient" data-aos="fade-left" data-aos-delay="750"><span class="inner"><?php the_field('supercharge_button_text'); ?> <span class="arrow"><i class="fal fa-arrow-right"></i></span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature Section End -->

    </div>
    <!-- Main Page Wrapper End -->

<?php get_footer(); ?>