<section id="about-us" class="page-section" {{--style="padding-top: 0;"--}}>
    <div class="container">
        <div class="section-title" data-animation="fadeInUp">
            <h1 class="title">What we do ?</h1>
        </div>
        {{--<div class="row">
            <div class="col-md-12 text-center" data-animation="fadeInUp">
                <!-- Text -->
                <p class="title-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae odit iste exercitationem praesentium deleniti nostrum laborum rem id nihil tempora. Adipisci ea commodi unde nam placeat cupiditate quasi a ducimus rem consequuntur ex eligendi minima voluptatem assumenda voluptas quidem sit maiores odio velit voluptate.</p>
            </div>
        </div>--}}
        <div class="row special-feature">
            <!-- Special Feature Box 1 -->
            @php
                $health = \App\Page::where(['status' => '1', 'pages_slug' => 'health'])->first();
            @endphp
            <div class="col-md-4 col-sm-4" data-animation="fadeInUp">
                <div class="s-feature-box text-center">
                    {{--<div class="mask-top">
                        <!-- Icon -->
                        <i class="fa fa-heart-o"></i>
                        <!-- Title -->
                        <h4>{{$health->pages_title}}</h4></div>--}}
                    <div class="mask-bottom">
                        <!-- Icon -->
                        <i class="fa fa-heart-o"></i>
                        <!-- Title -->
                        <h4>{{$health->pages_title}}</h4>
                        <!-- Text -->
                        <p><?= \Illuminate\Support\Str::limit($health->pages_content, 100, '...'); ?></p>
                        {{--<br><a href="{{route('health')}}"><u>Read more</u></a>--}}
                        <a href="{{route('health')}}" class="btn btn-transparent-black btn-small animated fadeInLeft visible" data-animation="fadeInLeft" style="padding: 5px;">Read more</a>
                    </div>
                </div>
            </div>
            <!-- Special Feature Box 2 -->
            @php
                $education = \App\Page::where(['status' => '1', 'pages_slug' => 'education'])->first();
            @endphp
            <div class="col-md-4 col-sm-4" data-animation="fadeInRight">
                <div class="s-feature-box text-center">
                    {{--<div class="mask-top">
                        <!-- Icon -->
                        --}}{{--<i class="fa fa-magic"></i>--}}{{--
                        <i class="icon-study"></i>
                        <!-- Title -->
                        <h4>{{$education->pages_title}}</h4></div>--}}
                    <div class="mask-bottom">
                        <!-- Icon -->
                        {{--<i class="fa fa-magic"></i>--}}
                        <i class="icon-study"></i>
                        <!-- Title -->
                        <h4>{{$education->pages_title}}</h4>
                        <!-- Text -->
                        <p><?= \Illuminate\Support\Str::limit($education->pages_content, 100, '...'); ?></p>
                        {{--<br><a href="{{route('education')}}"><u>Read more</u></a>--}}
                        <a href="{{route('education')}}" class="btn btn-transparent-black btn-small animated fadeInLeft visible" data-animation="fadeInLeft" style="padding: 5px;">Read more</a>
                    </div>
                </div>
            </div>
            <!-- Special Feature Box 3 -->
            @php
                $training = \App\Page::where(['status' => '1', 'pages_slug' => 'training'])->first();
            @endphp
            <div class="col-md-4 col-sm-4" data-animation="fadeInLeft">
                <div class="s-feature-box text-center">
                    {{--<div class="mask-top">
                        <!-- Icon -->
                        <i class="fa fa-code"></i>
                        <!-- Title -->
                        <h4>{{$training->pages_title}}</h4></div>--}}
                    <div class="mask-bottom">
                        <!-- Icon -->
                        <i class="fa fa-code"></i>
                        <!-- Title -->
                        <h4>{{$training->pages_title}}</h4>
                        <!-- Text -->
                        <p><?= \Illuminate\Support\Str::limit($training->pages_content, 100, '...'); ?></p>
                        {{--<br><a href="{{route('training')}}"><u>Read more</u></a>--}}
                        <a href="{{route('training')}}" class="btn btn-transparent-black btn-small animated fadeInLeft visible" data-animation="fadeInLeft" style="padding: 5px;">Read more</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
    .special-feature .mask-bottom{
        bottom: 0px;
    }
</style>
