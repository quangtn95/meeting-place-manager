$(function() {

	$("#meeting_name_error_message").hide();
	$("#start_error_message").hide();
	$("#end_error_message").hide();
	$("#number_error_message").hide();

	var error_meeting_name = false;
	var error_start = false;
	var error_end = false;
	var error_num = false;
		

	$("#form_meeting_name").focusout(function() {

		check_meeting_name();
	});

	$("#form_start").focusout(function() {

		check_start();
	});

	$("#form_end").focusout(function() {

		check_end();
	});

	$("#form_number").focusout(function() {

		check_num();
	});


	function check_meeting_name() {
	
		var name_length = $("#form_meeting_name").val().length;
		
		if(name_length == 0) {
			$("#meeting_name_error_message").html("Please enter Meeting name");
			$("#meeting_name_error_message").show();
			error_name = true;
		} else {
			$("#meeting_name_error_message").hide();
		}
	
	}

	function check_start() {
	
		var start_length = $("#form_start").val().length;
		
		if(start_length == 0) {
			$("#start_error_message").html("Enter time start");
			$("#start_error_message").show();
			error_start = true;
		} else {
			$("#start_error_message").hide();
		}
	
	}

	function check_end() {
	
		var end_length = $("#form_end").val().length;
		
		if(end_length == 0) {
			$("#end_error_message").html("Enter time end");
			$("#end_error_message").show();
			error_end = true;
		} else {
			$("#end_error_message").hide();
		}
	
	}

	function check_num() {
	
		var num_length = $("#form_number").val().length;
		
		if(num_length == 0) {
			$("#number_error_message").html("Number people invalid");
			$("#number_error_message").show();
			error_num = true;
		} else {
			$("#number_error_message").hide();
		}
	
	}

	$("#add_meeting_form").submit(function() {
		
		error_meeting_name = false;
		error_start = false;
		error_end = false;
		error_num = false;
						
		check_meeting_name();
		check_start();
		check_end();
		check_num();
		
		if(error_meeting_name == false && error_start == false &&  error_end == false && error_num == false) {
			return true;
		} else {
			return false;	
		}

	});

});