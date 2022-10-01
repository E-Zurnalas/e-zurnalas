<?php
function login(): void {
	if(isset($_POST['user']) && isset($_POST['pass'])) {
		echo "good";
	}
}
add_filter( 'wp_ajax_nopriv_login', 'login' );
add_filter( 'wp_ajax_login', 'login' );