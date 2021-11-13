<?php
/**
 * HasTech Twenty One Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package HasTech Twenty One
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_HASTECH_TWENTY_ONE_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	// CSS

	wp_enqueue_style( 'style-min', get_stylesheet_directory_uri() . '/assets/css/style.css' );

	wp_enqueue_style( 'hastech-twenty-one-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_HASTECH_TWENTY_ONE_VERSION, 'all' );

	// Js
	wp_enqueue_script( 'modernizr-min', get_stylesheet_directory_uri() . '/assets/js/modernizr-3.11.7.min.js', array('jquery'), time(), true );

	wp_enqueue_script( 'plugins-min', get_stylesheet_directory_uri() . '/assets/js/plugins.js', array('jquery'), time(), true );

	wp_enqueue_script( 'active', get_stylesheet_directory_uri() . '/assets/js/active.js', array('jquery'), time(), true );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );



function moveaddons_child_get_svg_icon_content( $filename, $icon_group = 'free' ) {
    $icon_content = '';

    $filename = sanitize_file_name( rtrim( $filename, '.svg' ) );
	
	$icon_group = sanitize_key( $icon_group );
	$icon_group = ! empty( $icon_group ) ? $icon_group : 'free';

    if ( ! empty( $filename ) ) {
		$file_path = __DIR__ . '/assets/images/elements/' . $icon_group . '/icons/';
        $file_url = realpath( $file_path . $filename . '.svg' );

		if ( file_exists( $file_url ) ) {
            $icon_content = file_get_contents( $file_url );
        }
    }

    return $icon_content;
}