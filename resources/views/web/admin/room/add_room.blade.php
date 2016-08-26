@extends('web.admin.master')
@section('title', 'Add Room')
@section('content')
<div class="row">
    <div><br/></div>
    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Add Room</h3>
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
                <form id="addroom_form" name="addroom_form" method="POST" enctype="multipart/form-data" action="{!! route('admin.room.postAdd') !!}" accept-charset="utf-8">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <div style="display:none;">
                        <input type="hidden" name="_method" value="POST"/>
                    </div>

                    <div class="row">
                        <div class="col-sm-5">
                            <img src="{!! asset('public/admin/images/meeting-icon-png-icon-46945-2.png') !!}" class="img-responsive" alt="Room Photo"/>
                            <input type="file" name="image" id="form_image"/>
                            <span class="error_form" id="image_error_message"></span>
                        </div>

                        <div class="col-sm-7">
                            <div class="form-group">
                                <label>Room Name</label>
                                <input name="txtname" class="form-control" maxlength="100" type="text" id="form_name" value ="{!! old('txtname', isset($_POST['txtname']) ? $_POST['txtname'] : null) !!}"/>
                                <span class="error_form" id="name_error_message"></span>
                            </div>

                            <div class="form-group">
                                <label>Capacity</label>
                                <input name="txtcapa" class="form-control" maxlength="100" type="text" id="form_capacity" value ="{!! old('txtcapa', isset($_POST['txtcapa']) ? $_POST['txtcapa'] : null) !!}"/>
                                <span class="error_form" id="capa_error_message"></span>
                            </div>

                            <div class="form-group">
                                <label>Equipment: </label>
                                <label class="radio-inline">
                                    <input name="equipment[]" value="Mic" type="checkbox">Mic
                                </label>
                                <label class="radio-inline">
                                    <input name="equipment[]" value="Máy chiếu" type="checkbox">Máy chiếu
                                </label>
                                
                            </div>

                            <div>
                                <a href="{!! route('admin.room.getList') !!}" class="btn btn-danger">Cancel</a>
                                <input class="btn btn-success" type="submit" name="button" value="Add" onclick="return confirm_update('Bạn có chắc muốn thêm không?')"/>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop