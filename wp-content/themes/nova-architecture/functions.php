
<?php
/**
 * Nova Architecture child theme functions.
 */

function nova_architecture_enqueue_styles() {

    // 1. Parent theme CSS.
    wp_enqueue_style(
        'main-style',
        get_template_directory_uri() . '/style.css',
        array(),
        wp_get_theme( get_template() )->get( 'Version' )
    );

    // 2. Child theme /style.css.
    wp_enqueue_style(
        'nova-architecture-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'main-style' ),
        wp_get_theme()->get( 'Version' )
    );

    // 3. Child theme /css/style-2.css.
    wp_enqueue_style(
        'nova-architecture-style-2',
        get_stylesheet_directory_uri() . '/css/style-2.css',
        array( 'nova-architecture-style' ),
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'nova_architecture_enqueue_styles', 999 );

/**
 * Override sticky logo default with child theme logo.
 */
function nova_architecture_override_sticky_logo( $wp_customize ) {

    $wp_customize->get_setting( 'sticky_logo' )->default =
        get_stylesheet_directory_uri() . '/images/logo.png';

}
add_action( 'customize_register', 'nova_architecture_override_sticky_logo', 999 );

function nova_architecture_register_sidebars() {

    register_sidebar( array(
        'name'          => esc_html__( 'Main Sidebar', 'nova-architecture' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Main widget area', 'nova-architecture' ),
       'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

}

add_action( 'widgets_init', 'nova_architecture_register_sidebars' );

function sima_remove_parent_admin_notice() {
    remove_action(
        'admin_notices',
        'sima_architecture_interior_admin_notice'
    );
}
add_action('admin_init', 'sima_remove_parent_admin_notice');
