<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Wealth_Elite_Advisors
 */

?>
<?php if ( is_singular( 'post' ) ) : ?>
    <div class="container mx-auto">
<?php endif; ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php wealthelite_advisors_post_thumbnail(); ?>

		<header class="entry-header text-center max-w-3xl mx-auto pt-6 mb-6 md:mb-[5rem]">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title text-title leading-[1.5]">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title text-3xl"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) :
				?>
				<div class="entry-meta text-lg font-medium my-4 flex gap-6 justify-center items-center">
					<?php
					wealthelite_advisors_posted_by();
					wealthelite_advisors_posted_on();
					?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-content max-w-5xl mx-auto my-10 font-normal">
			<?php
            if ( is_archive() ) :
                the_excerpt();
            else:
                the_content(
                    sprintf(
                        wp_kses(
                            /* translators: %s: Name of current post. Only visible to screen readers */
                            __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'wealthelite-advisors' ),
                            array(
                                'span' => array(
                                    'class' => array(),
                                ),
                            )
                        ),
                        wp_kses_post( get_the_title() )
                    )
                );
            endif;

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wealthelite-advisors' ),
					'after'  => '</div>',
				)
			);


            if ( is_singular( 'post' ) ) :
                ?>
                <nav class="post-navigation" aria-label="<?php esc_attr_e( 'Post', 'wealthelite-advisors' ); ?>">
                    <div class="flex justify-between gap-4 text-sm">
                        <div class="post-navigation__prev">
                            <?php previous_post_link(
                                '%link',
                                '&larr; %title'
                            ); ?>
                        </div>
                        <div class="post-navigation__next text-right">
                            <?php next_post_link(
                                '%link',
                                '%title &rarr;',
                                true
                            ); ?>
                        </div>
                    </div>
                </nav>
                <?php
            endif;
		?>
		</div><!-- .entry-content -->

		<footer class="entry-footer max-w-5xl mx-auto flex text-sm">
			<?php wealthelite_advisors_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</article><!-- #post-<?php the_ID(); ?> -->
<?php if ( is_singular( 'post' ) ) : ?>
    </div>
<?php endif; ?>
