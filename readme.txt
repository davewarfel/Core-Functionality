=== Custom Functions ===
Contributors: escapecreative, analternateroute
Tags: custom, functions
Tested up to: 3.7.1
Stable tag: trunk
License: GPL2

This plugin contains all your site's added functionality, in addition to what's available in WordPress Core. It keeps all content & functionality theme-independent. In many cases, add code to this plugin instead of your theme's functions.php file.

== Description ==

More details available on github: https://github.com/davewarfel/custom-functions

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

There are separate folders for each of these assets in the `assets` folder.

== Changelog ==

Developers: Please keep track of any changes you make to this plugin in the readme.txt file.

= 1.0 =

* 11/19/2013: Created plugin