@extends('frontend.home_master')
@section('home_content')


<div class="page-header">
    <div class="container">
        <h1 class="title">Under Maintenance</h1>
    </div>
    <div class="breadcrumb-box">
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a href="{{route('/')}}">Home</a>
                </li>
                <li class="active">Under Maintenance</li>
            </ul>
        </div>
    </div>
</div>
<!-- page-header -->
<section class="page-section">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <h3 class="upper">This Section is Currently</h3>
                <h1 class="upper bg-color">Under Maintenance</h1>
                <h3 class="upper">We will be launching it soon</h3>
                <div class="icon-big">
                    <i class="fa fa-cog fa-5x rotating text-color"></i>
                </div>
                <br />
            </div>
            {{--<div class="col-md-4">
                <h4>Why is the Site Down?</h4>
                <p>The site is under maintenance probably because we are working to improve this website drastically.</p>
            </div>
            <div class="col-md-4">
                <h4>What is the Downtime?</h4>
                <p>We are usually back within 10-15 minutes but it definitely depends on the issue.</p>
            </div>
            <div class="col-md-4">
                <h4>Do you need Support?</h4>
                <p>You may simply send mail at
                    <a href="mailto:info@zozothemes.com" class="text-color">support@zozothemes.com</a>
                    <br />if you need urgent support.</p>
            </div>--}}
        </div>
    </div>
    <!-- .container -->
</section>

@endsection
