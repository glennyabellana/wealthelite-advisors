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
	<section class="services pb-[6.25rem]">
		<div class="container mx-auto relative">

			<?php $services_title = get_field( 'services_title' ); ?>
			<?php if ( $services_title ) : ?>
				<h3 class="text-2xl text-center pb-[5rem]"><?php echo esc_html( $services_title ); ?></h3>
			<?php endif; ?>

			<?php if ( have_rows('services_solutions_items') ) : ?>
				<div class="services__list flex flex-wrap justify-between">
					<?php while ( have_rows('services_solutions_items') ) : the_row();
						$icon  = get_sub_field('solution_icon');
						$title = get_sub_field('solution_title');
						$desc  = get_sub_field('solution_description');
					?>
						<div class="services__item md:basis-[48%] flex items-center gap-6 my-[2rem]">
							<?php if ( $icon ) : ?>
								<div class="shrink-0 w-[6rem] h-[6rem] rounded-full bg-cream overflow-hidden mx-auto flex flex-col justify-center">
									<img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" class="w-full h-full p-6">
								</div>
							<?php endif; ?>
							<div class="basis-4/5">
								<?php if ( $title ) : ?>
									<h5 class="mb-4"><?php echo esc_html( $title ); ?></h5>
								<?php endif; ?>
								<?php if ( $desc ) : ?>
									<p><?php echo wp_kses_post( $desc ); ?></p>
								<?php endif; ?>
							</div>
						</div>
					<?php endwhile; ?>

					<div class="services__item md:basis-[48%] flex items-center gap-6 my-[2rem]">
						<div class="shrink-0 w-[6rem] h-[6rem] rounded-full bg-cream overflow-hidden">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon-service-1.svg" alt="services Icon" class="w-full h-full p-6">
						</div>
						<div class="basis-4/5">
							<h5 class="mb-4">Life Insurance</h5>
							<p>Eliminate uncertainty. Secure the future and well-being of your loved ones with comprehensive security, health, and financial protection.</p>
						</div>
					</div>
					<div class="services__item md:basis-[48%] flex items-center gap-6 my-[2rem]">
						<div class="shrink-0 w-[6rem] h-[6rem] rounded-full bg-cream overflow-hidden">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon-service-2.svg" alt="Savings Plan Icon" class="w-full h-full p-6">
						</div>
						<div class="basis-4/5">
							<h5 class="mb-4">Business Protectionn</h5>
							<p>Protect your company’s growth and financial stability in the event of business interruption or the need for operational support.</p>
						</div>
					</div>
					<div class="services__item md:basis-[48%] flex items-center gap-6 my-[2rem]">
						<div class="shrink-0 w-[6rem] h-[6rem] rounded-full bg-cream overflow-hidden">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon-service-3.svg" alt="Insurance Icon" class="w-full h-full p-6">
						</div>
						<div class="basis-4/5">
							<h5 class="mb-4">Critical Illness Protection</h5>
							<p>In life’s unpredictable moments, ensure your family is protected with benefits during times of crisis.</p>
						</div>
					</div>
					<div class="services__item md:basis-[48%] flex items-center gap-6 my-[2rem]">
						<div class="shrink-0 w-[6rem] h-[6rem] rounded-full bg-cream overflow-hidden">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon-service-4.svg" alt="Insurance Icon" class="w-full h-full p-6">
						</div>
						<div class="basis-4/5">
							<h5 class="mb-4">Mortgage Term Protection</h5>
							<p>Ease the responsibility of homeownership by safeguarding your home for the duration of your mortgage.</p>
						</div>
					</div>
					<div class="services__item md:basis-[48%] flex items-center gap-6 my-[2rem]">
						<div class="shrink-0 w-[6rem] h-[6rem] rounded-full bg-cream overflow-hidden">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon-service-5.svg" alt="Insurance Icon" class="w-full h-full p-6">
						</div>
						<div class="basis-4/5">
							<h5 class="mb-4">Disability Insurance</h5>
							<p>Ensure income protection in case of disability or physical limitations that prevent you from working.</p>
						</div>
					</div>
					<div class="services__item md:basis-[48%] flex items-center gap-6 my-[2rem]">
						<div class="shrink-0 w-[6rem] h-[6rem] rounded-full bg-cream overflow-hidden">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon-service-6.svg" alt="Insurance Icon" class="w-full h-full p-6">
						</div>
						<div class="basis-4/5">
							<h5 class="mb-4">Home/Condo Owners Insurance & Renters/Tenant Insurance</h5>
							<p>Learn how we collaborate with our partner, Insurely.</p>
						</div>
					</div>
					<div class="services__item md:basis-[48%] flex items-center gap-6 my-[2rem]">
						<div class="shrink-0 w-[6rem] h-[6rem] rounded-full bg-cream overflow-hidden">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon-service-7.svg" alt="Insurance Icon" class="w-full h-full p-6">
						</div>
						<div class="basis-4/5">
							<h5 class="mb-4">Travel Insurance</h5>
							<p>Travel with ease and enjoy discovering new experiences around the globe.</p>
						</div>
					</div>
					<div class="services__item md:basis-[48%] flex items-center gap-6 my-[2rem]">
						<div class="shrink-0 w-[6rem] h-[6rem] rounded-full bg-cream overflow-hidden">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon-savings.svg" alt="Insurance Icon" class="w-full h-full p-6">
						</div>
						<div class="basis-4/5">
							<h5 class="mb-4">Final Expense Insurance</h5>
							<p>Pre-plan your final expenses to provide your family with financial support during their most vulnerable time.</p>
						</div>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</section> <!-- /.services -->

	<section class="investment bg-primary -mx-4 pb-[6rem] px-4">
		<div class="container mx-auto relative">
			<!-- Decorative shapes -->
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/decor-shape.svg" alt="" class="hidden md:block absolute -top-[8rem] -right-[12rem] w-[20rem] lg:-top-[10rem] lg:-right-[12rem] lg:w-[25rem] xl:w-[22rem] 2xl:-right-[17rem] h-auto">

			<?php $investment_section_label = get_field('investment_section_label') ?>
			<?php if ( $investment_section_label ) : ?>
				<h2 class="text-title text-bgmain text-center py-[5rem]"><?php echo esc_html( $investment_section_label ); ?></h2>
			<?php endif; ?>

			<div class="articles-container">
				<?php if ( have_rows('investments') ) : ?>
					<ul class="[&_h5]:text-bgmain text-center md:text-left grid gap-y-4 md:grid-cols-2 md:gap-y-6 md:gap-x-16 ">
						<?php while ( have_rows('investments') ) : the_row();
							$title = get_sub_field('investment_name');
							?>
							<?php if ( $title ) : ?>
								<li><h5><?php echo esc_html( $title ); ?></h5></li>
							<?php endif; ?>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div>
		</div>
	</section> <!-- /.investment -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer container mx-auto my-6">
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
