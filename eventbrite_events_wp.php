<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://digitalideas.io/
 * @since             1.0.0
 * @package           Eventbrite_events_wp
 *
 * @wordpress-plugin
 * Plugin Name:       Eventbrite Events for Wordpress
 * Plugin URI:        http://digitalideas.io/plugins/eventbrite-events-wp
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Digital Ideas
 * Author URI:        https://digitalideas.io/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       eventbrite_events_wp
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
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-eventbrite_events_wp-activator.php
 */
function activate_eventbrite_events_wp() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-eventbrite_events_wp-activator.php';
	Eventbrite_events_wp_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-eventbrite_events_wp-deactivator.php
 */
function deactivate_eventbrite_events_wp() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-eventbrite_events_wp-deactivator.php';
	Eventbrite_events_wp_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_eventbrite_events_wp' );
register_deactivation_hook( __FILE__, 'deactivate_eventbrite_events_wp' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-eventbrite_events_wp.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_eventbrite_events_wp() {

	$plugin = new Eventbrite_events_wp();
	$plugin->run();

}
run_eventbrite_events_wp();
