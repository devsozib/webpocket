@extends('frontend.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="breadcrumb-wrap bg-spring">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="text-center ">
                           <h1>Download Pocket</h1>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
        {{-- @if ($breadcrumb) --}}
            {{-- @if ($breadcrumb->description != null) --}}
                <div data-v-b6d51246="" class="textCard container mb-5">
                    <div data-v-b6d51246="">                                           
                        <p style="text-align: justify">To begin, go to the Google Play Store or the App Store and download the POCKET App. After the completion of the download process, open the app and start the registration process. Although, you can also go to a local POCKET experience center to complete the registration process. It will make things easier in case you face difficulty registering by yourself.
                            The customer’s e-KYC verification will be completed. Application Download link </a>
                        </p>   
                        <div style="text-align: center">
                            <div class="app-btn">
                                <a href="{{ getAppUrl()->apple_url }}"><img
                                         style="width:150px" src="{{ asset('frontend') }}/assets/img/POCKET-IOS.png" alt="Image" /></a>
                                <a href="{{ getAppUrl()->andriod_url }}"><img
                                    style="width:150px" src="{{ asset('frontend') }}/assets/img/POCKET-Play.png" alt="" /></a>
                            </div>
                        </div>                                                                   
                    </div>
                </div>
            {{-- @endif
        @endif --}}
    </div>
    </div>
@endsection

