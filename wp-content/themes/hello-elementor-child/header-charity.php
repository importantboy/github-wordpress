<?php
/**
 * Header for the foundation website.
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#092b25">
	<link rel="icon" href="<?php echo esc_url( gk_child_image_url( 'foundation-logo.webp' ) ); ?>" type="image/webp">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="gk-skip-link" href="#main-content"><?php esc_html_e( 'Skip to content', 'hello-elementor-child' ); ?></a>

<div class="gk-topbar">
	<div class="gk-container gk-topbar__inner">
		<span class="gk-topbar__location"><span class="gk-topbar__dot" aria-hidden="true"></span>Punjab · Haryana · Himachal Pradesh</span>
		<span>Registered charitable trust · India</span>
	</div>
</div>

<header class="gk-site-header is-sticky" data-site-header>
	<div class="gk-container gk-header__inner">
		<a class="gk-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php esc_attr_e( 'Guru Nanak Gitaa Kailash Memorial Foundation — home', 'hello-elementor-child' ); ?>">
			<img class="gk-brand__mark" src="<?php echo esc_url( gk_child_image_url( 'foundation-logo.webp' ) ); ?>" alt="" width="62" height="62">
			<span class="gk-brand__name">Guru Nanak Gitaa Kailash Memorial Foundation</span>
		</a>

		<button class="gk-nav-toggle" type="button" aria-expanded="false" aria-controls="gk-primary-nav" aria-label="<?php esc_attr_e( 'Open navigation', 'hello-elementor-child' ); ?>" data-nav-toggle>
			<span aria-hidden="true"></span>
		</button>

		<nav class="gk-nav" id="gk-primary-nav" aria-label="<?php esc_attr_e( 'Primary navigation', 'hello-elementor-child' ); ?>" data-nav>
			<a href="<?php echo esc_url( gk_child_home_section_url( 'about' ) ); ?>">About</a>
			<a href="<?php echo esc_url( gk_child_home_section_url( 'work' ) ); ?>">Our work</a>
			<a href="<?php echo esc_url( gk_child_home_section_url( 'impact' ) ); ?>">2030 goals</a>
			<a href="<?php echo esc_url( gk_child_home_section_url( 'stories' ) ); ?>">Field notes</a>
			<a href="<?php echo esc_url( gk_child_home_section_url( 'gallery' ) ); ?>">Gallery</a>
			<a class="gk-nav__cta" href="<?php echo esc_url( gk_child_home_section_url( 'donate' ) ); ?>">Donate</a>
		</nav>
	</div>
</header>
