=== Custom Functions ===
Contributors: escapecreative, analternateroute
Tags: custom, functions
Tested up to: 3.7.1
Stable tag: trunk
License: GPL2

This plugin contains all your site's added functionality. It keeps all content & functionality theme-independent. In many cases, add code to this plugin instead of your theme's functions.php file.

== Description ==

The following functions are included. Feel free to delete them or comment them out.

Admin Functions:

* Syntax for registering custom post types & taxonomies
* Remove the default contact methods from user profile pages (aim, jabber, yim)
* Add custom image sizes to <select> dropdown when inserting images into a post
* Custom login styles for wp-login.php (load CSS, custom logo, custom message)
* A file for creating custom shortcodes
* A file for creating custom widgets
* A file for editing the admin dashboard
* A file for general admin functions that don't fit anywhere else

Frontend Functions:

* A file for registering & enqueueing styles and scripts
* Clean up the <head>
* is_tree - Check if current page is a subpage of its parent
* the_slug - Echo the post slug
* Add odd/even post class on archive pages
* Add class to posts if they have a featured image

== Installation ==

1. Browse the files & folders within `/custom-functions/`
1. Delete or comment out anything that you don't want to use
1. Add your own custom functions or code snippets
1. Upload the `/custom-functions/` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Where did you come up with all these functions? =

I found myself using many of the same code snippets on every site I developed. I would also reuse code because I didn't memorize the syntax for adding post types, taxonomies, shortcodes, etc. This plugin is a collection of snippets from 5+ years of WordPress development. I created a few on my own, but most were borrowed from others in the WordPress community.

= What's with the folder structure? =

I tried to separate the code into logical chunks. I'm a huge fan of clean, easy-to-understand code, and this was my way of trying to achieve that. Feel free to move the folders/files around, or consolidate all functions into one .php file.

If you change the folder structure, just be sure to update all the include statements to reflect the new location.

= Where do I put CSS files, javascript & images? =

There are separate folders for each of these assets in the `assets` folder. All assets related to functions in this plugin should be included in this folder.

== Changelog ==

Developers: Please keep track of any changes you make to this plugin in the readme.txt file.

= 1.0 =

* 11/19/2013: Created plugin