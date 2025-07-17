<?php
/**
 * Wealth Elite Advisors functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Wealth_Elite_Advisors
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wealthelite_advisors_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Wealth Elite Advisors, use a find and replace
		* to change 'wealthelite-advisors' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'wealthelite-advisors', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'wealthelite-advisors' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'wealthelite_advisors_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'wealthelite_advisors_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wealthelite_advisors_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wealthelite_advisors_content_width', 640 );
}
add_action( 'after_setup_theme', 'wealthelite_advisors_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wealthelite_advisors_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'wealthelite-advisors' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'wealthelite-advisors' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'wealthelite_advisors_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function wealthelite_advisors_scripts() {
	// Theme version defined in functions.php.
	$version = _S_VERSION;

	/*
	// Enqueue Google Fonts.
	// wp_enqueue_style(
	// 'wealthelite-google-fonts',
	// 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap',
	// array(),
	// $version
	// );


	// Main stylesheet.
	// wp_enqueue_style(
	// 'wealthelite-advisors-style',
	// get_stylesheet_uri(),
	// array(),
	// $version
	// );
	// wp_style_add_data( 'wealthelite-advisors-style', 'rtl', 'replace' );
	*/

	// Navigation script.
	wp_enqueue_script(
		'wealthelite-advisors-navigation',
		get_template_directory_uri() . '/js/navigation.js',
		array(),
		$version,
		true
	);

	// Threaded comments support.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// DEV mode: load from Vite dev server.
	if ( defined( 'WP_ENV' ) && 'development' === WP_ENV ) {
		wp_enqueue_script( 'vite-client', 'http://localhost:3000/@vite/client', array(), null, true );
		wp_enqueue_script( 'theme-dev', 'http://localhost:3000/js/index.js', array(), null, true );
		return;
	}

	// PROD mode: hashed assets via Vite manifest.
	$theme_dir = get_stylesheet_directory();
	$theme_uri = get_stylesheet_directory_uri();
	$manifest  = wealthelite_advisors_get_manifest( $theme_dir );
	$entry_key = 'js/index.js';

	if ( empty( $manifest[ $entry_key ]['file'] ) ) {
		return;
	}

	$entry = $manifest[ $entry_key ];

	// Enqueue hashed JS bundle.
	wp_enqueue_script(
		'theme-main',
		"{$theme_uri}/dist/{$entry['file']}",
		array(),
		$version,
		true
	);

	// Enqueue any hashed CSS chunks.
	if ( ! empty( $entry['css'] ) && is_array( $entry['css'] ) ) {
		foreach ( $entry['css'] as $css_file ) {
			wp_enqueue_style(
				'theme-style-' . sanitize_title( $css_file ),
				"{$theme_uri}/dist/{$css_file}",
				array(),
				$version
			);
		}
	}
}
add_action( 'wp_enqueue_scripts', 'wealthelite_advisors_scripts' );

/**
 * Load and decode the Vite manifest.json.
 *
 * @param string $theme_dir Absolute path to the theme directory.
 * @return array            Decoded manifest, or empty array on failure.
 */
function wealthelite_advisors_get_manifest( $theme_dir ) {
	$manifest_path = trailingslashit( $theme_dir ) . 'dist/.vite/manifest.json';

	if ( ! file_exists( $manifest_path ) ) {
		return array();
	}

	$content = file_get_contents( $manifest_path );
	if ( false === $content ) {
		return array();
	}

	$data = json_decode( $content, true );
	return is_array( $data ) ? $data : array();
}

/**
 * Filters the script tag for specific handles to add type="module".
 *
 * @param string $tag    The script tag for the enqueued script.
 * @param string $handle The script's registered handle.
 * @return string Modified script tag.
 */
function wealthelite_advisors_script_loader_tag( $tag, $handle ) {
	if ( in_array( $handle, array( 'vite-client', 'theme-dev' ), true ) ) {
		$tag = str_replace( '<script ', '<script type="module" ', $tag );
	}
	return $tag;
}
add_filter( 'script_loader_tag', 'wealthelite_advisors_script_loader_tag', 10, 2 );

/**
 * Preconnect & preload the Adobe Fonts kit.
 *
 * @return void
 */
function wealthelite_preconnect_adobe_fonts() {
	// Preconnect to the kit CSS host.
	echo '<link rel="preconnect" href="https://use.typekit.net">' . "\n";
	// Preconnect to the font‐file CDN (with CORS).
	echo '<link rel="preconnect" href="https://p.typekit.net" crossorigin>' . "\n";
	// Preload the kit CSS, then swap it into a stylesheet on load.
	echo '<link rel="preload" as="style" href="https://use.typekit.net/odm7dfi.css" onload="this.onload=null;this.rel=\'stylesheet\'">' . "\n";
}
add_action( 'wp_head', 'wealthelite_preconnect_adobe_fonts', 1 );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}






/**
 * Load the most specific page template based on slug, with sensible fallbacks.
 */
function we_load_page_template_by_slug() {
	$slug          = sanitize_title( get_post_field( 'post_name' ) ?: 'default' );
	$template_name = "page-{$slug}";
	$partials      = array(
		"template-parts/content-{$template_name}.php",
		'template-parts/content-page.php',
		'template-parts/content.php',
	);
	locate_template( $partials, true );
}





add_action( 'init', 'register_acf_blocks' );
function register_acf_blocks() {
    register_block_type( __DIR__ . '/blocks/testimonial' );
}
// function my_remove_editor_support_for_scf() {
//     // remove support for the content editor entirely
//     remove_post_type_support( 'page', 'editor' );
// }
// add_action( 'init', 'my_remove_editor_support_for_scf', 11 );
