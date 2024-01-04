@extends('frontend.home_master')
@section('home_content')

    <div class="page-header">
        <div class="container">
            <h1 class="title">PKSF</h1>
        </div>
        <div class="breadcrumb-box">
            <div class="container">
                <ul class="breadcrumb">
                    <li>
                        <a href="{{route('/')}}">Home</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">What We Do?</a>
                    </li>
                    <li>
                        <a href="{{route('training')}}">Training</a>
                    </li>
                    <li class="active">PKSF</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- page-header -->
    <section class="page-section">
        <div class="container">
            <div class="row">
                <div class="row col-md-9">
                    <div class="col-md-12 text-justify">
                        {{--content start--}}
                        <iframe src="https://spa.clickthephoto.com/pksf1/" style="border:none;width:100%;height:1500px;" title="Iframe Example"></iframe>
                        {{--content end--}}
                    </div>
                </div>
                <div class="sidebar col-md-3">
                    @include('frontend.partials.training_right_sidebar')
                </div>
            </div>
        </div>
    </section>

@endsection
