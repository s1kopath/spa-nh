@extends('frontend.home_master')
@section('home_content')

    <div class="page-header">
        <div class="container">
            <h1 class="title">All Notice</h1>
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
                    <li class="active">All Notice</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- page-header -->

    <section class="page-section">
        <div class="container">
            <div class="bs-docs-section">
                <div data-example-id="list-group-variants" {{--class="bs-example"--}}>
                    <div class="row">
                        <div class="col-md-12 col-sm-6" data-animation="fadeInUp">
                        <ul class="list-group">
                            @if(isset($allNotices) && !empty($allNotices))

                                @foreach($allNotices as $allNotice)
                                    <li class="list-group-item list-group-item-info">
                                        <h4 class="text-left bottom-margin-10">
                                            <a href="{{route('notice-details',$allNotice->id)}}">
                                                {{$allNotice->notice_title}}
                                            </a>
                                        </h4>
                                        <h6 class="text-left bottom-margin-10">
                                            <i class="icons icon-calendar"></i>
                                            Notice Published
                                            Date: {{ \Carbon\Carbon::parse($allNotice->published_date)->format('d-m-Y')}}
                                            @if(isset($allNotice->notice_file) && !empty($allNotice->notice_file))
                                                <a href="{{url('storage/notice_file_folder/'.$allNotice->notice_file)}}"
                                                   target="_blank" class="btn btn-default btn-sm">
                                                    <i class="icons icon-download7"></i>&nbsp;Download
                                                </a>
                                            @endif
                                        </h6>
                                    </li>

                                @endforeach
                                <div class="col-sm-12" style="opacity: 1;">
                                    {{ $allNotices->links() }}
                                </div>

                            @else
                                <div class="text-center">
                                    Ooops... No content available...!!!
                                </div>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </section>

@endsection
