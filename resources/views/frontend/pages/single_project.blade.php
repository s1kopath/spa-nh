@extends('frontend.home_master')
@section('home_content')

    <div class="page-header">
        <div class="container">
            <h1 class="title">{{$singleProject->project_title}}</h1>
        </div>
        <div class="breadcrumb-box">
            <div class="container">
                <ul class="breadcrumb">
                    <li>
                        <a href="{{route('/')}}">Home</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">Projects</a>
                    </li>
                    <li class="active">{{$singleProject->project_title}}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- page-header -->
    <section class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <img src="{{asset('storage/projects_image_folder/'.$singleProject->project_image)}}" width="800" height="570" alt="{{$singleProject->project_title}}" title=""/>
                </div>
                <div class="col-sm-6 col-md-6 text-justify">
                    <h4>{{$singleProject->project_title}}</h4>
                    <p>
                        <?= $singleProject->project_content ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

@endsection
