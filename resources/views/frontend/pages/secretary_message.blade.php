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
                    <li class="active">Secretary's Message</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- page-header -->
@php
    $data = \App\Member::where('member_designation','Secretary')->get();
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
                        Human beings are social in nature. From the very beginning there exists economical discrimination among the common peoples resulting in social classification and imbalance of the economical state of the individual. This causes Inequality and Illiteracy. In rural areas of Bangladesh people are left behind from the mainstream of development due to lack of  education and skill. In 1st March,1998 “Society for People’s Advancement (SPA)” came into being to develop rights and  livelihood of the people left far behind the regular trend particularly the vulnerable section of the society like women.   Since its journey; as a Secretary I am working for the mission and vision of this organization as stated in the Memorandum of Articles. With the vision of developing skilled young society, we are working relentlessly to make young unemployed people skilled under the aegis of "Skill Development programme".To ensure actual development of the society I, with all of my coworkers will fight against anti issues with faith, honesty and dignity. I would like to thank all of our donors, co-organization, volunteer and dedicated staff and all kind-hearted people around the world.
                    </p>
                </div>
            </div>
        </div>
    </section>

@endsection
