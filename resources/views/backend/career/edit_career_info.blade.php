@extends('backend.admin_master')
@section('admin_main_content')

    <main class="main-wrapper clearfix">
        <!-- Page Title Area -->
        <div class="row page-title clearfix">
            <div class="page-title-left">
                <!--            <h5 class="mr-0 mr-r-5">Career Info</h5>-->
                <p class="mr-0 text-muted d-none d-md-inline-block">Career Info</p>
            </div>
            <!-- /.page-title-left -->
            <div class="page-title-right d-inline-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{URL::to('/dashboard')}}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Career Info</li>
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
                            {!! Form::open(['url' => '/update-career-info','method'=>'post','role'=>'form','files' => true, 'enctype' => 'multipart/form-data' ]) !!}

                             <input type="hidden" name="career_info_id" value="{{$result->career_info_id}}">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" >Career Info:</label>
                                <div class="col-md-9">
                                    <input class="form-control"  type="text" name="career_info_title" value="{{$result->career_info_title}}">
                                </div>
                            </div>



                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" >Career Info Description:</label>
                                <div class="col-md-9">
                                    <textarea data-toggle="wysiwyg" name="career_info_content">{{$result->career_info_content}}</textarea>
                                </div>
                            </div>


                            <div class="form-actions">
                                <div class="form-group row">
                                    <div class="col-md-9 ml-md-auto btn-list">
                                        <button class="btn btn-primary btn-rounded" type="submit">Submit</button>
                                        <a href="{{URL::to('/edit-career-info')}}"><button class="btn btn-outline-default btn-rounded">Cancel</button></a>
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
