<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * Dashboard. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://alastaircox.com
 * @since             1.0.0
 * @package           Slick_Access
 *
 * @wordpress-plugin
 * Plugin Name:       Slick Access
 * Plugin URI:        https://github.com/alastair38/swiper_accessible
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress dashboard.
 * GitHub Plugin URI: https://github.com/alastair38/Slick-Access
 * Version:           1.0.1
 * Author:            Alastair Cox
 * Author URI:        http://alastaircox.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       slick-access
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-slick-access-activator.php
 */
function activate_slick_access() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-slick-access-activator.php';
	Slick_Access_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-slick-access-deactivator.php
 */
function deactivate_slick_access() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-slick-access-deactivator.php';
	Slick_Access_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_slick_access' );
register_deactivation_hook( __FILE__, 'deactivate_slick_access' );

/**
 * The core plugin class that is used to define internationalization,
 * dashboard-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-slick-access.php';

function slick_access_scripts() {
	if (!is_admin()) {
		// register
		 wp_register_script( 'slick-cdn-js', 'http://cdn.jsdelivr.net/jquery.slick/1.4.1/slick.min.js', array('jquery'), null, false );
		wp_register_script('slick-local-js', plugins_url('/js/slick-access-public.js', __FILE__),array('slick-js'), true);
		// enqueue
	wp_enqueue_script('slick-cdn-js');
	wp_enqueue_script('slick-local-js');
	}
	add_action('wp_enqueue_scripts', 'slick_access_scripts');
}
function slick_access_styles() {
	// register
	wp_register_style('slick-local', plugins_url('/css/slick-access-public.css', __FILE__));
	wp_register_style( 'slick-main', '//cdn.jsdelivr.net/jquery.slick/1.4.1/slick.css', array(),'0.1.0',true);
	// enqueue
	wp_enqueue_style('slick-local');
	wp_enqueue_style('slick-main');
    add_action('wp_enqueue_scripts', 'slick_access_styles');
}

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_slick_access() {

	$plugin = new Slick_Access();
	$plugin->run();

}
run_slick_access();
