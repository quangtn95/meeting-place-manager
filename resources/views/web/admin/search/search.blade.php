@extends('web.admin.master')
@section('title', 'Search')
@section('content')
<div class="row">
    <div><br/></div>
    <div><br/></div>
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Bạn vui lòng điền thông tin để tìm phòng trống</h3>
            </div>

            <div class="panel-body">
                <form class="form-horizontal">

                    <div class="form-group">
                        <label class="col-md-2 control-label">Địa điểm họp</label>
                        <div class="col-md-4">
                            <select class="form-control">
                                <option value="">Tất cả</option>
                                <option value="Phòng họp số 1">Phòng họp số 1</option>
                                <option value="Phòng họp số 2">Phòng họp số 2</option>
                                <option value="Phòng họp số 3">Phòng họp số 3</option>
                                <option value="Phòng họp số 4">Phòng họp số 4</option>
                            </select>
                        </div>

                        <label class="col-md-2 control-label">Số người tham dự</label>
                        <div class="col-md-4">
                            <input name="txtnum" class="form-control" maxlength="100" type="text" id="form_number"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Thời gian bắt đầu</label>
                        <div class="col-md-4">
                            <input name="txtdate" class="datetimepicker form-control" id="form_date"/>
                        </div>

                        <label class="col-md-2 control-label">Thời gian Kết thúc</label>
                        <div class="col-md-4">
                            <input name="txtdate" class="datetimepicker form-control" id="form_date"/>
                        </div>
                    </div>

                </form>

                <input class="btn btn-info search" type="submit" name="button" value="Search"/>
            </div>
        </div>
    </div>
</div>

<h4>Kết quả tìm kiếm:</h4>

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
       
</div>
@stop