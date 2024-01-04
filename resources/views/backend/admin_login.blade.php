<!DOCTYPE html>
<html lang="en">

    <head>
        <script src="{{asset('public/backend_resource/libs/pace/1.0.2/pace.min.js')}}"></script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/demo/favicon.png">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Login</title>
        <!-- CSS -->
        <link href="{{asset('public/backend_resource/assets/vendors/material-icons/material-icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('public/backend_resource/assets/vendors/mono-social-icons/monosocialiconsfont.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('public/backend_resource/libs/limonte-sweetalert2/6.6.4/sweetalert2.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('public/backend_resource/libs/magnific-popup.js/1.1.0/magnific-popup.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('public/backend_resource/libs/mediaelement/4.1.3/mediaelementplayer.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('public/backend_resource/libs/jquery.perfect-scrollbar/0.7.0/css/perfect-scrollbar.min.css')}}" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet" type="text/css">
        <link href="{{asset('public/backend_resource/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('public/backend_resource/assets/css/style.css')}}" rel="stylesheet" type="text/css">
        <!-- Head Libs -->
        <script src="{{asset('public/backend_resource/libs/modernizr/2.8.3/modernizr.min.js')}}"></script>
    </head>

    <body class="body-bg-full profile-page" style="background-image: url({{asset('public/backend_resource/assets/img/login-background.jpg')}})">
        <div id="wrapper" class="row wrapper" style="padding-top: 4%">
            <div class="col-10 ml-sm-auto col-sm-6 col-md-4 ml-md-auto login-center mx-auto">
                <div class="navbar-header text-center">
                    <a href="#">
                        <img alt="" src="{{asset('public/backend_resource/assets/img/zihan-logo.jpg')}}">
                    </a>
                    <h4 align="center" style="color: red">
                        <?php
                        $exception = Session::get('exception');
                        if (isset($exception)) {
//                            echo '<h4 align="center" style="color: red">'.$exception.'</h4>';
                            echo $exception;
                            Session::put('exception', '');
                        }
                        ?>
                    </h4>
                    <h4 align="center" style="color: green">
                        <?php
                        $message = Session::get('message');
                        if (isset($message)) {
//                            echo '<h4 align="center" style="color: green" class="text-light">'.$message.'</h4>';
                            echo $message;
                            Session::put('message', '');
                        }
                        ?>
                    </h4>
                </div>
                <!-- /.navbar-header -->
                {{--{!! Form::open(['url' => '/admin-panel-login', 'method' => 'post', 'class'=> 'form-material']) !!}--}}
                <form id="edit-add-form" role="form" action="{{route('admin-panel-login')}}"
                      class="form-material"
                      method="POST" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    {{--action="{{!$edit ? route('ngo-panel.beneficiaries.store') : route('ngo-panel.beneficiaries.update', $beneficiariesData->id)}}"--}}
                    <div class="form-group">
                        <input type="email" placeholder="your@mail.com" class="form-control form-control-line" name="email" id="example-email">
                        <label for="example-email">Email</label>
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="password" class="form-control form-control-line" name="password">
                        <label>Password</label>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-block btn-lg btn-color-scheme ripple" type="submit">Login</button>
                    </div>
                </form>
                {{--{!! Form::close() !!}--}}
                <!-- /.form-material -->
            </div>
            <!-- /.login-center -->
        </div>
        <!-- /.body-container -->
        <!-- Scripts -->
        <script type="text/javascript" src="{{asset('public/backend_resource/libs/jquery/3.2.1/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/backend_resource/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/backend_resource/assets/js/material-design.js')}}"></script>
    </body>


</html>
