<?php


/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * @since 1.0.0
 *
 * @return void
 */
function osteo_care_setup() {
	add_theme_support( 'editor-styles' );
	add_editor_style( 'assets/css/index.css' );
	add_editor_style( 'style.css' );

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 80,
			'width'       => 160,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	add_theme_support(
		'starter-content',
		array(
			'options' => array(
				'show_on_front' => 'page',
				'page_on_front' => '{{home}}',
			),
			'posts'   => array(
				'home' => array(
					'post_type'  => 'page',
					'post_title' => _x( 'Home', 'Theme starter content', 'osteo-care' ),
					'template'   => 'front-page',
				),
			),
		)
	);
}
add_action( 'after_setup_theme', 'osteo_care_setup' );

/**
 * Fallback to theme logo if no custom logo is uploaded yet.
 *
 * @param string $block_content The block content.
 * @param array  $block         The block attributes and name.
 * @return string Modified block content.
 */
function osteo_care_site_logo_fallback( $block_content, $block ) {
	if ( isset( $block['blockName'] ) && 'core/site-logo' === $block['blockName'] ) {
		$custom_logo_id = get_theme_mod( 'custom_logo' );
		if ( empty( $custom_logo_id ) || empty( trim( $block_content ) ) ) {
			$logo_url     = get_parent_theme_file_uri( 'assets/images/2026/03/logo.png' );
			$aria_current = ( is_front_page() && ! is_paged() ) ? ' aria-current="page"' : '';
			$site_name    = esc_attr( get_bloginfo( 'name', 'display' ) );
			$home_url     = esc_url( home_url( '/' ) );
			$width        = ! empty( $block['attrs']['width'] ) ? (int) $block['attrs']['width'] : 150;

			return sprintf(
				'<div class="wp-block-site-logo"><a href="%1$s" class="custom-logo-link" rel="home"%2$s><img width="%3$d" height="34" src="%4$s" class="custom-logo" alt="%5$s" style="width:%3$dpx;height:auto;" /></a></div>',
				$home_url,
				$aria_current,
				$width,
				esc_url( $logo_url ),
				$site_name
			);
		}
	}
	return $block_content;
}
add_filter( 'render_block', 'osteo_care_site_logo_fallback', 10, 2 );

/**
 * Filter get_custom_logo to return default theme logo if none is set.
 *
 * @param string $html Custom logo HTML markup.
 * @return string
 */
function osteo_care_default_custom_logo_html( $html ) {
	if ( empty( $html ) && ! get_theme_mod( 'custom_logo' ) ) {
		$logo_url     = get_parent_theme_file_uri( 'assets/images/2026/03/logo.png' );
		$aria_current = ( is_front_page() && ! is_paged() ) ? ' aria-current="page"' : '';
		$site_name    = esc_attr( get_bloginfo( 'name', 'display' ) );
		$home_url     = esc_url( home_url( '/' ) );

		return sprintf(
			'<a href="%1$s" class="custom-logo-link" rel="home"%2$s><img width="145" height="34" src="%3$s" class="custom-logo" alt="%4$s" style="width:150px;height:auto;" /></a>',
			$home_url,
			$aria_current,
			esc_url( $logo_url ),
			$site_name
		);
	}
	return $html;
}
add_filter( 'get_custom_logo', 'osteo_care_default_custom_logo_html' );

/**
 * Filter get_site_icon_url to return theme default site icon if none is set.
 *
 * @param string $url  Site icon URL.
 * @param int    $size Size of the icon.
 * @return string
 */
function osteo_care_default_site_icon_url( $url, $size ) {
	if ( empty( $url ) && ! get_option( 'site_icon' ) ) {
		return get_parent_theme_file_uri( 'assets/images/2026/03/stethoscope.svg' );
	}
	return $url;
}
add_filter( 'get_site_icon_url', 'osteo_care_default_site_icon_url', 10, 2 );



function osteo_care_block_init() {
	register_block_style(
		'core/button',
		array(
			'name'  => 'inverted',
			'label' => esc_html__( 'Inverted', 'osteo-care' ),
		)
	);

	register_block_style(
		'core/list',
		array(
			'name'  => 'check-list',
			'label' => esc_html__( 'Check List', 'osteo-care' ),
		)
	);
	
	register_block_pattern_category(
		'osteo-care',
		array( 'label' => esc_html__( 'Osteo Care', 'osteo-care' ) )
	);
}
add_action( 'init', 'osteo_care_block_init' );

