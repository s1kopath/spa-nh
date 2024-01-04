@extends('frontend.home_master')
@section('home_content')

    <div class="page-header">
        <div class="container">
            <h1 class="title">All Events</h1>
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
                    <li class="active">All Events</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- page-header -->

    <section id="about-us" class="page-section">
        <div class="container">
            <div class="row">
                @if(isset($allEvents) && !empty($allEvents))

                    @foreach($allEvents as $allEvent)
                        <div class="col-sm-4 col-md-4" data-animation="fadeInUp" style="padding-bottom: 5%;">
                            <img width="500" height="319" class="bottom-pad-20" alt=""
                                 src="{{asset('storage/events_image_folder/'.$allEvent->event_image)}}"
                                 style="height: 319px;"/>
                            <h4 class="text-left bottom-margin-10">{{$allEvent->event_title}}</h4>
                            <h6 class="text-left bottom-margin-10">
                                <i class="icons icon-clock"></i>
                                Time: {{ \Carbon\Carbon::parse($allEvent->start_time)->format('h:i:s a')}}
                                &nbsp;&nbsp;
                                <i class="icons icon-calendar"></i>
                                Date: {{ \Carbon\Carbon::parse($allEvent->start_date)->format('d-m-Y')}}
                            </h6>
                            <h6 class="text-left bottom-margin-10">
                                <i class="icons icon-location"></i>Location: {{$allEvent->event_location}}
                            </h6>
                            <p class="text-left">
                                <?= \Illuminate\Support\Str::limit($allEvent->event_content, 150, '...'); ?>
                            </p>
                            <a href="{{route('event-details',$allEvent->id)}}" class="btn btn-default">Read
                                more</a>
                        </div>
                    @endforeach
                    <div class="col-sm-12" style="opacity: 1;">
                        {{ $allEvents->links() }}
                    </div>

                @else
                    <div class="text-center">
                        Ooops... No content available...!!!
                    </div>
                @endif

            </div>
        </div>
    </section>

    {{--<section id="content">

        <!-- Page Heading -->
        <section class="section page-heading" style="opacity: 1;">

            <h1>Future Planning</h1>
            <p class="breadcrumb"><a href="{{route('/')}}">Home</a> / All Events</p>

        </section>
        <!-- Page Heading -->


        <!-- Section -->
        <section class="section full-width-bg gray-bg">

            <div class="row">


                <div class="col-lg-12 col-md-12 col-sm-12 animate-onscroll --}}{{--bg-color-bisque--}}{{-- pad-2per">


                    <div class="row">
                        @if(isset($allEvents) && !empty($allEvents))

                            @foreach($allEvents as $allEvent)
                                <div class="col-lg-4 col-md-4 col-sm-4" style="opacity: 1;/*background: #fff;*/">

                                    <!-- Event Item -->
                                    <div class="event-item">

                                        <div class="event-image">
                                            <img style="height: 250px;"
                                                 src="{{asset('storage/events_image_folder/'.$allEvent->event_image)}}"
                                                 alt="{{$allEvent->event_title}}">
                                        </div>

                                        <div class="event-info" --}}{{--style="background: #fff;"--}}{{-->

                                            <div class="date">
                                                <span>
                                                    <span>
                                                        class="day">{{ \Carbon\Carbon::parse($allEvent->start_date)->format('d')}}
                                                    </span>
                                                    <span>
                                                        class="month">{{ \Carbon\Carbon::parse($allEvent->start_date)->format('M')}}
                                                    </span>
                                                </span>
                                            </div>

                                            <div class="event-content">
                                                <h6>
                                                    <a href="{{route('event-details',$allEvent->id)}}">{{$allEvent->event_title}}</a>
                                                </h6>
                                                <ul class="event-meta">
                                                    <li>
                                                        <i class="icons icon-clock"></i>
                                                        {{ \Carbon\Carbon::parse($allEvent->start_time)->format('h:i:s a')}}
                                                        -
                                                        {{ \Carbon\Carbon::parse($allEvent->end_time)->format('h:i:s a')}}
                                                    </li>
                                                    <li>
                                                        <i class="icons icon-location"></i> {{$allEvent->event_location}}
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>

                                    </div>
                                    <!-- /Event Item -->

                                </div>


                            @endforeach
                            <div class="col-sm-12" style="opacity: 1;">
                                {{ $allEvents->links() }}
                            </div>

                        @else
                            <div class="text-center">
                                <p>Ooops... No content available...!!!</p>
                            </div>
                        @endif

                    </div>

                </div>


            </div>

        </section>
        <!-- /Section -->

    </section>

    <style>
        /*Shahed Custom CSS*/
        .bg-color-bisque {
            background: bisque !important;
        }

        .pad-2per {
            padding: 2% !important;
        }
    </style>--}}


@endsection
