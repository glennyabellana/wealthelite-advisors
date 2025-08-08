<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Wealth_Elite_Advisors
 */

get_header();
?>

	<main id="primary" class="site-main container mx-auto max-w-7xl md:mb-[6rem]">

		<?php if ( have_posts() ) : ?>

			<header class="page-header py-6 md:py-[5rem]">
				<h1 class="page-title text-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'wealthelite-advisors' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->
            <div class="flex flex-wrap [&_article]:basis-1/2 [&_article]:px-6">
                <?php
                /* Start the Loop */
                while ( have_posts() ) :
                    the_post();

                    /**
                     * Run the loop for the search to output the results.
                     * If you want to overload this in a child theme then include a file
                     * called content-search.php and that will be used instead.
                     */
                    get_template_part( 'template-parts/content', 'search' );

                endwhile;
                ?>
            </div>
            <?php
			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_footer();
