<section id="popular" class="page-section">
    <div class="container">
        <div class="section-title text-left" data-animation="fadeInUp">
            <!-- Heading -->
            <h2 class="title">Recent Events</h2>
        </div>
        <div class="row">
            @php
                $recentEvents = \App\Event::where('status', 1)->orderBy('start_date','DESC')->take(6)->get();
            @endphp
            @if(isset($recentEvents) && !empty($recentEvents))

                <div class="owl-carousel navigation-1" data-pagination="false" data-items="3" data-autoplay="true"
                     data-navigation="true">
                    @foreach($recentEvents as $recentEvent)
                        <div class="col-sm-4 col-md-4 icons-hover-color bottom-xs-pad-20" data-animation="fadeInRight">
                            <div class="boxed-block pad-20 opacity">
                                <!-- title -->
                                <h4 class="title-height">
                                    <?= \Illuminate\Support\Str::limit($recentEvent->event_title, 30, '...'); ?>
                                    {{--{{$recentEvent->event_title}}--}}
                                </h4>
                                <!-- Image -->
                                <img
                                    src="{{asset('storage/events_image_folder/'.$recentEvent->event_image)}}"
                                    style="height: 280px;" alt="" title="" width="500" height="280"/>
                                <!-- Text -->
                                <h6 class="text-left bottom-margin-10">
                                    <i class="icons icon-clock"></i>
                                    Time: {{ \Carbon\Carbon::parse($recentEvent->start_time)->format('h:i:s a')}}
                                    &nbsp;&nbsp;
                                    <i class="icons icon-calendar"></i>
                                    Date: {{ \Carbon\Carbon::parse($recentEvent->start_date)->format('d-m-Y')}}
                                </h6>
                                <h6 class="text-left bottom-margin-10">
                                    <i class="icons icon-location"></i>Location: {{$recentEvent->event_location}}
                                </h6>
                                <div class="content-height">
                                    <p class="text-left"><?= \Illuminate\Support\Str::limit($recentEvent->event_content, 130, '...'); ?></p>
                                </div>
                                <a href="{{route('event-details',$recentEvent->id)}}" class="btn btn-default">Read
                                    more</a>
                            </div>
                            <!-- item -->
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center">
                    Ooops... No content available...!!!
                </div>
            @endif

        </div>
    </div>
</section>


<style>
    .title-height{
        height: 70px;
    }
    .content-height{
        height: 135px;
    }
</style>

