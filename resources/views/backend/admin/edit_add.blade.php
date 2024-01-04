@php
    $edit = isset($adminData) && !empty($adminData);
@endphp

@extends('backend.admin_master')
@section('admin_main_content')

    <main class="main-wrapper clearfix">
        <!-- Page Title Area -->
        <div class="row page-title clearfix">
            <div class="page-title-left">
                <h5 class="mr-0 mr-r-5">
                    {{$edit ? 'Edit Admin' : 'Add Admin'}}
                </h5>
            </div>
            <!-- /.page-title-left -->
            <div class="page-title-right d-inline-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{URL::to('/dashboard')}}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">
                        {{$edit ? 'Edit Admin' : 'Add Admin'}}
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
                                  action="{{!$edit ? route('save-admin') : route('update-admin',$adminData->id)}}"
                                  method="POST" enctype="multipart/form-data" {{--autocomplete="off"--}}>

                                {{ csrf_field() }}

                                @if($edit)
                                    <input type="hidden" name="id" value="{{$adminData->id}}">
                                    {{ method_field("PUT") }}
                                @endif
                                <input type="hidden" value="{{Session::get('admin_id')}}" name="admin_id">

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="name">Name:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" id="name" type="text" name="name"
                                               placeholder="Name"
                                               value="{{$edit ? $adminData->name : ''}}"
                                            {{$edit ? '' : 'required'}}>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="email">E-mail:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" id="email" type="email" name="email"
                                               placeholder="E-mail"
                                               value="{{$edit ? $adminData->email : ''}}"
                                            {{$edit ? '' : 'required'}}>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="phone_number">Phone Number:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" id="phone_number" type="tel" name="phone_number"
                                               placeholder="01xxxxxxxxx"
                                               value="{{$edit ? $adminData->phone_number : ''}}"
                                            {{$edit ? '' : 'required'}}>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="password">Password:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" id="password" type="password" name="password"
                                               placeholder="Password"
                                               {{--value="{{$edit ? $adminData->password : ''}}"--}}
                                            {{$edit ? '' : 'required'}}>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="password_confirmation">Password
                                        Confirmation:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" id="password_confirmation" type="password"
                                               name="password_confirmation"
                                               placeholder="Password Confirmation"
                                            {{$edit ? '' : 'required'}}>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="access_level">Access Level:</label>
                                    <div class="col-md-9">
                                        <select class="form-control" id="access_level" name="access_level" required>
                                            <option value="" disabled selected>Select Access Level</option>
                                            <option value="1" @if($edit && $adminData->access_level == '1') selected @endif>
                                                {{\App\Admin::ACCESS_LEVEL_SUPER}}
                                            </option>
                                            <option value="2" @if($edit && $adminData->access_level == '2') selected @endif>
                                                {{\App\Admin::ACCESS_LEVEL_Manager}}
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="status">Status:</label>
                                    <div class="col-md-9">
                                        <select class="form-control" id="status" name="status" required>
                                            <option value="" disabled selected>Select Status</option>
                                            <option value="1" @if($edit && $adminData->status == '1') selected @endif>
                                                {{\App\Admin::STATUS_ACTIVE}}
                                            </option>
                                            <option value="2" @if($edit && $adminData->staus == '2') selected @endif>
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
