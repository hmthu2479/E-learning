<?php
//about theme info
add_action( 'admin_menu', 'kindergarten_elementor_gettingstarted' );
function kindergarten_elementor_gettingstarted() {
	add_theme_page( esc_html__('Kindergarten Elementor', 'kindergarten-elementor'), esc_html__('Kindergarten Elementor', 'kindergarten-elementor'), 'edit_theme_options', 'kindergarten_elementor_about', 'kindergarten_elementor_mostrar_guide');
}

// Add a Custom CSS file to WP Admin Area
function kindergarten_elementor_admin_theme_style() {
	wp_enqueue_style('kindergarten-elementor-custom-admin-style', esc_url(get_template_directory_uri()) . '/includes/getstart/getstart.css');
	wp_enqueue_script('kindergarten-elementor-tabs', esc_url(get_template_directory_uri()) . '/includes/getstart/js/tab.js');
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri().'/assets/css/fontawesome-all.css' );
}
add_action('admin_enqueue_scripts', 'kindergarten_elementor_admin_theme_style');

// Changelog
if ( ! defined( 'KINDERGARTEN_ELEMENTOR_CHANGELOG_URL' ) ) {
    define( 'KINDERGARTEN_ELEMENTOR_CHANGELOG_URL', get_template_directory() . '/readme.txt' );
}

function kindergarten_elementor_changelog_screen() {	
	global $wp_filesystem;
	$kindergarten_elementor_changelog_file = apply_filters( 'kindergarten_elementor_changelog_file', KINDERGARTEN_ELEMENTOR_CHANGELOG_URL );
	if ( $kindergarten_elementor_changelog_file && is_readable( $kindergarten_elementor_changelog_file ) ) {
		WP_Filesystem();
		$kindergarten_elementor_changelog = $wp_filesystem->get_contents( $kindergarten_elementor_changelog_file );
		$kindergarten_elementor_changelog_list = kindergarten_elementor_parse_changelog( $kindergarten_elementor_changelog );
		echo wp_kses_post( $kindergarten_elementor_changelog_list );
	}
}

function kindergarten_elementor_parse_changelog( $kindergarten_elementor_content ) {
	$kindergarten_elementor_content = explode ( '== ', $kindergarten_elementor_content );
	$kindergarten_elementor_changelog_isolated = '';
	foreach ( $kindergarten_elementor_content as $key => $kindergarten_elementor_value ) {
		if (strpos( $kindergarten_elementor_value, 'Changelog ==') === 0) {
	    	$kindergarten_elementor_changelog_isolated = str_replace( 'Changelog ==', '', $kindergarten_elementor_value );
	    }
	}
	$kindergarten_elementor_changelog_array = explode( '= ', $kindergarten_elementor_changelog_isolated );
	unset( $kindergarten_elementor_changelog_array[0] );
	$kindergarten_elementor_changelog = '<div class="changelog">';
	foreach ( $kindergarten_elementor_changelog_array as $kindergarten_elementor_value) {
		$kindergarten_elementor_value = preg_replace( '/\n+/', '</span><span>', $kindergarten_elementor_value );
		$kindergarten_elementor_value = '<div class="block"><span class="heading">= ' . $kindergarten_elementor_value . '</span></div><hr>';
		$kindergarten_elementor_changelog .= str_replace( '<span></span>', '', $kindergarten_elementor_value );
	}
	$kindergarten_elementor_changelog .= '</div>';
	return wp_kses_post( $kindergarten_elementor_changelog );
}

//guidline for about theme
function kindergarten_elementor_mostrar_guide() { 
	//custom function about theme customizer
	$kindergarten_elementor_return = add_query_arg( array()) ;
	$kindergarten_elementor_theme = wp_get_theme( 'kindergarten-elementor' );
?>

    <div class="top-head">
		<div class="top-title">
			<h2><?php esc_html_e( 'Kindergarten Elementor', 'kindergarten-elementor' ); ?></h2>
		</div>
		<div class="top-right">
			<span class="version"><?php esc_html_e( 'Version', 'kindergarten-elementor' ); ?>: <?php echo esc_html($kindergarten_elementor_theme['Version']);?></span>
		</div>
    </div>

    <div class="inner-cont">
	    <div class="tab-sec">
	    	<div class="tab">
				<button class="tablinks" onclick="kindergarten_elementor_open_tab(event, 'wpelemento_importer_editor')"><?php esc_html_e( 'Setup With Elementor', 'kindergarten-elementor' ); ?></button>
				<button class="tablinks" onclick="kindergarten_elementor_open_tab(event, 'setup_customizer')"><?php esc_html_e( 'Setup With Customizer', 'kindergarten-elementor' ); ?></button>
				<button class="tablinks" onclick="kindergarten_elementor_open_tab(event, 'changelog_cont')"><?php esc_html_e( 'Changelog', 'kindergarten-elementor' ); ?></button>
			</div>

			<div id="wpelemento_importer_editor" class="tabcontent open">
				<?php if(!class_exists('WPElemento_Importer_ThemeWhizzie')){
					$kindergarten_elementor_plugin_ins = Kindergarten_Elementor_Plugin_Activation_WPElemento_Importer::get_instance();
					$kindergarten_elementor_actions = $kindergarten_elementor_plugin_ins->kindergarten_elementor_recommended_actions;
					?>
					<div class="kindergarten-elementor-recommended-plugins ">
						<div class="kindergarten-elementor-action-list">
							<?php if ($kindergarten_elementor_actions): foreach ($kindergarten_elementor_actions as $kindergarten_elementor_key => $kindergarten_elementor_actionValue): ?>
									<div class="kindergarten-elementor-action" id="<?php echo esc_attr($kindergarten_elementor_actionValue['id']);?>">
										<div class="action-inner plugin-activation-redirect">
											<h3 class="action-title"><?php echo esc_html($kindergarten_elementor_actionValue['title']); ?></h3>
											<div class="action-desc"><?php echo esc_html($kindergarten_elementor_actionValue['desc']); ?></div>
											<?php echo wp_kses_post($kindergarten_elementor_actionValue['link']); ?>
										</div>
									</div>
								<?php endforeach;
							endif; ?>
						</div>
					</div>
				<?php }else{ ?>
					<div class="tab-outer-box">
						<h3><?php esc_html_e('Welcome to WPElemento Theme!', 'kindergarten-elementor'); ?></h3>
						<p><?php esc_html_e('Click on the quick start button to import the demo.', 'kindergarten-elementor'); ?></p>
						<div class="info-link">
							<a  href="<?php echo esc_url( admin_url('admin.php?page=wpelementoimporter-wizard') ); ?>"><?php esc_html_e('Quick Start', 'kindergarten-elementor'); ?></a>
						</div>
					</div>
				<?php } ?>
			</div>

			<div id="setup_customizer" class="tabcontent">
				<div class="tab-outer-box">
				  	<div class="lite-theme-inner">
						<h3><?php esc_html_e('Theme Customizer', 'kindergarten-elementor'); ?></h3>
						<p><?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'kindergarten-elementor'); ?></p>
						<div class="info-link">
							<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'kindergarten-elementor'); ?></a>
						</div>
						<hr>
						<h3><?php esc_html_e('Help Docs', 'kindergarten-elementor'); ?></h3>
						<p><?php esc_html_e('The complete procedure to configure and manage a WordPress Website from the beginning is shown in this documentation .', 'kindergarten-elementor'); ?></p>
						<div class="info-link">
							<a href="<?php echo esc_url( KINDERGARTEN_ELEMENTOR_FREE_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'kindergarten-elementor'); ?></a>
						</div>
						<hr>
						<h3><?php esc_html_e('Need Support?', 'kindergarten-elementor'); ?></h3>
						<p><?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'kindergarten-elementor'); ?></p>
						<div class="info-link">
							<a href="<?php echo esc_url( KINDERGARTEN_ELEMENTOR_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'kindergarten-elementor'); ?></a>
						</div>
						<hr>
						<h3><?php esc_html_e('Reviews & Testimonials', 'kindergarten-elementor'); ?></h3>
						<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'kindergarten-elementor'); ?></p>
						<div class="info-link">
							<a href="<?php echo esc_url( KINDERGARTEN_ELEMENTOR_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'kindergarten-elementor'); ?></a>
						</div>
						<hr>
						<div class="link-customizer">
							<h3><?php esc_html_e( 'Link to customizer', 'kindergarten-elementor' ); ?></h3>
							<div class="first-row">
								<div class="row-box">
									<div class="row-box1">
										<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','kindergarten-elementor'); ?></a>
									</div>
									<div class="row-box2">
										<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','kindergarten-elementor'); ?></a>
									</div>
								</div>
							
								<div class="row-box">
									<div class="row-box1">
										<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=header_image') ); ?>" target="_blank"><?php esc_html_e('Header Image','kindergarten-elementor'); ?></a>
									</div>
									<div class="row-box2">
										<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','kindergarten-elementor'); ?></a>
									</div>
								</div>
							</div>
						</div>
				  	</div>
				</div>
			</div>

			<div id="changelog_cont" class="tabcontent">
				<div class="tab-outer-box">
					<?php kindergarten_elementor_changelog_screen(); ?>
				</div>
			</div>			
		</div>

		<div class="inner-side-content">
			<h2><?php esc_html_e('Premium Theme', 'kindergarten-elementor'); ?></h2>
			<div class="tab-outer-box">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png" alt="" />
				<h3><?php esc_html_e('Kindergarten Elementor WordPress Theme', 'kindergarten-elementor'); ?></h3>
				<div class="iner-sidebar-pro-btn">
					<span class="premium-btn"><a href="<?php echo esc_url( KINDERGARTEN_ELEMENTOR_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Premium', 'kindergarten-elementor'); ?></a>
					</span>
					<span class="demo-btn"><a href="<?php echo esc_url( KINDERGARTEN_ELEMENTOR_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'kindergarten-elementor'); ?></a>
					</span>
					<span class="doc-btn"><a href="<?php echo esc_url( KINDERGARTEN_ELEMENTOR_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e('Theme Bundle', 'kindergarten-elementor'); ?></a>
					</span>
				</div>
				<hr>
				<div class="premium-coupon">
					<div class="premium-features">
						<h3><?php esc_html_e('premium Features', 'kindergarten-elementor'); ?></h3>
						<ul>
							<li><?php esc_html_e( 'Multilingual', 'kindergarten-elementor' ); ?></li>
							<li><?php esc_html_e( 'Drag and drop features', 'kindergarten-elementor' ); ?></li>
							<li><?php esc_html_e( 'Zero Coding Required', 'kindergarten-elementor' ); ?></li>
							<li><?php esc_html_e( 'Mobile Friendly Layout', 'kindergarten-elementor' ); ?></li>
							<li><?php esc_html_e( 'Responsive Layout', 'kindergarten-elementor' ); ?></li>
							<li><?php esc_html_e( 'Unique Designs', 'kindergarten-elementor' ); ?></li>
						</ul>
					</div>
					<div class="coupon-box">
						<h3><?php esc_html_e('Use Coupon Code', 'kindergarten-elementor'); ?></h3>
						<a class="coupon-btn" href="<?php echo esc_url( KINDERGARTEN_ELEMENTOR_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('UPGRADE NOW', 'kindergarten-elementor'); ?></a>
						<div class="coupon-container">
							<h3><?php esc_html_e( 'elemento20', 'kindergarten-elementor' ); ?></h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php } ?>