@extends('backend.admin_master')
@section('admin_main_content')

<main class="main-wrapper clearfix">
    <!-- Page Title Area -->
    <div class="row page-title clearfix">
        <div class="page-title-left">
            <h5 class="mr-0 mr-r-5">Volunteer List</h5>
        </div>
        <!-- /.page-title-left -->
        <div class="page-title-right d-inline-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{URL::to('/dashboard')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Volunteer List</li>
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

                    <!--Alert messages start-->
                    @include('backend.partials.alert_messages')
                    <!--Alert messages end-->

                    <!-- /.widget-heading -->
                    <div class="widget-body clearfix">
                        <table class="table table-striped table-responsive" data-toggle="datatables">
                            <thead>
                                <tr>
                                    {{--<th># &nbsp;</th>--}}
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>email</th>
                                    <th>phone</th>
                                    <th>Ocupation</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php /*$index = 1; */?>
                            @foreach($volunteerDatas as $volunteerData)
                                <tr>
                                    {{--<td>{{$index++}}</td>--}}
                                    <td>{{$volunteerData->v_name}}</td>
                                    <td><img class="img-thumbnail" width="100" height="100" src="{{asset('storage/volunteer_image_folder/'.$volunteerData->v_image)}}"></td>
                                    <td>{{$volunteerData->v_email}}</td>
                                    <td>{{$volunteerData->v_phone}}</td>
                                    <td>{{$volunteerData->v_ocupation}}</td>
                                    <td>
                                        <a href="{{route('volunteer.show',$volunteerData->id)}}" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> View</a>
                                        <a data-href="{{route('volunteer.destroy',$volunteerData->id)}}" class="btn btn-sm btn-danger delete"><i class="fa fa-trash"></i> Delete</a>
                                    </td>
                                </tr>
                            @endforeach
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

{{--delete modal start--}}
<div class="modal modal-danger fade" tabindex="-1" id="delete_model" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-inverse">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h5 class="modal-title" id="myMediumModalLabel">Are you sure you want to delete this?</h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left"
                        data-dismiss="modal">Cancel</button>
                <form action="#" id="delete_form" method="POST">
                    {{ method_field("DELETE") }}
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-danger pull-right delete-confirm"
                           value="Yes, Delete it!">
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .btn-danger {
        color: #fff !important;
    }
</style>

{{--delete modal end--}}

<script type="text/javascript">
    $(document).ready(function () {
        $(document).on('click', '.delete', function (e) {
            $('#delete_form')[0].action = $(this).data('href');
            $('#delete_model').modal('show');
        });
    });
</script>


@endsection
