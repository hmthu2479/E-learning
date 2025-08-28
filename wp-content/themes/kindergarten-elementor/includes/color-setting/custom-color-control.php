<?php

  $kindergarten_elementor_theme_custom_setting_css = '';

	// Global Color
	$kindergarten_elementor_theme_first_color = get_theme_mod('kindergarten_elementor_theme_first_color', '#FF7700');
    $kindergarten_elementor_theme_second_color = get_theme_mod('kindergarten_elementor_theme_second_color', '#5422AA');

	$kindergarten_elementor_theme_custom_setting_css .=':root {';
		$kindergarten_elementor_theme_custom_setting_css .='--primary-theme-color: '.esc_attr($kindergarten_elementor_theme_first_color ).'!important;';
        $kindergarten_elementor_theme_custom_setting_css .='--secondary-theme-color: '.esc_attr($kindergarten_elementor_theme_second_color).'!important;';
	$kindergarten_elementor_theme_custom_setting_css .='}';

	// Scroll to top alignment
	$kindergarten_elementor_scroll_alignment = get_theme_mod('kindergarten_elementor_scroll_alignment', 'right');

    if($kindergarten_elementor_scroll_alignment == 'right'){
        $kindergarten_elementor_theme_custom_setting_css .='.scroll-up{';
            $kindergarten_elementor_theme_custom_setting_css .='right: 30px;!important;';
			$kindergarten_elementor_theme_custom_setting_css .='left: auto;!important;';
        $kindergarten_elementor_theme_custom_setting_css .='}';
    }else if($kindergarten_elementor_scroll_alignment == 'center'){
        $kindergarten_elementor_theme_custom_setting_css .='.scroll-up{';
            $kindergarten_elementor_theme_custom_setting_css .='left: calc(50% - 10px) !important;';
        $kindergarten_elementor_theme_custom_setting_css .='}';
    }else if($kindergarten_elementor_scroll_alignment == 'left'){
        $kindergarten_elementor_theme_custom_setting_css .='.scroll-up{';
            $kindergarten_elementor_theme_custom_setting_css .='left: 30px;!important;';
			$kindergarten_elementor_theme_custom_setting_css .='right: auto;!important;';
        $kindergarten_elementor_theme_custom_setting_css .='}';
    }

	// Related Product

	$kindergarten_elementor_show_related_product = get_theme_mod('kindergarten_elementor_show_related_product', true );

	if($kindergarten_elementor_show_related_product != true){
		$kindergarten_elementor_theme_custom_setting_css .='.related.products{';
			$kindergarten_elementor_theme_custom_setting_css .='display: none;';
		$kindergarten_elementor_theme_custom_setting_css .='}';
	}    