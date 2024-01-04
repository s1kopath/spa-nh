@extends('frontend.home_master')
@section('home_content')

    <div class="page-header">
        <div class="container">
            <h1 class="title">{{$mission->pages_title}} & {{$vision->pages_title}}</h1>
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
                    <li class="active">{{$mission->pages_title}} & {{$vision->pages_title}}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- page-header -->
    <section class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <img src="{{asset('storage/pages_image_folder/'.$vision->pages_image)}}" width="800"
                         height="570" alt="{{$vision->pages_title}}" title=""/>
                </div>
                <div class="col-sm-6 col-md-6">
                    <h4>{{$vision->pages_title}}</h4>
                    <p>
                        <?= $vision->pages_content ?>
                    </p>
                </div>
            </div>
            <div class="row top-pad-40">
                <div class="col-sm-6 col-md-6">
                    <h4>{{$mission->pages_title}}</h4>
                    <p>
                        <?= $mission->pages_content ?>
                    </p>
                </div>
                <div class="col-sm-6 col-md-6">
                    <img src="{{asset('storage/pages_image_folder/'.$mission->pages_image)}}" width="800"
                         height="570" alt="{{$mission->pages_title}}" title=""/>
                </div>
            </div>
        </div>
    </section>


@endsection
