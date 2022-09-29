(function($) {
	$( document ).ready(function() {

		$( "#login-form submit" ).click(function( e ) {
			e.preventDefault();
			alert('submitted');
		});
	});
});
