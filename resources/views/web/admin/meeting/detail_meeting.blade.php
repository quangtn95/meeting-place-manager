@extends('web.admin.master')
@section('title', 'Detail Meeting')
@section('content')
<a href="{!! URL::route('admin.meeting.getList') !!}" class="btn btn-default">&nbsp;Back</a>
<h3 align="center">Chi tiết cuộc họp</h3>

<div class="row">

    <table class="table table-striped table-hover">
        <caption></caption>
        
        <tbody>
            
                <tr>
                    <td class = "title">Title</td>
                    <td>{!! ucfirst($detail->name) !!}</td>
                </tr>

                <tr>
                    <td class = "title">Date</td>
                    <td>{!! \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $detail->time_start)->format('d/m/Y') !!}</td>
                </tr>

                <tr>
                    <td class = "title">Time start</td>
                    <td>{!! \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $detail->time_start)->format('H:i') !!}</td>
                </tr>

                <tr>
                    <td class = "title">Time end</td>
                    <td>{!! \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $detail->time_end)->format('H:i') !!}</td>
                </tr>

                <tr>
                    <td class = "title">Number People</td>
                    <td>{!! $detail->num_people !!}</td>
                </tr>

                <tr>
                    <td class = "title">Room</td>
                    <td>{!! ucfirst($detail->room_name) !!}</td>
                </tr>

                <tr>
                    <td class = "title">Censor</td>
                    <td>{!! $detail->users_name !!}</td>
                </tr>

                <tr>
                    <td class = "title">Description</td>
                    <td>{!! $detail->description !!}</td>
                </tr>

            
        </tbody>
    </table>
	   
</div>
@stop