@php
    $edit = isset($pageData) && !empty($pageData);
@endphp

@extends('backend.admin_master')
@section('admin_main_content')

    <main class="main-wrapper clearfix">
        <!-- Page Title Area -->
        <div class="row page-title clearfix">
            <div class="page-title-left">
                <h5 class="mr-0 mr-r-5">
                    {{$edit ? 'Edit Pages' : 'Add Pages'}}
                </h5>
            </div>
            <!-- /.page-title-left -->
            <div class="page-title-right d-inline-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{URL::to('/dashboard')}}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">
                        {{$edit ? 'Edit Pages' : 'Add Pages'}}
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
                                  action="{{!$edit ? route('save-pages') : route('update-pages',$pageData->id)}}"
                                  method="POST" enctype="multipart/form-data" autocomplete="off">

                                {{ csrf_field() }}

                                @if($edit)
                                    <input type="hidden" name="id" value="{{$pageData->id}}">
                                    {{ method_field("PUT") }}
                                @endif
                                <input type="hidden" value="{{Session::get('admin_id')}}" name="admin_id">

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="pages_image">Page Image:</label>
                                    <div class="col-md-4">
                                        <input class="form-control" id="pages_image" placeholder="Page Image" type="file" name="pages_image" {{$edit ? '' : 'required'}}>
                                    </div>
                                    @if($edit)
                                        <input class="form-control" type="hidden" name="old_pages_image" value="{{$pageData->pages_image}}">
                                        <div class="col-md-3">
                                            <img class="img-thumbnail" width="150" height="150" src="{{asset('storage/pages_image_folder/'.$pageData->pages_image)}}">
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="pages_title">Page Title:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" id="pages_title" type="text" name="pages_title"
                                               placeholder="Page Title"
                                               value="{{$edit ? $pageData->pages_title : ''}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="pages_content">Page Content:</label>
                                    <div class="col-md-9">
                                        {{--<textarea class="form-control" id="ckEdit" name="pages_content" style="height: 300px; width: 100%;"></textarea>--}}
                                        <textarea data-toggle="wysiwyg" id="pages_content" name="pages_content">{{$edit ? $pageData->pages_content : ''}}</textarea>
                                    </div>
                                </div>

                                @if(Session::get('access_level') == 0)
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="pages_slug">Page Slug:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" id="pages_slug" type="text" name="pages_slug"
                                               placeholder="Page Slug"
                                               value="{{$edit ? $pageData->pages_slug : ''}}"
                                        {{--@if(Session::get('access_level') != 0) readonly @endif--}}>
                                    </div>
                                </div>
                                @endif

                                @if(Session::get('access_level') == 0)
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="status">Status:</label>
                                    <div class="col-md-9">
                                        <select class="form-control" id="status" name="status" required>
                                            <option value="" disabled selected>Select Status</option>
                                            <option value="1" @if($edit && $pageData->status == '1') selected @endif>
                                                {{\App\Admin::STATUS_ACTIVE}}
                                            </option>
                                            <option value="2" @if($edit && $pageData->staus == '2') selected @endif>
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
