<?php if(get_theme_mod('kindergarten_elementor_show_pagination', true )== true): ?>
	<?php
		the_posts_pagination( array(
			'prev_text' => esc_html__( 'Previous page', 'kindergarten-elementor' ),
			'next_text' => esc_html__( 'Next page', 'kindergarten-elementor' ),
		) );
	?>		
<?php endif; ?>