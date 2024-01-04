@php
    $edit = isset($sliderData) && !empty($sliderData);
@endphp

@extends('backend.admin_master')
@section('admin_main_content')

    <main class="main-wrapper clearfix">
        <!-- Page Title Area -->
        <div class="row page-title clearfix">
            <div class="page-title-left">
                <h5 class="mr-0 mr-r-5">
                    {{$edit ? 'Edit Slider' : 'Add Slider'}}
                </h5>
            </div>
            <!-- /.page-title-left -->
            <div class="page-title-right d-inline-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{URL::to('/dashboard')}}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">
                        {{$edit ? 'Edit Slider' : 'Add Slider'}}
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
                                  action="{{!$edit ? route('save-slider') : route('update-slider',$sliderData->id)}}"
                                  method="POST" enctype="multipart/form-data" autocomplete="off">

                                {{ csrf_field() }}

                                @if($edit)
                                    <input type="hidden" name="id" value="{{$sliderData->id}}">
                                    {{ method_field("PUT") }}
                                @endif
                                <input type="hidden" value="{{Session::get('admin_id')}}" name="admin_id">

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="slider_image">Slider Image:</label>
                                    <div class="col-md-4">
                                        <input class="form-control" id="slider_image" placeholder="Slider Image" type="file" name="slider_image" {{$edit ? '' : 'required'}}>
                                    </div>
                                    @if($edit)
                                        <input class="form-control" type="hidden" name="old_slider_image" value="{{$sliderData->slider_image}}">
                                        <div class="col-md-3">
                                            <img class="img-thumbnail" width="150" height="150" src="{{asset('storage/slider_images_folder/'.$sliderData->slider_image)}}">
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="title">Slider Title:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" id="title" type="text" name="title"
                                               placeholder="Slider Title"
                                               value="{{$edit ? $sliderData->title : ''}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="sub_title">Slider Sub Title:</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" id="sub_title" name="sub_title"
                                                  placeholder="Slider Sub Title" rows="2">{{$edit ? $sliderData->sub_title : ''}}</textarea>
                                        {{--<input class="form-control" id="sub_title" type="text" name="sub_title"
                                               placeholder="Slider Sub Title"
                                               value="{{$edit ? $sliderData->sub_title : ''}}">--}}
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="btn_title">Slider Button Title:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" id="btn_title" type="text" name="btn_title"
                                               placeholder="Slider Button Title"
                                               value="{{$edit ? $sliderData->btn_title : ''}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="btn_url">Slider Button Url:</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" id="btn_url" name="btn_url"
                                                  placeholder="Slider Button Url" rows="2">{{$edit ? $sliderData->btn_url : ''}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="status">Status:</label>
                                    <div class="col-md-9">
                                        <select class="form-control" id="status" name="status" required>
                                            <option value="" disabled selected>Select Status</option>
                                            <option value="1" @if($edit && $sliderData->status == '1') selected @endif>
                                                {{\App\Admin::STATUS_ACTIVE}}
                                            </option>
                                            <option value="2" @if($edit && $sliderData->staus == '2') selected @endif>
                                                {{\App\Admin::STATUS_INACTIVE}}
                                            </option>
                                        </select>
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
