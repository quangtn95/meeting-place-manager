@extends('web.admin.master')
@section('title', 'List Room')
@section('content')
<div class="row">

    <table class="table table-hover table-bordered">
        <caption></caption>
        <thead>
            <tr align="center" class="thead">
                <td>STT</td>
                <td>Name</td>
                <td>Avatar</td>
                <td>Capacity</td>
                <td>Equipment</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            <?php $stt = 0?>
            @foreach($data as $item)
            <?php $stt++ ?>

            <tr align="center">
                <td class="num">{!! $stt !!}</td>
                <td class=""><a href="{!! URL::route('admin.room.getDetail', $item['id']) !!}">{!! ucfirst($item["name"]) !!}</a></td>
                <td><a href="{!! URL::route('admin.room.getDetail', $item['id']) !!}" ><img src="{!! asset('public/uploads/'.$item->image) !!}" class="img"></a></td>
                <td>{!! $item["capacity"] !!}</td>
                <td>{!! $item["equipment"] !!}</td>
                <td>
                    <a href="{!! URL::route('admin.room.getEdit', $item['id']) !!}" class="btn btn-success">Edit</a>&nbsp;
                    <a onclick="return confirm_update('Bạn có chắc muốn xóa không?')" href="{!! URL::route('admin.room.getDelete', $item['id']) !!}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
	   
</div>
@stop