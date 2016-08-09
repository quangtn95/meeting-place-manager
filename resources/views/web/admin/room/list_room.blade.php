@extends('web.admin.master')
@section('title', 'List Room')
@section('content')
<div class="row">

    <table class="table table-hover table-bordered">
        <caption></caption>
        <thead>
            <tr align="center" class="thead">
                <td>STT</td>
                <td><span class=""></span>Name</td>
                <td><span class=""></span>Avatar</td>
                <td><span class=""></span>Capacity</td>
                <td><span class=""></span>Equipment</td>
                <td><span class=""></span>View</td>
                <td><span class=""></span>Action</td>
            </tr>
        </thead>
        <tbody>
            
            <tr align="center">
                <td class="num">1</td>
                <td class=""><a href="">Phòng số 1</a></td>
                <td><a href="#" ><img src="{!! asset('public/admin/images/10.jpg') !!}" class="img"></a></td>
                <td>10</td>
                <td>Không có</td>
                <td><a href="" class="btn btn-info detail">Detail</a></td>
                <td>
                    <a href="" class="btn btn-success">Edit</a>&nbsp;
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
            </tr>

            <tr align="center">
                <td class="num">2</td>
                <td class=""><a href="">Phòng số 2</a></td>
                <td><a href="#" ><img src="{!! asset('public/admin/images/12.jpg') !!}" class="img"></a></td>
                <td>12</td>
                <td>Không có</td>
                <td><a href="" class="btn btn-info detail">Detail</a></td>
                <td>
                    <a href="" class="btn btn-success">Edit</a>&nbsp;
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
            </tr>

            <tr align="center">
                <td class="num">3</td>
                <td class=""><a href="">Phòng số 3</a></td>
                <td><a href="#" ><img src="{!! asset('public/admin/images/15.jpg') !!}" class="img"></a></td>
                <td>15</td>
                <td>Mic</td>
                <td><a href="" class="btn btn-info detail">Detail</a></td>
                <td>
                    <a href="" class="btn btn-success">Edit</a>&nbsp;
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
            </tr>

            <tr align="center">
                <td class="num">4</td>
                <td class=""><a href="">Phòng số 4</a></td>
                <td><a href="#" ><img src="{!! asset('public/admin/images/20.jpg') !!}" class="img"></a></td>
                <td>20</td>
                <td>Mic, Máy chiếu</td>
                <td><a href="" class="btn btn-info detail">Detail</a></td>
                <td>
                    <a href="" class="btn btn-success">Edit</a>&nbsp;
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
            </tr>

        </tbody>
    </table>
	   
</div>
@stop