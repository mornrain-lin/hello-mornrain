<?php
/**
 * Main plugin class.
 *
 * @package Hello_MornRain
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Hello_Mornrain' ) ) :
	/**
	 * Bootstraps Hello MornRain.
	 *
	 * @since 1.0.0
	 */
	final class Hello_Mornrain {

		/**
		 * Shared instance.
		 *
		 * @since 1.0.0
		 * @var Hello_Mornrain|null
		 */
		private static $instance = null;

		/**
		 * Retrieve the shared instance, creating it on first call.
		 *
		 * @since 1.0.0
		 * @return Hello_Mornrain
		 */
		public static function instance() {
			if ( null === self::$instance ) {
				self::$instance = new self();
			}

			return self::$instance;
		}

		/**
		 * Wire up the plugin.
		 *
		 * @since 1.0.0
		 */
		private function __construct() {
			$this->includes();
			$this->hooks();
		}

		/**
		 * Load module files.
		 *
		 * @since 1.0.0
		 * @return void
		 */
		private function includes() {
			require_once HELLO_MORNRAIN_PATH . 'includes/shortcode-hello.php';
		}

		/**
		 * Register WordPress hooks.
		 *
		 * @since 1.0.0
		 * @return void
		 */
		private function hooks() {
			add_action( 'init', array( $this, 'register_shortcodes' ) );
		}

		/**
		 * Register the [hello] shortcode.
		 *
		 * @since 1.0.0
		 * @return void
		 */
		public function register_shortcodes() {
			add_shortcode( 'hello', 'hello_mornrain_shortcode_hello' );
		}
	}
endif;
