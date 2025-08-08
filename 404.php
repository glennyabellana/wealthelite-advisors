<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Wealth_Elite_Advisors
 */

get_header();
?>

	<main id="primary" class="site-main container mx-auto max-w-7xl">

		<section class="error-404 not-found text-center py-6 md:py-[6rem]">
			<header class="page-header">
				<h1 class="page-title text-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'wealthelite-advisors' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p class="my-[2rem] text-2xl leading-[1.5]">
					<?php esc_html_e( 'It looks like nothing was found at this location.', 'wealthelite-advisors' ); ?><br>
					<?php esc_html_e( 'Maybe try one of the links below or a search?', 'wealthelite-advisors' ); ?>
				</p>
				<?php get_search_form(); ?>
			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
