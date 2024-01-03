@extends('frontend.layouts.main')
@section('content')
    <style>
        .offer-card[data-v-0291216d] {
            border-radius: 20px;
            padding: 5px;
            background: linear-gradient(0deg, #FFFFFF 0%, #E9D298 100%);
            border: 1px solid #fff;
            box-shadow: 0 4px 17px #fffaeb 3px 4px 8px;
            -webkit-backdrop-filter: blur(30px);
            backdrop-filter: blur(30px);
        }

        .offer-card-footer[data-v-0291216d] {
            padding: 15px 10px 10px;
            grid-gap: 10px;
            gap: 10px;
        }

        p{
            text-align: justify;
        }
    </style>
    <div class="content-wrapper">
        <div class="breadcrumb-wrap bg-spring">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-8 col-sm-8">
                        {{-- <div class="breadcrumb-title">
                            <h2>Offers</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li>
                                    <a href="index.html">Home </a>
                                </li>
                                <li>Offers</li>
                            </ul>
                        </div> --}}
                    </div>
                    <div class="col-lg-5 col-md-4 col-sm-4 xs-none">
                        <div class="breadcrumb-img">
                            {{-- <img src="{{ asset('frontend') }}/assets/img/breadcrumb/breadcrumb-1.png" alt="Image"> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="container">
        <div class="row">
            @foreach ($menuIcons as $item)
                <div class="col-md-2 col-lg-2 col-sm-12  mt-2 mb-2 col-6">
                    <div data-v-0291216d="" class="offer-card">
                        <div data-v-0291216d="" class="offer-card-body">
                            <a href="{!! URL::route($item->url, ['id' => $item->submenu_id, 'menu_id' => 1]) !!}">
                                <img style="border-radius:5px;"
                                src="{{ url('frontend/assets/img/menu_icon/', $item->image) }}" alt="">
                            </a>
                            
                        </div>
                        <div data-v-0291216d="" class="offer-card-footer text-center">
                            <a data-v-0291216d="" href="{!! URL::route($item->url, ['id' => $item->submenu_id, 'menu_id' => 1]) !!}" class="btn style1">{{$item->display_name}}</a>
                            <!---->
                        </div>
                        <!---->
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center ">
            <strong class=" btn style1"  style="font-size:28px;">Account Type</strong>
        </div>

        <section class="service-wra style1 pt-100 pb-75">
            <div class="container">
                <div class="row gx-5 align-items-center">
                    <div class="col-xl-12 col-lg-12 service-card-wrap" scrolls style="opacity: 1">
                        <div class="row">
                            
                            <div class="col-md-4 mmt-50">
                                <div class="type-card style1">
                                    {{-- <span class="service-icon">
                                        <img src="{{ asset('frontend') }}/assets/img/service/dashboard.png"
                                            alt="Image" />
                                    </span> --}}
                                    <h3>
                                        <a href="javascript:void(0)" style="color:  #A78848">Supplier</a>
                                    </h3>
                                    <p style="font-size: 14px">
                                        Do you want to be a registered supplier of POCKET?
POCKET collaborates directly with suppliers, contractors, consultants, and intermediaries. If you are interested in establishing a contractual partnership with POCKET to deliver the necessary products or services, we invite you to complete the form below with the requested details. We will reach out to you promptly upon receiving your submission.

                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 mmt-50">
                                <div class="type-card style1">
                                    {{-- <span class="service-icon">
                                        <img src="{{ asset('frontend') }}/assets/img/service/dashboard.png"
                                            alt="Image" />
                                    </span> --}}
                                    <h3>
                                        <a href="javascript:void(0)" style="color:  #A78848">Merchant</a>
                                    </h3>
                                    <p style="font-size: 14px">
                                        Unlock the convenience of accepting digital payments from POCKET users with your very own POCKET Merchant Account. Gain access to an array of features, including the POCKET Merchant App, Merchant QR code, counter payment capabilities, round-the-clock payment collection, transaction history tracking, and much more!
                                        We appreciate your interest in becoming a POCKET Merchant. To initiate the process, kindly complete the form below. Rest assured, we will reach out to you promptly.                                        
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 mmt-50">
                                <div class="type-card style1">
                                    {{-- <span class="service-icon">
                                        <img src="{{ asset('frontend') }}/assets/img/service/dashboard.png"
                                            alt="Image" />
                                    </span> --}}
                                    <h3>
                                        <a href="javascript:void(0)" style="color:  #A78848">Payroll</a>
                                    </h3>
                                    <p style="font-size: 14px">
                                        Starting today, streamline your payment processes, including salaries and bonuses for your employees in garment companies, manufacturing firms, and corporations, effortlessly with POCKET Payroll Digital Disbursement Solutions. Ensure timely and secure digital payments to your organization's workforce, eliminating the need for cash transactions.
                                        To enroll your organization in POCKET’S system and take advantage of this convenient solution, kindly complete the form below. Expect to hear from us shortly to facilitate the onboarding process.

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>                   
                </div>
            </div>
        </section>
    </div>
@endsection
