(function($) {
	$(document).ready(function(){
		$('#login-form').on("submit", function(event){
			event.preventDefault();
			alert("Submitted");
		});
	});
});
