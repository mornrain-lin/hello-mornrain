<?php
/**
 * The [hello] shortcode.
 *
 * @package Hello_MornRain
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'hello_mornrain_shortcode_hello' ) ) :
	/**
	 * Render the [hello] shortcode.
	 *
	 * Usage: [hello], [hello name="Ada"], [hello name="Ada" class="lead"].
	 *
	 * @since 1.0.0
	 * @param array<string, mixed>|string $atts    Shortcode attributes.
	 * @param string|null                 $content Enclosed content, unused.
	 * @return string Escaped HTML ready for output.
	 */
	function hello_mornrain_shortcode_hello( $atts, $content = null ) {
		unset( $content );

		$atts = shortcode_atts(
			array(
				'name'  => __( 'World', 'hello-mornrain' ),
				'class' => '',
			),
			$atts,
			'hello'
		);

		$name    = sanitize_text_field( (string) $atts['name'] );
		$extra   = sanitize_html_class( (string) $atts['class'] );
		$classes = 'hello-mornrain';

		if ( '' !== $extra ) {
			$classes .= ' ' . $extra;
		}

		/**
		 * Filter the CSS class list of the greeting.
		 *
		 * @since 1.0.0
		 * @param string               $classes Space separated class list.
		 * @param array<string, mixed> $atts    Shortcode attributes.
		 */
		$classes = (string) apply_filters( 'hello_mornrain_shortcode_classes', $classes, $atts );

		$message = sprintf(
			/* translators: %s: the name being greeted. */
			__( 'Hello, %s! Greetings from MornRain.', 'hello-mornrain' ),
			$name
		);

		/**
		 * Filter the greeting message.
		 *
		 * @since 1.0.0
		 * @param string               $message Greeting text.
		 * @param string               $name    Name that was greeted.
		 * @param array<string, mixed> $atts    Shortcode attributes.
		 */
		$message = (string) apply_filters( 'hello_mornrain_shortcode_message', $message, $name, $atts );

		return sprintf(
			'<p class="%1$s">%2$s</p>',
			esc_attr( $classes ),
			esc_html( $message )
		);
	}
endif;
