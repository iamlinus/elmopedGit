<?php



/*

Plugin Name: List Pages at Depth
Plugin URI: http://www.benhuson.co.uk/wordpress-plugins/list-pages-at-depth/
Description: Enhanced wp_list_pages function so you can specify a start depth. Useful for showing secondary and tertiary navigation independently from primary navigation.
Version: 1.3
Author: Ben Huson
Author URI: http://www.benhuson.co.uk/

Released under the GPL:
http://www.opensource.org/licenses/gpl-license.php

*/



require_once('includes/widget.php');



function list_pages_at_depth( $args = '') {
	
	global $post;
	
	if ( !isset($args['startdepth']) ) {
		$args['startdepth'] = 0;
	}
	
	if ( is_page() || $args['startdepth'] == 0 ) {
		
		$result = array();
		$result = list_pages_at_depth_parent( $post->ID, $result );
		
		if ( $args['startdepth'] < count($result) ) {
			$args['child_of'] = $result[$args['startdepth']];
			return wp_list_pages( $args );
		}
		
	}
}



function list_pages_at_depth_parent( $page_id, $result ) {
	
	$page = get_page($page_id);
	
	if ( !in_array($page->ID, $result) ) {
		array_unshift($result, $page->ID);
	}
	if ( !in_array($page->post_parent, $result) ) {
		array_unshift($result, $page->post_parent);
	}
	
	if ( $page->post_parent == 0 ) {
		return $result;
	} else {
		return list_pages_at_depth_parent($page->post_parent, $result);
	}

}



?>