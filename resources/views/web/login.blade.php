<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LOGIN</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ url('public/admin/bootstrap-3.3.7-dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ url('public/admin/bootstrap-3.3.7-dist/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    
    <!-- Custom CSS -->
    <link href="{{ url('public/admin/app.css') }}" rel="stylesheet">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">

                    <div class="panel-heading">
                        <h3 class="panel-title" align="center">LOGIN</h3>
                    </div>

                    <div class="panel-body">
                        <form role="form" action="" method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input class="form-control" name="username" id="username" type="text" placeholder="Username" >
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input class="form-control" name="password" id="password" type="password" placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                        </form>
                    </div>

                </div>
            </div>
        </div>{{-- end Row --}}
    </div>{{-- end Container --}}

    <!-- jQuery -->
    <script src="{{ url('public/admin/jquery/jquery-3.1.0.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ url('public/admin/bootstrap-3.3.7-dist/js/bootstrap.min.js') }}"></script>

</body>

</html>