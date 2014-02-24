<?php
/**
 * Content
 *
 * 1. Custom post types
 * 2. Custom taxonomies
 * 3. Filters
 * 4. Enqueue scripts and styles
 */
require 'includes/custom-post-types.php';
require 'includes/enqueue-scripts-styles.php';

/**
 * WP Router test
 */
function create_routes ($router) {
	$router->add_route('sasquatch', array(
		'path' => 'sasquatch',
		'access_callback' => true,
		'page_callback' => 'sasquatch_callback'
	));
}
function sasquatch_callback ($args) {
	echo '<h1>sasquatch</h1>';
	die(var_dump($args));
}
add_action( 'wp_router_generate_routes', 'create_routes' );