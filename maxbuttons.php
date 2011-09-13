<?php
/*
Plugin Name: MaxButtons
Plugin URI: http://maxfoundry.com/plugins/maxbuttons/
Description: The ultimate plugin for creating beautiful CSS3 call-to-action buttons.
Version: 1.2.1
Author: Max Foundry
Author URI: http://maxfoundry.com

Copyright 2011 Max Foundry, LLC (http://maxfoundry.com)
*/

define('MAXBUTTONS_VERSION_KEY', 'maxbuttons_version');
define('MAXBUTTONS_VERSION_NUM', '1.2.1');

$installed_version = get_option('MAXBUTTONS_VERSION_KEY');

maxbuttons_set_global_paths();
maxbuttons_set_activation_hooks();

function maxbuttons_set_global_paths() {	
	if (!defined('MAXBUTTONS_PLUGIN_NAME'))
		define('MAXBUTTONS_PLUGIN_NAME', trim(dirname(plugin_basename(__FILE__)), '/'));

	if (!defined('MAXBUTTONS_PLUGIN_DIR'))
		define('MAXBUTTONS_PLUGIN_DIR', WP_PLUGIN_DIR . '/' . MAXBUTTONS_PLUGIN_NAME);

	if (!defined('MAXBUTTONS_PLUGIN_URL'))
		define('MAXBUTTONS_PLUGIN_URL', WP_PLUGIN_URL . '/' . MAXBUTTONS_PLUGIN_NAME);
}

function maxbuttons_set_activation_hooks() {
	register_activation_hook(__FILE__, 'maxbuttons_register_activation_hook');
	register_deactivation_hook(__FILE__, 'maxbuttons_register_deactivation_hook');
}

function maxbuttons_register_activation_hook() {
	if (function_exists('is_multisite') && is_multisite()) {
		if (isset($_GET['networkwide']) && ($_GET['networkwide'] == 1)) {
			maxbuttons_call_function_for_each_site('maxbuttons_activate');
			return;
		}
	}
	
	// Otherwise do it for a single blog/site
	maxbuttons_activate();
}

function maxbuttons_activate() {
	maxbuttons_create_database_table();
	update_option(MAXBUTTONS_VERSION_KEY, MAXBUTTONS_VERSION_NUM);
}

function maxbuttons_register_deactivation_hook() {
	if (function_exists('is_multisite') && is_multisite()) {
		if (isset($_GET['networkwide']) && ($_GET['networkwide'] == 1)) {
			maxbuttons_call_function_for_each_site('maxbuttons_deactivate');
			return;
		}
	}
	
	// Otherwise do it for a single blog/site
	maxbuttons_deactivate();
}

function maxbuttons_deactivate() {
	delete_option(MAXBUTTONS_VERSION_KEY);
}

function maxbuttons_call_function_for_each_site($function) {
	global $wpdb;
	
	// Hold this so we can switch back to it
	$root_blog = $wpdb->blogid;
	
	// Get all the blogs/sites in the network and invoke the function for each one
	$blog_ids = $wpdb->get_col($wpdb->prepare("SELECT blog_id FROM $wpdb->blogs"));
	foreach ($blog_ids as $blog_id) {
		switch_to_blog($blog_id);
		call_user_func($function);
	}
	
	// Now switch back to the root blog
	switch_to_blog($root_blog);
}

add_filter('plugin_action_links', 'maxbuttons_plugin_action_links', 10, 2);
function maxbuttons_plugin_action_links($links, $file) {
	static $this_plugin;
	
	if (!$this_plugin) {
		$this_plugin = plugin_basename(__FILE__);
	}
	
	if ($file == $this_plugin) {
		$dashboard_link = '<a href="' . admin_url() . 'admin.php?page=maxbuttons-controller&action=list">Buttons</a>';
		array_unshift($links, $dashboard_link);
	}

	return $links;
}

add_action('admin_menu', 'maxbuttons_admin_menu');
function maxbuttons_admin_menu() {
	$page_title = 'MaxButtons : Buttons';
	$menu_title = 'MaxButtons';
	$capability = 'manage_options';
	$menu_slug = 'maxbuttons-controller';
	$function = 'maxbuttons_controller';
	add_menu_page($page_title, $menu_title, $capability, $menu_slug, $function);
}

function maxbuttons_controller() {
	include_once 'includes/maxbuttons-controller.php';
}

add_action('wp_print_scripts', 'maxbuttons_add_jquery_to_output');
function maxbuttons_add_jquery_to_output() {
	wp_enqueue_script('jquery');
	do_action('maxbuttons_add_jquery_to_output');
}

add_action('admin_print_styles', 'maxbuttons_enqueue_styles_into_wp_admin');
function maxbuttons_enqueue_styles_into_wp_admin() {
	$handle = 'maxbuttons-css';
	$src = MAXBUTTONS_PLUGIN_URL . '/styles.css';
	
	wp_register_style($handle, $src);
	wp_enqueue_style($handle);
}

add_action('admin_print_styles', 'maxbuttons_enqueue_colorpicker_styles_into_wp_admin');
function maxbuttons_enqueue_colorpicker_styles_into_wp_admin() {
	$handle = 'maxbuttons-colorpicker-css';
	$src = MAXBUTTONS_PLUGIN_URL . '/js/colorpicker/css/colorpicker.css';
	
	wp_register_style($handle, $src);
	wp_enqueue_style($handle);
}

add_action('admin_print_scripts', 'maxbuttons_enqueue_colorpicker_script_into_wp_admin');
function maxbuttons_enqueue_colorpicker_script_into_wp_admin() {
	$handle = 'maxbuttons-colorpicker-js';
	$src = MAXBUTTONS_PLUGIN_URL . '/js/colorpicker/colorpicker.js';
	
	wp_enqueue_script($handle, $src);
}

function maxbuttons_create_database_table() {
	global $installed_version;
	
	$table_name = maxbuttons_get_buttons_table_name();
	
	// IMPORTANT: There MUST be two spaces between the PRIMARY KEY keywords
	// and the column name, and the column name MUST be in parenthesis.
	$sql = "CREATE TABLE " . $table_name . " (
				id INT NOT NULL AUTO_INCREMENT,
				name VARCHAR(100) NULL,
				description TEXT NULL,
				url VARCHAR(500) NULL,
				text VARCHAR(100) NULL,
				text_font_family VARCHAR(50) NULL,
				text_font_size VARCHAR(10) NULL,
				text_font_style VARCHAR(10) NULL,
				text_font_weight VARCHAR(10) NULL,
				text_color VARCHAR(10) NULL,
				text_color_hover VARCHAR(10) NULL,
				text_shadow_offset_left VARCHAR(10) NULL,
				text_shadow_offset_top VARCHAR(10) NULL,
				text_shadow_width VARCHAR(10) NULL,
				text_shadow_color VARCHAR(10) NULL,
				text_shadow_color_hover VARCHAR(10) NULL,
				text_padding_top VARCHAR(10) NULL,
				text_padding_bottom VARCHAR(10) NULL,
				text_padding_left VARCHAR(10) NULL,
				text_padding_right VARCHAR(10) NULL,
				border_radius_top_left VARCHAR(10) NULL,
				border_radius_top_right VARCHAR(10) NULL,
				border_radius_bottom_left VARCHAR(10) NULL,
				border_radius_bottom_right VARCHAR(10) NULL,
				border_style VARCHAR(10) NULL,
				border_width VARCHAR(10) NULL,
				border_color VARCHAR(10) NULL,
				border_color_hover VARCHAR(10) NULL,
				box_shadow_offset_left VARCHAR(10) NULL,
				box_shadow_offset_top VARCHAR(10) NULL,
				box_shadow_width VARCHAR(10) NULL,
				box_shadow_color VARCHAR(10) NULL,
				box_shadow_color_hover VARCHAR(10) NULL,
				gradient_start_color VARCHAR(10) NULL,
				gradient_start_color_hover VARCHAR(10) NULL,
				gradient_end_color VARCHAR(10) NULL,
				gradient_end_color_hover VARCHAR(10) NULL,
				new_window VARCHAR(10) NULL,
				PRIMARY KEY  (id)
			);";

	if (!maxbuttons_database_table_exists($table_name)) {
		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		dbDelta($sql);
	}
	
	if (maxbuttons_database_table_exists($table_name) && $installed_version != MAXBUTTONS_VERSION_NUM) {
		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		dbDelta($sql);
	}
}

function maxbuttons_get_buttons_table_name() {
	global $wpdb;
	return $wpdb->prefix . 'maxbuttons_buttons';
}

function maxbuttons_database_table_exists($table_name) {
	global $wpdb;
	return strtolower($wpdb->get_var("SHOW TABLES LIKE '$table_name'")) == strtolower($table_name);
}

function maxbuttons_log_me($message) {
    if (WP_DEBUG === true) {
        if (is_array($message) || is_object($message)) {
            error_log(print_r($message, true));
        } else {
            error_log($message);
        }
    }
}

include_once 'includes/shortcode.php';
?>