@extends('web.admin.master')
@section('title', 'Edit Password')
@section('content')
<div class="row">
    <div><br/></div>
    <div><br/></div>
    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Change Password</h3>
            </div>

            <div class="panel-body">
                <form id="registration_form" name="form1" method="POST" action="">
                    <div style="display:none;">
                        <input type="hidden" name="_method" value="POST"/>
                    </div>
                    <div class="form-group">
                        <label>Current Password</label>
                        <input name="txtpass" class="form-control" maxlength="256" type="password" id="form_password"/>
                    </div>
                    <div class="form-group">
                        <label>New Password</label>
                        <input name="txtpassnew" class="form-control" maxlength="20" type="password" id="form_passnew"/>
                    </div>
                    <div class="form-group">
                        <label>Retype Password</label>
                        <input name="txtpassret" class="form-control" maxlength="20" type="password" id="form_retype_password"/>
                    </div>
                    <div class="submit">
                        <a href="" class="btn btn-danger">Cancel</a>
                        <input class="btn btn-success" type="submit" name="button" value="Submit"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop