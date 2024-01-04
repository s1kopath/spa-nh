@extends('backend.admin_master')
@section('admin_main_content')

    <main class="main-wrapper clearfix">
        <!-- Page Title Area -->
        <div class="row page-title clearfix">
            <div class="page-title-left">
                <h5 class="mr-0 mr-r-5">Dashboard</h5>
                <!--<p class="mr-0 text-muted d-none d-md-inline-block">statistics, charts, events and reports</p>-->
            </div>
            <!-- /.page-title-left -->
            <div class="page-title-right d-inline-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{URL::to('/dashboard')}}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <!--            <div class="d-none d-sm-inline-flex justify-center align-items-center"><a href="javascript: void(0);" class="btn btn-outline-primary mr-l-20 btn-sm btn-rounded hidden-xs hidden-sm ripple" target="_blank">Buy Now</a>
                            </div>-->
            </div>
            <!-- /.page-title-right -->
        </div>
        <!-- /.page-title -->
        <!-- =================================== -->
        <!-- Different data widgets ============ -->
        <!-- =================================== -->
        <div class="widget-list">
            <!-- Counters -->
            <div class="row">

                <!-- Counter: Admins -->
                <div class="col-md-3 col-sm-6 widget-holder widget-full-height">
                    <div class="widget-bg bg-primary text-inverse">
                        <div class="widget-body">
                            <div class="widget-counter">
                                <h6><a href="{{route('manage-admin')}}">Admins:</a></h6>
                                @php
                                $countSuperAdmin = \App\Admin::where('access_level',1)->count();
                                $countManagerAdmin = \App\Admin::where('access_level',2)->count();
                                @endphp
                                <h5>Super Admins: <span class="counter">{{$countSuperAdmin}}</span></h5>
                                <h5>Manager Admins: <span class="counter">{{$countManagerAdmin}}</span></h5>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Counter: Sliders -->
                <div class="col-md-3 col-sm-6 widget-holder widget-full-height">
                    <div class="widget-bg bg-blue text-inverse">
                        <div class="widget-body">
                            <div class="widget-counter">
                                <h6><a href="{{route('manage-slider')}}">Sliders:</a></h6>
                                @php
                                    $countSlider = \App\Slider::count();
                                @endphp
                                <h5>Total Slider: <span class="counter">{{$countSlider}}</span></h5>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Counter: Projects -->
                <div class="col-md-3 col-sm-6 widget-holder widget-full-height">
                    <div class="widget-bg bg-googleplus text-inverse">
                        <div class="widget-body">
                            <div class="widget-counter">
                                <h6><a href="{{route('projects.index')}}">Projects:</a></h6>
                                @php
                                    $countCompletedProjects = \App\Project::where('project_category',\App\Project::CATEGORY_COMPLETED)->count();
                                    $countRunningProjects = \App\Project::where('project_category',\App\Project::CATEGORY_RUNNING)->count();
                                    $countUpcomingProjects = \App\Project::where('project_category',\App\Project::CATEGORY_UPCOMING)->count();
                                @endphp
                                <h5>Completed Projects: <span class="counter">{{$countCompletedProjects}}</span></h5>
                                <h5>Running Projects: <span class="counter">{{$countRunningProjects}}</span></h5>
                                <h5>Future Projects: <span class="counter">{{$countUpcomingProjects}}</span></h5>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Counter: Events -->
                <div class="col-md-3 col-sm-6 widget-holder widget-full-height">
                    <div class="widget-bg bg-success text-inverse">
                        <div class="widget-body">
                            <div class="widget-counter">
                                <h6><a href="{{route('events.index')}}">Events:</a></h6>
                                @php
                                    $countEvents = \App\Event::count();
                                @endphp
                                <h5>Total Events: <span class="counter">{{$countEvents}}</span></h5>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Counter: News -->
                <div class="col-md-3 col-sm-6 widget-holder widget-full-height">
                    <div class="widget-bg bg-primary text-inverse">
                        <div class="widget-body">
                            <div class="widget-counter">
                                <h6><a href="{{route('news.index')}}">News:</a></h6>
                                @php
                                    $countNews = \App\News::count();
                                @endphp
                                <h5>Total News: <span class="counter">{{$countNews}}</span></h5>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Counter: Notice -->
                <div class="col-md-3 col-sm-6 widget-holder widget-full-height">
                    <div class="widget-bg bg-blue text-inverse">
                        <div class="widget-body">
                            <div class="widget-counter">
                                <h6><a href="{{route('notice.index')}}">Notice:</a></h6>
                                @php
                                    $countNotice = \App\Notice::count();
                                @endphp
                                <h5>Total Notice: <span class="counter">{{$countNotice}}</span></h5>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Counter: Photo Gallery -->
                <div class="col-md-3 col-sm-6 widget-holder widget-full-height">
                    <div class="widget-bg bg-googleplus text-inverse">
                        <div class="widget-body">
                            <div class="widget-counter">
                                <h6><a href="{{route('photo-gallery.index')}}">Photo Gallery:</a></h6>
                                @php
                                    $countPhotoGallery = \App\ImgGallery::count();
                                @endphp
                                <h5>Total Photo Gallery: <span class="counter">{{$countPhotoGallery}}</span></h5>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Counter: Members -->
                <div class="col-md-3 col-sm-6 widget-holder widget-full-height">
                    <div class="widget-bg bg-success text-inverse">
                        <div class="widget-body">
                            <div class="widget-counter">
                                <h6><a href="{{route('member.index')}}">Members:</a></h6>
                                @php
                                    $countMembers = \App\Member::count();
                                @endphp
                                <h5>Total Members: <span class="counter">{{$countMembers}}</span></h5>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.row -->

            <!-- Other Widgets -->
            <div class="row">
                <!-- Calender -->
                <div class="col-lg-4 col-md-6 col-sm-12 widget-holder">
                    <div class="widget-bg bg-color-scheme color-white pd-0">
                        <div class="widget-body clearfix">
                            <div id="custom-clndr" data-toggle="clndr">
                                <script type="text/template" class="template">
                                    <div class="clndr-controls mr-b-20 clearfix">
                                        <h5 class="clndr-title float-left mr-tb-0">Calender</h5>
                                        <div class="float-right">
                                            <div class="clndr-previous-button float-left"><i class="material-icons">chevron_left</i>
                                            </div>
                                            <div class="clndr-next-button float-right"><i class="material-icons">chevron_right</i>
                                            </div>
                                        </div>
                                        <div class="text-right current-month text-uppercase"><%= month.substr(0,3) %>
                                            <%= year %>
                                        </div>
                                    </div>
                                    <div class="clndr-grid">
                                        <div class="days"> <% _.each(days, function(day) { %>
                                            <div class="text-center <%= day.classes %>" id="<%= day.id %>"><span
                                                    class="day-number"><%= day.day %></span></div>
                                            <% }); %>
                                        </div>
                                    </div>
                                    <!-- /.clndr-grid --> <% if( !_.isEmpty(extras.selectedDay.events) ) { %>
                                    <div class="event-listing row">
                                        <div class="col-3 col-sm-3">
                                            <div class="selected-date">
                                                <span
                                                    class="date"><%= moment(extras.selectedDay.date._d).format("D") %></span>
                                                <span class="color-color-scheme"><%= moment(extras.selectedDay.date._d).format("Do").substr(-2) %></span>
                                            </div><!-- /.selected-date -->
                                        </div><!-- /.col-3 -->
                                        <div class="col-9 col-sm-9"> <% _.each(extras.selectedDay.events,
                                            function(event) { %>
                                            <div class="event-item">
                                                <span
                                                    class="event-item-time"><%= moment(event.date).format("kk:mm") %></span>
                                                <span class="event-item-title">
                                                    {{--<%= event.title %>--}}
                                                    Have a good day...
                                                </span>
                                                {{--<span class="event-item-icon color-color-scheme"><i
                                                        class="material-icons md-18"><%= event.icon%></i></span>--}}
                                            </div>
                                            <% }); %>
                                        </div><!-- /.col-9 -->
                                    </div><!-- /.event-listing --> <% } %>
                                </script>
                            </div>
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>
                <!-- /.widget-holder -->

            </div>
            <!-- /.row -->

        </div>
        <!-- /.widget-list -->
    </main>

@endsection
