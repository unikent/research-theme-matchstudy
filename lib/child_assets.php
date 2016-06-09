<?php

use Unikent\ResearchWP\Assets;
/**
* Theme assets
*/
function match_theme_assets() {
wp_enqueue_style('child/css', Assets\asset_uri('styles/main.css',false), false, filemtime(Assets\asset_path('styles/main.css',false)));
wp_enqueue_script('child/js', Assets\asset_uri('scripts/child.js',false), [], filemtime(Assets\asset_path('scripts/child.js',false)), true);

}
add_action('wp_enqueue_scripts', 'match_theme_assets', 99);


function match_dequeue_parent_theme_assets() {
	wp_dequeue_style('main/css');
}
add_action('wp_enqueue_scripts', 'match_dequeue_parent_theme_assets', 101);

