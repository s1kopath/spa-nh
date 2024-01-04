<!-- Navbar Collapse -->
<div class="navbar-collapse collapse">
    <!-- nav -->
    <ul class="nav navbar-nav">
        <!-- Home  Mega Menu -->
        <li class="mega-menu">
            <a href="{{route('/')}}"><span class="icon-home {{--text-color--}}"></span> Home</a>
        </li>
        <!-- Mega Menu Ends -->
        <!-- Who we are? Menu -->
        <li>
            <a href="javascript:void(0)">About Us<span class="icon-keyboard-arrow-down"></span></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="{{route('who-we-are')}}">Who We Are?</a>
                </li>
                <li>
                    <a href="{{route('chairmans-message')}}">Chairman's Message</a>
                </li>
                <li>
                    <a href="{{route('secretary-message')}}">Secretary's Message</a>
                </li>
                <li>
                    <a href="{{route('ceos-message')}}">CEO's Message</a>
                </li>
                <li>
                    <a href="{{route('cc-message')}}">CC's Message</a>
                </li>
                {{--<li>
                    <a href="{{route('mission-vision')}}">Mission & Vision</a>
                </li>--}}
                <li>
                    <a href="javascript:void(0)">Committee members</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{route('member-list',\App\Member::MEMBER_CATEGORY_EXECUTIVE)}}">Executive Members</a>
                        </li>
                        <li>
                            <a href="{{route('member-list',\App\Member::MEMBER_CATEGORY_ADVISORY)}}">Advisory Members</a>
                        </li>
                        <li>
                            <a href="{{route('member-list',\App\Member::MEMBER_CATEGORY_GENERAL)}}">General Members</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('volunteer.create')}}">Become a volunteer</a>
                </li>
            </ul>
        </li>
        <!-- Who we are? Menu Ends -->
        <!-- What we do? Menu -->
        {{--<li>
            <a href="javascript:void(0)">What We Do? <span class="icon-keyboard-arrow-down"></span></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="{{route('education')}}">Education</a>
                </li>
                <li>
                    <a href="{{route('health')}}">Health</a>
                </li>
                <li>
                    <a href="{{route('training')}}">Training</a>
                </li>
            </ul>
        </li>--}}
        <!-- What we do? Menu Ends -->
        <!-- Projects Menu -->
        <li>
            <a href="javascript:void(0)">Projects <span class="icon-keyboard-arrow-down"></span></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="{{route('completed-projects')}}">Completed Projects</a>
                </li>
                <li>
                    <a href="{{route('running-projects')}}">Running Projects</a>
                </li>
                <li>
                    <a href="{{route('future-projects')}}">Future Planning</a>
                </li>
            </ul>
        </li>
        <!-- Projects Menu Ends -->
        <!-- Training Menu -->
        <li>
            <a href="{{route('training')}}">Training<span class="icon-keyboard-arrow-down"></span></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="javascript:void(0)">IT Training</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{route('digital-marketing')}}">
                                DIGITAL MARKETING
                            </a>
                        </li>
                        <li>
                            <a href="{{route('graphics-design')}}">
                                Graphics Design
                            </a>
                        </li>
                        <li>
                            <a href="{{route('web-design-development')}}">
                                Web Design Development
                            </a>
                        </li>
                        <li>
                            <a href="{{route('mobile-app-development')}}">
                                Mobile Apps Development
                            </a>
                        </li>
                        <li>
                            <a href="{{route('professional-short-course')}}">
                                Professional Short Course
                            </a>
                        </li>
                        <li>
                            <a href="{{route('programming')}}">
                                Programming
                            </a>
                        </li>
                        <li>
                            <a href="{{route('telecommunication')}}">
                                Telecommunication
                            </a>
                        </li>
                        <li>
                            <a href="{{route('ecommerce-solution')}}">
                                ECOMMERCE SOLUTION
                            </a>
                        </li>
                        <li>
                            <a href="{{route('industrial-attachment')}}">
                                Industrial Attachment
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)">Network Solution</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{route('cisco')}}">
                                CISCO
                            </a>
                        </li>
                        <li>
                            <a href="{{route('ccna-collaboration')}}">
                                CCNA Collaboration
                            </a>
                        </li>
                        <li>
                            <a href="{{route('ccna-routing-and-switching')}}">
                                CCNA (Routing & Switching)
                            </a>
                        </li>
                        <li>
                            <a href="{{route('ccnp-routing-and-switching')}}">
                                CCNP (Routing & Switching)
                            </a>
                        </li>
                        <li>
                            <a href="{{route('mcsa-2016-server')}}">
                                MCSA: 2016 Server
                            </a>
                        </li>
                        <li>
                            <a href="{{route('mikrotik')}}">
                                MikroTik
                            </a>
                        </li>
                        <li>
                            <a href="{{route('a-network')}}">
                                A+ & Network+
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <!-- Training Menu Ends-->
        <!-- Impacts Menu -->
        {{--<li>
            <a href="javascript:void(0)">Impacts</a>
        </li>--}}
        <!-- Impacts Menu Ends-->
        <!-- Media Center Menu -->
        <li>
            <a href="javascript:void(0)">Media Center <span class="icon-keyboard-arrow-down"></span></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="{{route('all-news')}}">News</a>
                </li>
                <li>
                    <a href="{{route('all-notice')}}">Notice</a>
                </li>
                <li>
                    <a href="{{route('all-events')}}">Events</a>
                </li>
                <li>
                    <a href="{{route('photo-gallery-albums')}}">Photo gallery</a>
                </li>
                <li>
                    <a href="{{route('video-gallery-albums')}}">Video gallery</a>
                </li>
            </ul>
        </li>
        <!-- Media Center Menu Ends -->
        <!-- Blog Menu -->
        <li>
            <a href="javascript:void(0)">Successful Students <span class="icon-keyboard-arrow-down"></span></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="{{route('freelancer')}}">Freelancer</a>
                </li>
                <li>
                    <a href="{{route('pksf')}}">PKSF</a>
                </li>
            </ul>
        </li>

        {{--<li>
            <a href="{{route('blog')}}">Blog</a>
        </li>--}}
        <!-- Blog Menu Ends-->
        <!-- Contact us Menu -->
        <li>
            <a href="{{route('contact-us')}}">Contact Us &nbsp;</a>
        </li>
        <!-- Contact us Menu Ends-->
        <!-- Donate us Menu -->
        <li>
            <a href="{{route('donation.create')}}">Donate Us &nbsp;</a>
        </li>
        <!-- Donate us Menu Ends-->

        <!-- Header Search -->
        {{--<li class="hidden-767">
            <a href="#" class="header-search">
                <span>
                    <i class="fa fa-search"></i>
                </span>
            </a>
        </li>--}}
    </ul>
    <!-- Right nav -->

    <!-- Header Contact Content -->
    <div class="bg-white hide-show-content no-display header-contact-content">
        <p class="vertically-absolute-middle">Call Us
            <strong>{{$siteInfo->phone}}</strong></p>
        <button class="close">
            <i class="fa fa-times"></i>
        </button>
    </div>
    <!-- Header Contact Content -->

    <!-- Header Search Content -->
    {{--<div class="bg-white hide-show-content no-display header-search-content">
        <form role="search" class="navbar-form vertically-absolute-middle">
            <div class="form-group">
                --}}{{--<input type="text" placeholder="Enter your text &amp; Search Here"
                       class="form-control" id="s" name="s" value=""/>--}}{{--
                <!--google search-->
--}}{{--                    <div class="gcse-searchbox-only"></div>--}}{{--
                    <script async src="https://cse.google.com/cse.js?cx=b8d184832603e6bc5"></script>
                    <div class="gcse-search"></div>
                <!--google search-->
            </div>
        </form>
        <button class="close">
            <i class="fa fa-times"></i>
        </button>
    </div>
    <style>
        .header-search-content .navbar-form, .header-search-content .navbar-form .form-group {
            width: 95%;
        }
    </style>--}}
    <!-- Header Search Content -->

    <!-- Header Share Content -->
    <div class="bg-white hide-show-content no-display header-share-content">
        <div class="vertically-absolute-middle social-icon gray-bg icons-circle i-3x">
            <a href="{{$siteInfo->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="{{$siteInfo->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="{{$siteInfo->youtube}}" target="_blank"><i class="fa fa-youtube"></i></a>
            <a href="{{$siteInfo->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a>
        </div>
        <button class="close">
            <i class="fa fa-times"></i>
        </button>
    </div>
    <!-- Header Share Content -->
</div>
<!-- /.navbar-collapse -->

