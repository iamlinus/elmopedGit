=== Gallery with No Image Links ===
Contributors: sators
Tags: gallery, link
Requires at least: 3.0.0
Tested up to: 3.3.1
Stable tag: trunk

Allows users to use the [gallery] shorttag with link="none" in order to have an image gallery with no links. [gallery link="none"]

== Description ==

This plugin allows you to add link="none" to your Gallery shortcodes to create a gallery where the images do not have any links associated with them.

To use, simply add the shortcode as follows to your page/post: [gallery link="none"]

== Installation ==

1. Upload `gallery-nolink.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place [gallery link="none"] where you would like your image gallery.

== Frequently Asked Questions ==

= The link="none" is not working. Why? =

Other plugins that affect the [gallery] shorttag may overwrite this plugins capability to apply the link="none" functionality.  Try disabling other plugins and test again.

= In the Gallery screen, I don't see where I can set the link to none. How do I use this? =

You will need to insert a Gallery as normal, and then switch to the "HTML" tab of the page/post.  Find where the editor has inserted the [gallery] tag and make sure that link="none" is within the [gallery], i.e. [gallery link="none"].  Be sure that there is only one entry for "link".

== Screenshots ==

== Changelog ==

= 1.0 =
* Initial Release

