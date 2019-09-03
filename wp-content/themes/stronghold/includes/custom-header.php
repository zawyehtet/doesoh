<?php
/**
 * Sample implementation of the Custom Header feature
 * http://codex.wordpress.org/Custom_Headers
 *
 * You can add an optional custom header image to header.php like so ...

	<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
	</a>
	<?php endif; // End header image check. ?>

 *
 * @package stronghold
 */
 
/**
 * Setup the WordPress core custom header feature.
 *
 * @uses stronghold_header_style()  
 * @uses stronghold_admin_header_style()
 * @uses stronghold_admin_header_image()   
 *
 * @package stronghold
 */
function stronghold_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'stronghold_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '000000',
		'width'                  => 1920,
		'height'                 => 400,
		'flex-height'            => true,  
		'video'                  => true,
		'wp-head-callback'       => 'stronghold_header_style',
		'admin-head-callback'    => 'stronghold_admin_header_style',
		'admin-preview-callback' => 'stronghold_admin_header_image',
	) ) );
}

add_action( 'after_setup_theme', 'stronghold_custom_header_setup' );



if ( ! function_exists( 'stronghold_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see stronghold_custom_header_setup().  
 */
function stronghold_header_style() {
	if ( get_header_image() ) {
	?>
	<style type="text/css">    
		.header-image {
			background-image: url(<?php echo get_header_image(); ?>);
			display: block;
		}
        .header-inner { 
        	
        }
        .custom-header-media img {
				display: none;
		}
	</style>
	<?php
	}
	if(function_exists('is_header_video_active') ) {
		if ( is_header_video_active() ) { ?>
			<style type="text/css">    
				#wp-custom-header-video-button {
				    position: absolute;
				    z-index:1;
				    top:20px;
				    right: 20px;
				    background:rgba(34, 34, 34, 0.5);
				    border: 1px solid rgba(255,255,255,0.5);
				}
				.wp-custom-header iframe,
				.wp-custom-header video {
				      display: block;
				      //height: auto;
				      max-width: 100%;
				      height: 100vh;
				      width: 100vw;
				      overflow: hidden;
				}

		    </style><?php
		}
    }
}
endif; // stronghold_header_style

if ( ! function_exists( 'stronghold_admin_header_style' ) ) :
/**
 * Styles the header image displayed on the Appearance > Header admin panel.
 *
 * @see stronghold_custom_header_setup().
 */
function stronghold_admin_header_style() {
?>
	<style type="text/css">
		.appearance_page_custom-header #headimg {
			border: none;
		}
		#headimg h1,
		#desc {
		}
		#headimg h1 {
		}
		#headimg h1 a {
		}
		#desc {
		}
		#headimg img {
		}
	</style>
<?php
}
endif; // stronghold_admin_header_style

if ( ! function_exists( 'stronghold_admin_header_image' ) ) :
/**
 * Custom header image markup displayed on the Appearance > Header admin panel.
 *
 * @see stronghold_custom_header_setup().
 */
function stronghold_admin_header_image() {
	$style = sprintf( ' style="color:#%s;"', get_header_textcolor() );
?>
	<div id="headimg">
		<h1 class="displaying-header-text"><a id="name"<?php echo $style; ?> onclick="return false;" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
		<div class="displaying-header-text" id="desc"<?php echo $style; ?>><?php bloginfo( 'description' ); ?></div>
		<?php if ( get_header_image() ) : ?>
		<img src="<?php header_image(); ?>" alt="">
		<?php endif; ?>
	</div>
<?php
}
endif; // stronghold_admin_header_image


/**
 * Customize video play/pause button in the custom header.
 */
if(!function_exists('stronghold_video_controls') ) {
	function stronghold_video_controls( $settings ) {
		$settings['l10n']['play'] = '<span class="screen-reader-text">' . __( 'Play background video', 'stronghold' ) . '</span><i class="fa fa-play"></i>';
		$settings['l10n']['pause'] = '<span class="screen-reader-text">' . __( 'Pause background video', 'stronghold' ) . '</span><i class="fa fa-pause"></i>';
		return $settings;
	}
}
add_filter( 'header_video_settings', 'stronghold_video_controls' );
