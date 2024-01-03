@extends('frontend.layouts.main')
@section('content')
<style>
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
                            <h2>{{ $smenu->display_name }}</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li>
                                    <a href="{{ url('/') }}">Home</a>
                                </li>
                                <li>{{ $smenu->display_name }} page</li>
                            </ul>
                        </div> --}}
                    </div>
                    <div class="col-lg-5 col-md-4 col-sm-4 xs-none">
                        <div class="breadcrumb-img">
                            {{-- @if ($breadcrumb)
                                @if ($breadcrumb->image != null)
                                    <img src="{{ url('frontend/assets/img/breadcrumb/', $breadcrumb->image) }}"
                                        alt="Image">
                                @endif
                            @endif --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="textCard-inner">
            <div class="section-heading">
                <h2 class="text-center"></h2>
            </div>
        </div>
        {{-- <div id="app">
            <tutorial-component :menu_id="{{ json_encode($smenu->menu_id) }}" :sub_menu_id="{{ json_encode($smenu->id) }}">
            </tutorial-component>
        </div> --}}
        {{-- @if ($breadcrumb)
            @if ($breadcrumb->description != null)
                <div data-v-b6d51246="" class="textCard container mb-3">
                    <div data-v-b6d51246="">
                        {!! $breadcrumb->description !!}
                    </div>
                </div>
            @endif
        @endif --}}

        <section class="faq-wrap">
            <div class="container">
              <div class="row gx-5 align-items-center">               
                <div class="col-lg-12">
                  <div class="accordion style2" id="accordionExample">
                    <div class="accordion" id="accordionExample">
                                        
                        <section class="feature-wrap  pb-75 bg-albastor">
                            <div class="container">
                                <div class="section-title style1 text-center mb-40">
                                    <h2>Pocket Business</h2>
                                    <div scrolls-anim="fade-up" scrolls-easing="ease-in" style="opacity: 1;">                    
                                        <h5>POCKET Offers diversified business opportunities for small to larger business communities. <br>One can easily join POCKET Business Wallet and get the privileged service through the web portal and dashboard.    </h5>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-xl-4 col-lg-6 col-md-6" scrolls="" scrolls-anim="fade-left" scrolls-duration="1000">
                                        <div class="feature-card style1"  style="min-height: 230px">
                                            <div class="feature-info">
                                                <div class="feature-title">                                
                                                    <h3 style="font-size:20px">Online Business Solution</h3>
                                                </div>
                                                <p  style="font-size:13px">
                                                    Discover how POCKET offers seamless and secure online payment solutions for your business. Our cutting-edge features include a versatile payment gateway, tokenized checkout, subscription payments, instant refunds, direct charges, B2C & B2B payouts and APIs ensuring hassle-free transactions with your customers.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="feature-card style1"  style="min-height: 230px">
                                            <div class="feature-info">
                                                <div class="feature-title">                               
                                                    <h3 style="font-size:20px">Merchant Services</h3>
                                                </div>
                                                <p  style="font-size:13px">
                                                    Elevate your business with a POCKET Merchant Account, enabling you to accept digital payments from POCKET users. Our secure platform is complemented by the POCKET Merchant App, Merchant QR codes, counter payments, 24/7 payment collection, transaction history and more, making payment acceptance a breeze.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6" scrolls="" scrolls-anim="fade-right"
                                        scrolls-duration="1000">
                                        <div class="feature-card style1"  style="min-height: 230px">
                                            <div class="feature-info">
                                                <div class="feature-title">                                
                                                    <h3 style="font-size:20px">Educational Institutions</h3>
                                                </div>
                                                <p  style="font-size:13px">
                                                    POCKET simplifies fee collection and grant disbursement for educational institutions. Benefit from 24/7 remote financial transactions, fee collection tools, real-time checkout options, a comprehensive reporting portal, and efficient disbursement solutions to empower your institution.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-xl-3 col-lg-6 col-md-6" scrolls="" scrolls-anim="fade-left" scrolls-duration="1000">
                                        <div class="feature-card style1">
                                            <div class="feature-info">
                                                <div class="feature-title">                                
                                                    <h3 style="font-size:20px">Payroll Excellence</h3>
                                                </div>
                                                <p  style="font-size:13px">
                                                    Empower your RMG companies, manufacturing firms and corporations with digitized payroll solutions. Ensure timely salary disbursements to employees' POCKET accounts, boosting workforce efficiency and productivity while enhancing overall security.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6">
                                        <div class="feature-card style1">
                                            <div class="feature-info">
                                                <div class="feature-title">                               
                                                    <h3 style="font-size:20px">Corporate & Enterprise Solutions</h3>
                                                </div>
                                                <p  style="font-size:13px">
                                                    Leverage POCKET's Corporate Disbursement and Collection Solutions to streamline financial transactions within your organization. Effortlessly disburse funds to employees, DSOs, retailers, and partners, facilitating daily business operations. Receive payments from consumers, retailers, and distributors with ease.
                                                </p>
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="col-xl-3 col-lg-6 col-md-6" scrolls="" scrolls-anim="fade-right"
                                    scrolls-duration="1000">
                                    <div class="feature-card style1">
                                        <div class="feature-info">
                                            <div class="feature-title">                                
                                                <h3 style="font-size:20px">Microfinance Transformation</h3>
                                            </div>
                                            <p  style="font-size:13px">
                                                Digitize microfinance payments with POCKET's collection and disbursement solutions. Optimize operational efficiency and transparency within your branch operations while enhancing the overall effectiveness of your microfinance institution.
                                            </p>
                                        </div>
                                    </div>              
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6" scrolls="" scrolls-anim="fade-right"
                                    scrolls-duration="1000">
                                    <div class="feature-card style1">
                                        <div class="feature-info">
                                            <div class="feature-title">                                
                                                <h3 style="font-size:20px">Supplier Collaboration</h3>
                                            </div>
                                            <p style="font-size:13px">
                                                Partner directly with POCKET as an individual or business owner. Establish a contractual relationship to provide products and services as needed, connecting with our pool of suppliers, contractors, consultants, and intermediaries.
                                            </p>
                                        </div>
                                    </div>              
                                    </div>
                                </div>
                                </div>
                            </div>
                        </section>
                  </div>                                      
                </div>              
              </div>
            </div>
          </section>
    </div>
    </div>
@endsection

