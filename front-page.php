<?php
/**
 * The template for displaying the front page
 *
 * @package Wealth_Elite_Advisors
 */

get_header();
?>

	<main id="primary" class="site-main">
		<?php
		while ( have_posts() ) :
			the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'hero' ); ?>

			<!-- Solutions Section -->
			<section class="solutions pb-[6.25rem]">
				<div class="container mx-auto relative">
					<div class="flex flex-col lg:flex-row gap-6 lg:gap-10">
						<div class="order-2 lg:order-1 solutions--content basis-3/5">
							<?php $intro = get_field('solutions_intro'); ?>
							<?php if ( $intro ) : ?>
								<div class="bg-gray-light rounded-primary p-8 mb-8 md:mb-12 md:p-10 lg:p-12 [&_p]:mb-6 [&_h2]:mb-4 [&_h2]:text-title">
									<?php echo wp_kses_post( $intro ); ?>
								</div>
							<?php endif; ?>

							<?php if ( have_rows('solutions_items') ) : ?>
								<div class="solutions--list">
									<?php while ( have_rows('solutions_items') ) : the_row();
										$icon  = get_sub_field('solution_icon');
										$title = get_sub_field('solution_title');
										$desc  = get_sub_field('solution_description');
									?>
										<div class="solutions--list-item flex items-center gap-6 my-[2rem]">
											<?php if ( $icon ) : ?>
												<div class="shrink-0 w-[6rem] h-[6rem] rounded-full bg-cream overflow-hidden">
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

						<?php $solutions_img = get_field( 'solutions_featured_image' ); ?>
						<?php if ( $solutions_img ) : ?>
						<!-- Static banner image -->
						<div class="hidden sm:block order-1 lg:order-2 solutions--banner basis-2/5">
							<div class="flex-1 hidden sm:block basis-2/5">
								<?php echo wp_get_attachment_image( $solutions_img, 'full', false, array( "class" => "rounded-primary object-cover object-left h-[15rem] sm:h-[25rem] lg:h-full w-full" ) ); ?>
							</div>
						</div>
						<?php endif; ?>
					</div>

					<!-- Decorative shapes -->
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/decor-right.svg" alt="" class="hidden md:block absolute -top-[8rem] -right-[8rem] w-[16rem] h-auto">
				</div>
			</section> <!-- /.solutions -->

			<section class="latest-articles bg-primary relative -mx-4 pb-[5rem] px-4 lg:pb-0 lg:mb-[12rem] lg:max-h-[35rem]">
				<div class="container mx-auto relative">
					<?php $latest_articles = get_field('articles_section_heading'); ?>
					<?php if ( ! empty( $latest_articles ) ) : ?>
						<h2 class="text-title text-bgmain text-center py-[5rem]"><?php echo esc_html( $latest_articles ); ?></h2>
					<?php endif; ?>
					<div class="articles-container grid lg:grid-cols-3 gap-12 lg:gap-6">
						<?php
						// Check if there is at least one published sticky post
						$sticky_posts = get_option( 'sticky_posts' );
						$has_sticky   = false;

						if ( ! empty( $sticky_posts ) ) {
							$published_sticky = get_posts( array(
								'post__in'  => $sticky_posts,
								'post_type' => 'post',
								'post_status' => 'publish',
								'fields'    => 'ids',
								'numberposts' => 1,
							) );
							$has_sticky = ! empty( $published_sticky );
						}

						// Set limit: 2 if sticky exists, else 3
						$limit = $has_sticky ? 2 : 3;

						// Query latest posts
						$latest_posts = new WP_Query( array(
							'post_type'           => 'post',
							'posts_per_page'      => $limit,
							'post_status'         => 'publish',
						) );
						if ($latest_posts->have_posts()) :
							while ($latest_posts->have_posts()) : $latest_posts->the_post();
								$thumb_id = get_post_thumbnail_id();
								$thumb_url = $thumb_id ? wp_get_attachment_image_url($thumb_id, 'large') : get_template_directory_uri() . '/assets/images/about-our-mission-img.png';
								$thumb_alt = $thumb_id ? get_post_meta($thumb_id, '_wp_attachment_image_alt', true) : '';
						?>
							<div class="article-item flex items-end relative rounded-primary overflow-hidden h-[20rem] sm:h-[16rem] lg:h-[28rem] p-12">
								<div class="article-thumb h-full w-full absolute top-0 left-0 z-1 before:content-[''] before:w-full before:h-full before:absolute before:bg-black before:bg-opacity-50">
									<img src="<?php echo esc_url($thumb_url); ?>" alt="<?php echo esc_attr($thumb_alt); ?>" class="object-cover h-full w-full">
								</div>
								<div class="article-meta relative z-10">
									<h5 class="text-bgmain mb-4"><a href="<?php the_permalink(); ?>" class="no-underline"><?php the_title(); ?></a></h5>
									<p class="text-bgmain mb-4 line-clamp-3"><?php echo wp_trim_words(get_the_excerpt(), 30, '...'); ?></p>
									<a href="<?php the_permalink(); ?>" class="article-readmore text-bgmain no-underline">Read more</a>
								</div>
							</div>
						<?php
							endwhile;
							wp_reset_postdata();
						endif;
						?>
					</div>
				</div>
			</section> <!-- /.latest-articles -->
		<?php endwhile; ?>
	</main><!-- #main -->
<?php
get_footer();
