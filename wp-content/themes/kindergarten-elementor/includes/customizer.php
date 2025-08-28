<?php

if ( class_exists("Kirki")){

	Kirki::add_config('theme_config_id', array(
		'capability'   =>  'edit_theme_options',
		'option_type'  =>  'theme_mod',
	));


	Kirki::add_field( 'theme_config_id', [
		'label'       => esc_html__( 'Logo Size','kindergarten-elementor' ),
		'section'     => 'title_tagline',
		'priority'    => 9,
		'type'        => 'range',
		'settings'    => 'logo_size',
		'choices' => [
			'step'             => 5,
			'min'              => 0,
			'max'              => 100,
			'aria-valuemin'    => 0,
			'aria-valuemax'    => 100,
			'aria-valuenow'    => 50,
			'aria-orientation' => 'horizontal',
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'kindergarten_elementor_enable_logo_text',
		'section'     => 'title_tagline',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'kindergarten-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

  	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'kindergarten_elementor_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'kindergarten-elementor' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'kindergarten-elementor' ),
			'off' => esc_html__( 'Disable', 'kindergarten-elementor' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'kindergarten_elementor_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'kindergarten-elementor' ),
		'section'     => 'title_tagline',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'kindergarten-elementor' ),
			'off' => esc_html__( 'Disable', 'kindergarten-elementor' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'kindergarten_elementor_site_tittle_font_heading',
		'section'     => 'title_tagline',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Site Title Font Size', 'kindergarten-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'kindergarten_elementor_site_tittle_font_size',
		'type'        => 'number',
		'section'     => 'title_tagline',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.logo a'),
				'property' => 'font-size',
				'suffix' => 'px'
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'kindergarten_elementor_site_tagline_font_heading',
		'section'     => 'title_tagline',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Site Tagline Font Size', 'kindergarten-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'kindergarten_elementor_site_tagline_font_size',
		'type'        => 'number',
		'section'     => 'title_tagline',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.logo span'),
				'property' => 'font-size',
				'suffix' => 'px'
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'custom',
		'settings'    => 'kindergarten_elementor_logo_settings_premium_features',
		'section'     => 'title_tagline',
		'priority'    => 50,
		'default'     => '<h3 style="color: #2271b1; padding:5px 20px 5px 20px; background:#fff; margin:0;  box-shadow: 0 2px 4px rgba(0,0,0, .2); ">' . esc_html__( 'Unlock More Features in the Premium Version!', 'kindergarten-elementor' ) . '</h3><ul style="color: #121212; padding: 5px 20px 20px 30px; background:#fff; margin:0;" ><li style="list-style-type: square;" >' . esc_html__( 'Customizable Text Logo', 'kindergarten-elementor' ) . '</li><li style="list-style-type: square;" >'.esc_html__( 'Enhanced Typography Options', 'kindergarten-elementor' ) .'</li><li style="list-style-type: square;" >'.esc_html__( 'Priority Support', 'kindergarten-elementor' ) .'</li><li style="list-style-type: square;" >'.esc_html__( '....and Much More', 'kindergarten-elementor' ) . '</li></ul><div style="background: #fff; padding: 0px 10px 10px 20px;"><a href="' . esc_url( __( 'https://www.wpelemento.com/products/kindergarten-wordpress-theme', 'kindergarten-elementor' ) ) . '" class="button button-primary" target="_blank">'. esc_html__( 'Upgrade for more', 'kindergarten-elementor' ) .'</a></div>',
	) );

	// Theme color

	Kirki::add_section( 'kindergarten_elementor_theme_color_setting', array(
		'title'    => __( 'Color Option', 'kindergarten-elementor' ),
		'priority' => 10,
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'kindergarten_elementor_theme_first_color',
		'label'       => __( 'First Theme color', 'kindergarten-elementor'),
		'description'    => esc_html__( 'To customize the colors of the homepage, use the Elementor editor', 'kindergarten-elementor' ),
		'section'     => 'kindergarten_elementor_theme_color_setting',
		'type'        => 'color',
		'default'     => '#FF7700',
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'kindergarten_elementor_theme_second_color',
		'label'       => __( 'Second Theme color', 'kindergarten-elementor'),
		'description'    => esc_html__( 'To customize the colors of the homepage, use the Elementor editor', 'kindergarten-elementor' ),
		'section'     => 'kindergarten_elementor_theme_color_setting',
		'type'        => 'color',
		'default'     => '#5422AA',
	) );

	// TYPOGRAPHY SETTINGS

	Kirki::add_panel( 'kindergarten_elementor_typography_panel', array(
		'priority' => 10,
		'title'    => __( 'Typography', 'kindergarten-elementor' ),
	) );

	//Heading 1 Section

	Kirki::add_section( 'kindergarten_elementor_h1_typography_setting', array(
		'title'    => __( 'Heading 1', 'kindergarten-elementor' ),
		'panel'    => 'kindergarten_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'kindergarten_elementor_h1_typography_heading',
		'section'     => 'kindergarten_elementor_h1_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 1 Typography', 'kindergarten-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'kindergarten_elementor_h1_typography_font',
		'section'   =>  'kindergarten_elementor_h1_typography_setting',
		'default'   =>  [
			'font-family'   =>  "'Poppins', serif",
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  array('.header-image-box h1'),
				'suffix' => '!important'
			],
		],
	) );

	//Heading 2 Section

	Kirki::add_section( 'kindergarten_elementor_h2_typography_setting', array(
		'title'    => __( 'Heading 2', 'kindergarten-elementor' ),
		'panel'    => 'kindergarten_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'kindergarten_elementor_h2_typography_heading',
		'section'     => 'kindergarten_elementor_h2_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 2 Typography', 'kindergarten-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'kindergarten_elementor_h2_typography_font',
		'section'   =>  'kindergarten_elementor_h2_typography_setting',
		'default'   =>  [
			'font-family'   =>  "'Poppins', serif",
			'font-size'       => '',
			'variant'       =>  '700',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h2',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 3 Section

	Kirki::add_section( 'kindergarten_elementor_h3_typography_setting', array(
		'title'    => __( 'Heading 3', 'kindergarten-elementor' ),
		'panel'    => 'kindergarten_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'kindergarten_elementor_h3_typography_heading',
		'section'     => 'kindergarten_elementor_h3_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 3 Typography', 'kindergarten-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'kindergarten_elementor_h3_typography_font',
		'section'   =>  'kindergarten_elementor_h3_typography_setting',
		'default'   =>  [
			'font-family'   =>  "'Poppins', serif",
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h3',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 4 Section

	Kirki::add_section( 'kindergarten_elementor_h4_typography_setting', array(
		'title'    => __( 'Heading 4', 'kindergarten-elementor' ),
		'panel'    => 'kindergarten_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'kindergarten_elementor_h4_typography_heading',
		'section'     => 'kindergarten_elementor_h4_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 4 Typography', 'kindergarten-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'kindergarten_elementor_h4_typography_font',
		'section'   =>  'kindergarten_elementor_h4_typography_setting',
		'default'   =>  [
			'font-family'   =>  "'Poppins', serif",
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h4',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 5 Section

	Kirki::add_section( 'kindergarten_elementor_h5_typography_setting', array(
		'title'    => __( 'Heading 5', 'kindergarten-elementor' ),
		'panel'    => 'kindergarten_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'kindergarten_elementor_h5_typography_heading',
		'section'     => 'kindergarten_elementor_h5_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 5 Typography', 'kindergarten-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'kindergarten_elementor_h5_typography_font',
		'section'   =>  'kindergarten_elementor_h5_typography_setting',
		'default'   =>  [
			'font-family'   =>  "'Kalam', serif",
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h5',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 6 Section

	Kirki::add_section( 'kindergarten_elementor_h6_typography_setting', array(
		'title'    => __( 'Heading 6', 'kindergarten-elementor' ),
		'panel'    => 'kindergarten_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'kindergarten_elementor_h6_typography_heading',
		'section'     => 'kindergarten_elementor_h6_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 6 Typography', 'kindergarten-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'kindergarten_elementor_h6_typography_font',
		'section'   =>  'kindergarten_elementor_h6_typography_setting',
		'default'   =>  [
			'font-family'   =>  "'Poppins', serif",
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h6',
				'suffix' => '!important'
			],
		],
	) );

	//body Typography

	Kirki::add_section( 'kindergarten_elementor_body_typography_setting', array(
		'title'    => __( 'Content Typography', 'kindergarten-elementor' ),
		'panel'    => 'kindergarten_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'kindergarten_elementor_body_typography_heading',
		'section'     => 'kindergarten_elementor_body_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Content  Typography', 'kindergarten-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'kindergarten_elementor_body_typography_font',
		'section'   =>  'kindergarten_elementor_body_typography_setting',
		'default'   =>  [
			'font-family'   =>  "'Poppins', serif",
			'variant'       =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   => 'body',
				'suffix' => '!important'
			],
		],
	) );

	//Theme Options Panel

	Kirki::add_panel( 'kindergarten_elementor_theme_options_panel', array(
		'priority' => 10,
		'title'    => __( 'Theme Options', 'kindergarten-elementor' ),
	) );

	// HEADER SECTION

	Kirki::add_section( 'kindergarten_elementor_section_header',array(
		'title' => esc_html__( 'Header Settings', 'kindergarten-elementor' ),
		'description'    => esc_html__( 'Here you can add header information.', 'kindergarten-elementor' ),
		'panel' => 'kindergarten_elementor_theme_options_panel',
		'tabs'  => [
			'header' => [
				'label' => esc_html__( 'Header', 'kindergarten-elementor' ),
			],
			'menu'  => [
				'label' => esc_html__( 'Menu', 'kindergarten-elementor' ),
			],
		],
		'priority'       => 160,
	) );


	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header',
		'settings'    => 'kindergarten_elementor_header_advertisement_heading',
		'section'     => 'kindergarten_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Advertisement Text', 'kindergarten-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'tab'      => 'header',
		'settings' => 'kindergarten_elementor_header_advertisement_text',
		'section'  => 'kindergarten_elementor_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'menu',
		'settings'    => 'kindergarten_elementor_menu_size_heading',
		'section'     => 'kindergarten_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Menu Font Size(px)', 'kindergarten-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'kindergarten_elementor_menu_size',
		'label'       => __( 'Enter a value in pixels. Example:20px', 'kindergarten-elementor' ),
		'type'        => 'text',
		'tab'      => 'menu',
		'section'     => 'kindergarten_elementor_section_header',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array( '#main-menu a', '#main-menu ul li a', '#main-menu li a'),
				'property' => 'font-size',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'menu',
		'settings'    => 'kindergarten_elementor_menu_text_transform_heading',
		'section'     => 'kindergarten_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Menu Text Transform', 'kindergarten-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'tab'      => 'menu',
		'settings'    => 'kindergarten_elementor_menu_text_transform',
		'section'     => 'kindergarten_elementor_section_header',
		'default'     => 'capitalize',
		'choices'     => [
			'none' => esc_html__( 'Normal', 'kindergarten-elementor' ),
			'uppercase' => esc_html__( 'Uppercase', 'kindergarten-elementor' ),
			'lowercase' => esc_html__( 'Lowercase', 'kindergarten-elementor' ),
			'capitalize' => esc_html__( 'Capitalize', 'kindergarten-elementor' ),
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu a', '#main-menu ul li a', '#main-menu li a'),
				'property' => ' text-transform',
			),
		),
	 ) );

	 Kirki::add_field( 'theme_config_id', array(
		'type'        => 'custom',
		'tab'      => 'header',
		'settings'    => 'kindergarten_elementor_logo_settings_premium_features_header',
		'section'     => 'kindergarten_elementor_section_header',
		'priority'    => 50,
		'default'     => '<h3 style="color: #2271b1; padding:5px 20px 5px 20px; background:#fff; margin:0;  box-shadow: 0 2px 4px rgba(0,0,0, .2); ">' . esc_html__( 'Enhance your header design now!', 'kindergarten-elementor' ) . '</h3><ul style="color: #121212; padding: 5px 20px 20px 30px; background:#fff; margin:0;" ><li style="list-style-type: square;" >' . esc_html__( 'Customize your header background color', 'kindergarten-elementor' ) . '</li><li style="list-style-type: square;" >'.esc_html__( 'Adjust icon and text font sizes', 'kindergarten-elementor' ) .'</li><li style="list-style-type: square;" >'.esc_html__( 'Explore enhanced typography options', 'kindergarten-elementor' ) .'</li><li style="list-style-type: square;" >'.esc_html__( '....and Much More', 'kindergarten-elementor' ) . '</li></ul><div style="background: #fff; padding: 0px 10px 10px 20px;"><a href="' . esc_url( __( 'https://www.wpelemento.com/products/kindergarten-wordpress-theme', 'kindergarten-elementor' ) ) . '" class="button button-primary" target="_blank">'. esc_html__( 'Upgrade for more', 'kindergarten-elementor' ) .'</a></div>',
	) );

	// WOOCOMMERCE SETTINGS

	Kirki::add_section( 'kindergarten_elementor_woocommerce_settings', array(
		'title'          => esc_html__( 'Woocommerce Settings', 'kindergarten-elementor' ),
		'description'    => esc_html__( 'Woocommerce Settings of themes', 'kindergarten-elementor' ),
		'panel'    => 'woocommerce',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'kindergarten_elementor_shop_page_sidebar',
		'label'       => esc_html__( 'Enable/Disable Shop Page Sidebar', 'kindergarten-elementor' ),
		'section'     => 'kindergarten_elementor_woocommerce_settings',
		'default'     => 'false',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'label'       => esc_html__( 'Shop Page Layouts', 'kindergarten-elementor' ),
		'settings'    => 'kindergarten_elementor_shop_page_layout',
		'section'     => 'kindergarten_elementor_woocommerce_settings',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'kindergarten-elementor' ),
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'kindergarten-elementor' ),
		],
		'active_callback'  => [
			[
				'setting'  => 'kindergarten_elementor_shop_page_sidebar',
				'operator' => '===',
				'value'    => true,
			],
		]
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'label'       => esc_html__( 'Products Per Row', 'kindergarten-elementor' ),
		'settings'    => 'kindergarten_elementor_products_per_row',
		'section'     => 'kindergarten_elementor_woocommerce_settings',
		'default'     => '4',
		'priority'    => 10,
		'choices'     => [
			'2' => '2',
			'3' => '3',
			'4' => '4',
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'label'       => esc_html__( 'Products Per Page', 'kindergarten-elementor' ),
		'settings'    => 'kindergarten_elementor_products_per_page',
		'section'     => 'kindergarten_elementor_woocommerce_settings',
		'default'     => '9',
		'priority'    => 10,
		'choices'  => [
					'min'  => 0,
					'max'  => 50,
					'step' => 1,
				],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'kindergarten_elementor_single_product_sidebar',
		'label'       => esc_html__( 'Enable / Disable Single Product Sidebar', 'kindergarten-elementor' ),
		'section'     => 'kindergarten_elementor_woocommerce_settings',
		'default'     => 'true',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'label'       => esc_html__( 'Single Product Layout', 'kindergarten-elementor' ),
		'settings'    => 'kindergarten_elementor_single_product_sidebar_layout',
		'section'     => 'kindergarten_elementor_woocommerce_settings',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'kindergarten-elementor' ),
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'kindergarten-elementor' ),
		],
		'active_callback'  => [
			[
				'setting'  => 'kindergarten_elementor_single_product_sidebar',
				'operator' => '===',
				'value'    => true,
			],
		]
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'kindergarten_elementor_products_button_border_radius_heading',
		'section'     => 'kindergarten_elementor_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Products Button Border Radius', 'kindergarten-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'kindergarten_elementor_products_button_border_radius',
		'section'     => 'kindergarten_elementor_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
		'choices'  => [
					'min'  => 1,
					'max'  => 50,
					'step' => 1,
				],
		'output' => array(
			array(
				'element'  => array('.woocommerce ul.products li.product .button',' a.checkout-button.button.alt.wc-forward','.woocommerce #respond input#submit', '.woocommerce a.button', '.woocommerce button.button','.woocommerce input.button','.woocommerce #respond input#submit.alt','.woocommerce button.button.alt','.woocommerce input.button.alt'),
				'property' => 'border-radius',
				'units' => 'px',
			),
		),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'kindergarten_elementor_sale_badge_position_heading',
		'section'     => 'kindergarten_elementor_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Sale Badge Position', 'kindergarten-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'kindergarten_elementor_sale_badge_position',
		'section'     => 'kindergarten_elementor_woocommerce_settings',
		'default'     => 'right',
		'choices'     => [
			'right' => esc_html__( 'Right', 'kindergarten-elementor' ),
			'left' => esc_html__( 'Left', 'kindergarten-elementor' ),
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'kindergarten_elementor_products_sale_font_size_heading',
		'section'     => 'kindergarten_elementor_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Sale Font Size', 'kindergarten-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'text',
		'settings'    => 'kindergarten_elementor_products_sale_font_size',
		'section'     => 'kindergarten_elementor_woocommerce_settings',
		'priority'    => 10,
		'output' => array(
			array(
				'element'  => array('.woocommerce span.onsale','.woocommerce ul.products li.product .onsale'),
				'property' => 'font-size',
				'units' => 'px',
			),
		),
	] );
	
	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'kindergarten_elementor_show_related_product_heading',
		'section'     => 'kindergarten_elementor_woocommerce_settings',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Related Product', 'kindergarten-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'kindergarten_elementor_show_related_product',
		'label'       => esc_html__( 'Enable or Disable Related Product', 'kindergarten-elementor' ),
		'section'     => 'kindergarten_elementor_woocommerce_settings',
		'default'     => true,
		'priority'    => 10,
	] );

	//ADDITIONAL SETTINGS

	Kirki::add_section( 'kindergarten_elementor_additional_setting', array(
		'title'          => esc_html__( 'Additional Settings', 'kindergarten-elementor' ),
		'description'    => esc_html__( 'Additional Settings of themes', 'kindergarten-elementor' ),
		'panel'    => 'kindergarten_elementor_theme_options_panel',
		'priority'       => 10,
		'tabs'  => [
			'general' => [
				'label' => esc_html__( 'General', 'kindergarten-elementor' ),
			],
			'header-image'  => [
				'label' => esc_html__( 'Header Image', 'kindergarten-elementor' ),
			],
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'kindergarten_elementor_preloader_hide',
		'label'       => esc_html__( 'Here you can enable or disable your preloader.', 'kindergarten-elementor' ),
		'section'     => 'kindergarten_elementor_additional_setting',
		'default'     => '0',
		'priority'    => 10,
		'tab'      => 'general',
	] );
 
	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'kindergarten_elementor_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'kindergarten-elementor' ),
		'section'     => 'kindergarten_elementor_additional_setting',
		'default'     => '1',
		'priority'    => 10,
		'tab'      => 'general',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'kindergarten_elementor_scroll_alignment_heading',
		'section'     => 'kindergarten_elementor_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Scroll To Top Position', 'kindergarten-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'radio-buttonset',
		'tab'      => 'general',
		'settings'    => 'kindergarten_elementor_scroll_alignment',
		'section'     => 'kindergarten_elementor_additional_setting',
		'default'     => 'right',
		'choices'     => [
			'left' => esc_html__( 'left', 'kindergarten-elementor' ),
			'center' => esc_html__( 'center', 'kindergarten-elementor' ),
			'right' => esc_html__( 'right', 'kindergarten-elementor' ),
		]
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'kindergarten_elementor_scroller_border_radius_heading',
		'section'     => 'kindergarten_elementor_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Scroll To Top Border Radius', 'kindergarten-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'slider',
		'tab'      => 'general',
		'settings'    => 'kindergarten_elementor_scroller_border_radius',
		'section'     => 'kindergarten_elementor_additional_setting',
		'default'     => '50',
		'choices'     => [
			'min'  => 0,
			'max'  => 50,
			'step' => 1,
		],
		'output' => array(
			array(
				'element'  => '.scroll-up a',
				'property' => 'border-radius',
				'units' => 'px',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'kindergarten_elementor_cursor_outline_heading',
		'section'     => 'kindergarten_elementor_additional_setting',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Dot Cursor', 'kindergarten-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'general',
		'settings'    => 'kindergarten_elementor_cursor_outline',
		'label'       => esc_html__( 'Enable or Disable Dot Cursor', 'kindergarten-elementor' ),
		'section'     => 'kindergarten_elementor_additional_setting',
		'default'     => false,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'kindergarten_elementor_progress_bar_heading',
		'section'     => 'kindergarten_elementor_additional_setting',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Progress Bar', 'kindergarten-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'general',
		'settings'    => 'kindergarten_elementor_progress_bar',
		'label'       => esc_html__( 'Enable or Disable Progress Bar', 'kindergarten-elementor' ),
		'section'     => 'kindergarten_elementor_additional_setting',
		'default'     => false,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'kindergarten_elementor_progress_bar_position_heading',
		'section'     => 'kindergarten_elementor_additional_setting',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Progress Bar Position', 'kindergarten-elementor' ) . '</h3>',
		'priority'    => 10,
		'active_callback'  => [
			[
				'setting'  => 'kindergarten_elementor_progress_bar',
				'operator' => '===',
				'value'    => true,
			],
		]
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'tab'      => 'general',
		'settings'    => 'kindergarten_elementor_progress_bar_position',
		'section'     => 'kindergarten_elementor_additional_setting',
		'default'     => 'top',
		'choices'     => [
			'top' => esc_html__( 'Top', 'kindergarten-elementor' ),
			'bottom' => esc_html__( 'Bottom', 'kindergarten-elementor' ),
		],
		'active_callback'  => [
			[
				'setting'  => 'kindergarten_elementor_progress_bar',
				'operator' => '===',
				'value'    => true,
			],
		]
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'kindergarten_elementor_progress_bar_color_heading',
		'section'     => 'kindergarten_elementor_additional_setting',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Progress Bar Color', 'kindergarten-elementor' ) . '</h3>',
		'priority'    => 10,
		'active_callback'  => [
			[
				'setting'  => 'kindergarten_elementor_progress_bar',
				'operator' => '===',
				'value'    => true,
			],
		]
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'kindergarten_elementor_progress_bar_color',
		'tab'      => 'general',
		'label'       => __( 'Color', 'kindergarten-elementor' ),
		'type'        => 'color',
		'section'     => 'kindergarten_elementor_additional_setting',
		'transport' => 'auto',
		'default'     => '#5422AA',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '#elemento-progress-bar',
				'property' => 'background-color',
			),
		),
		'active_callback'  => [
			[
				'setting'  => 'kindergarten_elementor_progress_bar',
				'operator' => '===',
				'value'    => true,
			],
		]
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'kindergarten_elementor_single_page_layout_heading',
		'section'     => 'kindergarten_elementor_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Single Page Layout', 'kindergarten-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'tab'      => 'general',
		'settings'    => 'kindergarten_elementor_single_page_layout',
		'section'     => 'kindergarten_elementor_additional_setting',
		'default'     => 'One Column',
		'choices'     => [
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'kindergarten-elementor' ),
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'kindergarten-elementor' ),
			'One Column' => esc_html__( 'One Column', 'kindergarten-elementor' ),
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header-image',
		'settings'    => 'kindergarten_elementor_header_background_attachment_heading',
		'section'     => 'kindergarten_elementor_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Image Attachment', 'kindergarten-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'tab'      => 'header-image',
		'settings'    => 'kindergarten_elementor_header_background_attachment',
		'section'     => 'kindergarten_elementor_additional_setting',
		'default'     => 'scroll',
		'choices'     => [
			'scroll' => esc_html__( 'Scroll', 'kindergarten-elementor' ),
			'fixed' => esc_html__( 'Fixed', 'kindergarten-elementor' ),
		],
		'output' => array(
			array(
				'element'  => '.header-image-box',
				'property' => 'background-attachment',
			),
		),
	 ) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header-image',
		'settings'    => 'kindergarten_elementor_header_overlay_heading',
		'section'     => 'kindergarten_elementor_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Image Overlay', 'kindergarten-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'kindergarten_elementor_header_overlay_setting',
		'tab'      => 'header-image',
		'label'       => __( 'Overlay Color', 'kindergarten-elementor' ),
		'type'        => 'color',
		'section'     => 'kindergarten_elementor_additional_setting',
		'transport' => 'auto',
		'default'     => '#00000061',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.header-image-box:before',
				'property' => 'background',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'header-image',
		'settings'    => 'kindergarten_elementor_header_page_title',
		'label'       => esc_html__( 'Enable / Disable Header Image Page Title.', 'kindergarten-elementor' ),
		'section'     => 'kindergarten_elementor_additional_setting',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'header-image',
		'settings'    => 'kindergarten_elementor_header_breadcrumb',
		'label'       => esc_html__( 'Enable / Disable Header Image Breadcrumb.', 'kindergarten-elementor' ),
		'section'     => 'kindergarten_elementor_additional_setting',
		'default'     => '1',
		'priority'    => 10,
	] );

	// POST SECTION

	Kirki::add_section( 'kindergarten_elementor_blog_post', array(
		'title'          => esc_html__( 'Post Settings', 'kindergarten-elementor' ),
		'description'    => esc_html__( 'Here you can add post information.', 'kindergarten-elementor' ),
		'panel'    => 'kindergarten_elementor_theme_options_panel',
		'tabs'  => [
			'blog-post' => [
				'label' => esc_html__( 'Blog Post', 'kindergarten-elementor' ),
			],
			'single-post'  => [
				'label' => esc_html__( 'Single Post', 'kindergarten-elementor' ),
			],
		],
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'blog-post',
		'settings'    => 'kindergarten_elementor_enable_post_animation_heading',
		'section'     => 'kindergarten_elementor_blog_post',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Animation', 'kindergarten-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'kindergarten_elementor_enable_post_animation',
		'label'       => esc_html__( 'Enable or Disable Blog Post Animation', 'kindergarten-elementor' ),
		'section'     => 'kindergarten_elementor_blog_post',
		'default'     => true,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'blog-post',
		'settings'    => 'kindergarten_elementor_post_layout_heading',
		'section'     => 'kindergarten_elementor_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Blog Layout', 'kindergarten-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'tab'      => 'blog-post',
		'settings'    => 'kindergarten_elementor_post_layout',
		'section'     => 'kindergarten_elementor_blog_post',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'kindergarten-elementor' ),
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'kindergarten-elementor' ),
			'One Column' => esc_html__( 'One Column', 'kindergarten-elementor' ),
			'Three Columns' => esc_html__( 'Three Columns', 'kindergarten-elementor' ),
			'Four Columns' => esc_html__( 'Four Columns', 'kindergarten-elementor' ),
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'kindergarten_elementor_date_hide',
		'label'       => esc_html__( 'Enable / Disable Post Date', 'kindergarten-elementor' ),
		'section'     => 'kindergarten_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'kindergarten_elementor_author_hide',
		'label'       => esc_html__( 'Enable / Disable Post Author', 'kindergarten-elementor' ),
		'section'     => 'kindergarten_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'kindergarten_elementor_comment_hide',
		'label'       => esc_html__( 'Enable / Disable Post Comment', 'kindergarten-elementor' ),
		'section'     => 'kindergarten_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'kindergarten_elementor_blog_post_featured_image',
		'label'       => esc_html__( 'Enable / Disable Post Image', 'kindergarten-elementor' ),
		'section'     => 'kindergarten_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'blog-post',
		'settings'    => 'kindergarten_elementor_length_setting_heading',
		'section'     => 'kindergarten_elementor_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Blog Post Content Limit', 'kindergarten-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'tab'      => 'blog-post',
		'settings'    => 'kindergarten_elementor_length_setting',
		'section'     => 'kindergarten_elementor_blog_post',
		'default'     => '15',
		'priority'    => 10,
		'choices'  => [
					'min'  => -10,
					'max'  => 40,
		 			'step' => 1,
				],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'blog-post',
		'settings'    => 'kindergarten_elementor_show_pagination_heading',
		'section'     => 'kindergarten_elementor_blog_post',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Blog Post Pagination', 'kindergarten-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'kindergarten_elementor_show_pagination',
		'label'       => esc_html__( 'Enable or Disable Blog Post Pagination', 'kindergarten-elementor' ),
		'section'     => 'kindergarten_elementor_blog_post',
		'default'     => true,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'kindergarten_elementor_single_post_date_hide',
		'label'       => esc_html__( 'Enable / Disable Single Post Date', 'kindergarten-elementor' ),
		'section'     => 'kindergarten_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'kindergarten_elementor_single_post_author_hide',
		'label'       => esc_html__( 'Enable / Disable Single Post Author', 'kindergarten-elementor' ),
		'section'     => 'kindergarten_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'kindergarten_elementor_single_post_comment_hide',
		'label'       => esc_html__( 'Enable / Disable Single Post Comment', 'kindergarten-elementor' ),
		'section'     => 'kindergarten_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'label'       => esc_html__( 'Enable / Disable Single Post Tag', 'kindergarten-elementor' ),
		'settings'    => 'kindergarten_elementor_single_post_tag',
		'section'     => 'kindergarten_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'label'       => esc_html__( 'Enable / Disable Single Post Category', 'kindergarten-elementor' ),
		'settings'    => 'kindergarten_elementor_single_post_category',
		'section'     => 'kindergarten_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'kindergarten_elementor_single_post_featured_image',
		'label'       => esc_html__( 'Enable / Disable Single Post Image', 'kindergarten-elementor' ),
		'section'     => 'kindergarten_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'single-post',
		'settings'    => 'kindergarten_elementor_single_post_radius',
		'section'     => 'kindergarten_elementor_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Single Post Image Border Radius(px)', 'kindergarten-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'kindergarten_elementor_single_post_border_radius',
		'label'       => __( 'Enter a value in pixels. Example:15px', 'kindergarten-elementor' ),
		'type'        => 'text',
		'tab'      => 'single-post',
		'section'     => 'kindergarten_elementor_blog_post',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.post-img img'),
				'property' => 'border-radius',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'single-post',
		'settings'    => 'kindergarten_elementor_show_related_post_heading',
		'section'     => 'kindergarten_elementor_blog_post',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Related post', 'kindergarten-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'kindergarten_elementor_show_related_post',
		'label'       => esc_html__( 'Enable or Disable Related post', 'kindergarten-elementor' ),
		'section'     => 'kindergarten_elementor_blog_post',
		'default'     => true,
		'priority'    => 10,
	] );

	// No Results Page Settings

	Kirki::add_section( 'kindergarten_elementor_no_result_section', array(
		'title'          => esc_html__( '404 & No Results Page Settings', 'kindergarten-elementor' ),
		'panel'    => 'kindergarten_elementor_theme_options_panel',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'kindergarten_elementor_page_not_found_title_heading',
		'section'     => 'kindergarten_elementor_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( '404 Page Title', 'kindergarten-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'kindergarten_elementor_page_not_found_title',
		'section'  => 'kindergarten_elementor_no_result_section',
		'default'  => esc_html__('404 Error!', 'kindergarten-elementor'),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'kindergarten_elementor_page_not_found_text_heading',
		'section'     => 'kindergarten_elementor_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( '404 Page Text', 'kindergarten-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'kindergarten_elementor_page_not_found_text',
		'section'  => 'kindergarten_elementor_no_result_section',
		'default'  => esc_html__('The page you are looking for may have been moved, deleted, or possibly never existed.', 'kindergarten-elementor'),
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'     => 'custom',
		'settings' => 'kindergarten_elementor_page_not_found_line_break',
		'section'  => 'kindergarten_elementor_no_result_section',
		'default'  => '<hr>',
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'kindergarten_elementor_no_results_title_heading',
		'section'     => 'kindergarten_elementor_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'No Results Title', 'kindergarten-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'kindergarten_elementor_no_results_title',
		'section'  => 'kindergarten_elementor_no_result_section',
		'default'  => esc_html__('Nothing Found', 'kindergarten-elementor'),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'kindergarten_elementor_no_results_content_heading',
		'section'     => 'kindergarten_elementor_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'No Results Content', 'kindergarten-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'kindergarten_elementor_no_results_content',
		'section'  => 'kindergarten_elementor_no_result_section',
		'default'  => esc_html__('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'kindergarten-elementor'),
	] );
	
	// FOOTER SECTION

	Kirki::add_section( 'kindergarten_elementor_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'kindergarten-elementor' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'kindergarten-elementor' ),
        'panel'    => 'kindergarten_elementor_theme_options_panel',
		'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'kindergarten_elementor_show_footer_widget_heading',
		'section'     => 'kindergarten_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable', 'kindergarten-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'kindergarten_elementor_show_footer_widget',
		'label'       => esc_html__( 'Footer Widget', 'kindergarten-elementor' ),
		'section'     => 'kindergarten_elementor_footer_section',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'kindergarten_elementor_show_footer_copyright',
		'label'       => esc_html__( 'Footer Copyright', 'kindergarten-elementor' ),
		'section'     => 'kindergarten_elementor_footer_section',
		'default'     => '1',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'kindergarten_elementor_footer_text_heading',
		'section'     => 'kindergarten_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'kindergarten-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'kindergarten_elementor_footer_text',
		'section'  => 'kindergarten_elementor_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'kindergarten_elementor_footer_enable_heading',
		'section'     => 'kindergarten_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'kindergarten-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'kindergarten_elementor_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'kindergarten-elementor' ),
		'section'     => 'kindergarten_elementor_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'kindergarten-elementor' ),
			'off' => esc_html__( 'Disable', 'kindergarten-elementor' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'kindergarten_elementor_footer_background_widget_heading',
		'section'     => 'kindergarten_elementor_footer_section',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Widget Background', 'kindergarten-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id',
	[
		'settings'    => 'kindergarten_elementor_footer_background_widget',
		'type'        => 'background',
		'section'     => 'kindergarten_elementor_footer_section',
		'default'     => [
			'background-color'      => 'rgba(23,20,20,1)',
			'background-image'      => '',
			'background-repeat'     => 'no-repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '.footer-widget',
			],
		],
	]);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'kindergarten_elementor_footer_copright_color_heading',
		'section'     => 'kindergarten_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Copyright Background Color', 'kindergarten-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'kindergarten_elementor_footer_widget_alignment_heading',
		'section'     => 'kindergarten_elementor_footer_section',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Widget Alignment', 'kindergarten-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'kindergarten_elementor_footer_widget_alignment',
		'section'     => 'kindergarten_elementor_footer_section',
		'default'     =>[
			'desktop' => 'left',
			'tablet'  => 'left',
			'mobile'  => 'center',
		],
		'responsive' => true,
		'label'       => __( 'Widget Alignment', 'kindergarten-elementor' ),
		'transport' => 'auto',
		'choices'     => [
			'center' => esc_html__( 'center', 'kindergarten-elementor' ),
			'right' => esc_html__( 'right', 'kindergarten-elementor' ),
			'left' => esc_html__( 'left', 'kindergarten-elementor' ),
		],
		'output' => array(
			array(
				'element'  => '.footer-area',
				'property' => 'text-align',
				'media_query' => [
					'desktop' => '@media (min-width: 1024px)',
					'tablet'  => '@media (min-width: 768px) and (max-width: 1023px)',
					'mobile'  => '@media (max-width: 767px)',
				],
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'kindergarten_elementor_footer_copright_color',
		'type'        => 'color',
		'label'       => __( 'Background Color', 'kindergarten-elementor' ),
		'section'     => 'kindergarten_elementor_footer_section',
		'transport' => 'auto',
		'default'     => '#FF8225',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.footer-copyright',
				'property' => 'background',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'kindergarten_elementor_footer_copright_text_color_heading',
		'section'     => 'kindergarten_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Copyright Text Color', 'kindergarten-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'kindergarten_elementor_footer_copright_text_color',
		'type'        => 'color',
		'label'       => __( 'Text Color', 'kindergarten-elementor' ),
		'section'     => 'kindergarten_elementor_footer_section',
		'transport' => 'auto',
		'default'     => '#ffffff',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '.footer-copyright a', '.footer-copyright p'),
				'property' => 'color',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'custom',
		'settings'    => 'kindergarten_elementor_logo_settings_premium_features_footer',
		'section'     => 'kindergarten_elementor_footer_section',
		'priority'    => 50,
		'default'     => '<h3 style="color: #2271b1; padding:5px 20px 5px 20px; background:#fff; margin:0;  box-shadow: 0 2px 4px rgba(0,0,0, .2); ">' . esc_html__( 'Elevate your footer with premium features:', 'kindergarten-elementor' ) . '</h3><ul style="color: #121212; padding: 5px 20px 20px 30px; background:#fff; margin:0;" ><li style="list-style-type: square;" >' . esc_html__( 'Tailor your footer layout', 'kindergarten-elementor' ) . '</li><li style="list-style-type: square;" >'.esc_html__( 'Integrate an email subscription form', 'kindergarten-elementor' ) .'</li><li style="list-style-type: square;" >'.esc_html__( 'Personalize social media icons', 'kindergarten-elementor' ) .'</li><li style="list-style-type: square;" >'.esc_html__( '....and Much More', 'kindergarten-elementor' ) . '</li></ul><div style="background: #fff; padding: 0px 10px 10px 20px;"><a href="' . esc_url( __( 'https://www.wpelemento.com/products/kindergarten-wordpress-theme', 'kindergarten-elementor' ) ) . '" class="button button-primary" target="_blank">'. esc_html__( 'Upgrade for more', 'kindergarten-elementor' ) .'</a></div>',
	) );

	// Footer Social Icons Section

	Kirki::add_section( 'kindergarten_elementor_footer_social_media_section', array(
		'title'          => esc_html__( 'Footer Social Icons', 'kindergarten-elementor' ),
		'panel'    => 'kindergarten_elementor_theme_options_panel',
		'priority'       => 160,
	) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'kindergarten_elementor_footer_social_icon_hide_heading',
		'section'     => 'kindergarten_elementor_footer_social_media_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable or Disable your Footer Social Icon', 'kindergarten-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'kindergarten_elementor_footer_social_icon_hide',
		'label'       => esc_html__( 'Enable or Disable Social Icon.', 'kindergarten-elementor' ),
		'section'     => 'kindergarten_elementor_footer_social_media_section',
		'default'     => false,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'kindergarten_elementor_enable_footer_socail_link_align_heading',
		'section'     => 'kindergarten_elementor_footer_social_media_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Social Media Text Align', 'kindergarten-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'kindergarten_elementor_enable_footer_socail_link_align',
		'type'        => 'select',
		'priority'    => 10,
		'label'       => __( 'Text Align', 'kindergarten-elementor' ),
		'section'     => 'kindergarten_elementor_footer_social_media_section',
		'default'     => 'left',
		'choices'     => [
			'center' => esc_html__( 'center', 'kindergarten-elementor' ),
			'right' => esc_html__( 'right', 'kindergarten-elementor' ),
			'left' => esc_html__( 'left', 'kindergarten-elementor' ),
		],
		'output' => array(
			array(
				'element'  => array( '.footer-links'),
				'property' => 'text-align',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'priority'    => 10,
		'settings'    => 'kindergarten_elementor_enable_footer_socail_link',
		'section'     => 'kindergarten_elementor_footer_social_media_section',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Social Media Link', 'kindergarten-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'priority'    => 10,
		'section'     => 'kindergarten_elementor_footer_social_media_section',
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Footer Social Icons', 'kindergarten-elementor' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'kindergarten-elementor' ),
		'settings'     => 'kindergarten_elementor_social_links_settings_footer',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'kindergarten-elementor' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'kindergarten-elementor' ). ' <a href="https://fontawesome.com/v6/search?o=r&m=free" target="_blank"><strong>' . esc_html__( 'View All', 'kindergarten-elementor' ) . ' </strong></a>',
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'kindergarten-elementor' ),
				'description' => esc_html__( 'Add the social icon url here.', 'kindergarten-elementor' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 20
		],
	] );

	load_template( trailingslashit( get_template_directory() ) . '/includes/logo/logo-resizer.php' );
}
