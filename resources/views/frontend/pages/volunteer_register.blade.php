@extends('frontend.home_master')
@section('home_content')


    <div class="page-header">
        <div class="container">
            <h1 class="title">Become a volunteer</h1>
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
                    <li class="active">Become a volunteer</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- page-header -->
    <section id="home" class="page-section" style="padding: unset;">
        <div data-background="{{asset('public/frontend_resources/img/sections/bg/bg-section-counter.jpg')}}"
             class="image-bg content-in {{--fixed--}}"
             data-stellar-background-ratio="0.5"></div>
        <div class="overlay"></div>
        <div class="container {{--padding-80--}}">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 tb-pad-80">
                    <form id="volunteer_form" role="form"
                          class="register-form contact-form form-box overlay-color"
                          action="{{route('volunteer.store')}}"
                          method="POST" enctype="multipart/form-data" {{--autocomplete="off"--}}>

                        {{ csrf_field() }}

                        <h3 class="title text-center" style="color: #ffffff;">Become a volunteer. Register Now.</h3>

                        <!--Alert messages start-->
                            @include('frontend.partials.alert_messages')
                        <!--Alert messages end-->

                        <input type="text" placeholder="Name *" name="v_name" id="v_name" class="form-control bg-white" required/>
                        <input type="email" placeholder="Email *" name="v_email" id="v_email" class="form-control bg-white" required/>
                        <input type="tel" placeholder="Phone *" name="v_phone" id="v_phone" class="form-control bg-white" required/>
                        <input type="text" placeholder="Ocupation *" name="v_ocupation" id="v_ocupation" class="form-control bg-white" required/>
                        <textarea placeholder="Your reason to become a volunteer *" rows="2"
                                  class="form-control bg-white" name="v_reasoning"
                                  id="v_reasoning" required></textarea>

                        <div class="form-group">
                            <label for="v_image" style="color: #ffffff;">Your Picture.</label>
                            <input type="file" id="v_image" class="form-control" name="v_image" required/>
                            {{--<p class="help-block">Example block-level help text here.</p>--}}
                        </div>
                        <div class="checkbox text-center">
                            <label style="/*color: red;*/ color: #ffff; border-bottom: 2px solid #fff;">
                                *<input type="checkbox" required> I hereby all my given data is correct.
                            </label>
                        </div>
                        <div class="clearfix"></div>
                        <!-- google captcha start-->
                        <div class="text-center text-md-left" style="margin-bottom: 20px;">
                            <div class="g-recaptcha" data-sitekey="6Le10DUaAAAAACMEbJeAZjslKVE7mbIm3rWnzqwB"></div>
                        </div>
                        <!-- google captcha end-->
                        <div class="clearfix"></div>
                        <div class="buttons-box clearfix">
                            <button class="btn full btn-transparent-black-inverse btn-block big" id="submit">Register Now</button>
                        </div>
                        <!-- .buttons-box -->
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </section>


    <!-- Scripts google re-captcha -->
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <style>
        .selectBox, .form-control{
            color: #ffffff;
        }
        .btn-transparent-black-inverse{
            color: #ffffff;
        }
    </style>

@endsection
