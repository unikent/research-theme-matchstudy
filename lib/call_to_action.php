<?php


function matchstudy_add_call_to_action_menu() {
	register_nav_menu('calls_to_action', 'Homepage call to actions');
}

add_action('after_setup_theme','matchstudy_add_call_to_action_menu');


function matchstudy_output_call_to_action_menu(){
	wp_nav_menu(array(
		'menu' => 'calls_to_action',
		'depth'=>1
				));
}
add_action('banner_footer','matchstudy_output_call_to_action_menu');