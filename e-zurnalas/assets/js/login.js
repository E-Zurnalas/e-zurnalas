(function($) {
	$(document).ready(function(){
		$(document).on('submit', '#login-form', function (e) {
			e.preventDefault();
			alert("Submitted");
		});
	});
});
