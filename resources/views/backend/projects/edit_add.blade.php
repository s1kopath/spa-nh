@php
    //dd('in pagwe');
        $edit = isset($projectData) && !empty($projectData);
@endphp

@extends('backend.admin_master')
@section('admin_main_content')

    <main class="main-wrapper clearfix">
        <!-- Page Title Area -->
        <div class="row page-title clearfix">
            <div class="page-title-left">
                <h5 class="mr-0 mr-r-5">
                    {{$edit ? 'Edit Projects' : 'Add Projects'}}
                </h5>
            </div>
            <!-- /.page-title-left -->
            <div class="page-title-right d-inline-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{URL::to('/dashboard')}}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">
                        {{$edit ? 'Edit Projects' : 'Add Projects'}}
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
                                  action="{{!$edit ? route('projects.store') : route('projects.update',$projectData->id)}}"
                                  method="POST" enctype="multipart/form-data" autocomplete="off">

                                {{ csrf_field() }}

                                @if($edit)
                                    <input type="hidden" name="id" value="{{$projectData->id}}">
                                    {{ method_field("PUT") }}
                                @endif
                                <input type="hidden" value="{{Session::get('admin_id')}}" name="admin_id">

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="project_image">Project Image:</label>
                                    <div class="col-md-4">
                                        <input class="form-control" id="project_image" placeholder="Project Image"
                                               type="file" name="project_image" {{$edit ? '' : 'required'}}>
                                    </div>
                                    @if($edit)
                                        <input class="form-control" type="hidden" name="old_project_image"
                                               value="{{$projectData->project_image}}">
                                        <div class="col-md-3">
                                            <img class="img-thumbnail" width="150" height="150"
                                                 src="{{asset('storage/projects_image_folder/'.$projectData->project_image)}}">
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="project_title">Project Title:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" id="project_title" type="text" name="project_title"
                                               placeholder="Project Title"
                                               value="{{$edit ? $projectData->project_title : ''}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="project_content">Project
                                        Content:</label>
                                    <div class="col-md-9">
                                        {{--<textarea class="form-control" id="ckEdit" name="project_content" style="height: 300px; width: 100%;"></textarea>--}}
                                        <textarea data-toggle="wysiwyg" id="project_content"
                                                  name="project_content">{{$edit ? $projectData->project_content : ''}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="project_category">Project
                                        Category:</label>
                                    <div class="col-md-9">
                                        {{--<input class="form-control" id="project_category" type="text"
                                               name="project_category"
                                               placeholder="Project Category"
                                               value="{{$edit ? $projectData->project_category : ''}}">--}}
                                        <select class="form-control" id="project_category" name="project_category"
                                                required>
                                            <option value="" disabled selected>Select Category</option>
                                            <option value="{{\App\Project::CATEGORY_COMPLETED}}"
                                                    @if($edit && $projectData->project_category == \App\Project::CATEGORY_COMPLETED) selected @endif>
                                                {{\App\Project::CATEGORY_COMPLETED}}
                                            </option>
                                            <option value="{{\App\Project::CATEGORY_RUNNING}}"
                                                    @if($edit && $projectData->project_category == \App\Project::CATEGORY_RUNNING) selected @endif>
                                                {{\App\Project::CATEGORY_RUNNING}}
                                            </option>
                                            <option value="{{\App\Project::CATEGORY_UPCOMING}}"
                                                    @if($edit && $projectData->project_category == \App\Project::CATEGORY_UPCOMING) selected @endif>
                                                {{\App\Project::CATEGORY_UPCOMING}}
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="status">Status:</label>
                                    <div class="col-md-9">
                                        <select class="form-control" id="status" name="status" required>
                                            <option value="" {{$edit ? '' : 'disabled selected'}}>Select Status</option>
                                            <option value="1" @if($edit && $projectData->status == '1') selected @endif>
                                                {{\App\Admin::STATUS_ACTIVE}}
                                            </option>
                                            <option value="2" @if($edit && $projectData->staus == '2') selected @endif>
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
