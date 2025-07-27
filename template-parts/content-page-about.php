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

	<section class="our-mission pb-[6.25rem]">
		<div class="container mx-auto relative">
			<div class="flex flex-col sm:flex-row gap-6 lg:gap-10">
				<?php $mission_copy = get_field( 'our_mission_copy' ); ?>
				<?php if ( $mission_copy ) : ?>
					<div class="flex flex-col flex-1 order-2 md:order-1 basis-3/5 bg-gray-light rounded-primary p-8 md:p-10 lg:px-[5rem] lg:py-[6rem]
								[&_h2]:text-title
								[&_h2]:mb-6
								[&_p]:mb-6">

						<div class="our-mission__content">
							<?php echo wp_kses_post($mission_copy); ?>
						</div>

						<?php if ( have_rows( 'our_mission_cta_button' ) ) : ?>
							<?php while ( have_rows('our_mission_cta_button') ) : the_row();
								$mission_cta_text = get_sub_field( 'our_mission_cta_text' );
								$mission_cta_link = get_sub_field( 'our_mission_cta_link' );
								if ( !empty( $mission_cta_link ) && ! empty( $mission_cta_text ) ) : ?>
								<div class="mt-auto mb-6">
									<a href="<?php echo esc_url( $mission_cta_link ); ?>" class="btn-primary mt-6 inline-block">
										<?php echo esc_html( $mission_cta_text ); ?>
									</a>
								</div>
								<?php endif;
							endwhile; ?>
						<?php endif; ?>
					</div>
				<?php endif; ?>

				<?php $mission_img = get_field( 'our_mission_featured_image' ); ?>
				<?php if ( $mission_img ) : ?>
					<div class="flex-1 hidden sm:block order-1 md:order-2 basis-2/5">
						<?php echo wp_get_attachment_image( $mission_img, 'full', false, array( "class" => "rounded-primary object-cover min-h-[16rem] h-full w-full" ) ); ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</section><!-- /.our-mission -->

	<section class="why-us relative pb-[4rem] lg:pb-[6.25rem] before:content-[''] -mx-4 px-4 before:absolute before:bottom-0 before:left-0 before:bg-primary before:h-full before:w-full before:max-h-[15rem] before:md:max-h-[24rem]">
		<div class="container mx-auto relative">
			<div class="flex flex-col sm:flex-row gap-6 lg:gap-10">
				<?php $why_us_img = get_field( 'why_us_featured_image' ); ?>
				<?php if ( $why_us_img ) : ?>
					<div class="flex-1 hidden sm:block basis-2/5">
						<?php echo wp_get_attachment_image( $why_us_img, 'full', false, array( "class" => "rounded-primary object-cover min-h-[16rem] h-full w-full" ) ); ?>
					</div>
				<?php endif; ?>
				<?php $why_us_copy = get_field( 'why_us_copy' ); ?>
				<?php if ( $why_us_copy ) : ?>
					<div class="flex-1 basis-3/5 bg-gray-light rounded-primary p-8 md:p-10 lg:px-[5rem] lg:py-[6rem]
								[&_h2]:text-title
								[&_h2]:mb-6
								[&_p]:mb-6">
						<div class="why-us__content">
							<?php echo wp_kses_post($why_us_copy); ?>
						</div>
						<?php if ( have_rows( 'why_us_cta_button' ) ) : ?>
							<?php while ( have_rows('why_us_cta_button') ) : the_row();
								$why_us_cta_text = get_sub_field( 'why_us_cta_text' );
								$why_us_cta_link = get_sub_field( 'why_us_cta_link' );
								if ( !empty( $mission_cta_link ) && ! empty( $why_us_cta_text ) ) : ?>
								<div class="mt-auto mb-6">
									<a href="<?php echo esc_url( $why_us_cta_link ); ?>" class="btn-primary mt-6 inline-block">
										<?php echo esc_html( $why_us_cta_text ); ?>
									</a>
								</div>
								<?php endif;
							endwhile; ?>
						<?php endif; ?>
					</div>
				<?php endif; ?>
			</div>
			<!-- Decorative shapes -->
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/decor-right.svg" alt="" class="hidden md:block absolute -top-[11rem] -right-[11rem] lg:-right-[8rem] w-[20rem] lg:-top-[12.5rem] 2xl:-right-[10rem] h-auto">
		</div>
	</section><!-- /.why-us -->

	<section class="core-values text-center py-[3rem] md:py-[6.25rem] lg:px-10">
		<div class="container px-4 md:max-w-5xl xl:max-w-7xl mx-auto">
			<?php $core_values_title = get_field( 'core_values_title' ); ?>
			<?php if ( $core_values_title ) : ?>
				<h2 class="text-title text-primary uppercase pb-[3rem] xl:pt-8 2xl:pt-0 2xl:px-[4.5rem]"><?php echo esc_html( $core_values_title ); ?></h2>
			<?php endif; ?>
			<?php $core_values_content = get_field( 'core_values_content' ); ?>
			<?php if ( $core_values_content ) : ?>
			<div class="core-values__content [&_h2]:mb-6 [&_p]:mb-6 [&_strong]:text-navlink">
				<?php echo wp_kses_post($core_values_content); ?>
			</div>
			<?php endif; ?>
		</div>
	</section><!-- /.core-values -->

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
