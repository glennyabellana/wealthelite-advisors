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
	<header id="masthead" class="site-header mb-4 p-4 pb-0 lg:pt-8 lg:mb-[3.25rem]">
		<nav class="site-branding container mx-auto">
			<div class="max-w-7xl flex flex-wrap items-center sm:items-baseline justify-between mx-auto">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center space-x-3 rtl:space-x-reverse w-[16rem] sm:w-[20rem] lg:w-[25rem] h-[4.5rem]">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/Logo1b.svg" alt="WealthEliteAdvisors Logo" class="w-full h-full object-cover">
				</a>
				<!-- Mobile hamburger toggle -->
				<button id="mobile-nav-toggle" class="block md:hidden text-navlink rounded-none hover:text-primary focus:outline-none transition" aria-label="Toggle navigation">
					<span class="sr-only">Open main menu</span>
					<svg class="size-8 sm:size-12" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
							d="M4 6h16M4 12h16M4 18h16" />
					</svg>
				</button>
				<div id="site-navigation" class="main-navigation hidden md:block w-full md:block md:w-auto" id="navbar-default">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'menu_class'     => 'flex flex-col p-4 md:p-0 mt-4 md:flex-row md:space-x-4 lg:space-x-8 rtl:space-x-reverse md:mt-0',
						)
					);
					?>
				</div>
			</div>
		</nav><!-- .site-branding -->
	</header><!-- #masthead -->
