@extends('frontend.home_master')
@section('home_content')


    <div class="page-header">
        <div class="container">
            <h1 class="title">{{$memberCategory}} Members</h1>
        </div>
        <div class="breadcrumb-box">
            <div class="container">
                <ul class="breadcrumb">
                    <li>
                        <a href="{{route('/')}}">Home</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">About Us</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">Commitee Members</a>
                    </li>
                    <li class="active">{{$memberCategory}} Members</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- page-header -->
    <!-- team -->
    {{--<section id="team-scroll" class="page-section">
        <div class="container text-center">
            <div class="section-title">
                <h2 class="title">{{$memberCategory}} Members</h2>
            </div>
            <div class="row">
                <div class="owl-carousel navigation-1" data-pagination="false" data-items="4" data-autoplay="true"
                     data-navigation="true">
                    @if(isset($allMembers))
                        @foreach($allMembers as $allMember)
                            <div class="col-sm-4 col-md-3 icons-hover-color bottom-xs-pad-20">
                                <div class="image">
                                    <!-- Image -->
                                    <img
                                        src="{{asset('storage/member_image_folder/'.$allMember->member_image)}}"
                                        alt="{{$allMember->member_name}}" title="" width="270" height="270"
                                        style="max-height: 350px;"/>
                                </div>
                                <div class="description">
                                    <!-- Name -->
                                    <h4 class="name">
                                        <a href="{{route('member-profile',$allMember->id)}}">
                                            {{$allMember->member_name}}
                                        </a>
                                    </h4>
                                    <!-- Designation -->
                                    <div class="role">{{$allMember->member_designation}}</div>
                                    <!-- Text -->
                                    --}}{{--<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
                                        intereste.</p>--}}{{--
                                </div>
                                --}}{{--<div class="social-icon i-3x">
                                    <!-- Social Icons -->
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-google"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-pinterest"></i>
                                    </a>
                                </div>--}}{{--
                            </div>
                    @endforeach
                @endif
                <!-- .employee  -->
                </div>
            </div>
        </div>
    </section>--}}
    <!-- team -->
    <section id="services" class="page-section">
        <div class="section-title" data-animation="fadeInUp">
            <!-- Heading -->
            <h2 class="title">{{$memberCategory}} Members</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="timeliner">
                        @if(isset($allMembers))
                            @foreach($allMembers as $allMember)
                                <li>
                                    <div class="timeline-image">
                                        <a href="{{asset('storage/member_image_folder/'.$allMember->member_image)}}"
                                           {{--class="opacity"--}} data-rel="prettyPhoto[portfolio]">
                                            <img
                                                src="{{asset('storage/member_image_folder/'.$allMember->member_image)}}"
                                                width="200" height="200" class="img-circle"
                                                style="height:-webkit-fill-available;" alt=""/>
                                        </a>
                                        {{--<img width="200" height="200" class="img-circle" src="img/sections/services/1.jpg" alt="" />--}}
                                    </div>
                                    <div class="timeline-panel" {{--style="padding-top: 20px;"--}}>
                                        <div class="timeline-heading">
                                            {{--<h4 class="subheading">
                                                <a href="{{route('member-profile',$allMember->id)}}">
                                                    {{$allMember->member_name}}
                                                </a>
                                            </h4>--}}
                                            <h4 style="margin-bottom: 5px;">{{$allMember->member_name}}</h4>
                                            <h5>
                                                {{$allMember->member_designation}}
                                            </h5>
                                        </div>
                                        {{--@if(isset($allMember->member_biography))
                                            <div class="timeline-body text-justify" data-animation="fadeInLeft">
                                                <p class="text-muted">
                                                    <?= $allMember->member_biography; ?>
                                                </p>
                                            </div>
                                        @endif--}}
                                    </div>

                                    @if(isset($allMember->member_biography) && !empty($allMember->member_biography))
                                        <div class="timeline-body text-justify member-biography"
                                             data-animation="fadeInLeft" {{--style="padding-top: 10px;"--}}>
                                            <p class="text-muted">
                                                <?= $allMember->member_biography; ?>
                                            </p>
                                        </div>
                                    @endif
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <style>
        .member-biography {
            margin-top: 17%;
            background: #fff;
            padding: 20px;
            /*border: 1px dashed #ccc;*/
        }
    </style>

@endsection
