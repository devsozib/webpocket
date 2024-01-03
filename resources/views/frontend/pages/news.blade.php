@extends('frontend.layouts.main')
@section('content')
<style>
    .offer-card-body img {
        width: 207px;
        margin-top: 73px;
        max-width: 100%;
        height: auto;
    }
   p {
     text-align: center!important;
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
                    <div class="text-center ">
                        <strong class="border-bottom" style="font-size:20px">News</strong> <br> <h1>MEDIA COVERAGE.</h1>
                        <p>POCKET media releases on new services, events, achievements, exclusive interviews, columns, features, etc.</p>
                    </div>
                      
                    
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">                
                <div class="col-6 col-md-4 col-lg-4 col-sm-6 mt-2 mb-2">
                    <div data-v-0291216d="" class="offer-card mission-card style1">
                        <div data-v-0291216d="" class="offer-card-body">
                            <a href="https://www.bd-pratidin.com/economy/2023/05/18/885981" target="_blank">
                                <img style="border-radius:5px;" src="{{ asset('frontend/assets/img/news/bp.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                    <div class="col-6 col-md-4 col-lg-4 col-sm-6 mt-2 mb-2">
                        <div data-v-0291216d="" class="offer-card mission-card style1">
                            <div data-v-0291216d="" class="offer-card-body">
                                <a href="https://www.daily-sun.com/post/690074/ABG-Technologies-gets-ewallet-licence" target="_blank">
                                <img style="border-radius:5px;"
                                    src="{{ asset('frontend/assets/img/news/ds.png') }}" alt="">
                                </a>
                            </div>                                                       
                        </div>
                    </div> 
                    <div class="col-6 col-md-4 col-lg-4 col-sm-6 mt-2 mb-2">
                        <div data-v-0291216d="" class="offer-card">
                            <div data-v-0291216d="" class="offer-card-body mission-card style1">
                                <a href="https://www.banglanews24.com/economics-business/news/bd/996550.details" target="_blank">
                                <img style="border-radius:5px;"
                                    src="{{ asset('frontend/assets/img/news/bn.jpg') }}" alt="">
                                </a>
                            </div>                                                       
                        </div>
                    </div>     
                    <div class="col-6 col-md-4 col-lg-4 col-sm-6 mt-2 mb-2">
                        <div data-v-0291216d="" class="offer-card">
                            <div data-v-0291216d="" class="offer-card-body mission-card style1">
                                <a href="https://www.deshrupantor.com/business-print/2023/05/19/426499" target="_blank">
                                <img style="border-radius:5px;"
                                    src="{{ asset('frontend/assets/img/news/dr.png') }}"  alt="">
                                </a>
                            </div>                                                       
                        </div>
                    </div> 
                    <div class="col-6 col-md-4 col-lg-4 col-sm-6 mt-2 mb-2">
                        <div data-v-0291216d="" class="offer-card">
                            <div data-v-0291216d="" class="offer-card-body mission-card style1" >
                                <a href="https://www.thedailystar.net/business/news/abg-technologies-gets-payment-service-provider-licence-3323476" target="_blank">
                                <img style="border-radius:5px;"
                                    src="{{ asset('frontend/assets/img/news/dstar.svg') }}" alt="">
                                </a>
                            </div>                                                       
                        </div>
                    </div> 
                    <div class="col-6 col-md-4 col-lg-4 col-sm-6 mt-2 mb-2">
                        <div data-v-0291216d="" class="offer-card">
                            <div data-v-0291216d="" class="offer-card-body mission-card style1">
                                <a href="https://www.risingbd.com/amp/news/504782" target="_blank">
                                <img style="border-radius:5px;"
                                    src="{{ asset('frontend/assets/img/news/rb.png') }}"  alt="">
                                </a>
                            </div>                                                       
                        </div>
                    </div>           
                    <div class="col-6 col-md-4 col-lg-4 col-sm-6 mt-2 mb-2">
                        <div data-v-0291216d="" class="offer-card">
                            <div data-v-0291216d="" class="offer-card-body mission-card style1">
                                <a href="https://sunbd24.com/261590/" target="_blank">
                                <img style="border-radius:5px;"
                                    src="{{ asset('frontend/assets/img/news/sb24.png') }}"  alt="">
                                </a>
                            </div>                                                       
                        </div>
                    </div> 
                    <div class="col-6 col-md-4 col-lg-4 col-sm-6 mt-2 mb-2">
                        <div data-v-0291216d="" class="offer-card">
                            <div data-v-0291216d="" class="offer-card-body mission-card style1">
                                <a href="https://businesspostbd.com/back/abg-technologies-gets-psp-licence-for-POCKET-2023-05-19" target="_blank" >
                                <img style="border-radius:5px;"
                                    src="{{ asset('frontend/assets/img/news/bbp.png') }}" alt="">
                                </a>
                            </div>                                                       
                        </div>
                    </div> 
                    <div class="col-6 col-md-4 col-lg-4 col-sm-6 mt-2 mb-2">
                        <div data-v-0291216d="" class="offer-card">
                            <div data-v-0291216d="" class="offer-card-body mission-card style1">
                                <a href="https://businessbangladesh.com.bd/article/304715" target="_blank">
                                <img style="border-radius:5px;"
                                    src="{{ asset('frontend/assets/img/news/bb.png') }}"  alt="">
                                </a>
                            </div>                                                       
                        </div>
                    </div>       
                    <div class="col-6 col-md-4 col-lg-4 col-sm-6 mt-2 mb-2">
                        <div data-v-0291216d="" class="offer-card">
                            <div data-v-0291216d="" class="offer-card-body mission-card style1">
                                <a href="https://www.jagonews24.com/economy/news/855346" target="_blank">
                                <img style="border-radius:5px;"
                                    src="{{ asset('frontend/assets/img/news/jn.png') }}"  alt="">
                                </a>
                            </div>                                                       
                        </div>
                    </div> 
                    <div class="col-6 col-md-4 col-lg-4 col-sm-6 mt-2 mb-2">
                        <div data-v-0291216d="" class="offer-card">
                            <div data-v-0291216d="" class="offer-card-body mission-card style1">
                                <a href="https://www.daily-sun.com/post/690074/ABG-Technologies-gets-ewallet-licence" target="_blank">
                                <img style="border-radius:5px;"
                                    src="{{ asset('frontend/assets/img/news/ds.png') }}" alt="">
                                </a>
                            </div>                                                       
                        </div>
                    </div> 
                    <div class="col-6 col-md-4 col-lg-4 col-sm-6 mt-2 mb-2">
                        <div data-v-0291216d="" class="offer-card">
                            <div data-v-0291216d="" class="offer-card-body mission-card style1">
                                <a href="https://www.sonalinews.com/m/economy/news/198856" target="_blank">
                                <img style="border-radius:5px;"
                                    src="{{ asset('frontend/assets/img/news/sn.png') }}"  alt="">
                                </a>
                            </div>                                                       
                        </div>
                    </div>                                             
            </div>
    
        </div>

    


    </div>
@endsection
