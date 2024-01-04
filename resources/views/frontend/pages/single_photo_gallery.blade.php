@extends('frontend.home_master')
@section('home_content')


    <div class="page-header">
        <div class="container">
            <h1 class="title">Photo Album</h1>
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
                    <li>
                        <a href="{{route('photo-gallery-albums')}}">Photo Gallery</a>
                    </li>
                    <li class="active">Photo Album</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- page-header -->
    <section id="how-it-works" class="page-section">
        <div class="section-title" data-animation="fadeInUp">
            <!-- Heading -->
            <h2 class="title">{{$imgGallery->gallery_title}}</h2>
        </div>
        <div class="container">
            <div class="row top-margin-30">
                @foreach($singlePhotoAlbum as $v_singlePhotoAlbum)
                <div class="col-sm-3 gallery-img-block" data-animation="fadeInLeft">
                    <p class="text-center">
                        <a href="{{asset('storage/gallery_images_folder/'.$v_singlePhotoAlbum->gallery_image)}}" class="opacity" data-rel="prettyPhoto[portfolio]">
                            <img class="gallery-single-img" src="{{asset('storage/gallery_images_folder/'.$v_singlePhotoAlbum->gallery_image)}}" width="370" height="185" alt="" />
                        </a>
                    </p>
                    {{--<h5 class="bottom-margin-10">
                        <a href="#" class="black">Promote FundRaiser</a>
                    </h5>--}}
                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id pariatur molestiae illum cum facere
                        deserunt a enim harum eaque fugit.</p>--}}
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <style>
        .gallery-img-block{
            height: 300px;
            display: block;
            margin-bottom: 0px;
            padding-bottom: 0px;
        }

        .gallery-single-img{
            display: flex;
            position: absolute;
            width: 90%;
            max-height: 300px;
            vertical-align: center;
            top: 50%;
            left: 50%;
            margin-top: -150px; /* Half the height */
            margin-left: -45%; /* Half the width */
        }
    </style>

@endsection
