<?php
/*
Plugin Name: Gallery with No Image Links
Plugin URI: http://blog.mattsatorius.com/technology/web-design/wordpress-gallery-shortcode-with-no-image-link/
Description: Allows you to use the shortcode [gallery link="none"] to have an image gallery with no links
Version: 1.0
Author: Matt Satorius, Eduardo Pittol
Author URI: http://blog.mattsatorius.org/
Disclaimer: Use at your own risk. No warranty expressed or implied is provided.
*/

add_shortcode( 'gallery', 'new_gallery_shortcode' );

/**
* The Gallery shortcode - modified for link="none".
*/
function new_gallery_shortcode($attr) {
global $post, $wp_locale;

$output = gallery_shortcode($attr);

// remove link
if($attr['link'] == "none") {
$output = preg_replace(array('/<a[^>]*>/', '/<\/a>/'), '', $output);
}

return $output;

}

?>