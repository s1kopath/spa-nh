@php
    $edit = isset($memberData) && !empty($memberData);
@endphp

@extends('backend.admin_master')
@section('admin_main_content')

    <main class="main-wrapper clearfix">
        <!-- Page Title Area -->
        <div class="row page-title clearfix">
            <div class="page-title-left">
                <h5 class="mr-0 mr-r-5">
                    {{$edit ? 'Edit Member' : 'Add Member'}}
                </h5>
            </div>
            <!-- /.page-title-left -->
            <div class="page-title-right d-inline-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{URL::to('/dashboard')}}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">
                        {{$edit ? 'Edit Member' : 'Add Member'}}
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
                                  action="{{!$edit ? route('member.store') : route('member.update',$memberData->id)}}"
                                  method="POST" enctype="multipart/form-data" autocomplete="off">

                                {{ csrf_field() }}

                                @if($edit)
                                    <input type="hidden" name="id" value="{{$memberData->id}}">
                                    {{ method_field("PUT") }}
                                @endif
                                <input type="hidden" value="{{Session::get('admin_id')}}" name="admin_id">

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="member_image">Member Image:</label>
                                    <div class="col-md-4">
                                        <input class="form-control" id="member_image" placeholder="Member Image"
                                               type="file" name="member_image" {{$edit ? '' : 'required'}}>
                                    </div>
                                    @if($edit)
                                        <input class="form-control" type="hidden" name="old_member_image"
                                               value="{{$memberData->member_image}}">
                                        <div class="col-md-3">
                                            <img class="img-thumbnail" width="150" height="150"
                                                 src="{{asset('storage/member_image_folder/'.$memberData->member_image)}}">
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="member_name">Member name:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" id="member_name" type="text" name="member_name"
                                               placeholder="Member name"
                                               value="{{$edit ? $memberData->member_name : ''}}" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="member_designation">Member
                                        Designation:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" id="member_designation" type="text"
                                               name="member_designation"
                                               placeholder="Member Designation"
                                               value="{{$edit ? $memberData->member_designation : ''}}"
                                               required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="member_category"
                                           class="form-control-label">Member Category</label>
                                    <div class="col-md-9">
                                        <select class="selectpicker form-control" multiple="multiple"
                                                id="member_category" name="member_category[]" required>
                                            <option value="{{\App\Member::MEMBER_CATEGORY_GENERAL}}"
                                                    @if($edit)
                                                    @foreach($memberData->member_category as $v_cat)
                                                    @if(\App\Member::MEMBER_CATEGORY_GENERAL == $v_cat) selected @endif
                                                @endforeach
                                                @endif
                                            >
                                                {{\App\Member::MEMBER_CATEGORY_GENERAL}}
                                            </option>
                                            <option value="{{\App\Member::MEMBER_CATEGORY_ADVISORY}}"
                                                    @if($edit)
                                                    @foreach($memberData->member_category as $v_cat)
                                                    @if(\App\Member::MEMBER_CATEGORY_ADVISORY == $v_cat) selected @endif
                                                @endforeach
                                                @endif
                                            >
                                                {{\App\Member::MEMBER_CATEGORY_ADVISORY}}
                                            </option>
                                            <option value="{{\App\Member::MEMBER_CATEGORY_EXECUTIVE}}"
                                                    @if($edit)
                                                    @foreach($memberData->member_category as $v_cat)
                                                    @if($edit && \App\Member::MEMBER_CATEGORY_EXECUTIVE == $v_cat) selected @endif
                                                @endforeach
                                                @endif
                                            >
                                                {{\App\Member::MEMBER_CATEGORY_EXECUTIVE}}
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="member_email">Member Email:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" id="member_email" type="email" name="member_email"
                                               placeholder="abc@mail.com"
                                               value="{{$edit ? $memberData->member_email : ''}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="member_phone">Member Phone No:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" id="member_phone" type="tel" name="member_phone"
                                               placeholder="01xxxxxxxxx"
                                               value="{{$edit ? $memberData->member_phone : ''}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="member_biography">Member
                                        Biography:</label>
                                    <div class="col-md-9">
                                        <textarea data-toggle="wysiwyg" id="member_biography"
                                                  name="member_biography">{{$edit ? $memberData->member_biography : ''}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="member_ordering">Member
                                        Ordering:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" id="member_ordering" type="number"
                                               name="member_ordering"
                                               value="{{$edit ? $memberData->member_ordering : ''}}" required>
                                    </div>
                                </div>

                                @if(!$edit)
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="status">Status:</label>
                                        <div class="col-md-9">
                                            <select class="form-control" id="status" name="status" required>
                                                <option value="" {{$edit ? '' : 'disabled selected'}}>Select Status
                                                </option>
                                                <option value="1"
                                                        @if($edit && $memberData->status == '1') selected @endif>
                                                    {{\App\Admin::STATUS_ACTIVE}}
                                                </option>
                                                <option value="2"
                                                        @if($edit && $memberData->staus == '2') selected @endif>
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

    <style>
        .btn-default {
            /*color: #555;*/
            color: #74708d !important;
            background-color: #fff !important;
            /*border-color: #e4e7ea;*/
            border: 1px solid #e4e9f0 !important;
        }
    </style>

@endsection
