<?php
/**
 * noor functions and definitions
 *
 * @package WordPress
 * @subpackage noor
 * @since 1.0
 */

function noorlite_setup() {
    
    global $content_width;

	if ( ! isset( $content_width ) ) {
		$content_width = 780;
	}
	
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-background', $defaults = array(
    'default-color'          => '',
    'default-image'          => '',
    'default-repeat'         => '',
    'default-position-x'     => '',
    'default-attachment'     => '',
    'wp-head-callback'       => '_custom_background_cb',
    'admin-head-callback'    => '',
    'admin-preview-callback' => ''
	));

	add_image_size( 'noor-featured-image', 1920, 1200, true );

	add_image_size( 'noor-thumbnail-avatar', 100, 100, true );
        
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'noorlite' ),
	) );
    

	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, and column width.
 	 */
	add_editor_style( array( 'assets/css/editor-style.css', noorlite_fonts_url() ) );

}
add_action( 'after_setup_theme', 'noorlite_setup' );

function noorlite_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'noorlite' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here.', 'noorlite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h2 class="widget-title">',
		'after_title'   => '</h2></div>',
	) );
    
    for( $i = 1; $i <= 4; $i++ ) {
	    register_sidebar( array(
	        /* translators: 1: Widget number. */
	        'name'          => sprintf( esc_html__( 'Footer %d', 'noorlite' ), $i ),
	        'id'            => 'footer-'.$i,
	        'before_widget' => '<section id="%1$s" class="widget footer-widgets %2$s">',
	        'after_widget'  => '</section>',
	        'before_title'  => '<h2 class="widget-title">',
	        'after_title'   => '</h2>',
	    ) );
	}

}
add_action( 'widgets_init', 'noorlite_widgets_init' );


if ( ! function_exists( 'wp_body_open' ) ) {
    /**
     * Fire the wp_body_open action.
     *
     * Added for backwards compatibility to support WordPress versions prior to 5.2.0.
     */
    function wp_body_open() {
        /**
         * Triggered after the opening <body> tag.
         */
        do_action( 'wp_body_open' );
    }
}

function noorlite_fonts_url(){
	$font_url = '';
	$font_family = array();
	$font_family[] = 'Open Sans:300,300i,400,400i,600,600i,700,700i,800,800i';

	$query_args = array(
		'family'	=> rawurlencode(implode('|', $font_family)),
	);
	$font_url = add_query_arg( $query_args,'//fonts.googleapis.com/css' );
	return $font_url;
}

//Enqueue scripts and styles.
function noorlite_scripts() {

	wp_enqueue_style( 'noor-fonts', noorlite_fonts_url(), array(), null );
	
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/css/bootstrap.css' );
	
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/css/fontawesome-all.css' );

	wp_enqueue_style( 'noor-basic-style', get_stylesheet_uri() );
    
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery'), '4.0.0');
    
	wp_enqueue_script( 'html5', get_theme_file_uri( '/assets/js/html5.js' ), array(), '3.7.3' );

	wp_enqueue_script( 'noor-skip-link-focus-fix', get_theme_file_uri( '/assets/js/skip-link-focus-fix.js' ), array(), '1.0.0', true );
	
	wp_enqueue_script( 'noor-navigation-jquery', get_theme_file_uri( '/assets/js/navigation.js' ), array( 'jquery' ), '2.1.0', true );
    
	wp_enqueue_script( 'noor-skip-link-focus-fix', get_theme_file_uri( '/assets/js/skip-link-focus-fix.js' ), array(), '1.0.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'noorlite_scripts' );

function noorlite_sanitize_dropdown_pages( $page_id, $setting ) {
  $page_id = absint( $page_id );
  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

function noorlite_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function noorlite_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template',  'noorlite_front_page_template' );

//footer Link
define('NOOR_CREDIT','https://codenpy.com/','noorlite');

if ( ! function_exists( 'noorlite_credit' ) ) {
	function noorlite_credit(){
		echo "<a href=".esc_url(NOOR_CREDIT)." rel='nofollow' target='_blank'>".esc_html__('Codenpy','noorlite')."</a>";
	}
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'noorlite_loop_columns');
	if (!function_exists('noorlite_loop_columns')) {
		function noorlite_loop_columns() {
	return 3; // 3 products per row
	}
}

// Excerpt Limit
function noorlite_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'noorlite_excerpt_length');



require get_template_directory() . ( '/inc/custom-header.php' );

require get_template_directory() . ( '/inc/template-tags.php' );

require get_template_directory() . ( '/inc/template-functions.php' );

require get_template_directory() . ( '/inc/customizer.php' );