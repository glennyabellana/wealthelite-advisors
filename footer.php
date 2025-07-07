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
	<footer id="colophon" class="site-footer container mx-auto bg-black rounded-3xl sm:py-[3.2rem] px-[2rem] lg:px-[4rem]">
		<div class="site-info flex flex-col sm:flex-row items-baseline justify-between pb-5 lg:pb-10">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/footer-logo.svg" alt="WealthEliteAdvisors Logo" class="h-[3rem]">
			</a>
			<nav class="main-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'footer-menu',
					'menu_class'     => 'footer-menu center',
				)
			);
			?>
			</nav>
		</div>
		<!-- Copyright -->
		<p class="copyright mt-10 text-center text-sm text-gray-400">
			&copy; <?php echo esc_html( gmdate( 'Y' ) . '· WealthEliteAdvisors · All Rights Reserved ·' ); ?>
		</p>
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
