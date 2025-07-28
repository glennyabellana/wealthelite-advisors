<?php
/**
 * Template part for displaying Hero section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Wealth_Elite_Advisors
 */


// Get hero background and title
$bg    = get_field( 'hero_background_image' );
$title = get_field( 'hero_heading' );
?>

<!-- Hero Section -->
<div class="hero-container container mx-auto relative">
	<div class="container mx-auto relative h-full">
		<div class="hero-banner overflow-hidden absolute rounded-primary h-full w-full">
			<?php
			if ( is_array( $bg ) ) {
				echo wp_get_attachment_image(
					$bg['ID'],
					'full',
					false,
					array(
						'class'         => 'object-cover h-full w-full wp-post-image',
						'alt'           => isset( $bg['alt'] ) ? esc_attr( $bg['alt'] ) : '',
						'decoding'      => 'async',
						'fetchpriority' => 'high',
						'sizes'         => '(max-width: 2560px) 100vw, 2560px',
					)
				);
			} elseif ( ! empty( $bg ) ) {
				echo '<img src="' . esc_url( $bg ) . '" class="object-cover h-full w-full wp-post-image" alt="" decoding="async" fetchpriority="high">';
			} else {
				echo '<img src="' . esc_url( get_template_directory_uri() . '/assets/images/hero-banner-home.png' ) . '" class="object-cover h-full w-full wp-post-image" alt="Wealth Elite Advisors Hero Background" decoding="async" fetchpriority="high">';
			}
			?>
		</div>
		<div class="hero hero-content">
			<?php if ( ! empty( $title ) ) : ?>
				<h2 class="text-title text-white mb-8"><?php echo wp_kses( $title, array( 'br' => array() ) ); ?></h2>
			<?php endif; ?>
			<?php if( have_rows('hero_cta_button') ): ?>
				<?php while( have_rows( 'hero_cta_button' ) ): the_row();
					$text  = get_sub_field( 'hero_cta_text' );
					$url   = get_sub_field( 'hero_cta_link' );
					?>
					<?php if ( ! empty( $url ) && ! empty( $text ) ) : ?>
						<a href="<?php echo esc_url( $url ); ?>" class="btn-primary hover:text-bgmain hover:bg-primary hover:bg-opacity-90">
							<?php echo esc_html( $text ); ?>
						</a>
					<?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
	<!-- Decorative shapes -->
	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/decor-left.svg" alt="" class="hidden md:block absolute -bottom-[7.2rem] -left-[8rem] w-[18rem] h-auto">
</div><!-- /.hero-container -->

<!-- Value Proposition Section -->
<?php $vp_copy = get_field('value_proposition_copy'); ?>
<?php if ( ! empty( $vp_copy ) ) : ?>
	<header class="page-header text-center py-[3rem] md:py-[6.25rem] lg:px-10">
		<div class="container mx-auto [&_h2]:text-title [&_h2]:pb-[1.5rem] xl:[&_h2]:pt-8 2xl:[&_h2]:pt-0 2xl:[&_h2]:px-[4.5rem] [&_p]:py-[1.5rem] [&_p]:px-4 md:[&_p]:px-[4.5rem] [&_p]:text-xl sm:[&_p]:text-2xl ">
			<?php echo wp_kses_post( $vp_copy ); ?>
			<?php if ( have_rows( 'value_proposition_cta_button' ) ) : ?>
				<?php while ( have_rows('value_proposition_cta_button') ) : the_row();
					$vp_cta_text = get_sub_field( 'value_proposition_cta_text' );
					$vp_cta_link = get_sub_field( 'value_proposition_cta_link' );
					if ( !empty( $vp_cta_link ) && ! empty( $vp_cta_text ) ) : ?>
					<div class="flex flex-wrap justify-center gap-4 mt-6 pt-[1.5rem]">
						<a href="<?php echo esc_url( $vp_cta_link ); ?>" class="btn-primary"><?php echo esc_html( $vp_cta_text ); ?></a>
					</div>
					<?php endif;
				endwhile; ?>
			<?php endif; ?>
		</div>
	</header><!-- /.page-header -->
<?php endif; ?>
