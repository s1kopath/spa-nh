@php
    $edit = isset($imgGalleryData) && !empty($imgGalleryData);
@endphp

@extends('backend.admin_master')
@section('admin_main_content')

    <main class="main-wrapper clearfix">
        <!-- Page Title Area -->
        <div class="row page-title clearfix">
            <div class="page-title-left">
                <h5 class="mr-0 mr-r-5">
                    {{$edit ? 'Edit Photo Gallery' : 'Add Photo Gallery'}}
                </h5>
            </div>
            <!-- /.page-title-left -->
            <div class="page-title-right d-inline-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{URL::to('/dashboard')}}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">
                        {{$edit ? 'Edit Photo Gallery' : 'Add Photo Gallery'}}
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

                            <!--Alert messages start-->
                        @include('backend.partials.alert_messages')
                        <!--Alert messages end-->

                            <form id="edit-add-form" role="form"
                                  action="{{!$edit ? route('photo-gallery.store') : route('photo-gallery.update',$imgGalleryData->id)}}"
                                  method="POST" enctype="multipart/form-data" autocomplete="off"
                                  name="form-example-1" id="form-example-1">

                                {{ csrf_field() }}

                                @if($edit)
                                    <input type="hidden" name="id" value="{{$imgGalleryData->id}}">
                                    {{ method_field("PUT") }}
                                @endif
                                <input type="hidden" value="{{Session::get('admin_id')}}" name="admin_id">

                                <div class="form-group row input-field">
                                    <label class="col-md-3 col-form-label" for="gallery_image">Add Photos:</label>
                                    <div class="col-md-9">
                                        <div class="input-field">
                                            <div class="input-images-1" style="padding-top: .5rem;"></div>
                                        </div>
                                    </div>

                                    @if($edit)
                                        <div class="col-md-3"></div>
                                        <div class="col-md-9 row">
                                            @php
                                                $photos = \App\Photo::where('img_gallery_id',$imgGalleryData->id)->get();
                                            @endphp

                                            @if(isset($photos) && !empty($photos))
                                                @foreach($photos as $photo)
                                                    <div class="col-md-3" style="padding-top: 20px;">
                                                        <img class="img-thumbnail" style="height: 100px; width: 100px;"
                                                             src="{{asset('storage/gallery_images_folder/'.$photo->gallery_image)}}">

                                                        <a data-href="{{url('delete-single-photo',$photo->id)}}"
                                                           class="btn btn-sm btn-danger delete">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                    </div>
                                                @endforeach
                                            @else
                                                No Image uploaded
                                            @endif
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="gallery_title">Photo Gallery
                                        Title:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" id="gallery_title" type="text" name="gallery_title"
                                               placeholder="Photo Gallery Title"
                                               value="{{$edit ? $imgGalleryData->gallery_title : ''}}">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="status">Status:</label>
                                    <div class="col-md-9">
                                        <select class="form-control" id="status" name="status" required>
                                            <option value="" {{$edit ? '' : 'disabled selected'}}>Select Status</option>
                                            <option value="1"
                                                    @if($edit && $imgGalleryData->status == '1') selected @endif>
                                                {{\App\Admin::STATUS_ACTIVE}}
                                            </option>
                                            <option value="2"
                                                    @if($edit && $imgGalleryData->staus == '2') selected @endif>
                                                {{\App\Admin::STATUS_INACTIVE}}
                                            </option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-actions">
                                    <div class="form-group row">
                                        <div class="col-md-9 ml-md-auto btn-list">
                                            <button class="btn btn-primary btn-rounded" type="submit">Submit</button>
                                            <button class="btn btn-outline-default btn-rounded" type="reset">Cancel
                                            </button>
                                        </div>
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
                            data-dismiss="modal">Cancel
                    </button>
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



    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link type="text/css" rel="stylesheet"
          href="{{asset('public/backend_resource/image_uploader/image-uploader.min.css')}}">
    <script type="text/javascript" src="{{asset('public/backend_resource/image_uploader/jquery.min.js')}}"></script>
    <script type="text/javascript"
            src="{{asset('public/backend_resource/image_uploader/image-uploader.min.js')}}"></script>

    <script>
        $(document).ready(function () {

            //$('.input-images-1').imageUploader();
            $('.input-images-1').imageUploader({
                imagesInputName: 'gallery_images',
                Maxfilesize: 2048
            });

            $(document).on('click', '.delete', function (e) {
                $('#delete_form')[0].action = $(this).data('href');
                $('#delete_model').modal('show');
            });

        });
    </script>

@endsection
