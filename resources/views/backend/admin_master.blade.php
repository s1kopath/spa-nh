
<!DOCTYPE html>
<html lang="en">

    <head>
        <link rel="stylesheet" href="{{asset('public/backend_resource/assets/css/pace.css')}}">
        <script src="{{asset('public/backend_resource/libs/pace/1.0.2/pace.min.js')}}"></script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('public/backend_resource/')}}assets/demo/favicon.png">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Dashboard</title>
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
        <link href="{{asset('public/backend_resource/assets/vendors/weather-icons-master/weather-icons.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('public/backend_resource/assets/vendors/weather-icons-master/weather-icons-wind.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('public/backend_resource/libs/bootstrap-daterangepicker/2.1.25/daterangepicker.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('public/backend_resource/libs/morris.js/0.5.1/morris.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('public/backend_resource/libs/slick-carousel/1.6.0/slick.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('public/backend_resource/libs/slick-carousel/1.6.0/slick-theme.min.css')}}" rel="stylesheet" type="text/css">

        <!--data table-->
        <!--<link href="{{asset('public/backend_resource/libs/jquery-footable/3.1.4/footable.bootstrap.min.css')}}" rel="stylesheet" type="text/css">-->
        <link href="{{asset('public/backend_resource/libs/datatables/1.10.15/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css">
        <!--/data table-->
        <!--select2-->
        <link href="{{asset('public/backend_resource/libs/select2/4.0.3/css/select2.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('public/backend_resource/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css">
        <!--text editor-->
        <link href="{{asset('public/backend_resource/libs/bootstrap3-wysiwyg/0.3.3/bootstrap3-wysihtml5.min.css')}}" rel="stylesheet" type="text/css">

        <link href="{{asset('public/backend_resource/assets/css/style.css')}}" rel="stylesheet" type="text/css">
        <!-- Head Libs -->



        <!--Scripts-->
        <script src="{{asset('public/backend_resource/libs/modernizr/2.8.3/modernizr.min.js')}}"></script>
        <script src="{{asset('public/backend_resource/libs/jquery/3.2.1/jquery.min.js')}}"></script>
        <script src="{{asset('public/backend_resource/libs/popper.js/1.12.2/umd/popper.min.js')}}"></script>
        <script src="{{asset('public/backend_resource/assets/js/bootstrap.min.js')}}"></script>

        <script src="{{asset('public/backend_resource/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('public/backend_resource/libs/mediaelement/4.1.3/mediaelementplayer.min.js')}}"></script>
        <script src="{{asset('public/backend_resource/libs/metisMenu/2.7.0/metisMenu.min.js')}}"></script>
        <script src="{{asset('public/backend_resource/libs/jquery.perfect-scrollbar/0.7.0/js/perfect-scrollbar.jquery.js')}}"></script>
        <script src="{{asset('public/backend_resource/libs/limonte-sweetalert2/6.6.4/sweetalert2.min.js')}}"></script>
        <script src="{{asset('public/backend_resource/libs/Counter-Up/1.0.0/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('public/backend_resource/libs/waypoints/4.0.1/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('public/backend_resource/libs/Chart.js/2.4.0/Chart.min.js')}}"></script>
        <script src="{{asset('public/backend_resource/libs/Chart.js/2.6.0/Chart.bundle.min.js')}}"></script>
        <script src="{{asset('public/backend_resource/assets/vendors/charts/utils.js')}}"></script>
        <script src="{{asset('public/backend_resource/libs/jQuery-Knob/1.2.13/jquery.knob.min.js')}}"></script>
        <script src="{{asset('public/backend_resource/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js')}}"></script>
        <script src="{{asset('public/backend_resource/assets/vendors/charts/excanvas.js')}}"></script>
        <script src="{{asset('public/backend_resource/libs/mithril/1.1.1/mithril.js')}}"></script>
        <script src="{{asset('public/backend_resource/assets/vendors/theme-widgets/widgets.js')}}"></script>
        <script src="{{asset('public/backend_resource/libs/moment.js/2.18.1/moment.min.js')}}"></script>
        <script src="{{asset('public/backend_resource/libs/underscore.js/1.8.3/underscore-min.js')}}"></script>
        <script src="{{asset('public/backend_resource/libs/clndr/1.4.7/clndr.min.js')}}"></script>
        <script src="{{asset('public/backend_resource/libs/jqueryui/1.12.1/jquery-ui.min.js')}}"></script>
        <script src="{{asset('public/backend_resource/libs/morris.js/0.5.1/morris.min.js')}}"></script>
        <script src="{{asset('public/backend_resource/libs/raphael/2.2.7/raphael.min.js')}}"></script>
        <script src="{{asset('public/backend_resource/libs/bootstrap-daterangepicker/2.1.25/daterangepicker.min.js')}}"></script>
        <script src="{{asset('public/backend_resource/libs/slick-carousel/1.6.0/slick.min.js')}}"></script>

        <!--data table-->
        <script src="{{asset('public/backend_resource/libs/datatables/1.10.15/js/jquery.dataTables.min.js')}}"></script>
        <!--/data table-->
        <!--select2-->
        <script src="{{asset('public/backend_resource/libs/select2/4.0.3/js/select2.min.js')}}"></script>
        <script src="{{asset('public/backend_resource/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js')}}"></script>
        <!--text editor-->
        <script src="{{asset('public/backend_resource/libs/bootstrap3-wysiwyg/0.3.3/bootstrap3-wysihtml5.all.min.js')}}"></script>

        <script src="{{asset('public/backend_resource/assets/js/theme.js')}}"></script>
        <script src="{{asset('public/backend_resource/assets/js/custom.js')}}"></script>
        <!--Scripts-->

    </head>

    <body class="header-light sidebar-dark sidebar-expand">
        <div id="wrapper" class="wrapper">
            <!-- HEADER & TOP NAVIGATION -->
            <nav class="navbar">
                <!-- Logo Area -->
                <div class="navbar-header">
                    <a href="{{URL::to('/')}}" target="_blank" class="navbar-brand">
<!--                        <img class="logo-expand" alt="" src="assets/demo/logo-expand.png">
                        <img class="logo-collapse" alt="" src="assets/demo/logo-collapse.png">-->
                        <i class="fa fa-home">&nbsp;</i><p>SPA</p>
                    </a>
                </div>
                <!-- /.navbar-header -->
                <!-- Left Menu & Sidebar Toggle -->
                <ul class="nav navbar-nav">
                    <li class="sidebar-toggle"><a href="javascript:void(0)" class="ripple"><i class="material-icons list-icon">menu</i></a>
                    </li>
                </ul>
                <!-- /.navbar-left -->

                <div class="spacer"></div>

                <!-- User Image with Dropdown -->
                <ul class="nav navbar-nav">
                    <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle ripple" data-toggle="dropdown"><span class="avatar thumb-sm">{{Session::get('admin_name')}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons list-icon">expand_more</i></span></a>
                        <div class="dropdown-menu dropdown-left dropdown-card dropdown-card-wide dropdown-card-dark text-inverse" style="width: 200px;">
                            <div class="card">
                                <header class="card-heading-extra">
                                    <div class="row">
<div class="d-flex justify-content-end" style="text-align: center; padding-left: 20%;"><a href="{{URL::to('/logout')}}" class="mr-t-10"><i class="material-icons list-icon">power_settings_new</i> Logout</a>
                                        </div>
                                        <!-- /.col-4 -->
                                    </div>
                                    <!-- /.row -->
                                </header>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- /.navbar-right -->
            </nav>
            <!-- /.navbar -->
            <div class="content-wrapper">

                <!-- SIDEBAR START -->
                @include('backend.partials.sidebar')
                <!-- SIDEBAR END-->

                <!-- /.site-sidebar -->
                @yield('admin_main_content')
                <!-- /.main-wrappper -->

            </div>
            <!-- /.content-wrapper -->
            <!-- FOOTER -->
            <!--<footer class="footer text-center clearfix">Design Develop and Maintain by <a a href="talha.com.bd">TalhaSoft</a></footer>-->
            <footer class="footer text-center clearfix">2020 © Society for People's Advancement - SPA. Developed by <a a href="#">MidNightCodersBD</a></footer>
        </div>
        <!--/ #wrapper -->

        <!-- Scripts -->

        <!--alert hide-->
        {{--<script type="text/javascript">
            $('.alert').delay(3000).slideUp(1000);

        </script>--}}

        <!--for url generate-->
        <script>
            function getUrlValue(pages_title, urlInput) {
//            alert(pages_title);
                urlValue = urlInput;
                if (urlValue === '') {
                    makePagesUrl(pages_title);
                } else {
                    checkPagesUrl(urlInput);
                }
            }

            function makePagesUrl(pages_title) {
                var pageUrl = '';
                var pagesTitle = pages_title;

                pageUrl = pagesTitle.toLowerCase();


                var pageUrl1 = checkUrlCharacter(pageUrl);
//                        alert(pageUrl1);


                $.ajax({
                    url: "{{URL::to('check-url')}}",
                    type: "get",
                    data: {url: pageUrl1},
                    success: function (response) {
                        $('#pages_url').val(response);
                    },
                    error: function (xhr, status) {
//              alert('There is some error.Try after some time.');
                        alert('Error, please reload.');
                    }
                });

            }

            function checkUrlCharacter(pageUrl) {
                for (i = 0; pageUrl.length > i; i++) {
                    if (pageUrl.charAt(i) === ' ') {
                        pageUrl = pageUrl.replace(/ +/g, '-');
                    }
                    if (pageUrl.charAt(i) === '.') {
                        pageUrl = pageUrl.replace(/\./g, '');
                    }
                    if (pageUrl.charAt(i) === '-') {
                        pageUrl = pageUrl.replace(/--/g, '-');
                    }

                }
                pageUrl = pageUrl.replace(/[&\/\\#@!^_=,+()$~%.'":*?<>{}]/g, '');
                if (pageUrl.charAt(pageUrl.length - 1) === '-') {
                    pageUrl = setCharAt(pageUrl, pageUrl.length - 1, '');
                }
                pageUrl = pageUrl.replace(/--/g, '-');
                pageUrl = pageUrl.replace(' ', '-');
                return pageUrl;
            }
        </script>

    </body>

</html>
