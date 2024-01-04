@extends('frontend.home_master')
@section('home_content')

    <div class="page-header">
        <div class="container">
            <h1 class="title">All News</h1>
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
                    <li class="active">All News</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- page-header -->

    <section id="about-us" class="page-section">
        <div class="container">
            <div class="row">
                @if(isset($allNewses) && !empty($allNewses))

                    @foreach($allNewses as $allNews)
                        <div class="col-sm-4 col-md-4" data-animation="fadeInUp">
                            <img width="500" height="319" class="bottom-pad-20" alt=""
                                 src="{{asset('storage/news_image_folder/'.$allNews->news_image)}}"
                                 style="height: 319px;"/>
                            <h4 class="text-left bottom-margin-10">{{$allNews->news_title}}</h4>
                            <h6 class="text-left bottom-margin-10">
                                <i class="icons icon-calendar"></i>
                                News Published Date: {{ \Carbon\Carbon::parse($allNews->published_date)->format('d-m-Y')}}
                            </h6>
                            <p class="text-left">
                                <?= \Illuminate\Support\Str::limit($allNews->news_content, 150, '...'); ?>
                            </p>
                            <a href="{{route('news-details',$allNews->id)}}" class="btn btn-default">Read
                                more</a>
                        </div>
                    @endforeach
                    <div class="col-sm-12" style="opacity: 1;">
                        {{ $allNewses->links() }}
                    </div>

                @else
                    <div class="text-center">
                        Ooops... No content available...!!!
                    </div>
                @endif

            </div>
        </div>
    </section>

@endsection
