<?php

function cff_enqueue_styles() {
	$parent_style = 'tainacan-interface';
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_script( $parent_style, get_stylesheet_directory_uri() . '/footer.js', ['jquery'], '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'cff_enqueue_styles', 99 );


add_action( 'init', 'cff_load_events_calendar_textdomain' );
function cff_load_events_calendar_textdomain() {
	load_plugin_textdomain( 'events-manager', false, '../themes/culturafazfalta/' );
}

if ( ! get_option('consent_updated') ) {
	update_option('consent_updated', true);
	update_option('dbem_data_privacy_consent_text', 'Eu aceito que as informações sejam armazenadas no site Cultura Faz Falta');
}

function additional_custom_styles() {

    /*Enqueue The Styles*/
    wp_enqueue_style( 'fonts_novas', 'https://cdn.rawgit.com/mfd/f3d96ec7f0e8f034cc22ea73b3797b59/raw/856f1dbb8d807aabceb80b6d4f94b464df461b3e/gotham.css');
}
add_action( 'wp_enqueue_scripts', 'additional_custom_styles' );

