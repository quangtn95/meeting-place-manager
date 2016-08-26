@extends('web.admin.master')
@section('title', 'Detail Room')
@section('content')
<a href="{!! URL::route('admin.room.getList') !!}" class="btn btn-default">&nbsp;Back</a>
<h3 align="center">Lịch họp chi tiết</h3>

<div class="row">

    <table class="table table-hover table-bordered table-striped">
        <caption></caption>
        <thead>
            <tr align="center" class="thead-list-meeting">
                <td>Week</td>
                <td>Day</td>
                <td>Date</td>
                <td>Title</td>
                <td>Time Start</td>
                <td>Time End</td>
                <td>Number People</td>
            </tr>
        </thead>
        <tbody>
                
            @foreach($list_data as $key => $item)
                <tr align="center">
                    <td>W - {!! \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item['time_start'])->format('W') !!}</td>
                    <td>{!! \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item['time_start'])->format('l') !!}</td>
                    <td>{!! \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item['time_start'])->format('d/m/Y') !!}</td>
                    <td><a href="{!! URL::route('admin.meeting.getDetail', $item['id']) !!}">{!! ucfirst($item["name"]) !!}</a></td>
                    <td>{!! \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item['time_start'])->format('H:i') !!}</td>
                    <td>{!! \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item['time_end'])->format('H:i') !!}</td>
                    <td>{!! $item["num_people"] !!}</td>

                </tr>
            @endforeach
                
        </tbody>
    </table>
    
    {{-- <ul class="pager pagination">
        @if($data->currentPage() != 1)
        <li><a href="{!! str_replace('/?','?',$data->url($data->currentPage() - 1)) !!}">Prev</a></li>
        @endif
        @for($i = 1; $i <= $data->lastPage(); $i++)
        <li class="{!! ($data->currentPage() == $i) ? "active" : "" !!}"><a href="{!! str_replace('/?','?',$data->url($i)) !!}">{!! $i !!}</a></li>
        @endfor
        @if($data->currentPage() < $data->lastPage())
        <li><a href="{!! str_replace('/?','?',$data->url($data->currentPage() + 1)) !!}">Next</a></li>
        @endif
    </ul> --}}
    {{ $data->links() }}
    
</div>
@stop