@extends('frontend.home_master')
@section('home_content')


    <div class="page-header">
        <div class="container">
            <h1 class="title">Site Map</h1>
        </div>
        <div class="breadcrumb-box">
            <div class="container">
                <ul class="breadcrumb">
                    <li>
                        <a href="{{route('/')}}">Home</a>
                    </li>
                    <li class="active">Site Map</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- page-header -->

    <section class="page-section">
        <div class="container">
            <div class="row">

                <div class="col-md-3">
                    <h4>Home</h4>
                    <ul class="sitemap">
                        <li>
                            <a href="{{route('/')}}">Home</a>
                        </li>
                    </ul>
                    <hr/>
                    <h4>About Us</h4>
                    <ul class="sitemap">
                        <li class="parent">
                            <a href="{{route('who-we-are')}}">Who We Are?</a>
                        </li>
                        <li class="parent">
                            <a href="{{route('mission-vision')}}">Mission & Vision</a>
                        </li>
                        <li class="parent">
                            <a href="javascript:void(0)">Committee members</a>
                            <ul class="sub left">
                                <li>
                                    <a href="{{route('member-list',\App\Member::MEMBER_CATEGORY_GENERAL)}}">General Members</a>
                                </li>
                                <li>
                                    <a href="{{route('member-list',\App\Member::MEMBER_CATEGORY_ADVISORY)}}">Advisory Members</a>
                                </li>
                                <li>
                                    <a href="{{route('member-list',\App\Member::MEMBER_CATEGORY_EXECUTIVE)}}">Executive Members</a>
                                </li>
                            </ul>
                        </li>
                        <li class="parent">
                            <a href="{{route('volunteer.create')}}">Become a volunteer</a>
                        </li>
                    </ul>
                    <hr/>
                </div>

                <div class="col-md-3">
                    <h4>What We Do?</h4>
                    <ul class="sitemap">
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
                    <hr/>
                    <h4>Blog</h4>
                    <ul class="sitemap">
                        <li>
                            <a href="{{route('blog')}}">Blog</a>
                        </li>
                    </ul>
                    <hr/>
                </div>

                <div class="col-md-3">
                    <h4>Projects</h4>
                    <ul class="sitemap">
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
                    <hr/>
                    <h4>Contact Us</h4>
                    <ul class="sitemap">
                        <li>
                            <a href="{{route('contact-us')}}">Contact Us</a>
                        </li>
                    </ul>
                    <hr/>
                </div>

                <div class="col-md-3">
                    <h4>Media Center</h4>
                    <ul class="sitemap">
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
                    <hr/>
                </div>

            </div>

        </div>
    </section>

@endsection
