
@extends('backend.admin_master')
@section('admin_main_content')

    <main class="main-wrapper clearfix">
        <!-- Page Title Area -->
        <div class="row page-title clearfix">
            <div class="page-title-left">
                <h5 class="mr-0 mr-r-5">Manage Job Circular</h5>
            </div>
            <!-- /.page-title-left -->
            <div class="page-title-right d-inline-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{URL::to('/dashboard')}}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Manage Job Circular</li>
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
                                    <th>Job Circular Name</th>
                                    <th>Job Circular Start Date</th>
                                    <th>Job Circular Expiry Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $index = 1; ?>
                                @foreach($career_circular_data as $v_career_circular_data)
                                    <tr>
                                        <td style="width: 10%;">{{$index++}}</td>
                                        <td style="width: 20%;">{{$v_career_circular_data->career_circular_title}}</td>
                                        <td style="width: 15%;">{{$v_career_circular_data->career_circular_published_date}}</td>
                                        <td style="width: 15%;">{{$v_career_circular_data->career_circular_last_date}}</td>
                                        <td style="width: 10%;">
                                            @if($v_career_circular_data->career_circular_status=='1')
                                                <a href="{{URL::to('unpublish-career-circular/'.$v_career_circular_data->career_circular_id)}}" class="btn btn-sm btn-success">Active</a>
                                            @else
                                                <a href="{{URL::to('publish-career-circular/'.$v_career_circular_data->career_circular_id)}}" class="btn btn-sm btn-danger">Inactive</a>
                                            @endif
                                        </td>
                                        <td style="width: 15%;">
                                            <a href="{{URL::to('edit-career-circular/'.$v_career_circular_data->career_circular_id)}}" class="btn btn-sm btn-success">Edit</a>
                                            <a onclick="return confirm('Are you sure?')" href="{{URL::to('delete-career-circular/'.$v_career_circular_data->career_circular_id)}}" class="btn btn-sm btn-danger">Delete</a>
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
