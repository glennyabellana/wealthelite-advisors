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

	<header class="page-header text-center py-[3rem] md:py-[6.25rem] lg:px-10">
		<div class="container mx-auto">
			<?php the_title( '<h1 class="text-title xl:pt-8 2xl:pt-0 2xl:px-[4.5rem]">', '</h1>' ); ?>
			<p class="py-[3rem] px-4 md:px-[4.5rem] text-xl sm:text-2xl">At Wealth Elite Advisors, we live by the golden rule: treating others with the utmost respect and integrity. As elite Life Insurance & Investments Brokers, we are committed to delivering personalized and transparent advice, always putting your best interests first.</p>
		</div>
	</header><!-- /.page-header -->

	<section class="our-mission pb-[6.25rem]">
		<div class="container mx-auto relative">
			<div class="flex flex-col sm:flex-row gap-6 lg:gap-10">
				<div class="flex-1 order-2 md:order-1 basis-3/5 bg-gray-light rounded-primary p-8 md:p-10 lg:p-[4rem]">
					<h2 class="text-title mb-4"><?php echo esc_html( 'Our Mission' ); ?></h2>
					<div class="our-mission__content">
						<p class="mb-6">Our mission is to build and enhance your wealth with tailored, strategic solutions. We focus on innovative approaches that align with your goals, using our expertise to craft strategies that drive lasting success and exceed your expectations.</p>
					</div>
					<a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="mt-6 btn-primary">
						Speak with an advisor
					</a>
				</div>
				<div class="flex-1 hidden sm:block order-1 md:order-2 basis-2/5">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/about-our-mission-img.png" class="rounded-primary object-cover min-h-[16rem] h-full w-full" alt="Wealth Elite Advisors Hero Background">
				</div>
			</div>
		</div>
	</section><!-- /.our-mission -->

	<section class="why-us relative pb-[4rem] lg:pb-[6.25rem] before:content-[''] -mx-4 px-4 before:absolute before:bottom-0 before:left-0 before:bg-primary before:h-full before:w-full before:max-h-[15rem] before:md:max-h-[24rem]">
		<div class="container mx-auto relative">
			<div class="flex flex-col sm:flex-row gap-6 lg:gap-10">
				<div class="flex-1 hidden sm:block basis-2/5">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/about-why-choose-us-img.png" class="rounded-primary object-cover min-h-[16rem] h-full w-full" alt="Wealth Elite Advisors Hero Background">
				</div>
				<div class="flex-1 basis-3/5 bg-gray-light rounded-primary p-8 md:p-10 lg:p-[4rem]">
					<h2 class="text-title mb-4"><?php echo esc_html( 'Why Choose Us' ); ?></h2>
					<div class="our-mission__content">
						<p class="mb-6">We understand that every financial journey is unique. Our dedicated team combines deep industry knowledge with a genuine commitment to your success, providing exceptional service and guiding you every step of the way. At Wealth Elite, we are here to turn your financial aspirations into reality.</p>
					</div>
				</div>
			</div>
			<!-- Decorative shapes -->
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/decor-right.svg" alt="" class="hidden md:block absolute -top-[11rem] -right-[11rem] lg:-right-[8rem] w-[20rem] lg:-top-[12.5rem] 2xl:-right-[10rem] h-auto">
		</div>
	</section><!-- /.why-us -->

	<section class="core-values text-center py-[3rem] md:py-[6.25rem] lg:px-10">
		<div class="container px-4 md:max-w-5xl xl:max-w-7xl mx-auto">
			<h2 class="text-title text-primary pb-[3rem] xl:pt-8 2xl:pt-0 2xl:px-[4.5rem]"><?php echo esc_html( 'Core Values' ); ?></h2>
			<p>Core values are the fundamental beliefs of a person or organization. These guiding principles dictate behavior and can help people understand the difference between right and wrong. Core values also help companies to determine if they are on the right path and fulfilling their goals by creating an unwavering guide.</p>
			<p><strong>When choosing a company to work for or expert to help you, it is important your core values align.</strong></p>
			<p>If your gift is <b>serving others</b>, serve them well. If you are a teacher, teach well. If your gift is to encourage others, be encouraging. If it is giving, give generously. If you have leadership ability, take the responsibility seriously.
			And if you have a gift for showing kindness to others, do it gladly.</p>
		</div>
	</section><!-- /.core-values -->



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
