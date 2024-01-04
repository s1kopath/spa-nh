@extends('frontend.home_master')
@section('home_content')


    <div class="page-header">
        <div class="container">
            <h1 class="title">Donate Us</h1>
        </div>
        <div class="breadcrumb-box">
            <div class="container">
                <ul class="breadcrumb">
                    <li>
                        <a href="{{route('/')}}">Home</a>
                    </li>
                    <li class="active">Donate Us</li>
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
                          action="{{route('donation.store')}}"
                          method="POST"{{-- enctype="multipart/form-data"--}} {{--autocomplete="off"--}}>

                        {{ csrf_field() }}

                        <h3 class="title text-center text-white">Make a contribution.</h3>
                        <p class="text-white">please provide us your information after making the bkash donation.({{\App\Donation::BKASH_NO_1}})<p/>

                        <!--Alert messages start-->
                            @include('frontend.partials.alert_messages')
                        <!--Alert messages end-->

                        <input type="text" placeholder="Name *" name="doner_name" id="doner_name" class="form-control bg-white" required/>

                        <input type="email" placeholder="Email *" name="doner_email" id="doner_email" class="form-control bg-white" required/>

                        <input type="tel" placeholder="Phone *" name="doner_phone" id="doner_phone" class="form-control bg-white" required/>

                        <input type="text" placeholder="Doners Business/Organization name *" name="doner_organization" id="doner_organization" class="form-control bg-white" required/>

                        <textarea placeholder="Your valuable message to us" rows="2"
                                  class="form-control bg-white" name="doner_message"
                                  id="doner_message"></textarea>

                        <input type="number" placeholder="Donation Amount *" name="donation_amount" id="donation_amount" class="form-control bg-white" required/>

                        <select class="form-control bg-white" id="payment_method" name="payment_method" required>
                            <option value="" disabled selected>Select Payment Method*</option>
                            <option value="{{\App\Donation::PAYMENT_METHOD_1}}">{{\App\Donation::PAYMENT_METHOD_1}}</option>
                        </select>

                        <select class="form-control bg-white" id="receiver_bkash_no" name="receiver_bkash_no" required>
                            <option value="" disabled selected>Select Bkash No*</option>
                            <option value="{{\App\Donation::BKASH_NO_1}}">{{\App\Donation::BKASH_NO_1}}</option>
                        </select>

                        <input type="text" placeholder="Senders bkash No*" name="sender_bkash_no" id="sender_bkash_no" class="form-control bg-white" required/>

                        <div class="clearfix"></div>
                        <!-- google captcha start-->
                        <div class="text-center text-md-left" style="margin-bottom: 20px;">
                            <div class="g-recaptcha" data-sitekey="6Le10DUaAAAAACMEbJeAZjslKVE7mbIm3rWnzqwB"></div>
                        </div>
                        <!-- google captcha end-->
                        <div class="clearfix"></div>
                        <div class="buttons-box clearfix">
                            <button class="btn full btn-transparent-black-inverse btn-block big" id="submit" style="color: #ffffff;">Register Now</button>
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

@endsection
