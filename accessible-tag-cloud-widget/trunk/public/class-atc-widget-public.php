<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Atc_Widget
 * @subpackage Atc_Widget/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Atc_Widget
 * @subpackage Atc_Widget/public
 * @author     Your Name <email@example.com>
 */
class Atc_Widget_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $atc_widget    The ID of this plugin.
	 */
	private $atc_widget;

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
	 * @param      string    $atc_widget       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $atc_widget, $version ) {

		$this->atc_widget = $atc_widget;
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
		 * defined in Atc_Widget_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Atc_Widget_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		if ( apply_filters( 'atc_widget_include_css', true ) ) {
			wp_enqueue_style( $this->atc_widget, plugin_dir_url( __FILE__ ) . 'css/atc-widget-public.css', array(), $this->version, 'all' );
		}

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Atc_Widget_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Atc_Widget_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->atc_widget, plugin_dir_url( __FILE__ ) . 'js/atc-widget-public.js', array( 'jquery' ), $this->version, false );

	}

	public function register_widget() {
		register_widget( 'ATC_Tag_Cloud' );
	}

}
