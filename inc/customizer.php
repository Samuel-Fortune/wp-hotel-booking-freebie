<?php
/**
 * Hotel booking freebie Theme Customizer
 *
 * @package Hotel_booking_freebie
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function hotel_booking_freebie_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'hotel_booking_freebie_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'hotel_booking_freebie_customize_partial_blogdescription',
			)
		);
	}
	/**
	 * Add our Footer & Navigation Panel
	 */
	$wp_customize->add_panel( 'footer_navigation_panel',
		array(
			'title' => __( 'Footer & Navigation' ),
			'description' => esc_html__( 'Adjust your Header and Navigation sections.' ), // Include html tags such as 

			'priority' => 50, // Not typically needed. Default is 160
			'capability' => 'edit_theme_options', // Not typically needed. Default is edit_theme_options
			'theme_supports' => '', // Rarely needed
			'active_callback' => '', // Rarely needed
		)
	);
	
	/**
	 * Add our Footer & Navigation Section
	 */
	$wp_customize->add_section( 'footer_navigation_section',
		array(
			'title' => __( 'Footer Section' ),
			'description' => esc_html__( 'Adjust your Header and Navigation sections.' ), // Include html tags such as 
			'panel' => 'footer_navigation_panel', 
		)
	);

	/**
	 * Add our Footer & Navigation Settings
	 */
	$wp_customize->add_setting( 'footer_contact_details_form');

	/**
	 * Add our Footer & Navigation Section
	 */
		
	$wp_customize->add_control( 'footer_contact_details_form',
		array(
		'label' => __( 'Footer Contact Details Form' ),
		'description' => esc_html__( 'Enter Contact Details Formthat shows in footer' ),
		'section' => 'footer_navigation_section',
		'type' => 'textarea', 
		'input_attrs' => array( // Optional.
			'class' => 'address-field',
			'style' => 'border: 1px solid purple',
			'placeholder' => __( 'Enter name...' ),
			),
		)
	);

	/**
	 * Add our Footer & Navigation Settings
	 */
	$wp_customize->add_setting( 'footer_address_text');

	/**
	 * Add our Footer & Navigation Section
	 */
	$wp_customize->add_control( 'footer_address_text',
		array(
		'label' => __( 'Footer Address Text' ),
		'description' => esc_html__( 'Enter Address that shows in footer' ),
		'section' => 'footer_navigation_section',
		'type' => 'textarea', 
		'input_attrs' => array( // Optional.
			'class' => 'address-field',
			'style' => 'border: 1px solid purple',
			'placeholder' => __( 'Enter name...' ),
			),
		)
	);

	/**
	 * Add our Footer & Navigation Settings
	 */
	$wp_customize->add_setting( 'footer_business_hours');

	/**
	 * Add our Footer & Navigation Section
	 */
	$wp_customize->add_control( 'footer_business_hours',
		array(
		'label' => __( 'Footer Business Hours' ),
		'description' => esc_html__( 'Enter Business Hours thatshows in footer' ),
		'section' => 'footer_navigation_section',
		'type' => 'textarea', 
		'input_attrs' => array( // Optional.
			'class' => 'address-field',
			'style' => 'border: 1px solid purple',
			'placeholder' => __( 'Enter name...' ),
			),
		)
	);

	/**
	 * Add our Footer & Navigation Settings
	 */
	$wp_customize->add_setting( 'footer_email');

	/**
	 * Add our Footer & Navigation Section
	 */
	$wp_customize->add_control( 'footer_email',
		array(
		'label' => __( 'Footer Email' ),
		'description' => esc_html__( 'Enter Email that shows infooter' ),
		'section' => 'footer_navigation_section',
		'type' => 'textarea', 
		'input_attrs' => array( // Optional.
			'class' => 'address-field',
			'style' => 'border: 1px solid purple',
			'placeholder' => __( 'Enter name...' ),
			),
		)
	);

	/**
		 * Add our Footer & Navigation Settings
		 */
		$wp_customize->add_setting( 'footer_image',
		array(
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'esc_url_raw'
	 )
	);

	/**
	 * Add our Footer & Navigation Section
	 */
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_image',
		array(
		'label' => __( ' ' ),
		'description' => esc_html__( 'This is the description for the Image Control' ),
		'section' => 'footer_navigation_section',
		'button_labels' => array( 
			'select' => __( 'Select Image' ),
			'change' => __( 'Change Image' ),
			'remove' => __( 'Remove' ),
			'default' => __( 'Default' ),
			'placeholder' => __( '' ),
			'frame_title' => __( 'Select Image' ),
			'frame_button' => __( 'Choose Image' ),
		)
		)
	) );
}

add_action( 'customize_register', 'hotel_booking_freebie_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function hotel_booking_freebie_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function hotel_booking_freebie_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function hotel_booking_freebie_customize_preview_js() {
	wp_enqueue_script( 'hotel-booking-freebie-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'hotel_booking_freebie_customize_preview_js' );
