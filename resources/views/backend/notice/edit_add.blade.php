@php
    $edit = isset($noticeData) && !empty($noticeData);
@endphp

@extends('backend.admin_master')
@section('admin_main_content')

    <main class="main-wrapper clearfix">
        <!-- Page Title Area -->
        <div class="row page-title clearfix">
            <div class="page-title-left">
                <h5 class="mr-0 mr-r-5">
                    {{$edit ? 'Edit Notice' : 'Add Notice'}}
                </h5>
            </div>
            <!-- /.page-title-left -->
            <div class="page-title-right d-inline-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{URL::to('/dashboard')}}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">
                        {{$edit ? 'Edit Notice' : 'Add Notice'}}
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
                                  action="{{!$edit ? route('notice.store') : route('notice.update',$noticeData->id)}}"
                                  method="POST" enctype="multipart/form-data" autocomplete="off">

                                {{ csrf_field() }}

                                @if($edit)
                                    <input type="hidden" name="id" value="{{$noticeData->id}}">
                                    {{ method_field("PUT") }}
                                @endif
                                <input type="hidden" value="{{Session::get('admin_id')}}" name="admin_id">

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="notice_file">Notice File:</label>
                                    <div class="col-md-4">
                                        <input class="form-control" id="notice_file" placeholder="Notice File"
                                               type="file" name="notice_file" {{--{{$edit ? '' : 'required'}}--}}>
                                    </div>
                                    @if($edit)
                                        <input class="form-control" type="hidden" name="old_notice_file"
                                               value="{{$noticeData->notice_file}}">
                                        <div class="col-md-3">
                                            {{--<img class="img-thumbnail" width="150" height="150"
                                                 src="{{asset('storage/notice_file_folder/'.$noticeData->notice_file)}}">--}}
                                            @if(isset($noticeData->notice_file) && !empty($noticeData->notice_file))
                                                <a href="{{url('storage/notice_file_folder/'.$noticeData->notice_file)}}"
                                                   target="_blank">
                                                    <i class="fa fa-download"></i>&nbsp;Download
                                                </a>
                                            @else
                                                No file uploaded
                                            @endif
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="notice_title">Notice Title:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" id="notice_title" type="text" name="notice_title"
                                               placeholder="Notice Title"
                                               value="{{$edit ? $noticeData->notice_title : ''}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="notice_content">Notice
                                        Content:</label>
                                    <div class="col-md-9">
                                        <textarea data-toggle="wysiwyg" id="notice_content"
                                                  name="notice_content">{{$edit ? $noticeData->notice_content : ''}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="published_date">Published Date:</label>
                                    <div class="col-md-3">
                                        <input class="form-control" type="date" id="published_date"
                                               name="published_date"
                                               value="{{$edit ? $noticeData->published_date : ''}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="status">Status:</label>
                                    <div class="col-md-9">
                                        <select class="form-control" id="status" name="status" required>
                                            <option value="" {{$edit ? '' : 'disabled selected'}}>Select Status</option>
                                            <option value="1" @if($edit && $noticeData->status == '1') selected @endif>
                                                {{\App\Admin::STATUS_ACTIVE}}
                                            </option>
                                            <option value="2" @if($edit && $noticeData->staus == '2') selected @endif>
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
