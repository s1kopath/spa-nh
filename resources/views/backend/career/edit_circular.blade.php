@extends('backend.admin_master')
@section('admin_main_content')

    <main class="main-wrapper clearfix">
        <!-- Page Title Area -->
        <div class="row page-title clearfix">
            <div class="page-title-left">
                <!--            <h5 class="mr-0 mr-r-5">Update Job Circular</h5>-->
                <p class="mr-0 text-muted d-none d-md-inline-block">Update Job Circular</p>
            </div>
            <!-- /.page-title-left -->
            <div class="page-title-right d-inline-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{URL::to('/dashboard')}}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Update Job Circular</li>
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
                            <!-- @@@@@@@@@@ Start Messages @@@@@@@@@@@@ -->
                            @if(Session::has('success'))
                                <div class="alert alert-success alert-icon-left" role="alert">

                                    <div class="float-xs-left">
                                        <i class="fa fa-check"></i>   <strong>Success !</strong> {{Session::get('success')}}.
                                    </div>
                                </div>
                            @elseif(Session::has('error'))
                                <div class="alert alert-danger alert-icon-left" role="alert">

                                    <div class="float-xs-left">
                                        <i class="fa fa-times-circle"></i>   <strong>Opps !</strong> {{Session::get('error')}}.
                                    </div>
                                </div>
                            @endif
                        <!-- @@@@@@@@@@ End Messages @@@@@@@@@@@@ -->
                            {!! Form::open(['url' => '/update-career-circular','method'=>'post','role'=>'form','files' => true, 'enctype' => 'multipart/form-data' ]) !!}

                            <input type="hidden" value="{{Session::get('admin_id')}}" name="admin_id">
                            <input type="hidden" value="{{$result->career_circular_id}}" name="career_circular_id">

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" >Job Circular Name:</label>
                                <div class="col-md-9">
                                    <input class="form-control"  type="text" name="career_circular_title" value="{{$result->career_circular_title}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" >Job Circular Publish Date:</label>
                                <div class="col-md-9">
                                    <input class="form-control"  type="date" name="career_circular_published_date" value="{{$result->career_circular_published_date}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" >Job Circular Expiry Date:</label>
                                <div class="col-md-9">
                                    <input class="form-control"  type="date" name="career_circular_last_date" value="{{$result->career_circular_last_date}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" >Job Circular Email address:</label>
                                <div class="col-md-9">
                                    <input class="form-control"  type="email" name="career_circular_email" value="{{$result->career_circular_email}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" >Job Circular Description:</label>
                                <div class="col-md-9">
                                    <textarea data-toggle="wysiwyg" name="career_circular_content">{{$result->career_circular_content}}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Job Circular Status:</label>
                                <div class="col-md-9">
                                    <select class="form-control" data-toggle="select2" data-plugin-options='{"minimumResultsForSearch": -1}' name="career_circular_status">
                                        @if($result->career_circular_status=='1')
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        @else
                                            <option value="0">Inactive</option>
                                            <option value="1">Active</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="form-group row">
                                    <div class="col-md-9 ml-md-auto btn-list">
                                        <button class="btn btn-primary btn-rounded" type="submit">Submit</button>
                                        <a href="{{URL::to('/manage-career-circular')}}"><button class="btn btn-outline-default btn-rounded">Cancel</button></a>
                                    </div>
                                </div>
                            </div>
                            {!! Form::close() !!}
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
