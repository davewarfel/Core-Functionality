<?php
/**
 * Load Styles & Scripts
 * For registering, deregistering & enqueueing CSS and javascript for use on your site
 *
 * Load Google Fonts
 * Deregister jQuery, then load it from Google's CDN
 */

// Only on front-end pages, NOT in admin area
if (!is_admin()) {

	// Load CSS
	add_action('wp_enqueue_scripts', 'esc_load_styles', 11);
	function esc_load_styles() {
		// Google Fonts
		wp_register_style('google-fonts', '//fonts.googleapis.com/css?family=Open+Sans', array(), null, 'all');
		wp_enqueue_style('google-fonts');
	}

	// Load Javascript
	add_action('wp_enqueue_scripts', 'esc_load_scripts', 12);
	function esc_load_scripts() {
		// jQuery
		wp_deregister_script('jquery');
		wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', array(), null, false);
		wp_enqueue_script('jquery');
	}

} // end if !is_admin
?>