<?php
/**
 * Plugin Name: Custom Functions
 * Plugin URI: https://github.com/davewarfel/custom-functions
 * Description: This plugin contains all your site's added functionality. It keeps all content & functionality theme-independent. In many cases, add code to this plugin instead of your theme's functions.php file.
 * Version: 1.0
 * Author: Dave Warfel
 * Author URI: http://wpsmackdown.com/
 * License: GPL2
 */

// Plugin Directory 
define( 'PLUG_DIR', dirname( __FILE__ ) );

/**
 * Admin Functions
 * These functions affect the admin area of WordPress, and not the live site.
 */
 
// Post Types & Taxonomies
include_once( PLUG_DIR . '/functions/admin/posttypes-taxonomies.php' );

// Users
include_once( PLUG_DIR . '/functions/admin/users.php' );

// Shortcodes
include_once( PLUG_DIR . '/functions/admin/shortcodes.php' );

// Widgets
include_once( PLUG_DIR . '/functions/admin/widgets.php' );

// Media
include_once( PLUG_DIR . '/functions/admin/media.php' );

// Login
include_once( PLUG_DIR . '/functions/admin/login.php' );

// Dashboard
include_once( PLUG_DIR . '/functions/admin/dashboard.php' );


/**
 * Frontend Functions
 * These functions impact how things are displayed on your live website.
 */

// Styles & Scripts (CSS & Javascript)
include_once( PLUG_DIR . '/functions/frontend/styles-scripts.php' );

// General
include_once( PLUG_DIR . '/functions/frontend/general.php' );