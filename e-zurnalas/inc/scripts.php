<?php
/**
 * Enqueue scripts and styles.
 */
function e_zurnalas_scripts() {
	wp_enqueue_style( 'e-zurnalas-style', get_stylesheet_uri(), array(), _S_VERSION );
	
	wp_enqueue_script( 'e-zurnalas-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true );
	
	if(is_page_template('login-template.php')) {
		wp_enqueue_script( 'login', get_template_directory_uri() . '/assets/js/login.js', array(), _S_VERSION, true );
	}
	
}
add_action( 'wp_enqueue_scripts', 'e_zurnalas_scripts' );