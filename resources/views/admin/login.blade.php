<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{!! asset('admin_assets/img/logo.png') !!}" type="image/x-icon" />
    <title>Do-B-DO Login</title>
    <!-- Bootstrap Core CSS -->
    <link href="{!! asset('admin_assets/bootstrap/dist/css/bootstrap.min.css') !!}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{!! asset('admin_assets/css/animate.css') !!}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{!! asset('admin_assets/css/style.css') !!}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{!! asset('admin_assets/css/colors/default.css') !!}" id="theme" rel="stylesheet">

    <style>
        .white-box {
            background: #E8E8E8;
            padding: 25px;
            margin-bottom: 30px;
            box-shadow: 1px 1px 8px;
            margin: 20% auto;
        }
    </style>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <section id="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">Log In</h3>

                        <div class="login-logo" style="text-align: center">
                            <img src="{!! asset('admin_assets/img/logo.png') !!}" style="margin-top: 25px;height:100px;" />
                        </div>
                        {!! Form::open(['url' => 'login', 'class' => 'form-horizontal new-lg-form', 'id' => 'loginform']) !!}
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                @foreach ($errors->all() as $error)
                                    <strong>{!! $error !!}</strong><br>
                                @endforeach
                            </div>
                        @endif

                        @if (session()->has('error'))
                            <div class="alert alert-danger">
                                <p>{!! session()->get('error') !!}</p>
                            </div>
                        @endif

                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                <p>{!! session()->get('success') !!}</p>
                            </div>
                        @endif
                        <div class="form-group  m-t-20">

                            <div class="col-xs-12">
                                <label>User Name</label>
                                @if (config('app.application_type') == 'demo')
                                    <p><small>for employee provide username <span class="text-info">employee</span> pass
                                            <span class="text-info">123</span> or your created employee user id</small>
                                    </p>
                                @endif
                                <input type="text" name="user_name" class="form-control" placeholder="User Name "
                                    value="{{ config('app.application_type') == 'demo' ? 'admin' : old('user_name') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <label>Password</label>
                                <input type="password" name="user_password" class="form-control" placeholder="Password"
                                    value="{{ config('app.application_type') == 'demo' ? '123' : '' }}" />
                            </div>
                        </div>
                        <!-- 	<div class="form-group">
       <div class="col-md-12">
        <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Forgot password ?</a> </div>
       </div> -->
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light"
                                    type="submit">Log In</button>
                            </div>
                        </div>

                        <!-- @if (config('app.application_type') == 'demo')
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <p><small>if login failed <a href="http://hrms.braintricker.com/dashboard"
                                                target="_blank" class="text-info">direct visit without envato
                                                frame</a></small></p>
                                </div>
                            </div>
                        @endif
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <a href="{{ route('reset.password') }}">Forgot Password ? click here to reset</a>
                            </div>
                            @if (config('app.application_type') == 'demo')
                                <div class="col-xs-12" style="margin-top: 30px;">
                                    <a class="mt-3" href="{{ url('/') }}" target="_blank">Visit Application
                                        Front End</a>
                                </div>
                            @endif
                        </div> -->


                        {!! Form::close() !!}

                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>



    </section>
    <!-- jQuery -->
    <script src="{!! asset('admin_assets/plugins/bower_components/jquery/dist/jquery.min.js') !!}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{!! asset('admin_assets/bootstrap/dist/js/bootstrap.min.js') !!}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{!! asset('admin_assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') !!}"></script>

    <!--slimscroll JavaScript -->
    <script src="{!! asset('admin_assets/js/jquery.slimscroll.js') !!}"></script>
    <!--Wave Effects -->
    <script src="{!! asset('admin_assets/js/waves.js') !!}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{!! asset('admin_assets/js/custom.min.js') !!}"></script>

    <script>
        $(function() {
            $(document).on("focus", "#backToLogin", function() {
                $("#recoverform").fadeOut("slow", function() {
                    $('#loginform').css('display', 'block');

                });
            });

            $(".alert-success").delay(5000).fadeOut("slow");
        });
    </script>
</body>

</html>
