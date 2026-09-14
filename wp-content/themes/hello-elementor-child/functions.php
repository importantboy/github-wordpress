<?php
/**
 * Hello Elementor Child theme functions.
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'GK_CHILD_THEME_VERSION', '1.0.0' );

/**
 * Load the child theme styles and small interaction script.
 */
function gk_child_enqueue_assets() {
	wp_enqueue_style(
		'gk-charity-theme',
		get_stylesheet_uri(),
		array( 'hello-elementor-theme-style' ),
		GK_CHILD_THEME_VERSION
	);

	wp_enqueue_script(
		'gk-charity-site',
		get_stylesheet_directory_uri() . '/assets/js/site.js',
		array(),
		GK_CHILD_THEME_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'gk_child_enqueue_assets', 20 );

/**
 * Add a page-specific body class so the theme does not affect Elementor pages.
 *
 * @param string[] $classes Existing body classes.
 * @return string[]
 */
function gk_child_body_classes( $classes ) {
	$classes[] = 'gk-charity-page';

	return $classes;
}
add_filter( 'body_class', 'gk_child_body_classes' );

/**
 * Build a safe link to a section on the homepage.
 *
 * @param string $section Section ID without the hash.
 * @return string
 */
function gk_child_home_section_url( $section ) {
	return home_url( '/#' . ltrim( $section, '#' ) );
}

/**
 * Return the URL for a bundled theme image.
 *
 * @param string $filename Image filename.
 * @return string
 */
function gk_child_image_url( $filename ) {
	return get_stylesheet_directory_uri() . '/assets/images/' . ltrim( $filename, '/' );
}

/**
 * Improve the default theme experience in the block editor.
 */
function gk_child_setup() {
	add_theme_support( 'editor-styles' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'gk_child_setup', 20 );

/**
 * Add a useful homepage description when no SEO plugin is managing one.
 */
function gk_child_home_meta_description() {
	if ( is_front_page() ) {
		echo '<meta name="description" content="' . esc_attr__( 'Guru Nanak Gitaa Kailash Memorial Foundation advances child welfare, accessible healthcare, education, and community relief across North India.', 'hello-elementor-child' ) . '">' . "\n";
	}
}
add_action( 'wp_head', 'gk_child_home_meta_description', 1 );
