@extends('backend.admin_master')
@section('admin_main_content')

<main class="main-wrapper clearfix">
    <!-- Page Title Area -->
    <div class="row page-title clearfix">
        <div class="page-title-left">
            <h5 class="mr-0 mr-r-5">Manage News</h5>
        </div>
        <!-- /.page-title-left -->
        <div class="page-title-right d-inline-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{URL::to('/dashboard')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Manage News</li>
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
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Url</th>
                                    <th>Published date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php /*$index = 1; */?>
                            @foreach($newsDatas as $newsData)
                                <tr>
                                    {{--<td>{{$index++}}</td>--}}
                                    <td>{{$newsData->news_title}}</td>
                                    <td><img class="img-thumbnail" width="100" height="100" src="{{asset('storage/news_image_folder/'.$newsData->news_image)}}"></td>
                                    <td>{{$newsData->news_url}}</td>
                                    <td>
                                        {{ \Carbon\Carbon::parse($newsData->published_date)->format('d-m-Y')}}
                                    </td>
                                    <td>
                                        @if($newsData->status=='1')
                                            <a href="{{route('news-status-change',$newsData->id)}}" class="btn btn-sm btn-success"><i class="fa fa-thumbs-up"></i> {{\App\Admin::STATUS_ACTIVE}}</a>
                                        @else
                                            <a href="{{route('news-status-change',$newsData->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-thumbs-down"></i> {{\App\Admin::STATUS_INACTIVE}}</a>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('news.edit',$newsData->id)}}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i> Edit</a>
                                        <a data-href="{{route('news.destroy',$newsData->id)}}" class="btn btn-sm btn-danger delete"><i class="fa fa-trash"></i> Delete</a>
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

{{--<script type="text/javascript">
    $(function () {

        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin-list') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });

    });
</script>--}}

@endsection
