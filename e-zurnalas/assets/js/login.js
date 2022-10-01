jQuery(document).ready(function(){
	jQuery('#login-form').on("submit", function(event){
		event.preventDefault();
		let login = jQuery('#username').val();
		let pass = jQuery('#password').val();
		jQuery.ajax({
			url: loginajax.ajaxUrl,
			data : {
				user: login,
				pass: pass,
				action : 'login',
			},
			type: 'POST',
			success: function (data) {
				console.log(data);
			}
		});
	});
});

