<?php

/**
 * @since             1.0.0
 * @package           Atc_Widget
 *
 * @wordpress-plugin
 * Plugin Name:       Accessible Tag Cloud Widget
 * Plugin URI:        https://github.com/mikelittle/accessible-tag-cloud-widget
 * Description:       This is a proof of concept plugin to try out ideas for an alternative tag cloud widget that is more accessible than the built in WordPress tag cloud widget.
 * Version:           1.0.1
 * Author:            WordCamp London 2016 Contributor day Accessiblity team, et al 
 * Author URI:        https://2016.london.wordcamp.org/contributor-day-schedule-info/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       atc-widget
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-atc-widget-activator.php
 */
function activate_atc_widget() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-atc-widget-activator.php';
	Atc_Widget_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-atc-widget-deactivator.php
 */
function deactivate_atc_widget() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-atc-widget-deactivator.php';
	Atc_Widget_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_atc_widget' );
register_deactivation_hook( __FILE__, 'deactivate_atc_widget' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-atc-widget.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_atc_widget() {

	$plugin = new Atc_Widget();
	$plugin->run();

}
run_atc_widget();
