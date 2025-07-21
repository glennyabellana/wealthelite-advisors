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
				<div class="hero hero-content">
					<h2 class="text-title text-white xl:max-w-3xl 2xl:max-w-3xl">Work hard for your money. Let your money work harder you.</h2>
				</div>
			</div>
			<!-- Decorative shapes -->
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/decor-left.svg" alt="" class="hidden md:block absolute -bottom-[8rem] -left-[12rem] w-[20rem] lg:-bottom-[9rem] lg:-left-[14rem] lg:w-[25rem] h-auto">
		</div><!-- /.hero-container -->
	<?php endif; ?>

	<header class="page-header text-center py-[3rem] md:py-[6.25rem] lg:px-10">
		<div class="container mx-auto">
			<?php the_title( '<h1 class="entry-title text-title">', '</h1>' ); ?>
			<p class="py-[3rem] px-4 md:px-[4.5rem] text-xl sm:text-2xl">Annually, we assess your financial protection. If you’re not where you want to be. We’ll help you get back on track with our tailored services. Reach out to see how we can best support you.</p>
		</div>
	</header><!-- /.page-header -->

	<section class="services pb-[6.25rem]">
		<div class="container mx-auto relative">
			<h3 class="text-2xl text-center pb-[5rem]">We're here to assist you with the following:</h3>
			<div class="services--list flex flex-wrap justify-between">
				<div class="services--list-item md:basis-[48%] flex items-center gap-6 my-[2rem]">
					<div class="shrink-0 w-[6rem] h-[6rem] rounded-full bg-cream overflow-hidden">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon-service-1.svg" alt="services Icon" class="w-full h-full p-6">
					</div>
					<div class="basis-4/5">
						<h5 class="mb-4">Life Insurance</h5>
						<p>Eliminate uncertainty. Secure the future and well-being of your loved ones with comprehensive security, health, and financial protection.</p>
					</div>
				</div>
				<div class="services--list-item md:basis-[48%] flex items-center gap-6 my-[2rem]">
					<div class="shrink-0 w-[6rem] h-[6rem] rounded-full bg-cream overflow-hidden">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon-service-2.svg" alt="Savings Plan Icon" class="w-full h-full p-6">
					</div>
					<div class="basis-4/5">
						<h5 class="mb-4">Business Protectionn</h5>
						<p>Protect your company’s growth and financial stability in the event of business interruption or the need for operational support.</p>
					</div>
				</div>
				<div class="services--list-item md:basis-[48%] flex items-center gap-6 my-[2rem]">
					<div class="shrink-0 w-[6rem] h-[6rem] rounded-full bg-cream overflow-hidden">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon-service-3.svg" alt="Insurance Icon" class="w-full h-full p-6">
					</div>
					<div class="basis-4/5">
						<h5 class="mb-4">Critical Illness Protection</h5>
						<p>In life’s unpredictable moments, ensure your family is protected with benefits during times of crisis.</p>
					</div>
				</div>
				<div class="services--list-item md:basis-[48%] flex items-center gap-6 my-[2rem]">
					<div class="shrink-0 w-[6rem] h-[6rem] rounded-full bg-cream overflow-hidden">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon-service-4.svg" alt="Insurance Icon" class="w-full h-full p-6">
					</div>
					<div class="basis-4/5">
						<h5 class="mb-4">Mortgage Term Protection</h5>
						<p>Ease the responsibility of homeownership by safeguarding your home for the duration of your mortgage.</p>
					</div>
				</div>
				<div class="services--list-item md:basis-[48%] flex items-center gap-6 my-[2rem]">
					<div class="shrink-0 w-[6rem] h-[6rem] rounded-full bg-cream overflow-hidden">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon-service-5.svg" alt="Insurance Icon" class="w-full h-full p-6">
					</div>
					<div class="basis-4/5">
						<h5 class="mb-4">Disability Insurance</h5>
						<p>Ensure income protection in case of disability or physical limitations that prevent you from working.</p>
					</div>
				</div>
				<div class="services--list-item md:basis-[48%] flex items-center gap-6 my-[2rem]">
					<div class="shrink-0 w-[6rem] h-[6rem] rounded-full bg-cream overflow-hidden">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon-service-6.svg" alt="Insurance Icon" class="w-full h-full p-6">
					</div>
					<div class="basis-4/5">
						<h5 class="mb-4">Home/Condo Owners Insurance & Renters/Tenant Insurance</h5>
						<p>Learn how we collaborate with our partner, Insurely.</p>
					</div>
				</div>
				<div class="services--list-item md:basis-[48%] flex items-center gap-6 my-[2rem]">
					<div class="shrink-0 w-[6rem] h-[6rem] rounded-full bg-cream overflow-hidden">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon-service-7.svg" alt="Insurance Icon" class="w-full h-full p-6">
					</div>
					<div class="basis-4/5">
						<h5 class="mb-4">Travel Insurance</h5>
						<p>Travel with ease and enjoy discovering new experiences around the globe.</p>
					</div>
				</div>
				<div class="services--list-item md:basis-[48%] flex items-center gap-6 my-[2rem]">
					<div class="shrink-0 w-[6rem] h-[6rem] rounded-full bg-cream overflow-hidden">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon-savings.svg" alt="Insurance Icon" class="w-full h-full p-6">
					</div>
					<div class="basis-4/5">
						<h5 class="mb-4">Final Expense Insurance</h5>
						<p>Pre-plan your final expenses to provide your family with financial support during their most vulnerable time.</p>
					</div>
				</div>
			</div>
		</div>
	</section> <!-- /.services -->

	<section class="investment bg-primary -mx-4 pb-[6rem] px-4">
		<div class="container mx-auto relative">
			<!-- Decorative shapes -->
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/decor-shape.svg" alt="" class="hidden md:block absolute -top-[8rem] -right-[12rem] w-[20rem] lg:-top-[10rem] lg:-right-[12rem] lg:w-[25rem] xl:w-[22rem] 2xl:-right-[17rem] h-auto">
			<h2 class="text-title text-bgmain text-center py-[5rem]">Investment</h2>
			<div class="articles-container">
				<ul class="space-y-6 text-center md:text-left md:columns-2">
					<li><h5 class="text-bgmain">Investing With Experior</h5></li>
					<li><h5 class="text-bgmain">Funds in Canada</h5></li>
					<li><h5 class="text-bgmain">Retirement Planning in Canada</h5></li>
					<li><h5 class="text-bgmain">Registered Retirement Savings Plan</h5></li>
					<li><h5 class="text-bgmain">Registered Retirement Income Funds (RRIFS)</h5></li>
					<li><h5 class="text-bgmain">Tax Free Savings Accounts (TFSA)</h5></li>
				</ul>
			</div>
		</div>
	</section> <!-- /.investment -->



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
