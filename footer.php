<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wealth_Elite_Advisors
 */

?>
	<footer id="colophon" class="site-footer mt-[5rem]">
		<div class="container mx-auto bg-black rounded-3xl p-4 sm:p-[2rem] md:p-[5rem]">
			<div class="site-info max-w-7xl mx-auto flex flex-col text-center md:flex-row items-center md:items-baseline justify-center md:justify-between pb-5 lg:pb-10">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/footer-logo.svg" alt="WealthEliteAdvisors Logo" class="h-[3rem]">
				</a>
				<nav class="main-navigation">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'footer-menu',
						'menu_class'     => 'footer-menu center flex flex-col p-4 md:p-0 mt-4 md:flex-row md:space-x-4 lg:space-x-8 rtl:space-x-reverse md:mt-0',
					)
				);
				?>
				</nav>
			</div>
			<!-- Copyright -->
			<p class="copyright md:mt-10 text-center text-sm">
				&copy; <?php echo esc_html( gmdate( 'Y' ) . '· ' ); ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( 'WealthEliteAdvisors' ); ?></a><?php echo esc_html( ' · All Rights Reserved ·' ); ?>
			</p>
		</div>
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
