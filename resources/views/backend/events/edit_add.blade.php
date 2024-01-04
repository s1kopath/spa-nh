@php
    $edit = isset($eventData) && !empty($eventData);
@endphp

@extends('backend.admin_master')
@section('admin_main_content')

    <main class="main-wrapper clearfix">
        <!-- Page Title Area -->
        <div class="row page-title clearfix">
            <div class="page-title-left">
                <h5 class="mr-0 mr-r-5">
                    {{$edit ? 'Edit Events' : 'Add Events'}}
                </h5>
            </div>
            <!-- /.page-title-left -->
            <div class="page-title-right d-inline-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{URL::to('/dashboard')}}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">
                        {{$edit ? 'Edit Events' : 'Add Events'}}
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
                                  action="{{!$edit ? route('events.store') : route('events.update',$eventData->id)}}"
                                  method="POST" enctype="multipart/form-data" autocomplete="off">

                                {{ csrf_field() }}

                                @if($edit)
                                    <input type="hidden" name="id" value="{{$eventData->id}}">
                                    {{ method_field("PUT") }}
                                @endif
                                <input type="hidden" value="{{Session::get('admin_id')}}" name="admin_id">

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="event_image">Event Image:</label>
                                    <div class="col-md-4">
                                        <input class="form-control" id="event_image" placeholder="Event Image"
                                               type="file" name="event_image" {{--{{$edit ? '' : 'required'}}--}}>
                                    </div>
                                    @if($edit)
                                        <input class="form-control" type="hidden" name="old_event_image"
                                               value="{{$eventData->event_image}}">
                                        <div class="col-md-3">
                                            <img class="img-thumbnail" width="150" height="150"
                                                 src="{{asset('storage/events_image_folder/'.$eventData->event_image)}}">
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="event_title">Event Title:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" id="event_title" type="text" name="event_title"
                                               placeholder="Event Title"
                                               value="{{$edit ? $eventData->event_title : ''}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="event_content">Event
                                        Content:</label>
                                    <div class="col-md-9">
                                        {{--<textarea class="form-control" id="ckEdit" name="event_content" style="height: 300px; width: 100%;"></textarea>--}}
                                        <textarea data-toggle="wysiwyg" id="event_content"
                                                  name="event_content">{{$edit ? $eventData->event_content : ''}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="event_location">Event
                                        Location:</label>
                                    <div class="col-md-9">
                                        <textarea id="event_location" class="form-control"
                                                  name="event_location">{{$edit ? $eventData->event_location : ''}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="start_date">Start Date:</label>
                                    <div class="col-md-3">
                                        <input class="form-control" type="date" id="start_date" name="start_date"
                                               value="{{$edit ? $eventData->start_date : ''}}">
                                    </div>

                                    <label class="col-md-3 col-form-label" for="end_date">End Date:</label>
                                    <div class="col-md-3">
                                        <input class="form-control" type="date" id="end_date" name="end_date"
                                               value="{{$edit ? $eventData->end_date : ''}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="start_time">Start Time:</label>
                                    <div class="col-md-3">
                                        <input class="form-control" type="time" id="start_time" name="start_time"
                                               value="{{$edit ? $eventData->start_time : ''}}">
                                    </div>

                                    <label class="col-md-3 col-form-label" for="end_time">End Time:</label>
                                    <div class="col-md-3">
                                        <input class="form-control" type="time" id="end_time" name="end_time"
                                               value="{{$edit ? $eventData->end_time : ''}}">
                                    </div>
                                </div>
                                {{--<div class="form-group input-has-value">
                                    <label class="form-control-label">Autoclose Datepicker</label>
                                    <div class="input-group input-has-value">
                                        <input type="text" class="form-control datepicker" value="06/13/2017" data-plugin-options="{&quot;autoclose&quot;: true}"> <span class="input-group-addon"><i class="list-icon material-icons">date_range</i></span>
                                    </div>
                                    <!-- /.input-group -->
                                </div>--}}
                                {{--<div class="form-group">
                                    <label for="sampleClockPicker3" class="form-control-label">Autoclose right aligned clockpicker</label>
                                    <div class="input-group clockpicker" data-placement="right" data-autoclose="true">
                                        <input type="text" class="form-control" data-masked-input="99:99" id="sampleClockPicker3"> <span class="input-group-addon"><span class="material-icons list-icon">watch_later</span></span>
                                    </div>
                                    <!-- /.input-group -->
                                </div>--}}

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="status">Status:</label>
                                    <div class="col-md-9">
                                        <select class="form-control" id="status" name="status" required>
                                            <option value="" {{$edit ? '' : 'disabled selected'}}>Select Status</option>
                                            <option value="1" @if($edit && $eventData->status == '1') selected @endif>
                                                {{\App\Admin::STATUS_ACTIVE}}
                                            </option>
                                            <option value="2" @if($edit && $eventData->staus == '2') selected @endif>
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
