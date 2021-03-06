<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/alykamb
 * @since             1.0.0
 * @package           Product_Material_Selection
 *
 * @wordpress-plugin
 * Plugin Name:       Product Material Selection
 * Plugin URI:        https://github.com/alykamb/product-material-selection/
 * Description:       Add registering multiple overlay images for chosen post types
 * Version:           1.0.0
 * Author:            Alykam Burdzaki
 * Author URI:        https://github.com/alykamb
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       pms
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PRODUCT_MATERIAL_SELECTION_VERSION', '1.0.0' );

add_action('init','do_stuff');
function do_stuff(){
  // $current_user = wp_get_current_user();
  // ...
	require_once('admin/index.php');
	require_once('client/index.php');
}

