<?php
	
require get_template_directory() . '/includes/tgm/class-tgm-plugin-activation.php';

/**
 * Recommended plugins.
 */
function kindergarten_elementor_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Kirki Customizer Framework', 'kindergarten-elementor' ),
			'slug'             => 'kirki',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'WPElemento Importer', 'kindergarten-elementor' ),
			'slug'             => 'wpelemento-importer',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Elementor', 'kindergarten-elementor' ),
			'slug'             => 'elementor',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	kindergarten_elementor_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'kindergarten_elementor_register_recommended_plugins' );
