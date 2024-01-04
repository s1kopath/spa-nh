@extends('backend.admin_master')
@section('admin_main_content')

    <main class="main-wrapper clearfix">
        <!-- Page Title Area -->
        <div class="row page-title clearfix">
            <div class="page-title-left">
                <!--            <h5 class="mr-0 mr-r-5">Update Factory</h5>-->
                <p class="mr-0 text-muted d-none d-md-inline-block">Update Team Member</p>
            </div>
            <!-- /.page-title-left -->
            <div class="page-title-right d-inline-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{URL::to('/dashboard')}}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Update Team Member</li>
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
                            {!! Form::open(['url' => '/update-team-profile','method'=>'post','role'=>'form','files' => true, 'enctype' => 'multipart/form-data' ]) !!}

                            <input type="hidden" value="{{Session::get('admin_id')}}" name="admin_id">
                            <input type="hidden" value="{{$result->team_profile_id}}" name="team_profile_id">

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Profile Name:</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" name="team_profile_name" value="{{$result->team_profile_name}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Profile Designation:</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" name="team_profile_position" value="{{$result->team_profile_position}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" >Profile Description:</label>
                                <div class="col-md-9">
                                    <textarea data-toggle="wysiwyg" name="team_profile_description"><?php echo $result->team_profile_description; ?></textarea>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Previous Image:</label>
                                <img class="img-thumbnail" width="250" height="150" src="{{asset('public/team_profile_gallery/'.$result->team_profile_image)}}">
                            </div>
                            <div class="form-group row">
                                <input type="hidden" value="{{$result->team_profile_image}}" name="last_image_path">
                                <label class="col-md-3 col-form-label">Team Profile Image:</label>
                                <div class="col-md-9">
                                    <input class="form-control" placeholder="Team Profile Image" type="file" name="team_profile_image">
                                </div>
                            </div>

                            {{--<div class="form-group row">
                                <label class="col-md-3 col-form-label">Profile Url Facebook:</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="team_profile_fb">{{$result->team_profile_fb}}</textarea>
                                </div>
                            </div>--}}
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Email Address:</label>
                                <div class="col-md-9">
                                    <input class="form-control"  type="mail" name="team_profile_fb" value="{{$result->team_profile_fb}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Profile Url LinkedIn:</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="team_profile_linkedin">{{$result->team_profile_linkedin}}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Ordering:</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="number" name="team_profile_google" value="{{$result->team_profile_google}}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Profile Status:</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="team_profile_status" required>
                                        @if($result->team_profile_status=='1')
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
                                        <a href="{{URL::to('/manage-brand')}}"><button class="btn btn-outline-default btn-rounded">Cancel</button></a>
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
