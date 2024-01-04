<section id="who-we-are" class="page-section no-pad light-bg border-tb">
    <div class="container-fluid who-we-are">
        <div class="row">
            <div class="col-md-6 pad-60">
                <div class="section-title text-left" data-animation="fadeInUp">
                    <!-- Title -->
                    <h2 class="title">About Us</h2>
                </div>
                <div class="owl-carousel pagination-1 dark-switch" data-pagination="true" data-autoplay="true"
                     data-navigation="false" data-singleitem="true" data-animation="fadeInLeft">
                    <div class="item">
                        <!-- Heading -->
                        <h2 class="entry-title">
                            <a href="{{route('who-we-are')}}">Who We Are?</a>
                        </h2>
                        <!-- Content -->
                        <div class="entry-content">
                            @php
                                $aboutSpa = \App\Page::where(['status' => '1', 'pages_slug' => 'about_spa'])->first();
                            @endphp
                            <p>
                                <?= \Illuminate\Support\Str::limit($aboutSpa->pages_content, 300, '...'); ?>
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <!-- Heading -->
                        <h2 class="entry-title">
                            <a href="{{route('mission-vision')}}">Mission</a>
                        </h2>
                        <!-- Content -->
                        <div class="entry-content">
                            @php
                                $mission = \App\Page::where(['status' => '1', 'pages_slug' => 'mission'])->first();
                            @endphp
                            <p>
                                <?= \Illuminate\Support\Str::limit($mission->pages_content, 300, '...'); ?>
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <!-- Heading -->
                        <h2 class="entry-title">
                            <a href="{{route('mission-vision')}}">Vision</a>
                        </h2>
                        <!-- Content -->
                        <div class="entry-content">
                            @php
                                $vision = \App\Page::where(['status' => '1', 'pages_slug' => 'vision'])->first();
                            @endphp
                            <p>
                                <?= \Illuminate\Support\Str::limit($vision->pages_content, 300, '...'); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 no-pad text-center" data-animation="fadeInRight">
                <!-- Image -->
                <div class="image-bg" data-background="{{asset('public/frontend_resources/img/banner.jpg')}}"></div>
            </div>
        </div>
    </div>
</section>
