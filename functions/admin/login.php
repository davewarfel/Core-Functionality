<?php
/**
 * Login Functions
 *
 * For modifying the login page of your site (wp-login.php).
 * Forgot password links/customization
 * Custom login styles, scripts, etc.
 */

// Load CSS for wp-login.php
function esc_login_styles() {
	echo '<link rel="stylesheet" type="text/css" href="/wp-content/plugins/custom-functions/assets/css/login.css">';
}
add_action('login_head', 'esc_login_styles');

// Change Login Logo URL
function esc_change_login_url() {
	return "http://www.google.com/";
}
add_filter('login_headerurl', 'esc_change_login_url');

// Change <title> attribute for Login Logo URL
function esc_change_login_url_title() {
	return "Website Name";
}
add_filter('login_headertitle', 'esc_change_login_url_title');

// Add message above login form
function esc_add_login_message() {
	return '<p class="message">Use this form to login to the administration area of WordPress, and make changes to the website.</p>';
}
add_filter('login_message', 'esc_add_login_message');

?>