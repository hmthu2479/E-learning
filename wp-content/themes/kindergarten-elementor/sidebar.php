<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kindergarten Elementor
 */
?>

<div class="sidebar-area">
  <?php if ( ! dynamic_sidebar( 'kindergarten-elementor-sidebar' ) ) : ?>
    <div role="complementary" aria-label="<?php echo esc_attr__( 'sidebar1', 'kindergarten-elementor' ); ?>" id="Search" class="sidebar-widget">
      <h4 class="title" ><?php esc_html_e( 'Search', 'kindergarten-elementor' ); ?></h4>
      <?php get_search_form(); ?>
    </div>
    <div role="complementary" aria-label="<?php echo esc_attr__( 'sidebar2', 'kindergarten-elementor' ); ?>" id="archives" class="sidebar-widget">
      <h4 class="title" ><?php esc_html_e( 'Archives', 'kindergarten-elementor' ); ?></h4>
      <ul>
          <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
      </ul>
    </div>
    <div role="complementary" aria-label="<?php echo esc_attr__( 'sidebar3', 'kindergarten-elementor' ); ?>" id="meta" class="sidebar-widget">
      <h4 class="title"><?php esc_html_e( 'Meta', 'kindergarten-elementor' ); ?></h4>
      <ul>
        <?php wp_register(); ?>
        <li><?php wp_loginout(); ?></li>
        <?php wp_meta(); ?>
      </ul>
    </div>
    <div role="complementary" aria-label="<?php echo esc_attr__( 'sidebar4', 'kindergarten-elementor' ); ?>" id="tag-cloud" class="sidebar-widget">
      <h4 class="title" ><?php esc_html_e( 'Tag Cloud', 'kindergarten-elementor' ); ?></h4>
      <?php wp_tag_cloud(); ?>
    </div>
  <?php endif; // end sidebar widget area ?>
</div>