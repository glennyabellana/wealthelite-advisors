<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Wealth_Elite_Advisors
 */

?>

<section class="no-results not-found text-center py-6 md:py-[6rem]">
	<header class="page-header">
		<h1 class="page-title text-title"><?php esc_html_e( 'Nothing Found', 'wealthelite-advisors' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p class="my-[2rem] text-2xl leading-[1.5]">' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'wealthelite-advisors' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>

			<p class="my-[2rem] text-2xl leading-[1.5]"><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'wealthelite-advisors' ); ?></p>
			<?php
			get_search_form();

		else :
			?>

			<p class="my-[2rem] text-2xl leading-[1.5]"><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'wealthelite-advisors' ); ?></p>
			<?php
			get_search_form();

		endif;
		?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
