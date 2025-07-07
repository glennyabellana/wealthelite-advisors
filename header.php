<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wealth_Elite_Advisors
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'wealthelite-advisors' ); ?></a>
	<header id="masthead" class="site-header p-4 pb-0 lg:pt-8">
		<div class="site-branding container mx-auto">
			<div class="block sm:flex items-baseline justify-between px-8 lg:px-12">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center w-[15rem] lg:w-[30rem] h-[4rem]">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/Logo1b.svg" alt="WealthEliteAdvisors Logo" class="w-full">
				</a>
				<nav id="site-navigation" class="main-navigation relative md:-top-[2rem]">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'wealthelite-advisors' ); ?></button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
				</nav><!-- #site-navigation -->
			</div>
		</div><!-- .site-branding -->
	</header><!-- #masthead -->
