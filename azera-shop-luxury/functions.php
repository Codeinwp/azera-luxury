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


/**
 * Custom functions to retrieve data
 */
function azera_luxury_numeric_posts_nav( $pages = '', $range = 4 ) {
	$showitems = ( $range * 2 ) + 1;

	global $paged;
	if ( empty( $paged ) ) {
		$paged = 1;
	}

	if ( $pages == '' ) {
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if ( ! $pages ) {
			$pages = 1;
		}
	}

	if ( 1 != $pages ) {
		echo '<div class="row text-center"><ul class="azera-luxury-pager">';
		if ( $paged > 2 && $paged > $range + 1 && $showitems < $pages ) {
			echo "<li><a href='" . get_pagenum_link( 1 ) .
			     "'>1</a></li>";
		}
		if ( $paged > 1 && $showitems < $pages ) {
			echo "<li><a href='" . get_pagenum_link( $paged - 1 ) .
			     "'> ... </a></li>";
		}

		for ( $i = 1; $i <= $pages; $i ++ ) {
			if ( 1 != $pages && ( ! ( $i >= $paged + $range + 1 || $i <= $paged - $range - 1 ) || $pages <= $showitems ) ) {
				echo ( $paged == $i ) ? "<li class=\"active\">" . $i .
				                        "</li>" : "<li><a href='" . get_pagenum_link( $i ) .
				                                  "' class=\"inactive\">" . $i .
				                                  "</a></li>";
			}
		}

		if ( $paged < $pages && $showitems < $pages ) {
			echo "<li><a href=\"" . get_pagenum_link( $paged + 1 ) .
			     "\"> ... </a></li>";
		}
		if ( $paged < $pages - 1 && $paged + $range - 1 < $pages && $showitems < $pages ) {
			echo "<li><a href='" . get_pagenum_link( $pages ) .
			     "'>" . ($i - 1) . "</a></li>";
		}
		echo "</ul></div>\n";

	}
}