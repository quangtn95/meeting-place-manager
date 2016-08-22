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
                
            @foreach($data as $item)
                <?php $w = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->time_start)->format('W') ?>
                <tr>
                    <td colspan="7" class="day">&nbsp;&nbsp;Week {!! $w !!}</td>
                </tr>
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
	            
        </tbody>
    </table>
    
    <ul class="pagination">
        @if($data->currentPage() != 1)
        <li><a href="{!! str_replace('/?','?',$data->url($data->currentPage() - 1)) !!}">Prev</a></li>
        @endif
        @for($i = 1; $i <= $data->lastPage(); $i++)
        <li class="{!! ($data->currentPage() == $i) ? "active" : "" !!}"><a href="{!! str_replace('/?','?',$data->url($i)) !!}">{!! $i !!}</a></li>
        @endfor
        @if($data->currentPage() != $data->lastPage())
        <li><a href="{!! str_replace('/?','?',$data->url($data->currentPage() + 1)) !!}">Next</a></li>
        @endif
    </ul>
    
	   
</div>
@stop