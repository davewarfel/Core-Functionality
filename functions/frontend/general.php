<?php
/**
 * General Functions
 *
 * Clean up the <head>
 * is_tree - Check if current page is a subpage of its parent
 * the_slug - Echo the post slug
 * Add odd/even post class on archive pages
 * Add class to posts if they have a featured image
 */

// Clean up the <head>
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Check to see if it's a subpage of a parent
// http://codex.wordpress.org/Conditional_Tags#Testing_for_sub-Pages
function is_tree( $pid ) { // $pid = The ID of the page we're looking for pages underneath
	global $post; // load details about this page
	if ( is_page($pid) )
		return true; // we're at the page or at a sub page
	$anc = get_post_ancestors( $post->ID );
	foreach ( $anc as $ancestor ) {
		if( is_page() && $ancestor == $pid ) {
			return true;
		}
	}
	return false; // we aren't at the page, and the page is not an ancestor
}

// Allows use of "the_slug" to echo the current post slug
function the_slug($echo=true) {
	$slug = basename(get_permalink());
	do_action('before_slug', $slug);
	$slug = apply_filters('slug_filter', $slug);
	if( $echo ) echo $slug;
	do_action('after_slug', $slug);
	return $slug;
}

// Adds 'odd' and 'even' classes to each post
// http://wp-snippets.com/1458/add-oddeven-to-posts/
function esc_oddeven_post_class ( $classes ) {
	global $current_class;
	$classes[] = $current_class;
	$current_class = ($current_class == 'odd') ? 'even' : 'odd';
	return $classes;
}
add_filter ('post_class', 'esc_oddeven_post_class');
global $current_class;
$current_class = 'odd';

// Add class if post has a featured image
function esc_has_thumb_class($classes) {
	global $post;
	if( has_post_thumbnail($post->ID) ) { $classes[] = 'has-featured'; }
		return $classes;
}
add_filter('post_class', 'esc_has_thumb_class');
?>