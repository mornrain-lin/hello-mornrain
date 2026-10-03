<?php
/**
 * Plugin Name: Hello MornRain
 * Plugin URI: https://github.com/mornrain-lin/hello-mornrain
 * Description: A minimal teaching plugin that registers the [hello] shortcode and prints a friendly greeting.
 * Version: 1.0.0
 * Requires at least: 6.0
 * Requires PHP: 8.0
 * Author: MornRain
 * Author URI: https://github.com/mornrain-lin
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: hello-mornrain
 * Domain Path: /languages
 *
 * @package Hello_MornRain
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'HELLO_MORNRAIN_VERSION', '1.0.0' );
define( 'HELLO_MORNRAIN_FILE', __FILE__ );
define( 'HELLO_MORNRAIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'HELLO_MORNRAIN_URL', plugin_dir_url( __FILE__ ) );

require_once HELLO_MORNRAIN_PATH . 'includes/class-hello-mornrain.php';

if ( ! function_exists( 'hello_mornrain' ) ) :
	/**
	 * Return the shared plugin instance.
	 *
	 * @since 1.0.0
	 * @return Hello_Mornrain
	 */
	function hello_mornrain() {
		return Hello_Mornrain::instance();
	}
endif;

hello_mornrain();
