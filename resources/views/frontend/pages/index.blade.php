@extends('frontend.layouts.main')
@section('content')
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <style>
        .slick-prev,
        .slick-next {
            /* background: #fff; */
            border: none;
            border-radius: 50%;
            box-shadow: 0 0 0.375rem rgba(0, 0, 0, .1);
            border-radius: 50%;
            font-size: 0px;
            height: 38px;
            line-height: 38px;
            position: absolute;
            top: 50%;
            display: block;
            width: 38px;
            padding: 9px;
            -webkit-transform: translate(0, -50%);
            -ms-transform: translate(0, -50%);
            transform: translateY(-50%);
            cursor: pointer;
            color: #333;
            outline: none;
            background: linear-gradient(0deg, #AF9252 0%, #E9D298 100%);
            ;
            z-index: 999;
        }

        .slick-prev:hover,
        .slick-prev:focus,
        .slick-next:hover,
        .slick-next:focus {
            color: #ffda7a;
            outline: none;
            background: #08281C;
        }

        .slick-slide img {
            box-shadow: #fffaeb 3px 4px 8px;
            display: block;
            border-radius: 10px;
            padding: 10px;
        }

        @media (max-width: 767px) {
            .slick-slide img {
                box-shadow: #fffaeb 3px 4px 8px;
                display: block;
                border-radius: 10px;
                width: 100px;
                padding: 10px;
            }

            .card-title {
                font-size: 15px;
            }
            .owl-carousel .owl-dots button.owl-dot {
            display: inline-block;
            margin: 0 6px;
            position: relative;
            bottom: 20px;
            }

            .slick-slide img {
                box-shadow: #fffaeb 3px 4px 8px;
                display: block;
                border-radius: 10px;
                width: 73px;
                padding: 10px;
            }
           
                

        }

        .owl-dots {
            text-align: center;
        }

        .offer-card[data-v-0291216d] {
            border-radius: 10px;
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
        @media only screen and (max-width: 767px) {
        .hero-wrap {
            margin-top: 65px!important;
        }
        .content-wrapper {
            margin-top: 65px!important;
        }
    }
    </style>
    <section class="hero-wrap style1">
        <div class="owl-one owl-carousel owl-theme">
            @foreach ($sliders as $item)
                <div class="hero-slide-item">
                    {{-- <div class="container"> --}}
                        <div class="row align-items-center">
                            {{-- <div class="col-lg-7">
                                <div class="hero-content">
                                    <h1>{{ $item->title }}</h1>
                                    <p>
                                        {{ $item->description }}
                                    </p>
                                    <a href="{{ route($item->btn_url) }}" class="btn style6">{{ $item->btn_text }}</a>
                                </div>
                            </div> --}}
                            <div class="col-lg-12">
                                <div class="hero-img-wrap">
                                    <img src="{{ asset('frontend/assets/img/hero/' . $item->image) }}" alt="Image" />
                                </div>
                            </div>
                        {{-- </div> --}}
                    </div>
                </div>
            @endforeach
        </div>
    </section>



    <section class="about-wrap style1" style="margin-top: -20px">
        <div class="container">
            <div class="slick-slider">
                @foreach ($menuIcons as $item)
                    <div>
                        <div class="card align-items-center text-center bg-transparent" style="border:none;">
                            <img data-src="{{ url('frontend/assets/img/menu_icon/', $item->image) }}"
                                src="{{ url('frontend/assets/img/menu_icon/', $item->image) }}" class="img-fluid aspect-1x1"
                                width="{{ $item->display_name == 'Bill Payment' ? '90' : '110' }}" alt="Add Money">
                            <div class="card-body pt-1 pt-md-2 pb-0 px-0">
                                <a href="{!! URL::route($item->url, ['id' => $item->submenu_id, 'menu_id' => 1]) !!}" class="stretched-link card-link" tabindex="0">
                                    <p style="font-size: 18px; margin-top:-18px; font-family:'Open Sans', sans-serif;" class="card-title mb-0" >{{ $item->display_name }}</p>                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- <div class="owl-two owl-carousel owl-theme" id="slider">
                @foreach ($menuIcons as $item)
                    <div class="item">
                        <div class="card align-items-center text-center bg-transparent" style="border:none;">
                            <img data-src="{{ url('frontend/assets/img/menu_icon/', $item->image) }}"
                                src="{{ url('frontend/assets/img/menu_icon/', $item->image) }}"
                                style="width: {{ $item->display_name == 'Bill Payment' ? '90px' : '100px' }}"
                                class="img-fluid aspect-1x1" width="" alt="Add Money">
                            <div class="card-body pt-2 pt-md-2 pb-0 px-0">
                                <a href="{!! URL::route($item->url, ['id' => $item->submenu_id, 'menu_id' => 1]) !!}" class="stretched-link card-link" tabindex="0">
                                    <h6 class="card-title fw-normal mb-0">{{ $item->display_name }}</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div> --}}
        </div>
    </section>
    <section class="about-wrap style1 " style="margin-top: 20px">
        <div class="container">
            <div class="owl-two owl-carousel owl-theme">
                @foreach ($offers as $item)
                    <div class="item">
                        <div data-v-0291216d="" class="offer-card">
                            <div data-v-0291216d="" class="offer-card-body">
                                <img style="border-radius:5px;"
                                    src="{{ asset('frontend/assets/img/offer/' . $item->thumb_image) }}" alt="">
                            </div>
                            <div data-v-0291216d="" class="offer-card-footer text-center">
                                <!--<a data-v-0291216d="" href="{{ route('offers.details', $item->id) }}" class="btn style1">View-->
                                <!--    offer</a>-->
                                <a data-v-0291216d="" href="javascript:void(0)"javascript:void(0) class="btn style1">View
                                    offer</a>
                                <!---->
                            </div>
                            <!---->
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="app-wrap style3 pt-5">
        <div class="container">
            <div class="row align-items-center gx-5">
                <div class="col-lg-6">
                    <div class="app-content text-center" scrolls="" scrolls-anim="fade-left" scrolls-duration="1000">
                        <div class="content-title style1 ">
                            <h2 style="font-size:44px;color: #08281C;">{{ getAppDev()->title }}</h2>
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
                    </div>
                </div>
                <div class="col-lg-6" style="text-align: center">
                    <div class="app-img-wrap mt-3" scrolls="" scrolls-anim="fade-right" scrolls-duration="1000">
                        <img class="bounce" style="width: 250px; border-radius:23px"
                            src="{{ asset('frontend') }}/assets/img/app/{{ getAppDev()->img }}" alt="Image" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="service-wrap style1 pt-75 pb-75">
        <div class="container">
            <div class="row gx-5 align-items-center">
                <div class="col-xl-6 col-lg-12 service-card-wrap" scrolls style="opacity: 1">
                    <div class="row">
                        <div class="col-md-6 mmt-50">

                            <div class="service-card style1">
                                <span class="service-icon">
                                    <img src="{{ asset('frontend') }}/assets/img/service/payment.png" alt="Image" />
                                </span>
                                <h3>
                                    <a href="javscript:void(0)">Add Money</a>
                                </h3>
                                <p style="font-size: 14px; text-align: justify;">
                                    Easily boost your POCKET account balance from the comfort of your home through various convenient options, while you transferring funds from your bank account or using your debit card. Simply link your account to access the hassle-free bank deposit feature.
                                </p>
                            </div>
                            <div class="service-card style1">
                                <span class="service-icon">
                                    <img src="{{ asset('frontend') }}/assets/img/service/dashboard.png" alt="Image" />
                                </span>
                                <h3>
                                    <a href="javscript:void(0)">Send Money</a>
                                </h3>
                                <p style="font-size: 14px; text-align: justify;">
                                    Send money to any POCKET number with only a few clicks. Now, you can send money easily through the POCKET App without any worry. Also, no need to worry about cash-out charges.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6" scrolls style="opacity: 1">
                            <div class="service-card style1">
                                <span class="service-icon">
                                    <img src="{{ asset('frontend') }}/assets/img/service/dashboard.png" alt="Image" />
                                </span>
                                <h3><a href="javscript:void(0)l">Mobile Recharge</a></h3>
                                <p style="font-size: 14px; text-align: justify;">                                    
                                    Recharge your mobile easily with POCKET. Stay connected effortlessly with prepaid or postpaid airtime, data, and bundles. Plus, buy popular packs in a few taps.
                                </p>
                            </div>
                            <div class="service-card style1">
                                <span class="service-icon">
                                    <img src="{{ asset('frontend') }}/assets/img/feature/payment-methods.png"
                                        alt="Image" />
                                </span>
                                <h3>
                                    <a href="javscript:void(0)">Merchant Payment</a>
                                </h3>
                                <p style="font-size: 14px; text-align: justify;">
                                    Go cashless with the POCKET App. Shop, dine, and pay seamlessly at merchants nationwide. Use your account for quick, secure transactions. It's a convenient, lightning-fast solution for your payments.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12" scrolls style="opacity: 1">
                    <div class="service-content">
                        <div class="content-title style1">                           
                            <h2 style="font-size:44px">{{ getPS()->title }}</h2>
                            <p style="text-align: justify;">{{ getPS()->description }}</p>                          
                        </div>
                        <a href="{{ route('all.services') }}" class="btn style1">View All Services</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta-wrap style1 ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="content-title style1 text-center mb-40">
                        <div class="text-center ">
                            <strong class="border-bottom" style="font-size:20px">Our Vision</strong> <br> <h2 style="font-size: 44px">One app for all financial solutions.</h2>
                        </div>
                    </div>
                    <div class="cta-btn d-flex justify-content-center">
                        <a href="login.html" class="btn style1">Personal Account</a>
                        <a href="login.html" class="btn style3">Business Account</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <section class="about-wrap style1 ptb-100">
        <div class="container">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <div class="about-img-wrap" scrolls="" scrolls-anim="fade-left" scrolls-duration="1000">                   
                        <img style="border-radius:20px; box-shadow: rgba(0, 0, 0, 0.2) 0px 18px 50px -10px;"
                            src="{{ asset('frontend') }}/assets/img/about/{{ getAP()->img }}"
                            alt="Image" class="about-img" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content" scrolls="" scrolls-anim="fade-right" scrolls-duration="1000">                     
                        <div class="content-title style1">
                            <h2>{{ getAP()->title }}</h2>
                            <p style="text-align: justify;">
                                {!!  getAP()->description !!}
                            </p>
                        </div>                                             
                        <a href="{{ route('about') }}" class="btn style1">More About us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="shopping-wrap ptb-100">
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

    <section class="security-wrap ptb-100 pb-4">
        <div class="container">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 col-12" scrolls style="opacity: 1">
                    <div class="security-img-wrap fadeInBlockLeft left">
                        <img style="border-radius: 20px"
                            src="{{ asset('frontend') }}/assets/img/{{ getSP()->img }}"
                            alt="Image" />
                    </div>
                </div>
                <div class="col-lg-6 col-12" scrolls style="opacity: 1">
                    <div class="security-content fadeInBlockRight right">
                        <div class="content-title style1">
                            <h2>{{ getSP()->title }}</h2>
                            <p style="text-align: justify;">
                                {{ getSP()->description }}
                            </p>
                        </div>
                        {{-- <div class="feature-item-wrap">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <img src="{{ asset('frontend') }}/assets/img/feature/secure-tr.png" alt="Image" />
                                </div>
                                <div class="feature-text">
                                    <h3>Pay Online Securely</h3>
                                    <p>
                                        Vestibulum ac diam sit amet quam vehicula elemen tum sed
                                        sit amet dui praesent sapien pellen tesque .
                                    </p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <img src="{{ asset('frontend') }}/assets/img/feature/currency-exchange.png"
                                        alt="Image" />
                                </div>
                                <div class="feature-text">
                                    <h3>Convert Your Money In Seconds</h3>
                                    <p>
                                        Vestibulum ac diam sit amet quam vehicula elemen tum sed
                                        sit amet dui praesent sapien pellen tesque.
                                    </p>
                                </div>
                            </div>
                        </div> --}}
                      
                    </div>
                </div>
               
               
                
            </div>
        </div>
    </section>

   
    

    {{-- <section class="blog-wrap ptb-100 bg-concrete">
        <div class="container">
            <div class="section-title style1 text-center mb-40">              
                <h2>Our Latest Meida Coverage</h2>
                <span>POCKET media releases on new services, events, achievements, exclusive interviews, columns, features, etc.</span>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="blog-card style1">
                        <div class="blog-img">
                            <img src="{{ asset('frontend') }}/assets/img/blog/blog-7.jpg" alt="Image" />
                        </div>
                        <div class="blog-info">
                            <h3>
                                <a href="blog-details-right-sidebar.html">What Consumer Expect From Commercial Loan</a>
                            </h3>
                            <ul class="blog-metainfo list-style">
                                <li>
                                    <i class="flaticon-user-1"></i>
                                    <a href="posts-by-author.html">Reanne Carnation</a>
                                </li>
                                <li><i class="flaticon-calendar"></i>02 Jan, 2022</li>
                            </ul>
                            <p>
                                It is a long established fact that lorem will be when
                                looking as it sito.
                            </p>
                            <a href="blog-details-right-sidebar.html" class="link style1">Read More
                                <i class="flaticon-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="blog-card style1">
                        <div class="blog-img">
                            <img src="{{ asset('frontend') }}/assets/img/blog/blog-2.jpg" alt="Image" />
                        </div>
                        <div class="blog-info">
                            <h3>
                                <a href="blog-details-right-sidebar.html">NSI Bank Will Close Their ATM From Tomorrow</a>
                            </h3>
                            <ul class="blog-metainfo list-style">
                                <li>
                                    <i class="flaticon-user-1"></i>
                                    <a href="posts-by-author.html">Tony Stark</a>
                                </li>
                                <li><i class="flaticon-calendar"></i>15 Dec, 2021</li>
                            </ul>
                            <p>
                                It is a long established fact that lorem will be when
                                looking as it sito.
                            </p>
                            <a href="blog-details-right-sidebar.html" class="link style1">Read More
                                <i class="flaticon-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="blog-card style1">
                        <div class="blog-img">
                            <img src="{{ asset('frontend') }}/assets/img/blog/blog-3.jpg" alt="Image" />
                        </div>
                        <div class="blog-info">
                            <h3>
                                <a href="blog-details-right-sidebar.html">The Fedaral Bank Appoints New Director To
                                    Board</a>
                            </h3>
                            <ul class="blog-metainfo list-style">
                                <li>
                                    <i class="flaticon-user-1"></i>
                                    <a href="posts-by-author.html">Phil Heath</a>
                                </li>
                                <li><i class="flaticon-calendar"></i>12 Dec, 2021</li>
                            </ul>
                            <p>
                                It is a long established fact that lorem will be when
                                looking as it sito.
                            </p>
                            <a href="blog-details-right-sidebar.html" class="link style1">Read More
                                <i class="flaticon-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
