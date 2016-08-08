@extends('web.admin.master')
@section('title', 'List Meeting')
@section('content')
<div class="row">

    <table class="table table-hover table-bordered table-striped">
        <caption></caption>
        <thead>
            <tr align="center" class="thead-list-meeting">
                <td>Date</td>
                <td>Name</td>
                <td>Time Start</td>
                <td>Time End</td>
                <td>Room</td>
                <td>Number People</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @for($i = 2; $i < 8; $i++)
            	<tr>
					
            		<td colspan="7" class="day">&nbsp;&nbsp;Thứ {{ $i }}</td>
            	</tr>

				<tr align="center">
					<td>00/08/2016</td>
	                <td><a href="">Họp dự án 1</a></td>
	                <td>08:00</td>
	                <td>10:00</td>
	                <td>Phòng số 2</td>
	                <td>8</td>
	                <td>
	                    <a href="" class="btn btn-success">Edit</a>&nbsp;
	                    <a href="" class="btn btn-danger">Delete</a>
	                </td>
	            </tr>

	            <tr align="center">
	                <td>00/08/2016</td>
	                <td><a href="">Họp dự án 2</a></td>
	                <td>01:00</td>
	                <td>03:00</td>
	                <td>Phòng số 3</td>
	                <td>8</td>
	                <td>
	                    <a href="" class="btn btn-success">Edit</a>&nbsp;
	                    <a href="" class="btn btn-danger">Delete</a>
	                </td>
	            </tr>
	            
            @endfor
	            
        </tbody>
    </table>
    
    <ul class="pagination">
        <li><a href="#">«</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li class="active"><a href="#">6</a></li>
        <li><a href="#">»</a></li>
    </ul>
	   
</div>
@stop