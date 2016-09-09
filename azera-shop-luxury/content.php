<?php
/**
 * @package azera-shop-luxury
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('azera-shop-luxury-post'); ?> itemtype="http://schema.org/BlogPosting" itemtype="http://schema.org/BlogPosting">

	<header class="entry-header">

			<div class="post-img-wrap">
			 	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >

					<?php 
						if ( has_post_thumbnail() ) {
					?>
						<?php 
							$image_id = get_post_thumbnail_id();
							$image_url_big = wp_get_attachment_image_src($image_id,'azera-shop-post-thumbnail-big', true);
							$image_url_mobile = wp_get_attachment_image_src($image_id,'azera-shop-post-thumbnail-mobile', true);
						?>
				 		<picture itemscope itemprop="image">
							<source media="(max-width: 600px)" srcset="<?php echo esc_url($image_url_mobile[0]); ?>">
							<img src="<?php echo esc_url($image_url_big[0]); ?>" alt="<?php the_title_attribute(); ?>">
						</picture>
					<?php
						} else {
					?>
				 		<picture itemscope itemprop="image">
							<source media="(max-width: 600px)" srcset="<?php echo azera_shop_get_file('/images/no-thumbnail-mobile.jpg');?> ">
							<img src="<?php echo azera_shop_get_file('/images/no-thumbnail.jpg'); ?>" alt="<?php the_title_attribute(); ?>">
						</picture>
					<?php } ?>

				</a>
			</div>
			
			<div class="entry-meta list-post-entry-meta">
				<span class="post-date" itemprop="datePublished" datetime="<?php the_time( 'Y-m-d\TH:i:sP' ); ?>" title="<?php the_time( _x( 'l, F j, Y, g:i a', 'post time format', 'azera-shop-luxury' ) ); ?>">
					<i class="fa fa-clock-o" aria-hidden="true"></i>
					<?php the_time( get_option('date_format') ); ?>
				</span>

				<span class="posted-in entry-terms-categories">
					<i class="fa fa-folder-open-o" aria-hidden="true"></i>
					<?php
						/* translators: used between list items, there is a space after the comma */
						$categories_list = get_the_category_list( esc_html__( ', ', 'azera-shop-luxury' ) );
						$pos = strpos($categories_list, ',');
						if ( $pos ) {
							echo substr($categories_list, 0, $pos);
						} else {
							echo $categories_list;
						}
					?>
				</span>
				<a href="<?php comments_link(); ?>" class="post-comments">
					<i class="fa fa-comment-o" aria-hidden="true"></i><?php comments_number( esc_html__('No comments','azera-shop-luxury'), esc_html__('One comment','azera-shop-luxury'), esc_html__('% comments','azera-shop-luxury') ); ?>
				</a>
				<span itemscope itemprop="author" itemtype="http://schema.org/Person" class="entry-author post-author">
					<span  itemprop="name" class="entry-author author vcard">
					<i class="fa fa-user" aria-hidden="true"></i><a itemprop="url" class="url fn n" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' )); ?>" rel="author"><?php the_author(); ?> </a>
					</span>
				</span>
			</div><!-- .entry-meta -->

		<?php the_title( sprintf( '<h1 class="azera-luxury-entry-title" itemprop="headline"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

	</header><!-- .entry-header -->
	<div itemprop="description" class="entry-content entry-summary">
		<?php
			$ismore = @strpos( $post->post_content, '<!--more-->');
			if($ismore) : the_content( sprintf( esc_html__('Read more %s &#8230;','azera-shop-luxury'), '<span class="screen-reader-text">' . esc_html__('about ', 'azera-shop-luxury') . esc_html( get_the_title() ) .'</span>' ) );
			else : the_excerpt();
			endif;
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'azera-shop-luxury' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->