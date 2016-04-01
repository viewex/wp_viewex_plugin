<?php

/**
 * Custom plugin to store the modifications of the viewex website
 *
 * @since             1.0.0
 * @package           Viewex
 *
 * @wordpress-plugin
 * Plugin Name:       Viewex Plugin
 * Description:       Custom plugin to store the modifications of the viewex website.
 * Version:           1.0.0
 * Author:            Ludovic Viaud
 * Text Domain:       viewex
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-viewex-activator.php
 */
function activate_viewex() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-viewex-activator.php';
	Viewex_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-viewex-deactivator.php
 */
function deactivate_viewex() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-viewex-deactivator.php';
	Viewex_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_viewex' );
register_deactivation_hook( __FILE__, 'deactivate_viewex' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-viewex.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_viewex() {

	$plugin = new Viewex();
	$plugin->run();

}
run_viewex();
