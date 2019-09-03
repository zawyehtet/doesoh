<?php
/**
 * lz-cleaning-services: Customizer
 *
 * @package WordPress
 * @subpackage lz-cleaning-services
 * @since 1.0
 */

function lz_cleaning_services_customize_register( $wp_customize ) {

	$wp_customize->add_panel( 'lz_cleaning_services_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'lz-cleaning-services' ),
	    'description' => __( 'Description of what this panel does.', 'lz-cleaning-services' ),
	) );

	$wp_customize->add_section( 'lz_cleaning_services_theme_options_section', array(
    	'title'      => __( 'General Settings', 'lz-cleaning-services' ),
		'priority'   => 30,
		'panel' => 'lz_cleaning_services_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('lz_cleaning_services_theme_options',array(
        'default' => __('Right Sidebar','lz-cleaning-services'),
        'sanitize_callback' => 'lz_cleaning_services_sanitize_choices'	        
	));

	$wp_customize->add_control('lz_cleaning_services_theme_options',array(
        'type' => 'radio',
        'label' => __('Do you want this section','lz-cleaning-services'),
        'section' => 'lz_cleaning_services_theme_options_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','lz-cleaning-services'),
            'Right Sidebar' => __('Right Sidebar','lz-cleaning-services'),
            'One Column' => __('One Column','lz-cleaning-services'),
            'Three Columns' => __('Three Columns','lz-cleaning-services'),
            'Four Columns' => __('Four Columns','lz-cleaning-services'),
            'Grid Layout' => __('Grid Layout','lz-cleaning-services')
        ),
	));

	// Top Bar
	$wp_customize->add_section( 'lz_cleaning_services_top_bar', array(
    	'title'      => __( 'Top Bar', 'lz-cleaning-services' ),
		'priority'   => null,
		'panel' => 'lz_cleaning_services_panel_id'
	) );

	$wp_customize->add_setting('lz_cleaning_services_location',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('lz_cleaning_services_location',array(
		'label'	=> __('Add Location','lz-cleaning-services'),
		'section'=> 'lz_cleaning_services_top_bar',
		'setting'=> 'lz_cleaning_services_location',
		'type'=> 'text'
	));

	$wp_customize->add_setting('lz_cleaning_services_timming',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('lz_cleaning_services_timming',array(
		'label'	=> __('Add Opening Timming','lz-cleaning-services'),
		'section'=> 'lz_cleaning_services_top_bar',
		'setting'=> 'lz_cleaning_services_timming',
		'type'=> 'text'
	));
	
	$wp_customize->add_setting('lz_cleaning_services_quote_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('lz_cleaning_services_quote_text',array(
		'label'	=> __('Add Button Text','lz-cleaning-services'),
		'section'=> 'lz_cleaning_services_top_bar',
		'setting'=> 'lz_cleaning_services_quote_text',
		'type'=> 'text'
	));

	$wp_customize->add_setting('lz_cleaning_services_quote_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('lz_cleaning_services_quote_url',array(
		'label'	=> __('Add Button URL','lz-cleaning-services'),
		'section'=> 'lz_cleaning_services_top_bar',
		'setting'=> 'lz_cleaning_services_quote_url',
		'type'=> 'url'
	));

	$wp_customize->add_setting('lz_cleaning_services_call_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('lz_cleaning_services_call_text',array(
		'label'	=> __('Add Call Text','lz-cleaning-services'),
		'section'=> 'lz_cleaning_services_top_bar',
		'setting'=> 'lz_cleaning_services_call_text',
		'type'=> 'text'
	));

	$wp_customize->add_setting('lz_cleaning_services_call_number',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('lz_cleaning_services_call_number',array(
		'label'	=> __('Add Phone Number','lz-cleaning-services'),
		'section'=> 'lz_cleaning_services_top_bar',
		'setting'=> 'lz_cleaning_services_call_number',
		'type'=> 'text'
	));

	$wp_customize->add_setting('lz_cleaning_services_email_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('lz_cleaning_services_email_text',array(
		'label'	=> __('Add Email Text','lz-cleaning-services'),
		'section'=> 'lz_cleaning_services_top_bar',
		'setting'=> 'lz_cleaning_services_email_text',
		'type'=> 'text'
	));

	$wp_customize->add_setting('lz_cleaning_services_email_address',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('lz_cleaning_services_email_address',array(
		'label'	=> __('Add Email Address','lz-cleaning-services'),
		'section'=> 'lz_cleaning_services_top_bar',
		'setting'=> 'lz_cleaning_services_email_address',
		'type'=> 'text'
	));
	
	//social icons
	$wp_customize->add_section( 'lz_cleaning_services_social', array(
    	'title'      => __( 'Social Icons', 'lz-cleaning-services' ),
		'priority'   => null,
		'panel' => 'lz_cleaning_services_panel_id'
	) );

	$wp_customize->add_setting('lz_cleaning_services_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('lz_cleaning_services_facebook_url',array(
		'label'	=> __('Add Facebook link','lz-cleaning-services'),
		'section'	=> 'lz_cleaning_services_social',
		'setting'	=> 'lz_cleaning_services_facebook_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('lz_cleaning_services_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('lz_cleaning_services_twitter_url',array(
		'label'	=> __('Add Twitter link','lz-cleaning-services'),
		'section'	=> 'lz_cleaning_services_social',
		'setting'	=> 'lz_cleaning_services_twitter_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('lz_cleaning_services_insta_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('lz_cleaning_services_insta_url',array(
		'label'	=> __('Add Instagram link','lz-cleaning-services'),
		'section'	=> 'lz_cleaning_services_social',
		'setting'	=> 'lz_cleaning_services_insta_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('lz_cleaning_services_linkedin_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('lz_cleaning_services_linkedin_url',array(
		'label'	=> __('Add Linkedin link','lz-cleaning-services'),
		'section'	=> 'lz_cleaning_services_social',
		'setting'	=> 'lz_cleaning_services_linkedin_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('lz_cleaning_services_pinterest_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('lz_cleaning_services_pinterest_url',array(
		'label'	=> __('Add Pintrest link','lz-cleaning-services'),
		'section'	=> 'lz_cleaning_services_social',
		'setting'	=> 'lz_cleaning_services_pinterest_url',
		'type'	=> 'url'
	));

	//home page slider
	$wp_customize->add_section( 'lz_cleaning_services_slider_section' , array(
    	'title'      => __( 'Slider Settings', 'lz-cleaning-services' ),
		'priority'   => null,
		'panel' => 'lz_cleaning_services_panel_id'
	) );

	$wp_customize->add_setting('lz_cleaning_services_slider_hide_show',array(
       	'default' => 'true',
       	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lz_cleaning_services_slider_hide_show',array(
	   	'type' => 'checkbox',
	   	'label' => __('Show / Hide slider','lz-cleaning-services'),
	   	'description' => __('Image Size ( 1600px x 582px )','lz-cleaning-services'),
	   	'section' => 'lz_cleaning_services_slider_section',
	));

	for ( $count = 1; $count <= 4; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'lz_cleaning_services_slider' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'lz_cleaning_services_sanitize_dropdown_pages'
		) );

		$wp_customize->add_control( 'lz_cleaning_services_slider' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'lz-cleaning-services' ),
			'section'  => 'lz_cleaning_services_slider_section',
			'type'     => 'dropdown-pages'
		) );
	}

	//	OUR SERVICES
	$wp_customize->add_section('lz_cleaning_services_feature_section',array(
		'title'	=> __('Our Features','lz-cleaning-services'),
		'description'=> __('This section will appear below the slider.','lz-cleaning-services'),
		'panel' => 'lz_cleaning_services_panel_id',
	));
	
	$wp_customize->add_setting('cleaning_features_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('cleaning_features_title',array(
		'label'	=> __('Section Title','lz-cleaning-services'),
		'section'	=> 'lz_cleaning_services_feature_section',
		'setting'	=> 'cleaning_features_title',
		'type'		=> 'text'
	));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_pst[]= 'select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_pst[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('cleaning_features_cat',array(
		'default'	=> 'select',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('cleaning_features_cat',array(
		'type'    => 'select',
		'choices' => $cat_pst,
		'label' => __('Select Category to display Post','lz-cleaning-services'),
		'section' => 'lz_cleaning_services_feature_section',
	));

	//Footer
    $wp_customize->add_section( 'lz_cleaning_services_footer', array(
    	'title'      => __( 'Footer Text', 'lz-cleaning-services' ),
		'priority'   => null,
		'panel' => 'lz_cleaning_services_panel_id'
	) );

    $wp_customize->add_setting('lz_cleaning_services_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('lz_cleaning_services_footer_copy',array(
		'label'	=> __('Footer Text','lz-cleaning-services'),
		'section'	=> 'lz_cleaning_services_footer',
		'setting'	=> 'lz_cleaning_services_footer_copy',
		'type'		=> 'text'
	));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'lz_cleaning_services_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'lz_cleaning_services_customize_partial_blogdescription',
	) );

	//front page
	$num_sections = apply_filters( 'lz_cleaning_services_front_page_sections', 4 );

	// Create a setting and control for each of the sections available in the theme.
	for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
		$wp_customize->add_setting( 'panel_' . $i, array(
			'default'           => false,
			'sanitize_callback' => 'lz_cleaning_services_sanitize_dropdown_pages',
			'transport'         => 'postMessage',
		) );

		$wp_customize->add_control( 'panel_' . $i, array(
			/* translators: %d is the front page section number */
			'label'          => sprintf( __( 'Front Page Section %d Content', 'lz-cleaning-services' ), $i ),
			'description'    => ( 1 !== $i ? '' : __( 'Select pages to feature in each area from the dropdowns. Add an image to a section by setting a featured image in the page editor. Empty sections will not be displayed.', 'lz-cleaning-services' ) ),
			'section'        => 'theme_options',
			'type'           => 'dropdown-pages',
			'allow_addition' => true,
			'active_callback' => 'lz_cleaning_services_is_static_front_page',
		) );

		$wp_customize->selective_refresh->add_partial( 'panel_' . $i, array(
			'selector'            => '#panel' . $i,
			'render_callback'     => 'lz_cleaning_services_front_page_section',
			'container_inclusive' => true,
		) );
	}
}
add_action( 'customize_register', 'lz_cleaning_services_customize_register' );

function lz_cleaning_services_customize_partial_blogname() {
	bloginfo( 'name' );
}

function lz_cleaning_services_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

function lz_cleaning_services_is_static_front_page() {
	return ( is_front_page() && ! is_home() );
}

function lz_cleaning_services_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'sidebar-1' ) ) );
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class LZ_Cleaning_Services_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'LZ_Cleaning_Services_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new LZ_Cleaning_Services_Customize_Section_Pro(
				$manager,
				'example_1',
				array(
					'priority' => 9,
					'title'    => esc_html__( 'Cleaning Services Pro ', 'lz-cleaning-services' ),
					'pro_text' => esc_html__( 'Go Pro','lz-cleaning-services' ),
					'pro_url'  => esc_url( 'https://www.luzuk.com/themes/cleaning-services-wordpress-theme/' ),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'lz-cleaning-services-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'lz-cleaning-services-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
LZ_Cleaning_Services_Customize::get_instance();