<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sima_Architecture_Interior
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'sima-architecture-interior' ); ?></a>

      <div class="content-wrapper">

       <!-- Progress scroll totop -->
            <div class="progress-wrap cursor-pointer">
                <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
                </svg>
            </div>  

            <!-- Lines -->
            <div class="content-lines-wrapper">
                <div class="content-lines-inner">
                    <div class="content-lines"></div>
                </div>
            </div>

        <!-- Navbar -->
        <nav id="site-navigation" class="navbar navbar-expand-md" >
            <div class="container">
               

            <!-- Logo -->
<div class="logo-wrapper">

<?php
// Default Logo (WordPress Custom Logo)
$default_logo_id  = get_theme_mod('custom_logo');
$default_logo_url = wp_get_attachment_image_url($default_logo_id, 'full');

// Sticky Logo
$sticky_logo_url  = get_theme_mod('sticky_logo');

// === Fallback Logic ===
if (empty($sticky_logo_url)) {
    $sticky_logo_url = get_template_directory_uri() . '/images/sticky-logo.png';
}

// Final fallback: If sticky logo is still empty or same as default, use default logo
if (empty($sticky_logo_url) && !empty($default_logo_url)) {
    $sticky_logo_url = $default_logo_url;
}
?>

<?php if ($default_logo_url) : ?>

    <!-- Default / Normal Logo -->
    <a class="logo logo-default" href="<?php echo esc_url(home_url('/')); ?>">
        <img 
            src="<?php echo esc_url($default_logo_url); ?>" 
            class="logo-img"
            alt="<?php echo esc_attr(get_bloginfo('name')); ?>"
        >
    </a>

    <!-- Sticky Logo -->
    <a class="logo logo-sticky" href="<?php echo esc_url(home_url('/')); ?>">
        <img 
            src="<?php echo esc_url($sticky_logo_url); ?>" 
            class="logo-img"
            alt="<?php echo esc_attr(get_bloginfo('name')); ?>"
        >
    </a>

<?php else : ?>

    <!-- Text Logo -->
    <a class="logo-text" href="<?php echo esc_url(home_url('/')); ?>">
        <h3 class="text-logo">
            <?php echo esc_html(get_bloginfo('name')); ?>
        </h3>
    </a>

<?php endif; ?>

</div>
<!-- End Logo -->

                <!-- Button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"><i class="ti-menu"></i></span> </button>
                <!-- Menu -->
                <div class="collapse navbar-collapse" id="navbar">
                <!-- Close Button Inside Navbar Collapse with Focus Outline -->
                    <button class="close-menu" aria-label="<?php esc_attr_e( 'Close Menu', 'sima-architecture-interior' ); ?>">
                        <i class="fa fa-close"></i>
                    </button>                   
                     <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-1',
                            'container'      => false,
                            'menu_id'        => 'primary-menu',
                            'menu_class'     => 'navbar-nav ms-auto',
                            'walker'         => new Sima_Architecture_Interior_Custom_Walker_Nav_Menu(),
                            'fallback_cb'    => 'sima_architecture_interior_custom_menu_fallback',
                        )
                    );
                    ?>
                    <?php
                    function sima_architecture_interior_custom_menu_fallback() {
                        if (current_user_can('manage_options')) {
                            echo '<ul class="navbar-nav ms-auto">';
                            echo '<li><a href="' . esc_url(admin_url('nav-menus.php')) . '">' . esc_html__('Click here to add a menu', 'sima-architecture-interior') . '</a></li>';
                            echo '</ul>';
                        }
                    }
                ?>
                                                          
                 </div>
            </div>
        </nav>        
            