<?php
function azera_shop_luxury_enqueue_styles() {

	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style',
	                  get_stylesheet_directory_uri() . '/style.css',
	                  array( 'parent-style' )
	);
	wp_enqueue_style( 'azera-shop-luxury-font', '//fonts.googleapis.com/css?family=Questrial|Rozha+One|Lato');

}

add_action( 'wp_enqueue_scripts', 'azera_shop_luxury_enqueue_styles', 12 );

function azera_shop_luxury_widgets_init() {

	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'azera-shop' ),
			'id'            => 'sidebar-1',
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', 'azera_shop_luxury_widgets_init', 12 );
