$(function() {

	$("#pass_error_message").hide();
	$("#username_error_message").hide();

	var error_pass = false;
	var error_username = false;
		

	$("#form_username").focusout(function() {

		check_username();
	});

	$("#form_pass").focusout(function() {

		check_pass();
		
	});


	function check_username() {
	
		var username_length = $("#form_username").val().length;

		if(username_length == 0) {
			$("#username_error_message").html("Please Enter Your Usename");
			$("#username_error_message").show();
			error_username = true;
		}
		else {
			if((username_length > 0 && username_length < 6) || (username_length > 20)) {
			$("#username_error_message").html("Username between 6-20 characters");
			$("#username_error_message").show();
			error_username = true;
			}else {
				$("#username_error_message").hide();
			}
		} 
	
	}

	function check_pass() {
	
		var pass_length = $("#form_pass").val().length;
		
		if(pass_length == 0) {
			$("#pass_error_message").html("Please Enter Your Password");
				$("#pass_error_message").show();
				error_pass = true;
		}else {
			if(pass_length > 0 && pass_length < 8) {
				$("#pass_error_message").html("At least 8 characters");
				$("#pass_error_message").show();
				error_pass = true;
			} else {
				$("#pass_error_message").hide();
			}
		}
		
	}

	$("#login_form").submit(function() {
											
		error_pass = false;
		error_username = false;
											
		check_pass();
		check_username();
		
		if(error_pass == false && error_username == false) {
			return true;
		} else {
			return false;	
		}

	});

});