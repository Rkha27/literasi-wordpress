<?php
/**
 * Sima Architecture Interior Theme Customizer
 *
 * @package Sima_Architecture_Interior
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function sima_architecture_interior_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'sima_architecture_interior_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'sima_architecture_interior_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'sima_architecture_interior_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function sima_architecture_interior_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function sima_architecture_interior_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function sima_architecture_interior_customize_preview_js() {
	wp_enqueue_script( 'sima-architecture-interior-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), SIMA_ARCHITECTURE_INTERIOR_VERSION, true );
}
require get_template_directory() . '/inc/simaarchitectureinterior_recommended_plugin.php';
add_action( 'customize_preview_init', 'sima_architecture_interior_customize_preview_js' );

/**
 * PRO PAGE
 */

 require get_template_directory() . '/inc/go-pro/class-customize.php';

 /*-----------------------------------------------------------------------------------*/
/*	Theme Info 
/*-----------------------------------------------------------------------------------*/
function sima_architecture_interior_themeinfo_settings( $wp_customize ) {
	$wp_customize->add_section( 'theme_info', array(
		'title'       => __( 'Demo & Documentation', 'sima-architecture-interior' ),
		'priority'    => 6,
	) );
	
	/** Important Links */
	$wp_customize->add_setting( 'theme_info_theme',
		array(
			'default' => '',
			'sanitize_callback' => 'wp_kses_post',
		)
	);

	$theme_info = '';
	$theme_info .= sprintf( '<p>' . __( 'Pro Demo Link: %1$sClick here.%2$s', 'sima-architecture-interior' ) . '</p>', '<a href="' . esc_url( 'https://pixelonetry.com/previews/?theme=sima' ) . '" target="_blank">', '</a>' );
	$theme_info .= sprintf( '<p>' . __( 'Documentation: %1$sClick here.%2$s', 'sima-architecture-interior' ) . '</p>', '<a href="' . esc_url( 'https://pixelonetry.com/docs/spirallite/' ) . '" target="_blank">', '</a>' );
	$theme_info .= sprintf( '<p>' . __( 'Video Tutorial: %1$sClick here.%2$s', 'sima-architecture-interior' ) . '</p>', '<a href="' . esc_url( 'https://www.youtube.com/watch?v=NVbuDPmXuaU' ) . '" target="_blank">', '</a>' );
	$theme_info .= sprintf( '<p>' . __( 'Rate The Theme: %1$sClick here.%2$s', 'sima-architecture-interior' ) . '</p>', '<a href="' . esc_url( 'https://wordpress.org/support/theme/sima-architecture-interior/reviews/#new-post' ) . '" target="_blank">', '</a>' );
	$theme_info .= sprintf( '<p>' . __( 'Submit Ticket: %1$sClick here.%2$s', 'sima-architecture-interior' ) . '</p>', '<a href="' . esc_url( 'https://support.pixelonetry.com/' ) . '" target="_blank">', '</a>' );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize,
		'theme_info_theme',
		array(
			'section'     => 'theme_info',
			'description' => $theme_info,
			'type'        => 'hidden', // Optional, can hide the control input
		)
	)); 
}
add_action( 'customize_register', 'sima_architecture_interior_themeinfo_settings' );

/*-----------------------------------------------------------------------------------*/
/*	Common 
/*-----------------------------------------------------------------------------------*/
function sima_architecture_interior_my_register_additional_customizer_settings( $wp_customize ) {
	
/*
|--------------------------------------------------------------------------
| Sticky Logo Setting
|--------------------------------------------------------------------------
*/

	$wp_customize->add_setting('sticky_logo', array(
		'default'           => get_template_directory_uri() . '/images/sticky-logo.png',
		'sanitize_callback' => 'esc_url_raw',
	));

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'sticky_logo',
			array(
				'label'       => __('Sticky Logo', 'sima-architecture-interior'),
				'description' => __('Upload logo for sticky header.', 'sima-architecture-interior'),
				'section'     => 'title_tagline',
				'settings'    => 'sticky_logo',
			)
		)
	);

	$wp_customize->add_section(
		'sima_blog_setting', 
		array(
			'title' => esc_html__( 'Blog Settings', 'sima-architecture-interior' ),
			'priority' => 30,
		)
	);
	
		/** Blog Head Title */
		$wp_customize->add_setting(
			'sima_blog_heading_title',
			array(
				'default' => 'News <span>&</span> Blog',
				'sanitize_callback' => 'wp_kses_post',
			)
		);

		$wp_customize->add_control(
			'sima_blog_heading_title',
			array(
				'label' => __( 'Blog Head Title', 'sima-architecture-interior' ),
				'section' => 'sima_blog_setting',
				'type' => 'text',
			)
		);
		
	/** Blog Head Subtitle */
	$wp_customize->add_setting(
		'sima_blog_heading_subtitle',
		array(
			'default' => __( 'Currient Reading', 'sima-architecture-interior' ),
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	
	$wp_customize->add_control(
		'sima_blog_heading_subtitle',
		array(
			'label' => __( 'Blog Head Subtitle', 'sima-architecture-interior' ),
			'section' => 'sima_blog_setting', // Corrected 'panel' to 'section'
			'type' => 'text',
		)
	);
	
 }
 add_action( 'customize_register', 'sima_architecture_interior_my_register_additional_customizer_settings' );

 function sima_architecture_interior_footer_customizer_settings( $wp_customize ) {

 /**  
 *  Section Footer
 */
$wp_customize->add_panel(
	'footer_sections', array(
		'priority' => 40,
		'title' => esc_html__( 'Footer', 'sima-architecture-interior' ),
	)
);

$wp_customize->add_section(
	'sima_footer_content_section',
	array(
		'title' => __( 'Footer Content', 'sima-architecture-interior' ),
		'description' => __( 'Footer Content ', 'sima-architecture-interior' ),
		'panel' => 'footer_sections',
		'priority' => 40,
	)
);

  // Add the setting for the image
    $wp_customize->add_setting( 'footer_logo_img', array(
        'default'           => get_template_directory_uri() . '/images/logo.png',  // Default image URL
        'sanitize_callback' => 'esc_url_raw', 
    ) );

    // Add the image control
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_logo_img', array(
        'label'    => 'Footer Logo Image',
        'section'  => 'sima_footer_content_section', 
        'settings' => 'footer_logo_img', 
    ) ) );

// Add the setting for the image
    $wp_customize->add_setting( 'footer_bg_img', array(
       // 'default' => '', 
	    'default'           => get_template_directory_uri() . '/images/footer-bg.jpg',  // Default image URL
        'sanitize_callback' => 'esc_url_raw', 
    ) );

    // Add the image control
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_bg_img', array(
        'label'    => 'Footer Background Image',
        'section'  => 'sima_footer_content_section', 
        'settings' => 'footer_bg_img', 
    ) ) );

   $wp_customize->add_setting(
	'sima_footer_content_section_footer_descreption',
	array(
		'default'=> 'Architecture-Studio is founded on the principle of collective creativity. Since its establishment, the firm has championed open dialogue, the exchange of ideas, teamwork, shared knowledge, and a unified passion for design.',
		'sanitize_callback' => 'wp_kses_post',
		
	)
  );

  $wp_customize->add_control(
	'sima_footer_content_section_footer_descreption',
	array(
		'label' => __( 'Footer Descreption', 'sima-architecture-interior' ),
		'section' => 'sima_footer_content_section',
		'type' => 'textarea',
	)
 );

 $wp_customize->add_setting(
	'sima_footer_content_section_footer_title',
	array(
		'default'=> 'GET IN TOUCH',
		'sanitize_callback' => 'wp_kses_post',
		
	)
);

$wp_customize->add_control(
	'sima_footer_content_section_footer_title',
	array(
		'label' => __( 'Footer Title', 'sima-architecture-interior' ),
		'section' => 'sima_footer_content_section',
		'type' => 'text',
	)
);


$wp_customize->add_setting(
    'sima_footer_content_section_footer_address',
    array(
        'default'=> 'address: Beverly Hills, Los Angeles CA, USA',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'sima_footer_content_section_footer_address',
    array(
        'label' => __( 'Address', 'sima-architecture-interior' ),
        'section' => 'sima_footer_content_section',
        'type' => 'text',
    )
);

$wp_customize->add_setting(
    'sima_footer_content_section_footer_phone',
    array(
        'default'=> 'phone: +(123) 456 789',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'sima_footer_content_section_footer_phone',
    array(
        'label' => __( 'Phone', 'sima-architecture-interior' ),
        'section' => 'sima_footer_content_section',
        'type' => 'text',
    )
);

$wp_customize->add_setting(
    'sima_footer_content_section_footer_email',
    array(
        'default'=> 'email: info@example.com',
        'sanitize_callback' => 'sanitize_email',
    )
);

$wp_customize->add_control(
    'sima_footer_content_section_footer_email',
    array(
        'label' => __( 'Email', 'sima-architecture-interior' ),
        'section' => 'sima_footer_content_section',
        'type' => 'email',
    )
);

$wp_customize->add_section(
	'sima_footer',
	array(
		'title' => __( 'Footer Copyright', 'sima-architecture-interior' ),
		'description' => __( 'Footer Settings ', 'sima-architecture-interior' ),
		'panel' => 'footer_sections',
		'priority' => 40,
	)
);
 $wp_customize->add_setting(
	'sima_copyright',
	array(
		'default' => sprintf(__('© Copyright 2025. <span>%s</span> All Rights Reserved.', 'sima-architecture-interior'), get_bloginfo('name')),
		'sanitize_callback' => 'wp_kses_post',
	)
);

$wp_customize->add_control(
	'sima_copyright',
	array(
		'label' => __( 'Copyright', 'sima-architecture-interior' ),
		'section' => 'sima_footer',
		'type' => 'textarea',
	)
);
}
add_action( 'customize_register', 'sima_architecture_interior_footer_customizer_settings' );

function sima_architecture_interior_social_customizer_settings( $wp_customize ) {

/*-----------------------------------------------------------------------------------*/
/*	Social Setting
/*-----------------------------------------------------------------------------------*/

$wp_customize->add_section(
	'sima_social_settings',
	array(
		'title' => __( 'Social Settings', 'sima-architecture-interior' ),
		'description' => __( 'Leave blank if you do not want to show the social link.', 'sima-architecture-interior' ),
		'priority' => 40,
	)
);

/** Facebook */
$wp_customize->add_setting(
	'sima_facebook',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);

$wp_customize->add_control(
	'sima_facebook',
	array(
		'label' => __( 'Facebook', 'sima-architecture-interior' ),
		'section' => 'sima_social_settings',
		'type' => 'text',
	)
);

/** Twitter */
$wp_customize->add_setting(
	'sima_twitter',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);

$wp_customize->add_control(
	'sima_twitter',
	array(
		'label' => __( 'Twitter', 'sima-architecture-interior' ),
		'section' => 'sima_social_settings',
		'type' => 'text',
	)
);

/** Pinterest */
$wp_customize->add_setting(
	'sima_pinterest',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);

$wp_customize->add_control(
	'sima_pinterest',
	array(
		'label' => __( 'Pinterest', 'sima-architecture-interior' ),
		'section' => 'sima_social_settings',
		'type' => 'text',
	)
);

/** LinkedIn */
$wp_customize->add_setting(
	'sima_linkedin',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);

$wp_customize->add_control(
	'sima_linkedin',
	array(
		'label' => __( 'LinkedIn', 'sima-architecture-interior' ),
		'section' => 'sima_social_settings',
		'type' => 'text',
	)
);

/** Instagram Plus */
$wp_customize->add_setting(
	'sima_instagram',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);

$wp_customize->add_control(
	'sima_instagram',
	array(
		'label' => __( 'Instagram', 'sima-architecture-interior' ),
		'section' => 'sima_social_settings',
		'type' => 'text',
	)
);

/** Youtube Plus */
$wp_customize->add_setting(
	'sima_youtube',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);

$wp_customize->add_control(
	'sima_youtube',
	array(
		'label' => __( 'YouTube', 'sima-architecture-interior' ),
		'section' => 'sima_social_settings',
		'type' => 'text',
	)
);

/** Tiktok */
$wp_customize->add_setting(
	'sima_tiktok',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);

$wp_customize->add_control(
	'sima_tiktok',
	array(
		'label' => __( 'Tiktok', 'sima-architecture-interior' ),
		'section' => 'sima_social_settings',
		'type' => 'text',
	)
);


}
add_action( 'customize_register', 'sima_architecture_interior_social_customizer_settings' );
