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
				<div class="hero hero-content overflow-hidden relative z-10 flex flex-col items-start justify-end p-10 md:pb-[12rem] md:pl-[6rem]"></div>
			</div>
			<!-- Decorative shapes -->
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/decor-left.svg" alt="" class="hidden md:block absolute -bottom-[8rem] -left-[12rem] w-[20rem] lg:-bottom-[10rem] lg:-left-[12rem] lg:w-[25rem] h-auto">
		</div><!-- /.hero-container -->
	<?php endif; ?>

	<header class="page-header text-center py-[6.25rem] lg:px-10">
		<div class="container mx-auto">
			<?php the_title( '<h1 class="entry-title text-title">', '</h1>' ); ?>
			<p class="py-[3rem] px-[4.5rem] text-2xl">Wealth Elite has experienced associates throughout Canada who can assist you in reaching your financial goals. You can have one of our highly trained and licensed agents meet with creating a personalized financial pathway that meets your family’s unique needs and goals. Contact us to arrange a free, no-obligation meeting with an Experior associate in your area. We’ll assist you in getting the insurance coverage you need, investments that work for you in your financial situation and so much more.</p>
		</div>
	</header><!-- /.page-header -->



	<div class="entry-content container">
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
		<footer class="entry-footer container">
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
