<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Wealth_Elite_Advisors
 */

?>

<div class="container mx-auto">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php wealthelite_advisors_post_thumbnail(); ?>

		<header class="entry-header pt-6">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title text-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title text-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) :
				?>
				<div class="entry-meta text-sm my-4">
					<?php
					wealthelite_advisors_posted_on();
					wealthelite_advisors_posted_by();
					?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-content my-10 font-normal">
			<?php
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'wealthelite-advisors' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wealthelite-advisors' ),
					'after'  => '</div>',
				)
			);
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer entry-footer flex space-x-4 text-sm">
			<?php wealthelite_advisors_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</article><!-- #post-<?php the_ID(); ?> -->
</div>
