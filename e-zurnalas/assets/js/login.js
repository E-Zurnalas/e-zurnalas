jQuery(document).ready(function(){
	jQuery('#login-form').on("submit", function(event){
		event.preventDefault();
		let login = jQuery('#username').val();
		let pass = jQuery('$password').val();
		console.log(login + ' - ' + pass);
	});
});

