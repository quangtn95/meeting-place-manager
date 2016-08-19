@extends('web.admin.master')
@section('title', 'List Meeting')
@section('content')
<div class="row">

    <table class="table table-hover table-bordered table-striped">
        <caption></caption>
        <thead>
            <tr align="center" class="thead-list-meeting">
                <td>Day</td>
                <td>Date</td>
                <td>Title</td>
                <td>Time Start</td>
                <td>Time End</td>
                {{-- <td>Room</td> --}}
                <td>Number People</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
                
        	{{-- <tr>
        		<td colspan="7" class="day">&nbsp;&nbsp;Thứ {{ $i }}</td>
        	</tr> --}}

            @foreach($data as $item)
				<tr align="center">
                    <td>{!! \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->time_start)->format('l') !!}</td>
					<td>{!! \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->time_start)->format('d/m/Y') !!}</td>
	                <td><a href="{!! URL::route('admin.meeting.getDetail', $item['id']) !!}">{!! ucfirst($item["name"]) !!}</a></td>
	                <td>{!! \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->time_start)->format('H:i') !!}</td>
	                <td>{!! \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->time_end)->format('H:i') !!}</td>
	                <td>{!! $item["num_people"] !!}</td>
	                <td>
	                    <a href="{!! URL::route('admin.meeting.getEdit', $item['id']) !!}" class="btn btn-success">Edit</a>&nbsp;
	                    <a onclick="return confirm_update('Bạn có chắc muốn xóa không?')" href="{!! URL::route('admin.meeting.getDelete', $item['id']) !!}" class="btn btn-danger">Delete</a>
	                </td>
	            </tr>
            @endforeach
            
            <?php

                // $weekModifier = 0;

                // $date = new DateTime();

                // if($date->format('N') !== 1) {
                //     $date->sub(new DateInterval('P'. $date->format('N') . 'D'));
                // }

                // $interval = new DateInterval('P'.abs($weekModifier).'W');

                // if($weekModifier > 0) {
                //     $date->add($interval);  
                // } else {
                //     $date->sub($interval);  
                // }

                // for($i = 1; $i <= 7; $i++) {
                //     echo $date->add(new DateInterval('P1D'))->format('l Y-m-d') . "<br>\n"; 
                // }

            ?>
	            
        </tbody>
    </table>
    
    {{-- <ul class="pagination">
        <li><a href="#">«</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li class="active"><a href="#">6</a></li>
        <li><a href="#">»</a></li>
    </ul> --}}
	   
</div>
@stop