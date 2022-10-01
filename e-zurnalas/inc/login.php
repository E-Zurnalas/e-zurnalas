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
			echo true;
		}
		
	}
}
add_filter( 'wp_ajax_nopriv_login', 'login' );
add_filter( 'wp_ajax_login', 'login' );