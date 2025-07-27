<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Wealth_Elite_Advisors
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class="page-contact-us max-w-5xl mx-auto py-[6.25rem] lg:px-10 bg-[#F4F4F4] lg:-mt-[8rem] rounded-[3rem] relative z-1">
		<header class="page-header text-center">
			<div class="">
				<?php the_title( '<h1 class="entry-title text-title">', '</h1>' ); ?>
			</div>
		</header><!-- /.page-header -->
		<div class="entry-content">
			<?php the_content(); ?>
		</div><!-- .entry-content -->
	</section><!-- /.page-header -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer container mx-auto">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'wealthelite-advisors' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
