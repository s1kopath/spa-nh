@extends('frontend.home_master')
@section('home_content')


    <div class="page-header">
        <div class="container">
            <h1 class="title">About SPA</h1>
        </div>
        <div class="breadcrumb-box">
            <div class="container">
                <ul class="breadcrumb">
                    <li>
                        <a href="{{route('/')}}">Home</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">About Us</a>
                    </li>
                    <li class="active">CC's Message</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- page-header -->
@php
    $data = \App\Member::where('member_designation','Central coordinator (CC)')->get();
        $value = NULL;
        foreach($data as $q){
            foreach ($q->member_category as $vq){
                if ($vq == \App\Member::MEMBER_CATEGORY_EXECUTIVE){
                    $value = $q;
                    break;
                }
            }
        }
@endphp
    <section class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <img class="img-thumbnail" src="{{asset('storage/member_image_folder/'.$value->member_image)}}" width="800" height="570" alt="{{$value->member_name}}" title="{{$value->member_name}}"/>
                </div>
                <div class="col-sm-6 col-md-8 text-justify">
                    <h4>{{$value->member_name}}</h4>
                    <h5>{{$value->member_designation}}</h5>
                    {{--<p>
                        <?= $value->member_biography ?>
                    </p>--}}
                    <p>
                        Education is backbone of nation. Education is the process of acquisition of knowledge, skills, values, beliefs, and habits; hence all thing comes true with a good health. Education, Health and Skills development are the core elements for a nation-wide development. Society for People’s Advancement (SPA) are working for its mission and goal in combination of “Education, Health and Skills Development” for individual’s self-reliance. In the field of skill development SPA emphasis to make the nation skilled in technology, specially in computer. SPA has successfully completed income generating project for individual by computer courses. SPA also working for those fall off from primary education.
                        The world moving forward in the next level of digital technology. Our efforts are dedicated to make a bright image of the nation by implementing in our goal.
                    </p>
                </div>
            </div>
        </div>
    </section>

@endsection
