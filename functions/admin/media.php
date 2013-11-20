<?php
/**
 * Media Functions
 * Things related to the media library, images, etc., but only impact the admin area.
 *
 * Add custom image sizes to <select> when inserting images into a post
 */

// Add custom image sizes to <select>
// http://www.studiograsshopper.ch/code-snippets/wordpress-list-all-image-sizes-in-media-uploader/
function esc_display_image_sizes_in_uploader( $sizes ) {
	$new_sizes = array();
	$added_sizes = get_intermediate_image_sizes();
	// $added_sizes is an indexed array, therefore need to convert it
	// to associative array, using $value for $key and $value
	foreach( $added_sizes as $key => $value) {
		$new_sizes[$value] = $value;
	}
	// This preserves the labels in $sizes, and merges the two arrays
	$new_sizes = array_merge( $new_sizes, $sizes );
	return $new_sizes;
}
add_filter('image_size_names_choose', 'esc_display_image_sizes_in_uploader', 11, 1);
?>