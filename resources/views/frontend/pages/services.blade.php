@extends('frontend.layouts.main')
@section('content')
<style>
    .textCard[data-v-b6d51246] {    
        margin-top: 1.5rem;
        padding: 22px 22px!important;
    }
</style>
    <div class="content-wrapper">
        <div class="breadcrumb-wrap bg-spring">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-8 col-sm-8">
                        <div class="breadcrumb-title">
                            <h2>{{ $smenu->display_name }}</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li>
                                    <a href="{{ url('/') }}">Home</a>
                                </li>
                                <li>{{ $smenu->display_name }} page</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-4 col-sm-4 xs-none">
                        <div class="breadcrumb-img">
                            @if ($breadcrumb)
                                @if ($breadcrumb->image != null)
                                    <img src="{{ url('frontend/assets/img/breadcrumb/', $breadcrumb->image) }}"
                                        alt="Image">
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="textCard-inner">
            <div class="section-heading">
                <h2 class="text-center">
                    @if($breadcrumb)
                      {{ $breadcrumb->title }}
                    @endif
                </h2>
            </div>
        </div>
        @if ($tutorials > 0)
            <div id="app">
                <tutorial-component :menu_id="{{ json_encode($smenu->menu_id) }}" :sub_menu_id="{{ json_encode($smenu->id) }}">
                </tutorial-component>
            </div>
        @endif
       
        @if ($breadcrumb)
            @if ($breadcrumb->description != null)
                <div data-v-b6d51246="" class="textCard container mb-4">
                    <div style="text-align: justify" data-v-b6d51246="">
                        {!! $breadcrumb->description !!}
                    </div>
                </div>
            @endif
        @endif
    </div>
    </div>
@endsection
@vite('resources/js/app.js')
