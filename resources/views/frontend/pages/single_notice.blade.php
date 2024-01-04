@extends('frontend.home_master')
@section('home_content')

    <div class="page-header">
        <div class="container">
            <h1 class="title">{{$singleNotice->notice_title}}</h1>
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
                        <a href="{{route('all-notice')}}">All Notice</a>
                    </li>
                    <li class="active">{{$singleNotice->notice_title}}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- page-header -->
    <section class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <h4>{{$singleNotice->notice_title}}</h4>
                    <h6>
                        <i class="icons icon-calendar"></i>
                        News Published Date: {{ \Carbon\Carbon::parse($singleNotice->published_date)->format('d-m-Y')}}
                    </h6>
                    @if(isset($singleNotice->notice_file) && !empty($singleNotice->notice_file))
                        <a href="{{url('storage/notice_file_folder/'.$singleNotice->notice_file)}}"
                           target="_blank" class="btn btn-default btn-sm">
                            <i class="icons icon-download7"></i>&nbsp;Download
                        </a>
                    @endif
                    <p>
                        <br/>
                        <?= $singleNotice->notice_content ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

@endsection
