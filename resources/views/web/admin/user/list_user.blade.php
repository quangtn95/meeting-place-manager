@extends('web.admin.master')
@section('title', 'List User')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h3>List Of Users</h3>
    </div>
    <!-- /.col-lg-12 -->
    <table class="table table-striped table-bordered">
        <caption></caption>
        <thead>
            <tr align="center" class="thead">
                <td>#</td>
                <td>Userame</td>
                <td>Email</td>
                <td>Role</td>
                <td>Actions</td>
            </tr>
        </thead>
            
        <tbody>
            @for($i = 1; $i < 11; $i++)
                <tr align="center">
                    <td class="stt">{{ $i }}</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>

            @endfor
        </tbody>
    </table>

    <ul class="pagination">
        <li><a href="#">«</a></li>
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">6</a></li>
        <li><a href="#">»</a></li>
    </ul>

</div>
@stop