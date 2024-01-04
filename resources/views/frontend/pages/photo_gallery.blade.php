@extends('frontend.home_master')
@section('home_content')


    <div class="page-header">
        <div class="container">
            <h1 class="title">Photo Gallery</h1>
        </div>
        <div class="breadcrumb-box">
            <div class="container">
                <ul class="breadcrumb">
                    <li>
                        <a href="{{route('/')}}">Home</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">Media Center</a>
                    </li>
                    <li class="active">Photo Gallery</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- page-header -->
    <section id="about-us" class="page-section">
        <div class="container">
            <div class="row">
                @if(isset($photoAlbums) && !empty($photoAlbums))

                    @foreach($photoAlbums as $photoAlbum)
                        <div class="col-sm-4 col-md-4" data-animation="fadeInUp">
                            @php
                                $photoAlbumPhoto = \App\Photo::where('img_gallery_id',$photoAlbum->id)->first();
                            @endphp
                            <a href="{{route('photo-gallery-album',$photoAlbum->id)}}">
                                <img width="500" height="319" class="bottom-pad-20" alt=""
                                     src="{{asset('storage/gallery_images_folder/'.$photoAlbumPhoto->gallery_image)}}"
                                     style="height: 319px;"/>
                            </a>

                            <a href="{{route('photo-gallery-album',$photoAlbum->id)}}">
                                <h4 class="text-left bottom-margin-10">{{$photoAlbum->gallery_title}}</h4>
                            </a>
                        </div>
                    @endforeach
                    <div class="col-sm-12" style="opacity: 1;">
                        {{ $photoAlbums->links() }}
                    </div>

                @else
                    <div class="text-center">
                        Ooops... No content available...!!!
                    </div>
                @endif

            </div>
        </div>
    </section>

@endsection
