<?php
function login(): void {
	if(isset($_POST['user']) && isset($_POST['pass'])) {
		$creds = array(
			'user_login'    => $_POST['user'],
			'user_password' => $_POST['pass'],
			'remember'      => false
		);
		$user = wp_signon( $creds, true );
		
		if ( is_wp_error( $user ) ) {
			echo $user->get_error_message();
		}
		else {
			echo get_home_url();
		}
		
	}
}
add_filter( 'wp_ajax_nopriv_login', 'login' );
add_filter( 'wp_ajax_login', 'login' );

// User logged in, so redirect out of login page to home page
function user_logedin_redirect(): void {
	if(is_user_logged_in() && is_page_template('templates/login-template.php')) :
		$url = get_home_url();
		header( 'Location: ' . $url);
	endif;
}

add_action( 'template_redirect', 'user_needs_to_login' );

// User not logged in, so redirect to login page
function user_needs_to_login(): void {
	if(!is_user_logged_in() && !is_page_template('templates/login-template.php')) :
		$url = get_page_link(14);
		header( 'Location: ' . $url);
	endif;
}

add_action( 'template_redirect', 'user_logedin_redirect' );