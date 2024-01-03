@extends('frontend.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="breadcrumb-wrap bg-spring">
            <div class="container">
                <div class="row align-items-center">
                    {{-- <div class="col-lg-7 col-md-8 col-sm-8">
                        <div class="breadcrumb-title">
                            <h2>About Us</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li>
                                    <a href="index.html">Home </a>
                                </li>
                                <li>About Us</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-4 col-sm-4 xs-none">
                        <div class="breadcrumb-img">
                            <img src="{{ asset('frontend') }}/assets/img/breadcrumb/breadcrumb-1.png" alt="Image">
                        </div>
                    </div> --}}
                    <div class="text-center ">
                        <strong class="border-bottom" style="font-size:44px">Our Vision</strong> <br> <h1>One app for all financial solutions.</h1>
                    </div>
                      
                    
                </div>
            </div>
        </div>
        <section class="about-wrap style1 ptb-100 mb-5">
            <div class="container">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img-wrap" scrolls="" scrolls-anim="fade-left" scrolls-duration="1000">
                            {{-- <img src="{{ asset('frontend') }}/assets/img/about/about--1.png" alt="Image"
                                class="about--one bounce" /> --}}
                            {{-- <img src="{{ asset('frontend') }}/assets/img/about/about--2.png" alt="Image"
                                class="about--two moveHorizontal" /> --}}
                            <img style="border-radius:20px; box-shadow: rgba(0, 0, 0, 0.2) 0px 18px 50px -10px;"
                                src="{{ asset('frontend') }}/assets/img/about/{{ getAP()->img }}"
                                alt="Image" class="about-img" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content" scrolls="" scrolls-anim="fade-right" scrolls-duration="1000">
                            {{-- <img src="{{ asset('frontend') }}/assets/img/about/about--3.png" alt="Image"
                                class="about--three" /> --}}
                            <div class="content-title style1">
                                <h2>{{ getAP()->title }}</h2>
                                <p style="text-align: justify;">
                                    {!!  getAP()->description !!}
                                </p>
                            </div>                        
                            {{-- <ul class="content-feature-list style1 list-style">
                                @foreach (explode(',', getAP()->list) as $item)
                                <li>
                                    <span><i class="flaticon-tick"></i></span>{{ $item }}
                                </li>
                                @endforeach  
                            </ul> --}}                     
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="service-wra style1 mb-5">
            <div class="container">
                <div class="row gx-5 align-items-center">
                    <div class="col-xl-12 col-lg-12 service-card-wrap" scrolls style="opacity: 1">
                        <div class="row">
                            
                            <div class="col-md-6 mmt-50">
                                <div class="mission-card style1">
                                    {{-- <span class="service-icon">
                                        <img src="{{ asset('frontend') }}/assets/img/service/dashboard.png"
                                            alt="Image" />
                                    </span> --}}
                                    <h3>
                                        <a href="service-details.html">MISSION</a>
                                    </h3>
                                    <p style="text-align: justify;">
                                        Our mission is to simplify and enhance the way people transact and manage their finances in Bangladesh. We aim to provide a secure, user-friendly, and inclusive e-wallet platform that promotes financial empowerment, drives economic growth and fosters a cashless society.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 mmt-50">
                                <div class="mission-card style1">
                                    {{-- <span class="service-icon">
                                        <img src="{{ asset('frontend') }}/assets/img/service/dashboard.png"
                                            alt="Image" />
                                    </span> --}}
                                    <h3>
                                        <a href="service-details.html">RECOGNITION</a>
                                    </h3>
                                    <p style="text-align: justify;">
                                        ABG TECHNOLOGIES LIMITED has been licensed by Bangladesh Bank as a payment service provider on 18 May, 2023 within just one year after its incorporation. The company has been awarded ISO/IEC 27001:2013 certification in information security management systems and PCI/DSS certification for data security standards (version 3.2.1) endorsed by VISA, MasterCard and other leading card brands
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>                   
                </div>
            </div>
        </section>
        
        <section class="shopping-wrap pb-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-12 order-lg-1 order-2">
                        <div class="shopping-content">
                            <div class="content-title style1 ">                               
                                <h2>{{ getCP()->title }}</h2>
                                <p style="text-align: justify;">{{  getCP()->description }} </p>
                            </div>                         
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 order-lg-2 order-1">
                        <div class="shopping-img-wrap">
                            <img style="box-shadow: rgba(3, 30, 3, 0.1) 0px 1px 1px 0px inset, rgba(93, 87, 50, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px; border-radius:10px" src="{{ asset('frontend') }}/assets/img/{{ getCP()->img }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
   
        <section class="app-wrap style3 pb-75">
            <div class="container">
                <div class="row  gx-5">
                    <div class="col-lg-6" style="text-align: center">
                        <div class="app-img-wrap mt-3" scrolls="" scrolls-anim="fade-right" scrolls-duration="1000">
                            <img class="bounce" style="width: 250px; border-radius:23px"
                                src="{{ asset('frontend') }}/assets/img/app/{{ getAppDev()->img }}" alt="Image" />
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="app-content" scrolls="" scrolls-anim="fade-left" scrolls-duration="1000">
                            <div class="content-title style1 ">
                                <h1 style="color: #08281C;">{{ getAppDev()->title }}</h1>
                                <p style="text-align: justify;">
                                  {{ getAppDev()->description }}
                                </p>
                            </div>
                            <div class="app-btn">
                                <a href="{{ getAppUrl()->apple_url }}"><img
                                    style="width:150px" src="{{ asset('frontend') }}/assets/img/POCKET-IOS.png" alt="Image" /></a>
                                <a href="{{ getAppUrl()->andriod_url }}"><img
                                    style="width:150px" src="{{ asset('frontend') }}/assets/img/POCKET-Play.png" alt="" /></a>
                            </div>

                            <div class="mt-3">
                                <h1 style="color: #08281C;" class="text-uppercase">How to use Pocket</h1>
                                <p style="text-align: justify;">
                                    One can easily download the POCKET Customer app from the App Store & Google Play Store and sign up for POCKET by himself. You’ll need an Android or iOS device with an internet connection to use the Application. 
                                </p>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </section>



    </div>
@endsection
