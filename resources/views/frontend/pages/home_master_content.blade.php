@extends('frontend.home_master')
@section('home_content')


<!-- Start-slider-->
@include('frontend.partials.main_slider')
<!-- End-slider-->

<!-- Start-what-we-do-->
@include('frontend.widgets.what_we_do')
<!-- End-what-we-do-->

<!-- Start-notice-->
{{--@include('frontend.widgets.news_and_notice')--}}
<!-- End-notice-->

<!-- Start-about-us-->
{{--@include('frontend.widgets.about_us')--}}
<!-- End-about-us-->

<!-- Start-volunteer-->
{{--@include('frontend.widgets.volunteer')--}}
<!-- End-volunteer-->

<!-- Start-counter-->
{{--@include('frontend.widgets.events')--}}
<!-- End-counter-->

<!-- Start-counter-->
@include('frontend.widgets.count_down')
<!-- End-counter-->

<!-- Start-branding-->
{{--@include('frontend.widgets.our_concerns')--}}
<!-- End-branding-->

@endsection
