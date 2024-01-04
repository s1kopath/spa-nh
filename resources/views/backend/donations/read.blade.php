@extends('backend.admin_master')
@section('admin_main_content')

    <main class="main-wrapper clearfix">
        <!-- Page Title Area -->
        <div class="row page-title clearfix">
            <div class="page-title-left">
                <h5 class="mr-0 mr-r-5">
                    View Donation
                </h5>
            </div>
            <!-- /.page-title-left -->
            <div class="page-title-right d-inline-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{URL::to('/dashboard')}}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">
                        View Donation
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

                            <form id="edit-add-form" role="form"
                                  action="#"
                                  method="POST" enctype="multipart/form-data" autocomplete="off">

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Doner Name:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" value="{{$donationData->doner_name}}" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Doner Email:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text"
                                               value="{{$donationData->doner_email}}"
                                               readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" class="form-control-label">Doner Phone:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text"
                                               value="{{$donationData->doner_phone}}"
                                               readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Doner Business/Organization Name:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text"
                                               value="{{$donationData->doner_organization}}"
                                               readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Doner Message:</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" rows="3" readonly>{{$donationData->doner_message}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Donation Amount:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text"
                                               value="{{$donationData->donation_amount}}"
                                               readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Payment Method:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text"
                                               value="{{$donationData->payment_method}}"
                                               readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Receiver Bkash No:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text"
                                               value="{{$donationData->receiver_bkash_no}}"
                                               readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Sender Bkash No:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text"
                                               value="{{$donationData->sender_bkash_no}}"
                                               readonly>
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

@endsection
