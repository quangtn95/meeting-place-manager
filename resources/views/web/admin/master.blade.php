<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="">
    <!-- Bootstrap Core CSS -->
    <link href="{{ url('public/admin/bootstrap-3.3.7-dist/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ url('public/admin/bootstrap-3.3.7-dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ url('public/admin/datetimepicker/jquery.datetimepicker.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ url('public/admin/bootstrap-3.3.7-dist/css/fonts/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="{{ url('public/admin/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="wrapper">
        <div class="container">

            <nav class="navbar navbar-inverse navbar-static-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Admin Page</a>
                    </div>

                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="glyphicon glyphicon-user"></i>  <i class="glyphicon glyphicon-triangle-bottom"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#"><i class="glyphicon glyphicon-user"></i> User Profile</a></li>
                                    <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Password</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>{{-- end nav-collapse --}}
                </div>{{-- end container-fluid --}}
            </nav>{{-- end navbar-default --}}

            <div class="menu-main">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Room <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="#">List Room</a></li>
                        <li><a href="#">Add Room</a></li>
                    </ul>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Meeting <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="#">List Meeting</a></li>
                        <li><a href="#">Add Meeting</a></li>
                        <li><a href="#">Approve Form</a></li>
                    </ul>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        User <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="#">List User</a></li>
                        <li><a href="#">Add User</a></li>
                    </ul>
                </div>

                <div class="btn-group">
                    <a href="" class="btn btn-default">&nbsp;Search</a>
                </div>
            </div>{{-- end Menu-main --}}
            
            <div class="content">
                
                @yield('content')

            </div>
            

             <!-- jQuery -->
            <script src="{{ url('public/admin/jquery/jquery-3.1.0.min.js') }}"></script>
            
            <script src="{{ url('public/admin/datetimepicker/jquery.datetimepicker.full.js') }}"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="{{ url('public/admin/bootstrap-3.3.7-dist/js/bootstrap.min.js') }}"></script>

            <script src="{{ url('public/admin/jquery/myscript.js') }}"></script>
        </div>
        {{-- end Container --}}
    </div>
    {{-- end Wrapper --}}
</body>
</html>