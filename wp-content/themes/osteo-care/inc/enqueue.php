<?php

/**
 * Enqueue the CSS and JS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function osteo_care_styles() {
	wp_enqueue_style(
		'osteo-care-style',
		get_stylesheet_uri(),
		[],
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_script(
		'osteo-care-menu',
		get_template_directory_uri() . '/assets/js/menu.js',
		[ 'jquery' ],
		wp_get_theme()->get( 'Version' ),
		true
	);

	wp_enqueue_style(
		'osteo-care-theme-style',
		get_template_directory_uri() . '/assets/css/index.css',
		[],
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'osteo_care_styles' );



/**
 * Enqueue editor assets.
 */
function osteo_care_editor_assets() {
	wp_enqueue_script(
		'osteo-care-editor',
		get_template_directory_uri() . '/assets/js/editor.js',
		array( 'wp-rich-text', 'wp-block-editor', 'wp-components', 'wp-i18n', 'wp-element' ),
		wp_get_theme()->get( 'Version' ),
		true
	);

	wp_set_script_translations( 'osteo-care-editor', 'osteo-care' );
}
add_action( 'enqueue_block_editor_assets', 'osteo_care_editor_assets' );

