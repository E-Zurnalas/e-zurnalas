<?php
/**
 * Enqueue scripts and styles.
 */
function e_zurnalas_scripts() {
	wp_enqueue_style( 'e-zurnalas-style', get_stylesheet_uri(), array(), _S_VERSION );
	
	wp_enqueue_script( 'e-zurnalas-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true );
	
	if(is_page_template('templates/login-template.php')) {
		wp_enqueue_script( 'login', get_template_directory_uri() . '/assets/js/login.js', array('jquery'), _S_VERSION, true);
	}
	
	/* Ajax */
	wp_localize_script('login', 'loginajax', array('ajaxUrl' => admin_url('admin-ajax.php')));
	
}
add_action( 'wp_enqueue_scripts', 'e_zurnalas_scripts' );