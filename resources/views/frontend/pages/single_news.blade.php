@extends('frontend.home_master')
@section('home_content')

    <div class="page-header">
        <div class="container">
            <h1 class="title">{{$singleNews->news_title}}</h1>
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
                        <a href="{{route('all-news')}}">All Events</a>
                    </li>
                    <li class="active">{{$singleNews->news_title}}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- page-header -->
    <section class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <img src="{{asset('storage/news_image_folder/'.$singleNews->news_image)}}" width="800" height="570" alt="{{$singleNews->news_title}}" title=""/>
                </div>
                <div class="col-sm-6 col-md-6">
                    <h4>{{$singleNews->news_title}}</h4>
                    <h6>
                        <i class="icons icon-calendar"></i>
                        News Published Date: {{ \Carbon\Carbon::parse($singleNews->published_date)->format('d-m-Y')}}
                    </h6>
                    <h6 class="text-left bottom-margin-10">
                        <i class="icons icon-language"></i> News Source: <a href="{{$singleNews->news_url}}" target="_blank">{{$singleNews->news_url}}</a>
                    </h6>
                    <p>
                        <?= $singleNews->news_content ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

@endsection
