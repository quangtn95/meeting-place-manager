// $(function(){
// 	$('.datepicker').datepicker();
// });

$('.datetimepicker').datetimepicker();

$('.alert').delay(4000).slideUp();

function xacnhanxoa (msg) {
	if(window.confirm(msg)) {
		return true;
	}

	return false;
}