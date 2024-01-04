@extends('frontend.home_master')
@section('home_content')


    <div class="page-header">
        <div class="container">
            <h1 class="title">Member Profile</h1>
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
                    <li>
                        <a href="javascript:void(0)">Commitee Members</a>
                    </li>
                    <li class="active">Member Profile</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- page-header -->
    <section class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <img src="{{asset('storage/member_image_folder/'.$singleMemberProfile->member_image)}}" width="800" height="570" alt="{{$singleMemberProfile->member_name}}" title=""/>
                </div>
                <div class="col-sm-6 col-md-8">
                    <h4>{{$singleMemberProfile->member_name}}</h4>
                    <h6>{{$singleMemberProfile->member_designation}}</h6>
                    <p>
                        <?= $singleMemberProfile->member_biography; ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

@endsection
