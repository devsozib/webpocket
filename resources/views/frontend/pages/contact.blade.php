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

        <section class="contact-wrap pt-75 pb-100">
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
                <div class="row justify-content-center">
                    <div class="col-2">

                    </div>
                    <div class="col-8">
                        <div class="text-center">
                            <strong>CONTACT US:</strong>
                            <p style="text-align: justify">                                    
                                If you have any questions, concerns, or requests regarding this Privacy Policy or our privacy practices, please contact us at- feedback@abgpocket.com
                                We will make reasonable efforts to address your concerns and respond to your inquiries in a timely manner. Please note that this Privacy Policy applies only to the information collected by Pocket and does not cover the practices of third-party websites or services that we do not control.
                            </p>
                        </div>
                    </div>
                    <div class="col-2">

                    </div>
                </div>
                {{-- <div class="comp-map pb-100">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8385385572983!2d144.95358331584498!3d-37.81725074201705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4dd5a05d97%3A0x3e64f855a564844d!2s121%20King%20St%2C%20Melbourne%20VIC%203000%2C%20Australia!5e0!3m2!1sen!2sbd!4v1612419490850!5m2!1sen!2sbd"></iframe>
                </div> --}}
            </div>
            <div class="contact-form-area ptb-100 bg-albastor">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-5">
                            <div class="contact-item">
                                
                                <div class="contact-info">
                                    <h3>Helpline</h3>
                                    <p style="text-align: justify">16800 or 09611816800<br>(accessible from any Robi, GP, Banglalink, TeleTalk, Airtel and BTCL Number)</p>
                                </div>
                                <div class="contact-info">
                                    <h3>Email</h3>
                                    <p>support@abgpocket.com</p>
                                </div>
                                <div class="contact-info">
                                    <h3>Customer Care Addresses</h3>
                                    <p style="text-align: justify">ABG Tower, Plot# 440, 441 & 442, Road - 18, Block# A, Bashundhara R/A</p>
                                </div>
                                <div class="contact-info">
                                    <h3>Customer Care Service Timing</h3>
                                    <p style="text-align: justify">POCKET Customer Care operational hours will be as per the below schedule:
                                        Customer Care: 08:00 AM to 10:00 PM
                                    </p>
                                </div>
                                <div class="contact-info">
                                    <h3>Corporate Address</h3>
                                    <p style="text-align: justify">ABG Tower, Plot# 440, 441 & 442, Road - 18, Block# A, Bashundhara R/A</p>
                                </div>
                            </div>                            
                        </div>
                        <div class="col-xl-7  col-lg-7">
                            <div class="content-title style1 text-center mb-40">
                                <span>Send Us A Message</span>
                                <h2>Do You have Any Questions?</h2>
                            </div>
                            <div class="contact-form">
                                <form class="form-wrap" action="{{ route('send-message') }}" method="post" id="contactForms">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="name" placeholder="Your Name*" id="name"
                                                    required data-error="Please enter your name" />
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" name="email" id="email" required
                                                    placeholder="Your Email*" data-error="Please enter your email*" />
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="number" name="phone" id="phone" required
                                                    placeholder="Phone Number"
                                                    data-error="Please enter your phone number" />
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="msg_subject" placeholder="Subject"
                                                    id="msg_subject" required data-error="Please enter your subject" />
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group v1">
                                                <textarea name="message" id="message" placeholder="Your Messages.." cols="30" rows="10" required
                                                    data-error="Please enter your message"></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <button type="submit" class="btn style1 w-100 d-block">
                                                Send Message
                                            </button>
                                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
    </div>
    </div>
@endsection
