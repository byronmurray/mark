<?php

function theme_scripts() {

	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/css/app.css' );
	wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/js/theme.js', array('jquery'), '', true );


}

add_action( 'wp_enqueue_scripts', 'theme_scripts' );
