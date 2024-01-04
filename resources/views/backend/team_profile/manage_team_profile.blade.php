
@extends('backend.admin_master')
@section('admin_main_content')

    <main class="main-wrapper clearfix">
        <!-- Page Title Area -->
        <div class="row page-title clearfix">
            <div class="page-title-left">
                <h5 class="mr-0 mr-r-5">Manage Team Member</h5>
            </div>
            <!-- /.page-title-left -->
            <div class="page-title-right d-inline-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{URL::to('/dashboard')}}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Manage Team Member</li>
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
                        <!-- /.widget-heading -->
                        <div class="widget-body clearfix">
                            <table class="table table-striped table-responsive" data-toggle="datatables">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Profile Name</th>
                                    <th>Profile Designation</th>
                                    <th>Profile Description</th>
                                <!--<th>Profile Social Media Url</th>-->
                                    <th>Profile Image</th>
                                    <th>Ordering</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $index = 1;?>
                                @foreach($team_profile as $tp)
                                    <tr>
                                        <td>{{$index++}}</td>
                                        <td>{{$tp->team_profile_name}}</td>
                                        <td>{{$tp->team_profile_position}}</td>
                                        <td><?php echo substr($tp->team_profile_description, 0, 30); ?></td>
                                        <!--<td>
                                            Facebook: <?php //echo substr($tp->team_profile_fb, 0, 20); ?><br/>
                                            LinkedIn: <?php //echo substr($tp->team_profile_linkedin, 0, 20); ?>
                                        </td>-->
                                        <td><img class="img-thumbnail" width="50" height="50" src="{{asset('public/team_profile_gallery/'.$tp->team_profile_image)}}"></td>
                                        <td>{{$tp->team_profile_google}}</td>
                                        <td>
                                            @if($tp->team_profile_status=='1')
                                                <a href="{{URL::to('unpublish-team-profile/'.$tp->team_profile_id)}}" class="btn btn-sm btn-success">Active</a>
                                            @else
                                                <a href="{{URL::to('publish-team-profile/'.$tp->team_profile_id)}}" class="btn btn-sm btn-danger">Inactive</a>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{URL::to('edit-team-profile/'.$tp->team_profile_id)}}" class="btn btn-sm btn-success">Edit</a>
                                            <a onclick="return confirm('Are you sure?')" href="{{URL::to('delete-team-profile/'.$tp->team_profile_id)}}" class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
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
{{--============--}}
@extends('backend.admin_master') @section('admin_main_content')

<!-- Content Header (Team Profile header) -->
<section class="content-header">
    <div class="header-icon">
        <i class="fa fa-tachometer"></i>
    </div>
    <div class="header-title">
        <h1> Dashboard</h1>
        <small> Dashboard content</small>
        <ul class="link hidden-xs">
            <li><a href="{{URL::to('/dashboard')}}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li><a href="{{URL::to('/manage-team-profile')}}">Manage Team Profile</a></li>
        </ul>
    </div>
</section>
<!-- page section -->

<div class="container-fluid">
    <div class="row">
        <!-- Data tables -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-table fa-lg"></i>
                    <h2>Manage Team Profile</h2>
                    <br/>
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
                </div>
                <div class="card-content">

                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Profile ID</th>
                                    <th>Profile Title</th>
                                    <th>Profile Designation</th>
                                    <th>Profile Description</th>
                                    <th>Profile Url Social Media</th>
                                    <th>Profile Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($team_profile as $tp)
                                <tr>
                                    <td>{{$tp->team_profile_id}}</td>
                                    <td><?php echo substr($tp->team_profile_name, 0, 20); ?></td>
                                    <td>{{$tp->team_profile_position}}</td>
                                    <td><?php echo substr($tp->team_profile_description, 0, 30); ?></td>
                                    <td>
                                        Facebook: <?php echo substr($tp->team_profile_fb, 0, 20); ?><br/>
                                        Google+: <?php echo substr($tp->team_profile_google, 0, 20); ?><br/>
                                        LinkedIn: <?php echo substr($tp->team_profile_linkedin, 0, 20); ?><br/>
                                    </td>
                                    <td><img width="50" height="50" src="{{asset('public/team_profile_gallery/'.$tp->team_profile_image)}}"></td>
                                    <td>
                                        @if($tp->team_profile_status=='1')
                                        <a href="{{URL::to('unpublish-team-profile/'.$tp->team_profile_id)}}" class="btn btn-sm btn-success">Active</a>
                                        @else
                                        <a href="{{URL::to('publish-team-profile/'.$tp->team_profile_id)}}" class="btn btn-sm btn-danger">Inactive</a>
                                        @endif
                                        <br/>
                                        <br/>
                                        @if($tp->team_profile_type=='1')
                                        <a href="{{URL::to('general-team-profile/'.$tp->team_profile_id)}}" class="btn btn-sm btn-primary">Management</a>
                                        @else
                                        <a href="{{URL::to('management-team-profile/'.$tp->team_profile_id)}}" class="btn btn-sm btn-secondary">General</a>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{URL::to('edit-team-profile/'.$tp->team_profile_id)}}" class="btn btn-sm btn-success">Edit</a>
                                        <br/>
                                        <br/>
                                        <a onclick="return confirm('Are you sure?')" href="{{URL::to('delete-team-profile/'.$tp->team_profile_id)}}" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ./cotainer -->

@endsection