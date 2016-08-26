$(function() {

	$("#image_error_message").hide();
	$("#name_error_message").hide();
	$("#capa_error_message").hide();

	var error_image = false;
	var error_name = false;
	var error_capa = false;
		

	$("#form_image").focusout(function() {

		check_image();
	});

	$("#form_name").focusout(function() {

		check_name();
	});

	$("#form_capacity").focusout(function() {

		check_capa();
	});

	function check_image() {
	
		var image_length = $("#form_image").val().length;
		
		if(image_length == 0) {
			$("#image_error_message").html("Please choose file");
			$("#image_error_message").show();
			error_image = true;
		} else {
			$("#image_error_message").hide();
		}
	
	}

	function check_name() {
	
		var name_length = $("#form_name").val().length;
		
		if(name_length < 5 || name_length > 20) {
			$("#name_error_message").html("Should be between 5-20 characters");
			$("#name_error_message").show();
			error_name = true;
		} else {
			$("#name_error_message").hide();
		}
	
	}

	function check_capa() {
	
		var capa_length = $("#form_capacity").val().length;
		
		if(capa_length == 0) {
			$("#capa_error_message").html("Enter capacity");
			$("#capa_error_message").show();
			error_capa = true;
		} else {
			$("#capa_error_message").hide();
		}
	
	}

	$("#addroom_form").submit(function() {
		
		error_image = false;									
		error_name = false;
		error_capa = false;
						
		check_image();									
		check_name();
		check_capa();
		
		if(error_image == false && error_name == false && check_capa) {
			return true;
		} else {
			return false;	
		}

	});

	$("#editroom_form").submit(function() {
		
		error_name = false;
		error_capa = false;
						
		check_name();
		check_capa();
		
		if(error_name == false && check_capa) {
			return true;
		} else {
			return false;	
		}

	});

});