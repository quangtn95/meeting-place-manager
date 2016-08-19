@extends('web.admin.master')
@section('title', 'Edit Meeting')
@section('content')
<div class="row">
    <div><br/></div>
    <div><br/></div>
    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Edit Meeting</h3>
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
                <form class="form-horizontal" id="edit_meeting_form" name="edit_meeting_form" method="POST" action="{!! URL::route('admin.meeting.postEdit', $meeting['id']) !!}">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <div style="display:none;">
                        <input type="hidden" name="_method" value="POST"/>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Meeting Name</label>
                        <div class="col-md-9">
                            <input name="txtname" class="form-control" maxlength="256" type="text" id="form_name" value ="{!! old('txtname', isset($meeting) ? $meeting['name'] : null) !!}"/>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 control-label">Time Start</label>
                        <div class="col-md-4">
                            <input name="txtstart" class="datetimepicker form-control" id="form_date" value ="{!! old('txtstart', isset($meeting) ? $meeting['time_start'] : null) !!}"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Time End</label>
                        <div class="col-md-4">
                            <input name="txtend" class="datetimepicker form-control" id="form_date" value ="{!! old('txtend', isset($meeting) ? $meeting['time_end'] : null) !!}"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Địa điểm họp</label>
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
                            <input name="txtnum" class="form-control" maxlength="256" type="text" id="form_number" value ="{!! old('txtnum', isset($meeting) ? $meeting['num_people'] : null) !!}"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Description</label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="form_description" name="txtdes" rows="3" value ="{{ old('txtdes', isset($meeting) ? $meeting['description'] : null) }}"></textarea>
                        </div>
                    </div>
                        
                    <div class="submit">
                        <a href="{!! route('admin.meeting.getList') !!}" class="btn btn-danger">Cancel</a>
                        <input class="btn btn-success" type="submit" name="button" value="Update" onclick="return confirm_update('Bạn có chắc muốn cập nhật không?')"/>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@stop