<?php
/**
 * User Functions
 * Things related to users, profile pages, etc.
 *
 * Remove default contact fields (aim, jabber, yim)
 */

// Remove contact fields on user profile
// http://sixrevisions.com/wordpress/10-techniques-for-customizing-the-wordpress-admin-panel/
function esc_new_contactmethods( $contactmethods ) {
	unset($contactmethods['aim']);
	unset($contactmethods['jabber']);
	unset($contactmethods['yim']);
	return $contactmethods;
}
add_filter('user_contactmethods','esc_new_contactmethods',10,1);
?>