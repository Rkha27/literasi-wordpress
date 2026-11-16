<?php
/**
 * Callback for Social Links  
 */
function sima_social_cb() {
    $facebook  = get_theme_mod('sima_facebook' );
    $twitter   = get_theme_mod('sima_twitter' );
    $pinterest = get_theme_mod('sima_pinterest' );
    $linkedin   = get_theme_mod( 'sima_linkedin' );
    $instagram = get_theme_mod('sima_instagram' );
    $youtube     = get_theme_mod( 'sima_youtube' );
    $tiktok      = get_theme_mod( 'sima_tiktok' );

    if ( $facebook || $twitter || $pinterest || $linkedin || $instagram || $youtube || $tiktok ) { ?>
        <div class="social mt-2">
            <?php 
                if ( $facebook ) echo '<a class="facebook" href="' . esc_url( $facebook ) . '" target="_blank" title="' . esc_attr__( 'Facebook', 'sima-architecture-interior' ) . '"><i class="ti-facebook"></i></a>';
                if ( $twitter ) echo '<a class="twitter" href="' . esc_url( $twitter ) . '" target="_blank" title="' . esc_attr__( 'Twitter', 'sima-architecture-interior' ) . '"><i class="ti-twitter"></i></a>'; 
                if ( $pinterest ) echo '<a class="pinterest" href="' . esc_url( $pinterest ) . '" target="_blank" title="' . esc_attr__( 'Pinterest', 'sima-architecture-interior' ) . '"><i class="ti-pinterest"></i></a>';
                if ( $linkedin ) echo '<a class="linkedin" href="' . esc_url( $linkedin ) . '" target="_blank" title="' . esc_attr__( 'LinkedIn', 'sima-architecture-interior' ) . '"><i class="ti-linkedin"></i></a>';
                if ( $instagram ) echo '<a class="instagram" href="' . esc_url( $instagram ) . '" target="_blank" title="' . esc_attr__( 'Instagram', 'sima-architecture-interior' ) . '"><i class="ti-instagram"></i></a>';
                if ( $youtube ) echo '<a class="youtube" href="' . esc_url( $youtube ) . '" target="_blank" title="' . esc_attr__( 'YouTube', 'sima-architecture-interior' ) . '"><i class="ti-youtube"></i></a>';
                if ( $tiktok ) echo '<a class="tiktok" href="' . esc_url( $tiktok ) . '" target="_blank" title="' . esc_attr__( 'TikTok', 'sima-architecture-interior' ) . '"><i class="ti-tiktok"></i></a>';
            ?>
        </div>
    <?php }
}
add_action( 'sima_social', 'sima_social_cb' );
?>

<?php

function sima_header_social_cb() {
    $facebook    = get_theme_mod( 'sima_facebook' );
    $twitter     = get_theme_mod( 'sima_twitter' );
    $pinterest   = get_theme_mod( 'sima_pinterest' );
    $linkedin    = get_theme_mod( 'sima_linkedin' );
    $instagram   = get_theme_mod( 'sima_instagram' );
    $youtube     = get_theme_mod( 'sima_youtube' );
    $tiktok      = get_theme_mod( 'sima_tiktok' );

    if ( $facebook || $twitter || $pinterest || $linkedin || $instagram || $youtube || $tiktok ) { ?>
      <ul class="social-bx list-inline pull-right">
            <?php 
                if ( $facebook ) echo '<li><a class="ti-facebook" href="' . esc_url( $facebook ) . '" target="_blank" title="' . esc_attr__( 'Facebook', 'sima-architecture-interior' ) . '"></a></li>';
                if ( $twitter ) echo '<li><a class="ti-twitter" href="' . esc_url( $twitter ) . '" target="_blank" title="' . esc_attr__( 'Twitter', 'sima-architecture-interior' ) . '"></a></li>'; 
                if ( $pinterest ) echo '<li><a class="ti-pinterest" href="' . esc_url( $pinterest ) . '" target="_blank" title="' . esc_attr__( 'Pinterest', 'sima-architecture-interior' ) . '"></a></li>';
                if ( $linkedin ) echo '<li><a class="ti-linkedin" href="' . esc_url( $linkedin ) . '" target="_blank" title="' . esc_attr__( 'LinkedIn', 'sima-architecture-interior' ) . '"></a></li>';
                if ( $instagram ) echo '<li><a class="ti-instagram" href="' . esc_url( $instagram ) . '" target="_blank" title="' . esc_attr__( 'Instagram', 'sima-architecture-interior' ) . '"></a></li>';
                if ( $youtube ) echo '<li><a class="ti-youtube" href="' . esc_url( $youtube ) . '" target="_blank" title="' . esc_attr__( 'YouTube', 'sima-architecture-interior' ) . '"></a></li>';
                if ( $tiktok ) echo '<li><a class="fa fa-tiktok" href="' . esc_url( $tiktok ) . '" target="_blank" title="' . esc_attr__( 'TikTok', 'sima-architecture-interior' ) . '"></a></li>';
            ?>
        </ul>
    <?php }
}
add_action( 'sima_header_social', 'sima_header_social_cb' );

/*******************************************************************************/
/*  Get Started Notice                                                         */
/*******************************************************************************/
add_action( 'wp_ajax_sima_architecture_interior_dismissed_notice_handler', 'sima_architecture_interior_ajax_notice_handler' );

 /**
  * AJAX handler to store the state of dismissible notices.
  */
 function sima_architecture_interior_ajax_notice_handler() {
     if ( isset( $_POST['type'] ) ) {
         // Pick up the notice "type" - passed via jQuery (the "data-notice" attribute on the notice)
         $type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
         // Store it in the options table
         update_option( 'dismissed-' . $type, TRUE );
     }
 }
 
 function sima_architecture_interior_deprecated_hook_admin_notice() {
         // Check if it's been dismissed...
         if ( ! get_option('dismissed-get_started', FALSE ) ) {
             // Added the class "notice-get-started-class" so jQuery pick it up and pass via AJAX,
             // and added "data-notice" attribute in order to track multiple / different notices
             // multiple dismissible notice states ?>
             <div class="updated notice notice-get-started-class is-dismissible" data-notice="get_started">
                 <div class="sima-architecture-interior-getting-started-notice clearfix">
                     <div class="sima-architecture-interior-theme-screenshot">
                         <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/screenshot.png" class="screenshot" alt="<?php esc_attr_e( 'Theme Screenshot', 'sima-architecture-interior' ); ?>" />
                     </div><!-- /.sima-architecture-interior-theme-screenshot -->
                     <div class="sima-architecture-interior-theme-notice-content">
                         <h2 class="sima-architecture-interior-notice-h2">
                             <?php
                         printf(
                         /* translators: 1: welcome page link starting html tag, 2: welcome page link ending html tag. */
                             esc_html__( 'Welcome! Thank you for choosing %1$s!', 'sima-architecture-interior' ), '<strong>'. wp_get_theme()->get('Name'). '</strong>' );
                         ?>
                         </h2>
 
                         <p class="plugin-install-notice"><?php echo sprintf(__('Install and activate <strong>Pixelonetry Companion</strong> plugin for taking full advantage of all the features this theme has to offer.', 'sima-architecture-interior')) ?></p>
 
                         <a class="sima-architecture-interior-btn-get-started button button-primary button-hero sima-architecture-interior-button-padding" href="#" data-name="" data-slug=""><?php esc_html_e( 'Get started with Sima', 'sima-architecture-interior' ) ?></a><span class="sima-architecture-interior-push-down">
                         <?php
                             /* translators: %1$s: Anchor link start %2$s: Anchor link end */
                             printf(
                                 'or %1$sCustomize theme%2$s</a></span>',
                                 '<a target="_blank" href="' . esc_url( admin_url( 'customize.php' ) ) . '">',
                                 '</a>'
                             );
                         ?>
                     </div><!-- /.sima-architecture-interior-theme-notice-content -->
                 </div>
             </div>
         <?php }
 }
 
 add_action( 'admin_notices', 'sima_architecture_interior_deprecated_hook_admin_notice' );

/*******************************************************************************/
/*  Plugin Installer                                                           */
/*******************************************************************************/
add_action( 'wp_ajax_install_act_plugin', 'sima_architecture_interior_admin_install_plugin' );

function sima_architecture_interior_admin_install_plugin() {

    include_once ABSPATH . 'wp-admin/includes/file.php';
    include_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
    include_once ABSPATH . 'wp-admin/includes/plugin-install.php';

    $plugins = array(
        array(
            'slug' => 'pixelonetry-companion',
            'file' => 'pixelonetry-companion/pixelonetry-companion.php',
        ),
        array(
            'slug' => 'pelightbox-gallery-slider',
            'file' => 'pelightbox-gallery-slider/pelightbox-gallery-slider.php',
        ),
    );

    foreach ( $plugins as $plugin ) {

        if ( ! file_exists( WP_PLUGIN_DIR . '/' . $plugin['file'] ) ) {

            $api = plugins_api( 'plugin_information', array(
                'slug'   => sanitize_key( $plugin['slug'] ),
                'fields' => array(
                    'sections' => false,
                ),
            ) );

            if ( is_wp_error( $api ) || empty( $api->download_link ) ) {
                continue;
            }

            $skin     = new WP_Ajax_Upgrader_Skin();
            $upgrader = new Plugin_Upgrader( $skin );
            $result   = $upgrader->install( $api->download_link );

            if ( is_wp_error( $result ) || ! $result ) {
                continue;
            }
        }

        if ( current_user_can( 'activate_plugins' ) ) {
            activate_plugin( $plugin['file'] );
        }
    }
}
?>