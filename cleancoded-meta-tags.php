<?php
/*
Plugin Name: Cleancoded Meta Tags
Plugin URI: https://wordpress.org/plugins/cleancoded-meta-tags/
Description: A super simple plugin to edit meta tags in all your pages, posts, categories, tags, custom post types and WooCommerce pages.
Author: Cleancoded
Author URI: https://cleancoded.com/
Version: 1.0
Text Domain: cleancoded-meta-tags
*/


// direct calls are not allowed
defined('ABSPATH') || die();



// define plugin file
if( !defined('CLEANCODED_PLUGIN_FILE') ){
    define( 'CLEANCODED_PLUGIN_FILE', plugin_basename( __FILE__ ) );
}



// define relative path to plugin directory
if( !defined('CLEANCODED_PLUGIN_DIR') ){
    define( 'CLEANCODED_PLUGIN_DIR',  dirname( plugin_basename( __FILE__ ) ) );
}



// define full path to plugin file
if( !defined('CLEANCODED_PLUGIN_FULL_PATH') ){
    define( 'CLEANCODED_PLUGIN_FULL_PATH',  __FILE__ );
}



// include core class
if ( ! class_exists( 'CLEANCODED_Meta_Tags' ) ){
	require_once dirname( __FILE__ ) . '/includes/class-cleancoded-meta-tags.php';
}



// main instance of the plugin
return CLEANCODED_Meta_Tags::get_instance();
