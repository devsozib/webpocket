@extends('frontend.layouts.main')
@section('content')
<style>
    p{
        text-align: justify!important;
    }
</style>
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
                   
                      
                    
                </div>
            </div>
        </div>
        <section class="about-wrap style1 ptb-100">
            <div class="container">
                <div class="row gx-5 align-items-center">       
                           
                    <div class="col-lg-12">
                        <div class="about-content" scrolls="" scrolls-anim="fade-right" scrolls-duration="1000">
                            {{-- <img src="{{ asset('frontend') }}/assets/img/about/about--3.png" alt="Image"
                                class="about--three" /> --}}
                            @if ( request()->path() == 'online-business-solution')
                            <div class="content-title style1">
                                <div class="service-card style1">
                                    <h4> ONLINE BUSINESS SOLUTIONS</h2>
                                     <p>
                                        Discover how POCKET offers seamless and secure online payment solutions for your business. Our cutting-edge features include a versatile payment gateway, tokenized checkout, subscription payments, instant refunds, direct charges, B2C & B2B payouts and APIs ensuring hassle-free transactions with your customers.
                                     </p>
                                </div>                               
                            </div>
                            @elseif (request()->path() == 'merchant-services')
                            <div class="content-title style1">
                                <div class="service-card style1">
                                    <h4>MERCHANT SERVICES</h2>
                                     <p>
                                        Elevate your business with a POCKET Merchant Account, enabling you to accept digital payments from POCKET users. Our secure platform is complemented by the POCKET Merchant App, Merchant QR codes, counter payments, 24/7 payment collection, transaction history and more, making payment acceptance a breeze.
                                     </p>
                                </div>                               
                            </div>
                            @elseif (request()->path() == 'educational-institutions')
                            <div class="content-title style1">
                                <div class="service-card style1">
                                    <h4>EDUCATIONAL INSTITUTIONS</h2>
                                     <p>
                                        EDUCATIONAL INSTITUTIONS
                                        POCKET simplifies fee collection and grant disbursement for educational institutions. Benefit from 24/7 remote financial transactions, fee collection tools, real-time checkout options, a comprehensive reporting portal, and efficient disbursement solutions to empower your institution.
                                     </p>
                                </div>                               
                            </div>
                            @elseif (request()->path() == 'payroll-excellence')
                            <div class="content-title style1">
                                <div class="service-card style1">
                                    <h4>PAYROLL EXCELLENCE</h2>
                                     <p>
                                        Empower your RMG companies, manufacturing firms and corporations with digitized payroll solutions. Ensure timely salary disbursements to employees' POCKET accounts, boosting workforce efficiency and productivity while enhancing overall security.
                                     </p>
                                </div>                               
                            </div>
                            @elseif (request()->path() == 'corporate-enterprise-solutions')
                            <div class="content-title style1">
                                <div class="service-card style1">
                                    <h4>CORPORATE & ENTERPRISE SOLUTIONS</h2>
                                     <p>  
                                        Leverage POCKET's Corporate Disbursement and Collection Solutions to streamline financial transactions within your organization. Effortlessly disburse funds to employees, DSOs, retailers, and partners, facilitating daily business operations. Receive payments from consumers, retailers, and distributors with ease.
                                     </p>
                                </div>                               
                            </div>
                            @elseif (request()->path() == 'microfinance-transformation')
                            <div class="content-title style1">
                                <div class="service-card style1">
                                    <h4>MICROFINANCE TRANSFORMATION</h2>
                                     <p>
                                        Digitize microfinance payments with POCKET's collection and disbursement solutions. Optimize operational efficiency and transparency within your branch operations while enhancing the overall effectiveness of your microfinance institution.
                                     </p>
                                </div>                               
                            </div>
                            @else
                            <div class="content-title style1">
                                <div class="service-card style1">
                                    <h4>SUPPLIER COLLABORATION</h2>
                                     <p>
                                        Partner directly with POCKET as an individual or business owner. Establish a contractual relationship to provide products and services as needed, connecting with our pool of suppliers, contractors, consultants, and intermediaries.
                                     </p>
                                </div>                               
                            </div>
                            @endif
                     
                            
                            {{-- <a href="about.html" class="btn style1">More About us</a> --}}
                        </div>
                    </div>
                  
                </div>
            </div>
        </section>

    


    </div>
@endsection
