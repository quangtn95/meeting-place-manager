@extends('web.admin.master')
@section('title', 'Add Meeting')
@section('content')
<div class="row">
    <div><br/></div>
    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Add Meeting</h3>
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
                <form class="form-horizontal" id="add_meeting_form" name="add_meeting_form" method="POST" action="{!! route('admin.meeting.postAdd') !!}">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <div style="display:none;">
                        <input type="hidden" name="_method" value="POST"/>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Meeting Name</label>
                        <div class="col-md-9">
                            <input name="txtname" class="form-control" maxlength="256" type="text" id="form_meeting_name" value ="{!! old('txtname', isset($_POST['txtname']) ? $_POST['txtname'] : null) !!}"/>
                            <span class="error_form" id="meeting_name_error_message"></span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 control-label">Time Start</label>
                        <div class="col-md-4">
                            <input name="txtstart" class="datetimepicker form-control" id="form_start" value ="{!! old('txtstart', isset($_POST['txtstart']) ? $_POST['txtstart'] : null) !!}"/>
                            <span class="error_form" id="start_error_message"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Time End</label>
                        <div class="col-md-4">
                            <input name="txtend" class="datetimepicker form-control" id="form_end" value ="{!! old('txtend', isset($_POST['txtend']) ? $_POST['txtend'] : null) !!}"/>
                            <span class="error_form" id="end_error_message"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Room</label>
                        <div class="col-md-5">
                            <select class="form-control" name="txtroom">
                                @foreach($room as $item)
                                    <option value="{!! $item['id'] !!}">{!! ucfirst($item["name"]) !!} - {!! $item['capacity'] !!} chỗ</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Number People</label>
                        <div class="col-md-9">
                            <input name="txtnum" class="form-control" maxlength="256" type="text" id="form_number" value ="{!! old('txtnum', isset($_POST['txtnum']) ? $_POST['txtnum'] : null) !!}"/>
                            <span class="error_form" id="number_error_message"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Description</label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="form_description" name="txtdes" rows="3" value ="{{ old('txtdes', isset($_POST['txtdes']) ? $_POST['txtdes'] : null) }}"></textarea>
                        </div>
                    </div>
                        
                    <div class="submit">
                        <a href="{!! route('admin.meeting.getList') !!}" class="btn btn-danger">Cancel</a>
                        <input class="btn btn-success" type="submit" name="button" value="Add" onclick="return confirm_update('Bạn có chắc muốn thêm không?')"/>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@stop