@extends('backend.admin_master')
@section('admin_main_content')

<!-- Content Header (Career Page header) -->
<section class="content-header">
    <div class="header-icon">
        <i class="fa fa-tachometer"></i>
    </div>
    <div class="header-title">
        <h1> Dashboard</h1>
        <small> Dashboard content</small>
        <ul class="link hidden-xs">
            <li><a href="{{URL::to('/dashboard')}}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li><a href="{{URL::to('/add-career-info')}}">Add Career Page</a></li>
        </ul>
    </div>
</section>
<!-- page section -->
<!-- page section -->
<div class="container-fluid">
    <div class="row">
        <!-- forms cntrol -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-header">

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
                    {!! Form::open(['url' => '/save-career-info','method'=>'post','role'=>'form','files' => true, 'enctype' => 'multipart/form-data', 'class'=> 'form-horizontal' ]) !!}
                    <h2 class="text-center">Add New Career Page</h2>
                    <fieldset>
                        <!-- Text input-->
                        

                        <div class="form-group">
                            <label class="col-md-4 control-label">Career Page Title:</label>
                            <div class="col-md-4">
                                <div class="input-field">
                                    <input class="form-control" name="career_info_title" type="text" placeholder="Career Page Title" required>
                                </div>
                            </div>
                        </div>

                        
                        <div class="form-group">
                            <label class="col-md-4 control-label">Career Page Content:</label>
                            <div class="col-md-6" >
                                <div class="input-field" >
                                    <textarea id="ckEdit" rows="4" cols="60" name="career_info_content" style="height: 300px"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Career Page Image:</label>
                            <div class="col-md-4">
                                <div class="input-field">
                                    <input class="form-control"  type="file" name="career_info_image" required>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-4 control-label">Career Page Status:</label>
                            <div class="col-md-4">
                                <div class="input-field form-input">
                                    <select class="form-control" name="career_info_status" required>
                                        <option value="" disabled selected>Select Status</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- ./Text input-->

                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-4">
                                <!--<input type="submit" value="Save" />-->
                                <button type="submit" class="btn btn-success">Save <span class="glyphicon glyphicon-send"></span></button>
                            </div>
                        </div>

                    </fieldset>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>
    <!-- ./row -->
</div>
<!-- ./cotainer -->


@endsection