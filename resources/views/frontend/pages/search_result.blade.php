@extends('frontend.home_master')
@section('home_content')


<div class="page-header">
    <div class="container">
        <h1 class="title">{{$aboutSpa->pages_title}}</h1>
    </div>
    <div class="breadcrumb-box">
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a href="{{route('/')}}">Home</a>
                </li>
                <li class="active">Search Result</li>
            </ul>
        </div>
    </div>
</div>
<!-- page-header -->
<section class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <script async src="https://cse.google.com/cse.js?cx=b8d184832603e6bc5"></script>
                <div class="gcse-searchresults-only"></div>
            </div>
            {{--<div class="col-sm-6 col-md-6">
                <img src="{{asset('storage/pages_image_folder/'.$aboutSpa->pages_image)}}" width="800" height="570" alt="{{$aboutSpa->pages_title}}" title=""/>
            </div>
            <div class="col-sm-6 col-md-6">
                <h4>{{$aboutSpa->pages_title}}</h4>
                <p>
                    <?= $aboutSpa->pages_content ?>
                </p>
            </div>--}}
        </div>
    </div>
</section>

@endsection
