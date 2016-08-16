@extends('web.admin.master')
@section('title', 'Add User')
@section('content')
<div class="row">
    <div><br/></div>
    <div><br/></div>
    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Add User</h3>
            </div>

            <div class="panel-body">
                <form id="registration_form" name="form1" method="POST" action="">
                    <div style="display:none;">
                        <input type="hidden" name="_method" value="POST"/>
                    </div>

                    <div class="form-group">
                        <label>Username</label>
                        <input name="txtusername" class="form-control" maxlength="256" type="text" id="form_username"/>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input name="txtpass" class="form-control" maxlength="20" type="password" id="form_pass"/>
                    </div>

                    <div class="form-group">
                        <label>Retype Password</label>
                        <input name="txtpassret" class="form-control" maxlength="20" type="password" id="form_retype_password"/>
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input name="txtemail" class="form-control" maxlength="20" type="text" id="form_email"/>
                    </div>

                    <div class="form-group">
                        <label>Department</label>
                        
                        <select class="form-control">
                            <option value="">Phòng Game</option>
                            <option value="">Phòng Mobile</option>
                            <option value="">Phòng Web</option>
                            <option value="">Phòng Hành chính - nhân sự</option>
                        </select>
                        
                    </div>

                    <div class="form-group">
                        <label>Role</label>
                        <select name="txtrole" class="form-control" id="form_role">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
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