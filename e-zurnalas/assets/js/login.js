jQuery(document).ready(function(){
	jQuery('#login-form').on("submit", function(event){
		event.preventDefault();
		alert("Submitted");
	});
});

