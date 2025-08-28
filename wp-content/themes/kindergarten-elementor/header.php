<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kindergarten Elementor
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta http-equiv="Content-Type" content="<?php echo esc_attr(get_bloginfo('html_type')); ?>; charset=<?php echo esc_attr(get_bloginfo('charset')); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) )
	{
		wp_body_open();
	}else{
		do_action('wp_body_open');
	}
?>
<?php if(get_theme_mod('kindergarten_elementor_preloader_hide', false )){ ?>
	<div class="loader">
		<div class="preloader">
			<div class="diamond">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
<?php } ?>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'kindergarten-elementor' ); ?></a>

<header id="site-navigation">
	<div class="top-header py-2 text-center">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-4"></div>
				<div class="col-lg-9 col-md-9 col-sm-8 col-12 align-self-center text-sm-start text-center">
					<?php if ( get_theme_mod('kindergarten_elementor_header_advertisement_text') ) : ?>
						<p class="mb-0"><i class="fa-solid fa-volume-high me-2"></i><?php echo esc_html( get_theme_mod('kindergarten_elementor_header_advertisement_text' ) ); ?></p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="middle-header pb-2">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-4 col-12 align-self-center text-center">
					<div class="logo text-lg-start text-md-start text-center mb-3 mb-md-0">
						<div class="logo-image">
							<?php the_custom_logo(); ?>
						</div>
						<div class="logo-content">
							<?php
								if ( get_theme_mod('kindergarten_elementor_display_header_title', true) == true ) :
									echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '">';
									echo esc_attr(get_bloginfo('name'));
									echo '</a>';
								endif;
								if ( get_theme_mod('kindergarten_elementor_display_header_text', false) == true ) :
									echo '<span>'. esc_attr(get_bloginfo('description')) . '</span>';
								endif;
							?>
						</div>
					</div>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-8 col-12 align-self-center text-center">
					<div class="inner-header">
						<div class="row">
							<div class="col-lg-11 col-md-10 col-6 align-self-center">
								<div class="menu-secion">
									<button class="menu-toggle my-2 py-2 px-3" aria-controls="top-menu" aria-expanded="false" type="button">
										<span aria-hidden="true"><i class="fa-solid fa-bars"></i></span>
									</button>
									<nav id="main-menu" class="close-panal">
										<?php
											wp_nav_menu( array(
												'theme_location' => 'main-menu',
												'container' => 'false'
											));
										?>
										<button class="close-menu my-2 p-2" type="button">
											<span aria-hidden="true"><i class="fa fa-times"></i></span>
										</button>
									</nav>
								</div>
							</div>
							<div class="col-lg-1 col-md-2 col-6 align-self-center text-md-start text-center ps-0">
								<div class="search-icon">
									<div class="search-cont">
										<button type="button" class="search-cont-button"><i class="fas fa-search"></i></button>
									</div>
									<div class="outer-search">
										<div class="inner-search">
											<?php get_search_form(); ?>
										</div>
										<button type="button" class="closepop search-cont-button-close" >X</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>