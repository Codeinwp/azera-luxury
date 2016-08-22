<?php

function azera_shop_luxury_enqueue_styles() {

	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style',
	                  get_stylesheet_directory_uri() . '/style.css',
	                  array( 'parent-style' )
	);
	wp_enqueue_style( 'azera-shop-luxury-font', '//fonts.googleapis.com/css?family=Questrial|Rozha+One|Lato' );

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


function azera_luxury_override_defaults() {
	set_theme_mod( 'azera_shop_header_title', 'Quisque convallis ex adum at potumu et nulla tristitue.' );
	set_theme_mod( 'azera_shop_header_subtitle', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum porta diam facilisis mauris tristique commodo. Maecenas egestas quam in nulla vestibulum eleid. Duis blandit quis lectus eget at umnas item. ' );
	set_theme_mod( 'azera_shop_blog_header_image', azera_shop_get_file( '/assets/img/background-images/parallax-img/single-post.jpg' ) );
	set_theme_mod( 'azera_shop_our_team_background', azera_shop_get_file( '/assets/img/background-images/parallax-img/team-img.jpg' ) );
	set_theme_mod( 'header_image', azera_shop_get_file( '/assets/img/background-images/background.jpg' ) );
	set_theme_mod( 'azera_shop_blog_header_title', 'Blog' );
	set_theme_mod( 'azera_shop_ribbon_background', azera_shop_get_file( '/assets/img/background-images/parallax-img/parallax-img1.jpg' ) );
	set_theme_mod( 'azera_shop_logos_content', json_encode(
		array(
			array(
				"image_url" => azera_shop_get_file( '/assets/img/companies/1.png' ),
				"link"      => "#",
				"id"        => "azera_shop_56d450842cb37"
			),
			array(
				"image_url" => azera_shop_get_file( '/assets/img/companies/2.png' ),
				"link"      => "#",
				"id"        => "azera_shop_56d6b175454b8"
			),
			array(
				"image_url" => azera_shop_get_file( '/assets/img/companies/3.png' ),
				"link"      => "#",
				"id"        => "azera_shop_56d6b17a454b9"
			),
			array(
				"image_url" => azera_shop_get_file( '/assets/img/companies/4.png' ),
				"link"      => "#",
				"id"        => "azera_shop_56d6b17b454ba"
			),
			array(
				"image_url" => azera_shop_get_file( '/assets/img/companies/5.png' ),
				"link"      => "#",
				"id"        => "azera_shop_56d6b17d454bb"
			)
		)
	) );
	set_theme_mod( 'azera_shop_services_content', json_encode( array(
		                                                           array(
			                                                           'choice'     => 'azera_shop_icon',
			                                                           'icon_value' => 'fa-diamond',
			                                                           'title'      => esc_html__( 'Premiul Quality', 'azera-shop-companion' ),
			                                                           'text'       => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum porta diam facilisis mauris tristique commodo. Maecenas egestas quam in nulla vestibulum eleid. Duis blandit quis lectus eget.', 'azera-shop-companion' )
		                                                           ),
		                                                           array(
			                                                           'choice'     => 'azera_shop_icon',
			                                                           'icon_value' => 'fa-clock-o',
			                                                           'title'      => esc_html__( 'Fast Delivery', 'azera-shop-companion' ),
			                                                           'text'       => esc_html__( 'Donec nec elit ac mi molestie maximus upto id a diam. Aenean metus eros, imperdiet in purus a, dignissim euismod libero. Aenean massa metus, imperdiet eget dignissim vitae, egestas id ipsum.', 'azera-shop-companion' )
		                                                           ),
		                                                           array(
			                                                           'choice'     => 'azera_shop_icon',
			                                                           'icon_value' => 'fa-briefcase',
			                                                           'title'      => esc_html__( 'Custom Work', 'azera-shop-companion' ),
			                                                           'text'       => esc_html__( 'Nunc a pretium risus, vel gravida augue. Integer vulputate, mi in tempor consequat, ex ligula consectetur sapien, eu facilisis lacus massa vel ex. Atus ad lubim ret potis ist asum al ficus dominus tereum. ', 'azera-shop-companion' )
		                                                           )
	                                                           ) ) );
	set_theme_mod( 'azera_shop_team_content', json_encode(
		                                        array(
			                                        array(
				                                        'image_url' => azera_shop_get_file( '/assets/img/team/1.jpg' ),
				                                        'title'     => esc_html__( 'Albert Jacobs', 'azera-shop-companion' ),
				                                        'subtitle'  => esc_html__( 'Founder & CEO', 'azera-shop-companion' )
			                                        ),
			                                        array(
				                                        'image_url' => azera_shop_get_file( '/assets/img/team/2.jpg' ),
				                                        'title'     => esc_html__( 'Tonya Garcia', 'azera-shop-companion' ),
				                                        'subtitle'  => esc_html__( 'Account Manager', 'azera-shop-companion' )
			                                        ),
			                                        array(
				                                        'image_url' => azera_shop_get_file( '/assets/img/team/3.jpg' ),
				                                        'title'     => esc_html__( 'Linda Guthrie', 'azera-shop-companion' ),
				                                        'subtitle'  => esc_html__( 'Business Development', 'azera-shop-companion' )
			                                        )
		                                        )
	                                        )
	);

	set_theme_mod( 'azera_shop_testimonials_content', json_encode(
		array(
			array(
				'image_url' => azera_shop_get_file( '/assets/img/clients/1.jpg' ),
				'title'     => esc_html__( 'John Smith', 'azera-shop-companion' ),
				'subtitle'  => esc_html__( 'Lorem ipsum', 'azera-shop-companion' ),
				'text'      => esc_html__( 'Vestibulum porta diam facilisis mauris tristique  ad utam er matus ani. commodo. Maecenas egestas quam in nulla vestibulum eleid. Duisamus blandit quis lectus eget.', 'azera-shop-companion' )
			),
			array(
				'image_url' => azera_shop_get_file( '/assets/img/clients/2.jpg' ),
				'title'     => esc_html__( 'Ana James', 'azera-shop-companion' ),
				'subtitle'  => esc_html__( 'Lorem ipsum', 'azera-shop-companion' ),
				'text'      => esc_html__( 'Fusce pellentesque felis et ornare maximus. Pellentesque vel auctor jArmadales ex, ut luctus neque saat ullamcorper, sollicitudin lacus in, varius risus. ', 'azera-shop-companion' )
			),
			array(
				'image_url' => azera_shop_get_file( '/assets/img/clients/3.jpg' ),
				'title'     => esc_html__( 'Diane Elle', 'azera-shop-companion' ),
				'subtitle'  => esc_html__( 'Lorem ipsum', 'azera-shop-companion' ),
				'text'      => esc_html__( 'Morbi erat mi, mattis sit amet nisl non, sollicitudin rh ut estim oncus sapien. Integer scelerisque ipsum sem, nec sodales arcu mattis vitae. Morbi quis euismod massa. ', 'azera-shop-companion' )
			)
		)
	) );
}

add_action( 'after_switch_theme', 'azera_luxury_override_defaults' );
/**
 * Custom functions to retrieve data
 */

function azera_luxury_numeric_posts_nav() {

	if ( is_singular() ) {
		return;
	}

	global $wp_query;

	/**
	 * Stop execution if there`s only 1 page
	 */
	if ( $wp_query->max_num_pages <= 1 ) {
		return;
	}

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/**
	 * Add current page to the array
	 */
	if ( $paged >= 1 ) {
		$links[] = $paged;
	}

	/**
	 * Add the pages around the current page to the array
	 */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<div class="row text-center"><ul class="azera-luxury-pager">' . "\n";

	/**
	 * Previous Post Link
	 */
	if ( get_previous_posts_link() ) {
		printf( '<li>%s</li>' . "\n", get_previous_posts_link( '<span class="fa fa-angle-left"></span>' ) );
	}

	/**
	 * Link to first page, plus ellipses if necessary
	 */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) ) {
			echo '<li>…</li>';
		}
	}

	/**
	 * Link to current page, plus 2 pages in either direction if necessary
	 */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**
	 * Link to last page, plus ellipses if necessary
	 */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) ) {
			echo '<li>…</li>' . "\n";
		}

		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**
	 * Next Post Link
	 */
	if ( get_next_posts_link() ) {
		printf( '<li>%s</li>' . "\n", get_next_posts_link( '<span class="fa fa-angle-right"></span>' ) );
	}

	echo '</ul></div>' . "\n";

}

