@extends('backend.admin_master')
@section('admin_main_content')

    <main class="main-wrapper clearfix">
        <!-- Page Title Area -->
        <div class="row page-title clearfix">
            <div class="page-title-left">
                <h5 class="mr-0 mr-r-5">
                    View Volunteer
                </h5>
            </div>
            <!-- /.page-title-left -->
            <div class="page-title-right d-inline-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{URL::to('/dashboard')}}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">
                        View Volunteer
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

                            <form id="edit-add-form" role="form"
                                  action="#"
                                  method="POST" enctype="multipart/form-data" autocomplete="off">

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Picture:</label>
                                    <div class="col-md-4">
                                        <img class="img-thumbnail" width="150" height="150"
                                             src="{{asset('storage/volunteer_image_folder/'.$volunteerData->v_image)}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Name:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" value="{{$volunteerData->v_name}}" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Email:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text"
                                               value="{{$volunteerData->v_email}}"
                                               readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" class="form-control-label">Phone:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text"
                                               value="{{$volunteerData->v_phone}}"
                                               readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Ocupation:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text"
                                               value="{{$volunteerData->v_ocupation}}"
                                               readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Reason to be a Volunteer:</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" rows="3" readonly>{{$volunteerData->v_reasoning}}</textarea>
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
