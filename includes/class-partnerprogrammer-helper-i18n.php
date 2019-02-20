<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://partnerprogrammer.com
 * @since      1.0.0
 *
 * @package    Partnerprogrammer_Helper
 * @subpackage Partnerprogrammer_Helper/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Partnerprogrammer_Helper
 * @subpackage Partnerprogrammer_Helper/includes
 * @author     Partner Programmer <wp@partnerprogrammer.com>
 */
class Partnerprogrammer_Helper_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'partnerprogrammer-helper',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
