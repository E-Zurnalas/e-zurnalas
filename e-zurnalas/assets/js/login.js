jQuery(document).ready(function(){
	jQuery('#login-form').on("submit", function(event){
		event.preventDefault();
		let login = jQuery('#username').val();
		let pass = jQuery('#password').val();
		let valid = 0;
		if(isEmail(login))
		{
			valid = 1;
		}
		if(pass.length === 0) {
			valid = 0;
		}
		if(valid) {
			jQuery.ajax({
				url: loginajax.ajaxUrl,
				data: {
					user: login,
					pass: pass,
					action: 'login',
				},
				type: 'POST',
				success: function (data) {
					window.location.replace(data.slice(0,-1));
				}
			});
		}
		else {
			jQuery('.error-message').show();
		}
	});
});

function isEmail(email) {
	let regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	return regex.test(email);
}