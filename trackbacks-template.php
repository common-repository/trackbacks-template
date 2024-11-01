<?php
/*
Plugin Name: Trackbacks Template
Version: 1.0
Plugin URI: http://blog.slaven.net.au/wordpress-plugins/trackbacks-template-wordpress-plugin/
Description: Adds a template tag to display only trackbacks & pingbacks
Author: Glenn Slaven
Author URI: http://blog.slaven.net.au/
*/

if (!function_exists('get_approved_trackbacks')) {
	
	/**
	 * Gets the list of approved trackacks/pingbacks for the post
	 * 
	 *
	 * @param int $post_id The ID of the post to get the tracbacks for
	 * @return array List of comment objects containing all the trackbacks
	 */
	function get_approved_trackbacks($post_id) {
		global $wpdb;
	
		$post_id = (int) $post_id;
		return $wpdb->get_results("SELECT * FROM $wpdb->comments WHERE comment_post_ID = '$post_id' AND comment_approved = '1' AND (comment_type= 'trackback' || comment_type = 'pingback') ORDER BY comment_date");
	}
}

if (!function_exists('trackbacks_template')) {

	/**
	 * Displays the trackbacks
	 *
	 */
	function trackbacks_template() {
		global $id;
		
		$template_file = TEMPLATEPATH . '/trackbacks.php';
		
		$trackbacks = get_approved_trackbacks($id);
		if (file_exists($template_file)) {
			require($template_file);
		} else { 
			require('trackbacks.php');
		}
	}
}
?>