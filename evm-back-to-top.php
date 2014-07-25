<?php
/**
 * The WordPress Plugin Boilerplate.
 *
 * A foundation off of which to build well-documented WordPress plugins that
 * also follow WordPress Coding Standards and PHP best practices.
 *
 * @package   EVM_Back_To_Top
 * @author    Jon Huther <jon@evm.io>
 * @license   GPL-2.0+
 * @link      http://evm.io
 * @copyright 2014 Jon Huther, Elite Venture Media
 *
 * @wordpress-plugin
 * Plugin Name:       EVM Back To Top
 * Plugin URI:        http://wordpress.org/plugins/evm-back-to-top
 * Description:       This is a simple plugin with a few cusomization options that adds a back to top link at bottom of page. 
 * Version:           1.0.0
 * Author:            Jon Huther, Elite Venture Media
 * Author URI:        http://evm.io
 * Text Domain:       plugin-name-locale
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/eliteventure/evm-back-to-top
 * WordPress-Plugin-Boilerplate: v2.6.1
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/*----------------------------------------------------------------------------*
 * Public-Facing Functionality
 *----------------------------------------------------------------------------*/

/*
 * @TODO:
 *
 * - replace `class-plugin-name.php` with the name of the plugin's class file
 *
 */
require_once( plugin_dir_path( __FILE__ ) . 'public/class-evm-back-to-top.php' );

/*
 * Register hooks that are fired when the plugin is activated or deactivated.
 * When the plugin is deleted, the uninstall.php file is loaded.
 *
 * @TODO:
 *
 * - replace Plugin_Name with the name of the class defined in
 *   `class-plugin-name.php`
 */
register_activation_hook( __FILE__, array( 'EVM_Back_To_Top', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'EVM_Back_To_Top', 'deactivate' ) );

/*
 * @TODO:
 *
 * - replace Plugin_Name with the name of the class defined in
 *   `class-plugin-name.php`
 */
add_action( 'plugins_loaded', array( 'EVM_Back_To_Top', 'get_instance' ) );

/*----------------------------------------------------------------------------*
 * Dashboard and Administrative Functionality
 *----------------------------------------------------------------------------*/

/*
 * @TODO:
 *
 * - replace `class-plugin-name-admin.php` with the name of the plugin's admin file
 * - replace Plugin_Name_Admin with the name of the class defined in
 *   `class-plugin-name-admin.php`
 *
 * If you want to include Ajax within the dashboard, change the following
 * conditional to:
 *
 * if ( is_admin() ) {
 *   ...
 * }
 *
 * The code below is intended to to give the lightest footprint possible.
 */
if ( is_admin() && ( ! defined( 'DOING_AJAX' ) || ! DOING_AJAX ) ) {

	require_once( plugin_dir_path( __FILE__ ) . 'admin/class-evm-back-to-top-admin.php' );
	add_action( 'plugins_loaded', array( 'EVM_Back_To_Top_Admin', 'get_instance' ) );

}
