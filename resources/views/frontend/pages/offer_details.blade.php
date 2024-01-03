@extends('frontend.layouts.main')
@section('content')
    <style>
        .textCard[data-v-b6d51246] {
            -webkit-backdrop-filter: blur(62px);
            backdrop-filter: blur(62px);
            background: linear-gradient(0deg, #AF9252 0%, #E9D298 100%);
            border: 1px solid hsla(0, 0%, 100%, .2);
            border-radius: 26px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, .15);
            font-size: 15px;
            margin-top: 35px;
            padding: 22px 26px;
            color: #08281C;
        }

        tbody,
        td,
        tfoot,
        th,
        thead,
        tr {
            border-color: inherit;
            border-style: solid;
            border-width: 2px;
        }
    </style>
    <div class="content-wrapper">
        <div class="breadcrumb-wrap bg-spring">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="breadcrumb-img">
                            <img style="border-radius: 23px; box-shadow: #fffaeb 3px 4px 8px); width:500px"
                                src="{{ url('frontend/assets/img/offer/', $offer->thumb_image) }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @if ($offer->offer)
                    <div class="col-md-6 col-lg-4 col-sm-12 m-auto">
                        <div data-v-b6d51246="" style="width:280px; height: 180px" class="textCard container mb-3">
                            <div data-v-b6d51246="" class="py-2">
                                <h3 class="text-center" style="color: #08281C">Offer</h3>
                                <h5 class="text-center" style="color: #08281C">{{ $offer->offer }}</h5>
                            </div>
                        </div>
                    </div>
                @endif
                @if ($offer->validity)
                    <div class="col-md-6 col-lg-4 col-sm-12 m-auto">
                        <div data-v-b6d51246="" style="width:280px; height: 180px" class="textCard container mb-3">
                            <div data-v-b6d51246="" class="py-2">
                                <h3 class="text-center" style="color: #08281C">Validity</h3>
                                <h5 class="text-center" style="color: #08281C">
                                    {{ \Carbon\Carbon::parse($offer->validity)->isoFormat('MMM Do YYYY') }}</h5>
                            </div>
                        </div>
                    </div>
                @endif
                @if ($offer->can_avail)
                    <div class="col-md-4 col-lg-4 col-sm-12 m-auto">
                        <div data-v-b6d51246="" style="width:280px; height: 180px" class="textCard container mb-3">
                            <div data-v-b6d51246="" class="py-2">
                                <h3 class="text-center" style="color: #08281C">Can Avail</h3>
                                <h5 class="text-center" style="color: #08281C">{{ $offer->can_avail }}</h5>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>

        <div class="textCard-inner">
            <div class="section-heading">
                <h2 class="text-center">{{ $offer->title }}</h2>
                <div class="container text-center">
                    <h5>{{ $offer->offer_description }}</h5>
                </div>
            </div>
        </div>

        @if ($offer->campaign_details)
            @if ($offer->campaign_details != null)
                <div data-v-b6d51246="" class="textCard container mb-3">
                    <div data-v-b6d51246="">
                        <h3 class="text-center" style="color: #08281C">Campaign Details</h3>

                        {!! $offer->campaign_details !!}
                    </div>
                </div>
            @endif
        @endif
    </div>
    </div>
@endsection
