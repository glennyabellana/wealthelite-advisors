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
			the_post();
			// Get hero background and title
			$bg    = get_field('hero_background_image');
			$title = get_field('hero_heading');
		?>
			<!-- Hero Section -->
			<div class="hero-container container mx-auto relative">
				<div class="container mx-auto relative h-full">
					<div class="hero-banner overflow-hidden absolute rounded-primary h-full w-full">
					<?php
					if (is_array($bg)) {
						echo wp_get_attachment_image(
							$bg['ID'],
							'full',
							false,
							array(
								'class' => 'object-cover h-full w-full wp-post-image',
								'alt' => !empty($bg['alt']) ? esc_attr($bg['alt']) : '',
								'decoding' => 'async',
								'fetchpriority' => 'high',
								'sizes' => '(max-width: 2560px) 100vw, 2560px'
							)
						);
					} elseif (!empty($bg)) {
						echo '<img src="' . esc_url($bg) . '" class="object-cover h-full w-full wp-post-image" alt="" decoding="async" fetchpriority="high">';
					} else {
						echo '<img src="' . esc_url(get_template_directory_uri() . '/assets/images/hero-banner-home.png') . '" class="object-cover h-full w-full wp-post-image" alt="Wealth Elite Advisors Hero Background" decoding="async" fetchpriority="high">';
					}
					?>

					</div>
					<div class="hero hero-content">
						<?php if (!empty($title)) : ?>
							<h2 class="text-title text-white mb-8"><?php echo wp_kses($title, array('br' => array())); ?></h2>
						<?php endif; ?>
						<?php if( have_rows('hero_cta_button') ): ?>
							<?php while( have_rows('hero_cta_button') ): the_row();
								$text  = get_sub_field('hero_cta_text');
								$url   = get_sub_field('hero_cta_link');
								?>
								<?php if (!empty($url) && !empty($text)) : ?>
									<a href="<?php echo esc_url($url); ?>" class="btn-primary">
										<?php echo esc_html($text); ?>
									</a>
								<?php endif; ?>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
				<!-- Decorative shapes -->
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/decor-left.svg" alt="" class="hidden md:block absolute -bottom-[8rem] -left-[12rem] w-[20rem] lg:-bottom-[9rem] lg:-left-[14rem] lg:w-[25rem] h-auto">
			</div><!-- /.hero-container -->
		<?php endwhile; ?>

		<!-- Value Proposition Section -->
		<header class="page-header text-center py-[3rem] md:py-[6.25rem] lg:px-10">
			<div class="container mx-auto [&_h2]:text-title [&_h2]:pb-[1.5rem] xl:[&_h2]:pt-8 2xl:[&_h2]:pt-0 2xl:[&_h2]:px-[4.5rem] [&_p]:py-[1.5rem] [&_p]:px-4 md:[&_p]:px-[4.5rem] [&_p]:text-xl sm:[&_p]:text-2xl ">
				<?php $vp_copy = get_field('value_proposition_copy'); ?>
				<?php if ( ! empty( $vp_copy ) ) : ?>
					<?php echo wp_kses_post( $vp_copy ); ?>
				<?php endif; ?>
				<?php if ( have_rows( 'value_proposition_cta_button' ) ) : ?>
					<div class="flex flex-wrap justify-center gap-4 mt-6 pt-[1.5rem]">
						<?php while ( have_rows('value_proposition_cta_button') ) : the_row();
							$vp_cta_text = get_sub_field( 'value_proposition_cta_text' );
							$vp_cta_link = get_sub_field( 'value_proposition_cta_link' );
							if ( !empty( $vp_cta_link ) && ! empty( $vp_cta_text ) ) : ?>
								<a href="<?php echo esc_url( $vp_cta_link ); ?>" class="btn-primary"><?php echo esc_html( $vp_cta_text ); ?></a>
							<?php endif;
						endwhile; ?>
					</div>
				<?php endif; ?>
			</div>
		</header><!-- /.page-header -->

		<!-- Solutions Section -->
		<section class="solutions pb-[6.25rem] chatgpt-generated">
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

					<!-- Static banner image -->
					<div class="hidden sm:block order-1 lg:order-2 solutions--banner basis-2/5">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner-solutions.png" class="rounded-primary object-cover object-left h-[15rem] sm:h-[25rem] lg:h-full w-full" alt="Wealth Elite Advisors Hero Background">
					</div>
				</div>

				<!-- Decorative shapes -->
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/decor-right.svg" alt="" class="hidden md:block absolute -top-[11rem] -right-[11rem] lg:-right-[8rem] w-[20rem] lg:-top-[10rem] 2xl:-right-[10rem] h-auto">
			</div>
		</section> <!-- /.solutions -->

		<section class="latest-articles bg-primary relative -mx-4 pb-[5rem] px-4 lg:pb-0 lg:mb-[12rem] lg:max-h-[35rem]">
			<div class="container mx-auto relative">
				<!-- Decorative shapes -->
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/decor-shape.svg" alt="" class="hidden md:block absolute -top-[8rem] -left-[12rem] w-[20rem] lg:-top-[10rem] lg:-left-[12rem] lg:w-[25rem] xl:w-[22rem] 2xl:-left-[17rem] h-auto">
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
							$thumb_url = $thumb_id ? wp_get_attachment_image_url($thumb_id, 'large') : get_template_directory_uri() . '/assets/images/banner-solutions.png';
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
	</main><!-- #main -->

<?php
get_footer();
