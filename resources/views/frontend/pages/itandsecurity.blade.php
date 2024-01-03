@extends('frontend.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="breadcrumb-wrap bg-spring">
            <div class="container">
                {{-- <div class="row align-items-center">
                    <div class="col-lg-7 col-md-8 col-sm-8">
                        <div class="breadcrumb-title">
                            <h2>Contact Us</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="index.html">Home </a></li>
                                <li>Contact</li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-lg-5 col-md-4 col-sm-4 xs-none">
                        <div class="breadcrumb-img">
                            <img src="{{ asset('frontend') }}/assets/img/breadcrumb/breadcrumb-1.png" alt="Image" />
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>

        <section class="contact-wrap pt-100">
            <div class="container">
                {{-- <div class="row justify-content-center pb-75">
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-item">
                            <span class="contact-icon">
                                <i class="flaticon-map"></i>
                            </span>
                            <div class="contact-info">
                                <h3>Our Location</h3>
                                <p>Dhaka, Bangladesh</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-item">
                            <span class="contact-icon">
                                <i class="flaticon-email-2"></i>
                            </span>
                            <div class="contact-info">
                                <h3>Email Us</h3>
                                <a href="mail:support@pocket.com"><span class="__cf_email__"
                                        data-cfemail="support@pocket.com">support@pocket.com</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-item">
                            <span class="contact-icon">
                                <i class="flaticon-phone-call"></i>
                            </span>
                            <div class="contact-info">
                                <h3>Helpline
                                </h3>
                                <a href="tel:09611800000">16800 or 09611800000</a>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="row justify-content-center mb-4">
                    <div class="col-2">

                    </div>
                    <div class="col-8">
                        <div class="text-center">
                            <h4>It Security Policy</strong>                          
                        </div>
                    </div>
                    <div class="col-2">

                    </div>
                </div>
                <iframe src="{{ asset('frontend/assets/ISMS_Policy.pdf') }}" width="100%" height="600">
                    This browser does not support PDFs. Please download the PDF to view it: <a href="{{ asset('frontend/assets/ISMS_Policy.pdf') }}">Download PDF</a>
                </iframe>
            </div>
            <div class="contact-form-area ptb-100 bg-albastor">
                <div class="container">
                    <div class="row">
                        
                        
                    </div>
                </div>
            </div>
        </section>
    </div>
    </div>
    
@endsection
