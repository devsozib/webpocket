@extends('frontend.layouts.main')
@section('content')
    {{-- <div class="content-wrapper">
        <div class="breadcrumb-wrap bg-spring">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-8 col-sm-8">
                        <div class="breadcrumb-title">
                            <h2>{{ $smenu->display_name }}</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li>
                                    <a href="{{ url('/') }}">Home</a>
                                </li>
                                <li>{{ $smenu->display_name }} page</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-4 col-sm-4 xs-none">
                        <div class="breadcrumb-img">
                            @if ($breadcrumb)
                                @if ($breadcrumb->image != null)
                                    <img src="{{ url('frontend/assets/img/breadcrumb/', $breadcrumb->image) }}"
                                        alt="Image">
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
     --}}
        {{-- @if ($breadcrumb) --}}
            {{-- @if ($breadcrumb->description != null) --}}
                <div data-v-b6d51246="" class="textCard container mb-3 pt-3" style="margin-top: 100px">
                    <div data-v-b6d51246="">
                        <strong>Helpline</strong>
                        <p>16800 or 09611800000</p>
                       <p> (accessible from any Robi, GP, Banglalink, TeleTalk, Airtel and BTCL Number)</p>

                        <strong>Email</strong>
                        <p> support@pocket.com</p>
                        <p>
                            Customer Care Addresses
                           <p> ABG Tower, Plot# 440, 441 & 442, Road - 18, Block# A, Bashundhara R/A</p>
                           <p> Customer Care Service Timing</p>
                            <p>POCKET Customer Care operational hours will be as per the below schedule:</p>
                           <p> Customer Care: 09:00 AM to 7:00 PM [Except Friday and Govt. Holidays]</p>
                        </p>

                        <p>For getting uninterrupted service, please contact us 24/7 through</p>
                      <p>  Call to 16800</p>
                      <p>  Email: support@pocket.com</p>
                       <p> Live Chat: https://www.abgpocket.com/help/livechat</p>
                        <p>Facebook fan page: https://www.facebook.com/abgpocket</p>

                        <p>Corporate Address</p>
                        <p>ABG Tower, Plot# 440, 441 & 442, Road - 18, Block# A, Bashundhara R/A</p>

                    </div>
                </div>
            {{-- @endif
        @endif --}}
    </div>
    </div>
@endsection
@vite('resources/js/app.js')
