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

	<section class="our-team pb-[6.25rem]">
		<div class="our-team__list container mx-auto relative grid md:grid-cols-2 gap-x-4 gap-y-10">
			<?php
			$latest_posts = new WP_Query( array(
				'post_type'           => 'member',
				'posts_per_page'      => -1,
				'post_status'         => 'publish',
			) );
			if ($latest_posts->have_posts()) :
				while ($latest_posts->have_posts()) : $latest_posts->the_post();
					$thumb_id 	= get_post_thumbnail_id();
					$thumb_url 	= $thumb_id ? wp_get_attachment_image_url($thumb_id, 'large') : get_template_directory_uri() . '/assets/images/girlie-abellana.png';
					$thumb_alt 	= $thumb_id ? get_post_meta($thumb_id, '_wp_attachment_image_alt', true) : '';
					$license 	= get_field('member_license_number');
					$provinces 	= get_field( 'member_provinces' );
					$socials 	= get_field( 'member_social_media' );
					$facebook   = $socials['facebook_link'] ?? '';
					$x_link		= $socials['x_link'] ?? '';
					$instagram 	= $socials['instagram_link'] ?? '';
					$youtube   	= $socials['youtube_link'] ?? '';
					$linkedin   = $socials['linkedin_link'] ?? '';
			?>
				<div class="our-team__item text-navlink flex flex-col lg:flex-row gap-4">
					<div class="our-team__item-display-pic flex-1 lg:basis-1/2 overflow-hidden rounded-primary">
						<a href="<?php the_permalink(); ?>">
							<img src="<?php echo esc_url($thumb_url); ?>" alt="<?php echo esc_attr($thumb_alt); ?>" class="rounded-primary object-cover h-full w-full transition duration-500 hover:scale-125">
						</a>
					</div>
					<div class="our-team__item-content flex-1 basis-1/2 bg-gray-light rounded-primary p-8 md:p-10 lg:py-[3rem]">
						<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
						<?php if ( $license ) : ?>
						<div class="our-team__meta font-normal">
							<span class="after:content-[''] after:w-[60%] after:h-[2px] after:bg-primary after:my-4 after:block">
								<?php echo esc_html( $license ); ?>
							</span>
						</div>
						<?php endif; ?>
						<?php if ( ! empty( $provinces ) && is_array( $provinces ) ) : ?>
							<div class="our-team__address my-[2rem]">
								<p>
									<?php echo esc_html( 'Province: ' . implode( ', ', $provinces ) ); ?>
								</p>
							</div>
						<?php endif; ?>
						<?php if ( $socials ) : ?>
						<ul class="flex gap-2">
							<?php if ( $facebook ) : ?>
							<li class="rounded-full overflow-hidden"><a href="<?php echo esc_url( $facebook ); ?>" ><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon-facebook.svg" alt="Facebook" class="bg-navlink p-3 size-[3rem] object-contain hover:bg-primary transition"></a></li>
							<?php endif; ?>
							<?php if ( $x_link ) : ?>
							<li class="rounded-full overflow-hidden"><a href="<?php echo esc_url( $x_link ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon-x.svg" alt="X" class="bg-navlink p-3 size-[3rem] object-contain hover:bg-primary transition"></a></li>
							<?php endif; ?>
							<?php if ( $instagram ) : ?>
							<li class="rounded-full overflow-hidden"><a href="<?php echo esc_url( $instagram ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon-instragram.svg" alt="Instragram" class="bg-navlink p-3 size-[3rem] object-contain hover:bg-primary transition"></a></li>
							<?php endif; ?>
							<?php if ( $youtube ) : ?>
							<li class="rounded-full overflow-hidden"><a href="<?php echo esc_url( $youtube ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon-youtube.svg" alt="Youtube" class="bg-navlink p-3 size-[3rem] object-contain hover:bg-primary transition"></a></li>
							<?php endif; ?>
							<?php if ( $linkedin ) : ?>
							<li class="rounded-full overflow-hidden"><a href="<?php echo esc_url( $linkedin ); ?>"><span class="dashicons dashicons-linkedin inline-block text-3xl text-bgmain bg-navlink p-1 size-[3rem] hover:bg-primary transition"></span></a></li>
							<?php endif; ?>
						</ul>
						</ul>
						<?php endif; ?>
					</div>
				</div>
			<?php
				endwhile;
				wp_reset_postdata();
			endif;
			?>
		</div>
	</section><!-- /.our-team -->

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
