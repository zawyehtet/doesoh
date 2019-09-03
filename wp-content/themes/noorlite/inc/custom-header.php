<?php
/**
 * Custom header implementation
 */

function noorlite_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'noorlite_custom_header_args', array(

		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1600,
		'height'                 => 400,
		'wp-head-callback'       => 'noorlite_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'noorlite_custom_header_setup' );

if ( ! function_exists( 'noorlite_header_style' ) ) :

add_action( 'wp_enqueue_scripts', 'noorlite_header_style' );
function noorlite_header_style() {
	if ( get_header_image() ) :
	$custom_css = "
        #noor-header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
		}";
	   	wp_add_inline_style( 'noor-basic-style', $custom_css );
	endif;
}
endif; // noorlite_header_style