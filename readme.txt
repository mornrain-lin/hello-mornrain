=== Hello MornRain ===
Contributors: mornrain
Donate link: https://github.com/mornrain-lin
Tags: shortcode, greeting, hello, beginner, teaching
Requires at least: 6.0
Tested up to: 6.6
Requires PHP: 8.0
Stable tag: 1.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A minimal teaching plugin that registers the [hello] shortcode and prints a friendly greeting.

== Description ==

Hello MornRain is the smallest useful WordPress plugin you can build. It
registers a single shortcode and prints a greeting, which makes it an ideal
starting point for learning how plugins are structured.

Drop `[hello]` into any post, page or widget and it renders:

    <p class="hello-mornrain">Hello, World! Greetings from MornRain.</p>

The shortcode accepts two optional attributes:

* `name`  - who to greet. Defaults to `World`.
* `class` - an extra CSS class added next to `hello-mornrain`.

Examples:

    [hello]
    [hello name="Ada"]
    [hello name="Ada" class="lead"]

Both attributes are sanitised before use and every printed value is escaped, so
the shortcode is safe to expose to authors and editors.

This plugin stores nothing you did not explicitly configure, sends
no data to any remote service, and adds no custom database tables.

== Installation ==

1. Upload the `hello-mornrain` folder to the `/wp-content/plugins/` directory, or
   install the ZIP through *Plugins > Add New > Upload Plugin*.
2. Activate the plugin through the *Plugins* screen in WordPress.

== Frequently Asked Questions ==

= Does this plugin work with the block editor? =

Yes. Add a Shortcode block and type `[hello]`, or place the shortcode inside a
classic editor post.

= Can I change the greeting text? =

Yes, with the `hello_mornrain_shortcode_message` filter, or by overriding the
translation of the greeting string.

= Does it store anything in the database? =

No. The plugin is completely stateless, which is why `uninstall.php` has
nothing to delete.

= Is it multisite compatible? =

Yes. Nothing is stored per site, so it behaves identically on single site and
multisite installations.

== Screenshots ==

1. The plugin working on the front end.
2. The relevant WordPress admin screen.

== Changelog ==

= 1.0.0 =
* Initial public release.

== Upgrade Notice ==

= 1.0.0 =
Initial public release.
