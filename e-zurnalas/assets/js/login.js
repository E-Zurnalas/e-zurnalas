(function($) {
	$( document ).ready(function() {

		$( "#login-form" ).submit(function( e ) {
			console.log('test');
			alert('submitted');
			e.preventDefault();
		});
	});
});
