$(function() {

	$("#username_error_message").hide();
	$("#password_error_message").hide();
	$("#retpassword_error_message").hide();
	$("#email_error_message").hide();

	var error_username = false;
	var error_password = false;
	var error_retpassword = false;
	var error_email = false;
		

	$("#form_username").focusout(function() {

		check_username();
	});

	$("#form_password").focusout(function() {

		check_password();
	});

	$("#form_retpassword").focusout(function() {

		check_retpassword();
	});

	$("#form_email").focusout(function() {

		check_email();
	});


	function check_username() {
	
		var username_length = $("#form_username").val().length;
		
		if(username_length == 0) {
			$("#username_error_message").html("Please enter username");
			$("#username_error_message").show();
			error_username = true;
		} else {
			if((username_length > 0 && username_length < 6) || (username_length > 20)) {
			$("#username_error_message").html("Should be between 6-20 characters");
			$("#username_error_message").show();
			error_username = true;
			}else {
				$("#username_error_message").hide();
			}
			
		}
	
	}

	function check_password() {
	
		var password_length = $("#form_password").val().length;
		
		if(password_length < 8) {
			$("#password_error_message").html("At least 8 characters");
			$("#password_error_message").show();
			error_password = true;
		} else {
			$("#password_error_message").hide();
		}
	
	}

	function check_retpassword() {
	
		var retpassword_length = $("#form_retpassword").val().length;
		
		if(retpassword_length < 8) {
			$("#retpassword_error_message").html("At least 8 characters");
			$("#retpassword_error_message").show();
			error_retpassword = true;
		} else {
			$("#retpassword_error_message").hide();
		}
	
	}

	function check_email() {

		var pattern = new RegExp(/^[a-z][a-z0-9]*(_[a-z0-9]+)*(\.[a-z0-9]+)*@[a-z0-9]([a-z0-9-][a-z0-9]+)*(\.[a-z]{2,4}){1,2}$/);
								 
		if(pattern.test($("#form_email").val())) {
			$("#email_error_message").hide();
		} else {
			$("#email_error_message").html("Invalid email address");
			$("#email_error_message").show();
			error_email = true;
		}
	
	}

	$("#add_user_form").submit(function() {
		
		error_username = false;
		error_password = false;
		error_retpassword = false;
		error_email = false;
						
		check_username();
		check_password();
		check_retpassword();
		check_email();
		
		if(error_username == false && error_password == false &&  error_retpassword == false && error_email == false) {
			return true;
		} else {
			return false;	
		}

	});

});