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
                    <li class="active">CEO's Message</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- page-header -->
@php
    $data = \App\Member::where('member_designation','CEO')->get();
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
                        “ We started our journey with a mission to build Digital Bangladesh together providing various kinds of IT services since 2002. We have more than 267 staff members, who are always working together to deliver the best works to the clients. SPA IT sector is now working on the project of Image Editing Services under the title of “Click The Photo”. Click The Photo is the one stop solution point of any kind of image post processing services. Our professionalism, coupled with a strong personal touch enhances the probability of success at every step. Our goal is to create a long-lasting client-candidate relationship, which will translate into long-term winning strategies and exponential growth for both parties. Our strength is developed by our unique ideas and values, wherein we develop excellent and smart services by giving equal importance to all stakeholders involved in the chain, such as our diverse talented work team, partners, clients, and the society.
                    </p>

                    <p>
                        SPA IT sector  is now one of the leading IT companies in Bangladesh. Where we develop a progressive, empower and consumer focused corporate culture to growing market leadership along with the passion of corporate social responsibility to extend our leadership through performance.
                    </p>

                    <p>
                        As one of the leading IT solution providers of Bangladesh, we are working with the vision of making the nation proficient in the “Digital Bangladesh-Vision 2021” by building a platform which serves business owners as well as freelancers with comprehensive training for IT skills and professional enterprise solutions. ”
                    </p>
                </div>
            </div>
        </div>
    </section>

@endsection
