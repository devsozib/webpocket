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
    </style>
    <div class="content-wrapper">
        <div class="breadcrumb-wrap bg-spring">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-8 col-sm-8">
                        <div class="breadcrumb-title">
                            <h2>Offers</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li>
                                    <a href="{{route('index')}}">Home </a>
                                </li>
                                <li>Offers</li>
                            </ul>
                        </div>
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
            @foreach ($offers as $item)
                <div class="col-md-4 col-lg-4 col-sm-12  mt-2 mb-2">
                    <div data-v-0291216d="" class="offer-card">
                        <div data-v-0291216d="" class="offer-card-body">
                            <img style="border-radius:5px;"
                                src="{{ asset('frontend/assets/img/offer/' . $item->thumb_image) }}" alt="">
                        </div>
                        <div data-v-0291216d="" class="offer-card-footer text-center">
                            <a data-v-0291216d="" href="javascript:void(0)" class="btn style1">View
                                offer</a>
                            <!---->
                        </div>
                        <!---->
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
