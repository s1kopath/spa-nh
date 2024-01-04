<!-- Section -->
<section class="slider rs-slider-full">
    <div class="tp-banner-container">
        <div class="tp-banner-parallaxscroll">
            <ul>
                <!-- Intro Slide -->
            {{--<li data-transition="fade" data-slotamount="6" data-masterspeed="200" data-delay="7000" data-title="Intro Slide">
                <img src="img/sections/slider/travel-1.jpg" alt="" data-bgposition="left center" data-kenburns="on" data-duration="14000" data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="130" data-bgpositionend="right center" />
                <div class="elements white">
                    <h2 class="tp-caption tp-resizeme customin customout lft skewtotop title bold rs-parallaxlevel-4" data-x="center" data-y="240" data-speed="800" data-start="800" data-customin="x:0;y:30;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-easing="Power4.easeOut" data-endspeed="500" data-endeasing="Power1.easeIn">
                        <strong>Welcome to mist travels</strong>
                    </h2>
                    <div class="tp-caption tp-resizeme customin customout lfr skewtoright description text-center rs-parallaxlevel-4" data-x="center" data-y="center" data-speed="800" data-start="1200" data-customin="x:0;y:30;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-easing="Power4.easeOut" data-endspeed="500" data-endeasing="Power1.easeIn" style="max-width: 800px; text-align:center">
                        <p>Proin a velit aliquam vitae malesuada rutrum. Aenean ullamcorper placerat porttitor velit aliquam vitae. Aliquam a augue suscipit, bibendum luctus neque laoreet rhoncus ipsum, ullamcorper</p>
                    </div>
                </div>
            </li>--}}
            <!-- Slide Ends -->
                <!-- Features Slide -->
                @php
                    $sliders = \App\Slider::where('status',1)->get();
                @endphp
                @foreach($sliders as $slider)
                    <li data-transition="scaledownfrombottom" data-slotamount="6" data-masterspeed="1500"
                        data-delay="7000"
                        data-title="Features Slide">
                        <img src="{{asset('storage/slider_images_folder/'.$slider->slider_image)}}" alt=""
                             data-bgposition="center top" data-kenburns="on" data-duration="16000"
                             data-ease="Linear.easeNone" data-bgfit="110" data-bgfitend="100"
                             data-bgpositionend="center center"/>
                        <div class="elements white">
                            @if(isset($slider->title))
                                <h2 class="tp-caption tp-resizeme sft skewtotop title bold rs-parallaxlevel-2 slider-title"
                                    data-x="15" data-y="100" data-speed="800" data-start="800"
                                    data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-easing="Power4.easeOut" data-endspeed="400" data-endeasing="Power1.easeIn">
                                    {{$slider->title}}
                                </h2>

                                {{--<h4 class="tp-caption tp-resizeme sft skewtotop title bold rs-parallaxlevel-2"
                                    data-x="15" data-y="230" data-speed="800" data-start="800"
                                    data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-easing="Power4.easeOut" data-endspeed="400" data-endeasing="Power1.easeIn"
                                    style="background: rgba(0,0,0,.5); font-size: 40px; padding: 10px; line-height: 30px;">
                                    {{$slider->title}}
                                </h4>--}}
                            @endif

                            @if(isset($slider->sub_title))
                                <div
                                    class="tp-caption tp-resizeme lfl skewtoleft description customin customout col-xs-5 rs-parallaxlevel-2"
                                    {{--data-x="0" data-y="center" data-speed="800" data-start="1200"--}}
                                    data-x="30" data-y="200" data-speed="800" data-start="1200"
                                    data-customin="x:0;y:30;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-easing="Power4.easeOut" data-endspeed="400" data-endeasing="Power1.easeIn"
                                    style="max-width: 520px;">
                                    <p class="text-justify"><?= $slider->sub_title; ?></p></div>

                                {{--<div
                                    class="tp-caption tp-resizeme lfl skewtoleft description customin customout col-xs-5 rs-parallaxlevel-2"
                                    data-x="0" data-y="center" data-speed="800" data-start="1200"
                                    data-customin="x:0;y:30;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-easing="Power4.easeOut" data-endspeed="400" data-endeasing="Power1.easeIn"
                                    --}}{{--style="max-width: 520px;"--}}{{-->
                                    <p style="background: rgba(0,0,0,.5); font-size: 30px; line-height: 30px; padding: 10px; text-align: center;"><?= $slider->sub_title; ?></p>
                                </div>--}}
                            @endif

                            @if(isset($slider->btn_url) && $slider->btn_title)
                                <a href="{{$slider->btn_url}}"
                                   class="btn btn-default tp-caption tp-resizeme customin rs-parallaxlevel-2"
                                   data-x="15" data-y="405"
                                   data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                   data-speed="800" data-start="1600" data-easing="Power3.easeInOut" data-endspeed="300"
                                   style="z-index: 5">{{$slider->btn_title}}</a>

                                {{--<a href="{{$slider->btn_url}}"
                               class="btn btn-default tp-caption tp-resizeme customin rs-parallaxlevel-2"
                               data-x="15" data-y="405"
                               data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                               data-speed="800" data-start="1600" data-easing="Power3.easeInOut" data-endspeed="300"
                               style="z-index: 5">{{$slider->btn_title}}</a>--}}
                            @endif

                        </div>
                    </li>
            @endforeach

            <!-- Feature Slide Ends -->
                <!-- Video Slide -->
            {{--<li data-transition="slotzoom-horizontal" data-slotamount="6" data-masterspeed="1500" data-delay="7000" class="slid2" data-title="Video Slide">
                <img src="img/sections/slider/travel-3.jpg" alt="" data-bgposition="left top" data-kenburns="on" data-duration="16000" data-ease="Linear.easeNone" data-bgfit="130" data-bgfitend="100" data-bgpositionend="right bottom" />
                <div class="elements">
                    <h2 class="tp-caption tp-resizeme sft skewtotop title bold rs-parallaxlevel-2" data-x="15" data-y="230" data-speed="800" data-start="800" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-easing="Power4.easeOut" data-endspeed="400" data-endeasing="Power1.easeIn">Travel with us</h2>
                    <div class="tp-caption tp-resizeme lfl skewtoleft description customin customout col-xs-5 rs-parallaxlevel-2" data-x="0" data-y="center" data-speed="800" data-start="1200" data-customin="x:0;y:30;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-easing="Power4.easeOut" data-endspeed="400" data-endeasing="Power1.easeIn" style="max-width: 520px;">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do usmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam dolore magna aliqua ut enim ad minim veniam.</p>
                    </div>
                    <a href="#" class="btn btn-default tp-caption tp-resizeme customin rs-parallaxlevel-2" data-x="15" data-y="405" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="800" data-start="1600" data-easing="Power3.easeInOut" data-endspeed="300" style="z-index: 5">Read more</a>
                </div>
            </li>--}}
            <!-- Slide Ends -->
            </ul>
            <div class="tp-bannertimer"></div>
        </div>
    </div>
    <!--Find Form -->


    {{--    ----------------------------------------------------------------------------------------}}


    {{--<div class="find-form">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div role="tabpanel" class="travel-tab">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#hotels" aria-controls="hotels" role="tab" data-toggle="tab"><i class="icon-building-o"></i>Hotels</a></li>
                            <li role="presentation"><a href="#flights" aria-controls="flights" role="tab" data-toggle="tab"><i class="icon-plane3"></i>Flights</a></li>
                            <li role="presentation"><a href="#rentals" aria-controls="rentals" role="tab" data-toggle="tab"><i class=" icon-home7"></i>Rentals</a></li>
                            <li role="presentation"><a href="#cars" aria-controls="cars" role="tab" data-toggle="tab"><i class=" icon-directions-car"></i>Cars</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <!-- Hotels Tab -->
                            <div role="tabpanel" class="tab-pane active" id="hotels">
                                <h5>Search Your Hotels</h5>
                                <div class="row">
                                    <!-- Destination -->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="exampleInputName1">Your Destination</label>
                                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Enter Your Destination">
                                        </div>
                                    </div>
                                    <!-- check in -->
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="exampleInputName2">Check In</label>
                                            <div class="input-group date date-picker">
                                                <input type="text" class="form-control" />
                                                <span class="input-group-addon">
                                                            <span class="icon-calendar12 fa-1x"></span>
                                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- check Out -->
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="exampleInputName2">Check Out</label>
                                            <div class="input-group date date-picker">
                                                <input type="text" class="form-control" />
                                                <span class="input-group-addon">
                                                            <span class="icon-calendar12 fa-1x"></span>
                                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- No of Rooms -->
                                    <div class="col-sm-1">
                                        <div class="input-group" id="no-rooms">
                                            <label for="exampleInputName2">Rooms</label>
                                            <div class="input-group-btn">
                                                <div class="btn-group" role="group">
                                                    <div class="dropdown dropdown-lg">
                                                        <select class="fancy-select" name="rooms">
                                                            <option>01</option>
                                                            <option>02</option>
                                                            <option>03</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Adults -->
                                    <div class="col-sm-1">
                                        <div class="input-group" id="n">
                                            <label for="exampleInputName2">adults</label>
                                            <div class="input-group-btn">
                                                <div class="btn-group" role="group">
                                                    <div class="dropdown dropdown-lg">
                                                        <select class="fancy-select" name="adults">
                                                            <option>01</option>
                                                            <option>02</option>
                                                            <option>03</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Kids -->
                                    <div class="col-sm-1">
                                        <div class="input-group" id="Kids">
                                            <label for="exampleInputName2">Kids</label>
                                            <div class="input-group-btn">
                                                <div class="btn-group" role="group">
                                                    <div class="dropdown dropdown-lg">
                                                        <select class="fancy-select" name="kids">
                                                            <option>01</option>
                                                            <option>02</option>
                                                            <option>03</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Search Now -->
                                    <div class="col-sm-2">
                                        <a href="#" class="btn btn-default">Search Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- flights -->
                            <div role="tabpanel" class="tab-pane" id="flights">
                                <h5>Search Your Flights</h5>
                                <div class="row">
                                    <!-- From -->
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="exampleInputName2">From</label>
                                            <input type="text" class="form-control" id="exampleInputName2" placeholder="City,Airport">
                                        </div>
                                    </div>
                                    <!-- To -->
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="exampleInputName3">To</label>
                                            <input type="text" class="form-control" id="exampleInputName3" placeholder="City,Airport">
                                        </div>
                                    </div>
                                    <!-- Departing -->
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>Departing</label>
                                            <div class="input-group date date-picker">
                                                <input type="text" class="form-control" />
                                                <span class="input-group-addon">
                                                            <span class="icon-calendar12 fa-1x"></span>
                                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Returning -->
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>Returning</label>
                                            <div class="input-group date date-picker">
                                                <input type="text" class="form-control" />
                                                <span class="input-group-addon">
                                                            <span class="icon-calendar12 fa-1x"></span>
                                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Passengers -->
                                    <div class="col-sm-1">
                                        <div class="input-group" id="passengers">
                                            <label>Passengers</label>
                                            <div class="input-group-btn">
                                                <div class="btn-group" role="group">
                                                    <div class="dropdown dropdown-lg">
                                                        <select class="fancy-select" name="passengers">
                                                            <option>01</option>
                                                            <option>02</option>
                                                            <option>03</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Passengers -->
                                    <div class="col-sm-2">
                                        <a href="#" class="btn btn-default">Search Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Rentals -->
                            <div role="tabpanel" class="tab-pane" id="rentals">
                                <h5>Search Your Rentals</h5>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="exampleInputName4">Your Destination</label>
                                            <input type="text" class="form-control" id="exampleInputName4" placeholder="Enter Your Destination">
                                        </div>
                                    </div>
                                    <!-- check in -->
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>Check In</label>
                                            <div class="input-group date date-picker">
                                                <input type="text" class="form-control" />
                                                <span class="input-group-addon">
                                                            <span class="icon-calendar12 fa-1x"></span>
                                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Check out -->
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>Check Out</label>
                                            <div class="input-group date date-picker">
                                                <input type="text" class="form-control" />
                                                <span class="input-group-addon">
                                                            <span class="icon-calendar12 fa-1x"></span>
                                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Rooms -->
                                    <div class="col-sm-1">
                                        <div class="input-group" id="rooms">
                                            <label>Rooms</label>
                                            <div class="input-group-btn">
                                                <div class="btn-group" role="group">
                                                    <div class="dropdown dropdown-lg">
                                                        <select class="fancy-select" name="rooms">
                                                            <option>01</option>
                                                            <option>02</option>
                                                            <option>03</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Guests -->
                                    <div class="col-sm-1">
                                        <div class="input-group" id="guests">
                                            <label>guests</label>
                                            <div class="input-group-btn">
                                                <div class="btn-group" role="group">
                                                    <div class="dropdown dropdown-lg">
                                                        <select class="fancy-select" name="guests">
                                                            <option>01</option>
                                                            <option>02</option>
                                                            <option>03</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Search button -->
                                    <div class="col-sm-2">
                                        <a href="#" class="btn btn-default">Search Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Cars -->
                            <div role="tabpanel" class="tab-pane" id="cars">
                                <h5>Search Your Rental Cars</h5>
                                <div class="row">
                                    <!-- Pick-up Location -->
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="exampleInputName5">Pick-up Location</label>
                                            <input type="text" class="form-control" id="exampleInputName5" placeholder="Enter Your Destination">
                                        </div>
                                    </div>
                                    <!-- Pick Up Date -->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Pick-up Date</label>
                                            <div class="input-group date date-picker">
                                                <input type="text" class="form-control" />
                                                <span class="input-group-addon">
                                                            <span class="icon-calendar12 fa-1x"></span>
                                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Pick up time -->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Pick-up Time</label>
                                            <div class="input-group date time-picker">
                                                <input type="text" class="form-control" />
                                                <span class="input-group-addon">
                                                            <span class="icon-clock9 fa-1x"></span>
                                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- car type -->
                                    <div class="col-sm-1">
                                        <div class="input-group" id="car-type">
                                            <label>Car Type</label>
                                            <div class="input-group-btn">
                                                <div class="btn-group" role="group">
                                                    <div class="dropdown dropdown-lg">
                                                        <select class="fancy-select" name="car-type">
                                                            <option>Select car type</option>
                                                            <option>Economy</option>
                                                            <option>Compact</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- Drop off location-->
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="exampleInputName6">Drop-off Location</label>
                                            <input type="text" class="form-control" id="exampleInputName6" placeholder="Enter Your Destination">
                                        </div>
                                    </div>
                                    <!-- Drop off Date-->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Drop-off Date</label>
                                            <div class="input-group date date-picker">
                                                <input type="text" class="form-control" />
                                                <span class="input-group-addon">
                                                            <span class="icon-calendar12 fa-1x"></span>
                                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Drop off Time -->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Drop-off Time</label>
                                            <div class="input-group date time-picker">
                                                <input type="text" class="form-control" />
                                                <span class="input-group-addon">
                                                            <span class="icon-clock9 fa-1x"></span>
                                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- search now -->
                                    <div class="col-sm-2">
                                        <a href="#" class="btn btn-default btn-block">Search Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
</section>
<!-- slider -->
<style>
    /*tp-banner-parallaxscroll revslider-initialised tp-simpleresponsive*/
    /*.tp-simpleresponsive {
        height: 450px !important;
        max-height: 450px !important;
    }*/
    /*.tp-banner-container{
        width: unset !important;
        min-width: 900px;
    }*/
</style>
<!-- /Section -->
