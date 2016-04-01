<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Viewex
 * @subpackage Viewex/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and hooks admin-specific stylesheet and JavaScript.
 *
 * @package    Viewex
 * @subpackage Viewex/admin
 * @author     Ludovic Viaud
 */
class Viewex_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $viewex    The ID of this plugin.
	 */
	private $viewex;

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
	 * @param      string    $viewex       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $viewex, $version ) {

		$this->viewex = $viewex;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * An instance of this class should be passed to the run() function
		 * defined in Viewex_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Viewex_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->viewex, plugin_dir_url( __FILE__ ) . 'css/viewex-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * An instance of this class should be passed to the run() function
		 * defined in Viewex_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Viewex_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->viewex, plugin_dir_url( __FILE__ ) . 'js/viewex-admin.js', array( 'jquery' ), $this->version, false );

	}

}
