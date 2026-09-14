<?php
/**
 * Create the foundation's routed pages during deployment.
 *
 * Run with: wp eval-file inc/sync-site-pages.php
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$gk_site_pages = array(
	'home'     => array(
		'title'   => 'Home',
		'excerpt' => 'Compassion that creates a path forward.',
	),
	'about'    => array(
		'title'   => 'About Us',
		'excerpt' => 'A legacy of service, structured for lasting community impact.',
	),
	'our-work' => array(
		'title'   => 'Our Work',
		'excerpt' => 'Focused programs for child welfare, accessible healthcare, education, and emergency relief.',
	),
	'impact'   => array(
		'title'   => 'Our Impact',
		'excerpt' => 'Clear 2030 goals that keep our work ambitious and accountable.',
	),
	'gallery'  => array(
		'title'   => 'Gallery',
		'excerpt' => 'Moments of service, partnership, and community action.',
	),
	'donate'   => array(
		'title'   => 'Donate',
		'excerpt' => 'Help turn compassion into practical, lasting support.',
	),
);

$gk_created_pages = array();

foreach ( $gk_site_pages as $gk_slug => $gk_page_data ) {
	$gk_page = get_page_by_path( $gk_slug, OBJECT, 'page' );

	if ( $gk_page ) {
		$gk_page_id = wp_update_post(
			array(
				'ID'           => $gk_page->ID,
				'post_title'   => $gk_page_data['title'],
				'post_excerpt' => $gk_page_data['excerpt'],
				'post_status'  => 'publish',
			),
			true
		);
	} else {
		$gk_page_id = wp_insert_post(
			array(
				'post_type'    => 'page',
				'post_name'    => $gk_slug,
				'post_title'   => $gk_page_data['title'],
				'post_excerpt' => $gk_page_data['excerpt'],
				'post_status'  => 'publish',
				'post_content' => '',
			),
			true
		);
	}

	if ( is_wp_error( $gk_page_id ) ) {
		if ( defined( 'WP_CLI' ) && WP_CLI ) {
			WP_CLI::warning( sprintf( 'Could not sync page %s: %s', $gk_slug, $gk_page_id->get_error_message() ) );
		}
		continue;
	}

	$gk_created_pages[ $gk_slug ] = (int) $gk_page_id;
}

if ( isset( $gk_created_pages['home'] ) ) {
	update_option( 'show_on_front', 'page' );
	update_option( 'page_on_front', $gk_created_pages['home'] );
}

update_option( 'blogname', 'Guru Nanak Gitaa Kailash Memorial Foundation' );
update_option( 'blogdescription', 'Bridging Innovation and Execution with Empathy.' );
flush_rewrite_rules( false );

if ( defined( 'WP_CLI' ) && WP_CLI ) {
	WP_CLI::success( sprintf( 'Synced %d foundation pages.', count( $gk_created_pages ) ) );
}
