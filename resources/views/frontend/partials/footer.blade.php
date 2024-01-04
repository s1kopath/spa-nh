<footer id="footer">
    <div class="footer-widget dark-section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 widget bottom-xs-pad-20">
                    <div class="widget-title">
                        <!-- Title -->
                        <h3 class="title">{{$siteInfo->site_title}}</h3>
                    </div>
                    <p>{{$siteInfo->tagline}}</p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 widget bottom-xs-pad-20">
                    <div class="widget-title">
                        <!-- Title -->
                        <h3 class="title">Quick Links</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <nav>
                                <ul>
                                    <!-- List Items -->
                                    <li><a href="{{route('who-we-are')}}"><span class="icon-pointer2"></span> About SPA</a></li>
                                    <li><a href="{{route('all-news')}}"><span class="icon-pointer2"></span> News</a></li>
                                    <li><a href="{{route('all-notice')}}"><span class="icon-pointer2"></span> Notice</a></li>
                                    <li><a href="{{route('all-events')}}"><span class="icon-pointer2"></span> Event</a></li>
                                    <li><a href="{{route('photo-gallery-albums')}}"><span class="icon-pointer2"></span> Photo Gallery</a></li>
                                    <li><a href="javascript:void(0)"><span class="icon-pointer2"></span> Video Gallery</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-md-6">
                            <nav>
                                <ul>
                                    <!-- List Items -->
                                    {{--<li><a href="javascript:void(0)"><span class="icon-pointer2"></span> Impacts</a></li>--}}
                                    <li><a href="javascript:void(0)"><span class="icon-pointer2"></span> Blog</a></li>
                                    <li><a href="javascript:void(0)"><span class="icon-pointer2"></span> Register</a></li>
                                    <li><a href="javascript:void(0)"><span class="icon-pointer2"></span> Login</a></li>
                                    <li><a href="{{route('donation.create')}}"><span class="icon-pointer2"></span> Donate Us</a></li>
                                    <li><a href="{{route('contact-us')}}"><span class="icon-pointer2"></span> Contact Us</a></li>
                                    <li><a href="{{route('sitemap')}}"><span class="icon-pointer2"></span> Site Map</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 widget">
                    <div class="widget-title">
                        <!-- Title -->
                        <h3 class="title">Contact Us</h3>
                    </div>
                    <p>
                        <strong>Address: <br></strong> <?= $siteInfo->address; ?><br/>
                        <strong>Email: <br></strong> {{$siteInfo->email}}<br/>
                        <strong>Helpline Nos: <br></strong> {{$siteInfo->phone}}
                    </p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 widget newsletter bottom-xs-pad-20">
                    <div class="widget-title">
                        <!-- Title -->
                        <h3 class="title">Like us on facebook</h3>
                    </div>
                    <div>
                        {{--<h5>Like us on facebook</h5>--}}
                        <iframe src="//www.facebook.com/plugins/likebox.php?href={{$siteInfo->facebook}}&amp;width=270&amp;{{--height=240&amp;--}}colorscheme=dark&amp;header=false&amp;show_faces=true&amp;stream=false&amp;show_border=false" style="border:none; overflow:hidden; width:100%; /*height:240px;*/"></iframe>
                    </div>

                    <!-- Social Links -->
                    <div class="social-icon gray-bg icons-circle i-3x">
                        <a href="{{$siteInfo->facebook}}" target="_blank"><i class="fa fa-facebook" style="background: #1773EA;"></i></a>
                        <a href="{{$siteInfo->twitter}}" target="_blank"><i class="fa fa-twitter" style="background: #00A6E5;"></i></a>
                        <a href="{{$siteInfo->youtube}}" target="_blank"><i class="fa fa-youtube" style="background: #F70000;"></i></a>
                        <a href="{{$siteInfo->instagram}}" target="_blank"><i class="fa fa-instagram" style="/*background: #C03D5A;*/background: linear-gradient(-130deg,#6736D9,#EA1863 41.07%,#F56D3D 76.05%);"></i></a>
                    </div>
                </div>
                <!-- .newsletter -->
            </div>
        </div>
    </div>
    <!-- footer-top -->
    <div class="copyright dark-section">
        <div class="container">
            <div class="row">
                <!-- Copyrights -->
                <div class="col-xs-11 col-sm-11 col-md-11 text-center"> &copy; 2020 <a href="{{route('/')}}">{{$siteInfo->site_title}}</a>.
                    All Rights Reserved. {{--Developed by <a href="javascript:void(0)">MidNightCodersBD</a>.--}}
                    <br>
                    <!-- Terms Link -->
                    <a href="javascript:void(0)">Terms of Use</a> / <a href="javascript:void(0)"> Privacy Policy</a>
                </div>
                <div class="col-xs-1  col-sm-1 col-md-1 text-right page-scroll gray-bg icons-circle i-3x">
                    <!-- Goto Top -->
                    <a href="#page">
                        <i class="glyphicon glyphicon-arrow-up"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottom -->
</footer>
