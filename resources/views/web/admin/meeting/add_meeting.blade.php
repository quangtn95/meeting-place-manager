@extends('web.admin.master')
@section('title', 'Add Meeting')
@section('content')
<div class="row">
    <div><br/></div>
    <div><br/></div>
    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Add Meeting</h3>
            </div>

            <div class="panel-body">
                <form class="form-horizontal" id="add_meeting_form" name="form1" method="POST" action="">
                    <div style="display:none;">
                        <input type="hidden" name="_method" value="POST"/>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Meeting Name</label>
                        <div class="col-md-9">
                            <input name="txtname" class="form-control" maxlength="256" type="text" id="form_name"/>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 control-label">Time Start</label>
                        <div class="col-md-4">
                            <input name="txtdate" class="datetimepicker form-control" id="form_date"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Time End</label>
                        <div class="col-md-4">
                            <input name="txtdate" class="datetimepicker form-control" id="form_date"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Địa điểm họp</label>
                        <div class="col-md-4">
                            <select class="form-control">
                                <option value="">Tất cả</option>
                                <option value="Phòng họp số 1">Phòng họp số 1</option>
                                <option value="Phòng họp số 2">Phòng họp số 2</option>
                                <option value="Phòng họp số 3">Phòng họp số 3</option>
                                <option value="Phòng họp số 4">Phòng họp số 4</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Number People</label>
                        <div class="col-md-9">
                            <input name="txtnum" class="form-control" maxlength="256" type="text" id="form_number"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Description</label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="form_description" name="txtdes" rows="3"></textarea>
                        </div>
                    </div>
                        
                    <div class="submit">
                        <a href="" class="btn btn-danger">Cancel</a>
                        <input class="btn btn-success" type="submit" name="button" value="Add"/>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@stop