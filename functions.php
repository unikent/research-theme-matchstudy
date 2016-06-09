<?php
/**
 * Theme includes
 * The $theme_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$theme_includes = [
	'lib/call_to_action.php',       // Add call to action menu
];

foreach($theme_includes as $file) {
	if(!$filepath = locate_template($file)) {
		trigger_error(sprintf(__('Error locating %s for inclusion', 'researchwp'), $file), E_USER_ERROR);
	}

	require_once $filepath;
}
unset($file, $filepath);
