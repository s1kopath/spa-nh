@extends('backend.admin_master')
@section('admin_main_content')

    <main class="main-wrapper clearfix">
        <!-- Page Title Area -->
        <div class="row page-title clearfix">
            <div class="page-title-left">
                <h5 class="mr-0 mr-r-5">
                    Site Information
                </h5>
            </div>
            <!-- /.page-title-left -->
            <div class="page-title-right d-inline-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{URL::to('/dashboard')}}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">
                        Site Information
                    </li>
                </ol>
            </div>
            <!-- /.page-title-right -->
        </div>
        <!-- /.page-title -->
        <!-- =================================== -->
        <!-- Different data widgets ============ -->
        <!-- =================================== -->
        <div class="widget-list">
            <div class="row">
                <div class="col-md-12 widget-holder">
                    <div class="widget-bg">
                        <div class="widget-body clearfix">

                            <!--Alert messages start-->
                        @include('backend.partials.alert_messages')
                        <!--Alert messages end-->

                            <form id="edit-add-form" role="form"
                                  action="{{route('update-site-info',$siteInfoData->id)}}"
                                  method="POST" enctype="multipart/form-data" autocomplete="off">

                                {{ csrf_field() }}

                                <input type="hidden" name="id" value="{{$siteInfoData->id}}">
                                {{ method_field("PUT") }}

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="site_title">Site Title:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" id="site_title" type="text" name="site_title"
                                               value="{{$siteInfoData->site_title}}" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="tagline">Site Tagline:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" id="tagline" type="text" name="tagline"
                                               value="{{$siteInfoData->tagline}}" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="site_logo">Site Logo:</label>
                                    <div class="col-md-4">
                                        <input class="form-control" id="site_logo"
                                               type="file" name="site_logo">
                                    </div>

                                    <input class="form-control" type="hidden" name="old_site_logo"
                                           value="{{$siteInfoData->site_logo}}">
                                    <div class="col-md-3">
                                        <img class="img-thumbnail" width="150" height="150"
                                             src="{{asset('storage/'.$siteInfoData->site_logo)}}">
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="address">Address:</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" id="address" name="address"
                                                  rows="2">{{$siteInfoData->address}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="email">Email:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" id="email" type="text" name="email"
                                               value="{{$siteInfoData->email}}" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="phone">Phone:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" id="phone" type="text" name="phone"
                                               value="{{$siteInfoData->phone}}" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="facebook">Facebook Url:</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" id="facebook" name="facebook"
                                                  rows="2">{{$siteInfoData->facebook}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="instagram">Instagram Url:</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" id="instagram" name="instagram"
                                                  rows="2">{{$siteInfoData->instagram}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="twitter">Twitter Url:</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" id="twitter" name="twitter"
                                                  rows="2">{{$siteInfoData->twitter}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="youtube">Youtube Url:</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" id="youtube" name="youtube"
                                                  rows="2">{{$siteInfoData->youtube}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="linkedin">LinkedIn Url:</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" id="linkedin" name="linkedin"
                                                  rows="2">{{$siteInfoData->linkedin}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="location_lat">Latitude:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" id="location_lat" type="text" name="location_lat"
                                               value="{{$siteInfoData->location_lat}}" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="location_lon">Longitude:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" id="location_lon" type="text" name="location_lon"
                                               value="{{$siteInfoData->location_lon}}" readonly>
                                    </div>
                                </div>


                                <div class="form-actions">
                                    <div class="form-group row">
                                        <div class="col-md-9 ml-md-auto btn-list">
                                            <button class="btn btn-primary btn-rounded" type="submit">Submit</button>
                                            <button class="btn btn-outline-default btn-rounded" type="reset">Cancel
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </form>

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
