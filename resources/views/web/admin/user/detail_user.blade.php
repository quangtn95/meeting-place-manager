@extends('web.admin.master')
@section('title', 'Profile User')
@section('content')
<br>
<a href="" class="btn btn-default">&nbsp;Back</a>
<h3 align="center">Chi tiết người dùng</h3>

<div class="row">

    <table class="table table-striped table-hover">
        <caption></caption>
        
        <tbody>
            <tr>
                <td class = "title">Username</td>
                <td>quangtn</td>
            </tr>

            <tr>
                <td class = "title">Email</td>
                <td>truongquangqv@gmail.com</td>
            </tr>

            <tr>
                <td class = "title">Role</td>
                <td>Admin cấp 1</td>
            </tr>

            <tr>
                <td class = "title">Department</td>
                <td>Phòng hành chính - nhân sự</td>
            </tr>

        </tbody>
    </table>
	   
</div>
@stop