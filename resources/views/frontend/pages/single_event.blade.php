@extends('frontend.home_master')
@section('home_content')

    <div class="page-header">
        <div class="container">
            <h1 class="title">{{$singleEvent->event_title}}</h1>
        </div>
        <div class="breadcrumb-box">
            <div class="container">
                <ul class="breadcrumb">
                    <li>
                        <a href="{{route('/')}}">Home</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">Media Center</a>
                    </li>
                    <li>
                        <a href="{{route('all-events')}}">All Events</a>
                    </li>
                    <li class="active">{{$singleEvent->event_title}}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- page-header -->
    <section class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <img src="{{asset('storage/events_image_folder/'.$singleEvent->event_image)}}" width="800" height="570" alt="{{$singleEvent->event_title}}" title=""/>
                </div>
                <div class="col-sm-6 col-md-6 text-justify">
                    <h4>{{$singleEvent->event_title}}</h4>
                    <h6>
                        <i class="icons icon-clock"></i>
                        Event Time: {{ \Carbon\Carbon::parse($singleEvent->start_time)->format('h:i:s a')}}
                        &nbsp;to&nbsp;
                        {{ \Carbon\Carbon::parse($singleEvent->end_time)->format('h:i:s a')}}
                    </h6>
                    <h6>
                        <i class="icons icon-calendar"></i>
                        Event Date: {{ \Carbon\Carbon::parse($singleEvent->start_date)->format('d-m-Y')}}
                        &nbsp;to&nbsp;
                        {{ \Carbon\Carbon::parse($singleEvent->end_date)->format('d-m-Y')}}
                    </h6>
                    <h6 class="text-left bottom-margin-10">
                        <i class="icons icon-location"></i>Event Location: {{$singleEvent->event_location}}
                    </h6>
                    <p>
                        <?= $singleEvent->event_content ?>
                    </p>
                </div>
            </div>
        </div>
    </section>



    {{--<section id="content">

        <!-- Page Heading -->
        <section class="section page-heading" style="opacity: 1;">

            <h1>{{$singleEvent->event_title}}</h1>
            <p class="breadcrumb"><a href="{{route('/')}}">Home</a> / {{$singleEvent->event_title}}</p>

        </section>
        <!-- Page Heading -->


        <!-- Section -->
        <section class="section full-width-bg gray-bg">

            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12">

                    <!-- Event Single -->
                    <div class="event-single">

                        <div class="row">

                            <div class="col-lg-9 col-md-9 col-sm-8" style="opacity: 1;">

                                <div class="event-image">
                                    <img src="{{asset('storage/events_image_folder/'.$singleEvent->event_image)}}" alt="{{$singleEvent->event_title}}">
                                </div>

                                <h6>Description</h6>

                                <p><?= $singleEvent->event_content ?></p>

                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-4">

                                <!-- Event Meta -->
                                <div class="event-meta">

                                    <div class="event-meta-block" style="opacity: 1; height: unset;">

                                        <i class="icons icon-calendar"></i>
                                        <p class="title">Start Date: </p>{{ \Carbon\Carbon::parse($singleEvent->start_date)->format('d-m-Y')}}
                                        <p class="title">End Date: </p>{{ \Carbon\Carbon::parse($singleEvent->end_date)->format('d-m-Y')}}

                                    </div>

                                    <div class="event-meta-block" style="opacity: 1;">

                                        <i class="icons icon-clock"></i>
                                        <p class="title">Start Time - End Time</p>
                                        <p>
                                            {{ \Carbon\Carbon::parse($singleEvent->start_time)->format('h:i:s a')}}
                                             -
                                            {{ \Carbon\Carbon::parse($singleEvent->end_time)->format('h:i:s a')}}
                                        </p>

                                    </div>

                                    <div class="event-meta-block" style="opacity: 1;">

                                        <i class="icons icon-location"></i>
                                        <p class="title">Event Location</p>
                                        <p>{{$singleEvent->event_location}}</p>

                                    </div>


                                    <div class="event-meta-block" style="opacity: 1;">

                                        <i class="icons icon-share"></i>
                                        <p class="title">Share This</p>
                                        <ul class="social-share">--}}{{--{{Request::url()}}--}}{{--
                                            <li class="facebook"><a href="http://www.facebook.com/sharer/sharer.php?u={{route('event-details',$singleEvent->id)}}" class="tooltip-ontop" title="" data-original-title="Facebook" target="_blank"><i class="icons icon-facebook"></i></a></li>
                                            <li class="twitter"><a href="https://twitter.com/home?status={{route('event-details',$singleEvent->id)}}" class="tooltip-ontop" title="" data-original-title="Twitter" target="_blank"><i class="icons icon-twitter"></i></a></li>

                                        </ul>

                                    </div>


                                </div>
                                <!-- /Event Meta -->

                            </div>

                        </div>

                    </div>
                    <!-- /Event Single -->

                </div>




            </div>

        </section>

        <!-- /Section -->

    </section>--}}


@endsection
