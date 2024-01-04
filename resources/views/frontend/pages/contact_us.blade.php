@extends('frontend.home_master')
@section('home_content')

    <div class="page-header">
        <div class="container">
            <h1 class="title">Contact Us</h1>
        </div>
        <div class="breadcrumb-box">
            <div class="container">
                <ul class="breadcrumb">
                    <li>
                        <a href="{{route('/')}}">Home</a>
                    </li>
                    {{--<li>
                        <a href="javascript:void(0)">Contact Us</a>
                    </li>--}}
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- page-header -->
    <section id="contact-us" class="page-section">
        <div class="image-bg content-in fixed" data-background="{{asset('public/frontend_resources/img/sections/bg/bg-section-counter.jpg')}}">
            <div class="overlay"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center">
                    <h2 class="text-color" style="color: #ffffff;">Contact Us Today</h2>
                    <p class="white">
                        <?= $contact->address; ?>
                    </p>
                    <hr class="white"/>
                    <h3 class="white">
                        {{$contact->phone}}
                    </h3>
                    <h3 class="white" style="text-transform: lowercase;">
                        {{$contact->email}}
                        {{--<a class="text-color" href="mailto:info@yourwebsite.com">info@yourwebsite.com</a>--}}
                    </h3>
                    {{--<hr class="white" />
                    <div class="icon-6 hover-color icon-circle">
                        <a href="{{$contact->facebook}}" target="_blank">
                            <span class="pe-so-facebook"></span>
                        </a>
                        <a href="{{$contact->twitter}}" target="_blank">
                            <span class="pe-so-twitter"></span>
                        </a>
                        <a href="{{$contact->youtube}}" target="_blank">
                            <span class="pe-so-youtube"></span>
                        </a>
                        <a href="{{$contact->instagram}}" target="_blank">
                            <span class="pe-so-instagram"></span>
                        </a>
                    </div>--}}
                </div>
                <div class="col-md-6">
                    {{--Google map start--}}
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="580" height="400" id="gmap_canvas"
                                    src="https://maps.google.com/maps?q=Digital%20Connectivity,%20Avenue%209,%20Dhaka&t=&z=19&ie=UTF8&iwloc=&output=embed"
                                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            {{--<a href="https://embedgooglemap.net/maps/69"></a><br>--}}
                            <style>.mapouter {
                                    position: relative;
                                    text-align: right;
                                    height: 400px;
                                    width: 580px;
                                }</style>
                            <a href="https://google-map-generator.com">google-map-generator.com</a>
                            <style>.gmap_canvas {
                                    overflow: hidden;
                                    background: none !important;
                                    height: 400px;
                                    width: 580px;
                                }</style>
                        </div>
                    </div>
                    {{--Google map end--}}
                </div>
            </div>
        </div>
    </section>
    <!-- page-section -->

@endsection
