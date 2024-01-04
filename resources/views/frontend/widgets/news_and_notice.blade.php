<section id="news" class="page-section light-bg">
    <div class="image-bg content-in fixed"
         data-background="{{asset('public/frontend_resources/img/sections/bg/bg-section-counter.jpg')}}">
        <div class="overlay-half-dark"></div>
    </div>
    <div class="container white">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="section-title text-left" data-animation="fadeInUp">
                    <!-- Heading -->
                    <h2 class="title">Recent News</h2>
                </div>
                <ul class="latest-posts">
                    @php
                        $widgetNewses = \App\News::where('status', 1)->orderBy('published_date','DESC')->take(3)->get();
                    @endphp
                    @foreach($widgetNewses as $widgetNews)
                        <li data-animation="fadeInLeft">
                        <div class="post-thumb">
                            <img class="img-thumbnail img-rounded" src="{{asset('storage/news_image_folder/'.$widgetNews->news_image)}}" alt="" title="" width="84"
                                 height="84" style="width: 84px; height: 84px;"/>
                        </div>
                        <div class="post-details">
                            <div class="description">
                                <a href="{{route('news-details',$widgetNews->id)}}">
                                    {{$widgetNews->news_title}}
                                </a>
                            </div>
                            <div class="meta">
                                <!-- Meta Date -->
                                <span class="time">
                                        <i class="fa fa-calendar"></i> {{ \Carbon\Carbon::parse($widgetNews->published_date)->format('d-m-Y')}}</span>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
                <div class="pull-right" style="margin-top: 10%;">
                    <a href="{{route('all-news')}}" class="btn btn-default">
                        View all
                    </a>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="section-title text-left" data-animation="fadeInUp">
                    <!-- Heading -->
                    <h2 class="title">Recent Notice</h2>
                </div>
                <ul class="latest-posts">
                    @php
                        $widgetNotices = \App\Notice::where('status', 1)->orderBy('published_date','DESC')->take(3)->get();
                    @endphp
                    @foreach($widgetNotices as $widgetNotice)
                        <li data-animation="fadeInRight">
                        <div class="post-thumb">
                            {{--<img class="img-rounded" src="img/sections/blog/1.jpg" alt="" title="" width="84"
                                 height="84"/>--}}
                            <span class="icon-notebook2" style="font-size: 84px;"></span>
                        </div>
                        <div class="post-details">
                            <div class="description">
                                <a href="{{route('notice-details',$widgetNotice->id)}}">
                                    {{$widgetNotice->notice_title}}
                                </a>
                            </div>
                            <div class="meta">
                                <!-- Meta Date -->
                                <span class="time">
                                        <i class="fa fa-calendar"></i> {{ \Carbon\Carbon::parse($widgetNotice->published_date)->format('d-m-Y')}}</span>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
                <div class="pull-right" style="margin-top: 10%;">
                    <a href="{{route('all-notice')}}" class="btn btn-default">
                        View all
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
