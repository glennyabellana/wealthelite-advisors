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
	<div class="hero-container container mx-auto relative">
		<div class="container mx-auto relative min-h-[300px] max-h-[700px] h-[calc(100vh-100px)]">
			<div class="hero-banner overflow-hidden absolute rounded-[3.125rem] h-full w-full">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/home-hero-banner.png" class="bg-cover bg-center object-cover h-full w-full" alt="Wealth Elite Advisors Hero Background">
			</div>

			<!-- <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/decor-right.svg"
			alt=""
			class="hidden md:block absolute bottom-0 -right-16 w-40 h-auto transform -rotate-6"> -->

			<!-- Front Page Hero Content -->

			<div class="hero hero-content relative z-10 px-8 lg:px-12 h-full w-full absolute flex flex-col items-center justify-center text-center">
				<h1 class="text-4xl sm:text-5xl font-medium text-white mb-6"><?php the_title(); ?></h1>
				<a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>"
					class="inline-block opacity-90 bg-secondary hover:opacity-100 hover:text-white visited:text-white text-white font-medium py-3 px-8 rounded-full transition">
					Talk to an Advisor
				</a>
			</div>
		</div>
		<!-- Decorative shapes -->
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/decor-left.svg" alt="" class="hidden md:block absolute -bottom-[12rem] -left-[20rem] w-[30rem] h-auto">
	</div><!-- #main -->
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php wealthelite_advisors_post_thumbnail(); ?>

	<div class="entry-content">
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
		<footer class="entry-footer">
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
