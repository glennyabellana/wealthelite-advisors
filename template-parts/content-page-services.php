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
				</div>
			<?php endif; ?>
		</div>
	</section> <!-- /.services -->

	<section class="investment bg-primary -mx-4 pb-[6rem] px-4">
		<div class="container mx-auto relative">
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
