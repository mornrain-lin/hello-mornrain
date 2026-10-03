<?php
/**
 * Uninstall routine.
 *
 * Hello MornRain is intentionally stateless: it stores no options, no custom
 * tables, no transients and no user meta. There is therefore nothing to remove.
 * This file makes that contract explicit for reviewers and automated tooling.
 *
 * @package Hello_MornRain
 */

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

// Nothing to clean up: this plugin keeps no persistent data.
