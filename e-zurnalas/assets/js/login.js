(function($) {
	$( document ).ready(function() {

		$( "#login-form" ).submit(function( e ) {
			alert('submitted');
			e.preventDefault();
		});
	});
});
