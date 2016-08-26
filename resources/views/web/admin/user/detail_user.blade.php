@extends('web.admin.master')
@section('title', 'Profile User')
@section('content')
<a href="{!! URL::route('admin.user.getList') !!}" class="btn btn-default">&nbsp;Back</a>
<h3 align="center">Chi tiết tài khoản</h3>

<div class="row">

    <table class="table table-striped table-hover">
        <caption></caption>
        
        <tbody>
            <tr>
                <td class = "title">Username</td>
                <td>{!! $detail->username !!}</td>
            </tr>

            <tr>
                <td class = "title">Email</td>
                <td>{!! $detail->email !!}</td>
            </tr>

            <tr>
                <td class = "title">Role</td>
                <td>
                    @if($detail->role == 1)
                        {!! "Superadmin" !!}
                    @elseif($detail->role == 2)
                        {!! "Admin" !!}
                    @else
                        {!! "Member" !!}
                    @endif

                </td>
            </tr>

            <tr>
                <td class = "title">Department</td>
                <td>{!! ucfirst($detail->dep_name) !!}</td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <a href="{!! URL::route('admin.user.postEdit', $detail->id) !!}" class="btn btn-success">&nbsp;Update Profile</a>
                </td>
            </tr>

        </tbody>

    </table>

</div>
@stop