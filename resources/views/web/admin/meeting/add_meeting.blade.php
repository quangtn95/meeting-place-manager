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
                <form id="registration_form" name="form1" method="POST" action="">
                    <div style="display:none;">
                        <input type="hidden" name="_method" value="POST"/>
                    </div>

                    <div class="form-group">
                        <label>Meeting Name</label>
                        <input name="txtname" class="form-control" maxlength="256" type="text" id="form_name"/>
                    </div>
                    
                    <div class="form-group">
                        <label>Date</label>
                        <input name="txtdate" class="form-control" maxlength="256" type="text" id="form_date" placeholder="Sẽ sửa lại cách nhập"/>
                    </div>{{-- Sẽ sửa lại cách nhập --}}

                    <div class="form-group">
                        <label>Time Start</label>
                        <input name="txtstart" class="form-control" maxlength="256" type="text" id="form_start" placeholder="Sẽ sửa lại cách nhập"/>
                    </div>{{-- Sẽ sửa lại cách nhập --}}

                    <div class="form-group">
                        <label>Time End</label>
                        <input name="txtend" class="form-control" maxlength="256" type="text" id="form_end" placeholder="Sẽ sửa lại cách nhập"/>
                    </div>{{-- Sẽ sửa lại cách nhập --}}

                    <div class="form-group">
                        <label>Number People</label>
                        <input name="txtnum" class="form-control" maxlength="256" type="text" id="form_number"/>
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <input name="txtdes" class="form-control" maxlength="256" type="text" id="form_description"/>
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