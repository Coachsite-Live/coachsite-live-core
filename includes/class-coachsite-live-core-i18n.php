<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://flauntyoursite.com
 * @since      1.0.0
 *
 * @package    Coachsite_Live_Core
 * @subpackage Coachsite_Live_Core/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Coachsite_Live_Core
 * @subpackage Coachsite_Live_Core/includes
 * @author     William Bay <william@flauntyoursite.com>
 */
class Coachsite_Live_Core_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'coachsite-live-core',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
