@extends('frontend.home_master')
@section('home_content')

    <div class="page-header">
        <div class="container">
            <h1 class="title">CISCO</h1>
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
                    <li class="active">CISCO</li>
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
                        <section class="elementor-section elementor-top-section elementor-element elementor-element-78aa660 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="78aa660" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-850fe8f" data-id="850fe8f" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-e2291e3 elementor-widget elementor-widget-text-editor" data-id="e2291e3" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix"><h1 style="text-align: center;"><span style="color: #000000;"><strong>CISCO</strong></span></h1><p><br /><span style="color: #000000;">CCNA (Cisco Certified Network Associate) is an information technology (IT) certification from Cisco Systems. CCNA certification is an associate-level Cisco Career certification.</span></p></div>
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
