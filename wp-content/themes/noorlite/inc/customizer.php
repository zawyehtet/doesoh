<?php
/**
 * noor: Customizer
 *
 * @package WordPress
 * @subpackage noor
 * @since 1.0
 */

function noorlite_customize_register( $wp_customize ) {

    $wp_customize->add_panel( 'noorlite_panel_id', array(
        'priority' => 10,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __( 'Theme Settings', 'noorlite' ),
        'description' => __( 'Description of what this panel does.', 'noorlite' ),
    ) );

    $wp_customize->add_section( 'noorlite_theme_options_section', array(
        'title'      => __( 'General Settings', 'noorlite' ),
        'priority'   => 30,
        'panel' => 'noorlite_panel_id'
    ) );

    // Add Settings and Controls for Layout
    $wp_customize->add_setting('noorlite_theme_options',array(
        'default' => __('Right Sidebar','noorlite'),
        'sanitize_callback' => 'noorlite_sanitize_choices'            
    ));

    $wp_customize->add_control('noorlite_theme_options',array(
        'type' => 'radio',
        'label' => __('Do you want this section','noorlite'),
        'section' => 'noorlite_theme_options_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','noorlite'),
            'Right Sidebar' => __('Right Sidebar','noorlite'),
            'One Column' => __('One Column','noorlite'),
            'Three Columns' => __('Three Columns','noorlite'),
            'Four Columns' => __('Four Columns','noorlite'),
            'Grid Layout' => __('Grid Layout','noorlite')
        ),
    ));

    // Top Bar
    $wp_customize->add_section( 'noorlite_top_bar', array(
        'title'      => __( 'Top Bar', 'noorlite' ),
        'priority'   => null,
        'panel' => 'noorlite_panel_id'
    ) );

    $wp_customize->add_setting('noorlite_location',array(
        'default'=> '',
        'sanitize_callback'    => 'sanitize_text_field'
    ));    
    $wp_customize->add_control('noorlite_location',array(
        'label'    => __('Add Location','noorlite'),
        'section'=> 'noorlite_top_bar',
        'setting'=> 'noorlite_location',
        'type'=> 'text'
    ));

    $wp_customize->add_setting('noorlite_email',array(
        'default'=> '',
        'sanitize_callback'    => 'sanitize_text_field'
    ));    
    $wp_customize->add_control('noorlite_email',array(
        'label'    => __('Add Email','noorlite'),
        'section'=> 'noorlite_top_bar',
        'setting'=> 'noorlite_email',
        'type'=> 'text'
    ));

    $wp_customize->add_setting('noorlite_phone_number',array(
        'default'=> '',
        'sanitize_callback'    => 'sanitize_text_field'
    ));    
    $wp_customize->add_control('noorlite_phone_number',array(
        'label'    => __('Add Phone Number','noorlite'),
        'section'=> 'noorlite_top_bar',
        'setting'=> 'noorlite_phone_number',
        'type'=> 'text'
    ));
    
    //social icons
    $wp_customize->add_section( 'noorlite_social', array(
        'title'      => __( 'Social Icons', 'noorlite' ),
        'priority'   => null,
        'panel' => 'noorlite_panel_id'
    ) );

    $wp_customize->add_setting('noorlite_facebook_url',array(
        'default'    => '',
        'sanitize_callback'    => 'esc_url_raw'
    ));    
    $wp_customize->add_control('noorlite_facebook_url',array(
        'label'    => __('Add Facebook link','noorlite'),
        'section'    => 'noorlite_social',
        'setting'    => 'noorlite_facebook_url',
        'type'    => 'url'
    ));

    $wp_customize->add_setting('noorlite_twitter_url',array(
        'default'    => '',
        'sanitize_callback'    => 'esc_url_raw'
    ));    
    $wp_customize->add_control('noorlite_twitter_url',array(
        'label'    => __('Add Twitter link','noorlite'),
        'section'    => 'noorlite_social',
        'setting'    => 'noorlite_twitter_url',
        'type'    => 'url'
    ));

    $wp_customize->add_setting('noorlite_insta_url',array(
        'default'    => '',
        'sanitize_callback'    => 'esc_url_raw'
    ));    
    $wp_customize->add_control('noorlite_insta_url',array(
        'label'    => __('Add Instagram link','noorlite'),
        'section'    => 'noorlite_social',
        'setting'    => 'noorlite_insta_url',
        'type'    => 'url'
    ));

    $wp_customize->add_setting('noorlite_linkedin_url',array(
        'default'    => '',
        'sanitize_callback'    => 'esc_url_raw'
    ));
    $wp_customize->add_control('noorlite_linkedin_url',array(
        'label'    => __('Add Linkedin link','noorlite'),
        'section'    => 'noorlite_social',
        'setting'    => 'noorlite_linkedin_url',
        'type'    => 'url'
    ));

    $wp_customize->add_setting('noorlite_pinterest_url',array(
        'default'    => '',
        'sanitize_callback'    => 'esc_url_raw'
    ));    
    $wp_customize->add_control('noorlite_pinterest_url',array(
        'label'    => __('Add Pintrest link','noorlite'),
        'section'    => 'noorlite_social',
        'setting'    => 'noorlite_pinterest_url',
        'type'    => 'url'
    ));
    

    //home page slider
    $wp_customize->add_section( 'noorlite_slider_section' , array(
        'title'      => __( 'Hero Image Settings', 'noorlite' ),
        'description'=> __('You have to select page template "Custom Home" to show this section from page.','noorlite'),
        'priority'   => null,
        'panel' => 'noorlite_panel_id'
    ) );
    $wp_customize->add_setting('noorlite_slider_arrows',array(
       'default' => 'false',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('noorlite_slider_arrows',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide hero image','noorlite'),
       'section' => 'noorlite_slider_section',
    ));

	$wp_customize->add_setting('noorlite_slider_cat',array(
		'default'	=> 'select',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('noorlite_slider_cat',array(
		'type'    => 'dropdown-pages',
		'label' => __('Select Page to display hero section', 'noorlite'),
		'section' => 'noorlite_slider_section',
	));

	//	OUR Features
	$wp_customize->add_section('noorlite_feature_section',array(
		'title'	=> __('Our Features','noorlite'),
		'description'=> __('You have to select page template "Custom Home" to show this section from page.','noorlite'),
		'panel' => 'noorlite_panel_id',
	));
	$wp_customize->add_setting('noorlite_feature_arrows',array(
       'default' => 'false',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('noorlite_feature_arrows',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide feature','noorlite'),
       'section' => 'noorlite_feature_section',
    ));
	$wp_customize->add_setting('noorlite_features_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('noorlite_features_title',array(
		'label'	=> __('Section Title','noorlite'),
		'section'	=> 'noorlite_feature_section',
		'setting'	=> 'noorlite_features_title',
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

	$wp_customize->add_setting('noorlite_features_cat',array(
		'default'	=> 'select',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('noorlite_features_cat',array(
		'type'    => 'select',
		'choices' => $cat_pst,
		'label' => __('Select Category to display Features', 'noorlite'),
		'section' => 'noorlite_feature_section',
	));

    //Footer
    $wp_customize->add_section( 'noorlite_footer', array(
        'title'      => __( 'Footer Text', 'noorlite' ),
        'priority'   => null,
        'panel' => 'noorlite_panel_id'
    ) );

    $wp_customize->add_setting('noorlite_footer_copy',array(
        'default'    => '',
        'sanitize_callback'    => 'sanitize_text_field'
    ));    
    $wp_customize->add_control('noorlite_footer_copy',array(
        'label'    => __('Footer Text','noorlite'),
        'section'    => 'noorlite_footer',
        'setting'    => 'noorlite_footer_copy',
        'type'        => 'text'
    ));

    $wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

    $wp_customize->selective_refresh->add_partial( 'blogname', array(
        'selector' => '.site-title a',
        'render_callback' => 'noorlite_customize_partial_blogname',
    ) );
    $wp_customize->selective_refresh->add_partial( 'blogdescription', array(
        'selector' => '.site-description',
        'render_callback' => 'noorlite_customize_partial_blogdescription',
    ) );

    //front page
    $num_sections = apply_filters( 'noorlite_front_page_sections', 4 );

    // Create a setting and control for each of the sections available in the theme.
    for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
        $wp_customize->add_setting( 'panel_' . $i, array(
            'default'           => false,
            'sanitize_callback' => 'noorlite_sanitize_dropdown_pages',
            'transport'         => 'postMessage',
        ) );

        $wp_customize->add_control( 'panel_' . $i, array(
            /* translators: %d is the front page section number */
            'label'          => sprintf( __( 'Front Page Section %d Content', 'noorlite' ), $i ),
            'description'    => ( 1 !== $i ? '' : __( 'Select pages to feature in each area from the dropdowns. Add an image to a section by setting a featured image in the page editor. Empty sections will not be displayed.', 'noorlite' ) ),
            'section'        => 'theme_options',
            'type'           => 'dropdown-pages',
            'allow_addition' => true,
            'active_callback' => 'noorlite_is_static_front_page',
        ) );

        $wp_customize->selective_refresh->add_partial( 'panel_' . $i, array(
            'selector'            => '#panel' . $i,
            'render_callback'     => 'noorlite_front_page_section',
            'container_inclusive' => true,
        ) );
    }
}
add_action( 'customize_register', 'noorlite_customize_register' );

function noorlite_customize_partial_blogname() {
    bloginfo( 'name' );
}

function noorlite_customize_partial_blogdescription() {
    bloginfo( 'description' );
}

function noorlite_is_static_front_page() {
    return ( is_front_page() && ! is_home() );
}

function noorlite_is_view_with_layout_option() {
    // This option is available on all pages. It's also available on archives when there isn't a sidebar.
    return ( is_page() || ( is_archive() && ! is_active_sidebar( 'sidebar-1' ) ) );
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Noor_Customize {

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
        $manager->register_section_type( 'Noor_Customize_Section_Pro' );

        // Register sections.
        $manager->add_section(
            new Noor_Customize_Section_Pro(
                $manager,
                'example_1',
                array(
                    'priority' => 9,
                    'title'    => esc_html__( 'Noor Pro ', 'noorlite' ),
                    'pro_text' => esc_html__( 'Go Pro','noorlite' ),
                    'pro_url'  => esc_url( 'https://codenpy.com/item/noor-responsive-multi-purpose-wordpress-theme/' ),
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

        wp_enqueue_script( 'noor-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

        wp_enqueue_style( 'noor-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
    }
}

// Doing this customizer thang!
Noor_Customize::get_instance();