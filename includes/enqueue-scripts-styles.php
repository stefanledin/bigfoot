<?php
function enqueue_scripts_and_styles () {
	$themeDir = get_template_directory_uri();
	$assetsDir = $themeDir . '/assets';
	$assetsPath = get_stylesheet_directory() . '/assets';
	
	// wp_enqueue_style( $handle, $src, $deps, $ver, $media );
	wp_enqueue_style( 'stylesheet', get_template_directory_uri().'/assets/css/style.css', null, filemtime($assetsPath.'/css/style.css'), null );
	
	// wp_enqueue_scripts($handle, $src, $deps, $ver, $in_footer);
	wp_enqueue_script('jquery', null, null, null, true);
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts_and_styles' );