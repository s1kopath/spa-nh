@extends('frontend.home_master')
@section('home_content')

    <div class="page-header">
        <div class="container">
            <h1 class="title">Professional Short Course</h1>
        </div>
        <div class="breadcrumb-box">
            <div class="container">
                <ul class="breadcrumb">
                    <li>
                        <a href="{{route('/')}}">Home</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">What We Do?</a>
                    </li>
                    <li>
                        <a href="{{route('training')}}">Training</a>
                    </li>
                    <li class="active">Professional Short Course</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- page-header -->
    <section class="page-section">
        <div class="container">
            <div class="row">
                <div class="row col-md-9">
                    <div class="col-md-12 text-justify">
                        {{--content start--}}
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-988abee elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="988abee" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div
                                        class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0cf077a"
                                        data-id="0cf077a" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div
                                                    class="elementor-element elementor-element-1334e70 elementor-widget elementor-widget-text-editor"
                                                    data-id="1334e70" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix"><h1
                                                                class="course-title"><span style="color: #000000;">Microsoft Office</span>
                                                            </h1>
                                                            <div class="course-info info">
                                                                <div class="author item"></div>
                                                            </div>
                                                            <div class="course-video"><span style="color: #000000;">
                                                                    <img src="https://cdn.shortpixel.ai/spai/w_1120+q_+ret_img+to_webp/https://global.edu.bd/images/courseContent/Microsoft-Office-Not-Opening-in-Windows-10-8.1.jpg"
                                                                        data-spai="1" alt=""/></span>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                            <div class="course-des">
                                                                <div class="course-des-title underline"><span
                                                                        style="color: #000000;">Office Program</span>
                                                                </div>
                                                                <div class="course-des-content"><p><span
                                                                            style="color: #000000;">Microsoft office Program is a set of interrelated desktop applications, servers and services, collectively referred to as an office suite, for the Microsoft Windows and macOS operating systems. This list contains all the programs that are, or have been, in Microsoft Office since it began and are in alphabetical order.</span>
                                                                    </p></div>
                                                            </div>
                                                            <div class="course-syllabus">
                                                                <div class="course-syllabus-title underline"><span
                                                                        style="color: #000000;">Courses</span></div>
                                                                <div class="course-table">
                                                                    <div class="outer-container">
                                                                        <div class="inner-container">
                                                                            <div class="table-body">
                                                                                <div class="courseContent"><h4><span
                                                                                            style="color: #000000;">&rarr; Microsoft access.</span>
                                                                                    </h4><h4><span
                                                                                            style="color: #000000;">&rarr; Microsoft Excel.</span>
                                                                                    </h4><h4><span
                                                                                            style="color: #000000;">&rarr; Microsoft Word.</span>
                                                                                    </h4><h4><span
                                                                                            style="color: #000000;">&rarr; Microsoft OneNote.</span>
                                                                                    </h4><h4><span
                                                                                            style="color: #000000;">&rarr; Microsoft Outlook.</span>
                                                                                    </h4><h4><span
                                                                                            style="color: #000000;">&rarr; Microsoft PowerPoint.</span>
                                                                                    </h4><h4><span
                                                                                            style="color: #000000;">&rarr; Microsoft Project.</span>
                                                                                    </h4><h4><span
                                                                                            style="color: #000000;">&rarr; Microsoft Publisher.</span>
                                                                                    </h4><h4><span
                                                                                            style="color: #000000;">&rarr; Microsoft Visio.</span>
                                                                                    </h4><h4><span
                                                                                            style="color: #000000;">&rarr; One Drive for Business.</span>
                                                                                    </h4><h4><span
                                                                                            style="color: #000000;">&rarr; Microsoft Sway.</span>
                                                                                    </h4></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        {{--content end--}}
                    </div>
                </div>
                <div class="sidebar col-md-3">
                    @include('frontend.partials.training_right_sidebar')
                </div>
            </div>
        </div>
    </section>

@endsection
