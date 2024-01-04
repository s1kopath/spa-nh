<!-- Top Bar -->
<div id="top-bar" class="top-bar-section top-bar-bg-color" style="background: #222222;">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-8">
                <!-- Top Contact -->
                <div class="top-contact link-hover-black">
                    <a href="javascript:void(0)"><i class="fa fa-phone"></i>{{$siteInfo->phone}}</a>
                    <a href="javascript:void(0)"><i class="fa fa-envelope"></i>{{$siteInfo->email}}</a>
                </div>
            </div>
            {{--<div class="col-sm-4 col-md-5">
                <!--google search-->
                <script async src="https://cse.google.com/cse.js?cx=b8d184832603e6bc5"></script>
                <div class="gcse-search"></div>
                <!--google search-->
            </div>--}}
            <style>
                .link-hover-black a:hover, .icons-hover-black i:hover {
                    /* color: #171717; */
                     color: #ffffff;
                }
                .gsc-control-cse {
                    /* background-color: #fff; */
                     background-color: unset;
                    /* border: 1px solid #fff; */
                     border: unset;
                }
                .gsc-control-cse {
                    /* padding: 1em; */
                     padding: unset;
                }
                table.gsc-search-box td.gsc-input {
                    /*padding-right: 12px;*/
                    padding-right: unset;
                }
                .gsc-search-button {
                    /* margin-left: 2px; */
                     margin-left: unset;
                }
                .gsc-search-button-v2 {
                    padding: 12px 12px;
                }
            </style>
            <div class="col-sm-6 col-md-4">
                <!-- Top Social Icon -->
                <div class="top-social-icon social-icon gray-bg icons-circle i-3x">
                    <a href="{{$siteInfo->facebook}}" target="_blank"><i class="fa fa-facebook" style="background: #1773EA;"></i></a>
                    <a href="{{$siteInfo->twitter}}" target="_blank"><i class="fa fa-twitter" style="background: #00A6E5;"></i></a>
                    <a href="{{$siteInfo->youtube}}" target="_blank"><i class="fa fa-youtube" style="background: #F70000;"></i></a>
                    <a href="{{$siteInfo->instagram}}" target="_blank"><i class="fa fa-instagram" style="/*background: #C03D5A;*/background: linear-gradient(-130deg,#6736D9,#EA1863 41.07%,#F56D3D 76.05%);"></i></a>
                </div>
            </div>
            {{--
            <div class="col-sm-12">
                <!-- Top Contact -->
                <div class="top-contact --}}{{--link-hover-black--}}{{--">
                    <a href="javascript:void(0)"><i class="fa fa-phone"></i>{{$siteInfo->phone}}</a>
                    <a href="javascript:void(0)"><i class="fa fa-envelope"></i>{{$siteInfo->email}}</a>
                </div>
                <!-- Top Social Icon -->
                <div class="top-social-icon social-icon gray-bg icons-circle i-3x">
                    <a href="{{$siteInfo->facebook}}" target="_blank"><i class="fa fa-facebook" style="background: #1773EA;"></i></a>
                    <a href="{{$siteInfo->twitter}}" target="_blank"><i class="fa fa-twitter" style="background: #00A6E5;"></i></a>
                    <a href="{{$siteInfo->youtube}}" target="_blank"><i class="fa fa-youtube" style="background: #F70000;"></i></a>
                    <a href="{{$siteInfo->instagram}}" target="_blank"><i class="fa fa-instagram" style="/*background: #C03D5A;*/background: linear-gradient(-130deg,#6736D9,#EA1863 41.07%,#F56D3D 76.05%);"></i></a>
                </div>
            </div>
            --}}
        </div>
    </div>
</div>
<!-- Top Bar -->
<!-- Sticky Navbar -->
<header id="sticker" class="sticky-navigation">
    <!-- Sticky Menu -->
    <div class="sticky-menu relative">
        <!-- navbar -->
        <div class="navbar navbar-default navbar-bg-light" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="navbar-header">
                            <!-- Button For Responsive toggle -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span></button>
                            <!-- Logo -->

                            <a class="navbar-brand" href="{{route('/')}}">
                                <img class="site_logo" alt="{{$siteInfo->site_title}}" src="{{asset('storage/'.$siteInfo->site_logo)}}"/>
                            </a></div>
                        <!--main menu starts-->
                        @include('frontend.partials.main_menu')
                        <!--main menu ends-->
                    </div>
                    <!-- /.col-md-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- navbar -->
    </div>
    <!-- Sticky Menu -->
</header>
<!-- Sticky Navbar -->
{{--<style>
    .navbar.navbar-bg-light .navbar-nav > li > a:hover{
        color: #222222;
    }
</style>--}}
