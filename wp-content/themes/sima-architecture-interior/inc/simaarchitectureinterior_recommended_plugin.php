<?php
add_action( 'after_setup_theme', 'simaarchitectureinterior_init_customizer_notify', 1 );
function simaarchitectureinterior_init_customizer_notify() {
	load_theme_textdomain( 'sima-architecture-interior', get_template_directory() . '/languages' );

	require get_template_directory() . '/inc/customizer-notify/simaarchitectureinterior-notify.php';

	$simaarchitectureinterior_config_customizer = array(
		'recommended_plugins'       => array(
			'pixelonetry-companion' => array(
				'recommended' => true,
				'description' => sprintf(__('Install and activate <strong>Pixelonetry Companion</strong> plugin for taking full advantage of all the features this theme has to offer.', 'sima-architecture-interior')),
			),
		),
		'recommended_actions'       => array(),
		'recommended_actions_title' => esc_html__( 'Recommended Actions', 'sima-architecture-interior' ),
		'recommended_plugins_title' => esc_html__( 'Recommended Plugin', 'sima-architecture-interior' ),
		'install_button_label'      => esc_html__( 'Install and Activate', 'sima-architecture-interior' ),
		'activate_button_label'     => esc_html__( 'Activate', 'sima-architecture-interior' ),
		'simaarchitectureinterior_deactivate_button_label'   => esc_html__( 'Deactivate', 'sima-architecture-interior' ),
	);

	SimaArchitectureInterior_Customizer_Notify::init( apply_filters( 'simaarchitectureinterior_customizer_notify_array', $simaarchitectureinterior_config_customizer ) );
}
