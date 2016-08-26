// $(function(){
// 	$('.datepicker').datepicker();
// });

$('.datetimepicker').datetimepicker();

$('.alert').delay(4000).slideUp();

function confirm_update(msg) {
	if(window.confirm(msg)) {
		return true;
	}

	return false;
}

