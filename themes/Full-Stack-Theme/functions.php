<?php
function fsc_theme_stylesheets() {
	wp_enqueue_script('my-jquery', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
	// wp_enqueue_script('main-js', get_theme_file_uri('/src/index.js')); 
  wp_enqueue_style('fsc-style', get_theme_file_uri('/style.css'));
	wp_enqueue_style( 'font-awesome', get_theme_file_uri('/css/fontawesome/css/fontawesome.min.css'));
	wp_enqueue_style('bootstrap', get_theme_file_uri('/css/bootstrap.min.css'));
	
	wp_enqueue_script('bootstrap-min', get_theme_file_uri('/css/js/bootstrap.min.js'));
	wp_enqueue_script('bootstrap-bundle', get_theme_file_uri('/css/js/bootstrap.bundle.min.js'));
}

add_action( 'wp_enqueue_scripts', 'fsc_theme_stylesheets' );

?>