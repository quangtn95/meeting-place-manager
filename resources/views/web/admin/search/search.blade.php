@extends('web.admin.master')
@section('title', 'Search')
@section('content')
<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Bạn vui lòng điền thông tin để tìm phòng trống</h3>
            </div>

            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{!! $error !!}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="panel-body">
                <form class="form-horizontal" id="search_form" name="search_form" method="POST" action="">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <div style="display:none;">
                        <input type="hidden" name="_method" value="POST"/>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Room</label>
                        <div class="col-md-4">
                            <select class="form-control" name="txtroom">
                                @foreach($room as $item)
                                    <option value="{!! $item['id'] !!}">{!! ucfirst($item["name"]) !!}</option>
                                @endforeach
                            </select>
                        </div>

                        <label class="col-md-2 control-label">Number People</label>
                        <div class="col-md-4">
                            <input name="txtnum" class="form-control" maxlength="256" type="text" id="form_number" value ="{!! old('txtnum', isset($_POST['txtnum']) ? $_POST['txtnum'] : null) !!}"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Time Start</label>
                        <div class="col-md-4">
                            <input name="txtstart" class="datetimepicker form-control" id="form_date" value ="{!! old('txtstart', isset($_POST['txtstart']) ? $_POST['txtstart'] : null) !!}"/>
                        </div>

                        <label class="col-md-2 control-label">Time End</label>
                        <div class="col-md-4">
                            <input name="txtend" class="datetimepicker form-control" id="form_date" value ="{!! old('txtend', isset($_POST['txtend']) ? $_POST['txtend'] : null) !!}"/>
                        </div>
                    </div>

                </form>

                {{-- <input class="btn btn-info search" type="submit" name="button" value="Search"/> --}}
                <input class="btn btn-info search" type="submit" name="button" value="Search"/>
            </div>
        </div>
    </div>
</div>

<h4>Kết quả tìm kiếm:</h4>

{{-- <div class="row">

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
            </tr>
        </thead>
        <tbody>
            
            <tr align="center">
                <td class="">1</td>
                <td class=""><a href="">Phòng số 1</a></td>
                <td><a href="#" ><img src="{!! asset('public/uploads/10.jpg') !!}" class="img"></a></td>
                <td>10</td>
                <td>Không có</td>
                <td><a href="" class="btn btn-info detail">Detail</a></td>
            </tr>

            <tr align="center">
                <td class="">2</td>
                <td class=""><a href="">Phòng số 2</a></td>
                <td><a href="#" ><img src="{!! asset('public/uploads/12.jpg') !!}" class="img"></a></td>
                <td>12</td>
                <td>Không có</td>
                <td><a href="" class="btn btn-info detail">Detail</a></td>
            </tr>

            <tr align="center">
                <td class="">3</td>
                <td class=""><a href="">Phòng số 3</a></td>
                <td><a href="#" ><img src="{!! asset('public/uploads/15.jpg') !!}" class="img"></a></td>
                <td>15</td>
                <td>Mic</td>
                <td><a href="" class="btn btn-info detail">Detail</a></td>
            </tr>

        </tbody>
    </table>
       
</div> --}}
@stop