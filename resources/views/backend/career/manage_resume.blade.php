
@extends('backend.admin_master')
@section('admin_main_content')

    <main class="main-wrapper clearfix">
        <!-- Page Title Area -->
        <div class="row page-title clearfix">
            <div class="page-title-left">
                <h5 class="mr-0 mr-r-5">Manage Resume</h5>
            </div>
            <!-- /.page-title-left -->
            <div class="page-title-right d-inline-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{URL::to('/dashboard')}}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Manage Resume</li>
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
                                    <th>Candidate Information</th>
                                    <th>Candidate Career Summary</th>
                                    <th>Candidate Resume</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $index = 1; ?>
                                @foreach($resume_data as $v_resume_data)
                                    <tr>
                                        <td style="width: 10%;">{{$index++}}</td>

                                        <?php $circular_title = DB::table('tbl_career_circular')->where('career_circular_id', $v_resume_data->circular_id)->first(); ?>
                                        <td style="width: 20%;">{{$circular_title->career_circular_title}}</td>

                                        <td style="width: 20%;">
                                            Name: {{$v_resume_data->name}} <br/>
                                            Email: {{$v_resume_data->email}} <br/>
                                            Phone: {{$v_resume_data->phone}}
                                        </td>

                                        <td style="width: 25%;">{{$v_resume_data->career_summary}}</td>

                                        <td style="width: 15%;"><a href="{{URL::to('public/resumes/'.$v_resume_data->resume)}}" target="_blank">Download Resume</a></td>

                                        <td style="width: 10%;">
                                            <a onclick="return confirm('Are you sure?')" href="{{URL::to('delete-resume/'.$v_resume_data->resume_id)}}" class="btn btn-sm btn-danger">Delete</a>
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
