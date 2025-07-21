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
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="hero-container container mx-auto relative">
			<div class="container mx-auto relative h-full">
				<?php wealthelite_advisors_post_thumbnail(); ?>
				<div class="hero hero-content"></div>
			</div>
			<!-- Decorative shapes -->
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/contactus-decor.svg" alt="" class="hidden md:block absolute -bottom-[8rem] -left-[12rem] w-[20rem] lg:-bottom-[9rem] lg:-left-[16rem] lg:w-[25rem] h-auto">
		</div><!-- /.hero-container -->
	<?php endif; ?>

	<section class="page-contact-us max-w-5xl mx-auto text-center py-[6.25rem] lg:px-10 bg-[#F4F4F4] lg:-mt-[8rem] rounded-[3rem] relative z-1">
		<header class="page-header">
			<div class="">
				<?php the_title( '<h1 class="entry-title text-title">', '</h1>' ); ?>
				<p class="py-[3rem] px-[4.5rem] text-2xl">[contact form]</p>
			</div>
		</header><!-- /.page-header -->
	</section><!-- /.page-header -->



	<div class="entry-content container mx-auto">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wealthelite-advisors' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

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
