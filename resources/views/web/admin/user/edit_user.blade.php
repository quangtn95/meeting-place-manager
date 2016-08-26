@extends('web.admin.master')
@section('title', 'Profile')
@section('content')
<div class="row">
    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Profile</h3>
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
                <form id="add_user_form" name="form1" method="POST" action="{!! route('admin.user.postEdit', $data['id']) !!}">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <div style="display:none;">
                        <input type="hidden" name="_method" value="POST"/>
                    </div>

                    <div class="form-group">
                        <label>Username</label>
                        <input name="txtusername" class="form-control" maxlength="256" type="text" id="form_username" value="{!! old('txtusername', isset($data) ? $data['username'] : null) !!}"/>
                        <span class="error_form" id="username_error_message"></span>
                    </div>

                    <div class="form-group">
                        <label>New Password</label>
                        <input name="txtpass" class="form-control" maxlength="20" type="password" id="form_password" value="{!! old('txtpass') !!}"/>
                        <span class="error_form" id="password_error_message"></span>
                    </div>

                    <div class="form-group">
                        <label>Retype Password</label>
                        <input name="txtpassret" class="form-control" maxlength="20" type="password" id="form_retpassword"value="{!! old('txtpassret') !!}"/>
                        <span class="error_form" id="retpassword_error_message"></span>
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input name="txtemail" class="form-control" maxlength="256" type="text" id="form_email" value="{!! old('txtemail', isset($data) ? $data['email'] : null) !!}"/>
                        <span class="error_form" id="email_error_message"></span>
                    </div>

                    <div class="form-group">
                        <label>Department</label>
                        
                        <select class="form-control" name="txtdep">
                            @foreach($dep as $item)
                                <option value="{!! $item['id'] !!}">Phòng {!! ucfirst($item["name"]) !!}</option>
                            @endforeach
                        </select>
                        
                    </div>

                    <div class="form-group">

                        <label>Role:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <label class="radio-inline">
                            <input name="rdorole" value="1" type="radio">Admin cấp 1
                        </label>
                        <label class="radio-inline">
                            <input name="rdorole" value="2" type="radio">Admin cấp 2
                        </label>
                        <label class="radio-inline">
                            <input name="rdorole" value="3" checked="" type="radio">Member
                        </label>
                    </div>

                    <div class="submit">
                        <a href="{!! route('admin.user.getList') !!}" class="btn btn-danger">Cancel</a>
                        <input onclick="return confirm_update('Bạn có chắc muốn cập nhật không?')" class="btn btn-success" type="submit" name="button" value="Submit"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop