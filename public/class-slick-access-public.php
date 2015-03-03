<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://alastaircox.com
 * @since      1.0.0
 *
 * @package    Slick_Access
 * @subpackage Slick_Access/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the dashboard-specific stylesheet and JavaScript.
 *
 * @package    Slick_Access
 * @subpackage Slick_Access/public
 * @author     Alastair Cox <alastair@alastaircox.com>
 */
class Slick_Access_Public {

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
	 * @param      string    $slick_access       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $slick_access, $version ) {

		$this->slick_access = $slick_access;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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

		wp_enqueue_style( $this->slick_access, plugin_dir_url( __FILE__ ) . 'css/slick-access-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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

		wp_enqueue_script( $this->slick_access, plugin_dir_url( __FILE__ ) . 'js/slick-access-public.js', array( 'jquery' ), $this->version, false );

	}

}
