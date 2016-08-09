@extends('web.admin.master')
@section('title', 'Detail Meeting')
@section('content')
<br>
<a href="" class="btn btn-default">&nbsp;Back</a>
<h3 align="center">Chi tiết cuộc họp</h3>

<div class="row">

    <table class="table table-striped table-hover">
        <caption></caption>
        
        <tbody>
            <tr>
                <td class = "title">Title</td>
                <td>Cuộc họp số 1</td>
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
                <td class = "title">Censor</td>
                <td>nguyenhuyhung</td>
            </tr>

            <tr>
                <td class = "title">Description</td>
                <td>Gặp gỡ, trao đổi với khách hàng về một số vấn đề liên quan tới dự án</td>
            </tr>
        </tbody>
    </table>
	   
</div>
@stop