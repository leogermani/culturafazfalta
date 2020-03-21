<?php

function cff_enqueue_styles() {
	$parent_style = 'tainacan-interface';
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'cff_enqueue_styles', 99 );
