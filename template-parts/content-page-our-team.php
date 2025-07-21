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
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/decor-left.svg" alt="" class="hidden md:block absolute -bottom-[8rem] -left-[12rem] w-[20rem] lg:-bottom-[9rem] lg:-left-[14rem] lg:w-[25rem] h-auto">
		</div><!-- /.hero-container -->
	<?php endif; ?>

	<header class="page-header text-center py-[3rem] md:pt-[4rem] md:pb-[6.25rem] lg:px-10">
		<div class="container mx-auto">
			<?php the_title( '<h1 class="text-title xl:pt-8 2xl:pt-0 2xl:px-[4.5rem]">', '</h1>' ); ?>
		</div>
	</header><!-- /.page-header -->

	<section class="our-team pb-[6.25rem]">
		<div class="our-team__list container mx-auto relative grid md:grid-cols-2 gap-x-4 gap-y-10">
			<?php for ($i=0; $i < 8; $i++) :?>
				<div class="our-team__item text-navlink flex flex-col lg:flex-row gap-4">
					<div class="our-team__item-display-pic flex-1 lg:basis-1/2 overflow-hidden">
						<a href="#">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/dp-team1.png" class="rounded-primary object-cover h-full w-full transition duration-500 hover:scale-125" alt="Wealth Elite Advisors Team">
						</a>
					</div>
					<div class="our-team__item-content flex-1 basis-1/2 bg-gray-light rounded-primary p-8 md:p-10 lg:py-[3rem]">
						<h5><a href="#"><?php echo esc_html( 'Girlie Abellana' ); ?></a></h5>
						<div class="our-team__meta font-normal"><span class="after:content-[''] after:w-[60%] after:h-[2px] after:bg-primary after:my-4 after:block"><?php echo esc_html( 'LIC-2022-0035043-R01' ); ?></span></div>
						<div class="our-team__address my-[2rem]">
							<p>
								Province: British Columbia,<br/>
								Ontario, Alberta, Nova<br/>
								Scotia, New Foundland,<br/>
								New Brunswick<br/>
							</p>
						</div>
						<ul class="flex gap-2">
							<li class="rounded-full overflow-hidden"><a href="#" ><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon-facebook.svg" alt="Facebook" class="bg-navlink p-3 size-[3rem] object-contain hover:bg-primary transition"></a></li>
							<li class="rounded-full overflow-hidden"><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon-x.svg" alt="X" class="bg-navlink p-3 size-[3rem] object-contain hover:bg-primary transition"></a></li>
							<li class="rounded-full overflow-hidden"><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon-instragram.svg" alt="Instragram" class="bg-navlink p-3 size-[3rem] object-contain hover:bg-primary transition"></a></li>
							<li class="rounded-full overflow-hidden"><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon-youtube.svg" alt="Youtube" class="bg-navlink p-3 size-[3rem] object-contain hover:bg-primary transition"></a></li>
						</ul>
					</div>
				</div>
			<?php endfor; ?>
		</div>
	</section><!-- /.our-team -->

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
