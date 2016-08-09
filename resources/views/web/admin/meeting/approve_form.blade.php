@extends('web.admin.master')
@section('title', 'Approve Form')
@section('content')
<br>
<a href="" class="btn btn-default">&nbsp;Back</a>
<h3 align="center">Cuộc họp chờ phê duyệt</h3>

<div class="row">

    <table class="table table-striped table-hover">
        <caption></caption>
        
        <tbody>
            <tr>
                <td class = "title">Title</td>
                <td>Cuộc họp chờ số 1</td>
            </tr>

            <tr>
                <td class = "title">Date</td>
                <td>01-01-2016</td>
            </tr>

            <tr>
                <td class = "title">Time start</td>
                <td>07:00</td>
            </tr>

            <tr>
                <td class = "title">Time end</td>
                <td>09:00</td>
            </tr>

            <tr>
                <td class = "title">Number People</td>
                <td>10</td>
            </tr>

            <tr>
                <td class = "title">Room</td>
                <td>Phong họp số 1</td>
            </tr>

            <tr>
                <td class = "title">Sender</td>
                <td>quannv</td>
            </tr>

            <tr>
                <td class = "title">Description</td>
                <td>Thống nhất lại hướng giải quyết thuật toán trong dự án</td>
            </tr>
        </tbody>
    </table>

    <a href="" class="btn btn-danger remove-form">&nbsp;Remove</a>
    <a href="" class="btn btn-info">&nbsp;Confirm</a>
	   
</div>
@stop