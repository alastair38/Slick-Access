<?php

/**
 * The dashboard-specific functionality of the plugin.
 *
 * @link       http://alastaircox.com
 * @since      1.0.0
 *
 * @package    Slick_Access
 * @subpackage Slick_Access/admin
 */

/**
 * The dashboard-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the dashboard-specific stylesheet and JavaScript.
 *
 * @package    Slick_Access
 * @subpackage Slick_Access/admin
 * @author     Alastair Cox <alastair@alastaircox.com>
 */
class Slick_Access_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $slick_access    The ID of this plugin.
	 */
	private $slick_access;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $slick_access       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $slick_access, $version ) {

		$this->slick_access = $slick_access;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the Dashboard.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Slick_Access_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Slick_Access_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->slick_access, plugin_dir_url( __FILE__ ) . 'css/slick-access-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the dashboard.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Slick_Access_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Slick_Access_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->slick_access, plugin_dir_url( __FILE__ ) . 'js/slick-access-admin.js', array( 'jquery' ), $this->version, false );

	}

}
