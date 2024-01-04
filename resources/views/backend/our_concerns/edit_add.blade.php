@php
    $edit = isset($concernData) && !empty($concernData);
@endphp

@extends('backend.admin_master')
@section('admin_main_content')

    <main class="main-wrapper clearfix">
        <!-- Page Title Area -->
        <div class="row page-title clearfix">
            <div class="page-title-left">
                <h5 class="mr-0 mr-r-5">
                    {{$edit ? 'Edit Concern' : 'Add Concern'}}
                </h5>
            </div>
            <!-- /.page-title-left -->
            <div class="page-title-right d-inline-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{URL::to('/dashboard')}}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">
                        {{$edit ? 'Edit Concern' : 'Add Concern'}}
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
                                  action="{{!$edit ? route('our-concerns.store') : route('our-concerns.update',$concernData->id)}}"
                                  method="POST" enctype="multipart/form-data" autocomplete="off">

                                {{ csrf_field() }}

                                @if($edit)
                                    <input type="hidden" name="id" value="{{$concernData->id}}">
                                    {{ method_field("PUT") }}
                                @endif
                                <input type="hidden" value="{{Session::get('admin_id')}}" name="admin_id">

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="concern_image">Concern Image:</label>
                                    <div class="col-md-4">
                                        <input class="form-control" id="concern_image" placeholder="Concern Image"
                                               type="file" name="concern_image" {{$edit ? '' : 'required'}}>
                                    </div>
                                    @if($edit)
                                        <input class="form-control" type="hidden" name="old_concern_image"
                                               value="{{$concernData->concern_image}}">
                                        <div class="col-md-3">
                                            <img class="img-thumbnail" width="150" height="150"
                                                 src="{{asset('storage/concern_image_folder/'.$concernData->concern_image)}}">
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="concern_title">Concern Title:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" id="concern_title" type="text" name="concern_title"
                                               placeholder="Concern Title"
                                               value="{{$edit ? $concernData->concern_title : ''}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="concern_url">Concern
                                        Url:</label>
                                    <div class="col-md-9">
                                        <textarea id="concern_url" class="form-control"
                                                  name="concern_url">{{$edit ? $concernData->concern_url : ''}}</textarea>
                                    </div>
                                </div>

                                @if(!$edit)
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="status">Status:</label>
                                        <div class="col-md-9">
                                            <select class="form-control" id="status" name="status" required>
                                                <option value="" {{$edit ? '' : 'disabled selected'}}>Select Status</option>
                                                <option value="1" @if($edit && $concernData->status == '1') selected @endif>
                                                    {{\App\Admin::STATUS_ACTIVE}}
                                                </option>
                                                <option value="2" @if($edit && $concernData->staus == '2') selected @endif>
                                                    {{\App\Admin::STATUS_INACTIVE}}
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                @endif


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
